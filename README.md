# Programmable-SVG-separators
A simple PHP file to generate HTML SVG separators for your web pages.

# How To
```
require_once 'separator.php';
echo SVGSeparator::draw( $type, $side, $color, $height, $width ); 
```
# Parameters
- $type : 'diagonal', 'triangle', 'triangle_inverse', 'big_triangle', 'big_triangle_inverse', 'rounded_triangle', 'rounded_triangle_inverse', 'rounded_corner_left', 'rounded_corner_left_inverse', 'rounded_corner_right', 'rounded_corner_right_inverse', 'big_circle', 'big_circle_inverse'
- $side : 'up', 'down'
- $color : css color value like #RGB or color string
- $height : height of the svg, 100 by default
- $width : width of the effect inside the svg, 10 by default. The svg size is 100%

# Demo
(demo.jpg)