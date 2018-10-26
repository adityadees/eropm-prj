  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/css/plugins/forms/switch.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/vendors/css/forms/toggle/switchery.min.css">
  <style type="text/css">

  .cssTable td 
  {
    vertical-align: middle;
  }
</style>
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0">Tambah Data</h3>
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item active">Tambah Data
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content-body">
      <section id="number-tabs">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Form Data</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-h font-medium-3"></i></a>
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
                  <form action="<?php echo base_url()?>padmin/save_data" id="form" name='autoSumForm'  method="POST" class="number-tab-steps wizard-circle">


                   <h6>Identitas Perusahaan</h6>
                   <fieldset>
                     <div class="form-group row">
                      <label class="col-md-4 text-right">Nama Perusahaan </label>
                      <div class="col-md-8">
                        <div class="form-group">
                          <input type="text" class="form-control" name="namper">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-4 text-right">Alamat Perusahaan </label>
                      <div class="col-md-8">
                        <div class="form-group">
                          <input type="text" class="form-control" name="alper">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-4 text-right">Nomor Telepon </label>
                      <div class="col-md-8">
                        <div class="form-group">
                          <input type="text" class="form-control" name="tel">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-4 text-right">Nomor Fax </label>
                      <div class="col-md-8">
                        <div class="form-group">
                          <input type="text" class="form-control" name="fax">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-4 text-right">Bidang Usaha atau Kegiatan </label>
                      <div class="col-md-8">
                        <div class="form-group">
                          <input type="text" class="form-control" name="bidang">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-4 text-right">Penanggung Jawab </label>
                      <div class="col-md-8">
                        <div class="form-group">
                          <input type="text" class="form-control" name="pj">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-4 text-right">Jabatan </label>
                      <div class="col-md-8">
                        <div class="form-group">
                          <input type="text" class="form-control" name="jabatan">
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <!-- Step 2 -->
                  <h6>Lokasi</h6>
                  <fieldset>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <strong for="input-label">Alamat</strong>
                          <input type="text" class="inputAddress input-xxlarge form-control" value="palembang" name="inputAddress" autocomplete="off" placeholder="Type in your address">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <strong for="input-label">Latitude</strong>
                          <input type="text" class="latitude form-control" value="latitude" name="latitude" readonly="readonly">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <strong for="input-label">Longitude</strong>
                          <input type="text" class="longitude form-control" value="longitude" name="longitude" readonly="readonly">
                        </div>
                      </div>

                    </div>
                  </fieldset>




                  <h6>Data</h6>
                  <fieldset>
                   <div class="row  match-height">


                    <div class="col-xl-12 col-lg-12">
                      <div class="card">
                        <div class="card-content">
                          <div class="card-body">
                            <ul class="nav nav-tabs nav-linetriangle ">
                              <li class="nav-item">
                                <a class="nav-link active" id="baseIcon-tab31" data-toggle="tab" aria-controls="tabIcon31"
                                href="#tabIcon31" aria-expanded="true"><i class="fa fa-play"></i> Tabel 2. Reklamasi Hutan</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="baseIcon-tab32" data-toggle="tab" aria-controls="tabIcon32"
                                href="#tabIcon32" aria-expanded="false"><i class="fa fa-flag"></i> Tabel 3. Produksi</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="baseIcon-tab33" data-toggle="tab" aria-controls="tabIcon33"
                                href="#tabIcon33" aria-expanded="false"><i class="fa fa-cog"></i> Tabel 4. Rehabilitasi</a>
                              </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                              <div role="tabpanel" class="tab-pane active" id="tabIcon31" aria-expanded="true"
                              aria-labelledby="baseIcon-tab31">

                              <?php foreach($katpenilaian->result_array() as $i): $kategori_id=$i['kategori_id']; ?>
                                <div class="col-xl-12 col-md-6 col-sm-12">
                                  <div class="card">
                                    <div class="card-content">
                                      <div class="card-header">
                                        <h4 class="card-title  text-center" style="max-height: 40px;padding-bottom: 40px; "><?php echo $i['kategori_judul']; ?></h4>
                                      </div>
                                      <hr>
                                      <p class="card-text">
                                        <div class="row text-center">
                                          <div class="col-md-3">
                                            Kegiatan <br> (Activities)
                                          </div>
                                          <div class="col-md-3">
                                            Bobot <br> (Score)
                                          </div>
                                          <div class="col-md-3">
                                            Nilai <br> (Value)
                                          </div>
                                          <div class="col-md-3">
                                            Total
                                          </div>
                                        </div>
                                      </p>

                                      <ul class="list-group list-group-flush">
                                        <?php 
                                        $bobot=0;
                                        $penilaian=$this->m_padmin->get_all_penilaian_by_katid($kategori_id);
                                        foreach ($penilaian->result_array() as $j) :
                                          $bobot+=$j['penilaian_bobot'];
                                          $penilaian_id=$j['penilaian_id'];
                                          ?>
                                          <?php if($j['penilaian_bobot']>0) {

                                            ?> 

                                            <div class="row " style="margin-bottom: 10px;">
                                              <div class="col-md-3">

                                               <?php echo $j['penilaian_judul'];  ?>
                                             </div>
                                             <div class="col-md-3 text-center">
                                              <?php echo $j['penilaian_bobot'];  ?>

                                              <input type="hidden" name="kateg[<?php echo $penilaian_id; ?>]" id="kateg<?php echo $penilaian_id; ?>"  >
                                              <input type='hidden' name='pbtarget<?php echo $penilaian_id; ?>' value="<?php echo $j['penilaian_bobot']; ?>" class="form-control" onFocus="startCalc();" onBlur="stopCalc();" />
                                            </div>
                                            <div class="col-md-3">
                                              <input type='text' name='pbreal<?php echo $penilaian_id; ?>' class="form-control" onFocus="startCalc();"  onBlur="stopCalc();" />
                                            </div>
                                            <div class="col-md-3">
                                             <input type='text' name="pbdevisi[<?php echo $kategori_id.$penilaian_id; ?>]" id='pbdevisi<?php echo $penilaian_id; ?>' class="form-control" onFocus="startCalc();"  onBlur="stopCalc();" readonly="readonly"/>
                                           </div>
                                         </div>


                                       <?php } else { 

                                        echo $j['penilaian_judul']; 
                                        $ccd=$this->m_padmin->get_sub_penilaian($penilaian_id);
                                        foreach ($ccd->result_array() as $k) {
                                          if($k['penilaian_id']==$j['penilaian_id']){
                                           ?>

                                           <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-md-3">
                                             <p style="margin-left: 20px;"><?php echo "- ".$k['subp_judul']; ?></p>
                                           </div>
                                           <div class="col-md-3 text-center">
                                            <?php echo $k['subp_bobot'];  ?>
                                            <input type="hidden" name="kategg[<?php echo $k['sub_pid'].$j['penilaian_id']; ?>]" id="kateg<?php echo $k['sub_pid'].$j['penilaian_id']; ?>"  >
                                            <input type='hidden' name='pbtarget<?php echo $k['sub_pid'].$j['penilaian_id']; ?>' class="form-control" onFocus="startCalc();" value="<?php echo $k['subp_bobot']; ?>" onBlur="stopCalc();" />
                                          </div>
                                          <div class="col-md-3">
                                           <input type='text' name='pbreal<?php echo $k['sub_pid'].$j['penilaian_id']; ?>' class="form-control" onFocus="startCalc();"  onBlur="stopCalc();" />
                                         </div>
                                         <div class="col-md-3">
                                          <input type='text' name="pbdevisi<?php echo $k['sub_pid'].$j['penilaian_id']; ?>" id='pbdevisi<?php echo $k['sub_pid'].$j['penilaian_id']; ?>' class="form-control" onFocus="startCalc();"  onBlur="stopCalc();" readonly="readonly" />  

                                        </div>
                                      </div>

                                      <?PHP 
                                    }
                                    ?>


                                    <?php  
                                  }
                                }?>


                              <?php endforeach; ?>

                            </ul>


                          <?php /*  <!-- BATAS !--><!-- BATAS !--><!-- BATAS !--><!-- BATAS !--><!-- BATAS !--><!-- BATAS !--><!-- BATAS !--><!-- BATAS !--><!-- BATAS !--><!-- BATAS !--><!-- BATAS !--><!-- BATAS 

                            <div class="card-body text-muted" style="margin-bottom: 15px;">
                              <span class="float-left">Total</span>
                              <span class="tags float-right">
                               <?php
                               $sumbot=$this->m_padmin->get_sum_bot($kategori_id);
                               $gsumbot=$sumbot->row_array();
                               ?>
                               <span class="badge badge-pill badge-success"> 
                                <?php
                                if($gsumbot['sumsubot']>0){
                                  echo $gsumbot['sumpenbot']+$gsumbot['sumsubot'];
                                } else {
                                 echo  $gsumbot['sumpenbot'];
                               }
                               ?> 
                             </span>
                           </span>
                         </div>
                         <?php */?>
                       </div>
                     </div>
                   </div>
                 <?php endforeach; ?>

               </div>

               <div class="tab-pane" id="tabIcon32" aria-labelledby="baseIcon-tab32">
                <?php 
                foreach($katpenilaian1->result_array() as $i): $kategori_id=$i['kategori_id']; ?>
                  <div class="col-xl-12 col-md-6 col-sm-12">
                    <div class="card">
                      <div class="card-content">
                        <div class="card-header">
                          <h4 class="card-title  text-center" style="max-height: 40px;padding-bottom: 40px; "><?php echo $i['kategori_judul']; ?></h4>
                        </div>
                        <hr>
                        <p class="card-text">
                          <div class="row text-center">
                            <div class="col-md-3">
                              Kegiatan <br> (Activities)
                            </div>
                            <div class="col-md-3">
                              Bobot <br> (Score)
                            </div>
                            <div class="col-md-3">
                              Nilai <br> (Value)
                            </div>
                            <div class="col-md-3">
                              Total
                            </div>
                          </div>
                        </p>

                        <ul class="list-group list-group-flush">
                          <?php 
                          $bobot=0;
                          $penilaian=$this->m_padmin->get_all_penilaian_by_katid($kategori_id);
                          foreach ($penilaian->result_array() as $j) :
                            $bobot+=$j['penilaian_bobot'];
                            $penilaian_id=$j['penilaian_id'];
                            ?>


                            <div class="row " style="margin-bottom: 10px;">
                              <div class="col-md-3">

                               <?php echo $j['penilaian_judul'];  ?>
                             </div>
                             <div class="col-md-3 text-center">
                              <?php echo $j['penilaian_bobot'];  ?>

                              <input type="hidden" name="kateg[<?php echo $penilaian_id; ?>]" id="kateg<?php echo $penilaian_id; ?>"  >
                              <input type='hidden' name='pbtarget<?php echo $penilaian_id; ?>' value="<?php echo $j['penilaian_bobot']; ?>" class="form-control" onFocus="startCalc();" onBlur="stopCalc();" />
                            </div>
                            <div class="col-md-3">
                              <input type='text' name='pbreal<?php echo $penilaian_id; ?>' class="form-control" onFocus="startCalc();"  onBlur="stopCalc();" />
                            </div>
                            <div class="col-md-3">
                             <input type='text' name="pbdevisi[<?php echo $kategori_id.$penilaian_id; ?>]" id='pbdevisi<?php echo $penilaian_id; ?>' class="form-control" onFocus="startCalc();"  onBlur="stopCalc();" readonly="readonly"/>
                           </div>
                         </div>

                       <?php endforeach; ?>

                     </ul>

                   </div>
                 </div>
               </div>
             <?php endforeach; ?>
           </div>
           <div class="tab-pane" id="tabIcon33" aria-labelledby="baseIcon-tab33">

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">

                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                      <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-content">
                    <div class="card-body card-dashboard">
                     <h4 class="card-title">Peraturan menteri yang berkaitan dengan rehabilitasi dan reklamasi lahan pasca-tambang di Indonesia dalam hubungannya dengan kriteria dan indikator restorasi ekologi</h4>
                     <p class="card-text">The ministerial regulations related to rehabilitation and reclamation of the post coal mining areas in Indonesia in relation to the ecological restoration criterias and indicators</p>
                   </div>
                   <div class="table-responsive">
                    <table class="table cssTable table-inverse table-bordered" style="table-layout: fixed;font-size:0.7em;">
                      <thead class="">
                        <tr class="border-double bg-warning bg-darken-3">
                          <?php 
                          foreach ($kategori->result_array() as $kat) : 
                            ?>
                            <td><?php echo $kat['kategori_judul']; ?></td>
                          <?php endforeach; ?>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $no=0;
                        foreach ($bagian->result_array() as $bag) : 
                          $no++;
                          $bagian_id=$bag['bagian_id'];
                          ?>
                          <tr class="border-double">
                            <td><?php echo $bag['bagian_judul']; ?></td>
                            <td>
                             <?php 
                             $subbag=$this->m_padmin->get_subbag_by_bagian($bagian_id);
                             foreach ($subbag->result_array() as $sub) : ?>
                              <div style="height:70px;text-align: center;"><?php if($sub['bagian_id']==$bagian_id){ echo $sub['subbag_judul'];} ?></div>
                            <?php endforeach; ?>
                          </td>
                          <td>
                           <?php 
                           $subbag=$this->m_padmin->get_subbag_by_bagian($bagian_id);
                           foreach ($subbag->result_array() as $sub) : 
                            $subbag_id=$sub['subbag_id'];
                            $kategori_id=3;
                            $selection=$this->m_padmin->get_selection_by_subbag($subbag_id,$kategori_id);
                            foreach ($selection->result_array() as $selc) : 
                              $selection_id=$selc['selection_id'];
                              ?>
                              <div style="height:70px;text-align: center;"> 
                                <?php
                                if($selc['subbag_id']==$subbag_id){ 
                                  if($selc['status']=='nonregulasi'){
                                    echo "Tidak diatur dalam regulasi";
                                  }
                                  else {
                                    echo "<input type='checkbox' name='selch[$selection_id]' class='switch' id='switch1'  data-group-cls='btn-group-sm' />";
                                  }
                                } 
                                ?>
                              </div>
                            <?php endforeach; ?>
                          <?php endforeach; ?>
                        </td>
                        <td>
                         <?php 
                         $subbag=$this->m_padmin->get_subbag_by_bagian($bagian_id);
                         foreach ($subbag->result_array() as $sub) : 
                          $subbag_id=$sub['subbag_id'];
                          $kategori_id=4;
                          $selection=$this->m_padmin->get_selection_by_subbag($subbag_id,$kategori_id);
                          foreach ($selection->result_array() as $selc) : 
                            $selection_id=$selc['selection_id'];
                            ?>
                            <div style="height:70px;text-align: center;">  <?php if($selc['subbag_id']==$subbag_id){ 
                              if($selc['status']=='nonregulasi'){
                                echo "Tidak diatur dalam regulasi";
                              }
                              else {
                               echo "<input type='checkbox' name='selch[$selection_id]' class='switch' id='switch1'  data-group-cls='btn-group-sm' />";
                             }
                           }  ?></div>
                         <?php endforeach; ?>
                       <?php endforeach; ?>
                     </td>
                     <td>
                       <?php 
                       $subbag=$this->m_padmin->get_subbag_by_bagian($bagian_id);
                       foreach ($subbag->result_array() as $sub) : 
                        $subbag_id=$sub['subbag_id'];
                        $kategori_id=5;
                        $selection=$this->m_padmin->get_selection_by_subbag($subbag_id,$kategori_id);
                        foreach ($selection->result_array() as $selc) : 
                          $selection_id=$selc['selection_id'];
                          ?>
                          <div style="height:70px;text-align: center;">   <?php if($selc['subbag_id']==$subbag_id){ 
                            if($selc['status']=='nonregulasi'){
                              echo "Tidak diatur dalam regulasi";
                            }
                            else {
                             echo "<input type='checkbox' name='selch[$selection_id]' class='switch' id='switch1'  data-group-cls='btn-group-sm' />";
                           }
                         }  ?></div>
                       <?php endforeach; ?>
                     <?php endforeach; ?>
                   </td>

                 </tr>
               <?php endforeach; ?>

             </tbody>
           </table>
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
</fieldset>
</form>
</div>
</div>
</div>
</div>
</div>
</section>

</div>
</div>
</div>
<script src="<?php echo base_url();?>assets/backend/vendors/js/vendors.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/backend/vendors/js/extensions/jquery.steps.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/backend/js/scripts/forms/wizard-steps.js" type="text/javascript"></script>

<script src="<?php echo base_url();?>assets/backend/vendors/js/forms/toggle/bootstrap-checkbox.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/backend/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/backend/js/scripts/forms/switch.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/map/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/map/jquery.addressPickerByGiro.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAogXD-AHrsmnWinZIyhRORJ84bgLwDPpg&sensor=false&language=id"></script>
<link href="<?php echo base_url(); ?>assets/map/jquery.addressPickerByGiro.css" rel="stylesheet" media="screen">
<script>
  $('.inputAddress').addressPickerByGiro({
    distanceWidget: true,
    boundElements: {
      'latitude': '.latitude',
      'longitude': '.longitude',
      'formatted_address': '.formatted_address'
    }
  });
</script>

<script type="text/javascript">
  function startCalc(){
    interval = setInterval("calc()",1);}
    function calc(){

      <?php
      foreach($katpenilaian->result_array() as $i): 
        $kategori_id=$i['kategori_id']; 
        $penilaian=$this->m_padmin->get_all_penilaian_by_katid($kategori_id);
        foreach ($penilaian->result_array() as $j) :
          $bobot+=$j['penilaian_bobot'];
          $penilaian_id=$j['penilaian_id'];
          if($j['penilaian_bobot']>0) {
            ?> 
            pbtarget<?php echo $penilaian_id; ?> = document.autoSumForm.pbtarget<?php echo $penilaian_id; ?>.value;
            pbreal<?php echo $penilaian_id; ?> = document.autoSumForm.pbreal<?php echo $penilaian_id; ?>.value;
            var cc=document.getElementById("pbdevisi<?php echo $penilaian_id; ?>").value = ((pbreal<?php echo $penilaian_id; ?>*1) * (pbtarget<?php echo $penilaian_id; ?>*1))/100  ;
            document.getElementById("kateg<?php echo $penilaian_id; ?>").value = cc+"/"+<?php echo $kategori_id;?>;
            <?php
          } else {
           $ccd=$this->m_padmin->get_sub_penilaian($penilaian_id);
           foreach ($ccd->result_array() as $k) {
            ?>
            pbtarget<?php echo $k['sub_pid'].$j['penilaian_id'];  ?> = document.autoSumForm.pbtarget<?php echo $k['sub_pid'].$j['penilaian_id'];  ?>.value;
            pbreal<?php echo $k['sub_pid'].$j['penilaian_id'];  ?> = document.autoSumForm.pbreal<?php echo $k['sub_pid'].$j['penilaian_id'];  ?>.value;
            var cc=document.getElementById("pbdevisi<?php echo $k['sub_pid'].$j['penilaian_id'];  ?>").value = ((pbreal<?php echo $k['sub_pid'].$j['penilaian_id'];  ?>*1) * (pbtarget<?php echo $k['sub_pid'].$j['penilaian_id'];  ?>*1))/100  ;
            document.getElementById("kateg<?php echo $k['sub_pid'].$j['penilaian_id']; ?>").value = cc+"/"+<?php echo $kategori_id;?>;

            <?php          
          } 
        } 
      endforeach;
    endforeach;
    ?>


    <?php
    foreach($katpenilaian1->result_array() as $i): 
      $kategori_id=$i['kategori_id']; 
      $penilaian=$this->m_padmin->get_all_penilaian_by_katid($kategori_id);
      foreach ($penilaian->result_array() as $j) :
        $bobot+=$j['penilaian_bobot'];
        $penilaian_id=$j['penilaian_id'];
        ?> 
        pbtarget<?php echo $penilaian_id; ?> = document.autoSumForm.pbtarget<?php echo $penilaian_id; ?>.value;
        pbreal<?php echo $penilaian_id; ?> = document.autoSumForm.pbreal<?php echo $penilaian_id; ?>.value;
        var cc=document.getElementById("pbdevisi<?php echo $penilaian_id; ?>").value = ((pbreal<?php echo $penilaian_id; ?>*1) * (pbtarget<?php echo $penilaian_id; ?>*1))/100  ;
        document.getElementById("kateg<?php echo $penilaian_id; ?>").value = cc+"/"+<?php echo $kategori_id;?>;

        <?php          

      endforeach;
    endforeach;
    ?>

  }
  function stopCalc(){
    clearInterval(interval);}

  </script>