<?php

function deserialize_RetailCrm_Api_Model_Response_Users_UserGroupsResponse(array $jsonData): RetailCrm\Api\Model\Response\Users\UserGroupsResponse
{
    
$model = new RetailCrm\Api\Model\Response\Users\UserGroupsResponse();
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
if (isset($jsonData['groups'])) {
    $model->groups = [];
foreach (array_keys($jsonData['groups']) as $index19) {
    
$model->groups[$index19] = new RetailCrm\Api\Model\Entity\Users\Group();
if (isset($jsonData['groups'][$index19]['id'])) {
    $model->groups[$index19]->id = $jsonData['groups'][$index19]['id'];

}
if (isset($jsonData['groups'][$index19]['name'])) {
    $model->groups[$index19]->name = $jsonData['groups'][$index19]['name'];

}
if (isset($jsonData['groups'][$index19]['signatureTemplate'])) {
    $model->groups[$index19]->signatureTemplate = $jsonData['groups'][$index19]['signatureTemplate'];

}
if (isset($jsonData['groups'][$index19]['code'])) {
    $model->groups[$index19]->code = $jsonData['groups'][$index19]['code'];

}
if (isset($jsonData['groups'][$index19]['isManager'])) {
    $model->groups[$index19]->isManager = $jsonData['groups'][$index19]['isManager'];

}
if (isset($jsonData['groups'][$index19]['isPosManager'])) {
    $model->groups[$index19]->isPosManager = $jsonData['groups'][$index19]['isPosManager'];

}
if (isset($jsonData['groups'][$index19]['isDeliveryMen'])) {
    $model->groups[$index19]->isDeliveryMen = $jsonData['groups'][$index19]['isDeliveryMen'];

}
if (isset($jsonData['groups'][$index19]['deliveryTypes'])) {
    $model->groups[$index19]->deliveryTypes = [];
foreach (array_keys($jsonData['groups'][$index19]['deliveryTypes']) as $index46) {
    $model->groups[$index19]->deliveryTypes[$index46] = $jsonData['groups'][$index19]['deliveryTypes'][$index46];

}

}
if (isset($jsonData['groups'][$index19]['breakdownOrderTypes'])) {
    $model->groups[$index19]->breakdownOrderTypes = [];
foreach (array_keys($jsonData['groups'][$index19]['breakdownOrderTypes']) as $index52) {
    $model->groups[$index19]->breakdownOrderTypes[$index52] = $jsonData['groups'][$index19]['breakdownOrderTypes'][$index52];

}

}
if (isset($jsonData['groups'][$index19]['breakdownSites'])) {
    $model->groups[$index19]->breakdownSites = [];
foreach (array_keys($jsonData['groups'][$index19]['breakdownSites']) as $index47) {
    $model->groups[$index19]->breakdownSites[$index47] = $jsonData['groups'][$index19]['breakdownSites'][$index47];

}

}
if (isset($jsonData['groups'][$index19]['breakdownOrderMethods'])) {
    $model->groups[$index19]->breakdownOrderMethods = [];
foreach (array_keys($jsonData['groups'][$index19]['breakdownOrderMethods']) as $index54) {
    $model->groups[$index19]->breakdownOrderMethods[$index54] = $jsonData['groups'][$index19]['breakdownOrderMethods'][$index54];

}

}
if (isset($jsonData['groups'][$index19]['grantedOrderTypes'])) {
    $model->groups[$index19]->grantedOrderTypes = [];
foreach (array_keys($jsonData['groups'][$index19]['grantedOrderTypes']) as $index50) {
    $model->groups[$index19]->grantedOrderTypes[$index50] = $jsonData['groups'][$index19]['grantedOrderTypes'][$index50];

}

}
if (isset($jsonData['groups'][$index19]['grantedSites'])) {
    $model->groups[$index19]->grantedSites = [];
foreach (array_keys($jsonData['groups'][$index19]['grantedSites']) as $index45) {
    $model->groups[$index19]->grantedSites[$index45] = $jsonData['groups'][$index19]['grantedSites'][$index45];

}

}


}

}



    return $model;
}
