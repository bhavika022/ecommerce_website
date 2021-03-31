<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->model('ProductsModel');
      $this->load->model('product');   
      $this->load->model('CustomersModel'); 
      $this->load->model('OrdersModel');    
      $this->load->model('UsersModel');  
   }
   public function index()
   {
       $products=new ProductsModel;
       $data['data']=$products->get_products();
       //$this->load->view('includes/header'); 
       $this->load->view('products/nav_admin');       
       $this->load->view('products/list',$data);
       
   }
   public function create()
   {
      $this->load->view('includes/header');
      $this->load->view('products/create');
           
   }

   public function cus_create()
   {
      $this->load->view('includes/header');
      $this->load->view('products/cus_create');
          
   }
   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
       $products=new ProductsModel;
       $products->insert_product();
       redirect(base_url('admin'));
    }

    public function cus_store()
   {
       $customers=new CustomersModel;
       $customers->insert_customer();
       redirect(base_url('admin/cus_admin'));
    }
   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $product = $this->db->get_where('products', array('id' => $id))->row();
       $this->load->view('includes/header');
       $this->load->view('products/edit',array('product'=>$product));
       
   }

   public function cus_edit($id)
   {
       $customer = $this->db->get_where('customers', array('id' => $id))->row();
       $this->load->view('includes/header');
       $this->load->view('products/cus_edit',array('customer'=>$customer));
          
   }
   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id)
   {

       $products=new ProductsModel;
       $products->update_product($id);
       redirect(base_url('admin'));
   }

   public function cus_update($id)
   {

       $customers=new CustomersModel;
       $customers->update_customer($id);
       redirect(base_url('admin/cus_admin'));
   }
   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $this->db->where('id', $id);
       $this->db->delete('products');
       redirect(base_url('admin'));
   }

   public function cus_delete($id)
   {
       $this->db->where('id', $id);
       $this->db->delete('customers');
       redirect(base_url('admin/cus_admin'));
   }

   public function cus_admin()
   {
       $customers=new CustomersModel;
       $data['data']=$customers->get_customers();
       //$this->load->view('includes/header'); 
       $this->load->view('products/nav_admin');       
       $this->load->view('products/cus_admin',$data);
       
   }

   public function ord_admin()
   {
       $orders=new OrdersModel;
       $data['data']=$orders->get_orders();
       //$this->load->view('includes/header'); 
       $this->load->view('products/nav_admin');       
       $this->load->view('products/ord_admin',$data);
       
   }

   public function usr_admin()
   {
       $users=new UsersModel;
       $data['data']=$users->get_users();
       //$this->load->view('includes/header'); 
       $this->load->view('products/nav_admin');       
       $this->load->view('products/usr_admin',$data);
       
   }

   public function home_admin(){
    $this->load->view('products/nav_admin');       
    $this->load->view('products/home_admin');
   }

   public function generate_cus_pdf() {
        //load pdf library
        $this->load->library('Pdf');
        
        $pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('https://roytuts.com');
        $pdf->SetTitle('Sales Information for Customers');
        $pdf->SetSubject('Report generated using Codeigniter and TCPDF');
        $pdf->SetKeywords('TCPDF, PDF, MySQL, Codeigniter');

        // set default header data
        //$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // set font
        $pdf->SetFont('times', 'BI', 12);
        
        // ---------------------------------------------------------
        
        
        //Generate HTML table data from MySQL - start
        $template = array(
            'table_open' => '<table border="1" cellpadding="2" cellspacing="1">'
        );

        $this->table->set_template($template);

        $this->table->set_heading('Customer Id', 'Name', 'Email', 'Phone', 'Address');
        
        $cusinfo = $this->product->get_cusinfo();
            
        foreach ($cusinfo as $cf):
            $this->table->add_row($cf->id, $cf->name, $cf->email, $cf->phone, $cf->address);
        endforeach;
        
        $html = $this->table->generate();
        //Generate HTML table data from MySQL - end
        
        // add a page
        $pdf->AddPage();
        
        // output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');
        
        // reset pointer to the last page
        $pdf->lastPage();

        //Close and output PDF document
        $pdf->Output(md5(time()).'.pdf', 'D');
        
    }

    public function generate_ord_pdf() {
        //load pdf library
        $this->load->library('Pdf');
        
        $pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('https://roytuts.com');
        $pdf->SetTitle('Sales Information for Customers');
        $pdf->SetSubject('Report generated using Codeigniter and TCPDF');
        $pdf->SetKeywords('TCPDF, PDF, MySQL, Codeigniter');

        // set default header data
        //$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // set font
        $pdf->SetFont('times', 'BI', 12);
        
        // ---------------------------------------------------------
        
        
        //Generate HTML table data from MySQL - start
        $template = array(
            'table_open' => '<table border="1" cellpadding="2" cellspacing="1">'
        );

        $this->table->set_template($template);

        $this->table->set_heading('Order Id', 'Product Id', 'Quantity', 'Sub Total');
        
        $ordinfo = $this->product->get_ordinfo();
            
        foreach ($ordinfo as $of):
            $this->table->add_row($of->order_id, $of->product_id, $of->quantity, $of->sub_total);
        endforeach;
        
        $html = $this->table->generate();
        //Generate HTML table data from MySQL - end
        
        // add a page
        $pdf->AddPage();
        
        // output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');
        
        // reset pointer to the last page
        $pdf->lastPage();

        //Close and output PDF document
        $pdf->Output(md5(time()).'.pdf', 'D');
        
    }

    public function generate_usr_pdf() {
        //load pdf library
        $this->load->library('Pdf');
        
        $pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('https://roytuts.com');
        $pdf->SetTitle('Sales Information for Customers');
        $pdf->SetSubject('Report generated using Codeigniter and TCPDF');
        $pdf->SetKeywords('TCPDF, PDF, MySQL, Codeigniter');

        // set default header data
        //$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // set font
        $pdf->SetFont('times', 'BI', 12);
        
        // ---------------------------------------------------------
        
        
        //Generate HTML table data from MySQL - start
        $template = array(
            'table_open' => '<table border="1" cellpadding="2" cellspacing="1">'
        );

        $this->table->set_template($template);

        $this->table->set_heading('User Id', 'First Name','Last Name', 'Email','Gender','Phone','Created' );
        
        $usrinfo = $this->product->get_usrinfo();
            
        foreach ($usrinfo as $uf):
            $this->table->add_row($uf->id, $uf->first_name,$uf->last_name,$uf->email,$uf->gender,$uf->phone,$uf->created);
        endforeach;
        
        $html = $this->table->generate();
        //Generate HTML table data from MySQL - end
        
        // add a page
        $pdf->AddPage();
        
        // output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');
        
        // reset pointer to the last page
        $pdf->lastPage();

        //Close and output PDF document
        $pdf->Output(md5(time()).'.pdf', 'D');
        
    }

    public function generate_pdf() {
        //load pdf library
        $this->load->library('Pdf');
        
        $pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('https://roytuts.com');
        $pdf->SetTitle('Customer Information');
        $pdf->SetSubject('Report generated using Codeigniter and TCPDF');
        $pdf->SetKeywords('TCPDF, PDF, MySQL, Codeigniter');
    
        // set default header data
        //$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
    
        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    
        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
    
        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    
        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
    
        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    
        // set font
        $pdf->SetFont('times', 'BI', 12);
        
        // ---------------------------------------------------------
        
        
        //Generate HTML table data from MySQL - start
        $template = array(
            'table_open' => '<table border="1" cellpadding="2" cellspacing="1">'
        );
    
        $this->table->set_template($template);
    
        $this->table->set_heading('Id', 'Name', 'Price','Created Date');
        
        $salesinfo = $this->product->get_salesinfo();
            
        foreach ($salesinfo as $sf):
            $this->table->add_row($sf->id, $sf->name, $sf->price, $sf->created);
        endforeach;
        
        $html = $this->table->generate();
        //Generate HTML table data from MySQL - end
        
        // add a page
        $pdf->AddPage();
        
        // output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');
        
        // reset pointer to the last page
        $pdf->lastPage();
    
        //Close and output PDF document
        $pdf->Output(md5(time()).'.pdf', 'D');
    }
}