<!-- Created by Sandaroo - 2013197; Edited by Sinthujan - 2013046 -->
<br>
<div class="col-md-12 comment_item">
    <div class="comment_by">
    	<p><input id="input-1" name="input-1" disabled="true" class="rating rating-loading" data-min="0" data-max="5" data-size="xxs" value="<?php  echo $row["Rating"]; ?>"></p>
    </div> 
	<div class="comment">
	    <p><?php  echo $row["CommentDesc"]; ?></p>
	</div>
	<div class="comment_by">
	    <p>Posted by <?php  echo $row2["Name"]; ?> on <?php  echo $row["Timestamp"]; ?></p>
	</div>

	<script type="text/javascript">
		$(document).on('ready', function(){
		    $('#input-1').rating({displayOnly: true, step: 0.5
		  	});
		});
	</script>
</div>
