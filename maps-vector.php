<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>

    <head>
        
    <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Vector Maps')); ?>

        <!-- plugin css -->
        <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <?php include 'partials/head-css.php'; ?>

    </head>

    <?php include 'partials/body.php'; ?>

        <!-- Begin page -->
        <div id="layout-wrapper">

        <?php include 'partials/menu.php'; ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Maps' , 'title' => 'Vector Maps')); ?>
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">World Vector Map</h4>
                                        <p class="card-title-dsec">Example of world vector maps.</p>
                                        <div id="world-map-markers" style="height: 420px"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">USA Vector Map</h4>
                                        <p class="card-title-dsec">Example of united states of ameria vector maps.</p>
                                        <div id="usa-vectormap" style="height: 350px"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">India Vector Map</h4>
                                        <p class="card-title-dsec">Example of india vector maps.</p>
                                        <div id="india-vectormap"  style="height: 350px"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Australia Vector Map</h4>
                                        <p class="card-title-dsec">Example of australia vector maps.</p>
                                        <div id="australia-vectormap" style="height: 350px"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Chicago Vector Map</h4>
                                        <p class="card-title-dsec">Example chicago of vector maps.</p>
                                        <div id="chicago-vectormap"  style="height: 350px"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">UK Vector Map</h4>
                                        <p class="card-title-dsec">Example of united kingdom vector maps.</p>
                                        <div id="uk-vectormap" style="height: 350px"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                            
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Canada Vector Map</h4>
                                        <p class="card-title-dsec">Example canada of vector maps.</p>
                                        <div id="canada-vectormap"  style="height: 350px"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
                <?php include 'partials/footer.php'; ?>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <?php include 'partials/right-sidebar.php'; ?>

        <?php include 'partials/vendor-scripts.php'; ?>

        <!-- Plugins js-->
        <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
        <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>
        <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-in-mill-en.js"></script>
        <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-au-mill-en.js"></script>
        <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-il-chicago-mill-en.js"></script>
        <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-uk-mill-en.js"></script>
        <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-ca-lcc-en.js"></script>

        <!-- Init js-->
        <script src="assets/js/pages/vector-maps.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
