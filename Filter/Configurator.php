<?php
namespace Mesd\OrmSecurityFilterBundle\Filter;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContextInterface;

class Configurator
{
    protected $em;
    protected $securityContext;


    public function __construct(EntityManager $em, SecurityContextInterface $securityContext)
    {
        $this->em              = $em;
        $this->securityContext = $securityContext;
    }


    public function onKernelRequest()
    {
            $filter = $this->em->getFilters()->enable('mesd_orm_security_filter');
            $filter->setSecurityContext($this->securityContext);
    }
}