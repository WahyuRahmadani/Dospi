 <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5 dashboard-content">

                    <!-- Range Date Picker -->

                    <div class="row">
                        <div class="col-sm-3">
                            <div class="container">
                                Start Date: <input id="startDate" width="250" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="container">
                                End Date: <input id="endDate" width="250" />
                            </div>
                        </div>
                   </div>
                    <script>
                        var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
                        $('#startDate').datepicker({
                            uiLibrary: 'bootstrap4',
                            iconsLibrary: 'fontawesome',
                            minDate: today,
                            maxDate: function () {
                                return $('#endDate').val();
                            }
                        });
                        $('#endDate').datepicker({
                            uiLibrary: 'bootstrap4',
                            iconsLibrary: 'fontawesome',
                            minDate: function () {
                                return $('#startDate').val();
                            }
                        });
                    </script><br>

                    <!-- End Range Date Picker -->
                
                    <!-- modal Detail Faktur -->
                        <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table table-condensed">
                                                        <thead class="bg-active">
                                                        <tr>
                                                            <td>No:</td>
                                                            <td>No.Order: </td>
                                                            <td class="text-center">Ditagih ke:</td>
                                                            <td class="text-center">Metode Pembayaran:</td>
                                                            <center><td>&nbsp;&nbsp;&nbsp;Detail:</td></center>
                                                            <td>Tanggal:</td>
                                                            <td>Action</td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td><strong>1</strong></td>
                                                            <td>001</td>
                                                            <td class="text-center">King Zainal Aladin</td>
                                                            <td class="text-center">Deposit</td>
                                                            <td><a href="faktur-pembelian.html" type="button" class="btn  btn-outline-warning"><strong>Detail</strong></a></td>
                                                            <td>16-02-2020</td>
                                                            <td><a data-toggle="modal" data-target="#hapuslistfaktur" style="color: red; margin-left: 15%;"><i class="fa fa-trash fa-lg"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>2</strong></td>
                                                            <td>002</td>
                                                            <td class="text-center">King Zainal Aladin</td>
                                                            <td class="text-center">Deposit</td>
                                                            <td><a href="faktur-pembelian.html" type="button" class="btn  btn-outline-warning"><strong>Detail</strong></a></td>
                                                            <td>16-02-2020</td>
                                                            <td><a data-toggle="modal" data-target="#hapuslistfaktur" style="color: red; margin-left: 15%;"><i class="fa fa-trash fa-lg"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>3</strong></td>
                                                            <td>003</td>
                                                            <td class="text-center">King Zainal Aladin</td>
                                                            <td class="text-center">Deposit</td>
                                                            <td><a href="faktur-pembeli.html" type="button" class="btn  btn-outline-warning"><strong>Detail</strong></a></td>
                                                            <td>16-02-2020</td>
                                                            <td><a data-toggle="modal" data-target="#hapuslistfaktur" style="color: red; margin-left: 15%;"><i class="fa fa-trash fa-lg"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>4</strong></td>
                                                            <td>004</td>
                                                            <td class="text-center">King Zainal Aladin</td>
                                                            <td class="text-center">Deposit</td>
                                                            <td><a href="faktur-pembelian.html" type="button" class="btn  btn-outline-warning"><strong>Detail</strong></a></td>
                                                            <td>16-02-2020</td>
                                                            <td><a data-toggle="modal" data-target="#hapuslistfaktur" style="color: red; margin-left: 15%;"><i class="fa fa-trash fa-lg"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>5</strong></td>
                                                            <td>005</td>
                                                            <td class="text-center">King Zainal Aladin</td>
                                                            <td class="text-center">Deposit</td>
                                                            <td><a href="faktur-pembelian.html" type="button" class="btn  btn-outline-warning"><strong>Detail</strong></a></td>
                                                            <td>16-02-2020</td>
                                                            <td><a data-toggle="modal" data-target="#hapuslistfaktur" style="color: red; margin-left: 15%;"><i class="fa fa-trash fa-lg"></i></a></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- Beli Start -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                        <!-- end Modal Faktur -->
                    </div>
                    <p class="sub-banner-2 text-center">© Dospi 2020.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard End -->


        <!-- The Modal hapus -->
    <div class="modal fade" id="hapuslistfaktur" style="top: 15%;">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                 <!-- Modal Header -->
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                                                                    
                 <!-- Modal body -->
                <div class="modal-body">
                    <center><h6>Apakah Anda yakin Ingin Menghapus Daftar Ini ?
                </div>
                                                                    
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">Hapus</button>

                </div>
            </div>
        </div>
    </div>
    <!-- the end modal hapus -->
