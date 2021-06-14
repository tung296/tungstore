<div class="iq-sidebar">
   <div class="iq-sidebar-logo d-flex justify-content-between">
      <a href="index.html" class="header-logo">
         <img src="assets/images/logo.png" class="img-fluid rounded-normal" alt="">
         <!-- <div class="logo-title">
            <span class="text-danger text-uppercase">Server<span class="text-primary ml-1">360</span></span>
         </div> -->
      </a>
      <div class="iq-menu-bt-sidebar">
         <div class="iq-menu-bt align-self-center">
            <div class="wrapper-menu">
               <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
               <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
            </div>
         </div>
      </div>
   </div>
   <div id="sidebar-scrollbar">
      <nav class="iq-sidebar-menu">
         <ul id="iq-sidebar-toggle" class="iq-menu">
            <li class="active active-menu">
               <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
               <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                  <li class="active"><a href="index.html"><i class="las la-house-damage"></i>Server Monitoring</a></li>
                  <li><a href="dashboard-1.html"><i class="las la-landmark"></i>Website Monitoring</a></li>
                  <li><a href="dashboard-2.html"><i class="las la-warehouse"></i>API Monitoring</a></li>
               </ul>
            </li>
            <!-- <li>
               <a href="calendar.html" class="iq-waves-effect"><i class="las la-calendar iq-arrow-left"></i><span>Calendar</span></a>
               </li> -->
            <li>
               @can('user-list')
               <a href="{{ route('users.index') }}" class="iq-waves-effect"  aria-expanded="false"><span class="ripple rippleEffect"></span><i class="lab la-elementor iq-arrow-left"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
               @endcan
            </li>
            <li>
               @can('permission-list')
               <a href="{{ route('permissions.index') }}" class="iq-waves-effect"  aria-expanded="false"><span class="ripple rippleEffect"></span><i class="lab la-elementor iq-arrow-left"></i><span>Permission</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
               @endcan
            </li>
            <li>
               <!-- <a href="#roleinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="lab la-elementor iq-arrow-left"></i><span>Role</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a> -->
               @can('role-list')
               <a href="{{ route('roles.index') }}" class="iq-waves-effect" ><span class="ripple rippleEffect"></span><i class="lab la-elementor iq-arrow-left"></i><span>Role</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
               @endcan 
            </li>
            <li>
               @can('category-list')
               <a href="{{ route('categories.index') }}" class="iq-waves-effect" ><span class="ripple rippleEffect"></span><i class="lab la-elementor iq-arrow-left"></i><span>Category</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
               @endcan
            </li>
            <li>
               @can('banner-list')
               <a href="{{ route('banners.index') }}" class="iq-waves-effect" ><span class="ripple rippleEffect"></span><i class="lab la-elementor iq-arrow-left"></i><span>Banner</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
               @endcan
            </li>
            <li>
               @can('product-list')
               <a href="{{ route('products.index') }}" class="iq-waves-effect" ><span class="ripple rippleEffect"></span><i class="lab la-elementor iq-arrow-left"></i><span>Product</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
               @endcan
            </li>
            <li>
               @can('order-list')
               <a href="{{ route('orders.index') }}" class="iq-waves-effect" ><span class="ripple rippleEffect"></span><i class="lab la-elementor iq-arrow-left"></i><span>Order</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
               @endcan
            </li>
            <li>
               @can('file-list')
               <a href="{{ route('media.index') }}" class="iq-waves-effect" ><span class="ripple rippleEffect"></span><i class="lab la-elementor iq-arrow-left"></i><span>Media</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
               @endcan
            </li>
         </ul>
      </nav>
   </div>
</div>