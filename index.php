<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class= "container">
        This is my First PHP project to learn about backend developments.
        
    <?php
    // This is single line comment
    /*
    this is 
    multiline
    comment
    */
    
    $variable1= 23;
    $variable2 = 45;
    echo $variable1;
    echo $variable2;
    // Arithmatic Operators
    Echo $variable1 + $variable2;

    echo "<br>"; //for new line 
    echo "The value of variable1 + variable2 is ";
    echo "<br>";
    echo $variable1 + $variable2;
    echo "<br>";
    //Assignment Operators
    $newVar = $variable1;
    $newVar +=1;
    $newVar -=1;
    $newVar *=2;
    $newVar /=2;
    
    echo " The value of new Operators is ";
    echo $newVar;
    echo "<br>";

    // Comparison Operators
    echo " <h1> Comparison Operators</h1> ";

    echo " The value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";
    echo " The value of 1!=4 is ";
    echo var_dump(1!=4);
    echo "<br>";

    echo " The value of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br>";

    echo " The value of 1<=4 is ";
    echo var_dump(1<=4);
    echo "<br>";

    echo " The value of 1<4 is ";
    echo var_dump(1<4);
    echo "<br>";
//increment and decrement operator

echo $variable1++;
echo $variable1--;
echo  ++$variable1;
echo -- $variable1;
echo "<br>";
// logical Operators
// and (&&)
// or(||)
// xor
// !
$myVar = (true and true);
echo "<br>";
echo  var_dump($myVar);
$myVar = (true and false);
echo "<br>";
echo  var_dump($myVar);
$myVar = (false and false);
echo "<br>";
echo  var_dump($myVar);
$myVar = (false and true);
echo "<br>";
echo  var_dump($myVar);
echo "<br>";
$myVar = (true or false);
echo  var_dump($myVar);
echo "<br>";
$myVar = (true xor true );
echo var_dump ($myVar);
     echo "Hello World this is written by using the PHP language";
     ?>

     <?php
     Define('PI',3.14);
     //Data Types in PHP 
    //  1. String 
    //  2. Integer
    //  3. Float
    //  4. Boolean 
    //  5. Array
    //  6. Object
    echo "<br> Data Types<br> ";
    $var = " This is a string ";
    echo var_dump($var);
    echo "<br>";
    $var = 67;
    echo var_dump($var);
    echo "<br>";
    $var = 67.12;
    echo var_dump($var);

    echo "<br>";
    $var = true;
    echo var_dump($var);
    echo PI;


?>

</div>
</body>
</html>