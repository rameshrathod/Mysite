
$(document).ready(function(){

    $.validator.addMethod("noSpecialChars", function(value, element) {

      return this.optional(element) || /^[a-zA-Z\w\d\_]+$/i.test(value);

  }, 
  "Special Charactes are not allowed !");  
      $("#myform").validate();
});



// Wait for the DOM to be ready
$(document).ready(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='myform']").validate({
    // Specify validation rules
 rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      uid:{
          required: true,
          minlength:5
          
          // Specify that email should be validated
          // by the built-in "email" rule
        },
        upass: {
            required: true,
            minlength:5
            
            // Specify that email should be validated
            // by the built-in "email" rule
          }   
    },
    // Specify validation error messages
messages: {
      uid: {
          required: "Please provide a User Name",
        	  minlength: "Your User Name must be at least 5 characters long"
        },
      upass: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});