<?php

function serialize_RetailCrm_Api_Model_Response_References_MgChannelsResponse(RetailCrm\Api\Model\Response\References\MgChannelsResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->mgChannels) {
    $jsonData["mgChannels"] = [];
foreach (array_keys($model->mgChannels) as $index14) {
    $jsonData["mgChannels"][$index14] = [];
if (null !== $model->mgChannels[$index14]->id) {
    $jsonData["mgChannels"][$index14]["id"] = $model->mgChannels[$index14]->id;
}
if (null !== $model->mgChannels[$index14]->externalId) {
    $jsonData["mgChannels"][$index14]["externalId"] = $model->mgChannels[$index14]->externalId;
}
if (null !== $model->mgChannels[$index14]->type) {
    $jsonData["mgChannels"][$index14]["type"] = $model->mgChannels[$index14]->type;
}
if (null !== $model->mgChannels[$index14]->active) {
    $jsonData["mgChannels"][$index14]["active"] = $model->mgChannels[$index14]->active;
}
if (null !== $model->mgChannels[$index14]->name) {
    $jsonData["mgChannels"][$index14]["name"] = $model->mgChannels[$index14]->name;
}

if (0 === \count($jsonData["mgChannels"][$index14])) {
    $jsonData["mgChannels"][$index14] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
