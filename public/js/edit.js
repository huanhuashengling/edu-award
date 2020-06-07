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

  $("#del-award-btn").click(function(e) {
    if (confirm("确定删除当前荣誉吗？（请注意删除之后上传的图片保存的数据都清空。）")) {
      $.ajax({
        type: "get",
        url: '/award/delete',
        data: {'awardsId' : $("#awards-id").val()},
        success: function( data ) {
          console.log(data);
          window.location.href = "/award/list";
        }
      });
    }
  });
});