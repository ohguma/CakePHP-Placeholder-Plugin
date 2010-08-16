===========================
CakePHP Placeholder Plugin
===========================

[*_controller.php]
var $helpers = array('Placeholder.Placeholder');

[*.ctp]
echo $placeholder->png($size, $color, $bgcolor, $text);
echo $placeholder->image('png', $size, $color, $bgcolor, $text);

