<!DOCTYPE html>
<html>
<head>
    <title>Exercise 4</title>
</head>
<body>

<h2>1. Voting Eligibility</h2>

<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Age: <input type="number" name="age" required><br><br>
    <input type="submit" name="submit1" value="Submit">
</form>

<?php
if(isset($_POST['submit1'])){

    $name = $_POST['name'];
    $age = $_POST['age'];

    if($age >= 18){
        echo "Hello ".$name.", you are eligible for voting.";
    } else {
        echo "Hello ".$name.", you are not eligible for voting.";
    }
}
?>

<br><hr><br>

<h2>2. Switch Case</h2>

<?php
$month = date("F");

switch($month){

    case "August":
        echo "It's August, so it's still holiday.";
        break;

    default:
        echo "Not August, this is ".$month." so I don't have any holidays.";
}
?>

<br><hr><br>

<h2>3. Multiplication Table</h2>

<form method="post">
    Enter Number: <input type="number" name="num" required>
    <input type="submit" name="submit2" value="Show">
</form>

<?php
if(isset($_POST['submit2'])){

    $num = $_POST['num'];

    for($i=1; $i<=10; $i++){
        echo $num." x ".$i." = ".($num*$i)."<br>";
    }
}
?>

<br><hr><br>

<h2>4. Print Numbers Using While Loop</h2>

<form method="post">
    Enter Number: <input type="number" name="n" required>
    <input type="submit" name="submit3" value="Print">
</form>

<?php
if(isset($_POST['submit3'])){

    $n = $_POST['n'];
    $i = 1;

    while($i <= $n){
        echo $i."<br>";
        $i++;
    }
}
?>

<br><hr><br>

<h2>5. Foreach Loop</h2>

<?php
$myarray = array("HTML","CSS","PHP","JavaScript");

foreach($myarray as $value){
    echo $value."<br>";
}
?>

</body>
</html>