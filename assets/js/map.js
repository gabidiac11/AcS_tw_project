import "./../packages/olmap/build/ol.js";

var wmsSource = new ol.source.ImageWMS({
  url: "https://ahocevar.com/geoserver/wms",
  params: { LAYERS: "topp:states" },
  ratio: 1,
  serverType: "geoserver",
});

var updateLegend = function (resolution) {
  var graphicUrl = wmsSource.getLegendUrl(resolution);
  var img = document.getElementById("legend");
  img.src = graphicUrl;
};

var layers = [
  new ol.layer.Tile({
    source: new ol.source.OSM(),
  }),
  new ol.layer.Image({
    extent: [-13884991, 2870341, -7455066, 6338219],
    source: wmsSource,
  }),
];

var map = new ol.Map({
  layers: layers,
  target: "map",
  view: new ol.View({
    center: [-10997148, 4569099],
    zoom: 4,
  }),
});

// Initial legend
var resolution = map.getView().getResolution();
updateLegend(resolution);

// Update the legend when the resolution changes
map.getView().on("change:resolution", function (event) {
  var resolution = event.target.getResolution();
  updateLegend(resolution);
});


