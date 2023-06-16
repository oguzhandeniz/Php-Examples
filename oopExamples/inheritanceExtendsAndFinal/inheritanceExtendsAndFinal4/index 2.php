<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Islemler
    {
        public $isimSoyisim;
        public $aylikGelir;
        public $aylikGider;

        public function IsimGoster($adSoyad)
        {
            $this->isimSoyisim = $adSoyad;
        }
        public function GelirGoster($gelirTutari)
        {
            $this->aylikGelir = $gelirTutari;
        }
        public function GiderGoster($giderTutari)
        {
            $this->aylikGider = $giderTutari;
        }
        public function GelirGiderHesaplamasi()
        {
            $netKazanilan = $this->aylikGelir - $this->aylikGider;
            return $netKazanilan;
        }
        public function AltiAylikKazanilan(){
			$altiAylikNetKazanilan	=	($this->aylikGelir - $this->aylikGider) * 6;
			return $altiAylikNetKazanilan;
		}
        public function YillikKazanilan()
        {
            $yillikNetKazanilan = ($this->aylikGelir - $this->aylikGider) * 12;
            return $yillikNetKazanilan;
        }
    }

    class ElemanlarDahili extends Islemler {  }

    class ElemanlarHarici extends Islemler {  }

    $birinciKisi		=	new ElemanlarDahili;	
	$birinciKisi->IsimGoster("Oğuzhan Deniz");
	$birinciKisi->GelirGoster("48000");
	$birinciKisi->GiderGoster("32000");
	
	echo "Oğuzhan Deniz isimli şahsın aylık geliri 48000 TL'dir. <br />
          Aylık gideri 32000 TL'dir.<br /> 
          Aylık net kazancı " . $birinciKisi->GelirGiderHesaplamasi() . " TL'dir.<br />";
	echo "Oğuzhan Deniz isimli şahsın 6 aylık net kazancı " . $birinciKisi->AltiAylikKazanilan(). " TL'dir. <br />
          Yıllık net kazancı " . $birinciKisi->YillikKazanilan(). " TL'dir.<br /><br /><br />";
	
	$ikinciKisi		=	new ElemanlarDahili;	
	$ikinciKisi->IsimGoster("Halim Can Ocaklı");
	$ikinciKisi->GelirGoster("50000");
	$ikinciKisi->GiderGoster("42000");
	
	echo "Halim Can Ocaklı isimli şahsın aylık geliri 50000 TL'dir. <br />
          Aylık gideri 42000 TL'dir. <br />
          Aylık net kazancı " . $ikinciKisi->GelirGiderHesaplamasi() . " TL'dir.<br />";
	echo "Halim Can Ocaklı isimli şahsın 6 aylık net kazancı " . $ikinciKisi->AltiAylikKazanilan(). " TL'dir.<br />
          Yıllık net kazancı " . $ikinciKisi->YillikKazanilan(). " TL'dir.<br /><br /><br />";
	
	$ucuncuKisi		=	new ElemanlarHarici;	
	$ucuncuKisi->IsimGoster("Batın Berkin Topaloğlu");
	$ucuncuKisi->GelirGoster("60000");
	$ucuncuKisi->GiderGoster("13000");
	
	echo "Batın Berkin Topaloğlu isimli şahsın aylık geliri 60000 TL'dir. <br />
          Aylık gideri 13000 TL'dir. <br />
          Aylık net kazancı " . $ucuncuKisi->GelirGiderHesaplamasi() . " TL'dir.<br />";
	echo "Batın Berkin Topaloğlu isimli şahsın 6 aylık net kazancı " . $ucuncuKisi->AltiAylikKazanilan(). " TL'dir. <br />
          Yıllık net kazancı " . $ucuncuKisi->YillikKazanilan(). " TL'dir.<br /><br /><br />";


    ?>
</body>

</html>