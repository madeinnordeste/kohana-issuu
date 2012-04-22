<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Issuu_Examples extends Controller{
	
	
	
	public function menu(){
		
		$methods = get_class_methods($this);
		
		echo '<h1>Issuu</h1>';
		echo '<ul>';
		
		foreach($methods as $method){
			
			
			
			$prefixx = substr($method, 0, 7);
				if($prefixx == 'action_'){
					
					echo '<li>';
					
					$name = substr($method, 7);					
					echo html::anchor('issuu/examples/'.$name, $name);
					
					echo '</li>';
				}
			
			
			
		}
		
		echo '</ul>';
		
		
		
	}
	
	
	public function before(){
		$this->menu();
		
	}
	
	
	public function action_index(){}
	
	
	public function action_document_list(){
		
		
		
		$params = array('access' => 'public',
						'responseParams' => 'username,name,documentId,title,access,
													state,errorCode,category,type,orgDocType,
													orgDocName,origin,language,pageCount,publishDate,
													description,tags,warnings,folders',
						'format' => 'xml',
						'startIndex' => '0',
						'pageSize' => '10',
						'documentSortBy' => 'publishDate',
						'documentStates' => 'A',
						'orgDocTypes' => 'pdf,doc',
						'resultOrder' => 'desc');
		
		
						
		
		$url = Issuu_Documents::listt($params);
		
		$xml = simplexml_load_file($url);
		echo Kohana::debug($xml);
		
		
				
	}
	
	
	public static function action_document_edit(){
			
			
			$params = array('name' => 'document_for_edit',
							'title' => 'Document Edited',
							'description' => 'Description for edited document',
							'format' => 'xml',
							'access' => 'public');
			
			
			$url = Issuu_Documents::update($params);

			$xml = simplexml_load_file($url);
			echo Kohana::debug($xml);
		
	}	
	
	
	public function action_document_upload_url(){
		
		
		$params = array('access' => 'public',
						'responseParams' => 'username,name,documentId,title,access,
													state,category,type,orgDocType,orgDocName,
													origin,language,pageCount,publishDate,
													description,tags,folders',
						'format' => 'xml',
						'slurpUrl' => 'http://www.youdomain.com/pdf-test.pdf',
						'name' => 'document_uploaded',
						'folderIds' => 'f2252758-5e5c-4885-b2d4-077a3e6ba909',
						'title' => 'Upload document title');
						
		
		$url = Issuu_Documents::url_upload($params);

		$xml = simplexml_load_file($url);
		echo Kohana::debug($xml);				
		
		
	}
	
	
	public function action_document_delete(){
		
		
		$params = array('format' => 'xml',
						'names' => 'name_to_document_delete');
						
		
		$url = Issuu_Documents::delete($params);

		$xml = simplexml_load_file($url);
		echo Kohana::debug($xml);				
		
		
	}	
	

	public function action_document_list_active(){
		
		
		
		$params = array('access' => 'public',
						'responseParams' => 'username,name,documentId,title,access,state,
													errorCode,category,type,orgDocType,orgDocName,
													origin,language,pageCount,publishDate,description,
													tags,warnings,folders',
						'format' => 'xml',
						'startIndex' => '0',
						'pageSize' => '10',
						'documentSortBy' => 'publishDate',
						'documentStates' => 'A',
						'orgDocTypes' => 'pdf,doc',
						'resultOrder' => 'desc');
		
		
						
		
		$url = Issuu_Documents::listt($params);
		
		$xml = simplexml_load_file($url);
		echo Kohana::debug($xml);
		
		
				
	}	
	
	
	public function action_document_list_fail(){
		
		
		
		$params = array('access' => 'public',
						'documentStates' => 'F',
						'responseParams' => 'username,name,documentId,title,access,state,errorCode,
													category,type,orgDocType,orgDocName,origin,language,
													pageCount,publishDate,description,tags,warnings,folders',
						'format' => 'xml',
						'documentSortBy' => 'publishDate');
		
		
						
		
		$url = Issuu_Documents::listt($params);
		
		$xml = simplexml_load_file($url);
		echo Kohana::debug($xml);
		
		
				
	}	
	
	
	
	public function action_document_list_process(){
		
		
		
		$params = array('action' => 'issuu.documents.list', 
						'apiKey' => Kohana::config('issuu.api_key'),
						'access' => 'public',
						'documentStates' => 'P',
						'responseParams' => 'username,name,documentId,title,access,state,errorCode,category,
													type,orgDocType,orgDocName,origin,language,pageCount,publishDate,
													description,tags,warnings,folders',
						'format' => 'xml',
						'documentSortBy' => 'publishDate');
	
		
		
						
		
		$url = Issuu_Documents::listt($params);
		
		$xml = simplexml_load_file($url);
		echo Kohana::debug($xml);
		
		
				
	}	
	
	

	public function action_folder_list(){
		
		
		
		$params = array('format' => 'xml');
		
		$url = Issuu_Folders::listt($params);

		$xml = simplexml_load_file($url);
		echo Kohana::debug($xml);
		
				
	}	
	
	public function action_folder_update(){
		
		
		
		$params = array('format' => 'xml',
						'folderName' => 'Folder updated',
						'folderId' => 'f2252758-5e5c-4885-b2d4-077a3e6ba909',
						'folderDescription' => 'Description for updated folder');
		
		$url = Issuu_Folders::update($params);

		$xml = simplexml_load_file($url);
		echo Kohana::debug($xml);
		
				
	}
	
	public function action_folder_add(){
		
		
		
		$params = array('format' => 'xml',
						'folderName' => 'New Folder',						
						'folderDescription' => 'New Folder description');
		
		$url = Issuu_Folders::add($params);

		$xml = simplexml_load_file($url);
		echo Kohana::debug($xml);
		
				
	}
	
	
	
	public function action_folder_delete(){
		
		
		
		$params = array('format' => 'xml',
						'folderIds' => 'e06828bc-faf3-4f41-aed3-ad08647aeab7');
						
		
		$url = Issuu_Folders::delete($params);

		$xml = simplexml_load_file($url);
		echo Kohana::debug($xml);
		
				
	}
	
	
	
	
}
