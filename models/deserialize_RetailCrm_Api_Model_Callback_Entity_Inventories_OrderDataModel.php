<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Inventories_OrderDataModel(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Inventories\OrderDataModel
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Inventories\OrderDataModel();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['site'])) {
    $model->site = $jsonData['site'];

}



    return $model;
}
