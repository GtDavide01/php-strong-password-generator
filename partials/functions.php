<?php function generate($number)
{
    $pass = " ";
    $stringapassword = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXY1234567890!?$?%^&*()[}]:;@#>.?/";
    for ($i = 0; $i < $number; $i++) {
        $random = rand(0, strlen($stringapassword));
        $pass .=  $stringapassword[$random];
    }
    return $pass;
}
