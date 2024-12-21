<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Оффициальный русскоязычный новостной сайт про Лигу Чемпионов УЕФА">
    <meta name="keywords" content="футбол, лига чемпионов, лига чемпионов таблица, лига чемпионов матчи, лч, лига чемпионов 2025, лч 2025,
    расписание лч, обзор лч, матчи лч, финал лч,евро футбол,лига,чемпионат,футбольный турнир,футбольный клуб,чемпионат по футболу,фк,фк Барселона,
    фк Реал Мадрид, титул ,трофей, кубок лч, кубок лиги чемпионов, победитель лч, состав, игроки, команда, футбольная команда, европейский футбол,
    прямой эфир, спорт, прямые трансляции, новости футбола">
    <title>Лига Чемпионов</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="icon" href="<?php echo get_template_directory_uri(). './favicon (1).ico' ?>" type="Image/x-icon">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(). './favicon (1).ico' ?>" type="image/x-icon"> 
</head>
<body>
    <?php get_header(); ?>
    <nav>
        <ul>
            <li><a href="">Прямые трансляции</a></li>
            <li><a href="">Последние новости</a></li>
            <li><a href="">Клубы и составы</a></li>
            <li><a href="">Таблица и плей-офф</a></li>
        </ul>
    </nav>
    <main>
        <div class="articles">
          <section>
            <h4>Расписание 6го тура,который пройдет уже на этой неделе</h4>
            <p>Динамо Загреб-Селтик (10.12.2024 - 20.45) <br>
              Байер-Ливерпуль (10.12.2024 - 20.45)<br>
              Жирона-Интер (10.12.2024 - 23.00)<br>
              Аталанта-Реал Мадрид (10.12.2024 - 23.00)<br>
              Бавария-Шахтер Донецк (10.12.2024 - 23.00)<br>
              Брюгге-Спортинг (10.12.2024 - 23.00)<br>
              Ред Булл-ПСЖ (10.12.2024 - 23.00)<br>
            </p>
            <a href="">Читать далее</a>
          </section>
          <section>
            <h4>Статистика</h4>
            <p>Бомбардиры: <br>
               Р.Левандовский (Барселона) - 7<br>
               Д.Дэвид (Лилль) - 6<br>
                Жуниньо (Карабах) - 6<br>
                В.Дьокереш (Спортинг) - 5<br>&nbsp;<br>
                Ассистенты: <br>
                И.Пайшан (Фейеноорд) - 4 <br>
                М.Салах (Ливерпуль) - 4 <br>
                Ж.Кунде (Барселона) - 3
            </p>
            <a href="">Читать далее</a>
          </section>

          
        
        </div>
        <div class="imgarticles">
          <div class="imgbox">
            <img src="<?php echo get_template_directory_uri(). './Снимок экрана 2024-12-09 013609.png' ?>" alt="">
            <p>Полный обзор 5го тура: лучшие голы и моменты<br>&nbsp;<br><br>
              <a href="">Смотреть</a></p>
          </div>
          <div class="imgbox">
            <img src="<?php echo get_template_directory_uri(). './download (1).jpg' ?>" alt="">
            <p>Так кто же фаворит на победу в этом сезоне?<br>Букмекеры назвали топ-5 претендентов<br>&nbsp;<br>
               <a href="">Читать далее</a>
            </p>
          </div>
          <div class="imgbox">
            <img src="<?php echo get_template_directory_uri(). './download.jpg' ?>" alt="">
            <p>"Барселона" устроила погром мюнхенской "Баварии"<br>&nbsp;<br>
                Хет-трик на счету Рафиньи,гол Левандовского<br>&nbsp;<br>
                <a href="">Читать далее</a>
            </p>
          </div>
          <div class="imgbox">
            <img src="<?php echo get_template_directory_uri(). './Снимок экрана 2024-12-08 222426.png' ?>" alt="">
            <p>Вот как выглядит промежуточная таблица<br>&nbsp;<br>
               Ливерпуль продолжает серию из побед<br>
               Барса,Интер и Боруссия дышат в спину<br>&nbsp;<br>
               <a href="">Читать далее</a>
            </p>
          </div>
          <!-- запись -->
          <div class="imgbox">
          <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                
            <?php the_post_thumbnail_url(); ?>
            <?php the_content(); ?>
            
          <?php endwhile; ?>
          <?php else: ?>
            <?php endif; ?>
          </div>
        </div>
    </main>
    <?php get_footer(); ?> 
</body>
</html>