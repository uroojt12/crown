<!doctype html>
<html>

    <head>
        <title><?=$page_title?></title>
        <?php $this->load->view('includes/site-master'); ?>
    </head>

    <body id="home-page">
        <?php $this->load->view('includes/header'); ?>
        <main>


            <section id="banner" class="flexBox">
                <div class="flexDv">
                    <div class="contain">
                        <div class="outer">
                            <div class="content">
                                <h1><?php echo $row['section1_title']; ?>
                                    <span><?php echo $row['section1_second_title']; ?>
                                        <strong><?php echo $row['section1_bold_title']; ?></strong></span></h1>
                                <p><?php echo $row['section1_detail']; ?>
                                    <strong><?php echo $row['section1_price']; ?></strong></p>
                                <div class="bTn">
                                    <a href="<?php echo $row['section1_link_url']; ?>"
                                        class="webBtn colorBtn"><?php echo $row['section1_link_title']; ?></a>
                                </div>
                            </div>
                            <div class="image"><img
                                    src="<?php echo getImageSrc('./uploads/images/'.$row['section1_img']); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="icons">
                    <img src="<?=base_url()?>assets/images/oval-1.svg" alt="" class="oval-one">
                    <img src="<?=base_url()?>assets/images/shape-1.svg" alt="" class="shape-three">
                    <img src="<?=base_url()?>assets/images/shape-55.svg" alt="" class="shape-four">
                    <img src="<?=base_url()?>assets/images/shape-56.svg" alt="" class="shape-five">
                    <img src="<?=base_url()?>assets/images/shape-57.svg" alt="" class="shape-six">
                    <img src="<?=base_url()?>assets/images/shape-58.svg" alt="" class="shape-seven">
                    <img src="<?=base_url()?>assets/images/shape-59.svg" alt="" class="shape-eight">
                    <img src="<?=base_url()?>assets/images/shape-60.svg" alt="" class="shape-nine">
                    <img src="<?=base_url()?>assets/images/shape-61.svg" alt="" class="shape-ten">
                    <img src="<?=base_url()?>assets/images/shape-62.svg" alt="" class="shape-eleven">
                </div>
            </section>
            <!-- banner -->


            <section id="company">
                <div class="contain">
                    <ul class="lst flex">
                        <?php $sec4s = getMultiText('home-sec2'); ?>
                        <?php foreach ($sec4s as $sec4) { ?>
                        <li>
                            <div class="inner">
                                <div class="icon"><img
                                        src="<?php echo getImageSrc('./uploads/images/'.$sec4->image); ?>"></div>
                                <div class="cntnt">
                                    <h3><?= $sec4->title; ?></h3>
                                    <p><?=$sec4->detail?></p>
                                </div>
                            </div>
                        </li>
                        <?php
            }
            ?>
                    </ul>
                    <div class="flexRow flex">
                        <div class="col col1">
                            <div class="image"><img src="<?=get_site_image_src("images", $row['section3_image'])?>"
                                    alt=""></div>
                        </div>
                        <div class="col col2">
                            <div class="content">
                                <h1 class="heading"><?php echo $row['section3_title']; ?></h1>
                                <?php echo $row['section3_detail']; ?>
                                <div class="bTn">
                                    <a href="<?php echo $row['section3_link_url']; ?>"
                                        class="webBtn colorBtn"><?php echo $row['section3_link_text']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- company -->

            <?php
    if (!empty($locations)) {
        ?>
            <section id="cities">
                <div class="contain text-center">
                    <h1 class="heading"><?php echo $row['section4_title']; ?></h1>
                    <ul class="lst flex">
                        <?php
                    foreach ($locations as $location) {
                        ?>
                        <li>
                            <div class="cityBlk">
                                <div class="image"
                                    style="background-image: url('<?=get_site_image_src("locations/thumbs", $location->image)?>')">
                                </div>
                                <div class="txt">
                                    <h4><?=$location->name?> <small>Average Price start from
                                            $<?=$location->price?></small></h4>
                                </div>
                            </div>
                        </li>
                        <?php
                    } ?>
                    </ul>
                </div>
            </section>
            <!-- cities -->
            <?php
    }
?>
            <?php
    if(!empty($blogs)){
?>
            <section id="posts">
                <div class="contain">
                    <div class="content">
                        <h1 class="heading text-center"><?php echo $row['section5_title']; ?></h1>
                    </div>
                    <div class="flexRow flex">
                        <?php
                foreach($blogs as $blog){
            ?>
                        <div class="col">
                            <div class="newsBlk">
                                <div class="image"><a
                                        href="<?=base_url()?>blog-detail/<?=$blog->id?>/<?=toSlugUrl($blog->title)?>"><img
                                            src="<?=get_site_image("blogs/thumbs", $blog->image)?>"
                                            alt="<?= $blog->title; ?>"></a></div>
                                <div class="cntnt">
                                    <h2><a
                                            href="<?=base_url()?>blog-detail/<?=$blog->id?>/<?=toSlugUrl($blog->title)?>"><?= $blog->title; ?></a>
                                    </h2>
                                    <div class="ctgry"><?= format_date($blog->created_date,'M d Y'); ?></div>
                                    <p><?= short_text($blog->description,90); ?></p>
                                    <a href="<?=base_url()?>blog-detail/<?=$blog->id?>/<?=toSlugUrl($blog->title)?>"
                                        class="webBtn">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php
                }
           ?>
                    </div>
                </div>
            </section>
            <!-- posts -->
            <?php
    }
?>

        </main>
        <?php $this->load->view('includes/footer'); ?>
    </body>

</html>