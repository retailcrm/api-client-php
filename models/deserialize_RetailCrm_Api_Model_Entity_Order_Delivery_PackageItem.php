<?php

function deserialize_RetailCrm_Api_Model_Entity_Order_Delivery_PackageItem(array $jsonData): RetailCrm\Api\Model\Entity\Order\Delivery\PackageItem
{
    
$model = new RetailCrm\Api\Model\Entity\Order\Delivery\PackageItem();
if (isset($jsonData['orderProduct'])) {
    
$model->orderProduct = new RetailCrm\Api\Model\Entity\Order\Delivery\PackageItemOrderProduct();
if (isset($jsonData['orderProduct']['id'])) {
    $model->orderProduct->id = $jsonData['orderProduct']['id'];

}
if (isset($jsonData['orderProduct']['externalId'])) {
    $model->orderProduct->externalId = $jsonData['orderProduct']['externalId'];

}
if (isset($jsonData['orderProduct']['externalIds'])) {
    $model->orderProduct->externalIds = [];
foreach (array_keys($jsonData['orderProduct']['externalIds']) as $index40) {
    
$model->orderProduct->externalIds[$index40] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['orderProduct']['externalIds'][$index40]['code'])) {
    $model->orderProduct->externalIds[$index40]->code = $jsonData['orderProduct']['externalIds'][$index40]['code'];

}
if (isset($jsonData['orderProduct']['externalIds'][$index40]['value'])) {
    $model->orderProduct->externalIds[$index40]->value = $jsonData['orderProduct']['externalIds'][$index40]['value'];

}


}

}


}
if (isset($jsonData['quantity'])) {
    $model->quantity = (float) $jsonData['quantity'];

}



    return $model;
}
