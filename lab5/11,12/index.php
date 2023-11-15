<?php
// Абстрактний клас легкових автомобілів
abstract class Car {
    abstract public function getModel();
}

// Абстрактний клас вантажівок
abstract class Truck {
    abstract public function getModel();
}

// Абстрактний клас автобусів
abstract class Bus {
    abstract public function getModel();
}

// Абстрактна фабрика для виробництва транспортних засобів
abstract class VehicleFactory {
    abstract public function createCar();
    abstract public function createTruck();
    abstract public function createBus();
}

// Вітчизняна фабрика, яка виробляє вітчизняні автомобілі
class DomesticVehicleFactory extends VehicleFactory {
    public function createCar() {
        return new DomesticCar();
    }

    public function createTruck() {
        return new DomesticTruck();
    }

    public function createBus() {
        return new DomesticBus();
    }
}

// Зарубіжна фабрика, яка виробляє імпортні автомобілі
class ForeignVehicleFactory extends VehicleFactory {
    public function createCar() {
        return new ForeignCar();
    }

    public function createTruck() {
        return new ForeignTruck();
    }

    public function createBus() {
        return new ForeignBus();
    }
}

// Конкретний клас вітчизняних легкових автомобілів
class DomesticCar extends Car {
    public function getModel() {
        return "Domestic Car";
    }
}

// Конкретний клас вітчизняних вантажівок
class DomesticTruck extends Truck {
    public function getModel() {
        return "Domestic Truck";
    }
}

// Конкретний клас вітчизняних автобусів
class DomesticBus extends Bus {
    public function getModel() {
        return "Domestic Bus";
    }
}

// Конкретний клас зарубіжних легкових автомобілів
class ForeignCar extends Car {
    public function getModel() {
        return "Foreign Car";
    }
}

// Конкретний клас зарубіжних вантажівок
class ForeignTruck extends Truck {
    public function getModel() {
        return "Foreign Truck";
    }
}

// Конкретний клас зарубіжних автобусів
class ForeignBus extends Bus {
    public function getModel() {
        return "Foreign Bus";
    }
}

// Клас, який відповідає за створення парку автомобілів згідно з конфігураційним файлом
class CarParkDirector {
    public static function createCarPark($factoryType, $carNum, $truckNum, $busNum) {
        $factory = null;

        if ($factoryType == "ua") {
            $factory = new DomesticVehicleFactory();
        } elseif ($factoryType == "foreign") {
            $factory = new ForeignVehicleFactory();
        } else {
            throw new Exception("Unsupported factory type");
        }

        $carPark = [];

        for ($i = 0; $i < $carNum; $i++) {
            $carPark[] = $factory->createCar();
        }

        for ($i = 0; $i < $truckNum; $i++) {
            $carPark[] = $factory->createTruck();
        }

        for ($i = 0; $i < $busNum; $i++) {
            $carPark[] = $factory->createBus();
        }

        return $carPark;
    }
}

$carPark = CarParkDirector::createCarPark("ua", 1, 1, 1);
foreach ($carPark as $vehicle) {
    echo get_class($vehicle) . ": " . $vehicle->getModel() . "\n";
}
$carPark = CarParkDirector::createCarPark("foreign", 1, 1, 1);
foreach ($carPark as $vehicle) {
    echo get_class($vehicle) . ": " . $vehicle->getModel() . "\n";
}