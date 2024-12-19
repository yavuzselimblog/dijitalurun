let url = 'http://localhost/dijitalurun/admin-panel';

function adminlogin(){
    $(".loginbuttons").prop('disabled',true)
    let data = $("#adminloginform").serialize();

    $.ajax({
        type : "POST",
        data : data,
        url  : url + '/loginpage/logindata',
        success : function(result){

            let obj = JSON.parse(result);
            swal.fire({
                title : obj.title,
                text  : obj.text,
                icon  : obj.icon
            })

            if(obj.icon == 'success'){

                setTimeout(function(){
                window.location.href = url
                },1000);

            }else{
                $(".loginbuttons").prop('disabled',false)
            }

        }
    })

}


function adminlogout(){

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