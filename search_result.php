<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>::. Welcome to AskBazaar.com .::</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
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
            <ul>
                <li><input class="search-key" type="text" size="40" value="Select Products" name="textfield" /></li>
                <li>
                    <select name="select" class="search-location">
                        <option>Select Location</option>
                    </select>
                </li>
                <li><input type="submit" value="Search" name="Submit" class="btn-submit" /></li>
            </ul>
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
                    <li class="link"><a href="javascript:void(0);" class="orange_link12">Company</a></li>
                </ul>
            </div>
            <div class="tab corner">
                <ul class="private">
                    <li class="left-top"></li>
                    <li class="left"></li>
                    <li class="right-top"></li>
                    <li class="right"></li>
                    <li class="link"><a href="javascript:void(0);" class="orange_link12">Private</a></li>
                </ul>
            </div>
            <!-- /.tab -->
            
            <div class="tab-right-menu">
                <span class="purple_text12">You can also view list of :</span>
                <a class="orange_text16" href="#"><strong>Seller</strong></a> <span class="ash_text16_Bold"> | </span>
                <a class="purple_text16_Bold" href="#"><strong>Buyer</strong></a>
            </div>
            
            <div class="result-top-bar corner">
                <br class="clear"/>
                <ul>
                    <li class="left-top"></li>
                    <li class="left"></li>
                    <li class="right-top"></li>
                    <li class="right"></li>
                    <li class="top-sell"><a href="javascript:void(0);" class="red_text12_Bold">Urgent Sell</a></li>
                    <li class="top-sell"><a href="javascript:void(0);" class="orange_text12_Bold">Top Sell</a></li>
                </ul>
            </div>
            <!-- /.result-top-bar -->
            <div class="result-item-list">
                <?php for($i=1; $i<=3; $i++): ?>
                <div class="item">
                    <ul class="item-topbar grey-box top-space10">
                        <li class="left black_text11_Bold">Rimixdot ltd <span class="Aash_text12">( Dhaka )</span></li>
                        <li class="right seller orange_text12_Bold">Seller</li>
                        <li class="right seller-other-prod"><a href="#" class="orange_text12_Bold">Seller others Product</a></li>
                    </ul>
                    <div class="item-body">
                        <div class="col-left-1">
                            <img border="0" width="100" height="90" src="images/other/product1.jpg" /><br/>
                            <strong class="black_text11">Product ID abcd234</strong>
                        </div>
                        <div class="col-left-2">
                            <a class="search_title_link12" target="_blank" href="#">Apple iphone Mobile</a>
                            <div class="model black_text12 top-bottom-space5">14.1" TFT LCD panel (1280*800 B141EW04 V5)</div>
                            <div class="black_text12 bottom-space10">
                                computer peripherals service computers peripherals dealers , cpu , hardwares
                                keyboards c omputer peripherals service pro fajsdlfjas...
                            </div>
                            <a class="purple_text12" href="#">Add To Favorite</a>
                        </div>
                        <div class="col-right top-space5">
                            <div class="ash_text11"><strong>Payment:</strong> Bank Payment</div>
                            <div class="ash_text11"><strong>Mini Order:</strong> 10 Pcs</div>
                            <div class="ash_text11"><strong>Quantity Available:</strong> 100 Pcs</div>
                            <div><strong class="orange_text14">Price:</strong> <strong class="black_text11">100 Taka</strong></div>
                            <div>
                                <strong class="green_text11_Bold right-space40">Verified</strong>
                                <img width="16" height="13" align="absmiddle" src="images/theme/company_icon.jpg" />
                                <span class="orange_text11_Bold">Company Ad</span>
                            </div>
                            <div>
                                <strong class="red_text12_Bold right-space40">Hot Sell </strong>
                                <a target="_blank" href="#"><img align="absmiddle" border="0" width="103" height="25" src="images/theme/contact_now.jpg" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <br class="clear"/>
                <?php endfor; ?>
                <!-- /.item -->
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
                    <select class="ash_text11" name="selPriceRange">
                        <option>Please Select</option>
                    </select><br/>
                    <label for="selItemCondition">Item Condition</label>
                    <select class="ash_text11" name="selItemCondition">
                        <option>Please Select</option>
                    </select><br/>
                    <label for="selLocation">Location</label>
                    <select class="ash_text11" name="selLocation">
                        <option>Please Select</option>
                    </select><br/>
                    <div class="MyAskBazar_text12_BOLD centerText top-space10 bottom-space10">
                        <input type="submit" value="Search" class="black_text11 bottom-space10" name="Submit" /><br/>
                        Any one option you can Choose <br>for Refine Your Search
                    </div>
                </div>
            </div>
            <!-- /#refine-search -->

            <div id="search-by-prod" class="corner bottom-space10">
                <ul>
                    <li class="left-top"></li>
                    <li class="left"></li>
                    <li class="right-top"></li>
                    <li class="right"></li>
                    <li class="title orange_text16_Bold">Search by Product ID</li>
                </ul>
                <div class="search-form blue-box black_text11_Bold">
                    <label for="txtProductID">Product ID</label>
                    <input type="text" size="15" value="Enter Product ID" class="ash_text11" name="txtProductID" />
                    <div class="MyAskBazar_text12_BOLD centerText top-space10 bottom-space10">
                        <input type="submit" value="Search" class="black_text11 bottom-space10 submit" name="Submit" /><br/>
                        Any one product you can search <br/>by Product ID 
                    </div>
                </div>
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
</body>

</html>