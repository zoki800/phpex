<?php 
$heroesRaw = array(
	array("Cho'Gall",15,"http://us.battle.net/heroes/static/images/heroes/busts/chogall.jpg"),
	array("The lost vikings",5,"http://us.battle.net/heroes/static/images/heroes/busts/the-lost-vikings.jpg"),
	array("Tychus",12,"http://us.battle.net/heroes/static/images/heroes/busts/tychus.jpg"),
	array("Valla",25,"http://us.battle.net/heroes/static/images/heroes/busts/valla.jpg")
);

$heroesByGrade = array();
foreach($heroesRaw as $hero){
	$heroesByGrade[$hero[1]] = array($hero[0],$hero[2]);
}
ksort($heroesByGrade);
foreach($heroesByGrade as $index=>$hero){
	echo "<div style='width:200px;float:left;margin-right:10px;'><img src='".$hero[1]."' /><br />Name: ".$hero[0]."<br />Grade: ".$index."<br /></div>";
}