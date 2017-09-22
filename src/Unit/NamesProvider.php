<?php

namespace joshfraser\Unit;

/**
 * @class NamesProvider
 *
 * List names that should be used in unit testing here.
 *
 * @package joshfraser\Unit
 */
class NamesProvider
{
    /**
     * @var array - List of known working names.
     */
    private static $working = array(
        "Mr Anthony R Von Fange III" => array(
            "salutation" => "Mr.",
            "fname"      => "Anthony",
            "initials"   => "R",
            "lname"      => "Von Fange",
            "suffix"     => "III",
        ),
        "J. B. Hunt" => array(
            "salutation" => "",
            "fname"      => "J.",
            "initials"   => "B.",
            "lname"      => "Hunt",
            "suffix"     => "",
        ),
        "J.B. Hunt" => array(
            "salutation" => "",
            "fname"      => "J.B.",
            "initials"   => "",
            "lname"      => "Hunt",
            "suffix"     => "",
        ),
        "JB Hunt" => array(
            "salutation" => "",
            "fname"      => "JB",
            "initials"   => "",
            "lname"      => "Hunt",
            "suffix"     => "",
        ),
        "Jimmy (Bubba Junior) Smith" => array(
            "nickname"   => "Bubba Junior",
            "salutation" => "",
            "fname"      => "Jimmy",
            "initials"   => "",
            "lname"      => "Smith",
            "suffix"     => "",
        ),
        "Edward Senior III" => array(
            "salutation" => "",
            "fname"      => "Edward",
            "initials"   => "",
            "lname"      => "Senior",
            "suffix"     => "III",
        ),
        "Edward Dale Senior II" => array(
            "salutation" => "",
            "fname"      => "Edward Dale",
            "initials"   => "",
            "lname"      => "Senior",
            "suffix"     => "II",
        ),
        "Edward Senior II" => array(
            "salutation" => "",
            "fname"      => "Edward",
            "initials"   => "",
            "lname"      => "Senior",
            "suffix"     => "II",
        ),
        "Dale Edward Senior II, PhD" => array(
            "salutation" => "",
            "fname"      => "Dale Edward",
            "initials"   => "",
            "lname"      => "Senior",
            "suffix"     => "II, PhD",
        ),
        "Jason Rodriguez Sr." => array(
            "salutation" => "",
            "fname"      => "Jason",
            "initials"   => "",
            "lname"      => "Rodriguez",
            "suffix"     => "Sr",
        ),
        "Jason Senior" => array(
            "salutation" => "",
            "fname"      => "Jason",
            "initials"   => "",
            "lname"      => "Senior",
            "suffix"     => "",
        ),
        "Bill Junior" => array(
            "salutation" => "",
            "fname"      => "Bill",
            "initials"   => "",
            "lname"      => "Junior",
            "suffix"     => "",
        ),
        "Sara Ann Fraser" => array(
            "salutation" => "",
            "fname"      => "Sara Ann",
            "initials"   => "",
            "lname"      => "Fraser",
            "suffix"     => "",
        ),
        "Adam" => array(
            "salutation" => "",
            "fname"      => "Adam",
            "initials"   => "",
            "lname"      => "",
            "suffix"     => "",
        ),
        "OLD MACDONALD" => array(
            "salutation" => "",
            "fname"      => "Old",
            "initials"   => "",
            "lname"      => "Macdonald",
            "suffix"     => "",
        ),
        "Old MacDonald" => array(
            "salutation" => "",
            "fname"      => "Old",
            "initials"   => "",
            "lname"      => "MacDonald",
            "suffix"     => "",
        ),
        "Old McDonald" => array(
            "salutation" => "",
            "fname"      => "Old",
            "initials"   => "",
            "lname"      => "McDonald",
            "suffix"     => "",
        ),
        "Old Mac Donald" => array(
            "salutation" => "",
            "fname"      => "Old Mac",
            "initials"   => "",
            "lname"      => "Donald",
            "suffix"     => "",
        ),
        "James van Allen" => array(
            "salutation" => "",
            "fname"      => "James",
            "initials"   => "",
            "lname"      => "Van Allen",
            "suffix"     => "",
        ),
        "Jimmy (Bubba) Smith" => array(
            "nickname"   => "Bubba",
            "salutation" => "",
            "fname"      => "Jimmy",
            "initials"   => "",
            "lname"      => "Smith",
            "suffix"     => "",
        ),
        "Miss Jennifer Shrader Lawrence" => array(
            "salutation" => "Ms.",
            "fname"      => "Jennifer Shrader",
            "initials"   => "",
            "lname"      => "Lawrence",
            "suffix"     => "",
        ),
        "Jonathan Smith, MD" => array(
            "salutation" => "",
            "fname"      => "Jonathan",
            "initials"   => "",
            "lname"      => "Smith",
            "suffix"     => "MD",
        ),
        "Dr. Jonathan Smith" => array(
            "salutation" => "Dr.",
            "fname"      => "Jonathan",
            "initials"   => "",
            "lname"      => "Smith",
            "suffix"     => "",
        ),
        "Jonathan Smith IV, PhD" => array(
            "salutation" => "",
            "fname"      => "Jonathan",
            "initials"   => "",
            "lname"      => "Smith",
            "suffix"     => "IV, PhD",
        ),
        "Miss Jamie P. Harrowitz" => array(
            "salutation" => "Ms.",
            "fname"      => "Jamie",
            "initials"   => "P.",
            "lname"      => "Harrowitz",
            "suffix"     => "",
        ),
        "Mr John Doe" => array(
            "salutation" => "Mr.",
            "fname"      => "John",
            "initials"   => "",
            "lname"      => "Doe",
            "suffix"     => "",
        ),
        "Rev. Dr John Doe" => array(
            "salutation" => "Rev. Dr.",
            "fname"      => "John",
            "initials"   => "",
            "lname"      => "Doe",
            "suffix"     => "",
        ),
        "Anthony Von Fange III" => array(
            "salutation" => "",
            "fname"      => "Anthony",
            "initials"   => "",
            "lname"      => "Von Fange",
            "suffix"     => "III",
        ),
        "Anthony Von Fange III, PhD" => array(
            "salutation" => "",
            "fname"      => "Anthony",
            "initials"   => "",
            "lname"      => "Von Fange",
            "suffix"     => "III, PhD",
        ),
        "Mark Peter Williams" => array(
            "salutation" => "",
            "fname"      => "Mark Peter",
            "initials"   => "",
            "lname"      => "Williams",
            "suffix"     => "",
        ),
        "Mark P Williams" => array(
            "salutation" => "",
            "fname"      => "Mark",
            "initials"   => "P",
            "lname"      => "Williams",
            "suffix"     => "",
        ),
        "Mark P. Williams" => array(
            "salutation" => "",
            "fname"      => "Mark",
            "initials"   => "P.",
            "lname"      => "Williams",
            "suffix"     => "",
        ),
        "M Peter Williams" => array(
            "salutation" => "",
            "fname"      => "Peter",
            "initials"   => "M",
            "lname"      => "Williams",
            "suffix"     => "",
        ),
        "M. Peter Williams" => array(
            "salutation" => "",
            "fname"      => "Peter",
            "initials"   => "M.",
            "lname"      => "Williams",
            "suffix"     => "",
        ),
        "M. P. Williams" => array(
            "salutation" => "",
            "fname"      => "M.",
            "initials"   => "P.",
            "lname"      => "Williams",
            "suffix"     => "",
        ),
        "The Rev. Mark Williams" => array(
            "salutation" => "Rev.",
            "fname"      => "Mark",
            "initials"   => "",
            "lname"      => "Williams",
            "suffix"     => "",
        ),
        "Mister Mark Williams" => array(
            "salutation" => "Mr.",
            "fname"      => "Mark",
            "initials"   => "",
            "lname"      => "Williams",
            "suffix"     => "",
        ),
        "Rev Al Sharpton" => array(
            "salutation" => "Rev.",
            "fname"      => "Al",
            "initials"   => "",
            "lname"      => "Sharpton",
            "suffix"     => "",
        ),
        "Dr Ty P. Bennington iIi" => array(
            "salutation" => "Dr.",
            "fname"      => "Ty",
            "initials"   => "P.",
            "lname"      => "Bennington",
            "suffix"     => "III",
        ),
    );

    /**
     * @var array - List of known failing names.
     */
    private static $failing = array(
        "Dale Edward Jones Senior" => array(
            "salutation" => "",
            "fname"      => "Dale Edward",
            "initials"   => "",
            "lname"      => "Jones",
            "suffix"     => "Senior",
        ),
        "Old Mc Donald" => array(
            "salutation" => "",
            "fname"      => "Old Mc",
            "initials"   => "",
            "lname"      => "Donald",
            "suffix"     => "",
        ),
        "Smarty Pants Phd" => array(
            "salutation" => "",
            "fname"      => "Smarty",
            "initials"   => "",
            "lname"      => "Pants",
            "suffix"     => "PhD",
        ),
        // fails. format not yet supported
        "Fraser, Joshua" => array(
            "salutation" => "",
            "fname"      => "Joshua",
            "initials"   => "",
            "lname"      => "Fraser",
            "suffix"     => "",
        ),
        // fails.  should normalize the PhD suffix
        "Anthony Von Fange III, PHD" => array(
            "salutation" => "",
            "fname"      => "Anthony",
            "initials"   => "",
            "lname"      => "Von Fange",
            "suffix"     => "III, PhD",
        ),
        // fails.  should treat "Silly" as the nickname or remove altogether
        "Not So Smarty Pants, Silly" => array(
            "nickname"   => "Silly",
            "salutation" => "",
            "fname"      => "Not So Smarty",
            "initials"   => "",
            "lname"      => "Pants",
            "suffix"     => "",
        ),
    );

    /**
     * Get a merged list of working and failing names.
     *
     * @return array
     */
    public static function getNames()
    {
        return array_merge(self::$working, self::$failing);
    }

    /**
     * Get a list of names that should all be working.
     *
     * @return array
     */
    public static function getWorkingNames()
    {
        return self::$working;
    }

    /**
     * Get a list of names that are expected to fail.
     *
     * @return array
     */
    public static function getFailingNames()
    {
        return self::$failing;
    }

    /**
     * PHPUnit data provider for all names.
     *
     * @return array
     */
    public static function getUnitNames()
    {
        return self::formatForPHPUnit(self::getNames());
    }

    /**
     * PHPUnit data provider for names that should be working.
     *
     * @return array
     */
    public static function getUnitWorkingNames()
    {
        return self::formatForPHPUnit(self::getWorkingNames());
    }

    /**
     * PHPUnit data provider for names that we expect to fail.
     *
     * @return array
     */
    public static function getUnitFailingNames()
    {
        return self::formatForPHPUnit(self::getFailingNames());
    }

    /**
     * Reformat a names array into a form that is compatible with PHPUnit.
     *
     * @param array $array
     *
     * @return array
     */
    private static function formatForPHPUnit(array $array)
    {
        $data = array();
        foreach($array as $name => $expected) {
            $data[$name] = array($name, $expected);
        }

        return $data;
    }
}
