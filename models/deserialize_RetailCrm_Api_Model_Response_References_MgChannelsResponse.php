<?php

function deserialize_RetailCrm_Api_Model_Response_References_MgChannelsResponse(array $jsonData): RetailCrm\Api\Model\Response\References\MgChannelsResponse
{
    
$model = new RetailCrm\Api\Model\Response\References\MgChannelsResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['mgChannels'])) {
    $model->mgChannels = [];
foreach (array_keys($jsonData['mgChannels']) as $index23) {
    
$model->mgChannels[$index23] = new RetailCrm\Api\Model\Entity\References\MGChannel();
if (isset($jsonData['mgChannels'][$index23]['id'])) {
    $model->mgChannels[$index23]->id = $jsonData['mgChannels'][$index23]['id'];

}
if (isset($jsonData['mgChannels'][$index23]['externalId'])) {
    $model->mgChannels[$index23]->externalId = $jsonData['mgChannels'][$index23]['externalId'];

}
if (isset($jsonData['mgChannels'][$index23]['type'])) {
    $model->mgChannels[$index23]->type = $jsonData['mgChannels'][$index23]['type'];

}
if (isset($jsonData['mgChannels'][$index23]['active'])) {
    $model->mgChannels[$index23]->active = $jsonData['mgChannels'][$index23]['active'];

}
if (isset($jsonData['mgChannels'][$index23]['name'])) {
    $model->mgChannels[$index23]->name = $jsonData['mgChannels'][$index23]['name'];

}


}

}



    return $model;
}
