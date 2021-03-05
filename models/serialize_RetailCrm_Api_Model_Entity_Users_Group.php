<?php

function serialize_RetailCrm_Api_Model_Entity_Users_Group(RetailCrm\Api\Model\Entity\Users\Group $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->signatureTemplate) {
    $jsonData["signatureTemplate"] = $model->signatureTemplate;
}
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->isManager) {
    $jsonData["isManager"] = $model->isManager;
}
if (null !== $model->isPosManager) {
    $jsonData["isPosManager"] = $model->isPosManager;
}
if (null !== $model->isDeliveryMen) {
    $jsonData["isDeliveryMen"] = $model->isDeliveryMen;
}
if (null !== $model->deliveryTypes) {
    $jsonData["deliveryTypes"] = [];
foreach (array_keys($model->deliveryTypes) as $index17) {
    $jsonData["deliveryTypes"] = $model->deliveryTypes;
}

}
if (null !== $model->breakdownOrderTypes) {
    $jsonData["breakdownOrderTypes"] = [];
foreach (array_keys($model->breakdownOrderTypes) as $index23) {
    $jsonData["breakdownOrderTypes"] = $model->breakdownOrderTypes;
}

}
if (null !== $model->breakdownSites) {
    $jsonData["breakdownSites"] = [];
foreach (array_keys($model->breakdownSites) as $index18) {
    $jsonData["breakdownSites"] = $model->breakdownSites;
}

}
if (null !== $model->breakdownOrderMethods) {
    $jsonData["breakdownOrderMethods"] = [];
foreach (array_keys($model->breakdownOrderMethods) as $index25) {
    $jsonData["breakdownOrderMethods"] = $model->breakdownOrderMethods;
}

}
if (null !== $model->grantedOrderTypes) {
    $jsonData["grantedOrderTypes"] = [];
foreach (array_keys($model->grantedOrderTypes) as $index21) {
    $jsonData["grantedOrderTypes"] = $model->grantedOrderTypes;
}

}
if (null !== $model->grantedSites) {
    $jsonData["grantedSites"] = [];
foreach (array_keys($model->grantedSites) as $index16) {
    $jsonData["grantedSites"] = $model->grantedSites;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
