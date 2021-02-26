<?php

function deserialize_RetailCrm_Api_Model_Entity_Integration_Telephony_SerializedAdditionalCodes(array $jsonData): RetailCrm\Api\Model\Entity\Integration\Telephony\SerializedAdditionalCodes
{
    
$model = new RetailCrm\Api\Model\Entity\Integration\Telephony\SerializedAdditionalCodes();
if (isset($jsonData['userId'])) {
    $model->userId = $jsonData['userId'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}



    return $model;
}
