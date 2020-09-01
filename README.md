# BjornLunden
API wrapper for Björn Lundén

## Install with composer
`composer require jongotlin/bjorn-lunden`


## Example
```php
$bjornLunden = new \JGI\BjornLunden\BjornLunden(new \GuzzleHttp\Client());
$credentials = new \JGI\BjornLunden\Credentials($userKey, $clientId, $clientSecret);
$token = $bjornLunden->tokens($credentials)->create();
$credentials->setToken($token->getAccessToken());

$users = $bjornLunden->users($credentials)->all();

var_dump($users);

```