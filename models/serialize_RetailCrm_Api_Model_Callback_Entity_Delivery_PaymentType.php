<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Delivery_PaymentType(RetailCrm\Api\Model\Callback\Entity\Delivery\PaymentType $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
