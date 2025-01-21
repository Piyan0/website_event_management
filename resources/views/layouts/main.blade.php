<!DOCTYPE html >
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="https://piyan0.github.io/quotes_anime/bootstrap@5.2.0.min.css">
  <link rel="stylesheet" href="https://piyan0.github.io/quotes_anime/host_style.css">

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
<style>
  body {
    font-size: 15pt;
}

.side-icon{
  filter: brightness(0) saturate(100%) invert(49%) sepia(14%) saturate(4678%) hue-rotate(204deg) brightness(100%) contrast(91%);
}

#sidebar-link div:active{
  background-color: #F1F4F9
}

.purple{
  filter: brightness(0) saturate(100%) invert(46%) sepia(24%) saturate(4076%) hue-rotate(212deg) brightness(103%) contrast(99%);
}

.white-filt{
  filter: brightness(0) saturate(100%) invert(95%) sepia(5%) saturate(0%) hue-rotate(53deg) brightness(105%) contrast(105%);
}

.shade-grey-filt{
  filter: brightness(0) saturate(100%) invert(74%) sepia(8%) saturate(749%) hue-rotate(198deg) brightness(84%) contrast(90%);
  }
  
.phone-sidebar-icon{
  filter: brightness(0) saturate(100%) invert(35%) sepia(14%) saturate(2425%) hue-rotate(191deg) brightness(92%) contrast(82%);
}


.mobile_nav_active{
  display: block!important
}


.mobile_nav_active_p{
  font-weight: bold;
  color: #00639C!important;
}
a{
  text-decoration: none;
}
a p{
  color: black;
}


</style>
</body>

</html>