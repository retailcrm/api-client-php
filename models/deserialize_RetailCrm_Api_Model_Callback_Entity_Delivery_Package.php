<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Delivery_Package(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Delivery\Package
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Delivery\Package();
if (isset($jsonData['weight'])) {
    $model->weight = (float) $jsonData['weight'];

}
if (isset($jsonData['packageId'])) {
    $model->packageId = $jsonData['packageId'];

}
if (isset($jsonData['width'])) {
    $model->width = $jsonData['width'];

}
if (isset($jsonData['length'])) {
    $model->length = $jsonData['length'];

}
if (isset($jsonData['height'])) {
    $model->height = $jsonData['height'];

}
if (isset($jsonData['items'])) {
    $model->items = [];
foreach (array_keys($jsonData['items']) as $index18) {
    
$model->items[$index18] = new RetailCrm\Api\Model\Callback\Entity\Delivery\PackageItem();
if (isset($jsonData['items'][$index18]['offerId'])) {
    $model->items[$index18]->offerId = $jsonData['items'][$index18]['offerId'];

}
if (isset($jsonData['items'][$index18]['externalId'])) {
    $model->items[$index18]->externalId = $jsonData['items'][$index18]['externalId'];

}
if (isset($jsonData['items'][$index18]['xmlId'])) {
    $model->items[$index18]->xmlId = $jsonData['items'][$index18]['xmlId'];

}
if (isset($jsonData['items'][$index18]['name'])) {
    $model->items[$index18]->name = $jsonData['items'][$index18]['name'];

}
if (isset($jsonData['items'][$index18]['declaredValue'])) {
    $model->items[$index18]->declaredValue = (float) $jsonData['items'][$index18]['declaredValue'];

}
if (isset($jsonData['items'][$index18]['cod'])) {
    $model->items[$index18]->cod = (float) $jsonData['items'][$index18]['cod'];

}
if (isset($jsonData['items'][$index18]['vatRate'])) {
    $model->items[$index18]->vatRate = $jsonData['items'][$index18]['vatRate'];

}
if (isset($jsonData['items'][$index18]['quantity'])) {
    $model->items[$index18]->quantity = (float) $jsonData['items'][$index18]['quantity'];

}
if (isset($jsonData['items'][$index18]['unit'])) {
    
$model->items[$index18]->unit = new RetailCrm\Api\Model\Callback\Entity\Delivery\Unit();
if (isset($jsonData['items'][$index18]['unit']['code'])) {
    $model->items[$index18]->unit->code = $jsonData['items'][$index18]['unit']['code'];

}
if (isset($jsonData['items'][$index18]['unit']['name'])) {
    $model->items[$index18]->unit->name = $jsonData['items'][$index18]['unit']['name'];

}
if (isset($jsonData['items'][$index18]['unit']['sym'])) {
    $model->items[$index18]->unit->sym = $jsonData['items'][$index18]['unit']['sym'];

}


}
if (isset($jsonData['items'][$index18]['cost'])) {
    $model->items[$index18]->cost = (float) $jsonData['items'][$index18]['cost'];

}
if (isset($jsonData['items'][$index18]['markingCodes'])) {
    $model->items[$index18]->markingCodes = $jsonData['items'][$index18]['markingCodes'];

}
if (isset($jsonData['items'][$index18]['properties'])) {
    $model->items[$index18]->properties = [];
foreach (array_keys($jsonData['items'][$index18]['properties']) as $index42) {
    $model->items[$index18]->properties[$index42] = $jsonData['items'][$index18]['properties'][$index42];

}

}


}

}



    return $model;
}
