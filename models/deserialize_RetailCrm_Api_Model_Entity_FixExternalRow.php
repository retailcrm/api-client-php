<?php

function deserialize_RetailCrm_Api_Model_Entity_FixExternalRow(array $jsonData): RetailCrm\Api\Model\Entity\FixExternalRow
{
    
$model = new RetailCrm\Api\Model\Entity\FixExternalRow();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}



    return $model;
}
