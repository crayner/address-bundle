<?php

namespace App\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;

/**
 * Class AutoCompleteType
 * @package App\Form\Type
 */
class AutoCompleteType extends AbstractType
{
    /**
     * getBlockPrefix
     * @return string
     */
	public function getBlockPrefix()
	{
		return 'auto_complete';
	}

    /**
     * getParent
     * @return string|null
     */
	public function getParent()
	{
		return EntityType::class;
	}
}