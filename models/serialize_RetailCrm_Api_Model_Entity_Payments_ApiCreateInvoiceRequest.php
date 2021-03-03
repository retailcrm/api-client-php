<?php

function serialize_RetailCrm_Api_Model_Entity_Payments_ApiCreateInvoiceRequest(RetailCrm\Api\Model\Entity\Payments\ApiCreateInvoiceRequest $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->paymentId) {
    $jsonData["paymentId"] = $model->paymentId;
}
if (null !== $model->returnUrl) {
    $jsonData["returnUrl"] = $model->returnUrl;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
