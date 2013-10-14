<?php
/**
 * Created by PhpStorm.
 * User: giggsey
 * Date: 14/10/13
 * Time: 19:40
 */

namespace libphonenumber\buildtools;


use libphonenumber\PhoneNumberToTimeZonesMapper;

class GenerateTimeZonesMapData
{
    private $inputTextFile;

    public function __construct($inputFile, $outputDir)
    {
        $this->inputTextFile = $inputFile;

        if (!is_readable($this->inputTextFile)) {
            throw new \RuntimeException("The provided input text file does not exist.");
        }

        $data = $this->parseTextFile();
        $this->writeMappingFile($outputDir, $data);
    }

    /**
     * Reads phone prefix data from the provided input stream and returns a SortedMap with the
     * prefix to time zones mappings.
     */
    private function parseTextFile(){
        $data = file($this->inputTextFile);

        $timeZoneMap = array();

        foreach ($data as $line) {
            // Remove \n
            $line = str_replace("\n", "", $line);
            $line = str_replace("\r", "", $line);
            $line = trim($line);

            if (strlen($line) == 0 || substr($line, 0, 1) == '#') {
                continue;
            }
            if (strpos($line, '|')) {
                // Valid line
                $parts = explode('|', $line);


                $prefix = $parts[0];
                $timezone = $parts[1];

                $timeZoneMap[$prefix] = $timezone;
            }
        }

        return $timeZoneMap;
    }

    private function writeMappingFile($outputFile, $data)
    {
        $phpSource = '<?php' . PHP_EOL . 'return ' . var_export($data, true) . ';';

        $outputPath = $outputFile . DIRECTORY_SEPARATOR . PhoneNumberToTimeZonesMapper::MAPPING_DATA_FILE_NAME;

        file_put_contents($outputPath, $phpSource);
    }
}