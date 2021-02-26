<?php

function deserialize_RetailCrm_Api_Model_Response_Loyalty_LoyaltyAccountsResponse(array $jsonData): RetailCrm\Api\Model\Response\Loyalty\LoyaltyAccountsResponse
{
    
$model = new RetailCrm\Api\Model\Response\Loyalty\LoyaltyAccountsResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['pagination'])) {
    
$model->pagination = new RetailCrm\Api\Model\Entity\Pagination();
if (isset($jsonData['pagination']['limit'])) {
    $model->pagination->limit = $jsonData['pagination']['limit'];

}
if (isset($jsonData['pagination']['totalCount'])) {
    $model->pagination->totalCount = $jsonData['pagination']['totalCount'];

}
if (isset($jsonData['pagination']['currentPage'])) {
    $model->pagination->currentPage = $jsonData['pagination']['currentPage'];

}
if (isset($jsonData['pagination']['totalPageCount'])) {
    $model->pagination->totalPageCount = $jsonData['pagination']['totalPageCount'];

}


}
if (isset($jsonData['loyaltyAccounts'])) {
    $model->loyaltyAccounts = [];
foreach (array_keys($jsonData['loyaltyAccounts']) as $index28) {
    
$model->loyaltyAccounts[$index28] = new RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount();
if (isset($jsonData['loyaltyAccounts'][$index28]['active'])) {
    $model->loyaltyAccounts[$index28]->active = $jsonData['loyaltyAccounts'][$index28]['active'];

}
if (isset($jsonData['loyaltyAccounts'][$index28]['id'])) {
    $model->loyaltyAccounts[$index28]->id = $jsonData['loyaltyAccounts'][$index28]['id'];

}
if (isset($jsonData['loyaltyAccounts'][$index28]['phoneNumber'])) {
    $model->loyaltyAccounts[$index28]->phoneNumber = $jsonData['loyaltyAccounts'][$index28]['phoneNumber'];

}
if (isset($jsonData['loyaltyAccounts'][$index28]['cardNumber'])) {
    $model->loyaltyAccounts[$index28]->cardNumber = $jsonData['loyaltyAccounts'][$index28]['cardNumber'];

}
if (isset($jsonData['loyaltyAccounts'][$index28]['amount'])) {
    $model->loyaltyAccounts[$index28]->amount = (float) $jsonData['loyaltyAccounts'][$index28]['amount'];

}
if (isset($jsonData['loyaltyAccounts'][$index28]['createdAt'])) {
    $model->loyaltyAccounts[$index28]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['loyaltyAccounts'][$index28]['createdAt']);

}
if (isset($jsonData['loyaltyAccounts'][$index28]['activatedAt'])) {
    $model->loyaltyAccounts[$index28]->activatedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['loyaltyAccounts'][$index28]['activatedAt']);

}
if (isset($jsonData['loyaltyAccounts'][$index28]['confirmedPhoneAt'])) {
    $model->loyaltyAccounts[$index28]->confirmedPhoneAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['loyaltyAccounts'][$index28]['confirmedPhoneAt']);

}
if (isset($jsonData['loyaltyAccounts'][$index28]['lastCheckId'])) {
    $model->loyaltyAccounts[$index28]->lastCheckId = $jsonData['loyaltyAccounts'][$index28]['lastCheckId'];

}
if (isset($jsonData['loyaltyAccounts'][$index28]['customFields'])) {
    $model->loyaltyAccounts[$index28]->customFields = [];
foreach (array_keys($jsonData['loyaltyAccounts'][$index28]['customFields']) as $index54) {
    $model->loyaltyAccounts[$index28]->customFields[$index54] = $jsonData['loyaltyAccounts'][$index28]['customFields'][$index54];

}

}
if (isset($jsonData['loyaltyAccounts'][$index28]['customer'])) {
    
$model->loyaltyAccounts[$index28]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['loyaltyAccounts'][$index28]['customer']['site'])) {
    $model->loyaltyAccounts[$index28]->customer->site = $jsonData['loyaltyAccounts'][$index28]['customer']['site'];

}
if (isset($jsonData['loyaltyAccounts'][$index28]['customer']['id'])) {
    $model->loyaltyAccounts[$index28]->customer->id = $jsonData['loyaltyAccounts'][$index28]['customer']['id'];

}
if (isset($jsonData['loyaltyAccounts'][$index28]['customer']['externalId'])) {
    $model->loyaltyAccounts[$index28]->customer->externalId = $jsonData['loyaltyAccounts'][$index28]['customer']['externalId'];

}
if (isset($jsonData['loyaltyAccounts'][$index28]['customer']['type'])) {
    $model->loyaltyAccounts[$index28]->customer->type = $jsonData['loyaltyAccounts'][$index28]['customer']['type'];

}


}


}

}



    return $model;
}
