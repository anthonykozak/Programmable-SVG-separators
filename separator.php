<?php
/**
* Author : Anthony Kozak 
* Website : https://exoa.fr
**/
class SVGSeparator
{
	public static function draw( $type = 'space', $side = 'up', $color = 'white', $height = 100, $width = 10 )
	{

		$width10 = $width;
		$width1 = round($width  / 10);
		$width3 = round($width  / 3);
		$width40 = 50 - $width;
		$width47 = 50 - $width3;
		$width49 = 50 - $width1;
		$width51 = 50 + $width1;
		$width53 = 50 + $width3;
		$width60 = 50 + $width;
		$width90 = 100 - $width;
		$width97 = 100 - $width3;
		$width99 = 100 - $width1;
		$height1 = $height + 1;
		$height80 = round($height *.8);
		$height20 = round($height *.2);

		$str = "<svg class=\"". ($side == 'up' ? 'svg-upper-previous' : 'svg-down-next') ."\" style=\"top:-{$height}px;margin-bottom:-{$height}px;\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"100%\" height=\"$height\" viewBox=\"0 0 100 $height\" preserveAspectRatio=\"none\">";

		if($type == 'diagonal' && $side == 'down' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M0 0 L100 $height L100 0 Z\"></path>";
		}else if($type == 'diagonal' && $side == 'up' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M0 $height L100 0 L100 $height Z\"></path>";
		}else if($type == 'triangle' && $side == 'down' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M0 0 L$width40 0 L50 $height L$width60 0 L100 0 Z\"></path>";
		}else if($type == 'triangle' && $side == 'up' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M0 $height L$width40 $height L50 0 L$width60 $height L100 $height Z\"></path>";
		}else if($type == 'triangle_inverse' && $side == 'up' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M0 0 L$width40 0 L50 $height L$width60 0 L100 0 L100 $height1 L0 $height Z\"></path>";
		}else if($type == 'triangle_inverse' && $side == 'down' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M0 $height L$width40 $height L50 0 L$width60 $height L100 $height L100 0 L0 0 Z\"></path>";
		}else if($type == 'big_triangle' && $side == 'down' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M0 0 L50 $height L100 0 Z\"></path>";
		}else if($type == 'big_triangle' && $side == 'up' ) {
		$str .= "<path style=\"fill:$color;\" d=\"M0 $height L50 0 L100 $height Z\"></path>";
		}else if($type == 'big_triangle_inverse' && $side == 'up' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M0 0 L50 $height L100 0 L100 $height1 L0 $height Z\"></path>";
		}else if($type == 'big_triangle_inverse' && $side == 'down' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M0 $height L50 0 L100 $height L100 0 L0 0 Z\"></path>";
		}else if($type == 'rounded_triangle' && $side == 'down' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M50 $height C$width49 $height80 $width47 0 $width40 0 L51 0 Z\"></path>";
			$str .= "<path style=\"fill:$color;\" d=\"M50 $height C$width51 $height80 $width53 0 $width60 0 L49 0 Z\"></path>";
		}else if($type == 'rounded_triangle' && $side == 'up' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M50 0 C$width49 $height20 $width47 $height $width40 $height L51 $height Z\"></path>";
			$str .= "<path style=\"fill:$color;\" d=\"M50 0 C$width51 $height20 $width53 $height $width60 $height L49 $height Z\"></path>";
		}else if($type == 'rounded_triangle_inverse' && $side == 'up' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M50 $height C$width49 $height80 $width47 0 $width40 0 L0 0 L0 $height L50 $height Z\"></path>";
			$str .= "<path style=\"fill:$color;\" d=\"M50 $height C$width51 $height80 $width53 0 $width60 0 L100 0 L100 $height L50 $height Z\"></path>";
		}else if($type == 'rounded_triangle_inverse' && $side == 'down' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M50 0 C$width49 $height20 $width47 $height $width40 $height L0 $height L0 0 Z\"></path>";
			$str .= "<path style=\"fill:$color;\" d=\"M50 0 C$width51 $height20 $width53 $height $width60 $height L100 $height L100 0 Z\"></path>";
		}else if($type == 'rounded_corner_left' && $side == 'up' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M0 0 C$width1 $height20 $width3 $height $width10 $height L0 $height Z\"></path>";
		}else if($type == 'rounded_corner_right' && $side == 'up' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M100 0 C$width99 $height20 $width97 $height $width90 $height L100 $height Z\"></path>";
		}else if($type == 'rounded_corner_left' && $side == 'down' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M0 $height C$width1 $height80 $width3 0 $width10 0 L0 -1 Z\"></path>";
		}else if($type == 'rounded_corner_right' && $side == 'down' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M100 $height C$width99 $height80 $width97 0 $width90 0 L100 0 Z\"></path>";
		}else if($type == 'rounded_corner_left_inverse' && $side == 'down' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M0 0 C$width1 $height20 $width3 $height $width10 $height L100 $height L100 0 Z\"></path>";
		}else if($type == 'rounded_corner_right_inverse' && $side == 'down' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M100 0 C$width99 $height20 $width97 $height $width90 $height L0 $height L0 0 L100 0  Z\"></path>";
		}else if($type == 'rounded_corner_left_inverse' && $side == 'up' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M0 $height C$width1 $height80 $width3 0 $width10 0 L100 0 L100 $height L0 $height Z\"></path>";
		}else if($type == 'rounded_corner_right_inverse' && $side == 'up' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M100 $height C$width99 $height80 $width97 0 $width90 0 L0 0 L0 $height L100 $height Z\"></path>";
		}else if($type == 'big_circle' && $side == 'up' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M0 $height C$width40 0 $width60 0 100 $height Z\"/></path>";
		}else if($type == 'big_circle' && $side == 'down' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M0 0 C$width40 $height $width60 $height 100 0 Z\"/></path>";
		}else if($type == 'big_circle_inverse' && $side == 'up' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M0 0 C$width40 $height $width60 $height 100 0 L100 $height L0 $height Z\"/></path>";
		}else if($type == 'big_circle_inverse' && $side == 'down' ) {
			$str .= "<path style=\"fill:$color;\" d=\"M0 $height C$width40 0 $width60 0 100 $height L100 0 L0 0 Z\"/></path>";
		}else if($type == 'space' ) {
			$str .= "<div style=\"display:block;height:{$height}px;\"></div>";
		}
		$str .= '</svg>';
		return $str;
	}
	
}
?>
