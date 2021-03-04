<?php

function deserialize_RetailCrm_Api_Model_Response_Inventories_ProductGroupsResponse(array $jsonData): RetailCrm\Api\Model\Response\Inventories\ProductGroupsResponse
{
    
$model = new RetailCrm\Api\Model\Response\Inventories\ProductGroupsResponse();
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
if (isset($jsonData['productGroup'])) {
    $model->productGroup = [];
foreach (array_keys($jsonData['productGroup']) as $index25) {
    
$model->productGroup[$index25] = new RetailCrm\Api\Model\Entity\Inventories\ProductGroup();
if (isset($jsonData['productGroup'][$index25]['parentId'])) {
    $model->productGroup[$index25]->parentId = $jsonData['productGroup'][$index25]['parentId'];

}
if (isset($jsonData['productGroup'][$index25]['site'])) {
    $model->productGroup[$index25]->site = $jsonData['productGroup'][$index25]['site'];

}
if (isset($jsonData['productGroup'][$index25]['id'])) {
    $model->productGroup[$index25]->id = $jsonData['productGroup'][$index25]['id'];

}
if (isset($jsonData['productGroup'][$index25]['name'])) {
    $model->productGroup[$index25]->name = $jsonData['productGroup'][$index25]['name'];

}
if (isset($jsonData['productGroup'][$index25]['externalId'])) {
    $model->productGroup[$index25]->externalId = $jsonData['productGroup'][$index25]['externalId'];

}
if (isset($jsonData['productGroup'][$index25]['active'])) {
    $model->productGroup[$index25]->active = $jsonData['productGroup'][$index25]['active'];

}


}

}



    return $model;
}
