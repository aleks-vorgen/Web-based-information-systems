<?php header("Content-Type: text/html; charset=utf-8");

class FileReader {
    public string|false $buff;
    public string $filename;

    public function __construct($filename) {
        $uploaddir = './';
        $this->filename = $uploaddir . $filename;
        if (!file_exists($this->filename))
            exit("File does not exist");
        $fd = fopen($filename, "r");
        if (!$fd) exit("File open error");
        $this->buff = fread($fd, filesize($this->filename));
        fclose($fd);
    }

    function getContent(): bool|string {
        return $this->buff;
    }

    function getSize(): bool|int {
        return filesize($this->filename);
    }

    function getCount(): int {
        if (!empty($this->filename)) {
            $arr = file($this->filename);
            return count($arr);
        } else
            return 0;
    }

    function deleteFirstAndLast(): string {
        $buff = file($this->filename);
        unset($buff[0]);
        unset ($buff[count($buff)]);
        return implode("", $buff);
    }
}

$first = new FileReader("count.txt");
echo "{$first->getContent()}\n\n";
echo "{$first->getsize()}\n";
echo "{$first->getCount()}\n\n";
echo "{$first->deleteFirstAndLast()}\n";
