<?php

class FileLogger implements ILogger {
    private $file;
    use PrintTrait;
    use LoggerTrait;

    public function __construct($file) {
        $this->file = fopen($file, 'a') or die('could not open the log file');
    }

    public function __destruct() {
        if ($this->file)
            fclose($this->file);
    }
}