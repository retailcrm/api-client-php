<?php

function deserialize_RetailCrm_Api_Model_Entity_Costs_CostOrder(array $jsonData): RetailCrm\Api\Model\Entity\Costs\CostOrder
{
    
$model = new RetailCrm\Api\Model\Entity\Costs\CostOrder();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['number'])) {
    $model->number = $jsonData['number'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}



    return $model;
}
