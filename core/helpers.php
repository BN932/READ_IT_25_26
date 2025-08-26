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

function slugify(string $text): string { 
	
	$text = strtolower($str); 
	 
	$text = str_replace(' ', '-', $str); 
	 
	$text = preg_replace('/[^a-z0-9\-]/', '', $str); 
 
	$text = preg_replace('/-+/', '-', $str); 
	
	$text = trim($str, '-'); 
	
	return $text; 
}