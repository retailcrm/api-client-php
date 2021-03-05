<?php

function deserialize_RetailCrm_Api_Model_Entity_Telephony_SerializedWebAnalyticsData(array $jsonData): RetailCrm\Api\Model\Entity\Telephony\SerializedWebAnalyticsData
{
    
$model = new RetailCrm\Api\Model\Entity\Telephony\SerializedWebAnalyticsData();
if (isset($jsonData['campaign'])) {
    
$model->campaign = new RetailCrm\Api\Model\Entity\Telephony\SerializedCampaign();
if (isset($jsonData['campaign']['name'])) {
    $model->campaign->name = $jsonData['campaign']['name'];

}
if (isset($jsonData['campaign']['code'])) {
    $model->campaign->code = $jsonData['campaign']['code'];

}


}
if (isset($jsonData['queryString'])) {
    $model->queryString = $jsonData['queryString'];

}



    return $model;
}
