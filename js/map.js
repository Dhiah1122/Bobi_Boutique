mapboxgl.accessToken = 'pk.eyJ1IjoiZGhpYTExMjIiLCJhIjoiY2s4c3loZXNpMDFwcDNocGdzeWdwdGE0ciJ9.vEbWNsBm6XZa1FouClmusg';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/dhia1122/ckfygk6d108rg19o15xv9bcln',
center: [10.188026,36.818694],
zoom: 16.5
});

map.on('load', function () {
map.loadImage(
'https://upload.wikimedia.org/wikipedia/commons/7/7c/201408_cat.png',
function (error, image) {
if (error) throw error;
map.addImage('cat', image);
map.addSource('point', {
'type': 'geojson',
'data': {
'type': 'FeatureCollection',
'features': [
{
'type': 'Feature',
'geometry': {
'type': 'Point',
'coordinates': [0, 0]
}
}
]
}
});
map.addLayer({
'id': 'points',
'type': 'symbol',
'source': 'point',
'layout': {
'icon-image': 'cat',
'icon-size': 0.25
}
});
}
);
});