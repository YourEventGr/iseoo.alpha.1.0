<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Layanan</h3>
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <!-- <h2>Responsive example<small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div> -->
                  <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'Venue')" id="defaultOpen">Venue</button>
                    <button class="tablinks" onclick="openCity(event, 'Equipment')">Equipment</button>
                    <button class="tablinks" onclick="openCity(event, 'Sponsor')">Sponsor</button>
                  </div>

                  <div id="Venue" class="tabcontent" >
                    <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      <!-- Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table. -->
                    </p>
          
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nama Tempat</th>
                          <th>Harga</th>
                          <th>Kontak</th>
                          <th>Deskripsi</th>
                          <th>Untuk Event</th>
                          <th>Pemilik</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <?php
                            $no=1;
                            foreach ($venue->result as $u){
                                echo "<tr>
                                      <td>$no</td>
                                      <td>$u->nama_jasa</td>
                                      <td>$u->harga</td>
                                      <td>$u->kontak</td>
                                      <td>$u->deskripsi</td>
                                      <td>$u->untuk_event</td>
                                      <td>$u->pemilik</td>
                                      <td>$u->status</td>
                                      </tr>";
                                $no++;
                            }
                            ?> 
                        </tr>
                      </tbody>
                    </table>
                  <a href="tambahLayanan">
                  <button type="button" class="btn btn-success">Tambah Layanan</button>
                    </a>
                  </div>
                  </div>

                  <div id="Equipment" class="tabcontent" >
                    <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      <!-- Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table. -->
                    </p>
          
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nama Barang</th>
                          <th>Harga</th>
                          <th>Kontak</th>
                          <th>Deskripsi</th>
                          <th>Untuk Event</th>
                          <th>Pemilik</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <?php
                            $no=1;
                            foreach ($equip->result as $u){
                                echo "<tr>
                                      <td>$no</td>
                                      <td>$u->nama_jasa</td>
                                      <td>$u->harga</td>
                                      <td>$u->kontak</td>
                                      <td>$u->deskripsi</td>
                                      <td>$u->untuk_event</td>
                                      <td>$u->pemilik</td>
                                      <td>$u->status</td>
                                      </tr>";
                                $no++;
                            }
                            ?> 
                        </tr>
                      </tbody>
                    </table>
                    <a href="tambahLayanan">
                  <button type="button" class="btn btn-success">Tambah Layanan</button>
                    </a>
                  </div>
                  </div>

                  <div id="Sponsor" class="tabcontent" >
                    <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      <!-- Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table. -->
                    </p>
          
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nama Sponsor</th>
                          <th>Pemilik</th>
                          <th>Contact Person</th>
                          <th>Deskripsi</th>
                          <th>Untuk Event</th>
                          <th>Jenis Sponsor</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <?php
                            $no=1;
                            foreach ($sponsor->result as $u){
                                echo "<tr>
                                      <td>$no</td>
                                      <td>$u->nama_sponsor</td>
                                      <td>$u->pemilik</td>
                                      <td>$u->kontak</td>
                                      <td>$u->deskripsi</td>
                                      <td>$u->untuk_event</td>
                                      <td>$u->jenis_sponsor</td>
                                      <td>$u->status</td>
                                      </tr>";
                                $no++;
                            }
                            ?>
                        </tr>
                      </tbody>
                    </table>
                    <a href="tambahSponsor">
                  <button type="button" class="btn btn-success">Tambah Sponsor</button>
                    </a>
                  </div>
                  </div>
                  <script>
                     function openCity(evt, cityName) {
                      var i, tabcontent, tablinks;
                      tabcontent = document.getElementsByClassName("tabcontent");
                      for (i = 0; i < tabcontent.length; i++) {
                          tabcontent[i].style.display = "none";
                      }
                      tablinks = document.getElementsByClassName("tablinks");
                      for (i = 0; i < tablinks.length; i++) {
                          tablinks[i].className = tablinks[i].className.replace(" active", "");
                      }
                      document.getElementById(cityName).style.display = "block";
                      evt.currentTarget.className += " active";
                  }

                  // Get the element with id="defaultOpen" and click on it
                  document.getElementById("defaultOpen").click();
                    </script>
                  </div>

                 </div>
                </div>
              </div>
          </div>
        </div>
        <!-- /page content -->