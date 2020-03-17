
            <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5 dashboard-content">
                    <div class="dashboard-header clearfix">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"><h4>Jual Ternakmu Disini!</h4></div>
                            <div class="col-sm-12 col-md-6">
                                <div class="breadcrumb-nav">
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="submit-address dashboard-list">
                        <form method="post" action="<?php echo base_url().'tambah_hewan/tambah' ?>" enctype="multipart/form-data">
                            <h4 class="bg-grea-3">Informasi Dasar</h4>
                            <div class="search-contents-sidebar">
                                <div class="row pad-2">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Filter</label>
                                            <select class="selectpicker search-fields" name="filter_hewan">
                                                <option>Sapi</option>
                                                <option>Kambing</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Jenis Hewan (Sapi/Kambing)</label>
                                            <input type="text" class="input-text" name="jenis_hewan" placeholder="Jenis Hewan">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <label>Tanggal:</label><br>
                                        <input id="datepicker" type="date" name="tanggal_tambah" width="270" />

                                    </div>
                                     <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Ukuran Hewan (P/L/T)</label>
                                            <input type="text" class="input-text" name="ukuran_hewan" placeholder="P/L/T">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Berat Hewan (Kg)</label>
                                            <input type="text" class="input-text" name="berat_hewan" placeholder="(Kg)">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="selectpicker search-fields" name="jenis_kelamin">
                                                <option>Jantan</option>
                                                <option>Betina</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Jenis Makanan (Combor/Alami)</label>
                                            <input type="text" class="input-text" name="jenis_makanan" placeholder="Combor/Alami">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Warna Hewan (Sapi/Kambing)</label>
                                            <input type="text" class="input-text" name="warna_hewan" placeholder="Warna Ternakmu">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Harga Hewan</label>
                                            <input type="text" class="input-text" name="harga_hewan" placeholder="Rp.">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Nama Pemilik</label>
                                            <input type="text" class="input-text" name="nama_pemilik" placeholder="Nama Pemilik">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="bg-grea-3">Lokasi Hewan</h4>
                            <div class="row pad-2">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Rt/Rw/Dusun/Desa</label>
                                        <input type="text" class="input-text" name="rtrw_penjual"  placeholder="Rt/Rw/Dusun/Desa">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Kabupaten/Kota</label>
                                        <input type="text" class="input-text" name="kabupaten_kota"  placeholder="Kab/Kota">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Kode Pos</label>
                                        <input type="text" class="input-text" name="kode_pos"  placeholder="Kode Pos">
                                    </div>
                                </div>
                            </div>
                            <h4 class="bg-grea-3">Tambah Gambar Hewan</h4>
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
                            <h4 class="bg-grea-3">Deskripsi Lengkap Tentang Hewan</h4>
                            <div class="row pad-20">
                                <div class="col-lg-12">
                                    <textarea class="input-text" name="deskripsi_hewan" placeholder="Tuliskan Disini"></textarea>
                                </div>
                            </div>
                            
                                 <div class="row pad-20" style="margin-left: 8%;" style="position: absolute;">
                                    <div class="col-lg-4 col-md-12 col-sm-12" style="margin-left: 70%; margin-top: -6%;">
                                        <br>
                                        <button class="btn btn-md button-theme">Jual Sekarang !</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <p class="sub-banner-2 text-center">© Dospi 2020.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard end -->

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