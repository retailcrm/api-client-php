<?php

function serialize_RetailCrm_Api_Model_Entity_References_Store(RetailCrm\Api\Model\Entity\References\Store $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->externalId) {
    $jsonData["externalId"] = $model->externalId;
}
if (null !== $model->xmlId) {
    $jsonData["xmlId"] = $model->xmlId;
}
if (null !== $model->description) {
    $jsonData["description"] = $model->description;
}
if (null !== $model->email) {
    $jsonData["email"] = $model->email;
}
if (null !== $model->type) {
    $jsonData["type"] = $model->type;
}
if (null !== $model->inventoryType) {
    $jsonData["inventoryType"] = $model->inventoryType;
}
if (null !== $model->address) {
    $jsonData["address"] = [];
if (null !== $model->address->index) {
    $jsonData["address"]["index"] = $model->address->index;
}
if (null !== $model->address->countryIso) {
    $jsonData["address"]["countryIso"] = $model->address->countryIso;
}
if (null !== $model->address->region) {
    $jsonData["address"]["region"] = $model->address->region;
}
if (null !== $model->address->regionId) {
    $jsonData["address"]["regionId"] = $model->address->regionId;
}
if (null !== $model->address->city) {
    $jsonData["address"]["city"] = $model->address->city;
}
if (null !== $model->address->cityId) {
    $jsonData["address"]["cityId"] = $model->address->cityId;
}
if (null !== $model->address->cityType) {
    $jsonData["address"]["cityType"] = $model->address->cityType;
}
if (null !== $model->address->street) {
    $jsonData["address"]["street"] = $model->address->street;
}
if (null !== $model->address->streetId) {
    $jsonData["address"]["streetId"] = $model->address->streetId;
}
if (null !== $model->address->streetType) {
    $jsonData["address"]["streetType"] = $model->address->streetType;
}
if (null !== $model->address->building) {
    $jsonData["address"]["building"] = $model->address->building;
}
if (null !== $model->address->flat) {
    $jsonData["address"]["flat"] = $model->address->flat;
}
if (null !== $model->address->floor) {
    $jsonData["address"]["floor"] = $model->address->floor;
}
if (null !== $model->address->block) {
    $jsonData["address"]["block"] = $model->address->block;
}
if (null !== $model->address->house) {
    $jsonData["address"]["house"] = $model->address->house;
}
if (null !== $model->address->housing) {
    $jsonData["address"]["housing"] = $model->address->housing;
}
if (null !== $model->address->metro) {
    $jsonData["address"]["metro"] = $model->address->metro;
}
if (null !== $model->address->notes) {
    $jsonData["address"]["notes"] = $model->address->notes;
}
if (null !== $model->address->text) {
    $jsonData["address"]["text"] = $model->address->text;
}
if (null !== $model->address->coordinates) {
    $jsonData["address"]["coordinates"] = [];
if (null !== $model->address->coordinates->latitude) {
    $jsonData["address"]["coordinates"]["latitude"] = $model->address->coordinates->latitude;
}
if (null !== $model->address->coordinates->longitude) {
    $jsonData["address"]["coordinates"]["longitude"] = $model->address->coordinates->longitude;
}

if (0 === \count($jsonData["address"]["coordinates"])) {
    $jsonData["address"]["coordinates"] = $emptyObject;
}

}

if (0 === \count($jsonData["address"])) {
    $jsonData["address"] = $emptyObject;
}

}
if (null !== $model->active) {
    $jsonData["active"] = $model->active;
}
if (null !== $model->phone) {
    $jsonData["phone"] = [];
if (null !== $model->phone->number) {
    $jsonData["phone"]["number"] = $model->phone->number;
}

if (0 === \count($jsonData["phone"])) {
    $jsonData["phone"] = $emptyObject;
}

}
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->workTime) {
    $jsonData["workTime"] = [];
if (null !== $model->workTime->mo) {
    $jsonData["workTime"]["mo"] = [];
foreach (array_keys($model->workTime->mo) as $index18) {
    $jsonData["workTime"]["mo"][$index18] = [];
if (null !== $model->workTime->mo[$index18]->startTime) {
    $jsonData["workTime"]["mo"][$index18]["startTime"] = $model->workTime->mo[$index18]->startTime;
}
if (null !== $model->workTime->mo[$index18]->endTime) {
    $jsonData["workTime"]["mo"][$index18]["endTime"] = $model->workTime->mo[$index18]->endTime;
}
if (null !== $model->workTime->mo[$index18]->lunchStartTime) {
    $jsonData["workTime"]["mo"][$index18]["lunchStartTime"] = $model->workTime->mo[$index18]->lunchStartTime;
}
if (null !== $model->workTime->mo[$index18]->lunchEndTime) {
    $jsonData["workTime"]["mo"][$index18]["lunchEndTime"] = $model->workTime->mo[$index18]->lunchEndTime;
}

if (0 === \count($jsonData["workTime"]["mo"][$index18])) {
    $jsonData["workTime"]["mo"][$index18] = $emptyObject;
}

}

}
if (null !== $model->workTime->tu) {
    $jsonData["workTime"]["tu"] = [];
foreach (array_keys($model->workTime->tu) as $index18) {
    $jsonData["workTime"]["tu"][$index18] = [];
if (null !== $model->workTime->tu[$index18]->startTime) {
    $jsonData["workTime"]["tu"][$index18]["startTime"] = $model->workTime->tu[$index18]->startTime;
}
if (null !== $model->workTime->tu[$index18]->endTime) {
    $jsonData["workTime"]["tu"][$index18]["endTime"] = $model->workTime->tu[$index18]->endTime;
}
if (null !== $model->workTime->tu[$index18]->lunchStartTime) {
    $jsonData["workTime"]["tu"][$index18]["lunchStartTime"] = $model->workTime->tu[$index18]->lunchStartTime;
}
if (null !== $model->workTime->tu[$index18]->lunchEndTime) {
    $jsonData["workTime"]["tu"][$index18]["lunchEndTime"] = $model->workTime->tu[$index18]->lunchEndTime;
}

if (0 === \count($jsonData["workTime"]["tu"][$index18])) {
    $jsonData["workTime"]["tu"][$index18] = $emptyObject;
}

}

}
if (null !== $model->workTime->we) {
    $jsonData["workTime"]["we"] = [];
foreach (array_keys($model->workTime->we) as $index18) {
    $jsonData["workTime"]["we"][$index18] = [];
if (null !== $model->workTime->we[$index18]->startTime) {
    $jsonData["workTime"]["we"][$index18]["startTime"] = $model->workTime->we[$index18]->startTime;
}
if (null !== $model->workTime->we[$index18]->endTime) {
    $jsonData["workTime"]["we"][$index18]["endTime"] = $model->workTime->we[$index18]->endTime;
}
if (null !== $model->workTime->we[$index18]->lunchStartTime) {
    $jsonData["workTime"]["we"][$index18]["lunchStartTime"] = $model->workTime->we[$index18]->lunchStartTime;
}
if (null !== $model->workTime->we[$index18]->lunchEndTime) {
    $jsonData["workTime"]["we"][$index18]["lunchEndTime"] = $model->workTime->we[$index18]->lunchEndTime;
}

if (0 === \count($jsonData["workTime"]["we"][$index18])) {
    $jsonData["workTime"]["we"][$index18] = $emptyObject;
}

}

}
if (null !== $model->workTime->th) {
    $jsonData["workTime"]["th"] = [];
foreach (array_keys($model->workTime->th) as $index18) {
    $jsonData["workTime"]["th"][$index18] = [];
if (null !== $model->workTime->th[$index18]->startTime) {
    $jsonData["workTime"]["th"][$index18]["startTime"] = $model->workTime->th[$index18]->startTime;
}
if (null !== $model->workTime->th[$index18]->endTime) {
    $jsonData["workTime"]["th"][$index18]["endTime"] = $model->workTime->th[$index18]->endTime;
}
if (null !== $model->workTime->th[$index18]->lunchStartTime) {
    $jsonData["workTime"]["th"][$index18]["lunchStartTime"] = $model->workTime->th[$index18]->lunchStartTime;
}
if (null !== $model->workTime->th[$index18]->lunchEndTime) {
    $jsonData["workTime"]["th"][$index18]["lunchEndTime"] = $model->workTime->th[$index18]->lunchEndTime;
}

if (0 === \count($jsonData["workTime"]["th"][$index18])) {
    $jsonData["workTime"]["th"][$index18] = $emptyObject;
}

}

}
if (null !== $model->workTime->fr) {
    $jsonData["workTime"]["fr"] = [];
foreach (array_keys($model->workTime->fr) as $index18) {
    $jsonData["workTime"]["fr"][$index18] = [];
if (null !== $model->workTime->fr[$index18]->startTime) {
    $jsonData["workTime"]["fr"][$index18]["startTime"] = $model->workTime->fr[$index18]->startTime;
}
if (null !== $model->workTime->fr[$index18]->endTime) {
    $jsonData["workTime"]["fr"][$index18]["endTime"] = $model->workTime->fr[$index18]->endTime;
}
if (null !== $model->workTime->fr[$index18]->lunchStartTime) {
    $jsonData["workTime"]["fr"][$index18]["lunchStartTime"] = $model->workTime->fr[$index18]->lunchStartTime;
}
if (null !== $model->workTime->fr[$index18]->lunchEndTime) {
    $jsonData["workTime"]["fr"][$index18]["lunchEndTime"] = $model->workTime->fr[$index18]->lunchEndTime;
}

if (0 === \count($jsonData["workTime"]["fr"][$index18])) {
    $jsonData["workTime"]["fr"][$index18] = $emptyObject;
}

}

}
if (null !== $model->workTime->sa) {
    $jsonData["workTime"]["sa"] = [];
foreach (array_keys($model->workTime->sa) as $index18) {
    $jsonData["workTime"]["sa"][$index18] = [];
if (null !== $model->workTime->sa[$index18]->startTime) {
    $jsonData["workTime"]["sa"][$index18]["startTime"] = $model->workTime->sa[$index18]->startTime;
}
if (null !== $model->workTime->sa[$index18]->endTime) {
    $jsonData["workTime"]["sa"][$index18]["endTime"] = $model->workTime->sa[$index18]->endTime;
}
if (null !== $model->workTime->sa[$index18]->lunchStartTime) {
    $jsonData["workTime"]["sa"][$index18]["lunchStartTime"] = $model->workTime->sa[$index18]->lunchStartTime;
}
if (null !== $model->workTime->sa[$index18]->lunchEndTime) {
    $jsonData["workTime"]["sa"][$index18]["lunchEndTime"] = $model->workTime->sa[$index18]->lunchEndTime;
}

if (0 === \count($jsonData["workTime"]["sa"][$index18])) {
    $jsonData["workTime"]["sa"][$index18] = $emptyObject;
}

}

}
if (null !== $model->workTime->su) {
    $jsonData["workTime"]["su"] = [];
foreach (array_keys($model->workTime->su) as $index18) {
    $jsonData["workTime"]["su"][$index18] = [];
if (null !== $model->workTime->su[$index18]->startTime) {
    $jsonData["workTime"]["su"][$index18]["startTime"] = $model->workTime->su[$index18]->startTime;
}
if (null !== $model->workTime->su[$index18]->endTime) {
    $jsonData["workTime"]["su"][$index18]["endTime"] = $model->workTime->su[$index18]->endTime;
}
if (null !== $model->workTime->su[$index18]->lunchStartTime) {
    $jsonData["workTime"]["su"][$index18]["lunchStartTime"] = $model->workTime->su[$index18]->lunchStartTime;
}
if (null !== $model->workTime->su[$index18]->lunchEndTime) {
    $jsonData["workTime"]["su"][$index18]["lunchEndTime"] = $model->workTime->su[$index18]->lunchEndTime;
}

if (0 === \count($jsonData["workTime"]["su"][$index18])) {
    $jsonData["workTime"]["su"][$index18] = $emptyObject;
}

}

}

if (0 === \count($jsonData["workTime"])) {
    $jsonData["workTime"] = $emptyObject;
}

}
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
