<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Payments_PaymentCreateResult(RetailCrm\Api\Model\Callback\Entity\Payments\PaymentCreateResult $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->paymentId) {
    $jsonData["paymentId"] = $model->paymentId;
}
if (null !== $model->invoiceUrl) {
    $jsonData["invoiceUrl"] = $model->invoiceUrl;
}
if (null !== $model->cancellable) {
    $jsonData["cancellable"] = $model->cancellable;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
