# note
Kocaeli university open source lab yii2 sample module
Proje Açýklamalarý

1.Projemde oluþturduðum modülümün adý note'tur. Google keep uygulamasýna benzer bir not alma uygulamasýdýr. Basit bir arayüzü vardýr. Bu arayüz ile not oluþturabileceðiniz  tablo sayfasýna gelebilirsiniz.Burada;
-notlarý güncelleyebilir
-silebilir
-yeni not ekleyebilir 
-daha önce eklediðiniz bir notu aratabilirsiniz.

2.Modülümün iliþkili olduðu baþka modül yoktur.
3.Giriþlerinde herhangi bir izin gerekmemektedir.
4.Modülümün arayüzü bulunan index sayfasýna ulaþmak için;
" http://portal.kouosl/note " adresine girebilirsiniz.
 Buradan da not oluþtur butonuna týklayarak not oluþturma sayfasýna yönlendirileceksiniz.

5.Modülümde migration içerisinde toplamda iki tane tablo bulunmaktadýr. Bu tablolardan Note adlý tabloda;
-alýnacak notun id'si
-adý 
-açýklamasý
-oluþturma ve güncelleme tarihleri yer almaktadýr.

6.NoteTable adlý tabloda ise notlarýn;
- id'si ve note adýnda iki sütun bulunmaktadýr. Ve bu iki tabloda bulunan Ýd'ler birbirlerine foreign key ile baðlanýp iliþkilendirme yapýlmýþtýr.

7.Migration'ýn bulunduðu note alma sayfasýna eriþmek için;
"http://portal.kouosl/admin/note/note" adresine girebilirsiniz.

