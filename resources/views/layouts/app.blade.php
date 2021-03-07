<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
            *
            {
                margin: 0;
                padding: 0;
            }

body {
    background:orange;
    font-family: sans-serif;
}

.top-nav-bar {
    height: 70px;
    top: 0;
    position: sticky;
    background: #fff;
    margin-bottom: 20px;
    border-bottom: 3px solid orange;
    z-index: 2;
}

.logo {
    height: 40x;
    width: 10%;
    margin: 10px 30px;
}

/* .search_input {
    margin-top: 9px;
    margin-left: 30px;
    border: 1px solid orange;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;
    box-shadow: none;
}

.search_input_text {
    background: orange;
    border: 1px solid orange;
    margin: 8.5px 10px 3px 0;
    border-top-left-radius: 0px;
    border-bottom-left-radius: 0px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    cursor: pointer;
} */

 .search-box {
    display: inline-flex;
    width:55%;
}


.menu-bar {
    width: 35%;
    height: 57px;
    float: right;
} 

.menu-bar ul {
    display: inline-flex;
    float: right;
}

.menu-bar ul li {
    border-left: 1px solid #fff;
    list-style-type: none;
    padding: 15px 35px;
    text-align: center;
    background: orange;
    cursor: pointer;
} 

.menu-bar ul li a {
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    text-decoration: none;
}

.fa-shopping-basket {
    margin-right: 5px;
}

@media only screen and (max-width: 980px) {
    .top-nav-bar {
        height: 118px;
        border-bottom: 0;
    }
    
    .menu-bar {
        width: 100%;
    }
    .menu-bar ul {
        margin:10px 0;
        width: 100%;
    }
    .menu-bar ul li {
        height: 57px;
        width:100%;
    }
    
}

/* ----------Side-Menu---------- */

.side-menu {
    height: 400px;
    width: 15%;
    font-size: 14px;
    float: left;
    z-index: 2;
    background-color: #ddd;
}

.side-menu ul {
    margin-left: 10px;
}

.side-menu ul li {
    list-style-type: none;
    font-weight: bold;
    margin-top: 10px;
    cursor: pointer;
}

.side-menu ul li:hover {
   color: orange;
}

.side-menu ul li ul {
    display: none;
    z-index: 10;
    top: 77px;
    
}

.side-menu ul li:hover ul {
    display:block;
    height: 400px;
    margin-left: 14%;
    padding: 0 100px 10px 10px;
    position: fixed;
    background: #ececec;
    box-shadow: 1px 1px 4px 1px rgba(0,0,0,0.5);
}

.fa-angle-right {
    margin-top: 4px;
    margin-right: 8px;
    float: right;
}

#menu-btn,#close-btn {
    font-size: 30px;
    margin: 10px;
    color: orange;
    display: none;
}

@media only screen and (max-width: 980px) {
    .side-menu {
        width: 34%;
        z-index: 20;
        top: 133px;
        position: fixed;
        font-size: 12px;
        display: none;
    }
    .side-menu ul li ul {
        top: 133px;
    }
    .side-menu ul li:hover ul {
        margin-left: 31%;
    }
    #menu-btn {
        display: block;
    }
}


/*------------------------ slider-------------------- */


.slider {
    width: 85%;
    margin-left: 15%;
    padding: 0 10px;
    background: orange;
    opacity: .9;
}

.carousel {
    box-shadow: 1px 1px 4px 1px rgba(0,0,0,0.5);
}

.carousel img{
    width: 100%;
    height: 400px;
  
}

.carousel-indicators {
    z-index: 1 !important;
}

@media only screen and (max-width: 980px) {
  .slider {
    width: 100%;
    margin-left: 0;
  }
}

/*------------ Featured categories----------------- */

.featured-categories {
    margin: 50px 0;
}

.featured-categories img {
    width: 100%;
    padding: 20px 0;
    transition: .5s;
    cursor: pointer;

}

.featured-categories img:hover {
    transform: scale(1.1);
}

/*------------ On sale product ----------------- */

.title-box {
    background: orange;
    color: #fff;
    width: 180px;
    padding: 4px 10px;
    height: 40px;
    margin-bottom: 30px;
    display: flex;
}

.title-box h2 {
    font-size: 24px;
}

.title-box::after {
    content:'';
    border-top: 40px solid black;
    border-right: 50px solid transparent;
    position: absolute;
    display: flex;
    margin-top: -4px;
    margin-left: 170px;
}

/*-----------------product-top style----------------------*/

.product-top img {
    width:100%;
}

.overlay-right {
    display: block;
    opacity: 0;
    position: absolute;
    top: 10%;
    width: 70px;
}

.overlay-right .fa,.far {
    cursor: pointer;
    background-color: #f6abb6;
    color: #051e3e;
    height: 35px;
    width: 35px;
    font-size: 20px;
    padding: 7px;
    margin-top: 5%;
    margin-bottom: 5%;

}

.overlay-right .btn-secondary {
    background: none;
    border: none;
    box-shadow: none;
}

.product-top:hover .overlay-right {
    opacity: 1;
    margin-left: 5%;
    transition: 0.5s;
}

/*-----------------product-bottom style----------------------*/

.product-bottom .fa {
    color: orange;
    font-size:10px;
}

.product-bottom h3 {
    font-size: 20px;
    font-weight: bold;
}
.product-bottom h5 {
    font-size: 15px;
    padding-bottom: 10px;
}

.new-products {
    margin: 50px 0;
}

/*------Website-products-------------*/

.website-features {
    margin: 60px 0;
}

.website-features img {
    width: 20%;
}

.feature-text {
    margin-top: 10px;
    float: right;
    width: 80%;
    padding-left: 20px;
}

.feature-box {
    padding-top: 20px;
}

/*-------------Footer-----------------*/

.footer {
    margin-top: 50px;
    background-color: #000;
    color: #fff;
}

.footer h1 {
    font-size: 15px;
    margin: 25px 0;
}

.foooter p {
    font-size: 12px;
}

.copyright {
    margin-bottom: -80px;
    text-align: center;
    font-size: 15px;
    padding-bottom: 20px;
}

.copyright .fa-heart {
    color:red;
    font-size: 15px;
}

.footer hr {
    margin-top: 10px;
    background-color: #ccc;
}

.footer-image img {
    width: 150px;
}

.footer .row .fab {
    padding: 10px;
    font-size: 15px;
}
    </style>
   
     
      <!---------BOOTSTRAP TABLE-------->
      <link rel="stylesheet" href="{{asset('public/admin_design/datatable/dataTables.bootstrap4.min.css')}}">
      <!--BOOTSTRAP SETUP-->
      <link rel="stylesheet" href="{{asset('public/admin_design/css/bootstrap.min.css')}}">
      
  
      <!---GOOGHLE MATERIAL ICONS SETUP---->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">

      <!-----fontawesome------>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">

      <!-- CSS SETUP FOR TAGSINPUT -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
     
     {{-- <!--CSS SETUP-->
     <link rel="stylesheet" type="text/css" href="public/user_design/css/style.css"> --}}

       <!--SUMMERNOTE SETUP-->
      <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
       

      <script src="https://js.stripe.com/v3/"></script>
    
</head>
<body>
    @php
       $setting=DB::table('settings')->first();  
    @endphp
    <div class="top-nav-bar d-flex justify-content-between">
        <div class="search-box mt-1">

           <i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
           <i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>
           <h2><a href="{{ url('/') }}" class="logo pr-5">{{$setting->company_name}}</a></h2> 
           <form class="form-inline" action="{{ route('product.search') }}" method="POST">
            @csrf
            <input class="form-control mr-sm-2" type="search" placeholder="Product Name" aria-label="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <ul class="list-inline mt-2 ml-5 pl-5">
            <li class="list-inline-item"><i class="fas fa-envelope-square"></i> <a  href="#">{{$setting->email  }}</a></li>
            <ul class="pb-2">
                <li class="list-inline-item"><i class="fas fa-phone mr-1"></i>{{$setting->phone_one  }}</li>
                <li class="list-inline-item"><i class="fas fa-phone mr-1"></i>{{ $setting->phone_two }}</li>
            </ul>
          </ul>
          
        </div>

        <div class="menu-bar">
            <ul>
                <li class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light"><a href="#" data-toggle="modal" data-target="#track_modal"> <span class="fa fa-eye mr-2"></span>Order traking</a></li>
                @guest
                @else
                @php
                  $wishlist=DB::table('wishlists')->where('user_id',Auth::id())->get();  
                @endphp
                <li class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light"><a href="{{ route('user.wishlist') }}"><span class="fa fa-heart">{{ count($wishlist) }}</span> Wishlist</a></li>
                @endguest

                @if(Session::has('coupon'))
                   <li class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light"><a href="{{ route('show.cart') }}"><span class="fa fa-shopping-basket">{{ Cart::count() }}</span>Card</a></li>
                   {{-- Card ${{ session::get('coupon')['balance']  }} --}}
                @else 
                <li class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light"><a href="{{ route('show.cart') }}"><span class="fa fa-shopping-basket"><p class="badge badge-success">{{ Cart::count() }}</p></span> Card</a></li>
                @endif
                

                @guest
                <li class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light"><a href="{{ route('register') }}">Sing Up</a></li>
                <li class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light"><a href="{{ route('login') }}">Log In</a></li>
                @else
                <li class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light"><a href="{{ route('home') }}">Profile</a></li>
                @endguest
            </ul>
        </div>
    </div>

    @yield('content')

<!----------Footer------------->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h1>Follow Us You</h1>
                    <p><i class="fab fa-facebook-square"></i><a href="{{$setting->facebook}}">Facebook</a>
                        </p>
                    <p><i class="fab fa-youtube-square"></i><a href="{{$setting->youtube}}">Youtube</a></p>
                    <p><i class="fab fa-instagram-square"></i><a href="{{$setting->instagram}}">Instragram</a></p>
                    <p><i class="fab fa-twitter-square"></i><a href="{{$setting->twitter}}">Twitter</a></p>
                </div>
            </div>
            <hr>
            {{-- <p class="copyright">Made With by <i class="fas fa-heart"></i>{{$setting->company_name  }}</p> --}}
           
        </div>
    </section>


            <!---------- Modal------------- -->
        <div class="modal fade" id="track_modal">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="track_modal">Put Status Code</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            <form method="post" action="{{ route('order.tracking') }}">
                @csrf
                <div class="modal-body">
                <div class="form-group">
                    <input type="text" name="code" class="form-control" id="track_modal" placeholder="Status Code here" requiree="">
                </div>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        
    
     <!--JS SETUP-->
    {{-- <script src="{{asset('public/admin_design/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('public/admin_design/js/jquery-3.5.1.slim.min.js')}}"></script>  --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="{{asset('public/admin_design/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{asset('public/admin_design/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/admin_design/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/admin_design/datatable/dataTables.bootstrap4.min.js')}}"></script>


    {{-- <script src="{{asset('public/admin_Design/js/scripts.js')}}"></script> --}}
    <script>
     $('#mytable').dataTable();
    </script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script> 
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
 <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>

    <script>
        $('#summernote').summernote({
        tabsize: 2,
        height: 100,
        tooltip: false
        });
    </script>
     <script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.c("{{ Session::get('messege') }}");
                  break;
          }
        @endif
     </script> 
     <script>  
         $(document).on("click", "#delete", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to delete?",
                  text: "Once Delete, This will be Permanently Delete!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
    </script>


<script>
    function openmenu()
    {
        document.getElementById("side-menu").style.display="block";
        document.getElementById("menu-btn").style.display="none";
        document.getElementById("close-btn").style.display="block";
    }

    function closemenu()
    {
        document.getElementById("side-menu").style.display="none";
        document.getElementById("menu-btn").style.display="block";
        document.getElementById("close-btn").style.display="none";
    }
</script>
</body>
</html>
