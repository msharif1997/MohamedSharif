<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV101 Basic Form Handler Example</title>

<link rel="stylesheet" href="foodstyles.css" type="text/css" />

<style type="text/css">
.colorRed {
	color: #F00;
}

body{
	color:white;
}

#order {
  width:auto;
  text-align:center;
 
  float:none;
}

</style>
</head>

<body>

<section id="container">

<header>
<p><img src="images/foodlogo.jpg" alt="image of Onloin foods logo" /></p>
</header>

<section id="order">
<h1>WDV101 Intro HTML and CSS</h1>
<h2>Chapter 9 - Processing Forms</h2>
<h3 class="colorRed">This page was created by the PHP on the server and send back to your browser.</h3>
<hr />
<p><strong>PHP Form Handler</strong> - This process will display the 'name = value' pairs for all the elements of a form. </p>
<p>This page was called by the action attribute of your form on the exampleForm.html page. It called the formHandler.php to process the name values from your form. </p>
<p><strong>name</strong> - The value of the name attribute from the HTML form element.</p>
<p><strong>value</strong> - The value entered in the field. This will vary depending upon the HTML form element.</p>
<p>&nbsp;</p>
<h3>Name-Value pairs from your form:</h3>
<?php

	echo "<table border='1'>";
	echo "<tr><th>Field Name</th><th>Value of field</th></tr>";
	foreach($_POST as $key => $value)
	{
		echo '<tr>';
		echo '<td>',$key,'</td>';
		echo '<td>',$value,'</td>';
		echo "</tr>";
	} 
	echo "</table>";
	echo "<p>&nbsp;</p>";

?>

</section> <!-- end order -->

</section> <!-- end container -->

</body>
</html>
