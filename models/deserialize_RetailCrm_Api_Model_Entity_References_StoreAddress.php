<?php

function deserialize_RetailCrm_Api_Model_Entity_References_StoreAddress(array $jsonData): RetailCrm\Api\Model\Entity\References\StoreAddress
{
    
$model = new RetailCrm\Api\Model\Entity\References\StoreAddress();
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
if (isset($jsonData['coordinates'])) {
    
$model->coordinates = new RetailCrm\Api\Model\Entity\References\Point();
if (isset($jsonData['coordinates']['latitude'])) {
    $model->coordinates->latitude = (float) $jsonData['coordinates']['latitude'];

}
if (isset($jsonData['coordinates']['longitude'])) {
    $model->coordinates->longitude = (float) $jsonData['coordinates']['longitude'];

}


}



    return $model;
}
