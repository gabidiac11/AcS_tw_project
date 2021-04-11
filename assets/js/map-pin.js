import "./../packages/olmap/build/ol.js";

var center = [-5639523.95, -3501274.52];

var layers = [
  new ol.layer.Tile({
    source: new ol.source.OSM(),
  }),
  new ol.layer.Tile({
    source: new ol.source.OSM({
      url: "https://tile.openstreetmap.be/osmbe/{z}/{x}/{y}.png",
      attributions: [
        ol.source.OSM.ATTRIBUTION,
        'Tiles courtesy of <a href="https://geo6.be/">GEO-6</a>',
      ],
      maxZoom: 18,
    }),
  }),
];
var attribution = new ol.control.Attribution({
  collapsible: false,
});
var map = new ol.Map({
  controls: ol.control.defaults({ attribution: false }).extend([attribution]),
  layers: layers,
  target: "map",
  view: new ol.View({
    center: ol.proj.fromLonLat([4.35247, 50.84673]),
    zoom: 4,
  }),
});

var layer = new ol.layer.Vector({
  source: new ol.source.Vector({
    features: [
      new ol.Feature({
        geometry: new ol.geom.Point(ol.proj.fromLonLat([4.35247, 50.84673])),
      }),
      new ol.Feature({
        geometry: new ol.geom.Point(ol.proj.fromLonLat([5.35247, 50.84673])),
      }),
      new ol.Feature({
        geometry: new ol.geom.Point(ol.proj.fromLonLat([5.35247, 56.84673])),
      }),
    ],
  }),
});
map.addLayer(layer);

var container = document.getElementById("popup");
var content = document.getElementById("popup-content");
var closer = document.getElementById("popup-closer");

var overlay = new ol.Overlay({
  element: container,
  autoPan: true,
  autoPanAnimation: {
    duration: 250,
  },
});
map.addOverlay(overlay);

closer.onclick = function () {
  overlay.setPosition(undefined);
  closer.blur();
  return false;
};

map.on("singleclick", function (event) {
  console.log("click");
  if (map.hasFeatureAtPixel(event.pixel) === true) {
    var coordinate = event.coordinate;

    content.innerHTML = "<b> Accident #1 </b><br /> 30 May 1987.";
    overlay.setPosition(coordinate);
  } else {
    overlay.setPosition(undefined);
    closer.blur();
  }
});
