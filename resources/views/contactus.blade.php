<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Responsive Contact Us Form | CodingLab</title>
  <link rel="stylesheet" href="{{asset('admin_assets/css/style4.css')}}">
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Adarsha Colony, Kathmandu</div>
          <div class="text-two">Kapan</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+977 9761654803</div>
          <div class="text-two">+977 9802358890</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">support@mobcr3atives.com.com</div>
          <div class="text-two">mobcr3atives@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any types of query related to our services and product, you can send me a message from here. It's my pleasure to help you.</p>
        <form action="#">
          <div class="input-box">
            <input type="text" placeholder="Enter your name">
          </div>
          <div class="input-box">
            <input type="text" placeholder="Enter your email">
          </div>
          <div class="input-box message-box">
            <textarea placeholder="Enter your message"></textarea>
          </div>
          <div class="button">
            <input type="button" value="Send Now">
          </div>
        </form>
      </div>
    </div>
  </div>
  <a href="/" class="return-to-home" >
    <span class="icon">&larr;</span> Return to Homepage</a>

</body>
</html>
