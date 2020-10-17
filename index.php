<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Php Course</title>
</head>
<body>
<?php

$name = "Pele";
$name2 = "Mad";
$name3 = "Invi";
$name4 = "Horn";

$names = array("Mad" => 123, "Pele" => 231, "Melisa" => 333, "Horn" => 112);
foreach ($names as $key => $score){
    echo $key . " has score " . $score . ".<br>";
}

//echo "Welcome " . $names[3] . "<br>";
//echo print_r($names);
//echo "<br>";

//echo "I like dogs";

?>
</body>
</html>