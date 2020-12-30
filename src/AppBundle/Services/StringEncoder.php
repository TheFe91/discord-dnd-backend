<?php


namespace AppBundle\Services;


class StringEncoder
{
    public static function encodeToUTF8($dat) {
        if (is_string($dat)) {
            return utf8_encode($dat);
        } elseif (is_array($dat)) {
            $ret = [];
            foreach ($dat as $i => $d) $ret[ $i ] = self::encodeToUTF8($d);

            return $ret;
        } elseif (is_object($dat)) {
            foreach ($dat as $i => $d) $dat->$i = self::encodeToUTF8($d);

            return $dat;
        } else {
            return $dat;
        }
    }
}