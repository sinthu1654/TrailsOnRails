<!-- Created by Sandaroo - 2013197; Edited by Sinthujan - 2013046 -->
<div class="col-md-6">
      <div class="trip_list_item" id="tripId_<?php  echo $row["TripId"]; ?>">         
          <div class="col-xs-6 trip_list_image_cont trip_list_item_link" id="tripId_<?php  echo $row["TripId"]; ?>">                         
              <img  class="img-responsive trip_list_image"  src="<?php  echo $row["TripImgPath"]; ?>">  
          </div>
          <div class="col-xs-6 trip_list_info">        
              <div>         
                  <div class="tripList_favrt_add" id="add_<?php echo $row["TripName"]; ?>" style="display: <?php                
                      if(isset($_SESSION["favourite"][$row["TripName"]])){echo "none";}else{echo "block";}
                    ?>;"> 
                    <span class="glyphicon glyphicon-star-empty"></span>
                  </div>    
                  <div class="tripList_favrt_rem" id="rem_<?php echo $row["TripName"]; ?>" style="display: <?php                
                      if(isset($_SESSION["favourite"][$row["TripName"]])){echo "block";}else{echo "none";}
                    ?>;">
                    <span class="glyphicon glyphicon-star"></span>
                  </div>  
                  <h4><?php echo $row["TripName"]; ?></h4>
              </div>  
                            
              <div class="trip_description trip_list_item_link" id="tripId_<?php  echo $row["TripId"]; ?>"> 
                  <p>
                      <?php echo $row["TripShortDesc"]; ?>
                  </p>
              </div>
<!--
              
               
              <div class="tripList_favrt_add favrt_butt" id="add_<?php echo $row["TripName"]; ?>" style="display: <?php                
              if(isset($_SESSION["favourite"][$row["TripName"]])){echo "none";}else{echo "block";}
              ?>;"> 
                  add to favourite
              </div>  
              
              <div class="tripList_favrt_rem favrt_butt" id="rem_<?php echo $row["TripName"]; ?>" style="display: <?php                
              if(isset($_SESSION["favourite"][$row["TripName"]])){echo "block";}else{echo "none";}
              ?>;">
                  remove favourite
              </div>  
-->
              
          </div>   
      </div>
</div>