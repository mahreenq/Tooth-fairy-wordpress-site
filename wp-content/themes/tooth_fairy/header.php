<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		


              

              <div class="nav">
        <label for="toggle">&#9776;</label>
        <input type="checkbox" id="toggle"/>
        <div class="menu">
            <a href="#">Business</a>
            <a href="#">Services</a>
            <a href="#">Learn More</a>
            <a href="#"><span>Free Trial</span></a>
        </div>





			<style type="text/css">
	html, body {
    width: 100%;
    height: 100%;
    margin: 0;
}
html {
    font-family: "helvetica neue", sans-serif;
}

.nav {
    border-bottom: 1px solid #EAEAEB;
    text-align: right;
    height: 70px;
    line-height: 70px;
}
.menu {
    margin: 0 30px 0 0;
}
.menu a {
    clear: right;
    text-decoration: none;
    color: gray;
    margin: 0 10px;
    line-height: 70px;
}

span {
    color: #54D17A;
}

label {
    margin: 0 40px 0 0;
    font-size: 26px;
    line-height: 70px;
    display: none;
    width: 26px;
    float: right;
}
#toggle {
    display: none;
}


@media only screen and (max-width: 500px) {
    label {
        display: block;
        cursor: pointer;
    }
    .menu {
        text-align: center;
        width: 100%;
        display: none;
    }
    .menu a {
        display: block;
        border-bottom: 1px solid #EAEAEB;
        margin: 0;
     
    }
    #toggle:checked + .menu {
        display: block;
    }
    
    
}


			</style>