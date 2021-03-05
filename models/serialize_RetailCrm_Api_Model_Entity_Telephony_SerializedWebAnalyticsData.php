<?php

function serialize_RetailCrm_Api_Model_Entity_Telephony_SerializedWebAnalyticsData(RetailCrm\Api\Model\Entity\Telephony\SerializedWebAnalyticsData $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->campaign) {
    $jsonData["campaign"] = [];
if (null !== $model->campaign->name) {
    $jsonData["campaign"]["name"] = $model->campaign->name;
}
if (null !== $model->campaign->code) {
    $jsonData["campaign"]["code"] = $model->campaign->code;
}

if (0 === \count($jsonData["campaign"])) {
    $jsonData["campaign"] = $emptyObject;
}

}
if (null !== $model->queryString) {
    $jsonData["queryString"] = $model->queryString;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
