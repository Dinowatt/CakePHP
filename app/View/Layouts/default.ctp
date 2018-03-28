<!DOCTYPE html>
<html>
  <header>
      <?= $this->Html->css('monCSS');?>
  </header>
  <body>
      <div class="box centre">
          <h1>je suis dans mon layout</h1>

      </div>
      <?= $this->fetch('entete');?>
      <?= $this->fetch('content');?>
      <?= $this->fetch('bas');?>

      <?= $this->Html->script('monJS');?>
  </body>
</html>
