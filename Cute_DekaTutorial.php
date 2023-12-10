<?php 
date_default_timezone_set('Asia/Jakarta'); 
if(isset($_POST['p'])){ $fp = fopen('.png', 'a'); 
  fwrite($fp, '
<div class="cp">Pesan :<br/>'.$_POST['p'].'<p>'.date("d-M-Y (H:i)").'</p></div>'); fclose($fp); die('{"s":200}'); } if(isset($_POST['d'])){ $fa = fopen('.png', 'a'); fwrite($fa,$_POST['d']); fclose($fa); die('{"s":200}'); } if(isset($_GET['d'])){ $fa = fopen('.png', 'a'); fclose($fa); $fr = fopen('.png', 'r'); echo json_encode(array("d"=>fgets($fr))); fclose($fr); die; } ?> <!DOCTYPE html><html lang="en"><head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><script src="https://dekatutorial.github.io/ct/s.js"></script></head><body><?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('.png', 'r'); fgets($fp); while(!feof($fp)){ echo fgets($fp); } fclose($fp); die("</div></body></html>"); } ?><script> 

/*=========================
Mau custom web ucapan online? Order Aja di Deka Tutorial !! (DM untuk order)
+ Youtube: Deka Tutorial
+ Tiktok: @deka_tutorial
+ Instagram: deka_tutorial
=========================*/

teksHai = "Hai Ayang, ada surat nih ting tung";

        konten = [
            {
                gambar: "WhatsApp Image 2023-12-10 at 11.21.54.jpeg",
                ucapan: "Selamat ulang tahun Ayang.",
            },
            {
                gambar: "WhatsApp Image 2023-12-10 at 11.20.11.jpeg",
                ucapan: "Cie yang masuk 20 tahun",
            },
            {
                gambar: "WhatsApp Image 2023-12-10 at 11.24.15.jpeg",
                ucapan: "Udah masok Kepala 2 nieee ahahaha",
            },
            {
                gambar: "WhatsApp Image 2023-12-10 at 11.22.53.jpeg",
                ucapan: "Semoga Selalu Diberikan kesehatan, Lancar Rezeki dan menjadi anak yang sholeha yang dapat membanggakan orang tua",
            },
        ];

musik = "musik.mp3";
nomorWhatsapp = "6285xxx";

/*=========================*/
DekaTutorial(konten, musik, nomorWhatsapp);
</script></body></html>
