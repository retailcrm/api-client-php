<?php

function serialize_RetailCrm_Api_Model_Entity_Users_User(RetailCrm\Api\Model\Entity\Users\User $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->createdAt) {
    $jsonData["createdAt"] = $model->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->active) {
    $jsonData["active"] = $model->active;
}
if (null !== $model->email) {
    $jsonData["email"] = $model->email;
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
if (null !== $model->photoUrl) {
    $jsonData["photoUrl"] = $model->photoUrl;
}
if (null !== $model->phone) {
    $jsonData["phone"] = $model->phone;
}
if (null !== $model->status) {
    $jsonData["status"] = $model->status;
}
if (null !== $model->online) {
    $jsonData["online"] = $model->online;
}
if (null !== $model->isAdmin) {
    $jsonData["isAdmin"] = $model->isAdmin;
}
if (null !== $model->isManager) {
    $jsonData["isManager"] = $model->isManager;
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
if (null !== $model->mgUserId) {
    $jsonData["mgUserId"] = $model->mgUserId;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
