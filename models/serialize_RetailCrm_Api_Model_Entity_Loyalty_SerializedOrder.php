<?php

function serialize_RetailCrm_Api_Model_Entity_Loyalty_SerializedOrder(RetailCrm\Api\Model\Entity\Loyalty\SerializedOrder $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->privilegeType) {
    $jsonData["privilegeType"] = $model->privilegeType;
}
if (null !== $model->discountManualAmount) {
    $jsonData["discountManualAmount"] = $model->discountManualAmount;
}
if (null !== $model->discountManualPercent) {
    $jsonData["discountManualPercent"] = $model->discountManualPercent;
}
if (null !== $model->customer) {
    $jsonData["customer"] = [];
if (null !== $model->customer->id) {
    $jsonData["customer"]["id"] = $model->customer->id;
}
if (null !== $model->customer->externalId) {
    $jsonData["customer"]["externalId"] = $model->customer->externalId;
}
if (null !== $model->customer->browserId) {
    $jsonData["customer"]["browserId"] = $model->customer->browserId;
}
if (null !== $model->customer->site) {
    $jsonData["customer"]["site"] = $model->customer->site;
}
if (null !== $model->customer->companies) {
    $jsonData["customer"]["companies"] = [];
foreach (array_keys($model->customer->companies) as $index25) {
    $jsonData["customer"]["companies"][$index25] = [];
if (null !== $model->customer->companies[$index25]->id) {
    $jsonData["customer"]["companies"][$index25]["id"] = $model->customer->companies[$index25]->id;
}
if (null !== $model->customer->companies[$index25]->externalId) {
    $jsonData["customer"]["companies"][$index25]["externalId"] = $model->customer->companies[$index25]->externalId;
}
if (null !== $model->customer->companies[$index25]->company) {
    $jsonData["customer"]["companies"][$index25]["company"] = [];
if (null !== $model->customer->companies[$index25]->company->id) {
    $jsonData["customer"]["companies"][$index25]["company"]["id"] = $model->customer->companies[$index25]->company->id;
}
if (null !== $model->customer->companies[$index25]->company->externalId) {
    $jsonData["customer"]["companies"][$index25]["company"]["externalId"] = $model->customer->companies[$index25]->company->externalId;
}
if (null !== $model->customer->companies[$index25]->company->name) {
    $jsonData["customer"]["companies"][$index25]["company"]["name"] = $model->customer->companies[$index25]->company->name;
}

if (0 === \count($jsonData["customer"]["companies"][$index25]["company"])) {
    $jsonData["customer"]["companies"][$index25]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["customer"]["companies"][$index25])) {
    $jsonData["customer"]["companies"][$index25] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customer"])) {
    $jsonData["customer"] = $emptyObject;
}

}
if (null !== $model->items) {
    $jsonData["items"] = [];
foreach (array_keys($model->items) as $index9) {
    $jsonData["items"][$index9] = [];
if (null !== $model->items[$index9]->initialPrice) {
    $jsonData["items"][$index9]["initialPrice"] = $model->items[$index9]->initialPrice;
}
if (null !== $model->items[$index9]->discountManualAmount) {
    $jsonData["items"][$index9]["discountManualAmount"] = $model->items[$index9]->discountManualAmount;
}
if (null !== $model->items[$index9]->discountManualPercent) {
    $jsonData["items"][$index9]["discountManualPercent"] = $model->items[$index9]->discountManualPercent;
}
if (null !== $model->items[$index9]->quantity) {
    $jsonData["items"][$index9]["quantity"] = $model->items[$index9]->quantity;
}

if (0 === \count($jsonData["items"][$index9])) {
    $jsonData["items"][$index9] = $emptyObject;
}

}

}
if (null !== $model->delivery) {
    $jsonData["delivery"] = [];
if (null !== $model->delivery->cost) {
    $jsonData["delivery"]["cost"] = $model->delivery->cost;
}

if (0 === \count($jsonData["delivery"])) {
    $jsonData["delivery"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
