<style>
#map {
  height: 100%;
}
</style>

<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0">Data </h3>
      </div>
    </div>
    <div class="content-body">
      <div class="row">
        <div class="col-xl-12 col-lg-12">
         <div class="card-content collapse show">
          <div class="row">
            <div class="col-12">
              <div class="card text-white box-shadow-0">
                <div class="card-content">
                  <div class="card-body">
                    <div id="map" style="height: 500px;max-width: 100%; width:190" ></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"><a class="btn btn-primary" href="<?php echo base_url(); ?>formdata">Tambah Data</a></h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                <li><a data-action="close"><i class="ft-x"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content collapse show">
            <div class="card-body card-dashboard">
              <p><?php echo $this->session->flashdata('msg');  ?></p>
              <table class="table table-striped table-bordered complex-headers">
                <thead>
                  <tr>
                    <th>Kode</th>
                    <th>Perusahaan</th>
                    <th>Lokasi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($data->result_array() as $i) :
                    $hasil_kode=$i['hasil_kode'];
                    ?>
                    <tr>
                      <td><?php echo $hasil_kode; ?></td>
                      <td><?php echo $i['perusahaan_nama']; ?></td>
                      <td><?php echo $i['lokasi_alamat']; ?></td>
                      <td class=" text-center"><a href="<?php echo base_url();?>data/detail/<?php echo $hasil_kode; ?>"><i class="fa fa-eye"></i></a></td>
                    </tr>
                  <?php endforeach; ?>
                </table>
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

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 5,
      center: {lat: -1.4552612, lng: 118.1975095}
    });

        var labels = '';
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
          {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }
      var locations = [
      <?php
      foreach ($data->result_array() as $j) :
        $lat=$j['lokasi_lat'];
        $long=$j['lokasi_long'];
        ?>
        {lat: <?php echo $lat;?>, lng: <?php echo $long; ?>},
      <?php endforeach; ?>

      ]
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
