<style>
     .capnhap{
            background-color: #FF4500;
            width: 100px;
            height: 50px;
            border-radius: 5px;
            border-color: #FF4500;
            color: #fff;

        }
        .capnhap:hover{
            background-color: brown;
        }
</style>
<form action="ClientController.php?act=dk" method="POST" enctype="multipart/form-data">
    <div class="sign-up-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="user-all-form">
                        <div class="contact-form">
                            <div class="section-title text-center">
                                <span class="sp-color">Đăng ký</span>
                                <h2>Tạo tài khoản!</h2>
                            </div>
                            
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <input type="text" name="ten_dang_nhap" id="name" class="form-control" required
                                                data-error="Please enter your Username" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" type="password" name="mat_khau"
                                                placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="ten_tai_khoan" id="email" class="form-control" required
                                                data-error="Please enter name" placeholder="Tên tài khoản">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="file" name="img_tai_khoan" id="email" class="form-control" required
                                                data-error="Please enter img" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <input type="text" name="sdt" id="name" class="form-control" required
                                                data-error="Please enter your phone" placeholder="SĐT">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required
                                                data-error="Please enter email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <input type="text" name="address" id="name" class="form-control" required
                                                data-error="Please enter your address" placeholder="Địa chỉ">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <input type="submit" class="capnhap"  value="Đăng ký" name="signup">
                                           
                                        <?php
                                            // var_dump($_SESSION['thongbao']);
                                        if (isset($_SESSION['thongbao'])) {
                                          echo '<div class="title" style="color:red; font-size:20px">' .$_SESSION['thongbao'] . '</div>';
                                          unset($_SESSION['thongbao']);
                                         }
                                         ?>
                                    </div>
                                    <div class="col-12">
                                        <p class="account-desc">
                                            Đã có tài khoản?
                                            <a href="ClientController.php?act=dangnhap">Đăng nhập</a>
                                        </p>
                                    </div>
                                </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>