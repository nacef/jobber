<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addcontractkind extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('contract_kind', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 8,
              'autoincrement' => true,
              'primary' => true,
             ),
             'name' => 
             array(
              'type' => 'string',
              'length' => 50,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('contract_kind');
    }
}