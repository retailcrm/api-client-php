<?php

function deserialize_RetailCrm_Api_Model_Entity_Loyalty_SerializedOrderProductOffer(array $jsonData): RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderProductOffer
{
    
$model = new RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderProductOffer();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['xmlId'])) {
    $model->xmlId = $jsonData['xmlId'];

}



    return $model;
}
