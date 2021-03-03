<?php

function deserialize_RetailCrm_Api_Model_Response_References_StatusesResponse(array $jsonData): RetailCrm\Api\Model\Response\References\StatusesResponse
{
    
$model = new RetailCrm\Api\Model\Response\References\StatusesResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['statuses'])) {
    $model->statuses = [];
foreach (array_keys($jsonData['statuses']) as $index21) {
    
$model->statuses[$index21] = new RetailCrm\Api\Model\Entity\References\Status();
if (isset($jsonData['statuses'][$index21]['name'])) {
    $model->statuses[$index21]->name = $jsonData['statuses'][$index21]['name'];

}
if (isset($jsonData['statuses'][$index21]['code'])) {
    $model->statuses[$index21]->code = $jsonData['statuses'][$index21]['code'];

}
if (isset($jsonData['statuses'][$index21]['active'])) {
    $model->statuses[$index21]->active = $jsonData['statuses'][$index21]['active'];

}
if (isset($jsonData['statuses'][$index21]['ordering'])) {
    $model->statuses[$index21]->ordering = $jsonData['statuses'][$index21]['ordering'];

}
if (isset($jsonData['statuses'][$index21]['group'])) {
    $model->statuses[$index21]->group = $jsonData['statuses'][$index21]['group'];

}


}

}



    return $model;
}
