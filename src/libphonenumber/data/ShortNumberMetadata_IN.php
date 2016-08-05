<?php
/**
 * This file is automatically @generated by {@link BuildMetadataPHPFromXml}.
 * Please don't modify it directly.
 */


return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '[125]\\d{2,6}',
    'PossibleNumberPattern' => '\\d{3,7}',
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '[125]\\d{2,6}',
    'PossibleNumberPattern' => '\\d{3,7}',
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '[125]\\d{2,6}',
    'PossibleNumberPattern' => '\\d{3,7}',
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'sharedCost' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'personalNumber' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'voip' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'pager' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'uan' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'emergency' => 
  array (
    'NationalNumberPattern' => '
          1(?:
            0[0128]|
            12|
            298
          )|
          2611
        ',
    'PossibleNumberPattern' => '\\d{3,4}',
    'ExampleNumber' => '108',
  ),
  'voicemail' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'shortCode' => 
  array (
    'NationalNumberPattern' => '
          1(?:
            0[0128]|
            12|
            298
          )|
          2611|
          5(?:
            143[46]|
            3000|
            757555
          )
        ',
    'PossibleNumberPattern' => '\\d{3,7}',
    'ExampleNumber' => '108',
  ),
  'standardRate' => 
  array (
    'NationalNumberPattern' => '
          5(?:
            143[46]|
            757555
          )
        ',
    'PossibleNumberPattern' => '\\d{5,7}',
    'ExampleNumber' => '5757555',
  ),
  'carrierSpecific' => 
  array (
    'NationalNumberPattern' => '53000',
    'PossibleNumberPattern' => '\\d{5}',
  ),
  'noInternationalDialling' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'id' => 'IN',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => true,
  'numberFormat' => 
  array (
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => false,
);
