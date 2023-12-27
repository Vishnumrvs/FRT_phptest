<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 30%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 40%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<h1>Here you can know more about us</h1>
<div id="content">
    
    <p id="description">Welcome to e-petshop! We provide a wide range of pets from registered sellers/owners and We've designed our website with you in mind.
        Our user-friendly interface ensures a seamless and enjoyable experience as you explore
        and interact with potential pets.</p><br><br>
    
    <h2>Our Mission</h2>
        <p>In this website - where meaningful connections between pet enthusiasts and their perfect companions come to life.
        Our platform is designed with one goal: to simplify your search for the ideal pet, bringing joy to your home.
        Explore a diverse range of pets, from playful puppies to exotic birds, all listed by individual sellers.
        Unlike traditional transactions, we don't handle payments. Instead, we provide you with the contact information of the sellers,
        allowing you to negotiate terms personally. Join our community of pet lovers, where you can share experiences and celebrate the joys of pet ownership.
        Discover your perfect companion today with our E-petstore website!</p>
</div>

<div class="about-section">
  <h1>Contact Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>please contact us for any kind of complaints.</p>
</div>

<h2 style="text-align:center">Our Team</h2>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="assets/vignesh-img.jpg" alt="Vignesh" style="width:30%">
      <div class="container">
        <h2>VIGNESH.S</h2>
        <p class="title">Back End</p>
        <p>Used php scripting language to connect with the database that handles storing and retrival of data .</p>
        <p>vicky777ts@gmail.com.com</p>
        <a href="https://www.google.com/gmail/about/" class="button">Contact</a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image/thangarasu.jpeg" alt="Thangarasu" style="width:30%">
      <div class="container">
        <h2>Thangarasu</h2>
        <p class="title">Front End</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>rthangarasu030@gmail.com</p>
        <a href="https://www.google.com/gmail/about/" class="button">Contact</a>
      </div>
    </div>
  </div>

</body>
</html>