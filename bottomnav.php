<div class="navbar">
  <div class = "acontainer">
  <a href="#"><img src = "img/icons/HomeICON.png" class = "navlogo"></a>
</div>
  <div class = "acontainer">
  <a href="#"><img src = "img/icons/ElectionICON.png" class = "navlogo"></a>
</div>
  <div class = "acontainer">
  <a href="#"><img src = "img/icons/VideoICON.png" class = "navlogo"></a>
</div>
  <div class = "acontainer">
  <a href="#"><img src = "img/icons/ProfileICON.png" class = "navlogo"></a>
</div>
</div>

<style>
.navbar{
  display: none;
  box-shadow: 0px -25px 40px rgba(0, 0, 0, 0.158);
}
.acontainer{
  display: flex;
  justify-content: center;
}
.navlogo{
  height: 100%;
}

@media only screen and (max-width: 600px) {
.navbar {
      background-color: white;
      overflow: hidden;
      position: fixed;
      display:grid;
      grid-template-columns: auto auto auto auto;
      bottom: 0;
      margin: auto;
      color: black;
      width: 100%;
}

/* Style the links inside the navigation bar */
.navbar a {
  float: left;
  text-align: center;
  padding: 13px;
  text-decoration: none;
  color: black;
  border-radius: 100px;
  margin: 10px 0;
  height: 25px;
}

/* Change the color of links on hover */
.navbar a:hover {
  background-color: #ddd;
  
}

/* Add a color to the active/current link */
.navbar a.active {
  color: black;
  color: white;
}
}
</style>