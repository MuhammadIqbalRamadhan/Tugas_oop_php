<?php
    class warga{
        // variable global
        var $nama;
        var $alamat;
        // tahap 1
        public function personawal()
        {
            echo $nama_lengkap="adisuryana";
            echo $alamat="bogor";
        }
        // tahap 2
        public function person()
        {
            echo $nama_lengkap=$this->nama;
            echo $alamat=$this->alamat;

        }
        public function setperson()
        {
            // menggunakan variable global
            $this->nama="nama 2";
            $this->alamat="alamat 1";
        }
        public function person3($nama,$alamat)
        // dari parameter
        {
            echo $nama_lengkap=$nama;
            echo $alamat=$alamat;
        }
    }

?>