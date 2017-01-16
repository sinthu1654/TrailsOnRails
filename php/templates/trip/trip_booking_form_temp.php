<!-- Created by Sandaroo - 2013197; Edited by Sinthujan - 2013046
    Paypal created by Tharindu - 2013231 -->
<?php 
    $paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
    $paypal_id='your_seller_id';
?>

<center>
<div>
    <!-- 
        Earlier we used to redirect to booking summary page to insert booking values into db. 
        Now we redirect to paypal url.
    -->
    <form class="form-horizontal" method="post" action="<?php echo $paypal_url; ?>">
        <div class="form-group">
            <div class="col-sm-10">
                <p>Book a trip to <?php echo $_GET['destination'] ?>. Enter your details.</p>
                <input type="hidden" name="tripid" value="<?php echo $_GET['id'] ?>">
            </div>
        </div>

        <!-- Various Paypal related hidden fields -->
        <input type="hidden" name="item_number" value="1">
        <input type="hidden" name="credits" value="510">
        <input type="hidden" name="userid" value="1">
        <input type="hidden" name="amount" value="10">
        <input type="hidden" name="no_shipping" value="1">
        <input type="hidden" name="currency_code" value="USD">
        <input type="hidden" name="handling" value="0">       
        <input type='hidden' name='cancel_return' value='cancel.php'>
        <input type='hidden' name='return' value='success.php'>

        <div class="form-group">
            <div class="col-sm-10">
                <input type="date" class="form-control" name="date_time" placeholder="Trip Date & Time *">
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

                <!-- Various Paypal related hidden fields -->
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="### COPY FROM BUTTON CODE ###">

                <input class="buttonlink b_center" type="submit" name="trip_book_submit_btn" value="Book via Paypal">
            </div>
        </div>
    </form>         
</div>
</center>
  
