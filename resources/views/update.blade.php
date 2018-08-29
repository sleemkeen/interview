
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

      <form class="form-signin" method="post" action="updateproduct">
        <h2 class="form-signin-heading">Store to a Product</h2>

        <label for="inputPassword" class="sr-only">Store</label>
           <p>Store name</p>
         <select class="form-control" name="storeid" id="sel1">
         

            <?php foreach ($readstore as $key) { ?>
            <option value="{{$key->stid}}">{{$key->storename}}</option>
        <?php } ?>
          
        </select>

        <br>

         <p>Product name</p>
        <label for="inputEmail" class="sr-only">Product</label>
         <select class="form-control" name="productid" id="sel1">
            
            <?php foreach ($readproduct as $key) { ?>
            <option value="{{$key->pid}}">{{$key->productname}}</option>
        <?php } ?>
          
        </select>
        
       

        
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>


         <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </form>

    </div> <!-- /container -->



       <div class="container">

      <form class="form-signin" method="post" action="updatestore">
        <h2 class="form-signin-heading">user to a store</h2>
        <label for="inputEmail" class="sr-only">User</label>
         <select class="form-control" name="users" id="sel1">
             <p>Managers name</p>
            <?php foreach ($readuser as $key) { ?>
            <option value="{{$key->id}}">{{$key->name}}</option>
        <?php } ?>
          
        </select>

        <br>
        <label for="inputPassword" class="sr-only">Store</label>
          <p>Add a store</p>
            <?php foreach ($readstore as $key) { ?>

        <label class="checkbox-inline"><input type="checkbox" name="storeid[]" value="{{$key->stid}}">{{$key->storename}}</label>
        <?php } ?>
       
        
        </div>

         <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>


      </form>

    </div> <!-- /container -->


      

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
