<?php

function deserialize_RetailCrm_Api_Model_Entity_Packs_OrderProductPack(array $jsonData): RetailCrm\Api\Model\Entity\Packs\OrderProductPack
{
    
$model = new RetailCrm\Api\Model\Entity\Packs\OrderProductPack();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['purchasePrice'])) {
    $model->purchasePrice = (float) $jsonData['purchasePrice'];

}
if (isset($jsonData['quantity'])) {
    $model->quantity = (float) $jsonData['quantity'];

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
if (isset($jsonData['store'])) {
    $model->store = $jsonData['store'];

}
if (isset($jsonData['item'])) {
    
$model->item = new RetailCrm\Api\Model\Entity\Orders\Items\OrderProduct();
if (isset($jsonData['item']['externalId'])) {
    $model->item->externalId = $jsonData['item']['externalId'];

}
if (isset($jsonData['item']['markingCodes'])) {
    $model->item->markingCodes = [];
foreach (array_keys($jsonData['item']['markingCodes']) as $index33) {
    $model->item->markingCodes[$index33] = $jsonData['item']['markingCodes'][$index33];

}

}
if (isset($jsonData['item']['id'])) {
    $model->item->id = $jsonData['item']['id'];

}
if (isset($jsonData['item']['externalIds'])) {
    $model->item->externalIds = [];
foreach (array_keys($jsonData['item']['externalIds']) as $index32) {
    
$model->item->externalIds[$index32] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['item']['externalIds'][$index32]['code'])) {
    $model->item->externalIds[$index32]->code = $jsonData['item']['externalIds'][$index32]['code'];

}
if (isset($jsonData['item']['externalIds'][$index32]['value'])) {
    $model->item->externalIds[$index32]->value = $jsonData['item']['externalIds'][$index32]['value'];

}


}

}
if (isset($jsonData['item']['priceType'])) {
    
$model->item->priceType = new RetailCrm\Api\Model\Entity\Orders\Items\PriceType();
if (isset($jsonData['item']['priceType']['code'])) {
    $model->item->priceType->code = $jsonData['item']['priceType']['code'];

}


}
if (isset($jsonData['item']['initialPrice'])) {
    $model->item->initialPrice = (float) $jsonData['item']['initialPrice'];

}
if (isset($jsonData['item']['discountManualAmount'])) {
    $model->item->discountManualAmount = (float) $jsonData['item']['discountManualAmount'];

}
if (isset($jsonData['item']['discountManualPercent'])) {
    $model->item->discountManualPercent = (float) $jsonData['item']['discountManualPercent'];

}
if (isset($jsonData['item']['discountTotal'])) {
    $model->item->discountTotal = (float) $jsonData['item']['discountTotal'];

}
if (isset($jsonData['item']['prices'])) {
    $model->item->prices = [];
foreach (array_keys($jsonData['item']['prices']) as $index27) {
    
$model->item->prices[$index27] = new RetailCrm\Api\Model\Entity\Orders\Items\OrderProductPriceItem();
if (isset($jsonData['item']['prices'][$index27]['price'])) {
    $model->item->prices[$index27]->price = (float) $jsonData['item']['prices'][$index27]['price'];

}
if (isset($jsonData['item']['prices'][$index27]['quantity'])) {
    $model->item->prices[$index27]->quantity = (float) $jsonData['item']['prices'][$index27]['quantity'];

}


}

}
if (isset($jsonData['item']['vatRate'])) {
    $model->item->vatRate = $jsonData['item']['vatRate'];

}
if (isset($jsonData['item']['createdAt'])) {
    $model->item->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['item']['createdAt']);

}
if (isset($jsonData['item']['quantity'])) {
    $model->item->quantity = (float) $jsonData['item']['quantity'];

}
if (isset($jsonData['item']['status'])) {
    $model->item->status = $jsonData['item']['status'];

}
if (isset($jsonData['item']['comment'])) {
    $model->item->comment = $jsonData['item']['comment'];

}
if (isset($jsonData['item']['offer'])) {
    
$model->item->offer = new RetailCrm\Api\Model\Entity\Orders\Items\Offer();
if (isset($jsonData['item']['offer']['displayName'])) {
    $model->item->offer->displayName = $jsonData['item']['offer']['displayName'];

}
if (isset($jsonData['item']['offer']['id'])) {
    $model->item->offer->id = $jsonData['item']['offer']['id'];

}
if (isset($jsonData['item']['offer']['externalId'])) {
    $model->item->offer->externalId = $jsonData['item']['offer']['externalId'];

}
if (isset($jsonData['item']['offer']['xmlId'])) {
    $model->item->offer->xmlId = $jsonData['item']['offer']['xmlId'];

}
if (isset($jsonData['item']['offer']['name'])) {
    $model->item->offer->name = $jsonData['item']['offer']['name'];

}
if (isset($jsonData['item']['offer']['article'])) {
    $model->item->offer->article = $jsonData['item']['offer']['article'];

}
if (isset($jsonData['item']['offer']['vatRate'])) {
    $model->item->offer->vatRate = $jsonData['item']['offer']['vatRate'];

}
if (isset($jsonData['item']['offer']['unit'])) {
    
$model->item->offer->unit = new RetailCrm\Api\Model\Entity\Orders\Items\Unit();
if (isset($jsonData['item']['offer']['unit']['code'])) {
    $model->item->offer->unit->code = $jsonData['item']['offer']['unit']['code'];

}
if (isset($jsonData['item']['offer']['unit']['name'])) {
    $model->item->offer->unit->name = $jsonData['item']['offer']['unit']['name'];

}
if (isset($jsonData['item']['offer']['unit']['sym'])) {
    $model->item->offer->unit->sym = $jsonData['item']['offer']['unit']['sym'];

}


}
if (isset($jsonData['item']['offer']['barcode'])) {
    $model->item->offer->barcode = $jsonData['item']['offer']['barcode'];

}
if (isset($jsonData['item']['offer']['properties'])) {
    $model->item->offer->properties = [];
foreach (array_keys($jsonData['item']['offer']['properties']) as $index40) {
    $model->item->offer->properties[$index40] = $jsonData['item']['offer']['properties'][$index40];

}

}


}
if (isset($jsonData['item']['order'])) {
    
$model->item->order = new RetailCrm\Api\Model\Entity\IdModel();
if (isset($jsonData['item']['order']['id'])) {
    $model->item->order->id = $jsonData['item']['order']['id'];

}


}
if (isset($jsonData['item']['productName'])) {
    $model->item->productName = $jsonData['item']['productName'];

}
if (isset($jsonData['item']['isCanceled'])) {
    $model->item->isCanceled = $jsonData['item']['isCanceled'];

}
if (isset($jsonData['item']['properties'])) {
    $model->item->properties = [];
foreach (array_keys($jsonData['item']['properties']) as $index31) {
    
$model->item->properties[$index31] = new RetailCrm\Api\Model\Entity\Orders\Items\ItemProperty();
if (isset($jsonData['item']['properties'][$index31]['code'])) {
    $model->item->properties[$index31]->code = $jsonData['item']['properties'][$index31]['code'];

}
if (isset($jsonData['item']['properties'][$index31]['name'])) {
    $model->item->properties[$index31]->name = $jsonData['item']['properties'][$index31]['name'];

}
if (isset($jsonData['item']['properties'][$index31]['value'])) {
    $model->item->properties[$index31]->value = $jsonData['item']['properties'][$index31]['value'];

}


}

}
if (isset($jsonData['item']['purchasePrice'])) {
    $model->item->purchasePrice = (float) $jsonData['item']['purchasePrice'];

}


}
if (isset($jsonData['itemId'])) {
    $model->itemId = $jsonData['itemId'];

}
if (isset($jsonData['shipmentDate'])) {
    $model->shipmentDate = \DateTime::createFromFormat('Y-m-d', $jsonData['shipmentDate']);

}
if (isset($jsonData['invoiceNumber'])) {
    $model->invoiceNumber = $jsonData['invoiceNumber'];

}
if (isset($jsonData['deliveryNoteNumber'])) {
    $model->deliveryNoteNumber = $jsonData['deliveryNoteNumber'];

}



    return $model;
}
