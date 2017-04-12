<?php
	$questions = file("questions.txt");
	$length = count($questions) - 1;

	for ($x = 1; $x <= $length; $x++) {

		echo <<<EOT
                <li>
                    <h3>$questions[$x]</h3>
                    
                    <div class="button-answer">
						<input type="radio" name="question-$x" id="q-$x-y" value="yes" />
						<label class="" for="q-$x-y">Да</label>
                    </div>
                    
					<div class="button-answer">
						<input type="radio" name="question-$x" id="q-$x-n" value="no" />
						<label class="" for="q-$x-n">Нет</label>
                    </div>
                    <p class="quiz-progress">$x из $length</p>
                </li>
EOT;

	}

?>