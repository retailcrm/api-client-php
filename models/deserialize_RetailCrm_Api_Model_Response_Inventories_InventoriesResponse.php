<?php

function deserialize_RetailCrm_Api_Model_Response_Inventories_InventoriesResponse(array $jsonData): RetailCrm\Api\Model\Response\Inventories\InventoriesResponse
{
    
$model = new RetailCrm\Api\Model\Response\Inventories\InventoriesResponse();
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
if (isset($jsonData['offers'])) {
    $model->offers = [];
foreach (array_keys($jsonData['offers']) as $index19) {
    
$model->offers[$index19] = new RetailCrm\Api\Model\Entity\Inventories\Offer();
if (isset($jsonData['offers'][$index19]['displayName'])) {
    $model->offers[$index19]->displayName = $jsonData['offers'][$index19]['displayName'];

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
if (isset($jsonData['offers'][$index19]['name'])) {
    $model->offers[$index19]->name = $jsonData['offers'][$index19]['name'];

}
if (isset($jsonData['offers'][$index19]['article'])) {
    $model->offers[$index19]->article = $jsonData['offers'][$index19]['article'];

}
if (isset($jsonData['offers'][$index19]['vatRate'])) {
    $model->offers[$index19]->vatRate = $jsonData['offers'][$index19]['vatRate'];

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
if (isset($jsonData['offers'][$index19]['properties'])) {
    $model->offers[$index19]->properties = [];
foreach (array_keys($jsonData['offers'][$index19]['properties']) as $index43) {
    $model->offers[$index19]->properties[$index43] = $jsonData['offers'][$index19]['properties'][$index43];

}

}
if (isset($jsonData['offers'][$index19]['site'])) {
    $model->offers[$index19]->site = $jsonData['offers'][$index19]['site'];

}
if (isset($jsonData['offers'][$index19]['purchasePrice'])) {
    $model->offers[$index19]->purchasePrice = (float) $jsonData['offers'][$index19]['purchasePrice'];

}
if (isset($jsonData['offers'][$index19]['quantity'])) {
    $model->offers[$index19]->quantity = (float) $jsonData['offers'][$index19]['quantity'];

}
if (isset($jsonData['offers'][$index19]['stores'])) {
    
$model->offers[$index19]->stores = new RetailCrm\Api\Model\Entity\Inventories\Inventory();
if (isset($jsonData['offers'][$index19]['stores']['quantity'])) {
    $model->offers[$index19]->stores->quantity = (float) $jsonData['offers'][$index19]['stores']['quantity'];

}
if (isset($jsonData['offers'][$index19]['stores']['purchasePrice'])) {
    $model->offers[$index19]->stores->purchasePrice = (float) $jsonData['offers'][$index19]['stores']['purchasePrice'];

}
if (isset($jsonData['offers'][$index19]['stores']['store'])) {
    $model->offers[$index19]->stores->store = $jsonData['offers'][$index19]['stores']['store'];

}


}


}

}



    return $model;
}
