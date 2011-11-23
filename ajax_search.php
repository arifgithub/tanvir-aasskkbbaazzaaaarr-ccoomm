<?php
//----------------------------------------
if (!function_exists('printr')) {

    function printr($array, $return=false) {
        $str = "<pre>";
        $str .= print_r($array, true);
        $str .= "</pre>";

        if ($return) {
            return $str;
        } else {
            echo $str;
        }
    }

}
//----------------------------------------
class askBazaar{

    var $db_host = 'localhost';
    var $db_user = 'root';
    var $db_pass = 'admin';
    var $db_name = 'askbazaar';

    function __construct(){
        //
    }

    function db_connect(){
        $link = mysql_pconnect($this->db_host, $this->db_user, $this->db_pass);
        $ok = mysql_select_db($this->db_name, $link);
        return $ok;
    }
}
$ask = new askBazaar();
$ask->db_connect();
//----------------------------------------

//----------------------------------------
switch($_GET['action']){
    case 'keyword-search':
        $sql = "SELECT
                    p.product_id, p.product_auto_id, p.product_delivery_place,
                    p.product_name, p.product_brand_model_name, p.product_minimum_order,
                    p.product_quantity_available, p.product_price, p.product_type,
                    pi.product_image_name,
                    pt.payment_terms,
                    mr.member_id, mr.member_type, mr.member_firstname, mr.member_lastname,
                    mr.member_email, mr.member_companyname,
                    at.account_type,
                    pc.product_condition
                FROM tbl_product p
                    LEFT JOIN tbl_product_condition pc ON pc.id=p.product_condition
                    LEFT JOIN product_image pi ON pi.product_id=p.product_id
                    LEFT JOIN main_categories mc ON mc.id=p.main_category_id
                    LEFT JOIN tbl_payment_terms pt ON pt.id=p.product_payment_terms
                    LEFT JOIN tbl_member_reg mr ON mr.member_id=p.member_id
                    LEFT JOIN tbl_account_type at ON at.id=mr.member_account_type
                    LEFT JOIN tbl_product_condition pc ON pc.id=p.product_condition";
        if($_POST['txtKey']!="" && $_POST['txtKey']!="Select Products"){
            $sql .= ' WHERE p.product_name LIKE "%'.$_POST['txtKey'].'%"';
        }
        $sql .= " GROUP BY p.product_id
                  ORDER BY p.product_id DESC";
        $res = mysql_query($sql);
        //var_dump($sql);
        break;
    
    case 'search-by-id':
        break;
}
//----------------------------------------

//----------------------------------------
$json = '{ "items" : [';
while($row = mysql_fetch_assoc($res)){
    //printr($row);continue;
    //for($i=0; $i<=10; $i++){ // Temporarily used this loop to increase row for pagination
    
    //addslashes( iconv('ASCII', 'UTF-6//IGNORE',$row['product_name']))
    //addslashes( iconv('ASCII', 'ISO-8859-1//IGNORE',$row['product_name']))
    //mb_detect_encoding($row['product_name']);
    $json .= '{

        "product_id" : "'.$row['product_id'].'",
        "product_auto_id" : "'.addslashes($row['product_auto_id']).'",'
        /* product_type => Hot Sell(1), Store(2), Top Sell(3), Urgent Sell(4), Recent Sell(5), Featured(0) */.'
        "product_type" : "'.$row['product_type'].'",
        "company" : "'.addslashes($row['member_companyname']).'",
        "location" : "'.addslashes($row['product_delivery_place']).'",
        "title" : "'.addslashes(base64_encode($row['product_name'])).'",
        "model" : "'.addslashes($row['product_brand_model_name']).'",
        "image" : "'.addslashes($row['product_image_name']).'",
        "comment" : "'.addslashes(str_replace("\n","<br>",$row['product_summary'])).'",
        "payment" : "'.addslashes($row['payment_terms']).'",
        "mini_order" : "'.addslashes($row['product_minimum_order']).'",
        "quantity_available" : "'.addslashes($row['product_quantity_available']).'",
        "price" : "'.addslashes($row['product_price']).'",
        "verified" : "Company Ad",
        "member_id" : "'.$row['member_id'].'",
        "priority" : "1",
        "account_type" : "'.$row['account_type'].'",
        "product_condition" : "'.$row['product_condition'].'",
        "member_type" : "'.$row['member_type'].'",
        "is_company" : '.($row['member_type']=='Private'?'false':'true').',
        "is_private" : false,
        "is_seller" : '.($row['account_type']!='Seller'?'false':'true').',
        "is_buyer" : '.($row['account_type']!='Buyer'?'false':'true').',
        "is_seller_buyer" : '.($row['account_type']!='Both'?'false':'true').',
        "is_top_sell" : true,
        "is_urgent_sell" : false

    },'."\n";
    //}
    
}
$json = rtrim($json, ",\n");
$json .= '    ] }';

echo $json;
//----------------------------------------

/*
$json .= '{

    "product_id" : "1",
    "product_auto_id" : "Product ID abcd234",
    "company" : "Rimixdot ltd",
    "location" : "Dhaka",
    "title" : "Apple iphone Mobile",
    "model" : "'.addslashes('14.1" TFT LCD panel (1280*800 B141EW04 V5)').'",
    "image" : "http://askbazaar.loc/images/other/product1.jpg",
    "comment" : "computer peripherals service computers peripherals dealers , cpu , hardwares keyboards c omputer peripherals service pro fajsdlfjas... ",
    "payment" : "Bank Payment",
    "mini_order" : "10 Pcs",
    "quantity_available" : "100 Pcs",
    "price" : "100 Taka",
    "verified" : "Company Ad",
    "seller_id" : "1",
    "priority" : "1",

    "is_company" : true,
    "is_private" : false,
    "is_seller" : true,
    "is_buyer" : false,
    "is_top_sell" : true,
    "is_urgent_sell" : false

}';
*/