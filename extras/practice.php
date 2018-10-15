<!DOCTYPE html>
<!DOCTYPE html>
<html>
<body>

	<h1>My first PHP page</h1>

<?php

$x=5+5;
echo nl2br("Hello World! \n $x <br>");

echo "Hello World! <br>";
echo $x;

$txt="Hello World!";
$x=5;
$y=10.5;

echo nl2br("<br> $txt $x $y");

$txt="HARSH MOHAN";
echo "<br>My name is $txt !";
echo "<br>My name is ".$txt." !<br>";

?>



<?php
$x=5;
$y=20;
$z;
$z=$x+$y;
echo "The value of sum is $z <br>";
function sum1()
{
	global $x,$y,$z,$a;
	$a=$x+$y;
	echo "The value of sum is $a <br>";
	echo "The value of sum is $z <br>";	
}
sum1();
echo "The value of sum is $a <br>";
?>


<?php
$x=5;
$y=10;
function sum2()
{
	$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
sum2();
echo "$y<br>";
?>


<?php
function sum3()
{
	static $x=10;
	echo "$x<br>";
	$x++;
}
sum3();
sum3();
sum3();
?>


<?php
	echo "<h2>PHP is Fun!</h2>";
	echo "Hello World!<br>";
	echo "I'm about to learn PHP!<br>";
	echo "This "."is "."string "."<br>";
	echo "This ","is ","string ","<br>";
?>


<?php
$txt1="Learn PHP";
$txt2="From Harsh Mohan";
$x=5;
$y=4;

echo "<h2>",$txt1,"</h2>";
echo "Study PHP ",$txt2,"<br>";
echo $x+$y;
?>


<?php
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
?>


<?php
$a=23.5;
$b=23;
$c='23';
$d="23";
$e=true;
$f=array(1,2,3,4);
$g=array(1,2,3,4.0);
$h=array('1','2','3','4');
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);
var_dump($h);
?>


<?php
class car
{
	function car()
	{
		$this->x=20;
	}
}
$z=new car();
echo $z->x;
?>


<?php
$x="Hello World";
var_dump($x);
$x=null;
var_dump($x);
?>


<?php
//STRING FUNCTIONS
$x="Hello World!";
echo "The number of characters in $x is :",strlen($x),"<br>";
echo "The number of words in $x is :",str_word_count($x),"<br>";
echo "The reverse of $x is :",strrev($x),"<br>";
echo "The position of World in $x :",strpos($x,"World"),"<br>";
echo str_replace("Hello","Bye Bye ",$x),"<br>";
echo $x,"<br>";
$x=str_replace("Hello","Bye Bye ",$x);
echo $x,"<br>";
?>


<?php
//PHP CONSTANTS
define("GREETING","Welcome to W3Schools.com!");
echo "<br><br><br><br>",GREETING;
$GREETING="HARSH MOHAN";
echo "<br>",GREETING;
echo "<br>",$GREETING;

define("OUT","Welcome to W3Schools.com!",true);
echo "<br>",out;

define("s",4);
function sum4()
{
	echo "<br>",s;
}
sum4();
?>


<?php
//CONDITIONAL STATEMENTS
$t=date("M");
if($t>"20")
{
	echo "<br>","have a good day!";
}
else
	echo "<br>","time not so!";


echo "<br><br><br><br>";
$a=2;
$b=3;
$x="%";
switch($x)
{
	case "+":echo $a+$b;break;
	case "-":echo $a-$b;break;
	case "*":echo $a*$b;break;
	case "/":echo $a/$b;break;
	case "%":echo $a%$b;break;
}
?>

<br><br><br><br>

<?php
$x=1;
while($x<=5)
{
	echo "The number is $x <br>";
	$x++;
}

do
{
	echo "The number is $x <br>";
	$x++;
}while($x<=10);

for($x=0;$x<4;$x++)
{
	echo "The number is $x <br>";
}

$y=array(1,2,3,4,5);
foreach($y as $z)
{
	echo "$z <br>";
}
?>


<?php
//array etc
echo "<br><br><br><br>";
$a=array(1=>2,2=>3,3=>4);
foreach($a as $x=>$x_value)
{
	echo "Key=",$x,"Value=",$x_value;
	echo "<br>";
}
?>


<?php
//SORTING ARRAYS

?>










</body>
</html>