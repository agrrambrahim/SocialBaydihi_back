<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ApplicationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',null,array("label"=>"Application"))
            ->add("description")
            ->add("packagaeName")
        ;
        $builder->add('save', 'submit',array("label"=>"SAVE THE APPLICATION"));

    }
    public function getName()
    {
        return 'Application';
    }
}
?>
