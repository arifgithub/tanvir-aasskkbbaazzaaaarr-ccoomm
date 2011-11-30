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
    var $db_user = 'askbazaa_askdb';
    var $db_pass = 'arianwr0thy';
    var $db_name = 'askbazaa_askdb';

    function __construct(){
        //
    }

    function db_connect(){
        $link = mysql_pconnect($this->db_host, $this->db_user, $this->db_pass);
        $ok = mysql_select_db($this->db_name, $link);
        return $ok;
    }

    //----------------------------------------
    function get_Search_Result_JSON($db_result){
        $json = '{ "items" : [';
        while($row = mysql_fetch_assoc($db_result)){
            //printr($row);continue;
            //for($i=0; $i<=10; $i++){ // Temporarily used this loop to increase row for pagination
            
            //addslashes( iconv('ASCII', 'UTF-6//IGNORE',$row['product_name']))
            //addslashes( iconv('ASCII', 'ISO-8859-1//IGNORE',$row['product_name']))
            //mb_detect_encoding($row['product_name']);
            
            // These fields are getting problem with Google chrome browser:
            //      location, model, mini_order, quantity_available, price
            
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
                "product_condition_id" : "'.$row['product_condition_id'].'",
                "product_condition" : "'.$row['product_condition'].'",
                "member_type" : "'.$row['member_type'].'",
                "country_id" : "'.$row['country_id'].'",
                "is_company" : '.($row['member_type']=='Private'?'false':'true').',
                "is_private" : false,
                "is_seller" : '.($row['account_type']!='Seller'?'false':'true').',
                "is_buyer" : '.($row['account_type']!='Buyer'?'false':'true').',
                "is_seller_buyer" : '.($row['account_type']!='Both'?'false':'true').',
                "is_top_sell" : '.($row['product_type']==3?'true':'false').',
                "is_urgent_sell" : '.($row['product_type']==4?'true':'false').'
        
            },'."\n";
            //}
            
        }
        $json = rtrim($json, ",\n");
        $json .= '    ] }';
        
        echo $json;
    }
    //----------------------------------------

}
$ask = new askBazaar();
$ask->db_connect();
//----------------------------------------

//----------------------------------------
switch($_GET['action']){
    case 'keyword-search':
    case 'product-id':
        $sql = "SELECT
                    p.product_id, p.product_auto_id, p.product_delivery_place,
                    p.product_name, p.product_brand_model_name, p.product_minimum_order,
                    p.product_quantity_available, p.product_price, p.product_type,
                    pi.product_image_name,
                    pt.payment_terms,
                    c.id AS country_id,
                    mc.category,
                    mr.member_id, mr.member_type, mr.member_firstname, mr.member_lastname,
                    mr.member_email, mr.member_companyname,
                    at.account_type,
                    pcon.product_condition,
                    pcon.id AS product_condition_id
                FROM tbl_product p
                    LEFT JOIN tbl_product_condition pc ON pc.id=p.product_condition
                    LEFT JOIN product_image pi ON pi.product_id=p.product_id
                    LEFT JOIN main_categories mc ON mc.id=p.main_category_id
                    LEFT JOIN tbl_payment_terms pt ON pt.id=p.product_payment_terms
                    LEFT JOIN tbl_member_reg mr ON mr.member_id=p.member_id
                    LEFT JOIN tbl_account_type at ON at.id=mr.member_account_type
                    LEFT JOIN countries c ON c.id=mr.member_location
                    LEFT JOIN tbl_product_condition pcon ON pcon.id=p.product_condition";
        $sql .= ' WHERE 1';
        if($_POST['selLocation']!="" && $_POST['selLocation']!=""){
            $sql .= ' AND c.id='.$_POST['selLocation'];
        }
        if($_POST['txtKey']!="" && $_POST['txtKey']!="Select Products" && $_GET['action']=='keyword-search'){
            $sql .= ' AND ( p.product_name LIKE "%'.$_POST['txtKey'].'%"';
            $sql .= '   OR p.product_brand_model_name LIKE "%'.$_POST['txtKey'].'%"';
            $sql .= '   OR p.product_key_word LIKE "%'.$_POST['txtKey'].'%"';
            $sql .= '   OR mc.category LIKE "%'.$_POST['txtKey'].'%" ) ';
        }
        if($_GET['id']!="" && $_GET['id']!="Enter Product ID" && $_GET['action']=='product-id'){
            $sql .= ' AND p.product_id="'.$_GET['id'].'"';
        }
        $sql .= " GROUP BY p.product_id
                  ORDER BY p.product_id DESC";
        $res = mysql_query($sql);
        //var_dump($sql);
        $ask->get_Search_Result_JSON($res);
        break;
    
    case 'country-list':
        $sql = "SELECT * FROM countries ORDER BY country";
        $res = mysql_query($sql);
        //var_dump($sql);
        while($row = mysql_fetch_assoc($res)){
            echo '<option value="'.$row['id'].'">'.$row['country'].'</option>';
        }
        break;

    case 'product-condition-list':
        $sql = "SELECT * FROM tbl_product_condition ORDER BY id";
        $res = mysql_query($sql);
        //var_dump($sql);
        while($row = mysql_fetch_assoc($res)){
            echo '<option value="'.$row['id'].'">'.$row['product_condition'].'</option>';
        }
        break;
}
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