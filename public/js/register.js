var RegisterForm = (function () {
    // Login form validation
    var handleValidation = function () {
      // for more info visit the official plugin documentation:
      // http://docs.jquery.com/Plugins/Validation
      var form = $('#registerForm')
  
      form.validate({
        errorElement: 'span', // default input error message container
        errorClass: 'help-block help-block-error', // default input error message class
        focusInvalid: true, // do not focus the last invalid input
        ignore: '',  // validate all fields including form hidden input
        rules: {
          name:{
             
            required: true,
          },
          
          email: {
            required: true,
            email: true
          },
          password: {
            minlength: 2,
            required: true,
          },
          confirm_password:{
              required:true,
            equalTo:'#password',
            
          }
        },
        messages: {
           name:{
               required:"please insert name"
              
           }, 
          email: {
            required: 'メールを入力してください。',
            email: '有効なメールアドレスを入力してください。'
          },
          password:{
              required:"please insert password",

          },
          confirm_password:{
                required:'please confirm password',
                equalTo:'please same '
          }
        },
  
        highlight: function (element) { // hightlight error inputs
          $(element)
          .closest('.form-group .form-control').addClass('is-invalid') // set invalid class to the control group
        },
        unhighlight: function (element) { // revert the change done by hightlight
          $(element)
          .closest('.form-group .form-control').removeClass('is-invalid') // set invalid class to the control group
          .closest('.form-group .form-control').addClass('is-valid') // set valid class to the control group
        },
        success: function (label) {
          label
          .closest('.form-group .form-control').removeClass('is-invalid') // set success class to the control group
        }
      })
    }
  
    return {
      // main function to initiate the module
      init: function () {
        handleValidation()
      }
    }
  })()
  
  $(document).ready(function () {
    RegisterForm.init();
  });
  