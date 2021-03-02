<?php

function deserialize_RetailCrm_Api_Model_Entity_Delivery_SerializedOrderDelivery(array $jsonData): RetailCrm\Api\Model\Entity\Delivery\SerializedOrderDelivery
{
    
$model = new RetailCrm\Api\Model\Entity\Delivery\SerializedOrderDelivery();
if (isset($jsonData['date'])) {
    $model->date = \DateTime::createFromFormat('Y-m-d', $jsonData['date']);

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
    
$model->address = new RetailCrm\Api\Model\Entity\Order\Delivery\OrderDeliveryAddress();
if (isset($jsonData['address']['id'])) {
    $model->address->id = $jsonData['address']['id'];

}
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
if (isset($jsonData['address']['text'])) {
    $model->address->text = $jsonData['address']['text'];

}
if (isset($jsonData['address']['notes'])) {
    $model->address->notes = $jsonData['address']['notes'];

}


}



    return $model;
}
