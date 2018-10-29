<? //Это блок переменных
 $zag="Домашнее задание №2";
 $_year=date('Y');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title><?=$zag; ?></title>
</head>
<body>

<?
$a=rand(-10,10);
$b=rand(-10,10);
echo "Задание 1. Значение a=$a, b=$b";
if ($a>=0 && $b>=0) {
   $res = $a-$b;
   echo "<br>"."Разность=$res";
}
   elseif ($a<0 && $b<0) {
	$res = $a*$b;
	echo "<br>"."Произведение=$res";
   }
else {
   $res = $a+$b;
   echo "<br>"."Сумма=$res";
}
echo "<hr>";
function f($n) {
    echo $n." ";
    if($n==15) {
	return;
    }
    f($n+1);
}
$a=rand(0,15);
//$a=20;
echo "Задание 2. Случайное число в интервале [0..15] - $a.<hr>";
switch($a) {
   case 0:
   case 1:
   case 2:
   case 3:
   case 4:
   case 5:
   case 6:
   case 7:
   case 8:
   case 9:
   case 10:
   case 11:
   case 12:
   case 13:
   case 14:
   case 15:
	f($a);
	break;
default:
	echo "Ошибка!";

}
echo "<hr>Задание 3. ";
function addNum($x, $y) {
    echo "<br>"."a=$x, b=$y.<br>";
    $res = $x+$y;
	echo "Сумма равна $res.<br>";
	return $res;
    }
function subNum($x, $y) {
    $res = $x-$y;
	echo "Разность равна $res.<br>";
	return $res;
    }
function multNum($x, $y) {
    $res = $x*$y;
	echo "Произведение равно $res.<br>";
	return $res;
    }
function divNum($x, $y) {
    $res = $x/$y;
	echo "Частное равно $res.<br>";
	return $res;
    }
$a=rand(1,10);
$b=rand(1,10);
addNum($a,$b);
subNum($a,$b);
multNum($a,$b);
divNum($a,$b);
echo "<hr>Задание 4. Выбираем операции по switch.<br>";
function mathOperation($arg1, $arg2, $operation) {
   switch($operation) {
      case 'add': {
             echo "Сложение";
	     addNum($arg1,$arg2);
	     break;
      }
      case 'sub': {
	     echo "Вычитание<br>";
	     subNum($arg1,$arg2);
	     break;
      }	     
      case 'mult': {
             echo "Умножение<br>";
	     multNum($arg1,$arg2);
	     break;
      }
      case 'div': {
	     echo "Деление<br>";
	     divNum($arg1,$arg2);
	     break;
      }   
      default: {
	     echo "Неизвестная операция!";
	     break;
      }
   }
}
$a1=rand(1,10);
$a2=rand(1,10);
mathOperation($a1, $a2, 'add');
echo "<hr>";
mathOperation($a1, $a2, 'sub');
echo "<hr>";
mathOperation($a1, $a2, 'mult');
echo "<hr>";
mathOperation($a1, $a2, 'div');
echo "<hr>";
mathOperation($a1, $a2, 'empty');

echo "<hr>Задание 6. Возведение в степень с помощью рекурсии.<br>";
function power($val, $pow) {
    if($pow==0) {
	return 1;
    }
    if($pow < 0) {
	return power(1/$val, -$pow);
    }
    return $val * power($val, $pow-1);
}

$a=rand(-10,10);
$b=rand(-10,10);
echo "Возводим a=$a в степень b=$b. <br>";
$y = power($a, $b);
echo "Результат: $y.";

echo "<hr>"."Конец! Всем пока!"."<hr>";

?>

<div id="footer">
<p>Copyright &copy; <?=$_year; ?>. Все права защищены для задания 5. </p>
</div>
</body>
</html>