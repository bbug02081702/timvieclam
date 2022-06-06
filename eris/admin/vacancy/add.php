
<?php
     if (!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }

?>
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST">

                <div class="row">
                   <div class="col-lg-12">
                      <h1 class="page-header">Thêm vị trí tuyển dụng mới</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                 </div> 

                 <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYNAME">Tên công ty:</label>

                      <div class="col-md-8">
                        <select class="form-control input-sm" id="COMPANYID" name="COMPANYID">
                          <option value="None">Chọn</option>
                          <?php 
                            $sql ="Select * From tblcompany";
                            $mydb->setQuery($sql);
                            $res  = $mydb->loadResultList();
                            foreach ($res as $row) {
                              # code...
                              echo '<option value='.$row->COMPANYID.'>'.$row->COMPANYNAME.'</option>';
                            }

                          ?>
                        </select>
                      </div>
                    </div>
                  </div>  

                     <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CATEGORY">Danh mục :</label>

                      <div class="col-md-8">
                        <select class="form-control input-sm" id="CATEGORY" name="CATEGORY">
                          <option value="None">Select</option>
                          <?php 
                            $sql ="Select * From tblcategory";
                            $mydb->setQuery($sql);
                            $res  = $mydb->loadResultList();
                            foreach ($res as $row) {
                              # code...
                              echo '<option value='.$row->CATEGORYID.'>'.$row->CATEGORY.'</option>';
                            }

                          ?>
                        </select>
                      </div>
                    </div>
                  </div>  
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "OCCUPATIONTITLE">Chức danh nghề nghiệp:</label> 
                      <div class="col-md-8">
                         <input class="form-control input-sm" id="OCCUPATIONTITLE" name="OCCUPATIONTITLE" placeholder="Occupation Title"   autocomplete="none"/> 
                      </div>
                    </div>
                  </div>  

                    <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "REQ_NO_EMPLOYEES">Bắt buộc không. nhân viên:</label> 
                      <div class="col-md-8">
                         <input class="form-control input-sm" id="REQ_NO_EMPLOYEES" name="REQ_NO_EMPLOYEES" placeholder="Required no. of Employees"   autocomplete="none"/> 
                      </div>
                    </div>
                  </div>  

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SALARIES">Lương:</label> 
                      <div class="col-md-8">
                         <input class="form-control input-sm" id="SALARIES" name="SALARIES" placeholder="Salary"   autocomplete="none"/> 
                      </div>
                    </div>
                  </div>  

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "DURATION_EMPLOYEMENT">Thời gian làm nghề:</label> 
                      <div class="col-md-8">
                         <input class="form-control input-sm" id="DURATION_EMPLOYEMENT" name="DURATION_EMPLOYEMENT" placeholder="Duration of Employment"   autocomplete="none"/> 
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "QUALIFICATION_WORKEXPERIENCE">Bằng cấp / Kinh nghiệm làm việc:</label> 
                      <div class="col-md-8">
                        <textarea class="form-control input-sm" id="QUALIFICATION_WORKEXPERIENCE" name="QUALIFICATION_WORKEXPERIENCE" placeholder="Qualification/Work Experience"   autocomplete="none"></textarea> 
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "JOBDESCRIPTION">Mô tả công việc:</label> 
                      <div class="col-md-8">
                        <textarea class="form-control input-sm" id="JOBDESCRIPTION" name="JOBDESCRIPTION" placeholder="Job Description"   autocomplete="none"></textarea> 
                      </div>
                    </div>
                  </div>  

                 <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "PREFEREDSEX">Tính:</label> 
                      <div class="col-md-8">
                          <select class="form-control input-sm" id="PREFEREDSEX" name="PREFEREDSEX">
                          <option value="None">Chọn</option>
                           <option>Nam</option>
                           <option>Nữ</option>
                           <option>Nam/Nữ</option>
                        </select>
                      </div>
                    </div>
                  </div>  

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SECTOR_VACANCY">Khu vực tuyển dụng:</label> 
                      <div class="col-md-8">
                        <textarea class="form-control input-sm" id="SECTOR_VACANCY" name="SECTOR_VACANCY" placeholder="Sector of Vacancy"   autocomplete="none"></textarea> 
                      </div>
                    </div>
                  </div>   
                  
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>  

                      <div class="col-md-8">
                         <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Lưu</button>
                      <!-- <a href="index.php" class="btn btn-info"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;<strong>Back</strong></a> -->
                     
                     </div>
                    </div>
                  </div> 
 
          
        </form>
      
 