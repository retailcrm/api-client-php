<?php

function deserialize_RetailCrm_Api_Model_Entity_Payments_ApiCreateInvoiceResponseResult(array $jsonData): RetailCrm\Api\Model\Entity\Payments\ApiCreateInvoiceResponseResult
{
    
$model = new RetailCrm\Api\Model\Entity\Payments\ApiCreateInvoiceResponseResult();
if (isset($jsonData['link'])) {
    $model->link = $jsonData['link'];

}



    return $model;
}
