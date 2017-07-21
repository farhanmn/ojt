$("#main").click(function() {
  $("#mini-fab").toggleClass('hidden');
});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
$.material.init();

selectFare('0','1','JT-0-14','Q');
