<?php
namespace ModulesGarden\DomainsReseller\Registrar\SakurahostRegistrarModule\Calls;
use ModulesGarden\DomainsReseller\Registrar\SakurahostRegistrarModule\Core\Call;

/**
 * Description of TransferDomain
 *
 * @author inbs
 */
class SaveRegistrarLock extends Call
{
    public $action = "domains/:domain/lock";
    
    public $type = parent::TYPE_POST;
}