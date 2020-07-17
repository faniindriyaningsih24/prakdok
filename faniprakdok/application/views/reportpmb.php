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
              $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
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
              <h4 align="center">List Data Pembayaran</h4><br /> 
              <table border="1" cellspacing="0" cellpadding="4">  
                   <tr>  
                        <th > Kode Pembayaran</th>  
                        <th > Nama User</th>
                        <th > Nama Dokter</th>
                        <th > Nama Pasien</th>
                        <th > Nama Obat</th>  
                        <th > Diagnosa</th>
                        <th > Tanggal Pembayaran</th>
                        <th > Total Bayar</th>
                   </tr>  
              ';
              foreach ($pmb as $datapmb) {
                $total = 0;
              $total = $datapmb->jml_obt * $datapmb->harga_obt;
              $content .= ' <tr>  
                                <td>'.$datapmb->kd_pembayaran.'</td>
                                <td>'.$datapmb->kd_user.'</td>  
                                <td>'.$datapmb->kd_dokter.'</td>
                                <td>'.$datapmb->kd_pasien.'</td>
                                <td>'.$datapmb->kd_obt.'</td>
                                <td>'.$datapmb->diagnosa.'</td>
                                <td>'.$datapmb->tgl_pembayaran.'</td>
                                <td> Rp' . number_format($total, "0",",",".").'</td>

                              
                            </tr>  
                            ';    
                        }  
              $content .= '</table>';  
              $obj_pdf->writeHTML($content);  
              $obj_pdf->Output('file.pdf', 'I');
?>