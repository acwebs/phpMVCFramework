<?php

?>
<h1 class="title is-1">Create an account</h1>

<form action="" method="post">
<div class="field is-horizontal">
<div class="field-body">
<div class="field">
  <label class="label">Firstname</label>
  <div class="control">
    <input class="input" type="text" name="firstname" placeholder="Text input">
  </div>
</div>

<div class="field">
  <label class="label">Lastname</label>
  <div class="control">
    <input class="input" type="text" name="lastname" placeholder="Text input">
  </div>
</div>
</div>
</div>

<div class="field">
  <label class="label">Email</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input is-danger" type="email"  name="email" placeholder="Email input">
  </div>
  <p class="help is-danger">This email is invalid</p>
</div>

<div class="field">
<label class="label">Password</label>
  <p class="control has-icons-left">
    <input class="input" type="password"  name="password" placeholder="Password">
  </p>
</div>

<div class="field">
<label class="label">Confirm Password</label>
  <p class="control has-icons-left">
    <input class="input" type="password" name="passwordConfirm" placeholder="Confirm Password">
  </p>
</div>

<div class="field is-grouped">
  <div class="control">
    <button class="button is-link">Submit</button>
  </div>
</div>

</form>
