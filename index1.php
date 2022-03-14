<!DOCTYPE html>
<html>
<body>

<?php
echo "Welcome";
// Declare variable
$name = "Nick Talledo"
$credits = 15;
$float = 10.0;
// Print out variables
var_dump($name);
echo "<br>";
var_dump($float);
echo "<br>";
// If statement should print out Full Time student
if ($credits >= 12) {
    echo "Full Time Student"
}
else {
    echo "Part Time Student"
}


echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>

</body>
</html>