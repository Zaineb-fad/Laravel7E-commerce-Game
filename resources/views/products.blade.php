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
display:flex;
  justify-content:flex-start;
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
 .t12{
padding-left:400px;
background-color:rgba(108,35,106,1);
}
  .t12 ul li a {
        background-color:#eee;
        color:black;
        font-size:15px;
        

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
 .y1{
        margin:0px;
        padding:0px;
        width:700px;
        height:20px;
        padding-right:200px;
       margin-bottom:15px;
       padding-top:5px;
      }
      .gg1{
        background-color:rgba(108,35,106,1);
        height:63px;
        width:1350px;
      }
.gf1{
    height:600px;
}
</style>
    
</head>

<body>

<div class="t12">
      <ul class="nav nav-tabs">
             <li  role="presentation"><div class="y1"><input type="search" name="search"class="form-control"></div></li>

       <li  role="presentation"><a href="/products"type="button"><span class="
glyphicon glyphicon-shopping-cart"></span> </a></li>

     <li  role="presentation"><a href="/register"type="button">register </a></li>
  <li  role="presentation"><a href="/login"type="button">Login </a></li>

          
      </ul></div><div class="gg1">
      <div class="tn6">
        
    <ul class="nav nav-tabs">
    
    

    
        <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">Games<span class="caret"></span></a><ul class="dropdown-menu"><div id="conteneur"><div class="tn1"><li><a href="/freelance">Steam Games</a></li><li><a href="/file_uploads">XboxGames</a></li><li><a href="/file_uploads">PSN Games</a></li><li><a href="/file_uploads">Nintindo Switch Games</a></li><li><a href="/file_uploads">origin Games</a></li><li><a href="/">Uplay Game</a></li><li><a href="/">Epic Game</a></li><li><a href="/">gog Games</a></li><li><a href="/">Battle NET.Games</a></li></div><div class="tn2"><li><a href="">Action Games</a></li><li><a href="">Action Games</a></li><li><a href="">Adventure Games</a></li><li><a href="">Fighting Games</a></li><li><a href="">FPS games</a></li><li><a href="">Indie games</a></li><li><a href="">Plateform Games Games</a></li></div><div class="tn3"><li><a href="">cheap steam game</a> </li><li><a href="">fortnite collection</a> </li><li><a href="">Apex legend collection</a> </li><li><a href="">always popular games</a> </li> </div><div class="tn4" ><li><a href="">FIFA 20</a></li><li><a href="">Grant auto</a></li><li><a href="">escape from tarvoc</a></li><li><a href="">star wars jedi</a></li></div></div></ul> </li>

    
        <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">Gift Cards<span class="caret"></span></a>><ul class="dropdown-menu"><div id="conteneur"><div class="tn1"><li><a href="/freelance">Steam gift cards</a></li><li><a href="/file_uploads">Xbox live</a></li><li><a href="/file_uploads">PSN gift cart</a></li><li><a href="/file_uploads">Nintindo e shop cards</a></li><li><a href="/file_uploads">fornite cards</a></li><li><a href="/">Uplay Game</a></li><li><a href="/">blizzard gift card</a></li><li><a href="/">google play gift cards</a></li><li><a href="/">Battle NET.Games</a></li></div><div class="tn2"><li><a href="">Action Games</a></li><li><a href="">amazon gift cards</a></li><li><a href="">Adventure Games</a></li><li><a href="">itunes gift card</a></li><li><a href="">netflix gift card</a></li><li><a href="">Indie games</a></li><li><a href="">sportify gift cards</a></li></div><div class="tn3"><li><a href="">gift card global</a> </li><li><a href="">gift card europe</a> </li><li><a href="">gift card united kingdom</a> </li><li><a href="">gift card USA</a> </li> </div></div></ul></li>

    
        <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">Game Points<span class="caret"></span></a><ul class="dropdown-menu"><div id="conteneur"><div class="tn1"><li><a href="/freelance">Steam Games</a></li><li><a href="/file_uploads">Xbox live game points</a></li><li><a href="/file_uploads">PSN gift card</a></li><li><a href="/file_uploads">Nintindo Switch Games</a></li><li><a href="/file_uploads">origin Game points </a></li><li><a href="/">Uplay Game</a></li><li><a href="/">Epic Game</a></li><li><a href="/">gog Games</a></li><li><a href="/">Battle NET.Game points</a></li></div><div class="tn2"><li><a href="">Action Game points</a></li><li><a href="">Action Game points</a></li><li><a href="">Adventure Games</a></li><li><a href="">Fighting Game points</a></li><li><a href="">FPS game points</a></li><li><a href="">Indie games</a></li><li><a href="">Plateform Games points</a></li></div><div class="tn3"><li><a href="">cheap steam game</a> </li><li><a href="">fortnite collection</a> </li><li><a href="">Apex legend collection</a> </li><li><a href="">always popular games</a> </li> </div><div class="tn4" ><li><a href="">FIFA 20</a></li><li><a href="">Grant auto</a></li><li><a href="">escape from tarvoc</a></li><li><a href="">star wars jedi</a></li></div></div></ul></li>

    
        <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">Xbox<span class="caret"></span></a><ul class="dropdown-menu"><div id="conteneur"><div class="tn1"><li><a href="/freelance">Steam Games</a></li><li><a href="/file_uploads">Xbox live gift cards</a></li><li><a href="/file_uploads">PSN gift card</a></li><li><a href="/file_uploads">Nintindo Switch Games</a></li><li><a href="/file_uploads">origin Game points </a></li><li><a href="/">Uplay Game</a></li><li><a href="/">Epic Game</a></li><li><a href="/">Xbox game pass</a></li><li><a href="/">Battle NET.Game points</a></li></div><div class="tn2"><li><a href="">Action Game points</a></li><li><a href="">Action Game points</a></li><li><a href="">Adventure Games</a></li><li><a href="">Xbox live gift cards</a></li><li><a href="">Xbox cards gift cards US</a></li><li><a href="">Indie games</a></li><li><a href="">Xbox live gift cards UE</a></li></div><div class="tn3"><li><a href="">cheap steam game</a> </li><li><a href="">fortnite collection</a> </li><li><a href="">Apex legend collection</a> </li><li><a href="">always popular games</a> </li> </div><div class="tn4" ><li><a href="">FIFA 20</a></li><li><a href="">Grant auto</a></li><li><a href="">escape from tarvoc</a></li><li><a href="">star wars jedi</a></li></div></div></ul></li>

 <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">PSN<span class="caret"></span></a><ul class="dropdown-menu"><div id="conteneur"><div class="tn1"><li><a href="/freelance">Steam Games</a></li><li><a href="/file_uploads">Xbox live gift cards</a></li><li><a href="/file_uploads">PSN gift card</a></li><li><a href="/file_uploads">Nintindo Switch Games</a></li><li><a href="/file_uploads">origin Game points </a></li><li><a href="/">Uplay Game</a></li><li><a href="/">Epic Game</a></li><li><a href="/">Xbox game pass</a></li><li><a href="/">Battle NET.Game points</a></li></div><div class="tn2"><li><a href="">Action Game points</a></li><li><a href="">Action Game points</a></li><li><a href="">Adventure Games</a></li><li><a href="">Xbox live gift cards</a></li><li><a href="">Xbox cards gift cards US</a></li><li><a href="">Indie games</a></li><li><a href="">Xbox live gift cards UE</a></li></div><div class="tn3"><li><a href="">cheap steam game</a> </li><li><a href="">fortnite collection</a> </li><li><a href="">Apex legend collection</a> </li><li><a href="">always popular games</a> </li> </div><div class="tn4" ><li><a href="">FIFA 20</a></li><li><a href="">Grant auto</a></li><li><a href="">escape from tarvoc</a></li><li><a href="">star wars jedi</a></li></div></div></ul></li>

 <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">NINTNIDO<span class="caret"></span></a><ul class="dropdown-menu"><div id="conteneur"><div class="tn1"><li><a href="/freelance">psnGames</a></li><li><a href="/file_uploads">psn gift cards</a></li><li><a href="/file_uploads">PSN gift card</a></li><li><a href="/file_uploads">Nintindo Switch Games</a></li><li><a href="/file_uploads"> PSN origin Game  </a></li><li><a href="/">Uplay Game</a></li><li><a href="/">Epic Game</a></li><li><a href="/">play station gift cards EU</a></li><li><a href="/">play station gift cards USA</a></li></div><div class="tn2"><li><a href="">nintindo eshop card EU</a></li><li><a href="">Action Game points</a></li><li><a href="">Adventure Games</a></li><li><a href="">nintindo eshop card USA</a></li><li><a href="">Xbox cards gift cards US</a></li><li><a href="">Indie games</a></li><li><a href="">Xbox live gift cards UE</a></li></div><div class="tn3"><li><a href="">cheap steam game</a> </li><li><a href="">fortnite collection</a> </li><li><a href="">Apex legend collection</a> </li><li><a href="">always popular games</a> </li> </div><div class="tn4" ><li><a href="">FIFA 20</a></li><li><a href="">Grant auto</a></li><li><a href="">escape from tarvoc</a></li><li><a href="">star wars jedi</a></li></div></div></ul></li>




        </ul></div></div>













<div class="gf1">

    <div class="container mt-5" style="max-width: 800px">
        <form method="POST" action="{{ route('createProduct') }}" autocomplete="off">
            @if(count($errors))
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Error occured
                <br />
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif


            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="row">
                <div class="col-md-6">
                    <label for="product name">product name</label>
                    <div class="form-group {{ $errors->has('product_name') ? 'has-error' : '' }}">
                        <input type="text" id="product_name" name="product_name" class="form-control"
                            placeholder="Enter Name" value="{{ old('product_name') }}">
                        <span class="text-danger">{{ $errors->first('product_name') }}</span>
                    </div>
                    <label for="product price">product price</label>
                    <div class="form-group {{ $errors->has('product_price') ? 'has-error' : '' }}">
                        <input type="text" id="product_price" name="product_price" class="form-control"
                            placeholder="Enter price" value="{{ old('product_price') }}">
                        <span class="text-danger">{{ $errors->first('product_price') }}</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <button class="btn btn-outline-danger">Add Product</button>
                    </div>
                </div>
            </div>
        </form>

        <div class="panel panel-primary mt-4">
            <div class="panel-heading mb-2"><strong>Add to cart</strong></div>
            <div class="panel-body">
                <form method="GET" action="{{ route('products') }}">


                    <div class="row mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="product_search" class="form-control"
                                    placeholder="Search by name" value="{{ old('product_search') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <button class="btn btn-success">Search</button>
                            </div>
                        </div>
                    </div>
                </form>

                <table class="table text-center">
                    <thead>
                        <th>#Id</th>
                        <th>Name</th>

                        <th>price</th>
                    </thead>
                    <tbody>
                        @if($products->count())
                        @foreach($products as $key => $product)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $product->product_name }}</td>
                                 <td>{{ $product->product_price }}</td>

                           
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="4">There are no data.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
        </div>


    </div>
</div>
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