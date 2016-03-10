<div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12 text-left">
                        Copyright &copy; <?php echo date('Y');?> <?php if(of_get_option('sksdev_header_title')) { echo of_get_option('sksdev_header_title');} else { bloginfo('name');}?>
                    </div> <!-- /.text-center -->
                    <div class="col-md-4 hidden-xs text-right">
                        <a href="#top" id="go-top">Back to top</a>
                    </div> <!-- /.text-center -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#footer -->

        <?php wp_footer(); ?>
    </body>
</html>