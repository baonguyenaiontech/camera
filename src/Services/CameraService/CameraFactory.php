<?php

namespace camera\Services\CameraService;

class CameraFactory
{
    public static function getCamera($cameraName){
        $listCameraName = config('camera.list_camera');
        if(array_key_exists($cameraName, $listCameraName)){
            return new $listCameraName[$cameraName];
        }

        return new IPCamera();
    }
}
