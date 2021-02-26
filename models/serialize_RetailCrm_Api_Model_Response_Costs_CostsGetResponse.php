<?php

function serialize_RetailCrm_Api_Model_Response_Costs_CostsGetResponse(RetailCrm\Api\Model\Response\Costs\CostsGetResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->cost) {
    $jsonData["cost"] = [];
if (null !== $model->cost->source) {
    $jsonData["cost"]["source"] = [];
if (null !== $model->cost->source->source) {
    $jsonData["cost"]["source"]["source"] = $model->cost->source->source;
}
if (null !== $model->cost->source->medium) {
    $jsonData["cost"]["source"]["medium"] = $model->cost->source->medium;
}
if (null !== $model->cost->source->campaign) {
    $jsonData["cost"]["source"]["campaign"] = $model->cost->source->campaign;
}
if (null !== $model->cost->source->keyword) {
    $jsonData["cost"]["source"]["keyword"] = $model->cost->source->keyword;
}
if (null !== $model->cost->source->content) {
    $jsonData["cost"]["source"]["content"] = $model->cost->source->content;
}

if (0 === \count($jsonData["cost"]["source"])) {
    $jsonData["cost"]["source"] = $emptyObject;
}

}
if (null !== $model->cost->id) {
    $jsonData["cost"]["id"] = $model->cost->id;
}
if (null !== $model->cost->dateFrom) {
    $jsonData["cost"]["dateFrom"] = $model->cost->dateFrom->format('Y-m-d');;
}
if (null !== $model->cost->dateTo) {
    $jsonData["cost"]["dateTo"] = $model->cost->dateTo->format('Y-m-d');;
}
if (null !== $model->cost->summ) {
    $jsonData["cost"]["summ"] = $model->cost->summ;
}
if (null !== $model->cost->costItem) {
    $jsonData["cost"]["costItem"] = $model->cost->costItem;
}
if (null !== $model->cost->comment) {
    $jsonData["cost"]["comment"] = $model->cost->comment;
}
if (null !== $model->cost->createdAt) {
    $jsonData["cost"]["createdAt"] = $model->cost->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->cost->createdBy) {
    $jsonData["cost"]["createdBy"] = $model->cost->createdBy;
}
if (null !== $model->cost->order) {
    $jsonData["cost"]["order"] = [];
if (null !== $model->cost->order->id) {
    $jsonData["cost"]["order"]["id"] = $model->cost->order->id;
}
if (null !== $model->cost->order->number) {
    $jsonData["cost"]["order"]["number"] = $model->cost->order->number;
}
if (null !== $model->cost->order->externalId) {
    $jsonData["cost"]["order"]["externalId"] = $model->cost->order->externalId;
}

if (0 === \count($jsonData["cost"]["order"])) {
    $jsonData["cost"]["order"] = $emptyObject;
}

}
if (null !== $model->cost->userId) {
    $jsonData["cost"]["userId"] = $model->cost->userId;
}
if (null !== $model->cost->sites) {
    $jsonData["cost"]["sites"] = $model->cost->sites;
}

if (0 === \count($jsonData["cost"])) {
    $jsonData["cost"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
