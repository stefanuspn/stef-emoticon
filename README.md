# stef-emoticon

Sebuah Library Php Untuk Mengubah String menjadi gambar emoticon bisa digunakan di framework codeigniter 


Author: Stefanus Prasetyo Nugroho

kode yang tersedia        

    :) atau *happy*
    ;) atau *eyeblink*
    :D atau *bigsmile*
    =-D atau *laugh1*
    =-) atau *laugh2*
    ({}) atau *bighug*
    \=D/ atau *dance*
    <=-P atau *party*
    =)) atau *roftl*
    
# Cara Pakai

Silahkan Letakan stef_emoticon.php di folder yang anda butuhkan  lalu memanggilnya dengan di bawah ini:

$emot = new Stef_Emot();
echo $emot->emot(':)  ;) :D =-D =-) ({}) \=D/  <=-P  =))');

# Bisa Digunakan Di Codeigniter

stef_emoticon juga bisa dijadikan sebagai library framework php codeigneter
Caranya: 

1 silahkan download terlebih dahulu stef_emoticon.php
2 taruh dalam folder application/library
Dan yang terakhir panggil library stef_emoticon tersebut kedalam sebuah controller
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('stef_emot');
	}

//Untuk Output
echo $this->stef_emot->emot(':)  ;) :D =-D =-) ({}) \=D/  <=-P  =))');
