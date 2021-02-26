<?php

function serialize_RetailCrm_Api_Model_ResponseData(RetailCrm\Api\Model\ResponseData $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->uri) {
    $jsonData["uri"] = $model->uri;
}
if (null !== $model->method) {
    $jsonData["method"] = $model->method;
}
if (null !== $model->response) {
    $jsonData["response"] = $model->response;
}
if (null !== $model->type) {
    $jsonData["type"] = $model->type;
}
if (null !== $model->response_model) {
    $jsonData["response_model"] = $model->response_model;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
