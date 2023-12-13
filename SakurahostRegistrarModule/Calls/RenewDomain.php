<?php
namespace ModulesGarden\DomainsReseller\Registrar\SakurahostRegistrarModule\Calls;
use ModulesGarden\DomainsReseller\Registrar\SakurahostRegistrarModule\Core\Call;

/**
 * Description of RenewDomain
 *
 * @author inbs
 */
class RenewDomain extends Call
{
    public $action = "order/domains/renew";
    
    public $type = parent::TYPE_POST;
}