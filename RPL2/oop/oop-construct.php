<?php 

class contoh{
         
        public function __construct(){
                echo "Assalamualaikum bang <br>";
        } 

        public function perkenalan(){
                echo "Nama saya jarzz <br>";
        } 

        public function __destruct(){
                echo "Hallo dek";
        }
} 

$cetak = new contoh(); 
 
echo $cetak->perkenalan(); 
?> 

<?php 


