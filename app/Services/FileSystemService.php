<?php


namespace App\Services;


use Illuminate\Support\Facades\Storage;

class FileSystemService
{

    /**
     * @param $files
     * @param $directoryName
     * @return array
     */
    public function uploadMultiple($files, $directoryName)
    {
        $filePaths = [];

        if ($files && count($files) > 0) {
            foreach ($files as $file) {
                $filePaths[] = $file->store($directoryName, 'public');
            }
        }

        return $filePaths;
    }

    /**
     * @param $file
     * @param $oldFileName
     * @param $directoryName
     * @return null
     */
    public function fileUpload($file, $oldFileName, $directoryName)
    {
        $filePath = null;

        if ($file) {
            if ($oldFileName) {
                Storage::disk('public')->delete($oldFileName);
            }
            $filePath = $file->store("{$directoryName}", 'public');
        } else {
            $filePath = $oldFileName;
        }

        return $filePath;
    }
}
