# note
Kocaeli university open source lab yii2 sample module

Proje A��klamalar�

1.Projemde olu�turdu�um mod�l�m�n ad� note'tur. Google keep uygulamas�na benzer bir not alma uygulamas�d�r. Basit bir aray�z� vard�r. Bu aray�z ile not olu�turabilece�iniz  tablo sayfas�na gelebilirsiniz.Burada;
-notlar� g�ncelleyebilir
-silebilir
-yeni not ekleyebilir 
-daha �nce ekledi�iniz bir notu aratabilirsiniz.

2.Mod�l�m�n ili�kili oldu�u ba�ka mod�l yoktur.
3.Giri�lerinde herhangi bir izin gerekmemektedir.
4.Mod�l�m�n aray�z� bulunan index sayfas�na ula�mak i�in;
" http://portal.kouosl/note " adresine girebilirsiniz.
Buradan da not olu�tur butonuna t�klayarak not olu�turma sayfas�na y�nlendirileceksiniz.

Veri taban� tablolar�

Mod�l�mde migration i�erisinde toplamda iki tane tablo bulunmaktad�r. Bu tablolardan Note adl� tabloda;
-al�nacak notun id'si
-ad� 
-a��klamas�
-olu�turma ve g�ncelleme tarihleri yer almaktad�r.

NoteTable adl� tabloda ise notlar�n;
- id'si ve note ad�nda iki s�tun bulunmaktad�r. Ve bu iki tabloda bulunan �d'ler birbirlerine foreign key ile ba�lan�p ili�kilendirme yap�lm��t�r.

Proje Kurulumu 

Portal dizini i�erisindeki composer.js dosyas�n� a�t�ktan sonra "repositories" k�sm�na:

"type": "vcs",
"url": "https://github.com/bengusoyakli/note.git"
sat�rlar�n�, "require" k�sm�na ise:

"kouosl/note":"dev-master"
sat�r�n� ekleyiniz.

Daha sonra portal/backend/config/main.php ve portal/frontend/config/main.php dosyalar�nda "modules" k�s�mlar�na:

'note' => ['class' => 'kouosl\note\Module',],
sat�r�n� ekleyiniz.

Migration'�n bulundu�u note alma sayfas�na eri�mek i�in ise ;
"http://portal.kouosl/admin/note/note" adresine girebilirsiniz.

