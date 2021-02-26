<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Delivery_PaymentType(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Delivery\PaymentType
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Delivery\PaymentType();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}



    return $model;
}
