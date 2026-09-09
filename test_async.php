<?php
$project_root = dirname(__FILE__);
$project_root_win = str_replace('/', '\\', $project_root);
$cmd = 'start /B cmd /C "cd /d ' . escapeshellarg($project_root_win) . ' && python -c \"import time; time.sleep(5); print(\'done\')\" > test.log 2>&1"';
echo "Executing: $cmd\n";
pclose(popen($cmd, "r"));
echo "Done instantly!\n";
