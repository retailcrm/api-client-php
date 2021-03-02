<?php

function deserialize_RetailCrm_Api_Model_Response_Packs_PacksGetResponse(array $jsonData): RetailCrm\Api\Model\Response\Packs\PacksGetResponse
{
    
$model = new RetailCrm\Api\Model\Response\Packs\PacksGetResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['pack'])) {
    
$model->pack = new RetailCrm\Api\Model\Entity\Packs\OrderProductPack();
if (isset($jsonData['pack']['id'])) {
    $model->pack->id = $jsonData['pack']['id'];

}
if (isset($jsonData['pack']['purchasePrice'])) {
    $model->pack->purchasePrice = (float) $jsonData['pack']['purchasePrice'];

}
if (isset($jsonData['pack']['quantity'])) {
    $model->pack->quantity = (float) $jsonData['pack']['quantity'];

}
if (isset($jsonData['pack']['unit'])) {
    
$model->pack->unit = new RetailCrm\Api\Model\Entity\Orders\Items\Unit();
if (isset($jsonData['pack']['unit']['code'])) {
    $model->pack->unit->code = $jsonData['pack']['unit']['code'];

}
if (isset($jsonData['pack']['unit']['name'])) {
    $model->pack->unit->name = $jsonData['pack']['unit']['name'];

}
if (isset($jsonData['pack']['unit']['sym'])) {
    $model->pack->unit->sym = $jsonData['pack']['unit']['sym'];

}


}
if (isset($jsonData['pack']['store'])) {
    $model->pack->store = $jsonData['pack']['store'];

}
if (isset($jsonData['pack']['item'])) {
    
$model->pack->item = new RetailCrm\Api\Model\Entity\Orders\Items\OrderProduct();
if (isset($jsonData['pack']['item']['externalId'])) {
    $model->pack->item->externalId = $jsonData['pack']['item']['externalId'];

}
if (isset($jsonData['pack']['item']['markingCodes'])) {
    $model->pack->item->markingCodes = [];
foreach (array_keys($jsonData['pack']['item']['markingCodes']) as $index41) {
    $model->pack->item->markingCodes[$index41] = $jsonData['pack']['item']['markingCodes'][$index41];

}

}
if (isset($jsonData['pack']['item']['id'])) {
    $model->pack->item->id = $jsonData['pack']['item']['id'];

}
if (isset($jsonData['pack']['item']['externalIds'])) {
    $model->pack->item->externalIds = [];
foreach (array_keys($jsonData['pack']['item']['externalIds']) as $index40) {
    
$model->pack->item->externalIds[$index40] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['pack']['item']['externalIds'][$index40]['code'])) {
    $model->pack->item->externalIds[$index40]->code = $jsonData['pack']['item']['externalIds'][$index40]['code'];

}
if (isset($jsonData['pack']['item']['externalIds'][$index40]['value'])) {
    $model->pack->item->externalIds[$index40]->value = $jsonData['pack']['item']['externalIds'][$index40]['value'];

}


}

}
if (isset($jsonData['pack']['item']['priceType'])) {
    
$model->pack->item->priceType = new RetailCrm\Api\Model\Entity\Orders\Items\PriceType();
if (isset($jsonData['pack']['item']['priceType']['code'])) {
    $model->pack->item->priceType->code = $jsonData['pack']['item']['priceType']['code'];

}


}
if (isset($jsonData['pack']['item']['initialPrice'])) {
    $model->pack->item->initialPrice = (float) $jsonData['pack']['item']['initialPrice'];

}
if (isset($jsonData['pack']['item']['discountManualAmount'])) {
    $model->pack->item->discountManualAmount = (float) $jsonData['pack']['item']['discountManualAmount'];

}
if (isset($jsonData['pack']['item']['discountManualPercent'])) {
    $model->pack->item->discountManualPercent = (float) $jsonData['pack']['item']['discountManualPercent'];

}
if (isset($jsonData['pack']['item']['discountTotal'])) {
    $model->pack->item->discountTotal = (float) $jsonData['pack']['item']['discountTotal'];

}
if (isset($jsonData['pack']['item']['prices'])) {
    $model->pack->item->prices = [];
foreach (array_keys($jsonData['pack']['item']['prices']) as $index35) {
    
$model->pack->item->prices[$index35] = new RetailCrm\Api\Model\Entity\Orders\Items\OrderProductPriceItem();
if (isset($jsonData['pack']['item']['prices'][$index35]['price'])) {
    $model->pack->item->prices[$index35]->price = (float) $jsonData['pack']['item']['prices'][$index35]['price'];

}
if (isset($jsonData['pack']['item']['prices'][$index35]['quantity'])) {
    $model->pack->item->prices[$index35]->quantity = (float) $jsonData['pack']['item']['prices'][$index35]['quantity'];

}


}

}
if (isset($jsonData['pack']['item']['vatRate'])) {
    $model->pack->item->vatRate = $jsonData['pack']['item']['vatRate'];

}
if (isset($jsonData['pack']['item']['createdAt'])) {
    $model->pack->item->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['pack']['item']['createdAt']);

}
if (isset($jsonData['pack']['item']['quantity'])) {
    $model->pack->item->quantity = (float) $jsonData['pack']['item']['quantity'];

}
if (isset($jsonData['pack']['item']['status'])) {
    $model->pack->item->status = $jsonData['pack']['item']['status'];

}
if (isset($jsonData['pack']['item']['comment'])) {
    $model->pack->item->comment = $jsonData['pack']['item']['comment'];

}
if (isset($jsonData['pack']['item']['offer'])) {
    
$model->pack->item->offer = new RetailCrm\Api\Model\Entity\Orders\Items\Offer();
if (isset($jsonData['pack']['item']['offer']['displayName'])) {
    $model->pack->item->offer->displayName = $jsonData['pack']['item']['offer']['displayName'];

}
if (isset($jsonData['pack']['item']['offer']['id'])) {
    $model->pack->item->offer->id = $jsonData['pack']['item']['offer']['id'];

}
if (isset($jsonData['pack']['item']['offer']['externalId'])) {
    $model->pack->item->offer->externalId = $jsonData['pack']['item']['offer']['externalId'];

}
if (isset($jsonData['pack']['item']['offer']['xmlId'])) {
    $model->pack->item->offer->xmlId = $jsonData['pack']['item']['offer']['xmlId'];

}
if (isset($jsonData['pack']['item']['offer']['name'])) {
    $model->pack->item->offer->name = $jsonData['pack']['item']['offer']['name'];

}
if (isset($jsonData['pack']['item']['offer']['article'])) {
    $model->pack->item->offer->article = $jsonData['pack']['item']['offer']['article'];

}
if (isset($jsonData['pack']['item']['offer']['vatRate'])) {
    $model->pack->item->offer->vatRate = $jsonData['pack']['item']['offer']['vatRate'];

}
if (isset($jsonData['pack']['item']['offer']['unit'])) {
    
$model->pack->item->offer->unit = new RetailCrm\Api\Model\Entity\Orders\Items\Unit();
if (isset($jsonData['pack']['item']['offer']['unit']['code'])) {
    $model->pack->item->offer->unit->code = $jsonData['pack']['item']['offer']['unit']['code'];

}
if (isset($jsonData['pack']['item']['offer']['unit']['name'])) {
    $model->pack->item->offer->unit->name = $jsonData['pack']['item']['offer']['unit']['name'];

}
if (isset($jsonData['pack']['item']['offer']['unit']['sym'])) {
    $model->pack->item->offer->unit->sym = $jsonData['pack']['item']['offer']['unit']['sym'];

}


}
if (isset($jsonData['pack']['item']['offer']['barcode'])) {
    $model->pack->item->offer->barcode = $jsonData['pack']['item']['offer']['barcode'];

}
if (isset($jsonData['pack']['item']['offer']['properties'])) {
    $model->pack->item->offer->properties = [];
foreach (array_keys($jsonData['pack']['item']['offer']['properties']) as $index48) {
    $model->pack->item->offer->properties[$index48] = $jsonData['pack']['item']['offer']['properties'][$index48];

}

}


}
if (isset($jsonData['pack']['item']['order'])) {
    
$model->pack->item->order = new RetailCrm\Api\Model\Entity\IdModel();
if (isset($jsonData['pack']['item']['order']['id'])) {
    $model->pack->item->order->id = $jsonData['pack']['item']['order']['id'];

}


}
if (isset($jsonData['pack']['item']['productName'])) {
    $model->pack->item->productName = $jsonData['pack']['item']['productName'];

}
if (isset($jsonData['pack']['item']['isCanceled'])) {
    $model->pack->item->isCanceled = $jsonData['pack']['item']['isCanceled'];

}
if (isset($jsonData['pack']['item']['properties'])) {
    $model->pack->item->properties = [];
foreach (array_keys($jsonData['pack']['item']['properties']) as $index39) {
    
$model->pack->item->properties[$index39] = new RetailCrm\Api\Model\Entity\Orders\Items\ItemProperty();
if (isset($jsonData['pack']['item']['properties'][$index39]['code'])) {
    $model->pack->item->properties[$index39]->code = $jsonData['pack']['item']['properties'][$index39]['code'];

}
if (isset($jsonData['pack']['item']['properties'][$index39]['name'])) {
    $model->pack->item->properties[$index39]->name = $jsonData['pack']['item']['properties'][$index39]['name'];

}
if (isset($jsonData['pack']['item']['properties'][$index39]['value'])) {
    $model->pack->item->properties[$index39]->value = $jsonData['pack']['item']['properties'][$index39]['value'];

}


}

}
if (isset($jsonData['pack']['item']['purchasePrice'])) {
    $model->pack->item->purchasePrice = (float) $jsonData['pack']['item']['purchasePrice'];

}


}
if (isset($jsonData['pack']['itemId'])) {
    $model->pack->itemId = $jsonData['pack']['itemId'];

}
if (isset($jsonData['pack']['shipmentDate'])) {
    $model->pack->shipmentDate = \DateTime::createFromFormat('Y-m-d', $jsonData['pack']['shipmentDate']);

}
if (isset($jsonData['pack']['invoiceNumber'])) {
    $model->pack->invoiceNumber = $jsonData['pack']['invoiceNumber'];

}
if (isset($jsonData['pack']['deliveryNoteNumber'])) {
    $model->pack->deliveryNoteNumber = $jsonData['pack']['deliveryNoteNumber'];

}


}



    return $model;
}
