<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addjobrequiredskills extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('job_required_skills', array(
             'job_offer_id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'length' => 8,
             ),
             'skill_id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'length' => 8,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'job_offer_id',
              1 => 'skill_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('job_required_skills');
    }
}