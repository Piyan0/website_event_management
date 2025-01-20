<!DOCTYPE html >
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="bootstrap@5.2.0.min.css">
  <link rel="stylesheet" href="p_utility_classes.css">
  <link rel="stylesheet" href="style.css">

  <title>EventManagement</title>
</head>

<body style="background-color: #F1F4F9" class="container">
  <div class="my-1">
    @include("components.navbar")
  </div>
  <div class="fow gap-1 my-2">
    <p class="f-12 g-1">
      Now logged in as:
    </p>
    <p class="f-12">
      Piyan Apriyanto
    </p>
  </div>
  <div style=" position: fixed; bottom:0; left:0; width:100%; z-index: 2" class="">
    @section("bottom_section")
    @show
  </div>

  <div class="d-flex flex-column gap-2 my-3 flex-lg-row">
    <div class="d-none d-lg-block">
      @include("components.sidebar")
    </div>
    <div style="height:85vh"class="fol overflow-scroll flex-grow-1 gap-2 ">

      @section("event_showed")
      @show

      <div class="d-lg-none">
        <br>
        <br>
      </div>

    </div>
  </div>

</body>

</html>