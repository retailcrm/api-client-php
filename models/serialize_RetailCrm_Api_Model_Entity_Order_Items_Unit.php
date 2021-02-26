<?php

function serialize_RetailCrm_Api_Model_Entity_Order_Items_Unit(RetailCrm\Api\Model\Entity\Order\Items\Unit $model, bool $useStdClass = true)
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
if (null !== $model->sym) {
    $jsonData["sym"] = $model->sym;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
