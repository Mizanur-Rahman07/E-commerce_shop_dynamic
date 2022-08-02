<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    // =================Slider Section Start==================
    public function create_slider($slide_id = null)
    {
        $data['slide_heading'] = "";
        $data['slide_sub_heading'] = "";
        $data['slide_img'] = "";
        $data['slide_price'] = "";
        $data['slide_btn'] = "";
        $data['slide_btn_link'] = "";

        if ($slide_id) {
            $query = $this->db->query(" select*from home where id = $slide_id limit 1 ");
            $slide = $query->row();

            if (!empty($slide)) {

                $data['slide_heading'] = $slide->slide_heading;
                $data['slide_sub_heading'] = $slide->slide_sub_heading;
                $data['slide_img'] = $slide->slide_img;
                $data['slide_price'] = $slide->slide_price;
                $data['slide_btn'] = $slide->slide_btn;
                $data['slide_btn_link'] = $slide->slide_btn_link;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/Home/slider_list"); // Redirecting To Other Page
            }
        }
        // $this->form_validation->set_rules('slide_img', 'Slide Img', 'required');
        $this->form_validation->set_rules('slide_heading', 'Heading', 'required');
        $this->form_validation->set_rules('slide_sub_heading', 'Sub Heading', 'required');
        $this->form_validation->set_rules('slide_price', 'Price', 'required');
        $this->form_validation->set_rules('slide_btn', 'Button', 'required');
        $this->form_validation->set_rules('slide_btn_link', 'Button Link', 'required');

        if ($this->form_validation->run() == true) {
            $insvalue['slide_heading'] = ($this->input->post('slide_heading', true));
            $insvalue['slide_sub_heading'] = ($this->input->post('slide_sub_heading', true));

            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('slide_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
                // echo $data['img_up_errors'];
                // exit;
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['slide_img']);
                $insvalue['slide_img'] = $sdata['file_name'];
            }

            $insvalue['slide_price'] = ($this->input->post('slide_price', true));
            $insvalue['slide_btn'] = ($this->input->post('slide_btn', true));
            $insvalue['slide_btn_link'] = ($this->input->post('slide_btn_link', true));
            $insvalue['type'] = 'slider';

            if ($slide_id) {
                $success = $this->db->update('home', $insvalue, array('id' => $slide_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/Home/slider_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('home', $insvalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/Home/slider_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/home/1st_slide/create_slide', $data);
    }

    public function slider_list()
    {
        $data['result'] = $this->db->get_where('home', array('type' => 'slider'))->result_array();
        $this->load->view('admin-view/home/1st_slide/slide_list', $data);
    }

    public function delete_slider($dlt_slider)
    {
        if ($dlt_slider) {
            $this->db->delete('home', array('id' => $dlt_slider));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/Home/slider_list"); // Redirecting To Other Page
        }
    }
    // =================Slider Section End==================

    // ==================start product section==================
    public function create_product($product_id = null)
    {
        $data['product_img'] = "";
        $data['product_rate'] = "";
        $data['product_title'] = "";
       

        if ($product_id) {
            $query = $this->db->query("select*from home where id = $product_id limit 1 ");
            $cel = $query->row();

            // $cel = $this->db->get_where('home', array('id' => '$product_id'));

            if (!empty($cel)) {

                $data['product_img'] = $cel->product_img;
                $data['product_rate'] = $cel->product_rate;
                $data['product_title'] = $cel->product_title;
               
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/Home/product_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('product_rate', 'product rate', 'required');
        $this->form_validation->set_rules('product_title', 'product title', 'required');
       
        if ($this->form_validation->run() == true) {

            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('product_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
                // echo $data['img_up_errors'];
                // exit;
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['product_img']);
                $celvalue['product_img'] = $sdata['file_name'];
            }

            $celvalue['product_rate'] = ($this->input->post('product_rate', true));
            $celvalue['product_title'] = ($this->input->post('product_title', true));
            $celvalue['type'] = 'product';

            if ($product_id) {
                $success = $this->db->update('home', $celvalue, array('id' => $product_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/Home/product_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('home', $celvalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/Home/product_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/home/product/create_product', $data);
    }
    public function product_list()
    {
        $data['result'] = $this->db->get_where('home', array('type' => 'product'))->result_array();
        $this->load->view('admin-view/home/product/product_list', $data);
    }

    public function delete_product($dlt_product)
    {
        if ($dlt_product) {
            $this->db->delete('home', array('id' => $dlt_product));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/Home/product_list"); // Redirecting To Other Page
        }
    }
    // ==================End product section==================

    // =================Start shoeSale section================
    public function create_shoeSale($shoeSale_id = null)
    {

        $data['sale_button'] = "";
        $data['sale_button_link'] = "";
        $data['sale_title'] = "";
        $data['sale_sub_title'] = "";
        $data['sale_img'] = "";
        $data['sale_rate'] = "";


        if ($shoeSale_id) {
            $query = $this->db->query("select*from home where id = $shoeSale_id limit 1 ");
            $pro = $query->row();

            if (!empty($pro)) {

                $data['sale_button'] = $pro->sale_button;
                $data['sale_button_link'] = $pro->sale_button_link;
                $data['sale_title'] = $pro->sale_title;
                $data['sale_sub_title'] = $pro->sale_sub_title;
                $data['sale_img'] = $pro->sale_img;
                $data['sale_rate'] = $pro->sale_rate;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/Home/shoeSale_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('sale_button', 'Button', 'required');
        $this->form_validation->set_rules('sale_button_link', 'Button Link', 'required');
        $this->form_validation->set_rules('sale_title', 'Sale Title', 'required');
        $this->form_validation->set_rules('sale_sub_title', 'Sale Sub Title', 'required');
        $this->form_validation->set_rules('sale_rate', 'Sale Rate', 'required');

        if ($this->form_validation->run() == true) {
            $provalue['sale_button'] = ($this->input->post('sale_button', true));
            $provalue['sale_button_link'] = ($this->input->post('sale_button_link', true));
            $provalue['sale_title'] = ($this->input->post('sale_title', true));
            $provalue['sale_sub_title'] = ($this->input->post('sale_sub_title', true));

            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('sale_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
                // echo $data['img_up_errors'];
                // exit;
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['sale_img']);
                $provalue['sale_img'] = $sdata['file_name'];
            }

            $provalue['sale_rate'] = ($this->input->post('sale_rate', true));
            $provalue['type'] = 'shoeSale';

            if ($shoeSale_id) {
                $success = $this->db->update('home', $provalue, array('id' => $shoeSale_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/Home/shoeSale_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('home', $provalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/Home/shoeSale_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/home/shoeSale/create_shoeSale', $data);
    }

    public function shoeSale_list()
    {
        $data['result'] = $this->db->get_where('home', array('type' => 'shoeSale'))->result_array();
        $this->load->view('admin-view/home/shoeSale/shoeSale_list', $data);
    }

    public function delete_shoeSale($dlt_shoeSale)
    {
        if ($dlt_shoeSale) {
            $this->db->delete('home', array('id' => $dlt_shoeSale));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/Home/shoeSale_list"); // Redirecting To Other Page
        }
    }
    // =================End shoeSale section================

    // ===============Start backpack service============
    public function create_backpack($backpack_id = null)
    {

        $data['bag_sub_title'] = "";
        $data['bag_title'] = "";
        $data['bag_img'] = "";
        $data['bag_rate'] = "";
        $data['bag_button'] = "";
        $data['bag_button_link'] = "";


        if ($backpack_id) {
            $query = $this->db->query("select*from home where id = $backpack_id limit 1 ");
            $bag = $query->row();

            if (!empty($bag)) {

                $data['bag_sub_title'] = $bag->bag_sub_title;
                $data['bag_title'] = $bag->bag_title;
                $data['bag_img'] = $bag->bag_img;
                $data['bag_rate'] = $bag->bag_rate;
                $data['bag_button'] = $bag->bag_button;
                $data['bag_button_link'] = $bag->bag_button_link;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/Home/backpack_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('bag_sub_title', 'Sub Title', 'required');
        $this->form_validation->set_rules('bag_title', ' Title', 'required');
        $this->form_validation->set_rules('bag_rate', 'Bag rate', 'required');
        $this->form_validation->set_rules('bag_button', 'Button', 'required');
        $this->form_validation->set_rules('bag_button_link', 'Button Link', 'required');

        if ($this->form_validation->run() == true) {

            $bagvalue['bag_sub_title'] = ($this->input->post('bag_sub_title', true));
            $bagvalue['bag_title'] = ($this->input->post('bag_title', true));
            
            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('bag_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
                // echo $data['img_up_errors'];
                // exit;
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['bag_img']);
                $bagvalue['bag_img'] = $sdata['file_name'];
            }
            $bagvalue['bag_rate'] = ($this->input->post('bag_rate', true));
            $bagvalue['bag_button'] = ($this->input->post('bag_button', true));
            $bagvalue['bag_button_link'] = ($this->input->post('bag_button_link', true));
            $bagvalue['type'] = 'backpack';

            if ($backpack_id) {
                $success = $this->db->update('home', $bagvalue, array('id' => $backpack_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/Home/backpack_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('home', $bagvalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/Home/backpack_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/home/backpack/create_backpack', $data);
    }

    public function backpack_list()
    {
        $data['result'] = $this->db->get_where('home', array('type' => 'backpack'))->result_array();
        $this->load->view('admin-view/home/backpack/backpack_list', $data);
    }

    public function delete_backpack($dlt_bagabil)
    {
        if ($dlt_bagabil) {
            $this->db->delete('home', array('id' => $dlt_bagabil));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/Home/backpack_list"); // Redirecting To Other Page
        }
    }

    // ===============End backpack service============

    // ==============Start  watch service===========
    public function create_watch($watch_id = null)
    {

        $data['watch_sub_title'] = "";
        $data['watch_title'] = "";
        $data['watch_img'] = "";
        $data['watch_rate'] = "";
        $data['watch_button'] = "";
        $data['watch_button_link'] = "";


        if ($watch_id) {
            $query = $this->db->query("select*from home where id = $watch_id limit 1 ");
            $watch = $query->row();

            if (!empty($watch)) {

                $data['watch_sub_title'] = $watch->watch_sub_title;
                $data['watch_title'] = $watch->watch_title;
                $data['watch_img'] = $watch->watch_img;
                $data['watch_rate'] = $watch->watch_rate;
                $data['watch_button'] = $watch->watch_button;
                $data['watch_button_link'] = $watch->watch_button_link;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/Home/watch_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('watch_sub_title', 'Sub Title', 'required');
        $this->form_validation->set_rules('watch_title', ' Title', 'required');
        $this->form_validation->set_rules('watch_rate', ' watch rate', 'required');
        $this->form_validation->set_rules('watch_button', 'Button', 'required');
        $this->form_validation->set_rules('watch_button_link', 'Button Link', 'required');

        if ($this->form_validation->run() == true) {
            $watchValue['watch_sub_title'] = ($this->input->post('watch_sub_title', true));
            $watchValue['watch_title'] = ($this->input->post('watch_title', true));

            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('watch_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
                // echo $data['img_up_errors'];
                // exit;
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['watch_img']);
                $watchValue['watch_img'] = $sdata['file_name'];
            }

            $watchValue['watch_rate'] = ($this->input->post('watch_rate', true));
            $watchValue['watch_button'] = ($this->input->post('watch_button', true));
            $watchValue['watch_button_link'] = ($this->input->post('watch_button_link', true));
            $watchValue['type'] = 'watch';

            if ($watch_id) {
                $success = $this->db->update('home', $watchValue, array('id' => $watch_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/Home/watch_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('home', $watchValue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/Home/watch_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/home/allWatch/create_watch', $data);
    }

    public function watch_list()
    {
        $data['result'] = $this->db->get_where('home', array('type' => 'watch'))->result_array();
        $this->load->view('admin-view/home/allWatch/watch_list', $data);
    }

    public function delete_watch($dlt_watch)
    {
        if ($dlt_watch) {
            $this->db->delete('home', array('id' => $dlt_watch));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/Home/watch_list"); // Redirecting To Other Page
        }
    }
    // ==============End Watch service===========

    // ==============Start Our abouts service ===========
    public function create_about($about_id = null)
    {

        $data['about_title'] = "";
        $data['about_contant'] = "";
        $data['about_icon'] = "";
        $data['last_contant'] = "";
        $data['last_icon'] = "";
        $data['about_img'] = "";

        if ($about_id) {
            $query = $this->db->query("select*from home where id = $about_id limit 1 ");
            $about = $query->row();

            if (!empty($about)) {

                $data['about_title'] = $about->about_title;
                $data['about_contant'] = $about->about_contant;
                $data['about_icon'] = $about->about_icon;
                $data['last_contant'] = $about->last_contant;
                $data['last_icon'] = $about->last_icon;
                $data['about_img'] = $about->about_img;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/Home/about_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('about_title', 'Title', 'required');
        $this->form_validation->set_rules('about_contant', 'Contant', 'required');
        $this->form_validation->set_rules('about_icon', 'Icon', 'required');
        $this->form_validation->set_rules('last_contant', '2nd Contant', 'required');
        $this->form_validation->set_rules('last_icon', '2nd Icon', 'required');

        if ($this->form_validation->run() == true) {
            $aboutvalue['about_title'] = ($this->input->post('about_title', true));
            $aboutvalue['about_contant'] = ($this->input->post('about_contant', true));
            $aboutvalue['about_icon'] = ($this->input->post('about_icon', true));
            $aboutvalue['last_contant'] = ($this->input->post('last_contant', true));
            $aboutvalue['last_icon'] = ($this->input->post('last_icon', true));

            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('about_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
                // echo $data['img_up_errors'];
                // exit;
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['about_img']);
                $aboutvalue['about_img'] = $sdata['file_name'];
            }

            $aboutvalue['type'] = 'about';

            if ($about_id) {
                $success = $this->db->update('home', $aboutvalue, array('id' => $about_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/Home/about_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('home', $aboutvalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/Home/about_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/home/about/create_about', $data);
    }

    public function about_list()
    {
        $data['result'] = $this->db->get_where('home', array('type' => 'about'))->result_array();
        $this->load->view('admin-view/home/about/about_list', $data);
    }

    public function delete_about($dlt_about)
    {
        if ($dlt_about) {
            $this->db->delete('home', array('id' => $dlt_about));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/Home/about_list"); // Redirecting To Other Page
        }
    }

    // ==============End Our abouts service ===========

  // =============Start news news section=========
  public function create_news($news_id = null)
  {
      $data['news_sub_title'] = "";
      $data['news_title'] = "";
      $data['news_button'] = "";
      $data['news_button_link'] = "";
      $data['comments'] = "";
      $data['news_img'] = "";

      if ($news_id) {
          $query = $this->db->query("select*from home where id = $news_id limit 1 ");
          $news = $query->row();

          if (!empty($news)) {
              $data['news_sub_title'] = $news->news_sub_title;
              $data['news_title'] = $news->news_title;
              $data['news_button'] = $news->news_button;
              $data['news_button_link'] = $news->news_button_link;
              $data['comments'] = $news->comments;
              $data['news_img'] = $news->news_img;
          } else {
              $this->session->set_flashdata('error', "Something is wrong Please try again");
              redirect("admin/Home/news_list"); // Redirecting To Other Page
          }
      }
      $this->form_validation->set_rules('news_sub_title', 'news_sub_title', 'required');
      $this->form_validation->set_rules('news_title', ' News Title', 'required');
      $this->form_validation->set_rules('news_button', 'Button', 'required');
      $this->form_validation->set_rules('news_button_link', 'Button Link', 'required');
      $this->form_validation->set_rules('comments', 'Comments', 'required');


      if ($this->form_validation->run() == true) {
        $newsvalue['news_sub_title'] = ($this->input->post('news_sub_title', true));
        $newsvalue['news_title'] = ($this->input->post('news_title', true));
        $newsvalue['news_button'] = ($this->input->post('news_button', true));
        $newsvalue['news_button_link'] = ($this->input->post('news_button_link', true));
        $newsvalue['comments'] = ($this->input->post('comments', true));

          $config['upload_path'] = 'backend_design/uploads/';
          $config['allowed_types'] = 'gif|jpg|png|jpeg';
          $this->load->library('upload', $config);
          if (!$this->upload->do_upload('news_img')) {
              $data['img_up_errors'] = $this->upload->display_errors();
          } else {
              $sdata = $this->upload->data();
              unlink(FCPATH . 'backend_design/uploads/' . $data['news_img']);
              $newsvalue['news_img'] = $sdata['file_name'];
          }
        
          $newsvalue['type'] = 'news';

          if ($news_id) {
              $success = $this->db->update('home', $newsvalue, array('id' => $news_id));    //**** (query Builders class)***

              if ($success) {
                  $this->session->set_flashdata('success', " Edited successfully");
                  redirect("admin/Home/news_list"); // Redirecting To Other Page
              }
          } else {
              $success = $this->db->insert('home', $newsvalue);    //**** (query Builders class)***

              if ($success) {
                  $this->session->set_flashdata('success', " Added successfully");
                  redirect("admin/Home/news_list"); // Redirecting To Other Page
              }
          }
      }

      $this->load->view('admin-view/home/news/create_news', $data);
  }

  public function news_list()
  {
      $data['result'] = $this->db->get_where('home', array('type' => 'news'))->result_array();
      $this->load->view('admin-view/home/news/news_list', $data);
  }

  public function delete_news($dlt_news)
  {
      if ($dlt_news) {
          $this->db->delete('home', array('id' => $dlt_news));
          $suc = $this->db->affected_rows();
          if ($suc) {
              $this->session->set_flashdata('success', " Delete successfull");
          } else {
              $this->session->set_flashdata('error', " Delete is unsuccessfull");
          }
          redirect("admin/Home/news_list"); // Redirecting To Other Page
      }
  }
  // =============End news news section=========

  
    // ==============Start credit_card Section==============
    public function create_credit_card($credit_card_id = null)
    {

        $data['credit_card_img'] = "";

        if ($credit_card_id) {
            $query = $this->db->query("select*from home where id = $credit_card_id limit 1 ");
            $credit_card = $query->row();

            if (!empty($credit_card)) {

                $data['credit_card_img'] = $credit_card->credit_card_img;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/Home/credit_card_list"); // Redirecting To Other Page
            }
        }
        // $this->form_validation->set_rules('credit_card_img', 'credit_card Img', 'required');

        // if ($this->form_validation->run() == true) {
        if (!empty($_FILES['credit_card_img']['name'])) {

            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('credit_card_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
                // echo $data['img_up_errors'];
                // exit;
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['credit_card_img']);
                $credit_cardvalue['credit_card_img'] = $sdata['file_name'];
            }

            $credit_cardvalue['type'] = 'credit_card';

            if ($credit_card_id) {
                $success = $this->db->update('home', $credit_cardvalue, array('id' => $credit_card_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/Home/credit_card_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('home', $credit_cardvalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/Home/credit_card_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/home/credit_card/create_credit_card', $data);
    }

    public function credit_card_list()
    {
        $data['result'] = $this->db->get_where('home', array('type' => 'credit_card'))->result_array();
        $this->load->view('admin-view/home/credit_card/credit_card_list', $data);
    }

    public function delete_credit_card($dlt_credit_card)
    {
        if ($dlt_credit_card) {
            $this->db->delete('home', array('id' => $dlt_credit_card));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/Home/credit_card_list"); // Redirecting To Other Page
        }
    }
    // ==============End credit_card Section==============
    

}