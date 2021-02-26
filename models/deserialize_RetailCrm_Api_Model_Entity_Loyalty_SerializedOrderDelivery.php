<?php

function deserialize_RetailCrm_Api_Model_Entity_Loyalty_SerializedOrderDelivery(array $jsonData): RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderDelivery
{
    
$model = new RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderDelivery();
if (isset($jsonData['cost'])) {
    $model->cost = (float) $jsonData['cost'];

}



    return $model;
}
