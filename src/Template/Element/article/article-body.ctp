<div class="overlay"></div>
  <div class="container"><!-- Navigation -->
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <span class="subheading"><?= $this->Text->autoParagraph($article->description); ?></span>
            <p><?= $this->Text->autoParagraph($article->body); ?></p>
            <p><?= __('Originally Posted: ') ?><?= h($article->created) ?></p>
            <?php // displays last date/time article was modified
            if (h($article->modified != null)) 
            { ?>
                <p><?= __('Last Modified: ')?><?h($article->modified) ?></p>
            <?php 
            } ?>
        </div>
      </div>
    </div>
  </div>