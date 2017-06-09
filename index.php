<!DOCTYPE html>
<html>
<body>

<?php
$json1 = file_get_contents('http://www.cartoonnetwork.com/test/backend-quiz/games.json');
$json2 = file_get_contents('http://www.cartoonnetwork.com/test/backend-quiz/shows.json');
$data1 = json_decode($json1,true);
$data2=json_decode($json2,true);

for ($i = 0; $i < count($data1['games']); $i++) 
{
	for($j = 0; $j <= $i; $j++)
	{
		if($data1['games'][$i]['id']==$data2['shows'][$j]['id'])
		{
			echo "<br>";
			echo $data1['games'][$i]['id'];
			echo "<br>";
			echo $data2['shows'][$i]['show'];
			echo "<br>";
			echo $data1['games'][$i]['game'];
			echo "<br>";
		}
	}
   
}

?>

</body>
</html>
