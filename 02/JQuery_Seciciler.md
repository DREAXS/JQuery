# **JQUERY SYNTAX**

**`$(document).ready()`** jQuery'de, bir sayfanın tamamı (HTML ve DOM) yüklendikten sonra çalışacak olan kodları yazmak için kullanılan bir yöntemdir. Bu, sayfa içeriği yüklenmeden önce JavaScript kodlarının çalışmasını engelleyerek hataları önler.

### Kullanımı:

```javascript
$(document).ready(function() {
// Sayfa tamamen yüklendikten sonra çalışacak kod buraya yazılır. });
```

### Kısa Yazım:

jQuery, bu yapıyı daha kısa bir şekilde de yazabilmenizi sağlar:

```javascript
$(function() {
// Sayfa tamamen yüklendikten sonra çalışacak kod buraya yazılır. });
```

### Ne Zaman Kullanılır?

- Sayfa yüklendikten sonra DOM elemanları üzerinde işlem yapmanız gerektiğinde.
- HTML öğeleri, stil ve görsellerin tamamı yüklendikten sonra, JavaScript ile etkileşimde bulunmak istiyorsanız kullanılır.

### Temel Seçiciler

1.  **Element Seçici:**

- HTML öğelerinin etiket adıyla seçilmesini sağlar.

```javascript
$("div"); // Sayfadaki tüm <div> elemanlarını seçer.
$("p"); // Sayfadaki tüm <p> (paragraf) elemanlarını seçer.
```

2.  **ID Seçici:**

- Sayfadaki bir öğeyi ID’sine göre seçmek için kullanılır. ID, her sayfada benzersiz olmalıdır.

```javascript
$("#myId"); // ID'si "myId" olan öğeyi seçer.
```

3.  **Class Seçici:**

- HTML elemanlarının `class` özelliğine göre seçim yapar. Aynı class'a sahip birden fazla öğeyi seçebilir.

```javascript
$(".myClass"); // class'ı "myClass" olan tüm öğeleri seçer.
```

4.  **Attribute Seçici:**

- Belirli bir HTML öğesinin özelliklerine (attribute) göre seçim yapar.

```javascript
$("[href]"); // "href" özelliğine sahip tüm öğeleri seçer.
$('[type="text"]'); // "type" özelliği "text" olan tüm öğeleri seçer.
```

5.  **Child (Çocuk) Seçici:**

- Belirli bir öğenin altındaki (çocuk) öğeleri seçer.

```javascript
$("ul > li"); // <ul> içindeki doğrudan <li> öğelerini seçer.
```

6.  **Descendant (Soylu) Seçici:**

- Bir öğenin içinde, herhangi bir derinlikteki alt öğeleri seçer.

```javascript
$("div p"); // <div> içindeki tüm <p> öğelerini seçer (çocuk, torun, vb.).
```

7.  **Pseudo-Classes (Psödo-Sınıflar):**

- HTML öğelerinin durumlarına göre seçim yapar (örneğin, ilk öğe, son öğe, tıklanmış öğe vb.).

```javascript
$("li:first"); // İlk <li> öğesini seçer.
$("a:hover"); // Üzerine gelindiğinde (hover) olan <a> öğelerini seçer.
```
