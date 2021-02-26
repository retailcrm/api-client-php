<?php

function serialize_RetailCrm_Api_Model_Entity_Delivery_StatusInfo(RetailCrm\Api\Model\Entity\Delivery\StatusInfo $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->updatedAt) {
    $jsonData["updatedAt"] = $model->updatedAt->format('Y-m-d\TH:i:sP');;
}
if (null !== $model->comment) {
    $jsonData["comment"] = $model->comment;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
