<?php

use Carbon\Carbon;

class bulanHelper
{
    public static function bulan()
    {
        return self::convertToRoman(Carbon::now()->format('m'));
    }

    public static function convertToRoman($bulan)
    {
        $romans = ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII'];
        return $romans[$bulan - 1];
    }
}
