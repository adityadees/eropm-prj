
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0">Table  3 </h3>
      </div>
    </div>
    <div class="content-body">

      <section id="content-types">
        <div class="row">
          <div class="col-12 mt-3 mb-1">
            <h4 class="text-uppercase">Pedoman penilaian reklamasi tahap produksi pada Peraturan Menteri ESDM Nomor 7 Tahun 2014</h4>
            <p>Guidance for reclamation evaluation at production phase in MInistrial Regulation of Energy and Mineral Resources (Peraturan Menteri ESDM Nomor 7 tahun 2014)</p>
          </div>
        </div>
        <div class="row match-height">
          <?php foreach($katpenilaian->result_array() as $i): $kategori_id=$i['kategori_id']; ?>
            <div class="col-xl-4 col-md-6 col-sm-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-header">
                    <h4 class="card-title  text-center" style="max-height: 40px;padding-bottom: 40px; "><?php echo $i['kategori_judul']; ?></h4>
                  </div>
                  <hr>
                  <p class="card-text">
                    <div class="col-md-12">
                      <span class=" float-right">Bobot<br>(score)</span>
                    </div>
                    <div class="col-md-8 ">
                      Kegiatan<br>(Activities)
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
                      <li class="list-group-item">
                        <?php if($j['penilaian_bobot']>0) {?> 
                          <span class="badge badge-default badge-pill bg-primary float-right">
                            <?php echo $j['penilaian_bobot']."%"; ?>
                          <?php } else {}?>
                        </span>
                        <?php 
                        echo $j['penilaian_judul']; 
                        $ccd=$this->m_padmin->get_sub_penilaian($penilaian_id);
                        $subot=0;
                        foreach ($ccd->result_array() as $k) {
                          if($k['penilaian_id']==$j['penilaian_id']){
                            echo '<ul class="list-group list-group-flush">
                            <li style="margin-left:30px;">
                            <span class="badge badge-default badge-pill bg-primary float-right">'.$k['subp_bobot']."%".'</span><div style="margin-left:10px;">'.$k['subp_judul'].
                            '</div></li>
                            </ul>';
                          }
                        }
                        ?>
                      </li>
                    <?php endforeach; ?>

                  </ul>
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
             </div>
           </div>
         </div>
       <?php endforeach; ?>
     </div>
   </section>
 </div>
</div>
</div>  