<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Delivery_RequestProperty_RequestPrint(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty\RequestPrint
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty\RequestPrint();
if (isset($jsonData['entityType'])) {
    $model->entityType = $jsonData['entityType'];

}
if (isset($jsonData['type'])) {
    $model->type = $jsonData['type'];

}
if (isset($jsonData['deliveryIds'])) {
    $model->deliveryIds = $jsonData['deliveryIds'];

}



    return $model;
}
