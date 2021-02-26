<?php

function deserialize_RetailCrm_Api_Model_Response_CustomFields_CustomFieldsDictionariesResponse(array $jsonData): RetailCrm\Api\Model\Response\CustomFields\CustomFieldsDictionariesResponse
{
    
$model = new RetailCrm\Api\Model\Response\CustomFields\CustomFieldsDictionariesResponse();
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
if (isset($jsonData['customDictionaries'])) {
    $model->customDictionaries = [];
foreach (array_keys($jsonData['customDictionaries']) as $index31) {
    
$model->customDictionaries[$index31] = new RetailCrm\Api\Model\Entity\CustomFields\CustomDictionary();
if (isset($jsonData['customDictionaries'][$index31]['name'])) {
    $model->customDictionaries[$index31]->name = $jsonData['customDictionaries'][$index31]['name'];

}
if (isset($jsonData['customDictionaries'][$index31]['code'])) {
    $model->customDictionaries[$index31]->code = $jsonData['customDictionaries'][$index31]['code'];

}
if (isset($jsonData['customDictionaries'][$index31]['elements'])) {
    $model->customDictionaries[$index31]->elements = [];
foreach (array_keys($jsonData['customDictionaries'][$index31]['elements']) as $index53) {
    
$model->customDictionaries[$index31]->elements[$index53] = new RetailCrm\Api\Model\Entity\CustomFields\SerializedCustomDictionaryElement();
if (isset($jsonData['customDictionaries'][$index31]['elements'][$index53]['name'])) {
    $model->customDictionaries[$index31]->elements[$index53]->name = $jsonData['customDictionaries'][$index31]['elements'][$index53]['name'];

}
if (isset($jsonData['customDictionaries'][$index31]['elements'][$index53]['code'])) {
    $model->customDictionaries[$index31]->elements[$index53]->code = $jsonData['customDictionaries'][$index31]['elements'][$index53]['code'];

}
if (isset($jsonData['customDictionaries'][$index31]['elements'][$index53]['ordering'])) {
    $model->customDictionaries[$index31]->elements[$index53]->ordering = $jsonData['customDictionaries'][$index31]['elements'][$index53]['ordering'];

}


}

}


}

}



    return $model;
}
