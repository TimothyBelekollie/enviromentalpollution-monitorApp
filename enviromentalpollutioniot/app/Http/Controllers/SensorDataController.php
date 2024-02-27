<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SensorData;
use App\Models\GPSData;
class SensorDataController extends Controller
{
    




// public function store(Request $request)
// {
//     // Parse the incoming request payload
//     $data = $request->all();

//     // Extract sensor data
//     $sensorData = [
//         'temperature' => $data['temperature'] ?? null,
//         'humidity' => $data['humidity'] ?? null,
//         'alcohol_concentration' => $data['alcohol_concentration'] ?? null,
//         'air_quality_index' => $data['air_quality_index'] ?? null,
//     ];

//     // Insert sensor data into SensorData model and retrieve the inserted ID
//     $sensorModel = SensorData::create($sensorData);
//     $sensorId = $sensorModel->id;

//     // Extract GPS data
//     $gpsData = [
//         'latitude' => $data['latitude'] ?? 0,
//         'longitude' => $data['longitude'] ?? 0,
//         'sensor_data_id' => $sensorId, // Set the foreign key
//     ];

//     // Insert GPS data into GPSData model
//     GPSData::create($gpsData);

//     // Return a success response
//     return response()->json(['message' => $data], 200);
// }




public function store(Request $request)
{
    // Log all request headers
 //   \Log::info('data: ', $request->all());

    // Parse the incoming request payload
    $data = $request->all();

    // Extract sensor data
    $sensorData = [
        'temperature' => $data['temperature'] ?? null,
        'humidity' => $data['humidity'] ?? null,
        'alcohol_concentration' => $data['alcohol_concentration'] ?? null,
        'air_quality_index' => $data['air_quality_index'] ?? null,
    ];

    // Insert sensor data into SensorData model and retrieve the inserted ID
    $sensorModel = SensorData::create($sensorData);
    $sensorId = $sensorModel->id;

    // Extract GPS data
    $gpsData = [
        'latitude' => $data['latitude'] ?? 0,
        'longitude' => $data['longitude'] ?? 0,
        'sensor_data_id' => $sensorId, // Set the foreign key
    ];

    // Insert GPS data into GPSData model
    GPSData::create($gpsData);

    // Return a success response
    return response()->json(['message' => $data], 200);
}


public function fetchSensorData()
{
    $sensorData = SensorData::latest()->first();
    return response()->json($sensorData);
}


public function getMQ135Data()
{
   
    $data = SensorData::latest('created_at')->take(10)->get(['created_at', 'alcohol_concentration']);

    return response()->json($data);
}

public function getMQ7Data()
{
       // Fetch the most recent AQI data from the sensor_data table
    $data = SensorData::latest('created_at')->take(10)->get(['created_at', 'air_quality_index']);

    return response()->json($data);
}



public function latestGPS(Request $request)
{
    // Retrieve the latest GPS data
    $latestGPSData = GPSData::latest()->first();

    return response()->json($latestGPSData);
}
}