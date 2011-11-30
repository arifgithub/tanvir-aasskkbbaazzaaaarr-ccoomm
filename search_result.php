<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
    <title>::. Welcome to AskBazaar.com .::</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

    
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    
    <link type="text/css" rel="stylesheet" media="all" href="css/style.css" />
</head>

<body class="search-result">
<div id="container">
    
    <div id="header" class="bottom-space10">
        <img width="225" height="91" src="./images/theme/logo.jpg" />
        <ul class="right-block">
            <li class="site-welcome black_text12_BOLD">Welcome: AskBazaar.com</li>
            <li class="nav">
                <a href="#">Sign in</a>
                <span class="black_text11_Bold">|</span>
                <a href="#">Sign up</a>
            </li>
        </ul>
        <div class="free-offer"><a href="#" class="blue_text12_BOLD">ADVANCE SEARCH</a></div>
        <div id="searchbar">
            <form id="form1" name="form1" method="post" action="">
                <ul>
                    <li><input id="search-key" class="search-key" type="text" size="40" value="Select Products" name="txtKey" /></li>
                    <li>
                        <select name="selLocation" class="search-location">
                            <option>Select Location</option>
                        </select>
                    </li>
                    <li><input type="submit" value="Search" name="Submit" class="btn-submit" /></li>
                </ul>
            </form>
        </div>
        <!-- /#searchbar -->
    </div>
    <!-- /#header -->
    
    
    <div id="content">
        
        <div class="grey-box bottom-space10">
            <img width="988" height="200" src="images/other/search_result_banner_ad.jpg" />
        </div>
        <div class="grey-box bottom-space10">
            <img width="988" height="140" src="images/other/search_result_banner_ad-2.jpg" />
        </div>
        
        <div id="breadcrumb" class="top-bottom-space10">
            <a href="index.php"><img border="0" width="30" height="29" src="images/theme/home.png" /></a>
            <a class="blue_link_12" href="#">>> Search Result >> Seller</a>
        </div>
        
        <div id="result">
            <div class="tab corner">
                <ul class="company">
                    <li class="left-top"></li>
                    <li class="left"></li>
                    <li class="right-top"></li>
                    <li class="right"></li>
                    <li class="link"><a id="button-company" href="javascript:void(0);" class="orange_link12">Company</a></li>
                </ul>
            </div>
            <div class="tab corner">
                <ul class="private">
                    <li class="left-top"></li>
                    <li class="left"></li>
                    <li class="right-top"></li>
                    <li class="right"></li>
                    <li class="link"><a id="button-private" href="javascript:void(0);" class="orange_link12">Private</a></li>
                </ul>
            </div>
            <!-- /.tab -->
            
            <div class="tab-right-menu">
                <span class="purple_text12">You can also view list of :</span>
                <a id="btn-seller" class="orange_text16" href="javascript:void(0);"><strong>Seller</strong></a> <span class="ash_text16_Bold"> | </span>
                <a id="btn-buyer" class="purple_text16_Bold" href="javascript:void(0);"><strong>Buyer</strong></a>
            </div>
            
            <div class="result-top-bar corner">
                <br class="clear"/>
                <ul>
                    <li class="left-top"></li>
                    <li class="left"></li>
                    <li class="right-top"></li>
                    <li class="right"></li>
                    <li class="top-sell"><a id="btn-urgent-sell" href="javascript:void(0);" class="red_text12_Bold">Urgent Sell</a></li>
                    <li class="top-sell"><a id="btn-top-sell" href="javascript:void(0);" class="orange_text12_Bold">Top Sell</a></li>
                </ul>
            </div>
            <!-- /.result-top-bar -->
            <div class="result-item-list">
                <div class="item">
                    Loading ...
                </div>
                <br class="clear"/>
                <!-- /.item -->
                <!--<ul id="pagination">
                    <li class="prev">&lt;&lt; Prev</li>
                    <li class="current"></li>
                    <li class="next">Next &gt;&gt;</li>
                </ul>-->
                <!-- /#pagination -->
            </div>
            <!-- /.result-prod-list -->
        </div>
        <!-- /#result -->
        
        <div id="result-sidebar">
            <div id="refine-search" class="corner bottom-space10">
                <ul>
                    <li class="left-top"></li>
                    <li class="left"></li>
                    <li class="right-top"></li>
                    <li class="right"></li>
                    <li class="title orange_text16_Bold">Refine your Search</li>
                </ul>
                <div class="search-form blue-box black_text11">
                    <label for="selPriceRange">Price Range</label>
                    <select class="ash_text11" id="selPriceRange" name="selPriceRange">
                        <option value="">Please Select</option>
                        <option value="1000">1,000 BDT</option>
                        <option value="2000">2,000 BDT</option>
                        <option value="5000">5,000 BDT</option>
                        <option value="10000">10,000 BDT</option>
                        <option value="15000">15,000 BDT</option>
                        <option value="20000">20,000 BDT</option>
                        <option value="30000">30,000 BDT</option>
                        <option value="50000">50,000 BDT</option>
                        <option value="150000">1,50,000 BDT</option>
                    </select><br/>
                    <label for="selItemCondition">Item Condition</label>
                    <select class="ash_text11" id="selItemCondition" name="selItemCondition">
                        <option value="">Please Select</option>
                    </select><br/>
                    <label for="selLocation">Location</label>
                    <select class="ash_text11" id="selLocation" name="selLocation">
                        <option value="">Please Select</option>
                    </select><br/>
                    <div class="MyAskBazar_text12_BOLD centerText top-space10 bottom-space10">
                        <input type="button" value="Search" class="btn-submit black_text11 bottom-space10" name="Submit" /><br/>
                        Any one option you can Choose <br>for Refine Your Search
                    </div>
                </div>
            </div>
            <!-- /#refine-search -->

            <div id="search-by-prod" class="corner bottom-space10">
                <form id="form2" name="form2" method="post" action="">
                    <ul>
                        <li class="left-top"></li>
                        <li class="left"></li>
                        <li class="right-top"></li>
                        <li class="right"></li>
                        <li class="title orange_text16_Bold">Search by Product ID</li>
                    </ul>
                    <div class="search-form blue-box black_text11_Bold">
                        <label for="txtProductID">Product ID</label>
                        <input type="text" size="15" value="Enter Product ID" class="ash_text11" id="key-product-id" name="txtProductID" />
                        <div class="MyAskBazar_text12_BOLD centerText top-space10 bottom-space10">
                            <input type="submit" value="Search" class="black_text11 bottom-space10 submit" name="Submit" /><br/>
                            Any one product you can search <br/>by Product ID 
                        </div>
                    </div>
                </form>
            </div>
            <!-- /#search-by-prod -->
        </div>
        
        <div id="main-content" class="flt-right">
        
        </div>
        <!-- /#main-content -->
        <br class="clear"/>
        
    </div>
    <!-- /#content -->
    
    <div id="footer">
        <ul class="footer-hotmenu">
            <li>
                <img align="absmiddle" width="26" height="37" src="images/theme/safety.jpg" />
                <a class="MyAskBazar_link" href="#">Safety & Support </a>
            </li>
            <li>
                <img align="absmiddle" width="35" height="35" src="images/theme/security.jpg" />
                <a class="MyAskBazar_link" href="#">Askbazaar.com Security </a>
            </li>
            <li>
                <img align="absmiddle" width="32" height="34" src="images/theme/advertise.jpg" />
                <a class="MyAskBazar_link" href="#">Advertise With  Us</a>
            </li>
        </ul>
        <!-- /.footer-hotmenu -->
        <div class="footer-links blue-box bottom-space10">
            <ul class="links">
                <li><a class="bottom_link" href="#">Sign in</a></li>
                <li><a class="bottom_link" href="#">Join free </a></li>
                <li><a href="#" class="bottom_link">What is My Ask bazaar</a></li>
                <li><a href="#" class="bottom_link">What is My Favorite</a></li>
                <li><a href="#" class="bottom_link">Create Your website</a></li>
            </ul>
            <ul class="links">
                <li><a href="#" class="bottom_link">How To Post New Product</a></li>
                <li><a href="#" class="bottom_link">How To Buy</a></li>
                <li><a href="#" class="bottom_link">How To Sell</a></li>
            </ul>
            <ul class="links">
                <li><a href="#" class="bottom_link">Terms &  Condition</a></li>
                <li><a href="#" class="bottom_link">Member Agreement</a></li>
                <li><a href="#" class="bottom_link">Privacy policy</a></li>
                <li><a href="#" class="bottom_link">Media partner</a></li>
            </ul>
            <ul class="links">
                <li><a href="#" class="bottom_link">Advertise with us</a></li>
                <li><a href="#" class="bottom_link">About  Askbazaar.Com </a></li>
                <li><a href="#" class="bottom_link">Help </a></li>
                <li><a href="#" class="bottom_link">Contact us </a></li>
            </ul>
        </div>
        
        <div class="Aash_text11 copyright">Company  copyright notice :© 2012  askbazaar.com  (Ask Bazaar  ltd ) licensors. All Rights  Reserved.</div>
        
        <img class="footer-ad" width="225" height="150" src="images/other/bottom_ad2.jpg" />
        
    </div>
    <!-- /#footer -->
</div>

<script type="text/javascript">
function decode_base64(s) {
    var e={},i,k,v=[],r='',w=String.fromCharCode;
    var n=[[65,91],[97,123],[48,58],[47,48],[43,44]];
    
    for(z in n){for(i=n[z][0];i<n[z][1];i++){v.push(w(i));}}
    for(i=0;i<64;i++){e[v[i]]=i;}
    
    for(i=0;i<s.length;i+=72){
        var b=0,c,x,l=0,o=s.substring(i,i+72);
        for(x=0;x<o.length;x++){
            c=e[o.charAt(x)];b=(b<<6)+c;l+=6;
            while(l>=8){r+=w((b>>>(l-=8))%256);}
        }
    }
    return r;
}
$(document).ready(function(){
    //-------------------------------------
    var initVal = keyVal = $('#search-key').val();
    $('#search-key').focus(function(){
        $(this).val( (initVal==keyVal) ? '' : keyVal );
    })
    $('#search-key').blur(function(){
        keyVal = $(this).val();
        $(this).val( ($(this).val()=='') ? initVal : keyVal );
    })
    //-------------------------------------
    var initValProdID = keyValID = $('#key-product-id').val();
    $('#key-product-id').focus(function(){
        $(this).val( (initValProdID==keyValID) ? '' : keyValID );
    })
    $('#key-product-id').blur(function(){
        keyValID = $(this).val();
        $(this).val( ($(this).val()=='') ? initValProdID : keyValID );
    })
    //-------------------------------------
    var strProdType = new Array();
    strProdType[0] = 'Featured';// - Featured Product
    strProdType[1] = 'Hot Sell';
    strProdType[2] = 'Store';
    strProdType[3] = 'Top Sell';
    strProdType[4] = 'Urgent Sell';
    strProdType[5] = 'Recent Sell';
    stringProdType = function(id){
        return strProdType[id] ? strProdType[id] : strProdType[0];
    }
    stringAccountType = function(type){
        return type=='Both' ? 'Seller/Buyer' : type;
    }
    //-------------------------------------
    function isInt(n) {
        return n % 1 == 0;
    }
    getTotalPage = function(total){
        return total<1 ? 1 : (total-(total%1))+1;
    }
    function is_int(value){
        return (parseFloat(value) == parseInt(value)) ? true : false;
    }
    function is_int2(value){
        return (parseFloat(value) == parseInt(value)) ? parseInt(value) : false;
    }
    pagination = function(curr, total){
        if(!is_int(total+0)){
            total = getTotalPage(total);
        }
        totalPage = total;
        //alert(curr+' : '+total);
        if(pageLimit<=total){
            var half = (pageLimit/2)-((pageLimit/2)%1);
            var start = (curr-half)<1 ? 1 : (curr-half);
            start = (total-half<=curr) ? total-pageLimit : start;
            var limit = (curr+half)>total ? total : (start+pageLimit)-1;
        }else{
            var start = 1;
            var limit = total;
        }
        //alert(curr+' > start:'+start+' limit:'+limit+' total:'+total);
        var HTML = '<ul id="pagination">'
        +'<li class="prev'+((curr==1)?' no-link':'')+'">&lt;&lt; Prev</li>';
        for(i=start; i<=limit; i++){
            if(i==curr){
                HTML += '<li class="current no-link">'+i+'</li>';
            }else{
                HTML += '<li class="page">'+i+'</li>';
            }
        }
        HTML += '<li class="next'+((curr==limit)?' no-link':'')+'">Next &gt;&gt;</li>'
        +'</ul>';

        return HTML;
    }
    //-------------------------------------
    itemHTML = function(data){
        //alert(data.image);
        var HTML = '<div class="item">';
        HTML += '   <ul class="item-topbar grey-box top-space10">';
        HTML += '       <li class="left black_text11_Bold">'+data.company+' <span class="Aash_text12">( '+data.location+' )</span></li>';
        HTML += '       <li class="right seller orange_text12_Bold">'+stringAccountType(data.account_type)+'</li>';
        HTML += '       <li class="right seller-other-prod"><a href="#" class="orange_text12_Bold">'+stringAccountType(data.account_type)+' others Product</a></li>';
        HTML += '   </ul>';
        HTML += '   <div class="item-body">';
        HTML += '       <div class="col-left-1">';
        HTML += '           <img border="0" width="100" height="90" src="./uploadedfiles/'+data.image+'" /><br/>';
        HTML += '           <strong class="black_text11">'+data.product_auto_id+'</strong>';
        HTML += '       </div>';
        HTML += '       <div class="col-left-2">';
        HTML += '           <a class="search_title_link12" target="_blank" href="#">'+decode_base64(data.title)+'</a>';
        HTML += '           <div class="model black_text12 top-bottom-space5">'+data.model+'</div>';
        HTML += '           <div class="black_text12 bottom-space10">';
        HTML +=                 data.comment;
        HTML += '           </div>';
        HTML += '           <a class="purple_text12" href="#'+data.product_id+'">Add To Favorite</a>';
        HTML += '       </div>';
        HTML += '       <div class="col-right top-space5">';
        HTML += '           <div class="ash_text11"><strong>Payment:</strong> '+data.payment+'</div>';
        HTML += '           <div class="ash_text11"><strong>Mini Order:</strong> '+data.mini_order+'</div>';
        HTML += '           <div class="ash_text11"><strong>Quantity Available:</strong> '+data.quantity_available+'</div>';
        HTML += '           <div><strong class="orange_text14">Price:</strong> <strong class="black_text11">'+data.price+'</strong></div>';
        HTML += '           <div>';
        HTML += '               <strong class="green_text11_Bold right-space40">Verified</strong>';
        HTML += '               <img width="16" height="13" align="absmiddle" src="images/theme/company_icon.jpg" />';
        HTML += '               <span class="orange_text11_Bold">'+data.verified+'</span>';
        HTML += '           </div>';
        HTML += '           <div>';
        HTML += '               <strong class="red_text12_Bold right-space40">'+stringProdType(data.product_type)+' </strong>';
        HTML += '               <a target="_blank" href="#"><img align="absmiddle" border="0" width="103" height="25" src="images/theme/contact_now.jpg" /></a>';
        HTML += '           </div>';
        HTML += '       </div>';
        HTML += '   </div>';
        HTML += '   </div>'
        HTML += '   <br class="clear">';
        
        return HTML;
    }
    //-------------------------------------
    var product = [];
    var productRefined = [];
    var productRefined_L2 = [];
    var productRefined_L3 = [];
    var productBeforeRefineForm = [];
    var currentPage = 1;
    var pageItemLimit = 10;
    var pageLimit = 7;
    var totalPage = 0;
    var clickedTab = "";
    $('#form1').submit(function(){
        var url = './ajax_search.php';
        
        $.ajax({
			type: "POST",
			url: url+'?action=keyword-search',
			data: $("#form1").serialize(),
			dataType: 'text',
			cache: false,
			complete: function(data){
                //alert(data);
                product = jQuery.parseJSON(data.responseText);
                //alert(product);
                $('.result-item-list').html('');
                //alert(product.items[0].image);
                //console.log(product);
                //alert(product.items.length);
                if(product.items.length > 0){
                    //$.each(product.items, function(i,item){
                    //    productRefined.push(item);
                    //});
                    productRefined = product.items;
                    //alert(productRefined);
                    $.each(product.items.slice(0, pageItemLimit), function(i,item){
                        $('.result-item-list').append( itemHTML(item) );
                    });
                    totalPage = getTotalPage(product.items.length/pageItemLimit);
                    $('.result-item-list').append( pagination(1, totalPage) );
                }else{
                    $('.result-item-list').append( '<div class="item">no such product found!</div>' );
                }
			}
		});
        
        return false;
    });
    
    $('#form2').submit(function(){
        getInitProduct( 'product-id&id='+$('#key-product-id').val() );
        return false;
    });
    
    getInitProduct = function( action ){
        var url = './ajax_search.php?action='+action;
        $.get(url, function(data) {
            product = jQuery.parseJSON(data);
            //alert(product);
            $('.result-item-list').html('');
            //alert(product.items[0].image);
            //console.log(product);
            //alert(product.items.length);
            if(product.items.length > 0){
                //$.each(product.items, function(i,item){
                //    productRefined.push(item);
                //});
                productRefined = product.items;
                //alert(productRefined);
                $.each(product.items.slice(0, pageItemLimit), function(i,item){
                    $('.result-item-list').append( itemHTML(item) );
                });
                totalPage = getTotalPage(product.items.length/pageItemLimit);
                $('.result-item-list').append( pagination(1, totalPage) );
            }else{
                $('.result-item-list').append( '<div class="item">no such product found!</div>' );
            }
        });
    }
    getInitProduct( 'keyword-search' );
    //-------------------------------------
    getInitProductConditionList = function(){
        var url = './ajax_search.php?action=product-condition-list';
        $.get(url, function(data) {
            $('#selItemCondition').html('<option value="">Please Select</option>'+data);
        });
    }
    getInitProductConditionList();
    //-------------------------------------
    getInitCountryList = function(){
        var url = './ajax_search.php?action=country-list';
        $.get(url, function(data) {
            $('#form1 .search-location').html('<option value="">-Select Location-</option>'+data);
            $('#selLocation').html('<option value="">Please Select</option>'+data);
        });
    }
    getInitCountryList();
    //-------------------------------------
    $('ul#pagination li.next').live('click', function(){
        if($(this).hasClass('no-link')){ return false; }
        currentPage++;
        getItemList();
    });
    $('ul#pagination li.prev').live('click', function(){
        if($(this).hasClass('no-link')){ return false; }
        currentPage--;
        getItemList();
    });
    $('ul#pagination li.page').live('click', function(){
        currentPage = parseInt($(this).html());
        //alert(currentPage);
        getItemList();
    });
    getItemList = function(){
        $('.result-item-list').html('');
        var start = (currentPage * pageItemLimit) - pageItemLimit;
        var limit = (currentPage * pageItemLimit);
        var items = [];
        //alert(currentPage+' > '+start+' : '+limit);
        
        if(productRefined_L3.length>0){
            items = productRefined_L3;
        }else if(productRefined_L2.length > 0){
            items = productRefined_L2;
        }else{
            items = productRefined;
        }
        $.each(items.slice(start, limit), function(i,item){
            //alert(item);
            $('.result-item-list').append( itemHTML(item) );
        });
        //alert(items.length);
        $('.result-item-list').append( pagination(currentPage, (items.length/pageItemLimit)) );
    }
    //-------------------------------------
    $('#button-company').click(function(){
        //Reset 2nd Level Refine
        productRefined_L2 = [];
        //---------------------
        var tmp = [];
        clickedTab = 'Company';
        $('.result-item-list').html('');
        $.each(product.items, function(i,item){
            if(item.is_company==true){ tmp.push(item); }
        });
        if(tmp.length > 0){
            productRefined = tmp;
            $.each(productRefined.slice(0, pageItemLimit), function(i,item){
                $('.result-item-list').append( itemHTML(item) );
            });
            $('.result-item-list').append( pagination(1, (productRefined.length/pageItemLimit)) );
        }else{
            $('.result-item-list').append( '<div class="item">No company product found!</div>' );            
        }
        //alert(tmp.length);
    });
    $('#button-private').click(function(){
        //Reset 2nd Level Refine
        productRefined_L2 = [];
        //---------------------
        var tmp = [];
        clickedTab = 'Private';
        $('.result-item-list').html('');
        $.each(product.items, function(i,item){
            if(item.is_company==false){ tmp.push(item); }
        });
        if(tmp.length > 0){
            productRefined = tmp;
            $.each(productRefined.slice(0, pageItemLimit), function(i,item){
                $('.result-item-list').append( itemHTML(item) );
            });
            $('.result-item-list').append( pagination(1, (productRefined.length/pageItemLimit)) );
        }else{
            $('.result-item-list').append( '<div class="item">No private product found!</div>' );            
        }
        //alert(tmp.length);
    });
    //-------------------------------------
    $('#btn-seller').click(function(){
        //Reset 3rd Level Refine
        productRefined_L3 = [];
        //---------------------
        var tmp = [];
        $('.result-item-list').html('');
        if(clickedTab!=""){
            $.each(productRefined, function(i,item){
                if(item.member_type==clickedTab && (item.account_type=='Seller') ){
                    tmp.push(item);
                }
            });
        }else{
            $.each(productRefined, function(i,item){
            if(item.account_type=='Seller'){
                tmp.push(item);
            }
        });
        }
        //alert(tmp);
        showSellerBuyerItems(tmp);
    });
    $('#btn-buyer').click(function(){
        //Reset 3rd Level Refine
        productRefined_L3 = [];
        //---------------------
        var tmp = [];
        $('.result-item-list').html('');
        if(clickedTab!=""){
            $.each(productRefined, function(i,item){
                if(item.member_type==clickedTab && (item.account_type=='Buyer') ){
                    tmp.push(item);
                }
            });
        }else{
            $.each(productRefined, function(i,item){
            if(item.account_type=='Buyer'){
                tmp.push(item);
            }
        });
        }
        //alert(tmp);
        showSellerBuyerItems(tmp);
    });
    showSellerBuyerItems = function(data){
        if(data.length > 0){
            productRefined_L2 = data;
            $.each(productRefined_L2.slice(0, pageItemLimit), function(i,item){
                $('.result-item-list').append( itemHTML(item) );
            });
            $('.result-item-list').append( pagination(1, (productRefined_L2.length/pageItemLimit)) );
        }else{
            $('.result-item-list').append( '<div class="item">Search criteria don\'t match any product!</div>' );            
        }
    }
    //-------------------------------------
    $('#btn-top-sell').click(function(){
        var tmp = [];
        $('.result-item-list').html('');
        if(productRefined_L2.length>0){
            $.each(productRefined_L2, function(i,item){
                if(item.is_top_sell==true){
                    tmp.push(item);
                }
            });
        }else{
            $.each(productRefined, function(i,item){
                if(item.is_top_sell==true){
                    tmp.push(item);
                }
            });
        }
        showTypedItems(tmp);
        //alert(totalPage);
    });
    $('#btn-urgent-sell').click(function(){
        var tmp = [];
        $('.result-item-list').html('');
        if(productRefined_L2.length>0){
            $.each(productRefined_L2, function(i,item){
                if(item.is_urgent_sell==true){
                    tmp.push(item);
                }
            });
        }else{
            $.each(productRefined, function(i,item){
                if(item.is_urgent_sell==true){
                    tmp.push(item);
                }
            });
        }
        showTypedItems(tmp);
        //alert(totalPage);
    });
    showTypedItems = function(data){
        if(data.length > 0){
            productRefined_L3 = data;
            $.each(productRefined_L3.slice(0, pageItemLimit), function(i,item){
                $('.result-item-list').append( itemHTML(item) );
            });
            $('.result-item-list').append( pagination(1, (productRefined_L3.length/pageItemLimit)) );
        }else{
            $('.result-item-list').append( '<div class="item">Search criteria don\'t match any product!</div>' );            
        }
    }
    //-------------------------------------
    $('#refine-search .btn-submit').click(function(){
        var tmp = [];
        $('.result-item-list').html('');
        //alert(productRefined.length);
        if( productRefined_L3.length > 0 ){
            productBeforeRefineForm = (productBeforeRefineForm.length==0) ? productRefined_L3 : productBeforeRefineForm;
            tmp = getRefineFormResult(productBeforeRefineForm);
            showTypedItems(tmp);
        }else if( productRefined_L2.length > 0 ){
            productBeforeRefineForm = (productBeforeRefineForm.length==0) ? productRefined_L2 : productBeforeRefineForm;
            tmp = getRefineFormResult(productBeforeRefineForm);
            showSellerBuyerItems(tmp);
        }else{
            productBeforeRefineForm = (productBeforeRefineForm.length==0) ? productRefined : productBeforeRefineForm;
            tmp = getRefineFormResult(productBeforeRefineForm);
            if(tmp.length > 0){
                productRefined = tmp;
                $.each(productRefined.slice(0, pageItemLimit), function(i,item){
                    //alert(item.price+' : '+$('#selPriceRange').val());
                    $('.result-item-list').append( itemHTML(item) );
                });
                $('.result-item-list').append( pagination(1, (productRefined.length/pageItemLimit)) );
            }else{
                $('.result-item-list').append( '<div class="item">Search criteria don\'t match any product!</div>' );            
            }
        }
    });
    getRefineFormResult = function(data){
        var tmp = [];
        var tmpPrice = 0;
        var priceRange = false;
        var itemCondition = false;
        var location = false;
        $.each(data, function(i,item){
            tmpPrice = is_int2(item.price);
            priceRange = ($('#selPriceRange').val()!="") ? ($('#selPriceRange').val()>=tmpPrice && tmpPrice ? true : false) : true;
            itemCondition = ($('#selItemCondition').val()!="") ? ($('#selItemCondition').val()==item.product_condition_id ? true : false) : true;
            location = ($('#selLocation').val()!="") ? ($('#selLocation').val()==item.country_id ? true : false) : true;
            if(priceRange && itemCondition && location){
                item.price = tmpPrice ? tmpPrice : item.price;
                tmp.push(item);
            }
        });
        return tmp;
    }
    //-------------------------------------
});
</script>

</body>

</html>