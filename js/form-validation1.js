
$(document).ready(function(){

    $.validator.addMethod("noSpecialChars", function(value, element) {

      return this.optional(element) || /^[a-zA-Z\w\d\_]+$/i.test(value);

  }, 
  "Special Charactes are not allowed !");
    
    
    $.validator.addMethod("noSpecialChars1", function(value, element) {

        return this.optional(element) || /^[a-zA-Z\w\d\_]+$/i.test(value);

    }, 
    "Special Charactes are not allowed !");
    
    $.validator.addMethod("noSpecialChars2", function(value, element) {

        return this.optional(element) || /^[a-zA-Z\w\d\_]+$/i.test(value);

    }, 
    "Special Charactes are not allowed !");
    
    $.validator.addMethod("noSpecialChars3", function(value, element) {

        return this.optional(element) || /^[a-zA-Z\w\d\_]+$/i.test(value);

    }, 
    "Special Charactes are not allowed !");
     
    
    $.validator.addMethod("noSpecialChars4", function(value, element) {

        return this.optional(element) || /[0-9{10}]+$/i.test(value);

    }, 
    " Only Numbers are allowed !");
   

    jQuery.validator.addMethod("passwordMatch", function(value, element) {
        var password = $("#password").val();
        var confirmPassword = $("#cpassword").val();
        // Check for equality with the password inputs
        if (password != confirmPassword ) {
            return false;
        } else {
            return true;
        }

    }, "Your Passwords Must Match");
  


  $("#register").validate();

});



// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='register']").validate({
    // Specify validation rules
 rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side  
      uname: {
          required: true,
          minlength:5
          
          // Specify that email should be validated
          // by the built-in "email" rule
        },
        mobNo: {
            required: true,
            minlength:10
            
            // Specify that email should be validated
            // by the built-in "email" rule
          },
        fname: {
            required: true,
            minlength:2
            
            // Specify that email should be validated
            // by the built-in "email" rule
          },
          lname: {
              required: true,
              minlength:2
              
              // Specify that email should be validated
              // by the built-in "email" rule
            },
      cap: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
      },
      pass: {
        required: true,
        minlength: 5
      },
      cpass: {
          required: true,
          minlength: 5,
         // passwordMatch: true
        },
        cap: {
            required: true
          }    
    },
    // Specify validation error messages
messages: {
      uname: {
          required: "Please provide a User Name",
        	  minlength: "Your User Name must be at least 5 characters long"
        },
        mobNo: {
            required: "Please provide a Mobile Number !",
          	  minlength: "please provide 10 digit Mobile Number !"
          },
        fname: {
            required: "Please provide a First Name",
            	minlength: "Your First Name must be at least 2 characters long"
          },
          lname: {
              required: "Please provide a Last Name",
              	minlength: "Your First Name must be at least 2 characters long"
            },
      pass: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      cpass: {
          required: "Please provide a confirm password",
          minlength: "Your confirm password must be at least 5 characters long"
         // passwordMatch: "Your Passwords Must Match"
        },
        cap: {
            required: "Please provide a captcha",
          }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});