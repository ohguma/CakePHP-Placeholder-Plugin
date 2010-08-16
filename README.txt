===========================
CakePHP Placeholder Plugin
===========================

[*_controller.php]
var $helpers = array('Placeholder.Placeholder');

[*.ctp]
echo $placeholder->png($size, $color, $bgcolor, $text);
echo $placeholder->jpg($size, $color, $bgcolor, $text);
echo $placeholder->gif($size, $color, $bgcolor, $text);


----
ダミー画像を生成するプラグインです。
Windows7(64) + PHP 5.2.13 + CakePHP 1.2.7 で動作確認しています。
要:GD, PCRE

(使用方法)
ビューファイル中でPlaceholderヘルパーを使い、ダミー画像用のimageタグを
出力します。

$placeholder->png($size, $color, $bgcolor, $text)
PNG形式でダミー画像作成

$placeholder->jpg($size, $color, $bgcolor, $text)
JPEG形式でダミー画像作成

$placeholder->gif($size, $color, $bgcolor, $text)
GIF形式でダミー画像作成

(引数の説明)
$size       画像サイズを指定する。
            例) 100     縦・横100pxの画像作成
                240x120 縦120px、横240pxの画像作成
$color      画像の文字色を指定する。ffffff形式。
$bgcolor    画像の背景色を指定する。ffffff形式。
$text       画像に出力するテキストを指定する。
            省略時は画像サイズを表示する。
            latin2 エンコーディングの組み込みのフォントのみ表示可。
