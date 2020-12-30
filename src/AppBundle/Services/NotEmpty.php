<?php


namespace AppBundle\Services;


class NotEmpty
{
    public static function getNotEmpty($inputValue, $outputValue = null) {
        return $inputValue !== '' ? $inputValue : $outputValue;
    }
}