<?php 

require 'vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\Exception\AwsException;

$s3Client = new S3Client([
//AWS S3 API Credentials Integration 

'region' => 'xx-xxxx-xx',
'version' => 'xxxxxx',
'credentials' => [
    'key' => 'xxxxxx',
    'secret' => 'xxxxx',
],
]);
echo 'Deleting a new folder';
$s3Client->deleteObject(array( 'Bucket' => 'bucket_name', 'Key' =>'folder_name'));

?>