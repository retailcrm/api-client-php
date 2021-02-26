<?php

function deserialize_RetailCrm_Api_Model_Response_Integration_IntegrationModulesEditResponse(array $jsonData): RetailCrm\Api\Model\Response\Integration\IntegrationModulesEditResponse
{
    
$model = new RetailCrm\Api\Model\Response\Integration\IntegrationModulesEditResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['info'])) {
    
$model->info = new RetailCrm\Api\Model\Entity\Integration\Integrations();
if (isset($jsonData['info']['telephony'])) {
    
$model->info->telephony = new RetailCrm\Api\Model\Entity\Integration\Telephony\TelephonyConfiguration();
if (isset($jsonData['info']['telephony']['makeCallUrl'])) {
    $model->info->telephony->makeCallUrl = $jsonData['info']['telephony']['makeCallUrl'];

}
if (isset($jsonData['info']['telephony']['allowEdit'])) {
    $model->info->telephony->allowEdit = $jsonData['info']['telephony']['allowEdit'];

}
if (isset($jsonData['info']['telephony']['inputEventSupported'])) {
    $model->info->telephony->inputEventSupported = $jsonData['info']['telephony']['inputEventSupported'];

}
if (isset($jsonData['info']['telephony']['outputEventSupported'])) {
    $model->info->telephony->outputEventSupported = $jsonData['info']['telephony']['outputEventSupported'];

}
if (isset($jsonData['info']['telephony']['hangupEventSupported'])) {
    $model->info->telephony->hangupEventSupported = $jsonData['info']['telephony']['hangupEventSupported'];

}
if (isset($jsonData['info']['telephony']['changeUserStatusUrl'])) {
    $model->info->telephony->changeUserStatusUrl = $jsonData['info']['telephony']['changeUserStatusUrl'];

}
if (isset($jsonData['info']['telephony']['additionalCodes'])) {
    $model->info->telephony->additionalCodes = [];
foreach (array_keys($jsonData['info']['telephony']['additionalCodes']) as $index49) {
    
$model->info->telephony->additionalCodes[$index49] = new RetailCrm\Api\Model\Entity\Integration\Telephony\SerializedAdditionalCodes();
if (isset($jsonData['info']['telephony']['additionalCodes'][$index49]['userId'])) {
    $model->info->telephony->additionalCodes[$index49]->userId = $jsonData['info']['telephony']['additionalCodes'][$index49]['userId'];

}
if (isset($jsonData['info']['telephony']['additionalCodes'][$index49]['code'])) {
    $model->info->telephony->additionalCodes[$index49]->code = $jsonData['info']['telephony']['additionalCodes'][$index49]['code'];

}


}

}
if (isset($jsonData['info']['telephony']['externalPhones'])) {
    $model->info->telephony->externalPhones = [];
foreach (array_keys($jsonData['info']['telephony']['externalPhones']) as $index48) {
    
$model->info->telephony->externalPhones[$index48] = new RetailCrm\Api\Model\Entity\Integration\Telephony\SerializedExternalPhones();
if (isset($jsonData['info']['telephony']['externalPhones'][$index48]['siteCode'])) {
    $model->info->telephony->externalPhones[$index48]->siteCode = $jsonData['info']['telephony']['externalPhones'][$index48]['siteCode'];

}
if (isset($jsonData['info']['telephony']['externalPhones'][$index48]['externalPhone'])) {
    $model->info->telephony->externalPhones[$index48]->externalPhone = $jsonData['info']['telephony']['externalPhones'][$index48]['externalPhone'];

}


}

}


}
if (isset($jsonData['info']['delivery'])) {
    
$model->info->delivery = new RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryConfiguration();
if (isset($jsonData['info']['delivery']['description'])) {
    $model->info->delivery->description = $jsonData['info']['delivery']['description'];

}
if (isset($jsonData['info']['delivery']['actions'])) {
    $model->info->delivery->actions = $jsonData['info']['delivery']['actions'];

}
if (isset($jsonData['info']['delivery']['payerType'])) {
    $model->info->delivery->payerType = [];
foreach (array_keys($jsonData['info']['delivery']['payerType']) as $index42) {
    $model->info->delivery->payerType[$index42] = $jsonData['info']['delivery']['payerType'][$index42];

}

}
if (isset($jsonData['info']['delivery']['platePrintLimit'])) {
    $model->info->delivery->platePrintLimit = $jsonData['info']['delivery']['platePrintLimit'];

}
if (isset($jsonData['info']['delivery']['rateDeliveryCost'])) {
    $model->info->delivery->rateDeliveryCost = $jsonData['info']['delivery']['rateDeliveryCost'];

}
if (isset($jsonData['info']['delivery']['allowPackages'])) {
    $model->info->delivery->allowPackages = $jsonData['info']['delivery']['allowPackages'];

}
if (isset($jsonData['info']['delivery']['codAvailable'])) {
    $model->info->delivery->codAvailable = $jsonData['info']['delivery']['codAvailable'];

}
if (isset($jsonData['info']['delivery']['selfShipmentAvailable'])) {
    $model->info->delivery->selfShipmentAvailable = $jsonData['info']['delivery']['selfShipmentAvailable'];

}
if (isset($jsonData['info']['delivery']['duplicateOrderProductSupported'])) {
    $model->info->delivery->duplicateOrderProductSupported = $jsonData['info']['delivery']['duplicateOrderProductSupported'];

}
if (isset($jsonData['info']['delivery']['allowTrackNumber'])) {
    $model->info->delivery->allowTrackNumber = $jsonData['info']['delivery']['allowTrackNumber'];

}
if (isset($jsonData['info']['delivery']['availableCountries'])) {
    $model->info->delivery->availableCountries = [];
foreach (array_keys($jsonData['info']['delivery']['availableCountries']) as $index51) {
    $model->info->delivery->availableCountries[$index51] = $jsonData['info']['delivery']['availableCountries'][$index51];

}

}
if (isset($jsonData['info']['delivery']['requiredFields'])) {
    $model->info->delivery->requiredFields = [];
foreach (array_keys($jsonData['info']['delivery']['requiredFields']) as $index47) {
    $model->info->delivery->requiredFields[$index47] = $jsonData['info']['delivery']['requiredFields'][$index47];

}

}
if (isset($jsonData['info']['delivery']['statusList'])) {
    $model->info->delivery->statusList = [];
foreach (array_keys($jsonData['info']['delivery']['statusList']) as $index43) {
    
$model->info->delivery->statusList[$index43] = new RetailCrm\Api\Model\Entity\Integration\Delivery\Status();
if (isset($jsonData['info']['delivery']['statusList'][$index43]['code'])) {
    $model->info->delivery->statusList[$index43]->code = $jsonData['info']['delivery']['statusList'][$index43]['code'];

}
if (isset($jsonData['info']['delivery']['statusList'][$index43]['name'])) {
    $model->info->delivery->statusList[$index43]->name = $jsonData['info']['delivery']['statusList'][$index43]['name'];

}
if (isset($jsonData['info']['delivery']['statusList'][$index43]['isEditable'])) {
    $model->info->delivery->statusList[$index43]->isEditable = $jsonData['info']['delivery']['statusList'][$index43]['isEditable'];

}


}

}
if (isset($jsonData['info']['delivery']['plateList'])) {
    $model->info->delivery->plateList = [];
foreach (array_keys($jsonData['info']['delivery']['plateList']) as $index42) {
    
$model->info->delivery->plateList[$index42] = new RetailCrm\Api\Model\Entity\Integration\Delivery\Plate();
if (isset($jsonData['info']['delivery']['plateList'][$index42]['type'])) {
    $model->info->delivery->plateList[$index42]->type = $jsonData['info']['delivery']['plateList'][$index42]['type'];

}
if (isset($jsonData['info']['delivery']['plateList'][$index42]['code'])) {
    $model->info->delivery->plateList[$index42]->code = $jsonData['info']['delivery']['plateList'][$index42]['code'];

}
if (isset($jsonData['info']['delivery']['plateList'][$index42]['label'])) {
    $model->info->delivery->plateList[$index42]->label = $jsonData['info']['delivery']['plateList'][$index42]['label'];

}


}

}
if (isset($jsonData['info']['delivery']['deliveryDataFieldList'])) {
    $model->info->delivery->deliveryDataFieldList = [];
foreach (array_keys($jsonData['info']['delivery']['deliveryDataFieldList']) as $index54) {
    
$model->info->delivery->deliveryDataFieldList[$index54] = new RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryDataField();
if (isset($jsonData['info']['delivery']['deliveryDataFieldList'][$index54]['code'])) {
    $model->info->delivery->deliveryDataFieldList[$index54]->code = $jsonData['info']['delivery']['deliveryDataFieldList'][$index54]['code'];

}
if (isset($jsonData['info']['delivery']['deliveryDataFieldList'][$index54]['label'])) {
    $model->info->delivery->deliveryDataFieldList[$index54]->label = $jsonData['info']['delivery']['deliveryDataFieldList'][$index54]['label'];

}
if (isset($jsonData['info']['delivery']['deliveryDataFieldList'][$index54]['hint'])) {
    $model->info->delivery->deliveryDataFieldList[$index54]->hint = $jsonData['info']['delivery']['deliveryDataFieldList'][$index54]['hint'];

}
if (isset($jsonData['info']['delivery']['deliveryDataFieldList'][$index54]['type'])) {
    $model->info->delivery->deliveryDataFieldList[$index54]->type = $jsonData['info']['delivery']['deliveryDataFieldList'][$index54]['type'];

}
if (isset($jsonData['info']['delivery']['deliveryDataFieldList'][$index54]['multiple'])) {
    $model->info->delivery->deliveryDataFieldList[$index54]->multiple = $jsonData['info']['delivery']['deliveryDataFieldList'][$index54]['multiple'];

}
if (isset($jsonData['info']['delivery']['deliveryDataFieldList'][$index54]['choices'])) {
    $model->info->delivery->deliveryDataFieldList[$index54]->choices = $jsonData['info']['delivery']['deliveryDataFieldList'][$index54]['choices'];

}
if (isset($jsonData['info']['delivery']['deliveryDataFieldList'][$index54]['autocompleteUrl'])) {
    $model->info->delivery->deliveryDataFieldList[$index54]->autocompleteUrl = $jsonData['info']['delivery']['deliveryDataFieldList'][$index54]['autocompleteUrl'];

}
if (isset($jsonData['info']['delivery']['deliveryDataFieldList'][$index54]['visible'])) {
    $model->info->delivery->deliveryDataFieldList[$index54]->visible = $jsonData['info']['delivery']['deliveryDataFieldList'][$index54]['visible'];

}
if (isset($jsonData['info']['delivery']['deliveryDataFieldList'][$index54]['required'])) {
    $model->info->delivery->deliveryDataFieldList[$index54]->required = $jsonData['info']['delivery']['deliveryDataFieldList'][$index54]['required'];

}
if (isset($jsonData['info']['delivery']['deliveryDataFieldList'][$index54]['affectsCost'])) {
    $model->info->delivery->deliveryDataFieldList[$index54]->affectsCost = $jsonData['info']['delivery']['deliveryDataFieldList'][$index54]['affectsCost'];

}
if (isset($jsonData['info']['delivery']['deliveryDataFieldList'][$index54]['editable'])) {
    $model->info->delivery->deliveryDataFieldList[$index54]->editable = $jsonData['info']['delivery']['deliveryDataFieldList'][$index54]['editable'];

}


}

}
if (isset($jsonData['info']['delivery']['shipmentDataFieldList'])) {
    $model->info->delivery->shipmentDataFieldList = [];
foreach (array_keys($jsonData['info']['delivery']['shipmentDataFieldList']) as $index54) {
    
$model->info->delivery->shipmentDataFieldList[$index54] = new RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryDataField();
if (isset($jsonData['info']['delivery']['shipmentDataFieldList'][$index54]['code'])) {
    $model->info->delivery->shipmentDataFieldList[$index54]->code = $jsonData['info']['delivery']['shipmentDataFieldList'][$index54]['code'];

}
if (isset($jsonData['info']['delivery']['shipmentDataFieldList'][$index54]['label'])) {
    $model->info->delivery->shipmentDataFieldList[$index54]->label = $jsonData['info']['delivery']['shipmentDataFieldList'][$index54]['label'];

}
if (isset($jsonData['info']['delivery']['shipmentDataFieldList'][$index54]['hint'])) {
    $model->info->delivery->shipmentDataFieldList[$index54]->hint = $jsonData['info']['delivery']['shipmentDataFieldList'][$index54]['hint'];

}
if (isset($jsonData['info']['delivery']['shipmentDataFieldList'][$index54]['type'])) {
    $model->info->delivery->shipmentDataFieldList[$index54]->type = $jsonData['info']['delivery']['shipmentDataFieldList'][$index54]['type'];

}
if (isset($jsonData['info']['delivery']['shipmentDataFieldList'][$index54]['multiple'])) {
    $model->info->delivery->shipmentDataFieldList[$index54]->multiple = $jsonData['info']['delivery']['shipmentDataFieldList'][$index54]['multiple'];

}
if (isset($jsonData['info']['delivery']['shipmentDataFieldList'][$index54]['choices'])) {
    $model->info->delivery->shipmentDataFieldList[$index54]->choices = $jsonData['info']['delivery']['shipmentDataFieldList'][$index54]['choices'];

}
if (isset($jsonData['info']['delivery']['shipmentDataFieldList'][$index54]['autocompleteUrl'])) {
    $model->info->delivery->shipmentDataFieldList[$index54]->autocompleteUrl = $jsonData['info']['delivery']['shipmentDataFieldList'][$index54]['autocompleteUrl'];

}
if (isset($jsonData['info']['delivery']['shipmentDataFieldList'][$index54]['visible'])) {
    $model->info->delivery->shipmentDataFieldList[$index54]->visible = $jsonData['info']['delivery']['shipmentDataFieldList'][$index54]['visible'];

}
if (isset($jsonData['info']['delivery']['shipmentDataFieldList'][$index54]['required'])) {
    $model->info->delivery->shipmentDataFieldList[$index54]->required = $jsonData['info']['delivery']['shipmentDataFieldList'][$index54]['required'];

}
if (isset($jsonData['info']['delivery']['shipmentDataFieldList'][$index54]['affectsCost'])) {
    $model->info->delivery->shipmentDataFieldList[$index54]->affectsCost = $jsonData['info']['delivery']['shipmentDataFieldList'][$index54]['affectsCost'];

}
if (isset($jsonData['info']['delivery']['shipmentDataFieldList'][$index54]['editable'])) {
    $model->info->delivery->shipmentDataFieldList[$index54]->editable = $jsonData['info']['delivery']['shipmentDataFieldList'][$index54]['editable'];

}


}

}
if (isset($jsonData['info']['delivery']['settings'])) {
    
$model->info->delivery->settings = new RetailCrm\Api\Model\Entity\Integration\Delivery\Settings();
if (isset($jsonData['info']['delivery']['settings']['defaultPayerType'])) {
    $model->info->delivery->settings->defaultPayerType = $jsonData['info']['delivery']['settings']['defaultPayerType'];

}
if (isset($jsonData['info']['delivery']['settings']['costCalculateBy'])) {
    $model->info->delivery->settings->costCalculateBy = $jsonData['info']['delivery']['settings']['costCalculateBy'];

}
if (isset($jsonData['info']['delivery']['settings']['nullDeclaredValue'])) {
    $model->info->delivery->settings->nullDeclaredValue = $jsonData['info']['delivery']['settings']['nullDeclaredValue'];

}
if (isset($jsonData['info']['delivery']['settings']['lockedByDefault'])) {
    $model->info->delivery->settings->lockedByDefault = $jsonData['info']['delivery']['settings']['lockedByDefault'];

}
if (isset($jsonData['info']['delivery']['settings']['paymentTypes'])) {
    $model->info->delivery->settings->paymentTypes = [];
foreach (array_keys($jsonData['info']['delivery']['settings']['paymentTypes']) as $index57) {
    
$model->info->delivery->settings->paymentTypes[$index57] = new RetailCrm\Api\Model\Entity\Integration\Delivery\PaymentType();
if (isset($jsonData['info']['delivery']['settings']['paymentTypes'][$index57]['code'])) {
    $model->info->delivery->settings->paymentTypes[$index57]->code = $jsonData['info']['delivery']['settings']['paymentTypes'][$index57]['code'];

}
if (isset($jsonData['info']['delivery']['settings']['paymentTypes'][$index57]['active'])) {
    $model->info->delivery->settings->paymentTypes[$index57]->active = $jsonData['info']['delivery']['settings']['paymentTypes'][$index57]['active'];

}
if (isset($jsonData['info']['delivery']['settings']['paymentTypes'][$index57]['cod'])) {
    $model->info->delivery->settings->paymentTypes[$index57]->cod = $jsonData['info']['delivery']['settings']['paymentTypes'][$index57]['cod'];

}


}

}
if (isset($jsonData['info']['delivery']['settings']['shipmentPoints'])) {
    $model->info->delivery->settings->shipmentPoints = [];
foreach (array_keys($jsonData['info']['delivery']['settings']['shipmentPoints']) as $index59) {
    
$model->info->delivery->settings->shipmentPoints[$index59] = new RetailCrm\Api\Model\Entity\Integration\Delivery\ShipmentPoint();
if (isset($jsonData['info']['delivery']['settings']['shipmentPoints'][$index59]['code'])) {
    $model->info->delivery->settings->shipmentPoints[$index59]->code = $jsonData['info']['delivery']['settings']['shipmentPoints'][$index59]['code'];

}
if (isset($jsonData['info']['delivery']['settings']['shipmentPoints'][$index59]['shipmentPointId'])) {
    $model->info->delivery->settings->shipmentPoints[$index59]->shipmentPointId = $jsonData['info']['delivery']['settings']['shipmentPoints'][$index59]['shipmentPointId'];

}
if (isset($jsonData['info']['delivery']['settings']['shipmentPoints'][$index59]['shipmentPointLabel'])) {
    $model->info->delivery->settings->shipmentPoints[$index59]->shipmentPointLabel = $jsonData['info']['delivery']['settings']['shipmentPoints'][$index59]['shipmentPointLabel'];

}


}

}
if (isset($jsonData['info']['delivery']['settings']['statuses'])) {
    $model->info->delivery->settings->statuses = [];
foreach (array_keys($jsonData['info']['delivery']['settings']['statuses']) as $index53) {
    
$model->info->delivery->settings->statuses[$index53] = new RetailCrm\Api\Model\Entity\Integration\Delivery\Status();
if (isset($jsonData['info']['delivery']['settings']['statuses'][$index53]['code'])) {
    $model->info->delivery->settings->statuses[$index53]->code = $jsonData['info']['delivery']['settings']['statuses'][$index53]['code'];

}
if (isset($jsonData['info']['delivery']['settings']['statuses'][$index53]['name'])) {
    $model->info->delivery->settings->statuses[$index53]->name = $jsonData['info']['delivery']['settings']['statuses'][$index53]['name'];

}
if (isset($jsonData['info']['delivery']['settings']['statuses'][$index53]['isEditable'])) {
    $model->info->delivery->settings->statuses[$index53]->isEditable = $jsonData['info']['delivery']['settings']['statuses'][$index53]['isEditable'];

}


}

}
if (isset($jsonData['info']['delivery']['settings']['deliveryExtraData'])) {
    $model->info->delivery->settings->deliveryExtraData = [];
foreach (array_keys($jsonData['info']['delivery']['settings']['deliveryExtraData']) as $index62) {
    $model->info->delivery->settings->deliveryExtraData[$index62] = $jsonData['info']['delivery']['settings']['deliveryExtraData'][$index62];

}

}
if (isset($jsonData['info']['delivery']['settings']['shipmentExtraData'])) {
    $model->info->delivery->settings->shipmentExtraData = [];
foreach (array_keys($jsonData['info']['delivery']['settings']['shipmentExtraData']) as $index62) {
    $model->info->delivery->settings->shipmentExtraData[$index62] = $jsonData['info']['delivery']['settings']['shipmentExtraData'][$index62];

}

}


}


}
if (isset($jsonData['info']['store'])) {
    
$model->info->store = new RetailCrm\Api\Model\Entity\Integration\Store\StoreConfiguration();
if (isset($jsonData['info']['store']['actions'])) {
    $model->info->store->actions = [];
foreach (array_keys($jsonData['info']['store']['actions']) as $index37) {
    
$model->info->store->actions[$index37] = new RetailCrm\Api\Model\Entity\Integration\Store\Action();
if (isset($jsonData['info']['store']['actions'][$index37]['code'])) {
    $model->info->store->actions[$index37]->code = $jsonData['info']['store']['actions'][$index37]['code'];

}
if (isset($jsonData['info']['store']['actions'][$index37]['url'])) {
    $model->info->store->actions[$index37]->url = $jsonData['info']['store']['actions'][$index37]['url'];

}
if (isset($jsonData['info']['store']['actions'][$index37]['callPoints'])) {
    $model->info->store->actions[$index37]->callPoints = $jsonData['info']['store']['actions'][$index37]['callPoints'];

}


}

}


}
if (isset($jsonData['info']['recommendation'])) {
    
$model->info->recommendation = new RetailCrm\Api\Model\Entity\Integration\Recommendation\RecommendationConfiguration();
if (isset($jsonData['info']['recommendation']['actions'])) {
    $model->info->recommendation->actions = $jsonData['info']['recommendation']['actions'];

}
if (isset($jsonData['info']['recommendation']['addDefaultModes'])) {
    $model->info->recommendation->addDefaultModes = $jsonData['info']['recommendation']['addDefaultModes'];

}
if (isset($jsonData['info']['recommendation']['modes'])) {
    $model->info->recommendation->modes = [];
foreach (array_keys($jsonData['info']['recommendation']['modes']) as $index44) {
    
$model->info->recommendation->modes[$index44] = new RetailCrm\Api\Model\Entity\Integration\Recommendation\Mode();
if (isset($jsonData['info']['recommendation']['modes'][$index44]['code'])) {
    $model->info->recommendation->modes[$index44]->code = $jsonData['info']['recommendation']['modes'][$index44]['code'];

}
if (isset($jsonData['info']['recommendation']['modes'][$index44]['names'])) {
    $model->info->recommendation->modes[$index44]->names = $jsonData['info']['recommendation']['modes'][$index44]['names'];

}


}

}


}
if (isset($jsonData['info']['payment'])) {
    
$model->info->payment = new RetailCrm\Api\Model\Entity\Integration\Payment\PaymentConfiguration();
if (isset($jsonData['info']['payment']['actions'])) {
    
$model->info->payment->actions = new RetailCrm\Api\Model\Entity\Integration\Payment\Actions();
if (isset($jsonData['info']['payment']['actions']['create'])) {
    $model->info->payment->actions->create = $jsonData['info']['payment']['actions']['create'];

}
if (isset($jsonData['info']['payment']['actions']['approve'])) {
    $model->info->payment->actions->approve = $jsonData['info']['payment']['actions']['approve'];

}
if (isset($jsonData['info']['payment']['actions']['cancel'])) {
    $model->info->payment->actions->cancel = $jsonData['info']['payment']['actions']['cancel'];

}
if (isset($jsonData['info']['payment']['actions']['refund'])) {
    $model->info->payment->actions->refund = $jsonData['info']['payment']['actions']['refund'];

}


}
if (isset($jsonData['info']['payment']['currencies'])) {
    $model->info->payment->currencies = $jsonData['info']['payment']['currencies'];

}
if (isset($jsonData['info']['payment']['invoiceTypes'])) {
    $model->info->payment->invoiceTypes = $jsonData['info']['payment']['invoiceTypes'];

}
if (isset($jsonData['info']['payment']['shops'])) {
    $model->info->payment->shops = [];
foreach (array_keys($jsonData['info']['payment']['shops']) as $index37) {
    
$model->info->payment->shops[$index37] = new RetailCrm\Api\Model\Entity\Integration\Payment\Shop();
if (isset($jsonData['info']['payment']['shops'][$index37]['code'])) {
    $model->info->payment->shops[$index37]->code = $jsonData['info']['payment']['shops'][$index37]['code'];

}
if (isset($jsonData['info']['payment']['shops'][$index37]['name'])) {
    $model->info->payment->shops[$index37]->name = $jsonData['info']['payment']['shops'][$index37]['name'];

}
if (isset($jsonData['info']['payment']['shops'][$index37]['active'])) {
    $model->info->payment->shops[$index37]->active = $jsonData['info']['payment']['shops'][$index37]['active'];

}


}

}


}
if (isset($jsonData['info']['mgTransport'])) {
    
$model->info->mgTransport = new RetailCrm\Api\Model\Entity\Integration\Transport\TransportConfiguration();
if (isset($jsonData['info']['mgTransport']['token'])) {
    $model->info->mgTransport->token = $jsonData['info']['mgTransport']['token'];

}
if (isset($jsonData['info']['mgTransport']['isActive'])) {
    $model->info->mgTransport->isActive = $jsonData['info']['mgTransport']['isActive'];

}
if (isset($jsonData['info']['mgTransport']['webhookUrl'])) {
    $model->info->mgTransport->webhookUrl = $jsonData['info']['mgTransport']['webhookUrl'];

}
if (isset($jsonData['info']['mgTransport']['endpointUrl'])) {
    $model->info->mgTransport->endpointUrl = $jsonData['info']['mgTransport']['endpointUrl'];

}


}
if (isset($jsonData['info']['mgBot'])) {
    
$model->info->mgBot = new RetailCrm\Api\Model\Entity\Integration\Bot\BotConfiguration();
if (isset($jsonData['info']['mgBot']['isActive'])) {
    $model->info->mgBot->isActive = $jsonData['info']['mgBot']['isActive'];

}
if (isset($jsonData['info']['mgBot']['logo'])) {
    $model->info->mgBot->logo = $jsonData['info']['mgBot']['logo'];

}
if (isset($jsonData['info']['mgBot']['token'])) {
    $model->info->mgBot->token = $jsonData['info']['mgBot']['token'];

}
if (isset($jsonData['info']['mgBot']['name'])) {
    $model->info->mgBot->name = $jsonData['info']['mgBot']['name'];

}


}


}



    return $model;
}
