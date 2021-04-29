 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
     <!-- sidebar: style can be found in sidebar.less -->
     <section class="sidebar">

         <div class="user-panel">
             <div class="pull-left image">
                 <img src="{{asset('assets/dist/img/user1-128x128.png')}}" class="img-circle" alt="User Image">
             </div>
             <div class="pull-left info">
                 <p>
                     @if(auth()) {{auth()->user()->name}} <br> <span>{{auth()->user()->role}} @endif</span>
                 </p>
             </div>
         </div>

         <!-- sidebar menu: : style can be found in sidebar.less -->
         <ul class="sidebar-menu" data-widget="tree">
             <li class="active treeview menu-open">
                 <a href="{{url('/staff-dashboard')}}">
                     <i class="fa fa-desktop"></i><span> Dashboard</span>
                 </a>
             </li>

             <li class="treeview">
                 <a href="#">
                     <i class="fab fa-product-hunt"></i><span>&nbsp&nbsp Projects </span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li><a href="{{url('my-projects')}}"><i class="far fa-dot-circle"></i>My Projects</a></li>

                 </ul>
             </li>
             
             
             <li class="treeview">
                 <a href="#">
                     <i class="fab fa-product-hunt"></i><span>&nbsp&nbsp Feedback </span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                 <li><a href="{{url('feedback')}}"><i class="far fa-dot-circle"></i>Feedback</a></li>
                 
                      <li><a href="{{url('my-feedback')}}"><i class="far fa-dot-circle"></i>My Feedback</a></li>

                 </ul>
             </li>
             
             <li class="treeview">
                 <a href="#">
                     <i class="fab fa-product-hunt"></i><span>&nbsp&nbsp Payments </span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                 <li><a href="{{url('my-payments')}}"><i class="far fa-dot-circle"></i>My Payments</a></li>
                 
                     

                 </ul>
             </li>
             
             
             
         </ul>
     </section>
 </aside>