<?php

// strlower: muda toda a string para minúsculo
// strupper: muda toda a string para maiúscula

$str = "esta string está toda em minúscula";

echo $str . "<br>";

$str2 = "esta string mudou para caixa alta. <br>";

echo strtoupper($str2);
echo strtolower($str2);