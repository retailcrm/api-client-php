<?php

function serialize_RetailCrm_Api_Model_Response_Users_UsersGetResponse(RetailCrm\Api\Model\Response\Users\UsersGetResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->user) {
    $jsonData["user"] = [];
if (null !== $model->user->id) {
    $jsonData["user"]["id"] = $model->user->id;
}
if (null !== $model->user->createdAt) {
    $jsonData["user"]["createdAt"] = $model->user->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->user->active) {
    $jsonData["user"]["active"] = $model->user->active;
}
if (null !== $model->user->email) {
    $jsonData["user"]["email"] = $model->user->email;
}
if (null !== $model->user->firstName) {
    $jsonData["user"]["firstName"] = $model->user->firstName;
}
if (null !== $model->user->lastName) {
    $jsonData["user"]["lastName"] = $model->user->lastName;
}
if (null !== $model->user->patronymic) {
    $jsonData["user"]["patronymic"] = $model->user->patronymic;
}
if (null !== $model->user->photoUrl) {
    $jsonData["user"]["photoUrl"] = $model->user->photoUrl;
}
if (null !== $model->user->phone) {
    $jsonData["user"]["phone"] = $model->user->phone;
}
if (null !== $model->user->status) {
    $jsonData["user"]["status"] = $model->user->status;
}
if (null !== $model->user->online) {
    $jsonData["user"]["online"] = $model->user->online;
}
if (null !== $model->user->isAdmin) {
    $jsonData["user"]["isAdmin"] = $model->user->isAdmin;
}
if (null !== $model->user->isManager) {
    $jsonData["user"]["isManager"] = $model->user->isManager;
}
if (null !== $model->user->groups) {
    $jsonData["user"]["groups"] = [];
foreach (array_keys($model->user->groups) as $index18) {
    $jsonData["user"]["groups"][$index18] = [];
if (null !== $model->user->groups[$index18]->id) {
    $jsonData["user"]["groups"][$index18]["id"] = $model->user->groups[$index18]->id;
}
if (null !== $model->user->groups[$index18]->name) {
    $jsonData["user"]["groups"][$index18]["name"] = $model->user->groups[$index18]->name;
}
if (null !== $model->user->groups[$index18]->signatureTemplate) {
    $jsonData["user"]["groups"][$index18]["signatureTemplate"] = $model->user->groups[$index18]->signatureTemplate;
}
if (null !== $model->user->groups[$index18]->code) {
    $jsonData["user"]["groups"][$index18]["code"] = $model->user->groups[$index18]->code;
}
if (null !== $model->user->groups[$index18]->isManager) {
    $jsonData["user"]["groups"][$index18]["isManager"] = $model->user->groups[$index18]->isManager;
}
if (null !== $model->user->groups[$index18]->isPosManager) {
    $jsonData["user"]["groups"][$index18]["isPosManager"] = $model->user->groups[$index18]->isPosManager;
}
if (null !== $model->user->groups[$index18]->isDeliveryMen) {
    $jsonData["user"]["groups"][$index18]["isDeliveryMen"] = $model->user->groups[$index18]->isDeliveryMen;
}
if (null !== $model->user->groups[$index18]->deliveryTypes) {
    $jsonData["user"]["groups"][$index18]["deliveryTypes"] = [];
foreach (array_keys($model->user->groups[$index18]->deliveryTypes) as $index45) {
    $jsonData["user"]["groups"][$index18]["deliveryTypes"] = $model->user->groups[$index18]->deliveryTypes;
}

}
if (null !== $model->user->groups[$index18]->breakdownOrderTypes) {
    $jsonData["user"]["groups"][$index18]["breakdownOrderTypes"] = [];
foreach (array_keys($model->user->groups[$index18]->breakdownOrderTypes) as $index51) {
    $jsonData["user"]["groups"][$index18]["breakdownOrderTypes"] = $model->user->groups[$index18]->breakdownOrderTypes;
}

}
if (null !== $model->user->groups[$index18]->breakdownSites) {
    $jsonData["user"]["groups"][$index18]["breakdownSites"] = [];
foreach (array_keys($model->user->groups[$index18]->breakdownSites) as $index46) {
    $jsonData["user"]["groups"][$index18]["breakdownSites"] = $model->user->groups[$index18]->breakdownSites;
}

}
if (null !== $model->user->groups[$index18]->breakdownOrderMethods) {
    $jsonData["user"]["groups"][$index18]["breakdownOrderMethods"] = [];
foreach (array_keys($model->user->groups[$index18]->breakdownOrderMethods) as $index53) {
    $jsonData["user"]["groups"][$index18]["breakdownOrderMethods"] = $model->user->groups[$index18]->breakdownOrderMethods;
}

}
if (null !== $model->user->groups[$index18]->grantedOrderTypes) {
    $jsonData["user"]["groups"][$index18]["grantedOrderTypes"] = [];
foreach (array_keys($model->user->groups[$index18]->grantedOrderTypes) as $index49) {
    $jsonData["user"]["groups"][$index18]["grantedOrderTypes"] = $model->user->groups[$index18]->grantedOrderTypes;
}

}
if (null !== $model->user->groups[$index18]->grantedSites) {
    $jsonData["user"]["groups"][$index18]["grantedSites"] = [];
foreach (array_keys($model->user->groups[$index18]->grantedSites) as $index44) {
    $jsonData["user"]["groups"][$index18]["grantedSites"] = $model->user->groups[$index18]->grantedSites;
}

}

if (0 === \count($jsonData["user"]["groups"][$index18])) {
    $jsonData["user"]["groups"][$index18] = $emptyObject;
}

}

}
if (null !== $model->user->mgUserId) {
    $jsonData["user"]["mgUserId"] = $model->user->mgUserId;
}

if (0 === \count($jsonData["user"])) {
    $jsonData["user"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
