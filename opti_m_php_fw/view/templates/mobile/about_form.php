<h2><?php echo $page_title ?></h2>

<p>You can contact us by following mobile form</p>

<form action="<?php echo _APP_WEB_PATH ?>about/form" method="post">
  <fieldset>
    <p>
      <label for="login">Login *:</label>
      <input type="text" id="login" name="login" value="<?php echo isset($tmp_login) ? $tmp_login : '' ?>" maxlength="32" />
    </p>
    <p>
      <label for="email">Email *:</label>
      <input type="text" id="email" name="email" value="<?php echo isset($tmp_email) ? $tmp_email: '' ?>" maxlength="100" />
      <br />
      <?php if (isset($msg_email)): ?>
        <small style="color: #d00;"><?php echo $msg_email ?></small>
      <?php endif; ?>
    </p>
    <p>
      <label for="body">Body *:</label>
      <textarea id="body" name="body"></textarea>
      <br />
      <?php if (isset($msg_body)): ?>
        <small style="color: #d00;"><?php echo $msg_body ?></small>
      <?php endif; ?>
    </p>
    <p>
      <input type="submit" value="Send a message" />
    </p>
  </fieldset>
</form>
