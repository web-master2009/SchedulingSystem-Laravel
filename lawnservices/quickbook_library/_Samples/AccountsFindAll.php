<?php
//Replace the line with require "vendor/autoload.php" if you are using the Samples from outside of _Samples folder
include('../config.php');

use QuickBooksOnline\API\Core\ServiceContext;
use QuickBooksOnline\API\DataService\DataService;
use QuickBooksOnline\API\PlatformService\PlatformService;
use QuickBooksOnline\API\Core\Http\Serialization\XmlObjectSerializer;

// Prep Data Services
$dataService = DataService::Configure(array(
       'auth_mode' => 'oauth1',
         'consumerKey' => "qyprd2IFHVeL9daW67TVjdSpzTDLYo",
         'consumerSecret' => "lpHHLRAcsMZoWUFFf6oY9deNLdNZJQWxGmepCdMI",
         'accessTokenKey' => "lvprd2XltSpvJQPVDkyfT3FW5KUZkWGEoPDmg4FGQSfakNQp",
         'accessTokenSecret' => "yU7vfWHWZCB2dMB340h81CA6w5FJ3ihrruZzex1h",
         'QBORealmID' => "123145843201624",
         'baseUrl' => "https://sandbox-quickbooks.api.intuit.com"
));

$dataService->setLogLocation("/Users/hlu2/Desktop/newFolderForLog");

// Iterate through all Accounts, even if it takes multiple pages
$i = 1;
while (1) {
    $allAccounts = $dataService->FindAll('Account', $i, 500);
    $error = $dataService->getLastError();
    if ($error != null) {
        echo "The Status code is: " . $error->getHttpStatusCode() . "\n";
        echo "The Helper message is: " . $error->getOAuthHelperError() . "\n";
        echo "The Response message is: " . $error->getResponseBody() . "\n";
        exit();
    }
    
    if (!$allAccounts || (0==count($allAccounts))) {
        break;
    }

    foreach ($allAccounts as $oneAccount) {
        var_dump($oneAccount);
        // echo "Account[".($i++)."]: {$oneAccount->Name}\n";
        // echo "\t * Id: [{$oneAccount->Id}]\n";
        // echo "\t * AccountType: [{$oneAccount->AccountType}]\n";
        // echo "\t * AccountSubType: [{$oneAccount->AccountSubType}]\n";
        // echo "\t * Active: [{$oneAccount->Active}]\n";
        // echo "\n";
        echo '<Br><Br><Br><Br><Br><Br><Br><Br>';
    }
}

/*

Example output:

Account[0]: Travel Meals
     * Id: NG:42315
     * AccountType: Expense
     * AccountSubType:

Account[1]: COGs
     * Id: NG:40450
     * AccountType: Cost of Goods Sold
     * AccountSubType:

...

*/
 ?>
