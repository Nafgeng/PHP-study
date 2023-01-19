<?php
echo "# tenary #";
echo "\n";

$gender = "Hewan";
// $hi = $gender == "Pria" ? "Hi bro !" : "Hi sis";

//Ternary double condition
$hi = ($gender == "Pria" ? "Hi bro!" : ($gender == "Hewan" ? "Hi wan!" : "Hi sis"));

echo $hi . PHP_EOL;
?>