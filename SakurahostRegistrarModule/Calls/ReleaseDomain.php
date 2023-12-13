<?php
namespace ModulesGarden\DomainsReseller\Registrar\SakurahostRegistrarModule\Calls;
use ModulesGarden\DomainsReseller\Registrar\SakurahostRegistrarModule\Core\Call;

/**
 * Description of TransferDomain
 *
 * @author inbs
 */
class ReleaseDomain extends Call
{
    public $action = "domains/:domain/release";
    
    public $type = parent::TYPE_POST;
}