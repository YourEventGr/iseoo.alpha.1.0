<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Table Events</h3>
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Table<small>Events</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
                    </p>
          
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nama Event</th>
                          <th>Jenis Event</th>
                          <th>Creator</th>
                          <th>Keterangan</th>
                          <th>Tanggal Event</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <?php
                            $no=1;
                            foreach ($read->result as $u){
                                echo "<tr>
                                      <td>$no</td>
                                      <td>$u->nama_event</td>
                                      <td>$u->jenis_event</td>
                                      <td>$u->creator</td>
                                      <td>$u->keterangan</td>
                                      <td>$u->tanggal</td>
                                      <td>$u->status</td>
                                      </tr>";
                                $no++;
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
        </div>
        <!-- /page content -->