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
                     <i class="fab fa-product-hunt"></i><span>&nbsp&nbsp Attandance </span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li><a href="{{url('take-attendence')}}"><i class="far fa-dot-circle"></i>Take Attandance</a></li>

                 </ul>
             </li>
             
             
             
                  <li class="treeview">
                 <a href="#">
                     <i class="fab fa-product-hunt"></i><span>&nbsp&nbsp My Teams </span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li><a href="{{url('my-team')}}"><i class="far fa-dot-circle"></i>My Teams</a></li>
                   

                 </ul>
             </li>
                  <li class="treeview">
                 <a href="#">
                     <i class="fab fa-product-hunt"></i><span>&nbsp&nbsp Targets </span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li><a href="{{url('my-target')}}"><i class="far fa-dot-circle"></i>My Target</a></li>
                     <li><a href="{{url('team-target')}}"><i class="far fa-dot-circle"></i>Team Target</a></li>

                 </ul>
             </li>
         </ul>
     </section>
 </aside>