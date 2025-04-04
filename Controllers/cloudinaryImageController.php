<?php
function cloudinaryImageService($image_url)
{
    $tempFilePath = $image_url['tmp_name'];
    $cloudName = "dmcppzpgl";
    $uploadUrl = "https://api.cloudinary.com/v1_1/$cloudName/upload";
    $postData = [
        'file' => new CURLFile(realpath($tempFilePath)),
        'upload_preset' => "ml_default",
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $uploadUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($response, true);
    return $result;
}
