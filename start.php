<!DOCTYPE html>
<html>
<head>
	<title></title>


</head>
<body>
<?php 
			echo "Hello Scotch!";
			?>
			<?php
			echo "Hello"."</br>" ;
			?>
			это первый мой код!
			<?php
					$str_1="первая строка";
					$str_2="вторая строка"; // 123
					echo $str_1. "".$str_2." \" \" \" ";
					$x=12;
					$y=34;
					$z=4.25;

					$bool_1 = $x != $z;

					$bool_2 = $x != $y;

					echo $bool_1. "<br />".$bool_2;

					$bool_3 =  !($x == $y);

					$bool_4 = $x = $y || $z < $y;

					$bool_5 = $z != $y && $x < $y;

					$bool_6 = $z != $x ^ $y < $z;

					echo "<br/>" .$bool_3. "<br/>" .$bool_4. "<br/>" .$bool_5."<br/>".$bool_6;

					$bool = !($x = ! $y && $z < $x) || $x == $y;


					echo "<br/>".$bool;

					

					echo "123";
					echo "1234";

					?>
</body>
</html>