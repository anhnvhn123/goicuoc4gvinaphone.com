<?php
// Lấy id toàn bộ bài post trong nhóm gói cước
$array3G = ["VD89", "VD89P", "VD129", "VD99"];
$id_3g= array(351);
//$bangmau=array('#55c2af','#f49020');
$bangmau = array('#00a1e4', '#00a1e4');
$listPack3G = [];
foreach ($id_3g as $numbergoi => $post) {
    $ghi_chu = get_field('ghi_chu', $post);
    $datas = get_field('goi_cuoc', $post);
    foreach ($datas as $item){
        $tmp['ma_goi_cuoc'] = $item['ma_goi_cuoc'];
        $tmp['toc_do'] = $item['toc_do'];
        $tmp['gia_cuoc'] = $item['gia_cuoc'];
        $tmp['chu_ky'] = $item['chu_ky'];
        $tmp['cu_phap'] = $item['cu_phap'];
        $tmp['dau_so'] = $item['dau_so'];
        $tmp['cuoc_phat_sinh'] = $item['cuoc_phat_sinh'];
        $tmp['mo_ta'] = $item['mo_ta'];
        $tmp['index'] = $item['index'];
        if(in_array($tmp['ma_goi_cuoc'], $array3G)){
            array_push($listPack3G, $tmp);
        }
    }
}
?>
    <div class='col-md-12 col-content'>
        <section class='innerContent'>
            <article class='post-heading hentry'>
                <div class="form-group post_content entry-content">
                    <div id="" class="row nhom-goi" >
                        <div style="background: <?php echo $bangmau[0]; ?>;height: 50px; margin: 10px;">
                            <h3 align="center"
                                style="color: #FFFFFF;margin-bottom:0px;margin-top:0px;padding-top: 10px"
                                class="nhom-goi-tite" title="">
                                <b>Gói đặc biệt</b></h3>
                        </div>


                        <?php
                        if (!empty($listPack3G)) {
                        foreach ($listPack3G as $key => $value) {?>
                            <div class="col-md-6 col-sm-6 category-list">
                                <h3 align="center"
                                    style="margin-top:10px; margin-bottom:10px;border:5px double <?php echo $bangmau[$numbergoi % 2]; ?>;background-color: <?php echo $bangmau[$numbergoi % 2]; ?>;color: #FFFFFF">
                                    <b><?php echo $value['ma_goi_cuoc']; ?></b></h3>
                                <table style="width: 100%;" class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <td style="width: 32%;">Dung lượng</td>
                                        <td><?php echo $value['toc_do']; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 30%;">Giá cước</td>
                                        <td><?php echo product_price($value['gia_cuoc']); ?>
                                            đ/<?php echo $value['chu_ky']; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 30%;">Cước phát sinh</td>
                                        <td><?php echo $value['cuoc_phat_sinh']; ?></td>
                                    </tr>
                                    <?php
                                    if (strlen($value['mo_ta']) > 0) {
                                        ?>
                                        <tr>
                                            <td>Chú thích</td>
                                            <td><?php echo $value['mo_ta']; ?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    <tr>
                                        <td colspan="2" style="text-align: center;">
                                            <div class="col-md-8">
                                                            <span class="btn">
                                                                <b> <strong
                                                                        style="color: red;"><?php echo $value['cu_phap']; ?></strong>&nbsp;gửi&nbsp;<strong
                                                                        style="color: red"><?php echo $value['dau_so']; ?></strong>
                                                                </b>
                                                            </span>
                                            </div>
                                            <div class="col-md-4"><?php render_btn_dangky($value['cu_phap'], $value['dau_so']); ?></div>

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <?php
//                            if ($key % 2 != 0 || $key == (count($datas) - 1)) {
//                                echo '<div class="clear-fix"></div>';
//                            }
                        }
                        ?>
                    </div>

                    <?php
                    }
                    ?>

                    <p class="note"><b>Ghi chú
                            :</b> <?php echo(($ghi_chu != '') ? $ghi_chu : 'Không có'); ?></p>



                </div>

            </article>
        </section>
    </div>
