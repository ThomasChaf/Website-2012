    <footer>
      <div>
        <p>Thomas Chafiol</p>
        <p>&copy; 2014 <?php echo $this->tr->_("personal") ?></p>
      </div>
    </footer>
    <?php foreach ($this->_javascript as $javascript) {
      echo "<script type=\"text/javascript\" src=\"" . $javascript . "\"></script>";
    } ?>
  </body>
</html>
