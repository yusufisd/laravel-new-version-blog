<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            "title" => "Ötekine yakınlaştıran 'öfke'",
            "content" => "İnsan canlısının doğadaki diğer canlılardan en önemli farkı belki de; öfkesini nefret, intikam gibi duygulara dönüştürebilmesidir. Bir köpek tam yemeğini yediği esnada yemeğine dokunmaya kalkışırsanız size dişlerini gösterip hırlayacaktır. Bunun intikamını sizden nasıl alacağının planlarını yapmayacaktır. Aslan yavru antilopları yediğinde, anne antiloplar öfkeleriyle aslanı boğmaya kalkışmayacaktır. Bu nedenledir ki bu kadar doğal olan bu duygu, insan için en tehlikeli duygu haline gelebilmektedir.<br><br>Engellenme, ihtiyaçların karşılanmaması, haksızlık algısı, tehdit algısı, aşağılanmak, yok sayılmak, aptal yerine konmak gibi durumlarda tetiklenen ancak oluşması için karşıdaki kişinin kendisiyle ilgili içsel süreçleri; yetersizlik, değersizlik, güvensizlik gibi duygularıyla etkileşen ve açığa çıkan bir duygu öfke. Sevdiği tarafından terk edilen A kişisi; bu durumu haksızlık, aşağılanmışlık, aptal yerine konulmuşluk olarak adlandırıp öfke hissedip ve bu öfkeye uzun süre tutunup ilişkisini devam ettirebileceği bir hale dönüştürüyor. Bir diğeri acısını yaşayıp bir süre sonra yoluna daha rahat devam edebiliyor. Trafikte giderken aniden önüne kıran araca sadece küfredip yoluna devam edenimiz de var, inip bıçaklı kavgaya karışanımız da",
            "category_id" => 1,
            "author_id" => 1,
            "image" => asset('uploads/blogs/image1.png'),
        ]);

        Blog::create([
            "title" => "Vesikalık fotoğraf makyajı nasıl yapılır?",
            "content" => "<br><br>Makyajdan önce cildinizi nazik bir yüz temizleyici ile temizleyin. Bu, pürüzsüz bir yüzey sağlar. Cildinize hafif bir nemlendirici uygulayın. Bu, makyajın daha iyi oturmasına yardımcı olur. Makyajın kalıcılığını artırmak için bir primer kullanın. Bu, cildin pürüzsüz görünmesini sağlar.<br><br>Fondöten/BB Krem/CC Krem<br><br>Cilt tonunuza uygun, hafif yapılı bir fondöten seçin. Yüzünüze eşit bir şekilde uygulayarak cilt tonunu dengeleyin. Aşırı kapatıcılardan kaçının.",
            "category_id" => 1,
            "author_id" => 2,
            "image" => asset('uploads/blogs/image2.png'),
        ]);

        Blog::create([
            "title" => "Sağlıklı algı ve farkındalık",
            "content" => "Önce temel bir psikolojik kavram olan “algı”dan başlayabiliriz. “Algı” aslında dışarıdan gelen bilgiyi işleme sürecimize verilen kapsayıcı bir başlıktır. Dışarıdan gelen bilgiden kastedilen, beş duyumuza ulaşan uyaranlardır; görüntü, ses, koku, tat ve dokunarak edindiğimiz bilgiler gibi... Algıdaki ilk aşama çok tekniktir; ilgili duyu organımızda fiziksel bir bozukluk yok ise gelen bilginin vücudumuza eksiksiz ulaştığı varsayılır. Bu kısım basit gibi görünür ancak sonraki aşamalar için hayati önem taşır. <br><br>Örneğin; gözlük takmadan uzağı net göremeyen birinin kriminal bir olayı uzaktan gördüğüne dair şahitliğinin kabul edilmemesi gerekir. Ya da karşınızdaki kişinin ne dediğini tam duyamadıysanız ne cevap vermeli ne de yorum yapmalısınız; harekete geçmeden önce söylediğini sizin anlayabileceğiniz şekilde tekrarlamasını rica edebilirsiniz. Dolayısıyla gelen bilginin öncelikle eksiksiz ve olduğu gibi algılanması önemlidir.",
            "category_id" => 1,
            "author_id" => 1,
            "image" => asset('uploads/blogs/image3.png'),
        ]);

        Blog::create([
            "title" => "Ağaçları ilaç olarak kullanan şehir",
            "content" => "<b>İlaç olarak ağaçlar</b><br><br> Araştırmaya kapsamında yeni yeşillendirilen bu mahallelerin sakinlerinin kan değerleri, diğer mahallelerin sakinleriyle karşılaştırıldı. Ağaçlandırılan mahallelerde yaşayanlarda tespit edilen inflamasyon değerleri, diğer bölgelere göre %13 ila %20 daha düşüktü. Bilindiği gibi inflamasyon, kalp hastalığı, kanser ve diyabet ile ilişkili önemli bir risk faktörü. Sonuçlar, ağaçların önemli sağlık problemlerine karşı koruyucu özelliklerine dair çığır açıcı bir bulgu olarak nitelendirildi.<br><br>Nature Conservancy ve diğer ortaklarla birlikte yürütülen 15 milyon dolarlık Yeşil Kalp Louisville projesi, 'ağaçların ilaç olduğu bir klinik deneme' olarak nitelendirildi. Ağaç örtüsünün nasıl korunacağını ve büyütüleceğini ve en çok nerede ihtiyaç duyulduğunu belirlemek için yapılan değerlendirmeler ve ağaçlandırma çalışmaları sonuç vermişti.",
            "category_id" => 1,
            "author_id" => 2,
            "image" => asset('uploads/blogs/image4.png'),
        ]);


        Blog::create([
            "title" => "Paralimpik zafer",
            "content" => "Merhabalar, size bu ay geçen ay da bahsettiğim paralimpik oyunlarından söz edeceğim. Bildiğiniz gibi normal olimpiyatlarda sporcularımızın performansı bizleri üzmüştü. Hiç altın madalya sevinci yaşayamadan olimpiyatları tamamladık. Bu konuda gerekli çalışmaları yapıp bir sonraki Los Angeles olimpiyatlarına daha hazır olmamız gerekiyor.<br><br>Paralimpik oyunlarını hemen hemen tüm branşlarını takip ettim. Gerçekten son iki romanımda da bir paralimpik okçunun hayatından kesitler sunduğum için nasıl bir çalışma içinde olduklarını az çok biliyorum.",
            "category_id" => 1,
            "author_id" => 1,
            "image" => asset('uploads/blogs/image5.png'),
        ]);

        Blog::create([
            "title" => "Triko pantolonlar",
            "content" => "Paris 2024 Paralimpik Oyunları’nı Türkiye, 28 madalya alarak rekorla tamamladı. Tarihinin en iyi paralimpik oyunlarını geçiren Türkiye, Paris 2024’te 6 altın, 10 gümüş, 12 bronz madalya kazandı. Sporcularımız inanılmaz başarılar elde ederken, bazı yaşam hikâyeleri de beni derinden etkiledi. <br><br>Kimisi doğuştan engelli kimisi sonradan engelli olup paralimpik sporcu olmuşlar. Hayatın içinde “Biz de varız” diyebilmişler. Bu çok kıymetli… Onları en iyi anlayanlardan biri de benim fırsat verildi ve dört kitabım birde HTHAYAT gibi bir marka sitede yazılarım ile sizlerleyim. Tüm sporcularımıza dört sene sonraki olimpiyatlarda daha iyi derecelerle dolu başarılar diliyorum.",
            "category_id" => 2,
            "author_id" => 1,
            "image" => asset('uploads/blogs/image6.png'),
        ]);

        Blog::create([
            "title" => "Yazı, Dolunay ve Cihangir",
            "content" => "Zihnim atlıyor. Bir düşünceden diğerine. Penceremin dışında inen yağmur kadar çok düşünce var aklımda. Düşünceler anılara, anılar duygulara götürüyor. Tekrar her şey başa dönüyor. Dünü, bir hafta öncesini, aylar öncesini hatırlıyorum parça parça. Yıllar sonrasını, hiç olmamış bir olayı kurguluyorum. Her düşüncenin, anının, duygunun, kurgunun açıldığı yollar var zihnimde. Her yol bir hikâye tohumu. O kadar hızlı atlıyor ki zihnim hiç bir yola giremiyorum. Bir de dolunay var. <br><br>Huzursuzluk, öfke, heyecan, tedirginlik, coşku… hepsinin içinden geçip gidiyorum. Gerginim. Omuzlarım kaskatı. Oturduğum yerde bacağımı sürekli seri bir şekilde oynatıyorum. Yemek yok evde, yemek yapmam gerekiyor, elim gitmiyor. Çamaşırları yıkayabilirim, arka odayı toplamak istiyorum ne zamandır, hiç birini yapamıyorum.",
            "category_id" => 2,
            "author_id" => 1,
            "image" => asset('uploads/blogs/image7.png'),
        ]);

        Blog::create([
            "title" => "Hikâye Neresi?",
            "content" => "Gençliğimde kim olduğumu bulmaya çalışırdım. Ben birisiydim ve henüz ona ulaşamamıştım. Her yerde aradım onu. Kişisel gelişim çalışmalarında, enerji çalışmalarında, atölyelerde, başarı hikâyelerinde, başkalarının hayatlarında aradım onu. Okuduğum kitapların kahramanlarında aradım. Bıraktığım her ülkeden ayrılıp vardığım ülkelerde ev kurarken hep ben kimim? ev neresi? diye sordum, ev dediğim bir yere dönmeyi arzuladım. Almanya’da yaşamaya başlayalı neredeyse üç yıl olacak, oğlum İngiltere’de, ablam Amerika’da, arkadaşlarım Türkiye’de, dünyanın farklı ülkelerinde. Eve dönmek için nereye gitmem gerekiyor? Nomadland filminin bir sahnesinde küçük bir kız karavanda yaşayan kahramana “Annem senin evsiz olduğunu söyledi” der. Kahramanımız kadın, “Evsiz değilim, evim yok” der. Burada home ve house kelimeleri üzerinden çok güzel bir kelime oyunu kullanılmış. Sokakta yaşayanlara ingilizce Homeless deniyor. ",
            "category_id" => 2,
            "author_id" => 1,
            "image" => asset('uploads/blogs/image8.png'),
        ]);

        Blog::create([
            "title" => "ZİYARET VİZESİNİN REDDİ",
            "content" => "Seçil Vergili ‘ye,<br>Ülke-i Şahane vize başvurunuz reddedildi.<br><br>Biz dünyanın en güçlü beş ülkesinden biriyiz. Her isteyen planladığı gibi elini kolunu sallayarak ülkemize giremez. Bu nedenle başvurunuzu titizlikle, çok ince eleyip sıkı sıkıya dokuduk, değerlendirdik. Öyle sıktık ki suyu çıktı. Dokuz hafta için Ülke-i Şahane ye genel ziyaret başvurusunda bulundunuz. Başvurunuzu göçmenlik kuralları kapsamında değerlendirdim.<br><br>Şahanece diline yeterince hakimseniz ekteki linke tıklayarak kuralları okuyabilirsiniz.<br>Karar:<br>Dokuz haftalığına ziyaretçi öğrenci olarak  Ülke-i Şahane ye gitmeyi planladığınızı belirttiniz. Üstelik porsuk Dil okuluna katılmayı da planladınız. Ancak sizi cesaretli gördüm. Vize almadan dil okuluna kayıt yaptırmak risktir. Bu riski alma fikri de nereden geldi! Sanki mağazadan kıyafet alıyorsunuz. Para verdiniz de hemen vizeyi kaptım mı sandınız! Ayrıca dil okuluna ait eklediğiniz mektup ile kesinlikle neden şimdi şahanece öğrenmeye karar verdiğinize dair bir koşul sunmadınız. Bunun ne mevcut işinizde ne de gelecekteki beklentileriniz için size ne gibi fayda sağlayacağına dair bir kanıt yok. Buna ek olarak Özel Sevimsizler Eğitim Kurumlarında öğretmen olarak çalıştığınızı ve aylık gelirinizin iki yüz otuz avro olduğunu belirttiniz. Bu geliri desteklemek için maaş bordrolarını da sundunuz.",
            "category_id" => 3,
            "author_id" => 2,
            "image" => asset('uploads/blogs/image9.png'),
        ]);

        Blog::create([
            "title" => "UĞURLAR OLSUN",
            "content" => "Geride kalanlara ani, sana cani ölüm. Yıllarca ölüm, sessiz sessiz ölüm. Hayatını sardın bir tütün gibi sonra ateşe verdin ortalığı. Herkes payını aldı o yangından. Şimdi herkes içinde tüten ateşi söndürme çabasında.
                        -Doktora dahi götüremedik.
                        Senin elinde büyümüştüm, oğlunla beraber. Titiz ellerle büyütülmüş iki çocuk… Şimdi yasta içleri buruk. Sesin kulaklarında. Sesin ve sazın ki hatırımızdaki ilk türkü.
                        -Başınız sağ olsun.
                        Hücum eder insanlar. Sanki yüz yıllık kıtlıktan çıkmış gibi. Tek derdi karnının tokluğu olan aç insanlar… Onlara uşaklık eden yangın yürekler… Kavrulmaya fırsatı bile olmayan yürekler…
                        -Helvadan biraz daha alabilir miyim?
                        Söndürmeye gücümüz yetmedi ve her yerimize sıçradı yangın. Herkes keşkeleriyle kalakaldı, keşkelerini paylaşmadı. Anılar paylaştıkça acıttı. Hatırladıkça yaktı.
                        -Seni ne çok severdi!",
            "category_id" => 3,
            "author_id" => 2,
            "image" => asset('uploads/blogs/image10.png'),
        ]);

        Blog::create([
            "title" => "Koyu Yeşil",
            "content" => "Bundan sonra olacakları seziyorum. Güneş iyiden iyiye harını düşürüyor. Gece olunca gözlerimi açacağım.
                        İçimle dışım arasında bir yerde sıkışıp kaldım.

                        Yavaşça sırtımın ince derisini kaşıyor. “Canım bu gece yanında olacağım.” dedi sakin sesiyle ve pencereyi açmak için yanımdan kalktı.  Geceden sabaha kırpmadığım, kapansınlar diye zorladığım gözlerimin aksine o, gözleri kapanmasın diye uğraşacak yine. Pencereyi yukarı doğru kaldıramadı. Komedinde duran küçük turuncu karton kutuyu alıp pencereyle pervaz arasına sıkıştırdı. Bilmediği benim de o kutuda olduğum gerçeğiydi. Bu oda benim gözlerimden bakınca bir kutuya benziyor. Kutunun turuncu olduğunu gördüğümde, bir zaman turuncu ışınlar saçtığımı, insanları olduğu kör kuyularından çekip çıkaracak denli canlı, capcanlı olduğumu hatırlıyorum. Bu kutuya girerken yanıma ne almalıyım diye düşünmüştüm. Bir kalem muhakkak olmalıydı. Acıklı mektuplar yazıp yattığım yerden dünyaya elem akıtabilirdim.",
            "category_id" => 4,
            "author_id" => 2,
            "image" => asset('uploads/blogs/image11.png'),
        ]);

        Blog::create([
            "title" => "YAŞAM YOLU",
            "content" => "'AN' yaşamın en küçük taneciği, yapı taşıdır şeması zihnimde dolaşır durur. Sabah kalkarım aklıma gelir, markette bir an ya da ansızın yürürken… Enerjinin hızla kütleye dönüşüp maddenin parçacıklarını oluşturması gibi an’ların bal peteği örüntüsüne benzer biçimde bir araya gelmesiyle yaşam yolumu oluşturmasını gözümde canlandırırım. Geçmişteki her An’ımın izlerinin gölgesinde, geleceğimi şekillendirecek An’larımı  özenle seçtiğimi kurgular, hayallere dalarım. Yaşam yolumun yapı taşı her bir “AN” bütün olan varlığıma hizmet eder diye ikna olur, iyi hissederim.

                        Her duygu öyle değerli hazine ki her birini kazıyarak içinden bir ben çıkarmaya çalıştığımı fark ederim. Bugünlerde yoğunlukla bunu düşünürüm. Zamanı uzatmak, kısaltmak; zamanı esnetmek hakkımı kullanmak isterim.

                        Bir döngü var ki dengede, bilirim.",
            "category_id" => 4,
            "author_id" => 2,
            "image" => asset('uploads/blogs/image12.png'),
        ]);

    }
}
