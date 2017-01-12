<!-- Created by Sandaroo - 2013197; Edited by Sinthujan - 2013046 -->   
<div class="row">     
    <div id="slides">  
        <img class="slide_image" src="<?php  echo $row["TripImgPath"]; ?>">  
    </div> 
</div>  
    
<div class="row">
    <div class="col-xs-4">
        <h4><?php  echo $row["TripName"]; ?></h4>        
    </div>
    <div class="col-xs-8">
        <!--<i style="float: right" class="fa rating">
            <?php  
            
            $rating=$row["Rating"];
            if($rating<=0){
                echo "&#xf006;&#xf006;&#xf006;&#xf006;&#xf006;";
            }else if($rating>=5){
                echo "&#xf005;&#xf005;&#xf005;&#xf005;&#xf005;";
            }else{  
                $full_stars = $rating; 
                $empty_stars = 5-$rating;
                
                
//                $full_stars = 0;
//                $half_stars = 0;
//                $empty_stars = 0;
//            
//                for($x=0;$x<$rating;){
//                    $x=$x+0.5;
//                    
//                    if($half_stars==1){
//                        
//                        $half_stars=0;
//                        $full_stars=$full_stars+1;
//                    }else{
//                        $half_stars=1;
//                    }
//                   
//                }
//                $empty_stars = 5 - ($full_stars+$half_stars);
                for($x=0;$x<$full_stars;$x++){
                    echo "&#xf005;";
                }
//                if($half_stars==1){
//                    echo "&#xf123;";
//                }
                for($x=0;$x<$empty_stars;$x++){
                    echo "&#xf006;";
                } 
            }
             
            ?>  
        </i>-->        
        </div>
</div>
<div class="row">
    <div class="col-md-12 p_description">
        <p><?php  echo $row["TripLongDesc"]; ?></p>
    </div>
</div> 
<div class="row">
    <div class="col-md-12">
        <h4>Cost: Rs. <?php  echo $row["Cost"]; ?></h4>
    </div>
</div>

<div class="row">
    <div class="buttonlink b_center" id="button_book">Book Trip</div>
    <script type="text/javascript">
        document.getElementById("button_book").onclick = function () {
            location.href = "trip_booking.php?id=<?php echo $row["TripId"]; ?>&destination=<?php echo $row["TripName"]; ?>";
        };
    </script>
</div>