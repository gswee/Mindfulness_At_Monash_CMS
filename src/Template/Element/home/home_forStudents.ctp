<div class="col-6 mx-auto" id="homepage_col" style="border-right: 1px solid gray">
  <div class="post-preview">
    <a href="post.html">
      <h2 class="post-title">
        For Students
      </h2>
      <h3 class="post-subtitle">
        <?= $this->Html->link('Mindfulness helps to improve mental health, improve academic performance and best of all - it\'s easy! Find out how you can get back in touch with your mind.', ['controller' => 'Article', 'action' => 'view', '1'], ['id'=>'subtitle_home']) ?>
          
      </h3>
    </a>
  </div>
  <br>
  <!-- Pager -->
  <div class="clearfix">
      <?= $this->Html->link('Find out more', ['controller' => 'Article', 'action' => 'view', '1'], ['class'=>'btn btn-primary']) ?>
    <!--<a class="btn btn-primary" href="#">Find out more &rarr;</a>-->
  </div>
</div>