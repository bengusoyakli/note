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

5.Mod�l�mde migration i�erisinde toplamda iki tane tablo bulunmaktad�r. Bu tablolardan Note adl� tabloda;
-al�nacak notun id'si
-ad� 
-a��klamas�
-olu�turma ve g�ncelleme tarihleri yer almaktad�r.

6.NoteTable adl� tabloda ise notlar�n;
- id'si ve note ad�nda iki s�tun bulunmaktad�r. Ve bu iki tabloda bulunan �d'ler birbirlerine foreign key ile ba�lan�p ili�kilendirme yap�lm��t�r.

7.Migration'�n bulundu�u note alma sayfas�na eri�mek i�in;
"http://portal.kouosl/admin/note/note" adresine girebilirsiniz.

