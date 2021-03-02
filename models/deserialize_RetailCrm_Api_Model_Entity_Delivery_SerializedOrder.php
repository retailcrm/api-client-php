<?php

function deserialize_RetailCrm_Api_Model_Entity_Delivery_SerializedOrder(array $jsonData): RetailCrm\Api\Model\Entity\Delivery\SerializedOrder
{
    
$model = new RetailCrm\Api\Model\Entity\Delivery\SerializedOrder();
if (isset($jsonData['weight'])) {
    $model->weight = (float) $jsonData['weight'];

}
if (isset($jsonData['length'])) {
    $model->length = $jsonData['length'];

}
if (isset($jsonData['width'])) {
    $model->width = $jsonData['width'];

}
if (isset($jsonData['height'])) {
    $model->height = $jsonData['height'];

}
if (isset($jsonData['items'])) {
    $model->items = [];
foreach (array_keys($jsonData['items']) as $index18) {
    
$model->items[$index18] = new RetailCrm\Api\Model\Entity\Delivery\SerializedOrderProduct();
if (isset($jsonData['items'][$index18]['initialPrice'])) {
    $model->items[$index18]->initialPrice = (float) $jsonData['items'][$index18]['initialPrice'];

}
if (isset($jsonData['items'][$index18]['discountManualAmount'])) {
    $model->items[$index18]->discountManualAmount = (float) $jsonData['items'][$index18]['discountManualAmount'];

}
if (isset($jsonData['items'][$index18]['discountManualPercent'])) {
    $model->items[$index18]->discountManualPercent = (float) $jsonData['items'][$index18]['discountManualPercent'];

}
if (isset($jsonData['items'][$index18]['quantity'])) {
    $model->items[$index18]->quantity = (float) $jsonData['items'][$index18]['quantity'];

}


}

}
if (isset($jsonData['delivery'])) {
    
$model->delivery = new RetailCrm\Api\Model\Entity\Delivery\SerializedOrderDelivery();
if (isset($jsonData['delivery']['date'])) {
    $model->delivery->date = \DateTime::createFromFormat('Y-m-d', $jsonData['delivery']['date']);

}
if (isset($jsonData['delivery']['time'])) {
    
$model->delivery->time = new RetailCrm\Api\Model\Entity\Delivery\TimeInterval();
if (isset($jsonData['delivery']['time']['from'])) {
    $model->delivery->time->from = \DateTime::createFromFormat('H:i', $jsonData['delivery']['time']['from']);

}
if (isset($jsonData['delivery']['time']['to'])) {
    $model->delivery->time->to = \DateTime::createFromFormat('H:i', $jsonData['delivery']['time']['to']);

}
if (isset($jsonData['delivery']['time']['custom'])) {
    $model->delivery->time->custom = $jsonData['delivery']['time']['custom'];

}


}
if (isset($jsonData['delivery']['address'])) {
    
$model->delivery->address = new RetailCrm\Api\Model\Entity\Order\Delivery\OrderDeliveryAddress();
if (isset($jsonData['delivery']['address']['id'])) {
    $model->delivery->address->id = $jsonData['delivery']['address']['id'];

}
if (isset($jsonData['delivery']['address']['index'])) {
    $model->delivery->address->index = $jsonData['delivery']['address']['index'];

}
if (isset($jsonData['delivery']['address']['countryIso'])) {
    $model->delivery->address->countryIso = $jsonData['delivery']['address']['countryIso'];

}
if (isset($jsonData['delivery']['address']['region'])) {
    $model->delivery->address->region = $jsonData['delivery']['address']['region'];

}
if (isset($jsonData['delivery']['address']['regionId'])) {
    $model->delivery->address->regionId = $jsonData['delivery']['address']['regionId'];

}
if (isset($jsonData['delivery']['address']['city'])) {
    $model->delivery->address->city = $jsonData['delivery']['address']['city'];

}
if (isset($jsonData['delivery']['address']['cityId'])) {
    $model->delivery->address->cityId = $jsonData['delivery']['address']['cityId'];

}
if (isset($jsonData['delivery']['address']['cityType'])) {
    $model->delivery->address->cityType = $jsonData['delivery']['address']['cityType'];

}
if (isset($jsonData['delivery']['address']['street'])) {
    $model->delivery->address->street = $jsonData['delivery']['address']['street'];

}
if (isset($jsonData['delivery']['address']['streetId'])) {
    $model->delivery->address->streetId = $jsonData['delivery']['address']['streetId'];

}
if (isset($jsonData['delivery']['address']['streetType'])) {
    $model->delivery->address->streetType = $jsonData['delivery']['address']['streetType'];

}
if (isset($jsonData['delivery']['address']['building'])) {
    $model->delivery->address->building = $jsonData['delivery']['address']['building'];

}
if (isset($jsonData['delivery']['address']['flat'])) {
    $model->delivery->address->flat = $jsonData['delivery']['address']['flat'];

}
if (isset($jsonData['delivery']['address']['floor'])) {
    $model->delivery->address->floor = $jsonData['delivery']['address']['floor'];

}
if (isset($jsonData['delivery']['address']['block'])) {
    $model->delivery->address->block = $jsonData['delivery']['address']['block'];

}
if (isset($jsonData['delivery']['address']['house'])) {
    $model->delivery->address->house = $jsonData['delivery']['address']['house'];

}
if (isset($jsonData['delivery']['address']['housing'])) {
    $model->delivery->address->housing = $jsonData['delivery']['address']['housing'];

}
if (isset($jsonData['delivery']['address']['metro'])) {
    $model->delivery->address->metro = $jsonData['delivery']['address']['metro'];

}
if (isset($jsonData['delivery']['address']['text'])) {
    $model->delivery->address->text = $jsonData['delivery']['address']['text'];

}
if (isset($jsonData['delivery']['address']['notes'])) {
    $model->delivery->address->notes = $jsonData['delivery']['address']['notes'];

}


}


}



    return $model;
}
