<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подати оголошення на продаж авто</title>

    <!-- Шрифты с Google Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

	<!-- Стили сайта -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
     
    
</head>
<body>

    <?php
        require_once "db.php";
    ?>
    
    <nav class="navbar">
		<div class="container">
			<a href="#" class="navbar-brand"><img src="img/logo.png" alt="logo"></a>

            <div class="navbar-menu"></div>
                <div class="inform">
                    <h1>Продати машину на RST</h1>
                    <p><em> Це сторінка подачі оголошення про продаж автомобіля на сайт RST. Вкажіть дані Вашого авто яке хочете продати в анкеті.</em></p>
                </div>
 
            
                <a class="enter" href="#">

                    <img src="img/klient.png" alt="icon">
                    <span>Увійти</span>
                </a>

                <a class="advert" href="#">Подати оголошення</a>
            </div>

			
		</div>
	</nav>

    <main>
        <div class="mid-page">
            <div class="advert-main">
                <h3>Введіть дані</h3>


                <div class="form">
                    <form action="add.php" method="POST">
                        <div class="title">
                            <span>Марка машини</span>
                            <input type="text" name="title" placeholder="Приклад: Ford">
                        </div>

                        <div class="price">
                            <span>Ціна</span>
                            <input type="tel" name="price">
                        </div>

                        <div class="engine">
                            <span>Об'єм двигуна</span>
                            <span class="engine-info">Приклад: 1600</span>
                            <input type="tel" name="engine">
                            
                        </div>

                        <div class="fuel">
                            <span>Оберіть паливо</span>
                            <select name="fuel" >
                                <option value="Бензин">Бензин</option>
                                <option value="Дизель">Дизель</option>
                                <option value="Газ/Бензин">Газ/Бензин</option>
                                <option value="Гібрид">Гібрид</option>
                                <option value="Електро">Електро</option>
                                <option value="Водень">Водень</option>
                            </select>
                        </div>

                        <div class="desc">
                        <textarea name="descr" placeholder="Опис"></textarea>
                        </div>

                        <div class="owners">
                            <p>Попередні власники машин</p>
                            <span>Власник 1</span>
                            <input type="text" name="old_owner_1">
                            <br>
                            <span>Власник 2</span>
                            <input type="text" name="old_owner_2" placeholder="Не обов'язково">
                            <br>
                            <span>Власник 3</span>
                            <input type="text" name="old_owner_3" placeholder="Не обов'язково">
                        </div>

                        <div class="button">
                            <button type="submit">Подати</button>
                        </div>
                    </form>
                </div>





            </div>
            <div class="support">
                <h3>Тех. підтрика <span class="logo-text">RST</span></h3>
                
                <div class="phone-number">
                    <a href="#">
                        <img src="img/vodaphone.png" alt="vodaphone">
                        <span>050 123 4567</span>
                    </a>
                    <a href="#">
                        <img src="img/kyivstar.png" alt="kyivstar">
                        <span>096 123 4567</span>
                    </a>
                    <a href="#">
                        <img src="img/lifecell.png" alt="life">
                        <span>093 123 4567</span>
                    </a>

                    <p>Час роботи: з <strong> 7:00 </strong>до <strong> 23:00 </strong> год.</p>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <span>2023 by Veronika Lazareva</span>
    </footer>
    
</body>
</html>