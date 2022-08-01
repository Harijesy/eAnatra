$(document).ready(function () {
    // var images =[
    //     "http://localhost/eAnatra/publics/images/slider1.jpeg" , 
    //     "http://localhost/eAnatra/publics/images/slider2.jpeg" , 
    //     "http://localhost/eAnatra/publics/images/slider3.jpeg" , 
    // ] ; 

    // var len = images.length ; 
    // var countslide = 1 ; 
    // function slider(){
    //     if(countslide > len-1){
    //         countslide = 0 ; 
    //     }
        
    //     // $("#accueil_image").attr("src", images[countslide]);
    //     $("#accueil").css({
    //         "background-image" : new URL(images[countslide]) , 
    //     })
    //     console.log(countslide) ; 
        
    //     countslide++ ;
        
    // }
    
    // setInterval(slider , 1000) ; 


    const BASEURL = "http://localhost/eAnatra/" ; 

    $("#btn_signin").click(function () { 
        // e.preventDefault();
        $("#box_accueil").attr("class","d-none") ; 
        $("#box_signin").attr("class","") ; 
    });

    $("#retour").click(function () { 
        $("#box_accueil").attr("class","") ; 
        $("#box_signin").attr("class","d-none") ; 
    });

    $(document.body).on("submit","#form_signin",function(e){
        e.preventDefault() ; 

        $.ajax({
            url : BASEURL+"form/signin",
            data : $(this).serialize() ,
            type : "post" , 
        })
        .done(function(data){
            if(data.trim() == "success"){
                location.href = BASEURL+'form/classe' ; 
            }
            else if(data.trim() == "error"){
                Swal.fire({
                    position: 'center' ,
                    icon: 'error' , 
                    title: 'ERROR' , 
                    text: 'Ce compte existe déjà' , 
                    showConfirmButton: true 
                }) ; 
            }
            else{
                Swal.fire({
                    position: 'center' ,
                    icon: 'error' , 
                    title: 'ERROR' , 
                    text: 'Il y a un erreur' , 
                    showConfirmButton: true 
                }) ; 
            }
            
        })
        .fail(function(errorMessage){
            console.log(errorMessage) ;
        })
    })

   
    
});