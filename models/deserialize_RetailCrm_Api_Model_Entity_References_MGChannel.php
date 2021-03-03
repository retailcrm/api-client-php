<?php

function deserialize_RetailCrm_Api_Model_Entity_References_MGChannel(array $jsonData): RetailCrm\Api\Model\Entity\References\MGChannel
{
    
$model = new RetailCrm\Api\Model\Entity\References\MGChannel();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['type'])) {
    $model->type = $jsonData['type'];

}
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}



    return $model;
}
