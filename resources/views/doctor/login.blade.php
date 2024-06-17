<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
  <div class="px-4 py-32 px-md-5 text-center text-lg-start bg-red-100 h-screen">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-3 mb-5 mb-lg-0">
          
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 ">
          <div class="card ">
            <div class="card-body pt-4 px-md-5 bg-pink-200 border-4 border-red-900">
              <h4>Login</h4>
              <br>
              <form action="/doctor/loginprocess" method="POST">
               @csrf
                  
                <div data-mdb-input-init class="form-outline mb-4">
                  <label  class="form-label" for="form3Example3">Email address</label>
                  <input name="email" type="email" id="form3Example3" class="form-control" />
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                  <label  class="form-label" for="form3Example4">Password</label>
                  <input name="password" type="password" id="form3Example4" class="form-control" />
                </div>
                <button  data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
                 Login
                </button>
              </form>
              <hr>
              <div>
                  <p class="text-center">Don't have an account? <a href="/doctor/register" class="pl-2">Sign Up</a></p> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
</body>
</html>