<?php

function serialize_RetailCrm_Api_Model_Response_Costs_CostsResponse(RetailCrm\Api\Model\Response\Costs\CostsResponse $model, bool $useStdClass = true)
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
if (null !== $model->costs) {
    $jsonData["costs"] = [];
foreach (array_keys($model->costs) as $index9) {
    $jsonData["costs"][$index9] = [];
if (null !== $model->costs[$index9]->source) {
    $jsonData["costs"][$index9]["source"] = [];
if (null !== $model->costs[$index9]->source->source) {
    $jsonData["costs"][$index9]["source"]["source"] = $model->costs[$index9]->source->source;
}
if (null !== $model->costs[$index9]->source->medium) {
    $jsonData["costs"][$index9]["source"]["medium"] = $model->costs[$index9]->source->medium;
}
if (null !== $model->costs[$index9]->source->campaign) {
    $jsonData["costs"][$index9]["source"]["campaign"] = $model->costs[$index9]->source->campaign;
}
if (null !== $model->costs[$index9]->source->keyword) {
    $jsonData["costs"][$index9]["source"]["keyword"] = $model->costs[$index9]->source->keyword;
}
if (null !== $model->costs[$index9]->source->content) {
    $jsonData["costs"][$index9]["source"]["content"] = $model->costs[$index9]->source->content;
}

if (0 === \count($jsonData["costs"][$index9]["source"])) {
    $jsonData["costs"][$index9]["source"] = $emptyObject;
}

}
if (null !== $model->costs[$index9]->id) {
    $jsonData["costs"][$index9]["id"] = $model->costs[$index9]->id;
}
if (null !== $model->costs[$index9]->dateFrom) {
    $jsonData["costs"][$index9]["dateFrom"] = $model->costs[$index9]->dateFrom->format('Y-m-d');;
}
if (null !== $model->costs[$index9]->dateTo) {
    $jsonData["costs"][$index9]["dateTo"] = $model->costs[$index9]->dateTo->format('Y-m-d');;
}
if (null !== $model->costs[$index9]->summ) {
    $jsonData["costs"][$index9]["summ"] = $model->costs[$index9]->summ;
}
if (null !== $model->costs[$index9]->costItem) {
    $jsonData["costs"][$index9]["costItem"] = $model->costs[$index9]->costItem;
}
if (null !== $model->costs[$index9]->comment) {
    $jsonData["costs"][$index9]["comment"] = $model->costs[$index9]->comment;
}
if (null !== $model->costs[$index9]->createdAt) {
    $jsonData["costs"][$index9]["createdAt"] = $model->costs[$index9]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->costs[$index9]->createdBy) {
    $jsonData["costs"][$index9]["createdBy"] = $model->costs[$index9]->createdBy;
}
if (null !== $model->costs[$index9]->order) {
    $jsonData["costs"][$index9]["order"] = [];
if (null !== $model->costs[$index9]->order->id) {
    $jsonData["costs"][$index9]["order"]["id"] = $model->costs[$index9]->order->id;
}
if (null !== $model->costs[$index9]->order->number) {
    $jsonData["costs"][$index9]["order"]["number"] = $model->costs[$index9]->order->number;
}
if (null !== $model->costs[$index9]->order->externalId) {
    $jsonData["costs"][$index9]["order"]["externalId"] = $model->costs[$index9]->order->externalId;
}

if (0 === \count($jsonData["costs"][$index9]["order"])) {
    $jsonData["costs"][$index9]["order"] = $emptyObject;
}

}
if (null !== $model->costs[$index9]->userId) {
    $jsonData["costs"][$index9]["userId"] = $model->costs[$index9]->userId;
}
if (null !== $model->costs[$index9]->sites) {
    $jsonData["costs"][$index9]["sites"] = $model->costs[$index9]->sites;
}

if (0 === \count($jsonData["costs"][$index9])) {
    $jsonData["costs"][$index9] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
