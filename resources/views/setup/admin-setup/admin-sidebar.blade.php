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
                     @if(auth()) {{auth()->user()->name}}  
                 </p>
                 <b>{{auth()->user()->role}} @endif</b>
             </div>
         </div>

         <!-- sidebar menu: : style can be found in sidebar.less -->
         <ul class="sidebar-menu" data-widget="tree">
             <li class="active treeview menu-open">
                 <a href="{{url('/')}}">
                     <i class="fa fa-desktop"></i><span> Dashboard</span>
                 </a>
             </li>

             <li class="treeview">
                 <a href="#">
                     <i class="fab fa-product-hunt"></i><span>&nbsp&nbsp Teams Management</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li><a href="{{url('add-team')}}"><i class="far fa-dot-circle"></i> Add Team Member</a></li>
                     <li><a href="{{url('all-team')}}"><i class="far fa-dot-circle"></i> Team List</a></li>
                 </ul>
             </li>
             
             <li class="treeview">
                 <a href="#">
                     <i class="fab fa-product-hunt"></i><span>&nbsp&nbsp Project Management</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li><a href="{{url('add-project')}}"><i class="far fa-dot-circle"></i> Add Project</a></li>
                     <li><a href="{{url('all-project')}}"><i class="far fa-dot-circle"></i> View Project</a></li>
                 </ul>
             </li>
             
             <li class="treeview">
                 <a href="#">
                     <i class="fab fa-product-hunt"></i><span>&nbsp&nbsp Service Management</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li><a href="{{url('add-service')}}"><i class="far fa-dot-circle"></i> Add Service</a></li>
                     <li><a href="{{url('all-service')}}"><i class="far fa-dot-circle"></i> View Service</a></li>
                 </ul>
             </li>
             
             
         </ul>
     </section>
 </aside>
