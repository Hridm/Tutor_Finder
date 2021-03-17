$(document).ready(function(){
    $("#submit").click(function(){
        
        var email=$("#email").val();
        var message=$("#message").val();
        if(email.length==""){
            alert("Please enter a valid email");
        }
        else if(message.length==""){
            alert("Please write something");
        }

        
        if(email.length != "" && message.length != ""){

            $.ajax({
                type:"POST",
                url:"writebackend.php",
                data:{"email": email, 'message':message},
                dataType: 'JSON',
                success: function(feedback){
                    alert(feedback);

        }
    })
}



    })
})