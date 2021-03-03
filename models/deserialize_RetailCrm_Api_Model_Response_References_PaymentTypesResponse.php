<?php

function deserialize_RetailCrm_Api_Model_Response_References_PaymentTypesResponse(array $jsonData): RetailCrm\Api\Model\Response\References\PaymentTypesResponse
{
    
$model = new RetailCrm\Api\Model\Response\References\PaymentTypesResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['paymentTypes'])) {
    $model->paymentTypes = [];
foreach (array_keys($jsonData['paymentTypes']) as $index25) {
    
$model->paymentTypes[$index25] = new RetailCrm\Api\Model\Entity\References\PaymentType();
if (isset($jsonData['paymentTypes'][$index25]['name'])) {
    $model->paymentTypes[$index25]->name = $jsonData['paymentTypes'][$index25]['name'];

}
if (isset($jsonData['paymentTypes'][$index25]['code'])) {
    $model->paymentTypes[$index25]->code = $jsonData['paymentTypes'][$index25]['code'];

}
if (isset($jsonData['paymentTypes'][$index25]['active'])) {
    $model->paymentTypes[$index25]->active = $jsonData['paymentTypes'][$index25]['active'];

}
if (isset($jsonData['paymentTypes'][$index25]['defaultForCrm'])) {
    $model->paymentTypes[$index25]->defaultForCrm = $jsonData['paymentTypes'][$index25]['defaultForCrm'];

}
if (isset($jsonData['paymentTypes'][$index25]['defaultForApi'])) {
    $model->paymentTypes[$index25]->defaultForApi = $jsonData['paymentTypes'][$index25]['defaultForApi'];

}
if (isset($jsonData['paymentTypes'][$index25]['description'])) {
    $model->paymentTypes[$index25]->description = $jsonData['paymentTypes'][$index25]['description'];

}
if (isset($jsonData['paymentTypes'][$index25]['deliveryTypes'])) {
    $model->paymentTypes[$index25]->deliveryTypes = [];
foreach (array_keys($jsonData['paymentTypes'][$index25]['deliveryTypes']) as $index52) {
    $model->paymentTypes[$index25]->deliveryTypes[$index52] = $jsonData['paymentTypes'][$index25]['deliveryTypes'][$index52];

}

}
if (isset($jsonData['paymentTypes'][$index25]['paymentStatuses'])) {
    $model->paymentTypes[$index25]->paymentStatuses = [];
foreach (array_keys($jsonData['paymentTypes'][$index25]['paymentStatuses']) as $index54) {
    $model->paymentTypes[$index25]->paymentStatuses[$index54] = $jsonData['paymentTypes'][$index25]['paymentStatuses'][$index54];

}

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule'])) {
    
$model->paymentTypes[$index25]->integrationModule = new RetailCrm\Api\Model\Entity\Integration\IntegrationModule();
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['code'])) {
    $model->paymentTypes[$index25]->integrationModule->code = $jsonData['paymentTypes'][$index25]['integrationModule']['code'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrationCode'])) {
    $model->paymentTypes[$index25]->integrationModule->integrationCode = $jsonData['paymentTypes'][$index25]['integrationModule']['integrationCode'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['active'])) {
    $model->paymentTypes[$index25]->integrationModule->active = $jsonData['paymentTypes'][$index25]['integrationModule']['active'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['freeze'])) {
    $model->paymentTypes[$index25]->integrationModule->freeze = $jsonData['paymentTypes'][$index25]['integrationModule']['freeze'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['name'])) {
    $model->paymentTypes[$index25]->integrationModule->name = $jsonData['paymentTypes'][$index25]['integrationModule']['name'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['logo'])) {
    $model->paymentTypes[$index25]->integrationModule->logo = $jsonData['paymentTypes'][$index25]['integrationModule']['logo'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['clientId'])) {
    $model->paymentTypes[$index25]->integrationModule->clientId = $jsonData['paymentTypes'][$index25]['integrationModule']['clientId'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['native'])) {
    $model->paymentTypes[$index25]->integrationModule->native = $jsonData['paymentTypes'][$index25]['integrationModule']['native'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['baseUrl'])) {
    $model->paymentTypes[$index25]->integrationModule->baseUrl = $jsonData['paymentTypes'][$index25]['integrationModule']['baseUrl'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['actions'])) {
    $model->paymentTypes[$index25]->integrationModule->actions = $jsonData['paymentTypes'][$index25]['integrationModule']['actions'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['availableCountries'])) {
    $model->paymentTypes[$index25]->integrationModule->availableCountries = $jsonData['paymentTypes'][$index25]['integrationModule']['availableCountries'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['accountUrl'])) {
    $model->paymentTypes[$index25]->integrationModule->accountUrl = $jsonData['paymentTypes'][$index25]['integrationModule']['accountUrl'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations'])) {
    
$model->paymentTypes[$index25]->integrationModule->integrations = new RetailCrm\Api\Model\Entity\Integration\Integrations();
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony'])) {
    
$model->paymentTypes[$index25]->integrationModule->integrations->telephony = new RetailCrm\Api\Model\Entity\Integration\Telephony\TelephonyConfiguration();
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony']['makeCallUrl'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->telephony->makeCallUrl = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony']['makeCallUrl'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony']['allowEdit'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->telephony->allowEdit = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony']['allowEdit'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony']['inputEventSupported'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->telephony->inputEventSupported = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony']['inputEventSupported'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony']['outputEventSupported'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->telephony->outputEventSupported = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony']['outputEventSupported'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony']['hangupEventSupported'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->telephony->hangupEventSupported = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony']['hangupEventSupported'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony']['changeUserStatusUrl'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->telephony->changeUserStatusUrl = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony']['changeUserStatusUrl'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony']['additionalCodes'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->telephony->additionalCodes = [];
foreach (array_keys($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony']['additionalCodes']) as $index104) {
    
$model->paymentTypes[$index25]->integrationModule->integrations->telephony->additionalCodes[$index104] = new RetailCrm\Api\Model\Entity\Integration\Telephony\SerializedAdditionalCodes();
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony']['additionalCodes'][$index104]['userId'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->telephony->additionalCodes[$index104]->userId = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony']['additionalCodes'][$index104]['userId'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony']['additionalCodes'][$index104]['code'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->telephony->additionalCodes[$index104]->code = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony']['additionalCodes'][$index104]['code'];

}


}

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony']['externalPhones'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->telephony->externalPhones = [];
foreach (array_keys($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony']['externalPhones']) as $index103) {
    
$model->paymentTypes[$index25]->integrationModule->integrations->telephony->externalPhones[$index103] = new RetailCrm\Api\Model\Entity\Integration\Telephony\SerializedExternalPhones();
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony']['externalPhones'][$index103]['siteCode'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->telephony->externalPhones[$index103]->siteCode = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony']['externalPhones'][$index103]['siteCode'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony']['externalPhones'][$index103]['externalPhone'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->telephony->externalPhones[$index103]->externalPhone = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['telephony']['externalPhones'][$index103]['externalPhone'];

}


}

}


}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery'])) {
    
$model->paymentTypes[$index25]->integrationModule->integrations->delivery = new RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryConfiguration();
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['description'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->description = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['description'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['actions'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->actions = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['actions'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['payerType'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->payerType = [];
foreach (array_keys($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['payerType']) as $index97) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->payerType[$index97] = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['payerType'][$index97];

}

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['platePrintLimit'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->platePrintLimit = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['platePrintLimit'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['rateDeliveryCost'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->rateDeliveryCost = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['rateDeliveryCost'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['allowPackages'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->allowPackages = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['allowPackages'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['codAvailable'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->codAvailable = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['codAvailable'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['selfShipmentAvailable'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->selfShipmentAvailable = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['selfShipmentAvailable'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['duplicateOrderProductSupported'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->duplicateOrderProductSupported = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['duplicateOrderProductSupported'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['allowTrackNumber'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->allowTrackNumber = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['allowTrackNumber'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['availableCountries'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->availableCountries = [];
foreach (array_keys($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['availableCountries']) as $index106) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->availableCountries[$index106] = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['availableCountries'][$index106];

}

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['requiredFields'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->requiredFields = [];
foreach (array_keys($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['requiredFields']) as $index102) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->requiredFields[$index102] = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['requiredFields'][$index102];

}

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['statusList'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->statusList = [];
foreach (array_keys($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['statusList']) as $index98) {
    
$model->paymentTypes[$index25]->integrationModule->integrations->delivery->statusList[$index98] = new RetailCrm\Api\Model\Entity\Integration\Delivery\Status();
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['statusList'][$index98]['code'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->statusList[$index98]->code = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['statusList'][$index98]['code'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['statusList'][$index98]['name'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->statusList[$index98]->name = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['statusList'][$index98]['name'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['statusList'][$index98]['isEditable'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->statusList[$index98]->isEditable = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['statusList'][$index98]['isEditable'];

}


}

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['plateList'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->plateList = [];
foreach (array_keys($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['plateList']) as $index97) {
    
$model->paymentTypes[$index25]->integrationModule->integrations->delivery->plateList[$index97] = new RetailCrm\Api\Model\Entity\Integration\Delivery\Plate();
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['plateList'][$index97]['type'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->plateList[$index97]->type = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['plateList'][$index97]['type'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['plateList'][$index97]['code'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->plateList[$index97]->code = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['plateList'][$index97]['code'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['plateList'][$index97]['label'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->plateList[$index97]->label = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['plateList'][$index97]['label'];

}


}

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['deliveryDataFieldList'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->deliveryDataFieldList = [];
foreach (array_keys($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['deliveryDataFieldList']) as $index109) {
    
$model->paymentTypes[$index25]->integrationModule->integrations->delivery->deliveryDataFieldList[$index109] = new RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryDataField();
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index109]['code'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->deliveryDataFieldList[$index109]->code = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index109]['code'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index109]['label'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->deliveryDataFieldList[$index109]->label = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index109]['label'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index109]['hint'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->deliveryDataFieldList[$index109]->hint = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index109]['hint'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index109]['type'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->deliveryDataFieldList[$index109]->type = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index109]['type'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index109]['multiple'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->deliveryDataFieldList[$index109]->multiple = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index109]['multiple'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index109]['choices'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->deliveryDataFieldList[$index109]->choices = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index109]['choices'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index109]['autocompleteUrl'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->deliveryDataFieldList[$index109]->autocompleteUrl = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index109]['autocompleteUrl'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index109]['visible'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->deliveryDataFieldList[$index109]->visible = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index109]['visible'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index109]['required'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->deliveryDataFieldList[$index109]->required = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index109]['required'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index109]['affectsCost'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->deliveryDataFieldList[$index109]->affectsCost = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index109]['affectsCost'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index109]['editable'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->deliveryDataFieldList[$index109]->editable = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index109]['editable'];

}


}

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['shipmentDataFieldList'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->shipmentDataFieldList = [];
foreach (array_keys($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['shipmentDataFieldList']) as $index109) {
    
$model->paymentTypes[$index25]->integrationModule->integrations->delivery->shipmentDataFieldList[$index109] = new RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryDataField();
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index109]['code'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->shipmentDataFieldList[$index109]->code = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index109]['code'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index109]['label'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->shipmentDataFieldList[$index109]->label = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index109]['label'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index109]['hint'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->shipmentDataFieldList[$index109]->hint = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index109]['hint'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index109]['type'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->shipmentDataFieldList[$index109]->type = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index109]['type'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index109]['multiple'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->shipmentDataFieldList[$index109]->multiple = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index109]['multiple'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index109]['choices'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->shipmentDataFieldList[$index109]->choices = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index109]['choices'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index109]['autocompleteUrl'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->shipmentDataFieldList[$index109]->autocompleteUrl = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index109]['autocompleteUrl'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index109]['visible'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->shipmentDataFieldList[$index109]->visible = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index109]['visible'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index109]['required'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->shipmentDataFieldList[$index109]->required = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index109]['required'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index109]['affectsCost'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->shipmentDataFieldList[$index109]->affectsCost = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index109]['affectsCost'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index109]['editable'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->shipmentDataFieldList[$index109]->editable = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index109]['editable'];

}


}

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings'])) {
    
$model->paymentTypes[$index25]->integrationModule->integrations->delivery->settings = new RetailCrm\Api\Model\Entity\Integration\Delivery\Settings();
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['defaultPayerType'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->settings->defaultPayerType = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['defaultPayerType'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['costCalculateBy'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->settings->costCalculateBy = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['costCalculateBy'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['nullDeclaredValue'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->settings->nullDeclaredValue = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['nullDeclaredValue'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['lockedByDefault'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->settings->lockedByDefault = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['lockedByDefault'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['paymentTypes'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->settings->paymentTypes = [];
foreach (array_keys($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['paymentTypes']) as $index112) {
    
$model->paymentTypes[$index25]->integrationModule->integrations->delivery->settings->paymentTypes[$index112] = new RetailCrm\Api\Model\Entity\Integration\Delivery\PaymentType();
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['paymentTypes'][$index112]['code'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->settings->paymentTypes[$index112]->code = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['paymentTypes'][$index112]['code'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['paymentTypes'][$index112]['active'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->settings->paymentTypes[$index112]->active = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['paymentTypes'][$index112]['active'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['paymentTypes'][$index112]['cod'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->settings->paymentTypes[$index112]->cod = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['paymentTypes'][$index112]['cod'];

}


}

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['shipmentPoints'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->settings->shipmentPoints = [];
foreach (array_keys($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['shipmentPoints']) as $index114) {
    
$model->paymentTypes[$index25]->integrationModule->integrations->delivery->settings->shipmentPoints[$index114] = new RetailCrm\Api\Model\Entity\Integration\Delivery\ShipmentPoint();
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['shipmentPoints'][$index114]['code'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->settings->shipmentPoints[$index114]->code = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['shipmentPoints'][$index114]['code'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['shipmentPoints'][$index114]['shipmentPointId'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->settings->shipmentPoints[$index114]->shipmentPointId = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['shipmentPoints'][$index114]['shipmentPointId'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['shipmentPoints'][$index114]['shipmentPointLabel'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->settings->shipmentPoints[$index114]->shipmentPointLabel = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['shipmentPoints'][$index114]['shipmentPointLabel'];

}


}

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['statuses'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->settings->statuses = [];
foreach (array_keys($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['statuses']) as $index108) {
    
$model->paymentTypes[$index25]->integrationModule->integrations->delivery->settings->statuses[$index108] = new RetailCrm\Api\Model\Entity\Integration\Delivery\Status();
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['statuses'][$index108]['code'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->settings->statuses[$index108]->code = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['statuses'][$index108]['code'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['statuses'][$index108]['name'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->settings->statuses[$index108]->name = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['statuses'][$index108]['name'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['statuses'][$index108]['isEditable'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->settings->statuses[$index108]->isEditable = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['statuses'][$index108]['isEditable'];

}


}

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['deliveryExtraData'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->settings->deliveryExtraData = [];
foreach (array_keys($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['deliveryExtraData']) as $index117) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->settings->deliveryExtraData[$index117] = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['deliveryExtraData'][$index117];

}

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['shipmentExtraData'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->settings->shipmentExtraData = [];
foreach (array_keys($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['shipmentExtraData']) as $index117) {
    $model->paymentTypes[$index25]->integrationModule->integrations->delivery->settings->shipmentExtraData[$index117] = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['delivery']['settings']['shipmentExtraData'][$index117];

}

}


}


}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['store'])) {
    
$model->paymentTypes[$index25]->integrationModule->integrations->store = new RetailCrm\Api\Model\Entity\Integration\Store\StoreConfiguration();
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['store']['actions'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->store->actions = [];
foreach (array_keys($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['store']['actions']) as $index92) {
    
$model->paymentTypes[$index25]->integrationModule->integrations->store->actions[$index92] = new RetailCrm\Api\Model\Entity\Integration\Store\Action();
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['store']['actions'][$index92]['code'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->store->actions[$index92]->code = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['store']['actions'][$index92]['code'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['store']['actions'][$index92]['url'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->store->actions[$index92]->url = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['store']['actions'][$index92]['url'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['store']['actions'][$index92]['callPoints'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->store->actions[$index92]->callPoints = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['store']['actions'][$index92]['callPoints'];

}


}

}


}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['recommendation'])) {
    
$model->paymentTypes[$index25]->integrationModule->integrations->recommendation = new RetailCrm\Api\Model\Entity\Integration\Recommendation\RecommendationConfiguration();
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['recommendation']['actions'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->recommendation->actions = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['recommendation']['actions'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['recommendation']['addDefaultModes'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->recommendation->addDefaultModes = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['recommendation']['addDefaultModes'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['recommendation']['modes'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->recommendation->modes = [];
foreach (array_keys($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['recommendation']['modes']) as $index99) {
    
$model->paymentTypes[$index25]->integrationModule->integrations->recommendation->modes[$index99] = new RetailCrm\Api\Model\Entity\Integration\Recommendation\Mode();
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['recommendation']['modes'][$index99]['code'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->recommendation->modes[$index99]->code = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['recommendation']['modes'][$index99]['code'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['recommendation']['modes'][$index99]['names'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->recommendation->modes[$index99]->names = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['recommendation']['modes'][$index99]['names'];

}


}

}


}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['payment'])) {
    
$model->paymentTypes[$index25]->integrationModule->integrations->payment = new RetailCrm\Api\Model\Entity\Integration\Payment\PaymentConfiguration();
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['payment']['actions'])) {
    
$model->paymentTypes[$index25]->integrationModule->integrations->payment->actions = new RetailCrm\Api\Model\Entity\Integration\Payment\Actions();
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['payment']['actions']['create'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->payment->actions->create = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['payment']['actions']['create'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['payment']['actions']['approve'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->payment->actions->approve = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['payment']['actions']['approve'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['payment']['actions']['cancel'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->payment->actions->cancel = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['payment']['actions']['cancel'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['payment']['actions']['refund'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->payment->actions->refund = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['payment']['actions']['refund'];

}


}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['payment']['currencies'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->payment->currencies = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['payment']['currencies'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['payment']['invoiceTypes'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->payment->invoiceTypes = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['payment']['invoiceTypes'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['payment']['shops'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->payment->shops = [];
foreach (array_keys($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['payment']['shops']) as $index92) {
    
$model->paymentTypes[$index25]->integrationModule->integrations->payment->shops[$index92] = new RetailCrm\Api\Model\Entity\Integration\Payment\Shop();
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['payment']['shops'][$index92]['code'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->payment->shops[$index92]->code = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['payment']['shops'][$index92]['code'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['payment']['shops'][$index92]['name'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->payment->shops[$index92]->name = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['payment']['shops'][$index92]['name'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['payment']['shops'][$index92]['active'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->payment->shops[$index92]->active = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['payment']['shops'][$index92]['active'];

}


}

}


}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['mgTransport'])) {
    
$model->paymentTypes[$index25]->integrationModule->integrations->mgTransport = new RetailCrm\Api\Model\Entity\Integration\Transport\TransportConfiguration();
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['mgTransport']['token'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->mgTransport->token = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['mgTransport']['token'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['mgTransport']['isActive'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->mgTransport->isActive = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['mgTransport']['isActive'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['mgTransport']['webhookUrl'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->mgTransport->webhookUrl = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['mgTransport']['webhookUrl'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['mgTransport']['endpointUrl'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->mgTransport->endpointUrl = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['mgTransport']['endpointUrl'];

}


}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['mgBot'])) {
    
$model->paymentTypes[$index25]->integrationModule->integrations->mgBot = new RetailCrm\Api\Model\Entity\Integration\Bot\BotConfiguration();
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['mgBot']['isActive'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->mgBot->isActive = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['mgBot']['isActive'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['mgBot']['logo'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->mgBot->logo = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['mgBot']['logo'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['mgBot']['token'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->mgBot->token = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['mgBot']['token'];

}
if (isset($jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['mgBot']['name'])) {
    $model->paymentTypes[$index25]->integrationModule->integrations->mgBot->name = $jsonData['paymentTypes'][$index25]['integrationModule']['integrations']['mgBot']['name'];

}


}


}


}


}

}



    return $model;
}
