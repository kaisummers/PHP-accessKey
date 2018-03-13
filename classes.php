<?php
/*
 * PHP intEncode
 */
class intEncode
{
    public static function encode($n,$c){
        foreach(str_split($n) as $v){
            $o[] = $c[$v];
        }
        return implode($o);
    }
    public static function decode($n,$c){
        foreach(str_split($n) as $v){
            $o[] = strpos($c,$v);
        }
        return implode($o);
    }
}
