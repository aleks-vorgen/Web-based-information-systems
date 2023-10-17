<?php

class FileLogger implements ILogger {
    private $file;

    public function __construct($file) {
        $this->file = fopen($file, 'a') or die('could not open the log file');
    }

    public function log($message): void {
        $message = date("F j, Y, g:i a") . ": " . $message . "\n";
        fwrite($this->file, $message);
    }

    public function __destruct() {
        if ($this->file)
            fclose($this->file);
    }
}