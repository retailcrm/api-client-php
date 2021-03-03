<?php

function deserialize_RetailCrm_Api_Model_Callback_Response_Payments_PaymentCreateResponse(array $jsonData): RetailCrm\Api\Model\Callback\Response\Payments\PaymentCreateResponse
{
    
$model = new RetailCrm\Api\Model\Callback\Response\Payments\PaymentCreateResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['errors'])) {
    $model->errors = [];
foreach (array_keys($jsonData['errors']) as $index19) {
    $model->errors[$index19] = $jsonData['errors'][$index19];

}

}
if (isset($jsonData['errorMsg'])) {
    $model->errorMsg = $jsonData['errorMsg'];

}
if (isset($jsonData['result'])) {
    
$model->result = new RetailCrm\Api\Model\Callback\Entity\Payments\PaymentCreateResult();
if (isset($jsonData['result']['paymentId'])) {
    $model->result->paymentId = $jsonData['result']['paymentId'];

}
if (isset($jsonData['result']['invoiceUrl'])) {
    $model->result->invoiceUrl = $jsonData['result']['invoiceUrl'];

}
if (isset($jsonData['result']['cancellable'])) {
    $model->result->cancellable = $jsonData['result']['cancellable'];

}


}



    return $model;
}
