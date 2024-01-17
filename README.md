# Sport Events - en

## Description
Sport Events is an application based on Laravel Backpack that provides a convenient way to browse information related to sport events. It is licensed MIT.

## Administrative Panel
The administrative panel of "Sport Events" provides access to the full functionality of the application. The panel allows the editing of the main entities, including adding, deleting, and editing existing records. New users can also be added through the panel.

## Structure
The main entities in the system are sports, organisators, and events. The sports table stores basic information about different sports. The organisators table contains information about the organisators of various events, and the events table stores data about specific events. The sports table is connected to the events table through the pivot table event_sport, using a many-to-many relationship. Similarly, events and organisators are connected through the pivot table event_organisator, again using a many-to-many relationship. Each of the main and pivot tables has a generated migration file, as well as a seed for populating the database with test data to try out the application's functionalities. Appropriate data types have been used to represent the data in a practical way. Emphasis has been placed on data validation, with each main table having a Request class containing the validation logic.

## Features
### Administrative Panel
The administrative panel provides an easy way to interact with the data in the database. It allows for convenient storage of images in the sports table, with a focus on validation. Editing objects from the database in the admin panel is made user-friendly, with appropriately selected data entry fields, including some dropdown menus.

### Public Section
While the administrative panel is accessible only to authenticated users, the public section of the application can be used by absolutely anyone. A simple template has been implemented for user convenience. Through the controllers EventController, SportController, OrganisatorController, functionality has been provided to present the user with the desired data in a simplified manner. The public section has a home page serving as an introduction to Sport Events. The menu contains the following links: Home Page, Events, Organisators, Sports. Each of the navigation links (except Home Page, which redirects to the initial page) leads to the corresponding view, visualizing the records from the database table. The data can be visualized according to the user's requirements - they can be sorted in ascending or descending order based on the upload date. Additionally, data from the events table can be searched using various criteria - event name, start date, end date, names of organisators, types of sports.



# Sport Events - bg

## Описание
Sport Events е приложение, базирано на Laravel Backpack, което предоставя удобен начин за преглеждане на всякаква информация, свързана със спортни събития. Притежава лиценз - MIT.

## Административен Панел
Административният панел на "Sport Events" осигурява достъп до цялата функционалност на приложението. В панела могат да се редактират основните обекти на системата. Има възможност да се прави добавяне, изтриване и редакция на съществуващите записи. Също така могат да се добавят и нови потребители.

## Структура 
Основните обекти в системата са sports, organisators, events. В таблицата sports се съхранява основна информация за различни спортове. В таблицата organisators се съхранява информация за организаторите на различните събития, а в events - даннни за конкретните събития. Таблицата sports е свързана с events чрез междинната таблица event_sport, връзката е много към много. Аналогично events и organisators са свързани чрез междинната таблица event_organisator и отново връзката е много към много. За всяка една от основните и междинните таблици има генериран миграционен файл, както и seed за попълване на базата данни с тестови данни, с които да може да се изпробват функционалностите на приложението. Използвани са подходящи типове, които да представят данните по практичен и удобен начин. Наблегнато е на валидирането, за всеки основен обект в системата има Request клас, който съдържа валидиращата логика. 

## Функционалности
### Административен панел
Административния панел предоставя възможност за много лесно контактуване с данните в базата. Има възможност за удобно съхраняване на снимки в таблицата sport, като се набляга на валидирането. Редактирането на обектите от базата в админ панела е направено разбираемо за потребителя - полетата за попълване на данните са уместно подбрани, като някои от тях са drop-down менюта с цел улесняване на потребителя.
### Публична част
Докато административния панел е достъпен само за аутентикирани потребиели, публичната част на приложението може да бъде използвана от абсолютно всички потребители. Имплементиран е изчистен шаблон, който осигурява удобство. Чрез контролерите EventController, SportController, OrganisatorController е осигурена функционалност, която да представи на потребителя търсените от него данни по удобен и улеснен начин. В публичната част има начална страница, която служи като интродукция към Sport Events. Менюто съдържа следните линкове: Home Page, Events, Organisators, Sports. Всеки един от линковете в навигацията (освен Home Page, който препраща към началната страница) служи за препращане към съответстващ изглед, който визуализира записите от базата на дадената таблица. Данните могат да бъдат визуализирани спрямо изискванията на потребителя - могат да бъдат сортирани във възходящ или низходящ ред спрямо датата на качване. Освен това данните от таблицата events могат да бъдат търсени по различни критерии - име на събитието, начална дата, крайна дата, имена на организаторите, видове спорт.