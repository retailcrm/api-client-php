<?php

function serialize_RetailCrm_Api_Model_Response_Costs_CostsDeleteResponse(RetailCrm\Api\Model\Response\Costs\CostsDeleteResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->count) {
    $jsonData["count"] = $model->count;
}
if (null !== $model->notRemovedIds) {
    $jsonData["notRemovedIds"] = $model->notRemovedIds;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
