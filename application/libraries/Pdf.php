<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
include_once APPPATH.'/libraries/dompdf/autoload.inc.php'; 

use Dompdf\Dompdf;
class Pdf extends Dompdf{
    
    public $filename;
    public function __construct(){
        parent::__construct();
        $this->filename = "laporan.pdf";
    }

    protected function ci()
    {
        return get_instance();
    }

    public function load_view($view, $data = array()){
        $html = $this->ci()->load->view($view, $data, TRUE);
        $this->load_html($html);
        // Render the PDF
        $this->render();
            // Output the generated PDF to Browser
               $this->stream($this->filename, array("Attachment" => false));
    }
 }


// class Pdf {
 
//     public $param;
//     public $pdf;
 
//     public function __construct($param = '"en-GB-x","A4","","",10,10,10,10,6,3')
//     {
//         $this->param = $param;
//         $this->pdf = new mPDF($this->param);
//     }
// }

// class pdf {

//     function __construct() {
//         include_once APPPATH . '/libraries/fpdf181/fpdf.php';
//     }
// }
?>