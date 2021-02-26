<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Delivery_DeliveryAddress(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Delivery\DeliveryAddress
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Delivery\DeliveryAddress();
if (isset($jsonData['index'])) {
    $model->index = $jsonData['index'];

}
if (isset($jsonData['countryIso'])) {
    $model->countryIso = $jsonData['countryIso'];

}
if (isset($jsonData['region'])) {
    $model->region = $jsonData['region'];

}
if (isset($jsonData['regionId'])) {
    $model->regionId = $jsonData['regionId'];

}
if (isset($jsonData['city'])) {
    $model->city = $jsonData['city'];

}
if (isset($jsonData['cityId'])) {
    $model->cityId = $jsonData['cityId'];

}
if (isset($jsonData['cityType'])) {
    $model->cityType = $jsonData['cityType'];

}
if (isset($jsonData['street'])) {
    $model->street = $jsonData['street'];

}
if (isset($jsonData['streetId'])) {
    $model->streetId = $jsonData['streetId'];

}
if (isset($jsonData['streetType'])) {
    $model->streetType = $jsonData['streetType'];

}
if (isset($jsonData['building'])) {
    $model->building = $jsonData['building'];

}
if (isset($jsonData['flat'])) {
    $model->flat = $jsonData['flat'];

}
if (isset($jsonData['floor'])) {
    $model->floor = $jsonData['floor'];

}
if (isset($jsonData['block'])) {
    $model->block = $jsonData['block'];

}
if (isset($jsonData['house'])) {
    $model->house = $jsonData['house'];

}
if (isset($jsonData['housing'])) {
    $model->housing = $jsonData['housing'];

}
if (isset($jsonData['metro'])) {
    $model->metro = $jsonData['metro'];

}
if (isset($jsonData['notes'])) {
    $model->notes = $jsonData['notes'];

}
if (isset($jsonData['text'])) {
    $model->text = $jsonData['text'];

}
if (isset($jsonData['terminal'])) {
    $model->terminal = $jsonData['terminal'];

}
if (isset($jsonData['terminalData'])) {
    
$model->terminalData = new RetailCrm\Api\Model\Callback\Entity\Delivery\Terminal();
if (isset($jsonData['terminalData']['code'])) {
    $model->terminalData->code = $jsonData['terminalData']['code'];

}
if (isset($jsonData['terminalData']['cost'])) {
    $model->terminalData->cost = (float) $jsonData['terminalData']['cost'];

}
if (isset($jsonData['terminalData']['name'])) {
    $model->terminalData->name = $jsonData['terminalData']['name'];

}
if (isset($jsonData['terminalData']['description'])) {
    $model->terminalData->description = $jsonData['terminalData']['description'];

}
if (isset($jsonData['terminalData']['address'])) {
    $model->terminalData->address = $jsonData['terminalData']['address'];

}
if (isset($jsonData['terminalData']['schedule'])) {
    $model->terminalData->schedule = $jsonData['terminalData']['schedule'];

}
if (isset($jsonData['terminalData']['phone'])) {
    $model->terminalData->phone = $jsonData['terminalData']['phone'];

}
if (isset($jsonData['terminalData']['extraData'])) {
    $model->terminalData->extraData = [];
foreach (array_keys($jsonData['terminalData']['extraData']) as $index38) {
    $model->terminalData->extraData[$index38] = $jsonData['terminalData']['extraData'][$index38];

}

}
if (isset($jsonData['terminalData']['coordinates'])) {
    
$model->terminalData->coordinates = new RetailCrm\Api\Model\Callback\Entity\Delivery\Coordinates();
if (isset($jsonData['terminalData']['coordinates']['latitude'])) {
    $model->terminalData->coordinates->latitude = (float) $jsonData['terminalData']['coordinates']['latitude'];

}
if (isset($jsonData['terminalData']['coordinates']['longitude'])) {
    $model->terminalData->coordinates->longitude = (float) $jsonData['terminalData']['coordinates']['longitude'];

}


}


}



    return $model;
}
