<?php
/**
 * Created by
 * User: Nitesh Kumar
 * Date: 28-10-2020
 * Time: 07:35 PM
 */

/**
 * @param $text
 * @param int $chars
 * @return string
 */
function shortText($text, $chars =150){
    $text = $text." ";
    $text = substr($text,0,$chars);
    $text = substr($text,0,strrpos($text,' '));
    return $text;
}