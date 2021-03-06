<?php

namespace Vct\VpnBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
// use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TUserUpdateType extends AbstractType {
	public function buildForm(FormBuilderInterface $builder, array $options) {
		// TODO: Auto-generated method stub
		$builder->add('vpnServerId', 'text');
		$builder->add('email', 'email');
// 		$builder->add('password', 'password');
// 		$builder->add('registerDate', 'date');
// 		$builder->add('paidDate', 'date');
		$builder->add('paidFee', 'integer');
// 		$builder->add('expireDate', 'date');
// 		$builder->add('expireFlag', 'checkbox');
// 		$builder->add('createTime', 'date');
// 		$builder->add('updateTime', 'date');
	}

	public function getName() {
		// TODO: Auto-generated method stub
		return 'TUserUpdateType';
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver) {
		$resolver
				->setDefaults(
						array('data_class' => 'Vct\VpnBundle\Entity\TUser',
								'validation_groups' => array('registration')));
	}

}
