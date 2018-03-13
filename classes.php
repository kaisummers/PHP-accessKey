<?php
/*
 * PHP-intEncode
 */
class intEncode
{
    const CHARS = "doW4J8l02v"; // Replace with your own 10 random characters
    public static function encode($n)
    {
        foreach(str_split($n) as $v)
        {
            $o[] = self::CHARS[$v];
        }
        return implode($o);
    }
    public static function decode($n)
    {
        foreach(str_split($n) as $v)
        {
            $o[] = strpos(self::CHARS,$v);
        }
        return implode($o);
    }
}
