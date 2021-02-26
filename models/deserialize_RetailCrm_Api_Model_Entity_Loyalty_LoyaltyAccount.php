<?php

function deserialize_RetailCrm_Api_Model_Entity_Loyalty_LoyaltyAccount(array $jsonData): RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount
{
    
$model = new RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount();
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

}
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['phoneNumber'])) {
    $model->phoneNumber = $jsonData['phoneNumber'];

}
if (isset($jsonData['cardNumber'])) {
    $model->cardNumber = $jsonData['cardNumber'];

}
if (isset($jsonData['amount'])) {
    $model->amount = (float) $jsonData['amount'];

}
if (isset($jsonData['createdAt'])) {
    $model->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['createdAt']);

}
if (isset($jsonData['activatedAt'])) {
    $model->activatedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['activatedAt']);

}
if (isset($jsonData['confirmedPhoneAt'])) {
    $model->confirmedPhoneAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['confirmedPhoneAt']);

}
if (isset($jsonData['lastCheckId'])) {
    $model->lastCheckId = $jsonData['lastCheckId'];

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
