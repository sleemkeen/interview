
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
    	body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
    </style>
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post" action="postadduser">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Name</label>
        <input type="text" name="name" id="inputEmail" class="form-control" placeholder="name" required autofocus>
        <label for="inputPassword" class="sr-only">email</label>
        <input type="text" name="email" id="inputPassword" class="form-control" placeholder="email" required>
        <label for="inputPassword" class="sr-only">Role</label>
          <select class="form-control" name="role" id="sel1">
            <option value="admin">Admin</option>
            <option value="manager">Manager</option>
       
        </select>
        <br><br>

        <p>Add a store (this is not compulsory)</p>
        <label for="inputPassword" class="sr-only">Store</label>
            <?php foreach ($readstore as $key) { ?>

        <label class="checkbox-inline"><input type="checkbox" name="storeid[]" value="{{$key->stid}}">{{$key->storename}}</label>
        <?php } ?>

        <br><br>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>

         <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
