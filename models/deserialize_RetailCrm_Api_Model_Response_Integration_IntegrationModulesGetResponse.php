<?php

function deserialize_RetailCrm_Api_Model_Response_Integration_IntegrationModulesGetResponse(array $jsonData): RetailCrm\Api\Model\Response\Integration\IntegrationModulesGetResponse
{
    
$model = new RetailCrm\Api\Model\Response\Integration\IntegrationModulesGetResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['integrationModule'])) {
    
$model->integrationModule = new RetailCrm\Api\Model\Entity\Integration\IntegrationModule();
if (isset($jsonData['integrationModule']['code'])) {
    $model->integrationModule->code = $jsonData['integrationModule']['code'];

}
if (isset($jsonData['integrationModule']['integrationCode'])) {
    $model->integrationModule->integrationCode = $jsonData['integrationModule']['integrationCode'];

}
if (isset($jsonData['integrationModule']['active'])) {
    $model->integrationModule->active = $jsonData['integrationModule']['active'];

}
if (isset($jsonData['integrationModule']['freeze'])) {
    $model->integrationModule->freeze = $jsonData['integrationModule']['freeze'];

}
if (isset($jsonData['integrationModule']['name'])) {
    $model->integrationModule->name = $jsonData['integrationModule']['name'];

}
if (isset($jsonData['integrationModule']['logo'])) {
    $model->integrationModule->logo = $jsonData['integrationModule']['logo'];

}
if (isset($jsonData['integrationModule']['clientId'])) {
    $model->integrationModule->clientId = $jsonData['integrationModule']['clientId'];

}
if (isset($jsonData['integrationModule']['native'])) {
    $model->integrationModule->native = $jsonData['integrationModule']['native'];

}
if (isset($jsonData['integrationModule']['baseUrl'])) {
    $model->integrationModule->baseUrl = $jsonData['integrationModule']['baseUrl'];

}
if (isset($jsonData['integrationModule']['actions'])) {
    $model->integrationModule->actions = $jsonData['integrationModule']['actions'];

}
if (isset($jsonData['integrationModule']['availableCountries'])) {
    $model->integrationModule->availableCountries = $jsonData['integrationModule']['availableCountries'];

}
if (isset($jsonData['integrationModule']['accountUrl'])) {
    $model->integrationModule->accountUrl = $jsonData['integrationModule']['accountUrl'];

}
if (isset($jsonData['integrationModule']['integrations'])) {
    
$model->integrationModule->integrations = new RetailCrm\Api\Model\Entity\Integration\Integrations();
if (isset($jsonData['integrationModule']['integrations']['telephony'])) {
    
$model->integrationModule->integrations->telephony = new RetailCrm\Api\Model\Entity\Integration\Telephony\TelephonyConfiguration();
if (isset($jsonData['integrationModule']['integrations']['telephony']['makeCallUrl'])) {
    $model->integrationModule->integrations->telephony->makeCallUrl = $jsonData['integrationModule']['integrations']['telephony']['makeCallUrl'];

}
if (isset($jsonData['integrationModule']['integrations']['telephony']['allowEdit'])) {
    $model->integrationModule->integrations->telephony->allowEdit = $jsonData['integrationModule']['integrations']['telephony']['allowEdit'];

}
if (isset($jsonData['integrationModule']['integrations']['telephony']['inputEventSupported'])) {
    $model->integrationModule->integrations->telephony->inputEventSupported = $jsonData['integrationModule']['integrations']['telephony']['inputEventSupported'];

}
if (isset($jsonData['integrationModule']['integrations']['telephony']['outputEventSupported'])) {
    $model->integrationModule->integrations->telephony->outputEventSupported = $jsonData['integrationModule']['integrations']['telephony']['outputEventSupported'];

}
if (isset($jsonData['integrationModule']['integrations']['telephony']['hangupEventSupported'])) {
    $model->integrationModule->integrations->telephony->hangupEventSupported = $jsonData['integrationModule']['integrations']['telephony']['hangupEventSupported'];

}
if (isset($jsonData['integrationModule']['integrations']['telephony']['changeUserStatusUrl'])) {
    $model->integrationModule->integrations->telephony->changeUserStatusUrl = $jsonData['integrationModule']['integrations']['telephony']['changeUserStatusUrl'];

}
if (isset($jsonData['integrationModule']['integrations']['telephony']['additionalCodes'])) {
    $model->integrationModule->integrations->telephony->additionalCodes = [];
foreach (array_keys($jsonData['integrationModule']['integrations']['telephony']['additionalCodes']) as $index78) {
    
$model->integrationModule->integrations->telephony->additionalCodes[$index78] = new RetailCrm\Api\Model\Entity\Integration\Telephony\SerializedAdditionalCodes();
if (isset($jsonData['integrationModule']['integrations']['telephony']['additionalCodes'][$index78]['userId'])) {
    $model->integrationModule->integrations->telephony->additionalCodes[$index78]->userId = $jsonData['integrationModule']['integrations']['telephony']['additionalCodes'][$index78]['userId'];

}
if (isset($jsonData['integrationModule']['integrations']['telephony']['additionalCodes'][$index78]['code'])) {
    $model->integrationModule->integrations->telephony->additionalCodes[$index78]->code = $jsonData['integrationModule']['integrations']['telephony']['additionalCodes'][$index78]['code'];

}


}

}
if (isset($jsonData['integrationModule']['integrations']['telephony']['externalPhones'])) {
    $model->integrationModule->integrations->telephony->externalPhones = [];
foreach (array_keys($jsonData['integrationModule']['integrations']['telephony']['externalPhones']) as $index77) {
    
$model->integrationModule->integrations->telephony->externalPhones[$index77] = new RetailCrm\Api\Model\Entity\Integration\Telephony\SerializedExternalPhones();
if (isset($jsonData['integrationModule']['integrations']['telephony']['externalPhones'][$index77]['siteCode'])) {
    $model->integrationModule->integrations->telephony->externalPhones[$index77]->siteCode = $jsonData['integrationModule']['integrations']['telephony']['externalPhones'][$index77]['siteCode'];

}
if (isset($jsonData['integrationModule']['integrations']['telephony']['externalPhones'][$index77]['externalPhone'])) {
    $model->integrationModule->integrations->telephony->externalPhones[$index77]->externalPhone = $jsonData['integrationModule']['integrations']['telephony']['externalPhones'][$index77]['externalPhone'];

}


}

}


}
if (isset($jsonData['integrationModule']['integrations']['delivery'])) {
    
$model->integrationModule->integrations->delivery = new RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryConfiguration();
if (isset($jsonData['integrationModule']['integrations']['delivery']['description'])) {
    $model->integrationModule->integrations->delivery->description = $jsonData['integrationModule']['integrations']['delivery']['description'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['actions'])) {
    $model->integrationModule->integrations->delivery->actions = $jsonData['integrationModule']['integrations']['delivery']['actions'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['payerType'])) {
    $model->integrationModule->integrations->delivery->payerType = [];
foreach (array_keys($jsonData['integrationModule']['integrations']['delivery']['payerType']) as $index71) {
    $model->integrationModule->integrations->delivery->payerType[$index71] = $jsonData['integrationModule']['integrations']['delivery']['payerType'][$index71];

}

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['platePrintLimit'])) {
    $model->integrationModule->integrations->delivery->platePrintLimit = $jsonData['integrationModule']['integrations']['delivery']['platePrintLimit'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['rateDeliveryCost'])) {
    $model->integrationModule->integrations->delivery->rateDeliveryCost = $jsonData['integrationModule']['integrations']['delivery']['rateDeliveryCost'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['allowPackages'])) {
    $model->integrationModule->integrations->delivery->allowPackages = $jsonData['integrationModule']['integrations']['delivery']['allowPackages'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['codAvailable'])) {
    $model->integrationModule->integrations->delivery->codAvailable = $jsonData['integrationModule']['integrations']['delivery']['codAvailable'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['selfShipmentAvailable'])) {
    $model->integrationModule->integrations->delivery->selfShipmentAvailable = $jsonData['integrationModule']['integrations']['delivery']['selfShipmentAvailable'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['duplicateOrderProductSupported'])) {
    $model->integrationModule->integrations->delivery->duplicateOrderProductSupported = $jsonData['integrationModule']['integrations']['delivery']['duplicateOrderProductSupported'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['allowTrackNumber'])) {
    $model->integrationModule->integrations->delivery->allowTrackNumber = $jsonData['integrationModule']['integrations']['delivery']['allowTrackNumber'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['availableCountries'])) {
    $model->integrationModule->integrations->delivery->availableCountries = [];
foreach (array_keys($jsonData['integrationModule']['integrations']['delivery']['availableCountries']) as $index80) {
    $model->integrationModule->integrations->delivery->availableCountries[$index80] = $jsonData['integrationModule']['integrations']['delivery']['availableCountries'][$index80];

}

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['requiredFields'])) {
    $model->integrationModule->integrations->delivery->requiredFields = [];
foreach (array_keys($jsonData['integrationModule']['integrations']['delivery']['requiredFields']) as $index76) {
    $model->integrationModule->integrations->delivery->requiredFields[$index76] = $jsonData['integrationModule']['integrations']['delivery']['requiredFields'][$index76];

}

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['statusList'])) {
    $model->integrationModule->integrations->delivery->statusList = [];
foreach (array_keys($jsonData['integrationModule']['integrations']['delivery']['statusList']) as $index72) {
    
$model->integrationModule->integrations->delivery->statusList[$index72] = new RetailCrm\Api\Model\Entity\Integration\Delivery\Status();
if (isset($jsonData['integrationModule']['integrations']['delivery']['statusList'][$index72]['code'])) {
    $model->integrationModule->integrations->delivery->statusList[$index72]->code = $jsonData['integrationModule']['integrations']['delivery']['statusList'][$index72]['code'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['statusList'][$index72]['name'])) {
    $model->integrationModule->integrations->delivery->statusList[$index72]->name = $jsonData['integrationModule']['integrations']['delivery']['statusList'][$index72]['name'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['statusList'][$index72]['isEditable'])) {
    $model->integrationModule->integrations->delivery->statusList[$index72]->isEditable = $jsonData['integrationModule']['integrations']['delivery']['statusList'][$index72]['isEditable'];

}


}

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['plateList'])) {
    $model->integrationModule->integrations->delivery->plateList = [];
foreach (array_keys($jsonData['integrationModule']['integrations']['delivery']['plateList']) as $index71) {
    
$model->integrationModule->integrations->delivery->plateList[$index71] = new RetailCrm\Api\Model\Entity\Integration\Delivery\Plate();
if (isset($jsonData['integrationModule']['integrations']['delivery']['plateList'][$index71]['type'])) {
    $model->integrationModule->integrations->delivery->plateList[$index71]->type = $jsonData['integrationModule']['integrations']['delivery']['plateList'][$index71]['type'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['plateList'][$index71]['code'])) {
    $model->integrationModule->integrations->delivery->plateList[$index71]->code = $jsonData['integrationModule']['integrations']['delivery']['plateList'][$index71]['code'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['plateList'][$index71]['label'])) {
    $model->integrationModule->integrations->delivery->plateList[$index71]->label = $jsonData['integrationModule']['integrations']['delivery']['plateList'][$index71]['label'];

}


}

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['deliveryDataFieldList'])) {
    $model->integrationModule->integrations->delivery->deliveryDataFieldList = [];
foreach (array_keys($jsonData['integrationModule']['integrations']['delivery']['deliveryDataFieldList']) as $index83) {
    
$model->integrationModule->integrations->delivery->deliveryDataFieldList[$index83] = new RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryDataField();
if (isset($jsonData['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index83]['code'])) {
    $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index83]->code = $jsonData['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index83]['code'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index83]['label'])) {
    $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index83]->label = $jsonData['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index83]['label'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index83]['hint'])) {
    $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index83]->hint = $jsonData['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index83]['hint'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index83]['type'])) {
    $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index83]->type = $jsonData['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index83]['type'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index83]['multiple'])) {
    $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index83]->multiple = $jsonData['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index83]['multiple'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index83]['choices'])) {
    $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index83]->choices = $jsonData['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index83]['choices'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index83]['autocompleteUrl'])) {
    $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index83]->autocompleteUrl = $jsonData['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index83]['autocompleteUrl'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index83]['visible'])) {
    $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index83]->visible = $jsonData['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index83]['visible'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index83]['required'])) {
    $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index83]->required = $jsonData['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index83]['required'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index83]['affectsCost'])) {
    $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index83]->affectsCost = $jsonData['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index83]['affectsCost'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index83]['editable'])) {
    $model->integrationModule->integrations->delivery->deliveryDataFieldList[$index83]->editable = $jsonData['integrationModule']['integrations']['delivery']['deliveryDataFieldList'][$index83]['editable'];

}


}

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['shipmentDataFieldList'])) {
    $model->integrationModule->integrations->delivery->shipmentDataFieldList = [];
foreach (array_keys($jsonData['integrationModule']['integrations']['delivery']['shipmentDataFieldList']) as $index83) {
    
$model->integrationModule->integrations->delivery->shipmentDataFieldList[$index83] = new RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryDataField();
if (isset($jsonData['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index83]['code'])) {
    $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index83]->code = $jsonData['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index83]['code'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index83]['label'])) {
    $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index83]->label = $jsonData['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index83]['label'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index83]['hint'])) {
    $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index83]->hint = $jsonData['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index83]['hint'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index83]['type'])) {
    $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index83]->type = $jsonData['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index83]['type'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index83]['multiple'])) {
    $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index83]->multiple = $jsonData['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index83]['multiple'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index83]['choices'])) {
    $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index83]->choices = $jsonData['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index83]['choices'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index83]['autocompleteUrl'])) {
    $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index83]->autocompleteUrl = $jsonData['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index83]['autocompleteUrl'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index83]['visible'])) {
    $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index83]->visible = $jsonData['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index83]['visible'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index83]['required'])) {
    $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index83]->required = $jsonData['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index83]['required'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index83]['affectsCost'])) {
    $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index83]->affectsCost = $jsonData['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index83]['affectsCost'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index83]['editable'])) {
    $model->integrationModule->integrations->delivery->shipmentDataFieldList[$index83]->editable = $jsonData['integrationModule']['integrations']['delivery']['shipmentDataFieldList'][$index83]['editable'];

}


}

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['settings'])) {
    
$model->integrationModule->integrations->delivery->settings = new RetailCrm\Api\Model\Entity\Integration\Delivery\Settings();
if (isset($jsonData['integrationModule']['integrations']['delivery']['settings']['defaultPayerType'])) {
    $model->integrationModule->integrations->delivery->settings->defaultPayerType = $jsonData['integrationModule']['integrations']['delivery']['settings']['defaultPayerType'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['settings']['costCalculateBy'])) {
    $model->integrationModule->integrations->delivery->settings->costCalculateBy = $jsonData['integrationModule']['integrations']['delivery']['settings']['costCalculateBy'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['settings']['nullDeclaredValue'])) {
    $model->integrationModule->integrations->delivery->settings->nullDeclaredValue = $jsonData['integrationModule']['integrations']['delivery']['settings']['nullDeclaredValue'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['settings']['lockedByDefault'])) {
    $model->integrationModule->integrations->delivery->settings->lockedByDefault = $jsonData['integrationModule']['integrations']['delivery']['settings']['lockedByDefault'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['settings']['paymentTypes'])) {
    $model->integrationModule->integrations->delivery->settings->paymentTypes = [];
foreach (array_keys($jsonData['integrationModule']['integrations']['delivery']['settings']['paymentTypes']) as $index86) {
    
$model->integrationModule->integrations->delivery->settings->paymentTypes[$index86] = new RetailCrm\Api\Model\Entity\Integration\Delivery\PaymentType();
if (isset($jsonData['integrationModule']['integrations']['delivery']['settings']['paymentTypes'][$index86]['code'])) {
    $model->integrationModule->integrations->delivery->settings->paymentTypes[$index86]->code = $jsonData['integrationModule']['integrations']['delivery']['settings']['paymentTypes'][$index86]['code'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['settings']['paymentTypes'][$index86]['active'])) {
    $model->integrationModule->integrations->delivery->settings->paymentTypes[$index86]->active = $jsonData['integrationModule']['integrations']['delivery']['settings']['paymentTypes'][$index86]['active'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['settings']['paymentTypes'][$index86]['cod'])) {
    $model->integrationModule->integrations->delivery->settings->paymentTypes[$index86]->cod = $jsonData['integrationModule']['integrations']['delivery']['settings']['paymentTypes'][$index86]['cod'];

}


}

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['settings']['shipmentPoints'])) {
    $model->integrationModule->integrations->delivery->settings->shipmentPoints = [];
foreach (array_keys($jsonData['integrationModule']['integrations']['delivery']['settings']['shipmentPoints']) as $index88) {
    
$model->integrationModule->integrations->delivery->settings->shipmentPoints[$index88] = new RetailCrm\Api\Model\Entity\Integration\Delivery\ShipmentPoint();
if (isset($jsonData['integrationModule']['integrations']['delivery']['settings']['shipmentPoints'][$index88]['code'])) {
    $model->integrationModule->integrations->delivery->settings->shipmentPoints[$index88]->code = $jsonData['integrationModule']['integrations']['delivery']['settings']['shipmentPoints'][$index88]['code'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['settings']['shipmentPoints'][$index88]['shipmentPointId'])) {
    $model->integrationModule->integrations->delivery->settings->shipmentPoints[$index88]->shipmentPointId = $jsonData['integrationModule']['integrations']['delivery']['settings']['shipmentPoints'][$index88]['shipmentPointId'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['settings']['shipmentPoints'][$index88]['shipmentPointLabel'])) {
    $model->integrationModule->integrations->delivery->settings->shipmentPoints[$index88]->shipmentPointLabel = $jsonData['integrationModule']['integrations']['delivery']['settings']['shipmentPoints'][$index88]['shipmentPointLabel'];

}


}

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['settings']['statuses'])) {
    $model->integrationModule->integrations->delivery->settings->statuses = [];
foreach (array_keys($jsonData['integrationModule']['integrations']['delivery']['settings']['statuses']) as $index82) {
    
$model->integrationModule->integrations->delivery->settings->statuses[$index82] = new RetailCrm\Api\Model\Entity\Integration\Delivery\Status();
if (isset($jsonData['integrationModule']['integrations']['delivery']['settings']['statuses'][$index82]['code'])) {
    $model->integrationModule->integrations->delivery->settings->statuses[$index82]->code = $jsonData['integrationModule']['integrations']['delivery']['settings']['statuses'][$index82]['code'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['settings']['statuses'][$index82]['name'])) {
    $model->integrationModule->integrations->delivery->settings->statuses[$index82]->name = $jsonData['integrationModule']['integrations']['delivery']['settings']['statuses'][$index82]['name'];

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['settings']['statuses'][$index82]['isEditable'])) {
    $model->integrationModule->integrations->delivery->settings->statuses[$index82]->isEditable = $jsonData['integrationModule']['integrations']['delivery']['settings']['statuses'][$index82]['isEditable'];

}


}

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['settings']['deliveryExtraData'])) {
    $model->integrationModule->integrations->delivery->settings->deliveryExtraData = [];
foreach (array_keys($jsonData['integrationModule']['integrations']['delivery']['settings']['deliveryExtraData']) as $index91) {
    $model->integrationModule->integrations->delivery->settings->deliveryExtraData[$index91] = $jsonData['integrationModule']['integrations']['delivery']['settings']['deliveryExtraData'][$index91];

}

}
if (isset($jsonData['integrationModule']['integrations']['delivery']['settings']['shipmentExtraData'])) {
    $model->integrationModule->integrations->delivery->settings->shipmentExtraData = [];
foreach (array_keys($jsonData['integrationModule']['integrations']['delivery']['settings']['shipmentExtraData']) as $index91) {
    $model->integrationModule->integrations->delivery->settings->shipmentExtraData[$index91] = $jsonData['integrationModule']['integrations']['delivery']['settings']['shipmentExtraData'][$index91];

}

}


}


}
if (isset($jsonData['integrationModule']['integrations']['store'])) {
    
$model->integrationModule->integrations->store = new RetailCrm\Api\Model\Entity\Integration\Store\StoreConfiguration();
if (isset($jsonData['integrationModule']['integrations']['store']['actions'])) {
    $model->integrationModule->integrations->store->actions = [];
foreach (array_keys($jsonData['integrationModule']['integrations']['store']['actions']) as $index66) {
    
$model->integrationModule->integrations->store->actions[$index66] = new RetailCrm\Api\Model\Entity\Integration\Store\Action();
if (isset($jsonData['integrationModule']['integrations']['store']['actions'][$index66]['code'])) {
    $model->integrationModule->integrations->store->actions[$index66]->code = $jsonData['integrationModule']['integrations']['store']['actions'][$index66]['code'];

}
if (isset($jsonData['integrationModule']['integrations']['store']['actions'][$index66]['url'])) {
    $model->integrationModule->integrations->store->actions[$index66]->url = $jsonData['integrationModule']['integrations']['store']['actions'][$index66]['url'];

}
if (isset($jsonData['integrationModule']['integrations']['store']['actions'][$index66]['callPoints'])) {
    $model->integrationModule->integrations->store->actions[$index66]->callPoints = $jsonData['integrationModule']['integrations']['store']['actions'][$index66]['callPoints'];

}


}

}


}
if (isset($jsonData['integrationModule']['integrations']['recommendation'])) {
    
$model->integrationModule->integrations->recommendation = new RetailCrm\Api\Model\Entity\Integration\Recommendation\RecommendationConfiguration();
if (isset($jsonData['integrationModule']['integrations']['recommendation']['actions'])) {
    $model->integrationModule->integrations->recommendation->actions = $jsonData['integrationModule']['integrations']['recommendation']['actions'];

}
if (isset($jsonData['integrationModule']['integrations']['recommendation']['addDefaultModes'])) {
    $model->integrationModule->integrations->recommendation->addDefaultModes = $jsonData['integrationModule']['integrations']['recommendation']['addDefaultModes'];

}
if (isset($jsonData['integrationModule']['integrations']['recommendation']['modes'])) {
    $model->integrationModule->integrations->recommendation->modes = [];
foreach (array_keys($jsonData['integrationModule']['integrations']['recommendation']['modes']) as $index73) {
    
$model->integrationModule->integrations->recommendation->modes[$index73] = new RetailCrm\Api\Model\Entity\Integration\Recommendation\Mode();
if (isset($jsonData['integrationModule']['integrations']['recommendation']['modes'][$index73]['code'])) {
    $model->integrationModule->integrations->recommendation->modes[$index73]->code = $jsonData['integrationModule']['integrations']['recommendation']['modes'][$index73]['code'];

}
if (isset($jsonData['integrationModule']['integrations']['recommendation']['modes'][$index73]['names'])) {
    $model->integrationModule->integrations->recommendation->modes[$index73]->names = $jsonData['integrationModule']['integrations']['recommendation']['modes'][$index73]['names'];

}


}

}


}
if (isset($jsonData['integrationModule']['integrations']['payment'])) {
    
$model->integrationModule->integrations->payment = new RetailCrm\Api\Model\Entity\Integration\Payment\PaymentConfiguration();
if (isset($jsonData['integrationModule']['integrations']['payment']['actions'])) {
    
$model->integrationModule->integrations->payment->actions = new RetailCrm\Api\Model\Entity\Integration\Payment\Actions();
if (isset($jsonData['integrationModule']['integrations']['payment']['actions']['create'])) {
    $model->integrationModule->integrations->payment->actions->create = $jsonData['integrationModule']['integrations']['payment']['actions']['create'];

}
if (isset($jsonData['integrationModule']['integrations']['payment']['actions']['approve'])) {
    $model->integrationModule->integrations->payment->actions->approve = $jsonData['integrationModule']['integrations']['payment']['actions']['approve'];

}
if (isset($jsonData['integrationModule']['integrations']['payment']['actions']['cancel'])) {
    $model->integrationModule->integrations->payment->actions->cancel = $jsonData['integrationModule']['integrations']['payment']['actions']['cancel'];

}
if (isset($jsonData['integrationModule']['integrations']['payment']['actions']['refund'])) {
    $model->integrationModule->integrations->payment->actions->refund = $jsonData['integrationModule']['integrations']['payment']['actions']['refund'];

}


}
if (isset($jsonData['integrationModule']['integrations']['payment']['currencies'])) {
    $model->integrationModule->integrations->payment->currencies = $jsonData['integrationModule']['integrations']['payment']['currencies'];

}
if (isset($jsonData['integrationModule']['integrations']['payment']['invoiceTypes'])) {
    $model->integrationModule->integrations->payment->invoiceTypes = $jsonData['integrationModule']['integrations']['payment']['invoiceTypes'];

}
if (isset($jsonData['integrationModule']['integrations']['payment']['shops'])) {
    $model->integrationModule->integrations->payment->shops = [];
foreach (array_keys($jsonData['integrationModule']['integrations']['payment']['shops']) as $index66) {
    
$model->integrationModule->integrations->payment->shops[$index66] = new RetailCrm\Api\Model\Entity\Integration\Payment\Shop();
if (isset($jsonData['integrationModule']['integrations']['payment']['shops'][$index66]['code'])) {
    $model->integrationModule->integrations->payment->shops[$index66]->code = $jsonData['integrationModule']['integrations']['payment']['shops'][$index66]['code'];

}
if (isset($jsonData['integrationModule']['integrations']['payment']['shops'][$index66]['name'])) {
    $model->integrationModule->integrations->payment->shops[$index66]->name = $jsonData['integrationModule']['integrations']['payment']['shops'][$index66]['name'];

}
if (isset($jsonData['integrationModule']['integrations']['payment']['shops'][$index66]['active'])) {
    $model->integrationModule->integrations->payment->shops[$index66]->active = $jsonData['integrationModule']['integrations']['payment']['shops'][$index66]['active'];

}


}

}


}
if (isset($jsonData['integrationModule']['integrations']['mgTransport'])) {
    
$model->integrationModule->integrations->mgTransport = new RetailCrm\Api\Model\Entity\Integration\Transport\TransportConfiguration();
if (isset($jsonData['integrationModule']['integrations']['mgTransport']['token'])) {
    $model->integrationModule->integrations->mgTransport->token = $jsonData['integrationModule']['integrations']['mgTransport']['token'];

}
if (isset($jsonData['integrationModule']['integrations']['mgTransport']['isActive'])) {
    $model->integrationModule->integrations->mgTransport->isActive = $jsonData['integrationModule']['integrations']['mgTransport']['isActive'];

}
if (isset($jsonData['integrationModule']['integrations']['mgTransport']['webhookUrl'])) {
    $model->integrationModule->integrations->mgTransport->webhookUrl = $jsonData['integrationModule']['integrations']['mgTransport']['webhookUrl'];

}
if (isset($jsonData['integrationModule']['integrations']['mgTransport']['endpointUrl'])) {
    $model->integrationModule->integrations->mgTransport->endpointUrl = $jsonData['integrationModule']['integrations']['mgTransport']['endpointUrl'];

}


}
if (isset($jsonData['integrationModule']['integrations']['mgBot'])) {
    
$model->integrationModule->integrations->mgBot = new RetailCrm\Api\Model\Entity\Integration\Bot\BotConfiguration();
if (isset($jsonData['integrationModule']['integrations']['mgBot']['isActive'])) {
    $model->integrationModule->integrations->mgBot->isActive = $jsonData['integrationModule']['integrations']['mgBot']['isActive'];

}
if (isset($jsonData['integrationModule']['integrations']['mgBot']['logo'])) {
    $model->integrationModule->integrations->mgBot->logo = $jsonData['integrationModule']['integrations']['mgBot']['logo'];

}
if (isset($jsonData['integrationModule']['integrations']['mgBot']['token'])) {
    $model->integrationModule->integrations->mgBot->token = $jsonData['integrationModule']['integrations']['mgBot']['token'];

}
if (isset($jsonData['integrationModule']['integrations']['mgBot']['name'])) {
    $model->integrationModule->integrations->mgBot->name = $jsonData['integrationModule']['integrations']['mgBot']['name'];

}


}


}


}



    return $model;
}
