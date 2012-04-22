<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Issuu.com API interface.
 * Manager Documents
 * 
 * @author Luiz Alberto (http://beto.euqueroserummacaco.com)
 * @version 0.1
 * @see http://issuu.com/services/api/
 */
class Issuu_Documents {
	
	/**
	* List documents
	* @see http://issuu.com/services/api/issuu.document.list.html
	*/
	public static function listt($params){
		
		$params['action'] = 'issuu.documents.list';
		return Issuu_Utils::get_action_URL($params);
	}
	
	
	/**
	* Document Update
	* @see http://issuu.com/services/api/issuu.document.update.html
	*/
	public static function update($params){
		
		$params['action'] = 'issuu.document.update';
		return Issuu_Utils::get_action_URL($params);
		
	}
	
	
	/**
	* Document URL Upload
	* @see http://issuu.com/services/api/issuu.document.url_upload.html
	*/
	public static function url_upload($params){
		
		$params['action'] = 'issuu.document.url_upload';
		return Issuu_Utils::get_action_URL($params);
		
	}
	
	
	/**
	* Document Delete
	* @see http://issuu.com/services/api/issuu.document.delete.html
	*/
	public static function delete($params){
		
		$params['action'] = 'issuu.document.delete';
		return Issuu_Utils::get_action_URL($params);
		
	}
	

	/**
	* Get document thumbnail URL	
	* size: l = large, m = medium, s = small
	*/	
	public static function thumbnail_url($id, $size='l', $page=1){
		
		$sizes = array('s' => 'small', 'm' => 'medium', 'l' => 'large');
		
		$url = 'http://image.issuu.com/';
		$url.= $id;
		$url.='/jpg/page_'.$page.'_thumb_'.$sizes[$size].'.jpg';
		
		return $url;
		
	}
	
	
	/**
	* Document Upload
	* @see http://issuu.com/services/api/issuu.document.upload.html
	*/
	public static function upload($params){
				
		$params['action'] = 'issuu.document.upload';
		return Issuu_Utils::get_action_URL($params);
		
	}
	
	
	
}