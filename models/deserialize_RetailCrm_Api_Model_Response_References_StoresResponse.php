<?php

function deserialize_RetailCrm_Api_Model_Response_References_StoresResponse(array $jsonData): RetailCrm\Api\Model\Response\References\StoresResponse
{
    
$model = new RetailCrm\Api\Model\Response\References\StoresResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['stores'])) {
    $model->stores = [];
foreach (array_keys($jsonData['stores']) as $index19) {
    
$model->stores[$index19] = new RetailCrm\Api\Model\Entity\References\Store();
if (isset($jsonData['stores'][$index19]['externalId'])) {
    $model->stores[$index19]->externalId = $jsonData['stores'][$index19]['externalId'];

}
if (isset($jsonData['stores'][$index19]['xmlId'])) {
    $model->stores[$index19]->xmlId = $jsonData['stores'][$index19]['xmlId'];

}
if (isset($jsonData['stores'][$index19]['description'])) {
    $model->stores[$index19]->description = $jsonData['stores'][$index19]['description'];

}
if (isset($jsonData['stores'][$index19]['email'])) {
    $model->stores[$index19]->email = $jsonData['stores'][$index19]['email'];

}
if (isset($jsonData['stores'][$index19]['type'])) {
    $model->stores[$index19]->type = $jsonData['stores'][$index19]['type'];

}
if (isset($jsonData['stores'][$index19]['inventoryType'])) {
    $model->stores[$index19]->inventoryType = $jsonData['stores'][$index19]['inventoryType'];

}
if (isset($jsonData['stores'][$index19]['address'])) {
    
$model->stores[$index19]->address = new RetailCrm\Api\Model\Entity\References\StoreAddress();
if (isset($jsonData['stores'][$index19]['address']['index'])) {
    $model->stores[$index19]->address->index = $jsonData['stores'][$index19]['address']['index'];

}
if (isset($jsonData['stores'][$index19]['address']['countryIso'])) {
    $model->stores[$index19]->address->countryIso = $jsonData['stores'][$index19]['address']['countryIso'];

}
if (isset($jsonData['stores'][$index19]['address']['region'])) {
    $model->stores[$index19]->address->region = $jsonData['stores'][$index19]['address']['region'];

}
if (isset($jsonData['stores'][$index19]['address']['regionId'])) {
    $model->stores[$index19]->address->regionId = $jsonData['stores'][$index19]['address']['regionId'];

}
if (isset($jsonData['stores'][$index19]['address']['city'])) {
    $model->stores[$index19]->address->city = $jsonData['stores'][$index19]['address']['city'];

}
if (isset($jsonData['stores'][$index19]['address']['cityId'])) {
    $model->stores[$index19]->address->cityId = $jsonData['stores'][$index19]['address']['cityId'];

}
if (isset($jsonData['stores'][$index19]['address']['cityType'])) {
    $model->stores[$index19]->address->cityType = $jsonData['stores'][$index19]['address']['cityType'];

}
if (isset($jsonData['stores'][$index19]['address']['street'])) {
    $model->stores[$index19]->address->street = $jsonData['stores'][$index19]['address']['street'];

}
if (isset($jsonData['stores'][$index19]['address']['streetId'])) {
    $model->stores[$index19]->address->streetId = $jsonData['stores'][$index19]['address']['streetId'];

}
if (isset($jsonData['stores'][$index19]['address']['streetType'])) {
    $model->stores[$index19]->address->streetType = $jsonData['stores'][$index19]['address']['streetType'];

}
if (isset($jsonData['stores'][$index19]['address']['building'])) {
    $model->stores[$index19]->address->building = $jsonData['stores'][$index19]['address']['building'];

}
if (isset($jsonData['stores'][$index19]['address']['flat'])) {
    $model->stores[$index19]->address->flat = $jsonData['stores'][$index19]['address']['flat'];

}
if (isset($jsonData['stores'][$index19]['address']['floor'])) {
    $model->stores[$index19]->address->floor = $jsonData['stores'][$index19]['address']['floor'];

}
if (isset($jsonData['stores'][$index19]['address']['block'])) {
    $model->stores[$index19]->address->block = $jsonData['stores'][$index19]['address']['block'];

}
if (isset($jsonData['stores'][$index19]['address']['house'])) {
    $model->stores[$index19]->address->house = $jsonData['stores'][$index19]['address']['house'];

}
if (isset($jsonData['stores'][$index19]['address']['housing'])) {
    $model->stores[$index19]->address->housing = $jsonData['stores'][$index19]['address']['housing'];

}
if (isset($jsonData['stores'][$index19]['address']['metro'])) {
    $model->stores[$index19]->address->metro = $jsonData['stores'][$index19]['address']['metro'];

}
if (isset($jsonData['stores'][$index19]['address']['notes'])) {
    $model->stores[$index19]->address->notes = $jsonData['stores'][$index19]['address']['notes'];

}
if (isset($jsonData['stores'][$index19]['address']['text'])) {
    $model->stores[$index19]->address->text = $jsonData['stores'][$index19]['address']['text'];

}
if (isset($jsonData['stores'][$index19]['address']['coordinates'])) {
    
$model->stores[$index19]->address->coordinates = new RetailCrm\Api\Model\Entity\References\Point();
if (isset($jsonData['stores'][$index19]['address']['coordinates']['latitude'])) {
    $model->stores[$index19]->address->coordinates->latitude = (float) $jsonData['stores'][$index19]['address']['coordinates']['latitude'];

}
if (isset($jsonData['stores'][$index19]['address']['coordinates']['longitude'])) {
    $model->stores[$index19]->address->coordinates->longitude = (float) $jsonData['stores'][$index19]['address']['coordinates']['longitude'];

}


}


}
if (isset($jsonData['stores'][$index19]['active'])) {
    $model->stores[$index19]->active = $jsonData['stores'][$index19]['active'];

}
if (isset($jsonData['stores'][$index19]['phone'])) {
    
$model->stores[$index19]->phone = new RetailCrm\Api\Model\Entity\References\StorePhone();
if (isset($jsonData['stores'][$index19]['phone']['number'])) {
    $model->stores[$index19]->phone->number = $jsonData['stores'][$index19]['phone']['number'];

}


}
if (isset($jsonData['stores'][$index19]['code'])) {
    $model->stores[$index19]->code = $jsonData['stores'][$index19]['code'];

}
if (isset($jsonData['stores'][$index19]['workTime'])) {
    
$model->stores[$index19]->workTime = new RetailCrm\Api\Model\Callback\Entity\Delivery\SerializedStoreWeekOpeningHours();
if (isset($jsonData['stores'][$index19]['workTime']['mo'])) {
    $model->stores[$index19]->workTime->mo = [];
foreach (array_keys($jsonData['stores'][$index19]['workTime']['mo']) as $index47) {
    
$model->stores[$index19]->workTime->mo[$index47] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['stores'][$index19]['workTime']['mo'][$index47]['startTime'])) {
    $model->stores[$index19]->workTime->mo[$index47]->startTime = $jsonData['stores'][$index19]['workTime']['mo'][$index47]['startTime'];

}
if (isset($jsonData['stores'][$index19]['workTime']['mo'][$index47]['endTime'])) {
    $model->stores[$index19]->workTime->mo[$index47]->endTime = $jsonData['stores'][$index19]['workTime']['mo'][$index47]['endTime'];

}
if (isset($jsonData['stores'][$index19]['workTime']['mo'][$index47]['lunchStartTime'])) {
    $model->stores[$index19]->workTime->mo[$index47]->lunchStartTime = $jsonData['stores'][$index19]['workTime']['mo'][$index47]['lunchStartTime'];

}
if (isset($jsonData['stores'][$index19]['workTime']['mo'][$index47]['lunchEndTime'])) {
    $model->stores[$index19]->workTime->mo[$index47]->lunchEndTime = $jsonData['stores'][$index19]['workTime']['mo'][$index47]['lunchEndTime'];

}


}

}
if (isset($jsonData['stores'][$index19]['workTime']['tu'])) {
    $model->stores[$index19]->workTime->tu = [];
foreach (array_keys($jsonData['stores'][$index19]['workTime']['tu']) as $index47) {
    
$model->stores[$index19]->workTime->tu[$index47] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['stores'][$index19]['workTime']['tu'][$index47]['startTime'])) {
    $model->stores[$index19]->workTime->tu[$index47]->startTime = $jsonData['stores'][$index19]['workTime']['tu'][$index47]['startTime'];

}
if (isset($jsonData['stores'][$index19]['workTime']['tu'][$index47]['endTime'])) {
    $model->stores[$index19]->workTime->tu[$index47]->endTime = $jsonData['stores'][$index19]['workTime']['tu'][$index47]['endTime'];

}
if (isset($jsonData['stores'][$index19]['workTime']['tu'][$index47]['lunchStartTime'])) {
    $model->stores[$index19]->workTime->tu[$index47]->lunchStartTime = $jsonData['stores'][$index19]['workTime']['tu'][$index47]['lunchStartTime'];

}
if (isset($jsonData['stores'][$index19]['workTime']['tu'][$index47]['lunchEndTime'])) {
    $model->stores[$index19]->workTime->tu[$index47]->lunchEndTime = $jsonData['stores'][$index19]['workTime']['tu'][$index47]['lunchEndTime'];

}


}

}
if (isset($jsonData['stores'][$index19]['workTime']['we'])) {
    $model->stores[$index19]->workTime->we = [];
foreach (array_keys($jsonData['stores'][$index19]['workTime']['we']) as $index47) {
    
$model->stores[$index19]->workTime->we[$index47] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['stores'][$index19]['workTime']['we'][$index47]['startTime'])) {
    $model->stores[$index19]->workTime->we[$index47]->startTime = $jsonData['stores'][$index19]['workTime']['we'][$index47]['startTime'];

}
if (isset($jsonData['stores'][$index19]['workTime']['we'][$index47]['endTime'])) {
    $model->stores[$index19]->workTime->we[$index47]->endTime = $jsonData['stores'][$index19]['workTime']['we'][$index47]['endTime'];

}
if (isset($jsonData['stores'][$index19]['workTime']['we'][$index47]['lunchStartTime'])) {
    $model->stores[$index19]->workTime->we[$index47]->lunchStartTime = $jsonData['stores'][$index19]['workTime']['we'][$index47]['lunchStartTime'];

}
if (isset($jsonData['stores'][$index19]['workTime']['we'][$index47]['lunchEndTime'])) {
    $model->stores[$index19]->workTime->we[$index47]->lunchEndTime = $jsonData['stores'][$index19]['workTime']['we'][$index47]['lunchEndTime'];

}


}

}
if (isset($jsonData['stores'][$index19]['workTime']['th'])) {
    $model->stores[$index19]->workTime->th = [];
foreach (array_keys($jsonData['stores'][$index19]['workTime']['th']) as $index47) {
    
$model->stores[$index19]->workTime->th[$index47] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['stores'][$index19]['workTime']['th'][$index47]['startTime'])) {
    $model->stores[$index19]->workTime->th[$index47]->startTime = $jsonData['stores'][$index19]['workTime']['th'][$index47]['startTime'];

}
if (isset($jsonData['stores'][$index19]['workTime']['th'][$index47]['endTime'])) {
    $model->stores[$index19]->workTime->th[$index47]->endTime = $jsonData['stores'][$index19]['workTime']['th'][$index47]['endTime'];

}
if (isset($jsonData['stores'][$index19]['workTime']['th'][$index47]['lunchStartTime'])) {
    $model->stores[$index19]->workTime->th[$index47]->lunchStartTime = $jsonData['stores'][$index19]['workTime']['th'][$index47]['lunchStartTime'];

}
if (isset($jsonData['stores'][$index19]['workTime']['th'][$index47]['lunchEndTime'])) {
    $model->stores[$index19]->workTime->th[$index47]->lunchEndTime = $jsonData['stores'][$index19]['workTime']['th'][$index47]['lunchEndTime'];

}


}

}
if (isset($jsonData['stores'][$index19]['workTime']['fr'])) {
    $model->stores[$index19]->workTime->fr = [];
foreach (array_keys($jsonData['stores'][$index19]['workTime']['fr']) as $index47) {
    
$model->stores[$index19]->workTime->fr[$index47] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['stores'][$index19]['workTime']['fr'][$index47]['startTime'])) {
    $model->stores[$index19]->workTime->fr[$index47]->startTime = $jsonData['stores'][$index19]['workTime']['fr'][$index47]['startTime'];

}
if (isset($jsonData['stores'][$index19]['workTime']['fr'][$index47]['endTime'])) {
    $model->stores[$index19]->workTime->fr[$index47]->endTime = $jsonData['stores'][$index19]['workTime']['fr'][$index47]['endTime'];

}
if (isset($jsonData['stores'][$index19]['workTime']['fr'][$index47]['lunchStartTime'])) {
    $model->stores[$index19]->workTime->fr[$index47]->lunchStartTime = $jsonData['stores'][$index19]['workTime']['fr'][$index47]['lunchStartTime'];

}
if (isset($jsonData['stores'][$index19]['workTime']['fr'][$index47]['lunchEndTime'])) {
    $model->stores[$index19]->workTime->fr[$index47]->lunchEndTime = $jsonData['stores'][$index19]['workTime']['fr'][$index47]['lunchEndTime'];

}


}

}
if (isset($jsonData['stores'][$index19]['workTime']['sa'])) {
    $model->stores[$index19]->workTime->sa = [];
foreach (array_keys($jsonData['stores'][$index19]['workTime']['sa']) as $index47) {
    
$model->stores[$index19]->workTime->sa[$index47] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['stores'][$index19]['workTime']['sa'][$index47]['startTime'])) {
    $model->stores[$index19]->workTime->sa[$index47]->startTime = $jsonData['stores'][$index19]['workTime']['sa'][$index47]['startTime'];

}
if (isset($jsonData['stores'][$index19]['workTime']['sa'][$index47]['endTime'])) {
    $model->stores[$index19]->workTime->sa[$index47]->endTime = $jsonData['stores'][$index19]['workTime']['sa'][$index47]['endTime'];

}
if (isset($jsonData['stores'][$index19]['workTime']['sa'][$index47]['lunchStartTime'])) {
    $model->stores[$index19]->workTime->sa[$index47]->lunchStartTime = $jsonData['stores'][$index19]['workTime']['sa'][$index47]['lunchStartTime'];

}
if (isset($jsonData['stores'][$index19]['workTime']['sa'][$index47]['lunchEndTime'])) {
    $model->stores[$index19]->workTime->sa[$index47]->lunchEndTime = $jsonData['stores'][$index19]['workTime']['sa'][$index47]['lunchEndTime'];

}


}

}
if (isset($jsonData['stores'][$index19]['workTime']['su'])) {
    $model->stores[$index19]->workTime->su = [];
foreach (array_keys($jsonData['stores'][$index19]['workTime']['su']) as $index47) {
    
$model->stores[$index19]->workTime->su[$index47] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['stores'][$index19]['workTime']['su'][$index47]['startTime'])) {
    $model->stores[$index19]->workTime->su[$index47]->startTime = $jsonData['stores'][$index19]['workTime']['su'][$index47]['startTime'];

}
if (isset($jsonData['stores'][$index19]['workTime']['su'][$index47]['endTime'])) {
    $model->stores[$index19]->workTime->su[$index47]->endTime = $jsonData['stores'][$index19]['workTime']['su'][$index47]['endTime'];

}
if (isset($jsonData['stores'][$index19]['workTime']['su'][$index47]['lunchStartTime'])) {
    $model->stores[$index19]->workTime->su[$index47]->lunchStartTime = $jsonData['stores'][$index19]['workTime']['su'][$index47]['lunchStartTime'];

}
if (isset($jsonData['stores'][$index19]['workTime']['su'][$index47]['lunchEndTime'])) {
    $model->stores[$index19]->workTime->su[$index47]->lunchEndTime = $jsonData['stores'][$index19]['workTime']['su'][$index47]['lunchEndTime'];

}


}

}


}
if (isset($jsonData['stores'][$index19]['name'])) {
    $model->stores[$index19]->name = $jsonData['stores'][$index19]['name'];

}


}

}



    return $model;
}
