<?php
//Replace the line with require "vendor/autoload.php" if you are using the Samples from outside of _Samples folder
include('config.php');

use QuickBooksOnline\API\Core\ServiceContext;
use QuickBooksOnline\API\DataService\DataService;
use QuickBooksOnline\API\PlatformService\PlatformService;
use QuickBooksOnline\API\Core\Http\Serialization\XmlObjectSerializer;
use QuickBooksOnline\API\Facades\Customer;

// Prep Data Services
$dataService = DataService::Configure(array(
       'auth_mode' => 'oauth1',
         'consumerKey' => "qyprd6VgDJ1GbpWQfSQjmIWFB4dSpE",
         'consumerSecret' => "0MKQFPDugkTLG2TtEv8XLRbE3SNxazmEfn5JC5z1",
         'accessTokenKey' => "qyprdVV7Le8vViptxNtvfQaLJ9smCesOc6ZrvGx5z5qHSfJE",
         'accessTokenSecret' => "k9vAVGAU12GJh3n8805Najnb9zkxO9ZUyLgApgJk",
         'QBORealmID' => "193514527957689",
         'baseUrl' => "https://sandbox-quickbooks.api.intuit.com"
));

// $dataService->setLogLocation("/Users/hlu2/Desktop/newFolderForLog");

// Run a query
$entities = $dataService->Query("SELECT * FROM Account");
$error = $dataService->getLastError();
if ($error != null) {
    echo "The Status code is: " . $error->getHttpStatusCode() . "\n";
    echo "The Helper message is: " . $error->getOAuthHelperError() . "\n";
    echo "The Response message is: " . $error->getResponseBody() . "\n";
    exit();
}
// Echo some formatted output
$i = 0;
foreach ($entities as $oneCustomer) {
   //var_dump($oneCustomer);
   if($oneCustomer->AccountSubType=="ServiceFeeIncome"){
       echo "Customer[$i] Name: {$oneCustomer->Name}, Type: {$oneCustomer->AccountType}, Detail Type: {$oneCustomer->AccountSubType}"."<br>";
       $i++;
   }
}

/*
Example output:

Customer[0] GivenName: Jimco LLC	(Created at 2013-06-29T22:06:45-07:00)
Customer[1] GivenName: ACME Corp	(Created at 2013-06-29T22:10:18-07:00)
Customer[2] GivenName: Smithco Inc.	(Created at 2013-06-29T22:11:57-07:00)
Customer[3] GivenName: Special Inc.	(Created at 2013-06-29T22:13:34-07:00)
*/
