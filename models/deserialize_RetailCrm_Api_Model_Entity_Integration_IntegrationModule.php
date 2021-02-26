<?php

function deserialize_RetailCrm_Api_Model_Entity_Integration_IntegrationModule(array $jsonData): RetailCrm\Api\Model\Entity\Integration\IntegrationModule
{
    
$model = new RetailCrm\Api\Model\Entity\Integration\IntegrationModule();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['integrationCode'])) {
    $model->integrationCode = $jsonData['integrationCode'];

}
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

}
if (isset($jsonData['freeze'])) {
    $model->freeze = $jsonData['freeze'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['logo'])) {
    $model->logo = $jsonData['logo'];

}
if (isset($jsonData['clientId'])) {
    $model->clientId = $jsonData['clientId'];

}
if (isset($jsonData['native'])) {
    $model->native = $jsonData['native'];

}
if (isset($jsonData['baseUrl'])) {
    $model->baseUrl = $jsonData['baseUrl'];

}
if (isset($jsonData['actions'])) {
    $model->actions = $jsonData['actions'];

}
if (isset($jsonData['availableCountries'])) {
    $model->availableCountries = $jsonData['availableCountries'];

}
if (isset($jsonData['accountUrl'])) {
    $model->accountUrl = $jsonData['accountUrl'];

}
if (isset($jsonData['integrations'])) {
    
$model->integrations = new RetailCrm\Api\Model\Entity\Integration\Integrations();
if (isset($jsonData['integrations']['telephony'])) {
    
$model->integrations->telephony = new RetailCrm\Api\Model\Entity\Integration\Telephony\TelephonyConfiguration();
if (isset($jsonData['integrations']['telephony']['makeCallUrl'])) {
    $model->integrations->telephony->makeCallUrl = $jsonData['integrations']['telephony']['makeCallUrl'];

}
if (isset($jsonData['integrations']['telephony']['allowEdit'])) {
    $model->integrations->telephony->allowEdit = $jsonData['integrations']['telephony']['allowEdit'];

}
if (isset($jsonData['integrations']['telephony']['inputEventSupported'])) {
    $model->integrations->telephony->inputEventSupported = $jsonData['integrations']['telephony']['inputEventSupported'];

}
if (isset($jsonData['integrations']['telephony']['outputEventSupported'])) {
    $model->integrations->telephony->outputEventSupported = $jsonData['integrations']['telephony']['outputEventSupported'];

}
if (isset($jsonData['integrations']['telephony']['hangupEventSupported'])) {
    $model->integrations->telephony->hangupEventSupported = $jsonData['integrations']['telephony']['hangupEventSupported'];

}
if (isset($jsonData['integrations']['telephony']['changeUserStatusUrl'])) {
    $model->integrations->telephony->changeUserStatusUrl = $jsonData['integrations']['telephony']['changeUserStatusUrl'];

}
if (isset($jsonData['integrations']['telephony']['additionalCodes'])) {
    $model->integrations->telephony->additionalCodes = [];
foreach (array_keys($jsonData['integrations']['telephony']['additionalCodes']) as $index57) {
    
$model->integrations->telephony->additionalCodes[$index57] = new RetailCrm\Api\Model\Entity\Integration\Telephony\SerializedAdditionalCodes();
if (isset($jsonData['integrations']['telephony']['additionalCodes'][$index57]['userId'])) {
    $model->integrations->telephony->additionalCodes[$index57]->userId = $jsonData['integrations']['telephony']['additionalCodes'][$index57]['userId'];

}
if (isset($jsonData['integrations']['telephony']['additionalCodes'][$index57]['code'])) {
    $model->integrations->telephony->additionalCodes[$index57]->code = $jsonData['integrations']['telephony']['additionalCodes'][$index57]['code'];

}


}

}
if (isset($jsonData['integrations']['telephony']['externalPhones'])) {
    $model->integrations->telephony->externalPhones = [];
foreach (array_keys($jsonData['integrations']['telephony']['externalPhones']) as $index56) {
    
$model->integrations->telephony->externalPhones[$index56] = new RetailCrm\Api\Model\Entity\Integration\Telephony\SerializedExternalPhones();
if (isset($jsonData['integrations']['telephony']['externalPhones'][$index56]['siteCode'])) {
    $model->integrations->telephony->externalPhones[$index56]->siteCode = $jsonData['integrations']['telephony']['externalPhones'][$index56]['siteCode'];

}
if (isset($jsonData['integrations']['telephony']['externalPhones'][$index56]['externalPhone'])) {
    $model->integrations->telephony->externalPhones[$index56]->externalPhone = $jsonData['integrations']['telephony']['externalPhones'][$index56]['externalPhone'];

}


}

}


}
if (isset($jsonData['integrations']['delivery'])) {
    
$model->integrations->delivery = new RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryConfiguration();
if (isset($jsonData['integrations']['delivery']['description'])) {
    $model->integrations->delivery->description = $jsonData['integrations']['delivery']['description'];

}
if (isset($jsonData['integrations']['delivery']['actions'])) {
    $model->integrations->delivery->actions = $jsonData['integrations']['delivery']['actions'];

}
if (isset($jsonData['integrations']['delivery']['payerType'])) {
    $model->integrations->delivery->payerType = [];
foreach (array_keys($jsonData['integrations']['delivery']['payerType']) as $index50) {
    $model->integrations->delivery->payerType[$index50] = $jsonData['integrations']['delivery']['payerType'][$index50];

}

}
if (isset($jsonData['integrations']['delivery']['platePrintLimit'])) {
    $model->integrations->delivery->platePrintLimit = $jsonData['integrations']['delivery']['platePrintLimit'];

}
if (isset($jsonData['integrations']['delivery']['rateDeliveryCost'])) {
    $model->integrations->delivery->rateDeliveryCost = $jsonData['integrations']['delivery']['rateDeliveryCost'];

}
if (isset($jsonData['integrations']['delivery']['allowPackages'])) {
    $model->integrations->delivery->allowPackages = $jsonData['integrations']['delivery']['allowPackages'];

}
if (isset($jsonData['integrations']['delivery']['codAvailable'])) {
    $model->integrations->delivery->codAvailable = $jsonData['integrations']['delivery']['codAvailable'];

}
if (isset($jsonData['integrations']['delivery']['selfShipmentAvailable'])) {
    $model->integrations->delivery->selfShipmentAvailable = $jsonData['integrations']['delivery']['selfShipmentAvailable'];

}
if (isset($jsonData['integrations']['delivery']['duplicateOrderProductSupported'])) {
    $model->integrations->delivery->duplicateOrderProductSupported = $jsonData['integrations']['delivery']['duplicateOrderProductSupported'];

}
if (isset($jsonData['integrations']['delivery']['allowTrackNumber'])) {
    $model->integrations->delivery->allowTrackNumber = $jsonData['integrations']['delivery']['allowTrackNumber'];

}
if (isset($jsonData['integrations']['delivery']['availableCountries'])) {
    $model->integrations->delivery->availableCountries = [];
foreach (array_keys($jsonData['integrations']['delivery']['availableCountries']) as $index59) {
    $model->integrations->delivery->availableCountries[$index59] = $jsonData['integrations']['delivery']['availableCountries'][$index59];

}

}
if (isset($jsonData['integrations']['delivery']['requiredFields'])) {
    $model->integrations->delivery->requiredFields = [];
foreach (array_keys($jsonData['integrations']['delivery']['requiredFields']) as $index55) {
    $model->integrations->delivery->requiredFields[$index55] = $jsonData['integrations']['delivery']['requiredFields'][$index55];

}

}
if (isset($jsonData['integrations']['delivery']['statusList'])) {
    $model->integrations->delivery->statusList = [];
foreach (array_keys($jsonData['integrations']['delivery']['statusList']) as $index51) {
    
$model->integrations->delivery->statusList[$index51] = new RetailCrm\Api\Model\Entity\Integration\Delivery\Status();
if (isset($jsonData['integrations']['delivery']['statusList'][$index51]['code'])) {
    $model->integrations->delivery->statusList[$index51]->code = $jsonData['integrations']['delivery']['statusList'][$index51]['code'];

}
if (isset($jsonData['integrations']['delivery']['statusList'][$index51]['name'])) {
    $model->integrations->delivery->statusList[$index51]->name = $jsonData['integrations']['delivery']['statusList'][$index51]['name'];

}
if (isset($jsonData['integrations']['delivery']['statusList'][$index51]['isEditable'])) {
    $model->integrations->delivery->statusList[$index51]->isEditable = $jsonData['integrations']['delivery']['statusList'][$index51]['isEditable'];

}


}

}
if (isset($jsonData['integrations']['delivery']['plateList'])) {
    $model->integrations->delivery->plateList = [];
foreach (array_keys($jsonData['integrations']['delivery']['plateList']) as $index50) {
    
$model->integrations->delivery->plateList[$index50] = new RetailCrm\Api\Model\Entity\Integration\Delivery\Plate();
if (isset($jsonData['integrations']['delivery']['plateList'][$index50]['type'])) {
    $model->integrations->delivery->plateList[$index50]->type = $jsonData['integrations']['delivery']['plateList'][$index50]['type'];

}
if (isset($jsonData['integrations']['delivery']['plateList'][$index50]['code'])) {
    $model->integrations->delivery->plateList[$index50]->code = $jsonData['integrations']['delivery']['plateList'][$index50]['code'];

}
if (isset($jsonData['integrations']['delivery']['plateList'][$index50]['label'])) {
    $model->integrations->delivery->plateList[$index50]->label = $jsonData['integrations']['delivery']['plateList'][$index50]['label'];

}


}

}
if (isset($jsonData['integrations']['delivery']['deliveryDataFieldList'])) {
    $model->integrations->delivery->deliveryDataFieldList = [];
foreach (array_keys($jsonData['integrations']['delivery']['deliveryDataFieldList']) as $index62) {
    
$model->integrations->delivery->deliveryDataFieldList[$index62] = new RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryDataField();
if (isset($jsonData['integrations']['delivery']['deliveryDataFieldList'][$index62]['code'])) {
    $model->integrations->delivery->deliveryDataFieldList[$index62]->code = $jsonData['integrations']['delivery']['deliveryDataFieldList'][$index62]['code'];

}
if (isset($jsonData['integrations']['delivery']['deliveryDataFieldList'][$index62]['label'])) {
    $model->integrations->delivery->deliveryDataFieldList[$index62]->label = $jsonData['integrations']['delivery']['deliveryDataFieldList'][$index62]['label'];

}
if (isset($jsonData['integrations']['delivery']['deliveryDataFieldList'][$index62]['hint'])) {
    $model->integrations->delivery->deliveryDataFieldList[$index62]->hint = $jsonData['integrations']['delivery']['deliveryDataFieldList'][$index62]['hint'];

}
if (isset($jsonData['integrations']['delivery']['deliveryDataFieldList'][$index62]['type'])) {
    $model->integrations->delivery->deliveryDataFieldList[$index62]->type = $jsonData['integrations']['delivery']['deliveryDataFieldList'][$index62]['type'];

}
if (isset($jsonData['integrations']['delivery']['deliveryDataFieldList'][$index62]['multiple'])) {
    $model->integrations->delivery->deliveryDataFieldList[$index62]->multiple = $jsonData['integrations']['delivery']['deliveryDataFieldList'][$index62]['multiple'];

}
if (isset($jsonData['integrations']['delivery']['deliveryDataFieldList'][$index62]['choices'])) {
    $model->integrations->delivery->deliveryDataFieldList[$index62]->choices = $jsonData['integrations']['delivery']['deliveryDataFieldList'][$index62]['choices'];

}
if (isset($jsonData['integrations']['delivery']['deliveryDataFieldList'][$index62]['autocompleteUrl'])) {
    $model->integrations->delivery->deliveryDataFieldList[$index62]->autocompleteUrl = $jsonData['integrations']['delivery']['deliveryDataFieldList'][$index62]['autocompleteUrl'];

}
if (isset($jsonData['integrations']['delivery']['deliveryDataFieldList'][$index62]['visible'])) {
    $model->integrations->delivery->deliveryDataFieldList[$index62]->visible = $jsonData['integrations']['delivery']['deliveryDataFieldList'][$index62]['visible'];

}
if (isset($jsonData['integrations']['delivery']['deliveryDataFieldList'][$index62]['required'])) {
    $model->integrations->delivery->deliveryDataFieldList[$index62]->required = $jsonData['integrations']['delivery']['deliveryDataFieldList'][$index62]['required'];

}
if (isset($jsonData['integrations']['delivery']['deliveryDataFieldList'][$index62]['affectsCost'])) {
    $model->integrations->delivery->deliveryDataFieldList[$index62]->affectsCost = $jsonData['integrations']['delivery']['deliveryDataFieldList'][$index62]['affectsCost'];

}
if (isset($jsonData['integrations']['delivery']['deliveryDataFieldList'][$index62]['editable'])) {
    $model->integrations->delivery->deliveryDataFieldList[$index62]->editable = $jsonData['integrations']['delivery']['deliveryDataFieldList'][$index62]['editable'];

}


}

}
if (isset($jsonData['integrations']['delivery']['shipmentDataFieldList'])) {
    $model->integrations->delivery->shipmentDataFieldList = [];
foreach (array_keys($jsonData['integrations']['delivery']['shipmentDataFieldList']) as $index62) {
    
$model->integrations->delivery->shipmentDataFieldList[$index62] = new RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryDataField();
if (isset($jsonData['integrations']['delivery']['shipmentDataFieldList'][$index62]['code'])) {
    $model->integrations->delivery->shipmentDataFieldList[$index62]->code = $jsonData['integrations']['delivery']['shipmentDataFieldList'][$index62]['code'];

}
if (isset($jsonData['integrations']['delivery']['shipmentDataFieldList'][$index62]['label'])) {
    $model->integrations->delivery->shipmentDataFieldList[$index62]->label = $jsonData['integrations']['delivery']['shipmentDataFieldList'][$index62]['label'];

}
if (isset($jsonData['integrations']['delivery']['shipmentDataFieldList'][$index62]['hint'])) {
    $model->integrations->delivery->shipmentDataFieldList[$index62]->hint = $jsonData['integrations']['delivery']['shipmentDataFieldList'][$index62]['hint'];

}
if (isset($jsonData['integrations']['delivery']['shipmentDataFieldList'][$index62]['type'])) {
    $model->integrations->delivery->shipmentDataFieldList[$index62]->type = $jsonData['integrations']['delivery']['shipmentDataFieldList'][$index62]['type'];

}
if (isset($jsonData['integrations']['delivery']['shipmentDataFieldList'][$index62]['multiple'])) {
    $model->integrations->delivery->shipmentDataFieldList[$index62]->multiple = $jsonData['integrations']['delivery']['shipmentDataFieldList'][$index62]['multiple'];

}
if (isset($jsonData['integrations']['delivery']['shipmentDataFieldList'][$index62]['choices'])) {
    $model->integrations->delivery->shipmentDataFieldList[$index62]->choices = $jsonData['integrations']['delivery']['shipmentDataFieldList'][$index62]['choices'];

}
if (isset($jsonData['integrations']['delivery']['shipmentDataFieldList'][$index62]['autocompleteUrl'])) {
    $model->integrations->delivery->shipmentDataFieldList[$index62]->autocompleteUrl = $jsonData['integrations']['delivery']['shipmentDataFieldList'][$index62]['autocompleteUrl'];

}
if (isset($jsonData['integrations']['delivery']['shipmentDataFieldList'][$index62]['visible'])) {
    $model->integrations->delivery->shipmentDataFieldList[$index62]->visible = $jsonData['integrations']['delivery']['shipmentDataFieldList'][$index62]['visible'];

}
if (isset($jsonData['integrations']['delivery']['shipmentDataFieldList'][$index62]['required'])) {
    $model->integrations->delivery->shipmentDataFieldList[$index62]->required = $jsonData['integrations']['delivery']['shipmentDataFieldList'][$index62]['required'];

}
if (isset($jsonData['integrations']['delivery']['shipmentDataFieldList'][$index62]['affectsCost'])) {
    $model->integrations->delivery->shipmentDataFieldList[$index62]->affectsCost = $jsonData['integrations']['delivery']['shipmentDataFieldList'][$index62]['affectsCost'];

}
if (isset($jsonData['integrations']['delivery']['shipmentDataFieldList'][$index62]['editable'])) {
    $model->integrations->delivery->shipmentDataFieldList[$index62]->editable = $jsonData['integrations']['delivery']['shipmentDataFieldList'][$index62]['editable'];

}


}

}
if (isset($jsonData['integrations']['delivery']['settings'])) {
    
$model->integrations->delivery->settings = new RetailCrm\Api\Model\Entity\Integration\Delivery\Settings();
if (isset($jsonData['integrations']['delivery']['settings']['defaultPayerType'])) {
    $model->integrations->delivery->settings->defaultPayerType = $jsonData['integrations']['delivery']['settings']['defaultPayerType'];

}
if (isset($jsonData['integrations']['delivery']['settings']['costCalculateBy'])) {
    $model->integrations->delivery->settings->costCalculateBy = $jsonData['integrations']['delivery']['settings']['costCalculateBy'];

}
if (isset($jsonData['integrations']['delivery']['settings']['nullDeclaredValue'])) {
    $model->integrations->delivery->settings->nullDeclaredValue = $jsonData['integrations']['delivery']['settings']['nullDeclaredValue'];

}
if (isset($jsonData['integrations']['delivery']['settings']['lockedByDefault'])) {
    $model->integrations->delivery->settings->lockedByDefault = $jsonData['integrations']['delivery']['settings']['lockedByDefault'];

}
if (isset($jsonData['integrations']['delivery']['settings']['paymentTypes'])) {
    $model->integrations->delivery->settings->paymentTypes = [];
foreach (array_keys($jsonData['integrations']['delivery']['settings']['paymentTypes']) as $index65) {
    
$model->integrations->delivery->settings->paymentTypes[$index65] = new RetailCrm\Api\Model\Entity\Integration\Delivery\PaymentType();
if (isset($jsonData['integrations']['delivery']['settings']['paymentTypes'][$index65]['code'])) {
    $model->integrations->delivery->settings->paymentTypes[$index65]->code = $jsonData['integrations']['delivery']['settings']['paymentTypes'][$index65]['code'];

}
if (isset($jsonData['integrations']['delivery']['settings']['paymentTypes'][$index65]['active'])) {
    $model->integrations->delivery->settings->paymentTypes[$index65]->active = $jsonData['integrations']['delivery']['settings']['paymentTypes'][$index65]['active'];

}
if (isset($jsonData['integrations']['delivery']['settings']['paymentTypes'][$index65]['cod'])) {
    $model->integrations->delivery->settings->paymentTypes[$index65]->cod = $jsonData['integrations']['delivery']['settings']['paymentTypes'][$index65]['cod'];

}


}

}
if (isset($jsonData['integrations']['delivery']['settings']['shipmentPoints'])) {
    $model->integrations->delivery->settings->shipmentPoints = [];
foreach (array_keys($jsonData['integrations']['delivery']['settings']['shipmentPoints']) as $index67) {
    
$model->integrations->delivery->settings->shipmentPoints[$index67] = new RetailCrm\Api\Model\Entity\Integration\Delivery\ShipmentPoint();
if (isset($jsonData['integrations']['delivery']['settings']['shipmentPoints'][$index67]['code'])) {
    $model->integrations->delivery->settings->shipmentPoints[$index67]->code = $jsonData['integrations']['delivery']['settings']['shipmentPoints'][$index67]['code'];

}
if (isset($jsonData['integrations']['delivery']['settings']['shipmentPoints'][$index67]['shipmentPointId'])) {
    $model->integrations->delivery->settings->shipmentPoints[$index67]->shipmentPointId = $jsonData['integrations']['delivery']['settings']['shipmentPoints'][$index67]['shipmentPointId'];

}
if (isset($jsonData['integrations']['delivery']['settings']['shipmentPoints'][$index67]['shipmentPointLabel'])) {
    $model->integrations->delivery->settings->shipmentPoints[$index67]->shipmentPointLabel = $jsonData['integrations']['delivery']['settings']['shipmentPoints'][$index67]['shipmentPointLabel'];

}


}

}
if (isset($jsonData['integrations']['delivery']['settings']['statuses'])) {
    $model->integrations->delivery->settings->statuses = [];
foreach (array_keys($jsonData['integrations']['delivery']['settings']['statuses']) as $index61) {
    
$model->integrations->delivery->settings->statuses[$index61] = new RetailCrm\Api\Model\Entity\Integration\Delivery\Status();
if (isset($jsonData['integrations']['delivery']['settings']['statuses'][$index61]['code'])) {
    $model->integrations->delivery->settings->statuses[$index61]->code = $jsonData['integrations']['delivery']['settings']['statuses'][$index61]['code'];

}
if (isset($jsonData['integrations']['delivery']['settings']['statuses'][$index61]['name'])) {
    $model->integrations->delivery->settings->statuses[$index61]->name = $jsonData['integrations']['delivery']['settings']['statuses'][$index61]['name'];

}
if (isset($jsonData['integrations']['delivery']['settings']['statuses'][$index61]['isEditable'])) {
    $model->integrations->delivery->settings->statuses[$index61]->isEditable = $jsonData['integrations']['delivery']['settings']['statuses'][$index61]['isEditable'];

}


}

}
if (isset($jsonData['integrations']['delivery']['settings']['deliveryExtraData'])) {
    $model->integrations->delivery->settings->deliveryExtraData = [];
foreach (array_keys($jsonData['integrations']['delivery']['settings']['deliveryExtraData']) as $index70) {
    $model->integrations->delivery->settings->deliveryExtraData[$index70] = $jsonData['integrations']['delivery']['settings']['deliveryExtraData'][$index70];

}

}
if (isset($jsonData['integrations']['delivery']['settings']['shipmentExtraData'])) {
    $model->integrations->delivery->settings->shipmentExtraData = [];
foreach (array_keys($jsonData['integrations']['delivery']['settings']['shipmentExtraData']) as $index70) {
    $model->integrations->delivery->settings->shipmentExtraData[$index70] = $jsonData['integrations']['delivery']['settings']['shipmentExtraData'][$index70];

}

}


}


}
if (isset($jsonData['integrations']['store'])) {
    
$model->integrations->store = new RetailCrm\Api\Model\Entity\Integration\Store\StoreConfiguration();
if (isset($jsonData['integrations']['store']['actions'])) {
    $model->integrations->store->actions = [];
foreach (array_keys($jsonData['integrations']['store']['actions']) as $index45) {
    
$model->integrations->store->actions[$index45] = new RetailCrm\Api\Model\Entity\Integration\Store\Action();
if (isset($jsonData['integrations']['store']['actions'][$index45]['code'])) {
    $model->integrations->store->actions[$index45]->code = $jsonData['integrations']['store']['actions'][$index45]['code'];

}
if (isset($jsonData['integrations']['store']['actions'][$index45]['url'])) {
    $model->integrations->store->actions[$index45]->url = $jsonData['integrations']['store']['actions'][$index45]['url'];

}
if (isset($jsonData['integrations']['store']['actions'][$index45]['callPoints'])) {
    $model->integrations->store->actions[$index45]->callPoints = $jsonData['integrations']['store']['actions'][$index45]['callPoints'];

}


}

}


}
if (isset($jsonData['integrations']['recommendation'])) {
    
$model->integrations->recommendation = new RetailCrm\Api\Model\Entity\Integration\Recommendation\RecommendationConfiguration();
if (isset($jsonData['integrations']['recommendation']['actions'])) {
    $model->integrations->recommendation->actions = $jsonData['integrations']['recommendation']['actions'];

}
if (isset($jsonData['integrations']['recommendation']['addDefaultModes'])) {
    $model->integrations->recommendation->addDefaultModes = $jsonData['integrations']['recommendation']['addDefaultModes'];

}
if (isset($jsonData['integrations']['recommendation']['modes'])) {
    $model->integrations->recommendation->modes = [];
foreach (array_keys($jsonData['integrations']['recommendation']['modes']) as $index52) {
    
$model->integrations->recommendation->modes[$index52] = new RetailCrm\Api\Model\Entity\Integration\Recommendation\Mode();
if (isset($jsonData['integrations']['recommendation']['modes'][$index52]['code'])) {
    $model->integrations->recommendation->modes[$index52]->code = $jsonData['integrations']['recommendation']['modes'][$index52]['code'];

}
if (isset($jsonData['integrations']['recommendation']['modes'][$index52]['names'])) {
    $model->integrations->recommendation->modes[$index52]->names = $jsonData['integrations']['recommendation']['modes'][$index52]['names'];

}


}

}


}
if (isset($jsonData['integrations']['payment'])) {
    
$model->integrations->payment = new RetailCrm\Api\Model\Entity\Integration\Payment\PaymentConfiguration();
if (isset($jsonData['integrations']['payment']['actions'])) {
    
$model->integrations->payment->actions = new RetailCrm\Api\Model\Entity\Integration\Payment\Actions();
if (isset($jsonData['integrations']['payment']['actions']['create'])) {
    $model->integrations->payment->actions->create = $jsonData['integrations']['payment']['actions']['create'];

}
if (isset($jsonData['integrations']['payment']['actions']['approve'])) {
    $model->integrations->payment->actions->approve = $jsonData['integrations']['payment']['actions']['approve'];

}
if (isset($jsonData['integrations']['payment']['actions']['cancel'])) {
    $model->integrations->payment->actions->cancel = $jsonData['integrations']['payment']['actions']['cancel'];

}
if (isset($jsonData['integrations']['payment']['actions']['refund'])) {
    $model->integrations->payment->actions->refund = $jsonData['integrations']['payment']['actions']['refund'];

}


}
if (isset($jsonData['integrations']['payment']['currencies'])) {
    $model->integrations->payment->currencies = $jsonData['integrations']['payment']['currencies'];

}
if (isset($jsonData['integrations']['payment']['invoiceTypes'])) {
    $model->integrations->payment->invoiceTypes = $jsonData['integrations']['payment']['invoiceTypes'];

}
if (isset($jsonData['integrations']['payment']['shops'])) {
    $model->integrations->payment->shops = [];
foreach (array_keys($jsonData['integrations']['payment']['shops']) as $index45) {
    
$model->integrations->payment->shops[$index45] = new RetailCrm\Api\Model\Entity\Integration\Payment\Shop();
if (isset($jsonData['integrations']['payment']['shops'][$index45]['code'])) {
    $model->integrations->payment->shops[$index45]->code = $jsonData['integrations']['payment']['shops'][$index45]['code'];

}
if (isset($jsonData['integrations']['payment']['shops'][$index45]['name'])) {
    $model->integrations->payment->shops[$index45]->name = $jsonData['integrations']['payment']['shops'][$index45]['name'];

}
if (isset($jsonData['integrations']['payment']['shops'][$index45]['active'])) {
    $model->integrations->payment->shops[$index45]->active = $jsonData['integrations']['payment']['shops'][$index45]['active'];

}


}

}


}
if (isset($jsonData['integrations']['mgTransport'])) {
    
$model->integrations->mgTransport = new RetailCrm\Api\Model\Entity\Integration\Transport\TransportConfiguration();
if (isset($jsonData['integrations']['mgTransport']['token'])) {
    $model->integrations->mgTransport->token = $jsonData['integrations']['mgTransport']['token'];

}
if (isset($jsonData['integrations']['mgTransport']['isActive'])) {
    $model->integrations->mgTransport->isActive = $jsonData['integrations']['mgTransport']['isActive'];

}
if (isset($jsonData['integrations']['mgTransport']['webhookUrl'])) {
    $model->integrations->mgTransport->webhookUrl = $jsonData['integrations']['mgTransport']['webhookUrl'];

}
if (isset($jsonData['integrations']['mgTransport']['endpointUrl'])) {
    $model->integrations->mgTransport->endpointUrl = $jsonData['integrations']['mgTransport']['endpointUrl'];

}


}
if (isset($jsonData['integrations']['mgBot'])) {
    
$model->integrations->mgBot = new RetailCrm\Api\Model\Entity\Integration\Bot\BotConfiguration();
if (isset($jsonData['integrations']['mgBot']['isActive'])) {
    $model->integrations->mgBot->isActive = $jsonData['integrations']['mgBot']['isActive'];

}
if (isset($jsonData['integrations']['mgBot']['logo'])) {
    $model->integrations->mgBot->logo = $jsonData['integrations']['mgBot']['logo'];

}
if (isset($jsonData['integrations']['mgBot']['token'])) {
    $model->integrations->mgBot->token = $jsonData['integrations']['mgBot']['token'];

}
if (isset($jsonData['integrations']['mgBot']['name'])) {
    $model->integrations->mgBot->name = $jsonData['integrations']['mgBot']['name'];

}


}


}



    return $model;
}
