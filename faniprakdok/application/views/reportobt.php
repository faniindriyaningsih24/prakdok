<?php
// require_once('tcpdf/tcpdf.php');  
              $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
              $obj_pdf->SetCreator(PDF_CREATOR);  
              $obj_pdf->SetTitle("Report PDF");  
              $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
              $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
              $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
              $obj_pdf->SetDefaultMonospacedFont('helvetica');  
              $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
              $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
              $obj_pdf->setPrintHeader(false);  
              $obj_pdf->setPrintFooter(false);  
              $obj_pdf->SetAutoPageBreak(TRUE, 10);  
              $obj_pdf->SetFont('helvetica', '', 11);  
              $obj_pdf->AddPage();  
              $content = '';  
              $content .= '  
              <strong align="center">Fani Klinik</strong><br>
              <p align="center">Jln. Si Jalak Harupat No. B090 Tlp.(0251)909090</p>
              <hr></hr>
              <h4 align="center">List Data Obat Bebas Terbatas</h4><br /> 
              <table border="1" cellspacing="0" cellpadding="3">  
                   <tr>  
                        <th > Kode Obat</th>  
                        <th > Nama</th>
                        <th > Indikasi</th>
                        <th > Stok</th>
                        <th > Harga</th>  
                        <th > Tanggal Kadarluarsa</th>
                   </tr>  
              ';
              foreach ($obt as $dataobt) {
              $content .= ' <tr>  
                                <td>'.$dataobt->kd_obt.'</td>
                                <td>'.$dataobt->nama_obt.'</td>  
                                <td>'.$dataobt->indikasi_obt.'</td>
                                <td>'.$dataobt->stok_obt.'</td>
                                <td>'.$dataobt->harga_obt.'</td>
                                <td>'.$dataobt->tglkadar_obt.'</td>
                            </tr>  
                            ';    
                        }  
              $content .= '</table>';  
              $obj_pdf->writeHTML($content);  
              $obj_pdf->Output('file.pdf', 'I');
?>