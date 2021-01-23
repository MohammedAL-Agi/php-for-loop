<?php
echo "==============Q1==============" . "<br>";
for ($i = 1; $i <= 10; $i++) {
	if ($i < 10) {
		echo "$i-";
	} else {
		echo $i . "<br>" . "<br>";
	}
}


echo "==============Q2==============" . "<br>";
$total = 0;
for ($i = 0; $i < 30; $i++) {
	$total += $i;
}
echo "The total number is $total<br><br>";


echo "==============Q3b==============" . "<br>";

$c= 0;
for($n =65; $n <= 69; $n++)
 {
	for($i = 1; $i <= 5; $i++)
	 {
		if($i >= 5-$c)
		{
			echo chr($n).' ';
		}
		else
		{
			echo 'A ';
		}
	}
	$c++;
	echo "<br>";
}

echo "<br>";

echo "==============Q3c==============" . "<br>";
$counter = 0;
for($num =1; $num <= 5; $num++)
{
	for($i = 1; $i <= 5; $i++)
	{
		if($i >= 5-$counter)
		{
			echo $num.' ';
		}
		else
		{
			echo '1 ';
		}
	}
	$counter++;
	echo "<br>";
}
echo "==============Q4==============" . "<br>";
// $counter = 0;
// for($num =1; $num <= 5; $num++)
// {
// 	for($i = 5; $i >= 1; $i--)
// 	{
// 		if($i >= 5-$counter)
// 		{
// 			echo $num.' ';
// 		}
// 		else
// 		{
// 			echo '0 ';
// 		}
// 	}
// 	$counter++;
// 	echo "<br>";
// }
$counter = 0;
for($num =1; $num <= 5; $num++)
{
	for($i = 5; $i >= 1; $i--)
	{
		if($i >= 5-$counter )
		{
			echo $num.' ';
		}
		else
		{
			echo '0 ';
		}
	}
	$counter++;
	echo "<br>";
}



echo "==============Q5==============" . "<br>";
$f = 5;
$y = 1;
for ($i = $f; $i > 0; $i--) {
	$y *= $i; // 1*5=5 then 5*4=20 then 3*20=60 then 60*2=120 then 120*1=120
}
echo "The number is " .  $y;
echo "<br>" . "<br>";


echo "==============Q6==============" . "<br>";
$n1 = 0;
$n2 = 1;
// Declare our first tow number
echo $n1 . "," . $n2 . ",";

for ($x = 1; $x < 8; $x++) {
	$res = $n1 + $n2;
	echo $res . ",";
	$n1 = $n2;
	$n2 = $res;
}
echo "<br>" . "<br>";


echo "==============Q7==============" . "<br>";

$str = "OrangeAcademy";
$cha = "c";
$nstr = str_split($str);

for ($x = 0; $x < strlen($str); $x++) {
	if ($nstr[$x] === $cha) {
		echo $x;
	}
}
echo "<br><br>";


echo "==============Q8==============" . "<br>";
?>
<style>
	table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
	}
	td,
	th {
		border: 1px solid #4a4a4a;
		text-align: left;
		padding: 8px;
	}

	tr:nth-child(even) {
		background-color: #dddddd;
	}
</style>

<body>
	<table>
		<?php
		for ($i = 1; $i <= 8; $i++) {
			echo "<tr>";
			for ($x = 1; $x <= 8; $x++) {
				echo "<td>$i * $x = " . $i * $x . "</td>";
			}
			echo "</tr>";
		}
		?>
	</table>
	<br>
	==============Q9==============
	<table width="270px" cellspacing="0px" border="1px">
		<?php
		for ($row = 1; $row <= 8; $row++) {
			echo "<tr>";
			for ($col = 1; $col <= 8; $col++) {
				$sum = $row + $col;
				if ($sum % 2 == 0) {
					echo "<td height=30px width=30px bgcolor=#0000 ></td>";
				} else {
					echo "<td height=30px width=30px bgcolor=#fff ></td>";
				}
			}
			echo "<tr>";
		}
		?>
	</table>
	<br>
	==============Q10==============
	<table>
		<?php
		for ($col = 1; $col <= 10; $col++) {
			echo "<tr>";
			for ($row = 1; $row <= 10; $row++) {
				$multi = $row * $col;
				echo "<td> $multi </td>";
			}
			echo "</tr>";
		}
		?>
	</table>
	<br>
	==============Q11==============
	<br>

</body>

<?php
for ($i = 1; $i <= 50; $i++) {
	if ($i % 15 === 0) {
		echo "FizzBuzz, ";
	} elseif ($i % 3 === 0) {
		echo "Fizz, ";
	} elseif ($i % 5 === 0) {
		echo "Buzz,";
	} else {
		echo $i;
	}
}
echo "<br><br>";
echo "==============Q12==============" . "<br>";

$n = 5;
$c = 1;
for ($i = $n; $i > 0; $i--) {
	for ($b = $i; $b < $n + 1; $b++) {
		echo $c . ' ';
		$c++;
	}
	echo "<br>";
}
echo "<br>";
echo "==============Q13==============" . "<br>";
echo "<pre>";
for ($row = 0; $row <= 10; $row++) {
	for ($col = 0; $col <= 10; $col++) {
		if ((($col == 1 or $col == 10) and $row != 0) or (($row == 0 or $row == 5) and ($col > 1 and $col < 10))) {
			echo "*";
		} else {
			echo " ";
		}
	}
	echo "<br>";
}
echo "</pre>";
echo "==============Q14==============" . "<br>";

echo "<pre>";
for ($row = 0; $row < 11; $row++) {
	for ($col = 0; $col <= 11; $col++) {
		if ($col == 1 or (($row == 0 or $row == 5 or $row == 10) and ($col < 10 and $col > 1)) or ($col == 10 and ($row != 0 and $row != 5 and $row != 10))) {
			echo "*";
		} else {
			echo " ";
		}
	}
	echo "<br>";
}
echo "</pre>";


echo "==============Q15==============" . "<br>";

echo "<pre>";
for ($row = 0; $row < 11; $row++) {
	for ($col = 0; $col <= 11; $col++) {
		if (($col == 1 and ($row != 0 and $row != 10)) or (($row == 0 or $row == 10) and ($col > 1 and $col < 9)) or ($col == 9 and ($row == 1 or $row == 9))) {
			echo "*";
		} else {
			echo " ";
		}
	}
	echo "<br>";
}
echo "</pre>";


?>