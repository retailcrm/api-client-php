<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Store_OrderDataModel(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Store\OrderDataModel
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Store\OrderDataModel();
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
