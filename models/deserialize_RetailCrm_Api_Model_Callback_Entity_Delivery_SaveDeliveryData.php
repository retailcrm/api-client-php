<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Delivery_SaveDeliveryData(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Delivery\SaveDeliveryData
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Delivery\SaveDeliveryData();
if (isset($jsonData['shipmentAddress'])) {
    
$model->shipmentAddress = new RetailCrm\Api\Model\Callback\Entity\Delivery\DeliveryAddress();
if (isset($jsonData['shipmentAddress']['index'])) {
    $model->shipmentAddress->index = $jsonData['shipmentAddress']['index'];

}
if (isset($jsonData['shipmentAddress']['countryIso'])) {
    $model->shipmentAddress->countryIso = $jsonData['shipmentAddress']['countryIso'];

}
if (isset($jsonData['shipmentAddress']['region'])) {
    $model->shipmentAddress->region = $jsonData['shipmentAddress']['region'];

}
if (isset($jsonData['shipmentAddress']['regionId'])) {
    $model->shipmentAddress->regionId = $jsonData['shipmentAddress']['regionId'];

}
if (isset($jsonData['shipmentAddress']['city'])) {
    $model->shipmentAddress->city = $jsonData['shipmentAddress']['city'];

}
if (isset($jsonData['shipmentAddress']['cityId'])) {
    $model->shipmentAddress->cityId = $jsonData['shipmentAddress']['cityId'];

}
if (isset($jsonData['shipmentAddress']['cityType'])) {
    $model->shipmentAddress->cityType = $jsonData['shipmentAddress']['cityType'];

}
if (isset($jsonData['shipmentAddress']['street'])) {
    $model->shipmentAddress->street = $jsonData['shipmentAddress']['street'];

}
if (isset($jsonData['shipmentAddress']['streetId'])) {
    $model->shipmentAddress->streetId = $jsonData['shipmentAddress']['streetId'];

}
if (isset($jsonData['shipmentAddress']['streetType'])) {
    $model->shipmentAddress->streetType = $jsonData['shipmentAddress']['streetType'];

}
if (isset($jsonData['shipmentAddress']['building'])) {
    $model->shipmentAddress->building = $jsonData['shipmentAddress']['building'];

}
if (isset($jsonData['shipmentAddress']['flat'])) {
    $model->shipmentAddress->flat = $jsonData['shipmentAddress']['flat'];

}
if (isset($jsonData['shipmentAddress']['floor'])) {
    $model->shipmentAddress->floor = $jsonData['shipmentAddress']['floor'];

}
if (isset($jsonData['shipmentAddress']['block'])) {
    $model->shipmentAddress->block = $jsonData['shipmentAddress']['block'];

}
if (isset($jsonData['shipmentAddress']['house'])) {
    $model->shipmentAddress->house = $jsonData['shipmentAddress']['house'];

}
if (isset($jsonData['shipmentAddress']['housing'])) {
    $model->shipmentAddress->housing = $jsonData['shipmentAddress']['housing'];

}
if (isset($jsonData['shipmentAddress']['metro'])) {
    $model->shipmentAddress->metro = $jsonData['shipmentAddress']['metro'];

}
if (isset($jsonData['shipmentAddress']['notes'])) {
    $model->shipmentAddress->notes = $jsonData['shipmentAddress']['notes'];

}
if (isset($jsonData['shipmentAddress']['text'])) {
    $model->shipmentAddress->text = $jsonData['shipmentAddress']['text'];

}
if (isset($jsonData['shipmentAddress']['terminal'])) {
    $model->shipmentAddress->terminal = $jsonData['shipmentAddress']['terminal'];

}
if (isset($jsonData['shipmentAddress']['terminalData'])) {
    
$model->shipmentAddress->terminalData = new RetailCrm\Api\Model\Callback\Entity\Delivery\Terminal();
if (isset($jsonData['shipmentAddress']['terminalData']['code'])) {
    $model->shipmentAddress->terminalData->code = $jsonData['shipmentAddress']['terminalData']['code'];

}
if (isset($jsonData['shipmentAddress']['terminalData']['cost'])) {
    $model->shipmentAddress->terminalData->cost = (float) $jsonData['shipmentAddress']['terminalData']['cost'];

}
if (isset($jsonData['shipmentAddress']['terminalData']['name'])) {
    $model->shipmentAddress->terminalData->name = $jsonData['shipmentAddress']['terminalData']['name'];

}
if (isset($jsonData['shipmentAddress']['terminalData']['description'])) {
    $model->shipmentAddress->terminalData->description = $jsonData['shipmentAddress']['terminalData']['description'];

}
if (isset($jsonData['shipmentAddress']['terminalData']['address'])) {
    $model->shipmentAddress->terminalData->address = $jsonData['shipmentAddress']['terminalData']['address'];

}
if (isset($jsonData['shipmentAddress']['terminalData']['schedule'])) {
    $model->shipmentAddress->terminalData->schedule = $jsonData['shipmentAddress']['terminalData']['schedule'];

}
if (isset($jsonData['shipmentAddress']['terminalData']['phone'])) {
    $model->shipmentAddress->terminalData->phone = $jsonData['shipmentAddress']['terminalData']['phone'];

}
if (isset($jsonData['shipmentAddress']['terminalData']['extraData'])) {
    $model->shipmentAddress->terminalData->extraData = [];
foreach (array_keys($jsonData['shipmentAddress']['terminalData']['extraData']) as $index57) {
    $model->shipmentAddress->terminalData->extraData[$index57] = $jsonData['shipmentAddress']['terminalData']['extraData'][$index57];

}

}
if (isset($jsonData['shipmentAddress']['terminalData']['coordinates'])) {
    
$model->shipmentAddress->terminalData->coordinates = new RetailCrm\Api\Model\Callback\Entity\Delivery\Coordinates();
if (isset($jsonData['shipmentAddress']['terminalData']['coordinates']['latitude'])) {
    $model->shipmentAddress->terminalData->coordinates->latitude = (float) $jsonData['shipmentAddress']['terminalData']['coordinates']['latitude'];

}
if (isset($jsonData['shipmentAddress']['terminalData']['coordinates']['longitude'])) {
    $model->shipmentAddress->terminalData->coordinates->longitude = (float) $jsonData['shipmentAddress']['terminalData']['coordinates']['longitude'];

}


}


}


}
if (isset($jsonData['deliveryAddress'])) {
    
$model->deliveryAddress = new RetailCrm\Api\Model\Callback\Entity\Delivery\DeliveryAddress();
if (isset($jsonData['deliveryAddress']['index'])) {
    $model->deliveryAddress->index = $jsonData['deliveryAddress']['index'];

}
if (isset($jsonData['deliveryAddress']['countryIso'])) {
    $model->deliveryAddress->countryIso = $jsonData['deliveryAddress']['countryIso'];

}
if (isset($jsonData['deliveryAddress']['region'])) {
    $model->deliveryAddress->region = $jsonData['deliveryAddress']['region'];

}
if (isset($jsonData['deliveryAddress']['regionId'])) {
    $model->deliveryAddress->regionId = $jsonData['deliveryAddress']['regionId'];

}
if (isset($jsonData['deliveryAddress']['city'])) {
    $model->deliveryAddress->city = $jsonData['deliveryAddress']['city'];

}
if (isset($jsonData['deliveryAddress']['cityId'])) {
    $model->deliveryAddress->cityId = $jsonData['deliveryAddress']['cityId'];

}
if (isset($jsonData['deliveryAddress']['cityType'])) {
    $model->deliveryAddress->cityType = $jsonData['deliveryAddress']['cityType'];

}
if (isset($jsonData['deliveryAddress']['street'])) {
    $model->deliveryAddress->street = $jsonData['deliveryAddress']['street'];

}
if (isset($jsonData['deliveryAddress']['streetId'])) {
    $model->deliveryAddress->streetId = $jsonData['deliveryAddress']['streetId'];

}
if (isset($jsonData['deliveryAddress']['streetType'])) {
    $model->deliveryAddress->streetType = $jsonData['deliveryAddress']['streetType'];

}
if (isset($jsonData['deliveryAddress']['building'])) {
    $model->deliveryAddress->building = $jsonData['deliveryAddress']['building'];

}
if (isset($jsonData['deliveryAddress']['flat'])) {
    $model->deliveryAddress->flat = $jsonData['deliveryAddress']['flat'];

}
if (isset($jsonData['deliveryAddress']['floor'])) {
    $model->deliveryAddress->floor = $jsonData['deliveryAddress']['floor'];

}
if (isset($jsonData['deliveryAddress']['block'])) {
    $model->deliveryAddress->block = $jsonData['deliveryAddress']['block'];

}
if (isset($jsonData['deliveryAddress']['house'])) {
    $model->deliveryAddress->house = $jsonData['deliveryAddress']['house'];

}
if (isset($jsonData['deliveryAddress']['housing'])) {
    $model->deliveryAddress->housing = $jsonData['deliveryAddress']['housing'];

}
if (isset($jsonData['deliveryAddress']['metro'])) {
    $model->deliveryAddress->metro = $jsonData['deliveryAddress']['metro'];

}
if (isset($jsonData['deliveryAddress']['notes'])) {
    $model->deliveryAddress->notes = $jsonData['deliveryAddress']['notes'];

}
if (isset($jsonData['deliveryAddress']['text'])) {
    $model->deliveryAddress->text = $jsonData['deliveryAddress']['text'];

}
if (isset($jsonData['deliveryAddress']['terminal'])) {
    $model->deliveryAddress->terminal = $jsonData['deliveryAddress']['terminal'];

}
if (isset($jsonData['deliveryAddress']['terminalData'])) {
    
$model->deliveryAddress->terminalData = new RetailCrm\Api\Model\Callback\Entity\Delivery\Terminal();
if (isset($jsonData['deliveryAddress']['terminalData']['code'])) {
    $model->deliveryAddress->terminalData->code = $jsonData['deliveryAddress']['terminalData']['code'];

}
if (isset($jsonData['deliveryAddress']['terminalData']['cost'])) {
    $model->deliveryAddress->terminalData->cost = (float) $jsonData['deliveryAddress']['terminalData']['cost'];

}
if (isset($jsonData['deliveryAddress']['terminalData']['name'])) {
    $model->deliveryAddress->terminalData->name = $jsonData['deliveryAddress']['terminalData']['name'];

}
if (isset($jsonData['deliveryAddress']['terminalData']['description'])) {
    $model->deliveryAddress->terminalData->description = $jsonData['deliveryAddress']['terminalData']['description'];

}
if (isset($jsonData['deliveryAddress']['terminalData']['address'])) {
    $model->deliveryAddress->terminalData->address = $jsonData['deliveryAddress']['terminalData']['address'];

}
if (isset($jsonData['deliveryAddress']['terminalData']['schedule'])) {
    $model->deliveryAddress->terminalData->schedule = $jsonData['deliveryAddress']['terminalData']['schedule'];

}
if (isset($jsonData['deliveryAddress']['terminalData']['phone'])) {
    $model->deliveryAddress->terminalData->phone = $jsonData['deliveryAddress']['terminalData']['phone'];

}
if (isset($jsonData['deliveryAddress']['terminalData']['extraData'])) {
    $model->deliveryAddress->terminalData->extraData = [];
foreach (array_keys($jsonData['deliveryAddress']['terminalData']['extraData']) as $index57) {
    $model->deliveryAddress->terminalData->extraData[$index57] = $jsonData['deliveryAddress']['terminalData']['extraData'][$index57];

}

}
if (isset($jsonData['deliveryAddress']['terminalData']['coordinates'])) {
    
$model->deliveryAddress->terminalData->coordinates = new RetailCrm\Api\Model\Callback\Entity\Delivery\Coordinates();
if (isset($jsonData['deliveryAddress']['terminalData']['coordinates']['latitude'])) {
    $model->deliveryAddress->terminalData->coordinates->latitude = (float) $jsonData['deliveryAddress']['terminalData']['coordinates']['latitude'];

}
if (isset($jsonData['deliveryAddress']['terminalData']['coordinates']['longitude'])) {
    $model->deliveryAddress->terminalData->coordinates->longitude = (float) $jsonData['deliveryAddress']['terminalData']['coordinates']['longitude'];

}


}


}


}
if (isset($jsonData['codPaymentType'])) {
    
$model->codPaymentType = new RetailCrm\Api\Model\Callback\Entity\Delivery\PaymentType();
if (isset($jsonData['codPaymentType']['code'])) {
    $model->codPaymentType->code = $jsonData['codPaymentType']['code'];

}
if (isset($jsonData['codPaymentType']['name'])) {
    $model->codPaymentType->name = $jsonData['codPaymentType']['name'];

}


}
if (isset($jsonData['withCod'])) {
    $model->withCod = $jsonData['withCod'];

}
if (isset($jsonData['cod'])) {
    $model->cod = (float) $jsonData['cod'];

}
if (isset($jsonData['cost'])) {
    $model->cost = (float) $jsonData['cost'];

}
if (isset($jsonData['vatRate'])) {
    $model->vatRate = $jsonData['vatRate'];

}
if (isset($jsonData['tariff'])) {
    $model->tariff = $jsonData['tariff'];

}
if (isset($jsonData['payerType'])) {
    $model->payerType = $jsonData['payerType'];

}
if (isset($jsonData['shipmentDate'])) {
    $model->shipmentDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['shipmentDate']);

}
if (isset($jsonData['deliveryDate'])) {
    $model->deliveryDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['deliveryDate']);

}
if (isset($jsonData['deliveryTime'])) {
    
$model->deliveryTime = new RetailCrm\Api\Model\Entity\Delivery\TimeInterval();
if (isset($jsonData['deliveryTime']['from'])) {
    $model->deliveryTime->from = \DateTime::createFromFormat('H:i', $jsonData['deliveryTime']['from']);

}
if (isset($jsonData['deliveryTime']['to'])) {
    $model->deliveryTime->to = \DateTime::createFromFormat('H:i', $jsonData['deliveryTime']['to']);

}
if (isset($jsonData['deliveryTime']['custom'])) {
    $model->deliveryTime->custom = $jsonData['deliveryTime']['custom'];

}


}
if (isset($jsonData['extraData'])) {
    $model->extraData = [];
foreach (array_keys($jsonData['extraData']) as $index22) {
    $model->extraData[$index22] = $jsonData['extraData'][$index22];

}

}



    return $model;
}
