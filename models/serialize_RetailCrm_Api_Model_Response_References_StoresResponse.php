<?php

function serialize_RetailCrm_Api_Model_Response_References_StoresResponse(RetailCrm\Api\Model\Response\References\StoresResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->stores) {
    $jsonData["stores"] = [];
foreach (array_keys($model->stores) as $index10) {
    $jsonData["stores"][$index10] = [];
if (null !== $model->stores[$index10]->externalId) {
    $jsonData["stores"][$index10]["externalId"] = $model->stores[$index10]->externalId;
}
if (null !== $model->stores[$index10]->xmlId) {
    $jsonData["stores"][$index10]["xmlId"] = $model->stores[$index10]->xmlId;
}
if (null !== $model->stores[$index10]->description) {
    $jsonData["stores"][$index10]["description"] = $model->stores[$index10]->description;
}
if (null !== $model->stores[$index10]->email) {
    $jsonData["stores"][$index10]["email"] = $model->stores[$index10]->email;
}
if (null !== $model->stores[$index10]->type) {
    $jsonData["stores"][$index10]["type"] = $model->stores[$index10]->type;
}
if (null !== $model->stores[$index10]->inventoryType) {
    $jsonData["stores"][$index10]["inventoryType"] = $model->stores[$index10]->inventoryType;
}
if (null !== $model->stores[$index10]->address) {
    $jsonData["stores"][$index10]["address"] = [];
if (null !== $model->stores[$index10]->address->index) {
    $jsonData["stores"][$index10]["address"]["index"] = $model->stores[$index10]->address->index;
}
if (null !== $model->stores[$index10]->address->countryIso) {
    $jsonData["stores"][$index10]["address"]["countryIso"] = $model->stores[$index10]->address->countryIso;
}
if (null !== $model->stores[$index10]->address->region) {
    $jsonData["stores"][$index10]["address"]["region"] = $model->stores[$index10]->address->region;
}
if (null !== $model->stores[$index10]->address->regionId) {
    $jsonData["stores"][$index10]["address"]["regionId"] = $model->stores[$index10]->address->regionId;
}
if (null !== $model->stores[$index10]->address->city) {
    $jsonData["stores"][$index10]["address"]["city"] = $model->stores[$index10]->address->city;
}
if (null !== $model->stores[$index10]->address->cityId) {
    $jsonData["stores"][$index10]["address"]["cityId"] = $model->stores[$index10]->address->cityId;
}
if (null !== $model->stores[$index10]->address->cityType) {
    $jsonData["stores"][$index10]["address"]["cityType"] = $model->stores[$index10]->address->cityType;
}
if (null !== $model->stores[$index10]->address->street) {
    $jsonData["stores"][$index10]["address"]["street"] = $model->stores[$index10]->address->street;
}
if (null !== $model->stores[$index10]->address->streetId) {
    $jsonData["stores"][$index10]["address"]["streetId"] = $model->stores[$index10]->address->streetId;
}
if (null !== $model->stores[$index10]->address->streetType) {
    $jsonData["stores"][$index10]["address"]["streetType"] = $model->stores[$index10]->address->streetType;
}
if (null !== $model->stores[$index10]->address->building) {
    $jsonData["stores"][$index10]["address"]["building"] = $model->stores[$index10]->address->building;
}
if (null !== $model->stores[$index10]->address->flat) {
    $jsonData["stores"][$index10]["address"]["flat"] = $model->stores[$index10]->address->flat;
}
if (null !== $model->stores[$index10]->address->floor) {
    $jsonData["stores"][$index10]["address"]["floor"] = $model->stores[$index10]->address->floor;
}
if (null !== $model->stores[$index10]->address->block) {
    $jsonData["stores"][$index10]["address"]["block"] = $model->stores[$index10]->address->block;
}
if (null !== $model->stores[$index10]->address->house) {
    $jsonData["stores"][$index10]["address"]["house"] = $model->stores[$index10]->address->house;
}
if (null !== $model->stores[$index10]->address->housing) {
    $jsonData["stores"][$index10]["address"]["housing"] = $model->stores[$index10]->address->housing;
}
if (null !== $model->stores[$index10]->address->metro) {
    $jsonData["stores"][$index10]["address"]["metro"] = $model->stores[$index10]->address->metro;
}
if (null !== $model->stores[$index10]->address->notes) {
    $jsonData["stores"][$index10]["address"]["notes"] = $model->stores[$index10]->address->notes;
}
if (null !== $model->stores[$index10]->address->text) {
    $jsonData["stores"][$index10]["address"]["text"] = $model->stores[$index10]->address->text;
}
if (null !== $model->stores[$index10]->address->coordinates) {
    $jsonData["stores"][$index10]["address"]["coordinates"] = [];
if (null !== $model->stores[$index10]->address->coordinates->latitude) {
    $jsonData["stores"][$index10]["address"]["coordinates"]["latitude"] = $model->stores[$index10]->address->coordinates->latitude;
}
if (null !== $model->stores[$index10]->address->coordinates->longitude) {
    $jsonData["stores"][$index10]["address"]["coordinates"]["longitude"] = $model->stores[$index10]->address->coordinates->longitude;
}

if (0 === \count($jsonData["stores"][$index10]["address"]["coordinates"])) {
    $jsonData["stores"][$index10]["address"]["coordinates"] = $emptyObject;
}

}

if (0 === \count($jsonData["stores"][$index10]["address"])) {
    $jsonData["stores"][$index10]["address"] = $emptyObject;
}

}
if (null !== $model->stores[$index10]->active) {
    $jsonData["stores"][$index10]["active"] = $model->stores[$index10]->active;
}
if (null !== $model->stores[$index10]->phone) {
    $jsonData["stores"][$index10]["phone"] = [];
if (null !== $model->stores[$index10]->phone->number) {
    $jsonData["stores"][$index10]["phone"]["number"] = $model->stores[$index10]->phone->number;
}

if (0 === \count($jsonData["stores"][$index10]["phone"])) {
    $jsonData["stores"][$index10]["phone"] = $emptyObject;
}

}
if (null !== $model->stores[$index10]->code) {
    $jsonData["stores"][$index10]["code"] = $model->stores[$index10]->code;
}
if (null !== $model->stores[$index10]->workTime) {
    $jsonData["stores"][$index10]["workTime"] = [];
if (null !== $model->stores[$index10]->workTime->mo) {
    $jsonData["stores"][$index10]["workTime"]["mo"] = [];
foreach (array_keys($model->stores[$index10]->workTime->mo) as $index38) {
    $jsonData["stores"][$index10]["workTime"]["mo"][$index38] = [];
if (null !== $model->stores[$index10]->workTime->mo[$index38]->startTime) {
    $jsonData["stores"][$index10]["workTime"]["mo"][$index38]["startTime"] = $model->stores[$index10]->workTime->mo[$index38]->startTime;
}
if (null !== $model->stores[$index10]->workTime->mo[$index38]->endTime) {
    $jsonData["stores"][$index10]["workTime"]["mo"][$index38]["endTime"] = $model->stores[$index10]->workTime->mo[$index38]->endTime;
}
if (null !== $model->stores[$index10]->workTime->mo[$index38]->lunchStartTime) {
    $jsonData["stores"][$index10]["workTime"]["mo"][$index38]["lunchStartTime"] = $model->stores[$index10]->workTime->mo[$index38]->lunchStartTime;
}
if (null !== $model->stores[$index10]->workTime->mo[$index38]->lunchEndTime) {
    $jsonData["stores"][$index10]["workTime"]["mo"][$index38]["lunchEndTime"] = $model->stores[$index10]->workTime->mo[$index38]->lunchEndTime;
}

if (0 === \count($jsonData["stores"][$index10]["workTime"]["mo"][$index38])) {
    $jsonData["stores"][$index10]["workTime"]["mo"][$index38] = $emptyObject;
}

}

}
if (null !== $model->stores[$index10]->workTime->tu) {
    $jsonData["stores"][$index10]["workTime"]["tu"] = [];
foreach (array_keys($model->stores[$index10]->workTime->tu) as $index38) {
    $jsonData["stores"][$index10]["workTime"]["tu"][$index38] = [];
if (null !== $model->stores[$index10]->workTime->tu[$index38]->startTime) {
    $jsonData["stores"][$index10]["workTime"]["tu"][$index38]["startTime"] = $model->stores[$index10]->workTime->tu[$index38]->startTime;
}
if (null !== $model->stores[$index10]->workTime->tu[$index38]->endTime) {
    $jsonData["stores"][$index10]["workTime"]["tu"][$index38]["endTime"] = $model->stores[$index10]->workTime->tu[$index38]->endTime;
}
if (null !== $model->stores[$index10]->workTime->tu[$index38]->lunchStartTime) {
    $jsonData["stores"][$index10]["workTime"]["tu"][$index38]["lunchStartTime"] = $model->stores[$index10]->workTime->tu[$index38]->lunchStartTime;
}
if (null !== $model->stores[$index10]->workTime->tu[$index38]->lunchEndTime) {
    $jsonData["stores"][$index10]["workTime"]["tu"][$index38]["lunchEndTime"] = $model->stores[$index10]->workTime->tu[$index38]->lunchEndTime;
}

if (0 === \count($jsonData["stores"][$index10]["workTime"]["tu"][$index38])) {
    $jsonData["stores"][$index10]["workTime"]["tu"][$index38] = $emptyObject;
}

}

}
if (null !== $model->stores[$index10]->workTime->we) {
    $jsonData["stores"][$index10]["workTime"]["we"] = [];
foreach (array_keys($model->stores[$index10]->workTime->we) as $index38) {
    $jsonData["stores"][$index10]["workTime"]["we"][$index38] = [];
if (null !== $model->stores[$index10]->workTime->we[$index38]->startTime) {
    $jsonData["stores"][$index10]["workTime"]["we"][$index38]["startTime"] = $model->stores[$index10]->workTime->we[$index38]->startTime;
}
if (null !== $model->stores[$index10]->workTime->we[$index38]->endTime) {
    $jsonData["stores"][$index10]["workTime"]["we"][$index38]["endTime"] = $model->stores[$index10]->workTime->we[$index38]->endTime;
}
if (null !== $model->stores[$index10]->workTime->we[$index38]->lunchStartTime) {
    $jsonData["stores"][$index10]["workTime"]["we"][$index38]["lunchStartTime"] = $model->stores[$index10]->workTime->we[$index38]->lunchStartTime;
}
if (null !== $model->stores[$index10]->workTime->we[$index38]->lunchEndTime) {
    $jsonData["stores"][$index10]["workTime"]["we"][$index38]["lunchEndTime"] = $model->stores[$index10]->workTime->we[$index38]->lunchEndTime;
}

if (0 === \count($jsonData["stores"][$index10]["workTime"]["we"][$index38])) {
    $jsonData["stores"][$index10]["workTime"]["we"][$index38] = $emptyObject;
}

}

}
if (null !== $model->stores[$index10]->workTime->th) {
    $jsonData["stores"][$index10]["workTime"]["th"] = [];
foreach (array_keys($model->stores[$index10]->workTime->th) as $index38) {
    $jsonData["stores"][$index10]["workTime"]["th"][$index38] = [];
if (null !== $model->stores[$index10]->workTime->th[$index38]->startTime) {
    $jsonData["stores"][$index10]["workTime"]["th"][$index38]["startTime"] = $model->stores[$index10]->workTime->th[$index38]->startTime;
}
if (null !== $model->stores[$index10]->workTime->th[$index38]->endTime) {
    $jsonData["stores"][$index10]["workTime"]["th"][$index38]["endTime"] = $model->stores[$index10]->workTime->th[$index38]->endTime;
}
if (null !== $model->stores[$index10]->workTime->th[$index38]->lunchStartTime) {
    $jsonData["stores"][$index10]["workTime"]["th"][$index38]["lunchStartTime"] = $model->stores[$index10]->workTime->th[$index38]->lunchStartTime;
}
if (null !== $model->stores[$index10]->workTime->th[$index38]->lunchEndTime) {
    $jsonData["stores"][$index10]["workTime"]["th"][$index38]["lunchEndTime"] = $model->stores[$index10]->workTime->th[$index38]->lunchEndTime;
}

if (0 === \count($jsonData["stores"][$index10]["workTime"]["th"][$index38])) {
    $jsonData["stores"][$index10]["workTime"]["th"][$index38] = $emptyObject;
}

}

}
if (null !== $model->stores[$index10]->workTime->fr) {
    $jsonData["stores"][$index10]["workTime"]["fr"] = [];
foreach (array_keys($model->stores[$index10]->workTime->fr) as $index38) {
    $jsonData["stores"][$index10]["workTime"]["fr"][$index38] = [];
if (null !== $model->stores[$index10]->workTime->fr[$index38]->startTime) {
    $jsonData["stores"][$index10]["workTime"]["fr"][$index38]["startTime"] = $model->stores[$index10]->workTime->fr[$index38]->startTime;
}
if (null !== $model->stores[$index10]->workTime->fr[$index38]->endTime) {
    $jsonData["stores"][$index10]["workTime"]["fr"][$index38]["endTime"] = $model->stores[$index10]->workTime->fr[$index38]->endTime;
}
if (null !== $model->stores[$index10]->workTime->fr[$index38]->lunchStartTime) {
    $jsonData["stores"][$index10]["workTime"]["fr"][$index38]["lunchStartTime"] = $model->stores[$index10]->workTime->fr[$index38]->lunchStartTime;
}
if (null !== $model->stores[$index10]->workTime->fr[$index38]->lunchEndTime) {
    $jsonData["stores"][$index10]["workTime"]["fr"][$index38]["lunchEndTime"] = $model->stores[$index10]->workTime->fr[$index38]->lunchEndTime;
}

if (0 === \count($jsonData["stores"][$index10]["workTime"]["fr"][$index38])) {
    $jsonData["stores"][$index10]["workTime"]["fr"][$index38] = $emptyObject;
}

}

}
if (null !== $model->stores[$index10]->workTime->sa) {
    $jsonData["stores"][$index10]["workTime"]["sa"] = [];
foreach (array_keys($model->stores[$index10]->workTime->sa) as $index38) {
    $jsonData["stores"][$index10]["workTime"]["sa"][$index38] = [];
if (null !== $model->stores[$index10]->workTime->sa[$index38]->startTime) {
    $jsonData["stores"][$index10]["workTime"]["sa"][$index38]["startTime"] = $model->stores[$index10]->workTime->sa[$index38]->startTime;
}
if (null !== $model->stores[$index10]->workTime->sa[$index38]->endTime) {
    $jsonData["stores"][$index10]["workTime"]["sa"][$index38]["endTime"] = $model->stores[$index10]->workTime->sa[$index38]->endTime;
}
if (null !== $model->stores[$index10]->workTime->sa[$index38]->lunchStartTime) {
    $jsonData["stores"][$index10]["workTime"]["sa"][$index38]["lunchStartTime"] = $model->stores[$index10]->workTime->sa[$index38]->lunchStartTime;
}
if (null !== $model->stores[$index10]->workTime->sa[$index38]->lunchEndTime) {
    $jsonData["stores"][$index10]["workTime"]["sa"][$index38]["lunchEndTime"] = $model->stores[$index10]->workTime->sa[$index38]->lunchEndTime;
}

if (0 === \count($jsonData["stores"][$index10]["workTime"]["sa"][$index38])) {
    $jsonData["stores"][$index10]["workTime"]["sa"][$index38] = $emptyObject;
}

}

}
if (null !== $model->stores[$index10]->workTime->su) {
    $jsonData["stores"][$index10]["workTime"]["su"] = [];
foreach (array_keys($model->stores[$index10]->workTime->su) as $index38) {
    $jsonData["stores"][$index10]["workTime"]["su"][$index38] = [];
if (null !== $model->stores[$index10]->workTime->su[$index38]->startTime) {
    $jsonData["stores"][$index10]["workTime"]["su"][$index38]["startTime"] = $model->stores[$index10]->workTime->su[$index38]->startTime;
}
if (null !== $model->stores[$index10]->workTime->su[$index38]->endTime) {
    $jsonData["stores"][$index10]["workTime"]["su"][$index38]["endTime"] = $model->stores[$index10]->workTime->su[$index38]->endTime;
}
if (null !== $model->stores[$index10]->workTime->su[$index38]->lunchStartTime) {
    $jsonData["stores"][$index10]["workTime"]["su"][$index38]["lunchStartTime"] = $model->stores[$index10]->workTime->su[$index38]->lunchStartTime;
}
if (null !== $model->stores[$index10]->workTime->su[$index38]->lunchEndTime) {
    $jsonData["stores"][$index10]["workTime"]["su"][$index38]["lunchEndTime"] = $model->stores[$index10]->workTime->su[$index38]->lunchEndTime;
}

if (0 === \count($jsonData["stores"][$index10]["workTime"]["su"][$index38])) {
    $jsonData["stores"][$index10]["workTime"]["su"][$index38] = $emptyObject;
}

}

}

if (0 === \count($jsonData["stores"][$index10]["workTime"])) {
    $jsonData["stores"][$index10]["workTime"] = $emptyObject;
}

}
if (null !== $model->stores[$index10]->name) {
    $jsonData["stores"][$index10]["name"] = $model->stores[$index10]->name;
}

if (0 === \count($jsonData["stores"][$index10])) {
    $jsonData["stores"][$index10] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
