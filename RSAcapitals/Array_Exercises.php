<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>New England State Capitals</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
$StateCapitals = array(
"Western Cape" => "Cape Town",
"Eastern Cape" => "Bisho",
"Free State" => "Bloemfontein",
"KwaZulu-Natal" => "Pietermaritzburg",
"Gauteng" => "Johannesburg",
"Limpopo" => "Polokwane",
"Mpumalanga" => "Nelspruit",
"Northern Cape" => "Kimberley",
"North West" => "Mafikeng",
);

echo "<pre>";
print_r($StateCapitals);
echo "</pre>";

foreach ($StateCapitals as $ind => $CapValue)
{
	echo "<p>".$CapValue." is the Capital of ". $ind."</p>"; 
}

//Question2
echo "<form action='RSACapitals.php'
method='GET'>\n";
foreach ($StateCapitals as
$State => $Response)
echo "The capital of $State is:
<input type='text' name='answers[" . $State . "]' /><br />\n";
echo "<input type='submit' name='submit' value='Check Answers' /> ";
echo "<input type='reset' name='reset' value='Reset Form' />\n";
echo "</form>\n";

?>
</body>
</html>