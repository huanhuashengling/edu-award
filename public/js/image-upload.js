$(document).ready(function() {
  $.ajaxSetup({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
 });

  // $("#input-image").fileinput({
  //   language: "zh", 
  //   // uploadUrl: "student/upload", 
  //   allowedFileExtensions: ["jpg", "jpeg", "png", "gif", "bmp"], 
  //   // uploadAsync: true
  //   overwriteInitial: true,
  //   initialPreviewShowDelete: false,
  //   initialPreviewAsData: true, // 特别重要
  // });

});