<!-- Created by Sinthujan - 2013046 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include("php/templates/headers/head.php"); 
        head("Game - Summary");
    ?>

    <!-- additional styles for rating stars -->
    <link href="bootstrap/star_rating/css/star-rating.css" media="all" rel="stylesheet" type="text/css" />
    <script src="bootstrap/star_rating/js/star-rating.js" type="text/javascript"></script>

</head>
<body>
<div class="container">
	<div class="row"> 
        <div class="col-xs-3">
        	<button id="previous_btn" class="icon_btn back_button"><img src="images/previous_icon.png" width="40" height="40"></button>
        </div>
        <div class="col-xs-6">
        	<center><h2>Hunt Summary</h2></center>
        </div>
    </div>
    <hr>

    <div class="row">
        <p id="hunt_summary">Congratulations! You have reached the end of your journey. We hope you have a great time 
        and learned a lot about various places in Sri Lanka.</p>
    </div>

    <div class="row">
        <div class="col-md-6">
        <form method="post" action="game_summary.php">
            <div class="col-xs-5">
                <h4>Rate</h4>            
            </div>
            <div class="col-xs-7">
                <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="1" data-size="xxs">
            </div>
            <br><br><br>
            <center>        
                <textarea type="text" name="comment" placeholder="Comment"></textarea><br>
                <input class="buttonlink b_center" type="submit" name="comment_submit_btn" value="Post">
            </center>
            </form>
        </div>

        <?php
            error_reporting(0);

            $comment = $_POST['comment'];
            $timestamp = date('Y-m-d G:i:s');
            $rating = $_POST['input-1'];

            if (strlen($comment) == 0) {
                echo "<br><p>Please enter a comment</p>";
            } else {
                // else insert the comment into table
                include("php/db.php");
                $conn = getConnection();

                $sql = "INSERT INTO trails_on_rails.comment (TripId, UserId, CommentDesc, Timestamp, Rating) 
                    VALUES ('1','1','".$comment."','".$timestamp."','".$rating."');";

                $exeSQL = mysql_query($sql) or @$error=mysql_errno();

                if (@$error==0) {
                    echo "<p>Comment posted.</p>";
                } else {
                    echo "<p>We have encountered an issue. Sorry for the inconvenience.".mysql_error();
                }
                $conn->close();      
            } 
        ?>

        <div class="col-md-6">
            <div class="col-md-6">
                <h4>Gained Points</h4>
                <div class="table-responsive">          
                    <table class="table table-condensed">
                        <thead>
                            <tr class="colored_tr">
                                <th>Trip</th>
                                <th>Points</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Galle Lighthouse</td>
                                <td>40</td> 
                            </tr>
                            <tr>
                                <td>Galle Beach</td>
                                <td>60</td> 
                            </tr>
                            <tr class="colored_tr">
                                <td>Total</td>
                                <td>80</td> 
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div id="link_to_game" class="alt_buttonlink alt_b">Proceed</div>
        <script type="text/javascript">
            document.getElementById("link_to_game").onclick = function () {
                location.href = "game_home.php";
            };
        </script>
    </div>
    </center>

    <div class="row">
        <div class="footer">
            <hr><center>2016</center>
        </div>
    </div>
</div>
</body>
</html>