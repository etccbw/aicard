<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends AD_Controller {
    public function __construct() {
	parent::__construct();

	$this->load->helper('url');
        $this->load->database();
    }

	public function index()
	{
		$db = $this->load->database();
		$allarr = $this->db->order_by('sort')->where(array('delete'=>null))->get('page_show')->result_array();
		if(empty($allarr)){
		$data['set'] = $this->load->view('setno','',true);
		$data['mod'] = $this->load->view('modno','',true);
	    }else{
	    	$data['tarr']=array();
	     foreach ($allarr as $k => $v) {
	     $data['newsin'] = array();
	     $data['mg'] = array();
	     $data['tvin'] = array();
          $data['divid'] = $v['divid'];
          $data['engdt'] = $v['engdt'];
          if($v['engdt']=='companynews'){
	      $data['news'] = $this->db->where('divid',$v['divid'])->get('companynews')->row_array();
             if($data['news']){
             	$newid = explode(",", $data['news']['newid']);
             	foreach ($newid as $m) {
	             $data['newsin'][] = $this->db->where('id',$m)->get('companynewsinfo')->row_array();	
             	}
             }
          }elseif($v['engdt']=='companyintv'){
          	 $data['tv'] = $this->db->where('divid',$v['divid'])->get('companyintv')->row_array();
             if($data['tv']){
             	$newid = explode(",", $data['tv']['intvid']);
             	foreach ($newid as $m) {
	             $data['tvin'][] = $this->db->where('id',$m)->get('companyintvinfo')->row_array();	
             	}
             }
          }elseif($v['engdt']=='companymage'){
          	 $data['mage'] = $this->db->where('divid',$v['divid'])->get('companymage')->row_array();
             if($data['mage']){
             	$mageid = explode(",", $data['mage']['mageid']);
             	foreach ($mageid as $m) {
	             $data['mg'][] = $this->db->where('id',$m)->get('companymageinfo')->row_array();	
             	}
             }
          }
	      $data['teaminfo'] = $this->db->where('divid',$v['divid'])->get('companyteaminfo')->result_array();
          $data['mod_info'] = $this->db->where('divid',$v['divid'])->get($v['engdt'])->row_array();
          $data['mod'] =$this->load->view('mod'.substr($v['divid'],0,strpos($v['divid'], '-')),$data,true);
          $data['temp'] = $this->load->view("template",$data,true);
          array_push($data['tarr'],$data['temp']);
	     }
	    $data['mageinfo'] = $this->db->where(array('del'=>null))->get('companymageinfo')->result_array();
	    $data['newsinfo'] = $this->db->where(array('del'=>null))->get('companynewsinfo')->result_array();
	    $data['tvinfo'] = $this->db->where(array('del'=>null))->get('companyintvinfo')->result_array();
	    $data['sarr'] = array_shift($allarr);//获取第一条数据
	    $data['dt'] = substr($data['sarr']['divid'],0,strpos($data['sarr']['divid'], '-'));
	    $data['sid'] = $data['sarr']['divid'];
	    $data['set_info'] = $this->db->where('divid',$data['sarr']['divid'])->get($data['sarr']['engdt'])->row_array();
	    $data['set_info']['setdt'] = substr($data['sarr']['divid'],0,strpos($data['sarr']['divid'], '-'));
	    $data['set'] = $this->load->view("set".$data['set_info']['setdt'],$data,true);
	    }

		$this->load->view('homepage',$data);
	    
	}
	public function addiv($divid)
	{
                $data['divid'] = $divid;
		 $data['mod'] = $this->load->view('mod'.substr($divid,0,strpos($divid, '-')),$data,true);
            echo $this->load->view("template",$data,true);
		//echo $_POST['datatype'];exit();
	}
	public function setpage($divid)
	{
            
		  $data['dt'] = substr($divid,0,strpos($divid, '-'));
		  $data['sid'] = $divid;
	      $data['mageinfo'] = $this->db->where(array('del'=>null))->get('companymageinfo')->result_array();
	      $data['newsinfo'] = $this->db->where(array('del'=>null))->get('companynewsinfo')->result_array();
	      $data['tvinfo'] = $this->db->where(array('del'=>null))->get('companyintvinfo')->result_array();
         echo $this->load->view("set".$data['dt'],$data,true);
		//echo $_POST['datatype'];exit();
	}
	public function edit_show($divid){
		  $data['dt'] = substr($divid,0,strpos($divid, '-'));
		  $data['sid'] = $divid;
		  $dtarr = $this->db->where('num_dt',$data['dt'])->get('data_type')->row_array();
	      $data['set_info'] = $this->db->where('divid',$divid)->get($dtarr['eng_dt'])->row_array();
	      $data['mageinfo'] = $this->db->where(array('del'=>null))->get('companymageinfo')->result_array();
	      $data['newsinfo'] = $this->db->where(array('del'=>null))->get('companynewsinfo')->result_array();
	      $data['tvinfo'] = $this->db->where(array('del'=>null))->get('companyintvinfo')->result_array();
         echo $this->load->view("set".$data['dt'],$data,true);
	}
     //图片设置
	public function add_image(){
		$pic1 = isset($_FILES['pic1']) ? $this->file_upload('pic1') : '';
		$pic2 = isset($_FILES['pic2']) ? $this->file_upload('pic2') : '';
		$pic3 = isset($_FILES['pic3']) ? $this->file_upload('pic3') : '';
		$pic4 = isset($_FILES['pic4']) ? $this->file_upload('pic4') : '';
		$rearr = $this->db->where('divid',$_POST['sid'])->get('page_show')->result_array();
		$eng_dt = $this->db->select('eng_dt')->where('num_dt',$_POST['dt'])->get('data_type')->row_array();
	 if($_POST){ 
	 	if(empty($rearr)){
	 	   $data = array(
                    'divid'   => $_POST['sid'],
                    'addtime' => date('Y-m-d H:i:s',time()),
                    'engdt'   => $eng_dt['eng_dt'],
		            );
          $this->db->insert('page_show',$data);
	    } 
        $comdata['divid'] = $_POST['sid'];
		$comdata['img1'] = (!empty($pic1)) ? ('uploads/'.$pic1) : '';
		$comdata['img2'] = (!empty($pic2)) ? ('uploads/'.$pic2) : '';
		$comdata['img3'] = (!empty($pic3)) ? ('uploads/'.$pic3) : '';
		$comdata['img4'] = (!empty($pic4)) ? ('uploads/'.$pic4) : '';
	    $bool = $this->db->where('divid',$_POST['sid'])->get($eng_dt['eng_dt'])->result_array();
		if(!empty($bool)){
			$this->db->update($eng_dt['eng_dt'],$comdata,array('divid'=>$_POST['sid']));
		}else{
			$this->db->insert($eng_dt['eng_dt'],$comdata);
		}
       $this->mode_update();
	 }else{
	 	return false;
	 }
	}
	public function mode_update(){
		$db = $this->load->database();
		$allarr = $this->db->order_by('sort')->where(array('delete'=>null))->get('page_show')->result_array();
	    	$data['tarr']=array();
	     foreach ($allarr as $k => $v) {
	     $data['newsin'] = array();
	     $data['mg'] = array();
	     $data['tvin'] = array();
          $data['divid'] = $v['divid'];
          $data['engdt'] = $v['engdt'];
          if($v['engdt']=='companynews'){
	      $data['news'] = $this->db->where('divid',$v['divid'])->get('companynews')->row_array();
             if($data['news']){
             	$newid = explode(",", $data['news']['newid']);
             	foreach ($newid as $m) {
	             $data['newsin'][] = $this->db->where('id',$m)->get('companynewsinfo')->row_array();	
             	}
             }
          }elseif($v['engdt']=='companyintv'){
          	 $data['tv'] = $this->db->where('divid',$v['divid'])->get('companyintv')->row_array();
             if($data['tv']){
             	$newid = explode(",", $data['tv']['intvid']);
             	foreach ($newid as $m) {
	             $data['tvin'][] = $this->db->where('id',$m)->get('companyintvinfo')->row_array();	
             	}
             }
          }elseif($v['engdt']=='companymage'){
          	 $data['mage'] = $this->db->where('divid',$v['divid'])->get('companymage')->row_array();
             if($data['mage']){
             	$mageid = explode(",", $data['mage']['mageid']);
             	foreach ($mageid as $m) {
	             $data['mg'][] = $this->db->where('id',$m)->get('companymageinfo')->row_array();	
             	}
             }
          }
	      $data['teaminfo'] = $this->db->where('divid',$v['divid'])->get('companyteaminfo')->result_array();
          $data['mod_info'] = $this->db->where('divid',$v['divid'])->get($v['engdt'])->row_array();
          $data['mod'] =$this->load->view('mod'.substr($v['divid'],0,strpos($v['divid'], '-')),$data,true);
          $data['temp'] = $this->load->view("template",$data,true);
          array_push($data['tarr'],$data['temp']);
	     }
	     echo json_encode($data);	    
	}
	public function add_title(){
		$rearr = $this->db->where('divid',$_POST['sid'])->get('page_show')->result_array();
		$eng_dt = $this->db->select('eng_dt')->where('num_dt',$_POST['dt'])->get('data_type')->result_array();
	  if(empty($rearr)){
		$data = array(
                'divid'   => $_POST['sid'],
                'addtime' => date('Y-m-d H:i:s',time()),
                'engdt'   => $eng_dt[0]['eng_dt'],
		);
        $this->db->insert('page_show',$data);
	  }
	  $engarr = array(
                    'divid'   => $_POST['sid'],
                    'title'   => $_POST['title']);
	  $bool = $this->db->where('divid',$_POST['sid'])->get($eng_dt[0]['eng_dt'])->result_array();
		if(!empty($bool)){
			$this->db->update($eng_dt[0]['eng_dt'],$engarr,array('divid'=>$_POST['sid']));
		}else{
			$this->db->insert($eng_dt[0]['eng_dt'],$engarr);
		}
		$this->mode_update();

	}
	public function add_companyinfo(){
		$rearr = $this->db->where('divid',$_POST['sid'])->get('page_show')->result_array();
		$eng_dt = $this->db->select('eng_dt')->where('num_dt',$_POST['dt'])->get('data_type')->result_array();
	  if(empty($rearr)){
		$data = array(
                'divid'   => $_POST['sid'],
                'addtime' => date('Y-m-d H:i:s',time()),
                'engdt'   => $eng_dt[0]['eng_dt'],
		);
        $this->db->insert('page_show',$data);
	  }
	  $engarr = array(
                    'divid'   => $_POST['sid'],
                    'title'   => $_POST['title'],
                    'info' => $_POST['info']);
	  $bool = $this->db->where('divid',$_POST['sid'])->get($eng_dt[0]['eng_dt'])->result_array();
		if(!empty($bool)){
			$this->db->update($eng_dt[0]['eng_dt'],$engarr,array('divid'=>$_POST['sid']));
		}else{
			$this->db->insert($eng_dt[0]['eng_dt'],$engarr);
		}
		$this->mode_update();

	}
	public function add_textblock(){
		$rearr = $this->db->where('divid',$_POST['sid'])->get('page_show')->result_array();
		$eng_dt = $this->db->select('eng_dt')->where('num_dt',$_POST['dt'])->get('data_type')->result_array();
	  if(empty($rearr)){
		$data = array(
                'divid'   => $_POST['sid'],
                'addtime' => date('Y-m-d H:i:s',time()),
                'engdt'   => $eng_dt[0]['eng_dt'],
		);
        $this->db->insert('page_show',$data);
	  }
	  $engarr = array(
                    'divid'   => $_POST['sid'],
                    'info'   => $_POST['info'],
			);
	  $bool = $this->db->where('divid',$_POST['sid'])->get($eng_dt[0]['eng_dt'])->result_array();
		if(!empty($bool)){
			$this->db->update($eng_dt[0]['eng_dt'],$engarr,array('divid'=>$_POST['sid']));
		}else{
			$this->db->insert($eng_dt[0]['eng_dt'],$engarr);
		}
		$this->mode_update();
	}
	public function sub()
	{
		$rearr = $this->db->where('divid',$_POST['sid'])->get('page_show')->result_array();
		$eng_dt = $this->db->select('eng_dt')->where('num_dt',$_POST['dt'])->get('data_type')->result_array();
		if(empty($rearr)){
			$data = array(
                    'divid'   => $_POST['sid'],
                    'addtime' => date('Y-m-d H:i:s',time()),
                    'engdt'   => $eng_dt[0]['eng_dt'],
			);
            $this->db->insert('page_show',$data);
		}
		if($_POST['dt']==1){
			$engarr = array(
                    'divid'   => $_POST['sid'],
                    'title'   => $_POST['title'],
                    'info' => $_POST['info'],
			);
		}else if($_POST['dt']==9){
			$engarr = array(
                    'divid'   => $_POST['sid'],
                    'title'   => $_POST['title'],
			);
		}else if($_POST['dt']==27){
			$engarr = array(
                    'divid'   => $_POST['sid'],
                    'info'   => $_POST['info'],
			);
		}else if($_POST['dt']==15){
			$engarr = array(
                    'divid'   => $_POST['sid'],
                    'phone'   => $_POST['phone'],
                    'title'   => $_POST['title'],
			);
		}else if($_POST['dt']==7){
			$engarr = array(
                    'divid'   => $_POST['sid'],
                    'pic'   => $this->file_64upload($_POST['pic']),
                    'title'   => $_POST['title'],
                    'person'   => $_POST['person'],
                    'job'         => $_POST['job'],
                    'phone'         => $_POST['phone'],
                    'email'         => $_POST['email'],
			);
		}else if($_POST['dt']==8){
			$engarr = array(
                    'divid'   => $_POST['sid'],
                    'address'   => $_POST['address'],
                    'title'   => $_POST['title'],
			);
		}else if($_POST['dt']==13){
			$engarr = array(
                    'divid'   => $_POST['sid'],
                    'pic'   => $this->file_64upload($_POST['pic']),
                    'video'   => $_POST['video'],
			);
		}else if($_POST['dt']==16){
			$engarr = array(
                    'divid'   => $_POST['sid'],
                    'height'   => $_POST['height'],
			);
		}
		//$bool = $this->db->insert()
		$bool = $this->db->where('divid',$_POST['sid'])->get($eng_dt[0]['eng_dt'])->result_array();
		if(!empty($bool)){
			$this->db->update($eng_dt[0]['eng_dt'],$engarr,array('divid'=>$_POST['sid']));
		}else{
			$this->db->insert($eng_dt[0]['eng_dt'],$engarr);
		}
		$this->mode_update();
	}
	//添加企业资讯信息
	public function add_newsinfo()
	{
	 if($_POST){
       $engarr = array(
                    'tit'   => $_POST['tit'],
                    'time'   => date('Y-m-d H:i:s',time()),
                    'info'   =>$_POST['info'],
			);
       if(!empty($_POST['id'])){
       	 $ninfo = $this->db->where('id',$_POST['id'])->get('companynewsinfo')->row_array();
       	if(!empty($_POST['pic']) && $_POST['pic']==$ninfo['pic']){
           $engarr['pic'] = $ninfo['pic'];
       	}else{
       	  $engarr['pic'] = $this->file_64upload($_POST['pic']);
       	}
       	 $bool = $this->db->update('companynewsinfo',$engarr,array('id'=>$_POST['id']));
       }else{
       	 $engarr['pic'] = $this->file_64upload($_POST['pic']);
       $bool = $this->db->insert('companynewsinfo',$engarr);
       }
       if($bool){
       	 $this->set_update();
       }else{  
       	return false;
       }
     }else{
     	  return false;
     }
	}
	public function set_update(){
		  $data['dt'] = $_POST['dt'];
       	  $data['sid'] = $_POST['sid'];
       	  $divid = $_POST['sid'];
       	  $dtarr = $this->db->where('num_dt',$data['dt'])->get('data_type')->row_array();
	      $data['set_info'] = $this->db->where('divid',$divid)->get($dtarr['eng_dt'])->row_array();
	      $data['mageinfo'] = $this->db->where(array('del'=>null))->get('companymageinfo')->result_array();
	      $data['newsinfo'] = $this->db->where(array('del'=>null))->get('companynewsinfo')->result_array();
	      $data['tvinfo'] = $this->db->where(array('del'=>null))->get('companyintvinfo')->result_array();
	      $data['newsinfo'] = $this->db->where(array('del'=>null))->get('companynewsinfo')->result_array();
          $data['set'] =  $this->load->view("set".substr($divid,0,strpos($divid, '-')),$data,true);
       	echo json_encode($data);
	}
	public function file_upload($pic)
    {
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'gif|jpg|png|jpeg';
        $config['max_size']     = 2048;
        $config['file_name'] = uniqid();
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload($pic))
        {
            $error = array('error' => $this->upload->display_errors());
        }
        else
        {
        	$data =  $this->upload->data();
            return $data['file_name'];
        }
    }
    public function del_news(){
       $id = $_POST['id'];
       $del['del'] = '1';
       $bool = $this->db->update('companynewsinfo',$del,array('id'=>$id));
       if($bool){
       	$this->set_update();
       }
    }
    //合作伙伴
   public function team_sub(){
    $rearr = $this->db->where('divid',$_POST['sid'])->get('page_show')->result_array();
    $eng_dt = $this->db->select('eng_dt')->where('num_dt',$_POST['dt'])->get('data_type')->row_array();
	 if($_POST['picarr']){
	 	if(empty($rearr)){
		 	$data = array(
	                    'divid'   => $_POST['sid'],
	                    'addtime' => date('Y-m-d H:i:s',time()),
	                    'engdt'   => $eng_dt['eng_dt'],
			);
          $this->db->insert('page_show',$data);
	 	}
        $comdata = array(
                    'divid'   => $_POST['sid'],
                    'title'   => $_POST['title'],
		);
		$bool = $this->db->where('divid',$_POST['sid'])->get($eng_dt['eng_dt'])->result_array();
	  if(!empty($bool)){
		$this->db->update($eng_dt['eng_dt'],$comdata,array('divid'=>$_POST['sid']));
	  }else{
        $insert = $this->db->insert($eng_dt['eng_dt'],$comdata);
	  }
         $teamfo = $this->db->where('divid',$_POST['sid'])->get('companyteaminfo')->result_array();
         if(!empty($teamfo)){
            $this->db->delete('companyteaminfo',array('divid'=>$_POST['sid']));
         }
        foreach ($_POST['picarr'] as $k => $v) {
         $pic = $this->file_64upload($v);
         $this->db->insert('companyteaminfo',array('pic'=>$pic,'divid'=>$_POST['sid']));	
        }
        $this->mode_update();
	 }else{
	 	return false;
	 }
    }
    public function file_64upload($post)
    {
    	// var_dump(APP_PATH."uploadfile");exit;
	  	$base64_image_content = $post;
	    //匹配出图片的格式
	    if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_image_content, $result)){
	        $type = $result[2];
			
			//创建图片存储文件夹
			$dir = 'upload/';
			// if(!file_exists($dir)) {
			// 	$a = mkdir($dir, 0777, true);
			// }
	        $new_file = $dir.uniqid().".{$type}";
	        if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $base64_image_content)))){
	                $userimg = $new_file;
	              return $userimg;
	        }else{
	                echo  false;
	        }
	    }else{
	            echo false;
	    }
   }
    //企业咨询
    public function news_sub(){
     if($_POST){
       $rearr = $this->db->where('divid',$_POST['sid'])->get('page_show')->result_array();
       $eng_dt = $this->db->select('eng_dt')->where('num_dt',$_POST['dt'])->get('data_type')->row_array();
      if(empty($rearr)){
	 	$data = array(
                    'divid'   => $_POST['sid'],
                    'addtime' => date('Y-m-d H:i:s',time()),
                    'engdt'   => $eng_dt['eng_dt'],
		);
        $this->db->insert('page_show',$data);
      }
      if($_POST['news']!='0'){
        $str = implode(",",$_POST['news']);
        $narr = array(
                    'divid'   => $_POST['sid'],
                    'addtime' => date('Y-m-d H:i:s',time()),
                    'title'   => $_POST['title'],
                    'newid'   => $str,
		);
		$bool = $this->db->where('divid',$_POST['sid'])->get($eng_dt['eng_dt'])->result_array();
		if(!empty($bool)){
        $this->db->update($eng_dt['eng_dt'],$narr,array('divid'=>$_POST['sid']));
		}else{
        $this->db->insert($eng_dt['eng_dt'],$narr);
        }
          $this->mode_update();
      }else{
      	$del['delete'] = '1';
      	$this->db->update('page_show',$del,array('divid'=>$_POST['sid']));
        $this->mode_update();
      }
     }
    }
    public function edit_info(){
    	if($_POST['id']){
          $earr = $this->db->select('*')->where('id',$_POST['id'])->get('companynewsinfo')->row_array();
          echo json_encode($earr);
          exit();	
    	}else{
    		return false;
    	}
    }
    public function add_tvinfo(){
     if($_POST){
       $engarr = array(
                    'job'        =>  $_POST['job'],
                    'address'    => $_POST['address'],
                    'experience' => $_POST['experience'],
                    'degree'     => $_POST['degree'],
                    'salary'     => $_POST['salary'],
                    'connecter'  => $_POST['connecter'],
                    'detail'     => $_POST['detail'],
                    'addtime'    => date('Y-m-d H:i:s',time()),
                    'endtime'    =>$_POST['endtime'],
			);
       if($_POST['id']){
       	$bool = $this->db->update('companyintvinfo',$engarr,array('id'=>$_POST['id']));
       }else{
       $bool = $this->db->insert('companyintvinfo',$engarr);
       }
       if($bool){
       	$this->set_update();
       }else{
       	return false;
       }
     }else{
     	 return false;
     }
    }
    //企业招聘
    public function tv_sub(){
      if($_POST){
       $rearr = $this->db->where('divid',$_POST['sid'])->get('page_show')->result_array();
       $eng_dt = $this->db->select('eng_dt')->where('num_dt',$_POST['dt'])->get('data_type')->row_array();
       if(empty($rearr)){
	 	  $data = array(
                    'divid'   => $_POST['sid'],
                    'addtime' => date('Y-m-d H:i:s',time()),
                    'engdt'   => $eng_dt['eng_dt'],
		  );
          $this->db->insert('page_show',$data);

       }
      if($_POST['news']!='0'){
        $str = implode(",",$_POST['news']);
        $narr = array(
                    'divid'   => $_POST['sid'],
                    'addtime' => date('Y-m-d H:i:s',time()),
                    'title'   => $_POST['title'],
                    'intvid'   => $str,
		);
		$bool = $this->db->where('divid',$_POST['sid'])->get($eng_dt['eng_dt'])->result_array();
		if(!empty($bool)){
        $this->db->update($eng_dt['eng_dt'],$narr,array('divid'=>$_POST['sid']));
		}else{
        $this->db->insert($eng_dt['eng_dt'],$narr);
        }
          $this->mode_update();
      }else{
      	$del['delete'] = '1';
      	$this->db->update('page_show',$del,array('divid'=>$_POST['sid']));
        $this->mode_update();
      }
     }
    }
    public function edit_tvinfo(){
    	if($_POST['id']){
          $earr = $this->db->select('*')->where('id',$_POST['id'])->get('companyintvinfo')->row_array();
          echo json_encode($earr);
          exit();	
    	}else{
    		return false;
    	}
    }
    public function del_tv(){
       $id = $_POST['id'];
       $bool = $this->db->delete('companyintvinfo',array('id'=>$id));
       if($bool){
       	 $this->set_update();
       }
    }
	public function add_mageinfo()
	{
	if($_POST){
       $engarr = array(
                    'name'   => $_POST['name'],
                    'job'   => $_POST['job'],
                    'add_time'   => date('Y-m-d H:i:s',time()),
                    'info'   =>$_POST['info']
			);
       if(!empty($_POST['id'])){
       	 $ninfo = $this->db->where('id',$_POST['id'])->get('companymageinfo')->row_array();
       	if(!empty($_POST['pic']) && $_POST['pic']==$ninfo['pic']){
           $engarr['pic'] = $ninfo['pic'];
       	}else{
       	   $engarr['pic'] = $this->file_64upload($_POST['pic']);
       	}
       	$bool = $this->db->update('companymageinfo',$engarr,array('id'=>$_POST['id']));
       }else{
       	   $engarr['pic'] = $this->file_64upload($_POST['pic']);
       $bool = $this->db->insert('companymageinfo',$engarr);
       }
       if($bool){
       	 $this->set_update();
       }
     }
	}
    public function del_mage(){
       $id = $_POST['id'];
       $del['del'] = '1';
       $bool = $this->db->update('companymageinfo',$del,array('id'=>$id));
       if($bool){
       	 $this->set_update();
       }
    }
    public function edit_mage(){
    	if($_POST['id']){
          $earr = $this->db->select('*')->where('id',$_POST['id'])->get('companymageinfo')->row_array();
          echo json_encode($earr);
          exit();	
    	}else{
    		return false;
    	}
    }
    //管理团队
    public function mage_sub(){
    if($_POST){
    	$rearr = $this->db->where('divid',$_POST['sid'])->get('page_show')->result_array();
        $eng_dt = $this->db->select('eng_dt')->where('num_dt',$_POST['dt'])->get('data_type')->row_array();
      if(empty($rearr)){
	 	$data = array(
                    'divid'   => $_POST['sid'],
                    'addtime' => date('Y-m-d H:i:s',time()),
                    'engdt'   => $eng_dt['eng_dt'],
		);
        $this->db->insert('page_show',$data);
	  }
	  if($_POST['news']!='0'){
        $str = implode(",",$_POST['news']);
        $narr = array(
                    'divid'   => $_POST['sid'],
                    'addtime' => date('Y-m-d H:i:s',time()),
                    'title'   => $_POST['title'],
                    'mageid'   => $str,
		);
		$bool = $this->db->where('divid',$_POST['sid'])->get($eng_dt['eng_dt'])->result_array();
		if(!empty($bool)){
        $this->db->update($eng_dt['eng_dt'],$narr,array('divid'=>$_POST['sid']));
		}else{
        $this->db->insert($eng_dt['eng_dt'],$narr);
        }
          $this->mode_update();
      }else{
      	$del['delete'] = '1';
      	$this->db->update('page_show',$del,array('divid'=>$_POST['sid']));
        $this->mode_update();
      }
     }
    }
    public function add_carousel(){
    $rearr = $this->db->where('divid',$_POST['sid'])->get('page_show')->result_array();
    $eng_dt = $this->db->select('eng_dt')->where('num_dt',$_POST['dt'])->get('data_type')->row_array();
	 if($_POST['picarr']){
      if(empty($rearr)){
	 	$data = array(
                    'divid'   => $_POST['sid'],
                    'addtime' => date('Y-m-d H:i:s',time()),
                    'engdt'   => $eng_dt['eng_dt'],
		);
        $this->db->insert('page_show',$data);
      }
        $arr = array();
        foreach ($_POST['picarr'] as $k => $v) {
        	$arr[] = $this->file_64upload($v);
        }
        $str = implode(",", $arr);
        $comdata = array(
                    'divid'   => $_POST['sid'],
                    'picstr'   => $str,
		);
		if(empty($rearr)){
        $this->db->insert('carousel',$comdata);
        }else{
        $this->db->update('carousel',$comdata,array('divid'=>$_POST['sid']));
		}
	    	 $this->mode_update();
	 }
        
    }
    public function sort(){
        $input = $this->input->post();
        if(empty($input)){
            $this->json([
                'code'=>1,
                'data'=>''
            ]);exit;
        }
        foreach ($input as $v){
            $this->db
                    ->update('page_show',['sort'=>$v['sort']],['divid'=>$v['id']]);
                    
        }
        $this->json([
            'code'=>0,
            'data'=>$input
        ]);
       
    }
    //删除中间模块
    public function del_mode(){
	    if($_POST){
	       $divid = $_POST['id'];
           $rearr = $this->db->where('divid',$divid)->get('page_show')->result_array(); 
           if($rearr){
           	  $del['delete'] = '1';
              $bool = $this->db->update('page_show',$del,array('divid'=>$divid));
             $this->mode_update();
           }
	    }
    }
}
