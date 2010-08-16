<?php
/**
 * Placeholder Plugin
 * Placeholder Helper
 *
 * @version 2010-08-16
 * @author  ohguma
 *
 */
class PlaceholderHelper extends AppHelper
{

    public $helpers = array("html");

    /**
     * PNG Placeholder
     */
    function png($size = null, $color = null, $bgcolor = null, $text = null)
    {
        return $this->image('png', $size, $color, $bgcolor, $text);
    }


    /**
     * JPEG Placeholder
     */
    function jpg($size = null, $color = null, $bgcolor = null, $text = null)
    {
        return $this->image('jpg', $size, $color, $bgcolor, $text);
    }


    /**
     * GIF Placeholder
     */
    function gif($size = null, $color = null, $bgcolor = null, $text = null)
    {
        return $this->image('png', $size, $color, $bgcolor, $text);
    }


    /**
     * Creates a formatted IMG element for Placeholder
     *
     * @param string $format  image format(png|jpg|gif)
     * @param string $size    ex) 100, 240x120
     * @param string $color   ex) ff0000(red)
     * @param string $bgcolor ex) 0000ff(blue)
     * @param string $text    text in image
     */
    function image($format = 'png', $size = null, $color = null, $bgcolor = null, $text = null)
    {
        if (is_array($size)) extract($size);
        $attr = array();
        $url = '/placeholder/image/' . strtolower($format);
        if (!empty($size)) {
            $url .= '/' . $size;
            if (is_numeric($size)) {
                $attr['width'] = $attr['height'] = $size;
            } elseif (preg_match('/^(\d+)\D(\d+)$/', $size, $ma)) {
                $attr['width']  = $ma[1];
                $attr['height'] = $ma[2];
            }
        }
        if (!empty($color)) {
            $url .= '/' . $color;
        }
        if (!empty($bgcolor)) {
            $url .= '/' . $bgcolor;
        }
        if (!empty($text)) {
            $url .= '?text=' . $text;
            $attr['alt'] = $text;
        }
        return $this->html->image($url, $attr);
    }

}