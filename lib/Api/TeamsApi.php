<?php
/**
 * TeamsApi
 * PHP version 8.1
 *
 * Praemunio Teams API wrapper.
 */

namespace OpenAPI\Client\Api;

use OpenAPI\Client\Api\DefaultApi;

class TeamsApi
{
    private $api;

    public function __construct(DefaultApi $api)
    {
        $this->api = $api;
    }

    /**
     * List all teams.
     *
     * @return mixed
     */
    public function list()
    {
        return $this->api->teamsGet();
    }

    /**
     * Get teams dashboard data.
     *
     * @return mixed
     */
    public function dashboard()
    {
        return $this->api->teamsDashboardGet();
    }

    /**
     * Get team information.
     *
     * @param mixed $body Request body
     * @param array|null $team_id Team IDs
     * @return mixed
     */
    public function info($body = null, ?array $team_id = null)
    {
        return $this->api->teamsInfoGet($body, $team_id);
    }

    /**
     * Get workspaces associated with teams.
     *
     * @param string|null $team_id Team ID
     * @return mixed
     */
    public function workspaces(?string $team_id = null)
    {
        return $this->api->teamsWorkspacesGet($team_id);
    }

    /**
     * Get team logs.
     *
     * @param array|null $team_id Team IDs
     * @param string|null $page Page number
     * @param string|null $limit Items per page
     * @return mixed
     */
    public function logs(?array $team_id = null, ?string $page = null, ?string $limit = null)
    {
        return $this->api->teamsLogsGet($team_id, $page, $limit);
    }

    /**
     * Create a new team.
     *
     * @param mixed $request TeamsCreatePostRequest
     * @return mixed
     */
    public function create($request)
    {
        return $this->api->teamsCreatePost($request);
    }

    /**
     * Update a team.
     *
     * @param mixed $request TeamsUpdatePutRequest
     * @return mixed
     */
    public function update($request)
    {
        return $this->api->teamsUpdatePut($request);
    }

    /**
     * Delete a team.
     *
     * @param mixed $request TeamsDeleteDeleteRequest
     * @return mixed
     */
    public function delete($request)
    {
        return $this->api->teamsDeleteDelete($request);
    }
}