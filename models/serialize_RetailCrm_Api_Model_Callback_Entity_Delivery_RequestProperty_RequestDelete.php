<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Delivery_RequestProperty_RequestDelete(RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty\RequestDelete $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->deliveryId) {
    $jsonData["deliveryId"] = $model->deliveryId;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
