$(document).ready(function(){
    $("#signup").click(function(){
        var name=$("#name").val();
        var institution=$("#institution").val();
        var phone=$("#phone").val();
        var address=$("#address").val();
        var email=$("#email").val();
        var password=$("#password").val();
        if(name.length ==""){
            $(".name").addClass("is-invalid");
        }else{
            $(".name").removeClass("is-invalid");
        }
        if(institution.length ==""){
            $(".institution").addClass("is-invalid");
        }else{
            $(".institution").removeClass("is-invalid");
        }
        if(phone.length ==""){
            $(".phone").addClass("is-invalid");
        }else{
            $(".phone").removeClass("is-invalid");
        }
        if(address.length ==""){
            $(".address").addClass("is-invalid");
        }else{
            $(".address").removeClass("is-invalid");
        }
        if(email.length ==""){
            $(".email").addClass("is-invalid");
        }else{
            $(".email").removeClass("is-invalid");
        }
        if(password.length ==""){
            $(".password").addClass("is-invalid");
        }else{
            $(".password").removeClass("is-invalid");
        }
        if(name.length != "" && email.length != "" && password.length != "" && phone.length != "" && address != "" && institution.length != "")
        {
            $.ajax({
                type:"POST",
                url:"usercontroller.php",
                data:{"name": name, "institution":institution, "phone":phone,"address":address, "email": email, 'password':password},
                dataType: 'JSON',
                success: function(feedback){

                    if(feedback.status === "error"){
                        $(".email").addClass("is-invalid");
                        $(".emailError").html(feedback.message);

                    }else{
                        
                        // window.location="login.php";
                        

                        alert("sign-up is successful. Now you can login to your account");
                        
                    }
                }


                
            })
        }

    })
})