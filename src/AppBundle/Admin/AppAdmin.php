<?php

namespace AppBundle\Admin;

use Doctrine\Common\Persistence\ObjectRepository;
use Sonata\AdminBundle\Admin\Admin;
use Symfony\Component\DependencyInjection\ContainerInterface;

class AppAdmin extends Admin
{

    protected $joinedFields = [];

    protected $maxPerPage = 100;

    /**
     * Disable Export by default.
     * {@inheritdoc}
     */
    public function getExportFormats()
    {
        return array();
    }

    /**
     * get Container.
     *
     * @return ContainerInterface
     */
    public function getContainer()
    {
        return $this->getConfigurationPool()->getContainer();
    }
}