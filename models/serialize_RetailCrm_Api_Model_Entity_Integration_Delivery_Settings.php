<?php

function serialize_RetailCrm_Api_Model_Entity_Integration_Delivery_Settings(RetailCrm\Api\Model\Entity\Integration\Delivery\Settings $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->defaultPayerType) {
    $jsonData["defaultPayerType"] = $model->defaultPayerType;
}
if (null !== $model->costCalculateBy) {
    $jsonData["costCalculateBy"] = $model->costCalculateBy;
}
if (null !== $model->nullDeclaredValue) {
    $jsonData["nullDeclaredValue"] = $model->nullDeclaredValue;
}
if (null !== $model->lockedByDefault) {
    $jsonData["lockedByDefault"] = $model->lockedByDefault;
}
if (null !== $model->paymentTypes) {
    $jsonData["paymentTypes"] = [];
foreach (array_keys($model->paymentTypes) as $index16) {
    $jsonData["paymentTypes"][$index16] = [];
if (null !== $model->paymentTypes[$index16]->code) {
    $jsonData["paymentTypes"][$index16]["code"] = $model->paymentTypes[$index16]->code;
}
if (null !== $model->paymentTypes[$index16]->active) {
    $jsonData["paymentTypes"][$index16]["active"] = $model->paymentTypes[$index16]->active;
}
if (null !== $model->paymentTypes[$index16]->cod) {
    $jsonData["paymentTypes"][$index16]["cod"] = $model->paymentTypes[$index16]->cod;
}

if (0 === \count($jsonData["paymentTypes"][$index16])) {
    $jsonData["paymentTypes"][$index16] = $emptyObject;
}

}

}
if (null !== $model->shipmentPoints) {
    $jsonData["shipmentPoints"] = [];
foreach (array_keys($model->shipmentPoints) as $index18) {
    $jsonData["shipmentPoints"][$index18] = [];
if (null !== $model->shipmentPoints[$index18]->code) {
    $jsonData["shipmentPoints"][$index18]["code"] = $model->shipmentPoints[$index18]->code;
}
if (null !== $model->shipmentPoints[$index18]->shipmentPointId) {
    $jsonData["shipmentPoints"][$index18]["shipmentPointId"] = $model->shipmentPoints[$index18]->shipmentPointId;
}
if (null !== $model->shipmentPoints[$index18]->shipmentPointLabel) {
    $jsonData["shipmentPoints"][$index18]["shipmentPointLabel"] = $model->shipmentPoints[$index18]->shipmentPointLabel;
}

if (0 === \count($jsonData["shipmentPoints"][$index18])) {
    $jsonData["shipmentPoints"][$index18] = $emptyObject;
}

}

}
if (null !== $model->statuses) {
    $jsonData["statuses"] = [];
foreach (array_keys($model->statuses) as $index12) {
    $jsonData["statuses"][$index12] = [];
if (null !== $model->statuses[$index12]->code) {
    $jsonData["statuses"][$index12]["code"] = $model->statuses[$index12]->code;
}
if (null !== $model->statuses[$index12]->name) {
    $jsonData["statuses"][$index12]["name"] = $model->statuses[$index12]->name;
}
if (null !== $model->statuses[$index12]->isEditable) {
    $jsonData["statuses"][$index12]["isEditable"] = $model->statuses[$index12]->isEditable;
}

if (0 === \count($jsonData["statuses"][$index12])) {
    $jsonData["statuses"][$index12] = $emptyObject;
}

}

}
if (null !== $model->deliveryExtraData) {
    $jsonData["deliveryExtraData"] = [];
foreach (array_keys($model->deliveryExtraData) as $index21) {
    $jsonData["deliveryExtraData"] = $model->deliveryExtraData;
}

}
if (null !== $model->shipmentExtraData) {
    $jsonData["shipmentExtraData"] = [];
foreach (array_keys($model->shipmentExtraData) as $index21) {
    $jsonData["shipmentExtraData"] = $model->shipmentExtraData;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
