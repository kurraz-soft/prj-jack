<?php
if(!function_exists('dd'))
{
    function dd($var)
    {
        \yii\helpers\VarDumper::dump($var,10,true);
        die();
    }
}

if(!function_exists('pre'))
{
    function pre($var)
    {
        echo "<pre>";
        \yii\helpers\VarDumper::dump($var,10,true);
        echo "</pre>";
    }
}

if(!function_exists('clamp'))
{
    function clamp($current, $min, $max)
    {
        return max($min, min($max, $current));
    }
}