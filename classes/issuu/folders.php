<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Issuu.com API interface.
 * Manager Folders
 * 
 * @author Luiz Alberto (http://beto.euqueroserummacaco.com)
 * @version 0.1
 * @see http://issuu.com/services/api/
 */
class Issuu_Folders {
	
	/**
	* Folder List
	* @see http://issuu.com/services/api/issuu.folder.list.html
	*/
	public static function listt($params){
		
		$params['action'] = 'issuu.folders.list';		
		return Issuu_Utils::get_action_URL($params);
	}
	
	
	/**
	* Folder Update
	* @see http://issuu.com/services/api/issuu.folder.update.html
	*/
	public static function update($params){
		
		$params['action'] = 'issuu.folder.update';
		return Issuu_Utils::get_action_URL($params);
	}
	
	/**
	* Folder Add
	* @see http://issuu.com/services/api/issuu.folder.add.html
	*/
	public static function add($params){
		
		$params['action'] = 'issuu.folder.add';
		return Issuu_Utils::get_action_URL($params);;
	}
	
	/**
	* Folder Delete
	* @see http://issuu.com/services/api/issuu.folder.delete.html
	*/
	public static function delete($params){
		
		$params['action'] = 'issuu.folder.delete';
		return Issuu_Utils::get_action_URL($params);
	}
	
	
	
	
	
}