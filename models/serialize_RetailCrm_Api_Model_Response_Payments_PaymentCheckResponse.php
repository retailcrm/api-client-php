<?php

function serialize_RetailCrm_Api_Model_Response_Payments_PaymentCheckResponse(RetailCrm\Api\Model\Response\Payments\PaymentCheckResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->result) {
    $jsonData["result"] = [];
if (null !== $model->result->success) {
    $jsonData["result"]["success"] = $model->result->success;
}
if (null !== $model->result->errorMsg) {
    $jsonData["result"]["errorMsg"] = $model->result->errorMsg;
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
