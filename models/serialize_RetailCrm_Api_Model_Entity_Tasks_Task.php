<?php

function serialize_RetailCrm_Api_Model_Entity_Tasks_Task(RetailCrm\Api\Model\Entity\Tasks\Task $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->text) {
    $jsonData["text"] = $model->text;
}
if (null !== $model->commentary) {
    $jsonData["commentary"] = $model->commentary;
}
if (null !== $model->datetime) {
    $jsonData["datetime"] = $model->datetime->format('Y-m-d H:i');;
}
if (null !== $model->createdAt) {
    $jsonData["createdAt"] = $model->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->complete) {
    $jsonData["complete"] = $model->complete;
}
if (null !== $model->creator) {
    $jsonData["creator"] = $model->creator;
}
if (null !== $model->performer) {
    $jsonData["performer"] = $model->performer;
}
if (null !== $model->performerId) {
    $jsonData["performerId"] = $model->performerId;
}
if (null !== $model->performerType) {
    $jsonData["performerType"] = $model->performerType;
}
if (null !== $model->customer) {
    $jsonData["customer"] = [];
if (null !== $model->customer->type) {
    $jsonData["customer"]["type"] = $model->customer->type;
}
if (null !== $model->customer->id) {
    $jsonData["customer"]["id"] = $model->customer->id;
}
if (null !== $model->customer->externalId) {
    $jsonData["customer"]["externalId"] = $model->customer->externalId;
}
if (null !== $model->customer->site) {
    $jsonData["customer"]["site"] = $model->customer->site;
}

if (0 === \count($jsonData["customer"])) {
    $jsonData["customer"] = $emptyObject;
}

}
if (null !== $model->order) {
    $jsonData["order"] = [];
if (null !== $model->order->id) {
    $jsonData["order"]["id"] = $model->order->id;
}
if (null !== $model->order->number) {
    $jsonData["order"]["number"] = $model->order->number;
}
if (null !== $model->order->externalId) {
    $jsonData["order"]["externalId"] = $model->order->externalId;
}
if (null !== $model->order->site) {
    $jsonData["order"]["site"] = $model->order->site;
}

if (0 === \count($jsonData["order"])) {
    $jsonData["order"] = $emptyObject;
}

}
if (null !== $model->phone) {
    $jsonData["phone"] = $model->phone;
}
if (null !== $model->phoneSite) {
    $jsonData["phoneSite"] = $model->phoneSite;
}
if (null !== $model->completedAt) {
    $jsonData["completedAt"] = $model->completedAt->format('Y-m-d H:i:s');;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
