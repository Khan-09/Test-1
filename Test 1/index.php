<?php

echo ">> <b> (1) Wrrite a PHP program for checking marrige ages of man and women by using Function conditional statement__ </b>";
echo '<br>';

function Marriage($ageMen, $ageWoman){
    if($ageMen >= 21 && $ageWoman >= 18){
        echo "Both are ready to marry";
    }elseif($ageMen >= 21 && $ageWoman < 18){
        echo "The men is ready to marry but the women isn't!";
    }elseif($ageMen < 21 && $ageWoman >= 18){
        echo "The women is ready marry but the men isn't ready!";
    }else{
        echo "No one is ready to marry!";
    }
}
$ageMen = 10;
$ageWoman = 10;

echo  Marriage($ageMen, $ageWoman);


echo '<br>';


echo ">> <b>(2) Write a PHP program to convert Celsius to Fahrenheit and Fahrenheit to Celsius by using Function and Conditional statement__ </b>";
echo '<br>';

function convertTemperature($value, $unit) {
    if ($unit === 'Celsius') {
        $theory= ($value * 9/5) + 32;
        echo "$value Celsius is equal to $theory Fahrenheit";
    } elseif ($unit == 'Fahrenheit') {
        $theory = ($value - 32) * 5/9;
        echo "$value Fahrenheit is equal to $theory Celsius";
    } else {
        echo "Invalid unit. Please use 'Celsius' or 'Fahrenheit'.";
    }
}


$temperature = 255; 
$unit = 'Fahrenheit'; // Can be replaced with 'Celsius' if needed!

$result = convertTemperature($temperature, $unit);
echo  $result;

echo '<br>';


echo ">> <b>(3) Write a PHP program to calculate your academic grating system by using Conditional statement__ </b>";
echo '<br>';


$grade = 1000;

if ($grade >= 80.00 && $grade <= 100.00){
    echo "Your grade is A+";
}elseif($grade >= 70.00 && $grade <= 79.99){
    echo "Your grade is A";
}elseif($grade >= 60.00 && $grade <= 69.99){
    echo "Your grade is AB";
}elseif($grade >= 50.00 && $grade <= 59.99){
    echo "Your grade is B";
}elseif($grade >= 40.00 && $grade <= 49.99){
    echo "Your grade is C";
}elseif($grade >= 33.00 && $grade <= 39.99){
    echo "Your grade is D";
}elseif($grade >= 0.00 && $grade <= 32.99){
    echo "Your grade is F";
}else{
    echo 'Your grade is invalid'.'...<a href="#">Try again later!</a>';
}
echo '<br>';


echo ">> <b>(4) Write a PHP program for calculating multiplication table of any number by using for loop </b>";
echo '<br>';


$number = 9;
for ($i = 10; $i <= 20; $i++){
    $result = $number * $i;
    echo "$number x $i = $result <br>";
}


echo ">> <b>(5) Write a PHP program to check a valid password by using function & conditional statement. </b>";
echo '<br>';


function passwordCheak ($userpass){
    $dbpass = "Khan99";
    if ($userpass == $dbpass){
        echo "Welcome back!";
    }else{
        echo "Get Out!";
    }
}
passwordCheak(1111);