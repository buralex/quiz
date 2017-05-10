<?php //phpinfo();

var_dump($_SERVER['HTTP_HOST']);
var_dump($_SERVER['REQUEST_URI']);


var_dump($_SERVER['SERVER_NAME']);
	var_dump($_SERVER['HTTP_HOST']);
	var_dump($_SERVER['SERVER_ADDR']);
	var_dump($_SERVER['DOCUMENT_ROOT']);
	var_dump($_SERVER['SCRIPT_FILENAME']);
	var_dump($_SERVER['HTTPS']);
	


$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo $actual_link;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  
	<title>Опросник Айзенка</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/jquery.min.js"></script>
	<base href="http://buralex.tk/test/" >

</head>
<body>
    
    <img src="<?= $actual_link ?>img/dev.jpg" class="point" style=" ">

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
