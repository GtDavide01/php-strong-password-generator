<?php function generate($number)
{
    $stringapassword = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXY1234567890!?$?%^&*()[}]:;@#>.?/";
    for ($i = 0; $i < $number; $i++) {
        $random = rand(0, strlen($stringapassword));
        $pass =  $stringapassword[$random];
        echo $pass;
    }
    return $pass;
}
