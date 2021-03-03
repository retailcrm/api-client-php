<?php

function serialize_RetailCrm_Api_Model_Callback_Response_Payments_PaymentCreateResponse(RetailCrm\Api\Model\Callback\Response\Payments\PaymentCreateResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->errors) {
    $jsonData["errors"] = [];
foreach (array_keys($model->errors) as $index10) {
    $jsonData["errors"] = $model->errors;
}

}
if (null !== $model->errorMsg) {
    $jsonData["errorMsg"] = $model->errorMsg;
}
if (null !== $model->result) {
    $jsonData["result"] = [];
if (null !== $model->result->paymentId) {
    $jsonData["result"]["paymentId"] = $model->result->paymentId;
}
if (null !== $model->result->invoiceUrl) {
    $jsonData["result"]["invoiceUrl"] = $model->result->invoiceUrl;
}
if (null !== $model->result->cancellable) {
    $jsonData["result"]["cancellable"] = $model->result->cancellable;
}

if (0 === \count($jsonData["result"])) {
    $jsonData["result"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
