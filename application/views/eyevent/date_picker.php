<div class="container eyv-r mt-10">
    <div class="down-r-vent">
    <h4>Lihat Berdasarkan Tanggal</h4>
        <div class="kalender mt-20">
            <div id="z"></div>
            <!-- <input type="text" id="d" /> -->
            <button class="btn-white-g" type="button" id="btn-date-jadwal">Lihat</button>
        </div>
    </div>
    <div class="container down-r-vent mt-30">
        <div class="fl-l">
            <h4>BERITA TERBARU</h4>
        </div>
        <div class="fl-r bcd">
            <a href="<?= base_url();?>eyenews">
                <span>Berita Lainnya</span>
                <i class="material-icons">keyboard_arrow_right</i>
            </a>
        </div>
        <div class="pd">
            <?php 
            foreach($eyenews_main as $terbaru){
            ?>
            <div>
                <div class="container he">
                    <a href="<?php echo base_url(); ?>eyenews/detail/<?= $terbaru['url'];?>">
                        <img src="<?php echo imgUrl(); ?>systems/eyenews_storage/<?= $terbaru['thumb1']; ?>" alt="">
                    </a>
                    <div class="container rx">
                        <a href="<?php echo base_url(); ?>eyenews/detail/<?= $terbaru['url'];?>">
                            <span><?=$terbaru['title'];?></span>
                        </a>
                        <div class="rr">
                            <span>
                                <?php
                                $date       =  new DateTime($terbaru['createon']);
                                $tanggal    = date_format($date,"Y-m-d H:i:s");

                                echo relative_time($tanggal) . ' lalu - '.$terbaru['news_view'].' views';
                                ?>                                          
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="d-r-v container" id="sidebar" style="background-color: white; width: 450px; float: left;" >
        <div class="fl-l">
            <h4 style="margin-top: 0px;">VIDEO</h4>
        </div>
        <div class="fl-r bcd" style="top: 9px;">
            <a href="">
                <span>Berita Lainnya</span>
                <i class="material-icons">keyboard_arrow_right</i>
            </a>
        </div>
        <div class="pd">
            <?php 
            foreach($video_eyetube as $newtube){
            ?>
            <div>
                <div class="container h105">
                    <a href="">
                        <img src="<?php echo imgUrl(); ?>systems/eyetube_storage/<?= $newtube['thumb']; ?>" alt="">
                    </a>
                    <div class="drn">
                        <span></span>
                    </div>
                    <div class="container rv">
                        <a href="<?php echo base_url(); ?>eyetube/detail/<?= $newtube['url'];?>">
                            <span style="margin-top:7px;"><?= $newtube['title']; ?></span>
                        </a>
                        <div class="rr">
                            <span>
                                <?php
                                    $date       =  new DateTime($newtube['createon']);
                                    $tanggal    = date_format($date,"Y-m-d H:i:s");
                                    echo relative_time($tanggal) . ' ago - '.$newtube['tube_view'].' views';                        
                                ?>                                          
                            </span>
                        </div>
                    </div>
                </div>                              
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
    var stickyWidgetTop = $('#sidebar').offset().top;
    var stickyWidget = function(){
    var scrollTop = $(window).scrollTop();    
    if (scrollTop > stickyWidgetTop) {
        $('#sidebar').addClass('sticky');
        $('#sidebar').removeClass('add60');
    } else {
        $('#sidebar').removeClass('sticky');
        $('#sidebar').addClass('add60');
    }
    };
    stickyWidget();
    $(window).scroll(function() {
        stickyWidget();
    });
    });
</script>