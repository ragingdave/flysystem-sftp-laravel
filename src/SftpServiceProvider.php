<?php

namespace RagingDave\Filesystem\Sftp;

use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use League\Flysystem\Sftp\SftpAdapter;

class SftpServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $filesystem = $this->app->make('filesystem');

        $filesystem->extend('sftp', function ($app, $config) {
            return new Filesystem(new SftpAdapter(array_except($config, ['driver'])));
        });
    }
}
