<?php

function serialize_RetailCrm_Api_Model_Response_Integration_IntegrationModulesEditResponse(RetailCrm\Api\Model\Response\Integration\IntegrationModulesEditResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->info) {
    $jsonData["info"] = [];
if (null !== $model->info->telephony) {
    $jsonData["info"]["telephony"] = [];
if (null !== $model->info->telephony->makeCallUrl) {
    $jsonData["info"]["telephony"]["makeCallUrl"] = $model->info->telephony->makeCallUrl;
}
if (null !== $model->info->telephony->allowEdit) {
    $jsonData["info"]["telephony"]["allowEdit"] = $model->info->telephony->allowEdit;
}
if (null !== $model->info->telephony->inputEventSupported) {
    $jsonData["info"]["telephony"]["inputEventSupported"] = $model->info->telephony->inputEventSupported;
}
if (null !== $model->info->telephony->outputEventSupported) {
    $jsonData["info"]["telephony"]["outputEventSupported"] = $model->info->telephony->outputEventSupported;
}
if (null !== $model->info->telephony->hangupEventSupported) {
    $jsonData["info"]["telephony"]["hangupEventSupported"] = $model->info->telephony->hangupEventSupported;
}
if (null !== $model->info->telephony->changeUserStatusUrl) {
    $jsonData["info"]["telephony"]["changeUserStatusUrl"] = $model->info->telephony->changeUserStatusUrl;
}
if (null !== $model->info->telephony->additionalCodes) {
    $jsonData["info"]["telephony"]["additionalCodes"] = [];
foreach (array_keys($model->info->telephony->additionalCodes) as $index40) {
    $jsonData["info"]["telephony"]["additionalCodes"][$index40] = [];
if (null !== $model->info->telephony->additionalCodes[$index40]->userId) {
    $jsonData["info"]["telephony"]["additionalCodes"][$index40]["userId"] = $model->info->telephony->additionalCodes[$index40]->userId;
}
if (null !== $model->info->telephony->additionalCodes[$index40]->code) {
    $jsonData["info"]["telephony"]["additionalCodes"][$index40]["code"] = $model->info->telephony->additionalCodes[$index40]->code;
}

if (0 === \count($jsonData["info"]["telephony"]["additionalCodes"][$index40])) {
    $jsonData["info"]["telephony"]["additionalCodes"][$index40] = $emptyObject;
}

}

}
if (null !== $model->info->telephony->externalPhones) {
    $jsonData["info"]["telephony"]["externalPhones"] = [];
foreach (array_keys($model->info->telephony->externalPhones) as $index39) {
    $jsonData["info"]["telephony"]["externalPhones"][$index39] = [];
if (null !== $model->info->telephony->externalPhones[$index39]->siteCode) {
    $jsonData["info"]["telephony"]["externalPhones"][$index39]["siteCode"] = $model->info->telephony->externalPhones[$index39]->siteCode;
}
if (null !== $model->info->telephony->externalPhones[$index39]->externalPhone) {
    $jsonData["info"]["telephony"]["externalPhones"][$index39]["externalPhone"] = $model->info->telephony->externalPhones[$index39]->externalPhone;
}

if (0 === \count($jsonData["info"]["telephony"]["externalPhones"][$index39])) {
    $jsonData["info"]["telephony"]["externalPhones"][$index39] = $emptyObject;
}

}

}

if (0 === \count($jsonData["info"]["telephony"])) {
    $jsonData["info"]["telephony"] = $emptyObject;
}

}
if (null !== $model->info->delivery) {
    $jsonData["info"]["delivery"] = [];
if (null !== $model->info->delivery->description) {
    $jsonData["info"]["delivery"]["description"] = $model->info->delivery->description;
}
if (null !== $model->info->delivery->actions) {
    $jsonData["info"]["delivery"]["actions"] = $model->info->delivery->actions;
}
if (null !== $model->info->delivery->payerType) {
    $jsonData["info"]["delivery"]["payerType"] = [];
foreach (array_keys($model->info->delivery->payerType) as $index33) {
    $jsonData["info"]["delivery"]["payerType"] = $model->info->delivery->payerType;
}

}
if (null !== $model->info->delivery->platePrintLimit) {
    $jsonData["info"]["delivery"]["platePrintLimit"] = $model->info->delivery->platePrintLimit;
}
if (null !== $model->info->delivery->rateDeliveryCost) {
    $jsonData["info"]["delivery"]["rateDeliveryCost"] = $model->info->delivery->rateDeliveryCost;
}
if (null !== $model->info->delivery->allowPackages) {
    $jsonData["info"]["delivery"]["allowPackages"] = $model->info->delivery->allowPackages;
}
if (null !== $model->info->delivery->codAvailable) {
    $jsonData["info"]["delivery"]["codAvailable"] = $model->info->delivery->codAvailable;
}
if (null !== $model->info->delivery->selfShipmentAvailable) {
    $jsonData["info"]["delivery"]["selfShipmentAvailable"] = $model->info->delivery->selfShipmentAvailable;
}
if (null !== $model->info->delivery->duplicateOrderProductSupported) {
    $jsonData["info"]["delivery"]["duplicateOrderProductSupported"] = $model->info->delivery->duplicateOrderProductSupported;
}
if (null !== $model->info->delivery->allowTrackNumber) {
    $jsonData["info"]["delivery"]["allowTrackNumber"] = $model->info->delivery->allowTrackNumber;
}
if (null !== $model->info->delivery->availableCountries) {
    $jsonData["info"]["delivery"]["availableCountries"] = [];
foreach (array_keys($model->info->delivery->availableCountries) as $index42) {
    $jsonData["info"]["delivery"]["availableCountries"] = $model->info->delivery->availableCountries;
}

}
if (null !== $model->info->delivery->requiredFields) {
    $jsonData["info"]["delivery"]["requiredFields"] = [];
foreach (array_keys($model->info->delivery->requiredFields) as $index38) {
    $jsonData["info"]["delivery"]["requiredFields"] = $model->info->delivery->requiredFields;
}

}
if (null !== $model->info->delivery->statusList) {
    $jsonData["info"]["delivery"]["statusList"] = [];
foreach (array_keys($model->info->delivery->statusList) as $index34) {
    $jsonData["info"]["delivery"]["statusList"][$index34] = [];
if (null !== $model->info->delivery->statusList[$index34]->code) {
    $jsonData["info"]["delivery"]["statusList"][$index34]["code"] = $model->info->delivery->statusList[$index34]->code;
}
if (null !== $model->info->delivery->statusList[$index34]->name) {
    $jsonData["info"]["delivery"]["statusList"][$index34]["name"] = $model->info->delivery->statusList[$index34]->name;
}
if (null !== $model->info->delivery->statusList[$index34]->isEditable) {
    $jsonData["info"]["delivery"]["statusList"][$index34]["isEditable"] = $model->info->delivery->statusList[$index34]->isEditable;
}

if (0 === \count($jsonData["info"]["delivery"]["statusList"][$index34])) {
    $jsonData["info"]["delivery"]["statusList"][$index34] = $emptyObject;
}

}

}
if (null !== $model->info->delivery->plateList) {
    $jsonData["info"]["delivery"]["plateList"] = [];
foreach (array_keys($model->info->delivery->plateList) as $index33) {
    $jsonData["info"]["delivery"]["plateList"][$index33] = [];
if (null !== $model->info->delivery->plateList[$index33]->type) {
    $jsonData["info"]["delivery"]["plateList"][$index33]["type"] = $model->info->delivery->plateList[$index33]->type;
}
if (null !== $model->info->delivery->plateList[$index33]->code) {
    $jsonData["info"]["delivery"]["plateList"][$index33]["code"] = $model->info->delivery->plateList[$index33]->code;
}
if (null !== $model->info->delivery->plateList[$index33]->label) {
    $jsonData["info"]["delivery"]["plateList"][$index33]["label"] = $model->info->delivery->plateList[$index33]->label;
}

if (0 === \count($jsonData["info"]["delivery"]["plateList"][$index33])) {
    $jsonData["info"]["delivery"]["plateList"][$index33] = $emptyObject;
}

}

}
if (null !== $model->info->delivery->deliveryDataFieldList) {
    $jsonData["info"]["delivery"]["deliveryDataFieldList"] = [];
foreach (array_keys($model->info->delivery->deliveryDataFieldList) as $index45) {
    $jsonData["info"]["delivery"]["deliveryDataFieldList"][$index45] = [];
if (null !== $model->info->delivery->deliveryDataFieldList[$index45]->code) {
    $jsonData["info"]["delivery"]["deliveryDataFieldList"][$index45]["code"] = $model->info->delivery->deliveryDataFieldList[$index45]->code;
}
if (null !== $model->info->delivery->deliveryDataFieldList[$index45]->label) {
    $jsonData["info"]["delivery"]["deliveryDataFieldList"][$index45]["label"] = $model->info->delivery->deliveryDataFieldList[$index45]->label;
}
if (null !== $model->info->delivery->deliveryDataFieldList[$index45]->hint) {
    $jsonData["info"]["delivery"]["deliveryDataFieldList"][$index45]["hint"] = $model->info->delivery->deliveryDataFieldList[$index45]->hint;
}
if (null !== $model->info->delivery->deliveryDataFieldList[$index45]->type) {
    $jsonData["info"]["delivery"]["deliveryDataFieldList"][$index45]["type"] = $model->info->delivery->deliveryDataFieldList[$index45]->type;
}
if (null !== $model->info->delivery->deliveryDataFieldList[$index45]->multiple) {
    $jsonData["info"]["delivery"]["deliveryDataFieldList"][$index45]["multiple"] = $model->info->delivery->deliveryDataFieldList[$index45]->multiple;
}
if (null !== $model->info->delivery->deliveryDataFieldList[$index45]->choices) {
    $jsonData["info"]["delivery"]["deliveryDataFieldList"][$index45]["choices"] = $model->info->delivery->deliveryDataFieldList[$index45]->choices;
}
if (null !== $model->info->delivery->deliveryDataFieldList[$index45]->autocompleteUrl) {
    $jsonData["info"]["delivery"]["deliveryDataFieldList"][$index45]["autocompleteUrl"] = $model->info->delivery->deliveryDataFieldList[$index45]->autocompleteUrl;
}
if (null !== $model->info->delivery->deliveryDataFieldList[$index45]->visible) {
    $jsonData["info"]["delivery"]["deliveryDataFieldList"][$index45]["visible"] = $model->info->delivery->deliveryDataFieldList[$index45]->visible;
}
if (null !== $model->info->delivery->deliveryDataFieldList[$index45]->required) {
    $jsonData["info"]["delivery"]["deliveryDataFieldList"][$index45]["required"] = $model->info->delivery->deliveryDataFieldList[$index45]->required;
}
if (null !== $model->info->delivery->deliveryDataFieldList[$index45]->affectsCost) {
    $jsonData["info"]["delivery"]["deliveryDataFieldList"][$index45]["affectsCost"] = $model->info->delivery->deliveryDataFieldList[$index45]->affectsCost;
}
if (null !== $model->info->delivery->deliveryDataFieldList[$index45]->editable) {
    $jsonData["info"]["delivery"]["deliveryDataFieldList"][$index45]["editable"] = $model->info->delivery->deliveryDataFieldList[$index45]->editable;
}

if (0 === \count($jsonData["info"]["delivery"]["deliveryDataFieldList"][$index45])) {
    $jsonData["info"]["delivery"]["deliveryDataFieldList"][$index45] = $emptyObject;
}

}

}
if (null !== $model->info->delivery->shipmentDataFieldList) {
    $jsonData["info"]["delivery"]["shipmentDataFieldList"] = [];
foreach (array_keys($model->info->delivery->shipmentDataFieldList) as $index45) {
    $jsonData["info"]["delivery"]["shipmentDataFieldList"][$index45] = [];
if (null !== $model->info->delivery->shipmentDataFieldList[$index45]->code) {
    $jsonData["info"]["delivery"]["shipmentDataFieldList"][$index45]["code"] = $model->info->delivery->shipmentDataFieldList[$index45]->code;
}
if (null !== $model->info->delivery->shipmentDataFieldList[$index45]->label) {
    $jsonData["info"]["delivery"]["shipmentDataFieldList"][$index45]["label"] = $model->info->delivery->shipmentDataFieldList[$index45]->label;
}
if (null !== $model->info->delivery->shipmentDataFieldList[$index45]->hint) {
    $jsonData["info"]["delivery"]["shipmentDataFieldList"][$index45]["hint"] = $model->info->delivery->shipmentDataFieldList[$index45]->hint;
}
if (null !== $model->info->delivery->shipmentDataFieldList[$index45]->type) {
    $jsonData["info"]["delivery"]["shipmentDataFieldList"][$index45]["type"] = $model->info->delivery->shipmentDataFieldList[$index45]->type;
}
if (null !== $model->info->delivery->shipmentDataFieldList[$index45]->multiple) {
    $jsonData["info"]["delivery"]["shipmentDataFieldList"][$index45]["multiple"] = $model->info->delivery->shipmentDataFieldList[$index45]->multiple;
}
if (null !== $model->info->delivery->shipmentDataFieldList[$index45]->choices) {
    $jsonData["info"]["delivery"]["shipmentDataFieldList"][$index45]["choices"] = $model->info->delivery->shipmentDataFieldList[$index45]->choices;
}
if (null !== $model->info->delivery->shipmentDataFieldList[$index45]->autocompleteUrl) {
    $jsonData["info"]["delivery"]["shipmentDataFieldList"][$index45]["autocompleteUrl"] = $model->info->delivery->shipmentDataFieldList[$index45]->autocompleteUrl;
}
if (null !== $model->info->delivery->shipmentDataFieldList[$index45]->visible) {
    $jsonData["info"]["delivery"]["shipmentDataFieldList"][$index45]["visible"] = $model->info->delivery->shipmentDataFieldList[$index45]->visible;
}
if (null !== $model->info->delivery->shipmentDataFieldList[$index45]->required) {
    $jsonData["info"]["delivery"]["shipmentDataFieldList"][$index45]["required"] = $model->info->delivery->shipmentDataFieldList[$index45]->required;
}
if (null !== $model->info->delivery->shipmentDataFieldList[$index45]->affectsCost) {
    $jsonData["info"]["delivery"]["shipmentDataFieldList"][$index45]["affectsCost"] = $model->info->delivery->shipmentDataFieldList[$index45]->affectsCost;
}
if (null !== $model->info->delivery->shipmentDataFieldList[$index45]->editable) {
    $jsonData["info"]["delivery"]["shipmentDataFieldList"][$index45]["editable"] = $model->info->delivery->shipmentDataFieldList[$index45]->editable;
}

if (0 === \count($jsonData["info"]["delivery"]["shipmentDataFieldList"][$index45])) {
    $jsonData["info"]["delivery"]["shipmentDataFieldList"][$index45] = $emptyObject;
}

}

}
if (null !== $model->info->delivery->settings) {
    $jsonData["info"]["delivery"]["settings"] = [];
if (null !== $model->info->delivery->settings->defaultPayerType) {
    $jsonData["info"]["delivery"]["settings"]["defaultPayerType"] = $model->info->delivery->settings->defaultPayerType;
}
if (null !== $model->info->delivery->settings->costCalculateBy) {
    $jsonData["info"]["delivery"]["settings"]["costCalculateBy"] = $model->info->delivery->settings->costCalculateBy;
}
if (null !== $model->info->delivery->settings->nullDeclaredValue) {
    $jsonData["info"]["delivery"]["settings"]["nullDeclaredValue"] = $model->info->delivery->settings->nullDeclaredValue;
}
if (null !== $model->info->delivery->settings->lockedByDefault) {
    $jsonData["info"]["delivery"]["settings"]["lockedByDefault"] = $model->info->delivery->settings->lockedByDefault;
}
if (null !== $model->info->delivery->settings->paymentTypes) {
    $jsonData["info"]["delivery"]["settings"]["paymentTypes"] = [];
foreach (array_keys($model->info->delivery->settings->paymentTypes) as $index48) {
    $jsonData["info"]["delivery"]["settings"]["paymentTypes"][$index48] = [];
if (null !== $model->info->delivery->settings->paymentTypes[$index48]->code) {
    $jsonData["info"]["delivery"]["settings"]["paymentTypes"][$index48]["code"] = $model->info->delivery->settings->paymentTypes[$index48]->code;
}
if (null !== $model->info->delivery->settings->paymentTypes[$index48]->active) {
    $jsonData["info"]["delivery"]["settings"]["paymentTypes"][$index48]["active"] = $model->info->delivery->settings->paymentTypes[$index48]->active;
}
if (null !== $model->info->delivery->settings->paymentTypes[$index48]->cod) {
    $jsonData["info"]["delivery"]["settings"]["paymentTypes"][$index48]["cod"] = $model->info->delivery->settings->paymentTypes[$index48]->cod;
}

if (0 === \count($jsonData["info"]["delivery"]["settings"]["paymentTypes"][$index48])) {
    $jsonData["info"]["delivery"]["settings"]["paymentTypes"][$index48] = $emptyObject;
}

}

}
if (null !== $model->info->delivery->settings->shipmentPoints) {
    $jsonData["info"]["delivery"]["settings"]["shipmentPoints"] = [];
foreach (array_keys($model->info->delivery->settings->shipmentPoints) as $index50) {
    $jsonData["info"]["delivery"]["settings"]["shipmentPoints"][$index50] = [];
if (null !== $model->info->delivery->settings->shipmentPoints[$index50]->code) {
    $jsonData["info"]["delivery"]["settings"]["shipmentPoints"][$index50]["code"] = $model->info->delivery->settings->shipmentPoints[$index50]->code;
}
if (null !== $model->info->delivery->settings->shipmentPoints[$index50]->shipmentPointId) {
    $jsonData["info"]["delivery"]["settings"]["shipmentPoints"][$index50]["shipmentPointId"] = $model->info->delivery->settings->shipmentPoints[$index50]->shipmentPointId;
}
if (null !== $model->info->delivery->settings->shipmentPoints[$index50]->shipmentPointLabel) {
    $jsonData["info"]["delivery"]["settings"]["shipmentPoints"][$index50]["shipmentPointLabel"] = $model->info->delivery->settings->shipmentPoints[$index50]->shipmentPointLabel;
}

if (0 === \count($jsonData["info"]["delivery"]["settings"]["shipmentPoints"][$index50])) {
    $jsonData["info"]["delivery"]["settings"]["shipmentPoints"][$index50] = $emptyObject;
}

}

}
if (null !== $model->info->delivery->settings->statuses) {
    $jsonData["info"]["delivery"]["settings"]["statuses"] = [];
foreach (array_keys($model->info->delivery->settings->statuses) as $index44) {
    $jsonData["info"]["delivery"]["settings"]["statuses"][$index44] = [];
if (null !== $model->info->delivery->settings->statuses[$index44]->code) {
    $jsonData["info"]["delivery"]["settings"]["statuses"][$index44]["code"] = $model->info->delivery->settings->statuses[$index44]->code;
}
if (null !== $model->info->delivery->settings->statuses[$index44]->name) {
    $jsonData["info"]["delivery"]["settings"]["statuses"][$index44]["name"] = $model->info->delivery->settings->statuses[$index44]->name;
}
if (null !== $model->info->delivery->settings->statuses[$index44]->isEditable) {
    $jsonData["info"]["delivery"]["settings"]["statuses"][$index44]["isEditable"] = $model->info->delivery->settings->statuses[$index44]->isEditable;
}

if (0 === \count($jsonData["info"]["delivery"]["settings"]["statuses"][$index44])) {
    $jsonData["info"]["delivery"]["settings"]["statuses"][$index44] = $emptyObject;
}

}

}
if (null !== $model->info->delivery->settings->deliveryExtraData) {
    $jsonData["info"]["delivery"]["settings"]["deliveryExtraData"] = [];
foreach (array_keys($model->info->delivery->settings->deliveryExtraData) as $index53) {
    $jsonData["info"]["delivery"]["settings"]["deliveryExtraData"] = $model->info->delivery->settings->deliveryExtraData;
}

}
if (null !== $model->info->delivery->settings->shipmentExtraData) {
    $jsonData["info"]["delivery"]["settings"]["shipmentExtraData"] = [];
foreach (array_keys($model->info->delivery->settings->shipmentExtraData) as $index53) {
    $jsonData["info"]["delivery"]["settings"]["shipmentExtraData"] = $model->info->delivery->settings->shipmentExtraData;
}

}

if (0 === \count($jsonData["info"]["delivery"]["settings"])) {
    $jsonData["info"]["delivery"]["settings"] = $emptyObject;
}

}

if (0 === \count($jsonData["info"]["delivery"])) {
    $jsonData["info"]["delivery"] = $emptyObject;
}

}
if (null !== $model->info->store) {
    $jsonData["info"]["store"] = [];
if (null !== $model->info->store->actions) {
    $jsonData["info"]["store"]["actions"] = [];
foreach (array_keys($model->info->store->actions) as $index28) {
    $jsonData["info"]["store"]["actions"][$index28] = [];
if (null !== $model->info->store->actions[$index28]->code) {
    $jsonData["info"]["store"]["actions"][$index28]["code"] = $model->info->store->actions[$index28]->code;
}
if (null !== $model->info->store->actions[$index28]->url) {
    $jsonData["info"]["store"]["actions"][$index28]["url"] = $model->info->store->actions[$index28]->url;
}
if (null !== $model->info->store->actions[$index28]->callPoints) {
    $jsonData["info"]["store"]["actions"][$index28]["callPoints"] = $model->info->store->actions[$index28]->callPoints;
}

if (0 === \count($jsonData["info"]["store"]["actions"][$index28])) {
    $jsonData["info"]["store"]["actions"][$index28] = $emptyObject;
}

}

}

if (0 === \count($jsonData["info"]["store"])) {
    $jsonData["info"]["store"] = $emptyObject;
}

}
if (null !== $model->info->recommendation) {
    $jsonData["info"]["recommendation"] = [];
if (null !== $model->info->recommendation->actions) {
    $jsonData["info"]["recommendation"]["actions"] = $model->info->recommendation->actions;
}
if (null !== $model->info->recommendation->addDefaultModes) {
    $jsonData["info"]["recommendation"]["addDefaultModes"] = $model->info->recommendation->addDefaultModes;
}
if (null !== $model->info->recommendation->modes) {
    $jsonData["info"]["recommendation"]["modes"] = [];
foreach (array_keys($model->info->recommendation->modes) as $index35) {
    $jsonData["info"]["recommendation"]["modes"][$index35] = [];
if (null !== $model->info->recommendation->modes[$index35]->code) {
    $jsonData["info"]["recommendation"]["modes"][$index35]["code"] = $model->info->recommendation->modes[$index35]->code;
}
if (null !== $model->info->recommendation->modes[$index35]->names) {
    $jsonData["info"]["recommendation"]["modes"][$index35]["names"] = $model->info->recommendation->modes[$index35]->names;
}

if (0 === \count($jsonData["info"]["recommendation"]["modes"][$index35])) {
    $jsonData["info"]["recommendation"]["modes"][$index35] = $emptyObject;
}

}

}

if (0 === \count($jsonData["info"]["recommendation"])) {
    $jsonData["info"]["recommendation"] = $emptyObject;
}

}
if (null !== $model->info->payment) {
    $jsonData["info"]["payment"] = [];
if (null !== $model->info->payment->actions) {
    $jsonData["info"]["payment"]["actions"] = [];
if (null !== $model->info->payment->actions->create) {
    $jsonData["info"]["payment"]["actions"]["create"] = $model->info->payment->actions->create;
}
if (null !== $model->info->payment->actions->approve) {
    $jsonData["info"]["payment"]["actions"]["approve"] = $model->info->payment->actions->approve;
}
if (null !== $model->info->payment->actions->cancel) {
    $jsonData["info"]["payment"]["actions"]["cancel"] = $model->info->payment->actions->cancel;
}
if (null !== $model->info->payment->actions->refund) {
    $jsonData["info"]["payment"]["actions"]["refund"] = $model->info->payment->actions->refund;
}

if (0 === \count($jsonData["info"]["payment"]["actions"])) {
    $jsonData["info"]["payment"]["actions"] = $emptyObject;
}

}
if (null !== $model->info->payment->currencies) {
    $jsonData["info"]["payment"]["currencies"] = $model->info->payment->currencies;
}
if (null !== $model->info->payment->invoiceTypes) {
    $jsonData["info"]["payment"]["invoiceTypes"] = $model->info->payment->invoiceTypes;
}
if (null !== $model->info->payment->shops) {
    $jsonData["info"]["payment"]["shops"] = [];
foreach (array_keys($model->info->payment->shops) as $index28) {
    $jsonData["info"]["payment"]["shops"][$index28] = [];
if (null !== $model->info->payment->shops[$index28]->code) {
    $jsonData["info"]["payment"]["shops"][$index28]["code"] = $model->info->payment->shops[$index28]->code;
}
if (null !== $model->info->payment->shops[$index28]->name) {
    $jsonData["info"]["payment"]["shops"][$index28]["name"] = $model->info->payment->shops[$index28]->name;
}
if (null !== $model->info->payment->shops[$index28]->active) {
    $jsonData["info"]["payment"]["shops"][$index28]["active"] = $model->info->payment->shops[$index28]->active;
}

if (0 === \count($jsonData["info"]["payment"]["shops"][$index28])) {
    $jsonData["info"]["payment"]["shops"][$index28] = $emptyObject;
}

}

}

if (0 === \count($jsonData["info"]["payment"])) {
    $jsonData["info"]["payment"] = $emptyObject;
}

}
if (null !== $model->info->mgTransport) {
    $jsonData["info"]["mgTransport"] = [];
if (null !== $model->info->mgTransport->token) {
    $jsonData["info"]["mgTransport"]["token"] = $model->info->mgTransport->token;
}
if (null !== $model->info->mgTransport->isActive) {
    $jsonData["info"]["mgTransport"]["isActive"] = $model->info->mgTransport->isActive;
}
if (null !== $model->info->mgTransport->webhookUrl) {
    $jsonData["info"]["mgTransport"]["webhookUrl"] = $model->info->mgTransport->webhookUrl;
}
if (null !== $model->info->mgTransport->endpointUrl) {
    $jsonData["info"]["mgTransport"]["endpointUrl"] = $model->info->mgTransport->endpointUrl;
}

if (0 === \count($jsonData["info"]["mgTransport"])) {
    $jsonData["info"]["mgTransport"] = $emptyObject;
}

}
if (null !== $model->info->mgBot) {
    $jsonData["info"]["mgBot"] = [];
if (null !== $model->info->mgBot->isActive) {
    $jsonData["info"]["mgBot"]["isActive"] = $model->info->mgBot->isActive;
}
if (null !== $model->info->mgBot->logo) {
    $jsonData["info"]["mgBot"]["logo"] = $model->info->mgBot->logo;
}
if (null !== $model->info->mgBot->token) {
    $jsonData["info"]["mgBot"]["token"] = $model->info->mgBot->token;
}
if (null !== $model->info->mgBot->name) {
    $jsonData["info"]["mgBot"]["name"] = $model->info->mgBot->name;
}

if (0 === \count($jsonData["info"]["mgBot"])) {
    $jsonData["info"]["mgBot"] = $emptyObject;
}

}

if (0 === \count($jsonData["info"])) {
    $jsonData["info"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
