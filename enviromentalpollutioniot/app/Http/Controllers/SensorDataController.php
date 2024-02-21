<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SensorData;
use App\Models\GPSData;
class SensorDataController extends Controller
{
    

//     public function StoreSensorData(Request $request)
// {
//     // Validate incoming request data
//     $request->validate([
//         'alcohol_concentration' => 'nullable|numeric',
//         'air_quality_index' => 'nullable|numeric',
//         'temperature' => 'nullable|float',
//         'humidity' => 'nullable|float',
//     ]);

//     // Store sensor data in the database
//     $sensorData = new SensorData();
//     $sensorData->sensor_type = 'MQ3'; // Or 'MQ135' depending on the sensor
//     $sensorData->alcohol_concentration = $request->input('alcohol_concentration');
//     $sensorData->air_quality_index = $request->input('air_quality_index');
//     $sensorData->humidity=$request->humidity;
//     $sensorData->temperature=$request->temperature;
//     $sensorData->timestamp = now(); // or use the timestamp from the request if available
//     $sensorData->save();

//     return response()->json(['message' => 'Sensor data stored successfully'], 201);
// }


public function store(Request $request)
{
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
        'latitude' => $data['latitude'] ?? null,
        'longitude' => $data['longitude'] ?? null,
        'sensors_data_id' => $sensorId, // Set the foreign key
    ];

    // Insert GPS data into GPSData model
    GPSData::create($gpsData);

    // Return a success response
    return response()->json(['message' => 'Data stored successfully'], 200);
}
}

