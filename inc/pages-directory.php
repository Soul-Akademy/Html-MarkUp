<div style="position: fixed; left: 10px; top: 400px; padding: 20px; background: rgba(0,0,0,.7); z-index: 100;">
  <?php
  define('MYDIR','./');

  if (!defined('MYDIR')) die ('Directory Is not correct or is not defined!');
  $filesindir=scandir(MYDIR);
  echo '<pre>';
  $counter=0;
  foreach($filesindir as $files)
  {
       if ($files=='.' || $files=='..' || is_dir($files) || strtolower(substr($files,strrpos($files,"."),strlen($files))!=='.php')) continue;
       $counter++;
       echo "<a href=" . MYDIR . $files .  ">$files</a><br>";
  }
  
  unset($files);
  
  ?>
</div>  
