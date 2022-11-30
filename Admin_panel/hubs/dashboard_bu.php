  <br/>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </nav>
    <div class="welcome-msg pt-3 pb-4">
      <h1>Hi <span class="text-primary">John</span>, Welcome back</h1>
      <p>Very detailed & featured admin.</p>
    </div>

    <!-- statistics data -->
    <div class="statistics">
      <div class="row">
        <div class="col-xl-6 pr-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-users"> </i>
                <h3 class="text-primary number">29.75 M</h3>
                <p class="stat-text">Total Users</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-eye"> </i>
                <h3 class="text-secondary number">51.25 K</h3>
                <p class="stat-text">Daily Visitors</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 pl-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-cloud-download"> </i>
                <h3 class="text-success number">166.89 M</h3>
                <p class="stat-text">Downloads</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-cart"> </i>
                <h3 class="text-danger number">1,250k</h3>
                <p class="stat-text">Purchased</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //statistics data -->

    <!-- charts -->
    <div class="chart">
      <div class="row">
        <div class="col-lg-6 pr-lg-2 chart-grid">
          <div class="card text-center card_border">
            <div class="card-header chart-grid__header">
              Bar Chart
            </div>
            <div class="card-body">
              <!-- bar chart -->
              <div id="container">
                <canvas id="barchart"></canvas>
              </div>
              <!-- //bar chart -->
            </div>
            <div class="card-footer text-muted chart-grid__footer">
              Updated 2 hours ago
            </div>
          </div>
        </div>
        <div class="col-lg-6 pl-lg-2 chart-grid">
          <div class="card text-center card_border">
            <div class="card-header chart-grid__header">
              Line Chart
            </div>
            <div class="card-body">
              <!-- line chart -->
              <div id="container">
                <canvas id="linechart"></canvas>
              </div>
              <!-- //line chart -->
            </div>
            <div class="card-footer text-muted chart-grid__footer">
              Updated just now
            </div>
          </div>
        </div>
        <div class="col-lg-6 pr-lg-2 chart-grid">
          <div class="card text-center card_border">
            <div class="card-header chart-grid__header">
              Pie Chart
            </div>
            <div class="card-body">
              <!-- pie chart -->
              <div id="canvas-holder">
                <canvas id="piechart"></canvas>
              </div>
              <!-- //pie chart -->
            </div>
            <div class="card-footer text-muted chart-grid__footer">
              Updated just now
            </div>
          </div>
        </div>
        <div class="col-lg-6 pl-lg-2 chart-grid">
          <div class="card text-center card_border">
            <div class="card-header chart-grid__header">
              Stacked Bar
            </div>
            <div class="card-body">
              <!-- stacked bar chart -->
              <div id="container">
                <canvas id="stackedbar"></canvas>
              </div>
              <!-- //stacked bar chart -->
            </div>
            <div class="card-footer text-muted chart-grid__footer">
              Updated just now
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //charts -->

    <!-- data tables -->
    <div class="data-tables">
      <div class="row">
        <div class="col-lg-12 mb-4">
          <div class="card card_border p-4">
            <h3 class="card__title position-absolute">All Employees Info</h3>
            <div class="table-responsive">
              <table id="example" class="display" style="width:100%">
                <thead>
                  <tr>
                    <th>Emp. Name</th>
                    <th>Designation</th>
                    <th>Joining date</th>
                    <th>Emp. Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img src="assets/images/avatar1.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Johnson</td>
                    <td>Corporate Business Theme</td>
                    <td>06/01/2020</td>
                    <td><span class="badge badge-success">Success</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets/images/avatar1.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Elexa ker</td>
                    <td>HR operations</td>
                    <td>07/01/2020</td>
                    <td><span class="badge badge-success">Active</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets/images/avatar5.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Alexander</td>
                    <td>Interior web design</td>
                    <td>08/01/2020</td>
                    <td><span class="badge badge-warning">In active</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets/images/avatar4.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Smith Kelly</td>
                    <td>Personal portfolio</td>
                    <td>09/01/2020</td>
                    <td><span class="badge badge-danger">Processing</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets/images/avatar5.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Elizabeth</td>
                    <td>Agriculture and farming</td>
                    <td>06/01/2020</td>
                    <td><span class="badge badge-success">Active</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets/images/avatar6.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Williamson</td>
                    <td>Integration Specialist</td>
                    <td>07/01/2020</td>
                    <td><span class="badge badge-success">Success</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets/images/avatar7.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Thomas</td>
                    <td>Sales Assistant</td>
                    <td>08/01/2020</td>
                    <td><span class="badge badge-success">Success</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets/images/avatar2.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Davidson</td>
                    <td>Integration Specialist</td>
                    <td>09/01/2020</td>
                    <td><span class="badge badge-warning">In active</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets/images/avatar2.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Michael</td>
                    <td>Javascript Developer</td>
                    <td>06/01/2020</td>
                    <td><span class="badge badge-success">Success</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets/images/avatar3.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Margaret</td>
                    <td>Software Engineer</td>
                    <td>07/01/2020</td>
                    <td><span class="badge badge-success">Success</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets/images/avatar4.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Charlotte</td>
                    <td>Office Manager</td>
                    <td>08/01/2020</td>
                    <td><span class="badge badge-warning">In active</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets/images/avatar5.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Isabella</td>
                    <td>Support Lead</td>
                    <td>09/01/2020</td>
                    <td><span class="badge badge-success">Success</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets/images/avatar6.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Victoria</td>
                    <td>Regional Director</td>
                    <td>06/01/2020</td>
                    <td><span class="badge badge-success">Success</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets/images/avatar7.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Wilson</td>
                    <td>Senior Marketing Designer</td>
                    <td>07/01/2020</td>
                    <td><span class="badge badge-success">Success</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets/images/avatar1.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Jessica</td>
                    <td>Regional Director</td>
                    <td>08/01/2020</td>
                    <td><span class="badge badge-success">Success</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets/images/avatar2.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Michael</td>
                    <td>Marketing Designer</td>
                    <td>09/01/2020</td>
                    <td><span class="badge badge-warning">In active</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets/images/avatar3.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Anderson</td>
                    <td>Chief Financial Officer (CFO)</td>
                    <td>06/01/2020</td>
                    <td><span class="badge badge-warning">In active</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets/images/avatar4.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Gloria</td>
                    <td>Systems Administrator</td>
                    <td>07/01/2020</td>
                    <td><span class="badge badge-warning">In active</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets/images/avatar5.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Taylor</td>
                    <td>Software Engineer</td>
                    <td>08/01/2020</td>
                    <td><span class="badge badge-warning">In active</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 chart-grid mb-4">
          <div class="card card_border p-4">
            <div class="card-header chart-grid__header pl-0 pt-0">
              Chatting
            </div>
            <div class="messaging">
              <div class="inbox_msg">
                <div class="inbox_people">
                  <div class="headind_srch">
                    <div class="srch_bar">
                      <div class="stylish-input-group">
                        <input type="text" class="search-bar" placeholder="Search Chat">
                        <span class="input-group-addon">
                          <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                        </span> </div>
                    </div>
                  </div>
                  <div class="inbox_chat">
                    <div class="chat_list active_chat">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="assets/images/avatar5.jpg" alt="Alexander" class="img-fluid">
                        </div>
                        <div class="chat_ib">
                          <h5>Alexander <span class="chat_date">1 hour ago</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="assets/images/avatar3.jpg" alt="Anderson" class="img-fluid">
                        </div>
                        <div class="chat_ib">
                          <h5>Anderson <span class="chat_date">5 hours ago</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="assets/images/avatar5.jpg" alt="Isabella" class="img-fluid">
                        </div>
                        <div class="chat_ib">
                          <h5>Isabella <span class="chat_date">Yesterday</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="assets/images/avatar4.jpg" alt="Charlotte" class="img-fluid">
                        </div>
                        <div class="chat_ib">
                          <h5>Charlotte <span class="chat_date">Mar 04</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="assets/images/avatar2.jpg" alt="Davidson" class="img-fluid">
                        </div>
                        <div class="chat_ib">
                          <h5>Davidson <span class="chat_date">Feb 18</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="assets/images/avatar1.jpg" alt="Elexa ker" class="img-fluid">
                        </div>
                        <div class="chat_ib">
                          <h5>Elexa ker <span class="chat_date">Feb 04</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="assets/images/avatar4.jpg" alt="Charlotte" class="img-fluid">
                        </div>
                        <div class="chat_ib">
                          <h5>Charlotte <span class="chat_date">Jan 28</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mesgs">
                  <div class="msg_history">
                    <div class="incoming_msg">
                      <div class="incoming_msg_img"> <img src="assets/images/avatar5.jpg" alt="Alexander"
                          class="img-fluid"> </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>Coming along nicely, we've got a Lorem ipsum dolor sit amet consectetur adipisicing elit.
                          </p>
                          <span class="time_date"> 10:05 AM | Mar 9</span>
                        </div>
                      </div>
                    </div>
                    <div class="outgoing_msg">
                      <div class="sent_msg">
                        <p>Great start, I've added some Lorem ipsum dolor sit amet. </p>
                        <span class="time_date"> 12:15 PM | Mar 9</span>
                      </div>
                    </div>
                    <div class="incoming_msg">
                      <div class="incoming_msg_img"> <img src="assets/images/avatar5.jpg" alt="Alexander"
                          class="img-fluid"> </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>Sed ut perspiciatis unde omnis iste natus error sit</p>
                          <span class="time_date"> 09:16 AM | Yesterday</span>
                        </div>
                      </div>
                    </div>
                    <div class="outgoing_msg">
                      <div class="sent_msg">
                        <p>But I must explain to you.</p>
                        <span class="time_date"> 03:15 PM | Today</span>
                      </div>
                    </div>
                    <div class="incoming_msg">
                      <div class="incoming_msg_img"> <img src="assets/images/avatar5.jpg" alt="Alexander"
                          class="img-fluid"> </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores.</p>
                          <span class="time_date"> 03:16 PM | Today</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="type_msg">
                    <div class="input_msg_write">
                      <input type="text" class="write_msg" placeholder="Type a message" />
                      <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o"
                          aria-hidden="true"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //data tables -->

    <!-- accordions -->
    <div class="accordions">
      <div class="row">
        <!-- accordion style 1 -->
        <div class="col-lg-12 mb-4">
          <div class="card card_border">
            <div class="card-header chart-grid__header">
              Bootstrap Accordions
            </div>
            <div class="card-body">
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header bg-white p-0" id="headingOne">
                    <a href="#" class="card__title p-3" data-toggle="collapse" data-target="#collapseOne"
                      aria-expanded="true" aria-controls="collapseOne">Collapsed accordion heading </a>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body para__style">
                      Nulla tincidunt quam justo, in tincidunt tortor sollicitudin a. Donec porta posuere
                      libero sed varius. Phasellus hendrerit commodo sem, at sagittis sapien semper quis.
                      Etiam vitae facilisis nibh. Maecenas erat nisl, blandit at nunc a, lobortis sagittis
                      ex. Maecenas pharetra pulvinar tincidunt.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header bg-white p-0" id="headingTwo">
                    <a href="#" class="card__title p-3" data-toggle="collapse" data-target="#collapseTwo"
                      aria-expanded="false" aria-controls="collapseTwo">Click here to collapse accordion</a>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body para__style">
                      Nulla tincidunt quam justo, in tincidunt tortor sollicitudin a. Donec porta posuere
                      libero sed varius. Phasellus hendrerit commodo sem, at sagittis sapien semper quis.
                      Etiam vitae facilisis nibh. Maecenas erat nisl, blandit at nunc a, lobortis sagittis
                      ex. Maecenas pharetra pulvinar tincidunt.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header bg-white p-0" id="headingThree">
                    <a href="#" class="card__title p-3" data-toggle="collapse" data-target="#collapseThree"
                      aria-expanded="false" aria-controls="collapseThree">Click here to
                      collapse accordion</a>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                    data-parent="#accordionExample">
                    <div class="card-body para__style">
                      Nulla tincidunt quam justo, in tincidunt tortor sollicitudin a. Donec porta posuere
                      libero sed varius. Phasellus hendrerit commodo sem, at sagittis sapien semper quis.
                      Etiam vitae facilisis nibh. Maecenas erat nisl, blandit at nunc a, lobortis sagittis
                      ex. Maecenas pharetra pulvinar tincidunt.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- //accordion style 1 -->
      </div>

      <div class="row">
        <!-- accordion style 2 -->
        <div class="col-lg-12 mb-4">
          <div class="card card_border">
            <div class="card-header chart-grid__header">
              Javascript Accordions
            </div>
            <div class="card-body">
              <section class="accordion" role="tablist" aria-live="polite" data-behavior="accordion">
                <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
                  <span id="tab1" tabindex="0" class="accordion__title" aria-controls="panel1" role="tab"
                    aria-selected="false" aria-expanded="false" data-binding="expand-accordion-trigger">
                    <h5>Click here to collapse accordion</h5>
                  </span>
                  <div id="panel1" class="accordion__content" role="tabpanel" aria-hidden="false" aria-labelledby="tab1"
                    data-binding="expand-accordion-container">
                    <div class="accordion__content-inner">
                      <p>
                        Nulla tincidunt quam justo, in tincidunt tortor sollicitudin a. Donec porta posuere
                        libero sed varius. Phasellus hendrerit commodo sem, at sagittis sapien semper quis.
                        Etiam vitae facilisis nibh. Maecenas erat nisl, blandit at nunc a, lobortis sagittis
                        ex. Maecenas pharetra pulvinar tincidunt.</p>
                    </div>
                  </div>
                </article>

                <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
                  <span id="tab2" tabindex="0" class="accordion__title" aria-controls="panel2" role="tab"
                    aria-selected="false" aria-expanded="false" data-binding="expand-accordion-trigger">
                    <h5>Click here to collapse accordion</h5>
                  </span>
                  <div id="panel2" class="accordion__content" role="tabpanel" aria-hidden="true" aria-labelledby="tab2"
                    data-binding="expand-accordion-container">
                    <div class="accordion__content-inner">
                      <p>
                        Nulla tincidunt quam justo, in tincidunt tortor sollicitudin a. Donec porta posuere
                        libero sed varius. Phasellus hendrerit commodo sem, at sagittis sapien semper quis.
                        Etiam vitae facilisis nibh. Maecenas erat nisl, blandit at nunc a, lobortis sagittis
                        ex. Maecenas pharetra pulvinar tincidunt.</p>
                    </div>
                  </div>
                </article>

                <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
                  <span id="tab3" tabindex="0" class="accordion__title" aria-controls="panel3" role="tab"
                    aria-selected="false" aria-expanded="false" data-binding="expand-accordion-trigger">
                    <h5>Click here to view more</h5>
                  </span>
                  <div id="panel3" class="accordion__content" role="tabpanel" aria-hidden="true" aria-labelledby="tab3"
                    data-binding="expand-accordion-container">
                    <div class="accordion__content-inner">
                      <p>
                        Nulla tincidunt quam justo, in tincidunt tortor sollicitudin a. Donec porta posuere
                        libero sed varius. Phasellus hendrerit commodo sem, at sagittis sapien semper quis.
                        Etiam vitae facilisis nibh. Maecenas erat nisl, blandit at nunc a, lobortis sagittis
                        ex. Maecenas pharetra pulvinar tincidunt.</p>
                    </div>
                  </div>
                </article>
              </section>
            </div>
          </div>
        </div>
        <!-- //accordion style 2 -->
      </div>
    </div>
    <!-- //accordions -->

    <!-- modals -->
    <section class="template-cards">
      <div class="card card_border">
        <div class="cards__heading">
          <h3>Modals - <span>4 different types of bootstrap modals</span></h3>
        </div>
        <div class="card-body pb-0">
          <div class="row">
            <div class="col-lg-6 pr-lg-2 chart-grid">
              <div class="card text-center card_border">
                <div class="card-header chart-grid__header">
                  Demo modal
                </div>
                <div class="card-body">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary btn-style" data-toggle="modal"
                    data-target="#exampleModal">
                    Launch demo
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-success">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 chart-grid">
              <div class="card text-center card_border">
                <div class="card-header chart-grid__header">
                  Vertical centered
                </div>
                <div class="card-body">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary btn-style" data-toggle="modal"
                    data-target="#exampleModalCenter">
                    Launch demo
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-success">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 pr-lg-2 chart-grid">
              <div class="card text-center card_border">
                <div class="card-header chart-grid__header">
                  Scrolling long content
                </div>
                <div class="card-body">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary btn-style" data-toggle="modal"
                    data-target="#exampleModalLong">
                    Launch demo
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body text-left">
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque
                            nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                          </p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque
                            nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                          </p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque
                            nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                          </p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque
                            nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                          </p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque
                            nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                          </p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque
                            nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                          </p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 chart-grid">
              <div class="card text-center card_border">
                <div class="card-header chart-grid__header">
                  Scrolling the modal body
                </div>
                <div class="card-body">

                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary btn-style" data-toggle="modal"
                    data-target="#exampleModalScrollable">
                    Launch demo
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body text-left">
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque
                            nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                          </p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque
                            nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                          </p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque
                            nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                          </p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque
                            nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                          </p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque
                            nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                          </p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque
                            nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                          </p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>



                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- //modals -->

  