## Laravel Flysystem SFTP

This package provides a service provider to add the sftp flysystem-driver to Laravel Storage mechanisms.

## Installation

In order to install this package, simply require the package

```
composer require ragingdave/flysystem-sftp-laravel
```

### Laravel version < 5.5

Add the service provider to `config/app.php`:
```PHP
RagingDave\Filesystem\Sftp\SftpServiceProvider::class,
```

## Configuration

To configure an sftp connection, add a new configuration to `config/filesystems.php`:

```PHP
'disks' => [
    'sftp' => [
        'driver' => 'sftp',
        'host' => env('SFTP_HOST'),
        'port' => env('SFTP_PORT', 22),
        'username' => env('SFTP_USERNAME'),
        'password' => env('SFTP_PASSWORD'),
        'privateKey' => storage_path('keys') . '/sftp_key', // This can also be the full private key contents
        'root' => env('SFTP_ROOT'),
        'timeout' => env('SFTP_TIMEOUT', 10),
    ],
],
```

Additional options that `thephpleague/flysystem-sftp` supports can be passed as all options are passed-through to the adapter.
