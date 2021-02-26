<?php

function serialize_RetailCrm_Api_Model_Response_Integration_IntegrationModulesGetResponse(RetailCrm\Api\Model\Response\Integration\IntegrationModulesGetResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->integrationModule) {
    $jsonData["integrationModule"] = [];
if (null !== $model->integrationModule->code) {
    $jsonData["integrationModule"]["code"] = $model->integrationModule->code;
}
if (null !== $model->integrationModule->integrationCode) {
    $jsonData["integrationModule"]["integrationCode"] = $model->integrationModule->integrationCode;
}
if (null !== $model->integrationModule->active) {
    $jsonData["integrationModule"]["active"] = $model->integrationModule->active;
}
if (null !== $model->integrationModule->freeze) {
    $jsonData["integrationModule"]["freeze"] = $model->integrationModule->freeze;
}
if (null !== $model->integrationModule->name) {
    $jsonData["integrationModule"]["name"] = $model->integrationModule->name;
}
if (null !== $model->integrationModule->logo) {
    $jsonData["integrationModule"]["logo"] = $model->integrationModule->logo;
}
if (null !== $model->integrationModule->clientId) {
    $jsonData["integrationModule"]["clientId"] = $model->integrationModule->clientId;
}
if (null !== $model->integrationModule->native) {
    $jsonData["integrationModule"]["native"] = $model->integrationModule->native;
}
if (null !== $model->integrationModule->baseUrl) {
    $jsonData["integrationModule"]["baseUrl"] = $model->integrationModule->baseUrl;
}
if (null !== $model->integrationModule->actions) {
    $jsonData["integrationModule"]["actions"] = $model->integrationModule->actions;
}
if (null !== $model->integrationModule->availableCountries) {
    $jsonData["integrationModule"]["availableCountries"] = $model->integrationModule->availableCountries;
}
if (null !== $model->integrationModule->accountUrl) {
    $jsonData["integrationModule"]["accountUrl"] = $model->integrationModule->accountUrl;
}
if (null !== $model->integrationModule->integrations) {
    $jsonData["integrationModule"]["integrations"] = [];
if (null !== $model->integrationModule->integrations->telephony) {
    $jsonData["integrationModule"]["integrations"]["telephony"] = [];
if (null !== $model->integrationModule->integrations->telephony->makeCallUrl) {
    $jsonData["integrationModule"]["integrations"]["telephony"]["makeCallUrl"] = $model->integrationModule->integrations->telephony->makeCallUrl;
}
if (null !== $model->integrationModule->integrations->telephony->allowEdit) {
    $jsonData["integrationModule"]["integrations"]["telephony"]["allowEdit"] = $model->integrationModule->integrations->telephony->allowEdit;
}
if (null !== $model->integrationModule->integrations->telephony->inputEventSupported) {
    $jsonData["integrationModule"]["integrations"]["telephony"]["inputEventSupported"] = $model->integrationModule->integrations->telephony->inputEventSupported;
}
if (null !== $model->integrationModule->integrations->telephony->outputEventSupported) {
    $jsonData["integrationModule"]["integrations"]["telephony"]["outputEventSupported"] = $model->integrationModule->integrations->telephony->outputEventSupported;
}
if (null !== $model->integrationModule->integrations->telephony->hangupEventSupported) {
    $jsonData["integrationModule"]["integrations"]["telephony"]["hangupEventSupported"] = $model->integrationModule->integrations->telephony->hangupEventSupported;
}
if (null !== $model->integrationModule->integrations->telephony->changeUserStatusUrl) {
    $jsonData["integrationModule"]["integrations"]["telephony"]["changeUserStatusUrl"] = $model->integrationModule->integrations->telephony->changeUserStatusUrl;
}
if (null !== $model->integrationModule->integrations->telephony->additionalCodes) {
    $jsonData["integrationModule"]["integrations"]["telephony"]["additionalCodes"] = [];
foreach (array_keys($model->integrationModule->integrations->telephony->additionalCodes) as $index69) {
    $jsonData["integrationModule"]["integrations"]["telephony"]["additionalCodes"][$index69] = [];
if (null !== $model->integrationModule->integrations->telephony->additionalCodes[$index69]->userId) {
    $jsonData["integrationModule"]["integrations"]["telephony"]["additionalCodes"][$index69]["userId"] = $model->integrationModule->integrations->telephony->additionalCodes[$index69]->userId;
}
if (null !== $model->integrationModule->integrations->telephony->additionalCodes[$index69]->code) {
    $jsonData["integrationModule"]["integrations"]["telephony"]["additionalCodes"][$index69]["code"] = $model->integrationModule->integrations->telephony->additionalCodes[$index69]->code;
}

if (0 === \count($jsonData["integrationModule"]["integrations"]["telephony"]["additionalCodes"][$index69])) {
    $jsonData["integrationModule"]["integrations"]["telephony"]["additionalCodes"][$index69] = $emptyObject;
}

}

}
if (null !== $model->integrationModule->integrations->telephony->externalPhones) {
    $jsonData["integrationModule"]["integrations"]["telephony"]["externalPhones"] = [];
foreach (array_keys($model->integrationModule->integrations->telephony->externalPhones) as $index68) {
    $jsonData["integrationModule"]["integrations"]["telephony"]["externalPhones"][$index68] = [];
if (null !== $model->integrationModule->integrations->telephony->externalPhones[$index68]->siteCode) {
    $jsonData["integrationModule"]["integrations"]["telephony"]["externalPhones"][$index68]["siteCode"] = $model->integrationModule->integrations->telephony->externalPhones[$index68]->siteCode;
}
if (null !== $model->integrationModule->integrations->telephony->externalPhones[$index68]->externalPhone) {
    $jsonData["integrationModule"]["integrations"]["telephony"]["externalPhones"][$index68]["externalPhone"] = $model->integrationModule->integrations->telephony->externalPhones[$index68]->externalPhone;
}

if (0 === \count($jsonData["integrationModule"]["integrations"]["telephony"]["externalPhones"][$index68])) {
    $jsonData["integrationModule"]["integrations"]["telephony"]["externalPhones"][$index68] = $emptyObject;
}

}

}

if (0 === \count($jsonData["integrationModule"]["integrations"]["telephony"])) {
    $jsonData["integrationModule"]["integrations"]["telephony"] = $emptyObject;
}

}
if (null !== $model->integrationModule->integrations->delivery) {
    $jsonData["integrationModule"]["integrations"]["delivery"] = [];
if (null !== $model->integrationModule->integrations->delivery->description) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["description"] = $model->integrationModule->integrations->delivery->description;
}
if (null !== $model->integrationModule->integrations->delivery->actions) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["actions"] = $model->integrationModule->integrations->delivery->actions;
}
if (null !== $model->integrationModule->integrations->delivery->payerType) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["payerType"] = [];
foreach (array_keys($model->integrationModule->integrations->delivery->payerType) as $index62) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["payerType"] = $model->integrationModule->integrations->delivery->payerType;
}

}
if (null !== $model->integrationModule->integrations->delivery->platePrintLimit) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["platePrintLimit"] = $model->integrationModule->integrations->delivery->platePrintLimit;
}
if (null !== $model->integrationModule->integrations->delivery->rateDeliveryCost) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["rateDeliveryCost"] = $model->integrationModule->integrations->delivery->rateDeliveryCost;
}
if (null !== $model->integrationModule->integrations->delivery->allowPackages) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["allowPackages"] = $model->integrationModule->integrations->delivery->allowPackages;
}
if (null !== $model->integrationModule->integrations->delivery->codAvailable) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["codAvailable"] = $model->integrationModule->integrations->delivery->codAvailable;
}
if (null !== $model->integrationModule->integrations->delivery->selfShipmentAvailable) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["selfShipmentAvailable"] = $model->integrationModule->integrations->delivery->selfShipmentAvailable;
}
if (null !== $model->integrationModule->integrations->delivery->duplicateOrderProductSupported) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["duplicateOrderProductSupported"] = $model->integrationModule->integrations->delivery->duplicateOrderProductSupported;
}
if (null !== $model->integrationModule->integrations->delivery->allowTrackNumber) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["allowTrackNumber"] = $model->integrationModule->integrations->delivery->allowTrackNumber;
}
if (null !== $model->integrationModule->integrations->delivery->availableCountries) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["availableCountries"] = [];
foreach (array_keys($model->integrationModule->integrations->delivery->availableCountries) as $index71) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["availableCountries"] = $model->integrationModule->integrations->delivery->availableCountries;
}

}
if (null !== $model->integrationModule->integrations->delivery->requiredFields) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["requiredFields"] = [];
foreach (array_keys($model->integrationModule->integrations->delivery->requiredFields) as $index67) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["requiredFields"] = $model->integrationModule->integrations->delivery->requiredFields;
}

}
if (null !== $model->integrationModule->integrations->delivery->statusList) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["statusList"] = [];
foreach (array_keys($model->integrationModule->integrations->delivery->statusList) as $index63) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["statusList"][$index63] = [];
if (null !== $model->integrationModule->integrations->delivery->statusList[$index63]->code) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["statusList"][$index63]["code"] = $model->integrationModule->integrations->delivery->statusList[$index63]->code;
}
if (null !== $model->integrationModule->integrations->delivery->statusList[$index63]->name) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["statusList"][$index63]["name"] = $model->integrationModule->integrations->delivery->statusList[$index63]->name;
}
if (null !== $model->integrationModule->integrations->delivery->statusList[$index63]->isEditable) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["statusList"][$index63]["isEditable"] = $model->integrationModule->integrations->delivery->statusList[$index63]->isEditable;
}

if (0 === \count($jsonData["integrationModule"]["integrations"]["delivery"]["statusList"][$index63])) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["statusList"][$index63] = $emptyObject;
}

}

}
if (null !== $model->integrationModule->integrations->delivery->plateList) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["plateList"] = [];
foreach (array_keys($model->integrationModule->integrations->delivery->plateList) as $index62) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["plateList"][$index62] = [];
if (null !== $model->integrationModule->integrations->delivery->plateList[$index62]->type) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["plateList"][$index62]["type"] = $model->integrationModule->integrations->delivery->plateList[$index62]->type;
}
if (null !== $model->integrationModule->integrations->delivery->plateList[$index62]->code) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["plateList"][$index62]["code"] = $model->integrationModule->integrations->delivery->plateList[$index62]->code;
}
if (null !== $model->integrationModule->integrations->delivery->plateList[$index62]->label) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["plateList"][$index62]["label"] = $model->integrationModule->integrations->delivery->plateList[$index62]->label;
}

if (0 === \count($jsonData["integrationModule"]["integrations"]["delivery"]["plateList"][$index62])) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["plateList"][$index62] = $emptyObject;
}

}

}
if (null !== $model->integrationModule->integrations->delivery->deliveryDataFieldList) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"] = [];
foreach (array_keys($model->integrationModule->integrations->delivery->deliveryDataFieldList) as $index74) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index74] = [];
if (null !== $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index74]->code) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index74]["code"] = $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index74]->code;
}
if (null !== $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index74]->label) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index74]["label"] = $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index74]->label;
}
if (null !== $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index74]->hint) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index74]["hint"] = $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index74]->hint;
}
if (null !== $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index74]->type) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index74]["type"] = $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index74]->type;
}
if (null !== $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index74]->multiple) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index74]["multiple"] = $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index74]->multiple;
}
if (null !== $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index74]->choices) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index74]["choices"] = $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index74]->choices;
}
if (null !== $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index74]->autocompleteUrl) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index74]["autocompleteUrl"] = $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index74]->autocompleteUrl;
}
if (null !== $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index74]->visible) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index74]["visible"] = $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index74]->visible;
}
if (null !== $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index74]->required) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index74]["required"] = $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index74]->required;
}
if (null !== $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index74]->affectsCost) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index74]["affectsCost"] = $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index74]->affectsCost;
}
if (null !== $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index74]->editable) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index74]["editable"] = $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index74]->editable;
}

if (0 === \count($jsonData["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index74])) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["deliveryDataFieldList"][$index74] = $emptyObject;
}

}

}
if (null !== $model->integrationModule->integrations->delivery->shipmentDataFieldList) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"] = [];
foreach (array_keys($model->integrationModule->integrations->delivery->shipmentDataFieldList) as $index74) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index74] = [];
if (null !== $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index74]->code) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index74]["code"] = $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index74]->code;
}
if (null !== $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index74]->label) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index74]["label"] = $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index74]->label;
}
if (null !== $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index74]->hint) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index74]["hint"] = $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index74]->hint;
}
if (null !== $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index74]->type) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index74]["type"] = $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index74]->type;
}
if (null !== $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index74]->multiple) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index74]["multiple"] = $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index74]->multiple;
}
if (null !== $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index74]->choices) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index74]["choices"] = $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index74]->choices;
}
if (null !== $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index74]->autocompleteUrl) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index74]["autocompleteUrl"] = $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index74]->autocompleteUrl;
}
if (null !== $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index74]->visible) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index74]["visible"] = $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index74]->visible;
}
if (null !== $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index74]->required) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index74]["required"] = $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index74]->required;
}
if (null !== $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index74]->affectsCost) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index74]["affectsCost"] = $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index74]->affectsCost;
}
if (null !== $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index74]->editable) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index74]["editable"] = $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index74]->editable;
}

if (0 === \count($jsonData["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index74])) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["shipmentDataFieldList"][$index74] = $emptyObject;
}

}

}
if (null !== $model->integrationModule->integrations->delivery->settings) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"] = [];
if (null !== $model->integrationModule->integrations->delivery->settings->defaultPayerType) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["defaultPayerType"] = $model->integrationModule->integrations->delivery->settings->defaultPayerType;
}
if (null !== $model->integrationModule->integrations->delivery->settings->costCalculateBy) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["costCalculateBy"] = $model->integrationModule->integrations->delivery->settings->costCalculateBy;
}
if (null !== $model->integrationModule->integrations->delivery->settings->nullDeclaredValue) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["nullDeclaredValue"] = $model->integrationModule->integrations->delivery->settings->nullDeclaredValue;
}
if (null !== $model->integrationModule->integrations->delivery->settings->lockedByDefault) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["lockedByDefault"] = $model->integrationModule->integrations->delivery->settings->lockedByDefault;
}
if (null !== $model->integrationModule->integrations->delivery->settings->paymentTypes) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["paymentTypes"] = [];
foreach (array_keys($model->integrationModule->integrations->delivery->settings->paymentTypes) as $index77) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["paymentTypes"][$index77] = [];
if (null !== $model->integrationModule->integrations->delivery->settings->paymentTypes[$index77]->code) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["paymentTypes"][$index77]["code"] = $model->integrationModule->integrations->delivery->settings->paymentTypes[$index77]->code;
}
if (null !== $model->integrationModule->integrations->delivery->settings->paymentTypes[$index77]->active) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["paymentTypes"][$index77]["active"] = $model->integrationModule->integrations->delivery->settings->paymentTypes[$index77]->active;
}
if (null !== $model->integrationModule->integrations->delivery->settings->paymentTypes[$index77]->cod) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["paymentTypes"][$index77]["cod"] = $model->integrationModule->integrations->delivery->settings->paymentTypes[$index77]->cod;
}

if (0 === \count($jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["paymentTypes"][$index77])) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["paymentTypes"][$index77] = $emptyObject;
}

}

}
if (null !== $model->integrationModule->integrations->delivery->settings->shipmentPoints) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["shipmentPoints"] = [];
foreach (array_keys($model->integrationModule->integrations->delivery->settings->shipmentPoints) as $index79) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["shipmentPoints"][$index79] = [];
if (null !== $model->integrationModule->integrations->delivery->settings->shipmentPoints[$index79]->code) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["shipmentPoints"][$index79]["code"] = $model->integrationModule->integrations->delivery->settings->shipmentPoints[$index79]->code;
}
if (null !== $model->integrationModule->integrations->delivery->settings->shipmentPoints[$index79]->shipmentPointId) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["shipmentPoints"][$index79]["shipmentPointId"] = $model->integrationModule->integrations->delivery->settings->shipmentPoints[$index79]->shipmentPointId;
}
if (null !== $model->integrationModule->integrations->delivery->settings->shipmentPoints[$index79]->shipmentPointLabel) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["shipmentPoints"][$index79]["shipmentPointLabel"] = $model->integrationModule->integrations->delivery->settings->shipmentPoints[$index79]->shipmentPointLabel;
}

if (0 === \count($jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["shipmentPoints"][$index79])) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["shipmentPoints"][$index79] = $emptyObject;
}

}

}
if (null !== $model->integrationModule->integrations->delivery->settings->statuses) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["statuses"] = [];
foreach (array_keys($model->integrationModule->integrations->delivery->settings->statuses) as $index73) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["statuses"][$index73] = [];
if (null !== $model->integrationModule->integrations->delivery->settings->statuses[$index73]->code) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["statuses"][$index73]["code"] = $model->integrationModule->integrations->delivery->settings->statuses[$index73]->code;
}
if (null !== $model->integrationModule->integrations->delivery->settings->statuses[$index73]->name) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["statuses"][$index73]["name"] = $model->integrationModule->integrations->delivery->settings->statuses[$index73]->name;
}
if (null !== $model->integrationModule->integrations->delivery->settings->statuses[$index73]->isEditable) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["statuses"][$index73]["isEditable"] = $model->integrationModule->integrations->delivery->settings->statuses[$index73]->isEditable;
}

if (0 === \count($jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["statuses"][$index73])) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["statuses"][$index73] = $emptyObject;
}

}

}
if (null !== $model->integrationModule->integrations->delivery->settings->deliveryExtraData) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["deliveryExtraData"] = [];
foreach (array_keys($model->integrationModule->integrations->delivery->settings->deliveryExtraData) as $index82) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["deliveryExtraData"] = $model->integrationModule->integrations->delivery->settings->deliveryExtraData;
}

}
if (null !== $model->integrationModule->integrations->delivery->settings->shipmentExtraData) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["shipmentExtraData"] = [];
foreach (array_keys($model->integrationModule->integrations->delivery->settings->shipmentExtraData) as $index82) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"]["shipmentExtraData"] = $model->integrationModule->integrations->delivery->settings->shipmentExtraData;
}

}

if (0 === \count($jsonData["integrationModule"]["integrations"]["delivery"]["settings"])) {
    $jsonData["integrationModule"]["integrations"]["delivery"]["settings"] = $emptyObject;
}

}

if (0 === \count($jsonData["integrationModule"]["integrations"]["delivery"])) {
    $jsonData["integrationModule"]["integrations"]["delivery"] = $emptyObject;
}

}
if (null !== $model->integrationModule->integrations->store) {
    $jsonData["integrationModule"]["integrations"]["store"] = [];
if (null !== $model->integrationModule->integrations->store->actions) {
    $jsonData["integrationModule"]["integrations"]["store"]["actions"] = [];
foreach (array_keys($model->integrationModule->integrations->store->actions) as $index57) {
    $jsonData["integrationModule"]["integrations"]["store"]["actions"][$index57] = [];
if (null !== $model->integrationModule->integrations->store->actions[$index57]->code) {
    $jsonData["integrationModule"]["integrations"]["store"]["actions"][$index57]["code"] = $model->integrationModule->integrations->store->actions[$index57]->code;
}
if (null !== $model->integrationModule->integrations->store->actions[$index57]->url) {
    $jsonData["integrationModule"]["integrations"]["store"]["actions"][$index57]["url"] = $model->integrationModule->integrations->store->actions[$index57]->url;
}
if (null !== $model->integrationModule->integrations->store->actions[$index57]->callPoints) {
    $jsonData["integrationModule"]["integrations"]["store"]["actions"][$index57]["callPoints"] = $model->integrationModule->integrations->store->actions[$index57]->callPoints;
}

if (0 === \count($jsonData["integrationModule"]["integrations"]["store"]["actions"][$index57])) {
    $jsonData["integrationModule"]["integrations"]["store"]["actions"][$index57] = $emptyObject;
}

}

}

if (0 === \count($jsonData["integrationModule"]["integrations"]["store"])) {
    $jsonData["integrationModule"]["integrations"]["store"] = $emptyObject;
}

}
if (null !== $model->integrationModule->integrations->recommendation) {
    $jsonData["integrationModule"]["integrations"]["recommendation"] = [];
if (null !== $model->integrationModule->integrations->recommendation->actions) {
    $jsonData["integrationModule"]["integrations"]["recommendation"]["actions"] = $model->integrationModule->integrations->recommendation->actions;
}
if (null !== $model->integrationModule->integrations->recommendation->addDefaultModes) {
    $jsonData["integrationModule"]["integrations"]["recommendation"]["addDefaultModes"] = $model->integrationModule->integrations->recommendation->addDefaultModes;
}
if (null !== $model->integrationModule->integrations->recommendation->modes) {
    $jsonData["integrationModule"]["integrations"]["recommendation"]["modes"] = [];
foreach (array_keys($model->integrationModule->integrations->recommendation->modes) as $index64) {
    $jsonData["integrationModule"]["integrations"]["recommendation"]["modes"][$index64] = [];
if (null !== $model->integrationModule->integrations->recommendation->modes[$index64]->code) {
    $jsonData["integrationModule"]["integrations"]["recommendation"]["modes"][$index64]["code"] = $model->integrationModule->integrations->recommendation->modes[$index64]->code;
}
if (null !== $model->integrationModule->integrations->recommendation->modes[$index64]->names) {
    $jsonData["integrationModule"]["integrations"]["recommendation"]["modes"][$index64]["names"] = $model->integrationModule->integrations->recommendation->modes[$index64]->names;
}

if (0 === \count($jsonData["integrationModule"]["integrations"]["recommendation"]["modes"][$index64])) {
    $jsonData["integrationModule"]["integrations"]["recommendation"]["modes"][$index64] = $emptyObject;
}

}

}

if (0 === \count($jsonData["integrationModule"]["integrations"]["recommendation"])) {
    $jsonData["integrationModule"]["integrations"]["recommendation"] = $emptyObject;
}

}
if (null !== $model->integrationModule->integrations->payment) {
    $jsonData["integrationModule"]["integrations"]["payment"] = [];
if (null !== $model->integrationModule->integrations->payment->actions) {
    $jsonData["integrationModule"]["integrations"]["payment"]["actions"] = [];
if (null !== $model->integrationModule->integrations->payment->actions->create) {
    $jsonData["integrationModule"]["integrations"]["payment"]["actions"]["create"] = $model->integrationModule->integrations->payment->actions->create;
}
if (null !== $model->integrationModule->integrations->payment->actions->approve) {
    $jsonData["integrationModule"]["integrations"]["payment"]["actions"]["approve"] = $model->integrationModule->integrations->payment->actions->approve;
}
if (null !== $model->integrationModule->integrations->payment->actions->cancel) {
    $jsonData["integrationModule"]["integrations"]["payment"]["actions"]["cancel"] = $model->integrationModule->integrations->payment->actions->cancel;
}
if (null !== $model->integrationModule->integrations->payment->actions->refund) {
    $jsonData["integrationModule"]["integrations"]["payment"]["actions"]["refund"] = $model->integrationModule->integrations->payment->actions->refund;
}

if (0 === \count($jsonData["integrationModule"]["integrations"]["payment"]["actions"])) {
    $jsonData["integrationModule"]["integrations"]["payment"]["actions"] = $emptyObject;
}

}
if (null !== $model->integrationModule->integrations->payment->currencies) {
    $jsonData["integrationModule"]["integrations"]["payment"]["currencies"] = $model->integrationModule->integrations->payment->currencies;
}
if (null !== $model->integrationModule->integrations->payment->invoiceTypes) {
    $jsonData["integrationModule"]["integrations"]["payment"]["invoiceTypes"] = $model->integrationModule->integrations->payment->invoiceTypes;
}
if (null !== $model->integrationModule->integrations->payment->shops) {
    $jsonData["integrationModule"]["integrations"]["payment"]["shops"] = [];
foreach (array_keys($model->integrationModule->integrations->payment->shops) as $index57) {
    $jsonData["integrationModule"]["integrations"]["payment"]["shops"][$index57] = [];
if (null !== $model->integrationModule->integrations->payment->shops[$index57]->code) {
    $jsonData["integrationModule"]["integrations"]["payment"]["shops"][$index57]["code"] = $model->integrationModule->integrations->payment->shops[$index57]->code;
}
if (null !== $model->integrationModule->integrations->payment->shops[$index57]->name) {
    $jsonData["integrationModule"]["integrations"]["payment"]["shops"][$index57]["name"] = $model->integrationModule->integrations->payment->shops[$index57]->name;
}
if (null !== $model->integrationModule->integrations->payment->shops[$index57]->active) {
    $jsonData["integrationModule"]["integrations"]["payment"]["shops"][$index57]["active"] = $model->integrationModule->integrations->payment->shops[$index57]->active;
}

if (0 === \count($jsonData["integrationModule"]["integrations"]["payment"]["shops"][$index57])) {
    $jsonData["integrationModule"]["integrations"]["payment"]["shops"][$index57] = $emptyObject;
}

}

}

if (0 === \count($jsonData["integrationModule"]["integrations"]["payment"])) {
    $jsonData["integrationModule"]["integrations"]["payment"] = $emptyObject;
}

}
if (null !== $model->integrationModule->integrations->mgTransport) {
    $jsonData["integrationModule"]["integrations"]["mgTransport"] = [];
if (null !== $model->integrationModule->integrations->mgTransport->token) {
    $jsonData["integrationModule"]["integrations"]["mgTransport"]["token"] = $model->integrationModule->integrations->mgTransport->token;
}
if (null !== $model->integrationModule->integrations->mgTransport->isActive) {
    $jsonData["integrationModule"]["integrations"]["mgTransport"]["isActive"] = $model->integrationModule->integrations->mgTransport->isActive;
}
if (null !== $model->integrationModule->integrations->mgTransport->webhookUrl) {
    $jsonData["integrationModule"]["integrations"]["mgTransport"]["webhookUrl"] = $model->integrationModule->integrations->mgTransport->webhookUrl;
}
if (null !== $model->integrationModule->integrations->mgTransport->endpointUrl) {
    $jsonData["integrationModule"]["integrations"]["mgTransport"]["endpointUrl"] = $model->integrationModule->integrations->mgTransport->endpointUrl;
}

if (0 === \count($jsonData["integrationModule"]["integrations"]["mgTransport"])) {
    $jsonData["integrationModule"]["integrations"]["mgTransport"] = $emptyObject;
}

}
if (null !== $model->integrationModule->integrations->mgBot) {
    $jsonData["integrationModule"]["integrations"]["mgBot"] = [];
if (null !== $model->integrationModule->integrations->mgBot->isActive) {
    $jsonData["integrationModule"]["integrations"]["mgBot"]["isActive"] = $model->integrationModule->integrations->mgBot->isActive;
}
if (null !== $model->integrationModule->integrations->mgBot->logo) {
    $jsonData["integrationModule"]["integrations"]["mgBot"]["logo"] = $model->integrationModule->integrations->mgBot->logo;
}
if (null !== $model->integrationModule->integrations->mgBot->token) {
    $jsonData["integrationModule"]["integrations"]["mgBot"]["token"] = $model->integrationModule->integrations->mgBot->token;
}
if (null !== $model->integrationModule->integrations->mgBot->name) {
    $jsonData["integrationModule"]["integrations"]["mgBot"]["name"] = $model->integrationModule->integrations->mgBot->name;
}

if (0 === \count($jsonData["integrationModule"]["integrations"]["mgBot"])) {
    $jsonData["integrationModule"]["integrations"]["mgBot"] = $emptyObject;
}

}

if (0 === \count($jsonData["integrationModule"]["integrations"])) {
    $jsonData["integrationModule"]["integrations"] = $emptyObject;
}

}

if (0 === \count($jsonData["integrationModule"])) {
    $jsonData["integrationModule"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
