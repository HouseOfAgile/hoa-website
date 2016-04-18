<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class TeamMemberAdmin extends AppAdmin
{


    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('fullName')
            ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->addIdentifier('fullName');
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('fullName')
            ->add('teamPicture')
            ->add('socialNetworks', 'sonata_type_collection', array(
                'by_reference' => false
            ), array(
                'edit' => 'inline',
                'inline' => 'table'
            ))
            ->add('translations', 'a2lix_translations')
        ;
    }
}