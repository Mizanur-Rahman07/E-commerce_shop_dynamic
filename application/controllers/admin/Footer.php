<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Footer extends CI_Controller
{

	// =================category Section Start==================
	public function create_category($category_id = null)
	{
		
		$data['category_heading'] = "";
		$data['category_name'] = "";
		$data['category_link'] = "";

		if ($category_id) {
			$query = $this->db->query(" select*from footer where id = $category_id limit 1 ");
			$category = $query->row();

			if (!empty($category)) {

				$data['category_heading'] = $category->category_heading;
				$data['category_name'] = $category->category_name;
				$data['category_link'] = $category->category_link;
				
			} else {
				$this->session->set_flashdata('error', "Something is wrong Please try again");
				redirect("admin/Footer/category_list"); // Redirecting To Other Page
			}
		}

	
		// $this->form_validation->set_rules('category_heading', 'Twiter Icon Link', 'required');
		$this->form_validation->set_rules('category_name', 'Instagram Icon', 'required');
		$this->form_validation->set_rules('category_link', 'Insta Icon Link', 'required');

		if ($this->form_validation->run() == true) {

		
			$instcr['category_heading'] = ($this->input->post('category_heading', true));
			$instcr['category_name'] = ($this->input->post('category_name', true));
			$instcr['category_link'] = ($this->input->post('category_link', true));
			$instcr['type'] = 'category';

			if ($category_id) {
				$success = $this->db->update('footer', $instcr, array('id' => $category_id));    //**** (query Builders class)***

				if ($success) {
					$this->session->set_flashdata('success', " Edited successfully");
					redirect("admin/Footer/category_list"); // Redirecting To Other Page
				}
			} else {
				$success = $this->db->insert('footer', $instcr);    //**** (query Builders class)***

				if ($success) {
					$this->session->set_flashdata('success', " Added successfully");
					redirect("admin/Footer/category_list"); // Redirecting To Other Page
				}
			}
		}
		$this->load->view('admin-view/footer/category/create_category', $data);
	}

	public function category_list()
	{
		$data['result'] = $this->db->get_where('footer', array('type' => 'category'))->result_array();
		$this->load->view('admin-view/footer/category/category_list', $data);
	}

	public function delete_category($dlt_footer)
	{
		if ($dlt_footer) {
			$this->db->delete('footer', array('id' => $dlt_footer));
			$suc = $this->db->affected_rows();
			if ($suc) {
				$this->session->set_flashdata('success', " Delete successfull");
			} else {
				$this->session->set_flashdata('error', " Delete is unsuccessfull");
			}
			redirect("admin/Footer/category_list"); // Redirecting To Other Page

		}
	}
	// =================category Section End==================


	// =================laptop_brand Section Start==================
	public function create_laptop_brand($laptop_brand_id = null)
	{
		$data['laptop_brand'] = "";
		$data['laptop_brand_name'] = "";
		$data['laptop_brand_link'] = "";

		if ($laptop_brand_id) {
			$query = $this->db->query(" select*from footer where id = $laptop_brand_id limit 1 ");
			$laptop = $query->row();

			if (!empty($laptop)) {

				$data['laptop_brand'] = $laptop->laptop_brand;
				$data['laptop_brand_name'] = $laptop->laptop_brand_name;
				$data['laptop_brand_link'] = $laptop->laptop_brand_link;
			
			} else {
				$this->session->set_flashdata('error', "Something is wrong Please try again");
				redirect("admin/Footer/laptop_brand_list"); // Redirecting To Other Page
			}
		}

		// $this->form_validation->set_rules('laptop_brand', 'laptop_brand Heading', 'required');
		$this->form_validation->set_rules('laptop_brand_name', 'category Us', 'required');
		$this->form_validation->set_rules('laptop_brand_link', 'Team Organogram', 'required');
	

		if ($this->form_validation->run() == true) {

			$instcr['laptop_brand'] = ($this->input->post('laptop_brand', true));
			$instcr['laptop_brand_name'] = ($this->input->post('laptop_brand_name', true));
			$instcr['laptop_brand_link'] = ($this->input->post('laptop_brand_link', true));
			$instcr['type'] = 'laptop';

			if ($laptop_brand_id) {
				$success = $this->db->update('footer', $instcr, array('id' => $laptop_brand_id));    //**** (query Builders class)***

				if ($success) {
					$this->session->set_flashdata('success', " Edited successfully");
					redirect("admin/Footer/laptop_brand_list"); // Redirecting To Other Page
				}
			} else {
				$success = $this->db->insert('footer', $instcr);    //**** (query Builders class)***

				if ($success) {
					$this->session->set_flashdata('success', " Added successfully");
					redirect("admin/Footer/laptop_brand_list"); // Redirecting To Other Page
				}
			}
		}
		$this->load->view('admin-view/footer/laptop_brand/create_laptop_brand', $data);
	}

	public function laptop_brand_list()
	{
		$data['result'] = $this->db->get_where('footer', array('type' => 'laptop'))->result_array();
		$this->load->view('admin-view/footer/laptop_brand/laptop_brand_list', $data);
	}

	public function delete_laptop($dlt_laptop)
	{
		if ($dlt_laptop) {
			$this->db->delete('footer', array('id' => $dlt_laptop));
			$suc = $this->db->affected_rows();
			if ($suc) {
				$this->session->set_flashdata('success', " Delete successfull");
			} else {
				$this->session->set_flashdata('error', " Delete is unsuccessfull");
			}
			redirect("admin/Footer/laptop_brand_list"); // Redirecting To Other Page

		}
	}
	// =================category Section End==================


	// =================mobile_brand Section End==================
	public function create_mobile_brand($mobile_brand_id = null)
	{
		$data['mobile_brand'] = "";
		$data['mobile_brand_name'] = "";
		$data['mobile_brand_link'] = "";

		if ($mobile_brand_id) {
			$query = $this->db->query(" select*from footer where id = $mobile_brand_id limit 1 ");
			$mobile = $query->row();

			if (!empty($mobile)) {
				$data['mobile_brand'] = $mobile->mobile_brand;
				$data['mobile_brand_name'] = $mobile->mobile_brand_name;
				$data['mobile_brand_link'] = $mobile->mobile_brand_link;
			} else {
				$this->session->set_flashdata('error', "Something is wrong Please try again");
				redirect("admin/Footer/mobile_brand_list"); // Redirecting To Other Page
			}
		}
		// $this->form_validation->set_rules('mobile_brand', 'mobile_brand Us Heding', 'required');
		$this->form_validation->set_rules('mobile_brand_name', 'mobile_brand contant', 'required');
		$this->form_validation->set_rules('mobile_brand_link', 'Phone No', 'required');

		if ($this->form_validation->run() == true) {
			$instcr['mobile_brand'] = ($this->input->post('mobile_brand', true));
			$instcr['mobile_brand_name'] = ($this->input->post('mobile_brand_name', true));
			$instcr['mobile_brand_link'] = ($this->input->post('mobile_brand_link', true));
			$instcr['type'] = 'mobile';

			if ($mobile_brand_id) {
				$success = $this->db->update('footer', $instcr, array('id' => $mobile_brand_id));    //**** (query Builders class)***

				if ($success) {
					$this->session->set_flashdata('success', " Edited successfully");
					redirect("admin/Footer/mobile_brand_list"); // Redirecting To Other Page
				}
			} else {
				$success = $this->db->insert('footer', $instcr);    //**** (query Builders class)***

				if ($success) {
					$this->session->set_flashdata('success', " Added successfully");
					redirect("admin/Footer/mobile_brand_list"); // Redirecting To Other Page
				}
			}
		}

		$this->load->view('admin-view/footer/mobile_brand/create_mobile_brand', $data);
	}

	public function mobile_brand_list()
	{
		$data['result'] = $this->db->get_where('footer', array('type' => 'mobile'))->result_array();
		$this->load->view('admin-view/footer/mobile_brand/mobile_brand_list', $data);
	}

	public function delete_mobile_brand($dlt_footer)
	{

		if ($dlt_footer) {
			$this->db->delete('footer', array('id' => $dlt_footer));
			$suc = $this->db->affected_rows();

			if ($suc) {
				$this->session->set_flashdata('success', " Delete successfull");
			} else {
				$this->session->set_flashdata('error', " Delete is unsuccessfull");
			}

			redirect("admin/Footer/mobile_brand_list"); // Redirecting To Other Page

		}
	}

		// =================notebook_brand Section End==================
		public function create_notebook_brand($notebook_brand_id = null)
		{
			$data['notebook_brand'] = "";
			$data['notebook_brand_name'] = "";
			$data['notebook_brand_link'] = "";
	
			if ($notebook_brand_id) {
				$query = $this->db->query(" select*from footer where id = $notebook_brand_id limit 1 ");
				$notebook = $query->row();
	
				if (!empty($notebook)) {
					$data['notebook_brand'] = $notebook->notebook_brand;
					$data['notebook_brand_name'] = $notebook->notebook_brand_name;
					$data['notebook_brand_link'] = $notebook->notebook_brand_link;
				} else {
					$this->session->set_flashdata('error', "Something is wrong Please try again");
					redirect("admin/Footer/notebook_brand_list"); // Redirecting To Other Page
				}
			}
			// $this->form_validation->set_rules('notebook_brand', 'notebook_brand Us Heding', 'required');
			$this->form_validation->set_rules('notebook_brand_name', 'notebook_brand contant', 'required');
			$this->form_validation->set_rules('notebook_brand_link', 'Phone No', 'required');
	
			if ($this->form_validation->run() == true) {
				$instcr['notebook_brand'] = ($this->input->post('notebook_brand', true));
				$instcr['notebook_brand_name'] = ($this->input->post('notebook_brand_name', true));
				$instcr['notebook_brand_link'] = ($this->input->post('notebook_brand_link', true));
				$instcr['type'] = 'notebook';
	
				if ($notebook_brand_id) {
					$success = $this->db->update('footer', $instcr, array('id' => $notebook_brand_id));    //**** (query Builders class)***
	
					if ($success) {
						$this->session->set_flashdata('success', " Edited successfully");
						redirect("admin/Footer/notebook_brand_list"); // Redirecting To Other Page
					}
				} else {
					$success = $this->db->insert('footer', $instcr);    //**** (query Builders class)***
	
					if ($success) {
						$this->session->set_flashdata('success', " Added successfully");
						redirect("admin/Footer/notebook_brand_list"); // Redirecting To Other Page
					}
				}
			}
	
			$this->load->view('admin-view/footer/notebook_brand/create_notebook_brand', $data);
		}
	
		public function notebook_brand_list()
		{
			$data['result'] = $this->db->get_where('footer', array('type' => 'notebook'))->result_array();
			$this->load->view('admin-view/footer/notebook_brand/notebook_brand_list', $data);
		}
	
		public function delete_notebook_brand($dlt_footer)
		{
	
			if ($dlt_footer) {
				$this->db->delete('footer', array('id' => $dlt_footer));
				$suc = $this->db->affected_rows();
	
				if ($suc) {
					$this->session->set_flashdata('success', " Delete successfull");
				} else {
					$this->session->set_flashdata('error', " Delete is unsuccessfull");
				}
	
				redirect("admin/Footer/notebook_brand_list"); // Redirecting To Other Page
	
			}
		}

		// =================address Section Start==================
	public function create_address($address_id = null)
	{
		$data['phone_no'] = "";
		$data['location'] = "";
		$data['gmail'] = "";
		$data['fb_icon'] = "";
		$data['fb_icon_link'] = "";
		$data['twit_icon'] = "";
		$data['twit_icon_link'] = "";
		$data['insta_icon'] = "";
		$data['insta_icon_link'] = "";
		$data['ytube_icon'] = "";
		$data['ytube_icon_link'] = "";

		if ($address_id) {
			$query = $this->db->query(" select*from footer where id = $address_id limit 1 ");
			$footer = $query->row();

			if (!empty($footer)) {

				$data['phone_no'] = $footer->phone_no;
				$data['location'] = $footer->location;
				$data['gmail'] = $footer->gmail;
				$data['fb_icon'] = $footer->fb_icon;
				$data['fb_icon_link'] = $footer->fb_icon_link;
				$data['twit_icon'] = $footer->twit_icon;
				$data['twit_icon_link'] = $footer->twit_icon_link;
				$data['insta_icon'] = $footer->insta_icon;
				$data['insta_icon_link'] = $footer->insta_icon_link;
				$data['ytube_icon'] = $footer->ytube_icon;
				$data['ytube_icon_link'] = $footer->ytube_icon_link;
			} else {
				$this->session->set_flashdata('error', "Something is wrong Please try again");
				redirect("admin/Footer/address_list"); // Redirecting To Other Page
			}
		}

		$this->form_validation->set_rules('phone_no', 'Phone No', 'required');
		$this->form_validation->set_rules('location', ' Location', 'required');
		$this->form_validation->set_rules('gmail', 'address Us', 'required');
		$this->form_validation->set_rules('fb_icon', 'Facebook Icon', 'required');
		$this->form_validation->set_rules('fb_icon_link', 'Fb Icon Link', 'required');
		$this->form_validation->set_rules('twit_icon', 'Twiter Icon', 'required');
		$this->form_validation->set_rules('twit_icon_link', 'Twiter Icon Link', 'required');
		$this->form_validation->set_rules('insta_icon', 'Instagram Icon', 'required');
		$this->form_validation->set_rules('insta_icon_link', 'Insta Icon Link', 'required');
		$this->form_validation->set_rules('ytube_icon', 'Youtube Icon', 'required');
		$this->form_validation->set_rules('ytube_icon_link', 'Youtube Icon Link', 'required');

		if ($this->form_validation->run() == true) {

			$instcr['phone_no'] = ($this->input->post('phone_no', true));
			$instcr['location'] = ($this->input->post('location', true));
			$instcr['gmail'] = ($this->input->post('gmail', true));
			$instcr['fb_icon'] = ($this->input->post('fb_icon', true));
			$instcr['fb_icon_link'] = ($this->input->post('fb_icon_link', true));
			$instcr['twit_icon'] = ($this->input->post('twit_icon', true));
			$instcr['twit_icon_link'] = ($this->input->post('twit_icon_link', true));
			$instcr['insta_icon'] = ($this->input->post('insta_icon', true));
			$instcr['insta_icon_link'] = ($this->input->post('insta_icon_link', true));
			$instcr['ytube_icon'] = ($this->input->post('ytube_icon', true));
			$instcr['ytube_icon_link'] = ($this->input->post('ytube_icon_link', true));
			$instcr['type'] = 'address';

			if ($address_id) {
				$success = $this->db->update('footer', $instcr, array('id' => $address_id));    //**** (query Builders class)***

				if ($success) {
					$this->session->set_flashdata('success', " Edited successfully");
					redirect("admin/Footer/address_list"); // Redirecting To Other Page
				}
			} else {
				$success = $this->db->insert('footer', $instcr);    //**** (query Builders class)***

				if ($success) {
					$this->session->set_flashdata('success', " Added successfully");
					redirect("admin/Footer/address_list"); // Redirecting To Other Page
				}
			}
		}
		$this->load->view('admin-view/footer/get_in_touch/create_address', $data);
	}

	public function address_list()
	{
		$data['result'] = $this->db->get_where('footer', array('type' => 'address'))->result_array();
		$this->load->view('admin-view/footer/get_in_touch/address_list', $data);
	}

	public function delete_address($dlt_footer)
	{
		if ($dlt_footer) {
			$this->db->delete('footer', array('id' => $dlt_footer));
			$suc = $this->db->affected_rows();
			if ($suc) {
				$this->session->set_flashdata('success', " Delete successfull");
			} else {
				$this->session->set_flashdata('error', " Delete is unsuccessfull");
			}
			redirect("admin/Footer/address_list"); // Redirecting To Other Page

		}
	}
	// =================address Section End==================




}
