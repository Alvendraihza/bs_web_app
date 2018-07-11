<?php
        include "koneksi.php";
        include "fpdf/fpdf.php";


        $pdf = new FPDF('L','mm','A4');//P atau L = orientasi kertas, mm = ukuran, A4 = jenis kertas
        $pdf->AddPage();
        $pdf->AliasNbPages();
        $pdf->SetFont('Arial','B',10);//Arial = jenis huruf, B = format huruf, 10 = ukuran
        //$pdf->Cell(40,10,'',1);//40 = panjang, 10 = tinggi, 1 = tingkat ketebalan garis
        $pdf->Cell(250,10,'Data Pendaftar SMA Gunadarma',0,0,'C'); 
        $pdf->Ln(10);//Ln = pindah baris
        $pdf->Cell(10,10,'NO','1');
        $pdf->Cell(10,10,'ID','1');
        $pdf->Cell(30,10,'Nama Lengkap','1');
        $pdf->Cell(40,10,'Email','1');
        $pdf->Cell(40,10,'Jenis Kelamin','1');
        $pdf->Cell(50,10,'Alamat','1');
        $pdf->Cell(20,10,'Jurusan','1');
        $pdf->Cell(50,10,'Ekstrakurikuler','1');
        
        //pindah baris
        $pdf->Ln(10);

        $no = 1;

        $sql = "SELECT * FROM tbl_biodata 
                        JOIN tbl_jurusan
                        ON tbl_biodata.jurusan = tbl_jurusan.id_jur
                        ORDER BY id_bio";
        $query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

        while($data = mysqli_fetch_array($query)){

            $pdf->Cell(10,10, $no, 1);
            $pdf->Cell(10,10, $data["id_bio"],1);
            $pdf->Cell(30,10, $data["nama"],1);
            $pdf->Cell(40,10, $data["email"],1);
            $pdf->Cell(40,10, $data["jkelamin"],1);
            $pdf->Cell(50,10, $data["alamat"],1);
            $pdf->Cell(20,10, $data["desk_jurusan"],1);
            $pdf->Cell(50,10, $data["ekskul"],1);


            $pdf->Ln(10);
            $no++;

        }

        //cetak
        $pdf->Output();