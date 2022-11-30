<div class="mdk-drawer js-mdk-drawer"
     id="default-drawer">
    <div class="mdk-drawer__content ">
        <div class="sidebar sidebar-left sidebar-dark bg-dark o-hidden"
             data-perfect-scrollbar>
            <div class="sidebar-p-y">
              <?php if ($role_id=='7') { ?>
              <div class="sidebar-heading">Links</div>
              <ul class="sidebar-menu sm-active-button-bg">
                  <li class="sidebar-menu-item active">
                      <a class="sidebar-menu-button"
                         href="dashboard">
                          <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i> Dashboard
                      </a>
                  </li>
                </ul>
              <?php }if ($role_id=='6') {

             ?>
                <div class="sidebar-heading">Links</div>
                <ul class="sidebar-menu sm-active-button-bg">
                    <li class="sidebar-menu-item active">
                        <a class="sidebar-menu-button"
                           href="dashboard">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i> Dashboard
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button"
                           href="dashboard?hub=course_mates">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i> Course Mates
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button"
                           href="dashboard?hub=lecturers">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> My Lecturers
                        </a>
                    </li>
                </ul>
              <?php   }  if ($role_id=='7') {?>
                <!-- Account menu -->
                <div class="sidebar-heading">Applicant</div>
                <ul class="sidebar-menu sm-active-button-bg">
                  <li class="sidebar-menu-item">
                      <a class="sidebar-menu-button"
                         data-toggle="collapse"
                         href="#forum_menu">
                          <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">chat_bubble_outline</i>
                          Profile
                          <span class="ml-auto sidebar-menu-toggle-icon"></span>
                      </a>
                      <ul class="sidebar-submenu sm-indent collapse"
                          id="forum_menu">
                          <li class="sidebar-menu-item">
                              <a class="sidebar-menu-button"
                                 href="dashboard?hub=app_biodata">
                                  <span class="sidebar-menu-text">BioData</span>
                              </a>
                          </li>
                          <li class="sidebar-menu-item">
                              <a class="sidebar-menu-button"
                                 href="dashboard?hub=app_contacts">
                                  <span class="sidebar-menu-text">Contact Info</span>
                              </a>
                          </li>
                          <li class="sidebar-menu-item">
                              <a class="sidebar-menu-button"
                                 href="dashboard?hub=app_programme">
                                  <span class="sidebar-menu-text">Programme</span>
                              </a>
                          </li>
                          <li class="sidebar-menu-item">
                              <a class="sidebar-menu-button"
                                 href="dashboard?hub=app_health">
                                  <span class="sidebar-menu-text">Health</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button"
                           href="dashboard?hub=app_olevel">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">search</i> O-level
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button"
                           href="dashboard?hub=app_alevel">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">import_contacts</i> A-level
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button"
                           href="dashboard?hub=app_credential">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">class</i> Credentials
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button"
                           href="dashboard?hub=my_payment">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i> Payments
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button"
                           href="dashboard?hub=fsubmission">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">poll</i> Final Submission
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button"
                           href="dashboard?hub=admission_status">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> Admission Status
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button"
                           href="dashboard?hub=helps">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">live_help</i> Get Help
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button"
                           href="dashboard?hub=support">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">live_help</i> Support
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button"
                           href="logout">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">lock_open</i> Logout
                        </a>
                    </li>
                    <li class="sidebar-menu-item active">
                        <a class="sidebar-menu-button"
                           href="dashboard?hub=calendar">
                            <span class="sidebar-menu-text">Calendar</span>
                        </a>
                    </li>
                </ul>
              <?php }  if ($role_id=='6') { ?>
                <div class="sidebar-heading">Student</div>
                <ul class="sidebar-menu sm-active-button-bg">
                  <li class="sidebar-menu-item">
                      <a class="sidebar-menu-button"
                         data-toggle="collapse"
                         href="#forum_menu">
                          <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">chat_bubble_outline</i>
                          Profile
                          <span class="ml-auto sidebar-menu-toggle-icon"></span>
                      </a>
                      <ul class="sidebar-submenu sm-indent collapse"
                          id="forum_menu">
                          <li class="sidebar-menu-item">
                              <a class="sidebar-menu-button"
                                 href="dashboard?hub=biodata">
                                  <span class="sidebar-menu-text">BioData</span>
                              </a>
                          </li>
                          <li class="sidebar-menu-item">
                              <a class="sidebar-menu-button"
                                 href="dashboard?hub=contact">
                                  <span class="sidebar-menu-text">Contact Info</span>
                              </a>
                          </li>
                          <li class="sidebar-menu-item">
                              <a class="sidebar-menu-button"
                                 href="dashboard?hub=programme">
                                  <span class="sidebar-menu-text">Academic Information</span>
                              </a>
                          </li>
                          <li class="sidebar-menu-item">
                              <a class="sidebar-menu-button"
                                 href="dashboard?hub=previous">
                                  <span class="sidebar-menu-text">Previous Academic Info.</span>
                              </a>
                          </li>
                          <li class="sidebar-menu-item">
                              <a class="sidebar-menu-button"
                                 href="dashboard?hub=health">
                                  <span class="sidebar-menu-text">Health</span>
                              </a>
                          </li>
                          <li class="sidebar-menu-item">
                              <a class="sidebar-menu-button"
                                 href="dashboard?hub=credential">
                                  <span class="sidebar-menu-text">Credential</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button"
                           href="dashboard?hub=payment">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">search</i> Payments
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button"
                           href="dashboard?hub=course">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">import_contacts</i> Course Registration
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button"
                           href="dashboard?hub=exam">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">class</i> Exam Card
                        </a>
                    </li>
                    <!-- <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button"
                           href="student-take-quiz.html">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i> Hostel Portal
                        </a>
                    </li> -->
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button"
                           href="dashboard?hub=helps">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">live_help</i> Get Help
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button"
                           href="dashboard?hub=support">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">live_help</i> Support
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button"
                           href="logout">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">lock_open</i> Logout
                        </a>
                    </li>
                    <li class="sidebar-menu-item active">
                        <a class="sidebar-menu-button"
                           href="dashboard?hub=calendar">
                            <span class="sidebar-menu-text">Calendar</span>
                        </a>
                    </li>
                </ul>
              <?php } ?>
            </div>
        </div>
    </div>
</div>
