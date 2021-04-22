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

// //   buat munculin login
//   $(".login").click(()=>{
//     $("#popup-login").show();
//   });

// //   buat munculin register
//     $(".register").click(()=>{
//       $("#popup-register").show();
//     });

(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
  })()