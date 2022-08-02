<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fontend extends CI_Controller
{

	// public function navberMenu()
	// {
    //     $data['menus'] = $this->db->where('parentId', 0)->order_by('id', 'ASC')->get('menu')->result();    
    //     foreach ($data['menus'] as $key => $value) {
    //         $data['menus'][$key]->submenu = $this->db->where('parentId', $value->id)->order_by('id', 'ASC')->get('menu')->result();
    //     }
		
	// 	$this->load->view('frontend_view/navber_menu',$data);
	// }

	public function home()
	{

		// $this->db->order_by('id', 'DESC');
		$data['slideSection'] = $this->db->get_where('home', array('type' => 'slider'))->result_array();

		$this->db->order_by('id', 'DESC');
		$data['celSection'] = $this->db->get_where('home', array('type' => 'product'), 5)->result_array();

		$this->db->order_by('id', 'DESC');
		$data['shoes'] = $this->db->get_where('home', array('type' => 'shoeSale'),2)->result_array();

		$this->db->order_by('id', 'DESC');
		$data['bags'] = $this->db->get_where('home', array('type' => 'backpack'))->result_array();

		$this->db->order_by('id', 'DESC');
		$data['watchSec'] = $this->db->get_where('home', array('type' => 'watch'))->result_array();

		$this->db->order_by('id', 'DESC');
		$data['aboutImg'] = $this->db->get_where('home', array('type' => 'about'), 1)->result_array();
		$data['aboutSlide'] = $this->db->get_where('home', array('type' => 'about'))->result_array();

		$this->db->order_by('id', 'DESC');
		$data['newsbd'] = $this->db->get_where('home', array('type' => 'news'))->result_array();

		$this->db->order_by('id', 'DESC');
		$data['cards'] = $this->db->get_where('home', array('type' => 'credit_card'), 5)->result_array();

		$data['subview'] = $this->load->view('frontend_view/home', $data, true);
        $this->load->view('frontend_view/layoutMain', $data);
		// $this->load->view('frontend_view/home', $data);
	}

	// public function footer()
	// {
	// 	$this->db->order_by('id', 'DESC');
	// 	$data['dyFooter'] = $this->db->get_where('footer', array('type' => 'about'), 1)->result_array();
	// 	$this->db->order_by('id', 'DESC');
	// 	$data['comFooter'] = $this->db->get_where('footer', array('type' => 'company'), 1)->result_array();
	// 	$this->db->order_by('id', 'DESC');
	// 	$data['contFooter'] = $this->db->get_where('footer', array('type' => 'contact'), 1)->result_array();
	// 	// return $data;
	// 	$this->load->view('frontend_view/footer', $data);
	// }


}
