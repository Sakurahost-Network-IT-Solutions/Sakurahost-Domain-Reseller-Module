<?php
namespace ModulesGarden\DomainsReseller\Registrar\SakurahostRegistrarModule\Calls;
use ModulesGarden\DomainsReseller\Registrar\SakurahostRegistrarModule\Core\Call;

/**
 * Description of TransferDomain
 *
 * @author inbs
 */
class SaveContactDetails extends Call
{
    public $action = "domains/:domain/contact";
    
    public $type = parent::TYPE_POST;
}
