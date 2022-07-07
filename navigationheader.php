<link rel="stylesheet" href="css/header.css">

<ul>
  <li class = "hamburger">
    <img src = "img/icons/hamburger.png" class = "hamburger"/>
  </li>
  <li class = "accountBTNS">   
          <div class = "ppicture" style = "background-image: url('img/bulsu.jpg')">
          </div>
          <p class = "lastname">DELA CRUZ,</p>
          <p class = "firstname">Juan D.</p>
          <img src = "img/icons/login-filled.png" class = "logoutBTN" />
  </li>
</ul>

<div class="navbar1">
      <a href="facebook.com">
        <span>
        <img src = "img/icons/HomeICON.png" class = "navlogo1"> 
        <p> Home </p>
        </span>
      </a>
      <a href="#">
        <span>
        <img src = "img/icons/ElectionICON.png" class = "navlogo1"> 
        <p> Elections </p>
        <span>
      </a>
      <a href="#">
        <span>
        <img src = "img/icons/VideoICON.png" class = "navlogo1">
        <p> Campaigns</p>
        </span>
      </a>
      <a href="#">
        <span>
        <img src = "img/icons/ProfileICON.png" class = "navlogo1">
        <p> Profile</p>
        </span>
      </a>
</div>

<style>
    .navbar1{
      display: none;
      box-shadow: 0px -25px 40px rgba(0, 0, 0, 0.158);
    }
    span{
      display: block;
      background-color: green;
      height: 70%;
      padding: 10% 0;
      margin: auto;
    }
    span p{
      float: left;
      margin: auto;
      padding: 6px 0;
    }
    .navlogo1{
      height: 33px;
      float: left;
    }
    .navbar1 {
      background-color: white;
      overflow: hidden;
      position: fixed;
      display:grid;
      grid-template-rows: auto auto auto auto;
      color: black;
      background-color: red;
      z-index: 2;
      margin: auto;
}

/* Style the links inside the navigation bar */
.navbar1 a {
  text-decoration: none;
  color: black;
}

/* Change the color of links on hover */
.navbar1 a:hover {
  background-color: #ddd;
  
}

/* Add a color to the active/current link */
.navbar1 a.active {
  color: black;
  color: white;
}
@media only screen and (max-width: 600px) {
      .navbar1{
        display: none;
      }
}
</style>