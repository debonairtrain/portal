


      <!-- sidebar nav start -->
      <ul class="nav nav-pills nav-stacked custom-nav">
        <li class="active"><a href="dashboard"><i class="fa fa-tachometer"></i><span> Dashboard</span></a>
        </li>
      <!--  <li class="menu-list">
          <a href="#"><i class="fa fa-cogs"></i>
            <span>Elements <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <li><a href="carousels.html">Carousels</a> </li>
            <li><a href="cards.html">Default cards</a> </li>
            <li><a href="people.html">People cards</a></li>
          </ul>
        </li>-->
        <?php
        
        if($admin_role_id == '1' OR $admin_role_id=='2'){
            
        
        ?>
        <li class="menu-list"><a href="#"><i class="fa fa-users"></i>
            <span>Manage Admission <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <li><a href="dashboard?hubs=all_applicants">View Applicants</a></li>
			<li><a href="dashboard?hubs=admitted">Admitted Applicants</a></li>
            <!---<li><a href="dashboard?hubs=programme_stucture">View Payments</a></li>
            <li><a href="dashboard?hubs=programme_stucture">Qualified</a></li>--->
          </ul>
        </li>
        <?php
        
        }
        ?>
        <?php
        
        if($admin_role_id == '1' OR $admin_role_id=='2'){
            
        
        ?>
         <li class="menu-list"><a href="#"><i class="fa fa-book"></i>
            <span>Manage courses <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <li><a href="dashboard?hubs=courses">Courses</a></li>
			<li><a href="dashboard?hubs=programme_stucture">Programme Courses</a></li>
            
          </ul>
        </li>
        <?php
        }
        ?>
        <?php
        
        if($admin_role_id == '1' OR $admin_role_id=='2'  OR $admin_role_id=='3'){
            
        
        ?>
        <li class="menu-list"><a href="#"><i class="fa fa-book"></i>
            <span>Manage Report <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <li><a href="dashboard?hubs=report_dashboard">Report Dashboard</a></li>
			<li><a href="dashboard?hubs=students_info_report">Students Information Report</a></li>
            <li><a href="dashboard?hubs=financial_report">Financial Report</a></li>
          </ul>
        </li>
         <?php
        }
        ?>
          <?php
        
        if($admin_role_id == '1' OR $admin_role_id=='3'){
            
        
        ?>
        <li class="menu-list"><a href="#"><i class="fa fa-money"></i>
            <span>Manage Payments <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <li><a href="dashboard?hubs=app_fee">App. Fee</a></li>
			<li><a href="dashboard?hubs=accept_fee">Accept. Fee</a></li>
            <li><a href="dashboard?hubs=school_fee">School Fee</a></li>
            <li><a href="dashboard?hubs=payment_confirm">Payment Confirmation</a></li>
            <li><a href="dashboard?hubs=payment_confirm_slip">Payment Confirmation Slip</a></li>
          </ul>
        </li>
        <li class="menu-list"><a href="#"><i class="fa fa-credit-card"></i>
            <span>Finance Setup <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <li><a href="dashboard?hubs=app_fee_setup">App. Fee</a></li>
			<li><a href="dashboard?hubs=accept_fee_setup">Accept. Fee</a></li>
            <li><a href="dashboard?hubs=sch_fee_setup">School Fee</a></li>
          </ul>
        </li>
        <?php
        }
        ?>
          <?php
        
        if($admin_role_id == '1' OR $admin_role_id=='2'){
            
        
        ?>
        <li class="menu-list"><a href="#"><i class="fa fa-users"></i>
            <span>Manage Students <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <li><a href="dashboard?hubs=all_students">View Students</a></li>
            <li><a href="dashboard?hubs=students_support">Give Support</a></li>
			<!----<li><a href="dashboard?hubs=promotion">Run Promotion</a></li>
            <li><a href="dashboard?hubs=change_course">Change of Course</a></li>----->
          </ul>
        </li>
        <?php
        }
        ?>
       <!-- <li><a href="charts.html"><i class="fa fa-pie-chart"></i> <span>Charts</span> <label
              class="label label-primary"> new</label></a></li>
        <li><a href="pricing.html"><i class="fa fa-table"></i> <span>Pricing tables</span></a></li>
        <li class="menu-list"><a href="#"><i class="fa fa-envelope"></i>
            <span>Mailbox <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <li><a href="inbox.html">Inbox</a> </li>
            <li><a href="#compose-mail.html">Compose Mail</a></li>
          </ul>
        </li>
        
        <li><a href="forms.html"><i class="fa fa-file-text"></i> <span>Forms</span></a></li>-->
      </ul>
      <!-- //sidebar nav end -->
      <!-- toggle button start -->
      <a class="toggle-btn">
        <i class="fa fa-angle-double-left menu-collapsed__left"><span>Collapse Sidebar</span></i>
        <i class="fa fa-angle-double-right menu-collapsed__right"></i>
      </a>
      <!-- //toggle button end -->
    