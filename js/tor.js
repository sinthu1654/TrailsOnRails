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
                 type: "POST", url:"http://localhost/TrailsOnRails/php/login_handler.php", 
                 //type: "POST", url:"https://trailsonrails.000webhostapp.com/php/login_handler.php",
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
                 type: "POST", url:"http://localhost/TrailsOnRails/php/logout.php", 
                 //type: "POST", url:"https://trailsonrails.000webhostapp.com/php/logout.php", 
                 success: 
                 function(data){  
                     window.location.reload();
                 }
            });  
        
    });  
    $(".back_button").click(function(){  
      window.history.back();
    });  
    $(".tripList_favrt_add").click(function(){       
        var selected =jQuery(this).attr("id").substring(4);  
        $.ajax({
            type: "POST",
            url:"http://localhost/TrailsOnRails/php/favourite_list.php", 
            data:{favourite:"add" ,tripname:selected},               
            success:              
            function(data){      
                document.getElementById("add_"+selected).style.display = 'none';         
                document.getElementById("rem_"+selected).style.display = 'block';
            }
        });  
    });  
    $(".tripList_favrt_rem").click(function(){  
        var selected =jQuery(this).attr("id").substring(4); 
        $.ajax({
            type: "POST",
            url:"http://localhost/TrailsOnRails/php/favourite_list.php", 
            data:{favourite:"rem" ,tripname:selected},               
            success:              
            function(data){                               
                document.getElementById("rem_"+selected).style.display = 'none';       
                document.getElementById("add_"+selected).style.display = 'block';
        
            }
        });    
    });  
    $(".trip_list_item_link").click(function(){  
      var selected=jQuery(this).attr("id").substring(7);
         window.location.replace("trip_details.php?id="+selected);
    });     
     $("#gam_proceed").click(function(){           
         $.ajax({
            type: "POST",
            url:"http://localhost/TrailsOnRails/php/gamescore.php",  
            success:              
            function(data){    
                 window.location.replace("game_home.php"); 
            }
        });          
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