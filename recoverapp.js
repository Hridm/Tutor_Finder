$(document).ready(function(){
    $("#recover").click(function(){
        var name=$("#name").val();
        var email=$("#email").val();
        
        if(email.length ==""){
            $(".email").addClass("is-invalid");
        }else{
            $(".email").removeClass("is-invalid");
        }
        if(name.length ==""){
            $(".name").addClass("is-invalid");
        }else{
            $(".name").removeClass("is-invalid");
        }
        if(name.length != "" && email.length != ""){
            $.ajax({
                type: 'POST', url:'recoverbackend.php',
                data: {'email':email, 'name':name},
                dataType:'JSON',
                success:function(feedback){
                    if(feedback.status === "error"){
                        alert('Your name and email did not match. Please try again.');
                    }
                    else{
                        alert(feedback);
                    }
                }


        })
    }



    })
})