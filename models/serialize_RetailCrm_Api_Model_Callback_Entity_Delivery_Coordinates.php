<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Delivery_Coordinates(RetailCrm\Api\Model\Callback\Entity\Delivery\Coordinates $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->latitude) {
    $jsonData["latitude"] = $model->latitude;
}
if (null !== $model->longitude) {
    $jsonData["longitude"] = $model->longitude;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
