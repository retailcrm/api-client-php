<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Payments_ModuleApiRequest(RetailCrm\Api\Model\Callback\Entity\Payments\ModuleApiRequest $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->paymentId) {
    $jsonData["paymentId"] = $model->paymentId;
}
if (null !== $model->amount) {
    $jsonData["amount"] = $model->amount;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
