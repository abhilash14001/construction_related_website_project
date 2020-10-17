<?php
/**
 * Created by PhpStorm.
 * User: albitar
 * Date: 17/02/20
 * Time: 11:52 AM
 */
include "../include/dbconfig.php";



$cooks=get_cookies();



if(count($cooks)>0)
{





   $orders=json_decode($_COOKIE['orders']);

   $total=0;
for($i=0;$i<count($orders);$i++)
{


    $total=$total+$orders[$i]->price;
}
echo json_encode(array("count"=>count($orders),"price"=>$total));
}else{



    echo json_encode(array("status"=>"Y","count"=>"0","price"=>0));


}






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
