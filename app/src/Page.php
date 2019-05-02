<?php

use CWP\CWP\PageTypes\BasePage;
use  Silverstripe\Forms\TextareaField;

class Page extends BasePage
{
  private static $db = array(
    'Intro' => 'Varchar(255)',
);
public function getCMSFields()
{
    // Get parent fields.
    $fields = parent::getCMSFields();

    // Add intro before the content.
    $fields->addFieldToTab(
        'Root.Main',
        TextareaField::create('Intro', 'Intro'),
        'Content'
    );

    // Return the fields.
    return $fields;
}
public function getCurrentDateTime()
{
  return Silverstripe\ORM\FieldType\DBDatetime::now();
}
}
