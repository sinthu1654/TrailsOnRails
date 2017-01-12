<!-- Created by Sandaroo - 2013197; Edited by Sinthujan - 2013046 -->

<div class="col-md-6">
      <div class="trip_list_item" id="tripId_<?php  echo $row["TripId"]; ?>">         
          <div class="col-xs-6 trip_list_image_cont ">                      
              <img  class="img-responsive trip_list_image"  src="<?php  echo $row["TripImgPath"]; ?>">  
          </div>
          <div class="col-xs-6 trip_list_info">
              
              <div><h4><?php echo $row["TripName"]; ?></h4></div>    
              
              <div class="trip_description">
                  <p>
                      <?php echo $row["TripShortDesc"]; ?>
                  </p>
              </div>
              <div><!--<i class="fa rating">                    
                  <?php              
                    $rating = $row["Rating"];
                    if($rating <= 0){
                        echo "&#xf006;&#xf006;&#xf006;&#xf006;&#xf006;";
                    } else if($rating >= 5){
                        echo "&#xf005;&#xf005;&#xf005;&#xf005;&#xf005;";
                    } else{  
                        $full_stars = $rating; 
                        $empty_stars = 5 - $rating; 
                        for($x = 0; $x < $full_stars; $x++){
                            echo "&#xf005;";
                        } 
                        for($x = 0; $x < $empty_stars; $x++){
                            echo "&#xf006;";
                        } 
                    }             
                  ?>                          
                  </i>-->
              </div>

          </div>      
      </div>
</div> 