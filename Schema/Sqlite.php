<?php

namespace Kanboard\Plugin\SubtaskTextfield\Schema;

const VERSION = 1;

function version_1($pdo)
{
  $pdo->exec("ALTER TABLE subtask_time_tracking add sttextfield TEXT");
}
