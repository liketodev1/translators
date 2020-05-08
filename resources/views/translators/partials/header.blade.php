<!--start header-->
<header class="container-fluid">
    <div class="header">
        <div class="row">
            <div class="col-2">
                <a href="/">
                    <img class="logo" src="{{ asset('img/logo-t.png') }}" alt="Talk Native">
                </a>
            </div>
            <div class="col-8">
                <div class="row no-gutters">
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Find jobs"
                                   aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-search" type="button">Button</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <ul class="nav">
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
                    </div>
                </div>
            </div>
            <div class="ml-auto">
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn message-isset"><img src="{{ asset('img/messages.svg') }}" alt="messages"></button>
                    <button type="button" class="btn"><img src="{{ asset('img/bell.svg') }}" alt="notifications"></button>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn  dropdown-toggle" data-toggle="dropdown"
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
    </div>
</header>
<!--end header-->
