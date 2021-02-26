<?php

function deserialize_RetailCrm_Api_Model_Entity_Customers_SerializedCustomerReference(array $jsonData): RetailCrm\Api\Model\Entity\Customers\SerializedCustomerReference
{
    
$model = new RetailCrm\Api\Model\Entity\Customers\SerializedCustomerReference();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}



    return $model;
}
