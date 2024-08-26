 @extends('layouts.master')
 @section('content')
 <div class="row">
     <div class="col-12">
         <!-- Start frame -->
         <div class="frame">
             <div class="app-content content ecommerce-application">
                 <div class="content-overlay"></div>
                 <div class="header-navbar-shadow"></div>
                 <div class="content-wrapper container-xxl p-0">
                     <div class="content-detached content-center">
                         <div class="content-body">
                             <!-- E-commerce Content Section Starts -->
                             <div class="body-content-overlay"></div>
                             <!-- background Overlay when sidebar is shown  ends-->

                             <!-- E-commerce Search Bar Starts -->
                             <section id="ecommerce-searchbar" class="ecommerce-searchbar">
                                 <div class="row mt-1">
                                     <div class="col-12">
                                         <div class="input-group input-group-merge">
                                             <input type="text" class="form-control search-product" id="shop-search"
                                                 placeholder="Search Product" aria-label="Search..."
                                                 aria-describedby="shop-search" />
                                             <div class="input-group-append">
                                                 <span class="input-group-text"><i data-feather="search"
                                                         class="text-muted"></i></span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </section>
                             <!-- E-commerce Search Bar Ends -->

                             <!-- E-commerce Products Starts -->
                             <section id="ecommerce-products" class="list-view">
                                 <div class="card ecommerce-card">
                                     <div class="item-img text-center">
                                         <a href="app-ecommerce-details.html">
                                             <img class="img-fluid card-img-top"
                                                 src="../../../app-assets/images/portrait/small/avatar-s-11.jpg"
                                                 alt="img-placeholder" />
                                         </a>
                                     </div>
                                     <div class="card-body">
                                         <div class="item-wrapper">

                                             <div>
                                                 <h6 class="item-price">$339.99</h6>
                                             </div>
                                         </div>
                                         <h6 class="item-name">
                                             <a class="text-body" href="app-ecommerce-details.html">Nama Dosen</a>
                                             <span class="card-text item-company">Universitas <a
                                                     href="javascript:void(0)" class="company-name"></a></span>
                                         </h6>
                                         <p class="card-text item-description">
                                             Keterangan

                                         </p>
                                     </div>
                                     <div class="item-options text-center">
                                         <div class="item-wrapper">
                                             <div class="item-cost">
                                                 <h4 class="item-price">Rp.30.00/hari</h4>
                                             </div>
                                         </div>

                                         <a href="{{ route('payment') }}" class="btn btn-primary btn-cart">
                                             <i data-feather="shopping-cart"></i>
                                             <span class="add-to-cart">Chat sekarang</span>
                                         </a>

                                     </div>
                                 </div>
                                 <div class="card ecommerce-card">
                                     <div class="item-img text-center">
                                         <a href="app-ecommerce-details.html">
                                             <img class="img-fluid card-img-top"
                                                 src="../../../app-assets/images/portrait/small/avatar-s-11.jpg"
                                                 alt="img-placeholder" />
                                         </a>
                                     </div>
                                     <div class="card-body">
                                         <div class="item-wrapper">

                                             <div>
                                                 <h6 class="item-price">$339.99</h6>
                                             </div>
                                         </div>
                                         <h6 class="item-name">
                                             <a class="text-body" href="app-ecommerce-details.html">Nama Dosen</a>
                                             <span class="card-text item-company">Universitas <a
                                                     href="javascript:void(0)" class="company-name"></a></span>
                                         </h6>
                                         <p class="card-text item-description">
                                             Keterangan

                                         </p>
                                     </div>
                                     <div class="item-options text-center">
                                         <div class="item-wrapper">
                                             <div class="item-cost">
                                                 <h4 class="item-price">RP.30.000/3hari</h4>
                                             </div>
                                         </div>

                                         <a href="{{ route('payment') }}" class="btn btn-primary btn-cart">
                                             <i data-feather="shopping-cart"></i>
                                             <span class="add-to-cart">Chat sekarang</span>
                                         </a>
                                     </div>
                                 </div>
                                 <div class="card ecommerce-card">
                                     <div class="item-img text-center">
                                         <a href="app-ecommerce-details.html">
                                             <img class="img-fluid card-img-top"
                                                 src="../../../app-assets/images/portrait/small/avatar-s-11.jpg"
                                                 alt="img-placeholder" />
                                         </a>
                                     </div>
                                     <div class="card-body">
                                         <div class="item-wrapper">

                                             <div>
                                                 <h6 class="item-price">$339.99</h6>
                                             </div>
                                         </div>
                                         <h6 class="item-name">
                                             <a class="text-body" href="app-ecommerce-details.html">Nama Dosen</a>
                                             <span class="card-text item-company">Universitas <a
                                                     href="javascript:void(0)" class="company-name"></a></span>
                                         </h6>
                                         <p class="card-text item-description">
                                             Keterangan

                                         </p>
                                     </div>
                                     <div class="item-options text-center">
                                         <div class="item-wrapper">
                                             <div class="item-cost">
                                                 <h4 class="item-price">Rp.30.000/3hari</h4>
                                             </div>
                                         </div>

                                         <a href="{{ route('payment') }}" class="btn btn-primary btn-cart">
                                             <i data-feather="shopping-cart"></i>
                                             <span class="add-to-cart">Chat sekarang</span>
                                         </a>
                                     </div>
                                 </div>
                                 <div class="card ecommerce-card">
                                     <div class="item-img text-center">
                                         <a href="app-ecommerce-details.html">
                                             <img class="img-fluid card-img-top"
                                                 src="../../../app-assets/images/portrait/small/avatar-s-11.jpg"
                                                 alt="img-placeholder" />
                                         </a>
                                     </div>
                                     <div class="card-body">
                                         <div class="item-wrapper">

                                             <div>
                                                 <h6 class="item-price">$339.99</h6>
                                             </div>
                                         </div>
                                         <h6 class="item-name">
                                             <a class="text-body" href="app-ecommerce-details.html">Nama Dosen</a>
                                             <span class="card-text item-company">Universitas <a
                                                     href="javascript:void(0)" class="company-name"></a></span>
                                         </h6>
                                         <p class="card-text item-description">
                                             Keterangan

                                         </p>
                                     </div>
                                     <div class="item-options text-center">
                                         <div class="item-wrapper">
                                             <div class="item-cost">
                                                 <h4 class="item-price">Rp.30.000/3hari</h4>
                                             </div>
                                         </div>

                                         <a href="{{ route('payment') }}" class="btn btn-primary btn-cart">
                                             <i data-feather="shopping-cart"></i>
                                             <span class="add-to-cart">Chat sekarang</span>
                                         </a>
                                     </div>
                                 </div>
                                 <div class="card ecommerce-card">
                                     <div class="item-img text-center">
                                         <a href="app-ecommerce-details.html">
                                             <img class="img-fluid card-img-top"
                                                 src="../../../app-assets/images/portrait/small/avatar-s-11.jpg"
                                                 alt="img-placeholder" />
                                         </a>
                                     </div>
                                     <div class="card-body">
                                         <div class="item-wrapper">

                                             <div>
                                                 <h6 class="item-price">$339.99</h6>
                                             </div>
                                         </div>
                                         <h6 class="item-name">
                                             <a class="text-body" href="app-ecommerce-details.html">Nama Dosen</a>
                                             <span class="card-text item-company">Universitas <a
                                                     href="javascript:void(0)" class="company-name"></a></span>
                                         </h6>
                                         <p class="card-text item-description">
                                             Keterangan

                                         </p>
                                     </div>
                                     <div class="item-options text-center">
                                         <div class="item-wrapper">
                                             <div class="item-cost">
                                                 <h4 class="item-price">Rp.30.000/3hari</h4>
                                             </div>
                                         </div>

                                         <a href="{{ route('payment') }}" class="btn btn-primary btn-cart">
                                             <i data-feather="shopping-cart"></i>
                                             <span class="add-to-cart">Chat sekarang</span>
                                         </a>
                                     </div>
                                 </div>
                                 <div class="card ecommerce-card">
                                     <div class="item-img text-center">
                                         <a href="app-ecommerce-details.html">
                                             <img class="img-fluid card-img-top"
                                                 src="../../../app-assets/images/portrait/small/avatar-s-11.jpg"
                                                 alt="img-placeholder" />
                                         </a>
                                     </div>
                                     <div class="card-body">
                                         <div class="item-wrapper">

                                             <div>
                                                 <h6 class="item-price">$339.99</h6>
                                             </div>
                                         </div>
                                         <h6 class="item-name">
                                             <a class="text-body" href="app-ecommerce-details.html">Nama Dosen</a>
                                             <span class="card-text item-company">Universitas <a
                                                     href="javascript:void(0)" class="company-name"></a></span>
                                         </h6>
                                         <p class="card-text item-description">
                                             Keterangan

                                         </p>
                                     </div>
                                     <div class="item-options text-center">
                                         <div class="item-wrapper">
                                             <div class="item-cost">
                                                 <h4 class="item-price">Rp.30.000/3hari</h4>
                                             </div>
                                         </div>

                                         <a href="{{ route('payment') }}" class="btn btn-primary btn-cart">
                                             <i data-feather="shopping-cart"></i>
                                             <span class="add-to-cart">Chat sekarang</span>
                                         </a>
                                     </div>
                                 </div>
                                 <div class="card ecommerce-card">
                                     <div class="item-img text-center">
                                         <a href="app-ecommerce-details.html">
                                             <img class="img-fluid card-img-top"
                                                 src="../../../app-assets/images/portrait/small/avatar-s-11.jpg"
                                                 alt="img-placeholder" />
                                         </a>
                                     </div>
                                     <div class="card-body">
                                         <div class="item-wrapper">

                                             <div>
                                                 <h6 class="item-price">$339.99</h6>
                                             </div>
                                         </div>
                                         <h6 class="item-name">
                                             <a class="text-body" href="app-ecommerce-details.html">Nama Dosen</a>
                                             <span class="card-text item-company">Universitas <a
                                                     href="javascript:void(0)" class="company-name"></a></span>
                                         </h6>
                                         <p class="card-text item-description">
                                             Keterangan

                                         </p>
                                     </div>
                                     <div class="item-options text-center">
                                         <div class="item-wrapper">
                                             <div class="item-cost">
                                                 <h4 class="item-price">Rp.30.000/3hari</h4>
                                             </div>
                                         </div>

                                         <a href="{{ route('payment') }}" class="btn btn-primary btn-cart">
                                             <i data-feather="shopping-cart"></i>
                                             <span class="add-to-cart">Chat sekarang</span>
                                         </a>
                                     </div>
                                 </div>
                                 <div class="card ecommerce-card">
                                     <div class="item-img text-center">
                                         <a href="app-ecommerce-details.html">
                                             <img class="img-fluid card-img-top"
                                                 src="../../../app-assets/images/portrait/small/avatar-s-11.jpg"
                                                 alt="img-placeholder" />
                                         </a>
                                     </div>
                                     <div class="card-body">
                                         <div class="item-wrapper">

                                             <div>
                                                 <h6 class="item-price">$339.99</h6>
                                             </div>
                                         </div>
                                         <h6 class="item-name">
                                             <a class="text-body" href="app-ecommerce-details.html">Nama Dosen</a>
                                             <span class="card-text item-company">Universitas <a
                                                     href="javascript:void(0)" class="company-name"></a></span>
                                         </h6>
                                         <p class="card-text item-description">
                                             Keterangan

                                         </p>
                                     </div>
                                     <div class="item-options text-center">
                                         <div class="item-wrapper">
                                             <div class="item-cost">
                                                 <h4 class="item-price">Rp.30.000/3hari</h4>
                                             </div>
                                         </div>

                                         <a href="{{ route('payment') }}" class="btn btn-primary btn-cart">
                                             <i data-feather="shopping-cart"></i>
                                             <span class="add-to-cart">Chat sekarang</span>
                                         </a>
                                     </div>
                                 </div>
                                 <div class="card ecommerce-card">
                                     <div class="item-img text-center">
                                         <a href="app-ecommerce-details.html">
                                             <img class="img-fluid card-img-top"
                                                 src="../../../app-assets/images/portrait/small/avatar-s-11.jpg"
                                                 alt="img-placeholder" />
                                         </a>
                                     </div>
                                     <div class="card-body">
                                         <div class="item-wrapper">

                                             <div>
                                                 <h6 class="item-price">$339.99</h6>
                                             </div>
                                         </div>
                                         <h6 class="item-name">
                                             <a class="text-body" href="app-ecommerce-details.html">Nama Dosen</a>
                                             <span class="card-text item-company">Universitas <a
                                                     href="javascript:void(0)" class="company-name"></a></span>
                                         </h6>
                                         <p class="card-text item-description">
                                             Keterangan

                                         </p>
                                     </div>
                                     <div class="item-options text-center">
                                         <div class="item-wrapper">
                                             <div class="item-cost">
                                                 <h4 class="item-price">Rp.30.000/3hari</h4>
                                             </div>
                                         </div>

                                         <a href="{{ route('payment') }}" class="btn btn-primary btn-cart">
                                             <i data-feather="shopping-cart"></i>
                                             <span class="add-to-cart">Chat sekarang</span>
                                         </a>
                                     </div>
                                 </div>
                             </section>
                             <!-- E-commerce Products Ends -->

                             <!-- E-commerce Pagination Starts -->
                             <section id="ecommerce-pagination">
                                 <div class="row">
                                     <div class="col-12">
                                         <nav aria-label="Page navigation example">
                                             <ul class="pagination justify-content-center mt-2">
                                                 <li class="page-item prev-item"><a class="page-link"
                                                         href="javascript:void(0);"></a></li>
                                                 <li class="page-item active"><a class="page-link"
                                                         href="javascript:void(0);">1</a>
                                                 </li>
                                                 <!-- Add more page items here -->
                                                 <li class="page-item next-item"><a class="page-link"
                                                         href="javascript:void(0);"></a></li>
                                             </ul>
                                         </nav>
                                     </div>
                                 </div>
                             </section>


                         </div>


                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>





 <!-- Akhir frame -->
 @endsection



 <!-- E-commerce Search Bar Starts -->

 <!-- E-commerce Search Bar Ends -->

 <!-- E-commerce Products Starts -->
 <!-- Your e-commerce products go here -->
 <!-- E-commerce Products Ends -->

 <!-- E-commerce Pagination Starts -->

 <!-- E-commerce Pagination Ends -->