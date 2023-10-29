<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*
        simplexml_load_string()		:	Belirtilecek olan XML kodlama değerinin standart kodlama karşılığını bularak, bulduğu değeri geriye döndürür.
        simplexml_load_file()		:	Belirtilecek olan XML dosyası içeriği kodlama değerinin standart kodlama karşılığını bularak, bulduğu değeri geriye döndürür.
            LIBXML_NOCDATA			:	Belirtilecek olan XML kodlama değeri içerisinde bulunan CDATA değeri / değerlerini metin düğümleri ile birleştirmek için kullanılır.
        children()					:	Belirtilecek olan XML kodlama değeri içerisinde bulunan, belirtilecek olan tag (etiket) adı değerine bağlı olan bir alt tüm çocuk elemanları / elementleri işarate etmek ve seçmek için kullanılır.
        xpath()						:	Belirtilecek olan XML kodlama değeri içerisinde bulunan, belirtilecek olan değer / değerler doğrultusunda eşleşen tüm elemanları / elementleri işarate etmek ve seçmek için kullanılır.
        SimpleXMLElement()			:	Belirtilecek olan içerikler dahilinde XML kodlama yapıları oluşturmak için kullanılır.
        asXML()						:	Belirtilecek olan ve SimpleXMLElement() metodu kullanılarak oluşturulmuş olan XML kodlama yapılarının çıktılanmasını sağlamak için kullanılır.
        addChild()					:	Belirtilecek olan ve SimpleXMLElement() metodu kullanılarak oluşturulmuş olan XML kodlama yapılarına yeni eleman / element eklemek için kullanılır.
        addAttribute()				:	Belirtilecek olan ve SimpleXMLElement() metodu kullanılarak oluşturulmuş olan XML kodlama yapılarına ait elemana / elemente özellik eklemek için kullanılır.
        DOMDocument					:	Kullanıldığı dokümanı bir DOMDocument nesne örneğine yükleyerek işleme hazır hale getirmek için kullanılır.
            loadXML()				:	DOMDocument metodu ile oluşturulmuş olan DOMDocument nesne örneğine belirtilecek olan herhangi bir içeriği yüklemek için kullanılır.
            preserveWhiteSpace		:	DOMDocument metodu ile oluşturulmuş ve loadXML() metodu ile nesne örneğine yüklenmiş olan içerikte WhiteSpace özelliğinin kullanılıp kullanılmayacağını belirtmek için kullanılır.
            formatOutput			:	DOMDocument metodu ile oluşturulmuş ve loadXML() metodu ile nesne örneğine yüklenmiş olan içerikte sekme / girinti özelliğinin kullanılıp kullanılmayacağını belirtmek için kullanılır.
            xmlVersion 				:	DOMDocument metodu ile oluşturulmuş ve loadXML() metodu ile nesne örneğine yüklenmiş olan içeriğin belge türü belirtiminde kullanılacak olan XML sürümünü / versiyonunu belirtmek için kullanılır.
            encoding 				:	DOMDocument metodu ile oluşturulmuş ve loadXML() metodu ile nesne örneğine yüklenmiş olan içeriğin belge türü belirtiminde kullanılacak olan karakter kodlamasını belirtmek için kullanılır.
            saveXML()				:	DOMDocument metodu ile oluşturulmuş ve loadXML() metodu ile nesne örneğine yüklenmiş olan içeriğin çıktılanmasını sağlamak için kullanılır.
            save()					:	DOMDocument metodu ile oluşturulmuş ve loadXML() metodu ile nesne örneğine yüklenmiş olan içeriğin belirtilecek olan dosyaya kaydedilmesini sağlamak için kullanılır.
        */


        $Dosya		=	"OrtaXMLOrnegi.xml";
	
        $Donustur	=	simplexml_load_file($Dosya);

        echo "<pre>";
        print_r($Donustur);
        echo "</pre>";

        echo $Donustur->OGUZ . "<br />";
        echo $Donustur->SCHOOL . "<br />";
        echo $Donustur->LESSONS->LESSON[0] . "<br />";
        echo $Donustur->LESSONS->LESSON[1] . "<br />";
        echo $Donustur->LESSONS->LESSON[2] . "<br />";
        echo $Donustur->LESSONS->LESSON[3] . "<br />";
        echo $Donustur->TEACHERS->TEACHER[0]->ADI . "<br />";
        echo $Donustur->TEACHERS->TEACHER[0]->KURSADI . "<br />";
        echo $Donustur->TEACHERS->TEACHER[1]->ADI . "<br />";
        echo $Donustur->TEACHERS->TEACHER[1]->KURSADI . "<br />";
        echo $Donustur->TEACHERS->TEACHER[2]->ADI . "<br />";
        echo $Donustur->TEACHERS->TEACHER[2]->KURSADI . "<br />";
        echo $Donustur->TEACHERS->TEACHER[3]->ADI . "<br />";
        echo $Donustur->TEACHERS->TEACHER[3]->KURSADI;

    ?>
</body>

</html>