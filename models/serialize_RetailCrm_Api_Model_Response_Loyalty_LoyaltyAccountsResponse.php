<?php

function serialize_RetailCrm_Api_Model_Response_Loyalty_LoyaltyAccountsResponse(RetailCrm\Api\Model\Response\Loyalty\LoyaltyAccountsResponse $model, bool $useStdClass = true)
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
if (null !== $model->loyaltyAccounts) {
    $jsonData["loyaltyAccounts"] = [];
foreach (array_keys($model->loyaltyAccounts) as $index19) {
    $jsonData["loyaltyAccounts"][$index19] = [];
if (null !== $model->loyaltyAccounts[$index19]->active) {
    $jsonData["loyaltyAccounts"][$index19]["active"] = $model->loyaltyAccounts[$index19]->active;
}
if (null !== $model->loyaltyAccounts[$index19]->id) {
    $jsonData["loyaltyAccounts"][$index19]["id"] = $model->loyaltyAccounts[$index19]->id;
}
if (null !== $model->loyaltyAccounts[$index19]->phoneNumber) {
    $jsonData["loyaltyAccounts"][$index19]["phoneNumber"] = $model->loyaltyAccounts[$index19]->phoneNumber;
}
if (null !== $model->loyaltyAccounts[$index19]->cardNumber) {
    $jsonData["loyaltyAccounts"][$index19]["cardNumber"] = $model->loyaltyAccounts[$index19]->cardNumber;
}
if (null !== $model->loyaltyAccounts[$index19]->amount) {
    $jsonData["loyaltyAccounts"][$index19]["amount"] = $model->loyaltyAccounts[$index19]->amount;
}
if (null !== $model->loyaltyAccounts[$index19]->createdAt) {
    $jsonData["loyaltyAccounts"][$index19]["createdAt"] = $model->loyaltyAccounts[$index19]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->loyaltyAccounts[$index19]->activatedAt) {
    $jsonData["loyaltyAccounts"][$index19]["activatedAt"] = $model->loyaltyAccounts[$index19]->activatedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->loyaltyAccounts[$index19]->confirmedPhoneAt) {
    $jsonData["loyaltyAccounts"][$index19]["confirmedPhoneAt"] = $model->loyaltyAccounts[$index19]->confirmedPhoneAt->format('Y-m-d H:i:s');;
}
if (null !== $model->loyaltyAccounts[$index19]->lastCheckId) {
    $jsonData["loyaltyAccounts"][$index19]["lastCheckId"] = $model->loyaltyAccounts[$index19]->lastCheckId;
}
if (null !== $model->loyaltyAccounts[$index19]->customFields) {
    $jsonData["loyaltyAccounts"][$index19]["customFields"] = [];
foreach (array_keys($model->loyaltyAccounts[$index19]->customFields) as $index45) {
    $jsonData["loyaltyAccounts"][$index19]["customFields"] = $model->loyaltyAccounts[$index19]->customFields;
}

}
if (null !== $model->loyaltyAccounts[$index19]->customer) {
    $jsonData["loyaltyAccounts"][$index19]["customer"] = [];
if (null !== $model->loyaltyAccounts[$index19]->customer->site) {
    $jsonData["loyaltyAccounts"][$index19]["customer"]["site"] = $model->loyaltyAccounts[$index19]->customer->site;
}
if (null !== $model->loyaltyAccounts[$index19]->customer->id) {
    $jsonData["loyaltyAccounts"][$index19]["customer"]["id"] = $model->loyaltyAccounts[$index19]->customer->id;
}
if (null !== $model->loyaltyAccounts[$index19]->customer->externalId) {
    $jsonData["loyaltyAccounts"][$index19]["customer"]["externalId"] = $model->loyaltyAccounts[$index19]->customer->externalId;
}
if (null !== $model->loyaltyAccounts[$index19]->customer->type) {
    $jsonData["loyaltyAccounts"][$index19]["customer"]["type"] = $model->loyaltyAccounts[$index19]->customer->type;
}

if (0 === \count($jsonData["loyaltyAccounts"][$index19]["customer"])) {
    $jsonData["loyaltyAccounts"][$index19]["customer"] = $emptyObject;
}

}

if (0 === \count($jsonData["loyaltyAccounts"][$index19])) {
    $jsonData["loyaltyAccounts"][$index19] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
