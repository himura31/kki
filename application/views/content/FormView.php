<div class="page-content-inner">
   <style type="text/css">
      textarea,
      select {
          width: 100%;
          padding: 2px 5px;
          margin: 2px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 2px;
          box-sizing: border-box;
      }
   </style>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN Portlet PORTLET-->
                                    <div class="portlet light">

                              <h4> A. TARGET ACHIEVEMENT </h4>
                              <table border="1" class="table">
                                 <thead>
                                 <tr>
                                    <td colspan="6" align="center"> Program Kerja </td>
                                    <td colspan="4" align="center"> Laporan Hasil Kerja </td>
                                 </tr>
                                 <tr>
                                    <td align="center">OBJECTIVE</td>
                                    <td align="center">Key Result Area</td>
                                    <td align="center">WEIGHT</td>
                                    <td colspan="2" align="center">TARGET (%)</td>
                                    <td align="center">TRACKING METHOD</td>
                                    <td colspan="2" align="center">ACTUAL RESULT</td>
                                    <td align="center">PROBLEM</td>
                                    <td align="center">SOLUSI</td>
                                 </tr>
                                 <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td width="80px" align="center">%</td>
                                    <td width="80px" align="center">Waktu</td>
                                    <td></td>
                                    <td width="80px" align="center">%</td>
                                    <td width="80px" align="center">Bobot</td>
                                    <td></td>
                                    <td></td>
                                 </tr>
                                 <tr>
                                    <td colspan="9">Pekerjaan Utama</td>
                                    <td align="left">Tambah Data <button id="tambah" class="btn btn-info btn-sm ml-3"> Add </button></td>
                                 </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                    <td><textarea id="objek"></textarea></td>
                                    <td><textarea id="key"></textarea></td>
                                    <td><textarea id="weight"></textarea></td>
                                    <td><textarea id="target_persen"></textarea></td>
                                    <td><textarea id="target_waktu"></textarea></td>
                                    <td><textarea id="track"></textarea></td>
                                    <td><textarea id="actual_persen"></textarea></td>
                                    <td><textarea id="actual_bobot"></textarea></td>
                                    <td><textarea id="problem"></textarea></td>
                                    <td><textarea id="solusi"></textarea></td>
                                 </tr>
                                 </tbody>
                              </table>
                              <table id="table_baris" border="1" class="table"></table>
                              
                              <button class="btn btn-success mb-5" id="btn-achievement">Simpan Achievement</button>

										<h4> B. MANAGERIAL COMPETENCY </h4>                                       
										<table border="1" class="table" id="table_tes">	
											<thead>
                                       		<tr>
                                       			<td align="center">No</td>
                                       			<td align="center">Indicator</td>
                                       			<td align="center">Key Result</td>
                                       			<td align="center">Bobot</td>
                                       			<td align="center">Target</td>
                                       			<td colspan="2" align="center">Pencapaian</td>
                                       		</tr>
                                       		<tr>
                                       			<td></td>
                                       			<td></td>
                                       			<td></td>
                                       			<td></td>
                                       			<td></td>
                                       			<td align="center">%</td>
                                       			<td align="center">Score</td>
                                       		</tr>
                                       		</thead>
                                       		<tbody>
                                       			<?php 
                                       				$bobot =0;
                                       				$no=1;
                                                   $no_id=1;
                                                   $no_id_2=1;
                                                   foreach ($form_managerial as $key => $value){ 
                                       				$bobot = $bobot + $value['bobot'];
                                       				$target = $value['target'];
                                       				?>
                                       				<tr>
                                       					<td width="50"><?php echo $no++ ?></td>
                                       					<td width="200"><?php echo '<b>'.$value['indicator'].'</b></br>'.$value['kata_kunci']?></td>
                                       					<td width="300"><?php echo $value['key_result'] ?></td>
                                       					<td width="70"><?php echo $value['bobot'] ?></td>
                                       					<td width="70"><?php echo $value['target'] ?></td>
                                       					<td width="150" align="center">
                                                         <!-- <textarea style="resize:none;height:80px;"></textarea> -->
                                                         <div class="form-group">
                                                            <?= form_textarea('Personal[]', $user_detail->alamat ?? '', [
                                                               'class' => 'form-control',
                                                               'id' => 'mngr_persen'.$no_id++,
                                                               'style' => 'resize:none;width:120px;height:100px'
                                                            ]); ?>
                                                         </div> 
                                                      </td>
                                       					<td width="150" align="center">
<!--                                                          <textarea style="resize:none;height:80px;"></textarea> -->
                                                         <div class="form-group">
                                                            <?= form_textarea('Personal[]', $user_detail->alamat ?? '', [
                                                               'class' => 'form-control',
                                                               'id' => 'mngr_score'.$no_id_2++,
                                                               'style' => 'resize:none;width:120px;height:100px'
                                                            ]); ?>
                                                         </div> 
                                                      </td>
                                       				</tr>
                                       			<?php } ?>
                                       			<tr>
                                       				<td colspan="3" align="center"> Subtotal </td>
                                       				<td><?php echo $bobot ?></td>
                                       				<td><?php echo $target ?></td>
                                       				<td></td>
                                       				<td></td>
                                       			</tr>
                                       		</tbody>
                                       	</table>

                                          <button class="btn btn-success mb-5" id="btn-managerial">Simpan Managerial Competency</button>

                                       	<h4> C. PERSONEL EFFECTIVENESS </h4>
                                       	<table border="1" class="table">	
         											<thead>
                                       		<tr>
                                       			<td align="center">No</td>
                                       			<td align="center">Indicator</td>
                                       			<td align="center">Key Result</td>
                                       			<td align="center">Bobot</td>
                                       			<td align="center">Target</td>
                                       			<td colspan="2" align="center">Pencapaian</td>
                                       		</tr>
                                       		<tr>
                                       			<td></td>
                                       			<td></td>
                                       			<td></td>
                                       			<td></td>
                                       			<td></td>
                                       			<td align="center">%</td>
                                       			<td align="center">Score</td>
                                       		</tr>
                                       		</thead>
                                       		<tbody>
                                       			<?php 
                                       				$bobot =0;
                                                   $no_id=1;
                                                   $no_id_2=1;
                                       				$no=1; foreach ($form_personal as $key => $value){ 
                                       				$bobot = $bobot + $value['bobot'];
                                       				$target = $value['target'];
                                       				?>
                                       				<tr>
                                       					<td width="50"><?php echo $no++ ?></td>
                                       					<td width="200"><?php echo '<b>'.$value['indicator'].'</b></br>'.$value['kata_kunci']?></td>
                                       					<td width="300"><?php echo $value['key_result'] ?></td>
                                       					<td width="70"><?php echo $value['bobot'] ?></td>
                                       					<td width="70"><?php echo $value['target'] ?></td>
                                                      <td width="150" align="center">
                                                         <!-- <textarea style="resize:none;height:80px;"></textarea> -->
                                                         <div class="form-group">
                                                            <?= form_textarea('Personal[]', $user_detail->alamat ?? '', [
                                                               'class' => 'form-control',
                                                               'id' => 'prsn_persen'.$no_id++,
                                                               'style' => 'resize:none;width:120px;height:100px'
                                                            ]); ?>
                                                         </div> 
                                                      </td>
                                                      <td width="150" align="center">
<!--                                                          <textarea style="resize:none;height:80px;"></textarea> -->
                                                         <div class="form-group">
                                                            <?= form_textarea('Personal[]', $user_detail->alamat ?? '', [
                                                               'class' => 'form-control',
                                                               'id' => 'prsn_score'.$no_id_2++,
                                                               'style' => 'resize:none;width:120px;height:100px'
                                                            ]); ?>
                                                         </div> 
                                                      </td>
                                       				</tr>
                                       			<?php } ?>
                                       			<tr>
                                       				<td colspan="3" align="center"> Subtotal </td>
                                       				<td><?php echo $bobot ?></td>
                                       				<td><?php echo $target ?></td>
                                       				<td></td>
                                       				<td></td>
                                       			</tr>
                                       		</tbody>
                                       	</table>
                                          <button class="btn btn-success mb-5" id="btn-personal">Simpan Personal Efectiveness</button>

                                       	<h4> D. ABSENSE </h4>
                                       	<table border="1" class="table">	
											          <thead>
                                       		<tr>
                                       			<td align="center">No</td>
                                       			<td align="center">Indicator</td>
                                       			<td align="center">Key Result</td>
                                       			<td align="center">Bobot</td>
                                       			<td align="center">Target</td>
                                       			<td align="center">NILAI DARI DIRI SENDIRI</td>
                                       		</tr>
                                       		</thead>
                                       		<tbody>
                                       			<?php 
                                       				$bobot =0;
                                                   $no_id=1;
                                       				$no=1; foreach ($form_corporate as $key => $value){ 
                                       				$bobot = $bobot + $value['bobot'];
                                       				$target = $value['target'];
                                       				?>
                                       				<tr>
                                       					<td width="50"><?php echo $no++ ?></td>
                                       					<td width="200"><?php echo '<b>'.$value['indicator'].'</b>'?></td>
                                       					<td width="300"><?php echo $value['key_result'] ?></td>
                                       					<td width="70"><?php echo $value['bobot'] ?></td>
                                       					<td width="70"><?php echo $value['target'] ?></td>
                                       					<td width="150" align="center">
                                                         <!-- <textarea style="resize:none;height:80px;"></textarea> -->
                                                         <div class="form-group">
                                                            <?= form_textarea('Personal[]', $user_detail->alamat ?? '', [
                                                               'class' => 'form-control',
                                                               'id' => 'absense_persen'.$no_id++,
                                                               'style' => 'resize:none;width:120px;height:100px'
                                                            ]); ?>
                                                         </div> 
                                                      </td>
                                       				</tr>
                                       			<?php } ?>
                                       			<tr>
                                       				<td colspan="3" align="center"> Subtotal </td>
                                       				<td><?php echo $bobot ?></td>
                                       				<td><?php echo $target ?></td>
                                       				<td></td>
                                       			</tr>
                                       		</tbody>
                                       	</table>
                                          <button class="btn btn-success mb-5" id="btn-absense">Simpan Absense</button>
                                       	<h4> E. CORPORATE CULTURE </h4>
                                       	<table border="1" class="table">	
											          <thead>
                                       		<tr>
                                       			<td align="center">No</td>
                                       			<td align="center">Indicator</td>
                                       			<td align="center">Key Result</td>
                                       			<td align="center">Bobot</td>
                                       			<td align="center">Target</td>
                                       			<td align="center">NILAI DARI DIRI SENDIRI</td>
                                       		</tr>
                                       		</thead>
                                       		<tbody>
                                       			<?php 
                                       				$bobot =0;
                                                   $no_id =1;
                                       				$no=1; foreach ($form_absense as $key => $value){ 
                                       				$bobot = $bobot + $value['bobot'];
                                       				$target = $value['target'];
                                       				?>
                                       				<tr>
                                       					<td width="50"><?php echo $no++ ?></td>
                                       					<td width="200"><?php echo '<b>'.$value['indicator'].'</b>'?></td>
                                       					<td width="300"><?php echo $value['key_result'] ?></td>
                                       					<td width="70"><?php echo $value['bobot'] ?></td>
                                       					<td width="70"><?php echo $value['target'] ?></td>
                                       					<td width="150" align="center">
                                                         <!-- <textarea style="resize:none;height:80px;"></textarea> -->
                                                         <div class="form-group">
                                                            <?= form_textarea('Personal[]', $user_detail->alamat ?? '', [
                                                               'class' => 'form-control',
                                                               'id' => 'crpt_persen'.$no_id++,
                                                               'style' => 'resize:none;width:120px;height:100px'
                                                            ]); ?>
                                                         </div> 
                                                      </td>
                                       				</tr>
                                       			<?php } ?>
                                       			<tr>
                                       				<td colspan="3" align="center"> Subtotal </td>
                                       				<td><?php echo $bobot ?></td>
                                       				<td><?php echo $target ?></td>
                                       				<td></td>
                                       			</tr>
                                       		</tbody>
                                       	</table>
                                    <button class="btn btn-success mb-5" id="btn-corporate">Simpan Corporate Culture</button>
                                    </form>
                                    </div>
                                    <!-- END Portlet PORTLET-->
                                </div>
                            </div>
</div>
