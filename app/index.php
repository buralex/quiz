<?php
$a = "";
phpinfo();
$answers = $_POST;
?>

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
	<div class="box">
		<form method="post" action="test.php">
            <div class="quiz-start_content">
		        
		        <h1 class="">Опросник Айзенка по определению темперамента</h1>
		        <p class="instr"><span class="attent">Инструкция:</span> Вам предлагается несколько вопросов. На каждый вопрос отвечайте только «да» или «нет». Не тратьте время на обсуждение вопросов, здесь не может быть хороших или плохих ответов, так как это не испытание умственных способностей.</p>
                <input type="submit" id="submit" class="" value="Начать тест" />
            </div>                        
	    </form>
	</div>
</div>


<script src="js/main.js"></script>
 

<script>
$(document).ready(function(){

  
});
</script>




</body>
</html>
