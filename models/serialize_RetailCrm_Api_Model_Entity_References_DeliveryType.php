<?php

function serialize_RetailCrm_Api_Model_Entity_References_DeliveryType(RetailCrm\Api\Model\Entity\References\DeliveryType $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->active) {
    $jsonData["active"] = $model->active;
}
if (null !== $model->defaultCost) {
    $jsonData["defaultCost"] = $model->defaultCost;
}
if (null !== $model->defaultNetCost) {
    $jsonData["defaultNetCost"] = $model->defaultNetCost;
}
if (null !== $model->description) {
    $jsonData["description"] = $model->description;
}
if (null !== $model->paymentTypes) {
    $jsonData["paymentTypes"] = [];
foreach (array_keys($model->paymentTypes) as $index16) {
    $jsonData["paymentTypes"] = $model->paymentTypes;
}

}
if (null !== $model->integrationCode) {
    $jsonData["integrationCode"] = $model->integrationCode;
}
if (null !== $model->deliveryServices) {
    $jsonData["deliveryServices"] = [];
foreach (array_keys($model->deliveryServices) as $index20) {
    $jsonData["deliveryServices"] = $model->deliveryServices;
}

}
if (null !== $model->defaultForCrm) {
    $jsonData["defaultForCrm"] = $model->defaultForCrm;
}
if (null !== $model->vatRate) {
    $jsonData["vatRate"] = $model->vatRate;
}
if (null !== $model->defaultTariffCode) {
    $jsonData["defaultTariffCode"] = $model->defaultTariffCode;
}
if (null !== $model->defaultTariffType) {
    $jsonData["defaultTariffType"] = $model->defaultTariffType;
}
if (null !== $model->defaultTariffName) {
    $jsonData["defaultTariffName"] = $model->defaultTariffName;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
