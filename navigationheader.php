<link rel="stylesheet" href="css/header.css">

<ul>
  <li>
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
<div class = "showupclass">
<div class="navbar1">
      <a href="#">
        <span class = "menubutton">
        <img src = "img/icons/HomeICON.png" class = "navlogo1"> 
        <p> Home </p>
        </span>
      </a>
      <a href="#">
        <span class = "menubutton">
        <img src = "img/icons/ElectionICON.png" class = "navlogo1"> 
        <p> Elections </p>
        <span>
      </a>
      <a href="#">
        <span class = "menubutton">
        <img src = "img/icons/VideoICON.png" class = "navlogo1">
        <p> Campaigns</p>
        </span>
      </a>
      <a href="#">
        <span class = "menubutton">
        <img src = "img/icons/ProfileICON.png" class = "navlogo1">
        <p> Profile</p>
        </span>
      </a>
</div>
</div>
<style>
  .showupclass {
    position: fixed;
    width: 28%;
    height: 100%;
    z-index: 20;
    margin: 90px 10px;
    display: none;
  }
  .hamburger{
    cursor: pointer;
  }
    .navbar1{
      box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.158);
    }
    .menubutton p{
      float: left;
      margin: auto;
      padding: 17px 20px;
    }
    .navlogo1{
      height: 29px;
      float: left;
      padding: 14px 0px 12px 12px;
    }
    .navbar1 {
      background-color: white;
      position: fixed;
      grid-template-rows: auto auto auto auto;
      color: black;
      display: grid;
      background-color: white;
      z-index: 2;
      height: 350px;
      border-radius: 13px;
      padding: 0 20px;
}


/* Style the links inside the navigation bar */
.navbar1 a {
  text-decoration: none;
  color: black;
  background-color: #f0f0f0;
  margin: auto;
  width: 100%;
  text-align: center;
  border-radius: 10px;
}

/* Change the color of links on hover */
.navbar1 a:hover {
  background-color: #e0e0e0;
  
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