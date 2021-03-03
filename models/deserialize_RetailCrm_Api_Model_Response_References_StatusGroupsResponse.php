<?php

function deserialize_RetailCrm_Api_Model_Response_References_StatusGroupsResponse(array $jsonData): RetailCrm\Api\Model\Response\References\StatusGroupsResponse
{
    
$model = new RetailCrm\Api\Model\Response\References\StatusGroupsResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['statusGroups'])) {
    $model->statusGroups = [];
foreach (array_keys($jsonData['statusGroups']) as $index25) {
    
$model->statusGroups[$index25] = new RetailCrm\Api\Model\Entity\References\StatusGroup();
if (isset($jsonData['statusGroups'][$index25]['name'])) {
    $model->statusGroups[$index25]->name = $jsonData['statusGroups'][$index25]['name'];

}
if (isset($jsonData['statusGroups'][$index25]['code'])) {
    $model->statusGroups[$index25]->code = $jsonData['statusGroups'][$index25]['code'];

}
if (isset($jsonData['statusGroups'][$index25]['active'])) {
    $model->statusGroups[$index25]->active = $jsonData['statusGroups'][$index25]['active'];

}
if (isset($jsonData['statusGroups'][$index25]['ordering'])) {
    $model->statusGroups[$index25]->ordering = $jsonData['statusGroups'][$index25]['ordering'];

}
if (isset($jsonData['statusGroups'][$index25]['process'])) {
    $model->statusGroups[$index25]->process = $jsonData['statusGroups'][$index25]['process'];

}
if (isset($jsonData['statusGroups'][$index25]['statuses'])) {
    $model->statusGroups[$index25]->statuses = [];
foreach (array_keys($jsonData['statusGroups'][$index25]['statuses']) as $index47) {
    $model->statusGroups[$index25]->statuses[$index47] = $jsonData['statusGroups'][$index25]['statuses'][$index47];

}

}


}

}



    return $model;
}
