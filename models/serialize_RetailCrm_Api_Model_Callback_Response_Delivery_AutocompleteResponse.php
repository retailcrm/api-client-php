<?php

function serialize_RetailCrm_Api_Model_Callback_Response_Delivery_AutocompleteResponse(RetailCrm\Api\Model\Callback\Response\Delivery\AutocompleteResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->value) {
    $jsonData["value"] = $model->value;
}
if (null !== $model->label) {
    $jsonData["label"] = $model->label;
}
if (null !== $model->result) {
    $jsonData["result"] = [];
if (null !== $model->result->value) {
    $jsonData["result"]["value"] = $model->result->value;
}
if (null !== $model->result->label) {
    $jsonData["result"]["label"] = $model->result->label;
}
if (null !== $model->result->description) {
    $jsonData["result"]["description"] = $model->result->description;
}

if (0 === \count($jsonData["result"])) {
    $jsonData["result"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
