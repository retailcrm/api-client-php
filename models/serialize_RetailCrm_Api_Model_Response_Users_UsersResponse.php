<?php

function serialize_RetailCrm_Api_Model_Response_Users_UsersResponse(RetailCrm\Api\Model\Response\Users\UsersResponse $model, bool $useStdClass = true)
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
if (null !== $model->users) {
    $jsonData["users"] = [];
foreach (array_keys($model->users) as $index9) {
    $jsonData["users"][$index9] = [];
if (null !== $model->users[$index9]->id) {
    $jsonData["users"][$index9]["id"] = $model->users[$index9]->id;
}
if (null !== $model->users[$index9]->createdAt) {
    $jsonData["users"][$index9]["createdAt"] = $model->users[$index9]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->users[$index9]->active) {
    $jsonData["users"][$index9]["active"] = $model->users[$index9]->active;
}
if (null !== $model->users[$index9]->email) {
    $jsonData["users"][$index9]["email"] = $model->users[$index9]->email;
}
if (null !== $model->users[$index9]->firstName) {
    $jsonData["users"][$index9]["firstName"] = $model->users[$index9]->firstName;
}
if (null !== $model->users[$index9]->lastName) {
    $jsonData["users"][$index9]["lastName"] = $model->users[$index9]->lastName;
}
if (null !== $model->users[$index9]->patronymic) {
    $jsonData["users"][$index9]["patronymic"] = $model->users[$index9]->patronymic;
}
if (null !== $model->users[$index9]->photoUrl) {
    $jsonData["users"][$index9]["photoUrl"] = $model->users[$index9]->photoUrl;
}
if (null !== $model->users[$index9]->phone) {
    $jsonData["users"][$index9]["phone"] = $model->users[$index9]->phone;
}
if (null !== $model->users[$index9]->status) {
    $jsonData["users"][$index9]["status"] = $model->users[$index9]->status;
}
if (null !== $model->users[$index9]->online) {
    $jsonData["users"][$index9]["online"] = $model->users[$index9]->online;
}
if (null !== $model->users[$index9]->isAdmin) {
    $jsonData["users"][$index9]["isAdmin"] = $model->users[$index9]->isAdmin;
}
if (null !== $model->users[$index9]->isManager) {
    $jsonData["users"][$index9]["isManager"] = $model->users[$index9]->isManager;
}
if (null !== $model->users[$index9]->groups) {
    $jsonData["users"][$index9]["groups"] = [];
foreach (array_keys($model->users[$index9]->groups) as $index28) {
    $jsonData["users"][$index9]["groups"][$index28] = [];
if (null !== $model->users[$index9]->groups[$index28]->id) {
    $jsonData["users"][$index9]["groups"][$index28]["id"] = $model->users[$index9]->groups[$index28]->id;
}
if (null !== $model->users[$index9]->groups[$index28]->name) {
    $jsonData["users"][$index9]["groups"][$index28]["name"] = $model->users[$index9]->groups[$index28]->name;
}
if (null !== $model->users[$index9]->groups[$index28]->signatureTemplate) {
    $jsonData["users"][$index9]["groups"][$index28]["signatureTemplate"] = $model->users[$index9]->groups[$index28]->signatureTemplate;
}
if (null !== $model->users[$index9]->groups[$index28]->code) {
    $jsonData["users"][$index9]["groups"][$index28]["code"] = $model->users[$index9]->groups[$index28]->code;
}
if (null !== $model->users[$index9]->groups[$index28]->isManager) {
    $jsonData["users"][$index9]["groups"][$index28]["isManager"] = $model->users[$index9]->groups[$index28]->isManager;
}
if (null !== $model->users[$index9]->groups[$index28]->isPosManager) {
    $jsonData["users"][$index9]["groups"][$index28]["isPosManager"] = $model->users[$index9]->groups[$index28]->isPosManager;
}
if (null !== $model->users[$index9]->groups[$index28]->isDeliveryMen) {
    $jsonData["users"][$index9]["groups"][$index28]["isDeliveryMen"] = $model->users[$index9]->groups[$index28]->isDeliveryMen;
}
if (null !== $model->users[$index9]->groups[$index28]->deliveryTypes) {
    $jsonData["users"][$index9]["groups"][$index28]["deliveryTypes"] = [];
foreach (array_keys($model->users[$index9]->groups[$index28]->deliveryTypes) as $index55) {
    $jsonData["users"][$index9]["groups"][$index28]["deliveryTypes"] = $model->users[$index9]->groups[$index28]->deliveryTypes;
}

}
if (null !== $model->users[$index9]->groups[$index28]->breakdownOrderTypes) {
    $jsonData["users"][$index9]["groups"][$index28]["breakdownOrderTypes"] = [];
foreach (array_keys($model->users[$index9]->groups[$index28]->breakdownOrderTypes) as $index61) {
    $jsonData["users"][$index9]["groups"][$index28]["breakdownOrderTypes"] = $model->users[$index9]->groups[$index28]->breakdownOrderTypes;
}

}
if (null !== $model->users[$index9]->groups[$index28]->breakdownSites) {
    $jsonData["users"][$index9]["groups"][$index28]["breakdownSites"] = [];
foreach (array_keys($model->users[$index9]->groups[$index28]->breakdownSites) as $index56) {
    $jsonData["users"][$index9]["groups"][$index28]["breakdownSites"] = $model->users[$index9]->groups[$index28]->breakdownSites;
}

}
if (null !== $model->users[$index9]->groups[$index28]->breakdownOrderMethods) {
    $jsonData["users"][$index9]["groups"][$index28]["breakdownOrderMethods"] = [];
foreach (array_keys($model->users[$index9]->groups[$index28]->breakdownOrderMethods) as $index63) {
    $jsonData["users"][$index9]["groups"][$index28]["breakdownOrderMethods"] = $model->users[$index9]->groups[$index28]->breakdownOrderMethods;
}

}
if (null !== $model->users[$index9]->groups[$index28]->grantedOrderTypes) {
    $jsonData["users"][$index9]["groups"][$index28]["grantedOrderTypes"] = [];
foreach (array_keys($model->users[$index9]->groups[$index28]->grantedOrderTypes) as $index59) {
    $jsonData["users"][$index9]["groups"][$index28]["grantedOrderTypes"] = $model->users[$index9]->groups[$index28]->grantedOrderTypes;
}

}
if (null !== $model->users[$index9]->groups[$index28]->grantedSites) {
    $jsonData["users"][$index9]["groups"][$index28]["grantedSites"] = [];
foreach (array_keys($model->users[$index9]->groups[$index28]->grantedSites) as $index54) {
    $jsonData["users"][$index9]["groups"][$index28]["grantedSites"] = $model->users[$index9]->groups[$index28]->grantedSites;
}

}

if (0 === \count($jsonData["users"][$index9]["groups"][$index28])) {
    $jsonData["users"][$index9]["groups"][$index28] = $emptyObject;
}

}

}
if (null !== $model->users[$index9]->mgUserId) {
    $jsonData["users"][$index9]["mgUserId"] = $model->users[$index9]->mgUserId;
}

if (0 === \count($jsonData["users"][$index9])) {
    $jsonData["users"][$index9] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
