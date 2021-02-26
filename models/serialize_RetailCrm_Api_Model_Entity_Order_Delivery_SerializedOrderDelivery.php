<?php

function serialize_RetailCrm_Api_Model_Entity_Order_Delivery_SerializedOrderDelivery(RetailCrm\Api\Model\Entity\Order\Delivery\SerializedOrderDelivery $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->integrationCode) {
    $jsonData["integrationCode"] = $model->integrationCode;
}
if (null !== $model->data) {
    $jsonData["data"] = [];
if (null !== $model->data->externalId) {
    $jsonData["data"]["externalId"] = $model->data->externalId;
}
if (null !== $model->data->trackNumber) {
    $jsonData["data"]["trackNumber"] = $model->data->trackNumber;
}
if (null !== $model->data->status) {
    $jsonData["data"]["status"] = $model->data->status;
}
if (null !== $model->data->locked) {
    $jsonData["data"]["locked"] = $model->data->locked;
}
if (null !== $model->data->pickuppointAddress) {
    $jsonData["data"]["pickuppointAddress"] = $model->data->pickuppointAddress;
}
if (null !== $model->data->days) {
    $jsonData["data"]["days"] = $model->data->days;
}
if (null !== $model->data->statusText) {
    $jsonData["data"]["statusText"] = $model->data->statusText;
}
if (null !== $model->data->statusDate) {
    $jsonData["data"]["statusDate"] = $model->data->statusDate->format('Y-m-d');;
}
if (null !== $model->data->tariff) {
    $jsonData["data"]["tariff"] = $model->data->tariff;
}
if (null !== $model->data->tariffName) {
    $jsonData["data"]["tariffName"] = $model->data->tariffName;
}
if (null !== $model->data->pickuppointId) {
    $jsonData["data"]["pickuppointId"] = $model->data->pickuppointId;
}
if (null !== $model->data->pickuppointSchedule) {
    $jsonData["data"]["pickuppointSchedule"] = $model->data->pickuppointSchedule;
}
if (null !== $model->data->pickuppointPhone) {
    $jsonData["data"]["pickuppointPhone"] = $model->data->pickuppointPhone;
}
if (null !== $model->data->payerType) {
    $jsonData["data"]["payerType"] = $model->data->payerType;
}
if (null !== $model->data->statusComment) {
    $jsonData["data"]["statusComment"] = $model->data->statusComment;
}
if (null !== $model->data->cost) {
    $jsonData["data"]["cost"] = $model->data->cost;
}
if (null !== $model->data->minTerm) {
    $jsonData["data"]["minTerm"] = $model->data->minTerm;
}
if (null !== $model->data->maxTerm) {
    $jsonData["data"]["maxTerm"] = $model->data->maxTerm;
}
if (null !== $model->data->shipmentpointId) {
    $jsonData["data"]["shipmentpointId"] = $model->data->shipmentpointId;
}
if (null !== $model->data->shipmentpointName) {
    $jsonData["data"]["shipmentpointName"] = $model->data->shipmentpointName;
}
if (null !== $model->data->shipmentpointAddress) {
    $jsonData["data"]["shipmentpointAddress"] = $model->data->shipmentpointAddress;
}
if (null !== $model->data->shipmentpointSchedule) {
    $jsonData["data"]["shipmentpointSchedule"] = $model->data->shipmentpointSchedule;
}
if (null !== $model->data->shipmentpointPhone) {
    $jsonData["data"]["shipmentpointPhone"] = $model->data->shipmentpointPhone;
}
if (null !== $model->data->shipmentpointCoordinateLatitude) {
    $jsonData["data"]["shipmentpointCoordinateLatitude"] = $model->data->shipmentpointCoordinateLatitude;
}
if (null !== $model->data->shipmentpointCoordinateLongitude) {
    $jsonData["data"]["shipmentpointCoordinateLongitude"] = $model->data->shipmentpointCoordinateLongitude;
}
if (null !== $model->data->pickuppointName) {
    $jsonData["data"]["pickuppointName"] = $model->data->pickuppointName;
}
if (null !== $model->data->pickuppointCoordinateLatitude) {
    $jsonData["data"]["pickuppointCoordinateLatitude"] = $model->data->pickuppointCoordinateLatitude;
}
if (null !== $model->data->pickuppointCoordinateLongitude) {
    $jsonData["data"]["pickuppointCoordinateLongitude"] = $model->data->pickuppointCoordinateLongitude;
}
if (null !== $model->data->extraData) {
    $jsonData["data"]["extraData"] = [];
foreach (array_keys($model->data->extraData) as $index21) {
    $jsonData["data"]["extraData"] = $model->data->extraData;
}

}
if (null !== $model->data->packages) {
    $jsonData["data"]["packages"] = [];
foreach (array_keys($model->data->packages) as $index20) {
    $jsonData["data"]["packages"][$index20] = [];
if (null !== $model->data->packages[$index20]->packageId) {
    $jsonData["data"]["packages"][$index20]["packageId"] = $model->data->packages[$index20]->packageId;
}
if (null !== $model->data->packages[$index20]->weight) {
    $jsonData["data"]["packages"][$index20]["weight"] = $model->data->packages[$index20]->weight;
}
if (null !== $model->data->packages[$index20]->length) {
    $jsonData["data"]["packages"][$index20]["length"] = $model->data->packages[$index20]->length;
}
if (null !== $model->data->packages[$index20]->width) {
    $jsonData["data"]["packages"][$index20]["width"] = $model->data->packages[$index20]->width;
}
if (null !== $model->data->packages[$index20]->height) {
    $jsonData["data"]["packages"][$index20]["height"] = $model->data->packages[$index20]->height;
}
if (null !== $model->data->packages[$index20]->items) {
    $jsonData["data"]["packages"][$index20]["items"] = [];
foreach (array_keys($model->data->packages[$index20]->items) as $index39) {
    $jsonData["data"]["packages"][$index20]["items"][$index39] = [];
if (null !== $model->data->packages[$index20]->items[$index39]->orderProduct) {
    $jsonData["data"]["packages"][$index20]["items"][$index39]["orderProduct"] = [];
if (null !== $model->data->packages[$index20]->items[$index39]->orderProduct->id) {
    $jsonData["data"]["packages"][$index20]["items"][$index39]["orderProduct"]["id"] = $model->data->packages[$index20]->items[$index39]->orderProduct->id;
}
if (null !== $model->data->packages[$index20]->items[$index39]->orderProduct->externalId) {
    $jsonData["data"]["packages"][$index20]["items"][$index39]["orderProduct"]["externalId"] = $model->data->packages[$index20]->items[$index39]->orderProduct->externalId;
}
if (null !== $model->data->packages[$index20]->items[$index39]->orderProduct->externalIds) {
    $jsonData["data"]["packages"][$index20]["items"][$index39]["orderProduct"]["externalIds"] = [];
foreach (array_keys($model->data->packages[$index20]->items[$index39]->orderProduct->externalIds) as $index80) {
    $jsonData["data"]["packages"][$index20]["items"][$index39]["orderProduct"]["externalIds"][$index80] = [];
if (null !== $model->data->packages[$index20]->items[$index39]->orderProduct->externalIds[$index80]->code) {
    $jsonData["data"]["packages"][$index20]["items"][$index39]["orderProduct"]["externalIds"][$index80]["code"] = $model->data->packages[$index20]->items[$index39]->orderProduct->externalIds[$index80]->code;
}
if (null !== $model->data->packages[$index20]->items[$index39]->orderProduct->externalIds[$index80]->value) {
    $jsonData["data"]["packages"][$index20]["items"][$index39]["orderProduct"]["externalIds"][$index80]["value"] = $model->data->packages[$index20]->items[$index39]->orderProduct->externalIds[$index80]->value;
}

if (0 === \count($jsonData["data"]["packages"][$index20]["items"][$index39]["orderProduct"]["externalIds"][$index80])) {
    $jsonData["data"]["packages"][$index20]["items"][$index39]["orderProduct"]["externalIds"][$index80] = $emptyObject;
}

}

}

if (0 === \count($jsonData["data"]["packages"][$index20]["items"][$index39]["orderProduct"])) {
    $jsonData["data"]["packages"][$index20]["items"][$index39]["orderProduct"] = $emptyObject;
}

}
if (null !== $model->data->packages[$index20]->items[$index39]->quantity) {
    $jsonData["data"]["packages"][$index20]["items"][$index39]["quantity"] = $model->data->packages[$index20]->items[$index39]->quantity;
}

if (0 === \count($jsonData["data"]["packages"][$index20]["items"][$index39])) {
    $jsonData["data"]["packages"][$index20]["items"][$index39] = $emptyObject;
}

}

}

if (0 === \count($jsonData["data"]["packages"][$index20])) {
    $jsonData["data"]["packages"][$index20] = $emptyObject;
}

}

}
if (null !== $model->data->returnExternalId) {
    $jsonData["data"]["returnExternalId"] = $model->data->returnExternalId;
}
if (null !== $model->data->deliveryName) {
    $jsonData["data"]["deliveryName"] = $model->data->deliveryName;
}
if (null !== $model->data->price) {
    $jsonData["data"]["price"] = $model->data->price;
}
if (null !== $model->data->insurancePrice) {
    $jsonData["data"]["insurancePrice"] = $model->data->insurancePrice;
}
if (null !== $model->data->tariffType) {
    $jsonData["data"]["tariffType"] = $model->data->tariffType;
}
if (null !== $model->data->receiverCity) {
    $jsonData["data"]["receiverCity"] = $model->data->receiverCity;
}
if (null !== $model->data->services) {
    $jsonData["data"]["services"] = [];
foreach (array_keys($model->data->services) as $index20) {
    $jsonData["data"]["services"] = $model->data->services;
}

}
if (null !== $model->data->packageNumber) {
    $jsonData["data"]["packageNumber"] = $model->data->packageNumber;
}
if (null !== $model->data->comment) {
    $jsonData["data"]["comment"] = $model->data->comment;
}
if (null !== $model->data->deliveryCode) {
    $jsonData["data"]["deliveryCode"] = $model->data->deliveryCode;
}
if (null !== $model->data->notes) {
    $jsonData["data"]["notes"] = $model->data->notes;
}
if (null !== $model->data->id) {
    $jsonData["data"]["id"] = $model->data->id;
}
if (null !== $model->data->firstName) {
    $jsonData["data"]["firstName"] = $model->data->firstName;
}
if (null !== $model->data->lastName) {
    $jsonData["data"]["lastName"] = $model->data->lastName;
}
if (null !== $model->data->patronymic) {
    $jsonData["data"]["patronymic"] = $model->data->patronymic;
}
if (null !== $model->data->active) {
    $jsonData["data"]["active"] = $model->data->active;
}
if (null !== $model->data->email) {
    $jsonData["data"]["email"] = $model->data->email;
}
if (null !== $model->data->phone) {
    $jsonData["data"]["phone"] = [];
if (null !== $model->data->phone->number) {
    $jsonData["data"]["phone"]["number"] = $model->data->phone->number;
}

if (0 === \count($jsonData["data"]["phone"])) {
    $jsonData["data"]["phone"] = $emptyObject;
}

}
if (null !== $model->data->description) {
    $jsonData["data"]["description"] = $model->data->description;
}
if (null !== $model->data->courierId) {
    $jsonData["data"]["courierId"] = $model->data->courierId;
}
if (null !== $model->data->serviceType) {
    $jsonData["data"]["serviceType"] = $model->data->serviceType;
}
if (null !== $model->data->pickuppoint) {
    $jsonData["data"]["pickuppoint"] = $model->data->pickuppoint;
}
if (null !== $model->data->receiverWarehouseTypeRef) {
    $jsonData["data"]["receiverWarehouseTypeRef"] = $model->data->receiverWarehouseTypeRef;
}
if (null !== $model->data->statusName) {
    $jsonData["data"]["statusName"] = $model->data->statusName;
}
if (null !== $model->data->receiverCityRef) {
    $jsonData["data"]["receiverCityRef"] = $model->data->receiverCityRef;
}
if (null !== $model->data->receiverStreet) {
    $jsonData["data"]["receiverStreet"] = $model->data->receiverStreet;
}
if (null !== $model->data->receiverStreetRef) {
    $jsonData["data"]["receiverStreetRef"] = $model->data->receiverStreetRef;
}
if (null !== $model->data->seatsAmount) {
    $jsonData["data"]["seatsAmount"] = $model->data->seatsAmount;
}
if (null !== $model->data->cargoType) {
    $jsonData["data"]["cargoType"] = $model->data->cargoType;
}
if (null !== $model->data->cargoDescription) {
    $jsonData["data"]["cargoDescription"] = $model->data->cargoDescription;
}
if (null !== $model->data->cashPayerType) {
    $jsonData["data"]["cashPayerType"] = $model->data->cashPayerType;
}
if (null !== $model->data->paymentForm) {
    $jsonData["data"]["paymentForm"] = $model->data->paymentForm;
}
if (null !== $model->data->ownershipForm) {
    $jsonData["data"]["ownershipForm"] = $model->data->ownershipForm;
}
if (null !== $model->data->accompanyingDocument) {
    $jsonData["data"]["accompanyingDocument"] = $model->data->accompanyingDocument;
}
if (null !== $model->data->preferredDeliveryDate) {
    $jsonData["data"]["preferredDeliveryDate"] = $model->data->preferredDeliveryDate->format('Y-m-d H:i:s');;
}
if (null !== $model->data->timeInterval) {
    $jsonData["data"]["timeInterval"] = $model->data->timeInterval;
}
if (null !== $model->data->saturdayDelivery) {
    $jsonData["data"]["saturdayDelivery"] = $model->data->saturdayDelivery;
}
if (null !== $model->data->deliveryDate) {
    $jsonData["data"]["deliveryDate"] = $model->data->deliveryDate;
}
if (null !== $model->data->denieReason) {
    $jsonData["data"]["denieReason"] = $model->data->denieReason;
}
if (null !== $model->data->backwardDelivery) {
    $jsonData["data"]["backwardDelivery"] = $model->data->backwardDelivery;
}
if (null !== $model->data->backwardDeliveryCargoType) {
    $jsonData["data"]["backwardDeliveryCargoType"] = $model->data->backwardDeliveryCargoType;
}
if (null !== $model->data->backwardDeliveryPayerType) {
    $jsonData["data"]["backwardDeliveryPayerType"] = $model->data->backwardDeliveryPayerType;
}
if (null !== $model->data->backwardDeliveryRedeliveryString) {
    $jsonData["data"]["backwardDeliveryRedeliveryString"] = $model->data->backwardDeliveryRedeliveryString;
}
if (null !== $model->data->afterpaymentOnGoodsCost) {
    $jsonData["data"]["afterpaymentOnGoodsCost"] = $model->data->afterpaymentOnGoodsCost;
}
if (null !== $model->data->declaredValue) {
    $jsonData["data"]["declaredValue"] = $model->data->declaredValue;
}
if (null !== $model->data->sendDate) {
    $jsonData["data"]["sendDate"] = $model->data->sendDate->format('Y-m-d H:i:s');;
}
if (null !== $model->data->deliveryType) {
    $jsonData["data"]["deliveryType"] = $model->data->deliveryType;
}
if (null !== $model->data->pickupType) {
    $jsonData["data"]["pickupType"] = $model->data->pickupType;
}
if (null !== $model->data->pickuppointDescription) {
    $jsonData["data"]["pickuppointDescription"] = $model->data->pickuppointDescription;
}
if (null !== $model->data->placesCount) {
    $jsonData["data"]["placesCount"] = $model->data->placesCount;
}
if (null !== $model->data->service) {
    $jsonData["data"]["service"] = $model->data->service;
}

if (0 === \count($jsonData["data"])) {
    $jsonData["data"] = $emptyObject;
}

}
if (null !== $model->service) {
    $jsonData["service"] = [];
if (null !== $model->service->name) {
    $jsonData["service"]["name"] = $model->service->name;
}
if (null !== $model->service->code) {
    $jsonData["service"]["code"] = $model->service->code;
}
if (null !== $model->service->active) {
    $jsonData["service"]["active"] = $model->service->active;
}

if (0 === \count($jsonData["service"])) {
    $jsonData["service"] = $emptyObject;
}

}
if (null !== $model->cost) {
    $jsonData["cost"] = $model->cost;
}
if (null !== $model->netCost) {
    $jsonData["netCost"] = $model->netCost;
}
if (null !== $model->date) {
    $jsonData["date"] = $model->date->format('Y-m-d');;
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
if (null !== $model->address->id) {
    $jsonData["address"]["id"] = $model->address->id;
}
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
if (null !== $model->address->text) {
    $jsonData["address"]["text"] = $model->address->text;
}

if (0 === \count($jsonData["address"])) {
    $jsonData["address"] = $emptyObject;
}

}
if (null !== $model->vatRate) {
    $jsonData["vatRate"] = $model->vatRate;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
