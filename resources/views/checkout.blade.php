@extends('layouts.project')
{{-- @section('title', 'Phones') --}}
@section('content')
<style>
.gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
</style>
<body>
    <section class="h-100 gradient-custom fs-3">
        <div class="container py-5">
          <div class="row d-flex justify-content-center my-4">
            <div class="col-md-8 pt-5">
              <div class="card mb-4">
                <div class="card-header py-3">
                  <h5 class="mb-0 fs-3">Shopping Cart</h5>
                </div>
                <div class="card-body">
                  <!-- Single item -->
                  <div class="row">
                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                      <!-- Image -->
                      <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                        <img src='{{$track->img}}'
                          class="w-100" alt="" />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                        </a>
                      </div>
                      <!-- Image -->
                    </div>
      
                    <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                      <!-- Data -->
                    <div class="row">
                        <p><strong>{{$track->name}}</strong></p>
                    </div>
                    <div class="row">
                        <div class="col-sm-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                          </div>
                          <div class="col">
                            <p class="card-text text-secondary">{{$track->teacher}}</p>
                          </div>
                    </div>
                    </div>
      
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                      <!-- Price -->
                      <p class="text-start text-md-center">
                        <strong>${{$track->price}}</strong>
                      </p>
                      <!-- Price -->
                    </div>
                  </div>
                  <!-- Single item -->
      
                  <hr class="my-4" />
      
       
                </div>
              </div>

            </div>
            <div class="col-md-4">
              <div class="card mb-4 ">
                <div class="card-body">
                  <form class="row gx-3 gy-2 align-items-center" action="/invoice" method="get">
                    <div class="row">
                      <div class="col pt-2">
                        <label class="visually-hidden" for="Full_name">Name</label>
                        <input type="text" class="form-control fs-4" id="Full_name" name="Full_name" placeholder="Full Name" required>
                      </div>
                      <div class="col mt-3 fs-4">
                        <input type = "date" name = "date" required>
                      </div>
                    </div>

                    <div class="row mt-2">
                      <div class="col-sm-6">
                        <label class="visually-hidden fs-4" for="phone">Phone number</label>
                        <input type="phone" class="form-control fs-4" id="phone" name="phone" placeholder="Phone number" required>
                      </div>
                      <div class="col-sm-6">
                        <label class="visually-hidden fs-4" for="gender">Preference</label>
                        <select class="form-select fs-3" id="gender" name="gender" required>
                          <option selected>Female</option>
                          <option value="1">Male</option>
                        </select>
                        {{-- daaateee --}}
                      </div>
                    </div>
                    <input type="hidden" id="Product" name="Product" value={{$track->name}}>
                    <input type="hidden" id="paid" name="paid" value={{$track->price}}>

                </div>
              </div>
              <div class="card mb-4 fs-4">
                <div class="card-header py-3 ">
                  <h5 class="mb-0 fs-3">Summary</h5>
                </div>
                <div class="card-body ">
                  <ul class="list-group list-group-flush">
                    <li
                      class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0 ">
                      Products
                      <span>${{$track->price}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                      Discount
                      <span>-$0.50</span>
                    </li>
                    <li
                      class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                      <div>
                        <strong>Total amount</strong>
                        <strong>
                          <p class="mb-0">(including Discount)</p>
                        </strong>
                      </div>
                      <span><strong>${{$track->price - 0.50}}</strong></span>
                    </li>
                  </ul>
                  <button type="submit" class="btn btn-primary btn-lg btn-block fs-3">Checkout</button>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
@endsection