<?php

function deserialize_RetailCrm_Api_Model_Entity_Loyalty_SerializedOrder(array $jsonData): RetailCrm\Api\Model\Entity\Loyalty\SerializedOrder
{
    
$model = new RetailCrm\Api\Model\Entity\Loyalty\SerializedOrder();
if (isset($jsonData['privilegeType'])) {
    $model->privilegeType = $jsonData['privilegeType'];

}
if (isset($jsonData['discountManualAmount'])) {
    $model->discountManualAmount = (float) $jsonData['discountManualAmount'];

}
if (isset($jsonData['discountManualPercent'])) {
    $model->discountManualPercent = (float) $jsonData['discountManualPercent'];

}
if (isset($jsonData['customer'])) {
    
$model->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['customer']['id'])) {
    $model->customer->id = $jsonData['customer']['id'];

}
if (isset($jsonData['customer']['externalId'])) {
    $model->customer->externalId = $jsonData['customer']['externalId'];

}
if (isset($jsonData['customer']['browserId'])) {
    $model->customer->browserId = $jsonData['customer']['browserId'];

}
if (isset($jsonData['customer']['site'])) {
    $model->customer->site = $jsonData['customer']['site'];

}
if (isset($jsonData['customer']['companies'])) {
    $model->customer->companies = [];
foreach (array_keys($jsonData['customer']['companies']) as $index34) {
    
$model->customer->companies[$index34] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['customer']['companies'][$index34]['id'])) {
    $model->customer->companies[$index34]->id = $jsonData['customer']['companies'][$index34]['id'];

}
if (isset($jsonData['customer']['companies'][$index34]['externalId'])) {
    $model->customer->companies[$index34]->externalId = $jsonData['customer']['companies'][$index34]['externalId'];

}
if (isset($jsonData['customer']['companies'][$index34]['company'])) {
    
$model->customer->companies[$index34]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customer']['companies'][$index34]['company']['id'])) {
    $model->customer->companies[$index34]->company->id = $jsonData['customer']['companies'][$index34]['company']['id'];

}
if (isset($jsonData['customer']['companies'][$index34]['company']['externalId'])) {
    $model->customer->companies[$index34]->company->externalId = $jsonData['customer']['companies'][$index34]['company']['externalId'];

}
if (isset($jsonData['customer']['companies'][$index34]['company']['name'])) {
    $model->customer->companies[$index34]->company->name = $jsonData['customer']['companies'][$index34]['company']['name'];

}


}


}

}


}
if (isset($jsonData['items'])) {
    $model->items = [];
foreach (array_keys($jsonData['items']) as $index18) {
    
$model->items[$index18] = new RetailCrm\Api\Model\Entity\Delivery\SerializedOrderProduct();
if (isset($jsonData['items'][$index18]['initialPrice'])) {
    $model->items[$index18]->initialPrice = (float) $jsonData['items'][$index18]['initialPrice'];

}
if (isset($jsonData['items'][$index18]['discountManualAmount'])) {
    $model->items[$index18]->discountManualAmount = (float) $jsonData['items'][$index18]['discountManualAmount'];

}
if (isset($jsonData['items'][$index18]['discountManualPercent'])) {
    $model->items[$index18]->discountManualPercent = (float) $jsonData['items'][$index18]['discountManualPercent'];

}
if (isset($jsonData['items'][$index18]['quantity'])) {
    $model->items[$index18]->quantity = (float) $jsonData['items'][$index18]['quantity'];

}


}

}
if (isset($jsonData['delivery'])) {
    
$model->delivery = new RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderDelivery();
if (isset($jsonData['delivery']['cost'])) {
    $model->delivery->cost = (float) $jsonData['delivery']['cost'];

}


}



    return $model;
}
