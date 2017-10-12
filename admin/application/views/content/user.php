page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Table Users</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Table<small>Users</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- <p class="text-muted font-13 m-b-30">
                      Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
                    </p> -->
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Full Name</th>
                          <th>Username</th>
                          <th>Birthday</th>
                          <th>E-mail</th>
                          <th>Phone</th>
                          <th>Gender</th>                      
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <?php
                            foreach ($read->result as $u){
                                echo "<tr>
                                      <td>$u->fullname</td>
                                      <td>$u->username</td>
                                      <td>$u->birthday</td>
                                      <td>$u->email</td>
                                      <td>$u->phone</td>
                                      <td>$u->gender</td>
                                      <td>$u->status</td>
                                      </tr>";
                            }
                            ?>                         
                        </tr>
                      </tbody>
                    </table>
          
          
                  </div>
                </div>
              </div>
          </div>
        </div>
        <!-- /page content