<?php include("header.php"); ?>
	<!--================ End Header Menu Area =================-->
 
    <!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
                <div class="blog-banner">
				<div class="text-center">
					<h1>加入新商品</h1>
				</div>
			</div>
    	</div>
	</section>
	<!-- ================ end banner area ================= -->
  
    <!--================Login Box Area =================-->
    <section class="login_box_area section-margin" style="margin: 80px 0;">
		<div class="container">
			<div class="row">
                <div class="col-lg-6">
					<div class="login_box_img">
                        <div class="hover">
                            <img id="preview_img" src="img/home/coffeebean.jpeg" style="width:400px;" alt="預覽上傳圖片"/>
                        </div>
					</div>
				</div>
				<div class="col-lg-6" style=" max-width: 1080px; margin: auto;">
					<div class="login_form_inner register_form_inner">
						<form  method="post" action="market_addproduct_process.php" style="max-width: 600px;" enctype="multipart/form-data">
                                <!-- id="registrform" class="row login_form" -->
                            <table class="formTable">
                                <tbody>
                                    <tr>
                                        <!-- <td>
                                            <img id="preview_upload" src="img/home/coffeebean.jpeg" width="200px"/>
                                        </td> -->
                                        <td>
                                            <tr>
                                                <th><label>商品名稱</label></th>
                                                <td>
                                                    <div class="col-md-12 form-group">
                                                    <input type="text" class="form-control" id="inputname"  name="product_name" placeholder="商品名稱" onfocus="this.placeholder = ''" onblur="this.placeholder = '商品名稱'">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label>產地</label></th>
                                                <td>
                                                    <div class="col-md-12 form-group">
                                                        <input type="text" class="form-control" name="product_place" placeholder="產地" onfocus="this.placeholder = ''" onblur="this.placeholder = '產地'">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label>處理法</label></th>
                                                <td>
                                                    <div class="col-md-12 form-group">
                                                        <input type="text" class="form-control" name="product_process" placeholder="處理法" onfocus="this.placeholder = ''" onblur="this.placeholder = '處理法'">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label>烘焙程度</label></th>
                                                <td>
                                                    <div class="col-md-12 form-group">
                                                        <select name="product_bake" id="roast">
                                                            <option value="淺焙">淺焙</option>
                                                            <option value="中焙">中焙</option>
                                                            <option value="重焙">重焙</option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label>風味</label></th>
                                                <td>
                                                    <div class="col-md-12 form-group">
                                                        <input type="text" class="form-control" name="product_flavor" placeholder="風味" onfocus="this.placeholder = ''" onblur="this.placeholder = '風味'">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label>商品描述</label></th>
                                                <td>
                                                    <div class="col-md-12 form-group">
                                                        <input type="text" class="form-control" name="product_description" placeholder="商品描述" onfocus="this.placeholder = ''" onblur="this.placeholder = '商品描述'">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><p>商品種類</p></th>
                                                <td style="text-align: left; padding-left: 5px;">
                                                    <input type="radio" id="bean" name="product_kind" value="coffeebean">
                                                    <label for="bean">咖啡豆</label><br>
                                                    <input type="radio" id="bag" name="product_kind" value="dripbagservice">
                                                    <label for="bag">濾掛包</label><br>
                                                    <input type="radio" id="customization" name="product_kind" value="customeservice">
                                                    <label for="customization">客製化服務</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label>商品單價</label></th>
                                                <td style="text-align:left;">
                                                    <div class="col-md-12 form-group">
                                                        <input type="number" name="product_price" placeholder="請輸入單價">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label>商品存量</label></th>
                                                <td style="text-align:left;">
                                                    <div class="col-md-12 form-group">
                                                        <input type="number" name="product_inventory" placeholder="請輸入數量">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <label for="product_image">上傳商品圖片<label>
                                                </th>
                                                <td>
                                                    <div class="col-md-12 form-group">
                                                        <input id ="product_img" name="product_img" type="file" accept="image/gif, image/jpeg, image/png"> 
                                                    </div>
                                                </td>
                                            </tr>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
							<br><br>
							
							<div class="col-md-12 form-group" style="margin-top: 20px;">
								<button   id = "buttonAlert" type="submit" value="submit" class="button button-register w-100" style="background:gray" >確定新增商品</button>
								<!-- <input id = "buttonAlert2" type="submit" value="註冊" disabled="disabled"> -->
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->



    <!--================ Start footer Area  =================-->	
	<footer class="footer">
		<div class="footer-area">
			<div class="container">
				<div class="row section_gap">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<!-- <h4 class="footer_title large_title">Our Mission</h4>
							<p>
								So seed seed green that winged cattle in. Gathering thing made fly you're no 
								divided deep moved us lan Gathering thing us land years living.
							</p>
							<p>
								So seed seed green that winged cattle in. Gathering thing made fly you're no divided deep moved 
							</p> -->
						</div>
					</div>
					<!-- <div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget instafeed">
							<h4 class="footer_title">Gallery</h4>
							<ul class="list instafeed d-flex flex-wrap">
								<li><img src="img/gallery/r1.jpg" alt=""></li>
								<li><img src="img/gallery/r2.jpg" alt=""></li>
								<li><img src="img/gallery/r3.jpg" alt=""></li>
								<li><img src="img/gallery/r5.jpg" alt=""></li>
								<li><img src="img/gallery/r7.jpg" alt=""></li>
								<li><img src="img/gallery/r8.jpg" alt=""></li>
							</ul>
						</div>
					</div> -->
					<div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Contact Us</h4>
							<div class="ml-40">
								<p class="sm-head">
									<span class="fa fa-location-arrow"></span>
									Head Office
								</p>
								<p>123, Main Street, Your City</p>
	
								<p class="sm-head">
									<span class="fa fa-phone"></span>
									Phone Number
								</p>
								<p>
									+123 456 7890 <br>
									+123 456 7890
								</p>
	
								<p class="sm-head">
									<span class="fa fa-envelope"></span>
									Email
								</p>
								<p>
									free@infoexample.com <br>
									www.infoexample.com
								</p>
							</div>
						</div>
          </div>
          <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Quick Links</h4>
							<ul class="list">
								<li><a href="#">Home</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Product</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">More Partners</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row d-flex">
					<p class="col-lg-12 footer-text text-center">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->
  


  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript">
    $("#product_img").change(function(){
    //預覽圖片功能
    readURL(this);   // this代表<input id="imgInp">
    });
    function readURL(input){
      if(input.files && input.files[0]){ //判斷是否有上傳檔案
        var reader = new FileReader(); //讀檔
        reader.onload = function (e) {   //讀出檔案去改變preview裡src屬性 完成預覽圖片
           $("#preview_img").attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>