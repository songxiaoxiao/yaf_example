<?php

namespace General\Pheanstalk\Command;

use General\Pheanstalk\YamlResponseParser;

/**
 * The 'list-tubes' command.
 * List all existing tubes.
 *
 * @author Paul Annesley
 * @package Pheanstalk
 * @licence http://www.opensource.org/licenses/mit-license.php
 */
class ListTubesCommand
    extends AbstractCommand
{
    /* (non-phpdoc)
     * @see Command::getCommandLine()
     */
    public function getCommandLine()
    {
        return 'list-tubes';
    }

    /* (non-phpdoc)
     * @see Command::getResponseParser()
     */
    public function getResponseParser()
    {
        return new YamlResponseParser(
            YamlResponseParser::MODE_LIST
        );
    }
}
