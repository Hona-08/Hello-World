<?php
/**
 * @file
 * Template for Hello World output.
 */
?>

<div class="hello-world-wrapper">
  <div class="hello-card">
    <div class="hello-icon">👋</div>
    <h2 class="hello-title">Hello, <?php print check_plain($name); ?>!</h2>
    <p class="hello-message"><?php print check_plain($message); ?></p>

    <?php if (!empty($skills)): ?>
      <div class="hello-skills">
        <h3>Learning</h3>
        <div class="skill-tags">
          <?php foreach ($skills as $skill): ?>
            <span class="skill-tag"><?php print check_plain($skill); ?></span>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endif; ?>

    <!-- <div class="hello-timestamp">
      <small>Page loaded at: <?php print date('Y-m-d H:i:s'); ?></small>
    </div> -->
  </div>
</div>