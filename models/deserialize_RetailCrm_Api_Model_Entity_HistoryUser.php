<?php

function deserialize_RetailCrm_Api_Model_Entity_HistoryUser(array $jsonData): RetailCrm\Api\Model\Entity\HistoryUser
{
    
$model = new RetailCrm\Api\Model\Entity\HistoryUser();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}



    return $model;
}
