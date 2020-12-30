<?php


namespace AppBundle\Services;


class Base64
{
    public static function base64ToImage($base64_string, $output_file)
    {
        $data = explode(',', $base64_string);
        if (isset($data[1])) {
            $bin = base64_decode($data[1]);
        } else {
            $bin = base64_decode($data[0]);
        }
        $imageData = imagecreatefromstring($bin);

        if (!$imageData) {
            throw new \RuntimeException('Failed to decode base64 image');
        }

        $filename = $output_file . '.jpg';
        imagejpeg($imageData, $filename);
    }

    public static function imageToBase64(string $imagePath) {
        $type = pathinfo($imagePath, PATHINFO_EXTENSION);
        $data = file_get_contents($imagePath);
        return 'data:image/' . $type . ';base64,' . base64_encode($data);
    }

    public static function base64UrlEncode(string $toEncode) {
        return str_replace(
            ['+', '/', '='],
            ['-', '_', ''],
            base64_encode($toEncode)
        );
    }
}