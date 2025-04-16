@extends('layout.home')

@section('content')

<div class="row auth-height-full">
    <div class="auth-left flex flex-column items-center justify-center auth-height-full">
      {{-- <h1 class="auth-title">Hello</h1> --}}
      <form class="auth-form" autocomplete="off">
        <label for="fname" class="auth-label">First Name</label>
        <input type="text" id="fname" name="fname" class="auth-input" />
        <span id="errorfname"></span>

        <label for="lname" class="auth-label">Last Name</label>
        <input type="text" id="lname" name="lname" class="auth-input" />
        <span id="errorlname"></span>

        <label for="email" class="auth-label">Email</label>
        <input type="text" id="email" name="email" class="auth-input" />
        <span id="erroremail"></span>

        <label for="password" class="auth-label">Password</label>
        <input type="password" id="password" name="password" class="auth-input" />
        <span id="errorpassword"></span>

        <label for="cpassword" class="auth-label">Confirm Password</label>
        <input type="password" id="cpassword" name="cpassword" class="auth-input" />
        <span id="errorcpassword"></span>

        <button type="button" class="auth-button pink-background auth-cta-btn">
          Sign up
        </button>
      </form>
      <p class="auth-signup-prompt">
        Already have an account?
        <a href="./login" class="auth-signup-link">Log in</a>
      </p>
    </div>
    <div class="auth-right"></div>
</div>

@endsection
