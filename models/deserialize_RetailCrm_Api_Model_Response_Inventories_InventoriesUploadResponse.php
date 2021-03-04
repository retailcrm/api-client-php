<?php

function deserialize_RetailCrm_Api_Model_Response_Inventories_InventoriesUploadResponse(array $jsonData): RetailCrm\Api\Model\Response\Inventories\InventoriesUploadResponse
{
    
$model = new RetailCrm\Api\Model\Response\Inventories\InventoriesUploadResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['processedOffersCount'])) {
    $model->processedOffersCount = $jsonData['processedOffersCount'];

}
if (isset($jsonData['notFoundOffers'])) {
    $model->notFoundOffers = [];
foreach (array_keys($jsonData['notFoundOffers']) as $index27) {
    
$model->notFoundOffers[$index27] = new RetailCrm\Api\Model\Entity\Inventories\Offer();
if (isset($jsonData['notFoundOffers'][$index27]['displayName'])) {
    $model->notFoundOffers[$index27]->displayName = $jsonData['notFoundOffers'][$index27]['displayName'];

}
if (isset($jsonData['notFoundOffers'][$index27]['id'])) {
    $model->notFoundOffers[$index27]->id = $jsonData['notFoundOffers'][$index27]['id'];

}
if (isset($jsonData['notFoundOffers'][$index27]['externalId'])) {
    $model->notFoundOffers[$index27]->externalId = $jsonData['notFoundOffers'][$index27]['externalId'];

}
if (isset($jsonData['notFoundOffers'][$index27]['xmlId'])) {
    $model->notFoundOffers[$index27]->xmlId = $jsonData['notFoundOffers'][$index27]['xmlId'];

}
if (isset($jsonData['notFoundOffers'][$index27]['name'])) {
    $model->notFoundOffers[$index27]->name = $jsonData['notFoundOffers'][$index27]['name'];

}
if (isset($jsonData['notFoundOffers'][$index27]['article'])) {
    $model->notFoundOffers[$index27]->article = $jsonData['notFoundOffers'][$index27]['article'];

}
if (isset($jsonData['notFoundOffers'][$index27]['vatRate'])) {
    $model->notFoundOffers[$index27]->vatRate = $jsonData['notFoundOffers'][$index27]['vatRate'];

}
if (isset($jsonData['notFoundOffers'][$index27]['unit'])) {
    
$model->notFoundOffers[$index27]->unit = new RetailCrm\Api\Model\Entity\Orders\Items\Unit();
if (isset($jsonData['notFoundOffers'][$index27]['unit']['code'])) {
    $model->notFoundOffers[$index27]->unit->code = $jsonData['notFoundOffers'][$index27]['unit']['code'];

}
if (isset($jsonData['notFoundOffers'][$index27]['unit']['name'])) {
    $model->notFoundOffers[$index27]->unit->name = $jsonData['notFoundOffers'][$index27]['unit']['name'];

}
if (isset($jsonData['notFoundOffers'][$index27]['unit']['sym'])) {
    $model->notFoundOffers[$index27]->unit->sym = $jsonData['notFoundOffers'][$index27]['unit']['sym'];

}


}
if (isset($jsonData['notFoundOffers'][$index27]['barcode'])) {
    $model->notFoundOffers[$index27]->barcode = $jsonData['notFoundOffers'][$index27]['barcode'];

}
if (isset($jsonData['notFoundOffers'][$index27]['properties'])) {
    $model->notFoundOffers[$index27]->properties = [];
foreach (array_keys($jsonData['notFoundOffers'][$index27]['properties']) as $index51) {
    $model->notFoundOffers[$index27]->properties[$index51] = $jsonData['notFoundOffers'][$index27]['properties'][$index51];

}

}
if (isset($jsonData['notFoundOffers'][$index27]['site'])) {
    $model->notFoundOffers[$index27]->site = $jsonData['notFoundOffers'][$index27]['site'];

}
if (isset($jsonData['notFoundOffers'][$index27]['purchasePrice'])) {
    $model->notFoundOffers[$index27]->purchasePrice = (float) $jsonData['notFoundOffers'][$index27]['purchasePrice'];

}
if (isset($jsonData['notFoundOffers'][$index27]['quantity'])) {
    $model->notFoundOffers[$index27]->quantity = (float) $jsonData['notFoundOffers'][$index27]['quantity'];

}
if (isset($jsonData['notFoundOffers'][$index27]['stores'])) {
    
$model->notFoundOffers[$index27]->stores = new RetailCrm\Api\Model\Entity\Inventories\Inventory();
if (isset($jsonData['notFoundOffers'][$index27]['stores']['quantity'])) {
    $model->notFoundOffers[$index27]->stores->quantity = (float) $jsonData['notFoundOffers'][$index27]['stores']['quantity'];

}
if (isset($jsonData['notFoundOffers'][$index27]['stores']['purchasePrice'])) {
    $model->notFoundOffers[$index27]->stores->purchasePrice = (float) $jsonData['notFoundOffers'][$index27]['stores']['purchasePrice'];

}
if (isset($jsonData['notFoundOffers'][$index27]['stores']['store'])) {
    $model->notFoundOffers[$index27]->stores->store = $jsonData['notFoundOffers'][$index27]['stores']['store'];

}


}


}

}



    return $model;
}
