$(function () {

   map = new GMaps({
        div: '.manchitro',
        lat: 23.820127919611064,
        lng:  90.42395537086087,
      });

      map.addMarker({
        lat: 23.820127919611064,
        lng:  90.42395537086087,
        title: 'KidsCare Headquarters',
        click: function(e) {
          alert('We are here!');
        }
      });



});