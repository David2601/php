
<?php
    require("/FPDF/fpdf.php");
    require("bdconexion.php");

    $query = "SELECT * FROM libros";
    $j = mysql_query($query);
    $i = mysql_num_rows($j);

    $pdf = new FPDF();
    $pdf ->AddPage();
    $pdf ->SetFont('Arial', 'B', 12);
    $pdf ->Cell(40, 5, "ID del libro", 1, 0, 'C');
    $pdf ->Cell(40, 5, "Nombre del libro", 1, 0, 'C');
    $pdf ->Cell(30, 5, "Nombre del solicitante", 1, 0, 'C');
    $pdf ->Cell(30, 5, "Fecha de salida", 1, 0, 'C');
    $pdf ->Cell(30, 5, "Fecha de entrega", 1,1 , 'C');
   ;

    $k = 1;
    while($reg = mysql_fetch_row($j)){
        $pdf ->Cell(40, 5, $reg[0], 1, 0, 'C');
        $pdf ->Cell(40, 5, $reg[1], 1, 0, 'C');
        $pdf ->Cell(30, 5, $reg[2], 1, 0, 'C');
        $pdf ->Cell(30, 5, $reg[3], 1, 0, 'C');
        $pdf ->Cell(30, 5, $reg[4], 1, 1, 'C');



    if($k == 15){
        $pdf ->AddPage();
        $pdf ->SetFont('Arial', 'B', 12);
        $pdf ->Cell(0, 10, "Listado", 1, 0, 'C');

        $pdf = Ln();
        $pdf ->SetFont('Arial', 'B', 10);
        $pdf ->Cell(40, 5, "idlibro", 1, 0, 'C');
    $pdf ->Cell(40, 5, "nombrelibro", 1, 0, 'C');
    $pdf ->Cell(30, 5, "nombresol", 1, 0, 'C');
    $pdf ->Cell(30, 5, "fecha_sal", 1, 0, 'C');
    $pdf ->Cell(30, 5, "fecha_ent", 1, 1, 'C');


    }

    $k = $k+1;
    }
    $pdf ->Output();
?>
