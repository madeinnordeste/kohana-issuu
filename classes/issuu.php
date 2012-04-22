<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Issuu.com API interface.
 *
 * @author Luiz Alberto (http://beto.euqueroserummacaco.com)
 * @version 0.1
 * @see http://issuu.com/services/api/
 */
class Issuu {
	
	//Documents
	
	/**
	* List documents
	* @see http://issuu.com/services/api/issuu.document.list.html
	*/	
	public static function document_list($params){
		return Issuu_Documents::listt($params);
	}
	
	/**
	* Document Update
	* @see http://issuu.com/services/api/issuu.document.update.html
	*/
	public static function document_update($params){
		return Issuu_Documents::update($params);
	}
	
	/**
	* Document URL Upload
	* @see http://issuu.com/services/api/issuu.document.url_upload.html
	*/
	public static function document_url_upload($params){
		return Issuu_Documents::url_upload($params);
	}
	
	/**
	* Document Delete
	* @see http://issuu.com/services/api/issuu.document.delete.html
	*/
	public static function document_delete($params){
		return Issuu_Documents::delete($params);
	}
	
	/**
	* Get document thumbnail URL	
	*/
	public static function document_thumbnail_url($id, $size='l'){
		return Issuu_Documents::thumbnail_url($id, $size='l');
	}
	
	
	//Folders
	
	/**
	* Folder List
	* @see http://issuu.com/services/api/issuu.folder.list.html
	*/
	public static function folder_list($params){
		return Issuu_Folders::listt($params);
	}
	
	/**
	* Folder Update
	* @see http://issuu.com/services/api/issuu.folder.update.html
	*/
	public static function folder_update($params){
		return Issuu_Folders::update($params);
	}
	
	/**
	* Folder Add
	* @see http://issuu.com/services/api/issuu.folder.add.html
	*/
	public static function folder_add($params){
		return Issuu_Folders::add($params);
	}
	
	/**
	* Folder Delete
	* @see http://issuu.com/services/api/issuu.folder.delete.html
	*/
	public static function folder_delete($params){
		return Issuu_Folders::delete($params);
	}
	
}