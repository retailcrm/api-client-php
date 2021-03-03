<?php

function deserialize_RetailCrm_Api_Model_Entity_References_Store(array $jsonData): RetailCrm\Api\Model\Entity\References\Store
{
    
$model = new RetailCrm\Api\Model\Entity\References\Store();
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['xmlId'])) {
    $model->xmlId = $jsonData['xmlId'];

}
if (isset($jsonData['description'])) {
    $model->description = $jsonData['description'];

}
if (isset($jsonData['email'])) {
    $model->email = $jsonData['email'];

}
if (isset($jsonData['type'])) {
    $model->type = $jsonData['type'];

}
if (isset($jsonData['inventoryType'])) {
    $model->inventoryType = $jsonData['inventoryType'];

}
if (isset($jsonData['address'])) {
    
$model->address = new RetailCrm\Api\Model\Entity\References\StoreAddress();
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
if (isset($jsonData['address']['coordinates'])) {
    
$model->address->coordinates = new RetailCrm\Api\Model\Entity\References\Point();
if (isset($jsonData['address']['coordinates']['latitude'])) {
    $model->address->coordinates->latitude = (float) $jsonData['address']['coordinates']['latitude'];

}
if (isset($jsonData['address']['coordinates']['longitude'])) {
    $model->address->coordinates->longitude = (float) $jsonData['address']['coordinates']['longitude'];

}


}


}
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

}
if (isset($jsonData['phone'])) {
    
$model->phone = new RetailCrm\Api\Model\Entity\References\StorePhone();
if (isset($jsonData['phone']['number'])) {
    $model->phone->number = $jsonData['phone']['number'];

}


}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['workTime'])) {
    
$model->workTime = new RetailCrm\Api\Model\Callback\Entity\Delivery\SerializedStoreWeekOpeningHours();
if (isset($jsonData['workTime']['mo'])) {
    $model->workTime->mo = [];
foreach (array_keys($jsonData['workTime']['mo']) as $index27) {
    
$model->workTime->mo[$index27] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['workTime']['mo'][$index27]['startTime'])) {
    $model->workTime->mo[$index27]->startTime = $jsonData['workTime']['mo'][$index27]['startTime'];

}
if (isset($jsonData['workTime']['mo'][$index27]['endTime'])) {
    $model->workTime->mo[$index27]->endTime = $jsonData['workTime']['mo'][$index27]['endTime'];

}
if (isset($jsonData['workTime']['mo'][$index27]['lunchStartTime'])) {
    $model->workTime->mo[$index27]->lunchStartTime = $jsonData['workTime']['mo'][$index27]['lunchStartTime'];

}
if (isset($jsonData['workTime']['mo'][$index27]['lunchEndTime'])) {
    $model->workTime->mo[$index27]->lunchEndTime = $jsonData['workTime']['mo'][$index27]['lunchEndTime'];

}


}

}
if (isset($jsonData['workTime']['tu'])) {
    $model->workTime->tu = [];
foreach (array_keys($jsonData['workTime']['tu']) as $index27) {
    
$model->workTime->tu[$index27] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['workTime']['tu'][$index27]['startTime'])) {
    $model->workTime->tu[$index27]->startTime = $jsonData['workTime']['tu'][$index27]['startTime'];

}
if (isset($jsonData['workTime']['tu'][$index27]['endTime'])) {
    $model->workTime->tu[$index27]->endTime = $jsonData['workTime']['tu'][$index27]['endTime'];

}
if (isset($jsonData['workTime']['tu'][$index27]['lunchStartTime'])) {
    $model->workTime->tu[$index27]->lunchStartTime = $jsonData['workTime']['tu'][$index27]['lunchStartTime'];

}
if (isset($jsonData['workTime']['tu'][$index27]['lunchEndTime'])) {
    $model->workTime->tu[$index27]->lunchEndTime = $jsonData['workTime']['tu'][$index27]['lunchEndTime'];

}


}

}
if (isset($jsonData['workTime']['we'])) {
    $model->workTime->we = [];
foreach (array_keys($jsonData['workTime']['we']) as $index27) {
    
$model->workTime->we[$index27] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['workTime']['we'][$index27]['startTime'])) {
    $model->workTime->we[$index27]->startTime = $jsonData['workTime']['we'][$index27]['startTime'];

}
if (isset($jsonData['workTime']['we'][$index27]['endTime'])) {
    $model->workTime->we[$index27]->endTime = $jsonData['workTime']['we'][$index27]['endTime'];

}
if (isset($jsonData['workTime']['we'][$index27]['lunchStartTime'])) {
    $model->workTime->we[$index27]->lunchStartTime = $jsonData['workTime']['we'][$index27]['lunchStartTime'];

}
if (isset($jsonData['workTime']['we'][$index27]['lunchEndTime'])) {
    $model->workTime->we[$index27]->lunchEndTime = $jsonData['workTime']['we'][$index27]['lunchEndTime'];

}


}

}
if (isset($jsonData['workTime']['th'])) {
    $model->workTime->th = [];
foreach (array_keys($jsonData['workTime']['th']) as $index27) {
    
$model->workTime->th[$index27] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['workTime']['th'][$index27]['startTime'])) {
    $model->workTime->th[$index27]->startTime = $jsonData['workTime']['th'][$index27]['startTime'];

}
if (isset($jsonData['workTime']['th'][$index27]['endTime'])) {
    $model->workTime->th[$index27]->endTime = $jsonData['workTime']['th'][$index27]['endTime'];

}
if (isset($jsonData['workTime']['th'][$index27]['lunchStartTime'])) {
    $model->workTime->th[$index27]->lunchStartTime = $jsonData['workTime']['th'][$index27]['lunchStartTime'];

}
if (isset($jsonData['workTime']['th'][$index27]['lunchEndTime'])) {
    $model->workTime->th[$index27]->lunchEndTime = $jsonData['workTime']['th'][$index27]['lunchEndTime'];

}


}

}
if (isset($jsonData['workTime']['fr'])) {
    $model->workTime->fr = [];
foreach (array_keys($jsonData['workTime']['fr']) as $index27) {
    
$model->workTime->fr[$index27] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['workTime']['fr'][$index27]['startTime'])) {
    $model->workTime->fr[$index27]->startTime = $jsonData['workTime']['fr'][$index27]['startTime'];

}
if (isset($jsonData['workTime']['fr'][$index27]['endTime'])) {
    $model->workTime->fr[$index27]->endTime = $jsonData['workTime']['fr'][$index27]['endTime'];

}
if (isset($jsonData['workTime']['fr'][$index27]['lunchStartTime'])) {
    $model->workTime->fr[$index27]->lunchStartTime = $jsonData['workTime']['fr'][$index27]['lunchStartTime'];

}
if (isset($jsonData['workTime']['fr'][$index27]['lunchEndTime'])) {
    $model->workTime->fr[$index27]->lunchEndTime = $jsonData['workTime']['fr'][$index27]['lunchEndTime'];

}


}

}
if (isset($jsonData['workTime']['sa'])) {
    $model->workTime->sa = [];
foreach (array_keys($jsonData['workTime']['sa']) as $index27) {
    
$model->workTime->sa[$index27] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['workTime']['sa'][$index27]['startTime'])) {
    $model->workTime->sa[$index27]->startTime = $jsonData['workTime']['sa'][$index27]['startTime'];

}
if (isset($jsonData['workTime']['sa'][$index27]['endTime'])) {
    $model->workTime->sa[$index27]->endTime = $jsonData['workTime']['sa'][$index27]['endTime'];

}
if (isset($jsonData['workTime']['sa'][$index27]['lunchStartTime'])) {
    $model->workTime->sa[$index27]->lunchStartTime = $jsonData['workTime']['sa'][$index27]['lunchStartTime'];

}
if (isset($jsonData['workTime']['sa'][$index27]['lunchEndTime'])) {
    $model->workTime->sa[$index27]->lunchEndTime = $jsonData['workTime']['sa'][$index27]['lunchEndTime'];

}


}

}
if (isset($jsonData['workTime']['su'])) {
    $model->workTime->su = [];
foreach (array_keys($jsonData['workTime']['su']) as $index27) {
    
$model->workTime->su[$index27] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['workTime']['su'][$index27]['startTime'])) {
    $model->workTime->su[$index27]->startTime = $jsonData['workTime']['su'][$index27]['startTime'];

}
if (isset($jsonData['workTime']['su'][$index27]['endTime'])) {
    $model->workTime->su[$index27]->endTime = $jsonData['workTime']['su'][$index27]['endTime'];

}
if (isset($jsonData['workTime']['su'][$index27]['lunchStartTime'])) {
    $model->workTime->su[$index27]->lunchStartTime = $jsonData['workTime']['su'][$index27]['lunchStartTime'];

}
if (isset($jsonData['workTime']['su'][$index27]['lunchEndTime'])) {
    $model->workTime->su[$index27]->lunchEndTime = $jsonData['workTime']['su'][$index27]['lunchEndTime'];

}


}

}


}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}



    return $model;
}
