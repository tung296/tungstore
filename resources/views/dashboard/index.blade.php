@extends('layouts.index')
@section('content')
<div class="row content-body">
    <div class="col-lg-12">
       <div class="iq-card iq-card-block iq-card-stretch iq-card-height iq-bg-danger">
          <div class="iq-card-body box iq-box-relative">
             <div class="box-image float-right">
                <img class="rounded img-fluid" src="assets/images/page-img/37.png" alt="profile">
             </div>
             <h4 class="d-block mb-3 text-black">Welcome back {{ Auth::guard('web')->user()->name }}</h4>
             <p class="d-inline-block welcome-text text-black">Pay attention to the orders that need to be fulfilled..</p>
          </div>
       </div>
    </div>
    <!-- <div class="col-lg-4">
       <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
          <div class="iq-card-body">
             <ul class="suggestions-lists m-0 p-0">
                <li class="d-flex mb-4 align-items-center justify-content-between">
                   <div class="col-sm-9 p-0">
                      <div class="d-flex align-items-center">
                         <div class="avatar-55 text-center rounded iq-bg-danger">
                            <span>B5</span>
                         </div>
                         <div class="media-support-info ml-3">
                            <h5>Loads</h5>
                            <p class="mb-0">Online Participant</p>
                         </div>
                      </div>
                   </div>
                   <div class="col-sm-3 p-0">
                      <div class="iq-progress-bar-linear d-inline-block mt-1 w-100">
                         <div class="iq-progress-bar">
                            <span class="bg-danger" data-percent="50"></span>
                         </div>
                      </div>
                   </div>
                </li>
                <li class="d-flex align-items-center justify-content-between">
                   <div class="col-sm-9 p-0">
                      <div class="d-flex align-items-center">
                         <div class="avatar-55 text-center rounded iq-bg-primary">
                            <span>G2</span>
                         </div>
                         <div class="media-support-info ml-3">
                            <h5>Requests</h5>
                            <p class="mb-0">Offline Participant</p>
                         </div>
                      </div>
                   </div>
                   <div class="col-sm-3 p-0">
                      <div class="iq-progress-bar-linear d-inline-block mt-1 w-100">
                         <div class="iq-progress-bar">
                            <span class="bg-primary" data-percent="80"></span>
                         </div>
                      </div>
                   </div>
                </li>
             </ul>
          </div>
       </div>
    </div> -->
    <div class="col-lg-12 row m-0 p-0">
       <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
             <div class="iq-card-body">
                <div class="icon iq-icon-box iq-bg-primary rounded" data-wow-delay="0.2s">
                   <i class="ri-cpu-line"></i>
                </div>
                <div class="mt-4">
                   <h5 class="text-black text-uppercase">Total order</h5>
                   <h3 class="d-flex text-primary">{{ count($orders) }} </h3>
                </div>
                <p class="mb-0 mt-1">100%</p>
                <div class="mt-3">
                   <div class="iq-progress-bar-linear d-inline-block mt-1 w-100">
                      <div class="iq-progress-bar">
                         <span class="bg-primary" data-percent="100"></span>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
             <div class="iq-card-body">
                <div class="icon iq-icon-box iq-bg-danger rounded" data-wow-delay="0.2s">
                   <i class="ri-window-line"></i>
                </div>
                <div class="mt-4">
                   <h5 class="text-black text-uppercase">Order successful</h5>
                   <h3 class="d-flex text-danger"> {{ count($orders3) }}</h3>
                </div>
                <p class="mb-0 mt-1">{{ round((count($orders3)/count($orders))*100,2) }} %</p>
                <div class="mt-3">
                   <div class="iq-progress-bar-linear d-inline-block mt-1 w-100">
                      <div class="iq-progress-bar">
                         <span class="bg-danger" data-percent="{{ round((count($orders3)/count($orders))*100,2) }}"></span>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
             <div class="iq-card-body">
                <div class="icon iq-icon-box iq-bg-primary rounded" data-wow-delay="0.2s">
                   <i class="ri-u-disk-line"></i>
                </div>
                <div class="mt-4">
                   <h5 class="text-black text-uppercase">Unapproved order</h5>
                   <h3 class="d-flex text-primary"> {{ count($orders1) }}</h3>
                </div>
                <p class="mb-0 mt-1">{{ round((count($orders1)/count($orders))*100,2) }} %</p>
                <div class="mt-3">
                   <div class="iq-progress-bar-linear d-inline-block mt-1 w-100">
                      <div class="iq-progress-bar">
                         <span class="bg-primary" data-percent="{{ round((count($orders3)/count($orders))*100,2) }}"></span>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
             <div class="iq-card-body">
                <div class="icon iq-icon-box iq-bg-danger rounded" data-wow-delay="0.2s">
                   <i class="ri-global-line"></i>
                </div>
                <div class="mt-4">
                   <h5 class="text-black text-uppercase">Profit</h5>
                   <h3 class="d-flex text-danger">{{ number_format($interest) }} ₫</h3>
                </div>
                <p class="mb-0 mt-1">{{ round((count($orders3)/count($orders))*100,2) }} %</p>
                <div class="mt-3">
                   <div class="iq-progress-bar-linear d-inline-block mt-1 w-100">
                      <div class="iq-progress-bar">
                         <span class="bg-danger" data-percent="{{ round((count($orders3)/count($orders))*100,2) }}"></span>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- <div class="col-lg-4">
       <div class="iq-card bg-danger iq-card-block iq-card-stretch iq-card-height-half">
          <div class="iq-card-body box iq-box-relative">
             <div class="d-flex flex-wrap justify-content-between align-items-center">
                <div class="col-7 p-0">
                   <div class="float-left progress-round income-progress mr-3" data-value="80">
                      <span class="progress-left">
                      <span class="progress-bar border-white" style="transform: rotate(108deg);"></span>
                      </span>
                      <span class="progress-right">
                      <span class="progress-bar border-white" style="transform: rotate(180deg);"></span>
                      </span>
                      <div class="progress-value w-100 h-100 rounded d-flex align-items-center justify-content-center text-center">
                         <div class="h4 mb-0">75</div>
                      </div>
                   </div>
                   <h5 class="d-block mt-2 text-white font-weight-500">Storage<br> Usage</h5>
                </div>
                <div class="col-5 pr-0 right-border-block position-relative">
                   <div class="avatar-30 text-center rounded-circle iq-bg-danger" data-wow-delay="0.2s">
                      <span class="font-size-14 align-item-center"><i class="ri-account-box-line"></i></span>
                   </div>
                   <h5 class="text-white mt-2">594875625</h5>
                   <span class="text-white">Online Users</span>
                </div>
             </div>
          </div>
       </div>
       <div class="iq-card iq-card-block iq-card-stretch iq-card-height-half iq-background-image">
          <div class="iq-card-body box iq-box-relative rounded">
             <div class="d-flex justify-content-between align-items-left">
                <div class="d-flex justify-content-between align-items-center">
                   <div class="float-left progress-round income-progress" data-value="80">
                      <span class="progress-left">
                      <span class="progress-bar border-primary" style="transform: rotate(108deg);"></span>
                      </span>
                      <span class="progress-right">
                      <span class="progress-bar border-success" style="transform: rotate(180deg);"></span>
                      </span>
                   </div>
                   <div class="pl-3">
                      <ul class="float-right d-inline-block p-0 m-0 list-inline">
                         <li class="line-height-3">
                            <span class="text-danger total-progress position-relative pl-2">
                            <span class="bg-danger rounded"></span>Total Processes: 61<i class="ri-arrow-up-line"></i>
                            </span>
                         </li>
                         <li class="line-height-3">
                            <span class="text-primary total-progress position-relative pl-2">
                            <span class="bg-primary rounded"></span>Total Threands: 993<i class="ri-arrow-down-line"></i>
                            </span>
                         </li>
                         <li class="line-height-3">
                            <span class="text-success total-progress position-relative pl-2">
                            <span class="bg-success rounded"></span>Total Handles: 26957<i class="ri-arrow-up-line"></i>
                            </span>
                         </li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div> -->
    <!-- <div class="col-lg-12">
       <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
          <div class="iq-card-header d-flex justify-content-between">
             <div class="iq-header-title">
                <h4 class="card-title">Server Traffic Source</h4>
             </div>
             <div class="iq-card-header-toolbar d-flex align-items-center">
                <div class="dropdown">
                   <span class="dropdown-toggle dropdown-bg iq-bg-danger" id="dropdownMenuButton1" data-toggle="dropdown">
                   This Year<i class="ri-arrow-down-s-line ml-1 text-danger"></i>
                   </span>
                   <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownMenuButton1">
                      <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                      <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                      <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                      <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                      <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                   </div>
                </div>
             </div>
          </div>
          <div class="iq-card-body">
             <div id="report-chart-02" style="min-height: 150px;"></div>
          </div>
       </div>
    </div> -->
    <!-- <div class="col-lg-4">
       <div class="iq-card iq-card-block iq-card-stretch iq-card-height bg-primary rounded background-image-overlap">
          <div class="iq-card-body">
             <div class="d-flex align-items-center mb-3">
                <div><img class="rounded" src="assets/images/page-img/38.png" alt=""></div>
                <h5 class="pl-3 text-white">Unauthorized Threats has been Terminated</h5>
             </div>
             <p class="mb-2"><span class="text-white">5</span> Unnecessary Data</p>
             <p class="mb-2"><span class="text-white">12</span> Undentified Source Data</p>
             <p class="mb-3"><span class="text-white">8</span> Unused Images</p>
             <button type="submit" class="btn w-100 btn-white mt-4 text-primary viwe-more">View More</button>
          </div>
       </div>
    </div> -->
    <!-- <div class="col-lg-8">
       <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
          <div class="iq-card-header d-flex justify-content-between">
             <div class="iq-header-title">
                <h4 class="card-title">Bandwidth Public</h4>
             </div>
             <div class="mt-1">
                <div class="d-flex align-items-center justify-content-between">
                   <a href="javascript:void();" class="d-flex align-items-center mr-4">
                      <span class="bg-danger p-1 rounded mr-2"></span>
                      <p class="text-danger mb-0">Lowest Speed </p>
                   </a>
                   <a href="javascript:void();" class="d-flex align-items-center">
                      <span class="bg-primary p-1 rounded mr-2"></span>
                      <p class="text-primary mb-0">Highest Speed</p>
                   </a>
                </div>
             </div>
          </div>
          <div class="iq-card-body">
             <div id="iq-income-chart"></div>
          </div>
       </div>
    </div> -->
    <!-- <div class="col-lg-4">
       <div class="iq-card">
          <div class="iq-card-body box iq-box-relative rounded">
             <div class="d-flex align-items-center">
                <div class="float-left progress-round income-progress disk-usage" data-value="80">
                   <span class="progress-left">
                   <span class="progress-bar border-success" style="transform: rotate(108deg);"></span>
                   </span>
                   <span class="progress-right">
                   <span class="progress-bar border-primary" style="transform: rotate(180deg);"></span>
                   </span>
                </div>
                <div class="pl-3">
                   <h5 class="d-block mt-0 mb-1 text-black">Disk Usage</h5>
                   <ul class="float-right d-inline-block p-0 m-0 list-inline">
                      <li class="line-height-3">
                         <span class="text-danger total-progress position-relative pl-2 font-size-12 font-weight-500">
                         <span class="bg-danger rounded"></span>Max Usage</span>
                      </li>
                      <li class="line-height-3">
                         <span class="text-primary total-progress position-relative pl-2 font-size-12 font-weight-500">
                         <span class="bg-primary rounded"></span>Average Usage</span>
                      </li>
                      <li class="line-height-3">
                         <span class="text-success total-progress position-relative pl-2 font-size-12 font-weight-500">
                         <span class="bg-success rounded"></span>Minimum Usage</span>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
       <div class="iq-card">
          <div class="iq-card-header d-flex justify-content-between">
             <div class="iq-header-title">
                <h4 class="card-title">Load Average</h4>
             </div>
          </div>
          <div class="iq-card-body p-0">
             <div id="chart-9"></div>
          </div>
       </div>
    </div> -->
    <!-- <div class="col-lg-6 row m-0 p-0">
       <div class="col-sm-6">
          <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
             <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title">CPU Daily Usage</h4>
                </div>
             </div>
             <div class="iq-card-body pt-0">
                <div id="home-chart-11"></div>
                <div class="text-center">
                   <h4>50.03%</h4>
                   <p class="mb-0">CPU usage is<span class="text-primary pl-2">good</span></p>
                </div>
             </div>
          </div>
       </div>
       <div class="col-sm-6">
          <div class="iq-card bg-danger">
             <div class="iq-card-body box iq-box-relative">
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                   <div class="col-4 p-0">
                      <div class="float-left progress-round income-progress mr-2" data-value="80">
                         <span class="progress-left">
                         <span class="progress-bar border-white" style="transform: rotate(108deg);"></span>
                         </span>
                         <span class="progress-right">
                         <span class="progress-bar border-white" style="transform: rotate(180deg);"></span>
                         </span>
                         <div class="progress-value w-100 h-100 rounded d-flex align-items-center justify-content-center text-center">
                            <div class="h4 mb-0">12</div>
                         </div>
                      </div>
                   </div>
                   <div class="col-8 pr-0">
                      <h5 class="d-block mt-2 mb-3 text-white">Most Recent Alarams</h5>
                   </div>
                </div>
             </div>
          </div>
          <div class="iq-card">
             <div class="iq-card-body box iq-box-relative rounded">
                <div class="d-flex align-items-center">
                   <div class="float-left progress-round heatmap-progress" data-value="80">
                      <span class="progress-left">
                      <span class="progress-bar border-primary" style="transform: rotate(108deg);"></span>
                      </span>
                      <span class="progress-right">
                      <span class="progress-bar border-success" style="transform: rotate(180deg);"></span>
                      </span>
                   </div>
                   <div class="pl-3">
                      <h5 class="d-block mt-0 mb-1 text-black">Heat Map</h5>
                      <ul class="d-inline-block p-0 m-0 list-inline">
                         <li class="line-height-3">
                            <span class="text-danger total-progress position-relative pl-2 font-size-12 font-weight-500">
                            <span class="bg-danger rounded"></span>Clear</span>
                         </li>
                         <li class="line-height-3">
                            <span class="text-primary total-progress position-relative pl-2 font-size-12 font-weight-500">
                            <span class="bg-primary rounded"></span>Critical</span>
                         </li>
                         <li class="line-height-3">
                            <span class="text-success total-progress position-relative pl-2 font-size-12 font-weight-500">
                            <span class="bg-success rounded"></span>Trouble</span>
                         </li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div> -->
    <div class="col-lg-12">
       <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
          <div class="iq-card-header d-flex justify-content-between">
             <div class="iq-header-title">
                <h4 class="card-title">Ram Usage</h4>
             </div>
          </div>
          <div class="iq-card-body">
             <div id="report-chart-04"></div>
          </div>
       </div>
    </div>
    <div class="col-lg-12">
       <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
          <div class="iq-card-header d-flex justify-content-between">
             <div class="iq-header-title">
                <h4 class="card-title">Active Instances</h4>
             </div>
             <div class="iq-card-header-toolbar d-flex align-items-center">
                <div class="dropdown">
                   <span class="dropdown-toggle text-primary" id="dropdownMenuButton2" data-toggle="dropdown">
                   <i class="ri-more-2-fill"></i>
                   </span>
                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                      <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                      <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                      <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                      <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                      <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                   </div>
                </div>
             </div>
          </div>
          <div class="iq-card-body">
             <div class="table-responsive">
                <table class="table mb-0 table-borderless tbl-server-info">
                   <thead>
                      <tr>
                         <th scope="col">Servers</th>
                         <th scope="col"></th>
                         <th scope="col">IP Address</th>
                         <th scope="col">Created</th>
                         <th scope="col">Tag</th>
                         <th scope="col">Provider</th>
                         <th scope="col"></th>
                      </tr>
                   </thead>
                   <tbody>
                      <!-- <tr>
                         <td>
                            <div class="avatar-40 text-center rounded-circle iq-bg-danger position-relative">
                               <span class="font-size-20 align-item-center"><i class="fa fa-user" aria-hidden="true"></i><span class="bg-success dots"></span></span>
                            </div>
                         </td>
                         <td>
                            <h6>Noveruche Admin</h6>
                            <span class="text-body font-weight-400">8GB/80GB/SF02-Ubuntu Iconic- jfkakf-daksl...</span>
                         </td>
                         <td>192.168.130.26</td>
                         <td>2 Months ago</td>
                         <td>
                            <div class="text-danger">Web Server</div>
                         </td>
                         <td>Indioserver</td>
                         <td>
                            <span class="text-black font-size-24" id="dropdownMenuButton3">
                            <i class="ri-more-fill"></i>
                            </span>
                         </td>
                      </tr>
                      <tr>
                         <td>
                            <div class="avatar-40 text-center rounded-circle iq-bg-danger position-relative">
                               <span class="font-size-20 align-item-center"><i class="fa fa-user" aria-hidden="true"></i><span class="bg-success dots"></span></span>
                            </div>
                         </td>
                         <td>
                            <h6>Developing Hier</h6>
                            <span class="text-body font-weight-400">8GB/80GB/SF02-Ubuntu Iconic- jfkakf-daksl...</span>
                         </td>
                         <td>192.168.130.26</td>
                         <td>4 Months ago</td>
                         <td>
                            <div class="text-primary">Desky</div>
                         </td>
                         <td>Jeniorde</td>
                         <td>
                            <span class="text-black font-size-24" id="dropdownMenuButton4">
                            <i class="ri-more-fill"></i>
                            </span>
                         </td>
                      </tr>
                      <tr>
                         <td>
                            <div class="avatar-40 text-center rounded-circle iq-bg-danger position-relative">
                               <span class="font-size-20 align-item-center"><i class="fa fa-user" aria-hidden="true"></i><span class="bg-success dots"></span></span>
                            </div>
                         </td>
                         <td>
                            <h6>Nalurel Dilam</h6>
                            <span class="text-body font-weight-400">8GB/80GB/SF02-Ubuntu Iconic- jfkakf-daksl...</span>
                         </td>
                         <td>192.168.130.26</td>
                         <td>5 Months ago</td>
                         <td>
                            <div class="text-success">Software</div>
                         </td>
                         <td>Walikarsi</td>
                         <td>
                            <span class="text-black font-size-24" id="dropdownMenuButton5">
                            <i class="ri-more-fill"></i>
                            </span>
                         </td>
                      </tr>
                      <tr>
                         <td>
                            <div class="avatar-40 text-center rounded-circle iq-bg-danger position-relative">
                               <span class="font-size-20 align-item-center"><i class="fa fa-user" aria-hidden="true"></i><span class="bg-success dots"></span></span>
                            </div>
                         </td>
                         <td>
                            <h6>Nariokali Borji</h6>
                            <span class="text-body font-weight-400">8GB/80GB/SF02-Ubuntu Iconic- jfkakf-daksl...</span>
                         </td>
                         <td>192.168.130.26</td>
                         <td>6 Months ago</td>
                         <td>
                            <div class="text-primary">Innohouse</div>
                         </td>
                         <td>Leoharshan</td>
                         <td>
                            <span class="text-black font-size-24" id="dropdownMenuButton6">
                            <i class="ri-more-fill"></i>
                            </span>
                         </td>
                      </tr> -->
                      @foreach($orders as $item)
                      <tr>
                         <td>
                            <div class="avatar-40 text-center rounded-circle iq-bg-danger position-relative">
                               <span class="font-size-20 align-item-center"><i class="fa fa-user" aria-hidden="true"></i><span class="bg-success dots"></span></span>
                            </div>
                         </td>
                         <td>
                            <h6>{{ $item->name }}</h6>
                            <!-- <span class="text-body font-weight-400"></span> -->
                         </td>
                         <td>{{ $item->phone }}</td>
                         <td>
                            <div class="text-danger">{{ $item->total_money }}</div>
                           </td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->payment }}</td>
                           <!-- <td>
                            <span class="text-black font-size-24" id="dropdownMenuButton7">
                            <i class="ri-more-fill"></i>
                            </span>
                         </td> -->
                      </tr>
                      @endforeach
                   </tbody>
                </table>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection