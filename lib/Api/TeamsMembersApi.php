<?php
/**
 * TeamsMembersApi
 * PHP version 8.1
 *
 * Praemunio Teams Members API wrapper.
 */

namespace OpenAPI\Client\Api;

use OpenAPI\Client\Api\DefaultApi;

class TeamsMembersApi
{
    private $api;

    public function __construct(DefaultApi $api)
    {
        $this->api = $api;
    }

    /**
     * List team members with pagination.
     *
     * @param string|null $team_id Team ID
     * @param float|null $page Page number
     * @param float|null $limit Items per page
     * @return mixed
     */
    public function list(?string $team_id = null, ?float $page = null, ?float $limit = null)
    {
        return $this->api->teamsMembersGet($team_id, $page, $limit);
    }

    /**
     * Add a member to a team.
     *
     * @param mixed $request TeamsMembersAddPostRequest
     * @return mixed
     */
    public function add($request)
    {
        return $this->api->teamsMembersAddPost($request);
    }
}