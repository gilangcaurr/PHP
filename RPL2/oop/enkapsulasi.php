<?php 

class manusia{

        public $nama ="Jarzz ganteng"; 

        private function tampilkan_nama(){
            echo "Nama saya jarzz <br/>";
        } 

        public function keluarkan(){
            $this->tampilkan_nama();
        }
} 

$cetak = new manusia(); 
//manggil method 
echo $cetak->keluarkan(); 
//manggil property 
echo $cetak->nama; 
?>