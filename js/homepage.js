// $(document).ready(function () {
//     $("#post-content").click(function () {
//       $("#popup-post-content").toggle();
//     });
//   });

  $("#post-content").click(()=>{
    $("#post-content").hide();
    $("#popup-post-content").show();
  });
  
  $("#cancel-post-article").click(()=>{
    $("#post-content").show();
    $("#popup-post-content").hide();
  });