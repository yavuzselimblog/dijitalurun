var url = "http://localhost/dijitalurun";

function passwordupdate(){
    $("#sendbutton").prop('disabled',true);

    var data = $("#passform").serialize();
    $.ajax({
        type : "POST",
        data : data,
        url  : url + "/user/passworddata",
        success : function(result){

            var obj = JSON.parse(result);
            swal.fire({
                title : obj.title,
                text  : obj.text,
                icon  : obj.icon
            });
            

            if(obj.icon == 'success'){
                setTimeout(function(){
                    window.location.reload()
                },2000);

            }else{
                $("#sendbutton").prop('disabled',false);
            }

        }
    })

}

function profileupdate(){
    $("#sendbutton").prop('disabled',true);

    var data = $("#profileform").serialize();
    $.ajax({
        type : "POST",
        data : data,
        url  : url + "/user/profiledata",
        success : function(result){

            var obj = JSON.parse(result);
            swal.fire({
                title : obj.title,
                text  : obj.text,
                icon  : obj.icon
            });
            

            if(obj.icon == 'success'){
                setTimeout(function(){
                    window.location.reload()
                },2000);

            }else{
                $("#sendbutton").prop('disabled',false);
            }

        }
    })

}

function combutton(){
    $("#combuton").prop('disabled',true);
    var data = $("#commentform").serialize();
    $.ajax({
        type : "POST",
        data : data,
        url  : url + "/products/savecomment",
        success : function(result){

            var obj = JSON.parse(result);
            swal.fire({
                title : obj.title,
                text  : obj.text,
                icon  : obj.icon
            });
           

            if(obj.icon == 'success'){
                setTimeout(function(){
                    window.location.reload()
                },2000);
            }else{
                $("#combuton").prop('disabled',false);
            }

        }
    })
}

function ordersave(){
    $("#savebutton").prop('disabled',true);

    var data    = $("#orderform").serialize();
    var payment = $("input[name=radio]").val();

    $.ajax({
        type : "POST",
        data : data,
        url  : url + '/completedata',
        success : function(result){

            var obj = JSON.parse(result);
            swal.fire({
                title : obj.title,
                text  : obj.text,
                icon  : obj.icon
            });
            

            if(obj.link != '#'){
                setTimeout(function(){
                    window.location.href = obj.link
                },1000);
            }else{
                $("#savebutton").prop('disabled',false);
            }

        }
    })
}

function passbutton(){
    $("#pasbutton").prop('disabled',true);
    
    var data = $("#passwordform").serialize();
    $.ajax({
        type : "POST",
        data : data,
        url  : url + "/loginpage/recoverypassworddata",
        success : function(result){

            var obj = JSON.parse(result);
            swal.fire({
                title : obj.title,
                text  : obj.text,
                icon  : obj.icon
            });
            

            if(obj.icon == "success"){
               setTimeout(function(){
                window.location.href = url + '/loginpage'
               },1000);
            }else{
                $("#pasbutton").prop('disabled',false);
            }

        }
    })
}

function recbuttons(){
    $("#recbutton").prop('disabled',true);
    var data = $("#recoveryform").serialize();
    $.ajax({
        type : "POST",
        data : data,
        url  : url + "/loginpage/passwordrecoverydata",
        success : function(result){

            var obj = JSON.parse(result);
            swal.fire({
                title : obj.title,
                text  : obj.text,
                icon  : obj.icon
            });
            

            if(obj.icon == "success"){
               setTimeout(function(){
                window.location.reload()
               },1000);
            }else{
                $("#recbutton").prop('disabled',false);
            }

        }
    })

}

function logout(){

    Swal.fire({
        title: 'Çıkış yapılıyor...',
        text: "Oturumunuz sonlandırılacaktır, onaylıyor musunuz...",
        icon: 'question',
        showCancelButton: true,
        cancelButtonText : 'İptal',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Evet çıkış yap'
      }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = url + "/loginpage/logout";
        }

    })
     
}

function loginbutton(){

    $("#logbutton").prop('disabled',true);
    var formdata = $("#loginform").serialize();
    
    $.ajax({
        type : "POST",
        data : formdata,
        url  : url + "/loginpage/logindata",
        success : function(result){

            var obj = JSON.parse(result);
            swal.fire({
                title : obj.title,
                text  : obj.text,
                icon  : obj.icon
            });
            

            if(obj.icon == "success"){
               setTimeout(function(){
                window.location.href = url
               },1000);
            }else{
                $("#logbutton").prop('disabled',false);
            }

        }
    })

}

function registerbutton(){
    $("#regbutton").prop('disabled',true);

    var data = $("#registerform").serialize();
    $.ajax({
        type : "POST",
        data : data,
        url  : url + "/loginpage/registerdata",
        success : function(result){
            var obj = JSON.parse(result);
            swal.fire({
                title : obj.title,
                text  : obj.text,
                icon  : obj.icon
            });
            

            if(obj.icon == "success"){
               setTimeout(function(){
                window.location.href = url + "/loginpage"
               },1000);
            }else{
                $("#regbutton").prop('disabled',false);
            }
        }
    })

}

function sendmessage(){

    $("#sendbutton").prop('disabled',true);
    
    var data = $("#contactform").serialize();
    $.ajax({
        type : "POST",
        data : data,
        url  : url + "/pages/sendmessage",
        success : function(result){
            var obj = JSON.parse(result);
            swal.fire({
                title : obj.title,
                text  : obj.text,
                icon  : obj.icon
            });
            
            if(obj.icon == "success"){
                $("input[name=name]").val('');
                $("input[name=subject]").val('');
                $("input[name=email]").val('');
                $("textarea[name=message]").val('');
            }else{
                $("#sendbutton").prop('disabled',false);
            }
            
        }
    })

}