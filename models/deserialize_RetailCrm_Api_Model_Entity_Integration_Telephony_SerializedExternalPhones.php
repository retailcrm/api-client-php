<?php

function deserialize_RetailCrm_Api_Model_Entity_Integration_Telephony_SerializedExternalPhones(array $jsonData): RetailCrm\Api\Model\Entity\Integration\Telephony\SerializedExternalPhones
{
    
$model = new RetailCrm\Api\Model\Entity\Integration\Telephony\SerializedExternalPhones();
if (isset($jsonData['siteCode'])) {
    $model->siteCode = $jsonData['siteCode'];

}
if (isset($jsonData['externalPhone'])) {
    $model->externalPhone = $jsonData['externalPhone'];

}



    return $model;
}
