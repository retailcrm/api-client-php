<?php

function serialize_RetailCrm_Api_Model_Entity_References_StorePhone(RetailCrm\Api\Model\Entity\References\StorePhone $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->number) {
    $jsonData["number"] = $model->number;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
