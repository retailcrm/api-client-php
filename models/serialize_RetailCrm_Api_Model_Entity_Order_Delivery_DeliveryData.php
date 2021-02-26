<?php

function serialize_RetailCrm_Api_Model_Entity_Order_Delivery_DeliveryData(RetailCrm\Api\Model\Entity\Order\Delivery\DeliveryData $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->externalId) {
    $jsonData["externalId"] = $model->externalId;
}
if (null !== $model->trackNumber) {
    $jsonData["trackNumber"] = $model->trackNumber;
}
if (null !== $model->status) {
    $jsonData["status"] = $model->status;
}
if (null !== $model->locked) {
    $jsonData["locked"] = $model->locked;
}
if (null !== $model->pickuppointAddress) {
    $jsonData["pickuppointAddress"] = $model->pickuppointAddress;
}
if (null !== $model->days) {
    $jsonData["days"] = $model->days;
}
if (null !== $model->statusText) {
    $jsonData["statusText"] = $model->statusText;
}
if (null !== $model->statusDate) {
    $jsonData["statusDate"] = $model->statusDate->format('Y-m-d');;
}
if (null !== $model->tariff) {
    $jsonData["tariff"] = $model->tariff;
}
if (null !== $model->tariffName) {
    $jsonData["tariffName"] = $model->tariffName;
}
if (null !== $model->pickuppointId) {
    $jsonData["pickuppointId"] = $model->pickuppointId;
}
if (null !== $model->pickuppointSchedule) {
    $jsonData["pickuppointSchedule"] = $model->pickuppointSchedule;
}
if (null !== $model->pickuppointPhone) {
    $jsonData["pickuppointPhone"] = $model->pickuppointPhone;
}
if (null !== $model->payerType) {
    $jsonData["payerType"] = $model->payerType;
}
if (null !== $model->statusComment) {
    $jsonData["statusComment"] = $model->statusComment;
}
if (null !== $model->cost) {
    $jsonData["cost"] = $model->cost;
}
if (null !== $model->minTerm) {
    $jsonData["minTerm"] = $model->minTerm;
}
if (null !== $model->maxTerm) {
    $jsonData["maxTerm"] = $model->maxTerm;
}
if (null !== $model->shipmentpointId) {
    $jsonData["shipmentpointId"] = $model->shipmentpointId;
}
if (null !== $model->shipmentpointName) {
    $jsonData["shipmentpointName"] = $model->shipmentpointName;
}
if (null !== $model->shipmentpointAddress) {
    $jsonData["shipmentpointAddress"] = $model->shipmentpointAddress;
}
if (null !== $model->shipmentpointSchedule) {
    $jsonData["shipmentpointSchedule"] = $model->shipmentpointSchedule;
}
if (null !== $model->shipmentpointPhone) {
    $jsonData["shipmentpointPhone"] = $model->shipmentpointPhone;
}
if (null !== $model->shipmentpointCoordinateLatitude) {
    $jsonData["shipmentpointCoordinateLatitude"] = $model->shipmentpointCoordinateLatitude;
}
if (null !== $model->shipmentpointCoordinateLongitude) {
    $jsonData["shipmentpointCoordinateLongitude"] = $model->shipmentpointCoordinateLongitude;
}
if (null !== $model->pickuppointName) {
    $jsonData["pickuppointName"] = $model->pickuppointName;
}
if (null !== $model->pickuppointCoordinateLatitude) {
    $jsonData["pickuppointCoordinateLatitude"] = $model->pickuppointCoordinateLatitude;
}
if (null !== $model->pickuppointCoordinateLongitude) {
    $jsonData["pickuppointCoordinateLongitude"] = $model->pickuppointCoordinateLongitude;
}
if (null !== $model->extraData) {
    $jsonData["extraData"] = [];
foreach (array_keys($model->extraData) as $index13) {
    $jsonData["extraData"] = $model->extraData;
}

}
if (null !== $model->packages) {
    $jsonData["packages"] = [];
foreach (array_keys($model->packages) as $index12) {
    $jsonData["packages"][$index12] = [];
if (null !== $model->packages[$index12]->packageId) {
    $jsonData["packages"][$index12]["packageId"] = $model->packages[$index12]->packageId;
}
if (null !== $model->packages[$index12]->weight) {
    $jsonData["packages"][$index12]["weight"] = $model->packages[$index12]->weight;
}
if (null !== $model->packages[$index12]->length) {
    $jsonData["packages"][$index12]["length"] = $model->packages[$index12]->length;
}
if (null !== $model->packages[$index12]->width) {
    $jsonData["packages"][$index12]["width"] = $model->packages[$index12]->width;
}
if (null !== $model->packages[$index12]->height) {
    $jsonData["packages"][$index12]["height"] = $model->packages[$index12]->height;
}
if (null !== $model->packages[$index12]->items) {
    $jsonData["packages"][$index12]["items"] = [];
foreach (array_keys($model->packages[$index12]->items) as $index31) {
    $jsonData["packages"][$index12]["items"][$index31] = [];
if (null !== $model->packages[$index12]->items[$index31]->orderProduct) {
    $jsonData["packages"][$index12]["items"][$index31]["orderProduct"] = [];
if (null !== $model->packages[$index12]->items[$index31]->orderProduct->id) {
    $jsonData["packages"][$index12]["items"][$index31]["orderProduct"]["id"] = $model->packages[$index12]->items[$index31]->orderProduct->id;
}
if (null !== $model->packages[$index12]->items[$index31]->orderProduct->externalId) {
    $jsonData["packages"][$index12]["items"][$index31]["orderProduct"]["externalId"] = $model->packages[$index12]->items[$index31]->orderProduct->externalId;
}
if (null !== $model->packages[$index12]->items[$index31]->orderProduct->externalIds) {
    $jsonData["packages"][$index12]["items"][$index31]["orderProduct"]["externalIds"] = [];
foreach (array_keys($model->packages[$index12]->items[$index31]->orderProduct->externalIds) as $index72) {
    $jsonData["packages"][$index12]["items"][$index31]["orderProduct"]["externalIds"][$index72] = [];
if (null !== $model->packages[$index12]->items[$index31]->orderProduct->externalIds[$index72]->code) {
    $jsonData["packages"][$index12]["items"][$index31]["orderProduct"]["externalIds"][$index72]["code"] = $model->packages[$index12]->items[$index31]->orderProduct->externalIds[$index72]->code;
}
if (null !== $model->packages[$index12]->items[$index31]->orderProduct->externalIds[$index72]->value) {
    $jsonData["packages"][$index12]["items"][$index31]["orderProduct"]["externalIds"][$index72]["value"] = $model->packages[$index12]->items[$index31]->orderProduct->externalIds[$index72]->value;
}

if (0 === \count($jsonData["packages"][$index12]["items"][$index31]["orderProduct"]["externalIds"][$index72])) {
    $jsonData["packages"][$index12]["items"][$index31]["orderProduct"]["externalIds"][$index72] = $emptyObject;
}

}

}

if (0 === \count($jsonData["packages"][$index12]["items"][$index31]["orderProduct"])) {
    $jsonData["packages"][$index12]["items"][$index31]["orderProduct"] = $emptyObject;
}

}
if (null !== $model->packages[$index12]->items[$index31]->quantity) {
    $jsonData["packages"][$index12]["items"][$index31]["quantity"] = $model->packages[$index12]->items[$index31]->quantity;
}

if (0 === \count($jsonData["packages"][$index12]["items"][$index31])) {
    $jsonData["packages"][$index12]["items"][$index31] = $emptyObject;
}

}

}

if (0 === \count($jsonData["packages"][$index12])) {
    $jsonData["packages"][$index12] = $emptyObject;
}

}

}
if (null !== $model->returnExternalId) {
    $jsonData["returnExternalId"] = $model->returnExternalId;
}
if (null !== $model->deliveryName) {
    $jsonData["deliveryName"] = $model->deliveryName;
}
if (null !== $model->price) {
    $jsonData["price"] = $model->price;
}
if (null !== $model->insurancePrice) {
    $jsonData["insurancePrice"] = $model->insurancePrice;
}
if (null !== $model->tariffType) {
    $jsonData["tariffType"] = $model->tariffType;
}
if (null !== $model->receiverCity) {
    $jsonData["receiverCity"] = $model->receiverCity;
}
if (null !== $model->services) {
    $jsonData["services"] = [];
foreach (array_keys($model->services) as $index12) {
    $jsonData["services"] = $model->services;
}

}
if (null !== $model->packageNumber) {
    $jsonData["packageNumber"] = $model->packageNumber;
}
if (null !== $model->comment) {
    $jsonData["comment"] = $model->comment;
}
if (null !== $model->deliveryCode) {
    $jsonData["deliveryCode"] = $model->deliveryCode;
}
if (null !== $model->notes) {
    $jsonData["notes"] = $model->notes;
}
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->firstName) {
    $jsonData["firstName"] = $model->firstName;
}
if (null !== $model->lastName) {
    $jsonData["lastName"] = $model->lastName;
}
if (null !== $model->patronymic) {
    $jsonData["patronymic"] = $model->patronymic;
}
if (null !== $model->active) {
    $jsonData["active"] = $model->active;
}
if (null !== $model->email) {
    $jsonData["email"] = $model->email;
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
if (null !== $model->description) {
    $jsonData["description"] = $model->description;
}
if (null !== $model->courierId) {
    $jsonData["courierId"] = $model->courierId;
}
if (null !== $model->serviceType) {
    $jsonData["serviceType"] = $model->serviceType;
}
if (null !== $model->pickuppoint) {
    $jsonData["pickuppoint"] = $model->pickuppoint;
}
if (null !== $model->receiverWarehouseTypeRef) {
    $jsonData["receiverWarehouseTypeRef"] = $model->receiverWarehouseTypeRef;
}
if (null !== $model->statusName) {
    $jsonData["statusName"] = $model->statusName;
}
if (null !== $model->receiverCityRef) {
    $jsonData["receiverCityRef"] = $model->receiverCityRef;
}
if (null !== $model->receiverStreet) {
    $jsonData["receiverStreet"] = $model->receiverStreet;
}
if (null !== $model->receiverStreetRef) {
    $jsonData["receiverStreetRef"] = $model->receiverStreetRef;
}
if (null !== $model->seatsAmount) {
    $jsonData["seatsAmount"] = $model->seatsAmount;
}
if (null !== $model->cargoType) {
    $jsonData["cargoType"] = $model->cargoType;
}
if (null !== $model->cargoDescription) {
    $jsonData["cargoDescription"] = $model->cargoDescription;
}
if (null !== $model->cashPayerType) {
    $jsonData["cashPayerType"] = $model->cashPayerType;
}
if (null !== $model->paymentForm) {
    $jsonData["paymentForm"] = $model->paymentForm;
}
if (null !== $model->ownershipForm) {
    $jsonData["ownershipForm"] = $model->ownershipForm;
}
if (null !== $model->accompanyingDocument) {
    $jsonData["accompanyingDocument"] = $model->accompanyingDocument;
}
if (null !== $model->preferredDeliveryDate) {
    $jsonData["preferredDeliveryDate"] = $model->preferredDeliveryDate->format('Y-m-d H:i:s');;
}
if (null !== $model->timeInterval) {
    $jsonData["timeInterval"] = $model->timeInterval;
}
if (null !== $model->saturdayDelivery) {
    $jsonData["saturdayDelivery"] = $model->saturdayDelivery;
}
if (null !== $model->deliveryDate) {
    $jsonData["deliveryDate"] = $model->deliveryDate;
}
if (null !== $model->denieReason) {
    $jsonData["denieReason"] = $model->denieReason;
}
if (null !== $model->backwardDelivery) {
    $jsonData["backwardDelivery"] = $model->backwardDelivery;
}
if (null !== $model->backwardDeliveryCargoType) {
    $jsonData["backwardDeliveryCargoType"] = $model->backwardDeliveryCargoType;
}
if (null !== $model->backwardDeliveryPayerType) {
    $jsonData["backwardDeliveryPayerType"] = $model->backwardDeliveryPayerType;
}
if (null !== $model->backwardDeliveryRedeliveryString) {
    $jsonData["backwardDeliveryRedeliveryString"] = $model->backwardDeliveryRedeliveryString;
}
if (null !== $model->afterpaymentOnGoodsCost) {
    $jsonData["afterpaymentOnGoodsCost"] = $model->afterpaymentOnGoodsCost;
}
if (null !== $model->declaredValue) {
    $jsonData["declaredValue"] = $model->declaredValue;
}
if (null !== $model->sendDate) {
    $jsonData["sendDate"] = $model->sendDate->format('Y-m-d H:i:s');;
}
if (null !== $model->deliveryType) {
    $jsonData["deliveryType"] = $model->deliveryType;
}
if (null !== $model->pickupType) {
    $jsonData["pickupType"] = $model->pickupType;
}
if (null !== $model->pickuppointDescription) {
    $jsonData["pickuppointDescription"] = $model->pickuppointDescription;
}
if (null !== $model->placesCount) {
    $jsonData["placesCount"] = $model->placesCount;
}
if (null !== $model->service) {
    $jsonData["service"] = $model->service;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
