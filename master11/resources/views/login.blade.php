@extends('layout.home')

@section('content')

<div class="row auth-height-full">
    <div class="auth-left flex flex-column items-center justify-center auth-height-full">
      <h1 class="auth-title">Welcome Back</h1>
      <form class="auth-form" autocomplete="off">
        <label for="email" class="auth-label">Email</label>
        <input type="text" id="email" name="email" class="auth-input" />
        <span id="erroremail"></span>

        <label for="password" class="auth-label">Password</label>
        <input type="password" id="password" name="password" class="auth-input" />
        <span id="errorpassword"></span>

        <button type="button" class="auth-button pink-background auth-cta-btn">
          Log in
        </button>
      </form>

      <p class="auth-signup-prompt">
        Don’t have an account?
        <a href="./signup" class="auth-signup-link">Sign up</a>
      </p>
    </div>
    <div class="auth-right"></div>
</div>

@endsection
