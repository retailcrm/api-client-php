<?php

function deserialize_RetailCrm_Api_Model_Response_References_CostGroupsResponse(array $jsonData): RetailCrm\Api\Model\Response\References\CostGroupsResponse
{
    
$model = new RetailCrm\Api\Model\Response\References\CostGroupsResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['costGroups'])) {
    $model->costGroups = [];
foreach (array_keys($jsonData['costGroups']) as $index23) {
    
$model->costGroups[$index23] = new RetailCrm\Api\Model\Entity\References\CostGroup();
if (isset($jsonData['costGroups'][$index23]['code'])) {
    $model->costGroups[$index23]->code = $jsonData['costGroups'][$index23]['code'];

}
if (isset($jsonData['costGroups'][$index23]['name'])) {
    $model->costGroups[$index23]->name = $jsonData['costGroups'][$index23]['name'];

}
if (isset($jsonData['costGroups'][$index23]['ordering'])) {
    $model->costGroups[$index23]->ordering = $jsonData['costGroups'][$index23]['ordering'];

}
if (isset($jsonData['costGroups'][$index23]['active'])) {
    $model->costGroups[$index23]->active = $jsonData['costGroups'][$index23]['active'];

}
if (isset($jsonData['costGroups'][$index23]['color'])) {
    $model->costGroups[$index23]->color = $jsonData['costGroups'][$index23]['color'];

}


}

}



    return $model;
}
