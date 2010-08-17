===========================
CakePHP Placeholder Plugin
ohguma
===========================

[*_controller.php]
var $helpers = array('Placeholder.Placeholder');

[*.ctp]
echo $placeholder->png($size, $color, $bgcolor, $text);
echo $placeholder->jpg($size, $color, $bgcolor, $text);
echo $placeholder->gif($size, $color, $bgcolor, $text);


----
ダミー画像を生成するプラグインです。
Windows7(64) + PHP 5.2.13 + CakePHP 1.2.7 および
Windows7(64) + PHP 5.2.13 + CakePHP 1.3.3 で動作確認しています。

要:GD, PCRE

【使用方法】
ビューファイル中でPlaceholderヘルパーを使い、ダミー画像用のIMGタグを
出力します。表示するダミー画像は、プラグイン中のコントローラで作成し
ます。

(1)PNG形式でダミー画像用のIMGタグを返す
   echo $placeholder->png($size, $color, $bgcolor, $text)

(2)JPEG形式でダミー画像のIMGタグを返す
   echo $placeholder->jpg($size, $color, $bgcolor, $text)

(3)GIF形式でダミー画像のIMGタグを返す
   echo $placeholder->gif($size, $color, $bgcolor, $text)

【引数の説明】
$size       画像サイズを指定する。
            省略時は100x100の画像を作成する。
            例) 120     縦・横120pxの画像作成
                240x120 縦120px、横240pxの画像作成
$color      画像の文字色を指定する。ffffff形式。
            省略時は、a0a0a0。
$bgcolor    画像の背景色を指定する。ffffff形式。
            省略時は、f0f0f0。
$text       画像に出力するテキストを指定する。
            省略時は画像サイズを表示する。
            latin2 エンコーディングの組み込みのフォントのみ表示可。

- 以上 -