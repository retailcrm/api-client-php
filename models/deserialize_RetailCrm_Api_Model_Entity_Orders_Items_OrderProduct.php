<?php

function deserialize_RetailCrm_Api_Model_Entity_Orders_Items_OrderProduct(array $jsonData): RetailCrm\Api\Model\Entity\Orders\Items\OrderProduct
{
    
$model = new RetailCrm\Api\Model\Entity\Orders\Items\OrderProduct();
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['markingCodes'])) {
    $model->markingCodes = [];
foreach (array_keys($jsonData['markingCodes']) as $index25) {
    $model->markingCodes[$index25] = $jsonData['markingCodes'][$index25];

}

}
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['externalIds'])) {
    $model->externalIds = [];
foreach (array_keys($jsonData['externalIds']) as $index24) {
    
$model->externalIds[$index24] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['externalIds'][$index24]['code'])) {
    $model->externalIds[$index24]->code = $jsonData['externalIds'][$index24]['code'];

}
if (isset($jsonData['externalIds'][$index24]['value'])) {
    $model->externalIds[$index24]->value = $jsonData['externalIds'][$index24]['value'];

}


}

}
if (isset($jsonData['priceType'])) {
    
$model->priceType = new RetailCrm\Api\Model\Entity\Orders\Items\PriceType();
if (isset($jsonData['priceType']['code'])) {
    $model->priceType->code = $jsonData['priceType']['code'];

}


}
if (isset($jsonData['initialPrice'])) {
    $model->initialPrice = (float) $jsonData['initialPrice'];

}
if (isset($jsonData['discountManualAmount'])) {
    $model->discountManualAmount = (float) $jsonData['discountManualAmount'];

}
if (isset($jsonData['discountManualPercent'])) {
    $model->discountManualPercent = (float) $jsonData['discountManualPercent'];

}
if (isset($jsonData['discountTotal'])) {
    $model->discountTotal = (float) $jsonData['discountTotal'];

}
if (isset($jsonData['prices'])) {
    $model->prices = [];
foreach (array_keys($jsonData['prices']) as $index19) {
    
$model->prices[$index19] = new RetailCrm\Api\Model\Entity\Orders\Items\OrderProductPriceItem();
if (isset($jsonData['prices'][$index19]['price'])) {
    $model->prices[$index19]->price = (float) $jsonData['prices'][$index19]['price'];

}
if (isset($jsonData['prices'][$index19]['quantity'])) {
    $model->prices[$index19]->quantity = (float) $jsonData['prices'][$index19]['quantity'];

}


}

}
if (isset($jsonData['vatRate'])) {
    $model->vatRate = $jsonData['vatRate'];

}
if (isset($jsonData['createdAt'])) {
    $model->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['createdAt']);

}
if (isset($jsonData['quantity'])) {
    $model->quantity = (float) $jsonData['quantity'];

}
if (isset($jsonData['status'])) {
    $model->status = $jsonData['status'];

}
if (isset($jsonData['comment'])) {
    $model->comment = $jsonData['comment'];

}
if (isset($jsonData['offer'])) {
    
$model->offer = new RetailCrm\Api\Model\Entity\Orders\Items\Offer();
if (isset($jsonData['offer']['displayName'])) {
    $model->offer->displayName = $jsonData['offer']['displayName'];

}
if (isset($jsonData['offer']['id'])) {
    $model->offer->id = $jsonData['offer']['id'];

}
if (isset($jsonData['offer']['externalId'])) {
    $model->offer->externalId = $jsonData['offer']['externalId'];

}
if (isset($jsonData['offer']['xmlId'])) {
    $model->offer->xmlId = $jsonData['offer']['xmlId'];

}
if (isset($jsonData['offer']['name'])) {
    $model->offer->name = $jsonData['offer']['name'];

}
if (isset($jsonData['offer']['article'])) {
    $model->offer->article = $jsonData['offer']['article'];

}
if (isset($jsonData['offer']['vatRate'])) {
    $model->offer->vatRate = $jsonData['offer']['vatRate'];

}
if (isset($jsonData['offer']['unit'])) {
    
$model->offer->unit = new RetailCrm\Api\Model\Entity\Orders\Items\Unit();
if (isset($jsonData['offer']['unit']['code'])) {
    $model->offer->unit->code = $jsonData['offer']['unit']['code'];

}
if (isset($jsonData['offer']['unit']['name'])) {
    $model->offer->unit->name = $jsonData['offer']['unit']['name'];

}
if (isset($jsonData['offer']['unit']['sym'])) {
    $model->offer->unit->sym = $jsonData['offer']['unit']['sym'];

}


}
if (isset($jsonData['offer']['barcode'])) {
    $model->offer->barcode = $jsonData['offer']['barcode'];

}
if (isset($jsonData['offer']['properties'])) {
    $model->offer->properties = [];
foreach (array_keys($jsonData['offer']['properties']) as $index32) {
    $model->offer->properties[$index32] = $jsonData['offer']['properties'][$index32];

}

}


}
if (isset($jsonData['order'])) {
    
$model->order = new RetailCrm\Api\Model\Entity\IdModel();
if (isset($jsonData['order']['id'])) {
    $model->order->id = $jsonData['order']['id'];

}


}
if (isset($jsonData['productName'])) {
    $model->productName = $jsonData['productName'];

}
if (isset($jsonData['isCanceled'])) {
    $model->isCanceled = $jsonData['isCanceled'];

}
if (isset($jsonData['properties'])) {
    $model->properties = [];
foreach (array_keys($jsonData['properties']) as $index23) {
    
$model->properties[$index23] = new RetailCrm\Api\Model\Entity\Orders\Items\ItemProperty();
if (isset($jsonData['properties'][$index23]['code'])) {
    $model->properties[$index23]->code = $jsonData['properties'][$index23]['code'];

}
if (isset($jsonData['properties'][$index23]['name'])) {
    $model->properties[$index23]->name = $jsonData['properties'][$index23]['name'];

}
if (isset($jsonData['properties'][$index23]['value'])) {
    $model->properties[$index23]->value = $jsonData['properties'][$index23]['value'];

}


}

}
if (isset($jsonData['purchasePrice'])) {
    $model->purchasePrice = (float) $jsonData['purchasePrice'];

}



    return $model;
}
