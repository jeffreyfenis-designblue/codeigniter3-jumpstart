<?php
defined('BASEPATH') or exit('No direct script access allowed');
if (!isset($view_data) || array_key_exists('path', $view_data))
  $view_data = ['path' => 'home'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Codeigniter</title>
</head>

<body>
  <?php $this->view('sections/header_section', $view_data); ?>
  <main>
    <?php $this->view('pages/' . $view_data['path'] . '_page.php', $view_data); ?>
  </main>
  <footer><?php $this->view('sections/footer_section', $view_data); ?></footer>
</body>

</html>