<?php
/**
 * Created by PhpStorm.
 * User: cra
 * Date: 09.02.2016
 * Time: 13:59
 */

namespace OfficeUtils\ActiveRecordBundle\Service;


class ActiveRecordService
{
    public $cfg;

    /**
     * ActiveRecordService constructor.
     */
    public function __construct($newcfg)
    {
        $this->cfg = $newcfg;
/*        \ActiveRecord\Config::initialize(function($cfg) use ($newcfg)
        {
            $cfg->set_model_directory($newcfg['model_directory']);
            $cfg->set_connections($newcfg['connections']);
            $cfg->set_default_connection($newcfg['default_connection']);

            if($newcfg['sql_logging'] == 1)
            {
                $logger = \Log::singleton('file', $newcfg['sql_log_file'],'ident',array('mode' => 0664, 'timeFormat' =>  '%Y-%m-%d %H:%M:%S'));
                $cfg->set_logging(true);
                $cfg->set_logger($logger);
            }
        }
        );*/

    }

    public function init()
    {
        $newcfg = $this->cfg;

        \ActiveRecord\Config::initialize(function($cfg) use ($newcfg)
        {
            $cfg->set_model_directory($newcfg['model_directory']);
            $cfg->set_connections($newcfg['connections']);
            $cfg->set_default_connection($newcfg['default_connection']);

            if($newcfg['sql_logging'] == 1)
            {
                $logger = \Log::singleton('file', $newcfg['sql_log_file'],'ident',array('mode' => 0664, 'timeFormat' =>  '%Y-%m-%d %H:%M:%S'));
                $cfg->set_logging(true);
                $cfg->set_logger($logger);
            }
        }
        );

    }

}