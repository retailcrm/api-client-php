<?php

function deserialize_RetailCrm_Api_Model_Entity_Integration_Delivery_PaymentType(array $jsonData): RetailCrm\Api\Model\Entity\Integration\Delivery\PaymentType
{
    
$model = new RetailCrm\Api\Model\Entity\Integration\Delivery\PaymentType();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

}
if (isset($jsonData['cod'])) {
    $model->cod = $jsonData['cod'];

}



    return $model;
}
