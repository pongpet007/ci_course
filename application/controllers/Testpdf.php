<?php 

class Testpdf extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('Pdf');
		$this->load->model('Products_model');
	}

	public function index()
	{
		$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);    
		// Font thai	
    	$pdf->SetFont('freeserif', '', 30, '', true);   
    	// add a page
		$pdf->AddPage();
		$pdf->ln(10);
		// set some text to print
		$txt = "Hello world ภาษาไทย";		
		//Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')
		// print a block of text using Write()
		$pdf->Cell(0, 0, $txt , 1 , 0, 'C', 0, '', 0);		
		$pdf->ln(20);

		$pdf->SetFont('freeserif', '', 14, '', true);  
		$pdf->Cell(50, 0, $txt , 1 , 0, 'C', 0, '', 0);		
		$pdf->Cell(50, 0, $txt , 1 , 0, 'C', 0, '', 0);

		$pdf->SetFont('freeserif', '', 14, '', true); 
		//Close and output PDF document
		
		$pdf->AddPage();
		$pdf->ln(10);
		$txt = "Hello world ภาษาไทย";		
		//Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')
		// print a block of text using Write()
		$pdf->Cell(0, 0, $txt , 1, 1, 'C', 0, '', 0);		

		$pdf->Output('TEST01.pdf', 'I');
	}
	
	public function forceDownload()
	{
		$pdf = new Pdf('L', 'mm', 'A4', true, 'UTF-8', false);    	
    	$pdf->SetFont('freeserif', '', 20, '', true);  
    	$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);  	
    	// add a page
		$pdf->AddPage();
		// set some text to print
		$txt = "Hello world ภาษาไทย";		
		//Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')
		// print a block of text using Write()
		$pdf->Cell(0, 0, $txt , 1, 1, 'C', 0, '', 0);	

		$pdf->AddPage();		
		$txt = "Hello world ภาษาไทย";		
		$pdf->Cell(0, 0, $txt , 1, 1, 'C', 0, '', 0);

		$pdf->AddPage();		
		$txt = "Hello world ภาษาไทย";		
		$pdf->Cell(0, 0, $txt , 1, 1, 'C', 0, '', 0);		
		
		//Close and output PDF document
		$pdf->Output('example_002.pdf', 'D');
	}
	
	public function html($pro_id="3501")
	{
		$lang = $this->session->userdata('language');

		$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);    	
    	$pdf->SetFont('freeserif', '', 8, '', true);
		$pdf->AddPage();
		$pdf->ln(10);

		$product = $this->Products_model->getOne($pro_id);

		// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
		// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)

		// create some HTML content
		$pro_name = $lang=='EN'?$product->pro_name_en:$product->pro_name_th;
		$html = '<h1 style="text-align:center; color:red;">' . $pro_name .'</h1>';

		$pro_detail = $lang=='EN'?$product->pro_desc_en:$product->pro_desc_th;
		$html .= '
			<table>
				<tr>
					<td><img src="' . base_url("product/pro_{$product->pro_id}01.jpg") .'" style="width:300px;height:300px;" /> </td>
					<td>
						<h4>Detail :  </h4>
						<p>
						'. $pro_detail . '
						</p>
						<p style=" font-size:16px; color:blue;">
						Price : '. $product->pro_price .'
						</p>
					</td>
				</tr>
			</table>

		';
		// echo $html ;
		// exit();
		// output the HTML content
		$pdf->writeHTML($html, true, false, true, false, '');

		// $pdf->AddPage();
		// $pdf->ln(10);

		// $pdf->AddPage();
		// $pdf->ln(10);

		// $pdf->AddPage();
		// $pdf->ln(10);

		$pdf->Output('example_002.pdf', 'I');
	}

	



}