class ModalMapPreview {
  constructor() {
    this.SELECTORS = {
      MODAL_ROOT: "#modal-map",
      MODAL_CLOSE: "[modal-close]",
      exportWebpSelector: `[modal-export-webp]`,
      exportSvgSelector: `[modal-export-svg]`,
    };

    this.modalNode = document.querySelector(this.SELECTORS.MODAL_ROOT);

    this.hideModal = () => {
      this.modalNode.setAttribute("show", "false");
      document.body.style.overflow = "";
      document.body.style.height = "";
    };

    this.showModal = () => {
      this.modalNode.setAttribute("show", "true");
      document.body.style.overflow = "hidden";
      document.body.style.height = "100vh";
    };

    this.layerObjectList = {};
    this.previousLayers = {};
    this.loaded = false;

    this.startMap = () => {
      /**
       * https://gist.github.com/anthonyeden/69c6eee056d61fcaaad9159058952309
       *
       * OSM & OL example code provided by https://mediarealm.com.au/
       */
      let mapDefaultZoom = 4;

      let source = new ol.source.OSM({
        url: "https://a.tile.openstreetmap.org/{z}/{x}/{y}.png",
      });

      this.map = new ol.Map({
        target: "map2",
        layers: [
          new ol.layer.Tile({
            source,
          }),
        ],
        view: new ol.View({
          center: ol.proj.fromLonLat([-103.373401, 25.347717]),
          zoom: mapDefaultZoom,
        }),
      });

      source.on("tileloadend", (event) => {
        if (!this.loaded) {
          this.loaded = true;
          this.render();
        }
      });

      
    };

    this.startMap();

    this.render = () => {
      // return;
      /** clean up the previous ones */
      this.map
        .getLayers()
        .getArray()
        .filter((layer) => this.previousLayers[layer.get("name")])
        .forEach((layer) => this.map.removeLayer(layer));

      Object.entries(this.layerObjectList).forEach(([layerName, content]) => {
        this.map.addLayer(
          new ol.layer.Vector({
            source: new ol.source.Vector({
              features: [
                new ol.Feature({
                  geometry: new ol.geom.Point(
                    ol.proj.transform(
                      [parseFloat(content.long), parseFloat(content.lat)],
                      "EPSG:4326",
                      "EPSG:3857"
                    )
                  ),
                }),
              ],
            }),
            style: new ol.style.Style({
              image: new ol.style.Icon({
                anchor: [0.5, 0.5],
                anchorXUnits: "fraction",
                anchorYUnits: "fraction",
                src: `${window.BASE_URL}assets/svg/${content.img}`,
              }),
            }),
            name: layerName,
          })
        );
      });
    };

    this.setLayers = (objs) => {
      this.previousLayers = this.layerObjectList;
      this.layerObjectList = objs;
    };

    this.exportWebp = () => {
      this.exportMap((mapCanvas) => {
        const webp = mapCanvas.toDataURL("image/webp");
        var a = document.createElement("a"); //Create <a>
        a.href = webp; //Image Base64 Goes here
        a.download = "Image.webp"; //File name Here
        a.click(); //Downloaded file
      });
    };

    /** creates a copy of the map canvas that suports exporting the layers (DOTS on the map) */
    this.exportMap = (callback) => {
      /**
       * https://openlayers.org/en/latest/examples/export-pdf.html
       */

      const map = this.map;
      var format = "a4";
      var resolution = "72";
      var dims = {
        a0: [1189, 841],
        a1: [841, 594],
        a2: [594, 420],
        a3: [420, 297],
        a4: [297, 210],
        a5: [210, 148],
      };
      var dim = dims[format];
      var width = Math.round((dim[0] * resolution) / 25.4);
      var height = Math.round((dim[1] * resolution) / 25.4);
      var size = map.getSize();
      var viewResolution = map.getView().getResolution();

      map.once("rendercomplete", function () {
        var mapCanvas = document.createElement("canvas");
        mapCanvas.width = width;
        mapCanvas.height = height;
        var mapContext = mapCanvas.getContext("2d");

        Array.prototype.forEach.call(
          document.querySelectorAll(".ol-layer canvas"),
          function (canvas) {
            if (canvas.width > 0) {
              var opacity = canvas.parentNode.style.opacity;
              mapContext.globalAlpha = opacity === "" ? 1 : Number(opacity);
              var transform = canvas.style.transform;
              // Get the transform parameters from the style's transform matrix
              var matrix = transform
                .match(/^matrix\(([^\(]*)\)$/)[1]
                .split(",")
                .map(Number);
              // Apply the transform to the export map context
              CanvasRenderingContext2D.prototype.setTransform.apply(
                mapContext,
                matrix
              );
              mapContext.drawImage(canvas, 0, 0);
            }
          }
        );
        callback(mapCanvas);
      });

      // Set print size
      var printSize = [width, height];
      map.setSize(printSize);
      var scaling = Math.min(width / size[0], height / size[1]);
      map.getView().setResolution(viewResolution / scaling);
    };

    /** sets the resolution required by the export */
    this.exportMap(() => {});

    /**
     * this function copies the map canvas context to a special "kind" of canvas where svg export is possible
     * 
     * https://www.npmjs.com/package/canvas2svg
     */
    this.exportSvg = () => {
      this.exportMap((mapCanvas) => {
        //Create a new mock canvas context. Pass in your desired width and height for your svg document.
        var ctx = new C2S(mapCanvas.width, mapCanvas.height);
        ctx.drawImage(mapCanvas, 0, 0);
        const mySerializedSVG = ctx.getSerializedSvg(); //true here, if you need to convert named to numbered entities.

        const a = document.createElement("a"); //Create <a>
        a.href = 'data:image/svg+xml;utf8,' + mySerializedSVG; //Image Base64 Goes here
        a.download = "Image.svg"; //File name Here
        a.click(); //Downloaded file
      });
    };

    this.modalNode
      .querySelector(this.SELECTORS.MODAL_CLOSE)
      .addEventListener("click", (event) => {
        this.hideModal();
      });

    this.modalNode
      .querySelector(this.SELECTORS.exportWebpSelector)
      .addEventListener(
        "click",
        (event) => {
          this.exportWebp();
        },
        false
      );

    this.modalNode
      .querySelector(this.SELECTORS.exportSvgSelector)
      .addEventListener(
        "click",
        (event) => {
          this.exportSvg();
        },
        false
      );
  }
}
