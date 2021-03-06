
<form class="well form-inline">
	<span>Welcome back!</span>
  <input type="text" class="input-small" placeholder="Email">
  <input type="password" class="input-small" placeholder="Password">
  <label class="checkbox">
    <input type="checkbox"> Remember me
  </label>
  <button type="submit" class="btn">Sign in</button>
</form>


<h1>Homepage</h1>

<hr />

<h2>Ready to Sign Up?</h2>
<form class="form-horizontal" action="/homepage/sign_up" method="post" id="signup">
  <fieldset>
    <legend>Just a few quick details:</legend>
    <div class="control-group">
      <label class="control-label" for="input01">Email</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="email" name="email">
        <p class="help-block">You'll use this to log in.</p>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="input01">Password</label>
      <div class="controls">
        <input type="password" class="input-xlarge" id="password" name="password">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="input01">Confirm Password</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="confirm" name="confirm">
        <p class="help-block">Let's see if we can figure out a way to not have to do this.</p>
      </div>
    </div>
    <div class="form-actions">
		<button type="submit" class="btn btn-primary">Sign Up!</button>
	</div>
  </fieldset>
</form>