<?php

function deserialize_RetailCrm_Api_Model_Entity_Inventories_ProductOffer(array $jsonData): RetailCrm\Api\Model\Entity\Inventories\ProductOffer
{
    
$model = new RetailCrm\Api\Model\Entity\Inventories\ProductOffer();
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['price'])) {
    $model->price = (float) $jsonData['price'];

}
if (isset($jsonData['images'])) {
    $model->images = $jsonData['images'];

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
if (isset($jsonData['article'])) {
    $model->article = $jsonData['article'];

}
if (isset($jsonData['prices'])) {
    $model->prices = [];
foreach (array_keys($jsonData['prices']) as $index19) {
    
$model->prices[$index19] = new RetailCrm\Api\Model\Entity\Inventories\OfferPrice();
if (isset($jsonData['prices'][$index19]['priceType'])) {
    $model->prices[$index19]->priceType = $jsonData['prices'][$index19]['priceType'];

}
if (isset($jsonData['prices'][$index19]['price'])) {
    $model->prices[$index19]->price = (float) $jsonData['prices'][$index19]['price'];

}
if (isset($jsonData['prices'][$index19]['ordering'])) {
    $model->prices[$index19]->ordering = $jsonData['prices'][$index19]['ordering'];

}


}

}
if (isset($jsonData['purchasePrice'])) {
    $model->purchasePrice = (float) $jsonData['purchasePrice'];

}
if (isset($jsonData['vatRate'])) {
    $model->vatRate = $jsonData['vatRate'];

}
if (isset($jsonData['properties'])) {
    $model->properties = [];
foreach (array_keys($jsonData['properties']) as $index23) {
    $model->properties[$index23] = $jsonData['properties'][$index23];

}

}
if (isset($jsonData['quantity'])) {
    $model->quantity = (float) $jsonData['quantity'];

}
if (isset($jsonData['weight'])) {
    $model->weight = (float) $jsonData['weight'];

}
if (isset($jsonData['length'])) {
    $model->length = (float) $jsonData['length'];

}
if (isset($jsonData['width'])) {
    $model->width = (float) $jsonData['width'];

}
if (isset($jsonData['height'])) {
    $model->height = (float) $jsonData['height'];

}
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

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



    return $model;
}
