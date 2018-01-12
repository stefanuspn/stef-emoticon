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

atau 

echo $emot->emot("*happy* *eyeblink* *bigsmile* *laugh1* *laugh2* *bighug* *dance* *party* *roftl*");
