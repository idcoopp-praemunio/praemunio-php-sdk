<?php
/**
 * PraemunioClient
 * PHP version 8.1
 *
 * High-level client for the Praemunio public API.
 */

namespace OpenAPI\Client;

use OpenAPI\Client\Api\DefaultApi;
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
}