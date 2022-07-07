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
    <div class = "acontainer1">
      <a href="#"><img src = "img/icons/HomeICON.png" class = "navlogo"> Home</a>
    </div>
    <div class = "acontainer1">
      <a href="#"><img src = "img/icons/ElectionICON.png" class = "navlogo"> Elections</a>
    </div>
    <div class = "acontainer1">
      <a href="#"><img src = "img/icons/VideoICON.png" class = "navlogo"> Campaigns</a>
    </div>
    <div class = "acontainer1">
      <a href="#"><img src = "img/icons/ProfileICON.png" class = "navlogo"> Profile</a>
    </div>
</div>

<style>
    .navbar1{
      display: none;
      box-shadow: 0px -25px 40px rgba(0, 0, 0, 0.158);
    }
    .acontainer1{
      display: flex;
      justify-content: center;
      background-color: blue;
    }
    .navlogo1{
      height: 100%;
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
}

/* Style the links inside the navigation bar */
.navbar1 a {
  float: left;
  text-align: center;
  padding: 13px;
  text-decoration: none;
  color: black;
  border-radius: 10px;
  margin: 10px 0;
  height: 25px;
  width: 100%;
  text-align: left;
  background-color: green;
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