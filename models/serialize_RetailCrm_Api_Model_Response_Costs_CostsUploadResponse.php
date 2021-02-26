<?php

function serialize_RetailCrm_Api_Model_Response_Costs_CostsUploadResponse(RetailCrm\Api\Model\Response\Costs\CostsUploadResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->uploadedCosts) {
    $jsonData["uploadedCosts"] = $model->uploadedCosts;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
