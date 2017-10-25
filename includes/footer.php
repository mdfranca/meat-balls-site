  <!-- js -->
  <script src="js/jquery/jquery.min.js" type="text/javascript"></script>

  <!-- uikit -->
  <?php if (isset($direction) && !empty($direction) && $direction == "rtl") { ?>
    <script src="vendor/uikit/js/uikit-rtl.min.js" type="text/javascript"></script>
  <?php } else { ?>
    <script src="vendor/uikit/js/uikit.min.js" type="text/javascript"></script>
  <?php } ?>

  <script src="vendor/uikit/js/components/accordion.min.js" type="text/javascript"></script>
  <script src="vendor/uikit/js/components/autocomplete.min.js" type="text/javascript"></script>
  <script src="vendor/uikit/js/components/datepicker.min.js" type="text/javascript"></script>
  <script src="vendor/uikit/js/components/grid.min.js" type="text/javascript"></script>
  <script src="vendor/uikit/js/components/lightbox.min.js" type="text/javascript"></script>
  <script src="vendor/uikit/js/components/parallax.min.js" type="text/javascript"></script>
  <script src="vendor/uikit/js/components/slider.min.js" type="text/javascript"></script>
  <script src="vendor/uikit/js/components/slideset.min.js" type="text/javascript"></script>
  <script src="vendor/uikit/js/components/slideshow.min.js" type="text/javascript"></script>
  <script src="vendor/uikit/js/components/sticky.min.js" type="text/javascript"></script>
  <script src="vendor/uikit/js/components/timepicker.min.js" type="text/javascript"></script>
  <script src="vendor/uikit/js/components/tooltip.min.js" type="text/javascript"></script>

  <!-- theme -->
  <script src="js/theme.js" type="text/javascript"></script>

  <!-- plyr -->
  <script src="js/plyr.js" type="text/javascript"></script>
  
  <!-- add active menu -->
  <script>
    $(function () {
      function getUrlVars() {
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
        });
        return vars;
      }

    var current_page = "index.php?page="+getUrlVars()["page"]; 
        $('.tm-nav li a').each(function () {
            var link_page = this.href.substring(this.href.lastIndexOf('/') + 1);
            var parent = $(this).parent();
            if (current_page == link_page) {
                parent.addClass('uk-active').closest('.uk-navbar-nav > li').addClass('uk-active'); 
                parent.closest('li.uk-parent').addClass('uk-active');
            }
        });
    })
  </script>

  <?php
    if (isset($page) && !empty($page)) {
      if($page == "events") {
  ?>

  <!-- calendar -->
  <script src='vendor/fullcalendar/lib/moment.min.js' type="text/javascript"></script>
  <script src="vendor/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
  <script>

    $(document).ready(function() {
    
      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        editable: false,
        eventLimit: true, // allow "more" link when too many events
        events: {
          url: 'php/get-events.php',
          error: function() {
            $('#script-warning').show();
          }
        },
        loading: function(bool) {
          $('#loading').toggle(bool);
        }
      });
      
    });

  </script>
  <?php }} ?>

</body>
</html>