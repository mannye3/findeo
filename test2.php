<!DOCTYPE html>
<html>
<head>
    <title>PHP Ajax image upload without refreshing page with validation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script> 
</head>
<body>

<div class="container">
  <div class="row">
   <div class="col-md-offset-2 col-md-8">
    <h2>PHP - Upload image on server with validation using jQuery Ajax</h2>
    <div class="panel panel-info">
      <div class="panel-heading">File upload using ajax in PHP</div>
      <div class="panel-body">
        
          <form action="ajaxupload.php" enctype="multipart/form-data" class="form-horizontal" method="post">
            <div class="preview"></div>
            <input type="file" name="image" class="form-control" />
            <br/>
            <button class="btn btn-block btn-primary btn-upload">Upload</button>
          </form>
        </div>
        </div>
      </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $(".btn-upload").click(function(){
            $(".form-horizontal").ajaxForm({target: '.preview'}).submit();
        });
    }); 
</script>


</body>
</html>