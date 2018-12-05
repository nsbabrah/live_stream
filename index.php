<?php
//index.php

require_once(__DIR__.'./vendor/autoload.php');

// $sf = new com\wowza\Recording();

// $recordName= "myStream";
// $instanceName= "_definst_";
// $recorderState= "Waiting for stream";
// $defaultRecorder= true;
// $segmentationType= "None";
// $outputPath= "/usr/local/WowzaStreamingEngine/content";
// $baseFile= "testme.mp4";
// $fileFormat= "MP4"; // or FLV
// $fileVersionDelegateName= "com.wowza.wms.livestreamrecord.manager.StreamRecorderFileVersionDelegate";
// $fileTemplate= "${BaseFileName}_${RecordingStartTime}_${SegmentNumber}";
// $segmentDuration= "900000";
// $segmentSize= "10485760";
// $segmentSchedule= "";
// $recordData= true;
// $startOnKeyFrame= true;
// $splitOnTcDiscontinuity= false;
// $option= "Version existing file";
// $moveFirstVideoFrameToZero= true;
// $currentSize= 0;
// $currentDuration= 0;
// $recordingStartTime = "";

// $response = $sf->create($recordName, $instanceName, $recorderState, $defaultRecorder,
// 					$segmentationType, $outputPath, $baseFile, $fileFormat, $fileVersionDelegateName, $fileTemplate,
// 					$segmentDuration, $segmentSize, $segmentSchedule, $recordData, $startOnKeyFrame, $splitOnTcDiscontinuity,
// 					$option, $moveFirstVideoFrameToZero, $currentSize, $currentDuration, $recordingStartTime);
// This is for a framework if you use one.
//$framework = new Project\Framework();
//$framework->registerDebugHandlers();
//$framework->processHttpSapiRequest();

require_once("./config.php"); 
$server = new Com\Wowza\Server($setup);

// $sf = new Com\Wowza\Statistics($setup);
// $response = $sf->getServerStatistics($server);

$sf = new Com\Wowza\Recording($setup);

// $recordName= "myStream";
// $instanceName= "_definst_";
// $recorderState= "Waiting for stream";
// $defaultRecorder= true;
// $segmentationType= "None";
// $outputPath= "/usr/local/WowzaStreamingEngine/content";
// $baseFile= "testme.mp4";
// $fileFormat= "MP4"; // or FLV
// $fileVersionDelegateName= "com.wowza.wms.livestreamrecord.manager.StreamRecorderFileVersionDelegate";
// $fileTemplate= "";
// $segmentDuration= "900000";
// $segmentSize= "10485760";
// $segmentSchedule= "";
// $recordData= true;
// $startOnKeyFrame= true;
// $splitOnTcDiscontinuity= false;
// $option= "Version existing file";
// $moveFirstVideoFrameToZero= true;
// $currentSize= 0;
// $currentDuration= 0;
// $recordingStartTime = "";

// $response = $sf->create($recordName, $instanceName, $recorderState, $defaultRecorder,
// 					$segmentationType, $outputPath, $baseFile, $fileFormat, $fileVersionDelegateName, $fileTemplate,
// 					$segmentDuration, $segmentSize, $segmentSchedule, $recordData, $startOnKeyFrame, $splitOnTcDiscontinuity,
// 					$option, $moveFirstVideoFrameToZero, $currentSize, $currentDuration, $recordingStartTime);

$sf = new com\wowza\Recording($setup);
$response = $sf->getAll();

var_dump($response);
// $framework = new Project\Framework();
// $framework->registerDebugHandlers();
// $framework->processHttpSapiRequest();

 // is similar to the below - move it where it needs to be

?>