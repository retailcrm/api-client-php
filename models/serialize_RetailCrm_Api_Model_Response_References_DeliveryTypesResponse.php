<?php

function serialize_RetailCrm_Api_Model_Response_References_DeliveryTypesResponse(RetailCrm\Api\Model\Response\References\DeliveryTypesResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->deliveryTypes) {
    $jsonData["deliveryTypes"] = [];
foreach (array_keys($model->deliveryTypes) as $index17) {
    $jsonData["deliveryTypes"][$index17] = [];
if (null !== $model->deliveryTypes[$index17]->name) {
    $jsonData["deliveryTypes"][$index17]["name"] = $model->deliveryTypes[$index17]->name;
}
if (null !== $model->deliveryTypes[$index17]->code) {
    $jsonData["deliveryTypes"][$index17]["code"] = $model->deliveryTypes[$index17]->code;
}
if (null !== $model->deliveryTypes[$index17]->active) {
    $jsonData["deliveryTypes"][$index17]["active"] = $model->deliveryTypes[$index17]->active;
}
if (null !== $model->deliveryTypes[$index17]->defaultCost) {
    $jsonData["deliveryTypes"][$index17]["defaultCost"] = $model->deliveryTypes[$index17]->defaultCost;
}
if (null !== $model->deliveryTypes[$index17]->defaultNetCost) {
    $jsonData["deliveryTypes"][$index17]["defaultNetCost"] = $model->deliveryTypes[$index17]->defaultNetCost;
}
if (null !== $model->deliveryTypes[$index17]->description) {
    $jsonData["deliveryTypes"][$index17]["description"] = $model->deliveryTypes[$index17]->description;
}
if (null !== $model->deliveryTypes[$index17]->paymentTypes) {
    $jsonData["deliveryTypes"][$index17]["paymentTypes"] = [];
foreach (array_keys($model->deliveryTypes[$index17]->paymentTypes) as $index43) {
    $jsonData["deliveryTypes"][$index17]["paymentTypes"] = $model->deliveryTypes[$index17]->paymentTypes;
}

}
if (null !== $model->deliveryTypes[$index17]->integrationCode) {
    $jsonData["deliveryTypes"][$index17]["integrationCode"] = $model->deliveryTypes[$index17]->integrationCode;
}
if (null !== $model->deliveryTypes[$index17]->deliveryServices) {
    $jsonData["deliveryTypes"][$index17]["deliveryServices"] = [];
foreach (array_keys($model->deliveryTypes[$index17]->deliveryServices) as $index47) {
    $jsonData["deliveryTypes"][$index17]["deliveryServices"] = $model->deliveryTypes[$index17]->deliveryServices;
}

}
if (null !== $model->deliveryTypes[$index17]->defaultForCrm) {
    $jsonData["deliveryTypes"][$index17]["defaultForCrm"] = $model->deliveryTypes[$index17]->defaultForCrm;
}
if (null !== $model->deliveryTypes[$index17]->vatRate) {
    $jsonData["deliveryTypes"][$index17]["vatRate"] = $model->deliveryTypes[$index17]->vatRate;
}
if (null !== $model->deliveryTypes[$index17]->defaultTariffCode) {
    $jsonData["deliveryTypes"][$index17]["defaultTariffCode"] = $model->deliveryTypes[$index17]->defaultTariffCode;
}
if (null !== $model->deliveryTypes[$index17]->defaultTariffType) {
    $jsonData["deliveryTypes"][$index17]["defaultTariffType"] = $model->deliveryTypes[$index17]->defaultTariffType;
}
if (null !== $model->deliveryTypes[$index17]->defaultTariffName) {
    $jsonData["deliveryTypes"][$index17]["defaultTariffName"] = $model->deliveryTypes[$index17]->defaultTariffName;
}

if (0 === \count($jsonData["deliveryTypes"][$index17])) {
    $jsonData["deliveryTypes"][$index17] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
