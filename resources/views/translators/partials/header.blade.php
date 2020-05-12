<!--start header-->
<header class="container-fluid no-gutters p-0">
    <div class="header-t">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="/" class="navbar-brand logo">
                <img class="" src="{{ asset('img/logo-t.png') }}" alt="Talk Native" width="129" height="28">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="input-group search-block">
                    <input type="text" class="form-control" placeholder="Find jobs"
                           aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-search" type="button">Search</button>
                    </div>
                </div>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Help</a>
                    </li>

                </ul>
                <div class="my-2 my-lg-0 ml-auto">
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn message-isset">
                            <img src="{{ asset('img/messages.svg') }}" alt="messages">
                        </button>
                        <button type="button" class="btn"><img src="{{ asset('img/bell.svg') }}" alt="notifications"></button>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn  dropdown-toggle"
                                    data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('img/Single.png') }}" alt="avatar">
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="#">Dropdown link</a>
                                <a class="dropdown-item" href="#">Dropdown link</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </nav>
    </div>
</header>
<!--end header-->
