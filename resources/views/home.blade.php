@extends('layouts.app')
@section('content')
        <div class="container">
  <div class="row">
   
    <div class="col-sm-8">
        <img class="mySlides" src="img/als/welcome.png" style="width:150%">
     <img class="mySlides" src="img/als/1.jpg" style="width:150%">
    <img class="mySlides" src="img/als/2.jpg" style="width:150%">
    <img class="mySlides" src="img/als/3.jpg" style="width:150%">
    <img class="mySlides" src="img/als/4.jpg" style="width:150%">
    <img class="mySlides" src="img/als/5.jpg" style="width:150%">
    <img class="mySlides" src="img/als/6.jpg" style="width:150%">
    <img class="mySlides" src="img/als/7.jpg" style="width:150%">
    <img class="mySlides" src="img/als/8.jpg" style="width:150%">
    <img class="mySlides" src="img/als/9.jpg" style="width:150%">
    <img class="mySlides" src="img/als/10.jpg" style="width:150%">
    <img class="mySlides" src="img/als/11.jpg" style="width:150%">
    <img class="mySlides" src="img/als/12.jpg" style="width:150%">
    <img class="mySlides" src="img/als/13.jpg" style="width:150%">
    <img class="mySlides" src="img/als/14.jpg" style="width:150%">
    <img class="mySlides" src="img/als/15.jpg" style="width:150%">
    <img class="mySlides" src="img/als/16.jpg" style="width:150%">
    <img class="mySlides" src="img/als/17.jpg" style="width:150%">
    <img class="mySlides" src="img/als/18.jpg" style="width:150%">
    <img class="mySlides" src="img/als/19.jpg" style="width:150%">
    <img class="mySlides" src="img/als/20.jpg" style="width:150%">
    <img class="mySlides" src="img/als/21.jpg" style="width:150%">
    <img class="mySlides" src="img/als/22.jpg" style="width:150%">
    <img class="mySlides" src="img/als/23.jpg" style="width:150%">
    <img class="mySlides" src="img/als/24.jpg" style="width:150%">
    <img class="mySlides" src="img/als/25.jpg" style="width:150%">
    <img class="mySlides" src="img/als/26.jpg" style="width:150%">
    <img class="mySlides" src="img/als/27.jpg" style="width:150%">
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000);
}
</script>
</div>
   
         


@endsection
