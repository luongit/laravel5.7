<?php 
function radioCategory($datas,$old_cat=false,$parent=0){
  if($datas): ?>
    <div class="post-category">
      <?php foreach($datas as $key => $cat): 
      $checked = ($old_cat && $cat->id == $old_cat) ? 'checked' : '';
      if($cat->parent == $parent) : 
    
    ?>

    <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="category_id-<?php echo $cat->id;?>" name="category_id" <?php echo $checked; ?> value="<?php echo $cat->id;?>">
        <label class="custom-control-label" for="category_id-<?php echo $cat->id;?>"><?php echo $cat->name; ?></label>
      <?php unset($datas[$key]); radioCategory($datas,$old_cat,$cat->id); ?>
    </div>
      <?php endif; endforeach;  ?>
      </div>
  <?php endif;
}

function scan_dir_array($path){

    $files = array();
   
    if(is_dir($path))
    {
        if($handle = opendir($path))
        {
          $i=0;
            while(($name = readdir($handle)) !== false)
            {
                if(!preg_match("#^\.#", $name) && is_dir($path.'/'.$name)){
                  $files[$i]['name'] = $name;
                  $files[$i]['items'] = scan_dir_array($path . "/" . $name);
                }
  
                $i++;
            }
           
            closedir($handle);
        }
    }

    return $files;
}

function scan_file_array($dir){
      $result = array();
      $dirs = scandir($dir);
      $sub = str_replace(config('upload.path'), '', $dir);
      $sub_fd = $sub ? $sub:'';
      $_url = $sub_fd ? url('uploads').'/'.$sub_fd : url('uploads');

       foreach ($dirs as $key => $value)
       {
          if (!in_array($value,array(".","..")))
          {
             if (!is_dir($dir. DIRECTORY_SEPARATOR. $value))
             {
                $result[] = $_url.'/'.$value;
             }
          }
       }
       return $result;
  }

/**
* Remove file if not existing in database

*/

function removeFileNotExists($mediaInDB,$mediaModel){
    $dir = config('upload.path');
    $dirs = scandir($dir);;
    $files = scan_file_array($dir);

    foreach ($dirs as $k => $d) {
      if (!in_array($d,array(".",".."))){
        if (is_dir($dir.$d)) {
            $sdirs = scandir($dir.$d);
            $subFIles = scan_file_array($dir.$d);
            foreach ($subFIles as $sf) {
               array_push($files, $sf);
            }

            foreach ($sdirs as $sd) {
              // echo $dir.$sd;
                if (!in_array($sd,array(".","..")) && is_dir($dir.$d.'/'.$sd)){
                  $susbFIles = scan_file_array($dir.$d.'/'.$sd);
                  foreach ($susbFIles as $asf) {
                     array_push($files, $asf);
                  }
                }
            }
        }
      }
    }

    $exclude = [];

    if ($mediaInDB) {
      $olds_files = [];
      foreach ($mediaInDB as $md) {
        $olds_files[] = $md->full_link;
         if(!in_array($md->full_link, $files)){
          $mediaModel->destroy([$md->id]);
          \Cache::flush();
        }
      }

      foreach ($files as $f) {
        if(!in_array($f, $olds_files)){
          $exclude[] = str_replace(url('uploads').'/', config('upload.path'), $f);
        }
      }
    }else{
      $exclude = $files;
    }
    
    // dd($exclude);
    if ($exclude) {
      foreach ($exclude as $link_file) {
        removeFIle($link_file);
      }
    }
}

function removeFIle($path){
  if (file_exists($path)) {
    unlink($path);
  }
  
}
function set_file_name($str) {
    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
    $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
    $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
    $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
    $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
    $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
    $str = preg_replace("/(đ)/",'d', $str);
    $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'a', $str);
    $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
    $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
    $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'o', $str);
    $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'u', $str);
    $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'y', $str);
    $str = preg_replace("/(Đ)/", 'd', $str);
    $str = preg_replace('~[^\pL\d]+~u', '-', $str);
    $str = preg_replace('~[^-\w]+~', '', $str);
    $str = trim($str, '-');
    $str = preg_replace('~-+~', '-', $str);
    return strtolower($str);
  }

  function formatSizeUnits($bytes){
    if ($bytes >= 1073741824){

      $bytes = number_format($bytes / 1073741824, 2) . ' GB';

    }elseif ($bytes >= 1048576){

      $bytes = number_format($bytes / 1048576, 2) . ' MB';

    }elseif ($bytes >= 1024){

      $bytes = number_format($bytes / 1024, 2) . ' KB';

    }elseif ($bytes > 1){

      $bytes = $bytes . ' bytes';

    }elseif ($bytes == 1){

      $bytes = $bytes . ' byte';

    }else{

      $bytes = '0 bytes';

    }

    return $bytes;
  }
?>

