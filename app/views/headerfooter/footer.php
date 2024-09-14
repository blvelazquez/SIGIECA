</div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; IECA DashBoard 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
         <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

     <!-- Logout Modal-->
     <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
               <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <form action="app/views/login/store.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name='log' id='log' value='out'>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit">Logout</button>
                        <!-- <a class="btn btn-primary" href="../sigieca/app/views/login/store.php?log='out'">Logout</a> -->
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery (debe ir antes de Bootstrap JS) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <!-- Popper.js (necesario para Bootstrap) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Bootstrap core JavaScript-->
    <!-- <script src="assets/vendor/jquery/jquery.min.js"></script> -->
    <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

    <!-- -->
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.bootstrap4.js"></script>
    <!--  -->
    
</body>
</html>