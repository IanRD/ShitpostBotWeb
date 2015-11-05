<?php
$GlOBALS['title'] = 'Template Designer';
$GlOBALS['style'] = '../style.css';
include('../header.php');

include("../dataaccess/loader.php");
$w = 625;
$h = 790;
?>

<link rel="stylesheet" href="css/style.css">
<canvas id='canvas' width='625' height='790'></canvas><br>

<input type='button' id='red' value='Red'/>
<input type='button' id='green' value='Green'/>
<input type='button' id='blue' value='Blue'/>
<input type='button' id='purple' value='Purple'/><br>
<?php
	$colours = array('red', 'green', 'blue', 'purple');
	foreach($colours as $colour){
		addCategoriesComboBox($colour."cat");
	}
?><br>
<input type='button' id='eraser' value='Eraser'/>
<input type='button' id='clear' value='Clear'/>
<input type='button' id='undo' value='Undo'/><br><br>

<input id='fillcolourchk' type='checkbox'/>Use Background Fill Colour?<br>
<input id='fillcolour' class='color'/><br><br>

<textarea id='json' value=''/></textarea><br>

<div id='rectlist'></div><br>
<div id='log'></div>

<script type="text/javascript" src="jscolor/jscolor.js"></script>
<script src="js/design.js"></script>
<script>
$(document).ready(function(){
	init(<?="$w, $h"?>); //before any of you whinge about this line of code, THIS IS TEMPORARY
	//THIS SHIT WILL BE REPLACED BY AJAX
	//so SIT YOUR ASSES DOWN and wait for everything else to be in place
});
</script>
<?php include('../footer.php');