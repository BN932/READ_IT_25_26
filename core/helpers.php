<?php 

namespace Core\Helpers;

function truncate(string $text,int $length=100)
{
    if (strlen($text) > $length) {
        $cut = substr($text, 0, $length);
        $cut = substr($cut, 0, strrpos($cut, ' '));
        return $cut . '...';
    } else {
        return $text;
    }
}