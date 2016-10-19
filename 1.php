<html>
	<head> 
		<meta charset="UTF-8"> 
		<TITLE>Расчет медианы треугольника по трем сторонам</title>
	</head>
	<body>
		<form action="1.php" method="GET">
			<p>Медианой треугольника (m) называется отрезок, соединяющий любую вершину треугольника с серединой противоположной стороны. <br> Медиана, соединяющая вершину треугольника A с серединой стороны a, обозначается m.<br> Медиана треугольника, через стороны треугольника выражается указанной ниже формулой (1), где a, b, c - стороны треугольника; M(a) - медиана треугольника</p>
			<p><img src='https://goo.gl/jrkvQK' alt="фотография"></p>
			<p>Введите длину первой стороны треугольника (a)
			<input type="text" name="a" value= "<?php 
				if (isset($_GET['a'])){
					echo htmlspecialchars($_GET['a']);
				}
			?>">
			</p>
			
			<p>Введите длину второй стороны треугольника (b)
			<input type="text" name="b" value= "<?php 
				if (isset($_GET['b'])){
					echo htmlspecialchars($_GET['b']);
				} 
			?>">
			</p>
			
			<p>Введите длину третьей стороны треугольника (c)
			<input type="text" name="c" value= "<?php 
				if (isset($_GET['c'])){
					echo htmlspecialchars($_GET['c']);
				} 
			?>">
			</p>
			<input type="submit" value="Посчитать длину медианы" name="add">
		</form>
		
		<?php function calc($a,$b,$c,$action){	
			if  ((strlen($a)==0) or (strlen($b)==0) or (strlen($c)==0)){
				exit("Внимание! Не все поля заполнены!");    
			}
			if((is_numeric($a) and $a > 0) and (is_numeric($b) and $b > 0) and (is_numeric($c) and $c > 0)){
				return (0.5*sqrt (2*(pow($b,2))+(2*(pow($c,2)))-(pow($a,2))));
			}
				else{
				exit ('Внимание! Введено нечисловое или отрицательное числовое значение!');
				}
		}
		if(isset($_GET['a'])&&isset($_GET['b'])&&isset($_GET['c'])){ 
		$action="add";
		?>
		Результат:  <?=number_format((calc($_GET['a'], $_GET['b'],  $_GET['c'], $action)), 2, ',', ' ')?>		
		<?php } ?>
	</body>
</html>