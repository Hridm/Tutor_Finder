var xhttp;
function loadtutor(id){
	//document.getElementById("updateName").value = id;	
	
			  xhttp = new XMLHttpRequest();
			  xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {

			    	var data= JSON.parse(this.responseText);
			    	document.getElementById("updateName").value = data.name;
			    	document.getElementById("updateid").value = data.id;
			    	document.getElementById("updateemail").value = data.email;
			    	document.getElementById("updatemobile").value = data.phone;
			    	document.getElementById("updatesubject").value = data.subject;
			    	document.getElementById("updateday").value = data.day;
			    	//console.log(data);



			    }
			  };

			  //var str="SELECT * FROM `tutor` WHERE id="+id;
			  xhttp.open("GET", "../Class/Tutor_Ajax.php?q="+id, true);
			  xhttp.send();
         }


     function changemode(){
     	document.getElementById("adminname").readOnly = false;
     	document.getElementById("adminemail").readOnly = false;
     	document.getElementById("adminphone").readOnly = false;
     }
     function showpass() {
		  var x = document.getElementById("pass1");
		  var y = document.getElementById("pass2");

		  
		  if (x.type === "password") {
		    x.type = "text";
		  } else {
		    x.type = "password";
		  }
		  		  if (y.type === "password") {
		    y.type = "text";
		  } else {
		    y.type = "password";
		  }


}
