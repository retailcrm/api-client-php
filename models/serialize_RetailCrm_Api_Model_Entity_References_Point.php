<?php

function serialize_RetailCrm_Api_Model_Entity_References_Point(RetailCrm\Api\Model\Entity\References\Point $model, bool $useStdClass = true)
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
