<?php header("Content-Type: text/html; charset=utf-8");

class CSV {
    private string $_csv_file;

    /**
     * @throws Exception
     */
    public function __construct($csv_file) {
        if (file_exists($csv_file)) {
            $this->_csv_file = $csv_file;
        } else throw new Exception("File not found");
    }

    public function setCSV(array $csv): void {
        $handle = fopen($this->_csv_file, "a");
        foreach ($csv as $value) {
            fputcsv($handle, explode(",", $value));
        }
        fclose($handle);
    }

    public function getCSV(): array {
        $handle = fopen($this->_csv_file, "r");
        $array_line_full = array();
        while (($line = fgetcsv($handle, 0, ";")) !== false) {
            $array_line_full[] = $line;
        }
        fclose($handle);
        return $array_line_full;
    }
}