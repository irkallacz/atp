<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jakub
 * Date: 15.9.14
 * Time: 0:40
 * To change this template use File | Settings | File Templates.
 */

namespace App\Console;


use Nette\Utils\Arrays;
use Nette\Utils\Json;

class ParseUtils{
	public static function expandArrayKey(&$array, $key){
		if (array_key_exists($key,$array)) {
			$array[$key.'Min'] = Arrays::get($array[$key],'min',0);
			$array[$key.'Max'] = Arrays::get($array[$key],'max',$array[$key.'Min']);
			unset($array[$key]);
		}else {
			$array[$key.'Min'] = NULL;
			$array[$key.'Max'] = NULL;;
		}
	}

	public static function getKeyUnset(&$array,$key,$default = NULL){
		$value = Arrays::get($array,$key,$default);
		if (array_key_exists($key,$array)) unset($array[$key]);
		return $value;
	}

public static function JsonArray($array){
	    return array_map(function($value){
		    return (is_array($value)) ? Json::encode($value) : $value;
	    },$array);
    }

	public static function decodeMapLayer($s){
		$string = gzuncompress(base64_decode($s));
		$data = str_split($string,4);
		return array_map('ord', $data);
	}

	public static function mapPosition($x,$y,$width){
		return intval($y*$width+$x);
	}
}