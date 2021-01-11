<?php 
    $username = $this->session->userdata('nama');
    $level = $this->session->userdata('level');
    $kode = $this->session->userdata('kode');
    $email = $this->session->userdata('email');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creative Audio Pekanbaru</title>
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/ecommerce/css/bootstrap.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/ecommerce/css/font-awesome.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/ecommerce/css/elegant-icons.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/ecommerce/css/nice-select.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/ecommerce/css/jquery-ui.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/ecommerce/css/owl.carousel.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/ecommerce/css/slicknav.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/ecommerce/css/style.css'); ?>" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href=""><img src="<?php echo base_url('assets/ecommerce/img/logo.png'); ?>" alt=""></a>
        </div>
        <div class="humberger__menu__widget">
            <?php if($username=='' && $level==''){ ?>
                <div class="header__top__right__auth">
                    <a href="<?php echo base_url('Main_Ctrl/login'); ?>"><i class="fa fa-user"></i> Login &nbsp;&nbsp;</a>
                </div> |
                <div class="header__top__right__auth">
                    <a href="<?php echo base_url('Main_Ctrl/register'); ?>">&nbsp;&nbsp;<i class="fa fa-user-plus"></i> Register</a>
                </div>
            <?php }else{ ?>
                <div class="header__top__right__auth">
                    <a href="<?php echo base_url('Main_Ctrl'); ?>"><i class="fa fa-user"></i> Halo, <?=$username?> &nbsp;&nbsp;</a>
                </div> |
				<div class="header__top__right__auth">
					<a href="<?php echo base_url('Main_Ctrl/change_password'); ?>"><i class="fa fa-lock"></i> Password &nbsp;&nbsp;</a>
				</div> |
                <div class="header__top__right__auth">
                    <a href="<?php echo base_url('Main_Ctrl/logout'); ?>">&nbsp;&nbsp;<i class="fa fa-user"></i> Logout</a>
                </div>
            <?php } ?>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
				<li><a href="<?php echo base_url('Main_Ctrl'); ?>">Beranda</a>
				<li><a href="<?php echo base_url('Main_Ctrl/about'); ?>">Tentang Kami</a>
				<li><a href="<?php echo base_url('Main_Ctrl/keranjang'); ?>">Keranjang</a>
				<li><a href="<?php echo base_url('Main_Ctrl/history'); ?>">Riwayat</a>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="humberger__menu__contact">
            <ul>
				<li><i class="fa fa-phone"></i> 08127682535</li>
				<li><i class="fa fa-envelope"></i> creativeaudio@gmail.com</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-phone"></i> 08127682535</li>
                                <li><i class="fa fa-envelope"></i> creativeaudiopku@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <?php if($username=='' && $level==''){ ?>
                                <div class="header__top__right__auth">
                                    <a href="<?php echo base_url('Main_Ctrl/login'); ?>"><i class="fa fa-user"></i> Login &nbsp;&nbsp;</a>
                                </div> |
                                <div class="header__top__right__auth">
                                    <a href="<?php echo base_url('Main_Ctrl/register'); ?>">&nbsp;&nbsp;<i class="fa fa-user-plus"></i> Register</a>
                                </div>
                            <?php }else{ ?>
                                <div class="header__top__right__auth">
                                    <a href="<?php echo base_url('Main_Ctrl'); ?>"><i class="fa fa-user"></i> Halo, <?=$username?> &nbsp;&nbsp;</a>
                                </div> |
								<div class="header__top__right__auth">
                                    <a href="<?php echo base_url('Main_Ctrl/change_password'); ?>"><i class="fa fa-lock"></i> Password &nbsp;&nbsp;</a>
                                </div> |
                                <div class="header__top__right__auth">
                                    <a href="<?php echo base_url('Main_Ctrl/logout'); ?>">&nbsp;&nbsp;<i class="fa fa-user"></i> Logout</a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="#"><img src="<?php echo base_url('assets/ecommerce/img/logo.png'); ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="<?php echo base_url('Main_Ctrl'); ?>">Beranda</a>
                            <li><a href="<?php echo base_url('Main_Ctrl/about'); ?>">Tentang Kami</a>
                            <li><a href="<?php echo base_url('Main_Ctrl/keranjang'); ?>">Keranjang</a>
				            <li><a href="<?php echo base_url('Main_Ctrl/history'); ?>">Riwayat</a>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="<?php echo base_url('Main_Ctrl/keranjang'); ?>"><i class="fa fa-shopping-bag"></i> <span>
                                <?php
                                    if($kode != ''){
                                        $query = $this->db->query('SELECT * FROM tbl_transaksi WHERE aktif="0" AND id_user="'.$kode.'"');
                                        echo $query->num_rows();
                                    }
                                ?>
                            </span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories" id="kategori">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Kategori Produk</span>
                        </div>
                        <ul>
                            <li><a href="<?php echo base_url('Main_Ctrl/kategori_produk/Alarm'); ?>">Alarm</a></li>
                            <li><a href="<?php echo base_url('Main_Ctrl/kategori_produk/Audio'); ?>">Audio</a></li>
                            <li><a href="<?php echo base_url('Main_Ctrl/kategori_produk/TV'); ?>">TV</a></li>
                            <li><a href="<?php echo base_url('Main_Ctrl/kategori_produk/Klakson'); ?>">Klakson</a></li>
                            <li><a href="<?php echo base_url('Main_Ctrl/kategori_produk/Sarung_Stir'); ?>">Sarung Stir</a></li>
                            <li><a href="<?php echo base_url('Main_Ctrl/kategori_produk/Wiper'); ?>">Wiper</a></li>
                         </ul>
						<div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Kategori Mobil</span>
                        </div>
                        <ul>
                            <li><a href="<?php echo base_url('Main_Ctrl/kategori_mobil/All'); ?>">All</a></li>
                            <!-- <li><a href="<?php echo base_url('Main_Ctrl/kategori_mobil/Daihatsu'); ?>">Daihatsu</a></li>
                            <li><a href="<?php echo base_url('Main_Ctrl/kategori_mobil/Honda'); ?>">Honda</a></li>
                            <li><a href="<?php echo base_url('Main_Ctrl/kategori_mobil/Hyundai'); ?>">Hyundai</a></li>
                            <li><a href="<?php echo base_url('Main_Ctrl/kategori_mobil/Mitsubishi'); ?>">Mitsubishi</a></li>
                            <li><a href="<?php echo base_url('Main_Ctrl/kategori_mobil/Suzuki'); ?>">Suzuki</a></li>
                            <li><a href="<?php echo base_url('Main_Ctrl/kategori_mobil/Toyota'); ?>">Toyota</a></li> -->
                          </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form method="POST" action="<?php echo base_url('Main_Ctrl/pencarian'); ?>">
                                <div class="hero__search__categories">
                                    Pencarian
                                </div>
                                <input type="text" name="cari" placeholder="Apa yang kamu butuhkan?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                    </div>
                    <div class="hero__item set-bg" id="banner" data-setbg="<?php echo base_url('assets/ecommerce/img/Banner1.jpg'); ?>">
                        <div class="hero__text">
                            <span></span>
                            <h2><br/></h2>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->