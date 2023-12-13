<?php
namespace ModulesGarden\DomainsReseller\Registrar\SakurahostRegistrarModule\Calls;
use ModulesGarden\DomainsReseller\Registrar\SakurahostRegistrarModule\Core\Call;

/**
 * Description of TransferDomain
 *
 * @author inbs
 */
class ModifyNameServer extends Call
{
    public $action = "domains/:domain/nameservers/modify";
    
    public $type = parent::TYPE_POST;
}