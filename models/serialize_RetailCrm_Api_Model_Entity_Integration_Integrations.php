<?php

function serialize_RetailCrm_Api_Model_Entity_Integration_Integrations(RetailCrm\Api\Model\Entity\Integration\Integrations $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->telephony) {
    $jsonData["telephony"] = [];
if (null !== $model->telephony->makeCallUrl) {
    $jsonData["telephony"]["makeCallUrl"] = $model->telephony->makeCallUrl;
}
if (null !== $model->telephony->allowEdit) {
    $jsonData["telephony"]["allowEdit"] = $model->telephony->allowEdit;
}
if (null !== $model->telephony->inputEventSupported) {
    $jsonData["telephony"]["inputEventSupported"] = $model->telephony->inputEventSupported;
}
if (null !== $model->telephony->outputEventSupported) {
    $jsonData["telephony"]["outputEventSupported"] = $model->telephony->outputEventSupported;
}
if (null !== $model->telephony->hangupEventSupported) {
    $jsonData["telephony"]["hangupEventSupported"] = $model->telephony->hangupEventSupported;
}
if (null !== $model->telephony->changeUserStatusUrl) {
    $jsonData["telephony"]["changeUserStatusUrl"] = $model->telephony->changeUserStatusUrl;
}
if (null !== $model->telephony->additionalCodes) {
    $jsonData["telephony"]["additionalCodes"] = [];
foreach (array_keys($model->telephony->additionalCodes) as $index32) {
    $jsonData["telephony"]["additionalCodes"][$index32] = [];
if (null !== $model->telephony->additionalCodes[$index32]->userId) {
    $jsonData["telephony"]["additionalCodes"][$index32]["userId"] = $model->telephony->additionalCodes[$index32]->userId;
}
if (null !== $model->telephony->additionalCodes[$index32]->code) {
    $jsonData["telephony"]["additionalCodes"][$index32]["code"] = $model->telephony->additionalCodes[$index32]->code;
}

if (0 === \count($jsonData["telephony"]["additionalCodes"][$index32])) {
    $jsonData["telephony"]["additionalCodes"][$index32] = $emptyObject;
}

}

}
if (null !== $model->telephony->externalPhones) {
    $jsonData["telephony"]["externalPhones"] = [];
foreach (array_keys($model->telephony->externalPhones) as $index31) {
    $jsonData["telephony"]["externalPhones"][$index31] = [];
if (null !== $model->telephony->externalPhones[$index31]->siteCode) {
    $jsonData["telephony"]["externalPhones"][$index31]["siteCode"] = $model->telephony->externalPhones[$index31]->siteCode;
}
if (null !== $model->telephony->externalPhones[$index31]->externalPhone) {
    $jsonData["telephony"]["externalPhones"][$index31]["externalPhone"] = $model->telephony->externalPhones[$index31]->externalPhone;
}

if (0 === \count($jsonData["telephony"]["externalPhones"][$index31])) {
    $jsonData["telephony"]["externalPhones"][$index31] = $emptyObject;
}

}

}

if (0 === \count($jsonData["telephony"])) {
    $jsonData["telephony"] = $emptyObject;
}

}
if (null !== $model->delivery) {
    $jsonData["delivery"] = [];
if (null !== $model->delivery->description) {
    $jsonData["delivery"]["description"] = $model->delivery->description;
}
if (null !== $model->delivery->actions) {
    $jsonData["delivery"]["actions"] = $model->delivery->actions;
}
if (null !== $model->delivery->payerType) {
    $jsonData["delivery"]["payerType"] = [];
foreach (array_keys($model->delivery->payerType) as $index25) {
    $jsonData["delivery"]["payerType"] = $model->delivery->payerType;
}

}
if (null !== $model->delivery->platePrintLimit) {
    $jsonData["delivery"]["platePrintLimit"] = $model->delivery->platePrintLimit;
}
if (null !== $model->delivery->rateDeliveryCost) {
    $jsonData["delivery"]["rateDeliveryCost"] = $model->delivery->rateDeliveryCost;
}
if (null !== $model->delivery->allowPackages) {
    $jsonData["delivery"]["allowPackages"] = $model->delivery->allowPackages;
}
if (null !== $model->delivery->codAvailable) {
    $jsonData["delivery"]["codAvailable"] = $model->delivery->codAvailable;
}
if (null !== $model->delivery->selfShipmentAvailable) {
    $jsonData["delivery"]["selfShipmentAvailable"] = $model->delivery->selfShipmentAvailable;
}
if (null !== $model->delivery->duplicateOrderProductSupported) {
    $jsonData["delivery"]["duplicateOrderProductSupported"] = $model->delivery->duplicateOrderProductSupported;
}
if (null !== $model->delivery->allowTrackNumber) {
    $jsonData["delivery"]["allowTrackNumber"] = $model->delivery->allowTrackNumber;
}
if (null !== $model->delivery->availableCountries) {
    $jsonData["delivery"]["availableCountries"] = [];
foreach (array_keys($model->delivery->availableCountries) as $index34) {
    $jsonData["delivery"]["availableCountries"] = $model->delivery->availableCountries;
}

}
if (null !== $model->delivery->requiredFields) {
    $jsonData["delivery"]["requiredFields"] = [];
foreach (array_keys($model->delivery->requiredFields) as $index30) {
    $jsonData["delivery"]["requiredFields"] = $model->delivery->requiredFields;
}

}
if (null !== $model->delivery->statusList) {
    $jsonData["delivery"]["statusList"] = [];
foreach (array_keys($model->delivery->statusList) as $index26) {
    $jsonData["delivery"]["statusList"][$index26] = [];
if (null !== $model->delivery->statusList[$index26]->code) {
    $jsonData["delivery"]["statusList"][$index26]["code"] = $model->delivery->statusList[$index26]->code;
}
if (null !== $model->delivery->statusList[$index26]->name) {
    $jsonData["delivery"]["statusList"][$index26]["name"] = $model->delivery->statusList[$index26]->name;
}
if (null !== $model->delivery->statusList[$index26]->isEditable) {
    $jsonData["delivery"]["statusList"][$index26]["isEditable"] = $model->delivery->statusList[$index26]->isEditable;
}

if (0 === \count($jsonData["delivery"]["statusList"][$index26])) {
    $jsonData["delivery"]["statusList"][$index26] = $emptyObject;
}

}

}
if (null !== $model->delivery->plateList) {
    $jsonData["delivery"]["plateList"] = [];
foreach (array_keys($model->delivery->plateList) as $index25) {
    $jsonData["delivery"]["plateList"][$index25] = [];
if (null !== $model->delivery->plateList[$index25]->type) {
    $jsonData["delivery"]["plateList"][$index25]["type"] = $model->delivery->plateList[$index25]->type;
}
if (null !== $model->delivery->plateList[$index25]->code) {
    $jsonData["delivery"]["plateList"][$index25]["code"] = $model->delivery->plateList[$index25]->code;
}
if (null !== $model->delivery->plateList[$index25]->label) {
    $jsonData["delivery"]["plateList"][$index25]["label"] = $model->delivery->plateList[$index25]->label;
}

if (0 === \count($jsonData["delivery"]["plateList"][$index25])) {
    $jsonData["delivery"]["plateList"][$index25] = $emptyObject;
}

}

}
if (null !== $model->delivery->deliveryDataFieldList) {
    $jsonData["delivery"]["deliveryDataFieldList"] = [];
foreach (array_keys($model->delivery->deliveryDataFieldList) as $index37) {
    $jsonData["delivery"]["deliveryDataFieldList"][$index37] = [];
if (null !== $model->delivery->deliveryDataFieldList[$index37]->code) {
    $jsonData["delivery"]["deliveryDataFieldList"][$index37]["code"] = $model->delivery->deliveryDataFieldList[$index37]->code;
}
if (null !== $model->delivery->deliveryDataFieldList[$index37]->label) {
    $jsonData["delivery"]["deliveryDataFieldList"][$index37]["label"] = $model->delivery->deliveryDataFieldList[$index37]->label;
}
if (null !== $model->delivery->deliveryDataFieldList[$index37]->hint) {
    $jsonData["delivery"]["deliveryDataFieldList"][$index37]["hint"] = $model->delivery->deliveryDataFieldList[$index37]->hint;
}
if (null !== $model->delivery->deliveryDataFieldList[$index37]->type) {
    $jsonData["delivery"]["deliveryDataFieldList"][$index37]["type"] = $model->delivery->deliveryDataFieldList[$index37]->type;
}
if (null !== $model->delivery->deliveryDataFieldList[$index37]->multiple) {
    $jsonData["delivery"]["deliveryDataFieldList"][$index37]["multiple"] = $model->delivery->deliveryDataFieldList[$index37]->multiple;
}
if (null !== $model->delivery->deliveryDataFieldList[$index37]->choices) {
    $jsonData["delivery"]["deliveryDataFieldList"][$index37]["choices"] = $model->delivery->deliveryDataFieldList[$index37]->choices;
}
if (null !== $model->delivery->deliveryDataFieldList[$index37]->autocompleteUrl) {
    $jsonData["delivery"]["deliveryDataFieldList"][$index37]["autocompleteUrl"] = $model->delivery->deliveryDataFieldList[$index37]->autocompleteUrl;
}
if (null !== $model->delivery->deliveryDataFieldList[$index37]->visible) {
    $jsonData["delivery"]["deliveryDataFieldList"][$index37]["visible"] = $model->delivery->deliveryDataFieldList[$index37]->visible;
}
if (null !== $model->delivery->deliveryDataFieldList[$index37]->required) {
    $jsonData["delivery"]["deliveryDataFieldList"][$index37]["required"] = $model->delivery->deliveryDataFieldList[$index37]->required;
}
if (null !== $model->delivery->deliveryDataFieldList[$index37]->affectsCost) {
    $jsonData["delivery"]["deliveryDataFieldList"][$index37]["affectsCost"] = $model->delivery->deliveryDataFieldList[$index37]->affectsCost;
}
if (null !== $model->delivery->deliveryDataFieldList[$index37]->editable) {
    $jsonData["delivery"]["deliveryDataFieldList"][$index37]["editable"] = $model->delivery->deliveryDataFieldList[$index37]->editable;
}

if (0 === \count($jsonData["delivery"]["deliveryDataFieldList"][$index37])) {
    $jsonData["delivery"]["deliveryDataFieldList"][$index37] = $emptyObject;
}

}

}
if (null !== $model->delivery->shipmentDataFieldList) {
    $jsonData["delivery"]["shipmentDataFieldList"] = [];
foreach (array_keys($model->delivery->shipmentDataFieldList) as $index37) {
    $jsonData["delivery"]["shipmentDataFieldList"][$index37] = [];
if (null !== $model->delivery->shipmentDataFieldList[$index37]->code) {
    $jsonData["delivery"]["shipmentDataFieldList"][$index37]["code"] = $model->delivery->shipmentDataFieldList[$index37]->code;
}
if (null !== $model->delivery->shipmentDataFieldList[$index37]->label) {
    $jsonData["delivery"]["shipmentDataFieldList"][$index37]["label"] = $model->delivery->shipmentDataFieldList[$index37]->label;
}
if (null !== $model->delivery->shipmentDataFieldList[$index37]->hint) {
    $jsonData["delivery"]["shipmentDataFieldList"][$index37]["hint"] = $model->delivery->shipmentDataFieldList[$index37]->hint;
}
if (null !== $model->delivery->shipmentDataFieldList[$index37]->type) {
    $jsonData["delivery"]["shipmentDataFieldList"][$index37]["type"] = $model->delivery->shipmentDataFieldList[$index37]->type;
}
if (null !== $model->delivery->shipmentDataFieldList[$index37]->multiple) {
    $jsonData["delivery"]["shipmentDataFieldList"][$index37]["multiple"] = $model->delivery->shipmentDataFieldList[$index37]->multiple;
}
if (null !== $model->delivery->shipmentDataFieldList[$index37]->choices) {
    $jsonData["delivery"]["shipmentDataFieldList"][$index37]["choices"] = $model->delivery->shipmentDataFieldList[$index37]->choices;
}
if (null !== $model->delivery->shipmentDataFieldList[$index37]->autocompleteUrl) {
    $jsonData["delivery"]["shipmentDataFieldList"][$index37]["autocompleteUrl"] = $model->delivery->shipmentDataFieldList[$index37]->autocompleteUrl;
}
if (null !== $model->delivery->shipmentDataFieldList[$index37]->visible) {
    $jsonData["delivery"]["shipmentDataFieldList"][$index37]["visible"] = $model->delivery->shipmentDataFieldList[$index37]->visible;
}
if (null !== $model->delivery->shipmentDataFieldList[$index37]->required) {
    $jsonData["delivery"]["shipmentDataFieldList"][$index37]["required"] = $model->delivery->shipmentDataFieldList[$index37]->required;
}
if (null !== $model->delivery->shipmentDataFieldList[$index37]->affectsCost) {
    $jsonData["delivery"]["shipmentDataFieldList"][$index37]["affectsCost"] = $model->delivery->shipmentDataFieldList[$index37]->affectsCost;
}
if (null !== $model->delivery->shipmentDataFieldList[$index37]->editable) {
    $jsonData["delivery"]["shipmentDataFieldList"][$index37]["editable"] = $model->delivery->shipmentDataFieldList[$index37]->editable;
}

if (0 === \count($jsonData["delivery"]["shipmentDataFieldList"][$index37])) {
    $jsonData["delivery"]["shipmentDataFieldList"][$index37] = $emptyObject;
}

}

}
if (null !== $model->delivery->settings) {
    $jsonData["delivery"]["settings"] = [];
if (null !== $model->delivery->settings->defaultPayerType) {
    $jsonData["delivery"]["settings"]["defaultPayerType"] = $model->delivery->settings->defaultPayerType;
}
if (null !== $model->delivery->settings->costCalculateBy) {
    $jsonData["delivery"]["settings"]["costCalculateBy"] = $model->delivery->settings->costCalculateBy;
}
if (null !== $model->delivery->settings->nullDeclaredValue) {
    $jsonData["delivery"]["settings"]["nullDeclaredValue"] = $model->delivery->settings->nullDeclaredValue;
}
if (null !== $model->delivery->settings->lockedByDefault) {
    $jsonData["delivery"]["settings"]["lockedByDefault"] = $model->delivery->settings->lockedByDefault;
}
if (null !== $model->delivery->settings->paymentTypes) {
    $jsonData["delivery"]["settings"]["paymentTypes"] = [];
foreach (array_keys($model->delivery->settings->paymentTypes) as $index40) {
    $jsonData["delivery"]["settings"]["paymentTypes"][$index40] = [];
if (null !== $model->delivery->settings->paymentTypes[$index40]->code) {
    $jsonData["delivery"]["settings"]["paymentTypes"][$index40]["code"] = $model->delivery->settings->paymentTypes[$index40]->code;
}
if (null !== $model->delivery->settings->paymentTypes[$index40]->active) {
    $jsonData["delivery"]["settings"]["paymentTypes"][$index40]["active"] = $model->delivery->settings->paymentTypes[$index40]->active;
}
if (null !== $model->delivery->settings->paymentTypes[$index40]->cod) {
    $jsonData["delivery"]["settings"]["paymentTypes"][$index40]["cod"] = $model->delivery->settings->paymentTypes[$index40]->cod;
}

if (0 === \count($jsonData["delivery"]["settings"]["paymentTypes"][$index40])) {
    $jsonData["delivery"]["settings"]["paymentTypes"][$index40] = $emptyObject;
}

}

}
if (null !== $model->delivery->settings->shipmentPoints) {
    $jsonData["delivery"]["settings"]["shipmentPoints"] = [];
foreach (array_keys($model->delivery->settings->shipmentPoints) as $index42) {
    $jsonData["delivery"]["settings"]["shipmentPoints"][$index42] = [];
if (null !== $model->delivery->settings->shipmentPoints[$index42]->code) {
    $jsonData["delivery"]["settings"]["shipmentPoints"][$index42]["code"] = $model->delivery->settings->shipmentPoints[$index42]->code;
}
if (null !== $model->delivery->settings->shipmentPoints[$index42]->shipmentPointId) {
    $jsonData["delivery"]["settings"]["shipmentPoints"][$index42]["shipmentPointId"] = $model->delivery->settings->shipmentPoints[$index42]->shipmentPointId;
}
if (null !== $model->delivery->settings->shipmentPoints[$index42]->shipmentPointLabel) {
    $jsonData["delivery"]["settings"]["shipmentPoints"][$index42]["shipmentPointLabel"] = $model->delivery->settings->shipmentPoints[$index42]->shipmentPointLabel;
}

if (0 === \count($jsonData["delivery"]["settings"]["shipmentPoints"][$index42])) {
    $jsonData["delivery"]["settings"]["shipmentPoints"][$index42] = $emptyObject;
}

}

}
if (null !== $model->delivery->settings->statuses) {
    $jsonData["delivery"]["settings"]["statuses"] = [];
foreach (array_keys($model->delivery->settings->statuses) as $index36) {
    $jsonData["delivery"]["settings"]["statuses"][$index36] = [];
if (null !== $model->delivery->settings->statuses[$index36]->code) {
    $jsonData["delivery"]["settings"]["statuses"][$index36]["code"] = $model->delivery->settings->statuses[$index36]->code;
}
if (null !== $model->delivery->settings->statuses[$index36]->name) {
    $jsonData["delivery"]["settings"]["statuses"][$index36]["name"] = $model->delivery->settings->statuses[$index36]->name;
}
if (null !== $model->delivery->settings->statuses[$index36]->isEditable) {
    $jsonData["delivery"]["settings"]["statuses"][$index36]["isEditable"] = $model->delivery->settings->statuses[$index36]->isEditable;
}

if (0 === \count($jsonData["delivery"]["settings"]["statuses"][$index36])) {
    $jsonData["delivery"]["settings"]["statuses"][$index36] = $emptyObject;
}

}

}
if (null !== $model->delivery->settings->deliveryExtraData) {
    $jsonData["delivery"]["settings"]["deliveryExtraData"] = [];
foreach (array_keys($model->delivery->settings->deliveryExtraData) as $index45) {
    $jsonData["delivery"]["settings"]["deliveryExtraData"] = $model->delivery->settings->deliveryExtraData;
}

}
if (null !== $model->delivery->settings->shipmentExtraData) {
    $jsonData["delivery"]["settings"]["shipmentExtraData"] = [];
foreach (array_keys($model->delivery->settings->shipmentExtraData) as $index45) {
    $jsonData["delivery"]["settings"]["shipmentExtraData"] = $model->delivery->settings->shipmentExtraData;
}

}

if (0 === \count($jsonData["delivery"]["settings"])) {
    $jsonData["delivery"]["settings"] = $emptyObject;
}

}

if (0 === \count($jsonData["delivery"])) {
    $jsonData["delivery"] = $emptyObject;
}

}
if (null !== $model->store) {
    $jsonData["store"] = [];
if (null !== $model->store->actions) {
    $jsonData["store"]["actions"] = [];
foreach (array_keys($model->store->actions) as $index20) {
    $jsonData["store"]["actions"][$index20] = [];
if (null !== $model->store->actions[$index20]->code) {
    $jsonData["store"]["actions"][$index20]["code"] = $model->store->actions[$index20]->code;
}
if (null !== $model->store->actions[$index20]->url) {
    $jsonData["store"]["actions"][$index20]["url"] = $model->store->actions[$index20]->url;
}
if (null !== $model->store->actions[$index20]->callPoints) {
    $jsonData["store"]["actions"][$index20]["callPoints"] = $model->store->actions[$index20]->callPoints;
}

if (0 === \count($jsonData["store"]["actions"][$index20])) {
    $jsonData["store"]["actions"][$index20] = $emptyObject;
}

}

}

if (0 === \count($jsonData["store"])) {
    $jsonData["store"] = $emptyObject;
}

}
if (null !== $model->recommendation) {
    $jsonData["recommendation"] = [];
if (null !== $model->recommendation->actions) {
    $jsonData["recommendation"]["actions"] = $model->recommendation->actions;
}
if (null !== $model->recommendation->addDefaultModes) {
    $jsonData["recommendation"]["addDefaultModes"] = $model->recommendation->addDefaultModes;
}
if (null !== $model->recommendation->modes) {
    $jsonData["recommendation"]["modes"] = [];
foreach (array_keys($model->recommendation->modes) as $index27) {
    $jsonData["recommendation"]["modes"][$index27] = [];
if (null !== $model->recommendation->modes[$index27]->code) {
    $jsonData["recommendation"]["modes"][$index27]["code"] = $model->recommendation->modes[$index27]->code;
}
if (null !== $model->recommendation->modes[$index27]->names) {
    $jsonData["recommendation"]["modes"][$index27]["names"] = $model->recommendation->modes[$index27]->names;
}

if (0 === \count($jsonData["recommendation"]["modes"][$index27])) {
    $jsonData["recommendation"]["modes"][$index27] = $emptyObject;
}

}

}

if (0 === \count($jsonData["recommendation"])) {
    $jsonData["recommendation"] = $emptyObject;
}

}
if (null !== $model->payment) {
    $jsonData["payment"] = [];
if (null !== $model->payment->actions) {
    $jsonData["payment"]["actions"] = [];
if (null !== $model->payment->actions->create) {
    $jsonData["payment"]["actions"]["create"] = $model->payment->actions->create;
}
if (null !== $model->payment->actions->approve) {
    $jsonData["payment"]["actions"]["approve"] = $model->payment->actions->approve;
}
if (null !== $model->payment->actions->cancel) {
    $jsonData["payment"]["actions"]["cancel"] = $model->payment->actions->cancel;
}
if (null !== $model->payment->actions->refund) {
    $jsonData["payment"]["actions"]["refund"] = $model->payment->actions->refund;
}

if (0 === \count($jsonData["payment"]["actions"])) {
    $jsonData["payment"]["actions"] = $emptyObject;
}

}
if (null !== $model->payment->currencies) {
    $jsonData["payment"]["currencies"] = $model->payment->currencies;
}
if (null !== $model->payment->invoiceTypes) {
    $jsonData["payment"]["invoiceTypes"] = $model->payment->invoiceTypes;
}
if (null !== $model->payment->shops) {
    $jsonData["payment"]["shops"] = [];
foreach (array_keys($model->payment->shops) as $index20) {
    $jsonData["payment"]["shops"][$index20] = [];
if (null !== $model->payment->shops[$index20]->code) {
    $jsonData["payment"]["shops"][$index20]["code"] = $model->payment->shops[$index20]->code;
}
if (null !== $model->payment->shops[$index20]->name) {
    $jsonData["payment"]["shops"][$index20]["name"] = $model->payment->shops[$index20]->name;
}
if (null !== $model->payment->shops[$index20]->active) {
    $jsonData["payment"]["shops"][$index20]["active"] = $model->payment->shops[$index20]->active;
}

if (0 === \count($jsonData["payment"]["shops"][$index20])) {
    $jsonData["payment"]["shops"][$index20] = $emptyObject;
}

}

}

if (0 === \count($jsonData["payment"])) {
    $jsonData["payment"] = $emptyObject;
}

}
if (null !== $model->mgTransport) {
    $jsonData["mgTransport"] = [];
if (null !== $model->mgTransport->token) {
    $jsonData["mgTransport"]["token"] = $model->mgTransport->token;
}
if (null !== $model->mgTransport->isActive) {
    $jsonData["mgTransport"]["isActive"] = $model->mgTransport->isActive;
}
if (null !== $model->mgTransport->webhookUrl) {
    $jsonData["mgTransport"]["webhookUrl"] = $model->mgTransport->webhookUrl;
}
if (null !== $model->mgTransport->endpointUrl) {
    $jsonData["mgTransport"]["endpointUrl"] = $model->mgTransport->endpointUrl;
}

if (0 === \count($jsonData["mgTransport"])) {
    $jsonData["mgTransport"] = $emptyObject;
}

}
if (null !== $model->mgBot) {
    $jsonData["mgBot"] = [];
if (null !== $model->mgBot->isActive) {
    $jsonData["mgBot"]["isActive"] = $model->mgBot->isActive;
}
if (null !== $model->mgBot->logo) {
    $jsonData["mgBot"]["logo"] = $model->mgBot->logo;
}
if (null !== $model->mgBot->token) {
    $jsonData["mgBot"]["token"] = $model->mgBot->token;
}
if (null !== $model->mgBot->name) {
    $jsonData["mgBot"]["name"] = $model->mgBot->name;
}

if (0 === \count($jsonData["mgBot"])) {
    $jsonData["mgBot"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
