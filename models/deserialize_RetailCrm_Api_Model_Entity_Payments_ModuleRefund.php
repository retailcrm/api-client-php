<?php

function deserialize_RetailCrm_Api_Model_Entity_Payments_ModuleRefund(array $jsonData): RetailCrm\Api\Model\Entity\Payments\ModuleRefund
{
    
$model = new RetailCrm\Api\Model\Entity\Payments\ModuleRefund();
if (isset($jsonData['status'])) {
    $model->status = $jsonData['status'];

}
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['comment'])) {
    $model->comment = $jsonData['comment'];

}
if (isset($jsonData['amount'])) {
    $model->amount = (float) $jsonData['amount'];

}



    return $model;
}
