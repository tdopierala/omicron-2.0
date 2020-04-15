<?php
declare(strict_types=1);

namespace App\Model\Table;

//use Cake\ORM\Query;
//use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
//use Cake\Validation\Validator;

class CovidPolandTable extends Table
{
	/* public static function defaultConnectionName() {
        return 'covid19';
	} */
	
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('covid_poland');
    }
}
