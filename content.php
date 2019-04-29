<!-- main -->
<div id='main'>
<!-- slider -->
<div class="main_slider">
    	<div class="slide" style="background-image: url(./img/second.jpg);">
    		<div class="main_usl">
                <div class="main_usl_title">У нас вы найдете</div>
    			<div class="usl" v-on:click="usl = 'gr'">
                    <div class="usl_tag">Групповые занятия</div>
    				<div class="usl_logo"><div class="fa fa-users"></div></div>
    				<div class="usl_info">Уникальные программы, направленные на улучшение физического состояния</div>
    			</div>
    			<div class="usl" v-on:click="usl = 'tr'">
    				<div class="usl_tag">Тренажерный зал</div>
                    <div class="usl_logo"><div class="fa fa-bolt"></div></div>
    				<div class="usl_info">Силовая зона, кардио зона, большой выбор тренажёров.</div>
    			</div>
    			<div class="usl" v-on:click="usl = 'pr'">
                    <div class="usl_tag">Персональный тренинг</div>
    				<div class="usl_logo"><div class="fa fa-user"></div></div>
    				<div class="usl_info">Индивидуальная программа, разработанная специально для вас</div>
    			</div>
    			<hr>
    			<div class="usl_type2">
                    <div class="usl_tag">Фитнес-тестирование</div>
    				<div class="usl_logo"><div class="fa fa-star"></div></div>
    				<div class="usl_info">Тестирование организма и подбор персональных нагрузок.</div>
    			</div>
    			<div class="usl_type2">
                    <div class="usl_tag">Фитнес-бар</div>
    				<div class="usl_logo"><div class="fa fa-coffee"></div></div>
    				<div class="usl_info">Здесь можно восстановить силы после тренировки с помощью вкусной и полезной еды.</div>
    			</div>
    		</div>
    	</div>
    	<div class="slide" style="background-image: url(./img/third.jpg);">
            <div class="main_reason">
                <div class="main_reason_title">Почему мы?</div>
                <ul class="reason">
                    <li>В нашем фитнес-клубе максимально индивидуальный подход к каждому клиенту.</li>
                    <li>Самый сильный состав инструкторов с огромным опытом, знаниями только у нас!</li>
                    <li>У нас найдется занятие для каждого члена Вашей семьи любого возраста!</li>
                    <li>В нашем фитнес-клубе постоянно действуют интересные акции и предложения.</li>
                    <li>Проводить время вместе с нами полезно не только во время тренировок, но и на спортивных мероприятиях!</li>
                    <li>Комфорт как для «фитнесистов » со стажем, так и для новичков.</li>
                    <li>Неповторимая атмосфера уюта и доброжелательности.</li>
                </ul>
            </div>
        </div>
  	</div>
<!-- slider end -->
<!-- zone -->
    <div class="zone_gr" v-if="usl == 'gr'"></div>
    <div class="zone_gr" v-if="usl == 'tr'"></div>
    <div class="zone_gr" v-if="usl == 'pr'"></div>
<!-- zone end -->
<!-- form -->
    <div class="form_main">
        <div class="form_title">ЗАПИСАТЬСЯ СЕЙЧАС</div>
        <div class="form_button" v-on:click="form = true">Записаться</div>
    </div>
    <div class="form" v-if="form == true">
        <form action="index.php" method="POST">
            Имя
            <input type="text" name="Firstname">
            Фамилия
            <input type="text" name="Secondname">
            телефон
            <input type="number" name="telephone">
            < 14 <input type="radio" name="low"> 14-18<input type="radio" name="mid">  >18 <input type="radio" name="high">
            <input type="checkbox" name="consent">Я согласен на обработку персональных данных в соответствии с условиями, указанными в  пользовательском соглашении
            <input type="submit" value="Отправить" name="submit"> <input type="button" name="back" value="Отмена" v-on:click="form = false" >
        </form>
    </div>
<!-- form end -->
</div>
<!-- main end -->