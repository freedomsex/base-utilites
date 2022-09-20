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
        $date = new \DateTime($time);
        return $date->modify("$sec sec")->format(self::DSTR);
    }

    public static function DateTime($mySQLDate)
    {
        return \DateTime::createFromFormat(self::DSTR, $mySQLDate);
    }

    public static function decSec($sec = 1, $time = null)
    {
        return self::offset($sec, $time, true);
    }

    public static function decMin($min = 1, $time = null)
    {
        return self::decSec(60 * $min, $time);
    }

    public static function decHour($hour = 1, $time = null)
    {
        return self::decSec(60 * 60 * $hour, $time);
    }

    public static function decDay($day = 1, $time = null)
    {
        return self::decSec(60 * 60 * 24 * $day, $time);
    }

    public static function decMonth($month = 1, $time = null)
    {
        return self::decSec(60 * 60 * 24 * 30 * $month, $time);
    }


    public static function incSec($sec = 1, $time = null)
    {
        return self::offset($sec, $time, false);
    }

    public static function incMin($min = 1, $time = null)
    {
        return self::incSec(60 * $min, $time);
    }

    public static function incHour($hour = 1, $time = null)
    {
        return self::incSec(60 * 60 * $hour, $time);
    }

    public static function incDay($day = 1, $time = null)
    {
        return self::incSec(60 * 60 * 24 * $day, $time);
    }

    public static function incMonth($month = 1, $time = null)
    {
        return self::incSec(60 * 60 * 24 * 30 * $month, $time);
    }
}
