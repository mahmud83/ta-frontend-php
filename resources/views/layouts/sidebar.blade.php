<div class="main-sidebar sidebar-style-2">
   <aside id="sidebar-wrapper">
     <div class="sidebar-brand">
       <a href="{{ action("HomeController@index") }}">DNS Anlyzer</a>
     </div>
     <div class="sidebar-brand sidebar-brand-sm">
       <a href="{{ action("HomeController@index") }}">DA</a>
     </div>
     <ul class="sidebar-menu">       
         <!-- <li class="menu-header">Dashboard</li> -->
         <!-- <a href="{{ action("HomeController@index") }}" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>     -->

        <li class="menu-header">Realtime Traffic</li>
         <li class="nav-item dropdown active">
           <a href="#" class="nav-link has-dropdown"><i class="fas fa-traffic-light"></i><span>Realtime Traffic</span></a>
           <ul class="dropdown-menu">
             <li><a class="nav-link" href="{{ action("TrafficController@all") }}">All Connections</a></li>
             <li class="active"><a class="nav-link" href="{{ action("TrafficController@dns") }}">DNS Connections</a></li>
           </ul>
         </li>

        <li class="menu-header">Report</li>
          <li class="nav-item dropdown active">          
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-history"></i><span>Report</span></a>
            <ul class="dropdown-menu">
              <!-- <li><a class="nav-link" href="{{ action("HomeController@index") }}">Connection Traffic</a></li> -->
              <li><a class="nav-link" href="{{ action("ReportController@dns") }}">DNS Query</a></li>
            </ul>
          </li>       
      </ul>
  
       <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
         <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
           <i class="fas fa-rocket"></i> Download
         </a>
       </div>
   </aside>
 </div>