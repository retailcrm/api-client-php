<?php

function serialize_RetailCrm_Api_Model_Response_Telephony_ManagerResponse(RetailCrm\Api\Model\Response\Telephony\ManagerResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->manager) {
    $jsonData["manager"] = [];
if (null !== $model->manager->id) {
    $jsonData["manager"]["id"] = $model->manager->id;
}
if (null !== $model->manager->firstName) {
    $jsonData["manager"]["firstName"] = $model->manager->firstName;
}
if (null !== $model->manager->lastName) {
    $jsonData["manager"]["lastName"] = $model->manager->lastName;
}
if (null !== $model->manager->patronymic) {
    $jsonData["manager"]["patronymic"] = $model->manager->patronymic;
}
if (null !== $model->manager->email) {
    $jsonData["manager"]["email"] = $model->manager->email;
}
if (null !== $model->manager->code) {
    $jsonData["manager"]["code"] = $model->manager->code;
}

if (0 === \count($jsonData["manager"])) {
    $jsonData["manager"] = $emptyObject;
}

}
if (null !== $model->customer) {
    $jsonData["customer"] = [];
if (null !== $model->customer->id) {
    $jsonData["customer"]["id"] = $model->customer->id;
}
if (null !== $model->customer->externalId) {
    $jsonData["customer"]["externalId"] = $model->customer->externalId;
}
if (null !== $model->customer->firstName) {
    $jsonData["customer"]["firstName"] = $model->customer->firstName;
}
if (null !== $model->customer->lastName) {
    $jsonData["customer"]["lastName"] = $model->customer->lastName;
}
if (null !== $model->customer->patronymic) {
    $jsonData["customer"]["patronymic"] = $model->customer->patronymic;
}
if (null !== $model->customer->email) {
    $jsonData["customer"]["email"] = $model->customer->email;
}
if (null !== $model->customer->phones) {
    $jsonData["customer"]["phones"] = [];
foreach (array_keys($model->customer->phones) as $index22) {
    $jsonData["customer"]["phones"][$index22] = [];
if (null !== $model->customer->phones[$index22]->number) {
    $jsonData["customer"]["phones"][$index22]["number"] = $model->customer->phones[$index22]->number;
}

if (0 === \count($jsonData["customer"]["phones"][$index22])) {
    $jsonData["customer"]["phones"][$index22] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customer"])) {
    $jsonData["customer"] = $emptyObject;
}

}
if (null !== $model->links) {
    $jsonData["links"] = [];
if (null !== $model->links->newOrderLink) {
    $jsonData["links"]["newOrderLink"] = $model->links->newOrderLink;
}
if (null !== $model->links->lastOrderLink) {
    $jsonData["links"]["lastOrderLink"] = $model->links->lastOrderLink;
}
if (null !== $model->links->newCustomerLink) {
    $jsonData["links"]["newCustomerLink"] = $model->links->newCustomerLink;
}
if (null !== $model->links->customerLink) {
    $jsonData["links"]["customerLink"] = $model->links->customerLink;
}

if (0 === \count($jsonData["links"])) {
    $jsonData["links"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
