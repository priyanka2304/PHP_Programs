//Write a Program to display count, from 5 to 15 using PHP loop as given below.

<?php
$count = 5;
while($count <= 15)
{
  echo $count;
  echo "<br>" ;

  $count++;
}
?>

//Write a program to print “Hello World” using echo
<BR>
<BR>
<?php
echo "Hello World";
?>

<?php
$message = "Hello PHP";
echo $message;
?>
<BR>
<BR>
<HR>
##Write a program to print two variables in single echo
<BR>
<?php
$message_1 = "Good Morning.";
$message_2 = "Have a nice day!";
echo $message_1." ". $message_2;
?>
<HR>
##Write a program to check student grade based on marks
<BR>
<?php
$marks = 40;

if ($marks>=60)
{
	$grade = "First Division";
}
else if($marks>=45)
{
	$grade = "Second Division";
}
else if($marks>=33)
{
	$grade = "Third Division";
}
else
{
	$grade = "Fail";
}

echo "Student grade: $grade";
?>
<HR>
##Write a program to show day of the week using switch
<BR>
<?php
$day = "5";

switch ($day) {
    case "1":
        echo "It is Monday!";
        break;
    case "2":
        echo "It is today!";
        break;
    case "3":
        echo "It is Wednesday!";
        break;
	case "4":
        echo "It is Thursday!";
        break;
    case "5":
        echo "It is Friday!";
        break;
    case "6":
        echo "It is Saturday!";
        break;
	case "7":
        echo "It is Sunday!";
        break;
    default:
        echo "Invalid number!";
}
?>

<HR>
##Write a factorial program using for loop in php
<BR>

<?php
$num = 3;
$factorial = 1;

for ($x=$num; $x>=1; $x--)
{
    $factorial = $factorial * $x;
}

echo "The factorial of $num is $factorial";
?>

<HR>
<BR>Write a Program to create given pattern with * using for loop
<?php
for($row=1;$row<=8;$row++)
{
   for ($star=1;$star<=$row;$star++)
    {
     echo "*";
     }
 echo "<br>";
}
?>
