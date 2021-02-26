<?php

function serialize_RetailCrm_Api_Model_Response_Api_ApiVersionsResponse(RetailCrm\Api\Model\Response\Api\ApiVersionsResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->versions) {
    $jsonData["versions"] = $model->versions;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
