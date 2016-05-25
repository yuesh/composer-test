<?php
require 'vendor/autoload.php';
use Novel\Panlong as Panlong;
use Novel\Fanren as Fanren;
use Novel\Xingchen as Xingchen;

echo Panlong\Panlong2016::info();
echo Fanren\Fanren2016::info();
echo Xingchen\Xingchen2016::info();