<?php
//menggunakan nul coalescing
$data = [
    "action" => "Create"
];
$action = $data["action"] ?? "Nothing";

echo "\n";
echo $action . PHP_EOL;
?>