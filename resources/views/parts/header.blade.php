<div style="width: 100%; height: 100%; background: url('/img/backgrounds/quests/witch.jpg') no-repeat center; background-color: black;
box-shadow: inset 0px 0px 30px 30px rgba(0,0,0,0.9);
">
    <header>
        <div class="logo">
            <img src="/img/logo.png"/>
        </div>

        <div class="address">
            <p>8 ул. Водопроводная 1 А</p>
        </div>

        <div class="menu-dropdown">
            <p class="cabinet-icon">ВОЙТИ</p>
            <p class="icon"><a href="javascript:void(0);" onclick="setNav()">&#9776;</a></p>
        </div>

        <nav>
            <ul class="nav-menu" id="navigation">
                <li><a href="/">ГЛАВНАЯ</a></li>
                <li>{{Html::link('/quests','КВЕСТЫ')}}</li>
                <li>{{Html::link('/franchise','ФРАНШИЗА')}}</li>
                <li>{{Html::link('/about','О НАС')}}</li>
                <li>{{Html::link('/contact','КОНТАКТЫ')}}</li>
            </ul>
        </nav>

    </header>
    <section class="intro">
        <div class="layer">
        </div>
        <div class="section-content">

            <h1 class="heading">ВЫБРАТЬСЯ ЗА 60 МИНУТ</h1>
            <a href="#" type="button" class="quest-button">CHOSE YOUR MISSION</a>
        </div>
    </section>
</div>

<script>
    function setNav() {
        var x = document.getElementById("navigation");
        if (x.className === "nav-menu") {
            x.className += " responsive";
        } else {
            x.className = "nav-menu";
        }
    }

</script>