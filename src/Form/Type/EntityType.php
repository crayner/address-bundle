<?php

namespace App\Form\Type;

use App\Form\Transform\EntityToStringTransformer;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class EntityType extends AbstractType
{
	/**
	 * @var ObjectManager
	 */
	private $manager;

	/**
	 * StaffType constructor.
	 *
	 * @param ObjectManager $manager
	 */
	public function __construct(ObjectManager $manager)
	{
		$this->manager = $manager;
	}

	/**
	 * {@inheritdoc}
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->addModelTransformer(new EntityToStringTransformer($this->manager, $options));
	}

	/**
	 * {@inheritdoc}
	 */
	public function getBlockPrefix()
	{
		return 'bee_entity';
	}

	public function getParent()
	{
		return \Symfony\Bridge\Doctrine\Form\Type\EntityType::class;
	}
}