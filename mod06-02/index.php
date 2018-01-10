<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width,initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<title></title>
</head>
<body>


	<?php 

	//$lyrics = array('star', 'shine', 'yellow');

	//act 1
	//echo "Look at the $lyrics[0], look how they $lyrics[1] for you, and everything you do. <br>
	//	Yeah, they were all $lyrics[2].";


	// act 2
	// echo "<ul>
	//		<li> $lyrics[1]</li>
	//		<li> $lyrics[0]</li>
	//		<li> $lyrics[2]</li>
	// 		</ul>";

	//act3
	$firstname =array('Steph','Russell','LeBron');
	$lastname =array('Curry','Westbrook','James');
	$team =array('Warrior','Thunders','Cavaliers');
	$jersey =array('30','0','23');
	
	//echo "
	//Player: $firstname[0] $lastname[0]<br>
	//Team: $team[0]<br>
	//Jearsey: $jersey[0]<br>
	//<br>

	//Player: $firstname[1] $lastname[1]<br>
	//Team: $team[1]<br>
	//Jearsey: $jersey[1]<br>
	//<br>

	//Player: $firstname[2] $lastname[2]<br>
	//Team: $team[2]<br>
	//Jearsey: $jersey[2]<br>
	//<br>	"

	echo "

	<table>

		<tr>

			<th>Player</th>
			<th>Team</th>
			<th>Jersey</th>

		</tr>

		<tr>
			<td>$firstname[0] $lastname[0]</td>
			<td>$team[0]</td>
			<td>$jersey[0]</td>
		</tr>

		<tr>
			<td>$firstname[1] $lastname[1]</td>
			<td>$team[1]</td>
			<td>$jersey[1]</td>
		</tr>
		
		<tr>
			<td>$firstname[2] $lastname[2]</td>
			<td>$team[2]</td>
			<td>$jersey[2]</td>
		</tr>

	</table>



	"


	?>






</body>
</html>