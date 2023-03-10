
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<style>
		* {
			margin: 5px;
			padding: 5px;
		}

		div {
			margin-top: 5px;
			padding: 15px;
			border-radius: 8px;
			width: 50%;
		}

		table {
			border-collapse: collapse;
			margin: auto;
			width: 99%;
		}
		thead {
			border: 2px solid;
		}

		th {
			background-color: #FFF1AE;
			border: 1px solid;
		}

		td {
			text-align: center;
			background-color: #FFF6E8;
			border: 1px solid;
		}

		#div1 {
			background-color: #EDE289;
		}

		#div2 {
			background-color: #5C9F87;
		}

		#div3 {
			background-color: #BE6E9B;
		}
	</style>
	<title>PHP Start</title>
</head>
<body>
	<div id="div1">
		<h2>Таблица истинности</h2>
		<table>
					<!-- Заголовок таблицы -->
			<thead>
				<tr> 
					<th><?php echo "A"; ?></th>
					<th><?php echo "B"; ?></th>
					<th><?php echo "!A"; ?></th>
					<th><?php echo "A || B"; ?></th>
					<th><?php echo "A && B"; ?></th>
					<th><?php echo "A xor B"; ?></th>
				</tr>
			</thead>

			<tbody>
						<!-- Первая строка: false – false -->
				<tr></tr>
					<td><?php echo (int)$a = false; ?></td> 
					<td><?php echo (int)$b = false; ?></td>
					<td>
						<?php
							echo (int)!$a; 
						?></td>
					<td>
						<?php 
							echo (int)$result = ($a || $b);
						?>
					</td>
					<td>
						<?php 
							echo (int)$result = ($a && $b);
						?>
					</td>
					<td>
						<?php 
							echo (int)$result = ($a xor $b);
						?>
					</td>
				</tr>
						<!-- Вторая строка: false – true -->
				<tr>
					<td><?php echo (int)$a = false; ?></td> 
					<td><?php echo (int)$b = true; ?></td>
					<td>
						<?php
							echo (int)!$a; 
						?></td>
					<td>
						<?php 
							echo (int)$result = ($a || $b);
						?>
					</td>
					<td>
						<?php 
							echo (int)$result = ($a && $b);
						?>
					</td>
					<td>
						<?php 
							echo (int)$result = ($a xor $b);
						?>
					</td>
				</tr>
						<!-- Третья строка: true – false -->
				<tr>
					<td><?php echo (int)$a = true; ?></td> 
					<td><?php echo (int)$b = false; ?></td>
					<td>
						<?php
							echo (int)!$a; 
						?></td>
					<td>
						<?php 
							echo (int)$result = ($a || $b);
						?>
					</td>
					<td>
						<?php 
							echo (int)$result = ($a && $b);
						?>
					</td>
					<td>
						<?php 
							echo (int)$result = ($a xor $b);
						?>
					</td>
				</tr>
						<!-- Четвёртая строка: true – true -->
				<tr>
					<td><?php echo (int)$a = true; ?></td> 
					<td><?php echo (int)$b = true; ?></td>
					<td>
						<?php
							echo (int)!$a; 
						?></td>
					<td>
						<?php 
							echo (int)$result = ($a || $b);
						?>
					</td>
					<td>
						<?php 
							echo (int)$result = ($a && $b);
						?>
					</td>
					<td>
						<?php 
							echo (int)$result = ($a xor $b);
						?>
					</td>
				</tr>
				</tbody>
		</table>
	</div>
	
	<br>

	<div id="div2">
		<h2>Таблица гибкого сравнения</h2>
	
		<table>
			<thead>
				<tr>
					<th>==</th>
					<th>
						<?php 
							$b1 = true;
							echo $a1 = true;
						?>
					</th>
					<th>
						<?php 
							$b2 = false;
							echo (int)$a2 = false;
						?>
					</th>
					<th>
						<?php 
							$b3 = 1;
							echo $a3 = 1;
						?>	
					</th>
					<th>
						<?php 
							$b4 = 0;
							echo $a4 = 0;
						?>	
					</th>
					<th>
						<?php 
							$b5 = -1;
							echo $a5 = -1;
						?>	
					</th>
					<th>
						<?php 
							$b6 = "1";
							echo $a6 = "1";
						?>	
					</th>
					<th>
						<?php 
							$b7 = null;
							$a7 = null;
							echo "null";
						?>	
					</th>
					<th>
						<?php 
							$b8 = "php";
							echo $a8 = "php";
						?>	
					</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><?php echo (int)$b1?></td>
					<td><?php echo (int)$result = ($a1 == $b1)?></td>
					<td><?php echo (int)$result = ($a2 == $b1)?></td>
					<td><?php echo (int)$result = ($a3 == $b1)?></td>
					<td><?php echo (int)$result = ($a4 == $b1)?></td>
					<td><?php echo (int)$result = ($a5 == $b1)?></td>
					<td><?php echo (int)$result = ($a6 == $b1)?></td>
					<td><?php echo (int)$result = ($a7 == $b1)?></td>
					<td><?php echo (int)$result = ($a8 == $b1)?></td>
				</tr>

				<tr>
					<td><?php echo (int)$b2?></td>
					<td><?php echo (int)$result = ($a1 == $b2)?></td>
					<td><?php echo (int)$result = ($a2 == $b2)?></td>
					<td><?php echo (int)$result = ($a3 == $b2)?></td>
					<td><?php echo (int)$result = ($a4 == $b2)?></td>
					<td><?php echo (int)$result = ($a5 == $b2)?></td>
					<td><?php echo (int)$result = ($a6 == $b2)?></td>
					<td><?php echo (int)$result = ($a7 == $b2)?></td>
					<td><?php echo (int)$result = ($a8 == $b2)?></td>
				</tr>

				<tr>
					<td><?php echo (int)$b3?></td>
					<td><?php echo (int)$result = ($a1 == $b3)?></td>
					<td><?php echo (int)$result = ($a2 == $b3)?></td>
					<td><?php echo (int)$result = ($a3 == $b3)?></td>
					<td><?php echo (int)$result = ($a4 == $b3)?></td>
					<td><?php echo (int)$result = ($a5 == $b3)?></td>
					<td><?php echo (int)$result = ($a6 == $b3)?></td>
					<td><?php echo (int)$result = ($a7 == $b3)?></td>
					<td><?php echo (int)$result = ($a8 == $b3)?></td>
				</tr>

				<tr>
					<td><?php echo (int)$b4?></td>
					<td><?php echo (int)$result = ($a1 == $b4)?></td>
					<td><?php echo (int)$result = ($a2 == $b4)?></td>
					<td><?php echo (int)$result = ($a3 == $b4)?></td>
					<td><?php echo (int)$result = ($a4 == $b4)?></td>
					<td><?php echo (int)$result = ($a5 == $b4)?></td>
					<td><?php echo (int)$result = ($a6 == $b4)?></td>
					<td><?php echo (int)$result = ($a7 == $b4)?></td>
					<td><?php echo (int)$result = ($a8 == $b4)?></td>
				</tr>

				<tr>
					<td><?php echo (int)$b5?></td>
					<td><?php echo (int)$result = ($a1 == $b5)?></td>
					<td><?php echo (int)$result = ($a2 == $b5)?></td>
					<td><?php echo (int)$result = ($a3 == $b5)?></td>
					<td><?php echo (int)$result = ($a4 == $b5)?></td>
					<td><?php echo (int)$result = ($a5 == $b5)?></td>
					<td><?php echo (int)$result = ($a6 == $b5)?></td>
					<td><?php echo (int)$result = ($a7 == $b5)?></td>
					<td><?php echo (int)$result = ($a8 == $b5)?></td>
				</tr>

				<tr>
					<td><?php echo (int)$b6?></td>
					<td><?php echo (int)$result = ($a1 == $b6)?></td>
					<td><?php echo (int)$result = ($a2 == $b6)?></td>
					<td><?php echo (int)$result = ($a3 == $b6)?></td>
					<td><?php echo (int)$result = ($a4 == $b6)?></td>
					<td><?php echo (int)$result = ($a5 == $b6)?></td>
					<td><?php echo (int)$result = ($a6 == $b6)?></td>
					<td><?php echo (int)$result = ($a7 == $b6)?></td>
					<td><?php echo (int)$result = ($a8 == $b6)?></td>
				</tr>

				<tr>
					<td><?php echo "null"?></td>
					<td><?php echo (int)$result = ($a1 == $b7)?></td>
					<td><?php echo (int)$result = ($a2 == $b7)?></td>
					<td><?php echo (int)$result = ($a3 == $b7)?></td>
					<td><?php echo (int)$result = ($a4 == $b7)?></td>
					<td><?php echo (int)$result = ($a5 == $b7)?></td>
					<td><?php echo (int)$result = ($a6 == $b7)?></td>
					<td><?php echo (int)$result = ($a7 == $b7)?></td>
					<td><?php echo (int)$result = ($a8 == $b7)?></td>
				</tr>

				<tr>
					<td><?php echo $b8?></td>
					<td><?php echo (int)$result = ($a1 == $b8)?></td>
					<td><?php echo (int)$result = ($a2 == $b8)?></td>
					<td><?php echo (int)$result = ($a3 == $b8)?></td>
					<td><?php echo (int)$result = ($a4 == $b8)?></td>
					<td><?php echo (int)$result = ($a5 == $b8)?></td>
					<td><?php echo (int)$result = ($a6 == $b8)?></td>
					<td><?php echo (int)$result = ($a7 == $b8)?></td>
					<td><?php echo (int)$result = ($a8 == $b8)?></td>
				</tr>

			</tbody>
		</table>
	</div>

	<br>
	
	<div id="div3">
		<h2>Таблица жесткого сравнения</h2>

		<table>
			<thead>
				<tr>
					<th>===</th>
					<th>
						<?php 
							$b1 = true;
							echo $a1 = true;
						?>
					</th>
					<th>
						<?php 
							$b2 = false;
							echo (int)$a2 = false;
						?>
					</th>
					<th>
						<?php 
							$b3 = 1;
							echo $a3 = 1;
						?>	
					</th>
					<th>
						<?php 
							$b4 = 0;
							echo $a4 = 0;
						?>	
					</th>
					<th>
						<?php 
							$b5 = -1;
							echo $a5 = -1;
						?>	
					</th>
					<th>
						<?php 
							$b6 = "1";
							echo $a6 = "1";
						?>	
					</th>
					<th>
						<?php 
							$b7 = null;
							$a7 = null;
							echo "null";
						?>	
					</th>
					<th>
						<?php 
							$b8 = "php";
							echo $a8 = "php";
						?>	
					</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><?php echo (int)$b1?></td>
					<td><?php echo (int)$result = ($a1 === $b1)?></td>
					<td><?php echo (int)$result = ($a2 === $b1)?></td>
					<td><?php echo (int)$result = ($a3 === $b1)?></td>
					<td><?php echo (int)$result = ($a4 === $b1)?></td>
					<td><?php echo (int)$result = ($a5 === $b1)?></td>
					<td><?php echo (int)$result = ($a6 === $b1)?></td>
					<td><?php echo (int)$result = ($a7 === $b1)?></td>
					<td><?php echo (int)$result = ($a8 === $b1)?></td>
				</tr>

				<tr>
					<td><?php echo (int)$b2?></td>
					<td><?php echo (int)$result = ($a1 === $b2)?></td>
					<td><?php echo (int)$result = ($a2 === $b2)?></td>
					<td><?php echo (int)$result = ($a3 === $b2)?></td>
					<td><?php echo (int)$result = ($a4 === $b2)?></td>
					<td><?php echo (int)$result = ($a5 === $b2)?></td>
					<td><?php echo (int)$result = ($a6 === $b2)?></td>
					<td><?php echo (int)$result = ($a7 === $b2)?></td>
					<td><?php echo (int)$result = ($a8 === $b2)?></td>
				</tr>

				<tr>
					<td><?php echo (int)$b3?></td>
					<td><?php echo (int)$result = ($a1 === $b3)?></td>
					<td><?php echo (int)$result = ($a2 === $b3)?></td>
					<td><?php echo (int)$result = ($a3 === $b3)?></td>
					<td><?php echo (int)$result = ($a4 === $b3)?></td>
					<td><?php echo (int)$result = ($a5 === $b3)?></td>
					<td><?php echo (int)$result = ($a6 === $b3)?></td>
					<td><?php echo (int)$result = ($a7 === $b3)?></td>
					<td><?php echo (int)$result = ($a8 === $b3)?></td>
				</tr>

				<tr>
					<td><?php echo (int)$b4?></td>
					<td><?php echo (int)$result = ($a1 === $b4)?></td>
					<td><?php echo (int)$result = ($a2 === $b4)?></td>
					<td><?php echo (int)$result = ($a3 === $b4)?></td>
					<td><?php echo (int)$result = ($a4 === $b4)?></td>
					<td><?php echo (int)$result = ($a5 === $b4)?></td>
					<td><?php echo (int)$result = ($a6 === $b4)?></td>
					<td><?php echo (int)$result = ($a7 === $b4)?></td>
					<td><?php echo (int)$result = ($a8 === $b4)?></td>
				</tr>

				<tr>
					<td><?php echo (int)$b5?></td>
					<td><?php echo (int)$result = ($a1 === $b5)?></td>
					<td><?php echo (int)$result = ($a2 === $b5)?></td>
					<td><?php echo (int)$result = ($a3 === $b5)?></td>
					<td><?php echo (int)$result = ($a4 === $b5)?></td>
					<td><?php echo (int)$result = ($a5 === $b5)?></td>
					<td><?php echo (int)$result = ($a6 === $b5)?></td>
					<td><?php echo (int)$result = ($a7 === $b5)?></td>
					<td><?php echo (int)$result = ($a8 === $b5)?></td>
				</tr>

				<tr>
					<td><?php echo (int)$b6?></td>
					<td><?php echo (int)$result = ($a1 === $b6)?></td>
					<td><?php echo (int)$result = ($a2 === $b6)?></td>
					<td><?php echo (int)$result = ($a3 === $b6)?></td>
					<td><?php echo (int)$result = ($a4 === $b6)?></td>
					<td><?php echo (int)$result = ($a5 === $b6)?></td>
					<td><?php echo (int)$result = ($a6 === $b6)?></td>
					<td><?php echo (int)$result = ($a7 === $b6)?></td>
					<td><?php echo (int)$result = ($a8 === $b6)?></td>
				</tr>

				<tr>
					<td><?php echo "null"?></td>
					<td><?php echo (int)$result = ($a1 === $b7)?></td>
					<td><?php echo (int)$result = ($a2 === $b7)?></td>
					<td><?php echo (int)$result = ($a3 === $b7)?></td>
					<td><?php echo (int)$result = ($a4 === $b7)?></td>
					<td><?php echo (int)$result = ($a5 === $b7)?></td>
					<td><?php echo (int)$result = ($a6 === $b7)?></td>
					<td><?php echo (int)$result = ($a7 === $b7)?></td>
					<td><?php echo (int)$result = ($a8 === $b7)?></td>
				</tr>

				<tr>
					<td><?php echo $b8?></td>
					<td><?php echo (int)$result = ($a1 === $b8)?></td>
					<td><?php echo (int)$result = ($a2 === $b8)?></td>
					<td><?php echo (int)$result = ($a3 === $b8)?></td>
					<td><?php echo (int)$result = ($a4 === $b8)?></td>
					<td><?php echo (int)$result = ($a5 === $b8)?></td>
					<td><?php echo (int)$result = ($a6 === $b8)?></td>
					<td><?php echo (int)$result = ($a7 === $b8)?></td>
					<td><?php echo (int)$result = ($a8 === $b8)?></td>
				</tr>

			</tbody>
		</table>
	</div>

	<div>
		<span>Вывод: гибкое сравнение работает со значением операнда, а жётское – со значением и<strong>типом</strong>операнда.</span>
		</div>
	</body>
</html>