<?php

function serialize_RetailCrm_Api_Model_Entity_Payments_ApiCheckResponseResult(RetailCrm\Api\Model\Entity\Payments\ApiCheckResponseResult $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->errorMsg) {
    $jsonData["errorMsg"] = $model->errorMsg;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
