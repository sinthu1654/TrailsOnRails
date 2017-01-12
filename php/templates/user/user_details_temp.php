<!-- Created by Sinthujan - 2013046 -->
<div class="panel panel-default">
   <div class="panel-body">
       <div class="row">
           <div class="col-xs-6">
               <div><h4>User Details</h4></div>
               <div class="user_details">          
                 <div><?php  echo $row["Name"]; ?></div>           
                 <div><?php  echo $row["Address"]; ?></div>
                 <div><?php  echo $row["ContactNo"]; ?></div>
               </div>
           </div>
           <div class="col-xs-6">         
               <img  class="img-responsive img-rounded"  id="user_pic" src="images/user.png">  
           </div>
       </div>
    </div>
</div>