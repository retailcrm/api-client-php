<?php

function deserialize_RetailCrm_Api_Model_Entity_Store_Product(array $jsonData): RetailCrm\Api\Model\Entity\Store\Product
{
    
$model = new RetailCrm\Api\Model\Entity\Store\Product();
if (isset($jsonData['minPrice'])) {
    $model->minPrice = (float) $jsonData['minPrice'];

}
if (isset($jsonData['maxPrice'])) {
    $model->maxPrice = (float) $jsonData['maxPrice'];

}
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['article'])) {
    $model->article = $jsonData['article'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['url'])) {
    $model->url = $jsonData['url'];

}
if (isset($jsonData['imageUrl'])) {
    $model->imageUrl = $jsonData['imageUrl'];

}
if (isset($jsonData['description'])) {
    $model->description = $jsonData['description'];

}
if (isset($jsonData['popular'])) {
    $model->popular = $jsonData['popular'];

}
if (isset($jsonData['stock'])) {
    $model->stock = $jsonData['stock'];

}
if (isset($jsonData['novelty'])) {
    $model->novelty = $jsonData['novelty'];

}
if (isset($jsonData['recommended'])) {
    $model->recommended = $jsonData['recommended'];

}
if (isset($jsonData['properties'])) {
    $model->properties = [];
foreach (array_keys($jsonData['properties']) as $index23) {
    $model->properties[$index23] = $jsonData['properties'][$index23];

}

}
if (isset($jsonData['groups'])) {
    $model->groups = [];
foreach (array_keys($jsonData['groups']) as $index19) {
    
$model->groups[$index19] = new RetailCrm\Api\Model\Entity\FixExternalRow();
if (isset($jsonData['groups'][$index19]['id'])) {
    $model->groups[$index19]->id = $jsonData['groups'][$index19]['id'];

}
if (isset($jsonData['groups'][$index19]['externalId'])) {
    $model->groups[$index19]->externalId = $jsonData['groups'][$index19]['externalId'];

}


}

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['manufacturer'])) {
    $model->manufacturer = $jsonData['manufacturer'];

}
if (isset($jsonData['offers'])) {
    $model->offers = [];
foreach (array_keys($jsonData['offers']) as $index19) {
    
$model->offers[$index19] = new RetailCrm\Api\Model\Entity\Store\ProductOffer();
if (isset($jsonData['offers'][$index19]['name'])) {
    $model->offers[$index19]->name = $jsonData['offers'][$index19]['name'];

}
if (isset($jsonData['offers'][$index19]['price'])) {
    $model->offers[$index19]->price = (float) $jsonData['offers'][$index19]['price'];

}
if (isset($jsonData['offers'][$index19]['images'])) {
    $model->offers[$index19]->images = $jsonData['offers'][$index19]['images'];

}
if (isset($jsonData['offers'][$index19]['id'])) {
    $model->offers[$index19]->id = $jsonData['offers'][$index19]['id'];

}
if (isset($jsonData['offers'][$index19]['externalId'])) {
    $model->offers[$index19]->externalId = $jsonData['offers'][$index19]['externalId'];

}
if (isset($jsonData['offers'][$index19]['xmlId'])) {
    $model->offers[$index19]->xmlId = $jsonData['offers'][$index19]['xmlId'];

}
if (isset($jsonData['offers'][$index19]['article'])) {
    $model->offers[$index19]->article = $jsonData['offers'][$index19]['article'];

}
if (isset($jsonData['offers'][$index19]['prices'])) {
    $model->offers[$index19]->prices = [];
foreach (array_keys($jsonData['offers'][$index19]['prices']) as $index39) {
    
$model->offers[$index19]->prices[$index39] = new RetailCrm\Api\Model\Entity\Store\OfferPrice();
if (isset($jsonData['offers'][$index19]['prices'][$index39]['priceType'])) {
    $model->offers[$index19]->prices[$index39]->priceType = $jsonData['offers'][$index19]['prices'][$index39]['priceType'];

}
if (isset($jsonData['offers'][$index19]['prices'][$index39]['price'])) {
    $model->offers[$index19]->prices[$index39]->price = (float) $jsonData['offers'][$index19]['prices'][$index39]['price'];

}
if (isset($jsonData['offers'][$index19]['prices'][$index39]['ordering'])) {
    $model->offers[$index19]->prices[$index39]->ordering = $jsonData['offers'][$index19]['prices'][$index39]['ordering'];

}


}

}
if (isset($jsonData['offers'][$index19]['purchasePrice'])) {
    $model->offers[$index19]->purchasePrice = (float) $jsonData['offers'][$index19]['purchasePrice'];

}
if (isset($jsonData['offers'][$index19]['vatRate'])) {
    $model->offers[$index19]->vatRate = $jsonData['offers'][$index19]['vatRate'];

}
if (isset($jsonData['offers'][$index19]['properties'])) {
    $model->offers[$index19]->properties = [];
foreach (array_keys($jsonData['offers'][$index19]['properties']) as $index43) {
    $model->offers[$index19]->properties[$index43] = $jsonData['offers'][$index19]['properties'][$index43];

}

}
if (isset($jsonData['offers'][$index19]['quantity'])) {
    $model->offers[$index19]->quantity = (float) $jsonData['offers'][$index19]['quantity'];

}
if (isset($jsonData['offers'][$index19]['weight'])) {
    $model->offers[$index19]->weight = (float) $jsonData['offers'][$index19]['weight'];

}
if (isset($jsonData['offers'][$index19]['length'])) {
    $model->offers[$index19]->length = (float) $jsonData['offers'][$index19]['length'];

}
if (isset($jsonData['offers'][$index19]['width'])) {
    $model->offers[$index19]->width = (float) $jsonData['offers'][$index19]['width'];

}
if (isset($jsonData['offers'][$index19]['height'])) {
    $model->offers[$index19]->height = (float) $jsonData['offers'][$index19]['height'];

}
if (isset($jsonData['offers'][$index19]['active'])) {
    $model->offers[$index19]->active = $jsonData['offers'][$index19]['active'];

}
if (isset($jsonData['offers'][$index19]['unit'])) {
    
$model->offers[$index19]->unit = new RetailCrm\Api\Model\Entity\Orders\Items\Unit();
if (isset($jsonData['offers'][$index19]['unit']['code'])) {
    $model->offers[$index19]->unit->code = $jsonData['offers'][$index19]['unit']['code'];

}
if (isset($jsonData['offers'][$index19]['unit']['name'])) {
    $model->offers[$index19]->unit->name = $jsonData['offers'][$index19]['unit']['name'];

}
if (isset($jsonData['offers'][$index19]['unit']['sym'])) {
    $model->offers[$index19]->unit->sym = $jsonData['offers'][$index19]['unit']['sym'];

}


}
if (isset($jsonData['offers'][$index19]['barcode'])) {
    $model->offers[$index19]->barcode = $jsonData['offers'][$index19]['barcode'];

}


}

}
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

}
if (isset($jsonData['quantity'])) {
    $model->quantity = (float) $jsonData['quantity'];

}
if (isset($jsonData['markable'])) {
    $model->markable = $jsonData['markable'];

}



    return $model;
}
