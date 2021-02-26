<?php

function serialize_RetailCrm_Api_Model_Entity_Costs_Cost(RetailCrm\Api\Model\Entity\Costs\Cost $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->source) {
    $jsonData["source"] = [];
if (null !== $model->source->source) {
    $jsonData["source"]["source"] = $model->source->source;
}
if (null !== $model->source->medium) {
    $jsonData["source"]["medium"] = $model->source->medium;
}
if (null !== $model->source->campaign) {
    $jsonData["source"]["campaign"] = $model->source->campaign;
}
if (null !== $model->source->keyword) {
    $jsonData["source"]["keyword"] = $model->source->keyword;
}
if (null !== $model->source->content) {
    $jsonData["source"]["content"] = $model->source->content;
}

if (0 === \count($jsonData["source"])) {
    $jsonData["source"] = $emptyObject;
}

}
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->dateFrom) {
    $jsonData["dateFrom"] = $model->dateFrom->format('Y-m-d');;
}
if (null !== $model->dateTo) {
    $jsonData["dateTo"] = $model->dateTo->format('Y-m-d');;
}
if (null !== $model->summ) {
    $jsonData["summ"] = $model->summ;
}
if (null !== $model->costItem) {
    $jsonData["costItem"] = $model->costItem;
}
if (null !== $model->comment) {
    $jsonData["comment"] = $model->comment;
}
if (null !== $model->createdAt) {
    $jsonData["createdAt"] = $model->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->createdBy) {
    $jsonData["createdBy"] = $model->createdBy;
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

if (0 === \count($jsonData["order"])) {
    $jsonData["order"] = $emptyObject;
}

}
if (null !== $model->userId) {
    $jsonData["userId"] = $model->userId;
}
if (null !== $model->sites) {
    $jsonData["sites"] = $model->sites;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
