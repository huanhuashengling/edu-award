$(document).ready(function() {
	$.ajaxSetup({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
 });

  $("#vision-btn").click(function() {
    alert("vision");
    $.ajax({
      type: "POST",
      url: '/vision/'+$(this).val(),
      success: function( data ) {
        console.log(data);
        $("#vision-txt").text(data);
      }
    });
  });
});