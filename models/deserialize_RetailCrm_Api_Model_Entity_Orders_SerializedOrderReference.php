<?php

function deserialize_RetailCrm_Api_Model_Entity_Orders_SerializedOrderReference(array $jsonData): RetailCrm\Api\Model\Entity\Orders\SerializedOrderReference
{
    
$model = new RetailCrm\Api\Model\Entity\Orders\SerializedOrderReference();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}



    return $model;
}
