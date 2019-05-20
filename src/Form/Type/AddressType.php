<?php
/**
 * Created by PhpStorm.
 *
 * test
 * (c) 2019 Craig Rayner <craig@craigrayner.com>
 *
 * User: craig
 * Date: 20/05/2019
 * Time: 13:43
 */

namespace App\Form\Type;

use App\Entity\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class AddressType
 * @package App\Form\Type
 */
class AddressType extends AbstractType
{
    /**
     * buildForm
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('address', AutoCompleteType::class,
                [
                    'class'        => Address::class,
                    'choice_label' => 'singleLineAddress',
                    'empty_data'   => null,
                    'required'     => true,
                    'label'        => 'person.address1.label',
                    'attr'         => [
                        'help'  => 'person.address1.help',
                        'class' => 'beeAddressList formChanged',
                    ],
                ]
            )
        ;
    }

    /**
     * getBlockPrefix
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'address';
    }
}
