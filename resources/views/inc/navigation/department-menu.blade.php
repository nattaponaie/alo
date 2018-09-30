<?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $column=3;


    $sql = "SELECT cat_id, cat_name, cat_sub FROM categories";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $categories = $stmt->fetchAll();
?>
<ul class="nav navbar-nav departments-menu animate-dropdown">
    <li class="nav-item dropdown <?php echo ( $page == 'home-v2' ? 'open' : '' ); ?>">

        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="departments-menu-toggle" >สินค้าของเรา</a>
        <ul id="menu-vertical-menu" class="dropdown-menu yamm departments-menu-dropdown">
            <!-- <li class="highlight menu-item animate-dropdown active"><a title="Value of the Day" href="index.php?page=product-category">Value of the Day</a></li>
            <li class="highlight menu-item animate-dropdown"><a title="Top 100 Offers" href="index.php?page=home-v3">Top 100 Offers</a></li>
            <li class="highlight menu-item animate-dropdown"><a title="New Arrivals" href="index.php?page=home-v3-full-color-background">New Arrivals</a></li> -->

            <?php
                    foreach($categories as $categorie)
                    {
                        if($categorie["cat_sub"] > 0)
                        {
                            ?>
                            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2584 dropdown">
                                <a title="<?php echo $categorie["cat_name"] ?>" href="index.php?page=product-category" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true"><?php echo $categorie["cat_name"] ?></a>

                                <?php
                                $sql = "SELECT sub_id, sub_cat_name, sub_amount, cat_id FROM sub_categories WHERE cat_id = ".$categorie["cat_id"]." ";
                                $stmt = $pdo->prepare($sql);
                                $stmt->execute();
                                $sub_categories = $stmt->fetchAll();
                                $sub_categorie_array = array();
                                foreach ($sub_categories as $sub_categorie) {
                                    $sub_categorie_array[$sub_categorie["sub_cat_name"]] = $sub_categorie["sub_id"];
                                }
                                require 'department-menu-megamenu.php';
                                ?>
                                
                            </li>
                            <?php
                        }
                        else
                        {
                            ?>
                            <li class="menu-item animate-dropdown"><a title="<?php echo $categorie["cat_name"] ?>" href="index.php?page=product-category"><?php echo $categorie["cat_name"] ?></a></li>
                            <?php
                        }
                    }
            ?>

            <!-- <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2584 dropdown">
                <a title="cabinet-sub-18" href="index.php?page=product-category" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">ตู้ลำโพงซับ 18 นิ้ว</a>
                <?php //require_once 'department-menu-megamenu.php'; ?>
            </li>

            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2585 dropdown">
                <a title="cabinet-sub-15" href="index.php?page=product-category" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">ตู้ลำโพงซับ 15 นิ้ว</a>
                <?php //require 'department-menu-megamenu.php'; ?>
            </li>

            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2586 dropdown">
                <a title="cabinet-middle-15" href="index.php?page=product-category" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">ตู้ลำโพงกลางแหลม 15 นิ้ว</a>
                <?php //require 'department-menu-megamenu.php'; ?>
            </li>


            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2587 dropdown">
                <a title="cabinet-middle-12" href="index.php?page=product-category" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">ตู้ลำโพงกลางแหลม 12 นิ้ว</a>
                <?php //require 'department-menu-megamenu.php'; ?>
            </li>


            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2588 dropdown">
                <a title="cabinet-hang" href="index.php?page=product-category" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">ตู้ลำโพงแขวน</a>
                <?php //require 'department-menu-megamenu.php'; ?>
            </li>


            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2589 dropdown">

                <a title="cabinet-outdoor" href="index.php?page=product-category" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">ตู้ลำโพงกลางแจ้ง</a>
                <?php //require 'department-menu-megamenu.php'; ?>
            </li>


            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2590 dropdown">

                <a title="audio-outdoor" href="index.php?page=product-category" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">ชุดเครื่องเสียงกลางแจ้ง</a>
                <?php //require 'department-menu-megamenu.php'; ?>
            </li>

            <li class="menu-item animate-dropdown"><a title="loudspeaker-12" href="index.php?page=product-category">ดอกลำโพง 12 นิ้ว</a></li>
            <li class="menu-item animate-dropdown"><a title="loudspeaker-15 &amp; Ink" href="index.php?page=product-category">ดอกลำโพง 15 นิ้ว</a></li>
            <li class="menu-item animate-dropdown"><a title="loudspeaker-18" href="index.php?page=product-category">ดอกลำโพง 18 นิ้ว</a></li>
            <li class="menu-item animate-dropdown"><a title="driver" href="index.php?page=product-category">ไดร์เวอร์</a></li>
            <li class="menu-item animate-dropdown"><a title="cabinet-mount" href="index.php?page=product-category">ปากลำโพง</a></li>
            <li class="menu-item animate-dropdown"><a title="power-amp" href="index.php?page=product-category">เพาเวอร์แอมป์</a></li>
            <li class="menu-item animate-dropdown"><a title="mixer" href="index.php?page=product-category">มิกเซอร์</a></li>
            <li class="menu-item animate-dropdown"><a title="crossover" href="index.php?page=product-category">ครอสโอเวอร์</a></li>
            <li class="menu-item animate-dropdown"><a title="equalizer" href="index.php?page=product-category">อิควอไลเซอร์</a></li>
            <li class="menu-item animate-dropdown"><a title="microphone" href="index.php?page=product-category">ไมค์โครโฟน</a></li>
            <li class="menu-item animate-dropdown"><a title="cabinet-rag" href="index.php?page=product-category">ตู้แร็ค</a></li>
            <li class="menu-item animate-dropdown"><a title="cabinet-accessory" href="index.php?page=product-category">อะไหล่ตู้ลำโพง</a></li> -->
        </ul>
    </li>
</ul>
