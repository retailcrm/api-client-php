<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Delivery_SerializedStoreWeekOpeningHours(RetailCrm\Api\Model\Callback\Entity\Delivery\SerializedStoreWeekOpeningHours $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->mo) {
    $jsonData["mo"] = [];
foreach (array_keys($model->mo) as $index6) {
    $jsonData["mo"][$index6] = [];
if (null !== $model->mo[$index6]->startTime) {
    $jsonData["mo"][$index6]["startTime"] = $model->mo[$index6]->startTime;
}
if (null !== $model->mo[$index6]->endTime) {
    $jsonData["mo"][$index6]["endTime"] = $model->mo[$index6]->endTime;
}
if (null !== $model->mo[$index6]->lunchStartTime) {
    $jsonData["mo"][$index6]["lunchStartTime"] = $model->mo[$index6]->lunchStartTime;
}
if (null !== $model->mo[$index6]->lunchEndTime) {
    $jsonData["mo"][$index6]["lunchEndTime"] = $model->mo[$index6]->lunchEndTime;
}

if (0 === \count($jsonData["mo"][$index6])) {
    $jsonData["mo"][$index6] = $emptyObject;
}

}

}
if (null !== $model->tu) {
    $jsonData["tu"] = [];
foreach (array_keys($model->tu) as $index6) {
    $jsonData["tu"][$index6] = [];
if (null !== $model->tu[$index6]->startTime) {
    $jsonData["tu"][$index6]["startTime"] = $model->tu[$index6]->startTime;
}
if (null !== $model->tu[$index6]->endTime) {
    $jsonData["tu"][$index6]["endTime"] = $model->tu[$index6]->endTime;
}
if (null !== $model->tu[$index6]->lunchStartTime) {
    $jsonData["tu"][$index6]["lunchStartTime"] = $model->tu[$index6]->lunchStartTime;
}
if (null !== $model->tu[$index6]->lunchEndTime) {
    $jsonData["tu"][$index6]["lunchEndTime"] = $model->tu[$index6]->lunchEndTime;
}

if (0 === \count($jsonData["tu"][$index6])) {
    $jsonData["tu"][$index6] = $emptyObject;
}

}

}
if (null !== $model->we) {
    $jsonData["we"] = [];
foreach (array_keys($model->we) as $index6) {
    $jsonData["we"][$index6] = [];
if (null !== $model->we[$index6]->startTime) {
    $jsonData["we"][$index6]["startTime"] = $model->we[$index6]->startTime;
}
if (null !== $model->we[$index6]->endTime) {
    $jsonData["we"][$index6]["endTime"] = $model->we[$index6]->endTime;
}
if (null !== $model->we[$index6]->lunchStartTime) {
    $jsonData["we"][$index6]["lunchStartTime"] = $model->we[$index6]->lunchStartTime;
}
if (null !== $model->we[$index6]->lunchEndTime) {
    $jsonData["we"][$index6]["lunchEndTime"] = $model->we[$index6]->lunchEndTime;
}

if (0 === \count($jsonData["we"][$index6])) {
    $jsonData["we"][$index6] = $emptyObject;
}

}

}
if (null !== $model->th) {
    $jsonData["th"] = [];
foreach (array_keys($model->th) as $index6) {
    $jsonData["th"][$index6] = [];
if (null !== $model->th[$index6]->startTime) {
    $jsonData["th"][$index6]["startTime"] = $model->th[$index6]->startTime;
}
if (null !== $model->th[$index6]->endTime) {
    $jsonData["th"][$index6]["endTime"] = $model->th[$index6]->endTime;
}
if (null !== $model->th[$index6]->lunchStartTime) {
    $jsonData["th"][$index6]["lunchStartTime"] = $model->th[$index6]->lunchStartTime;
}
if (null !== $model->th[$index6]->lunchEndTime) {
    $jsonData["th"][$index6]["lunchEndTime"] = $model->th[$index6]->lunchEndTime;
}

if (0 === \count($jsonData["th"][$index6])) {
    $jsonData["th"][$index6] = $emptyObject;
}

}

}
if (null !== $model->fr) {
    $jsonData["fr"] = [];
foreach (array_keys($model->fr) as $index6) {
    $jsonData["fr"][$index6] = [];
if (null !== $model->fr[$index6]->startTime) {
    $jsonData["fr"][$index6]["startTime"] = $model->fr[$index6]->startTime;
}
if (null !== $model->fr[$index6]->endTime) {
    $jsonData["fr"][$index6]["endTime"] = $model->fr[$index6]->endTime;
}
if (null !== $model->fr[$index6]->lunchStartTime) {
    $jsonData["fr"][$index6]["lunchStartTime"] = $model->fr[$index6]->lunchStartTime;
}
if (null !== $model->fr[$index6]->lunchEndTime) {
    $jsonData["fr"][$index6]["lunchEndTime"] = $model->fr[$index6]->lunchEndTime;
}

if (0 === \count($jsonData["fr"][$index6])) {
    $jsonData["fr"][$index6] = $emptyObject;
}

}

}
if (null !== $model->sa) {
    $jsonData["sa"] = [];
foreach (array_keys($model->sa) as $index6) {
    $jsonData["sa"][$index6] = [];
if (null !== $model->sa[$index6]->startTime) {
    $jsonData["sa"][$index6]["startTime"] = $model->sa[$index6]->startTime;
}
if (null !== $model->sa[$index6]->endTime) {
    $jsonData["sa"][$index6]["endTime"] = $model->sa[$index6]->endTime;
}
if (null !== $model->sa[$index6]->lunchStartTime) {
    $jsonData["sa"][$index6]["lunchStartTime"] = $model->sa[$index6]->lunchStartTime;
}
if (null !== $model->sa[$index6]->lunchEndTime) {
    $jsonData["sa"][$index6]["lunchEndTime"] = $model->sa[$index6]->lunchEndTime;
}

if (0 === \count($jsonData["sa"][$index6])) {
    $jsonData["sa"][$index6] = $emptyObject;
}

}

}
if (null !== $model->su) {
    $jsonData["su"] = [];
foreach (array_keys($model->su) as $index6) {
    $jsonData["su"][$index6] = [];
if (null !== $model->su[$index6]->startTime) {
    $jsonData["su"][$index6]["startTime"] = $model->su[$index6]->startTime;
}
if (null !== $model->su[$index6]->endTime) {
    $jsonData["su"][$index6]["endTime"] = $model->su[$index6]->endTime;
}
if (null !== $model->su[$index6]->lunchStartTime) {
    $jsonData["su"][$index6]["lunchStartTime"] = $model->su[$index6]->lunchStartTime;
}
if (null !== $model->su[$index6]->lunchEndTime) {
    $jsonData["su"][$index6]["lunchEndTime"] = $model->su[$index6]->lunchEndTime;
}

if (0 === \count($jsonData["su"][$index6])) {
    $jsonData["su"][$index6] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
