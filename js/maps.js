function initialize() {
    var input = document.getElementById('searchTextField');
    new google.maps.places.Autocomplete(input);
  }
  
  google.maps.event.addDomListener(window, 'load', initialize);


  <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyByJWvJBCuJUdyw-5k1-rohTCCbGCPc65o&libraries=places&callback=initMap">
</script>

let autocomplete;
function initAutocomplete() {
  autocomplete = new google.maps.places.Autocomplete(
    document.getElementById('autcomplete'),
    {
      types: ['establishment'],
      compomentRestrictions: {'country': ['AU']},
      fields: ['place_id', 'geometry', 'name']
    }
  );
}