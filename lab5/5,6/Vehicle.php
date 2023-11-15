<?php

class Automobile {
    private string $vehicleMake;
    private string $vehicleModel;

    public function __construct($make, $model) {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }

    public function getMakeAndModel(): string {
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
}

class AutomobileFactory {
    public static function create($make, $model): Automobile {
        return new Automobile($make, $model);
    }
}

$veyron = AutomobileFactory::create('Bugatti', 'Veyron');

print_r($veyron->getMakeAndModel());