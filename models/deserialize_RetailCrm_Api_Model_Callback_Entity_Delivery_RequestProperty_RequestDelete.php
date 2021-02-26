<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Delivery_RequestProperty_RequestDelete(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty\RequestDelete
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty\RequestDelete();
if (isset($jsonData['deliveryId'])) {
    $model->deliveryId = $jsonData['deliveryId'];

}



    return $model;
}
