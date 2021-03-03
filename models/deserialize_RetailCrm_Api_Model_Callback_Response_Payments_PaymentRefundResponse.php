<?php

function deserialize_RetailCrm_Api_Model_Callback_Response_Payments_PaymentRefundResponse(array $jsonData): RetailCrm\Api\Model\Callback\Response\Payments\PaymentRefundResponse
{
    
$model = new RetailCrm\Api\Model\Callback\Response\Payments\PaymentRefundResponse();
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
    
$model->result = new RetailCrm\Api\Model\Callback\Entity\Payments\ModuleRefund();
if (isset($jsonData['result']['status'])) {
    $model->result->status = $jsonData['result']['status'];

}
if (isset($jsonData['result']['id'])) {
    $model->result->id = $jsonData['result']['id'];

}
if (isset($jsonData['result']['comment'])) {
    $model->result->comment = $jsonData['result']['comment'];

}
if (isset($jsonData['result']['amount'])) {
    $model->result->amount = (float) $jsonData['result']['amount'];

}


}



    return $model;
}
