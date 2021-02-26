<?php

function serialize_RetailCrm_Api_Model_Entity_Files_Attachment(RetailCrm\Api\Model\Entity\Files\Attachment $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->customer) {
    $jsonData["customer"] = [];
if (null !== $model->customer->id) {
    $jsonData["customer"]["id"] = $model->customer->id;
}
if (null !== $model->customer->externalId) {
    $jsonData["customer"]["externalId"] = $model->customer->externalId;
}
if (null !== $model->customer->site) {
    $jsonData["customer"]["site"] = $model->customer->site;
}

if (0 === \count($jsonData["customer"])) {
    $jsonData["customer"] = $emptyObject;
}

}
if (null !== $model->order) {
    $jsonData["order"] = [];
if (null !== $model->order->id) {
    $jsonData["order"]["id"] = $model->order->id;
}
if (null !== $model->order->number) {
    $jsonData["order"]["number"] = $model->order->number;
}
if (null !== $model->order->externalId) {
    $jsonData["order"]["externalId"] = $model->order->externalId;
}
if (null !== $model->order->site) {
    $jsonData["order"]["site"] = $model->order->site;
}

if (0 === \count($jsonData["order"])) {
    $jsonData["order"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
