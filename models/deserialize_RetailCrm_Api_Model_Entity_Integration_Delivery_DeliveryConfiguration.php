<?php

function deserialize_RetailCrm_Api_Model_Entity_Integration_Delivery_DeliveryConfiguration(array $jsonData): RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryConfiguration
{
    
$model = new RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryConfiguration();
if (isset($jsonData['description'])) {
    $model->description = $jsonData['description'];

}
if (isset($jsonData['actions'])) {
    $model->actions = $jsonData['actions'];

}
if (isset($jsonData['payerType'])) {
    $model->payerType = [];
foreach (array_keys($jsonData['payerType']) as $index22) {
    $model->payerType[$index22] = $jsonData['payerType'][$index22];

}

}
if (isset($jsonData['platePrintLimit'])) {
    $model->platePrintLimit = $jsonData['platePrintLimit'];

}
if (isset($jsonData['rateDeliveryCost'])) {
    $model->rateDeliveryCost = $jsonData['rateDeliveryCost'];

}
if (isset($jsonData['allowPackages'])) {
    $model->allowPackages = $jsonData['allowPackages'];

}
if (isset($jsonData['codAvailable'])) {
    $model->codAvailable = $jsonData['codAvailable'];

}
if (isset($jsonData['selfShipmentAvailable'])) {
    $model->selfShipmentAvailable = $jsonData['selfShipmentAvailable'];

}
if (isset($jsonData['duplicateOrderProductSupported'])) {
    $model->duplicateOrderProductSupported = $jsonData['duplicateOrderProductSupported'];

}
if (isset($jsonData['allowTrackNumber'])) {
    $model->allowTrackNumber = $jsonData['allowTrackNumber'];

}
if (isset($jsonData['availableCountries'])) {
    $model->availableCountries = [];
foreach (array_keys($jsonData['availableCountries']) as $index31) {
    $model->availableCountries[$index31] = $jsonData['availableCountries'][$index31];

}

}
if (isset($jsonData['requiredFields'])) {
    $model->requiredFields = [];
foreach (array_keys($jsonData['requiredFields']) as $index27) {
    $model->requiredFields[$index27] = $jsonData['requiredFields'][$index27];

}

}
if (isset($jsonData['statusList'])) {
    $model->statusList = [];
foreach (array_keys($jsonData['statusList']) as $index23) {
    
$model->statusList[$index23] = new RetailCrm\Api\Model\Entity\Integration\Delivery\Status();
if (isset($jsonData['statusList'][$index23]['code'])) {
    $model->statusList[$index23]->code = $jsonData['statusList'][$index23]['code'];

}
if (isset($jsonData['statusList'][$index23]['name'])) {
    $model->statusList[$index23]->name = $jsonData['statusList'][$index23]['name'];

}
if (isset($jsonData['statusList'][$index23]['isEditable'])) {
    $model->statusList[$index23]->isEditable = $jsonData['statusList'][$index23]['isEditable'];

}


}

}
if (isset($jsonData['plateList'])) {
    $model->plateList = [];
foreach (array_keys($jsonData['plateList']) as $index22) {
    
$model->plateList[$index22] = new RetailCrm\Api\Model\Entity\Integration\Delivery\Plate();
if (isset($jsonData['plateList'][$index22]['type'])) {
    $model->plateList[$index22]->type = $jsonData['plateList'][$index22]['type'];

}
if (isset($jsonData['plateList'][$index22]['code'])) {
    $model->plateList[$index22]->code = $jsonData['plateList'][$index22]['code'];

}
if (isset($jsonData['plateList'][$index22]['label'])) {
    $model->plateList[$index22]->label = $jsonData['plateList'][$index22]['label'];

}


}

}
if (isset($jsonData['deliveryDataFieldList'])) {
    $model->deliveryDataFieldList = [];
foreach (array_keys($jsonData['deliveryDataFieldList']) as $index34) {
    
$model->deliveryDataFieldList[$index34] = new RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryDataField();
if (isset($jsonData['deliveryDataFieldList'][$index34]['code'])) {
    $model->deliveryDataFieldList[$index34]->code = $jsonData['deliveryDataFieldList'][$index34]['code'];

}
if (isset($jsonData['deliveryDataFieldList'][$index34]['label'])) {
    $model->deliveryDataFieldList[$index34]->label = $jsonData['deliveryDataFieldList'][$index34]['label'];

}
if (isset($jsonData['deliveryDataFieldList'][$index34]['hint'])) {
    $model->deliveryDataFieldList[$index34]->hint = $jsonData['deliveryDataFieldList'][$index34]['hint'];

}
if (isset($jsonData['deliveryDataFieldList'][$index34]['type'])) {
    $model->deliveryDataFieldList[$index34]->type = $jsonData['deliveryDataFieldList'][$index34]['type'];

}
if (isset($jsonData['deliveryDataFieldList'][$index34]['multiple'])) {
    $model->deliveryDataFieldList[$index34]->multiple = $jsonData['deliveryDataFieldList'][$index34]['multiple'];

}
if (isset($jsonData['deliveryDataFieldList'][$index34]['choices'])) {
    $model->deliveryDataFieldList[$index34]->choices = $jsonData['deliveryDataFieldList'][$index34]['choices'];

}
if (isset($jsonData['deliveryDataFieldList'][$index34]['autocompleteUrl'])) {
    $model->deliveryDataFieldList[$index34]->autocompleteUrl = $jsonData['deliveryDataFieldList'][$index34]['autocompleteUrl'];

}
if (isset($jsonData['deliveryDataFieldList'][$index34]['visible'])) {
    $model->deliveryDataFieldList[$index34]->visible = $jsonData['deliveryDataFieldList'][$index34]['visible'];

}
if (isset($jsonData['deliveryDataFieldList'][$index34]['required'])) {
    $model->deliveryDataFieldList[$index34]->required = $jsonData['deliveryDataFieldList'][$index34]['required'];

}
if (isset($jsonData['deliveryDataFieldList'][$index34]['affectsCost'])) {
    $model->deliveryDataFieldList[$index34]->affectsCost = $jsonData['deliveryDataFieldList'][$index34]['affectsCost'];

}
if (isset($jsonData['deliveryDataFieldList'][$index34]['editable'])) {
    $model->deliveryDataFieldList[$index34]->editable = $jsonData['deliveryDataFieldList'][$index34]['editable'];

}


}

}
if (isset($jsonData['shipmentDataFieldList'])) {
    $model->shipmentDataFieldList = [];
foreach (array_keys($jsonData['shipmentDataFieldList']) as $index34) {
    
$model->shipmentDataFieldList[$index34] = new RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryDataField();
if (isset($jsonData['shipmentDataFieldList'][$index34]['code'])) {
    $model->shipmentDataFieldList[$index34]->code = $jsonData['shipmentDataFieldList'][$index34]['code'];

}
if (isset($jsonData['shipmentDataFieldList'][$index34]['label'])) {
    $model->shipmentDataFieldList[$index34]->label = $jsonData['shipmentDataFieldList'][$index34]['label'];

}
if (isset($jsonData['shipmentDataFieldList'][$index34]['hint'])) {
    $model->shipmentDataFieldList[$index34]->hint = $jsonData['shipmentDataFieldList'][$index34]['hint'];

}
if (isset($jsonData['shipmentDataFieldList'][$index34]['type'])) {
    $model->shipmentDataFieldList[$index34]->type = $jsonData['shipmentDataFieldList'][$index34]['type'];

}
if (isset($jsonData['shipmentDataFieldList'][$index34]['multiple'])) {
    $model->shipmentDataFieldList[$index34]->multiple = $jsonData['shipmentDataFieldList'][$index34]['multiple'];

}
if (isset($jsonData['shipmentDataFieldList'][$index34]['choices'])) {
    $model->shipmentDataFieldList[$index34]->choices = $jsonData['shipmentDataFieldList'][$index34]['choices'];

}
if (isset($jsonData['shipmentDataFieldList'][$index34]['autocompleteUrl'])) {
    $model->shipmentDataFieldList[$index34]->autocompleteUrl = $jsonData['shipmentDataFieldList'][$index34]['autocompleteUrl'];

}
if (isset($jsonData['shipmentDataFieldList'][$index34]['visible'])) {
    $model->shipmentDataFieldList[$index34]->visible = $jsonData['shipmentDataFieldList'][$index34]['visible'];

}
if (isset($jsonData['shipmentDataFieldList'][$index34]['required'])) {
    $model->shipmentDataFieldList[$index34]->required = $jsonData['shipmentDataFieldList'][$index34]['required'];

}
if (isset($jsonData['shipmentDataFieldList'][$index34]['affectsCost'])) {
    $model->shipmentDataFieldList[$index34]->affectsCost = $jsonData['shipmentDataFieldList'][$index34]['affectsCost'];

}
if (isset($jsonData['shipmentDataFieldList'][$index34]['editable'])) {
    $model->shipmentDataFieldList[$index34]->editable = $jsonData['shipmentDataFieldList'][$index34]['editable'];

}


}

}
if (isset($jsonData['settings'])) {
    
$model->settings = new RetailCrm\Api\Model\Entity\Integration\Delivery\Settings();
if (isset($jsonData['settings']['defaultPayerType'])) {
    $model->settings->defaultPayerType = $jsonData['settings']['defaultPayerType'];

}
if (isset($jsonData['settings']['costCalculateBy'])) {
    $model->settings->costCalculateBy = $jsonData['settings']['costCalculateBy'];

}
if (isset($jsonData['settings']['nullDeclaredValue'])) {
    $model->settings->nullDeclaredValue = $jsonData['settings']['nullDeclaredValue'];

}
if (isset($jsonData['settings']['lockedByDefault'])) {
    $model->settings->lockedByDefault = $jsonData['settings']['lockedByDefault'];

}
if (isset($jsonData['settings']['paymentTypes'])) {
    $model->settings->paymentTypes = [];
foreach (array_keys($jsonData['settings']['paymentTypes']) as $index37) {
    
$model->settings->paymentTypes[$index37] = new RetailCrm\Api\Model\Entity\Integration\Delivery\PaymentType();
if (isset($jsonData['settings']['paymentTypes'][$index37]['code'])) {
    $model->settings->paymentTypes[$index37]->code = $jsonData['settings']['paymentTypes'][$index37]['code'];

}
if (isset($jsonData['settings']['paymentTypes'][$index37]['active'])) {
    $model->settings->paymentTypes[$index37]->active = $jsonData['settings']['paymentTypes'][$index37]['active'];

}
if (isset($jsonData['settings']['paymentTypes'][$index37]['cod'])) {
    $model->settings->paymentTypes[$index37]->cod = $jsonData['settings']['paymentTypes'][$index37]['cod'];

}


}

}
if (isset($jsonData['settings']['shipmentPoints'])) {
    $model->settings->shipmentPoints = [];
foreach (array_keys($jsonData['settings']['shipmentPoints']) as $index39) {
    
$model->settings->shipmentPoints[$index39] = new RetailCrm\Api\Model\Entity\Integration\Delivery\ShipmentPoint();
if (isset($jsonData['settings']['shipmentPoints'][$index39]['code'])) {
    $model->settings->shipmentPoints[$index39]->code = $jsonData['settings']['shipmentPoints'][$index39]['code'];

}
if (isset($jsonData['settings']['shipmentPoints'][$index39]['shipmentPointId'])) {
    $model->settings->shipmentPoints[$index39]->shipmentPointId = $jsonData['settings']['shipmentPoints'][$index39]['shipmentPointId'];

}
if (isset($jsonData['settings']['shipmentPoints'][$index39]['shipmentPointLabel'])) {
    $model->settings->shipmentPoints[$index39]->shipmentPointLabel = $jsonData['settings']['shipmentPoints'][$index39]['shipmentPointLabel'];

}


}

}
if (isset($jsonData['settings']['statuses'])) {
    $model->settings->statuses = [];
foreach (array_keys($jsonData['settings']['statuses']) as $index33) {
    
$model->settings->statuses[$index33] = new RetailCrm\Api\Model\Entity\Integration\Delivery\Status();
if (isset($jsonData['settings']['statuses'][$index33]['code'])) {
    $model->settings->statuses[$index33]->code = $jsonData['settings']['statuses'][$index33]['code'];

}
if (isset($jsonData['settings']['statuses'][$index33]['name'])) {
    $model->settings->statuses[$index33]->name = $jsonData['settings']['statuses'][$index33]['name'];

}
if (isset($jsonData['settings']['statuses'][$index33]['isEditable'])) {
    $model->settings->statuses[$index33]->isEditable = $jsonData['settings']['statuses'][$index33]['isEditable'];

}


}

}
if (isset($jsonData['settings']['deliveryExtraData'])) {
    $model->settings->deliveryExtraData = [];
foreach (array_keys($jsonData['settings']['deliveryExtraData']) as $index42) {
    $model->settings->deliveryExtraData[$index42] = $jsonData['settings']['deliveryExtraData'][$index42];

}

}
if (isset($jsonData['settings']['shipmentExtraData'])) {
    $model->settings->shipmentExtraData = [];
foreach (array_keys($jsonData['settings']['shipmentExtraData']) as $index42) {
    $model->settings->shipmentExtraData[$index42] = $jsonData['settings']['shipmentExtraData'][$index42];

}

}


}



    return $model;
}
