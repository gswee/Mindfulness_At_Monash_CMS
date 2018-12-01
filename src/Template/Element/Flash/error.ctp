<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message error" id="error" onclick="this.classList.add('hidden');"><?= $message ?></div>
