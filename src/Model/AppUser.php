<?php


namespace App\Model;

use RedBeanPHP\R as R;
use App\Helper\Database as DH;


class AppUser
{
    public static function GetUserByEmail($email){
        DH::InitConn();
        $qry = "SELECT * FROM app_users WHERE email = '".$email."'";
        $res = R::getRow($qry);

        return count($res) > 0 ? $res : false;
    }


}