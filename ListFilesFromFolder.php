<?php 

require 'vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\Exception\AwsException;

$s3Client = new S3Client([
//AWS S3 API Credentials Integration 

'region' => 'xx-xxxx-xx',
'version' => 'xxxxxxx',
'credentials' => [
    'key' => 'xxx',
    'secret' => 'xxx',
],
]);


echo 'Listing all files / folders on : folder_name';
    $results = $s3Client->getPaginator('ListObjects', [
        'Bucket' => 'folder_name',
        'Demiliter'=>'/sub_folder'
    ]);

    
    foreach ($results as $result) {
        foreach ($result['Contents'] as $object) {
            echo $object['Key'] . PHP_EOL;
        }
    }
?>