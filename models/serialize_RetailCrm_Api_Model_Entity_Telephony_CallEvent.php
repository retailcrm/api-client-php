<?php

function serialize_RetailCrm_Api_Model_Entity_Telephony_CallEvent(RetailCrm\Api\Model\Entity\Telephony\CallEvent $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->phone) {
    $jsonData["phone"] = $model->phone;
}
if (null !== $model->type) {
    $jsonData["type"] = $model->type;
}
if (null !== $model->codes) {
    $jsonData["codes"] = $model->codes;
}
if (null !== $model->userIds) {
    $jsonData["userIds"] = $model->userIds;
}
if (null !== $model->site) {
    $jsonData["site"] = $model->site;
}
if (null !== $model->hangupStatus) {
    $jsonData["hangupStatus"] = $model->hangupStatus;
}
if (null !== $model->externalPhone) {
    $jsonData["externalPhone"] = $model->externalPhone;
}
if (null !== $model->callExternalId) {
    $jsonData["callExternalId"] = $model->callExternalId;
}
if (null !== $model->webAnalyticsData) {
    $jsonData["webAnalyticsData"] = [];
if (null !== $model->webAnalyticsData->campaign) {
    $jsonData["webAnalyticsData"]["campaign"] = [];
if (null !== $model->webAnalyticsData->campaign->name) {
    $jsonData["webAnalyticsData"]["campaign"]["name"] = $model->webAnalyticsData->campaign->name;
}
if (null !== $model->webAnalyticsData->campaign->code) {
    $jsonData["webAnalyticsData"]["campaign"]["code"] = $model->webAnalyticsData->campaign->code;
}

if (0 === \count($jsonData["webAnalyticsData"]["campaign"])) {
    $jsonData["webAnalyticsData"]["campaign"] = $emptyObject;
}

}
if (null !== $model->webAnalyticsData->queryString) {
    $jsonData["webAnalyticsData"]["queryString"] = $model->webAnalyticsData->queryString;
}

if (0 === \count($jsonData["webAnalyticsData"])) {
    $jsonData["webAnalyticsData"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
