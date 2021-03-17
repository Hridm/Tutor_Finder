$(document).ready(function(){
    $("#login").click(function(){


        var email=$("#email").val();
        var password=$("#password").val();

        var rem=document.getElementById("remember")
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

        if(email.length != "" && password.length != ""){
            if(rem.checked===true){
                var remember=$("#remember").val();
            $.ajax({
                type: 'POST', url:'loginbackend.php',
                data: {'email':email, 'password':password, 'remember':remember},
                dataType:'JSON',
                success:function(feedback){
                    if(feedback.status === "emailerror"){
                        $(".email").addClass("is-invalid");
                        $(".emailError").html(feedback.message);

                    }else if(feedback.status === "passerror"){
                        $(".password").addClass("is-invalid");
                        $(".passError").html(feedback.message);
                    }
                    else if(feedback.status === "tutorsuccess"){
                        window.location="tuitorhomepage.html";

                    }else if(feedback.status === "adminsuccess"){
                        window.location="adminhome.php";
                    }else{
                        window.location="userhome.php";
                    }

                    }





            })

        }else{
            var remember=0;
        $.ajax({
            type: 'POST', url:'loginbackend.php',
            data: {'email':email, 'password':password, 'remember':remember},
            dataType:'JSON',
            success:function(feedback){
                if(feedback.status === "emailerror"){
                    $(".email").addClass("is-invalid");
                    $(".emailError").html(feedback.message);

                }else if(feedback.status === "passerror"){
                    $(".password").addClass("is-invalid");
                    $(".passError").html(feedback.message);
                }
                else if(feedback.status === "tutorsuccess"){
                    window.location="tuitorhomepage.html";

                }else if(feedback.status === "adminsuccess"){
                    window.location="adminhome.php";
                }
                else{
                    window.location="userhome.php"
                }

                }





        })







        }
    
    
    
    
    
    
    
    
    
    }









    })
})