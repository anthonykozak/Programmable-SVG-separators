<?php
require_once 'separator.php';

$typeList = ['diagonal', 'triangle', 'triangle_inverse', 'big_triangle', 'big_triangle_inverse', 'rounded_triangle', 'rounded_triangle_inverse', 'rounded_corner_left', 'rounded_corner_left_inverse', 'rounded_corner_right', 'rounded_corner_right_inverse', 'big_circle', 'big_circle_inverse'];
$sizeList = [ [10, 100], [3, 30] ];
$sideList = ['up', 'down'];
foreach( $typeList as $type )
{
	foreach( $sizeList as $size )
	{
		echo '<div class="imageContainer"></div>';
		echo SVGSeparator::draw( $type, 'up', 'black', $size[1], $size[0] ); 
		echo '<div class="blackContainer">'.$type. ' up & down sides</div>';
		echo SVGSeparator::draw( $type, 'down', 'black', $size[1], $size[0] ); 
		
	}
}
?>
<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
<link href="separator.css" rel="stylesheet">
<style>
body,html{
	padding:0;
	margin:0;
}
.blackContainer{
	font-family: 'Black Han Sans', sans-serif;
	font-size:30px;
	text-align:center;
	background:black;
	color:white;
	width:100%;
	display:block;
	padding: 100px 0;
}
.imageContainer{
	background-image:url('https://images.pexels.com/photos/370799/pexels-photo-370799.jpeg');
	background-attachment: fixed;
    background-position: center; 
	width:100%;
	display:block;
	height:100px;
	padding: 100px 0;
}
</style>