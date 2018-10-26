 <style>
 #map {
  height: 100%;
}
</style>

<?php   $dd=$data->row_array(); ?>
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-body">

      <div class="row match">
        <div class="col-xl-4 col-lg-4 col-12">
          <div class="card">
            <div class="card-content">
              <div class="media align-items-stretch">
                <div class="p-2 text-center  bg-amber bg-darken-2">
                  <h5 class="font-large-1 white">
                    <div class='badge badge-pill bg-blue-grey bg-darken-2'>
                      <?php echo number_format($xtab2,2)."%" ?>
                    </div>
                  </h5>
                  <h5 class="text-white text-bold-400 font-medium-3">
                    Reklamasi
                  </h5>
                </div>
                <div class="p-2 bg-gradient-x-amber white media-body">
                  <h5 class="text-bold-400 mb-0 font-small-2">Pedoman penilaian reklamasi hutan pada (Permenhut Nomor P.60/Menhut-II/2009)<br><br><br><br></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-12">
          <div class="card">
            <div class="card-content">
              <div class="media align-items-stretch">
                <div class="p-2 text-center  bg-danger bg-darken-2">
                 <h5 class="font-large-1 white">
                  <div class='badge badge-pill bg-blue-grey bg-darken-2'>
                    <?php echo number_format($xtab3,2)."%" ?>
                  </div>
                </h5>
                <h5 class="text-white text-bold-400 font-medium-3">
                  Produksi
                </h5>
              </div>
              <div class="p-2 bg-gradient-x-danger white media-body">
                <h5 class="text-bold-400 mb-0  font-small-2">Pedoman penilaian reklamasi tahap produksi pada (Peraturan Menteri ESDM Nomor 7 tahun 2014)<br><br><br><br></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-12">
        <div class="card">
          <div class="card-content">
            <div class="media align-items-stretch">
              <div class="p-2 text-center bg-blue bg-darken-2">
                <h5 class="font-large-1 white">
                  <div class='badge badge-pill bg-blue-grey bg-darken-2'>
                    <?php echo $dd['hasil_selch']."%"; ?>
                  </div>
                </h5>
                <h5 class="text-white text-bold-400 font-medium-3">
                  Rehabilitasi
                </h5>
              </div>
              <div class="p-2 bg-gradient-x-blue white media-body">
              <h5 class="text-bold-400 mb-0 font-small-2">
                Permen yang berkaitan dengan rehabilitasi dan reklamasi lahan pasca-tambang di indonesia dalam hubungannya dengan kriteria dan indikator restorasi ekologi
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row match-height">
    <div class="col-md-12 col-sm-12">
      <div class="card">
        <div class="card-header card-head-inverse   bg-blue-grey bg-darken-3">
          <h4 class="card-title"><?php echo $dd['perusahaan_nama']; ?></h4>
          <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
              <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
              <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="card-content collapse show">
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <div class="card text-white box-shadow-0  bg-blue-grey bg-darken-1">
                  <div class="card-content">
                    <div class="row">
                      <div class="col-xl-8 col-lg-12">
                        <div id="map" style="height: 500px;max-width: 100%; width:190" ></div>
                      </div>
                      <div class="col-xl-4 col-lg-12">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-xl-12 col-lg-4 col-sm-12 pl-1">
                              <div class="media">
                                <div class="media-body text-center font-medium-2">
                                  <span class="text-bold-500">
                                    <i class="fa fa-map-marker warning"></i>
                                    <br><?php echo $dd['lokasi_alamat']; ?>
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-12 col-lg-4 col-sm-12">
                              <div class="sales">
                                <div class="sales-today mb-1 font-medium-1">
                                  <p class="mt-2">
                                    <div class="row">
                                      <div class="col">
                                        <span class="text-left">Latitude</span>
                                      </div>
                                      <div class="col">
                                        <span class="sucess float-right"><?php echo $dd['lokasi_lat']; ?></span>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col">
                                        <span class="text-left">Longitude</span>
                                      </div>
                                      <div class="col">
                                        <span class=" float-right"><?php echo $dd['lokasi_long']; ?></span>
                                      </div>
                                    </div>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-xl-12 col-lg-4 col-sm-12 pl-1">
                              <div class="media">
                                <div class="media-body text-center font-medium-2">
                                  <span class="text-bold-500">
                                    <i class="fa fa-building warning"></i>
                                    <br><?php echo $dd['perusahaan_nama']; ?>
                                    <br><?php echo $dd['perusahaan_alamat']; ?>
                                    <br><div class="font-small-2">Tel:<?php echo $dd['perusahaan_tel']; ?>; Fax:<?php echo $dd['perusahaan_fax']; ?> </div>
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-12 col-lg-4 col-sm-12">
                              <div class="sales">
                                <div class="sales-today mb-1 font-small-2">
                                  <p class="mt-2">
                                    <div class="row">
                                      <div class="col">
                                        <span class="text-left">Penanggung Jawab</span>
                                      </div>
                                      <div class="col">
                                        <span class="sucess float-right"><?php echo $dd['perusahaan_pj']; ?></span>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col">
                                        <span class="text-left">Jabatan</span>
                                      </div>
                                      <div class="col">
                                        <span class="sucess float-right"><?php echo $dd['perusahaan_jabatan']; ?></span>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col">
                                        <span class="text-left">Perusahaan Bidang</span>
                                      </div>
                                      <div class="col">
                                        <span class="sucess float-right"><?php echo $dd['perusahaan_bidang']; ?></span>
                                      </div>
                                    </div>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>




</div>
</div>
</div>


<script>
  function initMap() {

    var myLatLng = {lat: <?php echo $dd['lokasi_lat'];?>, lng: <?php echo $dd['lokasi_long'];?>};

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: myLatLng
    });

    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'Hello World!'
    });
  }
</script>
