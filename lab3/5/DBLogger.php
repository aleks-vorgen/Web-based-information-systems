<?php
class DBLogger implements ILogger {
    private static string $DB = "./log.csv";

    public function log($message): void {
        $message = [date("F j, Y, g:i a"), $message];
        $handle = fopen(self::$DB, "a");
        fputcsv($handle, $message, ";");
        fclose($handle);
    }
}