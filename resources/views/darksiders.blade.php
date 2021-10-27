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


}
.e1{
  color:white;
  font-size:15px;
}
.e2{
 
  color:yellow;
  display:inline;
  font-size:20px;
  padding-left:15px;
  margin-left:50px;
}
.e31{
  background-color:yellow;
  color:black;
  font-size:13px;
  border-radius:5px;
  margin-right:10px;
  height:35px;
}
.e32{
  background-color:yellow;
  color:black;
  font-size:13px;
  border-radius:5px;
  margin-right:20px;
    height:35px;

}
.e33{
  background-color:yellow;
  color:black;
  font-size:13px;
  border-radius:5px;
  margin-right:20px;
    height:35px;

}
.e34{
  background-color:yellow;
  color:black;
  font-size:13px;
  border-radius:5px;
  margin-right:20px;
    height:35px;

}
.e35{
  background-color:yellow;
  color:black;
  font-size:13px;
  border-radius:5px;
  margin-right:800px;
    height:35px;

}
#conteneur{
  display:flex;
  justify-content:space-between;
  
}

.e5{
  display:flex;
  color:white;
  width:500px;
  padding-left:15px;
  margin-left:50px;
  margin-right:20px;
  border:1px inset #eee ;
}
.e6{
  font-size:10px;
}
.e8{
  
display:inline;
}
.e9{
  color:white;
}
.e10{
 
  color:yellow;
  display:inline;
  font-size:20px;
  padding-left:15px;
  margin-left:50px;
  margin-top:50px;
  padding-top:50px;
}
.e11{
  color:white;
  font-size:15px;
}

.bn1{
  background-color:#31174a;
  border:1px solid #31174a ;
  width:1000px;
  padding:10px;

}
.bn2{
  background-color:#31174a;
  border:1px solid #31174a ;
  width:1000px;
  margin-top:10px;
  margin-bottom:10px;
}

.bnv1{
  margin-left:10px;
}
.bnv2{
  margin-right:10px;
}
.bnv3{
  margin-right:200px;
}
.bn3{
  background-color:#31174a;
  border:1px solid #31174a ;
  width:800px;
  margin-top:10px;
  margin-bottom:10px;
    padding:10px;

}
.bn4{
 background-color:#31174a;
  border:1px solid #31174a ;
  width:800px;
  margin-top:10px;
  margin-bottom:10px; 
    padding:10px;

}
.bn5{
 background-color:#31174a;
  border:1px solid #31174a ;
  width:800px;
  margin-top:10px;
  margin-bottom:10px; 
    padding:10px;

}
.bn6{
background-color:#31174a;
  border:1px solid #31174a ;
  width:250px;
  margin-top:10px;
  margin-bottom:10px; 
    padding:20px;
    color:white;
  font-size:15px;
  padding-left:10px;
  margin:10px;
}
.bn7{
  background-color:#31174a;
  border:1px solid #31174a ;
  width:400px;
  margin-top:10px;
  margin-bottom:10px; 
  padding:10px;
  padding-left:0px;
  color:white;
    
}
.box-right{
  display:block;
  

}
.box-left{
          background-color:rgba(108,35,106,1);

  display:block;
  padding-left:250px;


}
.c2{
        background-color:rgba(108,35,106,1);

}
.c1{
        background-color:rgba(108,35,106,1);
        width:700px;
        height:2100px;

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
.rt1{
  color:white;
  font-size:15px;
  margin:10px;
  margin-right:20px;
}
.rt2{
  color:white;
  font-size:15px;
  margin:10px;
  margin-right:20px;
}
.rt3{
  color:white;
  font-size:15px;
  margin:10px;
  margin-right:20px;
}
.rtb1{
margin-right:20px;
}
.rtb2{
margin-right:20px;
}
.rtb3{
margin-right:800px;
}
.fb1{
  color:black;
  padding-left:60px;
}
.fgh1{
  background-color:rgba(108,35,106,1);
  height:70px;
  width:1400px;
}
    </style>


    
</head>
<body>
  <div class="c2">
    <div class="t12">
      <ul class="nav nav-tabs">
             <li  role="presentation"><div class="y1"><input type="search" name="search"class="form-control"></div></li>

       <li  role="presentation"><a href="/products"type="button"><span class="
glyphicon glyphicon-shopping-cart"></span> </a></li>

     <li  role="presentation"><a href="/register"type="button">register </a></li>
  <li  role="presentation"><a href="/login"type="button">Login </a></li>

          
      </ul>
    </div>

  </div>
  <div class="fgh1">
  <div class="tn6">
    <ul class="nav nav-tabs">
    
    

    
        <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">Games<span class="caret"></span></a><ul class="dropdown-menu"><div id="conteneur"><div class="tn1"><li><a href="/freelance">Steam Games</a></li><li><a href="/file_uploads">XboxGames</a></li><li><a href="/file_uploads">PSN Games</a></li><li><a href="/file_uploads">Nintindo Switch Games</a></li><li><a href="/file_uploads">origin Games</a></li><li><a href="/">Uplay Game</a></li><li><a href="/">Epic Game</a></li><li><a href="/">gog Games</a></li><li><a href="/">Battle NET.Games</a></li></div><div class="tn2"><li><a href="">Action Games</a></li><li><a href="">Action Games</a></li><li><a href="">Adventure Games</a></li><li><a href="">Fighting Games</a></li><li><a href="">FPS games</a></li><li><a href="">Indie games</a></li><li><a href="">Plateform Games Games</a></li></div><div class="tn3"><li><a href="">cheap steam game</a> </li><li><a href="">fortnite collection</a> </li><li><a href="">Apex legend collection</a> </li><li><a href="">always popular games</a> </li> </div><div class="tn4" ><li><a href="">FIFA 20</a></li><li><a href="">Grant auto</a></li><li><a href="">escape from tarvoc</a></li><li><a href="">star wars jedi</a></li></div></div></ul> </li>

    
        <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">Gift Cards<span class="caret"></span></a>><ul class="dropdown-menu"><div id="conteneur"><div class="tn1"><li><a href="/freelance">Steam gift cards</a></li><li><a href="/file_uploads">Xbox live</a></li><li><a href="/file_uploads">PSN gift cart</a></li><li><a href="/file_uploads">Nintindo e shop cards</a></li><li><a href="/file_uploads">fornite cards</a></li><li><a href="/">Uplay Game</a></li><li><a href="/">blizzard gift card</a></li><li><a href="/">google play gift cards</a></li><li><a href="/">Battle NET.Games</a></li></div><div class="tn2"><li><a href="">Action Games</a></li><li><a href="">amazon gift cards</a></li><li><a href="">Adventure Games</a></li><li><a href="">itunes gift card</a></li><li><a href="">netflix gift card</a></li><li><a href="">Indie games</a></li><li><a href="">sportify gift cards</a></li></div><div class="tn3"><li><a href="">gift card global</a> </li><li><a href="">gift card europe</a> </li><li><a href="">gift card united kingdom</a> </li><li><a href="">gift card USA</a> </li> </div></div></ul></li>

    
        <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">Game Points<span class="caret"></span></a><ul class="dropdown-menu"><div id="conteneur"><div class="tn1"><li><a href="/freelance">Steam Games</a></li><li><a href="/file_uploads">Xbox live game points</a></li><li><a href="/file_uploads">PSN gift card</a></li><li><a href="/file_uploads">Nintindo Switch Games</a></li><li><a href="/file_uploads">origin Game points </a></li><li><a href="/">Uplay Game</a></li><li><a href="/">Epic Game</a></li><li><a href="/">gog Games</a></li><li><a href="/">Battle NET.Game points</a></li></div><div class="tn2"><li><a href="">Action Game points</a></li><li><a href="">Action Game points</a></li><li><a href="">Adventure Games</a></li><li><a href="">Fighting Game points</a></li><li><a href="">FPS game points</a></li><li><a href="">Indie games</a></li><li><a href="">Plateform Games points</a></li></div><div class="tn3"><li><a href="">cheap steam game</a> </li><li><a href="">fortnite collection</a> </li><li><a href="">Apex legend collection</a> </li><li><a href="">always popular games</a> </li> </div><div class="tn4" ><li><a href="">FIFA 20</a></li><li><a href="">Grant auto</a></li><li><a href="">escape from tarvoc</a></li><li><a href="">star wars jedi</a></li></div></div></ul></li>

    
        <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">Xbox<span class="caret"></span></a><ul class="dropdown-menu"><div id="conteneur"><div class="tn1"><li><a href="/freelance">Steam Games</a></li><li><a href="/file_uploads">Xbox live gift cards</a></li><li><a href="/file_uploads">PSN gift card</a></li><li><a href="/file_uploads">Nintindo Switch Games</a></li><li><a href="/file_uploads">origin Game points </a></li><li><a href="/">Uplay Game</a></li><li><a href="/">Epic Game</a></li><li><a href="/">Xbox game pass</a></li><li><a href="/">Battle NET.Game points</a></li></div><div class="tn2"><li><a href="">Action Game points</a></li><li><a href="">Action Game points</a></li><li><a href="">Adventure Games</a></li><li><a href="">Xbox live gift cards</a></li><li><a href="">Xbox cards gift cards US</a></li><li><a href="">Indie games</a></li><li><a href="">Xbox live gift cards UE</a></li></div><div class="tn3"><li><a href="">cheap steam game</a> </li><li><a href="">fortnite collection</a> </li><li><a href="">Apex legend collection</a> </li><li><a href="">always popular games</a> </li> </div><div class="tn4" ><li><a href="">FIFA 20</a></li><li><a href="">Grant auto</a></li><li><a href="">escape from tarvoc</a></li><li><a href="">star wars jedi</a></li></div></div></ul></li>

 <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">PSN<span class="caret"></span></a><ul class="dropdown-menu"><div id="conteneur"><div class="tn1"><li><a href="/freelance">Steam Games</a></li><li><a href="/file_uploads">Xbox live gift cards</a></li><li><a href="/file_uploads">PSN gift card</a></li><li><a href="/file_uploads">Nintindo Switch Games</a></li><li><a href="/file_uploads">origin Game points </a></li><li><a href="/">Uplay Game</a></li><li><a href="/">Epic Game</a></li><li><a href="/">Xbox game pass</a></li><li><a href="/">Battle NET.Game points</a></li></div><div class="tn2"><li><a href="">Action Game points</a></li><li><a href="">Action Game points</a></li><li><a href="">Adventure Games</a></li><li><a href="">Xbox live gift cards</a></li><li><a href="">Xbox cards gift cards US</a></li><li><a href="">Indie games</a></li><li><a href="">Xbox live gift cards UE</a></li></div><div class="tn3"><li><a href="">cheap steam game</a> </li><li><a href="">fortnite collection</a> </li><li><a href="">Apex legend collection</a> </li><li><a href="">always popular games</a> </li> </div><div class="tn4" ><li><a href="">FIFA 20</a></li><li><a href="">Grant auto</a></li><li><a href="">escape from tarvoc</a></li><li><a href="">star wars jedi</a></li></div></div></ul></li>

 <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">NINTNIDO<span class="caret"></span></a><ul class="dropdown-menu"><div id="conteneur"><div class="tn1"><li><a href="/freelance">psnGames</a></li><li><a href="/file_uploads">psn gift cards</a></li><li><a href="/file_uploads">PSN gift card</a></li><li><a href="/file_uploads">Nintindo Switch Games</a></li><li><a href="/file_uploads"> PSN origin Game  </a></li><li><a href="/">Uplay Game</a></li><li><a href="/">Epic Game</a></li><li><a href="/">play station gift cards EU</a></li><li><a href="/">play station gift cards USA</a></li></div><div class="tn2"><li><a href="">nintindo eshop card EU</a></li><li><a href="">Action Game points</a></li><li><a href="">Adventure Games</a></li><li><a href="">nintindo eshop card USA</a></li><li><a href="">Xbox cards gift cards US</a></li><li><a href="">Indie games</a></li><li><a href="">Xbox live gift cards UE</a></li></div><div class="tn3"><li><a href="">cheap steam game</a> </li><li><a href="">fortnite collection</a> </li><li><a href="">Apex legend collection</a> </li><li><a href="">always popular games</a> </li> </div><div class="tn4" ><li><a href="">FIFA 20</a></li><li><a href="">Grant auto</a></li><li><a href="">escape from tarvoc</a></li><li><a href="">star wars jedi</a></li></div></div></ul></li>




        </ul></div></div>
    <div id="conteneur">
      <div class="box-right">
      <div class="c1">
    <div class="bn1">
<div class="media">
  <div class="media-left media-middle">
    <a href="#">
      <img class="media-object" src="/image/24.PNG" >
    </a>
  </div>
  <div class="media-body">
    <div class="e1"><h4 class="media-heading">Darksiders (Warmastered Edition) Steam Key GLOBAL</h4></div>
    <div class="e2"><span class="glyphicon glyphicon-star" aria-hidden="true"></span class="glyphicon glyphicon-star" aria-hidden="true"><span class="glyphicon glyphicon-star" aria-hidden="true"></span class="glyphicon glyphicon-star" aria-hidden="true"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
    <div id="conteneur"><div class="e31"><h6>action</h6></div><div class="e32"><h6>Hack&Slash</h6></div> <div class="e33"><h6>adventure</h6></div><div class="e34"><h6>RPG</h6></div><div class="e35"><h6>Single-player</h6></div><div class="e36"><h6>Third-person</h6> </div>
    
</div><br><br><br><div id="conteneur"><div class="rtb1"><img src="/image/32.PNG"></div><div class="rt1"><p>Global</p></div> <div class="rtb2"><img src="/image/33.PNG"></div><div class="rt2"><p>Stream</p></div><div class="rtb3"><img src="image/34.PNG"><div class="rt3"></div><p>Games</p></div>  </div>
</div></div></div>
<div class="bn2">
<div id="conteneur"><div class="bnv1"><img src="/image/25.PNG"></div><div class="bnv2"><img src="/image/26.PNG"></div><div class="bnv3"><img src="/image/27.PNG"></div><div class="bnv4"><img src="/image/28.PNG"></div></div></div>



<div class="bn3">

      <div class="e8">
       <img class="media-object" src="/image/35.PNG" ><div class="e10"><span class="glyphicon glyphicon-star" aria-hidden="true"></span class="glyphicon glyphicon-star" aria-hidden="true"><span class="glyphicon glyphicon-star" aria-hidden="true"></span class="glyphicon glyphicon-star" aria-hidden="true"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
     </div>
    
  
    <div class="e9"><p>The story is excellent well worked and intertwined with the other games, a good saga to enjoy. I love exploring the world discovering new weapons. </p></div>
  






   
  

      <div class="e8">
      <img class="media-object" src="/image/36.PNG" ><div class="e10"><span class="glyphicon glyphicon-star" aria-hidden="true"></span class="glyphicon glyphicon-star" aria-hidden="true"><span class="glyphicon glyphicon-star" aria-hidden="true"></span class="glyphicon glyphicon-star" aria-hidden="true"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
      </div>
    
  
    <div class="e9"><p>This game introduces this universe of Darksiders in a spectacular way, and the graphical improvement of this edition makes it totally worth it.</p></div>
  
 
  
   
      <div class="e8">
       <img class="media-object" src="/image/37.PNG" ><div class="e10"><span class="glyphicon glyphicon-star" aria-hidden="true"></span class="glyphicon glyphicon-star" aria-hidden="true"><span class="glyphicon glyphicon-star" aria-hidden="true"></span class="glyphicon glyphicon-star" aria-hidden="true"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
     </div>
   
 
   <div class="e9"><p> Fantastic Zelda-like, set in a post-apocalyptic setting where you play as one of the Four Horsemen of Apocalypse, War</p></div>
  



      <div class="e8">
       <img class="media-object" src="/image/38.PNG" ><div class="e10"><span class="glyphicon glyphicon-star" aria-hidden="true"></span class="glyphicon glyphicon-star" aria-hidden="true"><span class="glyphicon glyphicon-star" aria-hidden="true"></span class="glyphicon glyphicon-star" aria-hidden="true"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
       </div>
    
<div class="e9"><p>Good game to remember old times! The remastered version is a very good option also if you haven't tried it yet.</p>     <div class="e11"><div class="bn4">
<p>
Product description<br>
Darksiders (Warmastered Edition)<br>
Darksiders (Warmastered Edition) features:<br>
<ul>
<li> Support for 4k video output resolution</li>

<li>  Doubled texture resolutions</li>

<li> Re-rendered cutscenes, now all in HD</li>

<li> Various improvements and reworks to rendering</li>

<li> Higher quality to shadow rendering</li>

<li> Post-processing effect</li>

<li>Optimized framerate</li> 

<li>Vast variety for Graphic Options</li> 

<li> Steam Trading Cards</li></ul>

Battle for survival in an apocalyptic world of Darksiders, a role-playing game developed by Vigil Games!<br>

Get stronger with each passing day as you collect relics, gain new abilities and upgrade weapons, slowly merging with your character!<br>

Battle your way through post-apocalyptic wastelands and dungeons where everything that moves is out to kill you! Face anyone daring to<br> stand in your way on your quest to redemption!<br></p></div>
<div class="bn5">
<p>
System requirements<br>
Minimum system requirements<br>
System requirements Windows XP SP3 / Vista SP1 / Windows 7<br>
Processor AMD Athlon 64 3800+ 2.4 GHz / Intel Pentium 4 530 3.0 GHz<br>
Memory  2 GB RAM<br>
Graphics  256 MB VRAM - ATI Radeon X1900 / NVIDIA GeForce 8800<br>
Storage 12 GB<br>
Recommended system requirements<br>
System requirements Windows 7, Windows 8, Windows 10<br>
Processor Intel or AMD Quad Core CPU<br>
Memory  8 GB<br>
Graphics  DirectX 11 Feature Level AMD or NVIDIA Card 1 GB VRAM<br>
Storage 36 GB<br>
Other details<br>
PEGI 18<br>
Languages <br>
Czech<br>
English<br>
French<br>
German<br>
Italian<br>
Japanese<br>
Korean<br>
Polish<br>
Portuguese-Brazil<br>
Russian<br>
Simplified Chinese<br>
Spanish<br>
Release date  November 29, 2016<br>
Publisher THQ Nordic<br>
Developers  THQ Inc.<br>
Works on  <br>
Windows<br>

</p></div>


</div>
  </div></div>
</div></div>
<div class="box-left">

<div class="bn6">
<p>e-commerce</p>
<p>99.99% of 25k+ ratings are excellent!</p>
<p>  Lowest price</p>
<h4>€1.25</h4>
<div class="fb1">
 <form method="get" action="{{ route('products') }}">
          
    <button type="submit" class="btn btn-lg"> <span class="glyphicon glyphicon-shopping-cart"aria-hidden="true"></span>add to cart </button>

      </form></div></div>


 <div class="bn7">
<div class="media">
  <div class="media-left media-middle">
    <a href="#">
      <img class="media-object" src="/image/29.PNG" >
    </a>
  </div>
  <div class="media-body">
   <p>  Darksiders 2 (Deathinitive Edition) Steam Key GLOBAL
Darksiders 2 (Deathinitive Edition) Steam Key GLOBAL
GLOBAL
From</p>
<h6>€3.09</h6> 

  </div>
</div>
<div class="media">
  <div class="media-left media-middle">
    <a href="#">
      <img class="media-object" src="/image/30.PNG" >
    </a>
  </div>
  <div class="media-body">
    <p>  Darksiders 2 (Deathinitive Edition) Steam Key GLOBAL
Darksiders 2 (Deathinitive Edition) Steam Key GLOBAL
GLOBAL
From</p>
<h6>€3.09</h6>
  </div>
</div>
<div class="media">
  <div class="media-left media-middle">
    <a href="#">
      <img class="media-object" src="/image/31.PNG" >
    </a>
  </div>
  <div class="media-body">
    <p>  Darksiders 2 (Deathinitive Edition) Steam Key GLOBAL
Darksiders 2 (Deathinitive Edition) Steam Key GLOBAL
GLOBAL
From</p>
<h6>€3.09</h6>
  </div>
</div></div></div>

   </div></div>

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
  </body></html>