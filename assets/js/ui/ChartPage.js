/**
 * has Chart.js as dependency
 * has canvas2svg.js as dependency
 */

const defaultChartData = {
  type: "pie",
  data: {
    labels: ["#1", "#2", "#3"],
    datasets: [
      {
        label: "# of Votes",
        data: [12, 19, 50],
        backgroundColor: [
          "rgba(255, 99, 132, 0.2)",
          "rgba(54, 162, 235, 0.2)",
          "rgba(255, 206, 86, 0.2)",
          "rgba(75, 192, 192, 0.2)",
          "rgba(153, 102, 255, 0.2)",
          "rgba(255, 159, 64, 0.2)",
        ],
        borderColor: [
          "rgba(255, 99, 132, 1)",
          "rgba(54, 162, 235, 1)",
          "rgba(255, 206, 86, 1)",
          "rgba(75, 192, 192, 1)",
          "rgba(153, 102, 255, 1)",
          "rgba(255, 159, 64, 1)",
        ],
        borderWidth: 1,
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
};

class ChartPage {
  constructor(props) {
    this.page = props.page;
    this.sourcePathname = props.sourcePathname;

    this.selectors = {
      container: `#chart-wrapper`,
      canvas: "canvas",
      loader: "[loader]",
      export: "[chart-export-btn]",
      exportTypeAttr: "export-type",
    };

    this.containerNode = document.querySelector(this.selectors.container);
    this.loaderNode = this.containerNode.querySelector(this.selectors.loader);
    this.canvasNode = this.containerNode.querySelector(this.selectors.canvas);

    this.chart = null;
    this.chartPayload = JSON.parse(JSON.stringify(defaultChartData));

    this.render = () => {
      this.chart = new Chart(
        this.canvasNode.getContext("2d"),
        this.chartPayload
      );
    };

    this.setIsFetching = (value) => {
      this.isFetching = value;

      this.loaderNode.style.display = !value ? "none" : "";
    };

    this.onResponse = (chartPayload) => {
      this.chartPayload = chartPayload;
      this.render();
    }

    this.init = () => {
      this.setIsFetching(true);

      return fetch(`${window.BASE_URL}${this.sourcePathname}`)
        .then((response) => {
          if (response.ok) {
            return response.json();
          }

          return response.json().then((data) => {
            throw data;
          });
        })
        .then(this.onResponse)
        .catch((error) => {})
        .finally(() => {
          this.setIsFetching(false);
        });
    };

    /**
     * give the body background color to the canvas
     * https://stackoverflow.com/questions/50104437/set-background-color-to-save-canvas-chart
     * @param {*} canvas 
     */
    this.fillCanvasBackground = (canvas, color) => {
      // Get the 2D drawing context from the provided canvas.
      const context = canvas.getContext('2d');
      context.save();
      context.globalCompositeOperation = 'destination-over';
    
      context.fillStyle = color;
      context.fillRect(0, 0, canvas.width, canvas.height);

      context.restore();
    }

    this.prepareCanvasForExport = () => {
      this.fillCanvasBackground(this.canvasNode, "#2b2e4a");
    }

    this.exportCsv = () => {
      const link = `${window.BASE_URL}charts/exportCsv?page=${this.page}`;
      window.open(link, '_blank');
    };

    this.exportWebp = () => {
      this.prepareCanvasForExport();

      const webp = this.canvasNode.toDataURL("image/webp");
      var a = document.createElement("a"); //Create <a>
      a.href = webp; //Image Base64 Goes here
      a.download = "Image.webp"; //File name Here
      a.click(); //Downloaded file
    };

    this.exportSvg = () => {
      this.prepareCanvasForExport();

      const ctx = new C2S(this.canvasNode.width, this.canvasNode.height);
      ctx.drawImage(this.canvasNode, 0, 0);
      const mySerializedSVG = ctx.getSerializedSvg(); //true here, if you need to convert named to numbered entities.

      const a = document.createElement("a"); //Create <a>
      a.href = "data:image/svg+xml;utf8," + mySerializedSVG; //Image Base64 Goes here
      a.download = "Image.svg"; //File name Here
      a.click(); //Downloaded file
    };

    Array.prototype.forEach.call(
      document.querySelectorAll(this.selectors.export),
      (btn) => {
        btn.addEventListener("click", (event) => {
          switch (event.target.getAttribute(this.selectors.exportTypeAttr)) {
            case "Csv":
              this.exportCsv();
              break;
            case "Webp":
              this.exportWebp();
              break;
            case "Svg":
              this.exportSvg();
              break;
          }
        });
      }
    );
  }
}

/**
 * chart data based on a select 
 * when something is selected the url receives the value in GET and the page is refreshed to apply the selection
 */
class ChartPageSelection extends ChartPage {
  constructor(props) {
    super(props);
    this.selectedKey = props.selectedKey;
    this.selectorsChild = {
       select: `#select-type`
    };

    this.selectNode = document.querySelector(this.selectorsChild.select);

    this.render = () => {
      this.chart = new Chart(
        this.canvasNode.getContext("2d"),
        this.chartPayload
      );

      this.selectNode.style.display = "";
    };

    this.onResponse = (chartPayload) => {
      console.log(this.selectedKey)
      if(chartPayload[this.selectedKey]) {
        this.chartPayload = chartPayload[this.selectedKey];
      } else {
        this.selectedKey = 'Overall';

        this.chartPayload = chartPayload['Overall'];
      }
      this.render();
    }

    this.exportCsv = () => {
      const link = `${window.BASE_URL}charts/exportCsv?page=${this.page}&s=${this.selectedKey}`;
      window.open(link, '_blank');
    };

    this.selectNode.addEventListener("change", () => {
      this.selectedKey = this.selectNode.value;
      window.location.replace(`${window.location.origin}${window.location.pathname}?s=${this.selectedKey}`);
    });
  }
}
