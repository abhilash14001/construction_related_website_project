<?php
/**
 * Created by PhpStorm.
 * User: albitar
 * Date: 17/02/20
 * Time: 11:52 AM
 */
include "../include/dbconfig.php";

function check_array($id,$ss,$arr)
{

    $stat=false;
    for($i=0;$i<count($arr);$i++)
    {
        if($arr[$i]->id==$id && $arr[$i]->Quantity==$ss)
        {

            $stat=true;

        }

    }
    return $stat;

}




$id=$_POST['id'];

$qtys=$_POST['qty'];
$cooks=get_cookies();

$query=mysqli_query($con,"SELECT * FROM `products` WHERE product_id='".$_POST['id']."' limit 1");
$data=mysqli_fetch_array($query);
$qantity_query=mysqli_query($con,"SELECT * FROM `price_list_service` WHERE id='".$qtys."'  LIMIT 1");
$qty=mysqli_fetch_array($qantity_query);
if(check_array($id,$qty['id'],$cooks))
{
    echo json_encode(array("status"=>"N","count"=>count($cooks)));
    exit();

}else {


    array_push($cooks, array("id" => $_POST['id'], "Quantity" => $qty['id'], "description" => $data['product_name'], "price" => $qty['new_price'], "img_path" => $base_url."/product/".$data['product_image']));

    setcookie("orders", json_encode($cooks), time() + 60 * 60 * 24 * 7);



    echo json_encode(array("status"=>"Y","count"=>count($cooks)));

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
