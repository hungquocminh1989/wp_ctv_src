<?php
defined( 'ABSPATH' ) || exit;
if (is_admin()) return;

function repoLogin($user, $pass){
	global $wpdb;
	
	$result = $wpdb->get_results( "SELECT * FROM wp_postmeta" );
	echo '<pre>';
	var_dump(count($result));
	die();
	$result = '';
	if($result != NULL && count($result) > 0){
		//Tồn tại token
		$token = $result[0]->access_token;
		//Check token còn sử dụng được không ?
		if(TRUE){
			//return 
		}
		else{
			//token không sử dụng được
			return repoInsertToken($user, $pass);
		}
	}
	else{
		//Không tồn tại token
		return repoInsertToken($user, $pass);
	}
}

function repoInsertToken($user, $pass){
	global $wpdb;
	$api = new fbapi();
	$token = $api->get_token($user, $pass);
	if($token != NULL && $token != ''){
		
		$result = $wpdb->get_results( "SELECT * FROM wp_postmeta" );
		if($result != NULL && count($result) > 0){
			$wpdb->update(
				'',
				//data
				[
					'' => '',
				],
				//where
				[
					'' => '',
				],
			);
		}
		else{
			$wpdb->insert(
				'',
				[
					'' => '',
				]
			);
		}
		
		return $token;
	}
	else{
		return FALSE;
	}
}

function repoExecuteAutoPost()
{
	echo "<pre>";
	echo 'Start crontab';
	echo '<br/>';
	
	$group_kinhdoanh = '155525341777249';
	$page_dongho = '1042724125855991';
	
	$api = new fbapi();
	
	//Get post from group
	$rs = $api->getGroupPost($group_kinhdoanh, LIMIT_POST, TOKEN_PROFILE);
	
	if($rs != NULL && isset($rs->data) == TRUE){
		$arr_check_duplicate = [];			
		foreach($rs->data as $item){
			$post_id = explode("_",$item->id)[1];
			if(isset($item->message) == FALSE){
				echo "$post_id -> Error not exist message object.\r\n";
				continue;
			}
			
			$message = $item->message;
			$permalink_url = $item->permalink_url;
			$media = $item->attachments->data[0]->subattachments->data;
			
			$id_duplicate = repoCheckDuplicateContent($message, $post_id, $arr_check_duplicate);
			if($id_duplicate !== FALSE){
				echo "$post_id -> Duplicate content with $id_duplicate .\r\n";
				continue;
			}
			
			$attachments = [];
			foreach($media as $item){
				if(isset($item->media->source)){
					//$attachments[] = $item->media->source;
				}
				else{
					$attachments[] = $item->media->image->src;
				}
			}
			
			//Thay đổi giá cộng tác viên
			$pattern = "/(CTV|ctv)(.*)/";
			preg_match ( $pattern , $message, $matches);
			$matches=array_map('trim',$matches);
			$price = "Giá : Liên Hệ";
			if($matches != NULL && count($matches) > 0){
				//Replace x or X -> 0
				$price = preg_replace("/[xX]/", "0", $matches[0]);
				//Remove all non numeric characters
				$price = preg_replace("/[^0-9]/", "", $price);
				$price = "���� GIÁ : " . number_format(round((int)$price + EXTRA_PRICE)) . "K";
			}
			else{
				echo "$post_id -> Error price invalid.\r\n";
				continue;
			}
			
			//Remove all link
			//$message = trim(preg_replace("/(.*\d+\.*X*x*\.*[kK])/", "", $message));
			
			//Remove all price
			$message = trim(preg_replace("/(.*\d+\.*X*x*\.*[kK])/", "", $message));
			
			//Remove all empty line
			$message = trim(preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\r\n", $message));
			
			//Append custome text
			$message = "[ Hàng Quốc Tế Cao Cấp Xách Tay ]\r\n" . $message;
			$message .= "\r\n" . $price;
			$message .= "\r\n" . "✔️ Bảo hành 1 năm.";
			$message .= "\r\n" . "✔️ 1 đổi 1 nếu không giống mẫu.";
			$message .= "\r\n" . "✔️ Hàng săn sale mới 100% bao giá thị trường.";
			$message .= "\r\n" . "✔️ Liên hệ 0902676026 hoặc inbox để xem hàng trực tiếp.";
			$message .= "\r\n" . "#DongHoNamNu #HangSanSale #DongHoChinhHang #HangXachTay #GiaSock";
			$message .= "\r\n" . "#ThiTruongGiaReVN #ShopDongHoNamNu #HopTacKinhDoanh #HangNuocNgoai #DongHoThoiTrang #$post_id";
			//var_dump($message);
			
			//Get page post
			$rs_page_post = $api->getPagePost($page_dongho, LIMIT_POST_CHECK, TOKEN_PAGE);
			$arr_page_post = [];
			if($rs_page_post != NULL && isset($rs_page_post->data) == TRUE){
				foreach($rs_page_post->data as $page_item){
					$arr_page_post[] = $page_item->message;
				}
			}
			//var_dump($arr_page_post);die();
			//var_dump($post_id);die();
			$arr_matchs = preg_grep("/$post_id/", $arr_page_post);
			//var_dump($arr_matchs);die();
			//echo count($arr_matchs);die();
			if(count($arr_matchs) === 0){					
				//Post to page
				if(POST_FLG === TRUE){
					$rs = $api->createPagePost($page_dongho, $message, $attachments, TOKEN_PAGE);
				}
				echo "$post_id -> Posted.\r\n";
			}
			else{
				echo "$post_id -> Skipped.\r\n";
			}
		}
	}
	
	echo 'End crontab';
	die();
	return FALSE;#Stop Route
}

function repoCheckDuplicateContent($msg, $post_id, &$arr){
	$isDuplicate = FALSE;
	foreach($arr as $key => $item){
		similar_text($msg,$item,$percent);
		if($percent >= 80){
			$isDuplicate = $key;
			/*var_dump($msg);
			var_dump($item);
			var_dump($percent);*/
			break;
		}
	}
	$arr[$post_id] = $msg;
	
	return $isDuplicate;
}