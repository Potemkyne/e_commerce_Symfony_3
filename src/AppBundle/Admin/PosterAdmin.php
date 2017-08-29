<?php

/**
 * Description of PosterAdmin
 *
 * @author potemkyne
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PosterAdmin extends AbstractAdmin {

    //the default search result action chap 6
    protected $searchResultActions = array('edit', 'show');

    /**
     * chap 2 started 
     * chap 7 - 8.1 - 14 advanced
     * displayed fields on the edit and create actions
     */
    protected function configureFormFields(FormMapper $formMapper) {

        $formMapper
                ->with('Poster', array(
                    'class' => 'col-md-8',
                    'box_class' => 'box box-solid box-primary',
                    'description' => 'please complete all required fields',
                ))
                ->add('size', 'choice', array('choices' => array(
                        '101 x 76 cm' => '41 x 41 cm',
                        '30 x 41 cm' => '30 x 41 cm',
                        '60 x 80 cm' => '60 x 80 cm',
                        '40 x 40 cm' => '40 x 40 cm',
                        '69 x 102 cm' => '69 x 102 cm',
                        '61 x 91 cm' => '61 x 91 cm',
                        '61 x 86 cm' => '61 x 86 cm',
                        '60 x 88 cm' => '61 x 86 cm'),
                    'choices_as_values' => true,
                        //'multiple' => false, 'expanded' => true
                ))
                ->add('country', 'country')
                ->add('unitprice', 'money')
                ->end()
                ->with('Movie', array(
                    'class' => 'col-md-3',
                    'box_class' => 'box box-solid box-primary',
                ))
                ->add('movie', 'sonata_type_model', array(
                    'class' => 'AppBundle\Entity\Movie',
                    'property' => 'title',
                ))
                ->end()
                ->with('Image', array(
                    'class' => 'col-md-3',
                    'box_class' => 'box box-solid box-primary',
                ))
                ->add('image', 'sonata_type_model', array(
                    'class' => 'AppBundle\Entity\Image',
                    'property' => 'filename',
                ))
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
                ->add('movie', null, array(), 'entity', array(
                    'class' => 'AppBundle\Entity\Movie',
                    'choice_label' => 'title',
                ))
                ->add('size')
                ->add('country')
                ->add('unitprice')

        ;
    }

    /**
     * chap 2 - 4 started 
     * chap 7.6 advanced
     * Customizing the fields displayed on the list page
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper->addIdentifier('size')
                ->add('movie.title', null, array(
                    'header_class' => 'customActions',
                    'row_align' => 'left'
                ))
                ->addIdentifier('country')
                ->addIdentifier('unitprice')

        ;
    }

    /**
     * chap 3.5 advanced
     * breadcrumb
     */
    public function toString($object) {
        return $object instanceof Poster ? $object->getTitle() : 'Poster';
    }

}
