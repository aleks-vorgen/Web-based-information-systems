<?php
use MongoDB\Driver\Exception\ConnectionException;

class DB
{
    protected static ?DB $db = null;

    private function __construct() {}

    public static function getConnection(): DB {
        if (self::$db === null) {
            echo "Connecting with database\n";
            self::$db = new DB(); // Це зроблено, тому що я не маю активних баз даних
        }
        else {
            echo "Already connected...\n";
        }
        return self::$db;
    }

    public function getData(): DB | ConnectionException {
        if (self::$db === null) {
            return new ConnectionException("No connection with database");
        }
        return self::$db;
    }

    public function __toString(): string
    {
        return "Some Data\n";
    }


}
$DB = DB::getConnection();
$DB2 = DB::getConnection();
echo $DB->getData();
echo $DB2->getData();