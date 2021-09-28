<?php
namespace camera\Services\CameraService;
use camera\Services\CameraService\CameraServiceInterface;

class IPCamera implements CameraServiceInterface {
    public function config(){
        dd('ip camera config');
    }
}
