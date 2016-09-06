
function validateForm() {
    var username = document.forms["myform"]["uid"].value;
    var password = document.forms["myform"]["upass"].value;


     if (username == null || username == "") {
        alert("username must be filled out");
        document.forms["myform"]["uid"].focus();
        return false;
    }
     
    if (password == null || password == "") {
        alert("password must be filled out");
        document.forms["myform"]["upass"].focus();
        return false;
    }
    var res = username.charAt(0);


    if(!isNaN(res))
	 {
		 alert("username do not start with number");
		 document.forms["myform"]["uid"].focus();
		 return false;
	 }


    var ul = username.length;
    var pl = password.length;
    if(ul<=4)
	 {
		 alert("username must be greather than 4 ");
		 document.forms["myform"]["uid"].focus();
		 return false;
	 }
    var ul = username.length;
    if(pl<=4)
	 {
		 alert("password must be greather than 4 ");
		 document.forms["myform"]["upass"].focus();
		 return false;
	 }
	 
}
