<?php
 $url = $_SERVER['REQUEST_URI'];
?>
<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="menu-title">
<span>Main Menu</span>
</li>
<li class="<?php
			if($url=="/school_portal/Admin_panel/dashboard"){
			    echo "active";
			}
			?>">
<a href="dashboard"><i class="fas fa-user-graduate">
</i> Dashboard</a>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-users"></i> <span> Management</span> <span class="menu-arrow"></span></a>
<ul>
<li class="<?php
			if($url=="/school_portal/Admin_panel/dashboard?hubs=vc"){
			    echo "active";
			}
			?>"><a href="dashboard?hubs=vc">VC/Director Office</a></li>
<li class="<?php
			if($url=="/school_portal/Admin_panel/dashboard?hubs=bursary"){
			    echo "active";
			}
			?>"><a href="dashboard?hubs=bursary">Bursary Office</a></li>
<li class="<?php
			if($url=="/school_portal/Admin_panel/dashboard?hubs=liberian"){
			    echo "active";
			}
			?>"><a href="dashboard?hubs=liberian">Librarian Office</a></li>
<li class="<?php
			if($url=="/school_portal/Admin_panel/dashboard?hubs=deans"){
			    echo "active";
			}
			?>"><a href="dashboard?hubs=deans">Dean's Office</a></li>
<li class="<?php
			if($url=="/school_portal/Admin_panel/dashboard?hubs=faculty"){
			    echo "active";
			}
			?>"><a href="dashboard?hubs=faculty">Faculty Office</a></li>
<li class="<?php
			if($url=="/school_portal/Admin_panel/dashboard?hubs=hod"){
			    echo "active";
			}
			?>"><a href="dashboard?hubs=hod">HOD Office</a></li>
<li class="<?php
			if($url=="/school_portal/Admin_panel/dashboard?hubs=examiner"){
			    echo "active";
			}
			?>"><a href="dashboard?hubs=examiner">Exam Office</a></li>
<li class="<?php
			if($url=="/school_portal/Admin_panel/dashboard?hubs=security"){
			    echo "active";
			}
			?>"><a href="dashboard?hubs=security">Security Office</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-user-graduate"></i> <span>Students</span> <span class="menu-arrow"></span></a>
<ul>
  <li class="<?php
  			if($url=="/school_portal/Admin_panel/dashboard?hubs=all_students"){
  			    echo "active";
  			}
  			?>"><a href="dashboard?hubs=all_students">All Students</a></li>
<li class="<?php
			if($url=="/school_portal/Admin_panel/dashboard?hubs=paid_student"){
			    echo "active";
			}
			?>"><a href="dashboard?hubs=paid_student">All Paid</a></li>
<li class="<?php
			if($url=="/school_portal/Admin_panel/dashboard?hubs=not_paid_student"){
			    echo "active";
			}
			?>"><a href="dashboard?hubs=not_paid_student">Not Paid Students</a></li>
<li class="<?php
			if($url=="/school_portal/Admin_panel/dashboard?hubs=give_support_student"){
			    echo "active";
			}
			?>"><a href="dashboard?hubs=give_support_student">Give Support</a></li>
<li class="<?php
			if($url=="/school_portal/Admin_panel/dashboard?hubs=defered_students"){
			    echo "active";
			}
			?>"><a href="dashboard?hubs=defered_students">Defered Students</a></li>
<li class="<?php
			if($url=="/school_portal/Admin_panel/dashboard?hubs=Promotion"){
			    echo "active";
			}
			?>"><a href="dashboard?hubs=Promotion">Promotion Manager</a></li>
<li class="<?php
			if($url=="/school_portal/Admin_panel/dashboard?hubs=change_course"){
			    echo "active";
			}
			?>"><a href="dashboard?hubs=change_course">Change of Course</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-user-graduate"></i> <span>Admissions </span> <span class="menu-arrow"></span></a>
<ul>
  <li class="<?php
  			if($url=="/school_portal/Admin_panel/dashboard?hubs=app_applicants"){
  			    echo "active";
  			}
  			?>"><a href="dashboard?hubs=app_applicants">All Applicants</a></li>
  <li class="<?php
  			if($url=="/school_portal/Admin_panel/dashboard?hubs=applicants_paid"){
  			    echo "active";
  			}
  			?>"><a href="dashboard?hubs=applicants_paid">Applicants Paid</a></li>
  <li class="<?php
  			if($url=="/school_portal/Admin_panel/dashboard?hubs=not_paid_applicants"){
  			    echo "active";
  			}
  			?>"><a href="dashboard?hubs=not_paid_applicants">Not Paid Applicants</a></li>
  <li class="<?php
  			if($url=="/school_portal/Admin_panel/dashboard?hubs=admitted_applicants"){
  			    echo "active";
  			}
  			?>"><a href="dashboard?hubs=admitted_applicants">Admitted Applicants</a></li>
  <li class="<?php
  			if($url=="/school_portal/Admin_panel/dashboard?hubs=not_admitted_applicants"){
  			    echo "active";
  			}
  			?>"><a href="dashboard?hubs=not_admitted_applicants">Not Admitted Applicants</a></li>
  <!-- <li class="<?php
  		//	if($url=="/school_portal/Admin_panel/dashboard?hubs=qualified_applicants"){
  			   // echo "active";
  			//}
  			?>"><a href="dashboard?hubs=qualified_applicants">Qualified</a></li>
  <li class="<?php
  			//if($url=="/school_portal/Admin_panel/dashboard?hubs=not_qualified"){
  			   // echo "active";
  			//}
  			?>"><a href="dashboard?hubs=not_qualified">Not Qualified</a></li> -->
  <li class="<?php
  			if($url=="/school_portal/Admin_panel/dashboard?hubs=reje"){
  			    echo "active";
  			}
  			?>"><a href="dashboard?hubs=rejected_applicants">Rejected</a></li>
  <li class="<?php
  			if($url=="/school_portal/Admin_panel/dashboard?hubs=give_support_applicants"){
  			    echo "active";
  			}
  			?>"><a href="dashboard?hubs=give_support_applicants">Give Support</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Manage User</span> <span class="menu-arrow"></span></a>
<ul>
<li class="<?php
      if($url=="/school_portal/Admin_panel/dashboard?hubs=staffs"){
          echo "active";
      }
      ?>"><a href="dashboard?hubs=staffs">Staff List</a></li>
<li class="<?php
      if($url=="/school_portal/Admin_panel/dashboard?hubs=admins"){
          echo "active";
      }
      ?>"><a href="dashboard?hubs=admins">Admin List</a></li>
<li class="<?php
      if($url=="/school_portal/Admin_panel/dashboard?hubs=roles"){
          echo "active";
      }
      ?>"><a href="dashboard?hubs=roles">Roles</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i class="fas fa-code"></i> <span>Manage CMS</span> <span class="menu-arrow"></span></a>
<ul>
<li class="submenu <?php
      if($url=="/school_portal/Admin_panel/dashboard?hubs=course_structure"){
          echo "active";
      }
      ?>">
<a href="#"> <span>Course Structure</span> <span class="menu-arrow"></span></a>
<ul>
<li class="<?php
      if($url=="/school_portal/Admin_panel/dashboard?hubs=course_structure"){
          echo "active";
      }
      ?>"><a href="dashboard?hubs=course_structure"><span>Course Structure List</span></a></li>
<li><a href="dashboard?hubs=new_structure"> <span>Add Structure</span></a></li>
</ul>
</li>
<li class="submenu">
<a href="#"> <span>Courses</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="dashboard?hubs=courses"><span>Course List</span></a></li>
<li><a href="dashboard?hubs=new_course"> <span>Add Course</span></a></li>
</ul>
</li>
<li class="submenu">
<a href="#"> <span>Departments</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="dashboard?hubs=departments"><span>Department List</span></a></li>
<li><a href="dashboard?hubs=new_department"> <span>Add Department</span></a></li>
</ul>
</li>
<li class="submenu">
<a href="#"> <span>Programmes</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="dashboard?hubs=programmes"><span>Programme List</span></a></li>
<li><a href="dashboard?hubs=new_programme"> <span>Add Programme</span></a></li>
</ul>
</li>
<li class="submenu">
<a href="#"> <span>Faculties</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="dashboard?hubs=faculties"><span>Faculty List</span></a></li>
<li><a href="dashboard?hubs=new_faculty"> <span>Add Faculty</span></a></li>
</ul>
</li>
<li class="submenu">
<a href="#"> <span>Schools</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="dashboard?hubs=schools"><span>School List</span></a></li>
<li><a href="dashboard?hubs=new_school"> <span>Add School</span></a></li>
</ul>
</li>
</ul>
</li>
<li class="menu-title">
<span>Finance</span>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-clipboard"></i> <span> Manage Payment</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="dashboard?hubs=app_fee">App. Fee</a></li>
<li><a href="dashboard?hubs=accept_fee">Accept. Fee</a></li>
<li><a href="dashboard?hubs=f_sch_fee">School Fee (Fresh)</a></li>
<li><a href="dashboard?hubs=r_sch_fee">School Fee (Returning)</a></li>
<!-- <li><a href="dashboard?hubs=hostel_fee">Hostel Fee</a></li> -->
<li><a href="dashboard?hubs=pay_confirmation">Payment Confirmation</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Finance Setup</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="dashboard?hubs=app_fee_setup">Application Fee</a></li>
<li><a href="dashboard?hubs=accept_fee_setup">Acceptance Fee</a></li>
<li><a href="dashboard?hubs=sch_fee_setup">School Fee</a></li>
<!-- <li><a href="dashboard?hubs=hostel_fee_setup">Hostel Fee</a></li> -->
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fa fa-newspaper"></i> <span> Verification</span>
<span class="menu-arrow"></span>
</a>
<ul>
<li><a href="dashboard?hubs=verify_admission">Admission Status</a></li>
<li><a href="dashboard?hubs=verify_app_fee">App. Fee Status</a></li>
<li><a href="dashboard?hubs=verify_accept_fee">Accept. Fee Status</a></li>
<li><a href="dashboard?hubs=verify_sch_fee">Sch. Fee Status</a></li>
<!-- <li><a href="dashboard?hubs=verify_hostel_fee">Hostel Fee Status</a></li> -->
</ul>
</li>
<li class="menu-title">
<span>Reports</span>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-shield-alt"></i> <span> Manage Report </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="dashboard?hubs=report_dashboard">Report Dashboard</a></li>
<li><a href="dashboard?hubs=report_manager">Report Manager</a></li>
<li><a href="dashboard?hubs=students_info">Students Information Report</a></li>
<li><a href="dashboard?hubs=finance_report">Financial Report</a></li>
</ul>
</li>
<li class="menu-title">
<span>Others</span>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-shield-alt"></i> <span> Settings/maintenance </span> <span class="menu-arrow"></span></a>
<ul>
<!-- <li><a href="dashboard?hubs=error_logs">Error Logs</a></li>
<li><a href="dashboard?hubs=backups">Backup</a></li>
<li><a href="dashboard?hubs=ip_filters">IP Filter</a></li>
<li><a href="dashboard?hubs=system_logs">System Logs</a></li> -->
<li><a href="dashboard?hubs=sessions">Sessions</a></li>
<li><a href="dashboard?hubs=semesters">Semesters</a></li>
<li><a href="dashboard?hubs=documentation">Documentation</a></li>
<!-- <li><a href="dashboard?hubs=control_box">Control Box</a></li> -->
</ul>
</li>
</ul>
</div>
</div>
</div>
