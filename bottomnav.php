<div class="navbar">
  <a href="#"><img src = "img/icons/HomeICON.png"></a>
  <a href="#"><img src = "img/icons/ElectionICON.png"></a>
  <a href="#"><img src = "img/icons/VideoICON.png"></a>
  <a href="#"><img src = "img/icons/ProfileICON.png"></a>
</div>

<div class="main">
  <h1>Bottom Navigation Bar</h1>
  <p>Some text some text some text.</p>
</div>

<style>
.navbar {
      background-color: white;
      overflow: hidden;
      position: fixed;
      bottom: 0;
      width: 100%;
      color: black;
      margin: auto;
}

/* Style the links inside the navigation bar */
.navbar a {
  float: left;
  display: block;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  color: black;
  border-radius: 30px;
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
</style>