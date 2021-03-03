<?php

function deserialize_RetailCrm_Api_Model_Response_References_ProductStatusesResponse(array $jsonData): RetailCrm\Api\Model\Response\References\ProductStatusesResponse
{
    
$model = new RetailCrm\Api\Model\Response\References\ProductStatusesResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['productStatuses'])) {
    $model->productStatuses = [];
foreach (array_keys($jsonData['productStatuses']) as $index28) {
    
$model->productStatuses[$index28] = new RetailCrm\Api\Model\Entity\References\OrderProductStatus();
if (isset($jsonData['productStatuses'][$index28]['code'])) {
    $model->productStatuses[$index28]->code = $jsonData['productStatuses'][$index28]['code'];

}
if (isset($jsonData['productStatuses'][$index28]['ordering'])) {
    $model->productStatuses[$index28]->ordering = $jsonData['productStatuses'][$index28]['ordering'];

}
if (isset($jsonData['productStatuses'][$index28]['active'])) {
    $model->productStatuses[$index28]->active = $jsonData['productStatuses'][$index28]['active'];

}
if (isset($jsonData['productStatuses'][$index28]['createdAt'])) {
    $model->productStatuses[$index28]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['productStatuses'][$index28]['createdAt']);

}
if (isset($jsonData['productStatuses'][$index28]['orderStatusByProductStatus'])) {
    $model->productStatuses[$index28]->orderStatusByProductStatus = $jsonData['productStatuses'][$index28]['orderStatusByProductStatus'];

}
if (isset($jsonData['productStatuses'][$index28]['orderStatusForProductStatus'])) {
    $model->productStatuses[$index28]->orderStatusForProductStatus = $jsonData['productStatuses'][$index28]['orderStatusForProductStatus'];

}
if (isset($jsonData['productStatuses'][$index28]['cancelStatus'])) {
    $model->productStatuses[$index28]->cancelStatus = $jsonData['productStatuses'][$index28]['cancelStatus'];

}
if (isset($jsonData['productStatuses'][$index28]['name'])) {
    $model->productStatuses[$index28]->name = $jsonData['productStatuses'][$index28]['name'];

}


}

}



    return $model;
}
