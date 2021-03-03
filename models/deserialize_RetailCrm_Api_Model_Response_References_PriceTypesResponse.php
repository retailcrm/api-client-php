<?php

function deserialize_RetailCrm_Api_Model_Response_References_PriceTypesResponse(array $jsonData): RetailCrm\Api\Model\Response\References\PriceTypesResponse
{
    
$model = new RetailCrm\Api\Model\Response\References\PriceTypesResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['priceTypes'])) {
    $model->priceTypes = [];
foreach (array_keys($jsonData['priceTypes']) as $index23) {
    
$model->priceTypes[$index23] = new RetailCrm\Api\Model\Entity\References\PriceType();
if (isset($jsonData['priceTypes'][$index23]['id'])) {
    $model->priceTypes[$index23]->id = $jsonData['priceTypes'][$index23]['id'];

}
if (isset($jsonData['priceTypes'][$index23]['code'])) {
    $model->priceTypes[$index23]->code = $jsonData['priceTypes'][$index23]['code'];

}
if (isset($jsonData['priceTypes'][$index23]['name'])) {
    $model->priceTypes[$index23]->name = $jsonData['priceTypes'][$index23]['name'];

}
if (isset($jsonData['priceTypes'][$index23]['active'])) {
    $model->priceTypes[$index23]->active = $jsonData['priceTypes'][$index23]['active'];

}
if (isset($jsonData['priceTypes'][$index23]['default'])) {
    $model->priceTypes[$index23]->default = $jsonData['priceTypes'][$index23]['default'];

}
if (isset($jsonData['priceTypes'][$index23]['description'])) {
    $model->priceTypes[$index23]->description = $jsonData['priceTypes'][$index23]['description'];

}
if (isset($jsonData['priceTypes'][$index23]['filterExpression'])) {
    $model->priceTypes[$index23]->filterExpression = $jsonData['priceTypes'][$index23]['filterExpression'];

}
if (isset($jsonData['priceTypes'][$index23]['geo'])) {
    $model->priceTypes[$index23]->geo = [];
foreach (array_keys($jsonData['priceTypes'][$index23]['geo']) as $index40) {
    
$model->priceTypes[$index23]->geo[$index40] = new RetailCrm\Api\Model\Entity\References\GeoHierarchyRow();
if (isset($jsonData['priceTypes'][$index23]['geo'][$index40]['country'])) {
    $model->priceTypes[$index23]->geo[$index40]->country = $jsonData['priceTypes'][$index23]['geo'][$index40]['country'];

}
if (isset($jsonData['priceTypes'][$index23]['geo'][$index40]['regionId'])) {
    $model->priceTypes[$index23]->geo[$index40]->regionId = $jsonData['priceTypes'][$index23]['geo'][$index40]['regionId'];

}
if (isset($jsonData['priceTypes'][$index23]['geo'][$index40]['region'])) {
    $model->priceTypes[$index23]->geo[$index40]->region = $jsonData['priceTypes'][$index23]['geo'][$index40]['region'];

}
if (isset($jsonData['priceTypes'][$index23]['geo'][$index40]['cityId'])) {
    $model->priceTypes[$index23]->geo[$index40]->cityId = $jsonData['priceTypes'][$index23]['geo'][$index40]['cityId'];

}
if (isset($jsonData['priceTypes'][$index23]['geo'][$index40]['city'])) {
    $model->priceTypes[$index23]->geo[$index40]->city = $jsonData['priceTypes'][$index23]['geo'][$index40]['city'];

}


}

}
if (isset($jsonData['priceTypes'][$index23]['groups'])) {
    $model->priceTypes[$index23]->groups = [];
foreach (array_keys($jsonData['priceTypes'][$index23]['groups']) as $index43) {
    $model->priceTypes[$index23]->groups[$index43] = $jsonData['priceTypes'][$index23]['groups'][$index43];

}

}
if (isset($jsonData['priceTypes'][$index23]['ordering'])) {
    $model->priceTypes[$index23]->ordering = $jsonData['priceTypes'][$index23]['ordering'];

}


}

}



    return $model;
}
