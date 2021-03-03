<?php

function serialize_RetailCrm_Api_Model_Response_References_CostItemsResponse(RetailCrm\Api\Model\Response\References\CostItemsResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->costItems) {
    $jsonData["costItems"] = [];
foreach (array_keys($model->costItems) as $index13) {
    $jsonData["costItems"][$index13] = [];
if (null !== $model->costItems[$index13]->source) {
    $jsonData["costItems"][$index13]["source"] = [];
if (null !== $model->costItems[$index13]->source->source) {
    $jsonData["costItems"][$index13]["source"]["source"] = $model->costItems[$index13]->source->source;
}
if (null !== $model->costItems[$index13]->source->medium) {
    $jsonData["costItems"][$index13]["source"]["medium"] = $model->costItems[$index13]->source->medium;
}
if (null !== $model->costItems[$index13]->source->campaign) {
    $jsonData["costItems"][$index13]["source"]["campaign"] = $model->costItems[$index13]->source->campaign;
}
if (null !== $model->costItems[$index13]->source->keyword) {
    $jsonData["costItems"][$index13]["source"]["keyword"] = $model->costItems[$index13]->source->keyword;
}
if (null !== $model->costItems[$index13]->source->content) {
    $jsonData["costItems"][$index13]["source"]["content"] = $model->costItems[$index13]->source->content;
}

if (0 === \count($jsonData["costItems"][$index13]["source"])) {
    $jsonData["costItems"][$index13]["source"] = $emptyObject;
}

}
if (null !== $model->costItems[$index13]->code) {
    $jsonData["costItems"][$index13]["code"] = $model->costItems[$index13]->code;
}
if (null !== $model->costItems[$index13]->name) {
    $jsonData["costItems"][$index13]["name"] = $model->costItems[$index13]->name;
}
if (null !== $model->costItems[$index13]->group) {
    $jsonData["costItems"][$index13]["group"] = $model->costItems[$index13]->group;
}
if (null !== $model->costItems[$index13]->ordering) {
    $jsonData["costItems"][$index13]["ordering"] = $model->costItems[$index13]->ordering;
}
if (null !== $model->costItems[$index13]->active) {
    $jsonData["costItems"][$index13]["active"] = $model->costItems[$index13]->active;
}
if (null !== $model->costItems[$index13]->appliesToOrders) {
    $jsonData["costItems"][$index13]["appliesToOrders"] = $model->costItems[$index13]->appliesToOrders;
}
if (null !== $model->costItems[$index13]->type) {
    $jsonData["costItems"][$index13]["type"] = $model->costItems[$index13]->type;
}
if (null !== $model->costItems[$index13]->appliesToUsers) {
    $jsonData["costItems"][$index13]["appliesToUsers"] = $model->costItems[$index13]->appliesToUsers;
}

if (0 === \count($jsonData["costItems"][$index13])) {
    $jsonData["costItems"][$index13] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
