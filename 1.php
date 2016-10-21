<html>
	<head> 
		<meta charset="UTF-8"> 
		<title>Расчет медианы треугольника по трем сторонам</title>
	</head>
	<body>
		<form action="1.php" method="GET">
			<p>Медианой треугольника (m) называется отрезок, соединяющий любую вершину треугольника с серединой противоположной стороны. <br> Медиана, соединяющая вершину треугольника A с серединой стороны a, обозначается m.<br> Медиана треугольника, через стороны треугольника выражается указанной ниже формулой (1), где a, b, c - стороны треугольника; M(a) - медиана треугольника</p>
			<p><img src='https://pp.vk.me/c636826/v636826040/3bf1c/vtYz8QrvHgY.jpg' alt="фотография"></p>
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
			<input type="submit" value="Посчитать длину медианы" name="median">
		</form>
		<?php
			if (isset($_GET['a'])&&isset($_GET['b'])&&isset($_GET['c'])) {
				if (((!is_numeric($_GET['a'])) or (($_GET['a']) < 0)) or ((!is_numeric($_GET['b'])) or (($_GET['b']) < 0)) or ((!is_numeric($_GET['c'])) or (($_GET['c']) < 0))){
				  echo ('Внимание! Введено нечисловое или отрицательное числовое значение!');
				} else {
					echo ('Результат: '.number_format((calc($_GET['a'], $_GET['b'],  $_GET['c'], $action)), 2, ',', ' '));
				}
			}
			function calc($a,$b,$c,$action){	
				return (0.5*sqrt (2*(pow($b,2))+(2*(pow($c,2)))-(pow($a,2))));
			}
		?>
	</body>
</html>