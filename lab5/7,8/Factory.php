<?php

class Factory {
    public static function createVehicle($type): Bike|Car|string|Motorcycle {
        return match ($type) {
            "car" => new Car("Україна", "ВАЗ", 2023, "Бензиновий", 100, "Чорний"),
            "bike" => new Bike("Україна", "Стелс", 2023, 20, "Крос", 26),
            "motorcycle" => new Motorcycle("Україна", "Ява", 2023, "Бензиновий", "Чорний", "Турист"),
            default => "Фабрика не може створити транспортний засіб \"$type\"",
        };
    }
}