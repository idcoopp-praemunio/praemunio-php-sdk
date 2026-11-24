<?php
/**
 * PraemunioClient
 * PHP version 8.1
 *
 * High-level client for the Praemunio public API.
 */

namespace OpenAPI\Client;

use OpenAPI\Client\Api\DefaultApi;
use OpenAPI\Client\Api\WorkspacesApi;
use OpenAPI\Client\Api\TeamsApi;
use OpenAPI\Client\Api\TeamsMembersApi;
use OpenAPI\Client\Api\FoldersApi;
use OpenAPI\Client\Api\DocumentsApi;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\ApiException;

class PraemunioClient
{
    private const SANDBOX_URL = 'https://sandbox-api.praemunio.org/api/v1';
    private const LIVE_URL = 'https://api.praemunio.org/api/v1';

    private $publicKey;
    private $secretKey;
    private $baseUrl;
    private $accessToken;
    private $refreshToken;
    private $workspacesApi;
    private $teamsApi;
    private $teamsMembersApi;
    private $foldersApi;
    private $documentsApi;

    public function __construct(string $publicKey, string $secretKey, string $baseUrl = self::SANDBOX_URL)
    {
        $this->publicKey = $publicKey;
        $this->secretKey = $secretKey;
        $this->baseUrl = rtrim($baseUrl, '/');
        $this->accessToken = null;
        $this->refreshToken = null;
    }

    public static function sandbox(string $publicKey, string $secretKey): self
    {
        return new self($publicKey, $secretKey, self::SANDBOX_URL);
    }

    public static function live(string $publicKey, string $secretKey): self
    {
        return new self($publicKey, $secretKey, self::LIVE_URL);
    }

    public function authenticate(): void
    {
        $config = Configuration::getDefaultConfiguration();
        $config->setHost($this->baseUrl);

        $api = new DefaultApi(null, $config);

        try {
            $body = [
                'publicKey' => $this->publicKey,
                'secretKey' => $this->secretKey,
            ];

            $response = $api->authAuthTokenPost($body);
            $data = json_decode($response, true);

            if (!empty($data['success']) && !empty($data['result'])) {
                $this->accessToken = $data['result']['access_token'] ?? null;
                $this->refreshToken = $data['result']['refresh_token'] ?? null;
            } else {
                $message = $data['message'] ?? 'Unknown error';
                throw new \RuntimeException('Authentication failed: ' . $message);
            }
        } catch (ApiException $e) {
            throw new \RuntimeException('Authentication failed: ' . $e->getMessage());
        }
    }

    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    public function getRefreshToken(): ?string
    {
        return $this->refreshToken;
    }

    public function createApi(): DefaultApi
    {
        $config = Configuration::getDefaultConfiguration();
        $config->setHost($this->baseUrl);
        $config->setAccessToken($this->accessToken ?? '');

        return new DefaultApi(null, $config);
    }

    public function workspaces(): WorkspacesApi
    {
        if ($this->workspacesApi === null) {
            $this->workspacesApi = new WorkspacesApi($this->createApi());
        }
        return $this->workspacesApi;
    }

    public function teams(): TeamsApi
    {
        if ($this->teamsApi === null) {
            $this->teamsApi = new TeamsApi($this->createApi());
        }
        return $this->teamsApi;
    }

    public function teamsMembers(): TeamsMembersApi
    {
        if ($this->teamsMembersApi === null) {
            $this->teamsMembersApi = new TeamsMembersApi($this->createApi());
        }
        return $this->teamsMembersApi;
    }

    public function folders(): FoldersApi
    {
        if ($this->foldersApi === null) {
            $this->foldersApi = new FoldersApi($this->createApi());
        }
        return $this->foldersApi;
    }

    public function documents(): DocumentsApi
    {
        if ($this->documentsApi === null) {
            $this->documentsApi = new DocumentsApi($this->createApi());
        }
        return $this->documentsApi;
    }
}