$(document).ready(function () {
    const BASEURL = "http://localhost/eAnatra/" ; 
    
    $("#acces_college").click(function (e) { 
        e.preventDefault();

        $("#college").attr("class", "");
        $("#lycee").attr("class", "d-none");
        
    });

    $("#acces_lycee").click(function (e) { 
        e.preventDefault();
        $("#college").attr("class", "d-none");
        $("#lycee").attr("class", "");
    });

    $(document.body).on("submit","#choix_classe", function(e){
        e.preventDefault() ; 
        $("#btn_log").click() ; 

        $.ajax({
            url : BASEURL+'form/finish' , 
            data : $(this).serialize() , 
            type : 'post' ,
        })
        .done(function(data){
            if(data.trim() == "nosuccess"){
                Swal.fire({
                    position: 'center' ,
                    icon: 'error' , 
                    title: 'ERROR' , 
                    text: 'Veuillez compléter les champs' , 
                    showConfirmButton: true 
                }) ; 
            }
        })
        .fail(function(errorMessage){
            console.log(errorMessage) ; 
        })
    })
});