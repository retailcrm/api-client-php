<?php

function serialize_RetailCrm_Api_Model_Entity_Delivery_TimeInterval(RetailCrm\Api\Model\Entity\Delivery\TimeInterval $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->from) {
    $jsonData["from"] = $model->from->format('H:i');;
}
if (null !== $model->to) {
    $jsonData["to"] = $model->to->format('H:i');;
}
if (null !== $model->custom) {
    $jsonData["custom"] = $model->custom;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
