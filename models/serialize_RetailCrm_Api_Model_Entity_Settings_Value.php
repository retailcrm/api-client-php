<?php

function serialize_RetailCrm_Api_Model_Entity_Settings_Value(RetailCrm\Api\Model\Entity\Settings\Value $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->value) {
    $jsonData["value"] = $model->value;
}
if (null !== $model->updatedAt) {
    $jsonData["updated_at"] = $model->updatedAt->format('Y-m-d H:i:s');;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
