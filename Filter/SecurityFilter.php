<?php
namespace Mesd\OrmSecurityFilterBundle\Filter;

use Doctrine\ORM\Mapping\ClassMetaData;
use Doctrine\ORM\Query\Filter\SQLFilter;
use Symfony\Component\Security\Core\SecurityContextInterface;

class SecurityFilter extends SQLFilter
{

    private $securityContext;


    public function addFilterConstraint(ClassMetadata $targetEntity, $targetTableAlias)
    {

        var_dump($this->securityContext);
        exit;

        // Check if the entity implements the LocalAware interface
        if (false) {
            return "";
        }

        return '1 = 1';
        // return $targetTableAlias.$field = $data;
    }


    public function setSecurityContext(SecurityContextInterface $securityContext)
    {
        $this->securityContext = $securityContext;
    }
}