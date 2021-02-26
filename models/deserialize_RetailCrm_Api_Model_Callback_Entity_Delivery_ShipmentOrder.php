<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Delivery_ShipmentOrder(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Delivery\ShipmentOrder
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Delivery\ShipmentOrder();
if (isset($jsonData['deliveryId'])) {
    $model->deliveryId = $jsonData['deliveryId'];

}
if (isset($jsonData['packages'])) {
    $model->packages = [];
foreach (array_keys($jsonData['packages']) as $index21) {
    
$model->packages[$index21] = new RetailCrm\Api\Model\Callback\Entity\Delivery\Package();
if (isset($jsonData['packages'][$index21]['weight'])) {
    $model->packages[$index21]->weight = (float) $jsonData['packages'][$index21]['weight'];

}
if (isset($jsonData['packages'][$index21]['packageId'])) {
    $model->packages[$index21]->packageId = $jsonData['packages'][$index21]['packageId'];

}
if (isset($jsonData['packages'][$index21]['width'])) {
    $model->packages[$index21]->width = $jsonData['packages'][$index21]['width'];

}
if (isset($jsonData['packages'][$index21]['length'])) {
    $model->packages[$index21]->length = $jsonData['packages'][$index21]['length'];

}
if (isset($jsonData['packages'][$index21]['height'])) {
    $model->packages[$index21]->height = $jsonData['packages'][$index21]['height'];

}
if (isset($jsonData['packages'][$index21]['items'])) {
    $model->packages[$index21]->items = [];
foreach (array_keys($jsonData['packages'][$index21]['items']) as $index40) {
    
$model->packages[$index21]->items[$index40] = new RetailCrm\Api\Model\Callback\Entity\Delivery\PackageItem();
if (isset($jsonData['packages'][$index21]['items'][$index40]['offerId'])) {
    $model->packages[$index21]->items[$index40]->offerId = $jsonData['packages'][$index21]['items'][$index40]['offerId'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['externalId'])) {
    $model->packages[$index21]->items[$index40]->externalId = $jsonData['packages'][$index21]['items'][$index40]['externalId'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['xmlId'])) {
    $model->packages[$index21]->items[$index40]->xmlId = $jsonData['packages'][$index21]['items'][$index40]['xmlId'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['name'])) {
    $model->packages[$index21]->items[$index40]->name = $jsonData['packages'][$index21]['items'][$index40]['name'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['declaredValue'])) {
    $model->packages[$index21]->items[$index40]->declaredValue = (float) $jsonData['packages'][$index21]['items'][$index40]['declaredValue'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['cod'])) {
    $model->packages[$index21]->items[$index40]->cod = (float) $jsonData['packages'][$index21]['items'][$index40]['cod'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['vatRate'])) {
    $model->packages[$index21]->items[$index40]->vatRate = $jsonData['packages'][$index21]['items'][$index40]['vatRate'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['quantity'])) {
    $model->packages[$index21]->items[$index40]->quantity = (float) $jsonData['packages'][$index21]['items'][$index40]['quantity'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['unit'])) {
    
$model->packages[$index21]->items[$index40]->unit = new RetailCrm\Api\Model\Callback\Entity\Delivery\Unit();
if (isset($jsonData['packages'][$index21]['items'][$index40]['unit']['code'])) {
    $model->packages[$index21]->items[$index40]->unit->code = $jsonData['packages'][$index21]['items'][$index40]['unit']['code'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['unit']['name'])) {
    $model->packages[$index21]->items[$index40]->unit->name = $jsonData['packages'][$index21]['items'][$index40]['unit']['name'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['unit']['sym'])) {
    $model->packages[$index21]->items[$index40]->unit->sym = $jsonData['packages'][$index21]['items'][$index40]['unit']['sym'];

}


}
if (isset($jsonData['packages'][$index21]['items'][$index40]['cost'])) {
    $model->packages[$index21]->items[$index40]->cost = (float) $jsonData['packages'][$index21]['items'][$index40]['cost'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['markingCodes'])) {
    $model->packages[$index21]->items[$index40]->markingCodes = $jsonData['packages'][$index21]['items'][$index40]['markingCodes'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['properties'])) {
    $model->packages[$index21]->items[$index40]->properties = [];
foreach (array_keys($jsonData['packages'][$index21]['items'][$index40]['properties']) as $index64) {
    $model->packages[$index21]->items[$index40]->properties[$index64] = $jsonData['packages'][$index21]['items'][$index40]['properties'][$index64];

}

}


}

}


}

}



    return $model;
}
