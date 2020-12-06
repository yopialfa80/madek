<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>

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
        text-transform: uppercase;
    }

    .block {
        background-color: #000;
    }

    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            {{-- <div class="col align-self-center">
                <h4>Mendatar</h4>
                <div class="d-flex flex-row align-items-baseline">
                    <div class="pr-2">
                        <p>1. Nama baterai</p>
                    </div>
                    <div class="pr-2"><button type="button" name="d1"
                            class="btn btn-primary btn-sm align-self-center">PILIH</button>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-baseline">
                    <div class="pr-2">
                        <p>2. Suku Bangsa</p>
                    </div>
                    <div class="pr-2"><button type="button" name="d2"
                            class="btn btn-primary btn-sm align-self-center">PILIH</button>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-baseline">
                    <div class="pr-2">
                        <p>3. Nama Penyanyi</p>
                    </div>
                    <div class="pr-2"><button type="button" name="d3"
                            class="btn btn-primary btn-sm align-self-center">PILIH</button>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-baseline">
                    <div class="pr-2">
                        <p>4. Provinsi paling selatan di Sumatera</p>
                    </div>
                    <div class="pr-2"><button type="button" name="d4"
                            class="btn btn-primary btn-sm align-self-center">PILIH</button>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-baseline">
                    <div class="pr-2">
                        <p>5. Sayuran yang dimakan mentah</p>
                    </div>
                    <div class="pr-2"><button type="button" name="d5"
                            class="btn btn-primary btn-sm align-self-center">PILIH</button>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-baseline">
                    <div class="pr-2">
                        <p>6. Pohon jenis palem yang umbut batangnya mengandung sagu yang dapat dimakan</p>
                    </div>
                    <div class="pr-2"><button type="button" name="d6"
                            class="btn btn-primary btn-sm align-self-center">PILIH</button>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-baseline">
                    <div class="pr-2">
                        <p>7. Objek wisata Indonesia Terpopuler di Dunia</p>
                    </div>
                    <div class="pr-2"><button type="button" name="d7"
                            class="btn btn-primary btn-sm align-self-center">PILIH</button>
                    </div>
                </div>
            </div> --}}
            <div class="col">
                <table class=" tabel">
                    <tr>
                        <td class="block"><input class="d1" type="text" maxlength="1"></td>
                        <td class="block"><input class="d1 m1" type="text" maxlength="1"></td>
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
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="tts.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
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
</body>

</html>