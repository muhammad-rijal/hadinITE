<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                    @if (Session::has('status'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('message') }}
                        </div>  
                    @endif
      
                <h3 class="mb-5">Sign in</h3>
                    <form action="" method="POST">
                        @csrf
                        <div class="form-outline mb-4">
                            <input type="email" id="email" name="email" class="form-control form-control-lg" required/>
                            <label class="form-label" for="typeEmailX-2">Email</label>
                        </div>
            
                        <div class="form-outline mb-4">
                            <input type="password" id="password" name="password" class="form-control form-control-lg" required/>
                            <label class="form-label" for="typePasswordX-2">Password</label>
                        </div>

                        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

                    </form>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>