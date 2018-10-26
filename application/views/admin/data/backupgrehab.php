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
        <h3 class="content-header-title mb-0">Table 4</h3>
      </div>
    </div>
    <div class="content-body">

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
              <table class="table cssTable table-inverse table-bordered" style="table-layout: fixed;font-size:0.8em;">
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
                        ?>
                        <div style="height:70px;text-align: center;"> 
                          <?php
                          if($selc['subbag_id']==$subbag_id){ 
                            if($selc['status']=='nonregulasi'){
                              echo "Tidak diatur dalam regulasi";
                            }
                            else {
                              echo "<i class='fa fa-check'></i>";
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
                      ?>
                      <div style="height:70px;text-align: center;">  <?php if($selc['subbag_id']==$subbag_id){ 
                        if($selc['status']=='nonregulasi'){
                          echo "Tidak diatur dalam regulasi";
                        }
                        else {
                          echo "<i class='fa fa-check'></i>";
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
                    ?>
                    <div style="height:70px;text-align: center;">   <?php if($selc['subbag_id']==$subbag_id){ 
                      if($selc['status']=='nonregulasi'){
                        echo "Tidak diatur dalam regulasi";
                      }
                      else {
                        echo "<i class='fa fa-check'></i>";
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