<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
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
     
      <!--CSS SETUP-->
      <link rel="stylesheet" href="{{asset('public/admin_design/css/style.css')}}">
      <style>
          
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

:root {
    --main-color: #027581;
    --color-dark: #1D2231;
    --text-grey: #8390A2;
}

* {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    text-decoration: none;
    list-style-type: none;
    box-sizing: border-box;
}
body {
    margin: 0;
    padding: 0;
    background-image: url(public/admin_design/image/background1.jpeg);
    -webkit-background-size: cover;
    background-size: cover;
    font-family: Poppins;
}
/* SIDEBAR SECTION DESIGN===================== */
.sidebar {
    height: 100%;
    width: 260px;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 100;
    background: var(--main-color);
    color: #efefef;
    overflow-y: auto;
    transition: width 500ms;
}

.sidebar-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 60px;
    padding: 0rem 1rem;
}

#sidebar-toggle {
    display: none;
}

.sidebar a {
    color: #fff;
    font-size: 1.1rem;
}
.sidebar-menu ul a {
    height: 45px;
    color: white;
}
.sidebar-menu ul a:active {
   
    color: rgb(27, 189, 121);
}
.sidebar-menu ul a:hover {
   
   color: rgb(27, 189, 121);
}
.sidebar-submenu a span:first-child {
    padding-left:15px;
}

#sidebar-toggle:checked ~ .sidebar {
    width: 50px;
}

#sidebar-toggle:checked ~ .sidebar .sidebar-header h3 span {
    display: none;
}

#sidebar-toggle:checked ~ .sidebar .sidebar-header {
    display: flex;
    justify-content: center;
}

#sidebar-toggle:checked ~ .sidebar .sidebar-menu .sidebar-submenu  a span:last-child{
    display: none;
}


#sidebar-toggle:checked ~ .main-content {
    margin-left:50px;
}

#sidebar-toggle:checked ~ .main-content header {
    left: 50px;
}

/* MAIN SECTION DESIGN===================== */
.main-content {
    position: relative;
    margin-left: 260px;
    transition: margin-left 500ms;
}

header {
    position: fixed;
    left: 260px;
    top: 0;
    z-index: 100;
    width: calc(100% - 260px);
    height: 60px;
    background: #fff;
    padding: 0rem 1rem;
    display: flex;
    border-bottom: 1px solid #ccc;
    transition: left 500ms;
}

.logout {
    display: flex;
    align-items: center;
} 


main {
    margin-top: 37px;
    background: #f1f5f9;
    min-height: 90vh;
    padding: 1rem 3rem;
     background-image: url(public/admin_design/image/background1.jpeg);
    -webkit-background-size: cover;
    background-size: cover;
}

/* BASHBOARD SECTION DESIGN===================== */
.dash-title {
    color: var(--color-dark);
    margin-bottom: 1rem;
}

.dash-cards {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-column-gap: 3rem;
}

.card-single {
    background: #fff;
    border-radius: 7px;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.3);
}

.card-body {
    padding: 1.3rem 1rem;
    display: flex;
    align-items: center;
}

.card-body span {
    font-size: 1.5rem;
    color: #777;
    padding-right: 1.4rem;

}

.card-body h5 {
    color: var(--text-grey);
    font-size: 1rem;
}

.card-body h4 {
    color: var(--color-dark);
    font-size: 1.1rem;
    margin-top: .2rem;
}

.card-footer {
    padding: .2rem 1rem;
    background: #f9fafc;
}

.card-footer a {
    color: var(--main-color);
}

      </style>

       <!--SUMMERNOTE SETUP-->
      <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    
</head>
<body>
      @guest
        @else
            
        <input type="checkbox" id="sidebar-toggle">
        <div class="sidebar">

            <div class="sidebar-header">
                <h4 class="brand">
                    <span class="ti-unlink"></span>
                    <span>Green Shop</span>
                </h3> 
                <label for="sidebar-toggle" class="ti-menu-alt"></label>
            </div>

            <div class="sidebar-menu">
                
                <ul class="list-group">

                    <a href="" class="bg-secondary list-group-item list-group-item-action text-black-50">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="far fa-caret-square-down fa-fw mr-3"></span>
                            <span>Main Menu</span>
                        </div>
                    </a>
                    
                    <a href="{{ url('admin/home') }}" class="bg-dark list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fas fa-tachometer-alt fa-fw mr-3"></span>
                            <span>Dashboard</span>
                        </div>
                    </a>
                   

                    @if(Auth::user()->category == 1)
                    <a href="#sub_sections1" data-toggle="collapse" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fas fa-clipboard-list fa-fw mr-3"></span>
                            <span>Category Section</span>
                            <span class="fas fa-angle-down ml-auto"></span>
                        </div>
                    </a>
                  
                    <div id="sub_sections1" class=" collapse sidebar-submenu">
                        <a href="{{route('categories')}}" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="fas fa-caret-right fa-fw mr-3"></span>
                            <span>Category</span>
                        </a>
                        <a href="{{route('subcategories')}}" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="fas fa-caret-right fa-fw mr-3"></span>
                            <span>Sub category</span>
                        </a>
                    </div>
                    @else 
                    @endif



                    @if(Auth::user()->brand == 1)    
                    <a href="{{route('brands')}}" class="bg-dark list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fas fa-clipboard-list fa-fw mr-3"></span>
                            <span>Brand</span>
                        </div>
                    </a>
                    @else 
                    @endif

                    @if(Auth::user()->coupon == 1)
                    <a href="{{route('coupons')}}" class="bg-dark list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fas fa-clipboard-list fa-fw mr-3"></span>
                            <span>Coupons</span>
                        </div>
                    </a>
                    @else 
                    @endif 


                    @if(Auth::user()->product == 1)
                    <a href="#sub_sections2" data-toggle="collapse" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fas fa-clipboard-list fa-fw mr-3"></span>
                            <span>Product Section</span>
                            <span class="fas fa-angle-down ml-auto"></span>
                        </div>
                    </a>

                    <div id="sub_sections2" class=" collapse sidebar-submenu">
                        <a href="{{route('add.product')}}" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="fas fa-caret-right fa-fw mr-3"></span>
                            <span>Add Product</span>
                        </a>
                        <a href="{{route('all.product')}}" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="fas fa-caret-right fa-fw mr-3"></span>
                            <span>All product</span>
                        </a>
                    </div>
                    @else 
                    @endif

                    @if(Auth::user()->orders == 1)
                    <a href="#sub_sections3" data-toggle="collapse" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fas fa-clipboard-list fa-fw mr-3"></span>
                            <span>Order Section</span>
                            <span class="fas fa-angle-down ml-auto"></span>
                        </div>
                    </a>

                    <div id="sub_sections3" class=" collapse sidebar-submenu">
                        <a href="{{ route('admin.neworder') }}" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="fas fa-caret-right fa-fw mr-3"></span>
                            <span>New Pending Order</span>
                        </a>
                        <a href="{{ route('admin.accept.payment') }}" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="fas fa-caret-right fa-fw mr-3"></span>
                            <span>Accept Payments</span>
                        </a>
                        <a href="{{ route('admin.progress.payment') }}" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="fas fa-caret-right fa-fw mr-3"></span>
                            <span>Progress Delivery</span>
                        </a>
                        <a href="{{ route('admin.success.payment') }}" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="fas fa-caret-right fa-fw mr-3"></span>
                            <span>Delivery Success</span>
                        </a>
                        <a href="{{ route('admin.cancel.order') }}" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="fas fa-caret-right fa-fw mr-3"></span>
                            <span>Cancel Order</span>
                        </a>
                    </div>
                    @else 
                    @endif


                    @if(Auth::user()->report == 1)
                    <a href="#sub_sections4" data-toggle="collapse" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fas fa-clipboard-list fa-fw mr-3"></span>
                            <span>Report Section</span>
                            <span class="fas fa-angle-down ml-auto"></span>
                        </div>
                    </a>

                    <div id="sub_sections4" class=" collapse sidebar-submenu">
                        <a href="{{ route('today.order') }}" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="fas fa-caret-right fa-fw mr-3"></span>
                            <span>Today Order</span>
                        </a>
                        <a href="{{ route('today.delivered') }}" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="fas fa-caret-right fa-fw mr-3"></span>
                            <span>Today Delivered</span>
                        </a>
                        <a href="{{ route('this.month') }}" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="fas fa-caret-right fa-fw mr-3"></span>
                            <span>This month</span>
                        </a>
                        <a href="{{ route('search.report') }}" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="fas fa-caret-right fa-fw mr-3"></span>
                            <span>Search Report</span>
                        </a>
                    </div>
                    @else 
                    @endif

                    @if(Auth::user()->stock == 1)
                    <a href="{{ route('product.stock') }}" class="bg-dark list-group-item rlist-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fas fa-clipboard-list fa-fw mr-3"></span>
                            <span>product Stock</span>
                        </div>
                    </a>
                    @else 
                    @endif

                    @if(Auth::user()->role == 1)
                    <a href="#sub_sections5" data-toggle="collapse" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fas fa-clipboard-list fa-fw mr-3"></span>
                            <span>Role Section</span>
                            <span class="fas fa-angle-down ml-auto"></span>
                        </div>
                    </a>
                    
                    <div id="sub_sections5" class=" collapse sidebar-submenu">
                        <a href="{{ route('admin.create.form') }}" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="fas fa-caret-right fa-fw mr-3"></span>
                            <span>Create User</span>
                        </a>
                        <a href="{{ route('admin.show') }}" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="fas fa-caret-right fa-fw mr-3"></span>
                            <span>All User</span>
                        </a>
                    </div>
                    @else 
                    @endif


                    @if(Auth::user()->seo == 1)
                    <a href="{{route('admin.seo')}}" class="bg-dark list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fas fa-clipboard-list fa-fw mr-3"></span>
                            <span>Seo Setting</span>
                        </div>
                    </a>
                    @else 
                    @endif


                    @if(Auth::user()->setting == 1)
                    <a href="{{route('admin.sitesetting')}}" class="bg-dark list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fas fa-clipboard-list fa-fw mr-3"></span>
                            <span>Website Setting</span>
                        </div>
                    </a>
                    @else 
                    @endif
                    
                </ul>
            </div>
        </div>

        <div class="main-content">

            <header class="d- flex justify-content-end">
                <div class="logout">
                    <div class="dropdown">
                        <a class="btn btn-dark dropdown-toggle" style="" href="#!" role="button" id="dropdownMenuLink"
                          data-toggle="dropdown">
                          {{ Auth::user()->name }}
                        </a>
                      
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="#!">Setting</a>
                          <a class="dropdown-item" href="{{ route('admin.change.password') }}">Change Password</a>
                          <a class="dropdown-item" href="{{route('admin.logout')}}"><i class="fas fa-sign-out-alt fa-lg"></i>Logout</a>
                        </div>
                      </div>
                    {{-- <a href="" class="text-white btn btn-danger" data-target="#sign-out" data-toggle="modal" ><i class="fas fa-sign-out-alt fa-lg mr-2"></i>Logout</a> --}}
                </div>
            </header>

{{--             
            <!--------Start modal------>
            <div class="modal fade" id="sign-out">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title">Want to leave</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    Press logout to leave
                    </div>
                    <div class="modal-footer">
                    <a class="btn btn-success" href="">Change Password</a>
                    <a class="btn btn-danger" href="{{route('admin.logout')}}">Logout</a>
                    </div>
                </div>
                </div>
            </div>
            <!-------End Modal----------> --}}
                
        @endguest
      
        <main style="overflow-x: scroll;">
            @yield('content')
        </main>
    </div>

    <!-- Optional JavaScript -->
   
    
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
                  toastr.error("{{ Session::get('messege') }}");
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
</body>
</html>
