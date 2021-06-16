<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Strings</title>
</head>
<body>
	<div>
		<h2>Strings PHP</h2>
		<p>
			<?php
				$myString = "This is my string";
				echo "Printing text string";
			?>
		</p>
		<p>
			<?php
				$myString = "This is my string using variable";
				echo $myString;
			?>
		</p>
		<p>
			<?php
				$myPhrase = "I like eating vegetables";
				$wordToReplace = "vegetables";
				$wordNew = "pizza";
				$myNewPhrase = str_replace($wordToReplace, $wordNew, $myPhrase);
				echo "This is the original sentence: $myPhrase <br/>";
				echo "This is the new sentence: $myNewPhrase";
			?>
		</p>
		<p>
			<?php
				$myPhrase = "I like eating Vegetables";
				$wordToReplace = "vegetables";
				$wordNew = "pizza";
				$myNewPhrase = str_ireplace($wordToReplace, $wordNew, $myPhrase);
				echo "This is the original sentence: $myPhrase <br/>";
				echo "This is the new sentence: $myNewPhrase";
			?>
		</p>
		<p>
			<?php
				$myText = "My text to repeat, ";
				$repeating = 5;
				$myTextRepeated = str_repeat($myText, $repeating);
				echo $myTextRepeated;
			?>
		</p>
		<p>
			<?php
				$myText = "My text to calculate length";
				$myTextLength = strlen($myText);
				echo "$myText ------> length : $myTextLength";
			?>
		</p>
		<p>
			<?php
				$myText = "The position of A is: ";
				$characterToPos = "A";
				$pos = strpos($myText, $characterToPos);
				echo "$myText $pos";
			?>
		</p>
		<p>
			<?php
				$myText = "Text to capitalize";
				$myTextCapitalized = strtoupper($myText);
				echo "$myText <br/>";
				echo "$myTextCapitalized";
			?>
		</p>
		<p>
			<?php
				$myText = "TEXT TO LOWERCASE";
				$myTextLower = strtolower($myText);
				echo "$myText <br/>";
				echo "$myTextLower";
			?>
		</p>
		<p>
			<?php
				$myText = "TEXT TO LOWERCASE";
				$myTextLower = strtolower($myText);
				echo "$myText <br/>";
				echo "$myTextLower";
			?>
		</p>
		<p>
			<?php
				$myText = "Text to substract";
				$myFirstTextSubstried = substr($myText, 0, 4);
				$myLastTextSubstried = substr($myText, -5, -1);
				echo "$myText <br/>";
				echo "First 5: $myFirstTextSubstried <br/>";
				echo "Last 5: $myLastTextSubstried";
			?>
		</p>

	</div>
</body>
</html>