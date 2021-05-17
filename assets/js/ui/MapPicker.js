
class MapPicker {
    constructor(props) {
        this.parentNode = props.parentNode;
        this.containerNode = null;
        this.inputNodeLat = null;
        this.inputNodeLon = null;
        this.layerName = null;

        if(isNaN(props.lat) || isNaN(props.long)) {
            this.long = 0;
            this.lat = 0;
        } else {
            this.long = props.lat;
            this.lat = props.long;
        }
        this.map = null;

        this.unMount = () => {
            if(this.containerNode && this.containerNode.parentNode) {
                this.containerNode.parentNode.removeChild(this.containerNode);
            }
        }

        this.render = () => {
            this.unMount();

            this.containerNode = stringToHTML(`
            <div style="width: 100%;">
                <div id="map"></div>
                <div class="latitude-long-indicator">
                    <input id="long-input" disabled value="Lat: ${this.lat}">
                    <input id="lat-input" disabled value="Long: ${this.long}">
                </div>
            </div>

            `);

            this.parentNode.append(this.containerNode);

            setTimeout(() => {
                this.inputNodeLat = document.getElementById("long-input");
                this.inputNodeLon = document.getElementById("lat-input");

                this.startMap();

                }, 400);
        }

        this.startMap = () => {
            /**
             * https://gist.github.com/anthonyeden/69c6eee056d61fcaaad9159058952309
             *
             * OSM & OL example code provided by https://mediarealm.com.au/
             */
            let mapDefaultZoom = 10;

            let source = new ol.source.OSM({
                url: "https://a.tile.openstreetmap.org/{z}/{x}/{y}.png"
            });

            source.on("tileloadend", (event) => {
                if(!this.layerName) {
                    this.setPoint(this.lat, this.long);
                }
            });

            this.map = new ol.Map({
                target: "map",
                layers: [
                    new ol.layer.Tile({
                        source
                    })
                ],
                view: new ol.View({
                    center: ol.proj.fromLonLat([this.long, this.lat]),
                    zoom: mapDefaultZoom
                })
            });



            this.map.addEventListener("click",
                /**
                 *
                 * @param {ol.MapBrowserEvent} event
                 */
                (event) => {
                    const coords = ol.proj.toLonLat(event.coordinate);
                    const lat = coords[1];
                    const lon = coords[0];
                    const locTxt = "Latitude: " + lat + " Longitude: " + lon;
                    console.log(locTxt);

                    this.setPoint(lat, lon);
                })

            this.setPoint = (lat, lng) => {
                if(this.layerName) {
                    this.map.getLayers().getArray()
                        .filter(layer => layer.get('name') === this.layerName)
                        .forEach(layer => this.map.removeLayer(layer));
                }

                this.layerName = `${Date.now()}-layer-name`;
                this.point = new ol.layer.Vector({
                    source:new ol.source.Vector({
                        features: [new ol.Feature({
                            geometry: new ol.geom.Point(ol.proj.transform([parseFloat(lng), parseFloat(lat)], 'EPSG:4326', 'EPSG:3857')),
                        })]
                    }),
                    style: new ol.style.Style({
                        image: new ol.style.Icon({
                            anchor: [0.5, 0.5],
                            anchorXUnits: "fraction",
                            anchorYUnits: "fraction",
                            src: "https://upload.wikimedia.org/wikipedia/commons/e/ec/RedDot.svg"
                        })
                    }),
                    name: this.layerName
                });
                this.map.addLayer(this.point);

                this.lat = Number(parseFloat(lng).toFixed(4));
                this.long = Number(parseFloat(lng).toFixed(4));

                this.inputNodeLon.value = `Long: ${parseFloat(lng).toFixed(4)}`;
                this.inputNodeLat.value = `Lat: ${parseFloat(lat).toFixed(4)}`;
            }
        }

    }
}
