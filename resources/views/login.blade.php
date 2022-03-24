<form method="post" action="{{ url('login') }}">
    @csrf
  <div class="form-group">
    <label>Username</label>
    <input type="text" name="name" class="form-control p_input">
  </div>
  <div class="form-group">
    <label>Password *</label>
    <input type="password" name="password" class="form-control p_input">
  </div>

  <div class="text-center">
  <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
  </div>

  <p class="sign-up">Don't have an Account?<a href="{{ url('register') }}"> Sign Up</a></p>
</form>