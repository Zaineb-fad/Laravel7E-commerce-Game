<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Laravel Algolia Scout Full Text Search Example</title>
    <style>
        #conteneur{

        }
        
        .o4{
            width:100px;
            height:50px;
            background-color:yellow;
            color:black;
        }
        
        .r1{
            color:white;
            font-size:15px;
        }
        .h1{
            color:white;
            display:block;
            margin-bottom:30px;
                        padding-left:10px;

        }
        .f1{
            display:flex;
        }
        .card{
            margin-bottom:80px;
        }
        .t12{
padding-left:400px;
background-color:rgba(108,35,106,1);
}
  .t12 ul li a {
        background-color:#eee;
        color:black;
        font-size:15px;
        

      }
      .y1{
        margin:0px;
        padding:0px;
        width:700px;
        height:20px;
        padding-right:200px;
       margin-bottom:15px;
       padding-top:5px;
      }
.c1{
    background-color:rgba(108,35,106,1);
}
.tn1 {
  display:block;
}
.tn2{
  display:block;
}
.tn3{
  display:block;
}
.tn4{
  display:block;
}
.tn5{
  display:inline-block;
}
.tn6 ul{
  width:650px;
  background-color:#31174a;
  color:white;
  font-size:15px;
}
.tn6 ul li a {
 background-color:#31174a;
  color:white;
  font-size:15px;
}
.tn6 {
  width:800px;
    padding-left:200px;

}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}
.bv1{
    display:block;
        color:white;
            font-size:15px;


   }
   .bv1 a{
    color:white;
   }
  .bv2{
    display:block;
        color:white;
            font-size:15px;


   }
    .bv2 a{
    color:white;
   }
   .bv3{
    display:block;
        color:white;
            font-size:15px;


   } 
    .bv3 a{
    color:white;
   }
   .bv4{
    background-color:black;
    display:inline-block;
    width:1500px;
   } 
.df1{
    background-color:#31174a;
    height:180px;
    width:1500px;
    color:white;
    padding:10px;

}
.df1 img{
    position:relative;
    padding:0px;
    margin:0px;
    padding-left:400px;
    padding-right:200px;
}
 #conteneur{
display:flex;
  justify-content:flex-start;
        }
    </style>


    
</head>
<body>
    <div class="c1">
    <div class="t12">
      <ul class="nav nav-tabs">
             <li  role="presentation"><div class="y1"><input type="search" name="search"class="form-control"></div></li>

       <li  role="presentation"><a href="/products"type="button"><span class="
glyphicon glyphicon-shopping-cart"></span> </a></li>

     <li  role="presentation"><a href="/register"type="button">register </a></li>
  <li  role="presentation"><a href="/login"type="button">Login </a></li>

          
      </ul></div>
      <div class="tn6">
    <ul class="nav nav-tabs">
    
    

    
        <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">Games<span class="caret"></span></a><ul class="dropdown-menu"><div id="conteneur"><div class="tn1"><li><a href="/freelance">Steam Games</a></li><li><a href="/file_uploads">XboxGames</a></li><li><a href="/file_uploads">PSN Games</a></li><li><a href="/file_uploads">Nintindo Switch Games</a></li><li><a href="/file_uploads">origin Games</a></li><li><a href="/">Uplay Game</a></li><li><a href="/">Epic Game</a></li><li><a href="/">gog Games</a></li><li><a href="/">Battle NET.Games</a></li></div><div class="tn2"><li><a href="">Action Games</a></li><li><a href="">Action Games</a></li><li><a href="">Adventure Games</a></li><li><a href="">Fighting Games</a></li><li><a href="">FPS games</a></li><li><a href="">Indie games</a></li><li><a href="">Plateform Games Games</a></li></div><div class="tn3"><li><a href="">cheap steam game</a> </li><li><a href="">fortnite collection</a> </li><li><a href="">Apex legend collection</a> </li><li><a href="">always popular games</a> </li> </div><div class="tn4" ><li><a href="">FIFA 20</a></li><li><a href="">Grant auto</a></li><li><a href="">escape from tarvoc</a></li><li><a href="">star wars jedi</a></li></div></div></ul> </li>

    
        <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">Gift Cards<span class="caret"></span></a>><ul class="dropdown-menu"><div id="conteneur"><div class="tn1"><li><a href="/freelance">Steam gift cards</a></li><li><a href="/file_uploads">Xbox live</a></li><li><a href="/file_uploads">PSN gift cart</a></li><li><a href="/file_uploads">Nintindo e shop cards</a></li><li><a href="/file_uploads">fornite cards</a></li><li><a href="/">Uplay Game</a></li><li><a href="/">blizzard gift card</a></li><li><a href="/">google play gift cards</a></li><li><a href="/">Battle NET.Games</a></li></div><div class="tn2"><li><a href="">Action Games</a></li><li><a href="">amazon gift cards</a></li><li><a href="">Adventure Games</a></li><li><a href="">itunes gift card</a></li><li><a href="">netflix gift card</a></li><li><a href="">Indie games</a></li><li><a href="">sportify gift cards</a></li></div><div class="tn3"><li><a href="">gift card global</a> </li><li><a href="">gift card europe</a> </li><li><a href="">gift card united kingdom</a> </li><li><a href="">gift card USA</a> </li> </div></div></ul></li>

    
        <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">Game Points<span class="caret"></span></a><ul class="dropdown-menu"><div id="conteneur"><div class="tn1"><li><a href="/freelance">Steam Games</a></li><li><a href="/file_uploads">Xbox live game points</a></li><li><a href="/file_uploads">PSN gift card</a></li><li><a href="/file_uploads">Nintindo Switch Games</a></li><li><a href="/file_uploads">origin Game points </a></li><li><a href="/">Uplay Game</a></li><li><a href="/">Epic Game</a></li><li><a href="/">gog Games</a></li><li><a href="/">Battle NET.Game points</a></li></div><div class="tn2"><li><a href="">Action Game points</a></li><li><a href="">Action Game points</a></li><li><a href="">Adventure Games</a></li><li><a href="">Fighting Game points</a></li><li><a href="">FPS game points</a></li><li><a href="">Indie games</a></li><li><a href="">Plateform Games points</a></li></div><div class="tn3"><li><a href="">cheap steam game</a> </li><li><a href="">fortnite collection</a> </li><li><a href="">Apex legend collection</a> </li><li><a href="">always popular games</a> </li> </div><div class="tn4" ><li><a href="">FIFA 20</a></li><li><a href="">Grant auto</a></li><li><a href="">escape from tarvoc</a></li><li><a href="">star wars jedi</a></li></div></div></ul></li>

    
        <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">Xbox<span class="caret"></span></a><ul class="dropdown-menu"><div id="conteneur"><div class="tn1"><li><a href="/freelance">Steam Games</a></li><li><a href="/file_uploads">Xbox live gift cards</a></li><li><a href="/file_uploads">PSN gift card</a></li><li><a href="/file_uploads">Nintindo Switch Games</a></li><li><a href="/file_uploads">origin Game points </a></li><li><a href="/">Uplay Game</a></li><li><a href="/">Epic Game</a></li><li><a href="/">Xbox game pass</a></li><li><a href="/">Battle NET.Game points</a></li></div><div class="tn2"><li><a href="">Action Game points</a></li><li><a href="">Action Game points</a></li><li><a href="">Adventure Games</a></li><li><a href="">Xbox live gift cards</a></li><li><a href="">Xbox cards gift cards US</a></li><li><a href="">Indie games</a></li><li><a href="">Xbox live gift cards UE</a></li></div><div class="tn3"><li><a href="">cheap steam game</a> </li><li><a href="">fortnite collection</a> </li><li><a href="">Apex legend collection</a> </li><li><a href="">always popular games</a> </li> </div><div class="tn4" ><li><a href="">FIFA 20</a></li><li><a href="">Grant auto</a></li><li><a href="">escape from tarvoc</a></li><li><a href="">star wars jedi</a></li></div></div></ul></li>

 <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">PSN<span class="caret"></span></a><ul class="dropdown-menu"><div id="conteneur"><div class="tn1"><li><a href="/freelance">Steam Games</a></li><li><a href="/file_uploads">Xbox live gift cards</a></li><li><a href="/file_uploads">PSN gift card</a></li><li><a href="/file_uploads">Nintindo Switch Games</a></li><li><a href="/file_uploads">origin Game points </a></li><li><a href="/">Uplay Game</a></li><li><a href="/">Epic Game</a></li><li><a href="/">Xbox game pass</a></li><li><a href="/">Battle NET.Game points</a></li></div><div class="tn2"><li><a href="">Action Game points</a></li><li><a href="">Action Game points</a></li><li><a href="">Adventure Games</a></li><li><a href="">Xbox live gift cards</a></li><li><a href="">Xbox cards gift cards US</a></li><li><a href="">Indie games</a></li><li><a href="">Xbox live gift cards UE</a></li></div><div class="tn3"><li><a href="">cheap steam game</a> </li><li><a href="">fortnite collection</a> </li><li><a href="">Apex legend collection</a> </li><li><a href="">always popular games</a> </li> </div><div class="tn4" ><li><a href="">FIFA 20</a></li><li><a href="">Grant auto</a></li><li><a href="">escape from tarvoc</a></li><li><a href="">star wars jedi</a></li></div></div></ul></li>

 <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">NINTNIDO<span class="caret"></span></a><ul class="dropdown-menu"><div id="conteneur"><div class="tn1"><li><a href="/freelance">psnGames</a></li><li><a href="/file_uploads">psn gift cards</a></li><li><a href="/file_uploads">PSN gift card</a></li><li><a href="/file_uploads">Nintindo Switch Games</a></li><li><a href="/file_uploads"> PSN origin Game  </a></li><li><a href="/">Uplay Game</a></li><li><a href="/">Epic Game</a></li><li><a href="/">play station gift cards EU</a></li><li><a href="/">play station gift cards USA</a></li></div><div class="tn2"><li><a href="">nintindo eshop card EU</a></li><li><a href="">Action Game points</a></li><li><a href="">Adventure Games</a></li><li><a href="">nintindo eshop card USA</a></li><li><a href="">Xbox cards gift cards US</a></li><li><a href="">Indie games</a></li><li><a href="">Xbox live gift cards UE</a></li></div><div class="tn3"><li><a href="">cheap steam game</a> </li><li><a href="">fortnite collection</a> </li><li><a href="">Apex legend collection</a> </li><li><a href="">always popular games</a> </li> </div><div class="tn4" ><li><a href="">FIFA 20</a></li><li><a href="">Grant auto</a></li><li><a href="">escape from tarvoc</a></li><li><a href="">star wars jedi</a></li></div></div></ul></li>




        </ul></div>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
     <div class="g1">
         <div class="panel panel-default">
  <div class="panel-body">
  
   
    <form method="get" action="{{ route('game.create') }}">
          
    <button type="submit" class="o4">Game </button>

      </form>
      <form method="get" action="{{ route('dlc.create') }}">
          
          <button type="submit" class="o4">DLC</button>
      </form>
      <form method="get" action="{{ route('gamepoints.create') }}">
          
          
          <button type="submit" class="o4">Game Points</button>
      </form>
      <form method="get" action="{{ route('windows.create') }}">
          
          
          <button type="submit" class="o4">windows</button>
      </form>
      <form method="get" action="{{ route('mac.create') }}">
          
          
          <button type="submit" class="o4">Mac</button>
      </form>
      <form method="get" action="{{ route('linux.create') }}">
          
          
          <button type="submit" class="o4">Linux</button>
      </form>
      <form method="get" action="{{ route('stream.create') }}">
          
          
          <button type="submit" class="o4">Stream</button>
      </form>
      <form method="get" action="{{ route('xbox.create') }}">
          
          
          <button type="submit" class="o4">xbox live</button>
      </form>
      <form method="get" action="{{ route('action.create') }}">
        
          
          <button type="submit" class="o4">Action</button>
      </form>
      <form method="get" action="{{ route('rpg.create') }}">
          
          
          <button type="submit" class="o4">RPG</button>
      </form>
      <form method="get" action="{{ route('adventure.create') }}">
          
          
          <button type="submit" class="o4">adventure</button>
      </form>
      <form method="get" action="{{ route('fps.create') }}">
          
          
          <button type="submit" class="o4">FPS</button>
      </form>
      <form method="get" action="{{ route('racing.create') }}">
          
          
          <button type="submit" class="o4">Racing</button>
      </form>
      <form method="get" action="{{ route('simulation.create') }}">
          
          
          <button type="submit" class="o4">Simulation</button>
      </form>
      <form method="get" action="{{ route('mmo.create') }}">
          
          
          <button type="submit" class="o4">MMO</button>
      </form>
      <form method="get" action="{{ route('hack.create') }}">
          
          
          <button type="submit" class="o4">Hack</button>
      </form>
      <form method="get" action="{{ route('strategy.create') }}">
          
          
          <button type="submit" class="o4">Strategy</button>
      </form>
      <form method="get" action="{{ route('global.create') }}">
          
          
          <button type="submit" class="o4">Global</button>
      </form>
      <form method="get" action="{{ route('europe.create') }}">
          
          
          <button type="submit" class="o4">Europe</button>
      </form>
    

        
    
  </div>
</div>
     </div> </div>
     <div class="col-md-8"> 
    <div class="f1">
        <div class="card">
            <div class="h1">
            <a href="/steam-darksiders-warmastered-edition-steam-key-global"><img src="/image/3.PNG"></a>
       <div class="r1">  <p>  The Elder Scrolls Online - ...</p></div>
<h6>GLOBAL</h6>
From
<h5>€15.96</h5>
</div>
        </div>
        <div class="card">
            <div class="h1">
            <a href="/killingfloor"><img src="/image/4.PNG"></a>
        <div class="r1">    <p>Killing Floor 2 (Deluxe Edition) SL</p></div> 
<h6>GLOBAL</h6>
From
<h5>€3.30</h5>
</div>
        </div>
        <div class="card">
            <div class="h1">
            <a href="/darkisider"><img src="/image/5.PNG"></a>
        <div class="r1">  <p>  Darksiders (Warmastered Edition) 
</p></div>
<h6>GLOBAL</h6>
From
<h5>€1.25</h5></div>

        </div></div>
<div class="f1">

        <div class="card">
            <div class="h1">
            <a href="/gothic"><img src="/image/6.PNG"></a>
          <div class="r1"> <p>  Gothic 3 
Gothic 3 Steam Key GLOBAL</p></div>
<h6>GLOBAL</h6>
From
<h5>€0.63</h5> </div>
 
        </div>
            
        <div class="card">
            <div class="h1">
            <div class="h1">
           <a href="/elderscroll"> <img src="/image/7.PNG"></a>
            <div class="r1">  <p>  The Elder Scrolls Online</p></div>
<h6>GLOBAL</h6>
From
<h5>€15.96</h5> </div></div>
        </div>
        <div class="card">
            <div class="h1">
            <a href="/fallout"><img src="/image/8.PNG"></a>
        <div class="r1">  <p>  Fallout 3 (GOTY) </p>
</div>
<h6>GLOBAL</h6>
From
  </div></div>
        </div>

    <div class="f1">
        <div class="card">
            <div class="h1">
           <a href="/spilit"> <img src="/image/9.PNG"></a>
            
<div class="r1"><p>Split/Second </p></div>
<h6> GLOBAL</h6>
From
<h5>€1.56</h5></div>

        </div>
        <div class="card">
            <div class="h1">
            <img src="/image/10.PNG">
        <div class="r1">   <p> Killing Floor 2 </p>
</div>
<h6>GLOBAL</h6>
From
<h5> €2.36</h5></div>

        </div>
        <div class="card">
            <div class="h1">
            <a href="/killingfloor"><img src="/image/10.PNG"></a>
            
<div class="r1"><p>Killing Floor 2 </p></div>
<h6> GLOBAL</h6>
From
<h5>€3.30</h5></div>

  
        </div></div>
        <div class="f1">
            <div class="h1">
        <div class="card">
           <a href="/gothic"> <img src="/image/12.PNG"></a>
          <div class="r1">  <p>Gothic (Universe Edition) 
</p></div>
<h6>GLOBAL</h6>
From
<h5>€0.79</h5></div>

        </div>
        <div class="card">
            <div class="h1">
          <a href="/returncastle">  <img src="/image/13.PNG"></a>
         <div class="r1">  <p> Return to Castle Wolfenstein 
</p></div>
<h6>GLOBAL</h6>
From
<h5>€0.83</h5></div>

        </div>
        <div class="card">
            <div class="h1">
           <a href="/dirtyrally"></a><img src="/image/14.PNG"></a>
        <div class="r1"><p>  DiRT Rally 
</p> </div>
<h6>GLOBAL</h6>
<h5>Sold out</h5></div>
        </div></div>
<div class="f1">

        <div class="card">
            <div class="h1">
            <img src="/image/15.PNG"></a>
            <div class="r1"> <p>  DiRT Rally 
</p></div>
<h6>GLOBAL</h6>
<h5>Sold out</h5> </div>
        </div>
        <div class="card">
            <div class="h1">
          <a href="/dirtyrally"> <img src="/image/16.PNG"></a>
          <div class="r1">  <p>  DiRT Rally 
</p> </div>
<h6>GLOBAL</h6>
<h5>Sold out</h5> </div> 
        </div>
    <div class="card">
        <div class="h1">
          <a href="/dirtyrally">  <img src="/image/17.PNG"></a>
          <div class="r1"> <p>  DiRT Rally 
</p> </div>
<h6>GLOBAL</h6>
<h5>Sold out</h5></div>
        </div></div>
        <div class="f1">
        <div class="card">
            <div class="h1">
            <a href="/dirtyrally"><img src="/image/18.PNG"></a>
           <div class="r1"> <p>  DiRT Rally 
</p> </div>
<h6>GLOBAL</h6>
<h5>Sold out</h5> </div>
        </div>
         <div class="card">
            <div class="h1">
           <a href="/dirtyrally"> <img src="/image/19.PNG"></a>
            <div class="r1"><p>  DiRT Rally 
</p></div> 
<h6>GLOBAL</h6>
<h5>Sold out</h5></div>  
        </div>
        <div class="card">
            <div class="h1">
           <a href="/dirtyrally"> <img src="/image/20.PNG"></a>
           <div class="r1"> <p>  DiRT Rally 
</p> </div>
<h6>GLOBAL</h6>
<h5>Sold out</h5> </div> 
        </div></div>
    </div>
<nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav></div></div></div>
<footer>
    <img src="/image/ff.PNG">
    <div class="bv4">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
    <div class="bv1">
        <p><strong>About Us</strong></p><br>
        <a href="">about us</a><br>
        <a href="">contact us</a><br>
        <a href="">careers</a><br>
    </div></div>
    <div class="bv2">
        <div class="col-md-2">
        <p><strong>Help</strong></p> 
        <a href="">FAQ</a><br>
        <a href="">Who to integrate game</a><br>
        <a href="">create a ticket</a><br>
    </div></div>
    <div class="bv3">
        <div class="col-md-2">
        <p><strong>Community</strong></p> 
        <a href="">Blog</a><br>
        <a href="">give away</a><br>
    </div></div>
    <div class="bv5">
        <div class="col-md-4">
        <p><strong>follow us</strong></p><br>
        <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a> 
        
    </div></div></div></div></div>
    <div class="df1">
    <img src="/image/ggg.PNG">
<p>Copyright © 2021 Eneba. All Rights Reserved. JSC “Helis play”, Gyneju St. 4-333, Vilnius, the Republic of Lithuania Terms and Conditions, Privacy notice, Cookie preferences.

</p>
</div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</body>

</html>