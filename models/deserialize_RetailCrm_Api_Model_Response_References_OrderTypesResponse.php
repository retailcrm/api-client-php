<?php

function deserialize_RetailCrm_Api_Model_Response_References_OrderTypesResponse(array $jsonData): RetailCrm\Api\Model\Response\References\OrderTypesResponse
{
    
$model = new RetailCrm\Api\Model\Response\References\OrderTypesResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['orderTypes'])) {
    $model->orderTypes = [];
foreach (array_keys($jsonData['orderTypes']) as $index23) {
    
$model->orderTypes[$index23] = new RetailCrm\Api\Model\Entity\References\OrderType();
if (isset($jsonData['orderTypes'][$index23]['name'])) {
    $model->orderTypes[$index23]->name = $jsonData['orderTypes'][$index23]['name'];

}
if (isset($jsonData['orderTypes'][$index23]['code'])) {
    $model->orderTypes[$index23]->code = $jsonData['orderTypes'][$index23]['code'];

}
if (isset($jsonData['orderTypes'][$index23]['active'])) {
    $model->orderTypes[$index23]->active = $jsonData['orderTypes'][$index23]['active'];

}
if (isset($jsonData['orderTypes'][$index23]['defaultForCrm'])) {
    $model->orderTypes[$index23]->defaultForCrm = $jsonData['orderTypes'][$index23]['defaultForCrm'];

}
if (isset($jsonData['orderTypes'][$index23]['defaultForApi'])) {
    $model->orderTypes[$index23]->defaultForApi = $jsonData['orderTypes'][$index23]['defaultForApi'];

}
if (isset($jsonData['orderTypes'][$index23]['ordering'])) {
    $model->orderTypes[$index23]->ordering = $jsonData['orderTypes'][$index23]['ordering'];

}


}

}



    return $model;
}
