<div class="main-sidebar sidebar-style-2">
   <aside id="sidebar-wrapper">
     <div class="sidebar-brand">
       <a href="{{ action("HomeController@index") }}">DNS Anlyzer</a>
     </div>
     <div class="sidebar-brand sidebar-brand-sm">
       <a href="{{ action("HomeController@index") }}">DA</a>
     </div>
     @if(!empty($_GET))
     <ul class="sidebar-menu">       
        <li class="menu-header">Report</li>       
          <li class="nav-item dropdown active">          
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-archive"></i><span>Report</span></a>
              <ul class="dropdown-menu">
                  <li class="nav-item dropdown active">          
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-history"></i><span>00:00 - 06:00</span></a>
                    <ul class="dropdown-menu">
                      <li><a class="nav-link" href="<?php echo "?startday=".$_GET['startday']."&endday=".$_GET['endday']."&jam=0001" ?>">00:00 - 01:00</a></li>
                      <li><a class="nav-link" href="<?php echo "?startday=".$_GET['startday']."&endday=".$_GET['endday']."&jam=0102" ?>">01:00 - 02:00</a></li>
                      <li><a class="nav-link" href="<?php echo "?startday=".$_GET['startday']."&endday=".$_GET['endday']."&jam=0203" ?>">02:00 - 03:00</a></li>
                      <li><a class="nav-link" href="<?php echo "?startday=".$_GET['startday']."&endday=".$_GET['endday']."&jam=0304" ?>">03:00 - 04:00</a></li>
                      <li><a class="nav-link" href="<?php echo "?startday=".$_GET['startday']."&endday=".$_GET['endday']."&jam=0405" ?>">04:00 - 05:00</a></li>
                      <li><a class="nav-link" href="<?php echo "?startday=".$_GET['startday']."&endday=".$_GET['endday']."&jam=0506" ?>">05:00 - 06:00</a></li>
                    </ul>
              </ul>                    
              <ul class="dropdown-menu">
                  <li class="nav-item dropdown active">          
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-history"></i><span>06:00 - 12:00</span></a>
                    <ul class="dropdown-menu">
                      <li><a class="nav-link" href="<?php echo "?startday=".$_GET['startday']."&endday=".$_GET['endday']."&jam=0607" ?>">06:00 - 07:00</a></li>
                      <li><a class="nav-link" href="<?php echo "?startday=".$_GET['startday']."&endday=".$_GET['endday']."&jam=0708" ?>">07:00 - 08:00</a></li>
                      <li><a class="nav-link" href="<?php echo "?startday=".$_GET['startday']."&endday=".$_GET['endday']."&jam=0809" ?>">08:00 - 09:00</a></li>
                      <li><a class="nav-link" href="<?php echo "?startday=".$_GET['startday']."&endday=".$_GET['endday']."&jam=0910" ?>">09:00 - 10:00</a></li>
                      <li><a class="nav-link" href="<?php echo "?startday=".$_GET['startday']."&endday=".$_GET['endday']."&jam=1011" ?>">10:00 - 11:00</a></li>
                      <li><a class="nav-link" href="<?php echo "?startday=".$_GET['startday']."&endday=".$_GET['endday']."&jam=1112" ?>">11:00 - 12:00</a></li>
                    </ul>
              </ul>  
              <ul class="dropdown-menu">
                  <li class="nav-item dropdown active">          
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-history"></i><span>12:00 - 18:00</span></a>
                    <ul class="dropdown-menu">
                      <li><a class="nav-link" href="<?php echo "?startday=".$_GET['startday']."&endday=".$_GET['endday']."&jam=1201" ?>">12:00 - 13:00</a></li>
                      <li><a class="nav-link" href="<?php echo "?startday=".$_GET['startday']."&endday=".$_GET['endday']."&jam=1314" ?>">13:00 - 14:00</a></li>
                      <li><a class="nav-link" href="<?php echo "?startday=".$_GET['startday']."&endday=".$_GET['endday']."&jam=1415" ?>">14:00 - 15:00</a></li>
                      <li><a class="nav-link" href="<?php echo "?startday=".$_GET['startday']."&endday=".$_GET['endday']."&jam=1516" ?>">15:00 - 16:00</a></li>
                      <li><a class="nav-link" href="<?php echo "?startday=".$_GET['startday']."&endday=".$_GET['endday']."&jam=1617" ?>">16:00 - 17:00</a></li>
                      <li><a class="nav-link" href="<?php echo "?startday=".$_GET['startday']."&endday=".$_GET['endday']."&jam=1718" ?>">17:00 - 18:00</a></li>
                    </ul>
              </ul> 
              <ul class="dropdown-menu">
                  <li class="nav-item dropdown active">          
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-history"></i><span>18:00 - 24:00</span></a>
                    <ul class="dropdown-menu">
                      <li><a class="nav-link" href="<?php echo "?startday=".$_GET['startday']."&endday=".$_GET['endday']."&jam=1819" ?>">18:00 - 19:00</a></li>
                      <li><a class="nav-link" href="<?php echo "?startday=".$_GET['startday']."&endday=".$_GET['endday']."&jam=1920" ?>">19:00 - 20:00</a></li>
                      <li><a class="nav-link" href="<?php echo "?startday=".$_GET['startday']."&endday=".$_GET['endday']."&jam=2021" ?>">20:00 - 21:00</a></li>
                      <li><a class="nav-link" href="<?php echo "?startday=".$_GET['startday']."&endday=".$_GET['endday']."&jam=2122" ?>">21:00 - 22:00</a></li>
                      <li><a class="nav-link" href="<?php echo "?startday=".$_GET['startday']."&endday=".$_GET['endday']."&jam=2223" ?>">22:00 - 23:00</a></li>
                      <li><a class="nav-link" href="<?php echo "?startday=".$_GET['startday']."&endday=".$_GET['endday']."&jam=2324" ?>">23:00 - 24:00</a></li>
                    </ul>
              </ul>                   
              <!-- <li><a class="nav-link" href="{{ action("HomeController@index") }}">Connection Traffic</a></li> -->
              <!-- <li><a class="nav-link" href="{{ action("ReportController@tables") }}">Tables</a></li> -->
              <!-- <li><a class="nav-link" href="{{ action("ReportController@statistic") }}">Statistics</a></li> -->
            </ul>
        </li>       
        <!-- <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Summary</span></a></li> -->
        <!-- <li><span class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>About</span></span></li> -->
        @endif
      </ul>
  
       <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
         <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
           <i class="fas fa-rocket"></i> Download
         </a>
       </div>
   </aside>
 </div>