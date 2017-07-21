//isi detail 1
// $(document).ready(function(){
//    $("#details1").click(function(){
//      if (document.getElementById('isidetail1').style.display=="none") {
//        document.getElementById('isidetail1').style.display="block";
//
//      }else {
//        document.getElementById('isidetail1').style.display="none";
//
//      }
//    });
// });

// js buat button
$("#main").click(function() {
  $("#mini-fab").toggleClass('hidden');
});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
$.material.init();
