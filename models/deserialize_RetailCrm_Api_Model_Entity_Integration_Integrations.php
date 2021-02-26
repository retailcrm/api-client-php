<?php

function deserialize_RetailCrm_Api_Model_Entity_Integration_Integrations(array $jsonData): RetailCrm\Api\Model\Entity\Integration\Integrations
{
    
$model = new RetailCrm\Api\Model\Entity\Integration\Integrations();
if (isset($jsonData['telephony'])) {
    
$model->telephony = new RetailCrm\Api\Model\Entity\Integration\Telephony\TelephonyConfiguration();
if (isset($jsonData['telephony']['makeCallUrl'])) {
    $model->telephony->makeCallUrl = $jsonData['telephony']['makeCallUrl'];

}
if (isset($jsonData['telephony']['allowEdit'])) {
    $model->telephony->allowEdit = $jsonData['telephony']['allowEdit'];

}
if (isset($jsonData['telephony']['inputEventSupported'])) {
    $model->telephony->inputEventSupported = $jsonData['telephony']['inputEventSupported'];

}
if (isset($jsonData['telephony']['outputEventSupported'])) {
    $model->telephony->outputEventSupported = $jsonData['telephony']['outputEventSupported'];

}
if (isset($jsonData['telephony']['hangupEventSupported'])) {
    $model->telephony->hangupEventSupported = $jsonData['telephony']['hangupEventSupported'];

}
if (isset($jsonData['telephony']['changeUserStatusUrl'])) {
    $model->telephony->changeUserStatusUrl = $jsonData['telephony']['changeUserStatusUrl'];

}
if (isset($jsonData['telephony']['additionalCodes'])) {
    $model->telephony->additionalCodes = [];
foreach (array_keys($jsonData['telephony']['additionalCodes']) as $index41) {
    
$model->telephony->additionalCodes[$index41] = new RetailCrm\Api\Model\Entity\Integration\Telephony\SerializedAdditionalCodes();
if (isset($jsonData['telephony']['additionalCodes'][$index41]['userId'])) {
    $model->telephony->additionalCodes[$index41]->userId = $jsonData['telephony']['additionalCodes'][$index41]['userId'];

}
if (isset($jsonData['telephony']['additionalCodes'][$index41]['code'])) {
    $model->telephony->additionalCodes[$index41]->code = $jsonData['telephony']['additionalCodes'][$index41]['code'];

}


}

}
if (isset($jsonData['telephony']['externalPhones'])) {
    $model->telephony->externalPhones = [];
foreach (array_keys($jsonData['telephony']['externalPhones']) as $index40) {
    
$model->telephony->externalPhones[$index40] = new RetailCrm\Api\Model\Entity\Integration\Telephony\SerializedExternalPhones();
if (isset($jsonData['telephony']['externalPhones'][$index40]['siteCode'])) {
    $model->telephony->externalPhones[$index40]->siteCode = $jsonData['telephony']['externalPhones'][$index40]['siteCode'];

}
if (isset($jsonData['telephony']['externalPhones'][$index40]['externalPhone'])) {
    $model->telephony->externalPhones[$index40]->externalPhone = $jsonData['telephony']['externalPhones'][$index40]['externalPhone'];

}


}

}


}
if (isset($jsonData['delivery'])) {
    
$model->delivery = new RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryConfiguration();
if (isset($jsonData['delivery']['description'])) {
    $model->delivery->description = $jsonData['delivery']['description'];

}
if (isset($jsonData['delivery']['actions'])) {
    $model->delivery->actions = $jsonData['delivery']['actions'];

}
if (isset($jsonData['delivery']['payerType'])) {
    $model->delivery->payerType = [];
foreach (array_keys($jsonData['delivery']['payerType']) as $index34) {
    $model->delivery->payerType[$index34] = $jsonData['delivery']['payerType'][$index34];

}

}
if (isset($jsonData['delivery']['platePrintLimit'])) {
    $model->delivery->platePrintLimit = $jsonData['delivery']['platePrintLimit'];

}
if (isset($jsonData['delivery']['rateDeliveryCost'])) {
    $model->delivery->rateDeliveryCost = $jsonData['delivery']['rateDeliveryCost'];

}
if (isset($jsonData['delivery']['allowPackages'])) {
    $model->delivery->allowPackages = $jsonData['delivery']['allowPackages'];

}
if (isset($jsonData['delivery']['codAvailable'])) {
    $model->delivery->codAvailable = $jsonData['delivery']['codAvailable'];

}
if (isset($jsonData['delivery']['selfShipmentAvailable'])) {
    $model->delivery->selfShipmentAvailable = $jsonData['delivery']['selfShipmentAvailable'];

}
if (isset($jsonData['delivery']['duplicateOrderProductSupported'])) {
    $model->delivery->duplicateOrderProductSupported = $jsonData['delivery']['duplicateOrderProductSupported'];

}
if (isset($jsonData['delivery']['allowTrackNumber'])) {
    $model->delivery->allowTrackNumber = $jsonData['delivery']['allowTrackNumber'];

}
if (isset($jsonData['delivery']['availableCountries'])) {
    $model->delivery->availableCountries = [];
foreach (array_keys($jsonData['delivery']['availableCountries']) as $index43) {
    $model->delivery->availableCountries[$index43] = $jsonData['delivery']['availableCountries'][$index43];

}

}
if (isset($jsonData['delivery']['requiredFields'])) {
    $model->delivery->requiredFields = [];
foreach (array_keys($jsonData['delivery']['requiredFields']) as $index39) {
    $model->delivery->requiredFields[$index39] = $jsonData['delivery']['requiredFields'][$index39];

}

}
if (isset($jsonData['delivery']['statusList'])) {
    $model->delivery->statusList = [];
foreach (array_keys($jsonData['delivery']['statusList']) as $index35) {
    
$model->delivery->statusList[$index35] = new RetailCrm\Api\Model\Entity\Integration\Delivery\Status();
if (isset($jsonData['delivery']['statusList'][$index35]['code'])) {
    $model->delivery->statusList[$index35]->code = $jsonData['delivery']['statusList'][$index35]['code'];

}
if (isset($jsonData['delivery']['statusList'][$index35]['name'])) {
    $model->delivery->statusList[$index35]->name = $jsonData['delivery']['statusList'][$index35]['name'];

}
if (isset($jsonData['delivery']['statusList'][$index35]['isEditable'])) {
    $model->delivery->statusList[$index35]->isEditable = $jsonData['delivery']['statusList'][$index35]['isEditable'];

}


}

}
if (isset($jsonData['delivery']['plateList'])) {
    $model->delivery->plateList = [];
foreach (array_keys($jsonData['delivery']['plateList']) as $index34) {
    
$model->delivery->plateList[$index34] = new RetailCrm\Api\Model\Entity\Integration\Delivery\Plate();
if (isset($jsonData['delivery']['plateList'][$index34]['type'])) {
    $model->delivery->plateList[$index34]->type = $jsonData['delivery']['plateList'][$index34]['type'];

}
if (isset($jsonData['delivery']['plateList'][$index34]['code'])) {
    $model->delivery->plateList[$index34]->code = $jsonData['delivery']['plateList'][$index34]['code'];

}
if (isset($jsonData['delivery']['plateList'][$index34]['label'])) {
    $model->delivery->plateList[$index34]->label = $jsonData['delivery']['plateList'][$index34]['label'];

}


}

}
if (isset($jsonData['delivery']['deliveryDataFieldList'])) {
    $model->delivery->deliveryDataFieldList = [];
foreach (array_keys($jsonData['delivery']['deliveryDataFieldList']) as $index46) {
    
$model->delivery->deliveryDataFieldList[$index46] = new RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryDataField();
if (isset($jsonData['delivery']['deliveryDataFieldList'][$index46]['code'])) {
    $model->delivery->deliveryDataFieldList[$index46]->code = $jsonData['delivery']['deliveryDataFieldList'][$index46]['code'];

}
if (isset($jsonData['delivery']['deliveryDataFieldList'][$index46]['label'])) {
    $model->delivery->deliveryDataFieldList[$index46]->label = $jsonData['delivery']['deliveryDataFieldList'][$index46]['label'];

}
if (isset($jsonData['delivery']['deliveryDataFieldList'][$index46]['hint'])) {
    $model->delivery->deliveryDataFieldList[$index46]->hint = $jsonData['delivery']['deliveryDataFieldList'][$index46]['hint'];

}
if (isset($jsonData['delivery']['deliveryDataFieldList'][$index46]['type'])) {
    $model->delivery->deliveryDataFieldList[$index46]->type = $jsonData['delivery']['deliveryDataFieldList'][$index46]['type'];

}
if (isset($jsonData['delivery']['deliveryDataFieldList'][$index46]['multiple'])) {
    $model->delivery->deliveryDataFieldList[$index46]->multiple = $jsonData['delivery']['deliveryDataFieldList'][$index46]['multiple'];

}
if (isset($jsonData['delivery']['deliveryDataFieldList'][$index46]['choices'])) {
    $model->delivery->deliveryDataFieldList[$index46]->choices = $jsonData['delivery']['deliveryDataFieldList'][$index46]['choices'];

}
if (isset($jsonData['delivery']['deliveryDataFieldList'][$index46]['autocompleteUrl'])) {
    $model->delivery->deliveryDataFieldList[$index46]->autocompleteUrl = $jsonData['delivery']['deliveryDataFieldList'][$index46]['autocompleteUrl'];

}
if (isset($jsonData['delivery']['deliveryDataFieldList'][$index46]['visible'])) {
    $model->delivery->deliveryDataFieldList[$index46]->visible = $jsonData['delivery']['deliveryDataFieldList'][$index46]['visible'];

}
if (isset($jsonData['delivery']['deliveryDataFieldList'][$index46]['required'])) {
    $model->delivery->deliveryDataFieldList[$index46]->required = $jsonData['delivery']['deliveryDataFieldList'][$index46]['required'];

}
if (isset($jsonData['delivery']['deliveryDataFieldList'][$index46]['affectsCost'])) {
    $model->delivery->deliveryDataFieldList[$index46]->affectsCost = $jsonData['delivery']['deliveryDataFieldList'][$index46]['affectsCost'];

}
if (isset($jsonData['delivery']['deliveryDataFieldList'][$index46]['editable'])) {
    $model->delivery->deliveryDataFieldList[$index46]->editable = $jsonData['delivery']['deliveryDataFieldList'][$index46]['editable'];

}


}

}
if (isset($jsonData['delivery']['shipmentDataFieldList'])) {
    $model->delivery->shipmentDataFieldList = [];
foreach (array_keys($jsonData['delivery']['shipmentDataFieldList']) as $index46) {
    
$model->delivery->shipmentDataFieldList[$index46] = new RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryDataField();
if (isset($jsonData['delivery']['shipmentDataFieldList'][$index46]['code'])) {
    $model->delivery->shipmentDataFieldList[$index46]->code = $jsonData['delivery']['shipmentDataFieldList'][$index46]['code'];

}
if (isset($jsonData['delivery']['shipmentDataFieldList'][$index46]['label'])) {
    $model->delivery->shipmentDataFieldList[$index46]->label = $jsonData['delivery']['shipmentDataFieldList'][$index46]['label'];

}
if (isset($jsonData['delivery']['shipmentDataFieldList'][$index46]['hint'])) {
    $model->delivery->shipmentDataFieldList[$index46]->hint = $jsonData['delivery']['shipmentDataFieldList'][$index46]['hint'];

}
if (isset($jsonData['delivery']['shipmentDataFieldList'][$index46]['type'])) {
    $model->delivery->shipmentDataFieldList[$index46]->type = $jsonData['delivery']['shipmentDataFieldList'][$index46]['type'];

}
if (isset($jsonData['delivery']['shipmentDataFieldList'][$index46]['multiple'])) {
    $model->delivery->shipmentDataFieldList[$index46]->multiple = $jsonData['delivery']['shipmentDataFieldList'][$index46]['multiple'];

}
if (isset($jsonData['delivery']['shipmentDataFieldList'][$index46]['choices'])) {
    $model->delivery->shipmentDataFieldList[$index46]->choices = $jsonData['delivery']['shipmentDataFieldList'][$index46]['choices'];

}
if (isset($jsonData['delivery']['shipmentDataFieldList'][$index46]['autocompleteUrl'])) {
    $model->delivery->shipmentDataFieldList[$index46]->autocompleteUrl = $jsonData['delivery']['shipmentDataFieldList'][$index46]['autocompleteUrl'];

}
if (isset($jsonData['delivery']['shipmentDataFieldList'][$index46]['visible'])) {
    $model->delivery->shipmentDataFieldList[$index46]->visible = $jsonData['delivery']['shipmentDataFieldList'][$index46]['visible'];

}
if (isset($jsonData['delivery']['shipmentDataFieldList'][$index46]['required'])) {
    $model->delivery->shipmentDataFieldList[$index46]->required = $jsonData['delivery']['shipmentDataFieldList'][$index46]['required'];

}
if (isset($jsonData['delivery']['shipmentDataFieldList'][$index46]['affectsCost'])) {
    $model->delivery->shipmentDataFieldList[$index46]->affectsCost = $jsonData['delivery']['shipmentDataFieldList'][$index46]['affectsCost'];

}
if (isset($jsonData['delivery']['shipmentDataFieldList'][$index46]['editable'])) {
    $model->delivery->shipmentDataFieldList[$index46]->editable = $jsonData['delivery']['shipmentDataFieldList'][$index46]['editable'];

}


}

}
if (isset($jsonData['delivery']['settings'])) {
    
$model->delivery->settings = new RetailCrm\Api\Model\Entity\Integration\Delivery\Settings();
if (isset($jsonData['delivery']['settings']['defaultPayerType'])) {
    $model->delivery->settings->defaultPayerType = $jsonData['delivery']['settings']['defaultPayerType'];

}
if (isset($jsonData['delivery']['settings']['costCalculateBy'])) {
    $model->delivery->settings->costCalculateBy = $jsonData['delivery']['settings']['costCalculateBy'];

}
if (isset($jsonData['delivery']['settings']['nullDeclaredValue'])) {
    $model->delivery->settings->nullDeclaredValue = $jsonData['delivery']['settings']['nullDeclaredValue'];

}
if (isset($jsonData['delivery']['settings']['lockedByDefault'])) {
    $model->delivery->settings->lockedByDefault = $jsonData['delivery']['settings']['lockedByDefault'];

}
if (isset($jsonData['delivery']['settings']['paymentTypes'])) {
    $model->delivery->settings->paymentTypes = [];
foreach (array_keys($jsonData['delivery']['settings']['paymentTypes']) as $index49) {
    
$model->delivery->settings->paymentTypes[$index49] = new RetailCrm\Api\Model\Entity\Integration\Delivery\PaymentType();
if (isset($jsonData['delivery']['settings']['paymentTypes'][$index49]['code'])) {
    $model->delivery->settings->paymentTypes[$index49]->code = $jsonData['delivery']['settings']['paymentTypes'][$index49]['code'];

}
if (isset($jsonData['delivery']['settings']['paymentTypes'][$index49]['active'])) {
    $model->delivery->settings->paymentTypes[$index49]->active = $jsonData['delivery']['settings']['paymentTypes'][$index49]['active'];

}
if (isset($jsonData['delivery']['settings']['paymentTypes'][$index49]['cod'])) {
    $model->delivery->settings->paymentTypes[$index49]->cod = $jsonData['delivery']['settings']['paymentTypes'][$index49]['cod'];

}


}

}
if (isset($jsonData['delivery']['settings']['shipmentPoints'])) {
    $model->delivery->settings->shipmentPoints = [];
foreach (array_keys($jsonData['delivery']['settings']['shipmentPoints']) as $index51) {
    
$model->delivery->settings->shipmentPoints[$index51] = new RetailCrm\Api\Model\Entity\Integration\Delivery\ShipmentPoint();
if (isset($jsonData['delivery']['settings']['shipmentPoints'][$index51]['code'])) {
    $model->delivery->settings->shipmentPoints[$index51]->code = $jsonData['delivery']['settings']['shipmentPoints'][$index51]['code'];

}
if (isset($jsonData['delivery']['settings']['shipmentPoints'][$index51]['shipmentPointId'])) {
    $model->delivery->settings->shipmentPoints[$index51]->shipmentPointId = $jsonData['delivery']['settings']['shipmentPoints'][$index51]['shipmentPointId'];

}
if (isset($jsonData['delivery']['settings']['shipmentPoints'][$index51]['shipmentPointLabel'])) {
    $model->delivery->settings->shipmentPoints[$index51]->shipmentPointLabel = $jsonData['delivery']['settings']['shipmentPoints'][$index51]['shipmentPointLabel'];

}


}

}
if (isset($jsonData['delivery']['settings']['statuses'])) {
    $model->delivery->settings->statuses = [];
foreach (array_keys($jsonData['delivery']['settings']['statuses']) as $index45) {
    
$model->delivery->settings->statuses[$index45] = new RetailCrm\Api\Model\Entity\Integration\Delivery\Status();
if (isset($jsonData['delivery']['settings']['statuses'][$index45]['code'])) {
    $model->delivery->settings->statuses[$index45]->code = $jsonData['delivery']['settings']['statuses'][$index45]['code'];

}
if (isset($jsonData['delivery']['settings']['statuses'][$index45]['name'])) {
    $model->delivery->settings->statuses[$index45]->name = $jsonData['delivery']['settings']['statuses'][$index45]['name'];

}
if (isset($jsonData['delivery']['settings']['statuses'][$index45]['isEditable'])) {
    $model->delivery->settings->statuses[$index45]->isEditable = $jsonData['delivery']['settings']['statuses'][$index45]['isEditable'];

}


}

}
if (isset($jsonData['delivery']['settings']['deliveryExtraData'])) {
    $model->delivery->settings->deliveryExtraData = [];
foreach (array_keys($jsonData['delivery']['settings']['deliveryExtraData']) as $index54) {
    $model->delivery->settings->deliveryExtraData[$index54] = $jsonData['delivery']['settings']['deliveryExtraData'][$index54];

}

}
if (isset($jsonData['delivery']['settings']['shipmentExtraData'])) {
    $model->delivery->settings->shipmentExtraData = [];
foreach (array_keys($jsonData['delivery']['settings']['shipmentExtraData']) as $index54) {
    $model->delivery->settings->shipmentExtraData[$index54] = $jsonData['delivery']['settings']['shipmentExtraData'][$index54];

}

}


}


}
if (isset($jsonData['store'])) {
    
$model->store = new RetailCrm\Api\Model\Entity\Integration\Store\StoreConfiguration();
if (isset($jsonData['store']['actions'])) {
    $model->store->actions = [];
foreach (array_keys($jsonData['store']['actions']) as $index29) {
    
$model->store->actions[$index29] = new RetailCrm\Api\Model\Entity\Integration\Store\Action();
if (isset($jsonData['store']['actions'][$index29]['code'])) {
    $model->store->actions[$index29]->code = $jsonData['store']['actions'][$index29]['code'];

}
if (isset($jsonData['store']['actions'][$index29]['url'])) {
    $model->store->actions[$index29]->url = $jsonData['store']['actions'][$index29]['url'];

}
if (isset($jsonData['store']['actions'][$index29]['callPoints'])) {
    $model->store->actions[$index29]->callPoints = $jsonData['store']['actions'][$index29]['callPoints'];

}


}

}


}
if (isset($jsonData['recommendation'])) {
    
$model->recommendation = new RetailCrm\Api\Model\Entity\Integration\Recommendation\RecommendationConfiguration();
if (isset($jsonData['recommendation']['actions'])) {
    $model->recommendation->actions = $jsonData['recommendation']['actions'];

}
if (isset($jsonData['recommendation']['addDefaultModes'])) {
    $model->recommendation->addDefaultModes = $jsonData['recommendation']['addDefaultModes'];

}
if (isset($jsonData['recommendation']['modes'])) {
    $model->recommendation->modes = [];
foreach (array_keys($jsonData['recommendation']['modes']) as $index36) {
    
$model->recommendation->modes[$index36] = new RetailCrm\Api\Model\Entity\Integration\Recommendation\Mode();
if (isset($jsonData['recommendation']['modes'][$index36]['code'])) {
    $model->recommendation->modes[$index36]->code = $jsonData['recommendation']['modes'][$index36]['code'];

}
if (isset($jsonData['recommendation']['modes'][$index36]['names'])) {
    $model->recommendation->modes[$index36]->names = $jsonData['recommendation']['modes'][$index36]['names'];

}


}

}


}
if (isset($jsonData['payment'])) {
    
$model->payment = new RetailCrm\Api\Model\Entity\Integration\Payment\PaymentConfiguration();
if (isset($jsonData['payment']['actions'])) {
    
$model->payment->actions = new RetailCrm\Api\Model\Entity\Integration\Payment\Actions();
if (isset($jsonData['payment']['actions']['create'])) {
    $model->payment->actions->create = $jsonData['payment']['actions']['create'];

}
if (isset($jsonData['payment']['actions']['approve'])) {
    $model->payment->actions->approve = $jsonData['payment']['actions']['approve'];

}
if (isset($jsonData['payment']['actions']['cancel'])) {
    $model->payment->actions->cancel = $jsonData['payment']['actions']['cancel'];

}
if (isset($jsonData['payment']['actions']['refund'])) {
    $model->payment->actions->refund = $jsonData['payment']['actions']['refund'];

}


}
if (isset($jsonData['payment']['currencies'])) {
    $model->payment->currencies = $jsonData['payment']['currencies'];

}
if (isset($jsonData['payment']['invoiceTypes'])) {
    $model->payment->invoiceTypes = $jsonData['payment']['invoiceTypes'];

}
if (isset($jsonData['payment']['shops'])) {
    $model->payment->shops = [];
foreach (array_keys($jsonData['payment']['shops']) as $index29) {
    
$model->payment->shops[$index29] = new RetailCrm\Api\Model\Entity\Integration\Payment\Shop();
if (isset($jsonData['payment']['shops'][$index29]['code'])) {
    $model->payment->shops[$index29]->code = $jsonData['payment']['shops'][$index29]['code'];

}
if (isset($jsonData['payment']['shops'][$index29]['name'])) {
    $model->payment->shops[$index29]->name = $jsonData['payment']['shops'][$index29]['name'];

}
if (isset($jsonData['payment']['shops'][$index29]['active'])) {
    $model->payment->shops[$index29]->active = $jsonData['payment']['shops'][$index29]['active'];

}


}

}


}
if (isset($jsonData['mgTransport'])) {
    
$model->mgTransport = new RetailCrm\Api\Model\Entity\Integration\Transport\TransportConfiguration();
if (isset($jsonData['mgTransport']['token'])) {
    $model->mgTransport->token = $jsonData['mgTransport']['token'];

}
if (isset($jsonData['mgTransport']['isActive'])) {
    $model->mgTransport->isActive = $jsonData['mgTransport']['isActive'];

}
if (isset($jsonData['mgTransport']['webhookUrl'])) {
    $model->mgTransport->webhookUrl = $jsonData['mgTransport']['webhookUrl'];

}
if (isset($jsonData['mgTransport']['endpointUrl'])) {
    $model->mgTransport->endpointUrl = $jsonData['mgTransport']['endpointUrl'];

}


}
if (isset($jsonData['mgBot'])) {
    
$model->mgBot = new RetailCrm\Api\Model\Entity\Integration\Bot\BotConfiguration();
if (isset($jsonData['mgBot']['isActive'])) {
    $model->mgBot->isActive = $jsonData['mgBot']['isActive'];

}
if (isset($jsonData['mgBot']['logo'])) {
    $model->mgBot->logo = $jsonData['mgBot']['logo'];

}
if (isset($jsonData['mgBot']['token'])) {
    $model->mgBot->token = $jsonData['mgBot']['token'];

}
if (isset($jsonData['mgBot']['name'])) {
    $model->mgBot->name = $jsonData['mgBot']['name'];

}


}



    return $model;
}
