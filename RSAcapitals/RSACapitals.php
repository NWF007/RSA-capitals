<?php
ob_start();
include ("Array_Exercises.php");
ob_end_clean();

echo "<pre>";
$Answers = $_GET['answers'];
print_r($Answers);
echo "</pre>";


foreach ($StateCapitals as $ind => $CapValue)
{

if ($StateCapitals[$ind] == $Answers[$ind]) { 
	//echo "<pre>";
	?> <p><?php echo $Answers[$ind]; ?> &#9989;</p> 
	<?php
	//echo "</pre>";
} else {
	//echo "<pre>";
	?> <p><?php echo $Answers[$ind];?> &#10060; <?php echo $StateCapitals[$ind];?> </p> <?php
	//echo "</pre>";

}
}


?>