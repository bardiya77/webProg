<?php

use Carbon\Carbon;
use Hekmatinasser\Verta\Verta;

function generateFileName($name){
    
    $year = (Carbon::now()->year);
    $month = (Carbon::now()->month);
    $day = (Carbon::now()->day);
    $hour = (Carbon::now()->hour);
    $minute = (Carbon::now()->minute);
    $second = (Carbon::now()->second);
    $second = (Carbon::now()->second);
    $microsecond = (Carbon::now()->microsecond);

 return $year . '_' . $month . '_' . $day . '_' . $hour . '_' . $minute . '_' . $second . '_'.$microsecond . '_' . $name;
   
}

function convertShamsiToGregorianDate($date)
{
    if($date == null){
        return null;
    }
    $pattern = "/[-\s]/";
    $shamsiDateSplit = preg_split($pattern, $date);

    // $arrayGergorianDate = verta()->getGregorian($shamsiDateSplit[0], $shamsiDateSplit[1], $shamsiDateSplit[2]);
    $arrayGergorianDate = Verta::parse($date)->datetime();
    
    // return implode("-", $arrayGergorianDate) . " " . $shamsiDateSplit[3];
    return $arrayGergorianDate;

}
