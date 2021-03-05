<?php

function serialize_RetailCrm_Api_Model_Response_Users_UserGroupsResponse(RetailCrm\Api\Model\Response\Users\UserGroupsResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->pagination) {
    $jsonData["pagination"] = [];
if (null !== $model->pagination->limit) {
    $jsonData["pagination"]["limit"] = $model->pagination->limit;
}
if (null !== $model->pagination->totalCount) {
    $jsonData["pagination"]["totalCount"] = $model->pagination->totalCount;
}
if (null !== $model->pagination->currentPage) {
    $jsonData["pagination"]["currentPage"] = $model->pagination->currentPage;
}
if (null !== $model->pagination->totalPageCount) {
    $jsonData["pagination"]["totalPageCount"] = $model->pagination->totalPageCount;
}

if (0 === \count($jsonData["pagination"])) {
    $jsonData["pagination"] = $emptyObject;
}

}
if (null !== $model->groups) {
    $jsonData["groups"] = [];
foreach (array_keys($model->groups) as $index10) {
    $jsonData["groups"][$index10] = [];
if (null !== $model->groups[$index10]->id) {
    $jsonData["groups"][$index10]["id"] = $model->groups[$index10]->id;
}
if (null !== $model->groups[$index10]->name) {
    $jsonData["groups"][$index10]["name"] = $model->groups[$index10]->name;
}
if (null !== $model->groups[$index10]->signatureTemplate) {
    $jsonData["groups"][$index10]["signatureTemplate"] = $model->groups[$index10]->signatureTemplate;
}
if (null !== $model->groups[$index10]->code) {
    $jsonData["groups"][$index10]["code"] = $model->groups[$index10]->code;
}
if (null !== $model->groups[$index10]->isManager) {
    $jsonData["groups"][$index10]["isManager"] = $model->groups[$index10]->isManager;
}
if (null !== $model->groups[$index10]->isPosManager) {
    $jsonData["groups"][$index10]["isPosManager"] = $model->groups[$index10]->isPosManager;
}
if (null !== $model->groups[$index10]->isDeliveryMen) {
    $jsonData["groups"][$index10]["isDeliveryMen"] = $model->groups[$index10]->isDeliveryMen;
}
if (null !== $model->groups[$index10]->deliveryTypes) {
    $jsonData["groups"][$index10]["deliveryTypes"] = [];
foreach (array_keys($model->groups[$index10]->deliveryTypes) as $index37) {
    $jsonData["groups"][$index10]["deliveryTypes"] = $model->groups[$index10]->deliveryTypes;
}

}
if (null !== $model->groups[$index10]->breakdownOrderTypes) {
    $jsonData["groups"][$index10]["breakdownOrderTypes"] = [];
foreach (array_keys($model->groups[$index10]->breakdownOrderTypes) as $index43) {
    $jsonData["groups"][$index10]["breakdownOrderTypes"] = $model->groups[$index10]->breakdownOrderTypes;
}

}
if (null !== $model->groups[$index10]->breakdownSites) {
    $jsonData["groups"][$index10]["breakdownSites"] = [];
foreach (array_keys($model->groups[$index10]->breakdownSites) as $index38) {
    $jsonData["groups"][$index10]["breakdownSites"] = $model->groups[$index10]->breakdownSites;
}

}
if (null !== $model->groups[$index10]->breakdownOrderMethods) {
    $jsonData["groups"][$index10]["breakdownOrderMethods"] = [];
foreach (array_keys($model->groups[$index10]->breakdownOrderMethods) as $index45) {
    $jsonData["groups"][$index10]["breakdownOrderMethods"] = $model->groups[$index10]->breakdownOrderMethods;
}

}
if (null !== $model->groups[$index10]->grantedOrderTypes) {
    $jsonData["groups"][$index10]["grantedOrderTypes"] = [];
foreach (array_keys($model->groups[$index10]->grantedOrderTypes) as $index41) {
    $jsonData["groups"][$index10]["grantedOrderTypes"] = $model->groups[$index10]->grantedOrderTypes;
}

}
if (null !== $model->groups[$index10]->grantedSites) {
    $jsonData["groups"][$index10]["grantedSites"] = [];
foreach (array_keys($model->groups[$index10]->grantedSites) as $index36) {
    $jsonData["groups"][$index10]["grantedSites"] = $model->groups[$index10]->grantedSites;
}

}

if (0 === \count($jsonData["groups"][$index10])) {
    $jsonData["groups"][$index10] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
