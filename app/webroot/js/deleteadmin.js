
jQuery(document).ready(function($) {
  "use strict";

  // Init the Wow plugin
    var x;
    $('.deleteit').on('click', function(e) {
      e.preventDefault();
      var myLink = this;
      console.log();
      if (confirm("¿Estas seguro que deseas borrar el registro seleccionado?") == true) {
          window.location.href = $(myLink).attr('href');
      }
    });
});
