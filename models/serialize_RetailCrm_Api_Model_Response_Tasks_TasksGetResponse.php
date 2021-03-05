<?php

function serialize_RetailCrm_Api_Model_Response_Tasks_TasksGetResponse(RetailCrm\Api\Model\Response\Tasks\TasksGetResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->task) {
    $jsonData["task"] = [];
if (null !== $model->task->id) {
    $jsonData["task"]["id"] = $model->task->id;
}
if (null !== $model->task->text) {
    $jsonData["task"]["text"] = $model->task->text;
}
if (null !== $model->task->commentary) {
    $jsonData["task"]["commentary"] = $model->task->commentary;
}
if (null !== $model->task->datetime) {
    $jsonData["task"]["datetime"] = $model->task->datetime->format('Y-m-d H:i');;
}
if (null !== $model->task->createdAt) {
    $jsonData["task"]["createdAt"] = $model->task->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->task->complete) {
    $jsonData["task"]["complete"] = $model->task->complete;
}
if (null !== $model->task->creator) {
    $jsonData["task"]["creator"] = $model->task->creator;
}
if (null !== $model->task->performer) {
    $jsonData["task"]["performer"] = $model->task->performer;
}
if (null !== $model->task->performerId) {
    $jsonData["task"]["performerId"] = $model->task->performerId;
}
if (null !== $model->task->performerType) {
    $jsonData["task"]["performerType"] = $model->task->performerType;
}
if (null !== $model->task->customer) {
    $jsonData["task"]["customer"] = [];
if (null !== $model->task->customer->type) {
    $jsonData["task"]["customer"]["type"] = $model->task->customer->type;
}
if (null !== $model->task->customer->id) {
    $jsonData["task"]["customer"]["id"] = $model->task->customer->id;
}
if (null !== $model->task->customer->externalId) {
    $jsonData["task"]["customer"]["externalId"] = $model->task->customer->externalId;
}
if (null !== $model->task->customer->site) {
    $jsonData["task"]["customer"]["site"] = $model->task->customer->site;
}

if (0 === \count($jsonData["task"]["customer"])) {
    $jsonData["task"]["customer"] = $emptyObject;
}

}
if (null !== $model->task->order) {
    $jsonData["task"]["order"] = [];
if (null !== $model->task->order->id) {
    $jsonData["task"]["order"]["id"] = $model->task->order->id;
}
if (null !== $model->task->order->number) {
    $jsonData["task"]["order"]["number"] = $model->task->order->number;
}
if (null !== $model->task->order->externalId) {
    $jsonData["task"]["order"]["externalId"] = $model->task->order->externalId;
}
if (null !== $model->task->order->site) {
    $jsonData["task"]["order"]["site"] = $model->task->order->site;
}

if (0 === \count($jsonData["task"]["order"])) {
    $jsonData["task"]["order"] = $emptyObject;
}

}
if (null !== $model->task->phone) {
    $jsonData["task"]["phone"] = $model->task->phone;
}
if (null !== $model->task->phoneSite) {
    $jsonData["task"]["phoneSite"] = $model->task->phoneSite;
}
if (null !== $model->task->completedAt) {
    $jsonData["task"]["completedAt"] = $model->task->completedAt->format('Y-m-d H:i:s');;
}

if (0 === \count($jsonData["task"])) {
    $jsonData["task"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
