<?php


namespace App\Services\ServiceAssistants;


class PathHelper
{
    /**
     * @param $storage
     * @return bool
     */
    public static function checkUploadStoragePath($storage)
    {
        \Storage::disk('public')->exists($storage) === false ? \Storage::disk('public')->makeDirectory($storage) : null;
        return '/storage' . $storage;
    }

    public static function checkFileAndDelete($file_path)
    {
        $getStorageFilePath = \Str::replaceFirst('storage', '', $file_path);
        $checkFiles = \Storage::disk('public')->exists($getStorageFilePath);

        if ($checkFiles === true) {
            \Storage::disk('public')->delete($getStorageFilePath);
            return true;
        }
        return false;
    }

    public static function checkAvatarAndDelete($file_path)
    {
        $getStorageFilePath = \Str::replaceFirst(asset('storage'), '', $file_path);
        $checkFiles = \Storage::disk('public')->exists($getStorageFilePath);
        if ($checkFiles === true) {
            \Storage::disk('public')->delete($getStorageFilePath);
            return true;
        }
        return false;
    }

    public static function checkStorageFileExists($file_path)
    {
        $getStorageFilePath = \Str::replaceFirst(asset('storage'), '', $file_path);
        $checkFiles = \Storage::disk('public')->exists($getStorageFilePath);
        if ($checkFiles) {
            return true;
        }
        return false;
    }

    public static function checkStorageFileExistsNoAsset($file_path)
    {
        $getStorageFilePath = \Str::replaceFirst('storage', '', $file_path);

        $checkFiles = \Storage::disk('public')->exists($getStorageFilePath);
        if ($checkFiles) {
            return true;
        }
        return false;
    }
}
