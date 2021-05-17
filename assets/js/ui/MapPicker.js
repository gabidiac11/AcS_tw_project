
class MapPicker {
    constructor(props) {
        this.parentNode = props.parentNode;
        this.containerNode = props.containerNode;
        this.inputNodeLat = document.getElementById("long-input");
        this.inputNodeLon = document.getElementById("lat-input");
        this.layerName = null;

        this.mapNode = document.querySelector(`[id="map"]`);
        this.mapNode.style.width = `${window.innerWidth}px`;
        this.mapNode.style.height = `${window.innerWidth}px`;

        this.long = 0;
        this.lat = 0;

        this.parentNode.append(this.containerNode);

        this.map = null;
        this.startMap = () => {
            /**
             * https://gist.github.com/anthonyeden/69c6eee056d61fcaaad9159058952309
             *
             * OSM & OL example code provided by https://mediarealm.com.au/
             */
            let mapDefaultZoom = 1;

            let source = new ol.source.OSM({
                url: "https://a.tile.openstreetmap.org/{z}/{x}/{y}.png"
            });

            this.wait = false;
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
                    if(this.wait) {
                        return;
                    }

                    const coords = ol.proj.toLonLat(event.coordinate);
                    const lat = Number(coords[1]) || 0;
                    const lon = Number(coords[0]) || 0;
                    const locTxt = "Latitude: " + lat + " Longitude: " + lon;
                    console.log(locTxt);

                    this.setPoint(lat, lon);
                })

            this.setPoint = (lat, lng) => {
                if(this.wait) {
                    return;
                }

                this.map.getLayers().getArray()
                    .filter(layer => layer.get('name') === this.layerName)
                    .forEach(layer => this.map.removeLayer(layer));
                

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

        this.startMap();

        this.setCoordonates = (lat, long) => {
            
            if(lat === "" || long === "" || isNaN(lat) || isNaN(long)) {
                this.long = -100;
                this.lat = -100;
            } else {
                this.long = lat;
                this.lat = long;
                this.setPoint(this.lat, this.long);
            }
        }
    }
}
