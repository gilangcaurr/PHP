<?php 
//buat class
class Manusia{

        //buat property/atribut 
        public $nama = "Kulgar"; 
        public $nama2 = "JarzzProOoots";

        //buat method/function 
        public function makan(){
                echo " $this->nama suka makan";
        } 
        public function minum(){
                echo " $this->nama2 suka minum";
        }
} 

//buat object 
$cetak = new Manusia(); 

echo $cetak->makan(); 
echo "<br>"; 
echo $cetak->minum(); 
?>