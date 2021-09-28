Thêm vào trong file composer.json

"psr-4": {
    "camera\\": "vendor/camera/src/"
},

Thêm vào trong file app.php

"providers" => [
    \camera\CameraServiceProvider::class,
]
