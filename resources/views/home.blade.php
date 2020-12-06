@include('header')
@include('sidebar')

<style>
    table {
        text-align: center;
    }

    td {
        width: 40px;
        height: 40px;
    }

    td input {
        width: 40px;
        height: 40px;
        text-align: center;
        font-size: 14px;
        color: #555555;
        
        text-transform: uppercase;
        font-family: 'Nunito', sans-serif;
    }

    .block {
        background-color: #555555;
    }

    .center-block {
        margin-left:auto;
        margin-right:auto;
        display:block;
    }

    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: red;
        opacity: 0.5; /* Firefox */
    }

    :-ms-input-placeholder { /* Internet Explorer 10-11 */
        color: red;
        opacity: 0.5; /* Firefox */
    }

    ::-ms-input-placeholder { /* Microsoft Edge */
        color: red;
        opacity: 0.5; /* Firefox */
    }

    .number {
        z-index: 10;
        position: absolute;
        padding: 3px 5px;
        opacity: 0.5;
        font-family: 'Nunito', sans-serif;
        font-size: 12px;
    }
</style>

<div class="container-fluid">

    <!-- Start Page Content -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-auto">
                        
                            <table class="tabel" cellpadding="2" cellspacing="7">
                                <div style="background-color: #555555;">
                                <tr>
                                    <td class="block"><span class="number">1</span><input class="d1" type="text" maxlength="1"></td>
                                    <td class="block"><span class="number">2</span><input class="d1 m1" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d1" type="text" maxlength="1"></td>
                                    <td class="block"></td>
                                    <td class="block"><input class="d2" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d2 m2" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d2" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d2" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d2" type="text" maxlength="1"></td>
                                </tr>
                                <tr>

                                    <td class="block"></td>
                                    <td class="block"><input class="m1" type="text" maxlength="1"></td>
                                    <td class="block"></td>
                                    <td class="block"></td>
                                    <td class="block"></td>
                                    <td class="block"><input class="m2" type="text" maxlength="1"></td>
                                    <td class="block"></td>
                                    <td class="block"></td>
                                    <td class="block"></td>
                                </tr>


                                <tr>

                                    <td class="block"></td>
                                    <td class="block"><input class="m1 d3" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d3" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d3" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d3 m3" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d3 m2" type="text" maxlength="1"></td>
                                    <td class="block"></td>
                                    <td class="block"></td>
                                    <td class="block"></td>
                                </tr>

                                <tr>
                                    <td class="block"></td>
                                    <td class="block"></td>
                                    <td class="block"></td>
                                    <td class="block"></td>
                                    <td class="block"><input class="m3" type="text" maxlength="1"></td>
                                    <td class="block"></td>
                                    <td class="block"></td>
                                    <td class="block"></td>
                                    <td class="block"></td>
                                </tr>

                                <tr>
                                    <td class="block"><input class="m4" type="text" maxlength="1"></td>
                                    <td class="block"></td>
                                    <td class="block"><input class="d4" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d4" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d4 m3" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d4" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d4" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d4 m5" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d4" type="text" maxlength="1"></td>
                                </tr>

                                <tr>
                                    <td class="block"><input class="m4" type="text" maxlength="1"></td>
                                    <td class="block"></td>
                                    <td class="block"></td>
                                    <td class="block"></td>
                                    <td class="block"></td>
                                    <td class="block"></td>
                                    <td class="block"></td>
                                    <td class="block"><input class="m5" type="text" maxlength="1"></td>
                                    <td class="block"></td>
                                </tr>

                                <tr>
                                    <td class="block"><input class="m4" type="text" maxlength="1"></td>
                                    <td class="block"></td>
                                    <td class="block"></td>
                                    <td class="block"><input class="d5 m6" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d5" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d5" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d5" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d5 m5" type="text" maxlength="1"></td>
                                    <td class="block"></td>
                                </tr>

                                <tr>
                                    <td class="block"><input class="m4" type="text" maxlength="1"></td>
                                    <td class="block"></td>
                                    <td class="block"></td>
                                    <td class="block"><input class="m6" type="text" maxlength="1"></td>
                                    <td class="block"></td>
                                    <td class="block"></td>
                                    <td class="block"></td>
                                    <td class="block"><input class="m5" type="text" maxlength="1"></td>
                                    <td class="block"></td>

                                </tr>

                                <tr>
                                    <td class="block"><input class="m4 d6" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d6" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d6" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d6 m6" type="text" maxlength="1"></td>
                                    <td class="block"></td>
                                    <td class="block"><input class="d7" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d7" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d7 m5" type="text" maxlength="1"></td>
                                    <td class="block"><input class="d7" type="text" maxlength="1"></td>

                                </tr>
                            </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End PAge Content -->

    <!-- .right-sidebar -->
    <div class="right-sidebar shw-rside">
        <div class="slimscrollright">
            <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
            <div class="r-panel-body">
                <ul id="themecolors" class="m-t-20">
                    <li><b>With Light sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                    <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                    <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                    <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                    <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                    <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                </ul>
                <ul class="m-t-20 chatonline">
                    <li><b>Chat option</b></li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img"
                                class="img-circle"> <span>Varun Dhavan <small
                                    class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img"
                                class="img-circle"> <span>Genelia Deshmukh <small
                                    class="text-warning">Away</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img"
                                class="img-circle"> <span>Ritesh Deshmukh <small
                                    class="text-danger">Busy</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img"
                                class="img-circle"> <span>Arijit Sinh <small
                                    class="text-muted">Offline</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img"
                                class="img-circle"> <span>Govinda Star <small
                                    class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img"
                                class="img-circle"> <span>John Abraham<small
                                    class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img"
                                class="img-circle"> <span>Hritik Roshan<small
                                    class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img"
                                class="img-circle"> <span>Pwandeep rajan <small
                                    class="text-success">online</small></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Right sidebar -->

</div>

<script>
    const btn = document.querySelectorAll("body button");
        
        btn.forEach(function (pil) {
            pil.addEventListener('click', function () {
                let namebtn = pil.getAttribute('name');
                geserCek(namebtn);
            });
        });
        
        function geserCek(nbtn) {
            const table = document.querySelectorAll('.' + nbtn);
            if (table[0].disabled == true) {
                autoNext(0, nbtn);
            } else {
                table[0].select();
            }
        
        
            for (let i = 0; i < table.length; i++) {
                table[i].addEventListener('input', function () {
                    if (i == table.length - 1) {
                        var concatString = catString(nbtn);
                        submitString(concatString, nbtn, table);
        
        
                    } else if (i == table.length - 2 && table[table.length - 1].disabled == true) {
                        var concatString = catString(nbtn);
                        submitString(concatString, nbtn, table);
        
                    } else {
                        autoNext(i, nbtn);
                        var concatString = catString(nbtn);
                        submitString(concatString, nbtn, table);
                    }
        
                });
        
            }
        }
        
        function autoNext(i, cn) {
            let d = document.querySelectorAll('.' + cn);
            if (d[i + 1].disabled == true) {
                d[i + 2].select();
        
            } else {
                d[i + 1].select();
            }
        
        }
        
        // concat input to string
        function catString(cn) {
            var concat = "";
            let d = document.querySelectorAll('.' + cn);
            for (let i = 0; i < d.length; i++) {
                concat += d[i].value;
            }
            return concat;
        }
        
        function submitString(concat, tipe, tabel) {
            if (concat.toUpperCase() == "ABC" && tipe == "d1") {
                pengulanganTabel(tabel);
            } else if (concat.toUpperCase() == "BCA" && tipe == "m1") {
                pengulanganTabel(tabel);
            } else if (concat.toUpperCase() == "ETNIS" && tipe == "d2") {
                pengulanganTabel(tabel);
            } else if (concat.toUpperCase() == "ADERA" && tipe == "d3") {
                pengulanganTabel(tabel);
            } else if (concat.toUpperCase() == "TKA" && tipe == "m2") {
                pengulanganTabel(tabel);
            } else if (concat.toUpperCase() == "RAM" && tipe == "m3") {
                pengulanganTabel(tabel);
            } else if (concat.toUpperCase() == "LAMPUNG" && tipe == "d4") {
                pengulanganTabel(tabel);
            } else if (concat.toUpperCase() == "EROPA" && tipe == "m4") {
                pengulanganTabel(tabel);
            } else if (concat.toUpperCase() == "NOBEL" && tipe == "m5") {
                pengulanganTabel(tabel);
            } else if (concat.toUpperCase() == "LALAB" && tipe == "d5") {
                pengulanganTabel(tabel);
            } else if (concat.toUpperCase() == "LAN" && tipe == "m6") {
                pengulanganTabel(tabel);
            } else if (concat.toUpperCase() == "AREN" && tipe == "d6") {
                pengulanganTabel(tabel);
            } else if (concat.toUpperCase() == "BALI" && tipe == "d7") {
                pengulanganTabel(tabel);
            }
        }
        
        function pengulanganTabel(table) {
            for (let j = 0; j < table.length; j++) {
                table[j].disabled = true;
            }
        }
</script>
@include('footer');