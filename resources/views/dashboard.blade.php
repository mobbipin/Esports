@extends('layouts.app')

  
@section('contents')

<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Styles -->
     <link rel="stylesheet" href="{{asset('admin_assets/css/dash-mob.css')}}">
      <!-- custom js -->
    <script src="{{ asset('admin_assets/vendor/jquery-easing/script.js') }}"></script>
     

<body>
<div id="container-wrapper">
  <div id="container3">
  
    <h2>⚠️ MOB Broadcasting and Production is Currently on Beta. </h2>
    <p>If you encounter any issues/bugs or have any feedback or suggestion let us know by <span id="linkText">Joining our Discord Server</span>.</p>
  </div>
  <div id="container-wrapper-inner">
    <div id="container">
      
        <h1 style="color: black; font-weight: bold; margin: 0;">Welcome USER</h1>
    
      <hr style="border-top: 1px solid black; margin-bottom: 10px;"> 
      <h3 style="color: black;">You are using Pro Package</h3>
      <br>
      <p>☑️ 1 Tournament at a time(Concurrent)</p>
      <br>
      <p>☑️ Unlimited Tournament Total</p>
      <br>
      <p>☑️ Unlimited Teams, Players and Matches</p>
      <br>
      <p>☑️ Full Customization(Coming Soon)</p>
      <br>
      <p>☑️ Easy Data Handling and Fetching</p>
      <br>
      <p>☑️ Team Info Widget(More Coming Soon)</p>
    </div>  
    <div id="container2">
      <div style="display: flex; align-items: center;">
        <img src="{{URL('admin_assets/images/mob.jpg')}}" alt="Your Image" style="width: 50px; height: auto; margin-right: 10px;">
        <h1 style="color: black; font-weight: bold; margin: 0;">MOB CREATIVES</h1>
      </div>
      <hr style="border-top: 1px solid black; margin-bottom: 10px;"> 
      <h3 style="color : black;"> About US</h3>
      <p>🎮 Introducing MOB Creatives 🎮 </p>
      <p>MOB Creatives emerges as the beacon of transformative excellence. Comprised of a dynamic team of young IT prodigies, we are the driving force behind your journey into the thrilling realm of esports broadcasting and production.
           <br> 🚀 Our Mission: To empower businesses and individuals to seize the infinite possibilities of the digital age.
            <br>🎥 Elevating Esports: We pioneer esports broadcasting with cutting-edge tech and creativity, crafting immersive experiences that captivate global audiences.
      <br><p>Join us in this boundless adventure, where creativity knows no limits. Let's shape the future of esports broadcasting together.</p>
      <br> <p>Welcome to MOB Creatives. Welcome to the future of esports.</p>
    </div>
  </div>
</div>

<style>
  #container-wrapper {
    display: flex;
    flex-direction: column; 
    align-items: center; 
  }
  #container3 {
    width: 1000px; 
    height: 100px; 
    border: 1px solid black;
    margin-bottom: 20px; 
    text-align: center; 
    padding: 10px; 
  }
  #container-wrapper-inner {
    display: flex; 
    justify-content: center; 
    width: 100%;
    margin-top: 20px;
  }
  #container, #container2 {
    width: 45%;
    border: 1px solid black;
    padding: 10px;
  }
  #container {
    margin-right: 50px;
  }
  #linkText {
    color: blue; 
    cursor: pointer; 
    text-decoration: underline;
  }


  #linkText:hover {
    color: red; 
  }
  p {
    color: black;
  }
</style>

<script>
    document.getElementById("linkText").addEventListener("click", function() {
    document.getElementById("linkText").innerHTML = '<a href="https://discord.gg/eCYzXQfbeh" target="_blank">Joining our Discord Server</a>';
  });
</script>
@endsection
