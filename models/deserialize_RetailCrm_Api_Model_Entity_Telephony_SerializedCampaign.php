<?php

function deserialize_RetailCrm_Api_Model_Entity_Telephony_SerializedCampaign(array $jsonData): RetailCrm\Api\Model\Entity\Telephony\SerializedCampaign
{
    
$model = new RetailCrm\Api\Model\Entity\Telephony\SerializedCampaign();
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}



    return $model;
}
