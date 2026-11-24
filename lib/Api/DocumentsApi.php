<?php
/**
 * DocumentsApi
 * PHP version 8.1
 *
 * Praemunio Documents API wrapper.
 */

namespace OpenAPI\Client\Api;

use OpenAPI\Client\Api\DefaultApi;

class DocumentsApi
{
    private $api;

    public function __construct(DefaultApi $api)
    {
        $this->api = $api;
    }

    /**
     * List documents in a workspace.
     *
     * @param string|null $workspace_id Workspace ID
     * @return mixed
     */
    public function list(?string $workspace_id = null)
    {
        return $this->api->documentsGet($workspace_id);
    }

    /**
     * Get document details.
     *
     * @param string|null $document_id Document ID
     * @return mixed
     */
    public function details(?string $document_id = null)
    {
        return $this->api->documentsDetailsGet($document_id);
    }

    /**
     * Upload a document.
     *
     * @param string|null $workspace_id Workspace ID
     * @param string|null $folder_id Folder ID
     * @param mixed $file1 File (primary)
     * @param mixed $file2 File (secondary)
     * @return mixed
     */
    public function upload(?string $workspace_id = null, ?string $folder_id = null, $file1 = null, $file2 = null)
    {
        return $this->api->documentsUploadPost($workspace_id, $folder_id, $file1, $file2);
    }

    /**
     * Stream a document.
     *
     * @param mixed $body Request body
     * @param string|null $document_id Document ID
     * @return mixed
     */
    public function stream($body = null, ?string $document_id = null)
    {
        return $this->api->documentsStreamGet($body, $document_id);
    }

    /**
     * Archive a document.
     *
     * @param mixed $request DocumentsArchivePostRequest
     * @return mixed
     */
    public function archive($request)
    {
        return $this->api->documentsArchivePost($request);
    }

    /**
     * Restore an archived document.
     *
     * @param mixed $request DocumentsRestorePostRequest
     * @return mixed
     */
    public function restore($request)
    {
        return $this->api->documentsRestorePost($request);
    }

    /**
     * Move a document.
     *
     * @param mixed $request DocumentsMovePostRequest
     * @return mixed
     */
    public function move($request)
    {
        return $this->api->documentsMovePost($request);
    }

    /**
     * Update a document.
     *
     * @param mixed $request DocumentsUpdatePutRequest
     * @return mixed
     */
    public function update($request)
    {
        return $this->api->documentsUpdatePut($request);
    }

    /**
     * Delete a document.
     *
     * @param mixed $request DocumentsDeleteDeleteRequest
     * @return mixed
     */
    public function delete($request)
    {
        return $this->api->documentsDeleteDelete($request);
    }
}