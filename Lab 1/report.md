# Отчет по лабораторной работе №1: Основы HTTP

## Задание №1: Анализ HTTP-запросов

### 1. Вход с неверными данными

### при вводе неверных данных сервер ответил

Request URL:
http://sandbox.usm.md/login/process.php
Request Method:
POST
Status Code:
401 Unauthorized
Remote Address:
193.226.64.170:80
Referrer Policy:
strict-origin-when-cross-origin

Какой метод HTTP был использован для отправки запроса?
был отправлен метод Post

Какие заголовки были отправлены в запросе?
accept:
_/_
(Клиент готов принять любой тип содержимого от сервера.)

accept-encoding:
gzip, deflate
(Указывает, что клиент поддерживает сжатые ответы с использованием методов gzip или deflate.)

accept-language:
en-US,en;q=0.9,ru;q=0.8
(Предпочтительные языки ответа: американский английский и русский.)

connection:
keep-alive
(Соединение должно оставаться открытым для возможных последующих запросов.)

content-length:
42
(Длина содержимого тела запроса в байтах, равная сумме длины параметров username и password.)

content-type:
application/x-www-form-urlencoded; charset=UTF-8
(Тип содержимого: данные формы в URL-кодировке.)

host:
sandbox.usm.md
(Имя хоста, к которому отправлен запрос.)

origin:
http://sandbox.usm.md
(Источник запроса.)

referer:
http://sandbox.usm.md/login/
(Ссылка на страницу, с которой был инициирован запрос.)

user-agent:
Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36
(Информация о клиенте: браузер и операционная система, с которой был отправлен запрос.)

x-requested-with:
XMLHttpRequest
(Указывает, что запрос был отправлен с использованием AJAX.)

### Какие параметры были отправлены в запросе?

username: admin1212
password: password121212

### Какой код состояния был возвращен сервером?

Status Code:
401 Unauthorized

### Какие заголовки были отправлены в ответе?

### Response Headers (Заголовки ответа):

connection: keep-alive
content-type: text/plain;charset=UTF-8
date: Wed, 09 Oct 2024 09:45:56 GMT
server: nginx/1.24.0 (Ubuntu)
transfer-encoding: chunked

### Повторите шаги 3-5, введя верные данные для входа (username: admin, password: password).

Request URL:
http://sandbox.usm.md/login/process.php
Request Method:
POST
Status Code:
200 OK
Remote Address:
193.226.64.170:80
Referrer Policy:
strict-origin-when-cross-origin
connection:
keep-alive
content-type:
text/plain;charset=UTF-8
date:
Wed, 09 Oct 2024 09:56:48 GMT
server:
nginx/1.24.0 (Ubuntu)
transfer-encoding:
chunked
accept:
_/_
accept-encoding:
gzip, deflate
accept-language:
en-US,en;q=0.9,ru;q=0.8
connection:
keep-alive
content-length:
32
content-type:
application/x-www-form-urlencoded; charset=UTF-8
host:
sandbox.usm.md
origin:
http://sandbox.usm.md
referer:
http://sandbox.usm.md/login/
user-agent:
Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36
x-requested-with:
XMLHttpRequest

Form Data :
username: admin
password: password

### Задание №2. Составление HTTP-запросов

Составьте GET-запрос к серверу по адресу http://sandbox.com, указав в заголовке User-Agent ваше имя и фамилию.
полсе отправки get запроса с Kye : User Agent и Value : Craciun Dan серверет ответил Status: 200 OK, Date: Wed, 09 Oct 2024 10:27:10 GMT
Content-Type: text/html
Transfer-Encoding: chunked
Connection: keep-alive
Last-Modified: Fri, 05 Jan 2024 09:22:02 GMT
cf-cache-status: DYNAMIC
Report-To:
{"endpoints":[{"url":"https:\/\/a.nel.cloudflare.com\/report\/v4?s=PDo02sJv45WK7sgy9bJHFhNGrJj48FfkzPhTH"}],"success_fraction":0,"report_to":"cf-nel","max_age":604800}
NEL:
{"success_fraction":0,"report_to":"cf-nel","max_age":604800}
Speculation-Rules:
"/cdn-cgi/speculation"
Server: cloudflare
CF-RAY: 8cfdad346ddc5b1f-VIE
Content-Encoding: br

### Составьте POST-запрос к серверу по адресу http://sandbox.com/cars

полсе отправки запроса raw
{
"make": "Toyota",
"model": "Corolla",
"year": "2020"
}

или же через x-www-form-urlencoded:

Key: make, Value: Toyota
Key: model, Value: Corolla
Key: year, Value: 2020

сервер вернул 404Not Found

### Составьте PUT-запрос к серверу

{
"make": "Toyota",
"model": "Corolla",
"year": 2021
}

404 Not Found

### Напишите один из возможных вариантов ответа сервера

HTTP/1.1 201 Created
Content-Type: application/json
Date: Wed, 09 Oct 2024 10:35:00 GMT
Server: nginx/1.24.0

{
"message": "Car successfully created",
"car": {
"id": 1,
"make": "Toyota",
"model": "Corolla",
"year": "2020"
}
}

200 OK
Это код успешного запроса. Может быть возвращён, когда сервер успешно обработал запрос, и, например, отправил данные о существующем ресурсе (например, список машин).
Пример ситуации: Вы отправляете GET-запрос на получение информации об автомобиле, и сервер возвращает подробности этого автомобиля.

201 Created
Этот код возвращается, когда запрос на создание ресурса (например, добавление новой машины) был успешно выполнен, и новый ресурс был создан.
Пример ситуации: Вы отправили POST-запрос для создания нового автомобиля, и сервер подтвердил, что автомобиль успешно добавлен в базу данных.

400 Bad Request
Этот код означает, что сервер не может обработать запрос из-за ошибки со стороны клиента, например, неправильный формат данных.
Пример ситуации: Вы отправили POST-запрос, но забыли указать один из обязательных параметров (например, не указали год автомобиля).

401 Unauthorized
Этот код возвращается, если для выполнения запроса требуется авторизация, но клиент не предоставил корректные учётные данные.
Пример ситуации: Вы пытаетесь получить доступ к ресурсам, но не прошли аутентификацию или ввели неверные логин и пароль.

403 Forbidden
Этот код означает, что сервер понял запрос, но отказывается его выполнять. Это может происходить, если у клиента недостаточно прав для выполнения действия.
Пример ситуации: Вы пытаетесь удалить автомобиль, но у вас нет прав администратора для выполнения этого действия.

404 Not Found
Этот код возвращается, если запрашиваемый ресурс не найден на сервере.
Пример ситуации: Вы отправляете запрос на получение информации об автомобиле с несуществующим id, и сервер возвращает ответ, что данный автомобиль не найден.

500 Internal Server Error
Этот код возвращается, если на сервере произошла внутренняя ошибка во время обработки запроса. Это может быть связано с неправильной конфигурацией сервера или сбоями в программе.
Пример ситуации: Сервер испытывает проблемы с базой данных или другим внутренним компонентом, когда вы отправляете запрос на обновление данных об автомобиле.

### Задание №3. Дополнительное задание. HTTP_Quest

## Отправьте POST-запрос на сервер по адресу http://sandbox.usm.md/quest, указав в заголовке User-Agent вашу фамилию и имя (Например User-Agent: John Doe).

/home/devrdn/www/quest/progress/\***\*\*\*\*\*** HEADERS RECEIVED \***\*\*\*\*\***
Content-Length: 66
Connection: keep-alive
Accept-Encoding: gzip, deflate, br
Host: sandbox.usm.md
Postman-Token: 091a1676-98ee-4645-8e2d-db86e0416e18
Accept: _/_
Content-Type: text/plain
User-Agent: Craciun Dan

---

\***\*\*\*\*\*** RESPONSE HEADERS \***\*\*\*\*\***
Content-Type: text/plain; charset=UTF-8

---

1. Excellent, you have created an Agent. Here is your unique ID: 192863. Now, to verify your identity, send a POST request to http://sandbox.usm.md/quest/login with the Authorization header containing the token: ChMMNwEQLEU3FSc=. Make sure to remember both your ID and token!
2. id: 192863
3. token: ChMMNwEQLEU3FSc=
4. instruction: Send a POST request to http://sandbox.usm.md/quest/login with Authorization: Bearer ChMMNwEQLEU3FSc=

### 2 шаг

/home/devrdn/www/quest/progress/\***\*\*\*\*\*** HEADERS RECEIVED \***\*\*\*\*\***
Content-Length: 66
Connection: keep-alive
Accept-Encoding: gzip, deflate, br
Host: sandbox.usm.md
Postman-Token: 4f395d34-21fc-4fb8-bc3e-9a8ddc84c448
Accept: _/_
Content-Type: text/plain
Authorization: Bearer ChMMNwEQLEU3FSc=
User-Agent: Craciun Dan

---

\***\*\*\*\*\*** RESPONSE HEADERS \***\*\*\*\*\***
Content-Type: text/plain; charset=UTF-8

---

1. Excellent, you have created an Agent. Here is your unique ID: 445894. Now, to verify your identity, send a POST request to http://sandbox.usm.md/quest/login with the Authorization header containing the token: ChMMNwEQLEU3FSc=. Make sure to remember both your ID and token!
2. id: 445894
3. token: ChMMNwEQLEU3FSc=
4. instruction: Send a POST request to http://sandbox.usm.md/quest/login with Authorization: Bearer ChMMNwEQLEU3FSc= \***\*\*\*\*\*** HEADERS RECEIVED \***\*\*\*\*\***
   Content-Length: 66
   Connection: keep-alive
   Accept-Encoding: gzip, deflate, br
   Host: sandbox.usm.md
   Postman-Token: 4f395d34-21fc-4fb8-bc3e-9a8ddc84c448
   Accept: _/_
   Content-Type: text/plain
   Authorization: Bearer ChMMNwEQLEU3FSc=
   User-Agent: Craciun Dan

---

\***\*\*\*\*\*** RESPONSE HEADERS \***\*\*\*\*\***
Content-Type: text/plain; charset=UTF-8

---

1. Step 2 completed! Now, send a PUT request to http://sandbox.usm.md/quest/age with the request body age=<your age> and with the Authorization header with the token you received in the previous step.
2. next_step: Send a PUT request to http://sandbox.usm.md/quest/age with age=<your age> in the request body

### шаг 3

/home/devrdn/www/quest/progress/\***\*\*\*\*\*** HEADERS RECEIVED \***\*\*\*\*\***
Content-Length: 42
Connection: keep-alive
Accept-Encoding: gzip, deflate, br
Host: sandbox.usm.md
Postman-Token: 97be1d48-86d3-4341-bb79-0a41d3665155
Accept: _/_
Content-Type: application/x-www-form-urlencoded
Authorization: Bearer ChMMNwEQLEU3FSc=
User-Agent: Craciun Dan

---

\***\*\*\*\*\*** RESPONSE HEADERS \***\*\*\*\*\***
Content-Type: text/plain; charset=UTF-8

---

1. Excellent, you have created an Agent. Here is your unique ID: 580123. Now, to verify your identity, send a POST request to http://sandbox.usm.md/quest/login with the Authorization header containing the token: ChMMNwEQLEU3FSc=. Make sure to remember both your ID and token!
2. id: 580123
3. token: ChMMNwEQLEU3FSc=
4. instruction: Send a POST request to http://sandbox.usm.md/quest/login with Authorization: Bearer ChMMNwEQLEU3FSc=
