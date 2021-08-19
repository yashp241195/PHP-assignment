<?php
// Exercise 1
/*
function isBitten()
{
    $r_val = rand(0,1);
    return ((1-$r_val)>=0.5)?"TRUE":"FALSE";
}

function part1(){
echo(isBitten());
}

function part2(){
echo((isBitten() == "TRUE")?"Charlie bit your finger!":"Charlie did not bite your finger!");
}
*/
//part1();
//part2();


// Exercise 2

/*
function countWords($string){

$token = strtok($string, " ");
$array = array();

while ($token !== false)
{
   echo "$token<br>";
   $tck = strtolower($token);
   $array["$tck"] += 1;
   $token = strtok(" ");
}

print_r($array);

}

function part1(){

$string = "Hello world Beautiful day today World";
countWords($string);

}

*/

// part1();

?>

<html>  
<body>

<form method="GET" action="<?php echo $_SERVER[‘PHP_SELF’]; ?>" >
<input type="text" name="name">
<input type="submit">
</form>


<?php 

// part 2

echo $_GET["name"]; 

?>

</body>
</html>
