<!DOCTYPE html>
<html lang="ru">
<head>

	<title>Опросник Айзенка</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/jquery.min.js"></script>

</head>
<body>
<?php 
phpinfo();
$answers = $_POST;

	//$answersValues = array(); // array only with 'yes' or 'no'
array_unshift($answers,"first");


$extravert_yes_indices = array(1, 3, 8, 10, 13, 17, 22, 25, 27, 39, 44, 46, 49, 53, 56);
$extravert_no_indices = array(5, 15, 20, 29, 32, 37, 41, 51);
$neurotism_yes_indices = array(2, 4, 7, 9, 11, 14, 16, 19, 21, 23, 26, 28, 31, 33, 35, 38, 40, 43, 45, 47, 50, 52, 55, 57);

$lie_yes_indices = array(6, 24, 36);
$lie_no_indices = array(12, 18, 30, 42, 48, 54 );

$extravert_yes_sum = 0;
$extravert_no_sum = 0;
$extravert_total_sum = 0;

$neurotism_yes_sum = 0;

$lie_yes_sum = 0;
$lie_no_sum = 0;
$lie_total_sum = 0;

for ($index = 0; $index <= count($answersValues)-1; $index++) {
	$value = $answersValues[$index];

	
	if (in_array($index+1, $extravert_yes_indices)) { // if there is a match between index of question in $answersValues 
	  	if($value == "yes") {						  // and value in $extravert_yes_indices, we then check if it "yes", and then increment a sum
	  		$extravert_yes_sum++;	
	  	}
	}
	if (in_array($index+1, $extravert_no_indices)) {
	  	if($value == "no") {
	  		$extravert_no_sum++;
	  	}
	}
	if (in_array($index+1, $neurotism_yes_indices)) {
	  	if($value == "yes") {
	  		$neurotism_yes_sum++;
	  	}
	}
	if (in_array($index+1, $lie_yes_indices)) {
	  	if($value == "yes") {
	  		$lie_yes_sum++;	
	  	}
	}
	if (in_array($index+1, $lie_no_indices)) {
	  	if($value == "no") {
	  		$lie_no_sum++;
	  	}
	}
}

$extravert_total_sum = $extravert_yes_sum + $extravert_no_sum;

$neurotism_total_sum = $neurotism_yes_sum;

$lie_total_sum = $lie_yes_sum + $lie_no_sum;

$extravert_type = "";
$neurotism_type = "";
$lie_type = "";

if ($extravert_total_sum >= 0 && $extravert_total_sum <= 10) {
	$extravert_type = "Вы - интроверт, замкнуты внутри себя.";
}

if ($extravert_total_sum >= 11 && $extravert_total_sum <= 14) {
	$extravert_type = "Вы - амбиверт, общаетесь, когда вам это нужно.";
}

if ($extravert_total_sum >= 15 && $extravert_total_sum <= 24) {
	$extravert_type = "Вы - экстраверт, общительны, обращены к внешнему миру.";
}

if ($neurotism_total_sum >= 0 && $neurotism_total_sum <= 10) {
	$neurotism_type = "У вас эмоциональная устойчивость.";
}

if ($neurotism_total_sum >= 11 && $neurotism_total_sum <= 16) {
	$neurotism_type = "У вас эмоциональная впечатлительность.";
}

if ($neurotism_total_sum >= 17 && $neurotism_total_sum <= 22) {
	$neurotism_type = "У вас появляются отдельные признаки расшатанности нервной системы.";
}

if ($neurotism_total_sum >= 23 && $neurotism_total_sum <= 24) {
	$neurotism_type = "У вас невротизм, граничащий с патологией, возможен срыв, невроз.";
}

if ($lie_total_sum >= 0 && $lie_total_sum <= 3) { 
	$lie_type = "Ответам можно доверять";
}

if ($lie_total_sum >= 17 && $lie_total_sum <= 22) {
	$lie_type = "Сомнительно";
}

if ($lie_total_sum >= 23 && $lie_total_sum <= 24) {
	$lie_type = "Вы любите приукрасить действительность!";
}


$width = 600;
$height = 600;

$point = (($width/24)/$width)*100; //percentage


$x = $extravert_total_sum * $point;
$y = $neurotism_total_sum * $point;

?>

<div class="main-wrapper">
	<div class="box box--test">
	<?php
		echo <<<EOT
		<h3 class=""><span class="attent">Экстраверсия: $extravert_total_sum,</span> $extravert_type</h3>
		<h3 class=""><span class="attent">Невротизм: $neurotism_total_sum,</span> $neurotism_type</h3>
		<h3 class=""><span class="attent">Уровень лжи:</span> $lie_total_sum $lie_type</h3>

		<div class="graph-container">
			<img class="graph" src="img/graph.jpg" alt="graph" style="">
			<img src="img/res.gif" class="point" style=" left:$x%; bottom:$y%;">
		</div>
		<a class="again" href="index.php">Пройти тест заново</a>

EOT;
	?>
		    
	</div>
</div>


<script src="js/main.js"></script>
 

<script>
$(document).ready(function(){

 });
</script>

</body>
</html>
