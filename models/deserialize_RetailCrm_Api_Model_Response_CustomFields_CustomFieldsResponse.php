<?php

function deserialize_RetailCrm_Api_Model_Response_CustomFields_CustomFieldsResponse(array $jsonData): RetailCrm\Api\Model\Response\CustomFields\CustomFieldsResponse
{
    
$model = new RetailCrm\Api\Model\Response\CustomFields\CustomFieldsResponse();
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
if (isset($jsonData['customFields'])) {
    $model->customFields = [];
foreach (array_keys($jsonData['customFields']) as $index25) {
    
$model->customFields[$index25] = new RetailCrm\Api\Model\Entity\CustomFields\CustomField();
if (isset($jsonData['customFields'][$index25]['name'])) {
    $model->customFields[$index25]->name = $jsonData['customFields'][$index25]['name'];

}
if (isset($jsonData['customFields'][$index25]['code'])) {
    $model->customFields[$index25]->code = $jsonData['customFields'][$index25]['code'];

}
if (isset($jsonData['customFields'][$index25]['required'])) {
    $model->customFields[$index25]->required = $jsonData['customFields'][$index25]['required'];

}
if (isset($jsonData['customFields'][$index25]['inFilter'])) {
    $model->customFields[$index25]->inFilter = $jsonData['customFields'][$index25]['inFilter'];

}
if (isset($jsonData['customFields'][$index25]['inList'])) {
    $model->customFields[$index25]->inList = $jsonData['customFields'][$index25]['inList'];

}
if (isset($jsonData['customFields'][$index25]['inGroupActions'])) {
    $model->customFields[$index25]->inGroupActions = $jsonData['customFields'][$index25]['inGroupActions'];

}
if (isset($jsonData['customFields'][$index25]['type'])) {
    $model->customFields[$index25]->type = $jsonData['customFields'][$index25]['type'];

}
if (isset($jsonData['customFields'][$index25]['entity'])) {
    $model->customFields[$index25]->entity = $jsonData['customFields'][$index25]['entity'];

}
if (isset($jsonData['customFields'][$index25]['default'])) {
    $model->customFields[$index25]->default = $jsonData['customFields'][$index25]['default'];

}
if (isset($jsonData['customFields'][$index25]['ordering'])) {
    $model->customFields[$index25]->ordering = $jsonData['customFields'][$index25]['ordering'];

}
if (isset($jsonData['customFields'][$index25]['displayArea'])) {
    $model->customFields[$index25]->displayArea = $jsonData['customFields'][$index25]['displayArea'];

}
if (isset($jsonData['customFields'][$index25]['viewMode'])) {
    $model->customFields[$index25]->viewMode = $jsonData['customFields'][$index25]['viewMode'];

}
if (isset($jsonData['customFields'][$index25]['dictionary'])) {
    $model->customFields[$index25]->dictionary = $jsonData['customFields'][$index25]['dictionary'];

}


}

}



    return $model;
}
