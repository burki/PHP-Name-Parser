<?php

namespace joshfraser\Unit\Providers;

/**
 * Class SuffixProvider
 *
 * @package joshfraser\Unit\Providers
 */
class SuffixProvider
{
    /**
     * @var array - List of professions that should be parsed correctly.
     */
    protected $workingProfessions = array(
        'Smarty Pants Phd'   => array('Smarty Pants Phd', array('Phd')),
        'Smarty Pants PHD'   => array('Smarty Pants PHD', array('PHD')),
        'OLD MACDONALD, PHD' => array('OLD MACDONALD, PHD', array('PHD')),
    );

    /**
     * @var array - List of professions that are expected to fail.
     */
    protected $failingProfessions = array(
        'OLD MACDONALD'       => array('OLD MACDONALD'),
        'OLD PHDMACDONALDPHD' => array('OLD PHDMACDONALDPHD'),
        'Prof. Ron Brown'     => array('Prof. Ron Brown'),
    );

    /**
     * Data provider for list of working professions.
     *
     * @return array
     */
    public function getWorkingProfessions()
    {
        return $this->workingProfessions;
    }

    /**
     * Data provider for list of failing professions.
     *
     * @return array
     */
    public function getFailingProfessions()
    {
        return $this->failingProfessions;
    }
}
