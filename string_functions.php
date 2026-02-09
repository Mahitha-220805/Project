<?php
echo "<h2>String Functions</h2>";

$str = "   Welcome to PHP Programming   ";
$userInput = "Mahi123";

// Basic String Functions
echo "Length: " . strlen($str) . "<br>";
echo "Word Count: " . str_word_count($str) . "<br>";
echo "Reverse: " . strrev($str) . "<br><br>";

// Case Conversion
echo strtoupper($userInput) . "<br>";
echo strtolower($userInput) . "<br>";
echo ucfirst("mahi") . "<br>";
echo ucwords("php string functions") . "<br><br>";

// Search & Replace
echo "Position of 'PHP': " . strpos($str, "PHP") . "<br>";
echo str_replace("PHP", "Web", $str) . "<br><br>";

// Substring & Trimming
echo "Substring: " . substr($str, 11, 3) . "<br>";
echo "Trim: '" . trim($str) . "'<br>";
echo "Left Trim: '" . ltrim($str) . "'<br>";
echo "Right Trim: '" . rtrim($str) . "'<br><br>";

// String Comparison
echo "strcmp: " . strcmp("Admin", "admin") . "<br>";
echo "strcasecmp: " . strcasecmp("Admin", "admin") . "<br><br>";

// Special Characters & Security
$html = "<script>alert('Hi')</script>";
echo "htmlspecialchars: " . htmlspecialchars($html) . "<br>";
echo "addslashes:" . addslashes("I'm learning Php") . "<br";

?>