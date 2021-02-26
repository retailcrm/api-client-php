<?php

function deserialize_RetailCrm_Api_Model_Entity_Integration_Payment_Actions(array $jsonData): RetailCrm\Api\Model\Entity\Integration\Payment\Actions
{
    
$model = new RetailCrm\Api\Model\Entity\Integration\Payment\Actions();
if (isset($jsonData['create'])) {
    $model->create = $jsonData['create'];

}
if (isset($jsonData['approve'])) {
    $model->approve = $jsonData['approve'];

}
if (isset($jsonData['cancel'])) {
    $model->cancel = $jsonData['cancel'];

}
if (isset($jsonData['refund'])) {
    $model->refund = $jsonData['refund'];

}



    return $model;
}
