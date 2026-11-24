# Praemunio PHP SDK

> Client officiel pour l'API Praemunio — PHP

## 📦 Installation

```bash
composer require praemunio/sdk
```

Ou ajoutez à votre `composer.json` :

```json
{
    "require": {
        "praemunio/sdk": "^1.0"
    }
}
```

Puis exécutez :

```bash
composer install
```

## 🚀 Quick Start (5 minutes)

### 1. Obtenir vos clés API

Récupérez vos clés depuis le [dashboard Praemunio](https://dashboard.praemunio.io) :
- **Public Key** : `pk_test_...` (sandbox) ou `pk_live_...` (production)
- **Secret Key** : `sk_test_...` (sandbox) ou `sk_live_...` (production)

### 2. Initialiser le client

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use OpenAPI\Client\PraemunioClient;

// Mode sandbox (tests)
$client = PraemunioClient::sandbox('pk_test_xxx', 'sk_test_xxx');

// Mode production
// $client = PraemunioClient::live('pk_live_xxx', 'sk_live_xxx');
```

### 3. S'authentifier

```php
$client->authenticate();

echo "Access token: " . $client->getAccessToken() . "\n";
echo "Refresh token: " . $client->getRefreshToken() . "\n";
```

### 4. Premier appel API

```php
$api = $client->createApi();

// Lister les workspaces
$result = $api->workspacesDriveGet();
print_r($result);
```

### 5. Exemple complet

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use OpenAPI\Client\PraemunioClient;

$client = PraemunioClient::sandbox('pk_test_xxx', 'sk_test_xxx');

// Authentification
$client->authenticate();
echo "Authentifié avec succès !\n";

// Premier appel API
$api = $client->createApi();
$workspaces = $api->workspacesDriveGet();

echo "Workspaces: " . json_encode($workspaces) . "\n";
```

## 🔐 Authentification

Le SDK gère automatiquement l'authentification et le refresh des tokens :

```php
// Authentification initiale
$client->authenticate();

// Le token est renouvelé automatiquement lors des appels API
// Vous pouvez aussi forcer le refresh :
$client->refresh();
```

## 🌍 Environnements

| Environnement | URL | Utilisation |
|---------------|-----|-------------|
| **Sandbox** | `https://sandbox-api.praemunio.org/api/v1` | Tests et développement |
| **Live** | `https://api.praemunio.org/api/v1` | Production |

```php
// Sandbox (par défaut)
$client = PraemunioClient::sandbox($publicKey, $secretKey);

// Production
$client = PraemunioClient::live($publicKey, $secretKey);
```

## 📚 Documentation complète

- [Documentation officielle PHP](https://docs.praemunio.io/sdk/php)
- [Référence API](https://docs.praemunio.io/api-reference)
- [Guide d'authentification](https://docs.praemunio.io/authentication)
- [Exemples](https://docs.praemunio.io/sdk/php/examples)

## 📋 Endpoints principaux

| Méthode | Endpoint | Description |
|---------|----------|-------------|
| `POST` | `/auth/auth-token` | Authentification |
| `GET` | `/workspaces/drive` | Lister les workspaces |
| `POST` | `/teams/create` | Créer une équipe |
| `GET` | `/folders/{id}` | Détails d'un dossier |
| `POST` | `/documents/archive` | Archiver un document |

## 🤝 Support

- 📖 [Documentation](https://docs.praemunio.io)
- 🐛 [Signaler un bug](https://github.com/praemunio/sdks/issues)
- 💬 [Discord](https://discord.gg/praemunio)
- 📧 [Email](mailto:support@praemunio.org)