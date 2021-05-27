/**
 * has Chart.js as dependency
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
      loader: "[loader]"
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
        .then((chartPayload) => {
          this.chartPayload = chartPayload;
          this.render();
        })
        .catch((error) => {})
        .finally(() => {
          this.setIsFetching(false);
        });
    };

    this.init();
  }
}
