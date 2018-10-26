<div class="col-6 mx-auto" id="homepage_col">
  <div class="post-preview">
    <a href="post.html">
      <h2 class="post-title">
        <?= $this->Html->link('For Educators', ['controller' => 'Article', 'action' => 'view', '2'], ['id'=>'title_home']) ?>
      </h2>
      <h3 class="post-subtitle">
        <?= $this->Html->link('Mindfulness is beneficial for your students\' wellbeing - as well as yours. Find out how you can impart the benefits of mindfulness to your students.', ['controller' => 'Article', 'action' => 'view', '2'], ['id'=>'subtitle_home']) ?>
      </h3>
    </a>
    <br>
      <!-- Pager -->
      <div class="clearfix">
          <?= $this->Html->link('Find out more', ['controller' => 'Article', 'action' => 'view', '2'], ['class'=>'btn btn-primary']) ?>
        <!--<a class="btn btn-primary" href="#">Older Posts &rarr;</a>-->
      </div>
    </div>
</div>