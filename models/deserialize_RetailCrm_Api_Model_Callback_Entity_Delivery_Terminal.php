<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Delivery_Terminal(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Delivery\Terminal
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Delivery\Terminal();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['cost'])) {
    $model->cost = (float) $jsonData['cost'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['description'])) {
    $model->description = $jsonData['description'];

}
if (isset($jsonData['address'])) {
    $model->address = $jsonData['address'];

}
if (isset($jsonData['schedule'])) {
    $model->schedule = $jsonData['schedule'];

}
if (isset($jsonData['phone'])) {
    $model->phone = $jsonData['phone'];

}
if (isset($jsonData['extraData'])) {
    $model->extraData = [];
foreach (array_keys($jsonData['extraData']) as $index22) {
    $model->extraData[$index22] = $jsonData['extraData'][$index22];

}

}
if (isset($jsonData['coordinates'])) {
    
$model->coordinates = new RetailCrm\Api\Model\Callback\Entity\Delivery\Coordinates();
if (isset($jsonData['coordinates']['latitude'])) {
    $model->coordinates->latitude = (float) $jsonData['coordinates']['latitude'];

}
if (isset($jsonData['coordinates']['longitude'])) {
    $model->coordinates->longitude = (float) $jsonData['coordinates']['longitude'];

}


}



    return $model;
}
