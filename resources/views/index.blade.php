<!DOCTYPE html>
<html lang="en">
<head>
  <title>Volumetric Weight calculator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  

</head>
<body>

<div class="jumbotron text-center p-3">
  <h3>Volumetric Weight calculator</h3> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-2">
     
    </div>
    <div class="col-sm-8 border">
        
        <form>
          
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input type" id="radio1" name="type" value="kg" >Kg ( cm )
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input type" id="radio2" name="type" value="lbs" checked>Lbs ( inch )
              </label>
            </div>

            <div class="form-group">
                <label for="length">Length</label>
                <input type="number" name="length" class="form-control" id="length" >
            </div>

            <div class="form-group">
                <label for="weight">Weight</label>
                <input type="number" name="weight" class="form-control" id="weight" >
            </div>


            <div class="form-group">
                <label for="height">Height</label>
                <input type="number" name="height" class="form-control" id="height" >
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" class="form-control" id="quantity" >
            </div>
          
      
          </form>


          <div class="d-flex">
            <div class="form-group mr-3">
                <label for="volume_cm">Volume ( Cm )</label>
                <input readonly type="number" name="volume_cm" class="form-control" id="volume_cm" >
            </div>
            <div class="form-group">
                <label for="volume_lbs">Volume ( Lbs )</label>
                <input readonly type="number" name="volume_lbs" class="form-control" id="volume_lbs" >
            </div>
          </div>


    </div>
    <div class="col-sm-2">
       </div>
 
  </div>
</div>

</body>
</html>

<script type="text/javascript">
      const calculateURL = "{{route('calculate')}}";
      const csrfToken = "{{ csrf_token() }}";
</script>
<script src="{{asset('js/custom.js')}}"></script>

 