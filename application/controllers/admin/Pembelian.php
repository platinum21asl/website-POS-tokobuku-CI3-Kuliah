<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pembelian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pembelian_model');
        $this->load->model('level_model');
        $this->load->model('supplier_model');
    }

    public function index()
    {
        if ($this->session->userdata('employee_id') != NULL) {
            $id = $this->session->userdata('level_id');

            $data = array(
                'user_level' => $this->level_model->level_getById($id)->row(),
                'book' => $this->pembelian_model->book_getAll(),
                'book1' => $this->pembelian_model->book_getAll1(),
                'book2' => $this->pembelian_model->book_getAll2(),
                'total' => $this->show_total(),
                'kode_beli' => $this->pembelian_model->invoice_no(),
                'supplier' => $this->supplier_model->supplier_getAll()
            );
            $this->load->view('admin/pembelian/v_pembelian', $data);
        } else {
            echo '<script language=JavaScript>alert("Anda belum login sebagai employee, Silahkan Login")
            onclick=location.href="../auth/Auth"</script>';
        }
    }

    public function add_to_cart()
    {
        $data = array(
            'id' => $this->input->post('product_id'),
            'name' => $this->input->post('product_name'),
            'price' => $this->input->post('product_price'),
            'qty' => $this->input->post('quantity'),
            'discount' => 0,
            'status' => 1
        );
        $insert = $this->cart->insert($data);
        $book_id = $this->input->post('product_id');
        $qty = $this->input->post('quantity');
        if ($insert == TRUE) {
            $this->pembelian_model->plus_stock($qty, $book_id);
        } else {
            echo '<script language=JavaScript>alert("Fail add to cart")</script>';
        }
    }

    public function show_cart()
    {
        $output = '';
        $no = 0;
        $x = 0;
        foreach ($this->cart->contents() as $items) {
            if (number_format($items['status']) == 1) {
                $no++;
                $output .= '
                <tr>
                <td>' . number_format($items['id']) . '</td>
                <td>' . $items['name'] . '</td>
                <td>' . number_format($items['price']) . '</td>
                <td>' . number_format($items['qty']) . '</td>
              
                <td>' . number_format($items['subtotal']) . '</td>
                <td><button type="button" id="' . $items['rowid'] . '"class="remove_cart btn btn-danger btn-sm">Cancel</button></td>
                </tr>';
            } else {
                $x++;
            }
        }
        if ($no == 0 && $x == 0) {
            $output .= '
            <tr>
            <td colspan="7" class="text-center">Tidak Ada Item</td>
            </tr>';
        } else if ($no != 0 && $x == 0) {
            $output .= '
            <tr>
            <th colspan="5">Total</th>
            <th colspan="1">' . 'Rp' . number_format($this->cart->total()) . '</th>
            </tr>';
        } else if ($no == 0 && $x != 0) {
            echo '<script language=JavaScript>alert("Library Cart masih digunakan di Penjualan. Tekan `Cancel` pada bagian bawah halaman Penjualan. ") 
            onclick=location.href="pembelian"</script>';
        }
        return $output;
    }

    public function load_cart()
    {
        echo $this->show_cart();
    }

    function delete_cart()
    {
        $row_id = $this->input->post('row_id');
        foreach ($this->cart->contents() as $items) {
            $row_id1 = $items['rowid'];
            $book_id = $items['id'];
            $qty = $items['qty'];
            if ($row_id == $row_id1) {
                $this->pembelian_model->plus_stock($qty, $book_id);
                $data = array(
                    'rowid' => $this->input->post('row_id'),
                    'qty' => 0,
                );
                $this->cart->update($data);
            }
        }
        echo $this->show_cart();
    }

    public function show_total()
    {
        if (number_format($this->cart->total()) > 0) {
            $output1 = number_format($this->cart->total());
        } else {
            $output1 = 0;
        }
        return $output1;
    }

    function clear_cart()
    {
        foreach ($this->cart->contents() as $items) {
            $book_id = $items['id'];
            $qty = $items['id'];
            $this->pembelian_model->plus_stock($qty, $book_id);
        }
        echo $this->cart->destroy();
        echo '<script language=JavaScript>alert("Cancel Cart")
        onclick=location.href=document.referrer</script>';
    }

    public function add_pembelian()
    {
        $kode_beli = $this->input->post("kode_beli");
        date_default_timezone_set('Asia/Jakarta');
        $buy_date = date("Y-m-d H:i:s");
        $member = $this->input->post('supplier');
        $data = array(
            'kode_beli' => $kode_beli,
            'employee_id' => $this->session->userdata('employee_id'),
            'buy_date' => $buy_date,
            'supplier_id' => $member
        );
        $this->pembelian_model->pembelian_insert('pembelian', $data);
        foreach ($this->cart->contents() as $items) {
            $book_id = number_format($items['id']);
            $qty = number_format($items['qty']);
            $sub_total = $items['subtotal'];
            $status = $items['status'];
            if ($status == 1) {
                //Input Array
                $data = array(
                    'book_id' => $book_id,
                    'amount' => $qty,
                    'pembelian_id' => $this->pembelian_model->pembelian_last_id()->pembelian_id,
                    'total_price' => $sub_total
                );
                $this->pembelian_model->d_pembelian_insert('d_pembelian', $data);
            }
        }
        $this->cart->destroy();
        echo '<script language=JavaScript>alert("Payment Berhasil")
        onclick=location.reload()</script>';
    }

    public function list_pembelian()
    {
        if ($this->session->userdata('employee_id') != Null) {
            $id = $this->session->userdata('level_id');
            $data = array(
                'user_level' => $this->level_model->level_getById($id)->row(),
                'pembelian' => $this->pembelian_model->pembelian_getAll(),
                'pembelian1' => $this->pembelian_model->pembelian_getAll1(),
            );
            $this->load->view('admin/pembelian/v_laporan', $data);
        } else {
            echo '<script language=JavaScript>
            onclick=location.href="../Pembelian"</script>';
        }
    }

    public function pdf()
    {
        $this->load->library('dompdf_gen');
        $this->data = [
            'title_pdf' => 'Laporan Pembelian Toko Buku',
            'pembelian1' => $this->pembelian_model->pembelian_getAll(),
            'pembelian2' => $this->pembelian_model->pembelian_getAll1(),

        ];
        $file_pdf = "LaporanPembelian";
        $paper = 'A4';
        $orientation = 'portrait';
        $html = $this->load->view('admin/pembelian/v_laporan_pdf', $this->data, true);
        $this->dompdf_gen->generate($html, $file_pdf, $paper . $orientation);
    }

    public function detail_pembelian($pembelian_id)
    {
        $data = array(
            'pembelian3' => $this->pembelian_model->pembelian_getAll2($pembelian_id),
        );
        $this->load->view('admin/pembelian/v_detail', $data);
    }

    public function chart()
    {
        if ($this->session->userdata('employee_id') != Null) {
            $start_date = $this->input->post('start_date');
            $end_date = $this->input->post('end_date');
            $record = $this->pembelian_model->monthChart($start_date, $end_date)->result();
            $data = [];
            $data['label_tahun'] = "-";
            foreach ($record as $row) {
                $data['label_bulan'][] = $row->month_name;
                $data['label_tahun'] = $row->year_num;
                $data['data_jml'][] = (int) $row->count;
            }
            $data2 = array(
                'find_date' => $this->pembelian_model->rangeDate($start_date, $end_date),
                'pembelian1' => $this->pembelian_model->pembelian_getAll1(),
                'chart_data' => json_encode($data), // Mengkonversi datadata dalam variabel $data menjadi objek JSON
            );
            $this->load->view('admin/pembelian/v_chart', $data2);
            // Load v_chart.php dengan membawa data array $data2
        } else {
            echo '<script language=JavaScript>onclick=location.href="../Pembelian"</script>';
        }
    }
}
