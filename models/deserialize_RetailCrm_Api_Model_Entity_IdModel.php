<?php

function deserialize_RetailCrm_Api_Model_Entity_IdModel(array $jsonData): RetailCrm\Api\Model\Entity\IdModel
{
    
$model = new RetailCrm\Api\Model\Entity\IdModel();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}



    return $model;
}
