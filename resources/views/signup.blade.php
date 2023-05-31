@extends('layouts.project')
{{-- @section('title', 'Phones') --}}
@section('content')

<body>
    <!-- Section: Design Block -->
<section class="text-center">
    <!-- Background image -->
    <div class="p-5 bg-image" style="
          background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
          height: 300px;
          "></div>
    <!-- Background image -->
  
    <div class="card mx-4 mx-md-5 shadow-5-strong" style="
          margin-top: -100px;
          background: hsla(0, 0%, 100%, 0.8);
          backdrop-filter: blur(30px);
          ">
      <div class="card-body py-5 px-md-5">
  
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h2 class="fw-bold mb-5">Sign up now</h2>
            <form action="/signup2" method="get">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <label class="form-label" for="First_name">First name</label>
                    <input type="text" id="First_name" name="First_name" class="form-control" required>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <label class="form-label" for="Last_name">Last name</label>
                    <input type="text" id="Last_name" name="Last_name" class="form-control" required>
                  </div>
                </div>
              </div>
  
              <!-- Email input -->
              <div class="row">
                <div class="col">
                  <div class="form-outline mb-4">
                    <label class="form-label" for="Email_address">Email address</label>
                    <input type="email" id="Email_address" name="Email_address" class="form-control" required>
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline mb-4">
                    <label class="form-label" for="phone">Phone number</label>
                    <input type="phone" id="phone" name="phone" class="form-control" required>
                  </div>
                </div>
              </div>
  
              <!-- Password input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="Password">Password</label>
                <input type="password" id="Password" name="Password" class="form-control" required>
              </div>
  
              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                <label class="form-check-label" for="form2Example33">
                  Subscribe to our newsletter
                </label>
              </div>
  
              <!-- Submit button -->
              
              <button type="submit" class="btn btn-primary btn-block mb-4">
                Sign up
              </button>
  
              {{-- <!-- Register buttons -->
              <div class="text-center">
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>
  
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </button>
  
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>
  
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-github"></i>
                </button>
              </div> --}}

            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
</body>


@endsection