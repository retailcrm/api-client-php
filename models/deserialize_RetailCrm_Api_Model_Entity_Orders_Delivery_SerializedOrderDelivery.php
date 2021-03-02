<?php

function deserialize_RetailCrm_Api_Model_Entity_Orders_Delivery_SerializedOrderDelivery(array $jsonData): RetailCrm\Api\Model\Entity\Orders\Delivery\SerializedOrderDelivery
{
    
$model = new RetailCrm\Api\Model\Entity\Orders\Delivery\SerializedOrderDelivery();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['integrationCode'])) {
    $model->integrationCode = $jsonData['integrationCode'];

}
if (isset($jsonData['data'])) {
    
$model->data = new RetailCrm\Api\Model\Entity\Orders\Delivery\DeliveryData();
if (isset($jsonData['data']['externalId'])) {
    $model->data->externalId = $jsonData['data']['externalId'];

}
if (isset($jsonData['data']['trackNumber'])) {
    $model->data->trackNumber = $jsonData['data']['trackNumber'];

}
if (isset($jsonData['data']['status'])) {
    $model->data->status = $jsonData['data']['status'];

}
if (isset($jsonData['data']['locked'])) {
    $model->data->locked = $jsonData['data']['locked'];

}
if (isset($jsonData['data']['pickuppointAddress'])) {
    $model->data->pickuppointAddress = $jsonData['data']['pickuppointAddress'];

}
if (isset($jsonData['data']['days'])) {
    $model->data->days = $jsonData['data']['days'];

}
if (isset($jsonData['data']['statusText'])) {
    $model->data->statusText = $jsonData['data']['statusText'];

}
if (isset($jsonData['data']['statusDate'])) {
    $model->data->statusDate = \DateTime::createFromFormat('Y-m-d', $jsonData['data']['statusDate']);

}
if (isset($jsonData['data']['tariff'])) {
    $model->data->tariff = $jsonData['data']['tariff'];

}
if (isset($jsonData['data']['tariffName'])) {
    $model->data->tariffName = $jsonData['data']['tariffName'];

}
if (isset($jsonData['data']['pickuppointId'])) {
    $model->data->pickuppointId = $jsonData['data']['pickuppointId'];

}
if (isset($jsonData['data']['pickuppointSchedule'])) {
    $model->data->pickuppointSchedule = $jsonData['data']['pickuppointSchedule'];

}
if (isset($jsonData['data']['pickuppointPhone'])) {
    $model->data->pickuppointPhone = $jsonData['data']['pickuppointPhone'];

}
if (isset($jsonData['data']['payerType'])) {
    $model->data->payerType = $jsonData['data']['payerType'];

}
if (isset($jsonData['data']['statusComment'])) {
    $model->data->statusComment = $jsonData['data']['statusComment'];

}
if (isset($jsonData['data']['cost'])) {
    $model->data->cost = (float) $jsonData['data']['cost'];

}
if (isset($jsonData['data']['minTerm'])) {
    $model->data->minTerm = $jsonData['data']['minTerm'];

}
if (isset($jsonData['data']['maxTerm'])) {
    $model->data->maxTerm = $jsonData['data']['maxTerm'];

}
if (isset($jsonData['data']['shipmentpointId'])) {
    $model->data->shipmentpointId = $jsonData['data']['shipmentpointId'];

}
if (isset($jsonData['data']['shipmentpointName'])) {
    $model->data->shipmentpointName = $jsonData['data']['shipmentpointName'];

}
if (isset($jsonData['data']['shipmentpointAddress'])) {
    $model->data->shipmentpointAddress = $jsonData['data']['shipmentpointAddress'];

}
if (isset($jsonData['data']['shipmentpointSchedule'])) {
    $model->data->shipmentpointSchedule = $jsonData['data']['shipmentpointSchedule'];

}
if (isset($jsonData['data']['shipmentpointPhone'])) {
    $model->data->shipmentpointPhone = $jsonData['data']['shipmentpointPhone'];

}
if (isset($jsonData['data']['shipmentpointCoordinateLatitude'])) {
    $model->data->shipmentpointCoordinateLatitude = $jsonData['data']['shipmentpointCoordinateLatitude'];

}
if (isset($jsonData['data']['shipmentpointCoordinateLongitude'])) {
    $model->data->shipmentpointCoordinateLongitude = $jsonData['data']['shipmentpointCoordinateLongitude'];

}
if (isset($jsonData['data']['pickuppointName'])) {
    $model->data->pickuppointName = $jsonData['data']['pickuppointName'];

}
if (isset($jsonData['data']['pickuppointCoordinateLatitude'])) {
    $model->data->pickuppointCoordinateLatitude = $jsonData['data']['pickuppointCoordinateLatitude'];

}
if (isset($jsonData['data']['pickuppointCoordinateLongitude'])) {
    $model->data->pickuppointCoordinateLongitude = $jsonData['data']['pickuppointCoordinateLongitude'];

}
if (isset($jsonData['data']['extraData'])) {
    $model->data->extraData = [];
foreach (array_keys($jsonData['data']['extraData']) as $index30) {
    $model->data->extraData[$index30] = $jsonData['data']['extraData'][$index30];

}

}
if (isset($jsonData['data']['packages'])) {
    $model->data->packages = [];
foreach (array_keys($jsonData['data']['packages']) as $index29) {
    
$model->data->packages[$index29] = new RetailCrm\Api\Model\Entity\Orders\Delivery\Package();
if (isset($jsonData['data']['packages'][$index29]['packageId'])) {
    $model->data->packages[$index29]->packageId = $jsonData['data']['packages'][$index29]['packageId'];

}
if (isset($jsonData['data']['packages'][$index29]['weight'])) {
    $model->data->packages[$index29]->weight = (float) $jsonData['data']['packages'][$index29]['weight'];

}
if (isset($jsonData['data']['packages'][$index29]['length'])) {
    $model->data->packages[$index29]->length = $jsonData['data']['packages'][$index29]['length'];

}
if (isset($jsonData['data']['packages'][$index29]['width'])) {
    $model->data->packages[$index29]->width = $jsonData['data']['packages'][$index29]['width'];

}
if (isset($jsonData['data']['packages'][$index29]['height'])) {
    $model->data->packages[$index29]->height = $jsonData['data']['packages'][$index29]['height'];

}
if (isset($jsonData['data']['packages'][$index29]['items'])) {
    $model->data->packages[$index29]->items = [];
foreach (array_keys($jsonData['data']['packages'][$index29]['items']) as $index48) {
    
$model->data->packages[$index29]->items[$index48] = new RetailCrm\Api\Model\Entity\Orders\Delivery\PackageItem();
if (isset($jsonData['data']['packages'][$index29]['items'][$index48]['orderProduct'])) {
    
$model->data->packages[$index29]->items[$index48]->orderProduct = new RetailCrm\Api\Model\Entity\Orders\Delivery\PackageItemOrderProduct();
if (isset($jsonData['data']['packages'][$index29]['items'][$index48]['orderProduct']['id'])) {
    $model->data->packages[$index29]->items[$index48]->orderProduct->id = $jsonData['data']['packages'][$index29]['items'][$index48]['orderProduct']['id'];

}
if (isset($jsonData['data']['packages'][$index29]['items'][$index48]['orderProduct']['externalId'])) {
    $model->data->packages[$index29]->items[$index48]->orderProduct->externalId = $jsonData['data']['packages'][$index29]['items'][$index48]['orderProduct']['externalId'];

}
if (isset($jsonData['data']['packages'][$index29]['items'][$index48]['orderProduct']['externalIds'])) {
    $model->data->packages[$index29]->items[$index48]->orderProduct->externalIds = [];
foreach (array_keys($jsonData['data']['packages'][$index29]['items'][$index48]['orderProduct']['externalIds']) as $index89) {
    
$model->data->packages[$index29]->items[$index48]->orderProduct->externalIds[$index89] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['data']['packages'][$index29]['items'][$index48]['orderProduct']['externalIds'][$index89]['code'])) {
    $model->data->packages[$index29]->items[$index48]->orderProduct->externalIds[$index89]->code = $jsonData['data']['packages'][$index29]['items'][$index48]['orderProduct']['externalIds'][$index89]['code'];

}
if (isset($jsonData['data']['packages'][$index29]['items'][$index48]['orderProduct']['externalIds'][$index89]['value'])) {
    $model->data->packages[$index29]->items[$index48]->orderProduct->externalIds[$index89]->value = $jsonData['data']['packages'][$index29]['items'][$index48]['orderProduct']['externalIds'][$index89]['value'];

}


}

}


}
if (isset($jsonData['data']['packages'][$index29]['items'][$index48]['quantity'])) {
    $model->data->packages[$index29]->items[$index48]->quantity = (float) $jsonData['data']['packages'][$index29]['items'][$index48]['quantity'];

}


}

}


}

}
if (isset($jsonData['data']['returnExternalId'])) {
    $model->data->returnExternalId = $jsonData['data']['returnExternalId'];

}
if (isset($jsonData['data']['deliveryName'])) {
    $model->data->deliveryName = $jsonData['data']['deliveryName'];

}
if (isset($jsonData['data']['price'])) {
    $model->data->price = (float) $jsonData['data']['price'];

}
if (isset($jsonData['data']['insurancePrice'])) {
    $model->data->insurancePrice = (float) $jsonData['data']['insurancePrice'];

}
if (isset($jsonData['data']['tariffType'])) {
    $model->data->tariffType = $jsonData['data']['tariffType'];

}
if (isset($jsonData['data']['receiverCity'])) {
    $model->data->receiverCity = $jsonData['data']['receiverCity'];

}
if (isset($jsonData['data']['services'])) {
    $model->data->services = [];
foreach (array_keys($jsonData['data']['services']) as $index29) {
    $model->data->services[$index29] = $jsonData['data']['services'][$index29];

}

}
if (isset($jsonData['data']['packageNumber'])) {
    $model->data->packageNumber = $jsonData['data']['packageNumber'];

}
if (isset($jsonData['data']['comment'])) {
    $model->data->comment = $jsonData['data']['comment'];

}
if (isset($jsonData['data']['deliveryCode'])) {
    $model->data->deliveryCode = $jsonData['data']['deliveryCode'];

}
if (isset($jsonData['data']['notes'])) {
    $model->data->notes = $jsonData['data']['notes'];

}
if (isset($jsonData['data']['id'])) {
    $model->data->id = $jsonData['data']['id'];

}
if (isset($jsonData['data']['firstName'])) {
    $model->data->firstName = $jsonData['data']['firstName'];

}
if (isset($jsonData['data']['lastName'])) {
    $model->data->lastName = $jsonData['data']['lastName'];

}
if (isset($jsonData['data']['patronymic'])) {
    $model->data->patronymic = $jsonData['data']['patronymic'];

}
if (isset($jsonData['data']['active'])) {
    $model->data->active = $jsonData['data']['active'];

}
if (isset($jsonData['data']['email'])) {
    $model->data->email = $jsonData['data']['email'];

}
if (isset($jsonData['data']['phone'])) {
    
$model->data->phone = new RetailCrm\Api\Model\Entity\Orders\Delivery\CourierPhone();
if (isset($jsonData['data']['phone']['number'])) {
    $model->data->phone->number = $jsonData['data']['phone']['number'];

}


}
if (isset($jsonData['data']['description'])) {
    $model->data->description = $jsonData['data']['description'];

}
if (isset($jsonData['data']['courierId'])) {
    $model->data->courierId = $jsonData['data']['courierId'];

}
if (isset($jsonData['data']['serviceType'])) {
    $model->data->serviceType = $jsonData['data']['serviceType'];

}
if (isset($jsonData['data']['pickuppoint'])) {
    $model->data->pickuppoint = $jsonData['data']['pickuppoint'];

}
if (isset($jsonData['data']['receiverWarehouseTypeRef'])) {
    $model->data->receiverWarehouseTypeRef = $jsonData['data']['receiverWarehouseTypeRef'];

}
if (isset($jsonData['data']['statusName'])) {
    $model->data->statusName = $jsonData['data']['statusName'];

}
if (isset($jsonData['data']['receiverCityRef'])) {
    $model->data->receiverCityRef = $jsonData['data']['receiverCityRef'];

}
if (isset($jsonData['data']['receiverStreet'])) {
    $model->data->receiverStreet = $jsonData['data']['receiverStreet'];

}
if (isset($jsonData['data']['receiverStreetRef'])) {
    $model->data->receiverStreetRef = $jsonData['data']['receiverStreetRef'];

}
if (isset($jsonData['data']['seatsAmount'])) {
    $model->data->seatsAmount = $jsonData['data']['seatsAmount'];

}
if (isset($jsonData['data']['cargoType'])) {
    $model->data->cargoType = $jsonData['data']['cargoType'];

}
if (isset($jsonData['data']['cargoDescription'])) {
    $model->data->cargoDescription = $jsonData['data']['cargoDescription'];

}
if (isset($jsonData['data']['cashPayerType'])) {
    $model->data->cashPayerType = $jsonData['data']['cashPayerType'];

}
if (isset($jsonData['data']['paymentForm'])) {
    $model->data->paymentForm = $jsonData['data']['paymentForm'];

}
if (isset($jsonData['data']['ownershipForm'])) {
    $model->data->ownershipForm = $jsonData['data']['ownershipForm'];

}
if (isset($jsonData['data']['accompanyingDocument'])) {
    $model->data->accompanyingDocument = $jsonData['data']['accompanyingDocument'];

}
if (isset($jsonData['data']['preferredDeliveryDate'])) {
    $model->data->preferredDeliveryDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['data']['preferredDeliveryDate']);

}
if (isset($jsonData['data']['timeInterval'])) {
    $model->data->timeInterval = $jsonData['data']['timeInterval'];

}
if (isset($jsonData['data']['saturdayDelivery'])) {
    $model->data->saturdayDelivery = $jsonData['data']['saturdayDelivery'];

}
if (isset($jsonData['data']['deliveryDate'])) {
    $model->data->deliveryDate = $jsonData['data']['deliveryDate'];

}
if (isset($jsonData['data']['denieReason'])) {
    $model->data->denieReason = $jsonData['data']['denieReason'];

}
if (isset($jsonData['data']['backwardDelivery'])) {
    $model->data->backwardDelivery = $jsonData['data']['backwardDelivery'];

}
if (isset($jsonData['data']['backwardDeliveryCargoType'])) {
    $model->data->backwardDeliveryCargoType = $jsonData['data']['backwardDeliveryCargoType'];

}
if (isset($jsonData['data']['backwardDeliveryPayerType'])) {
    $model->data->backwardDeliveryPayerType = $jsonData['data']['backwardDeliveryPayerType'];

}
if (isset($jsonData['data']['backwardDeliveryRedeliveryString'])) {
    $model->data->backwardDeliveryRedeliveryString = $jsonData['data']['backwardDeliveryRedeliveryString'];

}
if (isset($jsonData['data']['afterpaymentOnGoodsCost'])) {
    $model->data->afterpaymentOnGoodsCost = (float) $jsonData['data']['afterpaymentOnGoodsCost'];

}
if (isset($jsonData['data']['declaredValue'])) {
    $model->data->declaredValue = (float) $jsonData['data']['declaredValue'];

}
if (isset($jsonData['data']['sendDate'])) {
    $model->data->sendDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['data']['sendDate']);

}
if (isset($jsonData['data']['deliveryType'])) {
    $model->data->deliveryType = $jsonData['data']['deliveryType'];

}
if (isset($jsonData['data']['pickupType'])) {
    $model->data->pickupType = $jsonData['data']['pickupType'];

}
if (isset($jsonData['data']['pickuppointDescription'])) {
    $model->data->pickuppointDescription = $jsonData['data']['pickuppointDescription'];

}
if (isset($jsonData['data']['placesCount'])) {
    $model->data->placesCount = $jsonData['data']['placesCount'];

}
if (isset($jsonData['data']['service'])) {
    $model->data->service = $jsonData['data']['service'];

}


}
if (isset($jsonData['service'])) {
    
$model->service = new RetailCrm\Api\Model\Entity\Orders\Delivery\SerializedDeliveryService();
if (isset($jsonData['service']['name'])) {
    $model->service->name = $jsonData['service']['name'];

}
if (isset($jsonData['service']['code'])) {
    $model->service->code = $jsonData['service']['code'];

}
if (isset($jsonData['service']['active'])) {
    $model->service->active = $jsonData['service']['active'];

}


}
if (isset($jsonData['cost'])) {
    $model->cost = (float) $jsonData['cost'];

}
if (isset($jsonData['netCost'])) {
    $model->netCost = (float) $jsonData['netCost'];

}
if (isset($jsonData['date'])) {
    $model->date = \DateTime::createFromFormat('Y-m-d', $jsonData['date']);

}
if (isset($jsonData['time'])) {
    
$model->time = new RetailCrm\Api\Model\Entity\Delivery\TimeInterval();
if (isset($jsonData['time']['from'])) {
    $model->time->from = \DateTime::createFromFormat('H:i', $jsonData['time']['from']);

}
if (isset($jsonData['time']['to'])) {
    $model->time->to = \DateTime::createFromFormat('H:i', $jsonData['time']['to']);

}
if (isset($jsonData['time']['custom'])) {
    $model->time->custom = $jsonData['time']['custom'];

}


}
if (isset($jsonData['address'])) {
    
$model->address = new RetailCrm\Api\Model\Entity\Orders\Delivery\OrderDeliveryAddress();
if (isset($jsonData['address']['id'])) {
    $model->address->id = $jsonData['address']['id'];

}
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
if (isset($jsonData['address']['text'])) {
    $model->address->text = $jsonData['address']['text'];

}
if (isset($jsonData['address']['notes'])) {
    $model->address->notes = $jsonData['address']['notes'];

}


}
if (isset($jsonData['vatRate'])) {
    $model->vatRate = $jsonData['vatRate'];

}



    return $model;
}
