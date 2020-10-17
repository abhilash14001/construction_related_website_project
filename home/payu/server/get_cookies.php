<?php
/**
 * Created by PhpStorm.
 * User: albitar
 * Date: 17/02/20
 * Time: 11:52 AM
 */



echo json_encode(json_decode($_COOKIE['orders']));

function get_cookies()
{

    if(isset($_COOKIE['orders']))
    {

        return json_decode($_COOKIE['orders']);

    }else
    {

        return [];

    }


}
