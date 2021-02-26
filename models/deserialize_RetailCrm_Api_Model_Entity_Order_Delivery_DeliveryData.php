<?php

function deserialize_RetailCrm_Api_Model_Entity_Order_Delivery_DeliveryData(array $jsonData): RetailCrm\Api\Model\Entity\Order\Delivery\DeliveryData
{
    
$model = new RetailCrm\Api\Model\Entity\Order\Delivery\DeliveryData();
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['trackNumber'])) {
    $model->trackNumber = $jsonData['trackNumber'];

}
if (isset($jsonData['status'])) {
    $model->status = $jsonData['status'];

}
if (isset($jsonData['locked'])) {
    $model->locked = $jsonData['locked'];

}
if (isset($jsonData['pickuppointAddress'])) {
    $model->pickuppointAddress = $jsonData['pickuppointAddress'];

}
if (isset($jsonData['days'])) {
    $model->days = $jsonData['days'];

}
if (isset($jsonData['statusText'])) {
    $model->statusText = $jsonData['statusText'];

}
if (isset($jsonData['statusDate'])) {
    $model->statusDate = \DateTime::createFromFormat('Y-m-d', $jsonData['statusDate']);

}
if (isset($jsonData['tariff'])) {
    $model->tariff = $jsonData['tariff'];

}
if (isset($jsonData['tariffName'])) {
    $model->tariffName = $jsonData['tariffName'];

}
if (isset($jsonData['pickuppointId'])) {
    $model->pickuppointId = $jsonData['pickuppointId'];

}
if (isset($jsonData['pickuppointSchedule'])) {
    $model->pickuppointSchedule = $jsonData['pickuppointSchedule'];

}
if (isset($jsonData['pickuppointPhone'])) {
    $model->pickuppointPhone = $jsonData['pickuppointPhone'];

}
if (isset($jsonData['payerType'])) {
    $model->payerType = $jsonData['payerType'];

}
if (isset($jsonData['statusComment'])) {
    $model->statusComment = $jsonData['statusComment'];

}
if (isset($jsonData['cost'])) {
    $model->cost = (float) $jsonData['cost'];

}
if (isset($jsonData['minTerm'])) {
    $model->minTerm = $jsonData['minTerm'];

}
if (isset($jsonData['maxTerm'])) {
    $model->maxTerm = $jsonData['maxTerm'];

}
if (isset($jsonData['shipmentpointId'])) {
    $model->shipmentpointId = $jsonData['shipmentpointId'];

}
if (isset($jsonData['shipmentpointName'])) {
    $model->shipmentpointName = $jsonData['shipmentpointName'];

}
if (isset($jsonData['shipmentpointAddress'])) {
    $model->shipmentpointAddress = $jsonData['shipmentpointAddress'];

}
if (isset($jsonData['shipmentpointSchedule'])) {
    $model->shipmentpointSchedule = $jsonData['shipmentpointSchedule'];

}
if (isset($jsonData['shipmentpointPhone'])) {
    $model->shipmentpointPhone = $jsonData['shipmentpointPhone'];

}
if (isset($jsonData['shipmentpointCoordinateLatitude'])) {
    $model->shipmentpointCoordinateLatitude = $jsonData['shipmentpointCoordinateLatitude'];

}
if (isset($jsonData['shipmentpointCoordinateLongitude'])) {
    $model->shipmentpointCoordinateLongitude = $jsonData['shipmentpointCoordinateLongitude'];

}
if (isset($jsonData['pickuppointName'])) {
    $model->pickuppointName = $jsonData['pickuppointName'];

}
if (isset($jsonData['pickuppointCoordinateLatitude'])) {
    $model->pickuppointCoordinateLatitude = $jsonData['pickuppointCoordinateLatitude'];

}
if (isset($jsonData['pickuppointCoordinateLongitude'])) {
    $model->pickuppointCoordinateLongitude = $jsonData['pickuppointCoordinateLongitude'];

}
if (isset($jsonData['extraData'])) {
    $model->extraData = [];
foreach (array_keys($jsonData['extraData']) as $index22) {
    $model->extraData[$index22] = $jsonData['extraData'][$index22];

}

}
if (isset($jsonData['packages'])) {
    $model->packages = [];
foreach (array_keys($jsonData['packages']) as $index21) {
    
$model->packages[$index21] = new RetailCrm\Api\Model\Entity\Order\Delivery\Package();
if (isset($jsonData['packages'][$index21]['packageId'])) {
    $model->packages[$index21]->packageId = $jsonData['packages'][$index21]['packageId'];

}
if (isset($jsonData['packages'][$index21]['weight'])) {
    $model->packages[$index21]->weight = (float) $jsonData['packages'][$index21]['weight'];

}
if (isset($jsonData['packages'][$index21]['length'])) {
    $model->packages[$index21]->length = $jsonData['packages'][$index21]['length'];

}
if (isset($jsonData['packages'][$index21]['width'])) {
    $model->packages[$index21]->width = $jsonData['packages'][$index21]['width'];

}
if (isset($jsonData['packages'][$index21]['height'])) {
    $model->packages[$index21]->height = $jsonData['packages'][$index21]['height'];

}
if (isset($jsonData['packages'][$index21]['items'])) {
    $model->packages[$index21]->items = [];
foreach (array_keys($jsonData['packages'][$index21]['items']) as $index40) {
    
$model->packages[$index21]->items[$index40] = new RetailCrm\Api\Model\Entity\Order\Delivery\PackageItem();
if (isset($jsonData['packages'][$index21]['items'][$index40]['orderProduct'])) {
    
$model->packages[$index21]->items[$index40]->orderProduct = new RetailCrm\Api\Model\Entity\Order\Delivery\PackageItemOrderProduct();
if (isset($jsonData['packages'][$index21]['items'][$index40]['orderProduct']['id'])) {
    $model->packages[$index21]->items[$index40]->orderProduct->id = $jsonData['packages'][$index21]['items'][$index40]['orderProduct']['id'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['orderProduct']['externalId'])) {
    $model->packages[$index21]->items[$index40]->orderProduct->externalId = $jsonData['packages'][$index21]['items'][$index40]['orderProduct']['externalId'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['orderProduct']['externalIds'])) {
    $model->packages[$index21]->items[$index40]->orderProduct->externalIds = [];
foreach (array_keys($jsonData['packages'][$index21]['items'][$index40]['orderProduct']['externalIds']) as $index81) {
    
$model->packages[$index21]->items[$index40]->orderProduct->externalIds[$index81] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['packages'][$index21]['items'][$index40]['orderProduct']['externalIds'][$index81]['code'])) {
    $model->packages[$index21]->items[$index40]->orderProduct->externalIds[$index81]->code = $jsonData['packages'][$index21]['items'][$index40]['orderProduct']['externalIds'][$index81]['code'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['orderProduct']['externalIds'][$index81]['value'])) {
    $model->packages[$index21]->items[$index40]->orderProduct->externalIds[$index81]->value = $jsonData['packages'][$index21]['items'][$index40]['orderProduct']['externalIds'][$index81]['value'];

}


}

}


}
if (isset($jsonData['packages'][$index21]['items'][$index40]['quantity'])) {
    $model->packages[$index21]->items[$index40]->quantity = (float) $jsonData['packages'][$index21]['items'][$index40]['quantity'];

}


}

}


}

}
if (isset($jsonData['returnExternalId'])) {
    $model->returnExternalId = $jsonData['returnExternalId'];

}
if (isset($jsonData['deliveryName'])) {
    $model->deliveryName = $jsonData['deliveryName'];

}
if (isset($jsonData['price'])) {
    $model->price = (float) $jsonData['price'];

}
if (isset($jsonData['insurancePrice'])) {
    $model->insurancePrice = (float) $jsonData['insurancePrice'];

}
if (isset($jsonData['tariffType'])) {
    $model->tariffType = $jsonData['tariffType'];

}
if (isset($jsonData['receiverCity'])) {
    $model->receiverCity = $jsonData['receiverCity'];

}
if (isset($jsonData['services'])) {
    $model->services = [];
foreach (array_keys($jsonData['services']) as $index21) {
    $model->services[$index21] = $jsonData['services'][$index21];

}

}
if (isset($jsonData['packageNumber'])) {
    $model->packageNumber = $jsonData['packageNumber'];

}
if (isset($jsonData['comment'])) {
    $model->comment = $jsonData['comment'];

}
if (isset($jsonData['deliveryCode'])) {
    $model->deliveryCode = $jsonData['deliveryCode'];

}
if (isset($jsonData['notes'])) {
    $model->notes = $jsonData['notes'];

}
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['firstName'])) {
    $model->firstName = $jsonData['firstName'];

}
if (isset($jsonData['lastName'])) {
    $model->lastName = $jsonData['lastName'];

}
if (isset($jsonData['patronymic'])) {
    $model->patronymic = $jsonData['patronymic'];

}
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

}
if (isset($jsonData['email'])) {
    $model->email = $jsonData['email'];

}
if (isset($jsonData['phone'])) {
    
$model->phone = new RetailCrm\Api\Model\Entity\Order\Delivery\CourierPhone();
if (isset($jsonData['phone']['number'])) {
    $model->phone->number = $jsonData['phone']['number'];

}


}
if (isset($jsonData['description'])) {
    $model->description = $jsonData['description'];

}
if (isset($jsonData['courierId'])) {
    $model->courierId = $jsonData['courierId'];

}
if (isset($jsonData['serviceType'])) {
    $model->serviceType = $jsonData['serviceType'];

}
if (isset($jsonData['pickuppoint'])) {
    $model->pickuppoint = $jsonData['pickuppoint'];

}
if (isset($jsonData['receiverWarehouseTypeRef'])) {
    $model->receiverWarehouseTypeRef = $jsonData['receiverWarehouseTypeRef'];

}
if (isset($jsonData['statusName'])) {
    $model->statusName = $jsonData['statusName'];

}
if (isset($jsonData['receiverCityRef'])) {
    $model->receiverCityRef = $jsonData['receiverCityRef'];

}
if (isset($jsonData['receiverStreet'])) {
    $model->receiverStreet = $jsonData['receiverStreet'];

}
if (isset($jsonData['receiverStreetRef'])) {
    $model->receiverStreetRef = $jsonData['receiverStreetRef'];

}
if (isset($jsonData['seatsAmount'])) {
    $model->seatsAmount = $jsonData['seatsAmount'];

}
if (isset($jsonData['cargoType'])) {
    $model->cargoType = $jsonData['cargoType'];

}
if (isset($jsonData['cargoDescription'])) {
    $model->cargoDescription = $jsonData['cargoDescription'];

}
if (isset($jsonData['cashPayerType'])) {
    $model->cashPayerType = $jsonData['cashPayerType'];

}
if (isset($jsonData['paymentForm'])) {
    $model->paymentForm = $jsonData['paymentForm'];

}
if (isset($jsonData['ownershipForm'])) {
    $model->ownershipForm = $jsonData['ownershipForm'];

}
if (isset($jsonData['accompanyingDocument'])) {
    $model->accompanyingDocument = $jsonData['accompanyingDocument'];

}
if (isset($jsonData['preferredDeliveryDate'])) {
    $model->preferredDeliveryDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['preferredDeliveryDate']);

}
if (isset($jsonData['timeInterval'])) {
    $model->timeInterval = $jsonData['timeInterval'];

}
if (isset($jsonData['saturdayDelivery'])) {
    $model->saturdayDelivery = $jsonData['saturdayDelivery'];

}
if (isset($jsonData['deliveryDate'])) {
    $model->deliveryDate = $jsonData['deliveryDate'];

}
if (isset($jsonData['denieReason'])) {
    $model->denieReason = $jsonData['denieReason'];

}
if (isset($jsonData['backwardDelivery'])) {
    $model->backwardDelivery = $jsonData['backwardDelivery'];

}
if (isset($jsonData['backwardDeliveryCargoType'])) {
    $model->backwardDeliveryCargoType = $jsonData['backwardDeliveryCargoType'];

}
if (isset($jsonData['backwardDeliveryPayerType'])) {
    $model->backwardDeliveryPayerType = $jsonData['backwardDeliveryPayerType'];

}
if (isset($jsonData['backwardDeliveryRedeliveryString'])) {
    $model->backwardDeliveryRedeliveryString = $jsonData['backwardDeliveryRedeliveryString'];

}
if (isset($jsonData['afterpaymentOnGoodsCost'])) {
    $model->afterpaymentOnGoodsCost = (float) $jsonData['afterpaymentOnGoodsCost'];

}
if (isset($jsonData['declaredValue'])) {
    $model->declaredValue = (float) $jsonData['declaredValue'];

}
if (isset($jsonData['sendDate'])) {
    $model->sendDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['sendDate']);

}
if (isset($jsonData['deliveryType'])) {
    $model->deliveryType = $jsonData['deliveryType'];

}
if (isset($jsonData['pickupType'])) {
    $model->pickupType = $jsonData['pickupType'];

}
if (isset($jsonData['pickuppointDescription'])) {
    $model->pickuppointDescription = $jsonData['pickuppointDescription'];

}
if (isset($jsonData['placesCount'])) {
    $model->placesCount = $jsonData['placesCount'];

}
if (isset($jsonData['service'])) {
    $model->service = $jsonData['service'];

}



    return $model;
}
