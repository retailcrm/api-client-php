<?php

function deserialize_RetailCrm_Api_Model_Response_Packs_PacksHistoryResponse(array $jsonData): RetailCrm\Api\Model\Response\Packs\PacksHistoryResponse
{
    
$model = new RetailCrm\Api\Model\Response\Packs\PacksHistoryResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['pagination'])) {
    
$model->pagination = new RetailCrm\Api\Model\Entity\Pagination();
if (isset($jsonData['pagination']['limit'])) {
    $model->pagination->limit = $jsonData['pagination']['limit'];

}
if (isset($jsonData['pagination']['totalCount'])) {
    $model->pagination->totalCount = $jsonData['pagination']['totalCount'];

}
if (isset($jsonData['pagination']['currentPage'])) {
    $model->pagination->currentPage = $jsonData['pagination']['currentPage'];

}
if (isset($jsonData['pagination']['totalPageCount'])) {
    $model->pagination->totalPageCount = $jsonData['pagination']['totalPageCount'];

}


}
if (isset($jsonData['generatedAt'])) {
    $model->generatedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['generatedAt']);

}
if (isset($jsonData['history'])) {
    $model->history = [];
foreach (array_keys($jsonData['history']) as $index20) {
    
$model->history[$index20] = new RetailCrm\Api\Model\Entity\Packs\OrderProductPackHistory();
if (isset($jsonData['history'][$index20]['id'])) {
    $model->history[$index20]->id = $jsonData['history'][$index20]['id'];

}
if (isset($jsonData['history'][$index20]['createdAt'])) {
    $model->history[$index20]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['createdAt']);

}
if (isset($jsonData['history'][$index20]['created'])) {
    $model->history[$index20]->created = $jsonData['history'][$index20]['created'];

}
if (isset($jsonData['history'][$index20]['deleted'])) {
    $model->history[$index20]->deleted = $jsonData['history'][$index20]['deleted'];

}
if (isset($jsonData['history'][$index20]['field'])) {
    $model->history[$index20]->field = $jsonData['history'][$index20]['field'];

}
if (isset($jsonData['history'][$index20]['oldValue'])) {
    $model->history[$index20]->oldValue = $jsonData['history'][$index20]['oldValue'];

}
if (isset($jsonData['history'][$index20]['newValue'])) {
    $model->history[$index20]->newValue = $jsonData['history'][$index20]['newValue'];

}
if (isset($jsonData['history'][$index20]['pack'])) {
    
$model->history[$index20]->pack = new RetailCrm\Api\Model\Entity\Packs\OrderProductPack();
if (isset($jsonData['history'][$index20]['pack']['id'])) {
    $model->history[$index20]->pack->id = $jsonData['history'][$index20]['pack']['id'];

}
if (isset($jsonData['history'][$index20]['pack']['purchasePrice'])) {
    $model->history[$index20]->pack->purchasePrice = (float) $jsonData['history'][$index20]['pack']['purchasePrice'];

}
if (isset($jsonData['history'][$index20]['pack']['quantity'])) {
    $model->history[$index20]->pack->quantity = (float) $jsonData['history'][$index20]['pack']['quantity'];

}
if (isset($jsonData['history'][$index20]['pack']['unit'])) {
    
$model->history[$index20]->pack->unit = new RetailCrm\Api\Model\Entity\Orders\Items\Unit();
if (isset($jsonData['history'][$index20]['pack']['unit']['code'])) {
    $model->history[$index20]->pack->unit->code = $jsonData['history'][$index20]['pack']['unit']['code'];

}
if (isset($jsonData['history'][$index20]['pack']['unit']['name'])) {
    $model->history[$index20]->pack->unit->name = $jsonData['history'][$index20]['pack']['unit']['name'];

}
if (isset($jsonData['history'][$index20]['pack']['unit']['sym'])) {
    $model->history[$index20]->pack->unit->sym = $jsonData['history'][$index20]['pack']['unit']['sym'];

}


}
if (isset($jsonData['history'][$index20]['pack']['store'])) {
    $model->history[$index20]->pack->store = $jsonData['history'][$index20]['pack']['store'];

}
if (isset($jsonData['history'][$index20]['pack']['item'])) {
    
$model->history[$index20]->pack->item = new RetailCrm\Api\Model\Entity\Orders\Items\OrderProduct();
if (isset($jsonData['history'][$index20]['pack']['item']['externalId'])) {
    $model->history[$index20]->pack->item->externalId = $jsonData['history'][$index20]['pack']['item']['externalId'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['markingCodes'])) {
    $model->history[$index20]->pack->item->markingCodes = [];
foreach (array_keys($jsonData['history'][$index20]['pack']['item']['markingCodes']) as $index62) {
    $model->history[$index20]->pack->item->markingCodes[$index62] = $jsonData['history'][$index20]['pack']['item']['markingCodes'][$index62];

}

}
if (isset($jsonData['history'][$index20]['pack']['item']['id'])) {
    $model->history[$index20]->pack->item->id = $jsonData['history'][$index20]['pack']['item']['id'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['externalIds'])) {
    $model->history[$index20]->pack->item->externalIds = [];
foreach (array_keys($jsonData['history'][$index20]['pack']['item']['externalIds']) as $index61) {
    
$model->history[$index20]->pack->item->externalIds[$index61] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['history'][$index20]['pack']['item']['externalIds'][$index61]['code'])) {
    $model->history[$index20]->pack->item->externalIds[$index61]->code = $jsonData['history'][$index20]['pack']['item']['externalIds'][$index61]['code'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['externalIds'][$index61]['value'])) {
    $model->history[$index20]->pack->item->externalIds[$index61]->value = $jsonData['history'][$index20]['pack']['item']['externalIds'][$index61]['value'];

}


}

}
if (isset($jsonData['history'][$index20]['pack']['item']['priceType'])) {
    
$model->history[$index20]->pack->item->priceType = new RetailCrm\Api\Model\Entity\Orders\Items\PriceType();
if (isset($jsonData['history'][$index20]['pack']['item']['priceType']['code'])) {
    $model->history[$index20]->pack->item->priceType->code = $jsonData['history'][$index20]['pack']['item']['priceType']['code'];

}


}
if (isset($jsonData['history'][$index20]['pack']['item']['initialPrice'])) {
    $model->history[$index20]->pack->item->initialPrice = (float) $jsonData['history'][$index20]['pack']['item']['initialPrice'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['discountManualAmount'])) {
    $model->history[$index20]->pack->item->discountManualAmount = (float) $jsonData['history'][$index20]['pack']['item']['discountManualAmount'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['discountManualPercent'])) {
    $model->history[$index20]->pack->item->discountManualPercent = (float) $jsonData['history'][$index20]['pack']['item']['discountManualPercent'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['discountTotal'])) {
    $model->history[$index20]->pack->item->discountTotal = (float) $jsonData['history'][$index20]['pack']['item']['discountTotal'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['prices'])) {
    $model->history[$index20]->pack->item->prices = [];
foreach (array_keys($jsonData['history'][$index20]['pack']['item']['prices']) as $index56) {
    
$model->history[$index20]->pack->item->prices[$index56] = new RetailCrm\Api\Model\Entity\Orders\Items\OrderProductPriceItem();
if (isset($jsonData['history'][$index20]['pack']['item']['prices'][$index56]['price'])) {
    $model->history[$index20]->pack->item->prices[$index56]->price = (float) $jsonData['history'][$index20]['pack']['item']['prices'][$index56]['price'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['prices'][$index56]['quantity'])) {
    $model->history[$index20]->pack->item->prices[$index56]->quantity = (float) $jsonData['history'][$index20]['pack']['item']['prices'][$index56]['quantity'];

}


}

}
if (isset($jsonData['history'][$index20]['pack']['item']['vatRate'])) {
    $model->history[$index20]->pack->item->vatRate = $jsonData['history'][$index20]['pack']['item']['vatRate'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['createdAt'])) {
    $model->history[$index20]->pack->item->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['pack']['item']['createdAt']);

}
if (isset($jsonData['history'][$index20]['pack']['item']['quantity'])) {
    $model->history[$index20]->pack->item->quantity = (float) $jsonData['history'][$index20]['pack']['item']['quantity'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['status'])) {
    $model->history[$index20]->pack->item->status = $jsonData['history'][$index20]['pack']['item']['status'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['comment'])) {
    $model->history[$index20]->pack->item->comment = $jsonData['history'][$index20]['pack']['item']['comment'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['offer'])) {
    
$model->history[$index20]->pack->item->offer = new RetailCrm\Api\Model\Entity\Orders\Items\Offer();
if (isset($jsonData['history'][$index20]['pack']['item']['offer']['displayName'])) {
    $model->history[$index20]->pack->item->offer->displayName = $jsonData['history'][$index20]['pack']['item']['offer']['displayName'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['offer']['id'])) {
    $model->history[$index20]->pack->item->offer->id = $jsonData['history'][$index20]['pack']['item']['offer']['id'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['offer']['externalId'])) {
    $model->history[$index20]->pack->item->offer->externalId = $jsonData['history'][$index20]['pack']['item']['offer']['externalId'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['offer']['xmlId'])) {
    $model->history[$index20]->pack->item->offer->xmlId = $jsonData['history'][$index20]['pack']['item']['offer']['xmlId'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['offer']['name'])) {
    $model->history[$index20]->pack->item->offer->name = $jsonData['history'][$index20]['pack']['item']['offer']['name'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['offer']['article'])) {
    $model->history[$index20]->pack->item->offer->article = $jsonData['history'][$index20]['pack']['item']['offer']['article'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['offer']['vatRate'])) {
    $model->history[$index20]->pack->item->offer->vatRate = $jsonData['history'][$index20]['pack']['item']['offer']['vatRate'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['offer']['unit'])) {
    
$model->history[$index20]->pack->item->offer->unit = new RetailCrm\Api\Model\Entity\Orders\Items\Unit();
if (isset($jsonData['history'][$index20]['pack']['item']['offer']['unit']['code'])) {
    $model->history[$index20]->pack->item->offer->unit->code = $jsonData['history'][$index20]['pack']['item']['offer']['unit']['code'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['offer']['unit']['name'])) {
    $model->history[$index20]->pack->item->offer->unit->name = $jsonData['history'][$index20]['pack']['item']['offer']['unit']['name'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['offer']['unit']['sym'])) {
    $model->history[$index20]->pack->item->offer->unit->sym = $jsonData['history'][$index20]['pack']['item']['offer']['unit']['sym'];

}


}
if (isset($jsonData['history'][$index20]['pack']['item']['offer']['barcode'])) {
    $model->history[$index20]->pack->item->offer->barcode = $jsonData['history'][$index20]['pack']['item']['offer']['barcode'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['offer']['properties'])) {
    $model->history[$index20]->pack->item->offer->properties = [];
foreach (array_keys($jsonData['history'][$index20]['pack']['item']['offer']['properties']) as $index69) {
    $model->history[$index20]->pack->item->offer->properties[$index69] = $jsonData['history'][$index20]['pack']['item']['offer']['properties'][$index69];

}

}


}
if (isset($jsonData['history'][$index20]['pack']['item']['order'])) {
    
$model->history[$index20]->pack->item->order = new RetailCrm\Api\Model\Entity\IdModel();
if (isset($jsonData['history'][$index20]['pack']['item']['order']['id'])) {
    $model->history[$index20]->pack->item->order->id = $jsonData['history'][$index20]['pack']['item']['order']['id'];

}


}
if (isset($jsonData['history'][$index20]['pack']['item']['productName'])) {
    $model->history[$index20]->pack->item->productName = $jsonData['history'][$index20]['pack']['item']['productName'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['isCanceled'])) {
    $model->history[$index20]->pack->item->isCanceled = $jsonData['history'][$index20]['pack']['item']['isCanceled'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['properties'])) {
    $model->history[$index20]->pack->item->properties = [];
foreach (array_keys($jsonData['history'][$index20]['pack']['item']['properties']) as $index60) {
    
$model->history[$index20]->pack->item->properties[$index60] = new RetailCrm\Api\Model\Entity\Orders\Items\ItemProperty();
if (isset($jsonData['history'][$index20]['pack']['item']['properties'][$index60]['code'])) {
    $model->history[$index20]->pack->item->properties[$index60]->code = $jsonData['history'][$index20]['pack']['item']['properties'][$index60]['code'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['properties'][$index60]['name'])) {
    $model->history[$index20]->pack->item->properties[$index60]->name = $jsonData['history'][$index20]['pack']['item']['properties'][$index60]['name'];

}
if (isset($jsonData['history'][$index20]['pack']['item']['properties'][$index60]['value'])) {
    $model->history[$index20]->pack->item->properties[$index60]->value = $jsonData['history'][$index20]['pack']['item']['properties'][$index60]['value'];

}


}

}
if (isset($jsonData['history'][$index20]['pack']['item']['purchasePrice'])) {
    $model->history[$index20]->pack->item->purchasePrice = (float) $jsonData['history'][$index20]['pack']['item']['purchasePrice'];

}


}
if (isset($jsonData['history'][$index20]['pack']['itemId'])) {
    $model->history[$index20]->pack->itemId = $jsonData['history'][$index20]['pack']['itemId'];

}
if (isset($jsonData['history'][$index20]['pack']['shipmentDate'])) {
    $model->history[$index20]->pack->shipmentDate = \DateTime::createFromFormat('Y-m-d', $jsonData['history'][$index20]['pack']['shipmentDate']);

}
if (isset($jsonData['history'][$index20]['pack']['invoiceNumber'])) {
    $model->history[$index20]->pack->invoiceNumber = $jsonData['history'][$index20]['pack']['invoiceNumber'];

}
if (isset($jsonData['history'][$index20]['pack']['deliveryNoteNumber'])) {
    $model->history[$index20]->pack->deliveryNoteNumber = $jsonData['history'][$index20]['pack']['deliveryNoteNumber'];

}


}
if (isset($jsonData['history'][$index20]['source'])) {
    $model->history[$index20]->source = $jsonData['history'][$index20]['source'];

}
if (isset($jsonData['history'][$index20]['user'])) {
    
$model->history[$index20]->user = new RetailCrm\Api\Model\Entity\HistoryUser();
if (isset($jsonData['history'][$index20]['user']['id'])) {
    $model->history[$index20]->user->id = $jsonData['history'][$index20]['user']['id'];

}


}


}

}



    return $model;
}
