<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">

                            <!-- Pencarian -->
                            <form action="index.php?cari" method="post">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search..." name="key">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                                </div>
                            </form>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i> Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">

                                <?php
                                    if($_SESSION["tiket_level"] == "User"){?>
                                        <li>
                                            <a href="index.php?daftar">Daftar</a>
                                        </li>
                                    <?php }
                                ?>
                                
                                <?php
                                    if($_SESSION["tiket_level"] == "Admin"){?>
                                        <li>
                                            <a href="index.php?admin">Operator</a>
                                        </li>
                                        <li>
                                            <a href="index.php?lihat">Pendaftar</a>
                                        </li>
                                    <?php }
                                ?>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php
                            if($_SESSION["tiket_level"] == "Admin"){?>
                                <li>
                                    <a href="#"><i class="fa fa-filter fa-fw"></i> Filter<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="index.php?kode_jur=1">IPA</a>
                                        </li>
                                        <li>
                                            <a href="index.php?kode_jur=2">IPS</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-calendar fa-fw"></i> Event<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="index.php?tevent">Tambah Event</a>
                                        </li>
                                        <li>
                                            <a href="index.php?levent">Lihat Event</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
                            <?php }
                        ?>
                        
                        <?php 
                            if($_SESSION["tiket_level"] == "User"){?>
                                <li>
                                    <a href="#"><i class="fa fa-calendar fa-fw"></i> Event<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="index.php?levent">Lihat Event</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
                            <?php }
                         ?>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->