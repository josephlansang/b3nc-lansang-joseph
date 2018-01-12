<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width,initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body>



<?php 


	// for ($row=1; $row <= 8; $row++)
	// $a = 1;
	// $b = 6;

	// echo "a=$a<br>";
	// echo "b=$b<br>";
	// $a=($a+$b)-$a;
	// $b=(($a+$b);
	// echo "a=$a<br>";
	// echo "b=$b<br>";

	// $colors = ['red','green','blue'];
	// $arrlength = count ($colors);

	// echo $arrlength;

	// for ($x=0; $x < $arrlength; $x++){
	// 	echo $colors[$x] . '<br>';
	// }

	// $age = ["peter"=>"35", "ben"=>"37","joe"=>"43"];

	// foreach ($age as $key => $value){
	// 	echo "key="."$key.". "value=".$value;

	// }


	// $team_ironman=["Tony", "War Machine", "Vision"];
	// $team_cap = ["Cap America", "Bucky", "Hawkeye","Falcon"];
	// $civil_war = [$team_ironman,$team_cap];

	// echo $civil_war[0][0]."<br>";
	// echo $civil_war[1][0]."<br>";
	// echo $civil_war[0][2]."<br>";
	// echo $civil_war[1][1]."<br>";

	$items = [
		['product'=>'Lenovo Laptop','price'=>100.00, 'quantity'=>100],
		['product'=>'Asus Tablet','price'=>200.00, 'quantity'=>10],
		['product'=>'Acer All-in-one','price'=>300.00, 'quantity'=>50],
		['product'=>'HP','price'=>400.00, 'quantity'=>1],
		['product'=>'Dell desktop','price'=>500.00, 'quantity'=>100]
	];

?>

<ul>
	
	<?php

	foreach ($items as $item) {
			echo '<li>'. $item['product'] . '</li>';
		}
	

	?>
</ul>

<hr>

<table>
	
	<thead>
		
		<th>Products</th>
		<th>Price</th>
		<th>Quantity</th>
	</thead>
	<tbody>
		<?php

			foreach ($items as $value) {

				echo '<tr>';
				echo '<td>'.$value['price'].'</td>';
				echo '<td>'.$value['product'].'</td>';
				echo '<td>'.$value['quantity'].'</td>';
				echo '</tr>';
			}
		?>
	</tbody>


</table>


</body>
</html>