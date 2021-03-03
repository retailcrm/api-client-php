<?php

function serialize_RetailCrm_Api_Model_Callback_Response_Payments_PaymentRefundResponse(RetailCrm\Api\Model\Callback\Response\Payments\PaymentRefundResponse $model, bool $useStdClass = true)
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
if (null !== $model->result->status) {
    $jsonData["result"]["status"] = $model->result->status;
}
if (null !== $model->result->id) {
    $jsonData["result"]["id"] = $model->result->id;
}
if (null !== $model->result->comment) {
    $jsonData["result"]["comment"] = $model->result->comment;
}
if (null !== $model->result->amount) {
    $jsonData["result"]["amount"] = $model->result->amount;
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
