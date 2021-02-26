<?php

function deserialize_RetailCrm_Api_Model_Entity_Order_SerializedOrderReference(array $jsonData): RetailCrm\Api\Model\Entity\Order\SerializedOrderReference
{
    
$model = new RetailCrm\Api\Model\Entity\Order\SerializedOrderReference();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}



    return $model;
}
