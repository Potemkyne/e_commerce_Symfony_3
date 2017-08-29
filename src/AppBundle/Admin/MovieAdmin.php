<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Admin;

/**
 * Description of MovieAdmin
 *
 * @author potemkyne
 */


use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class MovieAdmin extends AbstractAdmin {

    //the default search result action chap 6
    protected $searchResultActions = array('edit', 'show');

    /**
     * chap 2 started 
     * chap 7 - 8.1 - 14 advanced
     * displayed fields on the edit and create actions
     */
    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->with('Movie', array(
                    'class' => 'col-md-8',
                    'box_class' => 'box box-solid box-primary',
                    'description' => 'please complete all required fields',
                ))
                ->add('title', null, array(
                    'help' => 'Set the title of the movie'
                ))
                ->add('director', 'text')
                ->add('releaseDate', 'date', ['years' => range(1910, 1985), 'placeholder' => ['year' => 'Year', 'month' => 'Month', 'day' => 'Day']])
                ->end()
                
        ;
    }

    /**
     * chap 2 - 4.2 started 
     * chap 7.5 advanced
     *  add filters to let user control which data will be displayed
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('title')
                ->add('director')
                ->add('releaseDate')
        ;
    }

    /**
     * chap 2 - 4 started 
     * chap 7.6 advanced
     * Customizing the fields displayed on the list page
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper->addIdentifier('title')
                ->addIdentifier('director')
                 ->addIdentifier('releaseDate')
        ;
    }

    /**
     * chap 3.5 advanced
     * breadcrumb
     */
    public function toString($object) {
        return $object instanceof Movie ? $object->getTitle() : 'Movie';
    }

}
