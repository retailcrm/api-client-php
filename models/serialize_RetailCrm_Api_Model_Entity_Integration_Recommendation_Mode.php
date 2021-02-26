<?php

function serialize_RetailCrm_Api_Model_Entity_Integration_Recommendation_Mode(RetailCrm\Api\Model\Entity\Integration\Recommendation\Mode $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->names) {
    $jsonData["names"] = $model->names;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
