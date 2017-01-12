/* Created by Sandaroo - 2013197; Edited by Sinthujan - 2013046 */

$(document).ready(function(){   
       
    $("#button_plus").click(function(){        
        change_seat(1);
    });   
    $("#button_min").click(function(){        
        change_seat(-1); 
    }); 
    $("#exit_btn").click(function(){        
        location.href = "php/controllers/exit_game.php";
    });
    $("#loginbutton").click(function(){ 
        
        var username = $('#username').val().trim();
        var password = $('#password').val().trim();
        
        if(username=="sand"&&password=="pass"){ 
            $.ajax({
                 type: "POST", url:"https://trailsonrails.000webhostapp.com/php/login_handler.php",//url:"http://localhost/TrailsOnRails/php/login_handler.php", 
                 data:{login:"login" ,username:username}, 
                 success: 
                 function(data){ 
                     window.location.replace("index.php");
                 }
            });  
        }else{            
            $('#login_error').html("<p>*Invalid credentials. please try again.</p>");
        }
    });      
    $(".logout").click(function(){   
        
        $.ajax({
                 type: "POST", url:"https://trailsonrails.000webhostapp.com/php/logout.php",//url:"http://localhost/TrailsOnRails/php/logout.php",  
                 success: 
                 function(data){  
                     window.location.reload();
                 }
            });  
        
    });  
    $(".back_button").click(function(){  
      window.history.back();
    });  
    $(".trip_list_item").click(function(){  
      var selected=jQuery(this).attr("id").substring(7);
         window.location.replace("trip_details.php?id="+selected);
    });  
});


function gotoGame(page){ 
    location.href = "game_home.php?loc="+page;
}


function change_seat(val){
    var input =Number($('#num_seats').val().trim())+val;
    if(input<1){
        input=1;
    }
    $('#num_seats').val(input);
}

var slideIndex = 1; 

function change_slide(direction){
    var x = document.getElementsByClassName("slide_image"); 
    
    var slides = document.getElementById('slides');
     
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    if(direction=="next" && slideIndex < x.length){ 
      
        slideIndex = slideIndex+1; 
    }else if(direction=="next"){ 
        slideIndex=1;
    }
    if(direction=="pre" && slideIndex != 1){ 
        slideIndex = slideIndex-1; 
    }else if(direction=="pre"){
        slideIndex = x.length; 
    }
    slides.style.display = "block";  
    x[slideIndex-1].style.display = "block";  
}