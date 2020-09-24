<?php

/**
 * PHP version 5.4
 *
 * CostsTrait
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
 */
namespace RetailCrm\Methods\V5;

/**
 * PHP version 5.4
 *
 * Files trait
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
 */
trait Files
{
    /**
     * Returns filtered files list
     *
     * @param array $filter (default: array())
     * @param int   $page   (default: null)
     * @param int   $limit  (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function filesList(array $filter = [], $limit = null, $page = null)
    {
        $parameters = [];

        if (count($filter)) {
            $parameters['filter'] = $filter;
        }
        if (null !== $page) {
            $parameters['page'] = (int) $page;
        }
        if (null !== $limit) {
            $parameters['limit'] = (int) $limit;
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/files',
            "GET",
            $parameters
        );
    }

    /**
     * Upload file
     *
     * @param string $file filepath
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function fileUpload($file)
    {
        if (!file_exists($file)) {
            throw new \InvalidArgumentException("File doesn't exist");
        }

        if (filesize($file) == 0) {
            throw new \InvalidArgumentException("Empty file provided");
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/files/upload',
            "POST",
            ["file" => $file]
        );
    }

    /**
     * Get file by id
     *
     * @param string $id file ID
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function fileGet($id)
    {
        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/files/$id",
            "GET"
        );
    }

    /**
     * Delete file by id
     *
     * @param string $id file ID
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function fileDelete($id)
    {
        if (empty($id)) {
            throw new \InvalidArgumentException(
                'Parameter `id` must contains a data'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/files/%s/delete', $id),
            "POST"
        );
    }

    /**
     * Download file by id
     *
     * @param string $id file ID
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function fileDownload($id)
    {
        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRawRequest(
            sprintf('/files/%s/download', $id),
            "GET"
        );
    }

    /**
     * Edit file data
     *
     * @param int $id file ID
     * @param array $file file data
     *
     * $file = [
     *     'filename' => 'Test file',
     *     'attachment' => [
     *         [
     *             'customer' => [
     *                  'id' => 1
     *              ],
     *              'order' => [
     *                  'id' => 1
     *              ]
     *         ]
     *     ]
     * ];
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function fileEdit($id, array $file)
    {
        if (empty($id)) {
            throw new \InvalidArgumentException(
                'Parameter `id` can`t be blank'
            );
        }

        if (empty($file)) {
            throw new \InvalidArgumentException(
                'Parameter `file` must contains a data'
            );
        }

        $allowedFields = ['filename', 'attachment'];
        foreach (array_keys($file) as $field) {
            if (!in_array($field, $allowedFields)) {
                throw new \InvalidArgumentException(
                    'Invalid structure of `file` parameter'
                );
            }
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/files/%s/edit', $id),
            "POST",
            ['file' => json_encode($file), 'id' => $id]
        );
    }
}
