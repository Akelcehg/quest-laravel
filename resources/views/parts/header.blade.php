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