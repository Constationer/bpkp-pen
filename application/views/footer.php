            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
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
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
            <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Select2 -->
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

            <!-- Page level plugins -->
            <script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
            <script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
            <script src="<?= base_url('assets/vendor/datatables/dataTables.fixedColumns.min.js') ?>"></script>

            <!-- Page level custom scripts -->
            <script src="<?= base_url('assets/js/demo/datatables-demo.js') ?>"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

            <script>
                $(document).ready(function() {
                    $('.js-dropdown-basic').select2({
                        placeholder: "Pilih Pemda",
                        allowClear: true,
                        width: '100%'
                    });
                });
            </script>
            <script>
                var nilai = document.getElementById('acc_nilai');
                nilai.addEventListener('keyup', function(e) {
                    nilai.value = formatRupiah(this.value, 'Rp. ');
                });

                var nilai = document.getElementById('usulan_nilai');
                nilai.addEventListener('keyup', function(e) {
                    nilai.value = formatRupiah(this.value, 'Rp. ');
                });

                /* Fungsi formatRupiah */
                function formatRupiah(angka, prefix) {
                    var number_string = angka.replace(/[^,\d]/g, '').toString(),
                        split = number_string.split(','),
                        sisa = split[0].length % 3,
                        rupiah = split[0].substr(0, sisa),
                        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                    if (ribuan) {
                        separator = sisa ? '.' : '';
                        rupiah += separator + ribuan.join('.');
                    }

                    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
                }
            </script>
            </body>

            </html>