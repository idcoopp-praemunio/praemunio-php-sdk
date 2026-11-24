<?php
/**
 * WorkspacesApi
 * PHP version 8.1
 *
 * Praemunio Workspaces API wrapper.
 */

namespace OpenAPI\Client\Api;

use OpenAPI\Client\Api\DefaultApi;

class WorkspacesApi
{
    private $api;

    public function __construct(DefaultApi $api)
    {
        $this->api = $api;
    }

    /**
     * List all workspaces, optionally filtered by team.
     *
     * @param string|null $team_id Filter by team ID
     * @return mixed
     */
    public function list(?string $team_id = null)
    {
        return $this->api->workspacesGet($team_id);
    }

    /**
     * Get the drive (root folders) for the authenticated user.
     *
     * @return mixed
     */
    public function drive()
    {
        return $this->api->workspacesDriveGet();
    }

    /**
     * Get teams associated with workspaces.
     *
     * @param string|null $team_id Team ID
     * @return mixed
     */
    public function teams(?string $team_id = null)
    {
        return $this->api->workspacesTeamsGet($team_id);
    }

    /**
     * Get workspace details.
     *
     * @param string|null $workspace_id Workspace ID
     * @return mixed
     */
    public function details(?string $workspace_id = null)
    {
        return $this->api->workspacesDetailsGet($workspace_id);
    }

    /**
     * Create a new workspace.
     *
     * @param mixed $request WorkspaceCreatePostRequest
     * @return mixed
     */
    public function create($request)
    {
        return $this->api->workspacesCreatePost($request);
    }

    /**
     * Update a workspace.
     *
     * @param mixed $request WorkspaceUpdatePutRequest
     * @return mixed
     */
    public function update($request)
    {
        return $this->api->workspacesUpdatePut($request);
    }

    /**
     * Delete a workspace.
     *
     * @param mixed $request WorkspaceDeleteDeleteRequest
     * @return mixed
     */
    public function delete($request)
    {
        return $this->api->workspacesDeleteDelete($request);
    }
}