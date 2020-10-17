<?php
/**
 * Created by PhpStorm.
 * User: ikbal
 * Date: 29/02/20
 * Time: 1:38 AM
 */

include "../include/dbconfig.php";

if(isset($_GET['product_category'])) {


    $date_start = date("Y-m-d") . " 00:00:05";
    $end_date = date("Y-m-d") . " 23:59:59";
    $curr = strtotime(date("Y-m-d H:i:s"));

  $categorys = $_GET['product_category'];

    $final = date("Y-m-d h:i:s", strtotime("+360 days", $curr));
    $offers = mysqli_query($con, "SELECT * FROM `products` WHERE product_category='$categorys'  limit 10");

    if(mysqli_num_rows($offers)>0)
    {


    while($row=mysqli_fetch_array($offers)) {
        if ($row['product_type'] == "Deal") {


            if (strtotime($row['offer_end']) > $curr) {

                ?>


                <li class="item product product-item">
                    <div class="product-item-info" data-container="product-grid">
                        <div class="image-grid">
                            <a  href="deal.php?id=<?php echo $row['product_id'] ?>&name=<?php echo $row['product_name'] ?>" class="product photo product-item-photo" tabindex="-1">
                                <span class="product-image-container" style="width:350px;">
                                    <span class="product-image-wrapper" style="padding-bottom: 100%;">
                                        <img class="product-image-photo lazyload"   src="../../ByGoIt/<?php $row['category_image_path'];?>" data-src="<?php echo $base_url . '/product/' . $row['product_image'] ?>"  width="" height="" alt="<?php echo ucwords($row['product_name'])?>"/>
                                    </span></span></a>
                        </div><!--LABEL PRODUCT-->
                        <div class="label-product label-sale">
                            <span class="sale-product-icon">Deal</span></div>
                        <div class="label-product label-new">
                            <span class="new-product-icon">New</span>
                        </div> <!--END LABEL PRODUCT-->
                        <div class="product details product-item-details">
                            <strong class="product name product-item-name">
                                <a class="product-item-link" href="deal.php?id=<?php echo $row['product_id'] ?>&name=<?php echo $row['product_name'] ?>"><?php echo ucwords($row['product_name'])?></a></strong>
                            <div class="product-reviews-summary short"> <div class="rating-summary"><span class="label"><span>Rating:</span></span>
                                    <div class="rating-result" title="73%"><span style="width:73%"><span>73%</span></span></div></div>
                                <div class="reviews-actions"><a class="action view" href="deal.php?id=<?php echo $row['product_id'] ?>&name=<?php echo $row['product_name'] ?>">1&nbsp;
                                        <span>Review</span></a></div></div>
                            <div class="price-box price-final_price" data-role="priceBox" data-product-id="2084" data-price-box="product-id-2084">
                                <span class="special-price">  <span class="price-container price-final_price&#x20;tax&#x20;weee" >
                                        <span class="price-label">Special Price</span>
                                        <span  id="product-price-2084"  data-price-amount="70" data-price-type="finalPrice" class="price-wrapper " >
                                            <span class="price">$70.00</span></span>  </span></span> <span class="old-price">
                                    <span class="price-container price-final_price&#x20;tax&#x20;weee" > <span class="price-label">Regular Price</span>
                                        <span  id="old-price-2084"  data-price-amount="83" data-price-type="oldPrice" class="price-wrapper " >
                                            <span class="price">$83.00</span></span>  </span></span>  </div>  <div class="product-item-inner">
                                <div class="product actions product-item-actions"><div class="actions-primary">
                                        <form data-role="tocart-form" data-product-sku="Korean Cosmetics Olive Cleansing" action="#" method="post">
                                            <input type="hidden" name="product" value="2084"><input type="hidden" name="uenc"
                                           value="">
                                            <input name="form_key" type="hidden" value="wKuylkm2SmpR56K8" />
                                            <button type="submit" title="Add to Cart" class="action tocart primary"><span>Add to Cart</span></button>
                                        </form></div><div data-role="add-to-links" class="actions-secondary">
                                        <a  href="deal.php?id=<?php echo $row['product_id'] ?>&name=<?php echo $row['product_name'] ?>" class="action towishlist" title="Add to Wish List" aria-label="Add to Wish List" data-post='' data-action="add-to-wishlist" role="button">
                                            <span>Add to Wish List</span></a>
                                        <a  href="deal.php?id=<?php echo $row['product_id'] ?>&name=<?php echo $row['product_name'] ?>" class="action tocompare" title="Add to Compare" aria-label="Add to Compare" data-post='' role="button">
                                            <span>Add to Compare</span></a> </div>
                                </div></div></div></div></li>



                <?php
            }

        }





if ($row['product_type'] == "Deal") {


if (strtotime($row['offer_end']) > $curr) {

    ?>





    <li class="item product product-item">
        <div class="product-item-info" data-container="product-grid">
            <div class="image-grid">
                <a  href="deal.php?id=<?php echo $row['product_id'] ?>&name=<?php echo $row['product_name'] ?>" class="product photo product-item-photo" tabindex="-1">
                                <span class="product-image-container" style="width:350px;">
                                    <span class="product-image-wrapper" style="padding-bottom: 100%;">
                                        <img class="product-image-photo lazyload"   src="../../ByGoIt/<?php echo $category_image_path; ?>" data-src="<?php echo $base_url . '/product/' . $row['product_image'] ?>"  width="" height="" alt="<?php echo ucwords($row['product_name'])?>"/>
                                    </span></span></a>
            </div><!--LABEL PRODUCT-->
            <div class="label-product label-sale">
                <span class="sale-product-icon">Offer</span></div>
            <div class="label-product label-new">
                <span class="new-product-icon">New</span>
            </div> <!--END LABEL PRODUCT-->
            <div class="product details product-item-details">
                <strong class="product name product-item-name">
                    <a class="product-item-link" href="deal.php?id=<?php echo $row['product_id'] ?>&name=<?php echo $row['product_name'] ?>"><?php echo ucwords($row['product_name'])?></a></strong>
                <div class="product-reviews-summary short"> <div class="rating-summary"><span class="label"><span>Rating:</span></span>
                        <div class="rating-result" title="73%"><span style="width:73%"><span>73%</span></span></div></div>
                    <div class="reviews-actions"><a class="action view" href="deal.php?id=<?php echo $row['product_id'] ?>&name=<?php echo $row['product_name'] ?>">1&nbsp;
                            <span>Review</span></a></div></div>
                <div class="price-box price-final_price" data-role="priceBox" data-product-id="2084" data-price-box="product-id-2084">
                                <span class="special-price">  <span class="price-container price-final_price&#x20;tax&#x20;weee" >
                                        <span class="price-label">Special Price</span>
                                        <span  id="product-price-2084"  data-price-amount="70" data-price-type="finalPrice" class="price-wrapper " >
                                            <span class="price">$70.00</span></span>  </span></span> <span class="old-price">
                                    <span class="price-container price-final_price&#x20;tax&#x20;weee" > <span class="price-label">Regular Price</span>
                                        <span  id="old-price-2084"  data-price-amount="83" data-price-type="oldPrice" class="price-wrapper " >
                                            <span class="price">$83.00</span></span>  </span></span>  </div>  <div class="product-item-inner">
                    <div class="product actions product-item-actions"><div class="actions-primary">
                            <form data-role="tocart-form" data-product-sku="Korean Cosmetics Olive Cleansing" action="#" method="post">
                                <input type="hidden" name="product" value="2084"><input type="hidden" name="uenc"
                                                                                        value="">
                                <input name="form_key" type="hidden" value="wKuylkm2SmpR56K8" />
                                <button type="submit" title="Add to Cart" class="action tocart primary"><span>Add to Cart</span></button>
                            </form></div><div data-role="add-to-links" class="actions-secondary">
                            <a  href="deal.php?id=<?php echo $row['product_id'] ?>&name=<?php echo $row['product_name'] ?>" class="action towishlist" title="Add to Wish List" aria-label="Add to Wish List" data-post='' data-action="add-to-wishlist" role="button">
                                <span>Add to Wish List</span></a>
                            <a  href="deal.php?id=<?php echo $row['product_id'] ?>&name=<?php echo $row['product_name'] ?>" class="action tocompare" title="Add to Compare" aria-label="Add to Compare" data-post='' role="button">
                                <span>Add to Compare</span></a> </div>
                    </div></div></div></div></li>




    <?php





}
        }











        if ($row['product_type'] == "Product") {





            ?>


            <li class="item product product-item">
                <div class="product-item-info" data-container="product-grid">
                    <div class="image-grid">
                        <a  href="orders.php?id=<?php echo $row['product_id'] ?>&name=<?php echo $row['product_name'] ?>" class="product photo product-item-photo" tabindex="-1">
                                <span class="product-image-container" style="width:350px;">
                                    <span class="product-image-wrapper" style="padding-bottom: 100%;">
                                        <img class="product-image-photo lazyload"   src="../../ByGoIt/<?php echo $row['category_image_path']; ?>" data-src="<?php echo $base_url . '/product/' . $row['product_image'] ?>"  width="" height="" alt="<?php echo ucwords($row['product_name'])?>"/>
                                    </span></span></a>
                    </div><!--LABEL PRODUCT-->
                    <!--END LABEL PRODUCT-->
                    <div class="product details product-item-details">
                        <strong class="product name product-item-name">
                            <a class="product-item-link" href="orders.php?id=<?php echo $row['product_id'] ?>&name=<?php echo $row['product_name'] ?>"><?php echo ucwords($row['product_name'])?></a></strong>
                        <div class="product-reviews-summary short"> <div class="rating-summary"><span class="label"><span>Rating:</span></span>
                                <div class="rating-result" title="73%"><span style="width:73%"><span>73%</span></span></div></div>
                            <div class="reviews-actions"><a class="action view" href="orders.php?id=<?php echo $row['product_id'] ?>&name=<?php echo $row['product_name'] ?>">1&nbsp;
                                    <span>Review</span></a></div></div>
                        <div class="price-box price-final_price" data-role="priceBox" data-product-id="2084" data-price-box="product-id-2084">
                                <span class="special-price">  <span class="price-container price-final_price&#x20;tax&#x20;weee" >
                                        <span class="price-label">Special Price</span>
                                        <span  id="product-price-2084"  data-price-amount="70" data-price-type="finalPrice" class="price-wrapper " >
                                            <span class="price">$70.00</span></span>  </span></span> <span class="old-price">
                                    <span class="price-container price-final_price&#x20;tax&#x20;weee" > <span class="price-label">Regular Price</span>
                                        <span  id="old-price-2084"  data-price-amount="83" data-price-type="oldPrice" class="price-wrapper " >
                                            <span class="price">$83.00</span></span>  </span></span>  </div>  <div class="product-item-inner">
                            <div class="product actions product-item-actions"><div class="actions-primary">
                                    <form data-role="tocart-form" data-product-sku="Korean Cosmetics Olive Cleansing" action="#" method="post">
                                        <input type="hidden" name="product" value="2084"><input type="hidden" name="uenc"
                                                                                                value="">
                                        <input name="form_key" type="hidden" value="wKuylkm2SmpR56K8" />
                                        <button type="submit" title="Add to Cart" class="action tocart primary"><span>Add to Cart</span></button>
                                    </form></div><div data-role="add-to-links" class="actions-secondary">
                                    <a  href="orders.php?id=<?php echo $row['product_id'] ?>&name=<?php echo $row['product_name'] ?>" class="action towishlist" title="Add to Wish List" aria-label="Add to Wish List" data-post='' data-action="add-to-wishlist" role="button">
                                        <span>Add to Wish List</span></a>
                                    <a  href="orders.php?id=<?php echo $row['product_id'] ?>&name=<?php echo $row['product_name'] ?>" class="action tocompare" title="Add to Compare" aria-label="Add to Compare" data-post='' role="button">
                                        <span>Add to Compare</span></a> </div>
                            </div></div></div></div></li>









<?php










        }







    }

    }else
    {


echo "No Data Found";


    }




}else
{

}