@extends('layouts.app')
@section('title')
MOB ESPORTS PRODUCTION
@endsection
  
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
    <div id="container">
      <div id="title">Welcome User ! You are currently using the Beta version. Stay tuned.</div>
    
    <!-- <ul>
      <li>Unlimited Tournaments Total</li>
      <li>Unlimited Teams, Players and Matches</li>
      <li>Full Customization (Coming Soon)</li>
      <li>Easy Data handling and fetching</li>
    </ul> -->

  </div>
</div>

<!-- Add this new container to your HTML file -->
<div id="second-container">   
  <div id="second-body">
    <!-- Content for the second container goes here -->
  </div>
</div>

</body>
</head>

</html>
@endsection
