<?php
namespace ModulesGarden\DomainsReseller\Registrar\SakurahostRegistrarModule\Calls;
use ModulesGarden\DomainsReseller\Registrar\SakurahostRegistrarModule\Core\Call;

/**
 * Description of RegisterNameServer
 *
 * @author inbs
 */
class RegisterNameServer extends Call
{
    public $action = "domains/:domain/nameservers/register";
    
    public $type = parent::TYPE_POST;
}