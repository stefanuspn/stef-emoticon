Dap_emot PHP Library Emoticons

capture-20161229-211321.png
Sebuah Library Php Untuk mengeluarkan sistem emoticon terdapat 25 emoticon, masih dalam tahap beta (uji coba) Terinspirasi dari Parsedown PHP, 
Create By : Dion Arya Pamungkas 
http://dionarya6661.github.io 
@DionArya_P on twitter 

Cara Memakai

Silahkan Letakan Dap_emot.php di folder yang dibutuhkan lalu :

$Dap_emot = new Dap_emot();
echo $Dap_emot->emot('Tulisan Terdapat Emoticons :D :( :)');
Ouput -> Tulisan Terdapat Emoticons 😃 😟 🙂
Menjadikan sebagai library Codeigneter

Dap_emot juga bisa dijadikan sebagai library framework php codeigneter
Caranya: 

Pertama silahkan download terlebih dahulu dap_emot.php
Kedua taruh dalam folder application/library
Dan yang terakhir panggil library tersebut kedalam sebuah controller
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('dap_emot');
	}

//Untuk Output
echo $this->dap_emot->emot('Tulisan Terdapat Emoticons :D :( :)');

//atau
$text     = 'Tulisan Terdapat Emoticons :D :( :)';
$textBaru = $this->dap_emot->emot($text);
echo $textBaru;
Ouput -> Tulisan Terdapat Emoticons 😃 😟 🙂
Kelebihan

Emoticon berbentuk gambar langsung tanpa tag html <img
Cepat
Mudah Digunakan
Bisa dikombinasikan langsung dengan Parsedown
Library Kode Emotikon Terdapat 25 Emoticons

Kode	Nama	Hasil
:)	happy	:slightly_smiling_face:
:(	sad	:worried:
:P	tongue	:stuck_out_tongue:
:D	grin	:smiley:
:O	wink	:open_mouth:
;)	kedip mata	:stuck_out_tongue_winking_eye:
B)	glasses	:eyeglasses:
B|	subglasses	:sunglasses:
>:(	grumpy	:rage:
:/	unsure	:neutral_face:
:'(	cry	:cry:
#:)	devil	:smiling_imp:
O:)	angel	:innocent:
:*	kiss	:kissing_heart:
<3	heart	:heartbeat:
^_^	kiki	:blush:
-_-	squint	:expressionless:
o.O	confused	:confused:
>:O	upset	:persevere:
:v	yimyam	
:3	curly lips	:lips:
:|]	robot	:space_invader:
(y)	like	:+1:
:tai	poop	:hankey:
(;)	dislike	:-1:
