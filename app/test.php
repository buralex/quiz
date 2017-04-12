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



<div class="main-wrapper">
	<div class="box box--test">
			<form action="process.php" method="post" id="quiz"> 
			
			<ul class="test-questions">
	
				<?php 
				    include 'quest.php';
				?>
                <li>
                    <h3 class="">Результат</h3>
                    <input class="send" type="submit" value="Получить результат" id="" />
                </li>
            </ul>
            <button type="button" class="next">Дальше</button>
    </form>
	</div>
</div>

<script src="js/main.js"></script>
<script>
$(document).ready(function(){

  nextButton(".next", "#quiz");

});
</script>




</body>
</html>
