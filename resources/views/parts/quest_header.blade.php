<div class="quest-bg">
    {{--<div style="width: 100%; height: 100%; background: url({{$background_image}}) no-repeat center; background-color: black;
            width: 100%;
            height: 640px;
            background-size: cover;
            background-position: center;
            box-shadow: inset 0px 0px 100px 100px rgba(0,0,0,0.9);
            "></div>--}}

    {{--<div style="background: url({{$background_image}});
            display: block;
            position: absolute;
            top: 0px;
            display: block;
            width: 100%;
            z-index: -1;
            height: 650px;
            background-size: cover;
            background-position: center;
            display: none;
            "></div>--}}

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
    <div id="mobile" style="background-image: url({{$background_image}});">
        <img src="{{$background_image}}" alt="Фотография квеста «Тайна заброшенного приюта»">
    </div>

    <div id="desktop" style="background: url({{$background_image}});
            background-position: center;background-size: cover;
            "></div>

</div>

<section class="intro">
    <div class="section-content">
        <h1 class="heading">{{ $heading }}</h1>
    </div>
</section>

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