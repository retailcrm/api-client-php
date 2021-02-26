<?php

function serialize_RetailCrm_Api_Model_Entity_Integration_Delivery_Plate(RetailCrm\Api\Model\Entity\Integration\Delivery\Plate $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->type) {
    $jsonData["type"] = $model->type;
}
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->label) {
    $jsonData["label"] = $model->label;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
