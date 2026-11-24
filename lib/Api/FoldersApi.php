<?php
/**
 * FoldersApi
 * PHP version 8.1
 *
 * Praemunio Folders API wrapper.
 */

namespace OpenAPI\Client\Api;

use OpenAPI\Client\Api\DefaultApi;

class FoldersApi
{
    private $api;

    public function __construct(DefaultApi $api)
    {
        $this->api = $api;
    }

    /**
     * List folders in a workspace.
     *
     * @param string $workspace_id Workspace ID
     * @return mixed
     */
    public function list(string $workspace_id)
    {
        return $this->api->foldersGet($workspace_id);
    }

    /**
     * Get folder content.
     *
     * @param array|null $folder_id Folder IDs
     * @return mixed
     */
    public function content(?array $folder_id = null)
    {
        return $this->api->foldersContentGet($folder_id);
    }

    /**
     * Get folder details.
     *
     * @param string|null $folder_id Folder ID
     * @return mixed
     */
    public function details(?string $folder_id = null)
    {
        return $this->api->foldersDetailsGet($folder_id);
    }

    /**
     * Create a new folder.
     *
     * @param mixed $request FoldersCreatePostRequest
     * @return mixed
     */
    public function create($request)
    {
        return $this->api->foldersCreatePost($request);
    }

    /**
     * Update a folder.
     *
     * @param mixed $request FoldersUpdatePutRequest
     * @return mixed
     */
    public function update($request)
    {
        return $this->api->foldersUpdatePut($request);
    }

    /**
     * Move a folder.
     *
     * @param mixed $request FoldersDeleteDeleteRequest
     * @return mixed
     */
    public function move($request)
    {
        return $this->api->foldersMovePost($request);
    }

    /**
     * Delete a folder.
     *
     * @param mixed $request FoldersDeleteDeleteRequest
     * @return mixed
     */
    public function delete($request)
    {
        return $this->api->foldersDeleteDelete($request);
    }
}