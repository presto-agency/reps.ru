<?php


namespace App\Services\ImageService;

use Image;
use Intervention\Image\ImageManager;


class ResizeImage
{


    /**
     * Resize image
     *
     * @param $imageFile
     * @param int $width
     * @param int $height
     * @param $aspectRatio
     * @return string $path
     */

    public static function resizeImg($imageFile, $width, $height, $aspectRatio, $path)
    {
        $ext = $imageFile->getClientOriginalExtension();
        $newFileName = \Str::random(32);
        $savePath = 'storage/' . $path . '/' . $newFileName . '.' . $ext;

        if ($aspectRatio === true) {
            $aspectRatio = function ($constraint) {
                $constraint->aspectRatio();
            };
        } else {
            $aspectRatio = null;
        }
        $openImage = Image::make($imageFile);

        // open an image file -> now you are able to resize the instance -> finally we save the image as a new file
        $openImage->resize($width, $height, $aspectRatio)->save($savePath, 100);

        return $savePath;
    }
}
