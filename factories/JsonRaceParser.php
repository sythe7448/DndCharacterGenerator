<?php
namespace Factories;
require __DIR__ . '/../vendor/autoload.php';
use DND\Character\Dependencies\Race;


$jsonfile = file_get_contents('../assets/JSON/races.json');
$json = json_decode($jsonfile);

/*
 * Formats the name of the race to include the subrace.
 */
function createRaceName(array $raceNames): string
{
    $name = $raceNames[0];
    foreach ($raceNames as $i => $raceName)
    {
        if ($i >= 1) {
            $name .= '(' . $raceName . ')';
        }
    }
    return $name;
}

/*
 * Creating the race object from JSON
 */
function createRaces($json): array
{
    $races = [];
    foreach ($json->race as $race)
    {
        $name = property_exists($race, 'name') ? createRaceName([$race->name]) : 'UNNAMED';
        $source = property_exists($race,'source') ? $race->source : 'UNKNOWN';
        $size = property_exists($race,'size') ? $race->size : 'UNKNOWN';
        $speed = property_exists($race,'speed') ? $race->speed : 'UNKNOWN';
        if (!is_object($speed)) {
            $speed = new \stdClass();
            $speed->walk = $race->speed;
        }
        if (property_exists($race, 'subraces'))
        {
            foreach ($race->subraces as $subrace)
            {
                $subName = property_exists($subrace, 'name') ? createRaceName([$name, $subrace->name]) : $name;
                $subSource = property_exists($subrace,'source') ? $subrace->source : $source;
                $subSize = property_exists($subrace,'size') ? $subrace->source : $size;
                $subSpeed = property_exists($subrace,'speed') ? $subrace->speed : $speed;
                if (!is_object($subSpeed)) {
                    $subSpeed = new \stdClass();
                    $subSpeed->walk = $subrace->speed;
                }
                if ($name !== 'UNNAMED') {
                    $raceObj = new Race();
                    $raceObj->setName($subName);
                    $raceObj->setSource($subSource);
                    $raceObj->setSize($subSize);
                    $raceObj->setSpeed($subSpeed);
                    $races[$subName] = $raceObj;
                }
                else
                {
                    echo "NOT WORKING\n";

                }
            }
        }
        else
        {
            if ($name !== 'UNNAMED') {
                $raceObj = new Race();
                $raceObj->setName($name);
                $raceObj->setSource($source);
                $raceObj->setSize($size);
                $raceObj->setSpeed($speed);
                $races[$name] = $raceObj;
            }
            else
            {
                echo "NOT WORKING\n";
            }
        }
    }
    return $races;
}

/*
 * Format for printing the speed object inside the race object
 */
function printSpeed ($speeds) {
    $speedString = '';
    foreach ($speeds as $type => $speed) {
        $speedString .= $type . ':' . $speed . ' ';
    }
    return $speedString;
}

/*
 * Initial testing
 */
$races = createRaces($json);
foreach ($races as $race) {
    echo $race->getName() . ' ' . $race->getSource(). ' ' . $race->getSize() . ' ' . printSpeed($race->getSpeed()) . "\n";
}