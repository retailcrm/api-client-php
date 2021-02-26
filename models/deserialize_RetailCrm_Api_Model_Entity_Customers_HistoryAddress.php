<?php

function deserialize_RetailCrm_Api_Model_Entity_Customers_HistoryAddress(array $jsonData): RetailCrm\Api\Model\Entity\Customers\HistoryAddress
{
    
$model = new RetailCrm\Api\Model\Entity\Customers\HistoryAddress();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['isMain'])) {
    $model->isMain = $jsonData['isMain'];

}



    return $model;
}
