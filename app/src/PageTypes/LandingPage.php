<?php
use  Silverstripe\Forms\ToggleCompositeField;
use  Silverstripe\Forms\TextField;
use  Silverstripe\Forms\HTMLEditor\HTMLEditorField;

class LandingPage extends Page
{
    private static $description = 'For each main section of the website';
    private static $db = [
  'SpecialContentHeadline' => "Varchar(64)",
  "SpecialContent" => "HTMLText"
  ];

  public function getCMSFields() {
  $fields = parent::getCMSFields();

  $fields->addFieldsToTab(
    'Root.SpecialContent',
    [
        TextField::create('SpecialContentHeadline'),
        HTMLEditorField::create('SpecialContent')
      ]
  );

  return $fields;
}

    private static $has_one = [];

}
