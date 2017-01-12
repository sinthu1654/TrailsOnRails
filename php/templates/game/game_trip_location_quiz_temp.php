<!-- Created by Sinthujan - 2013046 -->
<div class="row">
	<p id="quiz_question">1. <?php  echo $row["Question"]; ?></p>
</div>
<br>

<div class="row">
	<ul class="answers">
		<div class="col-xs-2"><input type="radio" name="q1" value="a" id="q1a"></div><div class="col-xs-10"><label for="q1a"><?php  echo $row["Option1"]; ?></label></div>
		<div class="col-xs-2"><input type="radio" name="q1" value="b" id="q1b"></div><div class="col-xs-10"><label for="q1b"><?php  echo $row["Option2"]; ?></label></div>
		<div class="col-xs-2"><input type="radio" name="q1" value="c" id="q1c"></div><div class="col-xs-10"><label for="q1c"><?php  echo $row["Option3"]; ?></label></div>
	</ul>
</div>
<hr>