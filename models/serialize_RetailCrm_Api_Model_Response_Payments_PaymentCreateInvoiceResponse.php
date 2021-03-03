<?php

function serialize_RetailCrm_Api_Model_Response_Payments_PaymentCreateInvoiceResponse(RetailCrm\Api\Model\Response\Payments\PaymentCreateInvoiceResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->result) {
    $jsonData["result"] = [];
if (null !== $model->result->link) {
    $jsonData["result"]["link"] = $model->result->link;
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
