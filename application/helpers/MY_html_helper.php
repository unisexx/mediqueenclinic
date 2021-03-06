<?php
if(!function_exists('page_active'))
{
	function page_active($page,$uri=4,$class='active')
	{
		$CI =& get_instance();
		return ($CI->uri->segment($uri)==$page) ? 'class='.$class : '';
	}
}

if(!function_exists('get_option'))
{
	function get_option($value,$text,$table,$condition = NULL,$lang = NULL)
	{
		$CI =& get_instance();
		$query = $CI->db->query("select * from $table $condition");
		foreach($query->result() as $item) $option[$item->{$value}] = lang_decode($item->{$text},$lang);
		return $option;
	}
}

if(!function_exists('fix_file'))
{
    function fix_file(&$files)
    {
        $names = array( 'name' => 1, 'type' => 1, 'tmp_name' => 1, 'error' => 1, 'size' => 1);

        foreach ($files as $key => $part) {
            // only deal with valid keys and multiple files
            $key = (string) $key;
            if (isset($names[$key]) && is_array($part)) {
                foreach ($part as $position => $value) {
                    $files[$position][$key] = $value;
                }
                // remove old key reference
                unset($files[$key]);
            }
        }
    }
}

if(!function_exists('thumb'))
{
    function thumb($imgUrl,$width,$height,$zoom_and_crop,$param = NULL){
    	if(strpos($imgUrl, "http://") !== false or strpos($imgUrl, "https://") !== false){
    		return "<img ".$param." src=".site_url("media/timthumb/timthumb.php?src=".$imgUrl."&zc=".$zoom_and_crop."&w=".$width."&h=".$height)." width=".$width." height=".$height.">";
    	}else{
    		return "<img ".$param." src=".site_url("media/timthumb/timthumb.php?src=".site_url($imgUrl)."&zc=".$zoom_and_crop."&w=".$width."&h=".$height)."  width=".$width." height=".$height.">";
    	}

    }
}

if(!function_exists('check_image_url'))
{
	function check_image_url($url=false,$facebook_id=false,$google_picture_link=false,$twitter_picture_link=false,$imgur_img_type=false)
	{
		if($url!=false){
			// ถ้าลิ้งค์รูปเป็นลิ้งค์ของ imgur.com
			if(get_domain($url) == "imgur.com"){
				if($imgur_img_type == "original"){
					return $url;	// รูปดั้งเดิม
				}else{
					// หาไอดีรูป เพื่อทำ thumbnail
					$array = parse_url($url);
					$imgThumb = substr( $array['path'],1,-4).'b';
					$imgType = substr($url, strrpos($url, ".") + 1);
					return "http://i.imgur.com/".$imgThumb.".".$imgType;
				}
			}else{
				return $url;
			}
			// return site_url("media/timthumb/timthumb.php?src=".$url."&zc=1&w=120&h=120");
		}elseif($facebook_id!=false){
			return "https://graph.facebook.com/".$facebook_id."/picture?type=large";
			// return site_url("media/timthumb/timthumb.php?src=https://graph.facebook.com/".$facebook_id."/picture?type=large&zc=1&w=120&h=120");
		}elseif($google_picture_link!=false){
			return "$google_picture_link";
		}elseif($twitter_picture_link!=false){
			return $twitter_picture_link;
		}
	}
}

if(!function_exists('imgur_upload'))
{
	function imgur_upload($postImg)
	{
		if($postImg){
			$image = file_get_contents($postImg);
			$client_id="94af93212e2e617";//Your Client ID here
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, 'https://api.imgur.com/3/image.json');
			curl_setopt($ch, CURLOPT_POST, TRUE);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Authorization: Client-ID ' . $client_id ));
			curl_setopt($ch, CURLOPT_POSTFIELDS, array( 'image' => base64_encode($image) ));

			$reply = curl_exec($ch);

			curl_close($ch);

			$reply = json_decode($reply);
			return @$reply->data->link;
		}
	}
}

if(!function_exists('meta_description'))
{
	function meta_description($description=false){
	    $CI =& get_instance();
	    if($description!=""){
	        $CI->template->append_metadata( meta('description',$description));
	    }
	}
}

if(!function_exists('get_domain'))
{
	function get_domain($url)
	{
	  $pieces = parse_url($url);
	  $domain = isset($pieces['host']) ? $pieces['host'] : '';
	  if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
	    return $regs['domain'];
	  }
	  return false;
	}
}

if(!function_exists('file_icon'))
{
	function file_icon($file){
	    $ext = pathinfo($file, PATHINFO_EXTENSION);
		if($ext == 'doc'){
			return '<i class="fa fa-file-word-o" aria-hidden="true"></i>';
		}else{
			return '<i class="fa fa-file-pdf-o text-danger" aria-hidden="true"></i>';
		}
	}
}

if(!function_exists('file_icon_th'))
{
	function file_icon_th($file){
	    $ext = pathinfo($file, PATHINFO_EXTENSION);
		if($ext == 'doc' or $ext == 'docx'){
			return '<img src="themes/law/images/word_th.png">';
		}else{
			return '<img src="themes/law/images/pdf_th.png">';
		}
	}
}

if(!function_exists('file_icon_en'))
{
	function file_icon_en($file){
	    $ext = pathinfo($file, PATHINFO_EXTENSION);
		if($ext == 'doc' or $ext == 'docx'){
			return '<img src="themes/law/images/word_en.png">';
		}else{
			return '<img src="themes/law/images/pdf_en.png">';
		}
	}
}

function url_current(){
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	return $actual_link;
}

function user_logs($module=false,$action=false,$ref=false){
	$rs = new User_log();
	$data['module'] =  $module;
	$data['action'] = $action;
	$data['ref'] = $ref;
	$data['id_login'] = user_login()->id;
	$data['username'] = user_login()->username;
	$data['ip'] = $_SERVER['REMOTE_ADDR'];
	$rs->from_array($data);
	$rs->save();
}

/**
 * This function used to generate the hashed password
 * @param {string} $plainPassword : This is plain text password
 */
if(!function_exists('getHashedPassword'))
{
    function getHashedPassword($plainPassword)
    {
        return password_hash($plainPassword, PASSWORD_DEFAULT);
    }
}
/**
 * This function used to generate the hashed password
 * @param {string} $plainPassword : This is plain text password
 * @param {string} $hashedPassword : This is hashed password
 */
if(!function_exists('verifyHashedPassword'))
{
    function verifyHashedPassword($plainPassword, $hashedPassword)
    {
        return password_verify($plainPassword, $hashedPassword) ? true : false;
    }
}


function getYoutubeID($youtubeurl){
    $pattern = '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/i';
  	preg_match($pattern, $youtubeurl, $matches);
  	return isset($matches[1]) ? $matches[1] : false;
}
?>
