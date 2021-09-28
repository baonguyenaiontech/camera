<?php
namespace camera;

use Illuminate\Support\ServiceProvider;
use camera\Services\CameraService\IPCamera;

class CameraServiceProvider extends ServiceProvider{
    public function register()
    {
        $configs = split_files_with_basename($this->app['files']->glob(__DIR__.'/../config/*.php'));
        foreach($configs as $key => $row){
            $this->mergeConfigFrom($row, $key);
        }
    }

    public function boot(){
        $configs = split_files_with_basename($this->app['files']->glob(__DIR__.'/../config/*.php'));
        foreach($configs as $key => $row){
            $this->publishes([
                __DIR__.'/../config/'.$key.'.php' => config_path($key.'.php'),
            ], $key);
        }
    }
}
