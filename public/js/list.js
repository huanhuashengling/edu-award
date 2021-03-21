$(document).ready(function() {
	$.ajaxSetup({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
 });

  $("#vision-btn").click(function() {
    $.ajax({
      type: "POST",
      url: '/award/vision/'+$(this).val(),
      success: function( data ) {
        console.log(data);
        $("#isVisionedCheck").attr("checked", "checked");
        $("#vision-txt").text(data);
        $("#hiddenVisionTxt").val(data);
      }
    });
  });

  $('.img-container').mouseover(function () {
    $('.overlay').show();
  }).mouseout(function () {
      $('.overlay').hide();
  });

});//<a href="{{ route('edit', $award->id) }}"></a>