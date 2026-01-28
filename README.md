Postman POST Request Practice (PHP + MySQL)
Учебный проект для практики отправки HTTP-запросов методом POST с использованием Postman и проверки серверной обработки данных на PHP с последующей записью в базу данных MySQL.
Описание проекта: проект представляет собой простую клиент-серверную реализацию
Подготовительный процесс: установка Laragon и настройка в нем phpmyadmin.

1) Написала простейшую страницу с формой,  отправляющей данные методом POST.

<img width="651" height="97" alt="изображение" src="https://github.com/user-attachments/assets/3b0d955a-791a-4cd7-9467-c543a029aaf0" />

2) Создала БД testing_base и таблицу testing с полями name и password.

<img width="1631" height="799" alt="изображение" src="https://github.com/user-attachments/assets/74658925-12c2-46b8-bb6a-23a25194d25b" />

3) Написала файл db.php где подключила БД и файл save_user где отправила данные с формы и выводом сообщения с успешной или неудачной отправкой данных в БД.
 
4) Проверила отпраку дынных и написала в форму тестовые данные:

<img width="663" height="76" alt="изображение" src="https://github.com/user-attachments/assets/aa07cac6-98bc-4e47-ac30-b55f61c9f0cb" />

5) Нажала отправить -> получила сообщение на странице
   <img width="1384" height="61" alt="изображение" src="https://github.com/user-attachments/assets/06d5d3d8-e110-450d-aae8-79d829a0582a" />
   
   и данные в бд
   
   <img width="562" height="58" alt="изображение" src="https://github.com/user-attachments/assets/0104380a-397a-4718-970b-58a598df5ac0" />

Окей! Теперь можно отправлять запросы на страницу с помощью Postman
1) Открываем Postman и создаем новый запрос - > выбирае метод POST и прописываем параметры

<img width="1416" height="498" alt="изображение" src="https://github.com/user-attachments/assets/5bef50a0-53b9-4dee-9ff6-919a3d610be0" />

2) Нажимаем Send и смотрим какой ответ мы получим

<img width="1030" height="700" alt="изображение" src="https://github.com/user-attachments/assets/e5bd6c28-ad9b-4d22-8dbc-83f585a9c85b" />

Ура! Все работает.

4) Проверяем БД <img width="581" height="93" alt="изображение" src="https://github.com/user-attachments/assets/c2376f9e-bef6-4be7-bbdc-910739d25136" />


 P.S.: Тестировать форму, конечно бессмесленно т.к. не были прописаны валидные условия, но это несомненно помогло мне понять базовые принципы клиент-серверного взаимодействия.







