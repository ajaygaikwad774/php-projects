(function($) {
  'use strict';
  $('.dropify').dropify();
})(jQuery);

 $('#aadhar').keyup(function() {
  var foo = $(this).val().split("-").join(""); // remove hyphens
  if (foo.length > 0) {
    foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
  }
  $(this).val(foo);
});
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

$(".text").on("input", function(){
  var regexp = /[^a-zA-Z]/g;
  if($(this).val().match(regexp)){
    $(this).val( $(this).val().replace(regexp,'') );
  }
});

$('.text,.address').keyup(function(){
    $(this).val($(this).val().toUpperCase());
});


