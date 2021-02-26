<?php

function serialize_RetailCrm_Api_Model_Response_Files_FilesDownloadResponse(RetailCrm\Api\Model\Response\Files\FilesDownloadResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->fileName) {
    $jsonData["file_name"] = $model->fileName;
}
if (null !== $model->data) {
    $jsonData["data"] = $model->data;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
