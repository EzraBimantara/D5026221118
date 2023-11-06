<!DOCTYPE html>
<html lang="en">

<head>
  <title>WEEK 5</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
   
      function validate() {
    var bil1 = document.getElementById("bil1");
    var bil2 = document.getElementById("bil2");
    var nrp = document.getElementById("nrp");

    if(nrp.value == ""){
      alert("NRP belum diisi ");
      return false;
    }
    else if(nrp.value.length !=10){
      alert("NRP harus terdiri dari 10 angka ");
      return false;
    }
    else if(isNaN(nrp.value)){
      alert("NRP harus angka ");
      return false;
    }
  }
  </script>
  
</head>

<body>
  <div class="container">
    <form action="https://www.detik.com" method="post" onsubmit="return validate();">
      <input type="submit" value="KIRIM" class="btn btn-primary">
  
     <div class="form-group">
      <label for="NRP">
       Masukkan NRP :
      </label>
      <input type="text" id="nrp" class="form-control">
   </div>
    </form>
  </div>


</body>