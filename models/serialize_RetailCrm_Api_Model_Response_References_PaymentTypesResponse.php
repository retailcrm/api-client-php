<?php

function serialize_RetailCrm_Api_Model_Response_References_PaymentTypesResponse(RetailCrm\Api\Model\Response\References\PaymentTypesResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->paymentTypes) {
    $jsonData["paymentTypes"] = [];
foreach (array_keys($model->paymentTypes) as $index16) {
    $jsonData["paymentTypes"][$index16] = [];
if (null !== $model->paymentTypes[$index16]->name) {
    $jsonData["paymentTypes"][$index16]["name"] = $model->paymentTypes[$index16]->name;
}
if (null !== $model->paymentTypes[$index16]->code) {
    $jsonData["paymentTypes"][$index16]["code"] = $model->paymentTypes[$index16]->code;
}
if (null !== $model->paymentTypes[$index16]->active) {
    $jsonData["paymentTypes"][$index16]["active"] = $model->paymentTypes[$index16]->active;
}
if (null !== $model->paymentTypes[$index16]->defaultForCrm) {
    $jsonData["paymentTypes"][$index16]["defaultForCrm"] = $model->paymentTypes[$index16]->defaultForCrm;
}
if (null !== $model->paymentTypes[$index16]->defaultForApi) {
    $jsonData["paymentTypes"][$index16]["defaultForApi"] = $model->paymentTypes[$index16]->defaultForApi;
}
if (null !== $model->paymentTypes[$index16]->description) {
    $jsonData["paymentTypes"][$index16]["description"] = $model->paymentTypes[$index16]->description;
}
if (null !== $model->paymentTypes[$index16]->deliveryTypes) {
    $jsonData["paymentTypes"][$index16]["deliveryTypes"] = [];
foreach (array_keys($model->paymentTypes[$index16]->deliveryTypes) as $index43) {
    $jsonData["paymentTypes"][$index16]["deliveryTypes"] = $model->paymentTypes[$index16]->deliveryTypes;
}

}
if (null !== $model->paymentTypes[$index16]->paymentStatuses) {
    $jsonData["paymentTypes"][$index16]["paymentStatuses"] = [];
foreach (array_keys($model->paymentTypes[$index16]->paymentStatuses) as $index45) {
    $jsonData["paymentTypes"][$index16]["paymentStatuses"] = $model->paymentTypes[$index16]->paymentStatuses;
}

}
if (null !== $model->paymentTypes[$index16]->integrationModule) {
    $jsonData["paymentTypes"][$index16]["integrationModule"] = [];
if (null !== $model->paymentTypes[$index16]->integrationModule->code) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["code"] = $model->paymentTypes[$index16]->integrationModule->code;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrationCode) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrationCode"] = $model->paymentTypes[$index16]->integrationModule->integrationCode;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->active) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["active"] = $model->paymentTypes[$index16]->integrationModule->active;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->freeze) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["freeze"] = $model->paymentTypes[$index16]->integrationModule->freeze;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->name) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["name"] = $model->paymentTypes[$index16]->integrationModule->name;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->logo) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["logo"] = $model->paymentTypes[$index16]->integrationModule->logo;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->clientId) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["clientId"] = $model->paymentTypes[$index16]->integrationModule->clientId;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->native) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["native"] = $model->paymentTypes[$index16]->integrationModule->native;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->baseUrl) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["baseUrl"] = $model->paymentTypes[$index16]->integrationModule->baseUrl;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->actions) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["actions"] = $model->paymentTypes[$index16]->integrationModule->actions;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->availableCountries) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["availableCountries"] = $model->paymentTypes[$index16]->integrationModule->availableCountries;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->accountUrl) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["accountUrl"] = $model->paymentTypes[$index16]->integrationModule->accountUrl;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"] = [];
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->telephony) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["telephony"] = [];
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->telephony->makeCallUrl) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["telephony"]["makeCallUrl"] = $model->paymentTypes[$index16]->integrationModule->integrations->telephony->makeCallUrl;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->telephony->allowEdit) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["telephony"]["allowEdit"] = $model->paymentTypes[$index16]->integrationModule->integrations->telephony->allowEdit;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->telephony->inputEventSupported) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["telephony"]["inputEventSupported"] = $model->paymentTypes[$index16]->integrationModule->integrations->telephony->inputEventSupported;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->telephony->outputEventSupported) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["telephony"]["outputEventSupported"] = $model->paymentTypes[$index16]->integrationModule->integrations->telephony->outputEventSupported;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->telephony->hangupEventSupported) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["telephony"]["hangupEventSupported"] = $model->paymentTypes[$index16]->integrationModule->integrations->telephony->hangupEventSupported;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->telephony->changeUserStatusUrl) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["telephony"]["changeUserStatusUrl"] = $model->paymentTypes[$index16]->integrationModule->integrations->telephony->changeUserStatusUrl;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->telephony->additionalCodes) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["telephony"]["additionalCodes"] = [];
foreach (array_keys($model->paymentTypes[$index16]->integrationModule->integrations->telephony->additionalCodes) as $index95) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["telephony"]["additionalCodes"][$index95] = [];
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->telephony->additionalCodes[$index95]->userId) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["telephony"]["additionalCodes"][$index95]["userId"] = $model->paymentTypes[$index16]->integrationModule->integrations->telephony->additionalCodes[$index95]->userId;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->telephony->additionalCodes[$index95]->code) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["telephony"]["additionalCodes"][$index95]["code"] = $model->paymentTypes[$index16]->integrationModule->integrations->telephony->additionalCodes[$index95]->code;
}

if (0 === \count($jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["telephony"]["additionalCodes"][$index95])) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["telephony"]["additionalCodes"][$index95] = $emptyObject;
}

}

}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->telephony->externalPhones) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["telephony"]["externalPhones"] = [];
foreach (array_keys($model->paymentTypes[$index16]->integrationModule->integrations->telephony->externalPhones) as $index94) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["telephony"]["externalPhones"][$index94] = [];
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->telephony->externalPhones[$index94]->siteCode) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["telephony"]["externalPhones"][$index94]["siteCode"] = $model->paymentTypes[$index16]->integrationModule->integrations->telephony->externalPhones[$index94]->siteCode;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->telephony->externalPhones[$index94]->externalPhone) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["telephony"]["externalPhones"][$index94]["externalPhone"] = $model->paymentTypes[$index16]->integrationModule->integrations->telephony->externalPhones[$index94]->externalPhone;
}

if (0 === \count($jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["telephony"]["externalPhones"][$index94])) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["telephony"]["externalPhones"][$index94] = $emptyObject;
}

}

}

if (0 === \count($jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["telephony"])) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["telephony"] = $emptyObject;
}

}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"] = [];
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->description) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["description"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->description;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->actions) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["actions"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->actions;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->payerType) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["payerType"] = [];
foreach (array_keys($model->paymentTypes[$index16]->integrationModule->integrations->delivery->payerType) as $index88) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["payerType"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->payerType;
}

}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->platePrintLimit) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["platePrintLimit"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->platePrintLimit;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->rateDeliveryCost) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["rateDeliveryCost"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->rateDeliveryCost;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->allowPackages) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["allowPackages"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->allowPackages;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->codAvailable) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["codAvailable"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->codAvailable;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->selfShipmentAvailable) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["selfShipmentAvailable"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->selfShipmentAvailable;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->duplicateOrderProductSupported) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["duplicateOrderProductSupported"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->duplicateOrderProductSupported;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->allowTrackNumber) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["allowTrackNumber"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->allowTrackNumber;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->availableCountries) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["availableCountries"] = [];
foreach (array_keys($model->paymentTypes[$index16]->integrationModule->integrations->delivery->availableCountries) as $index97) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["availableCountries"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->availableCountries;
}

}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->requiredFields) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["requiredFields"] = [];
foreach (array_keys($model->paymentTypes[$index16]->integrationModule->integrations->delivery->requiredFields) as $index93) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["requiredFields"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->requiredFields;
}

}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->statusList) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["statusList"] = [];
foreach (array_keys($model->paymentTypes[$index16]->integrationModule->integrations->delivery->statusList) as $index89) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["statusList"][$index89] = [];
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->statusList[$index89]->code) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["statusList"][$index89]["code"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->statusList[$index89]->code;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->statusList[$index89]->name) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["statusList"][$index89]["name"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->statusList[$index89]->name;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->statusList[$index89]->isEditable) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["statusList"][$index89]["isEditable"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->statusList[$index89]->isEditable;
}

if (0 === \count($jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["statusList"][$index89])) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["statusList"][$index89] = $emptyObject;
}

}

}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->plateList) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["plateList"] = [];
foreach (array_keys($model->paymentTypes[$index16]->integrationModule->integrations->delivery->plateList) as $index88) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["plateList"][$index88] = [];
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->plateList[$index88]->type) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["plateList"][$index88]["type"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->plateList[$index88]->type;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->plateList[$index88]->code) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["plateList"][$index88]["code"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->plateList[$index88]->code;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->plateList[$index88]->label) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["plateList"][$index88]["label"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->plateList[$index88]->label;
}

if (0 === \count($jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["plateList"][$index88])) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["plateList"][$index88] = $emptyObject;
}

}

}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->deliveryDataFieldList) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"] = [];
foreach (array_keys($model->paymentTypes[$index16]->integrationModule->integrations->delivery->deliveryDataFieldList) as $index100) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index100] = [];
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->deliveryDataFieldList[$index100]->code) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index100]["code"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->deliveryDataFieldList[$index100]->code;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->deliveryDataFieldList[$index100]->label) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index100]["label"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->deliveryDataFieldList[$index100]->label;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->deliveryDataFieldList[$index100]->hint) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index100]["hint"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->deliveryDataFieldList[$index100]->hint;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->deliveryDataFieldList[$index100]->type) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index100]["type"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->deliveryDataFieldList[$index100]->type;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->deliveryDataFieldList[$index100]->multiple) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index100]["multiple"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->deliveryDataFieldList[$index100]->multiple;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->deliveryDataFieldList[$index100]->choices) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index100]["choices"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->deliveryDataFieldList[$index100]->choices;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->deliveryDataFieldList[$index100]->autocompleteUrl) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index100]["autocompleteUrl"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->deliveryDataFieldList[$index100]->autocompleteUrl;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->deliveryDataFieldList[$index100]->visible) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index100]["visible"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->deliveryDataFieldList[$index100]->visible;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->deliveryDataFieldList[$index100]->required) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index100]["required"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->deliveryDataFieldList[$index100]->required;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->deliveryDataFieldList[$index100]->affectsCost) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index100]["affectsCost"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->deliveryDataFieldList[$index100]->affectsCost;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->deliveryDataFieldList[$index100]->editable) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index100]["editable"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->deliveryDataFieldList[$index100]->editable;
}

if (0 === \count($jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index100])) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index100] = $emptyObject;
}

}

}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->shipmentDataFieldList) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"] = [];
foreach (array_keys($model->paymentTypes[$index16]->integrationModule->integrations->delivery->shipmentDataFieldList) as $index100) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index100] = [];
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->shipmentDataFieldList[$index100]->code) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index100]["code"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->shipmentDataFieldList[$index100]->code;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->shipmentDataFieldList[$index100]->label) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index100]["label"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->shipmentDataFieldList[$index100]->label;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->shipmentDataFieldList[$index100]->hint) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index100]["hint"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->shipmentDataFieldList[$index100]->hint;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->shipmentDataFieldList[$index100]->type) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index100]["type"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->shipmentDataFieldList[$index100]->type;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->shipmentDataFieldList[$index100]->multiple) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index100]["multiple"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->shipmentDataFieldList[$index100]->multiple;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->shipmentDataFieldList[$index100]->choices) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index100]["choices"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->shipmentDataFieldList[$index100]->choices;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->shipmentDataFieldList[$index100]->autocompleteUrl) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index100]["autocompleteUrl"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->shipmentDataFieldList[$index100]->autocompleteUrl;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->shipmentDataFieldList[$index100]->visible) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index100]["visible"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->shipmentDataFieldList[$index100]->visible;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->shipmentDataFieldList[$index100]->required) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index100]["required"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->shipmentDataFieldList[$index100]->required;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->shipmentDataFieldList[$index100]->affectsCost) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index100]["affectsCost"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->shipmentDataFieldList[$index100]->affectsCost;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->shipmentDataFieldList[$index100]->editable) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index100]["editable"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->shipmentDataFieldList[$index100]->editable;
}

if (0 === \count($jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index100])) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index100] = $emptyObject;
}

}

}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"] = [];
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->defaultPayerType) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["defaultPayerType"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->defaultPayerType;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->costCalculateBy) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["costCalculateBy"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->costCalculateBy;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->nullDeclaredValue) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["nullDeclaredValue"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->nullDeclaredValue;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->lockedByDefault) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["lockedByDefault"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->lockedByDefault;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->paymentTypes) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["paymentTypes"] = [];
foreach (array_keys($model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->paymentTypes) as $index103) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["paymentTypes"][$index103] = [];
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->paymentTypes[$index103]->code) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["paymentTypes"][$index103]["code"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->paymentTypes[$index103]->code;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->paymentTypes[$index103]->active) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["paymentTypes"][$index103]["active"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->paymentTypes[$index103]->active;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->paymentTypes[$index103]->cod) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["paymentTypes"][$index103]["cod"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->paymentTypes[$index103]->cod;
}

if (0 === \count($jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["paymentTypes"][$index103])) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["paymentTypes"][$index103] = $emptyObject;
}

}

}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->shipmentPoints) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["shipmentPoints"] = [];
foreach (array_keys($model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->shipmentPoints) as $index105) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["shipmentPoints"][$index105] = [];
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->shipmentPoints[$index105]->code) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["shipmentPoints"][$index105]["code"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->shipmentPoints[$index105]->code;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->shipmentPoints[$index105]->shipmentPointId) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["shipmentPoints"][$index105]["shipmentPointId"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->shipmentPoints[$index105]->shipmentPointId;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->shipmentPoints[$index105]->shipmentPointLabel) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["shipmentPoints"][$index105]["shipmentPointLabel"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->shipmentPoints[$index105]->shipmentPointLabel;
}

if (0 === \count($jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["shipmentPoints"][$index105])) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["shipmentPoints"][$index105] = $emptyObject;
}

}

}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->statuses) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["statuses"] = [];
foreach (array_keys($model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->statuses) as $index99) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["statuses"][$index99] = [];
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->statuses[$index99]->code) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["statuses"][$index99]["code"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->statuses[$index99]->code;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->statuses[$index99]->name) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["statuses"][$index99]["name"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->statuses[$index99]->name;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->statuses[$index99]->isEditable) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["statuses"][$index99]["isEditable"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->statuses[$index99]->isEditable;
}

if (0 === \count($jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["statuses"][$index99])) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["statuses"][$index99] = $emptyObject;
}

}

}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->deliveryExtraData) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["deliveryExtraData"] = [];
foreach (array_keys($model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->deliveryExtraData) as $index108) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["deliveryExtraData"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->deliveryExtraData;
}

}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->shipmentExtraData) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["shipmentExtraData"] = [];
foreach (array_keys($model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->shipmentExtraData) as $index108) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"]["shipmentExtraData"] = $model->paymentTypes[$index16]->integrationModule->integrations->delivery->settings->shipmentExtraData;
}

}

if (0 === \count($jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"])) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"]["settings"] = $emptyObject;
}

}

if (0 === \count($jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"])) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["delivery"] = $emptyObject;
}

}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->store) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["store"] = [];
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->store->actions) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["store"]["actions"] = [];
foreach (array_keys($model->paymentTypes[$index16]->integrationModule->integrations->store->actions) as $index83) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["store"]["actions"][$index83] = [];
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->store->actions[$index83]->code) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["store"]["actions"][$index83]["code"] = $model->paymentTypes[$index16]->integrationModule->integrations->store->actions[$index83]->code;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->store->actions[$index83]->url) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["store"]["actions"][$index83]["url"] = $model->paymentTypes[$index16]->integrationModule->integrations->store->actions[$index83]->url;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->store->actions[$index83]->callPoints) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["store"]["actions"][$index83]["callPoints"] = $model->paymentTypes[$index16]->integrationModule->integrations->store->actions[$index83]->callPoints;
}

if (0 === \count($jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["store"]["actions"][$index83])) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["store"]["actions"][$index83] = $emptyObject;
}

}

}

if (0 === \count($jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["store"])) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["store"] = $emptyObject;
}

}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->recommendation) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["recommendation"] = [];
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->recommendation->actions) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["recommendation"]["actions"] = $model->paymentTypes[$index16]->integrationModule->integrations->recommendation->actions;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->recommendation->addDefaultModes) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["recommendation"]["addDefaultModes"] = $model->paymentTypes[$index16]->integrationModule->integrations->recommendation->addDefaultModes;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->recommendation->modes) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["recommendation"]["modes"] = [];
foreach (array_keys($model->paymentTypes[$index16]->integrationModule->integrations->recommendation->modes) as $index90) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["recommendation"]["modes"][$index90] = [];
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->recommendation->modes[$index90]->code) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["recommendation"]["modes"][$index90]["code"] = $model->paymentTypes[$index16]->integrationModule->integrations->recommendation->modes[$index90]->code;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->recommendation->modes[$index90]->names) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["recommendation"]["modes"][$index90]["names"] = $model->paymentTypes[$index16]->integrationModule->integrations->recommendation->modes[$index90]->names;
}

if (0 === \count($jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["recommendation"]["modes"][$index90])) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["recommendation"]["modes"][$index90] = $emptyObject;
}

}

}

if (0 === \count($jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["recommendation"])) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["recommendation"] = $emptyObject;
}

}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->payment) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["payment"] = [];
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->payment->actions) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["payment"]["actions"] = [];
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->payment->actions->create) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["payment"]["actions"]["create"] = $model->paymentTypes[$index16]->integrationModule->integrations->payment->actions->create;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->payment->actions->approve) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["payment"]["actions"]["approve"] = $model->paymentTypes[$index16]->integrationModule->integrations->payment->actions->approve;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->payment->actions->cancel) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["payment"]["actions"]["cancel"] = $model->paymentTypes[$index16]->integrationModule->integrations->payment->actions->cancel;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->payment->actions->refund) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["payment"]["actions"]["refund"] = $model->paymentTypes[$index16]->integrationModule->integrations->payment->actions->refund;
}

if (0 === \count($jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["payment"]["actions"])) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["payment"]["actions"] = $emptyObject;
}

}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->payment->currencies) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["payment"]["currencies"] = $model->paymentTypes[$index16]->integrationModule->integrations->payment->currencies;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->payment->invoiceTypes) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["payment"]["invoiceTypes"] = $model->paymentTypes[$index16]->integrationModule->integrations->payment->invoiceTypes;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->payment->shops) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["payment"]["shops"] = [];
foreach (array_keys($model->paymentTypes[$index16]->integrationModule->integrations->payment->shops) as $index83) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["payment"]["shops"][$index83] = [];
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->payment->shops[$index83]->code) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["payment"]["shops"][$index83]["code"] = $model->paymentTypes[$index16]->integrationModule->integrations->payment->shops[$index83]->code;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->payment->shops[$index83]->name) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["payment"]["shops"][$index83]["name"] = $model->paymentTypes[$index16]->integrationModule->integrations->payment->shops[$index83]->name;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->payment->shops[$index83]->active) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["payment"]["shops"][$index83]["active"] = $model->paymentTypes[$index16]->integrationModule->integrations->payment->shops[$index83]->active;
}

if (0 === \count($jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["payment"]["shops"][$index83])) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["payment"]["shops"][$index83] = $emptyObject;
}

}

}

if (0 === \count($jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["payment"])) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["payment"] = $emptyObject;
}

}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->mgTransport) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["mgTransport"] = [];
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->mgTransport->token) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["mgTransport"]["token"] = $model->paymentTypes[$index16]->integrationModule->integrations->mgTransport->token;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->mgTransport->isActive) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["mgTransport"]["isActive"] = $model->paymentTypes[$index16]->integrationModule->integrations->mgTransport->isActive;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->mgTransport->webhookUrl) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["mgTransport"]["webhookUrl"] = $model->paymentTypes[$index16]->integrationModule->integrations->mgTransport->webhookUrl;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->mgTransport->endpointUrl) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["mgTransport"]["endpointUrl"] = $model->paymentTypes[$index16]->integrationModule->integrations->mgTransport->endpointUrl;
}

if (0 === \count($jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["mgTransport"])) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["mgTransport"] = $emptyObject;
}

}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->mgBot) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["mgBot"] = [];
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->mgBot->isActive) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["mgBot"]["isActive"] = $model->paymentTypes[$index16]->integrationModule->integrations->mgBot->isActive;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->mgBot->logo) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["mgBot"]["logo"] = $model->paymentTypes[$index16]->integrationModule->integrations->mgBot->logo;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->mgBot->token) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["mgBot"]["token"] = $model->paymentTypes[$index16]->integrationModule->integrations->mgBot->token;
}
if (null !== $model->paymentTypes[$index16]->integrationModule->integrations->mgBot->name) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["mgBot"]["name"] = $model->paymentTypes[$index16]->integrationModule->integrations->mgBot->name;
}

if (0 === \count($jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["mgBot"])) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"]["mgBot"] = $emptyObject;
}

}

if (0 === \count($jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"])) {
    $jsonData["paymentTypes"][$index16]["integrationModule"]["integrations"] = $emptyObject;
}

}

if (0 === \count($jsonData["paymentTypes"][$index16]["integrationModule"])) {
    $jsonData["paymentTypes"][$index16]["integrationModule"] = $emptyObject;
}

}

if (0 === \count($jsonData["paymentTypes"][$index16])) {
    $jsonData["paymentTypes"][$index16] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
