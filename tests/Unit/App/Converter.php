<?php
/**
 * Created by PhpStorm.
 * User: Web-2
 * Date: 4/4/2019
 * Time: 8:06 PM
 */

namespace Tests\Unit\App;


class Converter
{

    /**
     * Converter constructor.
     */
    public function convert($number)
    {
        $out = "";

        $map = [
            "C" => 100,
            "XC" => 90,
            "L" => 50,
            "XL" => 40,
            "X" => 10,
            "IX" => 9,
            "V" => 5,
            "IV" => 4,
            "I" => 1,
        ];

//        if ($number >= 10) {
//            $out.= "X";
//            $number -= 10;
//        }
//        if ($number >= 5) {
//            $out.= "V";
//            $number -= 5;
//        }
//        if ($number >= 4) {
//            $out.= "IV";
//            $number -= 4;
//        }

        foreach ($map as $roman => $arabic) {
            while ($number >= $arabic) {
                $out.= $roman;
                $number -= $arabic;
            }
        }

//        $out.= str_repeat("I", $number);
        return $out;
    }
}