<?php header("Content-type:text/css");
include_once("../../../config/database.php");
class renkyonetimi  extends PDO {


	function __construct() {
			
			parent::__construct('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASS);
	
	
			$renkler=$this->prepare("select * from renkyonetimi");
			$renkler->execute();
			$veriler=$renkler->fetch();
			
			$this->headerRenk=$veriler["header"];
			$this->sepetinizRenk=$veriler["sepetiniz"];
			$this->kategoriicrenk=$veriler["kategoriic"];
			$this->sepeteeklebutonRenk=$veriler["sepeteeklebuton"];
		
		
	}


}


$renkler= new renkyonetimi;



/*
.box_1 p -- sepetiniz  // FFC6CF
.header-top-strip--  header // fff
.product-listy h2  -- kategori içi sol taraf
.hizala_3 -- sepete ekle buton

*/
 ?>


/*--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--*/
body{
	padding:0;
	margin:0;
	font-family: 'Lato-Regular';
	background:#fff;
	
}
body a{
    transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}
@font-face {
   font-family: 'Lato-Regular';
   src: url(../fonts/Lato-Regular.ttf)format('truetype');
}
@font-face {
   font-family: 'PlayfairDisplay-Regular';
   src: url(../fonts/PlayfairDisplay-Regular.ttf)format('truetype');
}
input[type="button"],input[type="submit"]{
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}
h1,h2,h3,h4,h5,h6{
	margin:0;	
	font-family: 'PlayfairDisplay-Regular';
}	
p{
	margin:0;
}
ul{
	margin:0;
	padding:0;
}
label{
	margin:0;
}
/*-----start-header----*/
.header-top-strip{
	padding:8px 0 14px 0;
	background-color:#<?=$renkler->headerRenk?>;
}
.header-top-left ul li {
    display: inline-block;
	margin-right:15px;
}
.header-top-left ul li a {
	color:#fff;
	text-decoration:none;
	font-size:13px;
}
span.glyphicon.glyphicon-user,span.glyphicon.glyphicon-lock {
    font-size: 10px;
    vertical-align: initial;
    margin-right: 6px;
}
.header-top-left {
    float: left;
	margin-top:5px;
}
.header-right {
      float: right;
    margin-top: 5px;
}
.box_1 h3 {
	padding-top:10px;

  font-size: 15px;
  margin-bottom: 0;
  float: left;
  font-weight: 400;
  padding: 0;
    color: #FFC6CF;
}
.box_1 h3 img {
	margin-left: 3px;
}
a.simpleCart_empty {
  font-size: 14px;
  color: #FFC6CF;
}
.box_1 p {
  margin-left: 8px;
  float: left;
   color: #<?=$renkler->sepetinizRenk?>;
}
.banner {
	background:url("../images/banner_img.jpg") no-repeat 0px 0px;
	background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover;
	-ms-background-size:cover;
	-webkit-background-size:cover;
	min-height:705px;
}
.logo h1 a {
    color: #000;
    text-decoration: none;
    font-size: 30px;
    letter-spacing: 2px;
}
.logo a span {
	color: #55065a;
    font-size: 35px;
    border: 2px solid #55065a;
    border-radius: 50%;
    width: 50px;
    display: block;
    text-align: center;
    float: left;
    padding: 2px 0 0 4px;
    height: 50px;
    vertical-align: middle;
    margin-right: 3px;
}
.banner-top {
	padding-top: 25px;
    background-color: #f8f8f8;
}
.inner-head {
	background-color:#fff;
}
.navbar-default {
    background-color: transparent;
    border-color: transparent;
}
.navbar-default .navbar-nav > li > a {
    color: #000;
    text-transform: uppercase;
    border: 1px solid #f8f8f8;
	margin:0 10px;
	padding-top: 10px;
    padding-bottom: 10px;
}
.navbar-nav {
    float: right;
    margin: 0;
}
.navbar-collapse.collapse {
    padding: 0;
}
.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
    background-color: transparent;
    border: 1px solid #55065a;
    color: #55065a;
}
.navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {
    color: #000;
    background-color: transparent;
}
.navbar {
    position: relative;
    min-height: 50px;
    margin-bottom: 0px;
}
.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
    color: #555;
    background-color: #fff;
}
.navbar-header {
    float: left;
    width: 35%;
}
ul.multi-column-dropdown h6 {
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 10px;
    color: #55065a;
	    padding: 0;
}
.multi-column-dropdown li {
	list-style-type:none;
	    margin: 5px 0;
}
.multi-column-dropdown li a {
        display: block;
    clear: both;
    line-height: 1.428571429;
    color: #000;
    white-space: normal;
    font-weight: 300;
}
.multi-column-dropdown li a.list {
    font-weight: 600;
	    margin-bottom: 7px;
}
.dropdown-menu .divider {
    height: 0px;
    margin: 1px 0;
    overflow: hidden;
    background-color: #e5e5e5;
}
.multi-column-dropdown li a:hover {
    text-decoration: none;
    color: #55065a;
    background-color: #fff!important;
}
.dropdown-menu.columns-2 {
    min-width: 400px;
    padding: 15px 20px;
}
.dropdown-menu.columns-3 {
    min-width: 550px;
    padding: 15px 20px;
}
.banner-bottom-left{
	float:Left;
	margin: 110px 0px 0px 30px;
}
.banner-bottom-right{
	float:right;
	width: 50%;
}
.banner-bottom-left h2 {
    font-size: 90px;
    font-weight: 600;
    line-height: 120px;
    color: #55065a;
    transform: rotate(-15deg);
	-webkit-transform: rotate(-15deg);
	-o-transform: rotate(-15deg);
	-ms-transform: rotate(-15deg);
	-moz-transform: rotate(-15deg);
    margin: 0 0 0 100px;
	    padding: 0;
}
/*--header--*/
#slider2,
#slider3 {
  box-shadow: none;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  margin: 0 auto;
}
.rslides_tabs li:first-child {
  margin-left: 0;
}
.rslides_tabs .rslides_here a {
  background: rgba(255,255,255,.1);
  color: #fff;
  font-weight: bold;
}
.events {
  list-style: none;
}
.callbacks_container {
  position: relative;
  float: left;
  width: 100%;
}
.callbacks {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 100%;
  padding: 0;
  margin: 0;
}
.callbacks li {
  position: absolute;
  width: 100%;
}
.callbacks img {
  position: relative;
  z-index: 1;
  height: auto;
  border: 0;
}
.callbacks .caption {
	display: block;
	position: absolute;
	z-index: 2;
	font-size: 20px;
	text-shadow: none;
	color: #fff;
	left: 0;
	right: 0;
	padding: 10px 20px;
	margin: 0;
	max-width: none;
	top: 10%;
	text-align: center;
}
.callbacks_nav {
      position: absolute;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    top: 56%;
    left: 0;
    opacity: 0.7;
    z-index: 3;
    text-indent: -9999px;
    overflow: hidden;
    text-decoration: none;
    height: 70px;
    width: 40px;
    background: transparent url("../images/arrows2.png") no-repeat left top;
    margin-top: 1%;
}
 .callbacks_nav:hover{
  	opacity: 0.5;
  }
.callbacks_nav.next {
  left: auto;
    background-position: right top;
   right:0px;
 }
 .callbacks_nav.prev {
	right: auto;
	background-position:left top;
	  left: 0px;
}
#slider3-pager a {
  display: inline-block;
}
#slider3-pager span{
  float: left;
}
#slider3-pager span{
	width:100px;
	height:15px;
	background:#fff;
	display:inline-block;
	border-radius:30em;
	opacity:0.6;
}
#slider3-pager .rslides_here a {
  background: #FFF;
  border-radius:30em;
  opacity:1;
}
#slider3-pager a {
  padding: 0;
}
#slider3-pager li{
	display:inline-block;
}
.rslides {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 100%;
  padding: 0;
}
.rslides li {
  -webkit-backface-visibility: hidden;
  position: absolute;
  display:none;
  width: 100%;
  left: 0;
  top: 0;
}
.rslides li{
  position: relative;
  display: block;
  float: left;
}
.rslides img {
  height: auto;
  border: 0;
  }
.callbacks_tabs{
        list-style: none;
    position: absolute;
    bottom: -21%;
    z-index: 999;
    left: 38%;
    padding: 0;
    margin: 0;
    display: block;
}
.slider-top span{
	font-weight:600;
}
.callbacks_tabs li{
  display: inline-block;
  margin: 0 .3em;
}
@media screen and (max-width: 600px) {
  .callbacks_nav {
    top: 47%;
    }
}
/*----*/
.callbacks_tabs a{
 visibility: hidden;
}
.callbacks_tabs a:after {
        content: "\f111";
    font-size: 0;
    font-family: FontAwesome;
    visibility: visible;
    display: block;
    width: 40px;
    height: 5px;
    display: block;
    background: #898989;
    display: inline-block;
    border: none;
}
.callbacks_here a:after{
  background:#55065a;
}
.banner-info {
       margin-top: 150px;
    text-align: center;
}
.banner-info h3 {
    font-size: 50px;
    font-weight: 400;
    color: #000000;
	    padding: 0;
}
.banner-info p {
  font-size: 20px;
  font-weight:300;
  color:#55065a;
  margin: 20px 0;
}
.shop {
    float: right;
}
.shop a {
	text-decoration:none;
	padding:12px 20px;
	border:1px solid #000;
	color:#000;
	font-size:18px;
	letter-spacing:2px;
}
.shop a:hover {
	color:#fff;
	background-color:#55065a;
	border:1px solid #55065a;	
}
/*-- online-strip --*/
.online-strip {
	border-top: 1px solid #C8C8C8;
	border-bottom: 1px solid #C8C8C8;
	padding: 20px 0;
	text-align:center;
	margin: 40px 0 30px;
}
.shipping-grid {
	border-left: 1px solid #C8C8C8;
	border-right: 1px solid #C8C8C8;
}
.shipping {
	float:left;
	width:13%;
	margin-right:3%;
	margin-left:20%;
}
.shipping img {
	width:100%;
	margin-top:10%;
}
.shipping-text {
	float: left;
}
.online-strip h3 {
	color: #55065a;
	font-size: 1.5em;
	    padding: 0;
}
.follow-us h3 {
	margin-top:0.4em;
}
.online-strip p {
	font-size:0.95em;
}
a.twitter {
	width: 25px;
	height: 25px;
	background: url(../images/follow.png) no-repeat 0px 0px;
	display: inline-block;
	margin:0 1em;
	  vertical-align: text-bottom;
}
a.twitter:hover,a.facebook:hover {
	opacity:0.5;
}
a.facebook {
	width: 25px;
	height: 25px;
	background: url(../images/follow.png) no-repeat -25px 0px;
	display: inline-block;
	  vertical-align: text-bottom;
}
/*-- online-strip --*/
h3.head.text-center {
    font-size: 35px;
    color: #55065a;
    font-weight: 500;
	    padding: 0;
}
.products-grid {
    padding: 30px 0;
}
.product {
	position:relative;
	margin-top: 50px;
}
.product:hover .mask{
	display:block;
}
.products-grid img {
	width:100%;
}
.products-grid  a {
	display:block;
	color:#000;
	text-transform:uppercase;
	font-size:14px;
	letter-spacing:2px;
	text-decoration:none;
}
a.product_name {
    margin: 15px 0;
}
.product-left:hover .p-one{
	border: 1px solid #8c2830;
	transition: 0.5s all ease;
	-webkit-transition: 0.5s all ease;
	-moz-transition: 0.5s all ease;
	-o-transition: 0.5s all ease;
	-ms-transition: 0.5s all ease;
}
.product-left:hover .p-one p a{
	color: #8c2830;
}
.product-left:hover .mask{
	display:block;
}
.mask {
	display: none;
	position: absolute;
	top: 40%;
	left: 40%;
	background-color:#363636;
}
.mask a{
	background: rgba(255, 255, 255, 0.74);
    color: #000;
    font-size: 15px;
    font-weight: 400;
    padding: 6px 12px;
    text-decoration: none;
}
.product-left{
	position:relative;
	text-align:center;
}
.mask a:hover{
	text-decoration:none;
	background:#55065a;
	color:#fff;
	transition: 0.7s all;
	-webkit-transition: 0.7s all;
	-o-transition: 0.7s all;
	-moz-transition: 0.7s all;
	-ms-transition: 0.7s all;
}
.product-one {
	margin-top: 4%;
}
.product-one:nth-child(1){
	margin-top:0;
}
.product p {
	color: #999;
	font-family: 'Lato-Regular';
	font-weight: 700;
	display: inline-block;
	vertical-align: middle;
}
.product p a {
	text-decoration: none;
	color: #999;
}
.product p i {
	background: url(../images/cart.png) no-repeat;
	width: 20px;
	height: 14px;
	display: inline-block;
	margin-right: 4px;
	vertical-align: middle;
}
.product-left:hover .product p i{
	background: url(../images/cart-2.png) no-repeat;
}
/*--end-product--*/
h3.like{
    font-size: 30px;
    color: #55065a;
    font-weight: 500;
	    padding: 0;
}
a.like_name {
    line-height: 40px;
    display: block;
	    color: #000;
    text-transform: uppercase;
    font-size: 14px;
    letter-spacing: 2px;
    text-decoration: none;
}
#flexiselDemo1, #flexiselDemo3 {
	display: none;
}
.nbs-flexisel-container {
	position: relative;
	max-width: 100%;
	    margin-top: 3em;
}
.nbs-flexisel-ul {
	position: relative;
	width: 9999px;
	margin: 0px;
	padding: 0px;
	list-style-type: none;
	text-align: center;
}
.nbs-flexisel-inner {
	overflow: hidden;
	margin: 0 auto;
}
.nbs-flexisel-item {
	float: left;
	margin:0px;
	padding:0px;
	cursor: pointer;
	position: relative;
	line-height: 0px;
}
.nbs-flexisel-item > img {
	cursor: pointer;
	position: relative;
	margin-top:10px;
	margin-bottom: 10px;
	max-width:350px;
	max-height:500px;
	display:inline-block;
}
.grid-flex{
	margin:20px 0 20px 0;
}
.nbs-flexisel-item > img {
	cursor: pointer;
	position: relative;
	width: 90%;
}
/*** Navigation ***/
.nbs-flexisel-nav-left, .nbs-flexisel-nav-right {
	width: 45px;
	height: 45px;
	position: absolute;
	cursor: pointer;
	z-index: 100;
	margin-top:-2em;
}
.nbs-flexisel-nav-left {
	left: 0px;
	background: url(../images/arrows.png) no-repeat -8px -7px;
}
.nbs-flexisel-nav-right {
	right: 0px;
	background: url(../images/arrows.png) no-repeat -61px -7px;
}
.other-products {
    padding: 60px 0;
}
.liked-product{
	margin-top:0;
}
/*-- news-letter-starts-here --*/
.news-letter {
    background-color: #F7F7F7;
    padding: 35px 0;
}
.join h6 {
    font-size: 22px;
    font-weight: 400;
    color: #000;
    float: left;
    margin-right: 5%;
	margin-top:10px;
    letter-spacing: 1px;
	font-family: 'Lato-Regular';
	padding: 0;
}
.join input[type="text"] {
	width: 48%;
    color:#4D4D4D;
    letter-spacing: 1px;
    font-weight: 300;
    font-size: 15px;
    padding: 10px 10px;
    border: 1px solid #E4E4E4;
    outline: none;
    font-family: 'Lato-Regular';
    text-align: left;
}
.join input[type="button"]{
    outline: none;
    cursor: pointer;
    width: 22%;
    padding: 6px 0 10px;
    background: #55065a;
    color: #fff;
    font-size: 19px;
    font-weight: 400;
    margin: 0px 0 0 -3px;
    border: none;
    -webkit-apperance: none;
}
.join input[type="button"]:hover {
	background-color:#000;
}
/*-- news-letter-ends-here --*/
/*-- footer-starts-here --*/
.span1_of_4 h4 {
    margin: 0 0 15px 0;
    font-size: 23px;
    color: #55065a;
    text-transform: capitalize;
    font-weight: 500;
	    padding: 0;
}
.footer {
    padding: 50px 0;
}
ul.f_nav li{
    list-style-type: none;
	margin: 5px 0;
}
ul.f_nav li a{
    list-style-type: none;
    font-size: 14px;
    color: #B3B3B3;
	text-transform:capitalize;
}
.cards.text-center {
    border-top: 1px solid #E7E7E7;
    border-bottom: 1px solid #E7E7E7;
    margin: 40px 0;
    padding: 25px 0;
}
.copyright p {
    font-size: 15px;
    font-weight: 400;
    color: #929292;
    letter-spacing: 1px;
}
.copyright p a {
	color:#55065a;
}
/*-- footer-ends-here --*/
/*-- products-page-starts-here --*/
.products{
	width:20%;
	margin-right:2%;
	float:left;
}
.product-listy{
	background:#91b900;
}
ul.product-list{
	padding:0em 0 0.5em 0;
	margin:0.5em 0;
}
ul.product-list li{
	display: block;
	margin:5px 0;
}
ul.product-list li a{
	color:#FFF;
	text-transform:uppercase;
	font-size:0.85em;
	text-decoration:none;
	padding:5px 2em;
	font-family: 'Doppio One', sans-serif;
	font-weight:400;
	display: block;
}
ul.product-list li a:hover{
	background:#000;
	color:#fff;
	padding:5px 2em;
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-o-transition:0.5s all;
	-moz-transition:0.5s all;
	-ms-transition:0.5s all;
}
.product-listy h2{
	color: #fff;
    background: #<?=$renkler->kategoriicrenk?>;
    font-size: 15px;
    padding: 23px;
    font-weight: 600;
    text-transform: uppercase;
}
.latest-bis {
	margin: 1.5em 0;
	position:relative;
}
.offer{
	position:absolute;
	bottom: 13%;
	right: 2%;
}
.offer p{
	font-size:30px;
	color:#fff;
	background:rgba(129, 98, 99, 0.73);
	padding: 15px 8px;
	border-radius:50%;
	-webkit-border-radius:50%;
	-o-border-radius:50%;
	-moz-border-radius:50%;
	-ms-border-radius:50%;
	font-weight:400;
}
.offer small{
	color: #7C7C7C;
	font-size: 18px;
}
.tags{
	list-style:none;
	background:#FCFCFC;
	margin-top:2em;
	padding:1em;
	font-weight:400;
}
h4.tag_head{
	    color: #333;
    font-weight: 600;
    font-size: 20px;
    margin-bottom: 20px;
	    padding: 0;
}
ul.tags_links{
	padding:0;
	list-style:none;
}
ul.tags_links li {
	display: inline-block;
	margin: 8px 3px;
}
ul.tags_links li a {
	color: #333;
	font-size: 1em;
	background: #e9e9e9;
	padding: 5px 10px;
}
ul.tags_links li a:hover{
	text-decoration:none;
	background:#55065a;
	color:#fff;
}
.link1 {
	font-size: 0.85em;
	line-height: 18px;
	color: #333;
	font-weight: bold;
	background: url(../images/tag_arrow.png) right 4px no-repeat;
	padding-right: 20px;
	margin-top:1.5em;
	display: inline-block;
}
.link1:hover{
	color:#fb4d01;
	text-decoration:none;
}
.new-product{
	width:78%;
	float:right;
	background:rgba(245, 243, 243, 0.27);
	min-height:800px;
	padding:2em;
}
ul.product-top-list{
	padding:0;
	float: left;
}
ul.product-top-list li{
	display: inline-block;
	font-size:0.82em;
	color:#777;
}
ul.product-top-list li a{
	    color: #55065a;
    font-size: 16px;
}
ul.product-top-list li span.act{
	    background: yellow;
    font-size: 14px;
    padding: 3px;
}
p.back{
	float: right;
	font-size:0.82em;
}
p.back a {
	font-size: 14px;
    color: #B9B4B5;
}
.labout {
	display: block;
	float: left;
	margin: 0 3.6% 0 0;
}
.span_2_of_al{
	width:40%;
	width: 46%;
	float: left;
}
.span_2_of_al h3 {
	color: #333;
	text-transform: uppercase;
	font-size: 1.7em;
	font-weight: bold;
}
ul.ratings{
	padding: 0;
	margin-top:1em;
}
ul.ratings li{
	display: inline-block;
}
ul.ratings li a{
	font-size: 0.87em;
	color: #000;
	text-decoration: none;
	font-weight: 600;
}
i.rating-ed{
	background: url(../images/stars.png)no-repeat -9px;
}
.price_single {
	font-size: 1.3em;
	margin: 0.5em 0 1.5em;
	font-family: 'Doppio One', sans-serif;
	font-weight:400;
}
span.reducedfrom {
	text-decoration: line-through;
	margin-right: 3%;
	color: #555;
}
span.actual {
	color: #ee4a02;
	font-size: 1em;
	margin-right: 5%;
}
.price_single a {
	color: #999;
	font-size: 13px;
}
h2.quick {
	color: #555;
	font-size: 0.85em;
	text-transform: uppercase;
}
p.quick_desc {
	color: #999;
	font-size: 0.8125em;
	line-height: 1.8em;
}
ul.product-qty {
	padding: 0;
	list-style: none;
}
.product-qty span {
	color: #555;
	font-size: 0.85em;
	padding-bottom: 0.5em;
	display: block;
	text-transform: uppercase;
	margin-top: 2em;
}
.product-qty select {
	border: 1px solid #eee;
	padding: 0.5em;
	font-size: 1em;
	outline: none;
}
.btn_form form input[type="submit"] {
	cursor: pointer;
	border: none;
	outline: none;
	display: inline-block;
	font-size: 1em;
	padding: 13px 20px;
	color: #fff;	
	text-transform: uppercase;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
	margin-top: 2em;
}
.btn_form form input[type="submit"]:hover{
}
.abt-ft{
	margin-top:2em;
}
.singel_right {
	margin-bottom: 2em;
}
h3.new-models {
	font-size: 1.2em;
	background: #ee4a02;
	padding: 5px;
	font-weight: 600;
	color:#fff;
}
.view-first:hover .mask {
	opacity: 1;
}
.view .mask, .view .content {
	position: absolute;
	overflow: hidden;
	top: 10em;
	left: 6.2em;
}
.view-first .mask {
	opacity: 0;
	background-color: rgba(219,127,8, 0.7);
	-webkit-transition: all 0.4s ease-in-out;
	-moz-transition: all 0.4s ease-in-out;
	-o-transition: all 0.4s ease-in-out;
	-ms-transition: all 0.4s ease-in-out;
	transition: all 0.4s ease-in-out;
	padding: 10px 15px;
	background: rgba(255, 255, 255, 0.82);
	-moz-box-shadow: rgba(0, 0, 0, 0.16) 0 2px 8px;
	-webkit-box-shadow: rgba(0, 0, 0, 0.16) 0 2px 8px;
	box-shadow: rgba(0, 0, 0, 0.16) 0 2px 8px;
	color: #000;
	font-size: 0.85em;
	font-weight: bold;
}
p.title {
	color: #000;
	font-size: 0.95em;
	font-weight: bold;
}
.cart-left {
	float: left;
	margin-right: 2.6%;
}
p.title {
	color: #000;
	font-size: 0.95em;
	font-weight: 700;
	margin:0;
}
.pricey {
	float: right;
	font-weight: bold;
	font-size: 0.95em;
}
.view .mask, .view .content {
    position: absolute;
    overflow: hidden;
 top: 12em;
	left: 7.2em;
	background-color:#B4B4B4;
}
.view-first:hover .mask {
	opacity: 1;

}

.product_image {
    position: relative;
}
.product_container {
	padding: 1em;
}
.products-page {
	padding: 4em 0;
}
.sort-by select {
	outline: none;
}
.pages {
	float: right;
}
.pages .limiter {
	color: #747474;
    font-size: 12px;
    text-transform: uppercase;
}
.pages .limiter label {
	vertical-align: middle;
}
.pages .limiter select {
	padding: 0;
	margin: 0 0 1px;
	vertical-align: middle;
}
.limiter.visible-desktop label {
	font-weight: normal;
	margin: 0;
}
.mens-toolbar {
	    margin: 23px 0;
    font-size: 20px;
}
.mens-toolbar .sort {
	float: left;
	width: 20.5%;
}
.sort-by {
	color: #000;
	font-size: 0.9em;
	text-transform: uppercase;
}
.sort-by label {
	font-weight: normal;
	float: left;
	margin: 2px 5px 0 0;
}
ul.women_pagenation.dc_paginationA.dc_paginationA06 {
	float: right;
	padding: 0;
	list-style: none;
}
ul.women_pagenation li {
	float: left;
	margin: 0px;
	margin-left: 5px;
	padding: 0px;
	list-style: none;
	font-size: 14px;
}
ul.women_pagenation li a {
	color: #000;
	display: block;
	padding: 4px 8px;
	text-decoration: none;
	font-size: 0.7125em;
	text-transform: uppercase;
}
ul.women_pagenation li.active a, ul.women_pagenation li a:hover {
	background: #3C3038;
	color: #fff;
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-o-transition:0.5s all;
	-moz-transition:0.5s all;
	-ms-transition:0.5s all;
}
.product-listy{
	background:#9E9C9C;
}
ul.product-list{
	padding:0em 0 0.5em 0;
	margin:0.5em 0;
}
ul.product-list li{
	display: block;
	margin:5px 0;
}
ul.product-list li a{
	color:#FFF;
	text-transform:uppercase;
	font-size:0.85em;
	text-decoration:none;
	padding:5px 2em;
	font-family: 'Doppio One', sans-serif;
	font-weight:400;
	display: block;
}
ul.product-list li a:hover{
	background:#55065a;
	color:#fff;
	padding:5px 2em;
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-o-transition:0.5s all;
	-moz-transition:0.5s all;
	-ms-transition:0.5s all;
}
.latest-bis {
	margin: 1.5em 0;
	position:relative;
}
.offer{
	position:absolute;
	bottom: 13%;
	right: 2%;
}
ul.tags_links{
	padding:0;
	list-style:none;
}
ul.tags_links li {
	display: inline-block;
	margin: 8px 3px;
}
ul.tags_links li a {
	color: #333;
	font-size: 1em;
	background: #e9e9e9;
	padding: 5px 10px;
}
ul.tags_links li a:hover{
	text-decoration:none;
}
.link1 {
	font-size: 0.85em;
	line-height: 18px;
	color: #333;
	font-weight: bold;
	background: url(../images/tag_arrow.png) right 4px no-repeat;
	padding-right: 20px;
	margin-top:1.5em;
	display: inline-block;
}
.link1:hover{
	color:#fb4d01;
	text-decoration:none;
}
ul.product-top-list{
	padding:0;
	float: left;
}
ul.product-top-list li{
	display: inline-block;
	font-size:0.82em;
	color:#777;
}
p.back{
	float: right;
	font-size:0.82em;
}
.labout {
	display: block;
	float: left;
	margin: 0 3.6% 0 0;
}
.span_2_of_al{
	width:40%;
	width: 46%;
	float: left;
}
.span_2_of_al h3 {
	color: #333;
	text-transform: uppercase;
	font-size: 1.7em;
	font-weight: bold;
}
ul.ratings{
	padding: 0;
	margin-top:1em;
}
ul.ratings li{
	display: inline-block;
}
ul.ratings li a{
	font-size: 0.87em;
	color: #000;
	text-decoration: none;
	font-weight: 600;
}
i.rating-ed{
	background: url(../images/stars.png)no-repeat -9px;
}
.price_single {
	font-size: 1.3em;
	margin: 0.5em 0 1.5em;
	font-family: 'Doppio One', sans-serif;
	font-weight:400;
}
span.reducedfrom {
	text-decoration: line-through;
	margin-right: 3%;
	color: #555;
}
span.actual {
	color: #ee4a02;
	font-size: 1em;
	margin-right: 5%;
}
.price_single a {
	color: #999;
	font-size: 13px;
}
h2.quick {
	color: #555;
	font-size: 0.85em;
	text-transform: uppercase;
}
p.quick_desc {
	color: #999;
	font-size: 0.8125em;
	line-height: 1.8em;
}
ul.product-qty {
	padding: 0;
	list-style: none;
}
.product-qty span {
	color: #555;
	font-size: 0.85em;
	padding-bottom: 0.5em;
	display: block;
	text-transform: uppercase;
	margin-top: 2em;
}
.product-qty select {
	border: 1px solid #eee;
	padding: 0.5em;
	font-size: 1em;
	outline: none;
}
.btn_form form input[type="submit"] {
	cursor: pointer;
	border: none;
	outline: none;
	display: inline-block;
	font-size: 1em;
	padding: 13px 20px;
	color: #fff;
	
	text-transform: uppercase;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
	margin-top: 2em;
}
.btn_form form input[type="submit"]:hover{
}
.abt-ft{
	margin-top:2em;
}
.singel_right {
	margin-bottom: 2em;
}
h3.new-models {
	font-size: 1.2em;
	background: #ee4a02;
	padding: 5px;
	font-weight: 600;
	color:#fff;
}
.view .mask, .view .content {
	position: absolute;
	overflow: hidden;
	top: 12em;
	left: 7.2em;
}
p.title {
	color: #000;
	font-size: 0.95em;
	font-weight: bold;
}
.cart-left {
	float: left;
	margin-right: 2.6%;
}
p.title {
	color: #000;
	font-size: 0.95em;
	font-weight: 700;
	margin:0;
}
.pricey {
	float: right;
	font-weight: bold;
	font-size: 0.95em;
}
.product_container {
	padding: 1em;
	border-top: 10px solid #f8f8f8;
}
.products-page {
	padding: 60px 0;
}
/*---- Best Buy Starts Here ---*/
.mens-toolbar .sort {
	float: left;
	width: 20.5%;
}
.sort-by {
	color: #828282;
    font-size: 13px;
    text-transform: uppercase;
}
ul.women_pagenation {
	float: right;
	padding: 0;
	list-style: none;
}
ul.women_pagenation li.active a, ul.women_pagenation li a:hover {
	background: #3C3038;
	color: #fff;
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-o-transition:0.5s all;
	-moz-transition:0.5s all;
	-ms-transition:0.5s all;
}
.sort-by select {
	outline: none;
}
.pages {
	float: right;
}
.pages .limiter label {
	vertical-align: middle;
}
.limiter.visible-desktop label {
	font-weight: normal;
	margin: 0;
}
.product_image:hover .mask {
    display: block;
    transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}
/*-- products-page-ends-here --*/
/*-- login-starts-here --*/
.login-left {
	padding: 0;
}
.login-left h2 {
	color: #000;
    font-size: 20px;
    padding-bottom: 18px;
    font-weight: 600;
}
.sifrecerceve  {
border:1px solid #CBCBCB;
background-color:#E8E8E8;
border-radius: 5px;

}
.login-right h3 {
	color: #000;
    font-size: 20px;
    padding-bottom: 18px;
    font-weight: 600;
}
li.home a {
    color: #55065a;
    font-size: 16px;
}
.login-left p, .login-right p {
	color: #CAC9C9;
	display: block;
	font-size: 1.1em;
	margin: 0 0 2em 0;
	line-height: 1.5em;
}
.acount-btn {
	background: #55065a;
	color: #FFF;
	font-size: 15px;
	padding: 0.7em 1.2em;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
	display: inline-block;
	text-transform: uppercase;
}
.acount-btn:hover, .login-right input[type="submit"]:hover{
	background:#000;
	text-decoration:none;
	color:#fff;
}
.login-right form {
	padding: 1em 0;
}
.login-right form div {
	padding: 0 0 2em 0;
}
.login-right span {
	color: #555;
	font-size:1em;
	padding-bottom: 0.2em;
	display: block;
	text-transform: uppercase;
}
.login-right input[type="text"] {
	border: 1px solid #EEE;
	outline-color:#CACACA;
	width: 96%;
	font-size:13px;
	padding: 8px;
}
.login-right input[type="password"] {
	border: 1px solid #EEE;
	outline-color:#CACACA;
	width: 96%;
	font-size:13px;
	padding: 8px;
}
.login-right input[type="submit"] {
	background: #55065a;
	color: #FFF;
	font-size: 1em;
	padding: 0.7em 1.2em;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
	display: inline-block;
	text-transform: uppercase;
	border:none;
	outline:none;
}
a.forgot {
	font-size: 1em;
	margin-right: 11px;
}
ul.breadcrumbs{
	padding:0;
	list-style:none;
	float:left;
}
ul.breadcrumbs li{
	display:inline-block;
	color:#000;
}
ul.breadcrumbs li.women{
	    background: yellow;
    font-size: 14px;
    padding: 3px;
}
ul.previous{
	padding:0;
	list-style:none;
	float:right;
	    margin-top: 3px;
}
ul.previous li a{
	    font-size: 14px;
    color: #B9B4B5;
}
.dreamcrub{
	    margin: 15px 0 60px 0;
    background-color: #FDFDFD;
    padding: 10px 20px;
}
.mens-toolbar .sort {
	float: left;
	width: 20.5%;
}
.sort-by label{
	font-weight:normal;
}
.mens-toolbar .pages {
	float: right;
	margin: 0;
}
ul.women_pagenation.dc_paginationA.dc_paginationA06 {
	float:right;
	padding:0;
	list-style:none;
}
.pages{
	float:right;
}
.pages .limiter {
	color: #000;
	font-size: 0.8125em;
	text-transform: uppercase;
}
.pages .limiter select {
	padding: 0;
	margin: 0 0 1px;
	vertical-align: middle;
}
ul.women_pagenation li {
	float: left;
	margin: 0px;
	margin-left: 5px;
	padding: 0px;
	list-style:none;
}
ul.women_pagenation li a {
	color:#000;
	display: block;
	padding:4px 8px;
	text-decoration: none;
	font-size: 0.8125em;
	text-transform:uppercase;
}
ul.women_pagenation li.active a{
	background:#7C7C7C;
	color:#fff;
}
ul.women_pagenation li a:hover{
	background:#55065a;
	color:#fff;
}
.login-page {
	padding: 60px 0;
}
/*-- login-ends-here --*/
/*-- register-starts-here --*/
/*-- registration-form --*/
.registration-form {
  padding: 60px 0;

}
.registration-form h2 {
    font-weight: 600;
    text-transform: uppercase;
	color: #000;
    font-size: 20px;
    padding-bottom: 18px;
}
.reg p{
	color: #CAC9C9;
	margin: 0px 0 0 0;
	font-size: 14px;
	line-height: 1.8em;
}
.col-md-6.reg-form {
	padding: 0;
}

.reg p:nth-child(2) {
	margin:0;
}
.reg form {
	margin-top: 32px;
}
.reg p a{
	text-decoration:none;
	color:#55065a;
}
.reg p a:hover{
	color: #000;
	transition: .5s all;
	-webkit-transition: .5s all;
	-o-transition: .5s all;
	-ms-transition: .5s all;
	-moz-transition: .5s all;
}
.reg ul {
	padding:0;
	margin:0 0 22px 0;
}
.reg ul li {
	display: inline-block;
	width: 58%;
}
.reg ul li.text-info{
	width: 38%;
	color: #55065a;
	font-size: 16px;
	text-transform: uppercase;
	margin: 0 0 0px 0;
	font-weight: bold;
}
.reg form input[type="text"],.reg form input[type="password"] {
	width: 100%;
	padding: 8px;
	font-size: 14px;
	font-weight: 400;
	border: 1px solid #e6e6e6;
	outline: none;
	color: #000;
}
.reg-form{
	float:left;
	width:50%
}
.reg-right{
	float:right;
	width:47%
}
p.click a{
	display: inline-block;
	color:#55065a;
}
p.click a:hover{
	color: #000;
	transition: .5s all;
	-webkit-transition: .5s all;
	-o-transition: .5s all;
	-ms-transition: .5s all;
	-moz-transition: .5s all;
}
.reg form input[type=submit]{
	border:none;
	color: #ffffff;
	padding: 9px 35px;
	font-size: 14px;
	cursor: pointer;
	font-weight: 500;
	margin: 0 0 32px 0;
	background: #55065a;
	border-top: none;
	border-left: none;
	border-right: none;
}
.reg form input[type=submit]:hover {
	background:#000;
	transition: .5s all;
	-webkit-transition: .5s all;
	-o-transition: .5s all;
	-ms-transition: .5s all;
	-moz-transition: .5s all;
}
.reg ul:nth-child(6) {
	margin: 0 0 32px 0;
}
.reg ul li:nth-child(2){
	margin-left: 3%;
}
.reg-right p{
	color: #CAC9C9;
	margin: 0 0 30px 0;
	font-size: 14px;
	line-height: 1.8em;
}
/*-- //registration-form --*/
/*-- register-ends-here --*/
/*-- contact-page-starts-here --*/
.contact {
	padding: 60px 0;
}
.contact-info {
	margin-bottom: 40px;
}
.contact-left{
	width:30%;
	float:left;
}
.contact-right{
	width:68%;
	float:right;
}
.contact-left input[type="text"]{
	width: 100%;
	color: #000;
	margin: 0 23px 23px 0;
	font-size:14px;
	padding: 12px 10px;
	outline: none;
	border: 1px solid #e8e8e8;
}
.contact-right textarea{
	width: 100%;
	color: #000;
	font-size:14px;
	resize: none;
	height: 185px;
	padding: 12px;
	outline: none;
	border: 1px solid #e8e8e8;
}
.contact-form input[type=button] {
	border:none;
	color: #ffffff;
	padding: 13px 43px;
	font-size: 14px;
	cursor: pointer;
	font-weight: 500;
	background:#55065a;
}
.contact-form input[type=button]:hover {
	background:#000;
	transition: .5s all;
	-webkit-transition: .5s all;
	-o-transition: .5s all;
	-ms-transition: .5s all;
	-moz-transition: .5s all;	
}
.contact-info h2{
	text-align: center;
    margin: 0 0 20px 0;
    font-size: 24px;
    color: #000000;
    font-weight: 600;
    text-transform: uppercase;
	padding: 0;
}
.contact-info h3{
	text-align: center;
    margin: 0 0 20px 0;
    font-size: 24px;
    color: #000000;
    font-weight: 600;
    text-transform: uppercase;
	padding: 0;
}
.contact-map{
	width:100%;
	margin-bottom: 52px;
}
.contact-map iframe{
	width:100%;
	height:330px;
}
/*-- //contact-page-ends-here --*/
/*-- typography-page-ends-here --*/
h2.heading {
       margin: 0 0px 0.3em 0;
    color: #000;
    font-size: 40px;
    letter-spacing: 1px;
    padding: 0;
}
.typrography {
    padding: 60px 0;
}
.grid_3 h3 {
	padding-bottom: 15px;
    font-size: 28px;
    letter-spacing: 1px;
    color: #3382C9;
}
.grid_4 h3 {
	color: #666161;
	padding-bottom:0;
	font-size: 28px;
    letter-spacing: 0;
}
.grid_4 h3 {
	padding: 12px 0;
}
.grid_5 h1, h2, h3, h4, h5, h6 {
	padding: 12px 0;
}
h3.first {
	    padding-bottom: 15px;
    font-size: 30px;
    letter-spacing: 1px;
    color: #3382C9;
}
.input-group {
    margin-bottom: 20px;
}
h3.bars {
    padding-bottom: 15px;
    font-size: 28px;
    letter-spacing: 1px;
    color: #3382C9;
}
.badge {
    background-color: #3382D3;
}
.page-header h1 {
    padding-bottom: 15px;
    font-size: 18px;
    letter-spacing: 1px;
    color: #3382C9;
}
section#tables h2 {
    padding-bottom: 15px;
    font-size: 28px;
    letter-spacing: 1px;
    color: #3382C9;
}
div#myTabContent {
    margin-top: 0.5em;
}
/*-- typography-page-ends-here --*/
/*--checkout--*/
/*-- cart-page --*/
.cart-gd{
	margin-top:50px;
}
.cart-items {
	padding: 60px 0;
}
.cart-items h2 {
	margin: 0 0 20px 0;
	text-align: center;
	font-size: 28px;
	color: #55065a;
	font-weight: 600;
	padding:0;
}
.cart-item {
	width: 20%;
	float: left;
	margin-right: 4%;
}
.cart-item img {
	width: 100%;
}
.close1, .close2,.close3 {
	cursor: pointer;
	height: 28px;
	position: absolute;
	right: 0px;
	top: 25px;
	-webkit-transition: color 0.2s ease-in-out;
	-moz-transition: color 0.2s ease-in-out;
	-o-transition: color 0.2s ease-in-out;
	transition: color 0.2s ease-in-out;
}
.cart-item-info {
	width: 75%;
	float: left;
	margin-top: 3%;
}
.cart-item-info h3 {
	color:#000;
	font-size: 14px;
	font-weight: 600;
}
.cart-item-info h3 a {
	color:#55065a;
    font-size: 18px;
}
.cart-item-info h3 span {
	display: block;
	font-weight: 400;
	font-size: 0.85em;
	margin: 0.7em 0;
}
ul.qty {
	padding: 0;
	margin: 0;
	list-style: none;
}
ul.qty li {
	display: inline-block;
	margin-right: 10%;
}
ul.qty li p {
	font-size: 14px;
	color: #000;
}
.delivery {
	margin-top: 3em;
}
.delivery p {
	color: #000;
	font-size: 16px;
	font-weight: 400;
	float: left;
}
.delivery span {
	color: #000;
	font-size: 16px;
	font-weight: 400;
	float: right;
}
.cart-sec {
	margin: 25px 0;
}
.cart-header,.cart-header2,.cart-header3 {
  position: relative;
      background-color: #FDFDFD;
}
/*-- //check --*/
/*-- single-page --*/
.col-md-5.zoom-grid {
    padding: 0;
}
.reviews-tabs {
    margin-top: 60px;
}
.response-text-right p {
    font-size: 13px;
    margin: 0 0 1em;
    line-height: 20px;
}
.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
    color: #55065a;
    cursor: default;
    font-size: 1.2em;
    font-weight: 600;
    border: none;
    background-color: transparent;
    border-right: 1px solid #E7E7E7;
    border-radius: 0;
    padding: 0 10px;
    cursor: pointer;
}
.nav-tabs > li > a {
    margin-right: 0px;
    line-height: 1.42857143;
    border-radius: 0;
    color: #000000;
    cursor: default;
    font-size: 1.2em;
    font-weight: 600;
    border: none;
    background-color: transparent;
    border-right: 1px solid #E7E7E7;
    border-radius: 0;
    padding: 0 10px;
    cursor: pointer;
	    font-family: 'PlayfairDisplay-Regular';
}
ul.nav.nav-tabs {
    border-bottom: 1px solid #ddd;
    margin-bottom: 15px;
    padding-bottom: 18px;
}
.nav > li > a:hover, .nav > li > a:focus {
    background-color: #FCFCFC;
}
.media-left.response-text-left {
    width: 10%;
    float: left;
    margin-right: 2%;
}
.response-text-right ul li {
    display: inline-block;
    color: #B6B8B5;
    font-size: 1em;
    font-weight: 600;
    margin-right: 16px;
	font-family: 'PlayfairDisplay-Regular';
}
.response-text-right ul li a {
    color: #887f66;
    font-size: 12px;
    font-weight: 600;
}
.media, .media .media {
    margin-top: 25px;
}
p.tab-text {
    line-height: 26px;
    color: #B9B9B9;
	font-size: 14px;
}
.media-left.response-text-left h5 {
    font-size: 14px;
    text-align: Center;
    margin-top: 3px;
}
.media-left.response-text-left h5 a {
    color: #000;
}
.media-left.response-text-left h5 a:hover {
    color: #55065a;
}
.media-left.response-text-left img {
    width: 100%;
}
.dress-name {
	margin:30px 0;
}
.dress-name h3 {
    float: left;
    font-size: 19px;
    color: #000;
    font-weight: 500;
	    padding: 0;
}
.dress-name p {
    margin-top: 16px;
    font-size: 13px;
    line-height: 23px;
    color: #CAC9C9;
}
.dress-name span {
	float: right;
    color: #000000;
    font-size: 20px;
    letter-spacing: 1px;
    font-weight: 400;
}
p.left {
    float: left;
    font-size: 13px;
    color: #000;
    letter-spacing: 2px;
	margin-right:5%;
	width:40%;
}
p.right {
    float: left;
    font-size: 13px;
    color: #000;
    letter-spacing: 2px;
}
.span1 {
    margin: 18px 0;
    padding: 15px 0;
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
}
.span3 {
    margin: 18px 0;
    padding: 15px 0;
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
}
.span4 {
    border-bottom: 1px solid #Eee;
    padding-bottom: 18px;
}
.purchase {
    margin-top: 50px;
}
.purchase a{
	float: left;
    width: 50%;
    font-size: 14px;
    color: #000;
    text-decoration: underline;
    letter-spacing: 1px;
	margin-top: 1px;
}
.purchase a:hover {
	color:#55065a;
}
.social-icons {
	float:left;
	width: 40%;
}
.social-icons  ul li {
	display:inline-block;
}
.social-icons  ul li a {
	width:18px;
	height:18px;
	background:url('../images/s-icons.png') no-repeat 0px 0px;
	display:inline-block;
	margin: 0 5px;
}
.social-icons  ul li a:hover {
	opacity:0.5;
}
.social-icons  ul li a.facebook1 {
	background-position: 0px 0px;
}
.social-icons  ul li a.twitter1 {
	background-position: -18px 0px;
}
.social-icons  ul li a.googleplus1 {
	background-position: -36px 0px;
}
/*-- //single-page --*/

/*-- responsine-design --*/
@media screen and (max-width: 1366px) {	
	.banner {
		min-height: 650px;
	}
	.dropdown-menu.columns-3 {
		min-width: 530px;
	}
	.footer {
		padding: 50px 0 35px;
	}
	.cards.text-center {
		margin: 35px 0;
		padding: 20px 0;
	}
	.banner-bottom-left h2 {
		font-size: 85px;
		font-weight: 600;
		line-height: 115px;
	}
	.dreamcrub {
		margin: 0px 0 60px 0;
	}
}
@media screen and (max-width: 1280px) {	
	.banner {
		min-height: 608px;
	}
	.banner-bottom-left h2 {
		font-size: 82px;
		line-height: 100px;
		margin: 0 0 0 120px;
	}
	.banner-bottom-left {
		margin: 100px 0px 0px 30px;
	}
	.navbar-nav {
		margin-right: 30px;
	}
	.dropdown-menu.columns-3 {
		min-width: 520px;
	}
	.banner-info h3 {
		font-size: 40px;
	}
	.banner-info p {
		font-size: 16px;
	}
	h2.heading {
		font-size: 35px;
	}
}
@media screen and (max-width: 1024px) {	
	.navbar-header {
		width: 17%;
	}
	.banner {
		min-height: 491px;
	}
	.header-top-strip {
		padding: 6px 0 12px 0;
	}
	.banner-bottom-left h2 {
		font-size: 70px;
		line-height: 85px;
		margin: 0 0 0 135px;
	}
	.banner-info h3 {
		font-size: 35px;
	}
	.banner-info p {
		margin: 15px 0;
	}
	.callbacks_tabs {
		bottom: -16%;
	}
	.callbacks_tabs a:after {
		width: 35px;
		height: 4px;
	}
	.shop a {
		padding: 10px 18px;
		font-size: 16px;
	}
	.navbar-default .navbar-nav > li > a {
		margin: 0 5px;
		padding-top: 8px;
		padding-bottom: 8px;
	}
	.navbar-nav {
		margin-right: 60px;
		margin-top: 6px;
	}
	.dropdown-menu.columns-3 {
		min-width: 475px;
	}
	.dropdown-menu.columns-2 {
		min-width: 360px;
	}
	.online-strip {
		padding: 15px 0;
		margin: 35px 0 20px;
	}
	h3.head.text-center {
		font-size: 30px;
	}
	.product {
		margin-top: 40px;
	}
	.mask {
		top: 39%;
		left: 30%;
	}
	.nbs-flexisel-item img {
		width:95%;
	}
	.liked-product {
		margin-top: 0;
	}
	h3.like {
		font-size: 29px;
	}
	.join input[type="submit"] {
		width: 18%;
	}
	.footer {
		padding: 40px 0 35px;
	}
	.news-letter {
		padding: 30px 0;
	}
	.typrography,.products-page,.registration-form,.login-page,.contact,.cart-items {
		padding: 30px 0 40px;
	}
	.mens-toolbar .sort {
		width: 22.5%;
	}
	.new-product {
		padding: 1.5em;
	}
	.offer p {
		font-size: 26px;
		padding: 21px 11px;
	}
	.view .mask, .view .content {
		top: 10em;
		left: 5.2em;
	}
	.dress-name {
		margin: 20px 0;
	}
	.purchase {
		margin-top: 35px;
	}
	.dreamcrub {
		margin: 0px 0 50px 0;
	}
}
@media screen and (max-width: 800px) {	
	.logo a span {
		font-size: 28px;
		width: 45px;
		height: 46px;
		padding: 4px 0 0 3px;
		margin-top: 3px;
	}
	.logo h1 a {
		font-size: 24px;
		letter-spacing: 1px;
	}
	.navbar-default .navbar-nav > li > a {
		margin: 0 5px;
		padding: 6px 10px;
		font-size: 13px;
	}
	.navbar-nav {
		margin-top: 8px;
	}
	.caret {
		margin-bottom: 3px;
	}
	.banner {
		min-height: 350px;
	}
	.banner-info h3 {
		font-size: 30px;
	}
	.banner-info {
		margin-top: 90px;
	}
	.banner-bottom-left h2 {
		font-size: 50px;
		line-height: 65px;
		margin: 0 0 0 130px;
	}
	.banner-bottom-left {
		margin: 75px 0px 0px 30px;
	}
	.shop a {
		padding: 8px 15px;
		font-size: 14px;
		letter-spacing: 1px;
	}
	.callbacks_tabs a:after {
		width: 30px;
		height: 4px;
	}
	.product {
		margin-top: 30px;
		float: left;
		width: 33.333%;
		padding:0 10px;
	}
	a.product_name {
		margin: 10px 0;
	}
	.mask a {
		font-size: 14px;
		padding: 5px 10px;
	}
	.join h6 {
		font-size: 18px;
	}
	.liked-product {
		width:100%;
		margin-top:0;
	}
	.mask {
		left: 28%;
	}
	.join input[type="submit"] {
		width: 17%;
		font-size: 16px;
		padding: 7px 0 9px;
	}
	.join input[type="text"] {
		width: 47%;
		font-size: 13px;
	}
	.news-letter {
		padding: 25px 0;
	}
	.other-products {
		padding: 35px 0 60px 0;
	}
	.span1_of_4 {
		width: 25%;
		float: left;
		padding: 0 5px;
	}
	ul.f_nav li a {
		font-size: 13px;
	}
	.span1_of_4 h4 {
		margin: 0 0 12px 0;
		font-size: 20px;
	}
	.cards.text-center img {
		width: 55%;
	}
	.copyright p {
		font-size: 14px;
	}
	.follow-us,.shipping-grid,.online-order {
		width: 33.333%;
		float: left;
	}	
	.shipping {
		width: 18%;
		margin-left: 11%;
	}
	.cards.text-center {
		margin: 25px 0;
		padding: 18px 0;
	}
	.footer {
		padding: 40px 0 30px;
	}
	.dropdown-menu.columns-3 {
		min-width: 416px;
	}
	.multi-column-dropdown li a {
		font-size: 13px;
	}
	.dropdown-menu.columns-2 {
		min-width: 317px;
	}
	.login-left {
		float: left;
		width: 47%;
		margin-right:3%
	}	
	.login-right {
		float: left;
		width: 50%;
	}	
	.login-right p {
		margin: 0 0 1.3em 0;
	}	
	.dreamcrub {
		margin: 0px 0 45px 0;
	}
	.login-left h2,.login-right h3 {
		font-size: 18px;
	}
	.reg-form {
		width:100%;
		margin-bottom:5%;
	}
	.reg-right {
		width:100%;
		margin:0;
	}
	.reg ul li.text-info {
		width: 30%;
	}
	.cart-items h2 {
		margin: 0 0 15px 0;
		font-size: 22px;
	}
	.cart-item {
		width: 21%;
		margin-right: 3%;
	}
	.contact-info {
		margin-bottom: 30px;
	}
	.contact-map iframe {
		height: 300px;
	}
	.new-product {
		width: 72%;
	}
	.products {
		width: 26%;
	}
	.mens-toolbar .sort {
		width: 33.5%;
	}
	.new-product {
		padding: 1em;
	}
	.media-left.response-text-left {
		width: 16%;
	}
}
@media screen and (max-width: 768px) {	
	.banner-info {
		margin-top: 75px;
	}
	.banner-bottom-left {
		margin: 65px 0px 0px 30px;
	}
	.dropdown-menu.columns-3 {
		min-width: 406px;
	}
	.dropdown-menu.columns-2 {
		min-width: 290px;
		padding-right: 0;
		padding-left:10px;
	}
	.reg ul li.text-info {
		font-size: 14px;
	}
	h2.heading {
		font-size: 32px;
	}
	.contact-form input[type=submit] {
		padding: 8px 30px;
	}
	.contact-map iframe {
		height: 250px;
	}
	.contact-info h2,.contact-info h3 {
		margin: 0 0 15px 0;
		font-size: 22px;
	}
}
@media screen and (max-width: 640px) {	
	.navbar-header {
		width: 100%;
	}
	.navbar {
		border: none;
	}
	.navbar-nav {
		margin: 10px 0;
		width: 100%;
		text-align: center;
		margin-right:0;
	}
	.navbar-default .navbar-nav > li > a {
		margin: 5px 0px;
	}
	.navbar-header {
		float: none;
	}
	.navbar-collapse.collapse {
		margin-top: 10px;
	}
	.banner-info h3 {
		font-size: 25px;
	}
	.banner-info p {
		margin: 10px 0;
		font-size: 13px;
	}
	.callbacks_tabs a:after {
		width: 26px;
		height: 3px;
	}
	.banner {
		min-height: 304px;
	}
	.banner-bottom-left h2 {
		font-size: 35px;
		line-height: 50px;
		margin: 0 0 0 100px;
	}
	.shop a {
		padding: 8px 12px;
		font-size: 13px;
		letter-spacing: 1px;
	}
	.follow-us, .shipping-grid, .online-order {
		padding: 0 4px;
	}
	a.twitter {
		margin: 0 0.5em;
	}
	.online-strip h3 {
		font-size: 1.3em;
	}
	.shipping {
		margin-left: 7%;
	}
	h3.head.text-center {
		font-size: 28px;
	}
	.product {
		padding: 0 5px;
	}
	.products-grid a {
		font-size: 13px;
		letter-spacing: 1px;
	}
	.nbs-flexisel-item img {
		width: 85%;
		margin-left: 7.5%;
	}
	.span1_of_4 {
		width: 50%;
		padding: 0 15px;
		min-height: 290px;
	}
	.mask {
		left: 26%;
	}
	.join h6 {
		font-size: 16px;
		margin-right: 3%;
	}
	.join input[type="text"] {
		width: 44%;
	}
	.join input[type="submit"] {
		width: 19%;
	}
	.col-sm-4 {
		width: 33.33%;
		float: left;
	}
	.multi-column-dropdown li a:hover {
		background-color: #fff!important;
	}
	.navbar-nav .open .dropdown-menu {
		background-color: #fff;
	}
	.col-sm-6 {
		width:50%;
		float:left;
	}
	.login-left h2, .login-right h3 {
		font-size: 17px;
	}
	.login-left p, .login-right p {
		font-size: 1em;
	}
	.dreamcrub {
		margin: 0px 0 35px 0;
	}
	.login-right span {
		font-size: 0.9em;
	}
	.product-listy h2 {
		padding: 18px;
	}
	.offer p {
		font-size: 21px;
		padding: 22px 17px;
	}
	.mens-toolbar .sort {
		width: 37.5%;
	}
	.view .mask, .view .content {
		top: 8em;
		left: 4.2em;
	}
	.cart-item-info h3 a {
		font-size: 15px;
	}
	.cart-items h2 {
		margin: 0;
		font-size: 20px;
	}	
	.cart-item-info {
		margin-top: 1%;
	}
	.cart-gd {
		margin-top: 30px;
	}
	.delivery p,.delivery span {
		font-size: 14px;
	}
	h2.heading {
		font-size: 30px;
	}
	.panel-title {
		padding: 0;
	}
	.media-left.response-text-left {
		width: 20%;
		margin-right: 2%;
	}
}
@media screen and (max-width: 480px) {	
	.product {
		padding: 0 10px;
		width: 50%;
	}
	.nbs-flexisel-item img {
		width: 70%;
		margin-left: 15%;
	}
	.liked-product,.contact-right {
		width:100%;
	}
	.contact-left {
		width: 100%;
	}
	.contact-left input[type="text"] {
		margin: 0 0px 23px 0;
	}
	.cards.text-center img {
		width: 75%;
	}
	.join h6 {
		font-size: 18px;
		margin-right: 0;
		width: 100%;
		float: none;
		text-align: center;
		margin-bottom: 15px;
	}
	.contact-form input[type=submit] {
		margin-top: 15px;
	}	
	.join input[type="text"] {
		width: 70%;
	}
	.join input[type="submit"] {
		width: 30%;
	}
	.contact-info h2, .contact-info h3 {
		margin: 0 0 12px 0;
		font-size: 20px;
	}
	.banner-top {
		padding-top: 20px;
	}
	.banner {
		min-height: 227px;
	}
	.banner-bottom-left h2 {
		font-size: 23px;
		line-height: 34px;
		margin: 0 0 0 67px;
	}
	.banner-info h3 {
		font-size: 20px;
	}
	.banner-info {
		margin-top: 40px;
	}
	.callbacks_tabs {
		left: 21%;
	}
	.shop a {
		padding: 7px 10px;
		font-size: 12px;
		letter-spacing: 0px;
	}
	.header-top-strip {
		padding: 5px 0 10px 0;
	}
	a.twitter {
		margin: 0 0.3em;
		width: 20px;
		height: 20px;
		background: url(../images/follow.png) no-repeat 0px 3px;
		background-size: 35px;
	}
	a.facebook {
		width: 20px;
		height: 20px;
		background: url(../images/follow.png) no-repeat -18px 2px;
		background-size: 35px;
	}
	.online-strip h3 {
		font-size: 1.2em;
	}
	.shipping {
		margin-left: 38%;
		width: 20%;
		margin-bottom: 6px;
	}
	.follow-us,  .online-order {
		margin-top: 15px;
	}	
	.products {
		width: 100%;
		margin-bottom:15px;
		    margin-right: 0;
	}
	.new-product {
		width: 100%;
	}
	.latest-bis img {
		width: 100%;
	}
	.latest-bis {
		width: 50%;
		margin: 30px auto;
	}
	.login-left,.login-right {
		width: 100%;
		margin-right: 0%;
		padding:0;
	}
	.login-right {
		margin-top:20px;
	}
	.acount-btn {
		font-size: 13px;
		padding: 0.7em 1em;
	}
	.login-right p {
		margin: 0 0 1em 0;
	}
	.login-left h2 {
		font-size: 20px;
		padding-bottom: 10px;
	}
	.reg ul li.text-info {
		width: 36%;
	}
	.cart-item {
		width: 26%;
		margin-right: 3%;
	}
	.cart-item-info {
		width: 71%;
	}
	.delivery p, .delivery span {
		font-size: 13px;
	}
	.delivery {
		margin-top: 2em;
	}
	.panel-title {
		padding: 0;
	}
	.media-left.response-text-left {
		width: 20%;
		margin-right: 2%;
	}
}
@media screen and (max-width: 320px) {	
	.header-top-left {
		width: 100%;
		text-align: center;
	}
	.header-right {
		margin-right:22%;
		margin-top:3%;
	}
	.header-top-left ul li {
		margin: 0 10px;
	}
	.logo a span {
		font-size: 25px;
		width: 40px;
		height: 40px;
		padding: 2px 0 0 1px;
		margin-top: 6px;
	}
	.logo h1 a {
		font-size: 21px;
	}
	.navbar-toggle {
		padding: 7px 7px;
		margin-top: 8px;
		margin-right: 0px;
		margin-bottom: 8px;
	}
	.banner-top {
		padding-top: 15px;
	}
	.banner-bottom-left h2 {
		font-size: 18px;
		line-height: 26px;
		margin: 0 0 0 15px;
	}
	.banner {
		min-height: 170px;
	}
	.banner-info h3 {
		font-size: 18px;
	}
	.banner-info p {
		margin: 8px 0;
		font-size: 13px;
	}
	.banner-bottom-right {
		width: 57%;
	}
	.callbacks_tabs a:after {
		width: 21px;
		height: 3px;
	}
	.banner-bottom-left {
		margin: 55px 0px 0px 30px;
	}
	.follow-us, .shipping-grid, .online-order {
		padding: 0 15px;
		width: 100%;
	}
	.shipping {
		margin-left: 14%;
		width: 16%;
		margin-bottom: 0;
		margin-top:0;
	}
	 .shipping-grid{
		padding: 0 15px;
		width: 100%;
		margin: 15px 0;
		border-top: 1px solid #C8C8C8;
		border-bottom: 1px solid #C8C8C8;
		border-left: none;
		border-right: none;
		padding:10px 0;
	}
	.online-strip h3 {
		font-size: 1.4em;
	}
	.online-order  {
		margin-top:0;
	}
	.follow-us,	 .online-order {
		margin-top: 0;
	}
	.product {
		padding: 0 15px;
		width: 100%;
	}
	.nbs-flexisel-item img {
		width: 80%;
		margin-left: 10%;
	}
	.cards.text-center img {
		width: 95%;
	}
	.copyright p {
		font-size: 13px;
		letter-spacing: 0px;
		line-height: 20px;
	}
	.mask {
		left: 32%;
	}
	.join input[type="text"] {
		width: 65%;
	}
	.join input[type="submit"] {
		width: 35%;
		    font-size: 15px;
	}
	.span1_of_4 {
		width: 100%;
		min-height: 230px;
		text-align: center;
	}
	ul.f_nav li a {
		font-size: 14px;
	}
	.span1_of_4 h4 {
		font-size: 22px;
		margin-top:10px;
	}
	.dreamcrub {
		margin: 0px 0 25px 0;
		background-color: #FDFDFD;
		padding: 8px 5px;
	}
	.login-right input[type="submit"] {
		padding: 0.5em 1em;
	}
	.login-left h2 {
		font-size: 18px;
	}
	.reg ul li.text-info {
		width: 100%;
		margin-bottom: 7px;
	}
	.reg ul li:nth-child(2) {
		margin-left: 0;
		width: 100%;
	}
	.cart-item {
		width: 60%;
		margin-right: 0;
	}
	.cart-item-info {
		width: 100%;
	}
	.delivery p, .delivery span {
		font-size: 13px;
		width: 100%;
		margin: 5px 0px;
	}
	.delivery {
		margin-top: 1em;
	}
	.col-sm-4,.col-sm-6 {
		width:100%;
	}
	.dropdown-menu.columns-3 {
		min-width: 270px;
	}
	ul.multi-column-dropdown h6 {
		margin-top: 15px;
	}
	.dropdown-menu.columns-2 {
		min-width: 266px;
	}
	ul.breadcrumbs li.women {
		font-size: 12px;
		padding: 3px;
	}
	ul.previous li a {
		font-size: 13px;
	}
	.latest-bis {
		width: 75%;
		margin: 25px auto;
	}
	.mens-toolbar .sort {
		width: 60.5%;
	}
	.view .mask, .view .content {
		top: 12em;
		left: 6.8em;
	}
	.social-icons {
		width: 45%;
	}
	p.left {
		width: 62%;
	}	
	.col-md-7.dress-info {
		padding: 0;
	}	
	.dress-name h3 {
		width: 100%;
	}
	.dress-name span {
		float: left;
		margin-top: 10px;
	}
	.view .mask, .view .content {
		top: 7em;
		left: 1.8em;
		font-size: 12px;
		padding: 5px;
		display:none;
	}
	
	.product_image:hover .mask {
		display: none;
	}
	p.tab-text {
		font-size: 13px;
	}
}

/* KODLARIMIZ */ 


.arkaplan {
	background-color:#e1e0e0;
	border:#D3D3D3 1px solid;
	border-radius:5px;
	margin-top:10px;	
}
.hizala_1 {
	margin:5px 0px 5px 0px;
	color:#55065a;
	
}

.hizala_2 {
	margin:5px 0px 5px 0px;
	background-color:#55065a;
	color:#FCFCFC;

	
}
.hizala_2:hover {

	color:#FFF;

	
}
.hizala_3 {
	
	background-color:#<?=$renkler->sepeteeklebutonRenk?>;
	color:#FCFCFC;

	
}
.hizala_3:hover {
	background-color:#906;

	color:#FFF;

	
}
.y:link, .y:visited {
	background-color:#636363;
	padding:10px;

	
}

.y:hover {
	text-decoration:none;
	cursor:pointer;
	
}
.yorumlar {
	background-color:#e1e0e0;
	padding:10px;
	border-radius:10px;
		border:#D3D3D3 1px solid;
}
#yorumad {

	color:#55065a;
}

.qty li {
	text-align:center;
	
	
}

.qty li h3 {
	color:#F33;
	font-size:18px;
	

	
	
}

.qty li span {
	color:#727272;
	
	font-size:24px;

	
	
}

.delivery span {
	color:#727272;
	font-size:18px;
	border:1px solid #CDCDCD;
	padding:10px;
	border-radius:10px;
	overflow:hidden;
}

.toplamAlan {
	text-align:right;
	padding:10px 0px 10px 0px;
	
	
	
}

.toplamAlan .btn_sepet1 {
	
	background-color:#55065a;
	color:#FCFCFC;

	
}
.toplamAlan .btn_sepet1:hover {
	background-color:#906;
	color:#FFF;
}

.toplamAlan .btn_sepet2 {
	
	background-color:#55065a;
	color:#FCFCFC;

	
}
.toplamAlan .btn_sepet2:hover {
	background-color:#906;

	color:#FFF;
}


.toplamAlan_2 {
	background-color:#E4E4E4;
	font-size:20px;
	color:#693;
	text-align:right;
	padding:10px 0px 10px 0px;
	border:1px  #D5D5D5 solid;

	
	
}

.toplamAlan_2 span {
	color:#757575;


	
}

/*  ÜYENİN PANELİ*/

#UyeCont {
	background-color:#E8E8E8;
		
		min-height:400px;
		margin-top:10px;
}

#menu {
	border-right:1px  #D5D5D5 solid;
}


#uyepanel li {
	list-style:none;
	background-color:#E8E8E8;
	
	font-size:16px;
	padding:10px;
	border-bottom:1px  #D5D5D5 solid;
	
}
#uyepanel #baslik {
	background-color:#55065a;	
	color:#FAFAFA;
	padding:10px;
	margin-bottom:10px;
	
}

#uyepanel li:hover {
	background-color:#C8C8C8;
	cursor:pointer;
	
	
	
}
#uyepanel li a:link,#uyepanel li a:visited {
	text-decoration:none;
	color:#353535;

	
	
	
}

#uyepanel li a:hover {
	
	color:#55065a;

	
	
	
}

/*-----------------------------*/

table  {
	border:1px solid #D6D6D6; 


	
	
}

table tr td  {
	border:1px solid #D6D6D6;
	



	
	
}

table #baslik {
	font-weight:400;
background-color:#55065a;
	color:#FCFCFC;
	
	
}

#adresiskelet {
	border:1px solid #D6D6D6;
	padding:5px;
	min-height:100px;
	margin:2px;
	background-color:#E3E3E3;
	border-radius:10px;
	overflow:hidden;	
}

#adresiskelet:hover {
	background-color:#E6E6E6;
	cursor:pointer;
	
}
#adresİd {
	border-bottom:1px solid #D6D6D6;
	min-height:100px;
	
}

#AdresGuncelBtn {
	margin-top:3px;
	float:left;
	
}

#AdresSilBtn {
	margin-top:3px;
	float:right;
	
}

#adresElemanlar {
	color:#606060;
	font-weight:300;
	
	

	
}

#adresElemanlar td {
	padding-top:10px;
	padding-bottom:0px;
	
	
	

	
}

#adresElemanlar td .onayli{
	color:#990;

	
}

#adresElemanlar td .onaysiz{
	color:#F00;

	
}
#ortala {
	margin:auto;
	background-color:#DCDCDC;
		border:#CACACA 1px solid;
}

#satirlar input[type="text"] {
	margin:5px 0px 0px 0px;
	
	
	
	
}

#satirlar input[type="password"] {
	margin:5px 0px 0px 0px;
	
	
	
	
}
#satirlar label {
	margin:5px 0px 0px 0px;
	padding-top:10px;
	float:left;
	
	
	
}





#satirlar .col-md-7,#satirlar .col-md-5 {
	height:45px;
	border-bottom:#CACACA 1px solid;

	
	
}

#satirlar .col-md-12 input[type="submit"] {
background-color:#55065a;
	color:#FCFCFC;
	margin:5px 0px 5px 0px;

	
	
}

#satirlarbaslik {
background-color:#55065a;
	color:#FCFCFC;
	border-bottom:#CACACA 1px solid;
	padding:10px;	

	
	
}

#digersayfa h3 {
	margin-top:10px;
	color:#55065a;
	border-bottom:#CACACA 1px solid;
	padding:5px;
}

#digersayfa p  {
	margin-top:10px;
	font-weight:700;
	padding:5px;

}
/* SİPARİŞİ TAMAMLA KODLARI */

#sipTamamlaİskelet {
	border:#CACACA 1px solid;
	margin-top:10px;
	border-radius:5px;
	overflow:hidden;

}


#sagtaraf #baslik {
	text-align:center;
background-color:#55065a;
color:#F7F7F7;
	overflow: hidden;

}	
#sagtaraf #icbaslik {
		text-align:center;
	border-bottom:#CACACA 1px solid;
	padding:3px;
background-color:#D6D6D6;
font-weight:700;
	overflow: hidden;
}	

#sagtaraf #icurunler {
		text-align:center;
	border-bottom:#CACACA 1px solid;
	padding:3px;
font-weight:700;
color:#55065a;
	overflow: hidden;
}

#uyelik  {
	text-align:center;
	font-weight:700;
	color:#55065a;

}
#uyelik2  {
	text-align:center;
	font-weight:700;
	color:#55065a;

}
#uyelik  h4 {

	border-bottom:#CACACA 1px solid;


}

 #label  {
	padding-top:15px;


	
}

#input  {
	padding:5px;


	
}

#radioBtn  {
	padding-top:15px;
	text-align:left;


	
}




#adresSatir {
padding:5px;	
}

#sagtaraf #toplam {
background-color:#D6D6D6;
		text-align:center;
	border-bottom:#CACACA 1px solid;
	padding:3px;
font-weight:700;
color:#F03;
}

.btn_1 {
	
	background-color:#3d173f;
	color:#fff;
	float:right;
	margin-top:20px;
	width:300px;

	
}

.btn_1:hover {

	color:#CCC;


	
}
.btn_5 {
	
background: rgb(97,209,83);
background: linear-gradient(90deg, rgba(97,209,83,1) 0%, rgba(65,244,62,1) 14%, rgba(97,209,83,1) 50%, rgba(65,244,62,1) 71%);
	color:#1E1B1B;
	float:right;
	margin-top:20px;
	width:300px;
	padding: 10px;
	font-size: 15px;

	
}

.btn_5:hover {

	color:#231616;
}



#adressecim {
background: rgb(204,198,204);
background: linear-gradient(90deg, rgba(204,198,204,1) 0%, rgba(247,247,247,1) 47%, rgba(204,198,204,1) 100%);
	margin:5px;
	border-radius:3px;
	overflow:hidden;
	border:#CACACA 1px solid;
	color:#000;
	font-size: 15px;	
	padding: 5px;
	text-align: left;
	
	
}

#radioBtn {
margin-top:3px;

	
}

#adressecim .col-md-3 {
	text-align:center;
	color:#F33;
	font-size:12px;
	

	
	
}
/* SİPARİŞ TAMAM */ 

#tamamlandi h3 {
	margin:25px;
	text-align:center;
	
}

#tamamlandi .sipno {
	font-size:22px;
	margin:5px;
	font-weight:700;
	font-family:Arial, Helvetica, sans-serif;
	padding:10px;
	border-bottom:#CACACA 1px solid;
	text-align:center;
		color:#55065a;
}

#tamamlandi p {
	font-size:18px;
	margin:5px;
	font-weight:500;
	font-family:Arial, Helvetica, sans-serif;
	padding:20px;
		border-bottom:#CACACA 1px solid;
		text-align:justify;
		color:#55065a;	
		
	
}

#Bankbaslik {
	text-align:center;
	font-weight:700;
	padding:10px;
	border-bottom:#CACACA 1px solid;
		background-color:#d9d5d9;
}

#Bankcerceve {
	font-weight:700;
	border:#CACACA 1px solid;
	
}	

#bankalarinAnasi {
	margin-top:30px;
	margin-bottom:30px;	

	
}


.Uye_panel_siparisler {
		background-color:#55065a;
		color:#FFF;
		padding:5px;
		border-right:1px solid #FAFAFA;
		text-align:center;
}

.Uye_panel_siparisler .spantext {
	 color:#FFC6CF;
	 font-weight:500;
	 font-size:14px;
	
	
}

  .bg-gradient-gri{background-color:#e3e5e5;background-image:-webkit-gradient(linear,left top,left bottom,color-stop(10%,#e3e5e5),to(#e2eaea));background-image:linear-gradient(180deg,#e3e5e5 10%,#e2eaea 100%);background-size:cover;
  text-align:center;
  	  border-bottom:1px solid #C8C8C8;
	  }
  
  .kalinyap {
	  padding:5px;
	  font-weight:800;
	  font-size:15px;
	  
  }

  .urunler {
	  padding:5px;
	  font-weight:500;
	  font-size:15px;
	  text-align:center;
	  border-bottom:1px solid #C8C8C8;
	  
  }
  

#detaygoster a:link,#detaygoster a:visited {
  text-decoration:none;
	 color:#3CF;

	
	
}

#detaygoster a:hover {
	
 color:#FFC6CF; 
		 cursor:pointer;  

	
	
	
}

  .siptoplam {
	  padding:5px;
	  font-weight:500;
	  font-size:15px;
	  text-align:center;	
	 background-color:#55065a; 
	 		color:#FFF;
  }
  
 .arkaplan2 {
	background-color:#e1e0e0;
	border:#D3D3D3 1px solid;
	border-radius:5px;
	margin-bottom:10px;	
} 

 .bg-gradient-mvc{background-color:#2e0549;background-image:-webkit-gradient(linear,left top,left bottom,color-stop(10%,#2e0549),to(#582975));background-image:linear-gradient(180deg,#2e0549 10%,#582975 100%);background-size:cover}
 
 
 
 #reload {
	 text-decoration:none;
	 font-size:25px;
	 margin-left:10px;
	 margin-top:20px;
	 
 }
 
 .uyeliksatir {
border-bottom:1px solid #C8C8C8; 
text-align:center;
	font-weight:700;
	color:#55065a;
	font-size: 15px;


   	  

 }

 .siparisbaslik {
text-align:center;
background-color:#55065a;
color:#F7F7F7;
overflow: hidden;
margin-bottom: 3px;
}

.mt-7 {
	margin-top: 2px;
}
.float-right {
float: right;

}
.text-right{
text-align: right;
}
.pt-15{
padding-top: 15px;

}
.ph-5 {
padding: 5px;
}



.siparisanaiskeletler {
border:1px solid #C8C8C8; 
overflow: hidden;
margin: 10px;
border-radius: 5px;
}

 .terciharkaplan {
 background-color: #393737;
 color: #ECE1E1;
	padding-top: 3px;
	padding-bottom: 3px;
	font-weight: 300;
	margin-right: 3px;

}



	 

