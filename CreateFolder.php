<?php 

require 'vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\Exception\AwsException;

$s3Client = new S3Client([
    
//AWS S3 API Credentials Integration 

'region' => 'xx-xxxxx-xx',
'version' => 'xxxxx',
'credentials' => [
    'key' => 'xxxxxx',
    'secret' => 'xxxxxx',
],
]);

//$buckets = $s3Client->listBuckets();


echo 'Creating a new folder';
$s3Client->putObject(array( 'Bucket' => 'bucket_name','Key' => 'folder_name/'));


?>