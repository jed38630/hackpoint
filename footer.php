</div>
</div>
		<!-- body -->
  
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        
        <script src="js/vendor/bootflat.min.js"></script>
        <script src="js/vendor/mustache.min.js"></script>
        <script src="js/vendor/dropzone.js"></script>
        <script src="js/vendor/codemirror.js"></script>
         <?php 
        echo PHP_EOL;
        foreach (glob('js/vendor/codemirror/*.js') as $js) {
            echo "\t\t<script type='text/javascript' src='$js'></script>".PHP_EOL;
        }
        ?>
		<script src="js/plugins.js"></script>
        <script src="js/vendor/jquery-ui.min.js"></script>
        <script src="js/main.js"></script>
		<div class="footer"><?php echo PROGRAM_NAME.' V'.SOURCE_VERSION.'.'.BASE_VERSION.' by <a href="http://idleman.fr">@idleman</a>'; ?></div>
    </body>
</html>
