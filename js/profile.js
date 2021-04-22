function checkPass(){
  $('#validationCustom01, #validationCustompass').on('keyup', function () {
    if ($('#validationCustom01').val() == $('#validationCustompass').val()) {
      $('#validationCustompass').addClass('is-valid');
      return 0;
    } else 
      $('#validationCustompass').addClass('is-invalid');
      return 1;
  });
}

(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity() && checkPass() != 0) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()