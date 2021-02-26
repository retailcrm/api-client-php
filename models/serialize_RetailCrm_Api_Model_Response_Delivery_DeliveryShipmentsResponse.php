<?php

function serialize_RetailCrm_Api_Model_Response_Delivery_DeliveryShipmentsResponse(RetailCrm\Api\Model\Response\Delivery\DeliveryShipmentsResponse $model, bool $useStdClass = true)
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
if (null !== $model->deliveryShipments) {
    $jsonData["deliveryShipments"] = [];
foreach (array_keys($model->deliveryShipments) as $index21) {
    $jsonData["deliveryShipments"][$index21] = [];
if (null !== $model->deliveryShipments[$index21]->integrationCode) {
    $jsonData["deliveryShipments"][$index21]["integrationCode"] = $model->deliveryShipments[$index21]->integrationCode;
}
if (null !== $model->deliveryShipments[$index21]->id) {
    $jsonData["deliveryShipments"][$index21]["id"] = $model->deliveryShipments[$index21]->id;
}
if (null !== $model->deliveryShipments[$index21]->externalId) {
    $jsonData["deliveryShipments"][$index21]["externalId"] = $model->deliveryShipments[$index21]->externalId;
}
if (null !== $model->deliveryShipments[$index21]->deliveryType) {
    $jsonData["deliveryShipments"][$index21]["deliveryType"] = $model->deliveryShipments[$index21]->deliveryType;
}
if (null !== $model->deliveryShipments[$index21]->store) {
    $jsonData["deliveryShipments"][$index21]["store"] = $model->deliveryShipments[$index21]->store;
}
if (null !== $model->deliveryShipments[$index21]->managerId) {
    $jsonData["deliveryShipments"][$index21]["managerId"] = $model->deliveryShipments[$index21]->managerId;
}
if (null !== $model->deliveryShipments[$index21]->status) {
    $jsonData["deliveryShipments"][$index21]["status"] = $model->deliveryShipments[$index21]->status;
}
if (null !== $model->deliveryShipments[$index21]->date) {
    $jsonData["deliveryShipments"][$index21]["date"] = $model->deliveryShipments[$index21]->date->format('Y-m-d');;
}
if (null !== $model->deliveryShipments[$index21]->time) {
    $jsonData["deliveryShipments"][$index21]["time"] = [];
if (null !== $model->deliveryShipments[$index21]->time->from) {
    $jsonData["deliveryShipments"][$index21]["time"]["from"] = $model->deliveryShipments[$index21]->time->from->format('H:i');;
}
if (null !== $model->deliveryShipments[$index21]->time->to) {
    $jsonData["deliveryShipments"][$index21]["time"]["to"] = $model->deliveryShipments[$index21]->time->to->format('H:i');;
}
if (null !== $model->deliveryShipments[$index21]->time->custom) {
    $jsonData["deliveryShipments"][$index21]["time"]["custom"] = $model->deliveryShipments[$index21]->time->custom;
}

if (0 === \count($jsonData["deliveryShipments"][$index21]["time"])) {
    $jsonData["deliveryShipments"][$index21]["time"] = $emptyObject;
}

}
if (null !== $model->deliveryShipments[$index21]->comment) {
    $jsonData["deliveryShipments"][$index21]["comment"] = $model->deliveryShipments[$index21]->comment;
}
if (null !== $model->deliveryShipments[$index21]->orders) {
    $jsonData["deliveryShipments"][$index21]["orders"] = [];
foreach (array_keys($model->deliveryShipments[$index21]->orders) as $index41) {
    $jsonData["deliveryShipments"][$index21]["orders"][$index41] = [];
if (null !== $model->deliveryShipments[$index21]->orders[$index41]->id) {
    $jsonData["deliveryShipments"][$index21]["orders"][$index41]["id"] = $model->deliveryShipments[$index21]->orders[$index41]->id;
}
if (null !== $model->deliveryShipments[$index21]->orders[$index41]->externalId) {
    $jsonData["deliveryShipments"][$index21]["orders"][$index41]["externalId"] = $model->deliveryShipments[$index21]->orders[$index41]->externalId;
}
if (null !== $model->deliveryShipments[$index21]->orders[$index41]->number) {
    $jsonData["deliveryShipments"][$index21]["orders"][$index41]["number"] = $model->deliveryShipments[$index21]->orders[$index41]->number;
}

if (0 === \count($jsonData["deliveryShipments"][$index21]["orders"][$index41])) {
    $jsonData["deliveryShipments"][$index21]["orders"][$index41] = $emptyObject;
}

}

}
if (null !== $model->deliveryShipments[$index21]->extraData) {
    $jsonData["deliveryShipments"][$index21]["extraData"] = [];
foreach (array_keys($model->deliveryShipments[$index21]->extraData) as $index44) {
    $jsonData["deliveryShipments"][$index21]["extraData"] = $model->deliveryShipments[$index21]->extraData;
}

}
if (null !== $model->deliveryShipments[$index21]->lunchTime) {
    $jsonData["deliveryShipments"][$index21]["lunchTime"] = [];
if (null !== $model->deliveryShipments[$index21]->lunchTime->from) {
    $jsonData["deliveryShipments"][$index21]["lunchTime"]["from"] = $model->deliveryShipments[$index21]->lunchTime->from->format('H:i');;
}
if (null !== $model->deliveryShipments[$index21]->lunchTime->to) {
    $jsonData["deliveryShipments"][$index21]["lunchTime"]["to"] = $model->deliveryShipments[$index21]->lunchTime->to->format('H:i');;
}
if (null !== $model->deliveryShipments[$index21]->lunchTime->custom) {
    $jsonData["deliveryShipments"][$index21]["lunchTime"]["custom"] = $model->deliveryShipments[$index21]->lunchTime->custom;
}

if (0 === \count($jsonData["deliveryShipments"][$index21]["lunchTime"])) {
    $jsonData["deliveryShipments"][$index21]["lunchTime"] = $emptyObject;
}

}

if (0 === \count($jsonData["deliveryShipments"][$index21])) {
    $jsonData["deliveryShipments"][$index21] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
