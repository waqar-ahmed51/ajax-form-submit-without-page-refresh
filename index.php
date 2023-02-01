<!DOCTYPE html>   
<html>   
<head>  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">  
<!-- Style Sheet -->
<link rel="stylesheet" href="style.css">
<title>AJAX FORM SUBMIT </title>  
</head>    
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Ajax Form Submit Without Page Refresh</h3>
        <p class="text-center text-white pt-5">Ajax Form Submit Without Page Refresh</p>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">AJAX FORM</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Enter any text value here</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>    
</html>  