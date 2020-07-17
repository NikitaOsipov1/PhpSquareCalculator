<?php 
	echo "<link rel='stylesheet' href = 'style.css'>";
	if($_POST['submit'])
	{
		$p = $_POST['operation'];
		$c;
		if($p == 'square')
		{
			$side_1 = (double) $_POST['first'];
			$side_2 = (double) $_POST['second'];
			$c = $side_1 * $side_2;
			if ($side_1 != $side_2) {
				echo "<p>Error !!! <br>"."Sides of square must be equal.</p>";
				$c = -1;
			}
		}

		if($p == 'rectangle')
		{
			$side_1 = (double) $_POST['first'];
			$side_2 = (double) $_POST['second'];
			$c = $side_1 * $side_2;
		}

		if($p == 'parallelogram')
		{
			$side_1 = (double) $_POST['first'];
			$side_2 = (double) $_POST['second'];
			$c = $side_1 * $side_2;
		}

		if($p == 'rhombus')
		{
			$side_1 = (double) $_POST['first'];
			$side_2 = (double) $_POST['second'];
			$c = $side_1 * $side_2;
		}

		if($p == 'trapezoid')
		{
			$side_1 = (double) $_POST['first'];
			$side_2 = (double) $_POST['second'];
			$c = $side_1 * $side_2;
		}

	}
	
 ?>
<div class="container">
	 <form action="" method="post">
 	
	 	<select name="operation" id="" required>
	 		<option value="square">square</option>
	 		<option value="rectangle">rectangle</option>
	 		<option value="parallelogram">parallelogram</option>
	 		<option value="rhombus">rhombus</option>
	 		<option value="trapezoid">trapezoid</option>
	 	</select>

	 	<input type="textbox" name="first" placeholder="Enter values" required>
	 	<input type="textbox" name="second" placeholder="Enter values" required>

	 	<input type="submit" name="submit" value="calculate">
 	 </form>
</div>

 <?php 

 	if ($c >= 0) {
 		if($p == 'square') echo"<p>Square area is ".$c."</p>";
 		if($p == 'rectangle') echo"<p>Rectangle area is ".$c."</p>";
 		if($p == 'parallelogram') echo"<p>Parallelogram area is ".$c."</p>";
 		if($p == 'rhombus') echo"<p>Rhombus area is ".$c."</p>";
 		if($p == 'trapezoid') echo"<pTtrapezoid area is ".$c."</p>";
 	}
  ?>
<div class="img">
	<img src="../1.jpg">
	<p>S = a * a</p>
	<img src="../2.png">
	<p>S = a * b</p>
	<img src="../3.gif">
	<p>S = h <sub>a</sub> * a</p>
	<img src="../4.jpg">
	<p>S = h * a</p>
	<img src="../5.png">
	<p>S = h * m(average line of trapezoid)</p>
</div>
