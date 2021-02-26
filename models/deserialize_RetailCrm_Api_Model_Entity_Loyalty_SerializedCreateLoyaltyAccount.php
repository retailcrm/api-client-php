<?php

function deserialize_RetailCrm_Api_Model_Entity_Loyalty_SerializedCreateLoyaltyAccount(array $jsonData): RetailCrm\Api\Model\Entity\Loyalty\SerializedCreateLoyaltyAccount
{
    
$model = new RetailCrm\Api\Model\Entity\Loyalty\SerializedCreateLoyaltyAccount();
if (isset($jsonData['phoneNumber'])) {
    $model->phoneNumber = $jsonData['phoneNumber'];

}
if (isset($jsonData['cardNumber'])) {
    $model->cardNumber = $jsonData['cardNumber'];

}
if (isset($jsonData['customFields'])) {
    $model->customFields = [];
foreach (array_keys($jsonData['customFields']) as $index25) {
    $model->customFields[$index25] = $jsonData['customFields'][$index25];

}

}
if (isset($jsonData['customer'])) {
    
$model->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['customer']['site'])) {
    $model->customer->site = $jsonData['customer']['site'];

}
if (isset($jsonData['customer']['id'])) {
    $model->customer->id = $jsonData['customer']['id'];

}
if (isset($jsonData['customer']['externalId'])) {
    $model->customer->externalId = $jsonData['customer']['externalId'];

}
if (isset($jsonData['customer']['type'])) {
    $model->customer->type = $jsonData['customer']['type'];

}


}



    return $model;
}
