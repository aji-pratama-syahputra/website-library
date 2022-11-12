<?php $this->load->view('templates/Member/Header_template');?>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
<?=$this->session->flashdata('pesan')?>
                  <div class="col-lg-9 main-chart">   
                    
                    
                                    
                    <div class="row">
                        <!-- TWITTER PANEL -->
                        <div class="col-md-4 mb">
                            <div class="darkblue-panel pn">
                                <div class="darkblue-header">
                                    <h5>Rating Pengunjung Setiap hari</h5>
                                </div>
                                <canvas id="serverstatus02" height="120" width="120"></canvas>
                                <script>
                                    var doughnutData = [
                                            {
                                                value: 80,
                                                color:"#68dff0"
                                            },
                                            {
                                                value : 20,
                                                color : "#444c57"
                                            }
                                        ];
                                        var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
                                </script>
                                <p> <br></p>
                                <footer>
                                    <div class="pull-left">
                                        <h5><i class="fa fa-hdd-o"></i> 80% </h5>
                                    </div>
                                    
                                </footer>
                            </div><! -- /darkblue panel -->
                        </div><!-- /col-md-4 -->
                        
                        
                        <div class="col-md-4 mb">
                            <!-- INSTAGRAM PANEL -->
                            <div class="instagram-panel pn">
                                <i class="fa fa-instagram fa-4x"></i>
                                <p>@rumahbuku<br/>
                                    
                                </p>
                                <p><i class="fa fa-comment"></i> 18 | <i class="fa fa-heart"></i> 49</p>
                            </div>
                        </div><!-- /col-md-4 -->
                
                <div class="col-md-4 mb">
              <!-- INSTAGRAM PANEL -->
              <div class="darkblue-panel pn">
              <div class="darkblue-header">
              <h5>Buku Terlaris</h5>
              </div>
               <div class="centered">
                  <img src="<?php echo base_url('assets/img/product2.jpg')?>" width="120">
                </div>
                
              </div>
            </div><!-- /col-md-4 -->
                         

                    </div><!-- /row -->
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
<?php $this->load->view('templates/Member/Footer_template');?>