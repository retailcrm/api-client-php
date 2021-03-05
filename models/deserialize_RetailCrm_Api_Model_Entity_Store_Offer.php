<?php

function deserialize_RetailCrm_Api_Model_Entity_Store_Offer(array $jsonData): RetailCrm\Api\Model\Entity\Store\Offer
{
    
$model = new RetailCrm\Api\Model\Entity\Store\Offer();
if (isset($jsonData['displayName'])) {
    $model->displayName = $jsonData['displayName'];

}
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

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
if (isset($jsonData['article'])) {
    $model->article = $jsonData['article'];

}
if (isset($jsonData['vatRate'])) {
    $model->vatRate = $jsonData['vatRate'];

}
if (isset($jsonData['unit'])) {
    
$model->unit = new RetailCrm\Api\Model\Entity\Orders\Items\Unit();
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
if (isset($jsonData['barcode'])) {
    $model->barcode = $jsonData['barcode'];

}
if (isset($jsonData['properties'])) {
    $model->properties = [];
foreach (array_keys($jsonData['properties']) as $index23) {
    $model->properties[$index23] = $jsonData['properties'][$index23];

}

}
if (isset($jsonData['site'])) {
    $model->site = $jsonData['site'];

}
if (isset($jsonData['purchasePrice'])) {
    $model->purchasePrice = (float) $jsonData['purchasePrice'];

}
if (isset($jsonData['quantity'])) {
    $model->quantity = (float) $jsonData['quantity'];

}
if (isset($jsonData['stores'])) {
    $model->stores = [];
foreach (array_keys($jsonData['stores']) as $index19) {
    
$model->stores[$index19] = new RetailCrm\Api\Model\Entity\Store\Inventory();
if (isset($jsonData['stores'][$index19]['quantity'])) {
    $model->stores[$index19]->quantity = (float) $jsonData['stores'][$index19]['quantity'];

}
if (isset($jsonData['stores'][$index19]['purchasePrice'])) {
    $model->stores[$index19]->purchasePrice = (float) $jsonData['stores'][$index19]['purchasePrice'];

}
if (isset($jsonData['stores'][$index19]['store'])) {
    $model->stores[$index19]->store = $jsonData['stores'][$index19]['store'];

}
if (isset($jsonData['stores'][$index19]['code'])) {
    $model->stores[$index19]->code = $jsonData['stores'][$index19]['code'];

}
if (isset($jsonData['stores'][$index19]['available'])) {
    $model->stores[$index19]->available = (float) $jsonData['stores'][$index19]['available'];

}


}

}



    return $model;
}
