var GoogleMapsLoader = require('google-maps'); // only for common js environments

GoogleMapsLoader.KEY = 'AIzaSyDuLWcEz0A1jo3G2OCUoD0kv0exeXvMKNM'
GoogleMapsLoader.VERSION = '3.2.1'
GoogleMapsLoader.LIBRARIES = ['geometry', 'places']
module.exports = GoogleMapsLoader.load(function(google) {
    var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -34.397, lng: 150.644},
      scrollwheel: false,
      zoom: 8
    });
  });
