<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Payments_ModuleApiRequest(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Payments\ModuleApiRequest
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Payments\ModuleApiRequest();
if (isset($jsonData['paymentId'])) {
    $model->paymentId = $jsonData['paymentId'];

}
if (isset($jsonData['amount'])) {
    $model->amount = (float) $jsonData['amount'];

}



    return $model;
}
