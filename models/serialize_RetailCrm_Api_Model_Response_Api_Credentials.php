<?php

function serialize_RetailCrm_Api_Model_Response_Api_Credentials(RetailCrm\Api\Model\Response\Api\Credentials $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->credentials) {
    $jsonData["credentials"] = $model->credentials;
}
if (null !== $model->siteAccess) {
    $jsonData["siteAccess"] = $model->siteAccess;
}
if (null !== $model->sitesAvailable) {
    $jsonData["sitesAvailable"] = $model->sitesAvailable;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
