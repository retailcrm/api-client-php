<?php

function deserialize_RetailCrm_Api_Model_Response_Api_Credentials(array $jsonData): RetailCrm\Api\Model\Response\Api\Credentials
{
    
$model = new RetailCrm\Api\Model\Response\Api\Credentials();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['credentials'])) {
    $model->credentials = $jsonData['credentials'];

}
if (isset($jsonData['siteAccess'])) {
    $model->siteAccess = $jsonData['siteAccess'];

}
if (isset($jsonData['sitesAvailable'])) {
    $model->sitesAvailable = $jsonData['sitesAvailable'];

}



    return $model;
}
