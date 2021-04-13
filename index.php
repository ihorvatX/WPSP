<?php

//zadatak 1
$x = "4";

if(is_int($x))
{
    echo $x . " je cjeli broj";
}
else
{
    $x = (int)$x;
    echo $x. " pretvoreno u cjelobroji broj";
}




//zadatak 2
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";


if($x % 3 === 0)
{
    echo $x . " djeljiv sa brojem 3";
    echo "</br>";
}
else
{
    echo $x . " nije djeliv sa 3";
    echo "</br>";

    while($x % 3 !== 0)
    {
        $x++;
    }

    echo $x . " je djeliv sa 3";
    echo "</br>";
    echo "</br>";
}



echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";

// Zadatak 3
$a = 1;

while($a !== 10)
{

$a = rand(1,20);

echo $a . "</br>";

}


echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";


//zadatak 4 



$min = 1;
$max = 5;
$count = 0;

$brojevi = [];

for($i = $min; $i <= $max; $i++)
{
    echo "#";
  array_push($brojevi,$i);

  foreach($brojevi as $broj)
  {
      echo $broj;
      echo " ";
  }
  echo "</br>";


}

echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";


/// zadatak 5

$input =  "ANA";



if($input === strrev($input))
{
    echo $input . " je palindrom";
}
else
{
    echo $input . " nije palindrom";
}



echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";

//zadatak 6


$predmeti = array("operacijski sustavi",
 "web programiranje na strani posluzitelja",
  "skriptni programski jezici");


  for($i = 0; $i < count($predmeti);$i++)
  {
      echo strlen($predmeti[$i]);
      echo "</br>";
  }




  echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";


//zadatak7 

$list1 = array(1, 2, 3, 4, 5);
$list2 = array(3, 87, 5, 1, 2);


function isCircual($list1, $list2)
{

    sort($list1);
    sort($list2);
if(count($list1) != count($list2))
{
return false;

}


$string1 = join(" ", $list1);
    $string2 = join(" ", $list2);

    // if(strlen($string1)   !== strlen($string2))
    // {
    //     return false;
    // }


return strpos($string1, $string2) !== false;

    
}


$info = isCircual($list1,$list2);

if($info)
{
    echo "cirkularno identične";
}
else
{
    echo "nisu cirkularno identične";
}



echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
//zadatak 8


$arr1 = array(
    array(1, 1, 1),
    array(1, 1, 1),
    array(1, 1, 1),
   );
   $arr2 = array(
    array(2, 2, 2),
    array(2, 2, 2),
    array(2, 2, 2),
   );
   $arr3 = array(
    array(0, 0, 0),
    array(0, 0, 0),
    array(0, 0, 0),
   );
   

   for($i=0; $i<3; $i++)
   {
    for($j=0; $j<3; $j++)
    {
     for($k=0; $k<3; $k++)
      $arr3[$i][$j] = $arr3[$i][$j] + $arr1[$i][$k] * $arr2[$k][$j];
    }
   }
   

   for($i=0; $i<3; $i++)
   {
    for($j=0; $j<3; $j++)
     echo $arr3[$i][$j] . " ";
    echo "<br>";
   }



   // zadatak 9

   echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";


   $input =  array(3,3,[[0,0,1], [1,1,2] , [1,2,3] , [2,2,5]]);

 $newMatrix = array();

for($i = 0; $i < $input[0]; $i++)
{

    for($j = 0; $j < $input[1]; $j++)
    {
    $newMatrix[$i][$j] = 0;
    }

}

for($k = 0; $k < count($input[2]);$k++)
{
    $newMatrix[$input[2][$k][0]][$input[2][$k][1]] = $input[2][$k][2];
    // print_r($newMatrix);
    // print_r(" ");
}


for($i = 0; $i < $input[0]; $i++)
{
    for($j = 0; $j < $input[1]; $j++)
    {
        echo $newMatrix[$i][$j] . " ";

    }
    echo "<br>";
}


echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";




//zadatak 10.


function fibonachi($n)
{
    global $fib;
    $fib = array();


    $number1 = 0;
    $number2 = 1;


    $count = 0;

    while ($count < $n)
    {
        echo " ". $number1;
        $num3 = $number2 + $number1;
        array_push($fib,$num3);
        $number1 = $number2;
        $number2 = $num3;
        $count++;
    }
    return $fib;
}


fibonachi(15)
?>