<?php

function deserialize_RetailCrm_Api_Model_Entity_Telephony_CallEvent(array $jsonData): RetailCrm\Api\Model\Entity\Telephony\CallEvent
{
    
$model = new RetailCrm\Api\Model\Entity\Telephony\CallEvent();
if (isset($jsonData['phone'])) {
    $model->phone = $jsonData['phone'];

}
if (isset($jsonData['type'])) {
    $model->type = $jsonData['type'];

}
if (isset($jsonData['codes'])) {
    $model->codes = $jsonData['codes'];

}
if (isset($jsonData['userIds'])) {
    $model->userIds = $jsonData['userIds'];

}
if (isset($jsonData['site'])) {
    $model->site = $jsonData['site'];

}
if (isset($jsonData['hangupStatus'])) {
    $model->hangupStatus = $jsonData['hangupStatus'];

}
if (isset($jsonData['externalPhone'])) {
    $model->externalPhone = $jsonData['externalPhone'];

}
if (isset($jsonData['callExternalId'])) {
    $model->callExternalId = $jsonData['callExternalId'];

}
if (isset($jsonData['webAnalyticsData'])) {
    
$model->webAnalyticsData = new RetailCrm\Api\Model\Entity\Telephony\SerializedWebAnalyticsData();
if (isset($jsonData['webAnalyticsData']['campaign'])) {
    
$model->webAnalyticsData->campaign = new RetailCrm\Api\Model\Entity\Telephony\SerializedCampaign();
if (isset($jsonData['webAnalyticsData']['campaign']['name'])) {
    $model->webAnalyticsData->campaign->name = $jsonData['webAnalyticsData']['campaign']['name'];

}
if (isset($jsonData['webAnalyticsData']['campaign']['code'])) {
    $model->webAnalyticsData->campaign->code = $jsonData['webAnalyticsData']['campaign']['code'];

}


}
if (isset($jsonData['webAnalyticsData']['queryString'])) {
    $model->webAnalyticsData->queryString = $jsonData['webAnalyticsData']['queryString'];

}


}



    return $model;
}
