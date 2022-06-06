  <section id="banner">
   
  <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/12slide.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Sự đổi mới</h3> 
          <p>Chúng tôi tạo ra các cơ hội</p> 
           
                </div>
              </li>
              <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/33.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Chuyên môn</h3> 
          <p>Thành công phụ thuộc vào công việc</p> 
           
                </div>
              </li>
            </ul>
        </div>
  <!-- end slider -->
 
  </section> 
  <section id="call-to-action-2">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-sm-9">
          <h3>Hợp tác với các nhà lãnh đạo doanh nghiệp</h3>
          <p>Phát triển các mối quan hệ chiến lược, lâu dài, thành công giữa khách hàng và nhà cung cấp, dựa trên việc đạt được các thông lệ tốt nhất và lợi thế cạnh tranh bền vững. Trong mô hình đối tác kinh doanh, các chuyên gia nhân sự làm việc chặt chẽ với các nhà lãnh đạo doanh nghiệp và quản lý cấp cao để đạt được các mục tiêu chung của tổ chức.</p>
        </div>
       <!--  <div class="col-md-2 col-sm-3">
          <a href="#" class="btn btn-primary">Read More</a>
        </div> -->
      </div>
    </div>
  </section>
  
  <section id="content">
  
  
  <div class="container">
        <div class="row">
      <div class="col-md-12">
        <div class="aligncenter"><h2 class="aligncenter">Công ty</h2><!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt.. --></div>
        <br/>
      </div>
    </div>

    <?php 
      $sql = "SELECT * FROM `tblcompany`";
      $mydb->setQuery($sql);
      $comp = $mydb->loadResultList();


      foreach ($comp as $company ) {
        # code...
    
    ?>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-building-o"></i>
                <div class="info-blocks-in">
                    <h3><?php echo $company->COMPANYNAME;?></h3>
                    <!-- <p><?php echo $company->COMPANYMISSION;?></p> -->
                    <p>Địa chỉ :<?php echo $company->COMPANYADDRESS;?></p>
                    <p>Liên hệ :<?php echo $company->COMPANYCONTACTNO;?></p>
                </div>
            </div>

    <?php } ?> 
  </div>
  </section>
  
  <section class="section-padding gray-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title text-center">
            <h2 >Việc làm phổ biến</h2>  
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 ">
          <?php 
            $sql = "SELECT * FROM `tblcategory`";
            $mydb->setQuery($sql);
            $cur = $mydb->loadResultList();

            foreach ($cur as $result) {
              echo '<div class="col-md-3" style="font-size:15px;padding:5px">* <a href="'.web_root.'index.php?q=category&search='.$result->CATEGORY.'">'.$result->CATEGORY.'</a></div>';
            }

          ?>
        </div>
      </div>
 
    </div>
  </section>    
  <section id="content-3-10" class="content-block data-section nopad content-3-10">
  <div class="image-container col-sm-6 col-xs-12 pull-left">
    <div class="background-image-holder">

    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-6 col-xs-12 content">
        <div class="editContent">
          <h3>Khách hàng của chúng tôi</h3>
        </div>
        <div class="editContent"  style="height:235px;">
          <p> 
          Hiện nay chúng tôi có trên 500 khách hàng thân thiết từ các tập đoàn đa quốc gia, các công ty lớn trong nước sử dụng dịch vụ Executive Search, và hơn 5.000 công ty cam kết sử dụng dịch vụ tuyển dụng trực tuyển qua CareerLink.vn. Đây chính là minh chứng cho chất lượng dịch vụ và sự phấn đấu không ngừng của chúng tôi trong thời gian qua
          <br>
          Hiện nay, chúng tôi đã và đang hướng mọi nỗ lực vào việc cải thiện, nâng cao chất lượng dịch vụ, thu hút ngày càng nhiều ứng viên xuất sắc, kết nối tốt hơn mục tiêu nghề nghiệp. Để tri ân quý khách hàng, CareerLink cam kết phát triển, phấn đấu không ngừng để trở thành công ty tuyển dụng uy tín, người bạn đồng hành cùng doanh nghiệp và người lao động trong quá trình phát triển.
          </p>
        </div> 
      </div>
    </div><!-- /.row-->
  </div><!-- /.container -->
</section>
  
  <div class="about home-about">
        <div class="container">
            
            <div class="row">
              <div class="col-md-4">
                <!-- Heading and para -->
                <div class="block-heading-two">
                  <h3><span>Các chương trình</span></h3>
                </div>
                <p>Nhưng để bạn có thể hiểu rằng mọi lỗi lầm bẩm sinh đều là niềm vui khi buộc tội và ca ngợi nỗi đau, tôi sẽ mở ra toàn bộ vấn đề, và sẽ giải thích chính những điều đã được nói bởi người phát minh ra sự thật và như nó là kiến ​​trúc sư của cuộc sống may mắn. Vì không ai từ chối niềm vui bởi vì nó là niềm vui. <br> <br> Nhưng phát hiện ra cái lỗi cũ này thật là vui, chắc chưa nghe họ tố cáo chúng tôi.</p>
              </div>
              <div class="col-md-4">
                <div class="block-heading-two">
                  <h3><span>Tin mới nhất</span></h3>
                </div>    
                <!-- Accordion starts -->
                <div class="panel-group" id="accordion-alt3">
                 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
                  <div class="panel"> 
                  <!-- Panel heading -->
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
                      <i class="fa fa-angle-right"></i> #1
                      </a>
                    </h4>
                   </div>
                   <div id="collapseOne-alt3" class="panel-collapse collapse">
                    <!-- Panel body -->
                    <div class="panel-body">
                    Nhưng để bạn có thể hiểu rằng mọi lỗi lầm bẩm sinh đều là niềm vui khi buộc tội và ca ngợi nỗi đau, tôi sẽ mở ra toàn bộ vấn đề, và sẽ giải thích chính những điều đã được nói bởi người phát minh ra sự thật và như nó là kiến ​​trúc sư của cuộc sống may mắn. Không có niềm vui bởi vì niềm vui
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
                      <i class="fa fa-angle-right"></i> # 2
                      </a>
                    </h4>
                   </div>
                   <div id="collapseTwo-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                    Nhưng để bạn có thể hiểu rằng mọi lỗi lầm bẩm sinh đều là niềm vui khi buộc tội và ca ngợi nỗi đau, tôi sẽ mở ra toàn bộ vấn đề, và sẽ giải thích chính những điều đã được nói bởi người phát minh ra sự thật và như nó là kiến ​​trúc sư của cuộc sống may mắn. Không có niềm vui bởi vì niềm vui
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
                      <i class="fa fa-angle-right"></i>  # 3
                      </a>
                    </h4>
                   </div>
                   <div id="collapseThree-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                    Nhưng để bạn có thể hiểu rằng mọi lỗi lầm bẩm sinh đều là niềm vui khi buộc tội và ca ngợi nỗi đau, tôi sẽ mở ra toàn bộ vấn đề, và sẽ giải thích chính những điều đã được nói bởi người phát minh ra sự thật và như nó là kiến ​​trúc sư của cuộc sống may mắn. Không có niềm vui bởi vì niềm vui
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
                      <i class="fa fa-angle-right"></i>  # 4
                      </a>
                    </h4>
                   </div>
                   <div id="collapseFour-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                    Nhưng để bạn có thể hiểu rằng mọi lỗi lầm bẩm sinh đều là niềm vui khi buộc tội và ca ngợi nỗi đau, tôi sẽ mở ra toàn bộ vấn đề, và sẽ giải thích chính những điều đã được nói bởi người phát minh ra sự thật và như nó là kiến ​​trúc sư của cuộc sống may mắn. Không có niềm vui bởi vì niềm vui
                    </div>
                   </div>
                  </div>
                </div>
                <!-- Accordion ends -->
                
              </div>
              
              <div class="col-md-4">
                <div class="block-heading-two">
                  <h3><span>Chia sẻ từ khách hàng </span></h3>
                </div>  
                     <div class="testimonials">
                    <div class="active item">
                      <blockquote><p>Kể từ khi có trang website này tôi đã tìm kiếm được việc làm nhanh chóng ở doanh nghiệp tốt theo lĩnh vực mà mình đang theo đuổi</p></blockquote>
                      <div class="carousel-info">
                      <img alt="" src="plugins/home-plugins/img/service2.jpg" class="pull-left">
                      <div class="pull-left">
                        <span class="testimonials-name">Vương Đình Ninh</span>
                        <span class="testimonials-post"></span>
                      </div>
                      </div>
                    </div>
                  </div>
              </div>
              
            </div>
            
                        
             
            <br>
           
            </div>
            
          </div>