# **JQUERY Event Methods**

### 1. **.click()**

- **Açıklama:** Bir öğeye tıklama olayı ekler. Kullanıcı, belirtilen öğeye tıkladığında bir işlev çalıştırılır.
- **Kullanım:**

```javascript
$("#element").click(function () {
  alert("Element tıklandı!");
});
```

- **Kullanım Alanı:** Butonlar, bağlantılar veya başka herhangi bir öğe üzerinde tıklama işlemi yapılmak istendiğinde kullanılır.

### 2. **.dblclick()**

- **Açıklama:** Bir öğeye çift tıklama olayı ekler. Kullanıcı öğeye iki kez hızlıca tıkladığında tetiklenir.
- **Kullanım:**

```javascript
$("#element").dblclick(function () {
  alert("Element çift tıklandı!");
});
```

- **Kullanım Alanı:** Metin seçme, öğe üzerinde özel işlem yapma gibi durumlarda kullanılır.

### 3. **.hover()**

- **Açıklama:** Mouse, öğenin üzerine geldiğinde ve ayrıldığında tetiklenen iki işlevi bir arada kullanır.
- **Kullanım:**

```javascript
$("#element").hover(
  function () {
    $(this).css("color", "red");
  },
  function () {
    $(this).css("color", "black");
  }
);
```

- **Kullanım Alanı:** Menülerin, butonların veya etkileşimli öğelerin üzerine gelindiğinde görsel değişiklikler yapmak için kullanılır.

### 4. **.change()**

- **Açıklama:** Form öğesinin değeri değiştiğinde tetiklenir (örneğin, bir input alanında veya select listesinde).
- **Kullanım:**

```javascript
$("input").change(function () {
  alert("Değer değişti!");
});
```

- **Kullanım Alanı:** Form elemanlarının (input, select, textarea vb.) değerlerinin değişmesini izlemek için kullanılır.

### 5. **.focus()**

- **Açıklama:** Bir öğeye (genellikle input alanlarına) odaklandığında tetiklenir.
- **Kullanım:**

```javascript
$("#inputElement").focus(function () {
  $(this).css("border", "2px solid blue");
});
```

- **Kullanım Alanı:** Kullanıcı bir input alanına odaklandığında, görsel olarak değişiklikler yapmak için kullanılır.

### 6. **.blur()**

- **Açıklama:** Bir öğeden (genellikle input alanlarından) odak kaybolduğunda tetiklenir.
- **Kullanım:**

```javascript
$("#inputElement").blur(function () {
  $(this).css("border", "1px solid gray");
});
```

- **Kullanım Alanı:** Kullanıcı bir input alanından ayrıldığında, görsel değişiklikler veya form doğrulama yapmak için kullanılır.

### 7. **.submit()**

- **Açıklama:** Bir form gönderildiğinde çalışır.
- **Kullanım:**

```javascript
$("form").submit(function (event) {
  alert("Form gönderildi!");
  event.preventDefault(); // Formun gönderilmesini engelleme
});
```

- **İşlevi:** Form gönderildiğinde tetiklenir. Genellikle form gönderilmeden önce doğrulama yapmak için kullanılır.
