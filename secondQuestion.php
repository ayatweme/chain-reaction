<?php
function isValidHexCode($code) {
    $pattern = '/^#[A-Fa-f0-9]{6}$/'; 
    
    return preg_match($pattern, $code) === 1;
}

$hexCode1 = "#1abc9f";
$isValid1 = isValidHexCode($hexCode1);
echo "$hexCode1 is " . ($isValid1 ? "valid" : "not valid") . "\n";

$hexCode2 = "#12345g";
$isValid2 = isValidHexCode($hexCode2);
echo "$hexCode2 is " . ($isValid2 ? "valid" : "not valid") . "\n";

?>