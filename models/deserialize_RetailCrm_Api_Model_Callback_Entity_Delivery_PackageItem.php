<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Delivery_PackageItem(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Delivery\PackageItem
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Delivery\PackageItem();
if (isset($jsonData['offerId'])) {
    $model->offerId = $jsonData['offerId'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['xmlId'])) {
    $model->xmlId = $jsonData['xmlId'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['declaredValue'])) {
    $model->declaredValue = (float) $jsonData['declaredValue'];

}
if (isset($jsonData['cod'])) {
    $model->cod = (float) $jsonData['cod'];

}
if (isset($jsonData['vatRate'])) {
    $model->vatRate = $jsonData['vatRate'];

}
if (isset($jsonData['quantity'])) {
    $model->quantity = (float) $jsonData['quantity'];

}
if (isset($jsonData['unit'])) {
    
$model->unit = new RetailCrm\Api\Model\Callback\Entity\Delivery\Unit();
if (isset($jsonData['unit']['code'])) {
    $model->unit->code = $jsonData['unit']['code'];

}
if (isset($jsonData['unit']['name'])) {
    $model->unit->name = $jsonData['unit']['name'];

}
if (isset($jsonData['unit']['sym'])) {
    $model->unit->sym = $jsonData['unit']['sym'];

}


}
if (isset($jsonData['cost'])) {
    $model->cost = (float) $jsonData['cost'];

}
if (isset($jsonData['markingCodes'])) {
    $model->markingCodes = $jsonData['markingCodes'];

}
if (isset($jsonData['properties'])) {
    $model->properties = [];
foreach (array_keys($jsonData['properties']) as $index23) {
    $model->properties[$index23] = $jsonData['properties'][$index23];

}

}



    return $model;
}
