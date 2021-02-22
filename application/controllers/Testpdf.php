<?php 

class Testpdf extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('Pdf');
	}

	public function index()
	{
		$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);    	
    	$pdf->SetFont('freeserif', '', 8, '', true);   
    	// add a page
		$pdf->AddPage();
		$pdf->ln(10);
		// set some text to print
		$txt = "Hello world ภาษาไทย";		
		//Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')
		// print a block of text using Write()
		$pdf->Cell(0, 0, $txt , 1, 1, 'C', 0, '', 0);		
		//Close and output PDF document
		$pdf->AddPage();
		$pdf->ln(10);
		$txt = "Hello world ภาษาไทย";		
		//Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')
		// print a block of text using Write()
		$pdf->Cell(0, 0, $txt , 1, 1, 'C', 0, '', 0);		

		$pdf->Output('example_002.pdf', 'I');
	}
	
	public function forceDownload()
	{
		$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);    	
    	$pdf->SetFont('freeserif', '', 8, '', true);  
    	$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);  	
    	// add a page
		$pdf->AddPage();
		// set some text to print
		$txt = "Hello world ภาษาไทย";		
		//Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')
		// print a block of text using Write()
		$pdf->Cell(0, 0, $txt , 1, 1, 'C', 0, '', 0);		
		//Close and output PDF document
		$pdf->Output('example_002.pdf', 'D');
	}
	
	public function html()
	{
		$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);    	
    	$pdf->SetFont('freeserif', '', 8, '', true);
		$pdf->AddPage();
		$pdf->ln(10);
		// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
		// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)

		// create some HTML content
		$html = '<h1>Product Name</h1>';
		$html .= '
			<table>
				<tr>
					<td><img src="' . base_url("product/pro_382801.jpg") .'" style="width:100mm;height:100mm;" /> </td>
					<td>
						<h4>Detail :  </h4>
						<p>
						-
						</p>
					</td>
				</tr>
			</table>

		';
		// echo $html ;
		// exit();
		// output the HTML content
		$pdf->writeHTML($html, true, false, true, false, '');

		$pdf->Output('example_002.pdf', 'I');
	}

	



}