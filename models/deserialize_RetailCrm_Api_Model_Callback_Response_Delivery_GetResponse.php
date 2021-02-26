<?php

function deserialize_RetailCrm_Api_Model_Callback_Response_Delivery_GetResponse(array $jsonData): RetailCrm\Api\Model\Callback\Response\Delivery\GetResponse
{
    
$model = new RetailCrm\Api\Model\Callback\Response\Delivery\GetResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['result'])) {
    
$model->result = new RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseLoadDeliveryData();
if (isset($jsonData['result']['trackNumber'])) {
    $model->result->trackNumber = $jsonData['result']['trackNumber'];

}
if (isset($jsonData['result']['cost'])) {
    $model->result->cost = (float) $jsonData['result']['cost'];

}
if (isset($jsonData['result']['shipmentDate'])) {
    $model->result->shipmentDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['result']['shipmentDate']);

}
if (isset($jsonData['result']['deliveryDate'])) {
    $model->result->deliveryDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['result']['deliveryDate']);

}
if (isset($jsonData['result']['deliveryTime'])) {
    
$model->result->deliveryTime = new RetailCrm\Api\Model\Entity\Delivery\TimeInterval();
if (isset($jsonData['result']['deliveryTime']['from'])) {
    $model->result->deliveryTime->from = \DateTime::createFromFormat('H:i', $jsonData['result']['deliveryTime']['from']);

}
if (isset($jsonData['result']['deliveryTime']['to'])) {
    $model->result->deliveryTime->to = \DateTime::createFromFormat('H:i', $jsonData['result']['deliveryTime']['to']);

}
if (isset($jsonData['result']['deliveryTime']['custom'])) {
    $model->result->deliveryTime->custom = $jsonData['result']['deliveryTime']['custom'];

}


}
if (isset($jsonData['result']['tariff'])) {
    $model->result->tariff = $jsonData['result']['tariff'];

}
if (isset($jsonData['result']['tariffName'])) {
    $model->result->tariffName = $jsonData['result']['tariffName'];

}
if (isset($jsonData['result']['payerType'])) {
    $model->result->payerType = $jsonData['result']['payerType'];

}
if (isset($jsonData['result']['status'])) {
    
$model->result->status = new RetailCrm\Api\Model\Entity\Delivery\StatusInfo();
if (isset($jsonData['result']['status']['code'])) {
    $model->result->status->code = $jsonData['result']['status']['code'];

}
if (isset($jsonData['result']['status']['updatedAt'])) {
    $model->result->status->updatedAt = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $jsonData['result']['status']['updatedAt']);

}
if (isset($jsonData['result']['status']['comment'])) {
    $model->result->status->comment = $jsonData['result']['status']['comment'];

}


}
if (isset($jsonData['result']['extraData'])) {
    $model->result->extraData = [];
foreach (array_keys($jsonData['result']['extraData']) as $index32) {
    $model->result->extraData[$index32] = $jsonData['result']['extraData'][$index32];

}

}
if (isset($jsonData['result']['shipmentAddress'])) {
    
$model->result->shipmentAddress = new RetailCrm\Api\Model\Callback\Entity\Delivery\DeliveryAddress();
if (isset($jsonData['result']['shipmentAddress']['index'])) {
    $model->result->shipmentAddress->index = $jsonData['result']['shipmentAddress']['index'];

}
if (isset($jsonData['result']['shipmentAddress']['countryIso'])) {
    $model->result->shipmentAddress->countryIso = $jsonData['result']['shipmentAddress']['countryIso'];

}
if (isset($jsonData['result']['shipmentAddress']['region'])) {
    $model->result->shipmentAddress->region = $jsonData['result']['shipmentAddress']['region'];

}
if (isset($jsonData['result']['shipmentAddress']['regionId'])) {
    $model->result->shipmentAddress->regionId = $jsonData['result']['shipmentAddress']['regionId'];

}
if (isset($jsonData['result']['shipmentAddress']['city'])) {
    $model->result->shipmentAddress->city = $jsonData['result']['shipmentAddress']['city'];

}
if (isset($jsonData['result']['shipmentAddress']['cityId'])) {
    $model->result->shipmentAddress->cityId = $jsonData['result']['shipmentAddress']['cityId'];

}
if (isset($jsonData['result']['shipmentAddress']['cityType'])) {
    $model->result->shipmentAddress->cityType = $jsonData['result']['shipmentAddress']['cityType'];

}
if (isset($jsonData['result']['shipmentAddress']['street'])) {
    $model->result->shipmentAddress->street = $jsonData['result']['shipmentAddress']['street'];

}
if (isset($jsonData['result']['shipmentAddress']['streetId'])) {
    $model->result->shipmentAddress->streetId = $jsonData['result']['shipmentAddress']['streetId'];

}
if (isset($jsonData['result']['shipmentAddress']['streetType'])) {
    $model->result->shipmentAddress->streetType = $jsonData['result']['shipmentAddress']['streetType'];

}
if (isset($jsonData['result']['shipmentAddress']['building'])) {
    $model->result->shipmentAddress->building = $jsonData['result']['shipmentAddress']['building'];

}
if (isset($jsonData['result']['shipmentAddress']['flat'])) {
    $model->result->shipmentAddress->flat = $jsonData['result']['shipmentAddress']['flat'];

}
if (isset($jsonData['result']['shipmentAddress']['floor'])) {
    $model->result->shipmentAddress->floor = $jsonData['result']['shipmentAddress']['floor'];

}
if (isset($jsonData['result']['shipmentAddress']['block'])) {
    $model->result->shipmentAddress->block = $jsonData['result']['shipmentAddress']['block'];

}
if (isset($jsonData['result']['shipmentAddress']['house'])) {
    $model->result->shipmentAddress->house = $jsonData['result']['shipmentAddress']['house'];

}
if (isset($jsonData['result']['shipmentAddress']['housing'])) {
    $model->result->shipmentAddress->housing = $jsonData['result']['shipmentAddress']['housing'];

}
if (isset($jsonData['result']['shipmentAddress']['metro'])) {
    $model->result->shipmentAddress->metro = $jsonData['result']['shipmentAddress']['metro'];

}
if (isset($jsonData['result']['shipmentAddress']['notes'])) {
    $model->result->shipmentAddress->notes = $jsonData['result']['shipmentAddress']['notes'];

}
if (isset($jsonData['result']['shipmentAddress']['text'])) {
    $model->result->shipmentAddress->text = $jsonData['result']['shipmentAddress']['text'];

}
if (isset($jsonData['result']['shipmentAddress']['terminal'])) {
    $model->result->shipmentAddress->terminal = $jsonData['result']['shipmentAddress']['terminal'];

}
if (isset($jsonData['result']['shipmentAddress']['terminalData'])) {
    
$model->result->shipmentAddress->terminalData = new RetailCrm\Api\Model\Callback\Entity\Delivery\Terminal();
if (isset($jsonData['result']['shipmentAddress']['terminalData']['code'])) {
    $model->result->shipmentAddress->terminalData->code = $jsonData['result']['shipmentAddress']['terminalData']['code'];

}
if (isset($jsonData['result']['shipmentAddress']['terminalData']['cost'])) {
    $model->result->shipmentAddress->terminalData->cost = (float) $jsonData['result']['shipmentAddress']['terminalData']['cost'];

}
if (isset($jsonData['result']['shipmentAddress']['terminalData']['name'])) {
    $model->result->shipmentAddress->terminalData->name = $jsonData['result']['shipmentAddress']['terminalData']['name'];

}
if (isset($jsonData['result']['shipmentAddress']['terminalData']['description'])) {
    $model->result->shipmentAddress->terminalData->description = $jsonData['result']['shipmentAddress']['terminalData']['description'];

}
if (isset($jsonData['result']['shipmentAddress']['terminalData']['address'])) {
    $model->result->shipmentAddress->terminalData->address = $jsonData['result']['shipmentAddress']['terminalData']['address'];

}
if (isset($jsonData['result']['shipmentAddress']['terminalData']['schedule'])) {
    $model->result->shipmentAddress->terminalData->schedule = $jsonData['result']['shipmentAddress']['terminalData']['schedule'];

}
if (isset($jsonData['result']['shipmentAddress']['terminalData']['phone'])) {
    $model->result->shipmentAddress->terminalData->phone = $jsonData['result']['shipmentAddress']['terminalData']['phone'];

}
if (isset($jsonData['result']['shipmentAddress']['terminalData']['extraData'])) {
    $model->result->shipmentAddress->terminalData->extraData = [];
foreach (array_keys($jsonData['result']['shipmentAddress']['terminalData']['extraData']) as $index67) {
    $model->result->shipmentAddress->terminalData->extraData[$index67] = $jsonData['result']['shipmentAddress']['terminalData']['extraData'][$index67];

}

}
if (isset($jsonData['result']['shipmentAddress']['terminalData']['coordinates'])) {
    
$model->result->shipmentAddress->terminalData->coordinates = new RetailCrm\Api\Model\Callback\Entity\Delivery\Coordinates();
if (isset($jsonData['result']['shipmentAddress']['terminalData']['coordinates']['latitude'])) {
    $model->result->shipmentAddress->terminalData->coordinates->latitude = (float) $jsonData['result']['shipmentAddress']['terminalData']['coordinates']['latitude'];

}
if (isset($jsonData['result']['shipmentAddress']['terminalData']['coordinates']['longitude'])) {
    $model->result->shipmentAddress->terminalData->coordinates->longitude = (float) $jsonData['result']['shipmentAddress']['terminalData']['coordinates']['longitude'];

}


}


}


}
if (isset($jsonData['result']['deliveryAddress'])) {
    
$model->result->deliveryAddress = new RetailCrm\Api\Model\Callback\Entity\Delivery\DeliveryAddress();
if (isset($jsonData['result']['deliveryAddress']['index'])) {
    $model->result->deliveryAddress->index = $jsonData['result']['deliveryAddress']['index'];

}
if (isset($jsonData['result']['deliveryAddress']['countryIso'])) {
    $model->result->deliveryAddress->countryIso = $jsonData['result']['deliveryAddress']['countryIso'];

}
if (isset($jsonData['result']['deliveryAddress']['region'])) {
    $model->result->deliveryAddress->region = $jsonData['result']['deliveryAddress']['region'];

}
if (isset($jsonData['result']['deliveryAddress']['regionId'])) {
    $model->result->deliveryAddress->regionId = $jsonData['result']['deliveryAddress']['regionId'];

}
if (isset($jsonData['result']['deliveryAddress']['city'])) {
    $model->result->deliveryAddress->city = $jsonData['result']['deliveryAddress']['city'];

}
if (isset($jsonData['result']['deliveryAddress']['cityId'])) {
    $model->result->deliveryAddress->cityId = $jsonData['result']['deliveryAddress']['cityId'];

}
if (isset($jsonData['result']['deliveryAddress']['cityType'])) {
    $model->result->deliveryAddress->cityType = $jsonData['result']['deliveryAddress']['cityType'];

}
if (isset($jsonData['result']['deliveryAddress']['street'])) {
    $model->result->deliveryAddress->street = $jsonData['result']['deliveryAddress']['street'];

}
if (isset($jsonData['result']['deliveryAddress']['streetId'])) {
    $model->result->deliveryAddress->streetId = $jsonData['result']['deliveryAddress']['streetId'];

}
if (isset($jsonData['result']['deliveryAddress']['streetType'])) {
    $model->result->deliveryAddress->streetType = $jsonData['result']['deliveryAddress']['streetType'];

}
if (isset($jsonData['result']['deliveryAddress']['building'])) {
    $model->result->deliveryAddress->building = $jsonData['result']['deliveryAddress']['building'];

}
if (isset($jsonData['result']['deliveryAddress']['flat'])) {
    $model->result->deliveryAddress->flat = $jsonData['result']['deliveryAddress']['flat'];

}
if (isset($jsonData['result']['deliveryAddress']['floor'])) {
    $model->result->deliveryAddress->floor = $jsonData['result']['deliveryAddress']['floor'];

}
if (isset($jsonData['result']['deliveryAddress']['block'])) {
    $model->result->deliveryAddress->block = $jsonData['result']['deliveryAddress']['block'];

}
if (isset($jsonData['result']['deliveryAddress']['house'])) {
    $model->result->deliveryAddress->house = $jsonData['result']['deliveryAddress']['house'];

}
if (isset($jsonData['result']['deliveryAddress']['housing'])) {
    $model->result->deliveryAddress->housing = $jsonData['result']['deliveryAddress']['housing'];

}
if (isset($jsonData['result']['deliveryAddress']['metro'])) {
    $model->result->deliveryAddress->metro = $jsonData['result']['deliveryAddress']['metro'];

}
if (isset($jsonData['result']['deliveryAddress']['notes'])) {
    $model->result->deliveryAddress->notes = $jsonData['result']['deliveryAddress']['notes'];

}
if (isset($jsonData['result']['deliveryAddress']['text'])) {
    $model->result->deliveryAddress->text = $jsonData['result']['deliveryAddress']['text'];

}
if (isset($jsonData['result']['deliveryAddress']['terminal'])) {
    $model->result->deliveryAddress->terminal = $jsonData['result']['deliveryAddress']['terminal'];

}
if (isset($jsonData['result']['deliveryAddress']['terminalData'])) {
    
$model->result->deliveryAddress->terminalData = new RetailCrm\Api\Model\Callback\Entity\Delivery\Terminal();
if (isset($jsonData['result']['deliveryAddress']['terminalData']['code'])) {
    $model->result->deliveryAddress->terminalData->code = $jsonData['result']['deliveryAddress']['terminalData']['code'];

}
if (isset($jsonData['result']['deliveryAddress']['terminalData']['cost'])) {
    $model->result->deliveryAddress->terminalData->cost = (float) $jsonData['result']['deliveryAddress']['terminalData']['cost'];

}
if (isset($jsonData['result']['deliveryAddress']['terminalData']['name'])) {
    $model->result->deliveryAddress->terminalData->name = $jsonData['result']['deliveryAddress']['terminalData']['name'];

}
if (isset($jsonData['result']['deliveryAddress']['terminalData']['description'])) {
    $model->result->deliveryAddress->terminalData->description = $jsonData['result']['deliveryAddress']['terminalData']['description'];

}
if (isset($jsonData['result']['deliveryAddress']['terminalData']['address'])) {
    $model->result->deliveryAddress->terminalData->address = $jsonData['result']['deliveryAddress']['terminalData']['address'];

}
if (isset($jsonData['result']['deliveryAddress']['terminalData']['schedule'])) {
    $model->result->deliveryAddress->terminalData->schedule = $jsonData['result']['deliveryAddress']['terminalData']['schedule'];

}
if (isset($jsonData['result']['deliveryAddress']['terminalData']['phone'])) {
    $model->result->deliveryAddress->terminalData->phone = $jsonData['result']['deliveryAddress']['terminalData']['phone'];

}
if (isset($jsonData['result']['deliveryAddress']['terminalData']['extraData'])) {
    $model->result->deliveryAddress->terminalData->extraData = [];
foreach (array_keys($jsonData['result']['deliveryAddress']['terminalData']['extraData']) as $index67) {
    $model->result->deliveryAddress->terminalData->extraData[$index67] = $jsonData['result']['deliveryAddress']['terminalData']['extraData'][$index67];

}

}
if (isset($jsonData['result']['deliveryAddress']['terminalData']['coordinates'])) {
    
$model->result->deliveryAddress->terminalData->coordinates = new RetailCrm\Api\Model\Callback\Entity\Delivery\Coordinates();
if (isset($jsonData['result']['deliveryAddress']['terminalData']['coordinates']['latitude'])) {
    $model->result->deliveryAddress->terminalData->coordinates->latitude = (float) $jsonData['result']['deliveryAddress']['terminalData']['coordinates']['latitude'];

}
if (isset($jsonData['result']['deliveryAddress']['terminalData']['coordinates']['longitude'])) {
    $model->result->deliveryAddress->terminalData->coordinates->longitude = (float) $jsonData['result']['deliveryAddress']['terminalData']['coordinates']['longitude'];

}


}


}


}


}



    return $model;
}
