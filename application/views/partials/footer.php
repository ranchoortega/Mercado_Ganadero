          </div>
          </div>
          
          <script>
            var base_url = "<?php echo base_url(); ?>";
          const urlServer = 'http://localhost/backend-sipro-1/api/';

          </script>
          <?php foreach ($estilosjs as $estilo) : ?>
            <script src="<?php echo base_url() . $estilo; ?>"></script>
          <?php endforeach ?>

          </body>
          </html>