<?php

function serialize_RetailCrm_Api_Model_Entity_Integration_Delivery_DeliveryConfiguration(RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryConfiguration $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->description) {
    $jsonData["description"] = $model->description;
}
if (null !== $model->actions) {
    $jsonData["actions"] = $model->actions;
}
if (null !== $model->payerType) {
    $jsonData["payerType"] = [];
foreach (array_keys($model->payerType) as $index13) {
    $jsonData["payerType"] = $model->payerType;
}

}
if (null !== $model->platePrintLimit) {
    $jsonData["platePrintLimit"] = $model->platePrintLimit;
}
if (null !== $model->rateDeliveryCost) {
    $jsonData["rateDeliveryCost"] = $model->rateDeliveryCost;
}
if (null !== $model->allowPackages) {
    $jsonData["allowPackages"] = $model->allowPackages;
}
if (null !== $model->codAvailable) {
    $jsonData["codAvailable"] = $model->codAvailable;
}
if (null !== $model->selfShipmentAvailable) {
    $jsonData["selfShipmentAvailable"] = $model->selfShipmentAvailable;
}
if (null !== $model->duplicateOrderProductSupported) {
    $jsonData["duplicateOrderProductSupported"] = $model->duplicateOrderProductSupported;
}
if (null !== $model->allowTrackNumber) {
    $jsonData["allowTrackNumber"] = $model->allowTrackNumber;
}
if (null !== $model->availableCountries) {
    $jsonData["availableCountries"] = [];
foreach (array_keys($model->availableCountries) as $index22) {
    $jsonData["availableCountries"] = $model->availableCountries;
}

}
if (null !== $model->requiredFields) {
    $jsonData["requiredFields"] = [];
foreach (array_keys($model->requiredFields) as $index18) {
    $jsonData["requiredFields"] = $model->requiredFields;
}

}
if (null !== $model->statusList) {
    $jsonData["statusList"] = [];
foreach (array_keys($model->statusList) as $index14) {
    $jsonData["statusList"][$index14] = [];
if (null !== $model->statusList[$index14]->code) {
    $jsonData["statusList"][$index14]["code"] = $model->statusList[$index14]->code;
}
if (null !== $model->statusList[$index14]->name) {
    $jsonData["statusList"][$index14]["name"] = $model->statusList[$index14]->name;
}
if (null !== $model->statusList[$index14]->isEditable) {
    $jsonData["statusList"][$index14]["isEditable"] = $model->statusList[$index14]->isEditable;
}

if (0 === \count($jsonData["statusList"][$index14])) {
    $jsonData["statusList"][$index14] = $emptyObject;
}

}

}
if (null !== $model->plateList) {
    $jsonData["plateList"] = [];
foreach (array_keys($model->plateList) as $index13) {
    $jsonData["plateList"][$index13] = [];
if (null !== $model->plateList[$index13]->type) {
    $jsonData["plateList"][$index13]["type"] = $model->plateList[$index13]->type;
}
if (null !== $model->plateList[$index13]->code) {
    $jsonData["plateList"][$index13]["code"] = $model->plateList[$index13]->code;
}
if (null !== $model->plateList[$index13]->label) {
    $jsonData["plateList"][$index13]["label"] = $model->plateList[$index13]->label;
}

if (0 === \count($jsonData["plateList"][$index13])) {
    $jsonData["plateList"][$index13] = $emptyObject;
}

}

}
if (null !== $model->deliveryDataFieldList) {
    $jsonData["deliveryDataFieldList"] = [];
foreach (array_keys($model->deliveryDataFieldList) as $index25) {
    $jsonData["deliveryDataFieldList"][$index25] = [];
if (null !== $model->deliveryDataFieldList[$index25]->code) {
    $jsonData["deliveryDataFieldList"][$index25]["code"] = $model->deliveryDataFieldList[$index25]->code;
}
if (null !== $model->deliveryDataFieldList[$index25]->label) {
    $jsonData["deliveryDataFieldList"][$index25]["label"] = $model->deliveryDataFieldList[$index25]->label;
}
if (null !== $model->deliveryDataFieldList[$index25]->hint) {
    $jsonData["deliveryDataFieldList"][$index25]["hint"] = $model->deliveryDataFieldList[$index25]->hint;
}
if (null !== $model->deliveryDataFieldList[$index25]->type) {
    $jsonData["deliveryDataFieldList"][$index25]["type"] = $model->deliveryDataFieldList[$index25]->type;
}
if (null !== $model->deliveryDataFieldList[$index25]->multiple) {
    $jsonData["deliveryDataFieldList"][$index25]["multiple"] = $model->deliveryDataFieldList[$index25]->multiple;
}
if (null !== $model->deliveryDataFieldList[$index25]->choices) {
    $jsonData["deliveryDataFieldList"][$index25]["choices"] = $model->deliveryDataFieldList[$index25]->choices;
}
if (null !== $model->deliveryDataFieldList[$index25]->autocompleteUrl) {
    $jsonData["deliveryDataFieldList"][$index25]["autocompleteUrl"] = $model->deliveryDataFieldList[$index25]->autocompleteUrl;
}
if (null !== $model->deliveryDataFieldList[$index25]->visible) {
    $jsonData["deliveryDataFieldList"][$index25]["visible"] = $model->deliveryDataFieldList[$index25]->visible;
}
if (null !== $model->deliveryDataFieldList[$index25]->required) {
    $jsonData["deliveryDataFieldList"][$index25]["required"] = $model->deliveryDataFieldList[$index25]->required;
}
if (null !== $model->deliveryDataFieldList[$index25]->affectsCost) {
    $jsonData["deliveryDataFieldList"][$index25]["affectsCost"] = $model->deliveryDataFieldList[$index25]->affectsCost;
}
if (null !== $model->deliveryDataFieldList[$index25]->editable) {
    $jsonData["deliveryDataFieldList"][$index25]["editable"] = $model->deliveryDataFieldList[$index25]->editable;
}

if (0 === \count($jsonData["deliveryDataFieldList"][$index25])) {
    $jsonData["deliveryDataFieldList"][$index25] = $emptyObject;
}

}

}
if (null !== $model->shipmentDataFieldList) {
    $jsonData["shipmentDataFieldList"] = [];
foreach (array_keys($model->shipmentDataFieldList) as $index25) {
    $jsonData["shipmentDataFieldList"][$index25] = [];
if (null !== $model->shipmentDataFieldList[$index25]->code) {
    $jsonData["shipmentDataFieldList"][$index25]["code"] = $model->shipmentDataFieldList[$index25]->code;
}
if (null !== $model->shipmentDataFieldList[$index25]->label) {
    $jsonData["shipmentDataFieldList"][$index25]["label"] = $model->shipmentDataFieldList[$index25]->label;
}
if (null !== $model->shipmentDataFieldList[$index25]->hint) {
    $jsonData["shipmentDataFieldList"][$index25]["hint"] = $model->shipmentDataFieldList[$index25]->hint;
}
if (null !== $model->shipmentDataFieldList[$index25]->type) {
    $jsonData["shipmentDataFieldList"][$index25]["type"] = $model->shipmentDataFieldList[$index25]->type;
}
if (null !== $model->shipmentDataFieldList[$index25]->multiple) {
    $jsonData["shipmentDataFieldList"][$index25]["multiple"] = $model->shipmentDataFieldList[$index25]->multiple;
}
if (null !== $model->shipmentDataFieldList[$index25]->choices) {
    $jsonData["shipmentDataFieldList"][$index25]["choices"] = $model->shipmentDataFieldList[$index25]->choices;
}
if (null !== $model->shipmentDataFieldList[$index25]->autocompleteUrl) {
    $jsonData["shipmentDataFieldList"][$index25]["autocompleteUrl"] = $model->shipmentDataFieldList[$index25]->autocompleteUrl;
}
if (null !== $model->shipmentDataFieldList[$index25]->visible) {
    $jsonData["shipmentDataFieldList"][$index25]["visible"] = $model->shipmentDataFieldList[$index25]->visible;
}
if (null !== $model->shipmentDataFieldList[$index25]->required) {
    $jsonData["shipmentDataFieldList"][$index25]["required"] = $model->shipmentDataFieldList[$index25]->required;
}
if (null !== $model->shipmentDataFieldList[$index25]->affectsCost) {
    $jsonData["shipmentDataFieldList"][$index25]["affectsCost"] = $model->shipmentDataFieldList[$index25]->affectsCost;
}
if (null !== $model->shipmentDataFieldList[$index25]->editable) {
    $jsonData["shipmentDataFieldList"][$index25]["editable"] = $model->shipmentDataFieldList[$index25]->editable;
}

if (0 === \count($jsonData["shipmentDataFieldList"][$index25])) {
    $jsonData["shipmentDataFieldList"][$index25] = $emptyObject;
}

}

}
if (null !== $model->settings) {
    $jsonData["settings"] = [];
if (null !== $model->settings->defaultPayerType) {
    $jsonData["settings"]["defaultPayerType"] = $model->settings->defaultPayerType;
}
if (null !== $model->settings->costCalculateBy) {
    $jsonData["settings"]["costCalculateBy"] = $model->settings->costCalculateBy;
}
if (null !== $model->settings->nullDeclaredValue) {
    $jsonData["settings"]["nullDeclaredValue"] = $model->settings->nullDeclaredValue;
}
if (null !== $model->settings->lockedByDefault) {
    $jsonData["settings"]["lockedByDefault"] = $model->settings->lockedByDefault;
}
if (null !== $model->settings->paymentTypes) {
    $jsonData["settings"]["paymentTypes"] = [];
foreach (array_keys($model->settings->paymentTypes) as $index28) {
    $jsonData["settings"]["paymentTypes"][$index28] = [];
if (null !== $model->settings->paymentTypes[$index28]->code) {
    $jsonData["settings"]["paymentTypes"][$index28]["code"] = $model->settings->paymentTypes[$index28]->code;
}
if (null !== $model->settings->paymentTypes[$index28]->active) {
    $jsonData["settings"]["paymentTypes"][$index28]["active"] = $model->settings->paymentTypes[$index28]->active;
}
if (null !== $model->settings->paymentTypes[$index28]->cod) {
    $jsonData["settings"]["paymentTypes"][$index28]["cod"] = $model->settings->paymentTypes[$index28]->cod;
}

if (0 === \count($jsonData["settings"]["paymentTypes"][$index28])) {
    $jsonData["settings"]["paymentTypes"][$index28] = $emptyObject;
}

}

}
if (null !== $model->settings->shipmentPoints) {
    $jsonData["settings"]["shipmentPoints"] = [];
foreach (array_keys($model->settings->shipmentPoints) as $index30) {
    $jsonData["settings"]["shipmentPoints"][$index30] = [];
if (null !== $model->settings->shipmentPoints[$index30]->code) {
    $jsonData["settings"]["shipmentPoints"][$index30]["code"] = $model->settings->shipmentPoints[$index30]->code;
}
if (null !== $model->settings->shipmentPoints[$index30]->shipmentPointId) {
    $jsonData["settings"]["shipmentPoints"][$index30]["shipmentPointId"] = $model->settings->shipmentPoints[$index30]->shipmentPointId;
}
if (null !== $model->settings->shipmentPoints[$index30]->shipmentPointLabel) {
    $jsonData["settings"]["shipmentPoints"][$index30]["shipmentPointLabel"] = $model->settings->shipmentPoints[$index30]->shipmentPointLabel;
}

if (0 === \count($jsonData["settings"]["shipmentPoints"][$index30])) {
    $jsonData["settings"]["shipmentPoints"][$index30] = $emptyObject;
}

}

}
if (null !== $model->settings->statuses) {
    $jsonData["settings"]["statuses"] = [];
foreach (array_keys($model->settings->statuses) as $index24) {
    $jsonData["settings"]["statuses"][$index24] = [];
if (null !== $model->settings->statuses[$index24]->code) {
    $jsonData["settings"]["statuses"][$index24]["code"] = $model->settings->statuses[$index24]->code;
}
if (null !== $model->settings->statuses[$index24]->name) {
    $jsonData["settings"]["statuses"][$index24]["name"] = $model->settings->statuses[$index24]->name;
}
if (null !== $model->settings->statuses[$index24]->isEditable) {
    $jsonData["settings"]["statuses"][$index24]["isEditable"] = $model->settings->statuses[$index24]->isEditable;
}

if (0 === \count($jsonData["settings"]["statuses"][$index24])) {
    $jsonData["settings"]["statuses"][$index24] = $emptyObject;
}

}

}
if (null !== $model->settings->deliveryExtraData) {
    $jsonData["settings"]["deliveryExtraData"] = [];
foreach (array_keys($model->settings->deliveryExtraData) as $index33) {
    $jsonData["settings"]["deliveryExtraData"] = $model->settings->deliveryExtraData;
}

}
if (null !== $model->settings->shipmentExtraData) {
    $jsonData["settings"]["shipmentExtraData"] = [];
foreach (array_keys($model->settings->shipmentExtraData) as $index33) {
    $jsonData["settings"]["shipmentExtraData"] = $model->settings->shipmentExtraData;
}

}

if (0 === \count($jsonData["settings"])) {
    $jsonData["settings"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
