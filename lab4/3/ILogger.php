<?php

interface ILogger {
    public function log($message): void;
    public function printDate($message): void;
}