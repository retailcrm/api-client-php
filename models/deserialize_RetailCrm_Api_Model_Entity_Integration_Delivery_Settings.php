<?php

function deserialize_RetailCrm_Api_Model_Entity_Integration_Delivery_Settings(array $jsonData): RetailCrm\Api\Model\Entity\Integration\Delivery\Settings
{
    
$model = new RetailCrm\Api\Model\Entity\Integration\Delivery\Settings();
if (isset($jsonData['defaultPayerType'])) {
    $model->defaultPayerType = $jsonData['defaultPayerType'];

}
if (isset($jsonData['costCalculateBy'])) {
    $model->costCalculateBy = $jsonData['costCalculateBy'];

}
if (isset($jsonData['nullDeclaredValue'])) {
    $model->nullDeclaredValue = $jsonData['nullDeclaredValue'];

}
if (isset($jsonData['lockedByDefault'])) {
    $model->lockedByDefault = $jsonData['lockedByDefault'];

}
if (isset($jsonData['paymentTypes'])) {
    $model->paymentTypes = [];
foreach (array_keys($jsonData['paymentTypes']) as $index25) {
    
$model->paymentTypes[$index25] = new RetailCrm\Api\Model\Entity\Integration\Delivery\PaymentType();
if (isset($jsonData['paymentTypes'][$index25]['code'])) {
    $model->paymentTypes[$index25]->code = $jsonData['paymentTypes'][$index25]['code'];

}
if (isset($jsonData['paymentTypes'][$index25]['active'])) {
    $model->paymentTypes[$index25]->active = $jsonData['paymentTypes'][$index25]['active'];

}
if (isset($jsonData['paymentTypes'][$index25]['cod'])) {
    $model->paymentTypes[$index25]->cod = $jsonData['paymentTypes'][$index25]['cod'];

}


}

}
if (isset($jsonData['shipmentPoints'])) {
    $model->shipmentPoints = [];
foreach (array_keys($jsonData['shipmentPoints']) as $index27) {
    
$model->shipmentPoints[$index27] = new RetailCrm\Api\Model\Entity\Integration\Delivery\ShipmentPoint();
if (isset($jsonData['shipmentPoints'][$index27]['code'])) {
    $model->shipmentPoints[$index27]->code = $jsonData['shipmentPoints'][$index27]['code'];

}
if (isset($jsonData['shipmentPoints'][$index27]['shipmentPointId'])) {
    $model->shipmentPoints[$index27]->shipmentPointId = $jsonData['shipmentPoints'][$index27]['shipmentPointId'];

}
if (isset($jsonData['shipmentPoints'][$index27]['shipmentPointLabel'])) {
    $model->shipmentPoints[$index27]->shipmentPointLabel = $jsonData['shipmentPoints'][$index27]['shipmentPointLabel'];

}


}

}
if (isset($jsonData['statuses'])) {
    $model->statuses = [];
foreach (array_keys($jsonData['statuses']) as $index21) {
    
$model->statuses[$index21] = new RetailCrm\Api\Model\Entity\Integration\Delivery\Status();
if (isset($jsonData['statuses'][$index21]['code'])) {
    $model->statuses[$index21]->code = $jsonData['statuses'][$index21]['code'];

}
if (isset($jsonData['statuses'][$index21]['name'])) {
    $model->statuses[$index21]->name = $jsonData['statuses'][$index21]['name'];

}
if (isset($jsonData['statuses'][$index21]['isEditable'])) {
    $model->statuses[$index21]->isEditable = $jsonData['statuses'][$index21]['isEditable'];

}


}

}
if (isset($jsonData['deliveryExtraData'])) {
    $model->deliveryExtraData = [];
foreach (array_keys($jsonData['deliveryExtraData']) as $index30) {
    $model->deliveryExtraData[$index30] = $jsonData['deliveryExtraData'][$index30];

}

}
if (isset($jsonData['shipmentExtraData'])) {
    $model->shipmentExtraData = [];
foreach (array_keys($jsonData['shipmentExtraData']) as $index30) {
    $model->shipmentExtraData[$index30] = $jsonData['shipmentExtraData'][$index30];

}

}



    return $model;
}
