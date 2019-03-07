<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type:text/html;charset=utf8');
class Fileimage extends AD_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('admin/Mfileimage','ai');
    }
	public function index() {
	    $this->load->helper('url');
	    $this->load->helper('utf8');
	    $server = base_url();
		$this->lang->load('filemanager_lang','english');
		$page = $this->input->get('page');
		if (!isset($page)) {
			$page = 1;
		} 
		$directories = array();
		$files = array();
		$data['images'] = array();

		$images = $this->ai->getimagelist();


		
		// //print_r($directories);exit;
		// // Merge directories and files
		// $images = array_merge($directories, $files);
			
		// Get total number of files and directories
		$image_total = count($images);

		// Split the array based on current page number and max number of items per page of 10
		$images = array_splice($images, ($page - 1) * 4, 8);

		$thumb = $this->input->get('thumb');
		$target = $this->input->get('target');

		foreach ($images as $image) {
			// $name = str_split(basename($image), 34);
			// $name = implode(' ', $name);
			// $name = $this->word_limiter($name,12);
			// if (is_dir($image)) {
				$name = $image['image'];
				$id = $image['id'];
				$data['images'][] = array(
					'id'    => $id,
					'thumb' => $name,
					'name'  => $name,
					'type'  => 'image',
					'path'  => $name,
					'href'  => $name
				);
				
			// } elseif (is_file($image)) {
			// 	$data['images'][] = array(
			// 		//'thumb' => $this->myimage->resize(utf8_substr($image, utf8_strlen(DIR_IMAGE)), 100, 100),
			// 		'thumb' => $image,
			// 		'name'  => $name,
			// 		'type'  => 'image',
			// 		'path'  => utf8_substr($image, utf8_strlen(DIR_IMAGE)),
			// 		'href'  => $server . 'image/' . utf8_substr($image, utf8_strlen(DIR_IMAGE))
			// 	);
			// }
		}
		require_once APPPATH.'libraries/Libpagination.php';

		$pagination = new Libpagination();
		$pagination->total = $image_total;
		$pagination->page = $page;
		$pagination->limit = 8;
		$pagination->url = ('/admin/Fileimage/index&page={page}');
		$data['pagination'] = $pagination->render();
		echo $this->load->view('admin/filemanager/newfile',$data,TRUE);
	}
	
	function word_limiter($value, $limit = 5, $end = '...')
	{
	  if (mb_strwidth($value, 'UTF-8') <= $limit) {
	    return $value;
	  }
	  return rtrim(mb_strimwidth($value, 0, $limit, '', 'UTF-8')).$end;
	}
}