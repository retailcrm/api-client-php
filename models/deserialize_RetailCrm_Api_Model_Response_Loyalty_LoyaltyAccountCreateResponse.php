<?php

function deserialize_RetailCrm_Api_Model_Response_Loyalty_LoyaltyAccountCreateResponse(array $jsonData): RetailCrm\Api\Model\Response\Loyalty\LoyaltyAccountCreateResponse
{
    
$model = new RetailCrm\Api\Model\Response\Loyalty\LoyaltyAccountCreateResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['site'])) {
    $model->site = $jsonData['site'];

}
if (isset($jsonData['loyalty_account'])) {
    
$model->loyalty_account = new RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount();
if (isset($jsonData['loyalty_account']['active'])) {
    $model->loyalty_account->active = $jsonData['loyalty_account']['active'];

}
if (isset($jsonData['loyalty_account']['id'])) {
    $model->loyalty_account->id = $jsonData['loyalty_account']['id'];

}
if (isset($jsonData['loyalty_account']['phoneNumber'])) {
    $model->loyalty_account->phoneNumber = $jsonData['loyalty_account']['phoneNumber'];

}
if (isset($jsonData['loyalty_account']['cardNumber'])) {
    $model->loyalty_account->cardNumber = $jsonData['loyalty_account']['cardNumber'];

}
if (isset($jsonData['loyalty_account']['amount'])) {
    $model->loyalty_account->amount = (float) $jsonData['loyalty_account']['amount'];

}
if (isset($jsonData['loyalty_account']['createdAt'])) {
    $model->loyalty_account->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['loyalty_account']['createdAt']);

}
if (isset($jsonData['loyalty_account']['activatedAt'])) {
    $model->loyalty_account->activatedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['loyalty_account']['activatedAt']);

}
if (isset($jsonData['loyalty_account']['confirmedPhoneAt'])) {
    $model->loyalty_account->confirmedPhoneAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['loyalty_account']['confirmedPhoneAt']);

}
if (isset($jsonData['loyalty_account']['lastCheckId'])) {
    $model->loyalty_account->lastCheckId = $jsonData['loyalty_account']['lastCheckId'];

}
if (isset($jsonData['loyalty_account']['customFields'])) {
    $model->loyalty_account->customFields = [];
foreach (array_keys($jsonData['loyalty_account']['customFields']) as $index44) {
    $model->loyalty_account->customFields[$index44] = $jsonData['loyalty_account']['customFields'][$index44];

}

}
if (isset($jsonData['loyalty_account']['customer'])) {
    
$model->loyalty_account->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['loyalty_account']['customer']['site'])) {
    $model->loyalty_account->customer->site = $jsonData['loyalty_account']['customer']['site'];

}
if (isset($jsonData['loyalty_account']['customer']['id'])) {
    $model->loyalty_account->customer->id = $jsonData['loyalty_account']['customer']['id'];

}
if (isset($jsonData['loyalty_account']['customer']['externalId'])) {
    $model->loyalty_account->customer->externalId = $jsonData['loyalty_account']['customer']['externalId'];

}
if (isset($jsonData['loyalty_account']['customer']['type'])) {
    $model->loyalty_account->customer->type = $jsonData['loyalty_account']['customer']['type'];

}


}


}
if (isset($jsonData['warnings'])) {
    $model->warnings = [];
foreach (array_keys($jsonData['warnings']) as $index21) {
    $model->warnings[$index21] = $jsonData['warnings'][$index21];

}

}



    return $model;
}
