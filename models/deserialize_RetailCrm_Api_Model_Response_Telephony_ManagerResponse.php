<?php

function deserialize_RetailCrm_Api_Model_Response_Telephony_ManagerResponse(array $jsonData): RetailCrm\Api\Model\Response\Telephony\ManagerResponse
{
    
$model = new RetailCrm\Api\Model\Response\Telephony\ManagerResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['manager'])) {
    
$model->manager = new RetailCrm\Api\Model\Entity\Telephony\SerializedManager();
if (isset($jsonData['manager']['id'])) {
    $model->manager->id = $jsonData['manager']['id'];

}
if (isset($jsonData['manager']['firstName'])) {
    $model->manager->firstName = $jsonData['manager']['firstName'];

}
if (isset($jsonData['manager']['lastName'])) {
    $model->manager->lastName = $jsonData['manager']['lastName'];

}
if (isset($jsonData['manager']['patronymic'])) {
    $model->manager->patronymic = $jsonData['manager']['patronymic'];

}
if (isset($jsonData['manager']['email'])) {
    $model->manager->email = $jsonData['manager']['email'];

}
if (isset($jsonData['manager']['code'])) {
    $model->manager->code = $jsonData['manager']['code'];

}


}
if (isset($jsonData['customer'])) {
    
$model->customer = new RetailCrm\Api\Model\Entity\Telephony\SerializedCustomer();
if (isset($jsonData['customer']['id'])) {
    $model->customer->id = $jsonData['customer']['id'];

}
if (isset($jsonData['customer']['externalId'])) {
    $model->customer->externalId = $jsonData['customer']['externalId'];

}
if (isset($jsonData['customer']['firstName'])) {
    $model->customer->firstName = $jsonData['customer']['firstName'];

}
if (isset($jsonData['customer']['lastName'])) {
    $model->customer->lastName = $jsonData['customer']['lastName'];

}
if (isset($jsonData['customer']['patronymic'])) {
    $model->customer->patronymic = $jsonData['customer']['patronymic'];

}
if (isset($jsonData['customer']['email'])) {
    $model->customer->email = $jsonData['customer']['email'];

}
if (isset($jsonData['customer']['phones'])) {
    $model->customer->phones = [];
foreach (array_keys($jsonData['customer']['phones']) as $index31) {
    
$model->customer->phones[$index31] = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['customer']['phones'][$index31]['number'])) {
    $model->customer->phones[$index31]->number = $jsonData['customer']['phones'][$index31]['number'];

}


}

}


}
if (isset($jsonData['links'])) {
    
$model->links = new RetailCrm\Api\Model\Entity\Telephony\SerializedLinks();
if (isset($jsonData['links']['newOrderLink'])) {
    $model->links->newOrderLink = $jsonData['links']['newOrderLink'];

}
if (isset($jsonData['links']['lastOrderLink'])) {
    $model->links->lastOrderLink = $jsonData['links']['lastOrderLink'];

}
if (isset($jsonData['links']['newCustomerLink'])) {
    $model->links->newCustomerLink = $jsonData['links']['newCustomerLink'];

}
if (isset($jsonData['links']['customerLink'])) {
    $model->links->customerLink = $jsonData['links']['customerLink'];

}


}



    return $model;
}
