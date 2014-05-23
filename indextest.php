<?php
/*
This indextest.php file is used to test the various classes of the library .

*/

include("vendor/autoloader.php");


//replace Product in the below line with the class you want to test.
//use ResellerClub\Tests\ProductTest as RClubAPI;
//use ResellerClub\Tests\EmailAccountTest as RClubAPI;
//use ResellerClub\Tests\EnterpriseEmailTest as RClubAPI;
use ResellerClub\Tests\ManageDnsRecordTest as RClubAPI;



$apihost = "https://test.httpapi.com/api/";
$authid = "501535";
$apikey = "LIlLJGvlqBhFdSO7nSNatdE0lGozb0oy";



//$authid = "78536";
//$apikey = "AbL5mxydZZih2AzMUsc80xEgfDmrdiRm"; // replace this with your token
//$password = "mypwd"; // If you want to use your password to authenticate



$apicaller = new RClubAPI($apihost, $authid,$apikey);




//All Functions of Email Account Test


//$apicaller->addUser() ;
//$apicaller->addForwardOnlyAccount() ;
//$apicaller->getUserDetails() ;
//$apicaller->modifyUserDetails() ;
//$apicaller->suspendUser() ;
//$apicaller->suspendUsers() ;
//$apicaller->unsuspendUser() ;
//$apicaller->unsuspendUsers() ;
//$apicaller->searchUsers() ;
//$apicaller->getNoOfUsers() ;
//$apicaller->changePassword() ;
//$apicaller->resetPassword() ;
//$apicaller->updateAutoResponder() ;
//$apicaller->authenticateUser() ;
//$apicaller->deleteUser() ;
//$apicaller->deleteUsers() ;
//$apicaller->addAdminForwards() ;
//$apicaller->deleteAdminForwards() ;
//$apicaller->addUserForwards() ;
//$apicaller->deleteUserForwards() ;


//All Functions of EnterpriseEmailTest


//$apicaller->add() ;
//$apicaller->renew() ;
//$apicaller->addEmailAccounts() ;
//$apicaller->deleteEmailAccounts() ;
//$apicaller->suspend() ;
//$apicaller->unsuspend() ;
//$apicaller->delete() ;
//$apicaller->getDetails() ;
//$apicaller->getOrderId() ;
//$apicaller->searchOrders() ;
//$apicaller->getCustomerPricing() ;
//$apicaller->getResellerPricing() ;
//$apicaller->getDNSRecords() ;




//All Functions of ManageDnsRecordTest


//$apicaller->addIPv4AddressRecord() ;
//$apicaller->addIPv6AddressRecord() ;
//$apicaller->addCNAMERecord() ;
//$apicaller->addMXRecord() ;
//$apicaller->addNSRecord() ;
//$apicaller->addTXTRecord() ;
//$apicaller->addSRVRecord() ;
//$apicaller->modifyIPv4AddressRecord() ;



//$apicaller->modifyIPv6AddressRecord() ;
//$apicaller->modifyCNAMERecord() ;
//$apicaller->modifyMXRecord() ;
//$apicaller->modifyNSRecord() ;
//$apicaller->modifyTXTRecord() ;
//$apicaller->modifySRVRecord() ;
//$apicaller->modifySOARecord() ;
//$apicaller->searchDnsRecord() ;
//$apicaller->deleteDnsRecord() ;
//$apicaller->deleteIPv4Record() ;
//$apicaller->deleteIPv6Record() ;
//$apicaller->deleteCNAMERecord() ;
//$apicaller->deleteMXRecord() ;

//$apicaller->deleteNSRecord() ;



//$apicaller->deleteTXTRecord() ;
//$apicaller->deleteSRVRecord() ;


?>