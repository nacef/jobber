<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addapplicantstudies extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('applicant_studies', array(
             'application_id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'length' => 8,
             ),
             'study_id' => 
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
              0 => 'application_id',
              1 => 'study_id',
             ),
             'charset' => 'UTF8',
             ));
    }

    public function down()
    {
        $this->dropTable('applicant_studies');
    }
}