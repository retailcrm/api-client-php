<?php

function deserialize_RetailCrm_Api_Model_Response_Store_ProductPropertiesResponse(array $jsonData): RetailCrm\Api\Model\Response\Store\ProductPropertiesResponse
{
    
$model = new RetailCrm\Api\Model\Response\Store\ProductPropertiesResponse();
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
if (isset($jsonData['properties'])) {
    $model->properties = [];
foreach (array_keys($jsonData['properties']) as $index23) {
    
$model->properties[$index23] = new RetailCrm\Api\Model\Filter\Store\ProductProperty();
if (isset($jsonData['properties'][$index23]['sites'])) {
    $model->properties[$index23]->sites = $jsonData['properties'][$index23]['sites'];

}
if (isset($jsonData['properties'][$index23]['groups'])) {
    $model->properties[$index23]->groups = [];
foreach (array_keys($jsonData['properties'][$index23]['groups']) as $index43) {
    
$model->properties[$index23]->groups[$index43] = new RetailCrm\Api\Model\Filter\Store\ProductPropertyGroup();
if (isset($jsonData['properties'][$index23]['groups'][$index43]['id'])) {
    $model->properties[$index23]->groups[$index43]->id = $jsonData['properties'][$index23]['groups'][$index43]['id'];

}
if (isset($jsonData['properties'][$index23]['groups'][$index43]['name'])) {
    $model->properties[$index23]->groups[$index43]->name = $jsonData['properties'][$index23]['groups'][$index43]['name'];

}


}

}
if (isset($jsonData['properties'][$index23]['code'])) {
    $model->properties[$index23]->code = $jsonData['properties'][$index23]['code'];

}
if (isset($jsonData['properties'][$index23]['name'])) {
    $model->properties[$index23]->name = $jsonData['properties'][$index23]['name'];

}
if (isset($jsonData['properties'][$index23]['isNumeric'])) {
    $model->properties[$index23]->isNumeric = $jsonData['properties'][$index23]['isNumeric'];

}


}

}



    return $model;
}
