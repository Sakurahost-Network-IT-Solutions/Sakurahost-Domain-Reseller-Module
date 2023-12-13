<?php
namespace ModulesGarden\DomainsReseller\Registrar\SakurahostRegistrarModule\Calls;
use ModulesGarden\DomainsReseller\Registrar\SakurahostRegistrarModule\Core\Call;

/**
 * Description of GetContactDetails
 *
 * @author inbs
 */
class GetContactDetails extends Call
{
    public $action = "domains/:domain/contact";
    
    public $type = parent::TYPE_GET;
}