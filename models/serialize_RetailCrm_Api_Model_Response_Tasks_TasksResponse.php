<?php

function serialize_RetailCrm_Api_Model_Response_Tasks_TasksResponse(RetailCrm\Api\Model\Response\Tasks\TasksResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->pagination) {
    $jsonData["pagination"] = [];
if (null !== $model->pagination->limit) {
    $jsonData["pagination"]["limit"] = $model->pagination->limit;
}
if (null !== $model->pagination->totalCount) {
    $jsonData["pagination"]["totalCount"] = $model->pagination->totalCount;
}
if (null !== $model->pagination->currentPage) {
    $jsonData["pagination"]["currentPage"] = $model->pagination->currentPage;
}
if (null !== $model->pagination->totalPageCount) {
    $jsonData["pagination"]["totalPageCount"] = $model->pagination->totalPageCount;
}

if (0 === \count($jsonData["pagination"])) {
    $jsonData["pagination"] = $emptyObject;
}

}
if (null !== $model->tasks) {
    $jsonData["tasks"] = [];
foreach (array_keys($model->tasks) as $index9) {
    $jsonData["tasks"][$index9] = [];
if (null !== $model->tasks[$index9]->id) {
    $jsonData["tasks"][$index9]["id"] = $model->tasks[$index9]->id;
}
if (null !== $model->tasks[$index9]->text) {
    $jsonData["tasks"][$index9]["text"] = $model->tasks[$index9]->text;
}
if (null !== $model->tasks[$index9]->commentary) {
    $jsonData["tasks"][$index9]["commentary"] = $model->tasks[$index9]->commentary;
}
if (null !== $model->tasks[$index9]->datetime) {
    $jsonData["tasks"][$index9]["datetime"] = $model->tasks[$index9]->datetime->format('Y-m-d H:i');;
}
if (null !== $model->tasks[$index9]->createdAt) {
    $jsonData["tasks"][$index9]["createdAt"] = $model->tasks[$index9]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->tasks[$index9]->complete) {
    $jsonData["tasks"][$index9]["complete"] = $model->tasks[$index9]->complete;
}
if (null !== $model->tasks[$index9]->creator) {
    $jsonData["tasks"][$index9]["creator"] = $model->tasks[$index9]->creator;
}
if (null !== $model->tasks[$index9]->performer) {
    $jsonData["tasks"][$index9]["performer"] = $model->tasks[$index9]->performer;
}
if (null !== $model->tasks[$index9]->performerId) {
    $jsonData["tasks"][$index9]["performerId"] = $model->tasks[$index9]->performerId;
}
if (null !== $model->tasks[$index9]->performerType) {
    $jsonData["tasks"][$index9]["performerType"] = $model->tasks[$index9]->performerType;
}
if (null !== $model->tasks[$index9]->customer) {
    $jsonData["tasks"][$index9]["customer"] = [];
if (null !== $model->tasks[$index9]->customer->type) {
    $jsonData["tasks"][$index9]["customer"]["type"] = $model->tasks[$index9]->customer->type;
}
if (null !== $model->tasks[$index9]->customer->id) {
    $jsonData["tasks"][$index9]["customer"]["id"] = $model->tasks[$index9]->customer->id;
}
if (null !== $model->tasks[$index9]->customer->externalId) {
    $jsonData["tasks"][$index9]["customer"]["externalId"] = $model->tasks[$index9]->customer->externalId;
}
if (null !== $model->tasks[$index9]->customer->site) {
    $jsonData["tasks"][$index9]["customer"]["site"] = $model->tasks[$index9]->customer->site;
}

if (0 === \count($jsonData["tasks"][$index9]["customer"])) {
    $jsonData["tasks"][$index9]["customer"] = $emptyObject;
}

}
if (null !== $model->tasks[$index9]->order) {
    $jsonData["tasks"][$index9]["order"] = [];
if (null !== $model->tasks[$index9]->order->id) {
    $jsonData["tasks"][$index9]["order"]["id"] = $model->tasks[$index9]->order->id;
}
if (null !== $model->tasks[$index9]->order->number) {
    $jsonData["tasks"][$index9]["order"]["number"] = $model->tasks[$index9]->order->number;
}
if (null !== $model->tasks[$index9]->order->externalId) {
    $jsonData["tasks"][$index9]["order"]["externalId"] = $model->tasks[$index9]->order->externalId;
}
if (null !== $model->tasks[$index9]->order->site) {
    $jsonData["tasks"][$index9]["order"]["site"] = $model->tasks[$index9]->order->site;
}

if (0 === \count($jsonData["tasks"][$index9]["order"])) {
    $jsonData["tasks"][$index9]["order"] = $emptyObject;
}

}
if (null !== $model->tasks[$index9]->phone) {
    $jsonData["tasks"][$index9]["phone"] = $model->tasks[$index9]->phone;
}
if (null !== $model->tasks[$index9]->phoneSite) {
    $jsonData["tasks"][$index9]["phoneSite"] = $model->tasks[$index9]->phoneSite;
}
if (null !== $model->tasks[$index9]->completedAt) {
    $jsonData["tasks"][$index9]["completedAt"] = $model->tasks[$index9]->completedAt->format('Y-m-d H:i:s');;
}

if (0 === \count($jsonData["tasks"][$index9])) {
    $jsonData["tasks"][$index9] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
