<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
       <nav class="navbar navbar-expand-lg navbar-light p-0">
          <div class="iq-menu-bt d-flex align-items-center">
             <div class="wrapper-menu">
                <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
             </div>
             <div class="iq-navbar-logo d-flex justify-content-between">
                <a href="/home" class="header-logo">
                   <img src="assets/images/logo.png" class="img-fluid rounded-normal" alt="">
                   <div class="pt-2 pl-2 logo-title">
                      <span class="text-danger text-uppercase">Server<span class="text-primary ml-1">360</span></span>
                   </div>
                </a>
             </div>
          </div>
          <div class="navbar-breadcrumb">
             <h4 class="mb-0 text-dark">Dashboard</h4>
             <p class="mb-0"><span class="text-danger">Hi there,</span> Great to see you again</p>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
          <i class="ri-menu-3-line"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav ml-auto navbar-list">
                <li class="nav-item nav-icon">
                   <div class="iq-search-bar">
                      <form action="#" class="searchbox">
                         <input type="text" class="text search-input" placeholder="Type here to search...">
                         <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                      </form>
                   </div>
                </li>
                <li class="nav-item nav-icon">
                   <a href="#" class="search-toggle iq-waves-effect text-primary rounded">
                   <i class="ri-notification-line block"></i>
                   <span class="bg-danger dots"></span>
                   </a>
                   <div class="iq-sub-dropdown">
                      <div class="iq-card shadow-none m-0">
                         <div class="iq-card-body p-0">
                            <div class="bg-primary p-3">
                               <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                            </div>
                            <a href="#" class="iq-sub-card" >
                               <div class="media align-items-center">
                                  <div class="">
                                     <img class="avatar-40 rounded" src="assets/images/user/01.jpg" alt="">
                                  </div>
                                  <div class="media-body ml-3">
                                     <h6 class="mb-0 ">Emma Watson Barry</h6>
                                     <small class="float-right">Just Now</small>
                                     <p class="mb-0">95 MB</p>
                                  </div>
                               </div>
                            </a>
                            <a href="#" class="iq-sub-card" >
                               <div class="media align-items-center">
                                  <div class="">
                                     <img class="avatar-40 rounded" src="assets/images/user/02.jpg" alt="">
                                  </div>
                                  <div class="media-body ml-3">
                                     <h6 class="mb-0 ">New customer is join</h6>
                                     <small class="float-right">5 days ago</small>
                                     <p class="mb-0">Cyst Barry</p>
                                  </div>
                               </div>
                            </a>
                            <a href="#" class="iq-sub-card" >
                               <div class="media align-items-center">
                                  <div class="">
                                     <img class="avatar-40 rounded" src="assets/images/user/03.jpg" alt="">
                                  </div>
                                  <div class="media-body ml-3">
                                     <h6 class="mb-0 ">Two customer is left</h6>
                                     <small class="float-right">2 days ago</small>
                                     <p class="mb-0">Cyst Barry</p>
                                  </div>
                               </div>
                            </a>
                            <a href="#" class="iq-sub-card" >
                               <div class="media align-items-center">
                                  <div class="">
                                     <img class="avatar-40 rounded" src="assets/images/user/04.jpg" alt="">
                                  </div>
                                  <div class="media-body ml-3">
                                     <h6 class="mb-0 ">New Mail from Fenny</h6>
                                     <small class="float-right">3 days ago</small>
                                     <p class="mb-0">Cyst Barry</p>
                                  </div>
                               </div>
                            </a>
                         </div>
                      </div>
                   </div>
                </li>
             </ul>
          </div>
          <ul class="navbar-list">
             <li class="line-height">
                <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                <img src="assets/images/user/user.png" class="img-fluid rounded-circle" alt="user">
                </a>
                <div class="iq-sub-dropdown iq-user-dropdown">
                   <div class="iq-card shadow-none m-0">
                      <div class="iq-card-body p-0 ">
                         <div class="bg-primary p-3">
                            <h5 class="mb-0 text-white line-height">Hello {{ Auth::guard('web')->user()->name }}</h5>
                            <span class="text-white font-size-12">{{ Auth::guard('web')->user()->roles[0]->name }}</span>
                         </div>
                         <!-- <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                            <div class="media align-items-center">
                               <div class="rounded iq-card-icon iq-bg-primary">
                                  <i class="ri-file-user-line"></i>
                               </div>
                               <div class="media-body ml-3">
                                  <h6 class="mb-0 ">My Profile</h6>
                                  <p class="mb-0 font-size-12">View personal profile details.</p>
                               </div>
                            </div>
                         </a>
                         <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                            <div class="media align-items-center">
                               <div class="rounded iq-card-icon iq-bg-primary">
                                  <i class="ri-profile-line"></i>
                               </div>
                               <div class="media-body ml-3">
                                  <h6 class="mb-0 ">Edit Profile</h6>
                                  <p class="mb-0 font-size-12">Modify your personal details.</p>
                               </div>
                            </div>
                         </a>
                         <a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                            <div class="media align-items-center">
                               <div class="rounded iq-card-icon iq-bg-primary">
                                  <i class="ri-account-box-line"></i>
                               </div>
                               <div class="media-body ml-3">
                                  <h6 class="mb-0 ">Account settings</h6>
                                  <p class="mb-0 font-size-12">Manage your account parameters.</p>
                               </div>
                            </div>
                         </a>
                         <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                            <div class="media align-items-center">
                               <div class="rounded iq-card-icon iq-bg-primary">
                                  <i class="ri-lock-line"></i>
                               </div>
                               <div class="media-body ml-3">
                                  <h6 class="mb-0 ">Privacy Settings</h6>
                                  <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                               </div>
                            </div>
                         </a> -->
                         <div class="d-inline-block w-100 text-center p-3">
                        
                           <a href="{{ route('admin.logout') }}" class="bg-primary iq-sign-btn">Sign out<i class="ri-login-box-line ml-2"></i></a>
                         </div>
                      </div>
                   </div>
                </div>
             </li>
          </ul>
       </nav>
    </div>
 </div>