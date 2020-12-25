<!DOCTYPE html>
<!--
Meter las fuentes en \vendor\tecnickcom\tcpdf\fonts
3 archivos
convertidor: https://www.xml-convert.com/ttftopdf/getfiles/id/118082/uniqueid/200348375f97ad33484c2
-->
<html>
    <head>
        <title>Cotización - Hacienda Torre Fuerte</title>
    </head>
    <body>
        <?php
        $con=conectar();
        $fecha = date("d-m-Y");
        $usuario = 'luisa@ejemplo';
        $id_asi = $_POST['id'];
        $query1 = "SELECT * FROM asi
        INNER JOIN cli ON asi.CLI_id_correo = cli.id_correo 
        WHERE asi.id_asi = '$id_asi'";
        $resultado=$con->query($query1);
        ?>
        <div id="cabecera" style="width: 100%; padding:25px;">
            <img src="https://i.ibb.co/mSWswcp/1603773301163.png" style="width: 200px; float: right;">
            <h1 style="text-align:left; font-size: 40px; font-family: Staatliches;"><strong>Hacienda Torre Fuerte</strong></h1>
            <p style="text-align:left; font-size: 13px; line-height: 175%; font-family: Quicksand">
                Km.25.5 CA-9 SUR, Amatitlán Guatemala <br/>
                +502 5722-8729 / +502 4975-1600 <br/>
                haciendatorrefuerte@gmail.com
            </p>
        </div>
        <?php while($row=$resultado->fetch_assoc()){ ?>
        <div id="info" style="width: 100%; margin-top: 20px;">
            <div id="datos" style="padding-left: 60px; float: left; width: 50%; box-sizing: border-box;">
                <table id="client">
                    <tr>
                        <th style="font-family:Montserrat-semibold; font-size: 13px; padding: 5px;">CLIENTE: </th>
                        <th style="font-family:Montserrat-semibold; font-size: 12px; padding: 5px;"><?php echo $row['nombre_completo'] ?></th>
                        <th style="width: 100px;" rowspan="4"></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="font-family:Montserrat; font-size: 11px; padding-left: 5px; color: #808080"><?php echo $row['direccion'] ?></td>
                        <td style="font-family:Montserrat-semibold; font-size:13px; padding-right:50px;">COTIZACIÓN #</td>
                        <td style="font-family:Montserrat-semibold; font-size:12px; text-align:right;"><?php echo $row['id_asi'] ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="font-family:Montserrat; font-size: 11px; padding-left: 5px; color: #808080"><?php echo $row['id_correo'] ?></td>
                        <td style="font-family:Montserrat-semibold; font-size:12px;">FECHA:</td>
                        <td style="font-family:Montserrat; font-size:11px; text-align:right;"><?php echo $fecha ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="font-family:Montserrat; font-size: 11px; padding-left: 5px; color: #808080"><?php echo $row['telefono'] ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <?php  } ?>
        <?php
        $query2 = "SELECT * FROM asi
        INNER JOIN ubi ON asi.UBI_id_u = ubi.id_u
        INNER JOIN eve ON asi.EVE_id_e = eve.id_e
        INNER JOIN com ON asi.COM_id_c = com.id_c
        INNER JOIN mv ON asi.MV_id_mv = mv.id_mv
        INNER JOIN me ON asi.ME_id_m = me.id_m
        WHERE asi.id_asi = '$id_asi'";
        $resultado2=$con->query($query2);
        ?>
        <hr style="border: 1px dotted #AEAEAE;">
        <?php while($row=$resultado2->fetch_assoc()){ ?>
        <div id="detalles" style="width: 100%; padding:25px;">
            <table id="addinfo" style="width:730px;">
                <tr>
                    <th style="width:33.33%; font-size:10px; font-family:Montserrat-semibold; margin-bottom:10px; color:#808080;">NOMBRE DEL EVENTO</th>
                    <th style="width:33.33%%; font-size:10px; font-family:Montserrat-semibold; margin-bottom:10px; color:#808080;">UBICACIÓN</th>
                    <th style="width:33.33%%; font-size:10px; font-family:Montserrat-semibold; margin-bottom:10px; color:#808080;">FECHA  DEL EVENTO</th>
                </tr>
                <tr>
                    <td style="width:240px; font-family:Montserrat; padding:10px; text-aling:left;"><?php echo $row['nombreasi'] ?></td>
                    <td style="width:205px; font-family:Montserrat; padding:10px; text-aling:left;"><?php echo $row['nombre_u'] ?></td>
                    <td style="width:245px; font-family:Montserrat; padding:10px; text-aling:left;"><?php echo $row['fecha'] ?></td>
                </tr>
            </table>
        </div>
        
        <div id="detalles" style="width: 100%; padding:10px; background-color:#EFEFEF;">
            <table id="detail" style="border-collapse: collapse; width:100%;">
                <tr>
                    <th style="font-family:Montserrat-bold; font-size:15px; width:10%; text-align:center; padding:30px;">#</th>
                    <th style="font-family:Montserrat-bold; font-size:15px; width:60%; padding:30px;">Descripción</th>
                    <th style="font-family:Montserrat-bold; font-size:15px; width:27%; padding:30px;">Precio</th>
                </tr>
                <tr>
                    <td style="font-family:Montserrat; padding:30px; border-bottom:1px solid #FFFFFF; text-align:center;">1</td>
                    <td style="font-family:Montserrat; padding:30px; border-bottom:1px solid #FFFFFF;">Evento de temática <?php echo $row['tematica'] ?></td>
                    <td style="font-family:Montserrat; padding:30px; border-bottom:1px solid #FFFFFF;">Q.<?php echo $row['pagoeve'] ?>.00</td>
                </tr>
                <tr>
                    <td style="font-family:Montserrat; padding:30px; border-bottom:1px solid #FFFFFF; text-align:center;">2</td>
                    <td style="font-family:Montserrat; padding:30px; border-bottom:1px solid #FFFFFF;"><?php echo $row['comida'] ?> para <?php echo $row['cantidad_persona'] ?> personas</td>
                    <td style="font-family:Montserrat; padding:30px; border-bottom:1px solid #FFFFFF;">Q.<?php echo $row['monto'] ?>.00</td>
                </tr>
                <tr>
                    <td style="font-family:Montserrat; padding:30px; border-bottom:1px solid #FFFFFF; text-align:center;">3</td>
                    <td style="font-family:Montserrat; padding:30px; border-bottom:1px solid #FFFFFF;">Música y vídeo impartidos por <?php echo $row['empresamv'] ?></td>
                    <td style="font-family:Montserrat; padding:30px; border-bottom:1px solid #FFFFFF;">Q.<?php echo $row['pagomv'] ?>.00</td>
                </tr>
                <tr>
                    <td style="font-family:Montserrat; padding:30px; border-bottom:1px solid #FFFFFF; text-align:center;">4</td>
                    <td style="font-family:Montserrat; padding:30px; border-bottom:1px solid #FFFFFF;">Mesas y sillas de <?php echo $row['material'] ?></td>
                    <td style="font-family:Montserrat; padding:30px; border-bottom:1px solid #FFFFFF;">Q.<?php echo $row['mepago'] ?>.00</td>
                </tr>
                <tr>
                    <td style="font-family:Montserrat-bold; padding:20px;"></td>
                    <td style="font-family:Montserrat-bold; font-size:20px; padding:20px; text-align:right;">Total</td>
                    <td style="font-family:Montserrat-bold; font-size:20px; padding:20px;"><?php echo $row['total'] ?></td>
                </tr>
            </table>
        </div>
        <?php  } ?>
        <div id="pie" style="width:100%; text-align:center; margin-top:80px;">
            <p style="font-family:Montserrat-semibold; font-size:20px; margin:2px;">Hacienda Torre Fuerte<br/></p>
            <p style="font-family:Montserrat; margin:2px;">Organizadora de eventos</p>
        </div>
    </body>
</html>
