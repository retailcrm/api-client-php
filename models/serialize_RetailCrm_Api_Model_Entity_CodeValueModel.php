<?php

function serialize_RetailCrm_Api_Model_Entity_CodeValueModel(RetailCrm\Api\Model\Entity\CodeValueModel $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->value) {
    $jsonData["value"] = $model->value;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
