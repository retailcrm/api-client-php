<?php

/**
 * PHP version 7.3
 *
 * @category FilesDownloadResponseHandler
 * @package  RetailCrm\Api\Handler\Response
 */

namespace RetailCrm\Api\Handler\Response;

use RetailCrm\Api\Event\SuccessRequestEvent;
use RetailCrm\Api\Model\Response\Files\FilesDownloadResponse;
use RetailCrm\Api\Model\ResponseData;

/**
 * Class FilesDownloadResponseHandler
 *
 * @category FilesDownloadResponseHandler
 * @package  RetailCrm\Api\Handler\Response
 */
class FilesDownloadResponseHandler extends AbstractResponseHandler
{
    /**
     * @inheritDoc
     */
    protected function handleResponse(ResponseData $responseData)
    {
        if (!preg_match('/^\/api\/v5\/files\/\d+\/download$/', $responseData->request->getUri()->getPath())) {
            $this->next($responseData);

            return;
        }

        $responseData->responseModel = new FilesDownloadResponse(
            static::fileNameFromDisposition($responseData->response->getHeader('Content-Disposition')),
            $responseData->response->getBody()
        );
        $this->dispatch(new SuccessRequestEvent(
            $responseData->baseUrl,
            $responseData->request,
            $responseData->response,
            $responseData->responseModel
        ));
    }

    /**
     * Parses filename from a Content-Disposition header value.
     *
     * @param string[] $headerValues
     *
     * @return string
     * @link  https://tools.ietf.org/html/rfc6266
     * @link https://tools.ietf.org/html/rfc2388
     */
    private static function fileNameFromDisposition(array $headerValues): string
    {
        $fileName = '';

        foreach ($headerValues as $value) {
            $value = trim($value);

            if (false === strpos($value, ';')) {
                continue;
            }

            $parts      = explode(';', $value, 2)[1];
            $parts      = explode(';', $parts);
            $attributes = [];

            foreach ($parts as $part) {
                if (false === strpos($part, '=')) {
                    continue;
                }

                [$key, $value]          = explode('=', $part, 2);
                $attributes[trim($key)] = trim($value);
            }

            if (empty($attributes['filename'])) {
                continue;
            }

            $fileName = trim($attributes['filename']);

            if (('' !== $fileName) && '"' === $fileName[0] && $fileName[strlen($fileName) - 1] === '"') {
                $fileName = substr($fileName, 1, -1);
            }
        }

        return $fileName;
    }
}
