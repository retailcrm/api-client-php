<?php

function serialize_RetailCrm_Api_Model_Entity_Integration_Delivery_PaymentType(RetailCrm\Api\Model\Entity\Integration\Delivery\PaymentType $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->active) {
    $jsonData["active"] = $model->active;
}
if (null !== $model->cod) {
    $jsonData["cod"] = $model->cod;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
