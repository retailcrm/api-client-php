<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Delivery_RequestProperty_RequestShipmentSave(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty\RequestShipmentSave
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty\RequestShipmentSave();
if (isset($jsonData['shipmentId'])) {
    $model->shipmentId = $jsonData['shipmentId'];

}
if (isset($jsonData['manager'])) {
    
$model->manager = new RetailCrm\Api\Model\Callback\Entity\Delivery\Manager();
if (isset($jsonData['manager']['id'])) {
    $model->manager->id = $jsonData['manager']['id'];

}
if (isset($jsonData['manager']['lastName'])) {
    $model->manager->lastName = $jsonData['manager']['lastName'];

}
if (isset($jsonData['manager']['firstName'])) {
    $model->manager->firstName = $jsonData['manager']['firstName'];

}
if (isset($jsonData['manager']['patronymic'])) {
    $model->manager->patronymic = $jsonData['manager']['patronymic'];

}
if (isset($jsonData['manager']['phone'])) {
    $model->manager->phone = $jsonData['manager']['phone'];

}
if (isset($jsonData['manager']['email'])) {
    $model->manager->email = $jsonData['manager']['email'];

}


}
if (isset($jsonData['date'])) {
    $model->date = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['date']);

}
if (isset($jsonData['time'])) {
    
$model->time = new RetailCrm\Api\Model\Entity\Delivery\TimeInterval();
if (isset($jsonData['time']['from'])) {
    $model->time->from = \DateTime::createFromFormat('H:i', $jsonData['time']['from']);

}
if (isset($jsonData['time']['to'])) {
    $model->time->to = \DateTime::createFromFormat('H:i', $jsonData['time']['to']);

}
if (isset($jsonData['time']['custom'])) {
    $model->time->custom = $jsonData['time']['custom'];

}


}
if (isset($jsonData['address'])) {
    
$model->address = new RetailCrm\Api\Model\Callback\Entity\Delivery\DeliveryAddress();
if (isset($jsonData['address']['index'])) {
    $model->address->index = $jsonData['address']['index'];

}
if (isset($jsonData['address']['countryIso'])) {
    $model->address->countryIso = $jsonData['address']['countryIso'];

}
if (isset($jsonData['address']['region'])) {
    $model->address->region = $jsonData['address']['region'];

}
if (isset($jsonData['address']['regionId'])) {
    $model->address->regionId = $jsonData['address']['regionId'];

}
if (isset($jsonData['address']['city'])) {
    $model->address->city = $jsonData['address']['city'];

}
if (isset($jsonData['address']['cityId'])) {
    $model->address->cityId = $jsonData['address']['cityId'];

}
if (isset($jsonData['address']['cityType'])) {
    $model->address->cityType = $jsonData['address']['cityType'];

}
if (isset($jsonData['address']['street'])) {
    $model->address->street = $jsonData['address']['street'];

}
if (isset($jsonData['address']['streetId'])) {
    $model->address->streetId = $jsonData['address']['streetId'];

}
if (isset($jsonData['address']['streetType'])) {
    $model->address->streetType = $jsonData['address']['streetType'];

}
if (isset($jsonData['address']['building'])) {
    $model->address->building = $jsonData['address']['building'];

}
if (isset($jsonData['address']['flat'])) {
    $model->address->flat = $jsonData['address']['flat'];

}
if (isset($jsonData['address']['floor'])) {
    $model->address->floor = $jsonData['address']['floor'];

}
if (isset($jsonData['address']['block'])) {
    $model->address->block = $jsonData['address']['block'];

}
if (isset($jsonData['address']['house'])) {
    $model->address->house = $jsonData['address']['house'];

}
if (isset($jsonData['address']['housing'])) {
    $model->address->housing = $jsonData['address']['housing'];

}
if (isset($jsonData['address']['metro'])) {
    $model->address->metro = $jsonData['address']['metro'];

}
if (isset($jsonData['address']['notes'])) {
    $model->address->notes = $jsonData['address']['notes'];

}
if (isset($jsonData['address']['text'])) {
    $model->address->text = $jsonData['address']['text'];

}
if (isset($jsonData['address']['terminal'])) {
    $model->address->terminal = $jsonData['address']['terminal'];

}
if (isset($jsonData['address']['terminalData'])) {
    
$model->address->terminalData = new RetailCrm\Api\Model\Callback\Entity\Delivery\Terminal();
if (isset($jsonData['address']['terminalData']['code'])) {
    $model->address->terminalData->code = $jsonData['address']['terminalData']['code'];

}
if (isset($jsonData['address']['terminalData']['cost'])) {
    $model->address->terminalData->cost = (float) $jsonData['address']['terminalData']['cost'];

}
if (isset($jsonData['address']['terminalData']['name'])) {
    $model->address->terminalData->name = $jsonData['address']['terminalData']['name'];

}
if (isset($jsonData['address']['terminalData']['description'])) {
    $model->address->terminalData->description = $jsonData['address']['terminalData']['description'];

}
if (isset($jsonData['address']['terminalData']['address'])) {
    $model->address->terminalData->address = $jsonData['address']['terminalData']['address'];

}
if (isset($jsonData['address']['terminalData']['schedule'])) {
    $model->address->terminalData->schedule = $jsonData['address']['terminalData']['schedule'];

}
if (isset($jsonData['address']['terminalData']['phone'])) {
    $model->address->terminalData->phone = $jsonData['address']['terminalData']['phone'];

}
if (isset($jsonData['address']['terminalData']['extraData'])) {
    $model->address->terminalData->extraData = [];
foreach (array_keys($jsonData['address']['terminalData']['extraData']) as $index49) {
    $model->address->terminalData->extraData[$index49] = $jsonData['address']['terminalData']['extraData'][$index49];

}

}
if (isset($jsonData['address']['terminalData']['coordinates'])) {
    
$model->address->terminalData->coordinates = new RetailCrm\Api\Model\Callback\Entity\Delivery\Coordinates();
if (isset($jsonData['address']['terminalData']['coordinates']['latitude'])) {
    $model->address->terminalData->coordinates->latitude = (float) $jsonData['address']['terminalData']['coordinates']['latitude'];

}
if (isset($jsonData['address']['terminalData']['coordinates']['longitude'])) {
    $model->address->terminalData->coordinates->longitude = (float) $jsonData['address']['terminalData']['coordinates']['longitude'];

}


}


}


}
if (isset($jsonData['store'])) {
    $model->store = $jsonData['store'];

}
if (isset($jsonData['orders'])) {
    $model->orders = [];
foreach (array_keys($jsonData['orders']) as $index19) {
    
$model->orders[$index19] = new RetailCrm\Api\Model\Callback\Entity\Delivery\ShipmentOrder();
if (isset($jsonData['orders'][$index19]['deliveryId'])) {
    $model->orders[$index19]->deliveryId = $jsonData['orders'][$index19]['deliveryId'];

}
if (isset($jsonData['orders'][$index19]['packages'])) {
    $model->orders[$index19]->packages = [];
foreach (array_keys($jsonData['orders'][$index19]['packages']) as $index41) {
    
$model->orders[$index19]->packages[$index41] = new RetailCrm\Api\Model\Callback\Entity\Delivery\Package();
if (isset($jsonData['orders'][$index19]['packages'][$index41]['weight'])) {
    $model->orders[$index19]->packages[$index41]->weight = (float) $jsonData['orders'][$index19]['packages'][$index41]['weight'];

}
if (isset($jsonData['orders'][$index19]['packages'][$index41]['packageId'])) {
    $model->orders[$index19]->packages[$index41]->packageId = $jsonData['orders'][$index19]['packages'][$index41]['packageId'];

}
if (isset($jsonData['orders'][$index19]['packages'][$index41]['width'])) {
    $model->orders[$index19]->packages[$index41]->width = $jsonData['orders'][$index19]['packages'][$index41]['width'];

}
if (isset($jsonData['orders'][$index19]['packages'][$index41]['length'])) {
    $model->orders[$index19]->packages[$index41]->length = $jsonData['orders'][$index19]['packages'][$index41]['length'];

}
if (isset($jsonData['orders'][$index19]['packages'][$index41]['height'])) {
    $model->orders[$index19]->packages[$index41]->height = $jsonData['orders'][$index19]['packages'][$index41]['height'];

}
if (isset($jsonData['orders'][$index19]['packages'][$index41]['items'])) {
    $model->orders[$index19]->packages[$index41]->items = [];
foreach (array_keys($jsonData['orders'][$index19]['packages'][$index41]['items']) as $index60) {
    
$model->orders[$index19]->packages[$index41]->items[$index60] = new RetailCrm\Api\Model\Callback\Entity\Delivery\PackageItem();
if (isset($jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['offerId'])) {
    $model->orders[$index19]->packages[$index41]->items[$index60]->offerId = $jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['offerId'];

}
if (isset($jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['externalId'])) {
    $model->orders[$index19]->packages[$index41]->items[$index60]->externalId = $jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['externalId'];

}
if (isset($jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['xmlId'])) {
    $model->orders[$index19]->packages[$index41]->items[$index60]->xmlId = $jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['xmlId'];

}
if (isset($jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['name'])) {
    $model->orders[$index19]->packages[$index41]->items[$index60]->name = $jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['name'];

}
if (isset($jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['declaredValue'])) {
    $model->orders[$index19]->packages[$index41]->items[$index60]->declaredValue = (float) $jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['declaredValue'];

}
if (isset($jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['cod'])) {
    $model->orders[$index19]->packages[$index41]->items[$index60]->cod = (float) $jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['cod'];

}
if (isset($jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['vatRate'])) {
    $model->orders[$index19]->packages[$index41]->items[$index60]->vatRate = $jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['vatRate'];

}
if (isset($jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['quantity'])) {
    $model->orders[$index19]->packages[$index41]->items[$index60]->quantity = (float) $jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['quantity'];

}
if (isset($jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['unit'])) {
    
$model->orders[$index19]->packages[$index41]->items[$index60]->unit = new RetailCrm\Api\Model\Callback\Entity\Delivery\Unit();
if (isset($jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['unit']['code'])) {
    $model->orders[$index19]->packages[$index41]->items[$index60]->unit->code = $jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['unit']['code'];

}
if (isset($jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['unit']['name'])) {
    $model->orders[$index19]->packages[$index41]->items[$index60]->unit->name = $jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['unit']['name'];

}
if (isset($jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['unit']['sym'])) {
    $model->orders[$index19]->packages[$index41]->items[$index60]->unit->sym = $jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['unit']['sym'];

}


}
if (isset($jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['cost'])) {
    $model->orders[$index19]->packages[$index41]->items[$index60]->cost = (float) $jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['cost'];

}
if (isset($jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['markingCodes'])) {
    $model->orders[$index19]->packages[$index41]->items[$index60]->markingCodes = $jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['markingCodes'];

}
if (isset($jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['properties'])) {
    $model->orders[$index19]->packages[$index41]->items[$index60]->properties = [];
foreach (array_keys($jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['properties']) as $index84) {
    $model->orders[$index19]->packages[$index41]->items[$index60]->properties[$index84] = $jsonData['orders'][$index19]['packages'][$index41]['items'][$index60]['properties'][$index84];

}

}


}

}


}

}


}

}
if (isset($jsonData['comment'])) {
    $model->comment = $jsonData['comment'];

}
if (isset($jsonData['extraData'])) {
    $model->extraData = [];
foreach (array_keys($jsonData['extraData']) as $index22) {
    $model->extraData[$index22] = $jsonData['extraData'][$index22];

}

}



    return $model;
}
