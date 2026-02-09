<?php
echo "<h2>PHP Datatypes</h2>";

// String
$name = "Mahi";
echo "String: $name <br>";

// Integer
$age = 21;
echo "Integer: $age <br>";

// Float
$percentage = 85.5;
echo "Float: $percentage <br>";

// Boolean
$isStudent = true;
echo "Boolean: ";
echo $isStudent ? "True" : "False";
echo "<br>";

// Array
$subjects = array("PHP", "DBMS", "DSP");
echo "Array: ";
print_r($subjects);
echo "<br><br>";

echo "<h2>Variable Scope</h2>";

// Global Scope
$college = "ABC College";

function globalScopeExample() {
    global $college;
    echo "Global Scope Variable: $college <br>";
}
globalScopeExample();

// Local Scope
function localScopeExample() {
    $course = "B.Tech";
    echo "Local Scope Variable: $course <br>";
}
localScopeExample();

// Static Scope
function staticScopeExample() {
    static $count = 0;
    $count++;
    echo "Static Variable Count: $count <br>";
}

echo "<h3>Static Scope Test</h3>";
staticScopeExample();
staticScopeExample();
staticScopeExample();
?>