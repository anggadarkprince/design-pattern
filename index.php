<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 2:33 PM
 */

require_once "AutoLoader.php";

use FactoryPattern\ShoppingCart;

$cart = new ShoppingCart();
$cart->add("keyboard");
$cart->add("mouse");
$cart->printInvoice();