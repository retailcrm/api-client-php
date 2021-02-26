<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Delivery_SerializedStoreWeekOpeningHours(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Delivery\SerializedStoreWeekOpeningHours
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Delivery\SerializedStoreWeekOpeningHours();
if (isset($jsonData['mo'])) {
    $model->mo = [];
foreach (array_keys($jsonData['mo']) as $index15) {
    
$model->mo[$index15] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['mo'][$index15]['startTime'])) {
    $model->mo[$index15]->startTime = $jsonData['mo'][$index15]['startTime'];

}
if (isset($jsonData['mo'][$index15]['endTime'])) {
    $model->mo[$index15]->endTime = $jsonData['mo'][$index15]['endTime'];

}
if (isset($jsonData['mo'][$index15]['lunchStartTime'])) {
    $model->mo[$index15]->lunchStartTime = $jsonData['mo'][$index15]['lunchStartTime'];

}
if (isset($jsonData['mo'][$index15]['lunchEndTime'])) {
    $model->mo[$index15]->lunchEndTime = $jsonData['mo'][$index15]['lunchEndTime'];

}


}

}
if (isset($jsonData['tu'])) {
    $model->tu = [];
foreach (array_keys($jsonData['tu']) as $index15) {
    
$model->tu[$index15] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['tu'][$index15]['startTime'])) {
    $model->tu[$index15]->startTime = $jsonData['tu'][$index15]['startTime'];

}
if (isset($jsonData['tu'][$index15]['endTime'])) {
    $model->tu[$index15]->endTime = $jsonData['tu'][$index15]['endTime'];

}
if (isset($jsonData['tu'][$index15]['lunchStartTime'])) {
    $model->tu[$index15]->lunchStartTime = $jsonData['tu'][$index15]['lunchStartTime'];

}
if (isset($jsonData['tu'][$index15]['lunchEndTime'])) {
    $model->tu[$index15]->lunchEndTime = $jsonData['tu'][$index15]['lunchEndTime'];

}


}

}
if (isset($jsonData['we'])) {
    $model->we = [];
foreach (array_keys($jsonData['we']) as $index15) {
    
$model->we[$index15] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['we'][$index15]['startTime'])) {
    $model->we[$index15]->startTime = $jsonData['we'][$index15]['startTime'];

}
if (isset($jsonData['we'][$index15]['endTime'])) {
    $model->we[$index15]->endTime = $jsonData['we'][$index15]['endTime'];

}
if (isset($jsonData['we'][$index15]['lunchStartTime'])) {
    $model->we[$index15]->lunchStartTime = $jsonData['we'][$index15]['lunchStartTime'];

}
if (isset($jsonData['we'][$index15]['lunchEndTime'])) {
    $model->we[$index15]->lunchEndTime = $jsonData['we'][$index15]['lunchEndTime'];

}


}

}
if (isset($jsonData['th'])) {
    $model->th = [];
foreach (array_keys($jsonData['th']) as $index15) {
    
$model->th[$index15] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['th'][$index15]['startTime'])) {
    $model->th[$index15]->startTime = $jsonData['th'][$index15]['startTime'];

}
if (isset($jsonData['th'][$index15]['endTime'])) {
    $model->th[$index15]->endTime = $jsonData['th'][$index15]['endTime'];

}
if (isset($jsonData['th'][$index15]['lunchStartTime'])) {
    $model->th[$index15]->lunchStartTime = $jsonData['th'][$index15]['lunchStartTime'];

}
if (isset($jsonData['th'][$index15]['lunchEndTime'])) {
    $model->th[$index15]->lunchEndTime = $jsonData['th'][$index15]['lunchEndTime'];

}


}

}
if (isset($jsonData['fr'])) {
    $model->fr = [];
foreach (array_keys($jsonData['fr']) as $index15) {
    
$model->fr[$index15] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['fr'][$index15]['startTime'])) {
    $model->fr[$index15]->startTime = $jsonData['fr'][$index15]['startTime'];

}
if (isset($jsonData['fr'][$index15]['endTime'])) {
    $model->fr[$index15]->endTime = $jsonData['fr'][$index15]['endTime'];

}
if (isset($jsonData['fr'][$index15]['lunchStartTime'])) {
    $model->fr[$index15]->lunchStartTime = $jsonData['fr'][$index15]['lunchStartTime'];

}
if (isset($jsonData['fr'][$index15]['lunchEndTime'])) {
    $model->fr[$index15]->lunchEndTime = $jsonData['fr'][$index15]['lunchEndTime'];

}


}

}
if (isset($jsonData['sa'])) {
    $model->sa = [];
foreach (array_keys($jsonData['sa']) as $index15) {
    
$model->sa[$index15] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['sa'][$index15]['startTime'])) {
    $model->sa[$index15]->startTime = $jsonData['sa'][$index15]['startTime'];

}
if (isset($jsonData['sa'][$index15]['endTime'])) {
    $model->sa[$index15]->endTime = $jsonData['sa'][$index15]['endTime'];

}
if (isset($jsonData['sa'][$index15]['lunchStartTime'])) {
    $model->sa[$index15]->lunchStartTime = $jsonData['sa'][$index15]['lunchStartTime'];

}
if (isset($jsonData['sa'][$index15]['lunchEndTime'])) {
    $model->sa[$index15]->lunchEndTime = $jsonData['sa'][$index15]['lunchEndTime'];

}


}

}
if (isset($jsonData['su'])) {
    $model->su = [];
foreach (array_keys($jsonData['su']) as $index15) {
    
$model->su[$index15] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['su'][$index15]['startTime'])) {
    $model->su[$index15]->startTime = $jsonData['su'][$index15]['startTime'];

}
if (isset($jsonData['su'][$index15]['endTime'])) {
    $model->su[$index15]->endTime = $jsonData['su'][$index15]['endTime'];

}
if (isset($jsonData['su'][$index15]['lunchStartTime'])) {
    $model->su[$index15]->lunchStartTime = $jsonData['su'][$index15]['lunchStartTime'];

}
if (isset($jsonData['su'][$index15]['lunchEndTime'])) {
    $model->su[$index15]->lunchEndTime = $jsonData['su'][$index15]['lunchEndTime'];

}


}

}



    return $model;
}
