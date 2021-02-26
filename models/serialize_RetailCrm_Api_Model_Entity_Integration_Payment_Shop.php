<?php

function serialize_RetailCrm_Api_Model_Entity_Integration_Payment_Shop(RetailCrm\Api\Model\Entity\Integration\Payment\Shop $model, bool $useStdClass = true)
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
if (null !== $model->active) {
    $jsonData["active"] = $model->active;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
