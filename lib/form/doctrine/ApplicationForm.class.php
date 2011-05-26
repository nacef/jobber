<?php

/**
 * Application form.
 *
 * @package    jobber
 * @subpackage form
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ApplicationForm extends BaseApplicationForm
{
  public function configure()
  {
    unset($this['created_at'], $this['updated_at']);
    
    $this->widgetSchema['civil_status'] = new sfWidgetFormChoice(array(
        'choices' => array(
            civilStatusType::MRS => 'Mrs',
            civilStatusType::MS  => 'Ms',
            civilStatusType::MR =>  'Mr',            
        )
    ));
  }
}
