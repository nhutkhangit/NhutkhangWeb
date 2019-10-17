<nav id="customnav " class="navbar navbar-fixed-top navbar-default" role="navigation">

    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style="text-align:center;">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a id="menu1_hplHomeBrand" class="navbar-brand" href="./"><img id="menu1_imglogo" src="assets/images/JTXWLKVJ7N-153215052019.png" style="height:55px;border-width:0px;" /></a>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul id="navbar-right-custom" class="nav navbar-nav navbar-right">
                <li><a id="menu1_hplHome" href="./">Trang chủ</a></li>
                <li class="dropdown mega-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sản phẩm <span class="caret"></span></a>
                    <div class="dropdown-menu mega-dropdown-menu">
                        <div class="container-fluid">
                            <!-- Tab panes -->

                            <ul class="nav-list list-inline">

                                <?php
                                    foreach ($product_items as $value) {
                                        ?>
                                        <li>
                                            <a class="title-product-home" href="?product=<?=$value['id']?>">
                                                <img src="upload/slider/<?=$value['images']?>" style="width:200px;border-width:0px;" />

                                                <br /> <?=$value['name']?></a>

                                        </li>
                                        <?php
                                    }
                                ?> 
                            </ul>
                        </div>

                    </div>
                </li>
                <li>
                    <a id="menu1_hplBangGia" href="bang-gia/">Bảng giá</a>
                </li>

                <li>
                    <a href="/tin-tuc/">
                                        Tin tức
                                    </a>
                </li>

                <li>
                    <a href="/khuyen-mai/">
                                        Khuyến mãi
                                    </a>
                </li>

                <li><a id="menu1_hplGioiThieu" href="gioi-thieu/">Giới thiệu</a></li>
                <li>
                    <a id="menu1_hplLienHe" href="?contact">Liên hệ</a>
                </li>

                <li style="background-color: #505459;border-radius: 5px;">
                    <a href="#" data-toggle="modal" data-target="#puBaoGia"> <span style="color:#fff">Báo giá</span> </a>
                </li>

            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>