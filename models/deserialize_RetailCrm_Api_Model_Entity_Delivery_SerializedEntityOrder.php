<?php

function deserialize_RetailCrm_Api_Model_Entity_Delivery_SerializedEntityOrder(array $jsonData): RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder
{
    
$model = new RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['number'])) {
    $model->number = $jsonData['number'];

}



    return $model;
}
