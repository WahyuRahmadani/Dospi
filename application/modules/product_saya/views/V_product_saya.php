<div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5">
                    <div class="dashboard-content">
                        <div class="dashboard-header clearfix">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"><h4>Produk Kami</h4></div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="breadcrumb-nav">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-list">
                            <h3>Daftar Produk Kami</h3>
                            <table class="manage-table">
                                <?php 
foreach ($tampil as $rey) {
    $id = $rey->id_datahewan;

 ?>

         <?= form_open_multipart('product_saya/edit');  ?>      
                                <tbody>
                                <tr class="responsive-table">
                                    <td class="listing-photoo">
                                        <img src="assets/img/properties/properties-1.jpg" alt="listing-photo" class="img-fluid">
                                    </td>
                                    <td class="title-container">
                                        <h2><a href="#"><?php echo $rey->nama_pemilik ?></a></h2>
                                        <h5 class="d-none d-xl-block d-lg-block d-md-block"><i class="flaticon-pin"></i> 3214 Sempu Banyuwangi, </h5>
                                        <h6 class="table-property-price">Rp. <?php echo $rey->harga_hewan ?></h6>
                                    </td>
                                    <td class="expire-date">6.01.2018</td>
                                    <td class="action">
                                        <a data-toggle="modal" data-target="#edit<?php echo $rey->id_datahewan ?>" style="margin-left: -20%;"><i class="fa fa-pencil"></i> Edit</a>
                                        <a data-toggle="modal" data-target="#hapus<?php echo $rey->id_datahewan ?>" style="margin-left: -20%;"><i class="fa fa-remove" ></i> Hapus</a>
                                    </td>
                                </tr>
                            </tbody>

<div class="modal fade" id="edit<?php echo $rey->id_datahewan ?>" style="top: 15%;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">


      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ubah Produk</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Nama Pemilik</label>
                        <input type="text" name="nama_pemilik" class="form-control"  value="<?php echo $rey->nama_pemilik; ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">RT/RW/Dusun/Desa</label>
                        <input type="text" name="rtrw_penjual" class="form-control"  value="<?php echo $rey->rt_rw; ?>">
                        
                    </div>
                </div>
                 <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Kabupaten/Kota</label>
                        <input type="text" name="kabupaten_kota" class="form-control" value="<?php echo $rey->kabupaten; ?>">
                       
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Ukuran Hewan (P/L/T)</label>
                        <input type="text" name="ukuran_hewan" class="form-control" value="<?php echo $rey->ukuran_hewan; ?>" >
                       
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Berat Hewan (Kg)</label>
                        <input type="text" name="berat_hewan" class="form-control"  value="<?php echo $rey->berat_hewan; ?>">
                    </div>
                </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Jenis Kelamin</label><br>
                            <div>
                                <input type="radio" id="jantan"
                                 name="jenis_kelamin" value="<?php echo $rey->jenis_kelamin; ?>">
                                <label for="jantan">jantan</label>

                                <input type="radio" id="betina"
                                 name="jenis_kelamin" value="<?php echo $rey->jenis_kelamin; ?>">
                                <label for="betina">betina</label>
                            </div>
                        </div>
                    </div>
    
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Jenis Makanan</label>
                        <input type="text" name="" class="form-control" value="">
                        
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Warna Hewan</label>
                        <input type="text" name="warna_hewan" class="form-control"  value="<?php echo $rey->warna_hewan; ?>">
                        
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Harga Hewan</label>
                        <input type="text" name="harga_hewan" class="form-control"  value="<?php echo $rey->harga_hewan; ?>">
                        
                    </div>
                </div>
                 <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">kode pos</label>
                        <input type="text" name="kode_pos" class="form-control"  value="<?php echo $rey->kode_pos; ?>">   
                    </div>
                </div><br><br><br>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="control-label">Deskripsi</label>
                        <textarea type="text" name="deskripsi_hewan" class="form-control" value="<?php echo $rey->deskripsi; ?>"></textarea>
                        
                    </div>
                </div>
            </div>
                            <div class="row pad-20">
                                <div class="col-md-4" class="form-group">
                                    <input class="form-control" type="file" name="gambar1" id="userfile" onchange="tampilkanPreview(this,'preview1')">
                                        <div class="col-md-6 " style="margin-top: 2%">
                                          <label for="" class="control-label">Gambar 1</label>
                                           <img id="preview1" width="150px" />
                                        </div>
                                </div>
                                <div class="col-md-4" class="form-group">
                                    <input class="form-control" type="file" name="gambar2" id="userfile" onchange="tampilkanPreview(this,'preview2')">
                                        <div class="col-md-6 " style="margin-top: 2%">
                                          <label for="" class="control-label">Gambar 2</label>
                                           <img id="preview2" width="150px" />
                                        </div>
                                </div>
                                <div class="col-md-4" class="form-group">
                                    <input class="form-control" type="file" name="gambar3" id="userfile" onchange="tampilkanPreview(this,'preview3')">
                                        <div class="col-md-6 " style="margin-top: 2%">
                                          <label for="" class="control-label">Gambar 3</label>
                                           <img id="preview3" width="150px" />
                                        </div>
                                </div>
                                <div class="col-md-4" class="form-group">
                                    <input class="form-control" type="file" name="gambar4" id="userfile" onchange="tampilkanPreview(this,'preview4')">
                                        <div class="col-md-6 " style="margin-top: 2%">
                                          <label for="" class="control-label">Gambar 4</label>
                                           <img id="preview4" width="150px" />
                                        </div>
                                </div>
                                <div class="col-md-4" class="form-group">
                                    <input class="form-control" type="file" name="gambar5" id="userfile" onchange="tampilkanPreview(this,'preview5')">
                                        <div class="col-md-6 " style="margin-top: 2%">
                                          <label for="" class="control-label">Gambar 5</label>
                                           <img id="preview5" width="150px" />
                                        </div>
                                </div>
                            </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-primary">Simpan Perubahan</button>
        </div>
      </div>
      <?= form_close(); ?>
    </div>
  </div>
</div>   



<div class="modal fade" id="hapus<?php echo $rey->id_datahewan ?>" style="top: 15%;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <center><h6>Apakah Anda yakin Untuk Menghapus Product ini ???</h6></center>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Hapus</button>
          <a class="btn btn-success" href="<?php echo base_url('product_saya/hapus/'. $rey->id_datahewan) ?>">batal</a>
        </div>      
        </div>
        <!-- Modal footer -->
      </div>
    </div>
  <?php } ?>                        
                            </table>
                        </div>
                    </div>
                    <p class="sub-banner-2 text-center">© 2020 Dospi.com.</p>
                </div>
            </div>

<script type="text/javascript">


function tampilkanPreview(userfile,idpreview)
{
  var gb = userfile.files;
  for (var i = 0; i < gb.length; i++)
  {
    var gbPreview = gb[i];
    var imageType = /image.*/;
    var preview=document.getElementById(idpreview);
    var reader = new FileReader();
    if (gbPreview.type.match(imageType))
    {
      //jika tipe data sesuai
      preview.file = gbPreview;
      reader.onload = (function(element)
      {
        return function(e)
        {
          element.src = e.target.result;
        };
      })(preview);
      //membaca data URL gambar
      reader.readAsDataURL(gbPreview);
    }
      else
      {
        //jika tipe data tidak sesuai
        alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
      }
  }
}
</script>


 