<?php
/**
 * Created by PhpStorm.
 * User: toral
 * Date: 9/25/18
 * Time: 9:34 PM
 */
main::start('example.csv');
class main{
    static public function start($filename){
        $records = csv::getRecords($filename);
        $table =html::createTable($records);
        system::printPage($table);
    }
}
class csv
{
    static public function getRecords($filename)
    {
        public function __construct(Array $fieldNames = null, Array $value = null)
    {
        $record = array_combine($fieldNames, $value);
        foreach ($record as $property => $value) {
            $this->createProperty($property, $value);
        }
    }

        {
            $record = fgetcsv($file);
            if ($count == 0) {
                $fields = $record;
            }
            else
            {
                $records[] = recordFactory::create($fields, $record);
            }
            $count++;
        }
        fclose($file);
        return $records;
    }
}

?>