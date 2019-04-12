<?php 
    session_start();
    $idProfe = $_SESSION['noTrabajador'];
/*for ($i=1; $i<=12; $i++) { 
    for ($j=1; $j<=5; $j++) { 
        ${$i.$j} = $_POST[$i.$j];
        echo "campo".$i.$j.":".${$i.$j};
        echo "<br>";
    }
}*/

    $mysqli = new mysqli('localhost', 'root', 'root', 'horario');

    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);
    }

    if (mysqli_connect_error()) {
        die('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
    }
    for ($i=1; $i<=12; $i++) { 
        for ($j=1; $j<=5; $j++) { 
            $GLOBALS[$i.$j] = $_POST[$i.$j];
            echo "campo".$i.$j.":".$GLOBALS[$i.$j];
            echo "<br>";

            /*$busqueda1=$mysqli->query("INSERT INTO lunes(noTrabajador,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,diezseis,diezsiete,diezocho) 
            VALUES ('$idProfe','${$i.$j}','${$i.$j}','$31','$41','$51','$61','$71','$81','$91','$101','$111','$121')");
            $busqueda2=$mysqli->query("INSERT INTO martes(noTrabajador,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,diezseis,diezsiete,diezocho) 
            VALUES ('$idProfe','$12','$22','$32','$42','$52','$62','$72','$82','$92','$102','$112','$122')");
            $busqueda3=$mysqli->query("INSERT INTO miercoles(noTrabajador,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,diezseis,diezsiete,diezocho) 
            VALUES ('$idProfe','$13','$23','$33','$43','$53','$63','$73','$83','$93','$103','$113','$123')");
            $busqueda4=$mysqli->query("INSERT INTO jueves(noTrabajador,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,diezseis,diezsiete,diezocho) 
            VALUES ('$idProfe','$14','$24','$34','$44','$54','$64','$74','$84','$94','$104','$114','$124')");
            $busqueda5=$mysqli->query("INSERT INTO viernes(noTrabajador,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,diezseis,diezsiete,diezocho) 
            VALUES ('$idProfe','$15','$25','$35','$45','$55','$65','$75','$85','$95','$105','$115','$125')");*/
        }
    }
$busqueda1=$mysqli->query("INSERT INTO lunes(noTrabajador,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,diezseis,diezsiete,diezocho) 
VALUES ('$idProfe','$GLOBALS[11]','$GLOBALS[21]','$GLOBALS[31]','$GLOBALS[41]','$GLOBALS[51]','$GLOBALS[61]','$GLOBALS[71]','$GLOBALS[81]','$GLOBALS[91]','$GLOBALS[101]','$GLOBALS[111]','$GLOBALS[121]')");
$busqueda2=$mysqli->query("INSERT INTO martes(noTrabajador,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,diezseis,diezsiete,diezocho) 
VALUES ('$idProfe','$GLOBALS[12]','$GLOBALS[22]','$GLOBALS[32]','$GLOBALS[42]','$GLOBALS[52]','$GLOBALS[62]','$GLOBALS[72]','$GLOBALS[82]','$GLOBALS[92]','$GLOBALS[102]','$GLOBALS[112]','$GLOBALS[122]')");
$busqueda3=$mysqli->query("INSERT INTO miercoles(noTrabajador,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,diezseis,diezsiete,diezocho) 
VALUES ('$idProfe','$GLOBALS[13]','$GLOBALS[23]','$GLOBALS[33]','$GLOBALS[43]','$GLOBALS[53]','$GLOBALS[63]','$GLOBALS[73]','$GLOBALS[83]','$GLOBALS[93]','$GLOBALS[103]','$GLOBALS[113]','$GLOBALS[123]')");
$busqueda4=$mysqli->query("INSERT INTO jueves(noTrabajador,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,diezseis,diezsiete,diezocho) 
VALUES ('$idProfe','$GLOBALS[14]','$GLOBALS[24]','$GLOBALS[34]','$GLOBALS[44]','$GLOBALS[54]','$GLOBALS[64]','$GLOBALS[74]','$GLOBALS[84]','$GLOBALS[94]','$GLOBALS[104]','$GLOBALS[114]','$GLOBALS[124]')");
$busqueda5=$mysqli->query("INSERT INTO viernes(noTrabajador,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,diezseis,diezsiete,diezocho) 
VALUES ('$idProfe','$GLOBALS[15]','$GLOBALS[25]','$GLOBALS[35]','$GLOBALS[45]','$GLOBALS[55]','$GLOBALS[65]','$GLOBALS[75]','$GLOBALS[85]','$GLOBALS[95]','$GLOBALS[105]','$GLOBALS[115]','$GLOBALS[125]')");
?>