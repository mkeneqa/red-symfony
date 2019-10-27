<?php


namespace App\Helper;
use RedBeanPHP\R as R;

class Database
{
    public static function InitConn(){
        $isConnected = R::testConnection();
        if(!$isConnected)
        {
            R::setup('mysql:host=192.168.95.100:4002;dbname=local',
                'root', 'root');

        }
    }

}