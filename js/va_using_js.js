
function validateForm() {


	 var username = document.forms["register"]["uname"].value;
	 var fname = document.forms["register"]["fname"].value;
	 var lname = document.forms["register"]["lname"].value;
	 var password = document.forms["register"]["pass"].value;
	 var cpassword = document.forms["register"]["cpass"].value;
//User Name validation starts here
	 if (username == null || username == "") {
	        alert("username must be filled out");
	        document.forms["register"]["uname"].focus();
	        return false;
	    }
	    var uflag=0;
	 var iChars = "!@#$%^&;*()+=-[]\\\',./{}|\":?";
	 for (var i = 0; i < document.register.uname.value.length; i++) {
	     if (iChars.indexOf(document.register.uname.value.charAt(i)) != -1) {

	    		uflag++;
	    		
	         }
	     }
     if(uflag==1){ 
         uflag=0;
         alert ("The user name has special characters. \nSpecial Characters are not allowed");
         document.forms["register"]["uname"].focus();
     return false;
     }
     var u = username.charAt(0);
	    if(!isNaN(u))
		 {
			 alert("username do not start with number");
			 document.forms["register"]["uname"].focus();
			 return false;
		 }

	    var ul = username.length;
	    if(ul<=4)
		 {
			 alert("username must be greather than 4 ");
			 document.forms["register"]["uname"].focus();
			 return false;
		 }
   //User Name validation starts here
   
   
   //First Name validation starts here
	 if (fname == null || fname == "") {
	        alert("first name must be filled out");
	        document.forms["register"]["fname"].focus();
	        return false;
	    }
	 var fflag=0;
	 for (var i = 0; i < document.register.fname.value.length; i++) {
	     if (iChars.indexOf(document.register.fname.value.charAt(i)) != -1) {
	    		fflag++;
	    		
	         }
	     }
     if(fflag==1){ 
    	 fflag=0;
         alert ("The First name has special characters. \nSpecial Characters are not allowed");
         document.forms["register"]["fname"].focus();
     return false;
     }
     
     if(!isNaN(fname))
	 {
		 alert("first name do not have numerics");
		 document.forms["register"]["fname"].focus();
		 return false;
	 }
     var unl = fname.length;
	    if(unl<=1)
		 {
			 alert("First Name must be greather than 1 ");
			 document.forms["register"]["fname"].focus();
			 return false;
		 }
   //First Name validation ends here
	    
	    //last Name validation starts here
	 if (lname == null || lname == "") {
	        alert("last name must be filled out");
	        document.forms["register"]["lname"].focus();
	        return false;
	    }


	 var lflag=0;
	 for (var i = 0; i < document.register.lname.value.length; i++) {
	     if (iChars.indexOf(document.register.lname.value.charAt(i)) != -1) {
	    		lflag++;
	    		
	         }
	     }
     if(lflag==1){ 
    	 fflag=0;
         alert ("The last name has special characters. \nSpecial Characters are not allowed");
         document.forms["register"]["lname"].focus();
     return false;
     }

     if(!isNaN(lname))
	 {
		 alert("last name do not have numerics");
		 document.forms["register"]["lname"].focus();
		 return false;
	 }
     var ulnl = lname.length;
	    if(ulnl<=1)
		 {
			 alert("Last Name must be greather than 1 ");
			 document.forms["register"]["lname"].focus();
			 return false;
		 }
   //Last Name validation ends here
   //password validation starts here
	    if (password == null || password == "") {
	        alert("password must be filled out");
	        document.forms["register"]["pass"].focus();
	        return false;
	    }
	    if (cpassword == null || cpassword == "") {
	        alert("confirm password must be filled out");
	        document.forms["register"]["cpass"].focus();
	        return false;
	    }
	    var pl = password.length;
	    var cpl = password.length;
	    
	    if(pl<=4)
		 {
			 alert("password must be greather than 4 ");
			 document.forms["register"]["pass"].focus();
			 return false;
		 }
	    if(cpl<=4)
		 {
			 alert("confirm password must be greather than 4 ");
			 document.forms["register"]["cpass"].focus();
			 return false;
		 }
		 
		 if(password !=cpassword)
		 {
			 alert("password do not matched");
			 document.forms["register"]["pass"].focus();
			 return false;
			 }

		 
		//password validation ends here	 		 
	 
}


