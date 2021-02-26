<?php

function serialize_RetailCrm_Api_Model_Entity_Customers_CustomerTag(RetailCrm\Api\Model\Entity\Customers\CustomerTag $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->color) {
    $jsonData["color"] = $model->color;
}
if (null !== $model->attached) {
    $jsonData["attached"] = $model->attached;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
