<?php

function deserialize_RetailCrm_Api_Model_Response_Packs_PacksResponse(array $jsonData): RetailCrm\Api\Model\Response\Packs\PacksResponse
{
    
$model = new RetailCrm\Api\Model\Response\Packs\PacksResponse();
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
if (isset($jsonData['packs'])) {
    $model->packs = [];
foreach (array_keys($jsonData['packs']) as $index18) {
    
$model->packs[$index18] = new RetailCrm\Api\Model\Entity\Packs\OrderProductPack();
if (isset($jsonData['packs'][$index18]['id'])) {
    $model->packs[$index18]->id = $jsonData['packs'][$index18]['id'];

}
if (isset($jsonData['packs'][$index18]['purchasePrice'])) {
    $model->packs[$index18]->purchasePrice = (float) $jsonData['packs'][$index18]['purchasePrice'];

}
if (isset($jsonData['packs'][$index18]['quantity'])) {
    $model->packs[$index18]->quantity = (float) $jsonData['packs'][$index18]['quantity'];

}
if (isset($jsonData['packs'][$index18]['unit'])) {
    
$model->packs[$index18]->unit = new RetailCrm\Api\Model\Entity\Orders\Items\Unit();
if (isset($jsonData['packs'][$index18]['unit']['code'])) {
    $model->packs[$index18]->unit->code = $jsonData['packs'][$index18]['unit']['code'];

}
if (isset($jsonData['packs'][$index18]['unit']['name'])) {
    $model->packs[$index18]->unit->name = $jsonData['packs'][$index18]['unit']['name'];

}
if (isset($jsonData['packs'][$index18]['unit']['sym'])) {
    $model->packs[$index18]->unit->sym = $jsonData['packs'][$index18]['unit']['sym'];

}


}
if (isset($jsonData['packs'][$index18]['store'])) {
    $model->packs[$index18]->store = $jsonData['packs'][$index18]['store'];

}
if (isset($jsonData['packs'][$index18]['item'])) {
    
$model->packs[$index18]->item = new RetailCrm\Api\Model\Entity\Orders\Items\OrderProduct();
if (isset($jsonData['packs'][$index18]['item']['externalId'])) {
    $model->packs[$index18]->item->externalId = $jsonData['packs'][$index18]['item']['externalId'];

}
if (isset($jsonData['packs'][$index18]['item']['markingCodes'])) {
    $model->packs[$index18]->item->markingCodes = [];
foreach (array_keys($jsonData['packs'][$index18]['item']['markingCodes']) as $index52) {
    $model->packs[$index18]->item->markingCodes[$index52] = $jsonData['packs'][$index18]['item']['markingCodes'][$index52];

}

}
if (isset($jsonData['packs'][$index18]['item']['id'])) {
    $model->packs[$index18]->item->id = $jsonData['packs'][$index18]['item']['id'];

}
if (isset($jsonData['packs'][$index18]['item']['externalIds'])) {
    $model->packs[$index18]->item->externalIds = [];
foreach (array_keys($jsonData['packs'][$index18]['item']['externalIds']) as $index51) {
    
$model->packs[$index18]->item->externalIds[$index51] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['packs'][$index18]['item']['externalIds'][$index51]['code'])) {
    $model->packs[$index18]->item->externalIds[$index51]->code = $jsonData['packs'][$index18]['item']['externalIds'][$index51]['code'];

}
if (isset($jsonData['packs'][$index18]['item']['externalIds'][$index51]['value'])) {
    $model->packs[$index18]->item->externalIds[$index51]->value = $jsonData['packs'][$index18]['item']['externalIds'][$index51]['value'];

}


}

}
if (isset($jsonData['packs'][$index18]['item']['priceType'])) {
    
$model->packs[$index18]->item->priceType = new RetailCrm\Api\Model\Entity\Orders\Items\PriceType();
if (isset($jsonData['packs'][$index18]['item']['priceType']['code'])) {
    $model->packs[$index18]->item->priceType->code = $jsonData['packs'][$index18]['item']['priceType']['code'];

}


}
if (isset($jsonData['packs'][$index18]['item']['initialPrice'])) {
    $model->packs[$index18]->item->initialPrice = (float) $jsonData['packs'][$index18]['item']['initialPrice'];

}
if (isset($jsonData['packs'][$index18]['item']['discountManualAmount'])) {
    $model->packs[$index18]->item->discountManualAmount = (float) $jsonData['packs'][$index18]['item']['discountManualAmount'];

}
if (isset($jsonData['packs'][$index18]['item']['discountManualPercent'])) {
    $model->packs[$index18]->item->discountManualPercent = (float) $jsonData['packs'][$index18]['item']['discountManualPercent'];

}
if (isset($jsonData['packs'][$index18]['item']['discountTotal'])) {
    $model->packs[$index18]->item->discountTotal = (float) $jsonData['packs'][$index18]['item']['discountTotal'];

}
if (isset($jsonData['packs'][$index18]['item']['prices'])) {
    $model->packs[$index18]->item->prices = [];
foreach (array_keys($jsonData['packs'][$index18]['item']['prices']) as $index46) {
    
$model->packs[$index18]->item->prices[$index46] = new RetailCrm\Api\Model\Entity\Orders\Items\OrderProductPriceItem();
if (isset($jsonData['packs'][$index18]['item']['prices'][$index46]['price'])) {
    $model->packs[$index18]->item->prices[$index46]->price = (float) $jsonData['packs'][$index18]['item']['prices'][$index46]['price'];

}
if (isset($jsonData['packs'][$index18]['item']['prices'][$index46]['quantity'])) {
    $model->packs[$index18]->item->prices[$index46]->quantity = (float) $jsonData['packs'][$index18]['item']['prices'][$index46]['quantity'];

}


}

}
if (isset($jsonData['packs'][$index18]['item']['vatRate'])) {
    $model->packs[$index18]->item->vatRate = $jsonData['packs'][$index18]['item']['vatRate'];

}
if (isset($jsonData['packs'][$index18]['item']['createdAt'])) {
    $model->packs[$index18]->item->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['packs'][$index18]['item']['createdAt']);

}
if (isset($jsonData['packs'][$index18]['item']['quantity'])) {
    $model->packs[$index18]->item->quantity = (float) $jsonData['packs'][$index18]['item']['quantity'];

}
if (isset($jsonData['packs'][$index18]['item']['status'])) {
    $model->packs[$index18]->item->status = $jsonData['packs'][$index18]['item']['status'];

}
if (isset($jsonData['packs'][$index18]['item']['comment'])) {
    $model->packs[$index18]->item->comment = $jsonData['packs'][$index18]['item']['comment'];

}
if (isset($jsonData['packs'][$index18]['item']['offer'])) {
    
$model->packs[$index18]->item->offer = new RetailCrm\Api\Model\Entity\Orders\Items\Offer();
if (isset($jsonData['packs'][$index18]['item']['offer']['displayName'])) {
    $model->packs[$index18]->item->offer->displayName = $jsonData['packs'][$index18]['item']['offer']['displayName'];

}
if (isset($jsonData['packs'][$index18]['item']['offer']['id'])) {
    $model->packs[$index18]->item->offer->id = $jsonData['packs'][$index18]['item']['offer']['id'];

}
if (isset($jsonData['packs'][$index18]['item']['offer']['externalId'])) {
    $model->packs[$index18]->item->offer->externalId = $jsonData['packs'][$index18]['item']['offer']['externalId'];

}
if (isset($jsonData['packs'][$index18]['item']['offer']['xmlId'])) {
    $model->packs[$index18]->item->offer->xmlId = $jsonData['packs'][$index18]['item']['offer']['xmlId'];

}
if (isset($jsonData['packs'][$index18]['item']['offer']['name'])) {
    $model->packs[$index18]->item->offer->name = $jsonData['packs'][$index18]['item']['offer']['name'];

}
if (isset($jsonData['packs'][$index18]['item']['offer']['article'])) {
    $model->packs[$index18]->item->offer->article = $jsonData['packs'][$index18]['item']['offer']['article'];

}
if (isset($jsonData['packs'][$index18]['item']['offer']['vatRate'])) {
    $model->packs[$index18]->item->offer->vatRate = $jsonData['packs'][$index18]['item']['offer']['vatRate'];

}
if (isset($jsonData['packs'][$index18]['item']['offer']['unit'])) {
    
$model->packs[$index18]->item->offer->unit = new RetailCrm\Api\Model\Entity\Orders\Items\Unit();
if (isset($jsonData['packs'][$index18]['item']['offer']['unit']['code'])) {
    $model->packs[$index18]->item->offer->unit->code = $jsonData['packs'][$index18]['item']['offer']['unit']['code'];

}
if (isset($jsonData['packs'][$index18]['item']['offer']['unit']['name'])) {
    $model->packs[$index18]->item->offer->unit->name = $jsonData['packs'][$index18]['item']['offer']['unit']['name'];

}
if (isset($jsonData['packs'][$index18]['item']['offer']['unit']['sym'])) {
    $model->packs[$index18]->item->offer->unit->sym = $jsonData['packs'][$index18]['item']['offer']['unit']['sym'];

}


}
if (isset($jsonData['packs'][$index18]['item']['offer']['barcode'])) {
    $model->packs[$index18]->item->offer->barcode = $jsonData['packs'][$index18]['item']['offer']['barcode'];

}
if (isset($jsonData['packs'][$index18]['item']['offer']['properties'])) {
    $model->packs[$index18]->item->offer->properties = [];
foreach (array_keys($jsonData['packs'][$index18]['item']['offer']['properties']) as $index59) {
    $model->packs[$index18]->item->offer->properties[$index59] = $jsonData['packs'][$index18]['item']['offer']['properties'][$index59];

}

}


}
if (isset($jsonData['packs'][$index18]['item']['order'])) {
    
$model->packs[$index18]->item->order = new RetailCrm\Api\Model\Entity\IdModel();
if (isset($jsonData['packs'][$index18]['item']['order']['id'])) {
    $model->packs[$index18]->item->order->id = $jsonData['packs'][$index18]['item']['order']['id'];

}


}
if (isset($jsonData['packs'][$index18]['item']['productName'])) {
    $model->packs[$index18]->item->productName = $jsonData['packs'][$index18]['item']['productName'];

}
if (isset($jsonData['packs'][$index18]['item']['isCanceled'])) {
    $model->packs[$index18]->item->isCanceled = $jsonData['packs'][$index18]['item']['isCanceled'];

}
if (isset($jsonData['packs'][$index18]['item']['properties'])) {
    $model->packs[$index18]->item->properties = [];
foreach (array_keys($jsonData['packs'][$index18]['item']['properties']) as $index50) {
    
$model->packs[$index18]->item->properties[$index50] = new RetailCrm\Api\Model\Entity\Orders\Items\ItemProperty();
if (isset($jsonData['packs'][$index18]['item']['properties'][$index50]['code'])) {
    $model->packs[$index18]->item->properties[$index50]->code = $jsonData['packs'][$index18]['item']['properties'][$index50]['code'];

}
if (isset($jsonData['packs'][$index18]['item']['properties'][$index50]['name'])) {
    $model->packs[$index18]->item->properties[$index50]->name = $jsonData['packs'][$index18]['item']['properties'][$index50]['name'];

}
if (isset($jsonData['packs'][$index18]['item']['properties'][$index50]['value'])) {
    $model->packs[$index18]->item->properties[$index50]->value = $jsonData['packs'][$index18]['item']['properties'][$index50]['value'];

}


}

}
if (isset($jsonData['packs'][$index18]['item']['purchasePrice'])) {
    $model->packs[$index18]->item->purchasePrice = (float) $jsonData['packs'][$index18]['item']['purchasePrice'];

}


}
if (isset($jsonData['packs'][$index18]['itemId'])) {
    $model->packs[$index18]->itemId = $jsonData['packs'][$index18]['itemId'];

}
if (isset($jsonData['packs'][$index18]['shipmentDate'])) {
    $model->packs[$index18]->shipmentDate = \DateTime::createFromFormat('Y-m-d', $jsonData['packs'][$index18]['shipmentDate']);

}
if (isset($jsonData['packs'][$index18]['invoiceNumber'])) {
    $model->packs[$index18]->invoiceNumber = $jsonData['packs'][$index18]['invoiceNumber'];

}
if (isset($jsonData['packs'][$index18]['deliveryNoteNumber'])) {
    $model->packs[$index18]->deliveryNoteNumber = $jsonData['packs'][$index18]['deliveryNoteNumber'];

}


}

}



    return $model;
}
