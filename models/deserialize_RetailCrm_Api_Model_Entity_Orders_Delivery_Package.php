<?php

function deserialize_RetailCrm_Api_Model_Entity_Orders_Delivery_Package(array $jsonData): RetailCrm\Api\Model\Entity\Orders\Delivery\Package
{
    
$model = new RetailCrm\Api\Model\Entity\Orders\Delivery\Package();
if (isset($jsonData['packageId'])) {
    $model->packageId = $jsonData['packageId'];

}
if (isset($jsonData['weight'])) {
    $model->weight = (float) $jsonData['weight'];

}
if (isset($jsonData['length'])) {
    $model->length = $jsonData['length'];

}
if (isset($jsonData['width'])) {
    $model->width = $jsonData['width'];

}
if (isset($jsonData['height'])) {
    $model->height = $jsonData['height'];

}
if (isset($jsonData['items'])) {
    $model->items = [];
foreach (array_keys($jsonData['items']) as $index18) {
    
$model->items[$index18] = new RetailCrm\Api\Model\Entity\Orders\Delivery\PackageItem();
if (isset($jsonData['items'][$index18]['orderProduct'])) {
    
$model->items[$index18]->orderProduct = new RetailCrm\Api\Model\Entity\Orders\Delivery\PackageItemOrderProduct();
if (isset($jsonData['items'][$index18]['orderProduct']['id'])) {
    $model->items[$index18]->orderProduct->id = $jsonData['items'][$index18]['orderProduct']['id'];

}
if (isset($jsonData['items'][$index18]['orderProduct']['externalId'])) {
    $model->items[$index18]->orderProduct->externalId = $jsonData['items'][$index18]['orderProduct']['externalId'];

}
if (isset($jsonData['items'][$index18]['orderProduct']['externalIds'])) {
    $model->items[$index18]->orderProduct->externalIds = [];
foreach (array_keys($jsonData['items'][$index18]['orderProduct']['externalIds']) as $index59) {
    
$model->items[$index18]->orderProduct->externalIds[$index59] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['items'][$index18]['orderProduct']['externalIds'][$index59]['code'])) {
    $model->items[$index18]->orderProduct->externalIds[$index59]->code = $jsonData['items'][$index18]['orderProduct']['externalIds'][$index59]['code'];

}
if (isset($jsonData['items'][$index18]['orderProduct']['externalIds'][$index59]['value'])) {
    $model->items[$index18]->orderProduct->externalIds[$index59]->value = $jsonData['items'][$index18]['orderProduct']['externalIds'][$index59]['value'];

}


}

}


}
if (isset($jsonData['items'][$index18]['quantity'])) {
    $model->items[$index18]->quantity = (float) $jsonData['items'][$index18]['quantity'];

}


}

}



    return $model;
}
