<?php
namespace ModulesGarden\DomainsReseller\Registrar\SakurahostRegistrarModule\Calls;
use ModulesGarden\DomainsReseller\Registrar\SakurahostRegistrarModule\Core\Call;

/**
 * Description of GetNameServers
 *
 * @author inbs
 */
class Sync extends Call
{
    public $action = "domains/:domain/sync";
    
    public $type = parent::TYPE_POST;
}