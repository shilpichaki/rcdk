<?php
/**
 * Created by PhpStorm.
 * User: Debesh
 * Date: 06-12-2018
 * Time: 18:32
 */
namespace App;

use DB;


Class Util
{
    public static function mysqlDateTimeConverter($date)
    {
        return date('Y-m-d H:i:s', strtotime($date));
    }
}