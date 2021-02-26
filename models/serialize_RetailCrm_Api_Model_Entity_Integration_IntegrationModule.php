<?php

function serialize_RetailCrm_Api_Model_Entity_Integration_IntegrationModule(RetailCrm\Api\Model\Entity\Integration\IntegrationModule $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->integrationCode) {
    $jsonData["integrationCode"] = $model->integrationCode;
}
if (null !== $model->active) {
    $jsonData["active"] = $model->active;
}
if (null !== $model->freeze) {
    $jsonData["freeze"] = $model->freeze;
}
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->logo) {
    $jsonData["logo"] = $model->logo;
}
if (null !== $model->clientId) {
    $jsonData["clientId"] = $model->clientId;
}
if (null !== $model->native) {
    $jsonData["native"] = $model->native;
}
if (null !== $model->baseUrl) {
    $jsonData["baseUrl"] = $model->baseUrl;
}
if (null !== $model->actions) {
    $jsonData["actions"] = $model->actions;
}
if (null !== $model->availableCountries) {
    $jsonData["availableCountries"] = $model->availableCountries;
}
if (null !== $model->accountUrl) {
    $jsonData["accountUrl"] = $model->accountUrl;
}
if (null !== $model->integrations) {
    $jsonData["integrations"] = [];
if (null !== $model->integrations->telephony) {
    $jsonData["integrations"]["telephony"] = [];
if (null !== $model->integrations->telephony->makeCallUrl) {
    $jsonData["integrations"]["telephony"]["makeCallUrl"] = $model->integrations->telephony->makeCallUrl;
}
if (null !== $model->integrations->telephony->allowEdit) {
    $jsonData["integrations"]["telephony"]["allowEdit"] = $model->integrations->telephony->allowEdit;
}
if (null !== $model->integrations->telephony->inputEventSupported) {
    $jsonData["integrations"]["telephony"]["inputEventSupported"] = $model->integrations->telephony->inputEventSupported;
}
if (null !== $model->integrations->telephony->outputEventSupported) {
    $jsonData["integrations"]["telephony"]["outputEventSupported"] = $model->integrations->telephony->outputEventSupported;
}
if (null !== $model->integrations->telephony->hangupEventSupported) {
    $jsonData["integrations"]["telephony"]["hangupEventSupported"] = $model->integrations->telephony->hangupEventSupported;
}
if (null !== $model->integrations->telephony->changeUserStatusUrl) {
    $jsonData["integrations"]["telephony"]["changeUserStatusUrl"] = $model->integrations->telephony->changeUserStatusUrl;
}
if (null !== $model->integrations->telephony->additionalCodes) {
    $jsonData["integrations"]["telephony"]["additionalCodes"] = [];
foreach (array_keys($model->integrations->telephony->additionalCodes) as $index48) {
    $jsonData["integrations"]["telephony"]["additionalCodes"][$index48] = [];
if (null !== $model->integrations->telephony->additionalCodes[$index48]->userId) {
    $jsonData["integrations"]["telephony"]["additionalCodes"][$index48]["userId"] = $model->integrations->telephony->additionalCodes[$index48]->userId;
}
if (null !== $model->integrations->telephony->additionalCodes[$index48]->code) {
    $jsonData["integrations"]["telephony"]["additionalCodes"][$index48]["code"] = $model->integrations->telephony->additionalCodes[$index48]->code;
}

if (0 === \count($jsonData["integrations"]["telephony"]["additionalCodes"][$index48])) {
    $jsonData["integrations"]["telephony"]["additionalCodes"][$index48] = $emptyObject;
}

}

}
if (null !== $model->integrations->telephony->externalPhones) {
    $jsonData["integrations"]["telephony"]["externalPhones"] = [];
foreach (array_keys($model->integrations->telephony->externalPhones) as $index47) {
    $jsonData["integrations"]["telephony"]["externalPhones"][$index47] = [];
if (null !== $model->integrations->telephony->externalPhones[$index47]->siteCode) {
    $jsonData["integrations"]["telephony"]["externalPhones"][$index47]["siteCode"] = $model->integrations->telephony->externalPhones[$index47]->siteCode;
}
if (null !== $model->integrations->telephony->externalPhones[$index47]->externalPhone) {
    $jsonData["integrations"]["telephony"]["externalPhones"][$index47]["externalPhone"] = $model->integrations->telephony->externalPhones[$index47]->externalPhone;
}

if (0 === \count($jsonData["integrations"]["telephony"]["externalPhones"][$index47])) {
    $jsonData["integrations"]["telephony"]["externalPhones"][$index47] = $emptyObject;
}

}

}

if (0 === \count($jsonData["integrations"]["telephony"])) {
    $jsonData["integrations"]["telephony"] = $emptyObject;
}

}
if (null !== $model->integrations->delivery) {
    $jsonData["integrations"]["delivery"] = [];
if (null !== $model->integrations->delivery->description) {
    $jsonData["integrations"]["delivery"]["description"] = $model->integrations->delivery->description;
}
if (null !== $model->integrations->delivery->actions) {
    $jsonData["integrations"]["delivery"]["actions"] = $model->integrations->delivery->actions;
}
if (null !== $model->integrations->delivery->payerType) {
    $jsonData["integrations"]["delivery"]["payerType"] = [];
foreach (array_keys($model->integrations->delivery->payerType) as $index41) {
    $jsonData["integrations"]["delivery"]["payerType"] = $model->integrations->delivery->payerType;
}

}
if (null !== $model->integrations->delivery->platePrintLimit) {
    $jsonData["integrations"]["delivery"]["platePrintLimit"] = $model->integrations->delivery->platePrintLimit;
}
if (null !== $model->integrations->delivery->rateDeliveryCost) {
    $jsonData["integrations"]["delivery"]["rateDeliveryCost"] = $model->integrations->delivery->rateDeliveryCost;
}
if (null !== $model->integrations->delivery->allowPackages) {
    $jsonData["integrations"]["delivery"]["allowPackages"] = $model->integrations->delivery->allowPackages;
}
if (null !== $model->integrations->delivery->codAvailable) {
    $jsonData["integrations"]["delivery"]["codAvailable"] = $model->integrations->delivery->codAvailable;
}
if (null !== $model->integrations->delivery->selfShipmentAvailable) {
    $jsonData["integrations"]["delivery"]["selfShipmentAvailable"] = $model->integrations->delivery->selfShipmentAvailable;
}
if (null !== $model->integrations->delivery->duplicateOrderProductSupported) {
    $jsonData["integrations"]["delivery"]["duplicateOrderProductSupported"] = $model->integrations->delivery->duplicateOrderProductSupported;
}
if (null !== $model->integrations->delivery->allowTrackNumber) {
    $jsonData["integrations"]["delivery"]["allowTrackNumber"] = $model->integrations->delivery->allowTrackNumber;
}
if (null !== $model->integrations->delivery->availableCountries) {
    $jsonData["integrations"]["delivery"]["availableCountries"] = [];
foreach (array_keys($model->integrations->delivery->availableCountries) as $index50) {
    $jsonData["integrations"]["delivery"]["availableCountries"] = $model->integrations->delivery->availableCountries;
}

}
if (null !== $model->integrations->delivery->requiredFields) {
    $jsonData["integrations"]["delivery"]["requiredFields"] = [];
foreach (array_keys($model->integrations->delivery->requiredFields) as $index46) {
    $jsonData["integrations"]["delivery"]["requiredFields"] = $model->integrations->delivery->requiredFields;
}

}
if (null !== $model->integrations->delivery->statusList) {
    $jsonData["integrations"]["delivery"]["statusList"] = [];
foreach (array_keys($model->integrations->delivery->statusList) as $index42) {
    $jsonData["integrations"]["delivery"]["statusList"][$index42] = [];
if (null !== $model->integrations->delivery->statusList[$index42]->code) {
    $jsonData["integrations"]["delivery"]["statusList"][$index42]["code"] = $model->integrations->delivery->statusList[$index42]->code;
}
if (null !== $model->integrations->delivery->statusList[$index42]->name) {
    $jsonData["integrations"]["delivery"]["statusList"][$index42]["name"] = $model->integrations->delivery->statusList[$index42]->name;
}
if (null !== $model->integrations->delivery->statusList[$index42]->isEditable) {
    $jsonData["integrations"]["delivery"]["statusList"][$index42]["isEditable"] = $model->integrations->delivery->statusList[$index42]->isEditable;
}

if (0 === \count($jsonData["integrations"]["delivery"]["statusList"][$index42])) {
    $jsonData["integrations"]["delivery"]["statusList"][$index42] = $emptyObject;
}

}

}
if (null !== $model->integrations->delivery->plateList) {
    $jsonData["integrations"]["delivery"]["plateList"] = [];
foreach (array_keys($model->integrations->delivery->plateList) as $index41) {
    $jsonData["integrations"]["delivery"]["plateList"][$index41] = [];
if (null !== $model->integrations->delivery->plateList[$index41]->type) {
    $jsonData["integrations"]["delivery"]["plateList"][$index41]["type"] = $model->integrations->delivery->plateList[$index41]->type;
}
if (null !== $model->integrations->delivery->plateList[$index41]->code) {
    $jsonData["integrations"]["delivery"]["plateList"][$index41]["code"] = $model->integrations->delivery->plateList[$index41]->code;
}
if (null !== $model->integrations->delivery->plateList[$index41]->label) {
    $jsonData["integrations"]["delivery"]["plateList"][$index41]["label"] = $model->integrations->delivery->plateList[$index41]->label;
}

if (0 === \count($jsonData["integrations"]["delivery"]["plateList"][$index41])) {
    $jsonData["integrations"]["delivery"]["plateList"][$index41] = $emptyObject;
}

}

}
if (null !== $model->integrations->delivery->deliveryDataFieldList) {
    $jsonData["integrations"]["delivery"]["deliveryDataFieldList"] = [];
foreach (array_keys($model->integrations->delivery->deliveryDataFieldList) as $index53) {
    $jsonData["integrations"]["delivery"]["deliveryDataFieldList"][$index53] = [];
if (null !== $model->integrations->delivery->deliveryDataFieldList[$index53]->code) {
    $jsonData["integrations"]["delivery"]["deliveryDataFieldList"][$index53]["code"] = $model->integrations->delivery->deliveryDataFieldList[$index53]->code;
}
if (null !== $model->integrations->delivery->deliveryDataFieldList[$index53]->label) {
    $jsonData["integrations"]["delivery"]["deliveryDataFieldList"][$index53]["label"] = $model->integrations->delivery->deliveryDataFieldList[$index53]->label;
}
if (null !== $model->integrations->delivery->deliveryDataFieldList[$index53]->hint) {
    $jsonData["integrations"]["delivery"]["deliveryDataFieldList"][$index53]["hint"] = $model->integrations->delivery->deliveryDataFieldList[$index53]->hint;
}
if (null !== $model->integrations->delivery->deliveryDataFieldList[$index53]->type) {
    $jsonData["integrations"]["delivery"]["deliveryDataFieldList"][$index53]["type"] = $model->integrations->delivery->deliveryDataFieldList[$index53]->type;
}
if (null !== $model->integrations->delivery->deliveryDataFieldList[$index53]->multiple) {
    $jsonData["integrations"]["delivery"]["deliveryDataFieldList"][$index53]["multiple"] = $model->integrations->delivery->deliveryDataFieldList[$index53]->multiple;
}
if (null !== $model->integrations->delivery->deliveryDataFieldList[$index53]->choices) {
    $jsonData["integrations"]["delivery"]["deliveryDataFieldList"][$index53]["choices"] = $model->integrations->delivery->deliveryDataFieldList[$index53]->choices;
}
if (null !== $model->integrations->delivery->deliveryDataFieldList[$index53]->autocompleteUrl) {
    $jsonData["integrations"]["delivery"]["deliveryDataFieldList"][$index53]["autocompleteUrl"] = $model->integrations->delivery->deliveryDataFieldList[$index53]->autocompleteUrl;
}
if (null !== $model->integrations->delivery->deliveryDataFieldList[$index53]->visible) {
    $jsonData["integrations"]["delivery"]["deliveryDataFieldList"][$index53]["visible"] = $model->integrations->delivery->deliveryDataFieldList[$index53]->visible;
}
if (null !== $model->integrations->delivery->deliveryDataFieldList[$index53]->required) {
    $jsonData["integrations"]["delivery"]["deliveryDataFieldList"][$index53]["required"] = $model->integrations->delivery->deliveryDataFieldList[$index53]->required;
}
if (null !== $model->integrations->delivery->deliveryDataFieldList[$index53]->affectsCost) {
    $jsonData["integrations"]["delivery"]["deliveryDataFieldList"][$index53]["affectsCost"] = $model->integrations->delivery->deliveryDataFieldList[$index53]->affectsCost;
}
if (null !== $model->integrations->delivery->deliveryDataFieldList[$index53]->editable) {
    $jsonData["integrations"]["delivery"]["deliveryDataFieldList"][$index53]["editable"] = $model->integrations->delivery->deliveryDataFieldList[$index53]->editable;
}

if (0 === \count($jsonData["integrations"]["delivery"]["deliveryDataFieldList"][$index53])) {
    $jsonData["integrations"]["delivery"]["deliveryDataFieldList"][$index53] = $emptyObject;
}

}

}
if (null !== $model->integrations->delivery->shipmentDataFieldList) {
    $jsonData["integrations"]["delivery"]["shipmentDataFieldList"] = [];
foreach (array_keys($model->integrations->delivery->shipmentDataFieldList) as $index53) {
    $jsonData["integrations"]["delivery"]["shipmentDataFieldList"][$index53] = [];
if (null !== $model->integrations->delivery->shipmentDataFieldList[$index53]->code) {
    $jsonData["integrations"]["delivery"]["shipmentDataFieldList"][$index53]["code"] = $model->integrations->delivery->shipmentDataFieldList[$index53]->code;
}
if (null !== $model->integrations->delivery->shipmentDataFieldList[$index53]->label) {
    $jsonData["integrations"]["delivery"]["shipmentDataFieldList"][$index53]["label"] = $model->integrations->delivery->shipmentDataFieldList[$index53]->label;
}
if (null !== $model->integrations->delivery->shipmentDataFieldList[$index53]->hint) {
    $jsonData["integrations"]["delivery"]["shipmentDataFieldList"][$index53]["hint"] = $model->integrations->delivery->shipmentDataFieldList[$index53]->hint;
}
if (null !== $model->integrations->delivery->shipmentDataFieldList[$index53]->type) {
    $jsonData["integrations"]["delivery"]["shipmentDataFieldList"][$index53]["type"] = $model->integrations->delivery->shipmentDataFieldList[$index53]->type;
}
if (null !== $model->integrations->delivery->shipmentDataFieldList[$index53]->multiple) {
    $jsonData["integrations"]["delivery"]["shipmentDataFieldList"][$index53]["multiple"] = $model->integrations->delivery->shipmentDataFieldList[$index53]->multiple;
}
if (null !== $model->integrations->delivery->shipmentDataFieldList[$index53]->choices) {
    $jsonData["integrations"]["delivery"]["shipmentDataFieldList"][$index53]["choices"] = $model->integrations->delivery->shipmentDataFieldList[$index53]->choices;
}
if (null !== $model->integrations->delivery->shipmentDataFieldList[$index53]->autocompleteUrl) {
    $jsonData["integrations"]["delivery"]["shipmentDataFieldList"][$index53]["autocompleteUrl"] = $model->integrations->delivery->shipmentDataFieldList[$index53]->autocompleteUrl;
}
if (null !== $model->integrations->delivery->shipmentDataFieldList[$index53]->visible) {
    $jsonData["integrations"]["delivery"]["shipmentDataFieldList"][$index53]["visible"] = $model->integrations->delivery->shipmentDataFieldList[$index53]->visible;
}
if (null !== $model->integrations->delivery->shipmentDataFieldList[$index53]->required) {
    $jsonData["integrations"]["delivery"]["shipmentDataFieldList"][$index53]["required"] = $model->integrations->delivery->shipmentDataFieldList[$index53]->required;
}
if (null !== $model->integrations->delivery->shipmentDataFieldList[$index53]->affectsCost) {
    $jsonData["integrations"]["delivery"]["shipmentDataFieldList"][$index53]["affectsCost"] = $model->integrations->delivery->shipmentDataFieldList[$index53]->affectsCost;
}
if (null !== $model->integrations->delivery->shipmentDataFieldList[$index53]->editable) {
    $jsonData["integrations"]["delivery"]["shipmentDataFieldList"][$index53]["editable"] = $model->integrations->delivery->shipmentDataFieldList[$index53]->editable;
}

if (0 === \count($jsonData["integrations"]["delivery"]["shipmentDataFieldList"][$index53])) {
    $jsonData["integrations"]["delivery"]["shipmentDataFieldList"][$index53] = $emptyObject;
}

}

}
if (null !== $model->integrations->delivery->settings) {
    $jsonData["integrations"]["delivery"]["settings"] = [];
if (null !== $model->integrations->delivery->settings->defaultPayerType) {
    $jsonData["integrations"]["delivery"]["settings"]["defaultPayerType"] = $model->integrations->delivery->settings->defaultPayerType;
}
if (null !== $model->integrations->delivery->settings->costCalculateBy) {
    $jsonData["integrations"]["delivery"]["settings"]["costCalculateBy"] = $model->integrations->delivery->settings->costCalculateBy;
}
if (null !== $model->integrations->delivery->settings->nullDeclaredValue) {
    $jsonData["integrations"]["delivery"]["settings"]["nullDeclaredValue"] = $model->integrations->delivery->settings->nullDeclaredValue;
}
if (null !== $model->integrations->delivery->settings->lockedByDefault) {
    $jsonData["integrations"]["delivery"]["settings"]["lockedByDefault"] = $model->integrations->delivery->settings->lockedByDefault;
}
if (null !== $model->integrations->delivery->settings->paymentTypes) {
    $jsonData["integrations"]["delivery"]["settings"]["paymentTypes"] = [];
foreach (array_keys($model->integrations->delivery->settings->paymentTypes) as $index56) {
    $jsonData["integrations"]["delivery"]["settings"]["paymentTypes"][$index56] = [];
if (null !== $model->integrations->delivery->settings->paymentTypes[$index56]->code) {
    $jsonData["integrations"]["delivery"]["settings"]["paymentTypes"][$index56]["code"] = $model->integrations->delivery->settings->paymentTypes[$index56]->code;
}
if (null !== $model->integrations->delivery->settings->paymentTypes[$index56]->active) {
    $jsonData["integrations"]["delivery"]["settings"]["paymentTypes"][$index56]["active"] = $model->integrations->delivery->settings->paymentTypes[$index56]->active;
}
if (null !== $model->integrations->delivery->settings->paymentTypes[$index56]->cod) {
    $jsonData["integrations"]["delivery"]["settings"]["paymentTypes"][$index56]["cod"] = $model->integrations->delivery->settings->paymentTypes[$index56]->cod;
}

if (0 === \count($jsonData["integrations"]["delivery"]["settings"]["paymentTypes"][$index56])) {
    $jsonData["integrations"]["delivery"]["settings"]["paymentTypes"][$index56] = $emptyObject;
}

}

}
if (null !== $model->integrations->delivery->settings->shipmentPoints) {
    $jsonData["integrations"]["delivery"]["settings"]["shipmentPoints"] = [];
foreach (array_keys($model->integrations->delivery->settings->shipmentPoints) as $index58) {
    $jsonData["integrations"]["delivery"]["settings"]["shipmentPoints"][$index58] = [];
if (null !== $model->integrations->delivery->settings->shipmentPoints[$index58]->code) {
    $jsonData["integrations"]["delivery"]["settings"]["shipmentPoints"][$index58]["code"] = $model->integrations->delivery->settings->shipmentPoints[$index58]->code;
}
if (null !== $model->integrations->delivery->settings->shipmentPoints[$index58]->shipmentPointId) {
    $jsonData["integrations"]["delivery"]["settings"]["shipmentPoints"][$index58]["shipmentPointId"] = $model->integrations->delivery->settings->shipmentPoints[$index58]->shipmentPointId;
}
if (null !== $model->integrations->delivery->settings->shipmentPoints[$index58]->shipmentPointLabel) {
    $jsonData["integrations"]["delivery"]["settings"]["shipmentPoints"][$index58]["shipmentPointLabel"] = $model->integrations->delivery->settings->shipmentPoints[$index58]->shipmentPointLabel;
}

if (0 === \count($jsonData["integrations"]["delivery"]["settings"]["shipmentPoints"][$index58])) {
    $jsonData["integrations"]["delivery"]["settings"]["shipmentPoints"][$index58] = $emptyObject;
}

}

}
if (null !== $model->integrations->delivery->settings->statuses) {
    $jsonData["integrations"]["delivery"]["settings"]["statuses"] = [];
foreach (array_keys($model->integrations->delivery->settings->statuses) as $index52) {
    $jsonData["integrations"]["delivery"]["settings"]["statuses"][$index52] = [];
if (null !== $model->integrations->delivery->settings->statuses[$index52]->code) {
    $jsonData["integrations"]["delivery"]["settings"]["statuses"][$index52]["code"] = $model->integrations->delivery->settings->statuses[$index52]->code;
}
if (null !== $model->integrations->delivery->settings->statuses[$index52]->name) {
    $jsonData["integrations"]["delivery"]["settings"]["statuses"][$index52]["name"] = $model->integrations->delivery->settings->statuses[$index52]->name;
}
if (null !== $model->integrations->delivery->settings->statuses[$index52]->isEditable) {
    $jsonData["integrations"]["delivery"]["settings"]["statuses"][$index52]["isEditable"] = $model->integrations->delivery->settings->statuses[$index52]->isEditable;
}

if (0 === \count($jsonData["integrations"]["delivery"]["settings"]["statuses"][$index52])) {
    $jsonData["integrations"]["delivery"]["settings"]["statuses"][$index52] = $emptyObject;
}

}

}
if (null !== $model->integrations->delivery->settings->deliveryExtraData) {
    $jsonData["integrations"]["delivery"]["settings"]["deliveryExtraData"] = [];
foreach (array_keys($model->integrations->delivery->settings->deliveryExtraData) as $index61) {
    $jsonData["integrations"]["delivery"]["settings"]["deliveryExtraData"] = $model->integrations->delivery->settings->deliveryExtraData;
}

}
if (null !== $model->integrations->delivery->settings->shipmentExtraData) {
    $jsonData["integrations"]["delivery"]["settings"]["shipmentExtraData"] = [];
foreach (array_keys($model->integrations->delivery->settings->shipmentExtraData) as $index61) {
    $jsonData["integrations"]["delivery"]["settings"]["shipmentExtraData"] = $model->integrations->delivery->settings->shipmentExtraData;
}

}

if (0 === \count($jsonData["integrations"]["delivery"]["settings"])) {
    $jsonData["integrations"]["delivery"]["settings"] = $emptyObject;
}

}

if (0 === \count($jsonData["integrations"]["delivery"])) {
    $jsonData["integrations"]["delivery"] = $emptyObject;
}

}
if (null !== $model->integrations->store) {
    $jsonData["integrations"]["store"] = [];
if (null !== $model->integrations->store->actions) {
    $jsonData["integrations"]["store"]["actions"] = [];
foreach (array_keys($model->integrations->store->actions) as $index36) {
    $jsonData["integrations"]["store"]["actions"][$index36] = [];
if (null !== $model->integrations->store->actions[$index36]->code) {
    $jsonData["integrations"]["store"]["actions"][$index36]["code"] = $model->integrations->store->actions[$index36]->code;
}
if (null !== $model->integrations->store->actions[$index36]->url) {
    $jsonData["integrations"]["store"]["actions"][$index36]["url"] = $model->integrations->store->actions[$index36]->url;
}
if (null !== $model->integrations->store->actions[$index36]->callPoints) {
    $jsonData["integrations"]["store"]["actions"][$index36]["callPoints"] = $model->integrations->store->actions[$index36]->callPoints;
}

if (0 === \count($jsonData["integrations"]["store"]["actions"][$index36])) {
    $jsonData["integrations"]["store"]["actions"][$index36] = $emptyObject;
}

}

}

if (0 === \count($jsonData["integrations"]["store"])) {
    $jsonData["integrations"]["store"] = $emptyObject;
}

}
if (null !== $model->integrations->recommendation) {
    $jsonData["integrations"]["recommendation"] = [];
if (null !== $model->integrations->recommendation->actions) {
    $jsonData["integrations"]["recommendation"]["actions"] = $model->integrations->recommendation->actions;
}
if (null !== $model->integrations->recommendation->addDefaultModes) {
    $jsonData["integrations"]["recommendation"]["addDefaultModes"] = $model->integrations->recommendation->addDefaultModes;
}
if (null !== $model->integrations->recommendation->modes) {
    $jsonData["integrations"]["recommendation"]["modes"] = [];
foreach (array_keys($model->integrations->recommendation->modes) as $index43) {
    $jsonData["integrations"]["recommendation"]["modes"][$index43] = [];
if (null !== $model->integrations->recommendation->modes[$index43]->code) {
    $jsonData["integrations"]["recommendation"]["modes"][$index43]["code"] = $model->integrations->recommendation->modes[$index43]->code;
}
if (null !== $model->integrations->recommendation->modes[$index43]->names) {
    $jsonData["integrations"]["recommendation"]["modes"][$index43]["names"] = $model->integrations->recommendation->modes[$index43]->names;
}

if (0 === \count($jsonData["integrations"]["recommendation"]["modes"][$index43])) {
    $jsonData["integrations"]["recommendation"]["modes"][$index43] = $emptyObject;
}

}

}

if (0 === \count($jsonData["integrations"]["recommendation"])) {
    $jsonData["integrations"]["recommendation"] = $emptyObject;
}

}
if (null !== $model->integrations->payment) {
    $jsonData["integrations"]["payment"] = [];
if (null !== $model->integrations->payment->actions) {
    $jsonData["integrations"]["payment"]["actions"] = [];
if (null !== $model->integrations->payment->actions->create) {
    $jsonData["integrations"]["payment"]["actions"]["create"] = $model->integrations->payment->actions->create;
}
if (null !== $model->integrations->payment->actions->approve) {
    $jsonData["integrations"]["payment"]["actions"]["approve"] = $model->integrations->payment->actions->approve;
}
if (null !== $model->integrations->payment->actions->cancel) {
    $jsonData["integrations"]["payment"]["actions"]["cancel"] = $model->integrations->payment->actions->cancel;
}
if (null !== $model->integrations->payment->actions->refund) {
    $jsonData["integrations"]["payment"]["actions"]["refund"] = $model->integrations->payment->actions->refund;
}

if (0 === \count($jsonData["integrations"]["payment"]["actions"])) {
    $jsonData["integrations"]["payment"]["actions"] = $emptyObject;
}

}
if (null !== $model->integrations->payment->currencies) {
    $jsonData["integrations"]["payment"]["currencies"] = $model->integrations->payment->currencies;
}
if (null !== $model->integrations->payment->invoiceTypes) {
    $jsonData["integrations"]["payment"]["invoiceTypes"] = $model->integrations->payment->invoiceTypes;
}
if (null !== $model->integrations->payment->shops) {
    $jsonData["integrations"]["payment"]["shops"] = [];
foreach (array_keys($model->integrations->payment->shops) as $index36) {
    $jsonData["integrations"]["payment"]["shops"][$index36] = [];
if (null !== $model->integrations->payment->shops[$index36]->code) {
    $jsonData["integrations"]["payment"]["shops"][$index36]["code"] = $model->integrations->payment->shops[$index36]->code;
}
if (null !== $model->integrations->payment->shops[$index36]->name) {
    $jsonData["integrations"]["payment"]["shops"][$index36]["name"] = $model->integrations->payment->shops[$index36]->name;
}
if (null !== $model->integrations->payment->shops[$index36]->active) {
    $jsonData["integrations"]["payment"]["shops"][$index36]["active"] = $model->integrations->payment->shops[$index36]->active;
}

if (0 === \count($jsonData["integrations"]["payment"]["shops"][$index36])) {
    $jsonData["integrations"]["payment"]["shops"][$index36] = $emptyObject;
}

}

}

if (0 === \count($jsonData["integrations"]["payment"])) {
    $jsonData["integrations"]["payment"] = $emptyObject;
}

}
if (null !== $model->integrations->mgTransport) {
    $jsonData["integrations"]["mgTransport"] = [];
if (null !== $model->integrations->mgTransport->token) {
    $jsonData["integrations"]["mgTransport"]["token"] = $model->integrations->mgTransport->token;
}
if (null !== $model->integrations->mgTransport->isActive) {
    $jsonData["integrations"]["mgTransport"]["isActive"] = $model->integrations->mgTransport->isActive;
}
if (null !== $model->integrations->mgTransport->webhookUrl) {
    $jsonData["integrations"]["mgTransport"]["webhookUrl"] = $model->integrations->mgTransport->webhookUrl;
}
if (null !== $model->integrations->mgTransport->endpointUrl) {
    $jsonData["integrations"]["mgTransport"]["endpointUrl"] = $model->integrations->mgTransport->endpointUrl;
}

if (0 === \count($jsonData["integrations"]["mgTransport"])) {
    $jsonData["integrations"]["mgTransport"] = $emptyObject;
}

}
if (null !== $model->integrations->mgBot) {
    $jsonData["integrations"]["mgBot"] = [];
if (null !== $model->integrations->mgBot->isActive) {
    $jsonData["integrations"]["mgBot"]["isActive"] = $model->integrations->mgBot->isActive;
}
if (null !== $model->integrations->mgBot->logo) {
    $jsonData["integrations"]["mgBot"]["logo"] = $model->integrations->mgBot->logo;
}
if (null !== $model->integrations->mgBot->token) {
    $jsonData["integrations"]["mgBot"]["token"] = $model->integrations->mgBot->token;
}
if (null !== $model->integrations->mgBot->name) {
    $jsonData["integrations"]["mgBot"]["name"] = $model->integrations->mgBot->name;
}

if (0 === \count($jsonData["integrations"]["mgBot"])) {
    $jsonData["integrations"]["mgBot"] = $emptyObject;
}

}

if (0 === \count($jsonData["integrations"])) {
    $jsonData["integrations"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
