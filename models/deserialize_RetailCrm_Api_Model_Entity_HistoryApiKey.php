<?php

function deserialize_RetailCrm_Api_Model_Entity_HistoryApiKey(array $jsonData): RetailCrm\Api\Model\Entity\HistoryApiKey
{
    
$model = new RetailCrm\Api\Model\Entity\HistoryApiKey();
if (isset($jsonData['current'])) {
    $model->current = $jsonData['current'];

}



    return $model;
}
