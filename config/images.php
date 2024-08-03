<?php

return [

    /**
     * Default Image quality to be used by glide image URL helper
     */
    'quality' => env('IMAGES_DEFAULT_QUALITY', 50),
    /**
     * Default image format to be used by glide image URL helper
     * Viable Options: image/webp, image/jpeg, image/png
     */
    'format' => env('IMAGES_DEFAULT_FORMAT', "image/webp"),

];
