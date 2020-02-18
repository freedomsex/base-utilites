<?php

namespace FreedomSex\BaseUtilites;

class DateOffset
{
    const DSTR = 'Y-m-d H:i:s';

    public static function offset($sec, $time = null, $negative = false)
    {
        if ($negative) {
            $sec = $sec * -1;
        }
        if (is_null($time)) {
            $time = time();
        }
        $time = $time + $sec;
        $result = date(self::DSTR, $time);
        return $result;
    }
    
    
    public static function decSec($sec, $time = null)
    {
        return self::offset($sec, $time, true);
    }

    public static function decMin($min, $time = null)
    {
        return self::timeDecSec(60 * $min, $time);
    }

    public static function decHour($hour, $time = null)
    {
        return self::timeDecSec(60 * 60 * $hour, $time);
    }
     
    public static function decDay($day, $time = null)
    {
        return self::timeDecSec(60 * 60 * 24 * $day, $time);
    }
     
    public static function decMonth($month, $time = null)
    {
        return self::timeDecSec(60 * 60 * 24 * 30 * $month, $time);
    }   
    
    
    public static function incSec($sec, $time = null)
    {
        return self::offset($sec, $time, false);
    }

    public static function incMin($min, $time = null)
    {
        return self::timeIncSec(60 * $min, $time);
    }

    public static function incHour($hour, $time = null)
    {
        return self::timeIncSec(60 * 60 * $hour, $time);
    }
     
    public static function incDay($day, $time = null)
    {
        return self::timeIncSec(60 * 60 * 24 * $day, $time);
    }
     
    public static function incMonth($month, $time = null)
    {
        return self::timeIncSec(60 * 60 * 24 * 30 * $month, $time);
    }
}
