<?php
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
        $sql = "SELECT * FROM tbl_product p
                LEFT JOIN tbl_product_condition pc ON pc.id=p.product_condition
                LEFT JOIN product_image pi ON pi.product_id=p.product_id
                LEFT JOIN main_categories mc ON mc.id=p.main_category_id
                LEFT JOIN tbl_payment_terms pt ON pt.id=p.product_payment_terms";
        if($_POST['txtKey']!=""){
            $sql .= ' WHERE p.product_name LIKE "%'.$_POST['txtKey'].'%"';
        }
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
    
    for($i=0; $i<=10; $i++){ // Temporarily used this loop to increase row for pagination
    $json .= '{

        "product_id" : "'.$row['product_id'].'",
        "product_auto_id" : "'.$row['product_auto_id'].'",
        "company" : "Rimixdot ltd",
        "location" : "'.$row['product_delivery_place'].'",
        "title" : "'.$row['product_name'].'",
        "model" : "'.addslashes($row['product_brand_model_name']).'",
        "image" : "'.$row['product_image'].'",
        "comment" : "'.addslashes(str_replace("\n","<br>",$row['product_summary'])).'",
        "payment" : "'.$row['payment_terms'].'",
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

    },'."\n";
    }
    
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