<? require_once 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ListBook</title>
	<link rel="stylesheet" href="/assets/css/main.css">
</head>

<body>
	<main>
      <div>
        <?
          try {
            $distinctYears = getDistinctYears($pdo);

            
            foreach ($distinctYears as $year) {
              echo '<div class="unit">';
              echo '<h2>' . $year . '</h2>';

              $books = getBooksByYears($pdo, $year);

              echo '<ol>';
              foreach ($books as $book) {
                echo '<li>' . $book['author'] . ' - ' . $book['title'] . '</li>';
              }
              echo '</ol>';
              echo '</div>';
            }
            
            
          } catch (Exception $err) {
            die("Ошибка: " . $err->getMessage());
          }
        ?>
      </div>


      <!-- <div class="test">
        <h2>2017</h2>
        <ol>
          <li class="name-book1 name-book">Иван Сергеевич Тургенев - Отцы и Дети</li>
          <li class="name-book2 name-book">Иван Александрович Гончаров - Обломов</li>
          <li class="name-book3 name-book">Николай Александрович Некрасов - Кому на Руси жить хорошо</li>
          <li class="name-book4 name-book">Михаил Юрьевич Лермантов - Герой нашего времени</li>
          <li class="name-book5 name-book">Александр Николаевич Островский Гроза</li>
          <li class="name-book6 name-book">Лев Николаевич Толстой - Война и мир</li>
          <li class="name-book7 name-book">Михаил Евграфович Салтыков - Щедрин - История одного города</li>
          <li class="name-book8 name-book">Фёдор Михайлович Достоевский - Преступление и наказание</li>
          <li class="name-book9 name-book">Николай Васильевич Гоголь - Мертвые души</li>
          <li class="name-book10 name-book">Николай Семенович Лесков - Очарованный странник</li>
          <li class="name-book11 name-book">Николай Семенович Лесков - Леди мценского уезда</li>
          <li class="name-book12 name-book">Антон Павлович Чехов - Вишневый сад</li>
          <li class="name-book13 name-book">Антон Павлович Чехов - Палата №6</li>
          <li class="name-book14 name-book">Антон Павлович Чехов - Попрыгунья</li>
          <li class="name-book15 name-book">Михаил Афанасьевич Булгаков - Собачье сердце</li>
          <li class="name-book16 name-book">Михаил Афанасьевич Булгаков - Мастер и Маргарита</li>
          <li class="name-book17 name-book">Михаил Афанасьевич Булгаков - Белая гвардия</li>
          <li class="name-book18 name-book">Иван Алексеевич Бунин - Господин из Сан - Франциско</li>
          <li class="name-book19 name-book">Иван Алексеевич Бунин - Чистый понедельник</li>
          <li class="name-book20 name-book">Александр Иванович Куприн - Олеся</li>
          <li class="name-book21 name-book">Александр Иванович Куприн - Гранатовый браслет</li>
          <li class="name-book22 name-book">Александр Иванович Куприн - Чудесный доктор</li>
          <li class="name-book23 name-book">Максим Горький - Старуха Изергиль</li>
          <li class="name-book24 name-book">Максим Горький - На дне</li>
          <li class="name-book25 name-book">Максим Горький - Детство</li>
          <li class="name-book26 name-book">Максим Горький - Челкаш</li>
          <li class="name-book27 name-book">Алексей Николаевич Толстой - Гадюка</li>
          <li class="name-book28 name-book">Александр Александрович Фадеев - Разгром</li>
          <li class="name-book29 name-book">Андрей Платонович Платонов - Котлован</li>
          <li class="name-book30 name-book">Евгений Иванович Замятин - Мы</li>
          <li class="name-book31 name-book">Михаил Александрович Шолохов - Судьба человека</li>
          <li class="name-book32 name-book">Михаил Александрович Шолохов - Тихий Дон</li>
          <li class="name-book33 name-book">Александр Исаевич Солженицин - Один день Ивана Денисовича</li>
          <li class="name-book34 name-book">Борис Андреевич Лавренев - 41-й</li>
          <li class="name-book35 name-book">Валентин Григорьеви Распутин - Живи и помни</li>
          <li class="name-book36 name-book">Валентин Григорьеви Распутин - Уроки французского</li>
          <li class="name-book37 name-book">Валентин Григорьеви Распутин - Прощание с матёрой</li>
          <li class="name-book38 name-book">Леонид Николаевич Андреев - Кусака</li>
          <li class="name-book39 name-book">Гавриил Николаевич Троепольский - Белый Бим, черное ухо</li>
          <li class="name-book40 name-book">Юрий Бондарев - Горячий снег</li>
          <li class="name-book41 name-book">Василий Иванович Белов - Всё впереди</li>
          <li class="name-book42 name-book">Александр Сергеевич Пушкин - Моцарт и Сальери</li>
          <li class="name-book43 name-book">Владимир Галактионович Короленко - Слепой мущыкант</li>
          <li class="name-book44 name-book">Александ Беляев - Голова профессора Доуэля</li>
          <li class="name-book45 name-book">Александ Беляев - Властелин мира</li>
          <li class="name-book46 name-book">Эдвард деБонго - Научи себя думать</li>
          <li class="name-book47 name-book">Дэвид Митчел - Облачный атлас</li>
          <li class="name-book48 name-book">Джером Дэвид Сэлинджер - Над пропастью во ржи</li>
          <li class="name-book49 name-book">Мак Роберт Стюарт - Думай</li>
          <li class="name-book50 name-book">Роберт Кийосаки - Бизнес 21ого века</li>
          <li class="name-book51 name-book">Роберт Кийосаки - Богатый папа, бедный папа</li>
          <li class="name-book52 name-book">Роберт Кийосаки - Школа бизнеса</li>
          <li class="name-book53 name-book">Роберт Кийосаки - Руководство по инвестированию</li>
          <li class="name-book54 name-book">Карлос Кастанеда - Ученье Дона Хуана</li>
          <li class="name-book55 name-book">Гэвин Кеннеди - Договориться можно обо всем</li>
          <li class="name-book56 name-book">Роберт Чалдини - Психология влияния</li>
          <li class="name-book57 name-book">Уильям Шекспир - Ромео и Джульетта</li>
          <li class="name-book58 name-book">Уильям Шекспир - Гамлет</li>
          <li class="name-book59 name-book">Джеймс Борг - Сила убеждения</li>
          <li class="name-book60 name-book">Алекс Новак - Книга, которой нет</li>
          <li class="name-book61 name-book">Данте Алигьери - Божественная комедия</li>
          <li class="name-book62 name-book">Александр Грин - Алые паруа</li>
          <li class="name-book63 name-book">Уильям Шекспир - Много шума из ничего</li>
          <li class="name-book64 name-book">Уильям Шекспир - Мера за меру</li>
          <li class="name-book65 name-book">Уильям Шекспир - Сон в летнюю ночь</li>
          <li class="name-book66 name-book">Эрик Бертран Ларсен - На пределе</li>
          <li class="name-book67 name-book">Наполеон Хилл - Думай и богатей</li>
          <li class="name-book68 name-book">Уильям Шекспир - Укрощение строптивой</li>
          <li class="name-book69 name-book">Уолтер Айзексон - Эйнштейн. Его жизнь и его вселенная</li>
          <li class="name-book70 name-book">Кен Кизи - Пролетая над гнездом кукушки</li>
          <li class="name-book71 name-book">Станислав Лем - Непобедимый</li>
          <li class="name-book72 name-book">Джек Лондон - Любовь к жизни</li>
          <li class="name-book73 name-book">Дейл Карнеги - Как завоевывать друзей и оказывать влияние на людей</li>
          <li class="name-book74 name-book">Гийом Мюссо - Завтра</li>
          <li class="name-book75 name-book">Зигмунд Фрейд - Толкование сновидений</li>
          <li class="name-book76 name-book">Рэй Брэдбери - 451<sup style="line-height: 0.5;">o</sup> по фаренгейту</li>
          <li class="name-book77 name-book">Марк Пиллигрим - Погружение в HTML5</li>
          <li class="name-book78 name-book">Дэвид Макфарланд - Большая книга CSS</li>
        </ol>
      </div>

      <div class="test">
        <h2>2018</h2>
        <ol>
          <li class="name-book1 name-book">Александр Беляев - Последний человек из Атлантиды</li>
          <li class="name-book2 name-book">Александр Беляев - Продавец воздуха</li>
          <li class="name-book3 name-book">Александр Беляев - Человек, потерявший лицо</li>
          <li class="name-book4 name-book">Александр Беляев - Человек - амфибия</li>
          <li class="name-book5 name-book">Александр Беляев - Прыжок в ничто</li>
          <li class="name-book6 name-book">Рэй Брэдбери - Лекарство от меланхолии</li>
          <li class="name-book7 name-book">Виктория Михайловна Рошаль - Энциклопедия символов</li>
          <li class="name-book8 name-book">Жак Фреско - Всё лучшее, что не купишь за деньги</li>
          <li class="name-book9 name-book">Уильям Шекспир - Двенадцатая ночь</li>
          <li class="name-book10 name-book">Пётр Кропоткин - Записки революционера</li>
          <li class="name-book11 name-book">Джордж Клейсон - Самый богатый человек в Вавилоне</li>
          <li class="name-book12 name-book">Льюис Кэрролл - Алиса в стране чудес</li>
          <li class="name-book13 name-book">М. Дж. Райан - В этом году я...</li>
        </ol>
      </div>

      <div class="test">
        <h2>2019</h2>
        <ol>
          <li class="name-book1 name-book">Робин Никсон - Создаем динамические Web - сайты</li>
          <li class="name-book2 name-book">Педро Домингос - Верховный алгоритм</li>
        </ol>
      </div>

      <div class="test">
        <h2>2020</h2>
        <ol>
          <li class="name-book1 name-book">Джек Лондон - Мартин Иден</li>
          <li class="name-book2 name-book">Дэвид Макфарланд - Новая большая книга CSS (Новое издание) </li>
          <li class="name-book2 name-book">Олдос Хаксли - О дивный новый мир</li>
          <li class="name-book2 name-book">Олдос Хаксли - Остров</li>
          <li class="name-book2 name-book">Э. Л. Джеймс - 50 оттенков серого</li>
          <li class="name-book2 name-book">Кира Стрельникова - Служанка двух господ</li>
        </ol>
      </div>

      <div class="test">
        <h2>2021</h2>
        <ol>
          <li class="name-book">Габриэль Гарсиа Маркес - Сто лет одиночества</li>
        </ol>
      </div>
      
      <div class="test">
        <h2>2022</h2>
        <ol>
          <li class="name-book">Александр Солженицын - Архипелаг Гулаг</li>
        </ol>
      </div>

      <div class="test">
        <h2>2023</h2>
        <ol>
          <li class="name-book">Адитья Бхаргава - Грокаем Алгоритмы</li>
          <li class="name-book">Франц Кафка - Замок</li>
        </ol>
      </div> -->

			<aside class="aside">
			<h2>Книги, которые я хочу прочитать:</h2>
			<ol class="aside-list">
				<!-- <li class="aside-list__item">Дэвид Макфарланд - Новая большая книга CSS
					<div class="status-book">
						<div class="status-book__item status-book__item--read">Читаю сейчас</div>
						<div class="status-book__item status-book__item--next">Следующая</div>
						<div class="status-book__item status-book__item--wait">На очереди</div>
					</div>
				</li> -->
				<li class="aside-list__item">Эрик Мейер - CSS. Каскадные таблицы стилей</li>
				<li class="aside-list__item">Дэвид Флэнеган - Полное руководство JS</li>
				<li class="aside-list__item">Ник Морган - Java Script для детей. Самоучитель по программированию</li>
				<li class="aside-list__item">С. Рассел, П. Норвиг «Искусственный интеллект — Современный подход»</li>
				<li class="aside-list__item">Гарольд Абельсон, Джеральд Джей Сассман</li>
				<li class="aside-list__item">Род Хаггарти - Дискретная математика для программистов</li>
				<li class="aside-list__item">Стив Макконнелл - Совершенный код</li>
				<li class="aside-list__item">Кент Бек - Экстремальное программирование, разработка через тестирование</li>
				<li class="aside-list__item">Александр Солженицын - Архипелаг Гулаг</li>
				<li class="aside-list__item">Томас Кормен - Введение в алгоритмы</li>
				<li class="aside-list__item">Джон Морри, Дэвид Кэри - Король</li>
				<li class="aside-list__item">Манфред Кетс де Врис - Мистика лидерства</li>
				<li class="aside-list__item">Майкл Гладуэл - Гении и аутсайдеры</li>
				<li class="aside-list__item">Тимоти Феррис - 4х часовая рабочая неделя</li>
				<li class="aside-list__item">Альфред Коржибский - Общая семантика</li>
				<li class="aside-list__item">Тимоти Лири - Технологии изменения сознания в деструктивных культах</li>
				<li class="aside-list__item">Станислав Мюллер - Разблокируй свой ум</li>
				<li class="aside-list__item">Питер Линч - Борясь с течением</li>
				<li class="aside-list__item">Зигмунд Фрейд - Недовольство культурой</li>
				<li class="aside-list__item">Стоян Стефанов - Паттерны JS</li>
				<li class="aside-list__item">Сонмез Джон - Путь программиста</li>
				<li class="aside-list__item">Эрик Рис - Бизнес с нуля</li>
				<li class="aside-list__item">Джеймс Клир - Атомные привычки</li>
			</ol>
		</aside>

	</main>



	<script src="src/js/main.js"></script>
</body>

</html>