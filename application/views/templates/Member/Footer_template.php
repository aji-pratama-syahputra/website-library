<div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
<h3>Kalender</h3>
                                        
                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
                      
                  </div><!-- /col-lg-3 -->
              
          </section>
      

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
          </div>
      </footer>
      <!--footer end-->
  

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url('assets/js/jquery.dcjqaccordion.2.7.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.nicescroll.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/jquery.sparkline.js')?>"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url('assets/js/common-scripts.js')?>"></script>
    
    <script type="text/javascript" src="<?php echo base_url('assets/js/gritter/js/jquery.gritter.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/gritter-conf.js')?>"></script>

    <!--script for this page-->
    <script src="<?php echo base_url('assets/js/sparkline-chart.js')?>"></script>    
	<script src="<?php echo base_url('assets/js/zabuto_calendar.js')?>"></script>	
	
	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashgum!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: '<?php echo base_url('assets/img/ui-sam.jpg')?>',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>