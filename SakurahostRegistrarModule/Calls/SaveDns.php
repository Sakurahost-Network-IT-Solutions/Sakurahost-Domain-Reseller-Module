<?php
namespace ModulesGarden\DomainsReseller\Registrar\SakurahostRegistrarModule\Calls;
use ModulesGarden\DomainsReseller\Registrar\SakurahostRegistrarModule\Core\Call;

/**
 * Description of TransferDomain
 *
 * @author inbs
 */
class SaveDns extends Call
{
    public $action = "domains/:domain/dns";
    
    public $type = parent::TYPE_POST;
}