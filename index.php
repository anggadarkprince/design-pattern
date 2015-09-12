<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 2:33 PM
 */

require_once "AutoLoader.php";

//command pattern
echo "<br><hr>Factory Pattern<hr>";

use FactoryPattern\ShoppingCart;

$cart = new ShoppingCart();
$cart->add("keyboard");
$cart->add("mouse");
$cart->printInvoice();

//gateway pattern
echo "<br><hr>Gateway Pattern<hr>";

use GatewayPattern\FileCart;
use GatewayPattern\InMemoryCart;

$firstCart = new \GatewayPattern\ShoppingCart(null, array(45,23));
$secondCart = new \GatewayPattern\ShoppingCart(null, array(23,24));

$file = new FileCart();
$memory = new InMemoryCart();
$memory->persist($firstCart);
$memory->persist($secondCart);

$cart = new \GatewayPattern\ShoppingCart($memory, array(0,1));

echo "<pre>";
print_r($cart->listAllCarts());
echo "</pre>";


//proxy pattern
echo "<br><hr>Proxy Pattern<hr>";

use ProxyPattern\CartProxy;

$cart = new CartProxy();
$cart->addProduct("Meat");
$cart->addProduct("Egg");
$cart->addProduct("Rice");
echo "<pre>";
print_r($cart->getProducts());
echo "</pre>";


//repository pattern
echo "<br><hr>Repository Pattern<hr>";

use RepositoryPattern\ProductTypes;
use RepositoryPattern\TypesFactory;
use RepositoryPattern\TypesGateway;

$factory = new TypesFactory();
$gateway = new TypesGateway();

$type = new ProductTypes($factory, $gateway);
echo "<pre>";
print_r($type->findComputerHardware());
echo "</pre>";



//null pattern
echo "<br><hr>Null Pattern<hr>";

use NullPattern\Receipt;

$receipt = new Receipt();
$receipt->addProductById(0);
$receipt->addProductById(1);
$receipt->addProductById(2);

echo "Total Price : ".$receipt->getTotalPrice()."<br>";


//command pattern
echo "<br><hr>Command Pattern<hr>";

use CommandPattern\User;
use CommandPattern\VisaPayment;
use CommandPattern\PayPalPayment;
use CommandPattern\ProcessPayment;

$user1 = new User("Angga");
$user1->setPaymentMethod(new VisaPayment());

$user2 = new User("Ari");
$user2->setPaymentMethod(new PayPalPayment());

$transaction = new ProcessPayment();
echo $user1->getName()." : ";
$transaction->processUserPayment($user1);

$transaction = new ProcessPayment();
echo $user2->getName()," : ";
$transaction->processUserPayment($user2);


// active object command pattern
echo "<br><hr>Active Object Pattern<hr>";

use ActiveObjectPattern\MultiFileUploader;
use ActiveObjectPattern\UploaderCommand;

$multiUpload = new MultiFileUploader();
$upload1 = new UploaderCommand(8, 50, $multiUpload);
$upload2 = new UploaderCommand(4, 20, $multiUpload);
$multiUpload->addUploader($upload1);
$multiUpload->addUploader($upload2);
$multiUpload->run();

// template method pattern
echo "<br><hr>Template Method Pattern<hr>";

use TemplateMethodPattern\Provider;
use TemplateMethodPattern\SellProducts;
use TemplateMethodPattern\HumanResource;
use TemplateMethodPattern\SellServices;

$sevenEleven = new Provider();
$transaction = new SellProducts($sevenEleven);
$transaction->orderNewItem("softdrink");

$office = new HumanResource();
$service = new SellServices($office);
$service->markHumanResourcesAsOccupied("manager");

// template strategy pattern
echo "<br><hr>Template Strategiy Pattern<hr>";

use StrategyPattern\GrandPrice;
use StrategyPattern\IDPricingStrategy;
use StrategyPattern\MYPricingStrategy;

$transaction = new GrandPrice();
$indonesia = new IDPricingStrategy();
$malaysia = new MYPricingStrategy();

echo "Indonesia to dollar ".$transaction->calculate(35000, $indonesia)."<br>";
echo "Malaysia to dollar ".$transaction->calculate(50000, $malaysia);


// facade pattern
echo "<br><hr>Facade Pattern<hr>";

use FacadePattern\Statistics;
use FacadePattern\ClientFacade;

$facade = new ClientFacade();
$statistic = new Statistics($facade);

echo "<pre>";
print_r($statistic->loadAllClientStats(1));
echo "</pre>";


// observer pattern
echo "<br><hr>Observer Pattern<hr>";

use ObserverPattern\HardDisk;
use ObserverPattern\Notifier;

$disk = new HardDisk();
$mailNotifier = new Notifier($disk);

$disk->register($mailNotifier);
$disk->setPrice(200);


// mediator pattern
echo "<br><hr>Mediator Pattern<hr>";

use MediatorPattern\Mediator;
use MediatorPattern\UserDetails;
use MediatorPattern\OrderDelivery;

$user = new UserDetails();
$order = new OrderDelivery();

$order->setAddress("Order Address : bologna street");
$user->changeAddress("User Address : avenue street");

$mediator = new Mediator($user, $order);

$user->changeAddress("java street");


// mediator pattern
echo "<br><hr>Singleton Pattern<hr>";

use SingletonPattern\PriceCalculator;
use SingletonPattern\Product;

$product = new Product();
$product->setId(1);
$product->setPrice(30);

$calculator = new PriceCalculator();
echo $calculator->compute($product);

// monostate pattern
echo "<br><hr>Monostate Pattern<hr>";

use MonostatePattern\Monostate;

$first = new Monostate();
$second = new Monostate();
$third = new Monostate();

$first->setValue(10);
echo $second->getValue()."<br>";
$third->setValue(20);
echo $first->getValue();

// abstract server pattern
echo "<br><hr>Abstract Server Pattern<hr>";

use AbstractServerPattern\RedRose;
use AbstractServerPattern\YellowRose;
use AbstractServerPattern\ShopOwner;

$redRose = new RedRose();
$yellowRose = new YellowRose();

$shopOwner = new ShopOwner($redRose);
$shopOwner->sell();
echo "Red rose is sold : ".$redRose->isSold()."<br>";

$shopOwner = new ShopOwner($yellowRose);
$shopOwner->sell();
echo "Yellow rose is sold : ".$yellowRose->isSold()."<br>";


// adapter pattern
echo "<br><hr>Adapter Pattern<hr>";

use AdapterPattern\Keyboard;
use AdapterPattern\WhiteRose;
use AdapterPattern\RosesToProductAdapter;

$keyboard = new Keyboard();
echo $keyboard->getDescription()."<br>";
echo $keyboard->getPicture()."<br>";
echo $keyboard->getPrice()."<br>";

$whiteRose = new WhiteRose();
$rose = new RosesToProductAdapter($whiteRose);
echo $rose->getDescription()."<br>";
echo $rose->getPicture()."<br>";
echo $rose->getPrice()."<br>";


// bridge pattern
echo "<br><hr>Bridge Pattern<hr>";

use BridgePattern\Visa;
use BridgePattern\MasterCard;
use BridgePattern\DirectPaymentMethod;
use BridgePattern\CreditPaymentMethod;
use BridgePattern\CreditBuyer;
use BridgePattern\DirectBuyer;

$visa = new Visa();
$mastercard = new MasterCard();

$direct = new DirectPaymentMethod();
$direct->setPaymentSource($visa);
$credit = new CreditPaymentMethod();
$credit->setPaymentSource($mastercard);

$buyer1 = new DirectBuyer();
$buyer1->payNow($direct);
$buyer2 = new CreditBuyer();
$buyer2->payNow($credit);


// composite pattern
echo "<br><hr>Composite Pattern<hr>";

use CompositePattern\CompositeOrder;
use CompositePattern\ProductOrder;
use CompositePattern\ServiceOrder;

$step1 = new ProductOrder();
$step2 = new ServiceOrder();
$step3 = new ServiceOrder();

$order = new CompositeOrder();
$order->add($step1);
$order->add($step2);
$order->add($step3);
$order->add($step1);
$order->place();


// visitor pattern
echo "<br><hr>Visitor Pattern<hr>";

use VisitorPattern\SimplePaymentDetails;
use VisitorPattern\HtmlPaymentDetails;

$simpleDetail = new SimplePaymentDetails();
$visaPayment = new VisitorPattern\VisaPayment();
$visaPayment->accept($simpleDetail);
echo $simpleDetail->getDescription()."<br>";

$htmlDetail = new HtmlPaymentDetails();
$paypal = new VisitorPattern\PaypalPayment();
$paypal->accept($htmlDetail);
echo $htmlDetail->getDescription()."<br>";


// state pattern
echo "<br><hr>State Pattern<hr>";

use StatePattern\Delivery;
use StatePattern\Processing;

$delivery = new Delivery(new Processing());
echo $delivery->getCurrentLocation()."<br>";

$delivery->goNext();
echo $delivery->getCurrentLocation()."<br>";

$delivery->goNext();
echo $delivery->getCurrentLocation()."<br>";


// decorator pattern
echo "<br><hr>Decorator Pattern<hr>";


$visa = new \DecoratorPattern\VisaPayment();
$htmlDetails = new \DecoratorPattern\HtmlPaymentDetails($visa);
echo $htmlDetails->getDescription();
echo $htmlDetails->getHtmlDescription();
