
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- style css -->
    <link rel="stylesheet" href="style/style.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- Start login -->
    <section class="form-login">
      <div class="container-fluid">
        <div class="row">
          <fieldset class="d-flex justify-content-center p-sm-2">
            <form class="border p-4 bg-white" action="proses_login.php" id="rounded-form">
              <div class="d-flex justify-content-center mb-4">
                <img src="img/logo-lpmp-baru-kecil.png" width="200px" alt="">
              </div>
              <div class="mb-3">
              <input type="text" class="form-control" name="username" id="username" aria-describedby="" placeholder="username">
              </div>
              <div class="mb-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="password">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
              </div>
              <div class="d-flex justify-content-between mt-4">
                <a href="">
                  <button class="btn btn-primary pe-3 ps-3" type="submit" name="login">Sign in</button>
                </a>
                <a href="regis.php">
                  <button class="btn btn-primary" type="submit" name="login">Sign up</button>
                </a>
                
              </div>
            </form>
          </fieldset>
        </div>
      </div>
    </section>
    <!-- End login -->
    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>