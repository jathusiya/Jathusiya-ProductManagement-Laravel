<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script type="module" src="/build/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>
     Product Management System
    </title>
    <style>
body {
    margin: 0;
    padding: 0;
    height: 100%;
    position: relative;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px;
}

main {
    margin-top:40px;
    padding: 20px;
    height: flex;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 10px;
    position: relative;
    bottom: 0;
    width: 100%;
}
    </style>
 <body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href=" #"><i class ="fa fa-trophy"></i> ProductManagement </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link " aria-current="page" href="/home"><i class ="fa fa-home"></i> Home</a>
          <a class="nav-link" href="/products"><i class ="fa fa-building"></i> Product</a>
          <a class="nav-link" href="#"><i class ="fa fa-user"></i> User</a>
          <a class="nav-link" href=" #"><i class ="fa fa-trophy"></i>Create</a>
          @if(Auth::check())
          <a href="/logout" class="nav-link"><i class ="fa fa-sign-in"></i> {{ __('Logout') }}</a>
          @else
          <a href="/register" class="nav-link"><i class ="fa fa-user"></i> SignUp</a>
          <a href="/login" class="nav-link" type="submit"><i class ="fa fa-sign-in"></i> SignIn</a>
          @endif
        </div>
      </div>
    </div>
  </nav>
</header>


<main class="container">
@yield('content')
</main>

<footer class="text-center text-lg-start bg-dark text-white">
    <section class="container d-flex justify-content-center justify-content-lg-between p-4">
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <div>
        <a href="" class="me-4 text-reset"><i class="fa fa-facebook"></i></a>
        <a href="" class="me-4 text-reset"><i class="fa fa-twitter"></i></a>
        <a href="" class="me-4 text-reset"><i class="fa fa-google"></i></a>
        <a href="" class="me-4 text-reset"><i class="fa fa-instagram"></i></a>
        <a href="" class="me-4 text-reset"><i class="fa fa-linkedin"></i></a>
        <a href="" class="me-4 text-reset"><i class="fa fa-github"></i></a>
      </div>
    </section>

    <section class="">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4"><i class="fa fa-cart-trophyS"></i> Awards</h6>
            <p>
              Award is a one of website to provided award details for student.
               We give award for talented person who satisfied requirement to get awards .
            </p>
          </div>
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Funds </h6>
            <p><a href="#!" class="text-reset">Dealers</a></p>
            <p><a href="#!" class="text-reset">organizers</a></p>
            <p><a href="#!" class="text-reset">Qualification</a></p>
            <p><a href="#!" class="text-reset">kind of Awards</a></p>
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Useful links</h6>
            <p><a href="#!" class="text-reset">FAQ</a></p>
            <p><a href="#!" class="text-reset">Feedback</a></p>
            <p><a href="#!" class="text-reset">About Us</a></p>
            <p><a href="#!" class="text-reset">Contact Us</a></p>
          </div>

          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold mb-4"> Contact</h6>
            <p><i class="fa fa-home"></i> Unicef</p>
            <p><i class="fa fa-envelope"></i> info@example.com</p>
            <p><i class="fa fa-phone"></i> + 9474323421</p>
          </div>
        </div>
      </div>
    </section>

    <div class="text-center p-4">
      &copy;  2023 Copyright <a class="text-reset fw-bold" href="#"> Jathu.in</a>
    </div>
 </footer>

</body>
</html>
