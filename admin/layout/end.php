				
			</div>

</div>
<!--end page wrapper -->
<!--start overlay-->
<div class="overlay toggle-icon"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
<!-- <footer class="page-footer">
  <p class="mb-0">Copyright Design © Nqaha. All right reserved Developed by Petra MS</p>
</footer> -->
</div>
<!--end wrapper-->


<!-- Bootstrap JS -->
 
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="../assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="../assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<!-- Vector map JavaScript -->
<script src="../assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="../assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- <script src="../assets/plugins/chartjs/chart.min.js"></script> -->
<!-- <script src="../assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script> -->
<script src="../assets/js/dashboard-analytics.js"></script>
<!--app JS-->
<script src="../assets/js/app.js"></script>

<script>
new PerfectScrollbar('.dashboard-top-countries');
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
var menuItems = document.querySelectorAll('.has-arrow');
menuItems.forEach(function(menuItem) {
  menuItem.addEventListener('click', function() {
    var submenu = this.nextElementSibling;
    if (submenu.classList.contains('mm-show')) {
      submenu.classList.remove('mm-show');
      submenu.classList.add('mm-collapse');
    } else {
      submenu.classList.remove('mm-collapse');
      submenu.classList.add('mm-show');
    }
  });
});
});
</script>
</body>

</html>