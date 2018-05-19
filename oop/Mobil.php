<?php

    class Mobil{
        //attribute : apa yang dia punya  
        private $ban;
        private $spion;
        private $kaca;
        private $warna;
        private $mesin;
        private $merk;

        function __construct()
        {
            echo "<p>Construct Akan dijalankan terlebih dahulu</p>";
        }

        private $kecepatan; // attribut nya class mobil

        /*
            $this artinya alias untuk attribute dan method yg ada di class ini
         */

        //method : apa yg bisa dia lakukan
        function jalan($km,$jam) // public 
        {
            return $this->kecepatan = floor($km / $jam);
        }

        function setBan($jml)
        {
            $this->ban = $jml;
            return $this->ban;
        }

        function setWarna($warna)
        {
            $this->warna = $warna;
            return $this->warna;
        }

        function setMerk($merk)
        {
            $this->merk = $merk;
            return $this->merk;
        }

        static function ini_static()
        {
            return "<h3> Hello, Iam Static </h3>";
        }

        function __destruct()
        {
            echo "<p> Destruct akan dijalankan di akhir </p>";
        }

    }