<?php
use usni\library\utils\CountryUtil;
$model = $formDTO->getAddress(); 
?>
<?= $form->field($model, 'address1')->textInput();?>
<?= $form->field($model, 'address2')->textInput();?>
<?= $form->field($model, 'city')->textInput();?>
<?= $form->field($model, 'state')->textInput();?>
<?= $form->field($model, 'country')->select2input(CountryUtil::getCountries());?>
<?= $form->field($model, 'postal_code')->textInput();?>