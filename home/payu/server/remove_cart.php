<?php
/**
 * Created by PhpStorm.
 * User: albitar
 * Date: 22/02/20
 * Time: 3:02 PM
 */

//setcookie("orders", "", time() / 90);


include "../include/dbconfig.php";



$cooks=get_cookies();



if(count($cooks)>0)
{






    $orders=json_decode($_COOKIE['orders']);


    setcookie("orders", "", time() / 90);

    $total=0;
    for($i=0;$i<count($orders);$i++)
    {
if($_POST['id']==$orders[$i]->id && $orders[$i]->Quantity==$_POST['qty'])
{

    array_splice($orders, $i, 1);


   //array_pop($sports);
}

       // $total=$total+$orders[$i]->price;
    }
    if(count($orders)>0)
    {
        setcookie("orders", json_encode($orders), time() + 60 * 60 * 24 * 7);

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
