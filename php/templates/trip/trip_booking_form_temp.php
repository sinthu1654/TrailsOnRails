<!-- Created by Sandaroo - 2013197; Edited by Sinthujan - 2013046 -->

<center>
<div>
    <form class="form-horizontal" method="post" action="trip_booking_summary.php">
        <div class="form-group">
            <div class="col-sm-10">
                <p>Book a trip to <?php echo $_GET['destination'] ?>. Enter your details.</p>
                <input type="hidden" name="tripid" value="<?php echo $_GET['id'] ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-10">
                <input type="text" class="form-control" name="date_time" placeholder="Trip Date & Time *">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-10">
                <input type="text" class="form-control" name="class" placeholder="Train Class *">
            </div>
        </div>

        <div class="form-group">                
            <div class="col-sm-10">
            <div class="col-xs-2">
                <div class="buttonpm" style="float:right" id="button_min">
                    <i style="font-size:24px" class="fa">&#xf068;</i>
                </div>
            </div>               
            <div class="col-xs-8">
                <input type="number" class="form-control" name="num_seats" placeholder="Select No. of Seats *" value="1">
            </div>
            <div class="col-xs-2" >
                <div class="buttonpm" style="float:left" id="button_plus">
                     <i style="font-size:24px" class="fa"> &#xf067; </i>
                </div>
            </div>
            </div>
        </div> 

        <div class="form-group">
            <div class="col-sm-10">
                <input type="text" class="form-control" name="pay_method" placeholder="Payment method *">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-10">
                <input type="text" class="form-control" name="card_no" placeholder="Card number *">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-10">         
                <input class="buttonlink b_center" type="submit" name="trip_book_submit_btn" value="Book">
            </div>
        </div>
    </form>         
</div>
</center>
  
