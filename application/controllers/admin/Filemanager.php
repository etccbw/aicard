<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type:text/html;charset=utf8');
class Filemanager extends AD_Controller {
	public function index() {
	    $this->load->helper('url');
	    $this->load->helper('utf8');
	    $server = base_url();
		$this->lang->load('filemanager_lang','english');
		
		// Find which protocol to use to pass the full image link back
		$filter_name = $this->input->get('filter_name');
		if (isset($filter_name)) {
			$filter_name = rtrim(str_replace(array('*', '/', '\\'), '', $filter_name), '/');
		} else {
			$filter_name = '';
		}

		// Make sure we have the correct directory
		$directory = $this->input->get('directory');

		if (isset($directory)) {
			$directory = rtrim(DIR_IMAGE . 'catalog/' . str_replace('*', '', $directory), '/');
		} else {
			$directory = DIR_IMAGE . 'catalog';
		}
		
		$page = $this->input->get('page');
		if (!isset($page)) {
			$page = 1;
		} 
		$directories = array();
		$files = array();

		$data['images'] = array();

		//$this->load->library('Myimage');
		
		if (substr(str_replace('\\', '/', realpath($directory) . '/' . $filter_name), 0, strlen(DIR_IMAGE . 'catalog')) == str_replace('\\', '/', DIR_IMAGE . 'catalog')) {
			// Get directories
			$directories = glob($directory . '/' . $filter_name . '*', GLOB_ONLYDIR);

			if (!$directories) {
				$directories = array();
			}


			// Get files
			$files = glob($directory . '/' . $filter_name . '*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}', GLOB_BRACE);

			if (!$files) {
				$files = array();
			}
		}

		


		
		//print_r($directories);exit;
		// Merge directories and files
		$images = array_merge($directories, $files);

		// Get total number of files and directories
		$image_total = count($images);

		// Split the array based on current page number and max number of items per page of 10
		$images = array_splice($images, ($page - 1) * 4, 8);
		$thumb = $this->input->get('thumb');
		$target = $this->input->get('target');
		foreach ($images as $image) {
			$name = str_split(basename($image), 34);
			$name = implode(' ', $name);
			$name = $this->word_limiter($name,12);
			if (is_dir($image)) {
				$url = '';
				
				if (isset($target)) {
					$url .= '&target=' . $target;
				}

				if (isset($thumb)) {
					$url .= '&thumb=' . $thumb;
				}

				$data['images'][] = array(
					'thumb' => '',
					'name'  => $name,
					'type'  => 'directory',
					'path'  => utf8_substr($image, utf8_strlen(DIR_IMAGE)),
					'href'  => site_url('admin/filemanager?directory=' . urlencode(utf8_substr($image, utf8_strlen(DIR_IMAGE . 'uploads/'))) . $url)
				);
			} elseif (is_file($image)) {
				$data['images'][] = array(
					//'thumb' => $this->myimage->resize(utf8_substr($image, utf8_strlen(DIR_IMAGE)), 100, 100),
					'thumb' => $image,
					'name'  => $name,
					'type'  => 'image',
					'path'  => utf8_substr($image, utf8_strlen(DIR_IMAGE)),
					'href'  => $server . 'image/' . utf8_substr($image, utf8_strlen(DIR_IMAGE))
				);
			}
		}
		$directory = $this->input->get('directory');
		if (isset($directory)) {
			$data['directory'] = urlencode($directory);
		} else {
			$data['directory'] = '';
		}
		$filter_name = $this->input->get('filter_name');
		if (isset($filter_name)) {
			$data['filter_name'] = $filter_name;
		} else {
			$data['filter_name'] = '';
		}

		// Return the target ID for the file manager to set the value
		$target = $this->input->get('target');
		if (isset($target)) {
			$data['target'] = $target;
		} else {
			$data['target'] = '';
		}

		// Return the thumbnail for the file manager to show a thumbnail
		
		if (isset($thumb)) {
			$data['thumb'] = $thumb;
		} else {
			$data['thumb'] = '';
		}

		// Parent
		$url = '?';
		$directory = $this->input->get('directory');
		if (isset($directory)) {
			$pos = strrpos($directory, '/');

			if ($pos) {
				$url .= '&directory=' . urlencode(substr($directory, 0, $pos));
			}
		}
		$target = $this->input->get('target');
		if (isset($target)) {
			$url .= '&target=' . $target;
		}

		if (isset($thumb)) {
			$url .= '&thumb=' . $thumb;
		}

		$data['parent'] = site_url('admin/filemanager/index'.$url);

		// Refresh
		$url = '?';

		if (isset($directory)) {
			$url .= '&directory=' . urlencode($directory);
		}

		if (isset($target)) {
			$url .= '&target=' . $target;
		}

		if (isset($thumb)) {
			$url .= '&thumb=' . $thumb;
		}

		$data['refresh'] = site_url('admin/filemanager/index'. $url);

		$url = '?';
		
		if (isset($directory)) {
			$url .= '&directory=' . urlencode(html_entity_decode($directory, ENT_QUOTES, 'UTF-8'));
		}

		if (isset($filter_name)) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($filter_name, ENT_QUOTES, 'UTF-8'));
		}

		if (isset($target)) {
			$url .= '&target=' . $target;
		}

		if (isset($thumb)) {
			$url .= '&thumb=' . $thumb;
		}
		require_once APPPATH.'libraries/Libpagination.php';
		$pagination = new Libpagination();
		$pagination->total = $image_total;
		$pagination->page = $page;
		$pagination->limit = 8;
		$pagination->url = site_url('admin/filemanager/index'. $url.'&page={page}');

		$data['pagination'] = $pagination->render();
		$url = $_SERVER['HTTP_REFERER'];
		$url = explode("/",$url);
		$url = end($url);
		$data['url'] = $url;
		echo $this->load->view('admin/filemanager/index',$data,TRUE);
	}

	public function upload() {
	    $this->load->helper('utf8');
		$this->lang->load('filemanager_lang','english');
		$this->load->library('request');
		$json = array();

		// Check user has permission
//		if (!$this->user->hasPermission('modify', 'common/filemanager')) {
//			$json['error'] = $this->lang->line('error_permission');
//		}

		$directory = $this->request->get['directory'];

	
		// Make sure we have the correct directory
		if (isset($directory)) {
			$directory = rtrim(DIR_IMAGE . 'catalog/' . $directory, '/');
		} else {
			$directory = DIR_IMAGE . 'catalog';
		}
		
		// Check its a directory
		if (!is_dir($directory) || substr(str_replace('\\', '/', realpath($directory)), 0, strlen(DIR_IMAGE . 'catalog')) != str_replace('\\', '/', DIR_IMAGE . 'catalog')) {
			//$json['error'] = $this->lang->line('error_directory').BASEPATH;
		}

		//$json['error'] = $this->lang->line($directory);
		if (!$json) {
			// Check if multiple files are uploaded or just one
			$files = array();
			if (!empty($this->request->files['file']['name']) && is_array($this->request->files['file']['name'])) {
				foreach (array_keys($this->request->files['file']['name']) as $key) {
					$files[] = array(
						'name'     => $this->request->files['file']['name'][$key],
						'type'     => $this->request->files['file']['type'][$key],
						'tmp_name' => $this->request->files['file']['tmp_name'][$key],
						'error'    => $this->request->files['file']['error'][$key],
						'size'     => $this->request->files['file']['size'][$key]
					);
				}
			}


			//$filename = ;
			
			foreach ($files as $file) {
				if (is_file($file['tmp_name'])) {
					// Sanitize the filename
					$filename = basename(html_entity_decode($file['name'], ENT_QUOTES, 'UTF-8'));

					// Validate the filename length
					if ((utf8_strlen($filename) < 3) || (utf8_strlen($filename) > 255)) {
						$json['error'] = $this->lang->line('error_filename');
					}

					// Allowed file extension types
					$allowed = array(
						'jpg',
						'jpeg',
						'gif',
						'png'
					);

					if (!in_array(utf8_strtolower(utf8_substr(strrchr($filename, '.'), 1)), $allowed)) {
						$json['error'] = $this->lang->line('error_filetype');
					}

					// Allowed file mime types
					$allowed = array(
						'image/jpeg',
						'image/pjpeg',
						'image/png',
						'image/x-png',
						'image/gif'
					);

					if (!in_array($file['type'], $allowed)) {
						$json['error'] = $this->lang->line('error_filetype');
					}

					// Return any upload error
					if ($file['error'] != UPLOAD_ERR_OK) {
						$json['error'] = $this->lang->line('error_upload_' . $file['error']);
					}
				} else {
					$json['error'] = $this->lang->line('error_upload');
				}

				$cat_name = $this->request->get['cat_name'];
				$filetype = explode(".",$filename);
				$filetype = end($filetype);
				$filename= $cat_name.date( "YmdHis" ).'.'.$filetype;
				if (!$json) {
					move_uploaded_file($file['tmp_name'], $directory . '/' . $filename);
				}
			}
		}
		if (!$json) {
			$json['success'] = $this->lang->line('text_uploaded');
		}
		$this->return_ajax($json);
	}

	public function folder() {
	    $this->load->helper('utf8');
		$this->lang->load('filemanager_lang','english');
		$json = array();

		// Check user has permission
//		if (!$this->user->hasPermission('modify', 'common/filemanager')) {
//			$json['error'] = $this->lang->line('error_permission');
//		}
		$directory = $this->request->get['directory'];
		// Make sure we have the correct directory
		if (isset($directory)) {
			$directory = rtrim(DIR_IMAGE . 'catalog/' . $directory, '/');
		} else {
			$directory = DIR_IMAGE . 'catalog';
		}

		// Check its a directory
		if (!is_dir($directory) || substr(str_replace('\\', '/', realpath($directory)), 0, strlen(DIR_IMAGE . 'catalog')) != str_replace('\\', '/', DIR_IMAGE . 'catalog')) {
			$json['error'] = $this->lang->line('error_directory');
		}

		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
			// Sanitize the folder name
			$folder = basename(html_entity_decode($this->request->post['folder'], ENT_QUOTES, 'UTF-8'));

			// Validate the filename length
			if ((utf8_strlen($folder) < 3) || (utf8_strlen($folder) > 128)) {
				$json['error'] = $this->lang->line('error_folder');
			}

			// Check if directory already exists or not
			if (is_dir($directory . '/' . $folder)) {
				$json['error'] = $this->lang->line('error_exists');
			}
		}

		if (!isset($json['error'])) {
			mkdir($directory . '/' . $folder, 0777);
			chmod($directory . '/' . $folder, 0777);

			@touch($directory . '/' . $folder . '/' . 'index.html');

			$json['success'] = $this->lang->line('text_directory');
		}
		$this->return_ajax($json);
	}

	public function delete() {
	    $this->load->helper('utf8');
		$this->lang->load('filemanager_lang','english');

		$json = array();

		// Check user has permission
//		if (!$this->user->hasPermission('modify', 'common/filemanager')) {
//			$json['error'] = $this->lang->line('error_permission');
//		}
		
		if (isset($this->request->post['path'])) {
			$paths = $this->request->post['path'];
		} else {
			$paths = array();
		}

		// Loop through each path to run validations
		foreach ($paths as $path) {
			// Check path exsists
			if ($path == DIR_IMAGE . 'catalog' || substr(str_replace('\\', '/', realpath(DIR_IMAGE . $path)), 0, strlen(DIR_IMAGE . 'catalog')) != str_replace('\\', '/', DIR_IMAGE . 'catalog')) {
				$json['error'] = $this->lang->line('error_delete');

				break;
			}
		}

		if (!$json) {
			// Loop through each path
			foreach ($paths as $path) {
				$path = rtrim(DIR_IMAGE . $path, '/');

				// If path is just a file delete it
				if (is_file($path)) {
					unlink($path);

				// If path is a directory beging deleting each file and sub folder
				} elseif (is_dir($path)) {
					$files = array();

					// Make path into an array
					$path = array($path);

					// While the path array is still populated keep looping through
					while (count($path) != 0) {
						$next = array_shift($path);

						foreach (glob($next) as $file) {
							// If directory add to path array
							if (is_dir($file)) {
								$path[] = $file . '/*';
							}

							// Add the file to the files to be deleted array
							$files[] = $file;
						}
					}

					// Reverse sort the file array
					rsort($files);

					foreach ($files as $file) {
						// If file just delete
						if (is_file($file)) {
							unlink($file);

						// If directory use the remove directory function
						} elseif (is_dir($file)) {
							rmdir($file);
						}
					}
				}
			}

			$json['success'] = $this->lang->line('text_delete');
		}
		$this->return_ajax($json);
	}
	function word_limiter($value, $limit = 5, $end = '...')
	{
	  if (mb_strwidth($value, 'UTF-8') <= $limit) {
	    return $value;
	  }
	  return rtrim(mb_strimwidth($value, 0, $limit, '', 'UTF-8')).$end;
	}
}