<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Payments_PaymentCreateResult(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Payments\PaymentCreateResult
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Payments\PaymentCreateResult();
if (isset($jsonData['paymentId'])) {
    $model->paymentId = $jsonData['paymentId'];

}
if (isset($jsonData['invoiceUrl'])) {
    $model->invoiceUrl = $jsonData['invoiceUrl'];

}
if (isset($jsonData['cancellable'])) {
    $model->cancellable = $jsonData['cancellable'];

}



    return $model;
}
