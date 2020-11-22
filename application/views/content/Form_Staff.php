<div class="page-content-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN Portlet PORTLET-->
                                    <div class="portlet light">
                           <form id="form_staff">
                              <h4> A. TARGET ACHIEVEMENT </h4>

                              <table border="1" class="table">
                                 <thead>
                                 <tr>
                                    <td colspan="6" align="center"> Program Kerja </td>
                                    <td colspan="4" align="center"> Laporan Hasil Kerja </td>
                                 </tr>
                                 <tr>
                                    <td>OBJECTIVE</td>
                                    <td>Key Result Area</td>
                                    <td>WEIGHT</td>
                                    <td colspan="2">TARGET (%)</td>
                                    <td>TRACKING METHOD</td>
                                    <td colspan="2">ACTUAL RESULT</td>
                                    <TD>PROBLEM</TD>
                                    <TD>SOLUSI</TD>
                                 </tr>
                                 <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>%</td>
                                    <td>Waktu</td>
                                    <td></td>
                                    <td>%</td>
                                    <td>Bobot</td>
                                    <td></td>
                                    <td></td>
                                 </tr>
                                 <tr>
                                    <td colspan="10">Pekerjaan Utama</td>
                                 </tr>
                                 </thead>
                                 <tbody>
                                    
                                 </tbody>
                              </table>

                              <h4> B. PERSONEL EFFECTIVENESS </h4>                                       
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
                                       <tr>
                                          <td width="40">1</td>
                                          <td rowspan="3" width="200">ACT WITH INTEGRITY <br>
                                             Kata Kunci :
                                             Honesty,
                                             Loyalty,
                                             Trusthworthy,
                                             Effective
                                             Communication,
                                             Customer Focus
                                          </td>
                                          <td width="500">
                                             Tidak melakukan
                                             pelanggaran yang
                                             menimbulkan sanksi
                                             etika dan
                                             kedisiplinan
                                          </td>
                                          <td width="70">
                                             3
                                          </td>
                                          <td width="30" align="center">
                                            <div class="form-group">
                                             <?= form_textarea('Personal[prsn_target_1_1]', $user_detail->alamat ?? '', [
                                                'class' => 'form-control',
                                                'id' => 'prsn_target_1_1',
                                                'style' => 'resize:none;width:120px;height:100px'
                                             ]); ?>
                                          </div> 
                                          </td>
                                          <td width="70" align="center">
                                             <div class="form-group">
                                             <?= form_textarea('Personal[prsn_persen_1_1]', $user_detail->alamat ?? '', [
                                                'class' => 'form-control',
                                                'id' => 'prsn_persen_1_1',
                                                'style' => 'resize:none;width:120px;height:100px'
                                             ]); ?>
                                          </div> 
                                          </td>
                                          <td width="70" align="center">
                                             <div class="form-group">
                                             <?= form_textarea('Personal[prsn_score_1_1]', $user_detail->alamat ?? '', [
                                                'class' => 'form-control',
                                                'id' => 'prsn_score_1_1',
                                                'style' => 'resize:none;width:120px;height:100px'
                                             ]); ?>
                                          </div> 
                                          </td>
                                       </tr>
                                       <tr>
                                          <td></td>
                                          <td width="600">
                                             Standar layanan
                                          prima yang rapi,
                                          sangat cepat, dan
                                          tuntas dengan zero
                                          complain dan zero
                                          defec
                                          </td>
                                          <td>
                                             3
                                          </td>
                                          <td width="30" align="center">
                                            <div class="form-group">
                                             <?= form_textarea('Personal[prsn_target_1_2]', $user_detail->alamat ?? '', [
                                                'class' => 'form-control',
                                                'id' => 'prsn_target_1_2',
                                                'style' => 'resize:none;width:120px;height:100px'
                                             ]); ?>
                                          </div> 
                                          <td width="70" align="center">
                                             <div class="form-group">
                                             <?= form_textarea('Personal[prsn_persen_1_2]', $user_detail->alamat ?? '', [
                                                'class' => 'form-control',
                                                'id' => 'prsn_persen_1_2',
                                                'style' => 'resize:none;width:120px;height:100px'
                                             ]); ?>
                                          </div>
                                          <td width="70" align="center">
                                             <div class="form-group">
                                             <?= form_textarea('Personal[prsn_score_1_2]', $user_detail->alamat ?? '', [
                                                'class' => 'form-control',
                                                'id' => 'prsn_score_1_2',
                                                'style' => 'resize:none;width:120px;height:100px'
                                             ]); ?>
                                          </div>
                                       </tr>
                                       <tr>
                                          <td></td>
                                          <td width="600">
                                             Standar layanan
                                          prima yang rapi,
                                          sangat cepat, dan
                                          tuntas dengan zero
                                          complain dan zero
                                          defec
                                          </td>
                                          <td>
                                             3
                                          </td>
                                          <td width="30" align="center">
                                            <div class="form-group">
                                             <?= form_textarea('Personal[prsn_target_1_3]', $user_detail->alamat ?? '', [
                                                'class' => 'form-control',
                                                'id' => 'prsn_target_1_3',
                                                'style' => 'resize:none;width:120px;height:100px'
                                             ]); ?>
                                          </div> 
                                          <td width="70" align="center">
                                             <div class="form-group">
                                             <?= form_textarea('Personal[prsn_persen_1_3]', $user_detail->alamat ?? '', [
                                                'class' => 'form-control',
                                                'id' => 'prsn_persen_1_3',
                                                'style' => 'resize:none;width:120px;height:100px'
                                             ]); ?>
                                          </div>
                                          <td width="70" align="center">
                                             <div class="form-group">
                                             <?= form_textarea('Personal[prsn_score_1_3]', $user_detail->alamat ?? '', [
                                                'class' => 'form-control',
                                                'id' => 'prsn_score_1_3',
                                                'style' => 'resize:none;width:120px;height:100px'
                                             ]); ?>
                                          </div>
                                       </tr>
                                       <tr>
                                          <td width="40">2</td>
                                          <td rowspan="3" width="200">ACHIEVEMENT<br>
                                             Kata Kunci :
                                             Self Confidence
                                             Adaptability to
                                             Change
                                             Stress Tolerance
                                          </td>
                                          <td width="600">
                                             Berani menghadapi
                                             dan menerima
                                             tantangan baru dan
                                             memiliki dorongan
                                             untuk mencapai hasil
                                             dan sukses,
                                             menunjukan rasa
                                             urgensi dan
                                             menuntaskan
                                             pekerjaan serta
                                             dapat bertahan
                                             untuk dapat
                                             melakukan sesuatu
                                             walaupun
                                             menghadapi
                                             hambatan.
                                             Memberikan
                                             sumbangsih ide atau
                                             metode untuk
                                             kemajuan lembaga,
                                             dibuktikan dengan
                                             adanya dokumen
                                          </td>
                                          <td>
                                             3
                                          </td>
                                          <td width="30" align="center">
                                            <div class="form-group">
                                             <?= form_textarea('Personal[prsn_target_2_1]', $user_detail->alamat ?? '', [
                                                'class' => 'form-control',
                                                'id' => 'prsn_target_2_1',
                                                'style' => 'resize:none;width:120px;height:100px'
                                             ]); ?>
                                          </div> 
                                          <td width="70" align="center">
                                             <div class="form-group">
                                             <?= form_textarea('Personal[prsn_persen_2_1]', $user_detail->alamat ?? '', [
                                                'class' => 'form-control',
                                                'id' => 'prsn_persen_2_1',
                                                'style' => 'resize:none;width:120px;height:100px'
                                             ]); ?>
                                          </div>
                                          <td width="70" align="center">
                                             <div class="form-group">
                                             <?= form_textarea('Personal[prsn_score_2_1]', $user_detail->alamat ?? '', [
                                                'class' => 'form-control',
                                                'id' => 'prsn_score_2_1',
                                                'style' => 'resize:none;width:120px;height:100px'
                                             ]); ?>
                                          </div>
                                       </tr>
                                       <tr>
                                          <td></td>
                                          <td width="600">
                                             Menunjukan fleksibilitas dan
                                             adaptibilitas dalam
                                             menghadapi
                                             perubahan
                                             lingkungan, prioritas
                                             permintaan, dan
                                             tuntutan pekerjaan
                                          </td>
                                          <td>
                                             2
                                          </td>
                                          <td width="30" align="center">
                                            <div class="form-group">
                                             <?= form_textarea('Personal[prsn_target_2_2]', $user_detail->alamat ?? '', [
                                                'class' => 'form-control',
                                                'id' => 'prsn_target_2_2',
                                                'style' => 'resize:none;width:120px;height:100px'
                                             ]); ?>
                                          </div> 
                                          <td width="70" align="center">
                                             <div class="form-group">
                                             <?= form_textarea('Personal[prsn_persen_2_2]', $user_detail->alamat ?? '', [
                                                'class' => 'form-control',
                                                'id' => 'prsn_persen_2_2',
                                                'style' => 'resize:none;width:120px;height:100px'
                                             ]); ?>
                                          </div>
                                          <td width="70" align="center">
                                             <div class="form-group">
                                             <?= form_textarea('Personal[prsn_score_2_2]', $user_detail->alamat ?? '', [
                                                'class' => 'form-control',
                                                'id' => 'prsn_score_2_2',
                                                'style' => 'resize:none;width:120px;height:100px'
                                             ]); ?>
                                          </div>
                                       </tr>
                                       <tr>
                                          <td></td>
                                          <td width="600">
                                             Mengendalikan
                                             emosi yang potensial
                                             dapat mengganggu
                                             pekerjaan agar
                                             terkendali, tetap
                                             tenang dan tidak
                                             goyah dalam
                                             tekanan, serta
                                             menanggapi situasi
                                             stress secara
                                             konstruktif
                                          </td>
                                          <td>
                                             2
                                          </td>
                                          <td width="30" align="center">
                                            <div class="form-group">
                                             <?= form_textarea('Personal[prsn_target_2_3]', $user_detail->alamat ?? '', [
                                                'class' => 'form-control',
                                                'id' => 'prsn_target_2_3',
                                                'style' => 'resize:none;width:120px;height:100px'
                                             ]); ?>
                                          </div> 
                                          <td width="70" align="center">
                                             <div class="form-group">
                                             <?= form_textarea('Personal[prsn_persen_2_3]', $user_detail->alamat ?? '', [
                                                'class' => 'form-control',
                                                'id' => 'prsn_persen_2_3',
                                                'style' => 'resize:none;width:120px;height:100px'
                                             ]); ?>
                                          </div>
                                          <td width="70" align="center">
                                             <div class="form-group">
                                             <?= form_textarea('Personal[prsn_score_2_3]', $user_detail->alamat ?? '', [
                                                'class' => 'form-control',
                                                'id' => 'prsn_score_2_3',
                                                'style' => 'resize:none;width:120px;height:100px'
                                             ]); ?>
                                          </div>
                                       </tr>          
                                 </tbody>
                              </table>

                              <h4> C. CORPORATE CULTURE </h4>
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
                                                <tr>
                                                   <td>1</td>
                                                   <td>Zakat 2,5 %</td>
                                                   <td>Membayar zakat setiap bulan</td>
                                                   <td>2</td>
                                                   <td align="center">
                                                   <div class="form-group">
                                                      <?= form_input('Personal[corp_target_1_1]',''
                                                      ,[
                                                         'class' => 'form-control',
                                                         'id' => 'id_job_title',
                                                         'style' => 'width:100px;'
                                                      ]); ?>                  
                                                   </div>
                                                   </td>
                                                   <td align="center">
                                                   <div class="form-group">
                                                      <?= form_input('Personal[corp_nilai_1_2]',''
                                                      ,[
                                                         'class' => 'form-control',
                                                         'id' => 'id_job_title',
                                                         'style' => 'width:100px;'
                                                      ]); ?>                  
                                                   </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>2</td>
                                                   <td>Itikaf / Ta’lim </td>
                                                   <td>1 kali setiap bulan / 2 kali setiap bulan</td>
                                                   <td>2</td>
                                                   <td align="center">
                                                   <div class="form-group">
                                                      <?= form_input('Personal[corp_target_2_1]',''
                                                      ,[
                                                         'class' => 'form-control',
                                                         'id' => 'id_job_title',
                                                         'style' => 'width:100px;'
                                                      ]); ?>                  
                                                   </div>
                                                   </td>
                                                  <td align="center">
                                                   <div class="form-group">
                                                      <?= form_input('Personal[corp_nilai_2_2]',''
                                                      ,[
                                                         'class' => 'form-control',
                                                         'id' => 'id_job_title',
                                                         'style' => 'width:100px;'
                                                      ]); ?>                  
                                                   </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>3</td>
                                                   <td>Yasinan Bersama</td>
                                                   <td>4 kali dalam sebulan</td>
                                                   <td>2</td>
                                                   <td align="center">
                                                   <div class="form-group">
                                                      <?= form_input('Personal[corp_target_3_1]',''
                                                      ,[
                                                         'class' => 'form-control',
                                                         'id' => 'id_job_title',
                                                         'style' => 'width:100px;'
                                                      ]); ?>                  
                                                   </div>
                                                   </td>
                                                   <td align="center">
                                                   <div class="form-group">
                                                      <?= form_input('Personal[corp_nilai_3_2]',''
                                                      ,[
                                                         'class' => 'form-control',
                                                         'id' => 'id_job_title',
                                                         'style' => 'width:100px;'
                                                      ]); ?>                  
                                                   </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>4</td>
                                                   <td>Resume Buku</td>
                                                   <td>1 buku sebulan</td>
                                                   <td>2</td>
                                                   <td align="center">
                                                   <div class="form-group">
                                                      <?= form_input('Personal[corp_target_4_1]',''
                                                      ,[
                                                         'class' => 'form-control',
                                                         'id' => 'id_job_title',
                                                         'style' => 'width:100px;'
                                                      ]); ?>                  
                                                   </div>
                                                   </td>
                                                   <td align="center">
                                                   <div class="form-group">
                                                      <?= form_input('Personal[corp_nilai_4_2]',''
                                                      ,[
                                                         'class' => 'form-control',
                                                         'id' => 'id_job_title',
                                                         'style' => 'width:100px;'
                                                      ]); ?>                  
                                                   </div>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>

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
                                                <tr>
                                                   <td>1</td>
                                                   <td>Attendance Effectiveness</td>
                                                   <td>Sesuai hari kerja efektif dan Peraturan Perijinan dari LP3I</td>
                                                   <td>15</td>
                                                   <td align="center">
                                                   <div class="form-group">
                                                      <?= form_input('Personal[target_1]',''
                                                      ,[
                                                         'class' => 'form-control',
                                                         'id' => 'id_job_title',
                                                         'style' => 'width:100px;'
                                                      ]); ?>                  
                                                   </div>
                                                   </td>
                                                   <td align="center">
                                                   <div class="form-group">
                                                      <?= form_input('Personal[nilai_1]',''
                                                      ,[
                                                         'class' => 'form-control',
                                                         'id' => 'id_job_title',
                                                         'style' => 'width:100px;'
                                                      ]); ?>                  
                                                   </div>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>

                                    <button type="submit" id="btn-save-staff" class="btn btn-success">Simpan</button>
                                    </form>
                                    </div>
                                    <!-- END Portlet PORTLET-->
                                </div>
                            </div>
</div>
