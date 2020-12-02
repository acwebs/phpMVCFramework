<?php

?>
<h1 class="title is-1">Login</h1>

<form action="" method="post">

<div class="field">
  <label class="label">Email</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input is-danger" type="email"  name="email" placeholder="Email input">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-exclamation-triangle"></i>
    </span>
  </div>
  <p class="help is-danger">This email is invalid</p>
</div>

<div class="field">
<label class="label">Password</label>
  <p class="control has-icons-left">
    <input class="input" type="password" placeholder="Password">
  </p>
</div>

<div class="field is-grouped">
  <div class="control">
    <button class="button is-link">Submit</button>
  </div>
</div>

</form>
