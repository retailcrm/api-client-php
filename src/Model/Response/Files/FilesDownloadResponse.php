<?php

/**
 * PHP version 7.3
 *
 * @category FilesDownloadResponse
 * @package  RetailCrm\Api\Model\Response\Files
 */

namespace RetailCrm\Api\Model\Response\Files;

use Psr\Http\Message\StreamInterface;
use RetailCrm\Api\Interfaces\ResponseInterface;

/**
 * Class FilesDownloadResponse
 *
 * @category FilesDownloadResponse
 * @package  RetailCrm\Api\Model\Response\Files
 */
class FilesDownloadResponse implements ResponseInterface
{
    /** @var string */
    public $fileName;

    /** @var StreamInterface */
    public $data;

    /**
     * FilesDownloadResponse constructor.
     *
     * @param string                            $fileName
     * @param \Psr\Http\Message\StreamInterface $data
     */
    public function __construct(string $fileName, StreamInterface $data)
    {
        $this->fileName = $fileName;
        $this->data     = $data;
    }
}
