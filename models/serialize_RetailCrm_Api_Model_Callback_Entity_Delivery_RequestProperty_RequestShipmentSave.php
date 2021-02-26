<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Delivery_RequestProperty_RequestShipmentSave(RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty\RequestShipmentSave $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->shipmentId) {
    $jsonData["shipmentId"] = $model->shipmentId;
}
if (null !== $model->manager) {
    $jsonData["manager"] = [];
if (null !== $model->manager->id) {
    $jsonData["manager"]["id"] = $model->manager->id;
}
if (null !== $model->manager->lastName) {
    $jsonData["manager"]["lastName"] = $model->manager->lastName;
}
if (null !== $model->manager->firstName) {
    $jsonData["manager"]["firstName"] = $model->manager->firstName;
}
if (null !== $model->manager->patronymic) {
    $jsonData["manager"]["patronymic"] = $model->manager->patronymic;
}
if (null !== $model->manager->phone) {
    $jsonData["manager"]["phone"] = $model->manager->phone;
}
if (null !== $model->manager->email) {
    $jsonData["manager"]["email"] = $model->manager->email;
}

if (0 === \count($jsonData["manager"])) {
    $jsonData["manager"] = $emptyObject;
}

}
if (null !== $model->date) {
    $jsonData["date"] = $model->date->format('Y-m-d H:i:s');;
}
if (null !== $model->time) {
    $jsonData["time"] = [];
if (null !== $model->time->from) {
    $jsonData["time"]["from"] = $model->time->from->format('H:i');;
}
if (null !== $model->time->to) {
    $jsonData["time"]["to"] = $model->time->to->format('H:i');;
}
if (null !== $model->time->custom) {
    $jsonData["time"]["custom"] = $model->time->custom;
}

if (0 === \count($jsonData["time"])) {
    $jsonData["time"] = $emptyObject;
}

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
if (null !== $model->address->terminal) {
    $jsonData["address"]["terminal"] = $model->address->terminal;
}
if (null !== $model->address->terminalData) {
    $jsonData["address"]["terminalData"] = [];
if (null !== $model->address->terminalData->code) {
    $jsonData["address"]["terminalData"]["code"] = $model->address->terminalData->code;
}
if (null !== $model->address->terminalData->cost) {
    $jsonData["address"]["terminalData"]["cost"] = $model->address->terminalData->cost;
}
if (null !== $model->address->terminalData->name) {
    $jsonData["address"]["terminalData"]["name"] = $model->address->terminalData->name;
}
if (null !== $model->address->terminalData->description) {
    $jsonData["address"]["terminalData"]["description"] = $model->address->terminalData->description;
}
if (null !== $model->address->terminalData->address) {
    $jsonData["address"]["terminalData"]["address"] = $model->address->terminalData->address;
}
if (null !== $model->address->terminalData->schedule) {
    $jsonData["address"]["terminalData"]["schedule"] = $model->address->terminalData->schedule;
}
if (null !== $model->address->terminalData->phone) {
    $jsonData["address"]["terminalData"]["phone"] = $model->address->terminalData->phone;
}
if (null !== $model->address->terminalData->extraData) {
    $jsonData["address"]["terminalData"]["extraData"] = [];
foreach (array_keys($model->address->terminalData->extraData) as $index40) {
    $jsonData["address"]["terminalData"]["extraData"] = $model->address->terminalData->extraData;
}

}
if (null !== $model->address->terminalData->coordinates) {
    $jsonData["address"]["terminalData"]["coordinates"] = [];
if (null !== $model->address->terminalData->coordinates->latitude) {
    $jsonData["address"]["terminalData"]["coordinates"]["latitude"] = $model->address->terminalData->coordinates->latitude;
}
if (null !== $model->address->terminalData->coordinates->longitude) {
    $jsonData["address"]["terminalData"]["coordinates"]["longitude"] = $model->address->terminalData->coordinates->longitude;
}

if (0 === \count($jsonData["address"]["terminalData"]["coordinates"])) {
    $jsonData["address"]["terminalData"]["coordinates"] = $emptyObject;
}

}

if (0 === \count($jsonData["address"]["terminalData"])) {
    $jsonData["address"]["terminalData"] = $emptyObject;
}

}

if (0 === \count($jsonData["address"])) {
    $jsonData["address"] = $emptyObject;
}

}
if (null !== $model->store) {
    $jsonData["store"] = $model->store;
}
if (null !== $model->orders) {
    $jsonData["orders"] = [];
foreach (array_keys($model->orders) as $index10) {
    $jsonData["orders"][$index10] = [];
if (null !== $model->orders[$index10]->deliveryId) {
    $jsonData["orders"][$index10]["deliveryId"] = $model->orders[$index10]->deliveryId;
}
if (null !== $model->orders[$index10]->packages) {
    $jsonData["orders"][$index10]["packages"] = [];
foreach (array_keys($model->orders[$index10]->packages) as $index32) {
    $jsonData["orders"][$index10]["packages"][$index32] = [];
if (null !== $model->orders[$index10]->packages[$index32]->weight) {
    $jsonData["orders"][$index10]["packages"][$index32]["weight"] = $model->orders[$index10]->packages[$index32]->weight;
}
if (null !== $model->orders[$index10]->packages[$index32]->packageId) {
    $jsonData["orders"][$index10]["packages"][$index32]["packageId"] = $model->orders[$index10]->packages[$index32]->packageId;
}
if (null !== $model->orders[$index10]->packages[$index32]->width) {
    $jsonData["orders"][$index10]["packages"][$index32]["width"] = $model->orders[$index10]->packages[$index32]->width;
}
if (null !== $model->orders[$index10]->packages[$index32]->length) {
    $jsonData["orders"][$index10]["packages"][$index32]["length"] = $model->orders[$index10]->packages[$index32]->length;
}
if (null !== $model->orders[$index10]->packages[$index32]->height) {
    $jsonData["orders"][$index10]["packages"][$index32]["height"] = $model->orders[$index10]->packages[$index32]->height;
}
if (null !== $model->orders[$index10]->packages[$index32]->items) {
    $jsonData["orders"][$index10]["packages"][$index32]["items"] = [];
foreach (array_keys($model->orders[$index10]->packages[$index32]->items) as $index51) {
    $jsonData["orders"][$index10]["packages"][$index32]["items"][$index51] = [];
if (null !== $model->orders[$index10]->packages[$index32]->items[$index51]->offerId) {
    $jsonData["orders"][$index10]["packages"][$index32]["items"][$index51]["offerId"] = $model->orders[$index10]->packages[$index32]->items[$index51]->offerId;
}
if (null !== $model->orders[$index10]->packages[$index32]->items[$index51]->externalId) {
    $jsonData["orders"][$index10]["packages"][$index32]["items"][$index51]["externalId"] = $model->orders[$index10]->packages[$index32]->items[$index51]->externalId;
}
if (null !== $model->orders[$index10]->packages[$index32]->items[$index51]->xmlId) {
    $jsonData["orders"][$index10]["packages"][$index32]["items"][$index51]["xmlId"] = $model->orders[$index10]->packages[$index32]->items[$index51]->xmlId;
}
if (null !== $model->orders[$index10]->packages[$index32]->items[$index51]->name) {
    $jsonData["orders"][$index10]["packages"][$index32]["items"][$index51]["name"] = $model->orders[$index10]->packages[$index32]->items[$index51]->name;
}
if (null !== $model->orders[$index10]->packages[$index32]->items[$index51]->declaredValue) {
    $jsonData["orders"][$index10]["packages"][$index32]["items"][$index51]["declaredValue"] = $model->orders[$index10]->packages[$index32]->items[$index51]->declaredValue;
}
if (null !== $model->orders[$index10]->packages[$index32]->items[$index51]->cod) {
    $jsonData["orders"][$index10]["packages"][$index32]["items"][$index51]["cod"] = $model->orders[$index10]->packages[$index32]->items[$index51]->cod;
}
if (null !== $model->orders[$index10]->packages[$index32]->items[$index51]->vatRate) {
    $jsonData["orders"][$index10]["packages"][$index32]["items"][$index51]["vatRate"] = $model->orders[$index10]->packages[$index32]->items[$index51]->vatRate;
}
if (null !== $model->orders[$index10]->packages[$index32]->items[$index51]->quantity) {
    $jsonData["orders"][$index10]["packages"][$index32]["items"][$index51]["quantity"] = $model->orders[$index10]->packages[$index32]->items[$index51]->quantity;
}
if (null !== $model->orders[$index10]->packages[$index32]->items[$index51]->unit) {
    $jsonData["orders"][$index10]["packages"][$index32]["items"][$index51]["unit"] = [];
if (null !== $model->orders[$index10]->packages[$index32]->items[$index51]->unit->code) {
    $jsonData["orders"][$index10]["packages"][$index32]["items"][$index51]["unit"]["code"] = $model->orders[$index10]->packages[$index32]->items[$index51]->unit->code;
}
if (null !== $model->orders[$index10]->packages[$index32]->items[$index51]->unit->name) {
    $jsonData["orders"][$index10]["packages"][$index32]["items"][$index51]["unit"]["name"] = $model->orders[$index10]->packages[$index32]->items[$index51]->unit->name;
}
if (null !== $model->orders[$index10]->packages[$index32]->items[$index51]->unit->sym) {
    $jsonData["orders"][$index10]["packages"][$index32]["items"][$index51]["unit"]["sym"] = $model->orders[$index10]->packages[$index32]->items[$index51]->unit->sym;
}

if (0 === \count($jsonData["orders"][$index10]["packages"][$index32]["items"][$index51]["unit"])) {
    $jsonData["orders"][$index10]["packages"][$index32]["items"][$index51]["unit"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->packages[$index32]->items[$index51]->cost) {
    $jsonData["orders"][$index10]["packages"][$index32]["items"][$index51]["cost"] = $model->orders[$index10]->packages[$index32]->items[$index51]->cost;
}
if (null !== $model->orders[$index10]->packages[$index32]->items[$index51]->markingCodes) {
    $jsonData["orders"][$index10]["packages"][$index32]["items"][$index51]["markingCodes"] = $model->orders[$index10]->packages[$index32]->items[$index51]->markingCodes;
}
if (null !== $model->orders[$index10]->packages[$index32]->items[$index51]->properties) {
    $jsonData["orders"][$index10]["packages"][$index32]["items"][$index51]["properties"] = [];
foreach (array_keys($model->orders[$index10]->packages[$index32]->items[$index51]->properties) as $index75) {
    $jsonData["orders"][$index10]["packages"][$index32]["items"][$index51]["properties"] = $model->orders[$index10]->packages[$index32]->items[$index51]->properties;
}

}

if (0 === \count($jsonData["orders"][$index10]["packages"][$index32]["items"][$index51])) {
    $jsonData["orders"][$index10]["packages"][$index32]["items"][$index51] = $emptyObject;
}

}

}

if (0 === \count($jsonData["orders"][$index10]["packages"][$index32])) {
    $jsonData["orders"][$index10]["packages"][$index32] = $emptyObject;
}

}

}

if (0 === \count($jsonData["orders"][$index10])) {
    $jsonData["orders"][$index10] = $emptyObject;
}

}

}
if (null !== $model->comment) {
    $jsonData["comment"] = $model->comment;
}
if (null !== $model->extraData) {
    $jsonData["extraData"] = [];
foreach (array_keys($model->extraData) as $index13) {
    $jsonData["extraData"] = $model->extraData;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
