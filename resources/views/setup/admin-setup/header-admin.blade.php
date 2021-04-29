<header class="main-header">
   <!-- Logo -->
   <a href="{{url('/')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">Real State</span>
      <!-- logo for regular state and mobile devices -->
      <P class="logo-lg"><b>Real</b> State<small style="color:red;font-size: 55%;" title=""> </small></p>
   </a>
   <!-- Header Navbar: style can be found in header.less -->
   <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
         <ul class="nav navbar-nav">
            <li class="dropdown notifications-menu">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               <i class="fa fa-bell" style="color:#3C8DBC"></i>
               <span class="label label-warning" id="countNotifi"></span>
               </a>
               <ul class="dropdown-menu">
                
                  <li class="header">You have 1 notifications</li>
                  <li>
                     <ul class="menu">
                        @isset($res)
                        @foreach($res as $row)
                        <li>
                     <a href="{{url('all-leave')}}" class="mark-as-read" data="{{$row->id}}">
                           {{$row->topic}}
                           </a>
                        </li>
                        @endforeach
                        @endisset
                     </ul>
                  </li>
               </ul>
            </li>
            <li class="dropdown user user-menu">
               <a href="{{url('logout')}}">
               <i class="fas fa-sign-out-alt"></i> Logout
               </a>
            </li>
         </ul>
      </div>
   </nav>
</header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<script>
   $(function(){
       
    
//       setInterval(function() {
//        $.load(countNotification())
//           
//       }, 1000);
       
   
       $('.mark-as-read').on('click', function() {
   
           var id = $(this).attr('data');
   
            alert(id);
   
   
               $.ajax({
   
                   type: 'ajax',
   
                   method: 'get',
   
                   async: false,
   
                    url: '{{url("mark-notification")}}',
   
                   data: {
   
                       id: id
   
                   },
   
                   dataType: 'json',
   
                   success: function(response) {
   
                   },
   
                   error: function() {
   
//                       alert('Error deleting');
   
                   }
   
               });
   
           });
       
       
       
       function countNotification() {
   
           $.ajax({
   
               url: '{{url("countNotification")}}',
               type: 'get',
               success: function(response) {
               
                   $('#countNotifi').html(response);
               },
   
           });
       };
   
       });
       
    
 
   
</script>