<?php

?>
<h1 class="title is-1">Create an account</h1>
<?php $form = \app\core\form\Form::begin('', 'post')?>
<div class="field is-horizontal">
    <div class="field-body">
        <?php echo $form->field($model, 'firstname') ?>
        <?php echo $form->field($model, 'lastname') ?>
    </div>
</div>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<?php echo $form->field($model, 'passwordConfirm')->passwordField() ?>

<button class="button is-link">Submit</button>
<?php echo \app\core\form\Form::end() ?>