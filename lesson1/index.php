<?php
//iterable

$arr = ["один", "два" => "два", "три", "четыре", "пять"];


/*foreach ($arr as $item) {
	echo $item;
}

for ($i = 0; $i < count($arr); $i++) {
	echo $arr[$i];
}*/

/*echo current($arr);
next($arr);
next($arr);
next($arr);
echo current($arr);
echo prev($arr);
echo end($arr);
echo reset($arr);*/

//callable

//C
//Zend
//Zval - Zend Value
//typedef struct _zval_struct {
//	zvalue_value value;
//  zend_uint refcount__gc;
//  zend_uchar type;
//  zend_uchar is_ref__gc;
//} zval;

$a = 0x01;
// Что выведет приведенный ниже код?
//echo $result = "1" + 2 * "0x01";

// Будет ли $a == $b? Будет ли $b == $c? Будет ли $a == $c?
$a = 0;
$b = null;
$c = "0";

var_dump($a == $b); //0 == 0
var_dump($a == $c); //0 == 0
var_dump($b == $c); // "0" == null-> ""

$fibArray = [0, 1];

function fibonacciArrSimple($n)
{
	if ($n == 0) return 0;
	if ($n == 1) return 1;
	return fibonacciArrSimple($n - 1) + fibonacciArrSimple($n - 2);
}

function fiboRec(int $n) {

	global $fibArray;

	if (isset($fibArray[$n])) return $fibArray[$n];

	if ($n == 0) return 0;
	if ($n == 1) return 1;

	$fibArray[$n] = fiboRec($n - 1) + fiboRec($n - 2);
	return $fibArray[$n];

}

function fibonacci($n, $prev1 = 1, $prev2 = 2){
	$current = $prev1 + $prev2;
	echo $current . " ";
	if($n > 1){
		fibonacci($n-1, $current, $prev1);
	}
}

function fibArray($num)
{
	$first = 0;
	$second = 1;
	for ($i = 0; $i < $num; $i++) {
		if ($i <= 1) {
			$next = $i;
		} else {
			$next = $first + $second;
			$first = $second;
			$second = $next;
		}
		echo $next . " ";
	}
}

// что будет выведено на экран в каждом случае?
$a = 0;
echo print(++$a); // 1true -> 11
//echo $a++ + ++$a; // 0 + 2
//echo $a++; // 0 (+1)
//echo ++$a; // 2
//echo $a--; // 2 (-1)
//echo --$a; // 0

/*if(print("Hello!")) {
	echo "Принт сработал!";
}*/