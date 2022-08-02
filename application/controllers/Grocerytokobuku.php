<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Grocerytokobuku extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->model('Author_model');
        $this->load->helper('url');

        $this->load->library('grocery_CRUD');
    }

    public function _example_output($output = null)
    {
        $this->load->view('grocerytokobuku.php', (array)$output);
    }

    public function offices()
    {
        $output = $this->grocery_crud->render();

        $this->_example_output($output);
    }

    public function index()
    {
        $this->_example_output((object)array('output' => '', 'js_files' => array(), 'css_files' => array()));
    }

    public function author()
    {

        try {
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('author');
            $crud->set_subject('author');
            $crud->required_fields('fullname');
            $crud->columns('fullname', 'email');

            $output = $crud->render();

            $this->_example_output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function book_category()
    {
        try {
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('book_category');
            $crud->set_subject('book_cateogry');
            $crud->required_fields('name');
            $crud->columns('name');

            $output = $crud->render();

            $this->_example_output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function supplier()
    {

        try {
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('supplier');
            $crud->set_subject('supplier');
            $crud->required_fields('name');
            $crud->columns('name', 'email', 'phone', 'address');

            $output = $crud->render();

            $this->_example_output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function customer()
    {
        $crud = new grocery_CRUD();

        try {
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('customer');
            $crud->set_subject('customer');
            $crud->required_fields('name');
            $crud->columns('name', 'email', 'no_member', 'gender', 'phone', 'address');

            $output = $crud->render();

            $this->_example_output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function level()
    {
        try {
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('level');
            $crud->set_subject('level');
            $crud->required_fields('name');
            $crud->columns('name');

            $output = $crud->render();

            $this->_example_output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function book()
    {

        if ($this->session->userdata('employee_id') != null) {
            $crud = new grocery_CRUD();

            $crud->set_table('book');

            $crud->set_relation_n_n('author', 'book_author', 'author', 'book_id', 'author_id', 'fullname');
            $crud->set_relation_n_n('category', 'book_bookcat', 'book_category', 'book_id', 'book_category_id', 'name');
            $crud->set_subject('book');
            $crud->columns('title', 'author', 'category', 'description', 'release_year', 'pages', 'price', 'stock');

            $output = $crud->render();

            $this->_example_output($output);
        } else {
            echo '<script language=JavaScript>alert("Anda Bukan Employee, Silahkan Login"); onclick=location.href="../auth/Employee"</script>';
        }
    }

    public function valueToEuro($value, $row)
    {
        return $value . ' &euro;';
    }

    public function film_management()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('film');
        $crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname', 'priority');
        $crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
        $crud->unset_columns('special_features', 'description', 'actors');

        $crud->fields('title', 'description', 'actors',  'category', 'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

        $output = $crud->render();

        $this->_example_output($output);
    }

    public function film_management_twitter_bootstrap()
    {
        try {
            $crud = new grocery_CRUD();

            $crud->set_theme('twitter-bootstrap');
            $crud->set_table('film');
            $crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname', 'priority');
            $crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
            $crud->unset_columns('special_features', 'description', 'actors');

            $crud->fields('title', 'description', 'actors',  'category', 'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

            $output = $crud->render();
            $this->_example_output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    function multigrids()
    {
        $this->config->load('grocery_crud');
        $this->config->set_item('grocery_crud_dialog_forms', true);
        $this->config->set_item('grocery_crud_default_per_page', 10);

        $output1 = $this->offices_management2();

        $output2 = $this->employees_management2();

        $output3 = $this->customers_management2();

        $js_files = $output1->js_files + $output2->js_files + $output3->js_files;
        $css_files = $output1->css_files + $output2->css_files + $output3->css_files;
        $output = "<h1>List 1</h1>" . $output1->output . "<h1>List 2</h1>" . $output2->output . "<h1>List 3</h1>" . $output3->output;

        $this->_example_output((object)array(
            'js_files' => $js_files,
            'css_files' => $css_files,
            'output'    => $output
        ));
    }

    public function offices_management2()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('offices');
        $crud->set_subject('Office');

        $crud->set_crud_url_path(site_url(strtolower(__CLASS__ . "/" . __FUNCTION__)), site_url(strtolower(__CLASS__ . "/multigrids")));

        $output = $crud->render();

        if ($crud->getState() != 'list') {
            $this->_example_output($output);
        } else {
            return $output;
        }
    }

    public function employees_management2()
    {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('employees');
        $crud->set_relation('officeCode', 'offices', 'city');
        $crud->display_as('officeCode', 'Office City');
        $crud->set_subject('Employee');

        $crud->required_fields('lastName');

        $crud->set_field_upload('file_url', 'assets/uploads/files');

        $crud->set_crud_url_path(site_url(strtolower(__CLASS__ . "/" . __FUNCTION__)), site_url(strtolower(__CLASS__ . "/multigrids")));

        $output = $crud->render();

        if ($crud->getState() != 'list') {
            $this->_example_output($output);
        } else {
            return $output;
        }
    }

    public function customers_management2()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('customers');
        $crud->columns('customerName', 'contactLastName', 'phone', 'city', 'country', 'salesRepEmployeeNumber', 'creditLimit');
        $crud->display_as('salesRepEmployeeNumber', 'from Employeer')
            ->display_as('customerName', 'Name')
            ->display_as('contactLastName', 'Last Name');
        $crud->set_subject('Customer');
        $crud->set_relation('salesRepEmployeeNumber', 'employees', 'lastName');

        $crud->set_crud_url_path(site_url(strtolower(__CLASS__ . "/" . __FUNCTION__)), site_url(strtolower(__CLASS__ . "/multigrids")));

        $output = $crud->render();

        if ($crud->getState() != 'list') {
            $this->_example_output($output);
        } else {
            return $output;
        }
    }
}
