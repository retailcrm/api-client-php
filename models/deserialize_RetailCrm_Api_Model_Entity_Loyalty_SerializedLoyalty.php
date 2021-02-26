<?php

function deserialize_RetailCrm_Api_Model_Entity_Loyalty_SerializedLoyalty(array $jsonData): RetailCrm\Api\Model\Entity\Loyalty\SerializedLoyalty
{
    
$model = new RetailCrm\Api\Model\Entity\Loyalty\SerializedLoyalty();
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['chargeRate'])) {
    $model->chargeRate = (float) $jsonData['chargeRate'];

}



    return $model;
}
