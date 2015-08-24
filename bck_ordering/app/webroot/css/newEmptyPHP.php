* { -webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,font,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,audio,canvas,details,figcaption,figure,footer,header,hgroup,mark,menu,meter,nav,output,progress,section,summary,time,video{border:0;outline:0;font-size:100%;vertical-align:baseline;background:transparent;margin:0;padding:0;}body{line-height:1;}article,aside,dialog,figure,footer,header,hgroup,nav,section,blockquote{display:block;}nav ul{list-style:none;}ol{list-style:decimal;}ul{list-style:disc;}ul ul{list-style:circle;}blockquote,q{quotes:none;} blockquote:before,blockquote:after, q:before,q:after{content:none;}ins{text-decoration:underline;}del{text-decoration:line-through;}mark{background:none;}abbr[title],dfn[title]{border-bottom:1px dotted #000;cursor:help;}table{border-collapse:collapse;border-spacing:0;}hr{display:block;height:1px;border:0;border-top:1px solid #ccc;margin:1em 0;padding:0;} input[type=submit], input[type=button], button{margin:0;padding:0;}input,select,a img{vertical-align:middle;}li{list-style:none;}
.clearfix:after,
.clearfix:before { content:' ';display:table;}
.clearfix:after { clear:both;}
.clearfix { *zoom:1;}
body { font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;background-color:#f4f4f4;}
.wrapper { margin:0 auto;max-width:1200px;padding:15px;}
.lft-side { float:left;width:20%;}
.lft-side h2 { padding:25px 15px;font-size:42px;border:1px solid #dfdfdf;background-color:#424242;height:154px;color:#ffffff;text-align:center;border-radius:10px;}
.lft-side .lfts-inner-box { border:1px solid #dfdfdf;margin-top:10px;background-color:#fafafa;padding:10px;}
.lft-side .lfts-inner-box h3 { background-color:#1375d1;color:#ffffff;padding:10px;margin-bottom:10px;font-weight:normal;}
.lft-side .lfts-inner-box p { font-size:14px;line-height:18px;}
.lfts-inner-box ul { padding-left:15px;}
.lfts-inner-box ul li { font-size:14px;line-height:18px;list-style:circle;margin-bottom:8px;}
.side-menu { border:1px solid #dfdfdf;margin-top:20px;background-color:#ffffff;}
.side-menu ul { background-color:#fbfbfb;margin-bottom:30px;}
.side-menu ul li { border-bottom:1px solid #dfdfdf;}
.side-menu ul li a { padding:8px 10px;color:#545454;text-decoration:none;font-size:14px;display:block;}
.side-menu ul li a:hover { color:#232323;background-color:#f2f2f2;}
.side-menu h5 { padding:10px;}

.rgt-side { float:left;width:80%;padding-left:30px;}
.rgt-side header { border:1px solid #dfdfdf;background-color:#ffffff;min-height:154px;}
.rgt-side header .banner { float:left;width:55%;}
.rgt-side header .header-input-form { float:left;width:45%;padding:10px;}
.header-input-form .input-field { margin-bottom:5px;}
.header-input-form label:not(.chkbx-wrap) { float:left;width:30%;padding-right:10px;font-size:12px;padding-top:10px;}
.txtbx { float:left;width:70%;border:1px solid #dfdfdf;padding:6px;background-color:#f9f9f9;}
.header-input-form label.chkbx-wrap { font-size:14px;margin-top:6px;float:left;}
.header-input-form label.chkbx-wrap input[type="checkbox"] { position:relative;top:-2px;}
.header-input-form input[type="submit"] { float:right;padding:5px 10px;}
.header-input-form a { color:#1375d1;font-size:14px;float:left;margin-top:5px;}
.header-input-form a.signup { float:right;}
.header-input-form a:hover { text-decoration:none;}

.main-content { }
.main-content .main-rgt-content { background-color:#ffffff;border:1px solid #dfdfdf;margin-top:20px;}
.main-rgt-content .inner-sml-form { padding:50px;}
.inner-sml-form fieldset { padding:30px 40px;border:1px solid #dfdfdf;position:relative;}
.inner-sml-form fieldset .absolute-btn { position:absolute;top:20px;right:20px;}
.inner-sml-form fieldset legend { background-color:#ffffff;padding:5px 15px;color:#424242;}
.inner-sml-form fieldset address { background-color:#f2f2f2;margin:20px auto;max-width:400px;padding:20px;font-size:14px;line-height:18px;color:#494949;}
.inner-sml-form fieldset address strong { font-size:16px;color:#262626;}
.inner-sml-form fieldset label { color:#232323;font-size:14px;}
.inner-sml-form fieldset .input-field { margin:10px 0;}
.inner-sml-form input[type="submit"],
.inner-sml-form input[type="button"] { float:right;margin:10px 3px;padding:5px 10px;}
.inner-sml-form dl { margin:0 auto;max-width:450px;}
.inner-sml-form dl dt,
.inner-sml-form dl dd { float:left;width:50%;margin:8px 0;font-size:12px;color:#454545;}
.inner-sml-form dl dd .txtbx { width:100%;}
.inner-sml-form .btm-input-wrap { padding:15px 0;text-align:center;}
.btm-input-wrap .radio-wrap { display:inline-block;margin:0 5px;font-size:12px;color:#454545;}
.btm-input-wrap input[type="submit"] { display:inline-block;float:none;}
#slides { position: relative;height:auto !important;margin-top:20px;}
#slides .slides-container { display: none;}
#slides .scrollable { *zoom: 1;position: relative;top: 0;left: 0;overflow-y: auto;-webkit-overflow-scrolling: touch;height: 100%;}
#slides .scrollable:after { content: "";display: table;clear: both;}
.slides-navigation { margin: 0 auto;position: absolute;z-index: 3;top: 46%;width: 100%;}
.slides-navigation a { position: absolute;display: block;}
.slides-navigation a.prev { left: 0;}
.slides-navigation a.next { right: 0;}
.slides-pagination { position: absolute;z-index: 3;bottom: 0;text-align: center;width: 100%;}
.slides-pagination a { border: 2px solid #222;border-radius: 15px;width: 10px;height: 10px;display: -moz-inline-stack;display: inline-block;vertical-align: middle;*vertical-align: auto;zoom: 1;*display: inline;background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=");margin: 2px;overflow: hidden;text-indent: -100%;}
.slides-pagination a.current { background: #222;}
.slides-navigation { top: 50%;}
.slides-navigation a { -webkit-border-radius: 30px;-moz-border-radius: 30px;-ms-border-radius: 30px;-o-border-radius: 30px;border-radius: 30px;display: block;text-decoration: none;border: 3px solid #fff;color: white;font-weight: bold;font-size: 26px;margin: 0 25px;text-shadow: 0 1px 1px #000;text-align: center;height: 40px;width: 40px;top: -40px;padding: 1px;-webkit-box-shadow: 0 1px 1px black;-moz-box-shadow: 0 1px 1px black;box-shadow: 0 1px 1px black;-webkit-transition: background 0.15s ease;-moz-transition: background 0.15s ease;-o-transition: background 0.15s ease;transition: background 0.15s ease;}
.slides-navigation a:hover { background: rgba(0, 0, 0, 0.4);}
.container { display:none;}

footer { border:1px solid #dfdfdf;padding:20px;margin-top:20px;background-color:#ffffff;}
footer p { float:left;color:#545454;font-size:14px;font-weight:normal;}
.social-wrap { float:right;}
.social-wrap ul li { float:left;margin-left:10px;}
.social-sprite { background:url(../img/sliderImages/social-sprite.png) 0 0 no-repeat;width:24px;height:24px;display:block;background-color:#ffffff;border-radius:50%;box-shadow:0 0 6px rgba(0,0,0,0.2);}
.ss-facebook { background-position:3px 4px;}
.ss-twitter { background-position:4px -27px;}

.change-pass-wrap { margin-top:20px;}
.change-pass-wrap input[type="submit"]{ margin-right:10px;}

.availabilty-msg { text-align:center;}
.availabilty-msg h3 { color:#e21616;font-size:36px;margin-bottom:30px;}
.availabilty-msg h4 { color:#e45757;font-size:24px;margin-bottom:30px;}

.float-left { float:left !important;}
.float-right { float:right !important;}
/*********************** 03/08/2015 **************************/
.online-order fieldset{ width:48% }
.online-order .checkbox-listing li { float:left; width:50%; /*padding-bottom:22px;*/ }
.online-order .checkbox-listing li span { vertical-align:middle; }
.info-box { background-color:#f9f9f9; border:1px solid #dfdfdf; padding:8px; }
.info-box p { font-size:12px; font-weight:normal; line-height:18px; color:#232323; }
.coupon-code-box { padding:15px 0 5px; font-size:12px;  }
.inner-sml-form fieldset .coupon-code-box label{ font-size:12px; font-weight:normal; display:inline-block; vertical-align:middle; color:#232323; }
.coupon-code-box .inbox { display:inline-block; padding:6px; max-width:100px; margin:0 10px; border-radius:2px; background-color:#f9f9f9; border:1px solid #dfdfdf; color:#232323;}
.inner-sml-form .coupon-code-box input[type="submit"], .inner-sml-form .coupon-code-box input[type="button"] { margin-top:0; padding:5px 23px; border-radius:2px; border:1px solid #acacac; cursor:pointer; }
.responsive-table { margin-top:10px; }
.table { font-size:12px; border:1px solid #dfdfdf; width:100%; color:#232323; }
.table tr td { padding:8px; border-bottom:1px solid #dfdfdf; vertical-align: middle; }
.table tr td.text-center { text-align:center; }

/*********************** 04/08/2015 **************************/
.inner-sml-form.online-order-frame { padding:25px; }
.inner-sml-form.online-order-frame fieldset{ padding:25px; }
.item-pic { border:1px solid #D1D1D1; margin-bottom:20px; position:relative; min-height: 42px; }
.item-pic img { width:100%; height:auto; display:block; position:relative; }
.item-pic span.price-overlay { background-color:rgba(255,255,255,0.35); position:absolute; bottom:0; right:0; padding:8px 10px; font-size:16px; color:#232323;}
.row-divide { border-bottom:1px solid #dfdfdf; padding-bottom:20px; margin-bottom:20px; color:#232323; }
.row-divide.last{ padding-bottom:0; margin-bottom:5px; }
.row-divide h3 { padding-bottom:13px; }
.inner-sml-form fieldset .row-divide span { display:inline-block; width:32.3%}
.inner-sml-form fieldset .row-divide label { font-size:13px; margin-right: 20px; }
.inner-sml-form fieldset .row-divide label span { vertical-align:sub; width:auto; display:inline; }

.instruction-title { color:#232323; font-size: 20px; padding-bottom: 10px; font-weight: normal; }
.instructions { padding:15px; background-color: #f9f9f9; list-style: none inside none; border:1px solid #dfdfdf; }
.instructions li { background: url(../img/arrow-right-li.png)no-repeat; font-size: 14px; line-height: normal; color:#232323; padding-left: 25px; padding-bottom: 12px;  }
.tooltip-info{ width:200px; float:left;}
dl.tooltip-info dt, dl.tooltip-info dd {border-bottom:1px solid #d0d0d0; padding:10px; margin:0; }
dl.tooltip-info dt{ float:left; width:120px; padding-right: 10px;}
dl.tooltip-info dd { margin-left:120px; float:none; width:auto; }
.item-pic-title { position: absolute; top: 0; left: 0; right:0; background-color: rgba(0,0,0,0.5); text-align:center; color: #fff; z-index: 10;}
/*********************** 10/08/2015 **************************/
.inner-sml-form .online-order fieldset.single-col { width:100%; } 
.order-overview-lt, .order-overview-rt { padding:20px; border:1px solid #dfdfdf; color:#232323; font-size:12px; font-weight:normal; }
.order-overview-lt h2, .order-overview-rt h2 { font-size:14px; font-weight:400; }
.order-overview-lt { float:left; width:70%; }
.order-overview-rt { float:right; width:28%; }
.inner-sml-form fieldset .order-overview-rt  address { font-size:12px; font-weight:400; margin-bottom:0; }
.special-comment { margin-bottom:20px; }
.special-comment span { float:left; margin-right:10px; width:115px; padding-top:8px; }
.special-comment > div { margin-left:122px; }
.special-comment > div textarea { resize:none; display:block; padding:8px; height:80px; width:99%; }
.payment-method { margin-bottom:20px; }
.inner-sml-form fieldset .payment-method label { font-size:12px; }
.payment-method span{ margin-right:20px; vertical-align:bottom; }
.button-box .btn { margin-left:15px; }
.repeat-deatil { margin-bottom:20px; }
.star-rating-box { padding-bottom:3px; }
.text-right { text-align:right; }
.resp-tabs-container { color:#232323; font-weight:normal; }
.order-history-detail { padding:10px; border:1px solid #dfdfdf }
.order-history-detail a {text-decoration:none; }
.order-history-detail-lt { float:left; }
.order-history-detail-lt p { margin:0; padding:0; font-size:12px; line-height:20px; }
.order-history-detail-lt p span { padding:0 10px; }
.order-history-detail-lt p span:first-child { padding-left:0; }
.order-history-detail .button { float:right; }
.responsive-table .table.order-history-table tr th { text-align:left; background-color:#1a5fd0; color:#fff; font-size:14px; font-weight:normal; }
.responsive-table .table.order-history-table tr td { text-transform:capitalize; } 

	/***** DEFAULT CSS **********/ 
.btn { display: inline-block; padding: 6px 12px; margin-bottom: 0;  font-size: 14px; font-weight: normal; line-height: 1.42857143; text-align: center;white-space: nowrap; vertical-align: middle; -ms-touch-action: manipulation; touch-action: manipulation; cursor: pointer; -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none;  user-select: none; background-image: none; border: 1px solid transparent; }
.btn-default { color: #333; background-color: #fff;  border-color: #ccc; } 
.btn-default:hover, .btn-default:focus, .btn-default.focus, .btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default { color: #333; background-color: #e6e6e6; border-color: #adadad; }
.btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default { background-image: none; }
.btn-primary { color: #fff;   background-color: #337ab7;    border-color: #2e6da4; }
.btn-primary:hover, .btn-primary:focus, .btn-primary.focus,  .btn-primary:active, .btn-primary.active, .open > .dropdown-toggle.btn-primary {   color: #fff; background-color: #286090;   border-color: #204d74; }
.btn-primary:active, .btn-primary.active, .open > .dropdown-toggle.btn-primary {   background-image: none; }
.table { width: 100%; margin-bottom:20px; }
.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td { padding: 8px; line-height: 1.42857143;  vertical-align: top; border-top: 1px solid #ddd; } 
.table > thead > tr > th { vertical-align: bottom;  border-bottom: 2px solid #ddd; }
.table > caption + thead > tr:first-child > th, .table > colgroup + thead > tr:first-child > th, .table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td, .table > colgroup + thead > tr:first-child > td, .table > thead:first-child > tr:first-child > td {
border-top: 0; }
.table > tbody + tbody { border-top: 2px solid #ddd; }
.table .table { background-color: #fff; }
.table-condensed > thead > tr > th, .table-condensed > tbody > tr > th,  .table-condensed > tfoot > tr > th, .table-condensed > thead > tr > td, .table-condensed > tbody > tr > td, .table-condensed > tfoot > tr > td { padding: 5px;  }
.table-bordered { border: 1px solid #ddd; }
.table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td,  .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td { border: 1px solid #ddd;  }
.table-bordered > thead > tr > th, .table-bordered > thead > tr > td { border-bottom-width: 2px; }
.table-striped > tbody > tr:nth-of-type(odd) { background-color: #f9f9f9; }
.table-hover > tbody > tr:hover { background-color: #f5f5f5; }
table col[class*="col-"] { position: static; display: table-column; float: none; }
table td[class*="col-"], table th[class*="col-"] { position: static; display: table-cell; float: none; }
.table > thead > tr > td.active, .table > tbody > tr > td.active,  .table > tfoot > tr > td.active, .table > thead > tr > th.active, .table > tbody > tr > th.active, .table > tfoot > tr > th.active, .table > thead > tr.active > td, .table > tbody > tr.active > td, .table > tfoot > tr.active > td, .table > thead > tr.active > th, .table > tbody > tr.active > th, .table > tfoot > tr.active > th { background-color: #f5f5f5; }
.table-hover > tbody > tr > td.active:hover, .table-hover > tbody > tr > th.active:hover, .table-hover > tbody > tr.active:hover > td, .table-hover > tbody > tr:hover > .active, .table-hover > tbody > tr.active:hover > th { background-color: #e8e8e8; }
.table > thead > tr > td.success, .table > tbody > tr > td.success, .table > tfoot > tr > td.success, .table > thead > tr > th.success, .table > tbody > tr > th.success, .table > tfoot > tr > th.success, .table > thead > tr.success > td, .table > tbody > tr.success > td, .table > tfoot > tr.success > td, .table > thead > tr.success > th, .table > tbody > tr.success > th, .table > tfoot > tr.success > th {background-color: #dff0d8; }
.table-hover > tbody > tr > td.success:hover, .table-hover > tbody > tr > th.success:hover, .table-hover > tbody > tr.success:hover > td, .table-hover > tbody > tr:hover > .success, .table-hover > tbody > tr.success:hover > th { background-color: #d0e9c6; }
.table > thead > tr > td.info, .table > tbody > tr > td.info, .table > tfoot > tr > td.info, .table > thead > tr > th.info, .table > tbody > tr > th.info, .table > tfoot > tr > th.info, .table > thead > tr.info > td, .table > tbody > tr.info > td,.table > tfoot > tr.info > td,  .table > thead > tr.info > th,.table > tbody > tr.info > th,  .table > tfoot > tr.info > th { background-color: #d9edf7;}
.table-hover > tbody > tr > td.info:hover, .table-hover > tbody > tr > th.info:hover,  .table-hover > tbody > tr.info:hover > td, .table-hover > tbody > tr:hover > .info, .table-hover > tbody > tr.info:hover > th { background-color: #c4e3f3; }
.table > thead > tr > td.warning, .table > tbody > tr > td.warning,  .table > tfoot > tr > td.warning, .table > thead > tr > th.warning, .table > tbody > tr > th.warning, .table > tfoot > tr > th.warning, .table > thead > tr.warning > td,  .table > tbody > tr.warning > td, .table > tfoot > tr.warning > td, .table > thead > tr.warning > th, .table > tbody > tr.warning > th, .table > tfoot > tr.warning > th { background-color: #fcf8e3; }
.table-hover > tbody > tr > td.warning:hover, .table-hover > tbody > tr > th.warning:hover, .table-hover > tbody > tr.warning:hover > td,  .table-hover > tbody > tr:hover > .warning, .table-hover > tbody > tr.warning:hover > th { background-color: #faf2cc; }
.table > thead > tr > td.danger, .table > tbody > tr > td.danger,  .table > tfoot > tr > td.danger, .table > thead > tr > th.danger, .table > tbody > tr > th.danger, .table > tfoot > tr > th.danger,  .table > thead > tr.danger > td, .table > tbody > tr.danger > td, .table > tfoot > tr.danger > td, .table > thead > tr.danger > th, .table > tbody > tr.danger > th, .table > tfoot > tr.danger > th { background-color: #f2dede; }
.table-hover > tbody > tr > td.danger:hover, .table-hover > tbody > tr > th.danger:hover,  .table-hover > tbody > tr.danger:hover > td, .table-hover > tbody > tr:hover > .danger, .table-hover > tbody > tr.danger:hover > th { background-color: #ebcccc; }
.table-responsive { min-height: .01%; overflow-x: auto; }
.order-btn {top:0px;right:151px;position:absolute;background-color: #efefef;border: 1px solid #d8d8d8;border-radius: 5px;color: #555555;font-size: 13px;padding: 11px 22px;text-decoration: none;}
.coupon-btn {position:absolute;right:20px;}
.review-margin{margin-bottom: 10px !important;}
.user-optn{margin-left: 130px;}
.user-optnn{margin-left: 70px;}
.leftFont{float:left;}
.greyFont{color:grey;}<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

