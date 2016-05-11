<?php

namespace PublicationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ChercheurType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('organisation', TextType::class)
            ->add('equipe', TextType::class)
            ->add('enregistrer', SubmitType::class);
	}
}