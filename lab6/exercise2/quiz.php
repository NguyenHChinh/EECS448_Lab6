<?php
	$questions = array(
					"What is HTML short for?",
					"What is the extension \".py\" for?",
					"Which will iterate a total of 4 times?",
					"What does PHP stand for?",
					"What will the following code print?: console.log(\"8\" + \"3\" + 2 + 1)");
					
				
	$responses = array($_POST["question_1"], $_POST["question_2"], $_POST["question_3"], $_POST["question_4"], $_POST["question_5"]);
	$correct_ans = array("HyperText Markup Language", "Python", "for (int i = 0; i < 4; i++)", "Hypertext Preprocessor", "8321");
	
	$total_correct = 0;
	
	for ($i = 1; $i < 6; $i++) {	
		echo "Question ".$i.": ".$questions[$i-1]."<br>";
		echo "&emsp;You answered: ".$responses[$i-1]."<br>";
		echo "&emsp;Correct answer: ".$correct_ans[$i-1]."<br><br>";
		
		if ($responses[$i-1] == $correct_ans[$i-1]) {
			$total_correct++;
		}
	}
	
	echo "<br><br>You answered a total of ".$total_correct." questions correctly!<br>";
	echo "Final Result: " . $total_correct*20 . "%<br>";
	
	echo "<br><a href=\"/~c701n556/index.html\">Go Back to Homepage</a>";
?>