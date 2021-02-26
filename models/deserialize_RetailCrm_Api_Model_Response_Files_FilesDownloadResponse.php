<?php

function deserialize_RetailCrm_Api_Model_Response_Files_FilesDownloadResponse(array $jsonData): RetailCrm\Api\Model\Response\Files\FilesDownloadResponse
{
    
$model = new RetailCrm\Api\Model\Response\Files\FilesDownloadResponse();
if (isset($jsonData['file_name'])) {
    $model->fileName = $jsonData['file_name'];

}
if (isset($jsonData['data'])) {
    $model->data = $jsonData['data'];

}



    return $model;
}
